<?
/**
 * SharingButtons class 
 */
class SharingButtons 
{
	public static $VariableModifiers = array();

	/**
	 * Extracts a list of variable names used in a string using {$aaa.bbb.ccc} template
	 * aaa portion becomes variable name
	 * bbb,ccc and other consequent portions separated by "." are variable modifiers and ignored
	 */
	public static function extractVariablesFromString($string)
	{
		$names = array();

		preg_match_all('/\{\$(?<name>[\w\d-]+)(\..*?)?\}/', $string, $matches);

		/**
		* We only need unique names
		*/
		foreach ($matches['name'] as $var_name)
		{
			$names[$var_name] = true;
		}

		return array_keys($names);
	}

	public static function substituteVariablesInString($string, $variables, $default_modifier = 'raw')
	{
		/*
		* If default modifier with name specified doesn't exist, use "raw" instead
		*/
		if (!array_key_exists($default_modifier, self::$VariableModifiers))
		{
			$default_modifier = 'raw';
		}

		/*
		* Finding all variables used in a string and their modifiers
		*/
		preg_match_all('/\{\$(?<name>[\w\d-]+)(?<modifiers>\.[\.\w\d-]+)?\}/', $string, $matches);

		$varcalls = array(); // variable calls in template
		$replacements = array(); // corresponding replacements
		foreach ($matches['name'] as $varname)
		{
			$varcall = array_shift($matches[0]);
			$varcalls[] = $varcall;

			// if this variable wasn't specified, replace with empty string
			if (!array_key_exists($varname, $variables))
			{
				$replacements[] = '';
				array_shift($matches['modifiers']);
				continue;
			}

			// Starting with value itself
			$replacement = $variables[$varname];

			$modifiers_string = array_shift($matches['modifiers']);

			// Modifying with each modifier in the row (there might be multiple modifiers)
			$modifiers = $modifiers_string !== '' ?
				split('\.', $modifiers_string) : array($default_modifier);

			foreach ($modifiers as $modifier)
			{
				if ($modifier == 'raw' || $modifier == '')
				{
					continue;
				}

				if (array_key_exists(strtolower($modifier), self::$VariableModifiers)) {
					$replacement = self::$VariableModifiers[strtolower($modifier)]
						->modify($replacement);
				}
			}
			$replacements[] = $replacement;
		}
		return str_replace($varcalls, $replacements, $string);
	}

	public static function areAllVariablesDefined($strings, $variables)
	{
		foreach ($strings as $string)
		{
			/*
			* Finding all variables used in a string
			*/
			preg_match_all('/\{\$(?<name>[\w\d-]+)(\.[\.\w\d-]+)?\}/', $string, $matches);

			foreach ($matches['name'] as $varname)
			{
				// if this variable wasn't specified, replace with empty string
				if (!array_key_exists($varname, $variables) || $variables[$varname] == '')
				{
					return false;
				}
			}
		}

		return true;
	}
}

/*
 * Variable modifiers
 */
abstract class VariableModifier
{
	public abstract function modify($value);
}

class UrlEncoder_VariableModifier extends VariableModifier
{
	public function modify($value)
	{
		return urlencode($value);
	}
}
 
class RemoveURLProtocol_VariableModifier extends VariableModifier
{
	public function modify($value)
	{
		return preg_replace('|^http://|', '', $value);
	}
}
 
class UrlSpaceEncoder_VariableModifier extends VariableModifier
{
	public function modify($value)
	{
		return preg_replace('/\+/', '%20', urlencode($value));
	}
}

class UrlUnderscoreEncoder_VariableModifier extends VariableModifier
{
	public function modify($value)
	{
		return preg_replace('/\+/', '_', urlencode($value));
	}
}

// static members can't be populated with objects so we need to set them separately
SharingButtons::$VariableModifiers = array(
	'urlencoded' => new UrlEncoder_VariableModifier(),
	'spaceencoded' => new UrlSpaceEncoder_VariableModifier(),
	'underscoreencoded' => new UrlUnderscoreEncoder_VariableModifier(),
	'noprotocol' => new RemoveURLProtocol_VariableModifier()
); 
