Code libraries to work with sharing buttons and corresponding intent URLs


## Tweet it

Twitter is a social networking and micro-blogging service that allows its users to send and read other users' updates (otherwise known as tweets), which are text-based posts of up to 140 characters in length

![Twitter icon](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/twitter.gif) [Tweet it](http://twitter.com/home?status=Sharing+Buttons:+https://github.com/sergeychernyshev/Sharing-Buttons)

URL: `http://twitter.com/home?status={$title}:+{$url}`

## Email
Send an email

![Email icon](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/email.gif) [Email](mailto:?Subject=Sharing%20Buttons&Body=Code%20libraries%20to%20work%20with%20sharing%20buttons%0D%0Ahttps://github.com/sergeychernyshev/Sharing-Buttons)

URL: `mailto:?Subject={$title.spaceencoded}&Body={$description.spaceencoded}%0D%0A{$url}`
