Code libraries to work with sharing buttons and corresponding intent URLs

## Email

Send an email

![Email](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/email.gif) <a href='mailto:?Subject=Sharing%20Buttons&Body=Code%20libraries%20to%20work%20with%20sharing%20buttons%0D%0Ahttps%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons' target='blank'>Email</a>

URL: `mailto:?Subject={$title.spaceencoded}&Body={$description.spaceencoded}%0D%0A{$url}`

## Tweet it

Twitter is a social networking and micro-blogging service that allows its users to send and read other users' updates (otherwise known as tweets), which are text-based posts of up to 140 characters in length.

![Tweet it](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/twitter.gif) <a href='http://twitter.com/home?status=Sharing+Buttons:+https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons' target='blank'>Tweet it</a>

URL: `http://twitter.com/home?status={$title}:+{$url}`

## Post to Google+

Share on Google Plus

![Post to Google+](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/googleplus.png) <a href='https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons' target='blank'>Post to Google+</a>

URL: `https://plus.google.com/share?url={$url}`

## Share on Facebook

Facebook is a social utility that connects people with friends and others who work, study and live around them. People use Facebook to keep up with friends, upload an unlimited number of photos, post links and videos, and learn more about the people they meet. 

![Share on Facebook](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/facebook.gif) <a href='http://www.facebook.com/sharer.php?&u=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&t=Sharing+Buttons' target='blank'>Share on Facebook</a>

URL: `http://www.facebook.com/sharer.php?&u={$url}&t={$title}`

## Share on LinkedIn

LinkedIn is a business-oriented social networking site. Founded in December 2002 and launched in May 2003, it is mainly used for professional networking. As of 2 November 2010, LinkedIn had more than 80 million registered users, spanning more than 200 countries and territories worldwide.

![Share on LinkedIn](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/linkedin.png) <a href='http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons&summary=Code+libraries+to+work+with+sharing+buttons' target='blank'>Share on LinkedIn</a>

URL: `http://www.linkedin.com/shareArticle?mini=true&url={$url}&title={$title}&summary={$description}`

## Reddit this

Post to Reddit

![Reddit this](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/reddit.gif) <a href='http://reddit.com/submit?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons' target='blank'>Reddit this</a>

URL: `http://reddit.com/submit?url={$url}&title={$title}`

## Add to Delicious

Delicious is a social bookmarking web service for storing, sharing, and discovering web bookmarks. 

![Add to Delicious](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/delicious.gif) <a href='http://delicious.com/save?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons' target='blank'>Add to Delicious</a>

URL: `http://delicious.com/save?url={$url}&title={$title}`

## Stumble!

Add to Stumble Upon social link sharing service 

![Stumble!](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/stumbleupon.gif) <a href='http://www.stumbleupon.com/submit?url=https://github.com/sergeychernyshev/Sharing-Buttons&title=Sharing+Buttons' target='blank'>Stumble!</a>

URL: `http://www.stumbleupon.com/submit?url={$url.raw}&title={$title}`

## Add to Google Bookmarks

Google Bookmarks feature lets you save shortcuts to your favorite webpages, and navigate to them in seconds. 

![Add to Google Bookmarks](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/google_bookmarks.png) <a href='http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons&annotation=Code+libraries+to+work+with+sharing+buttons&labels=share' target='blank'>Add to Google Bookmarks</a>

URL: `http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk={$url}&title={$title}&annotation={$description}&labels={$tags}`

## Seed Newsvine

Newsvine is a community-powered news website which draws content from its users and syndicated content from mainstream sources such as The Associated Press. Users can write articles, seed links to external content, and discuss news items submitted by both users and professional journalists. 

![Seed Newsvine](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/newsvine.gif) <a href='http://www.newsvine.com/_tools/seed&save?u=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&h=Sharing+Buttons' target='blank'>Seed Newsvine</a>

URL: `http://www.newsvine.com/_tools/seed&save?u={$url}&h={$title}`

## Post to Wordpress blog

Blogs based on Open Source Wordpress software, including hosted http://www.wordpress.com/ blogs. 

![Post to Wordpress blog](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/wordpress.org.png) <a href='{$wp-base.raw}wp-admin/press-this.php?u=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&t=Sharing+Buttons&s=Code+libraries+to+work+with+sharing+buttons' target='blank'>Post to Wordpress blog</a>

URL: `{$wp-base.raw}wp-admin/press-this.php?u={$url}&t={$title}&s={$description}`

## Create TinyURL

TinyURL is a first service that popularized URL shortening.

![Create TinyURL](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/tinyurl.gif) <a href='http://tinyurl.com/create.php?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons' target='blank'>Create TinyURL</a>

URL: `http://tinyurl.com/create.php?url={$url}`

## Shorten the URL using is.gd

is.gd is yet another URL shortener

![Shorten the URL using is.gd](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/isgd.png) <a href='http://is.gd/create.php?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons' target='blank'>Shorten the URL using is.gd</a>

URL: `http://is.gd/create.php?url={$url}`

## Google it

Google is the most popular keyword-based search engine

![Google it](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/google.png) <a href='http://www.google.com/search?q=Sharing+Buttons' target='blank'>Google it</a>

URL: `http://www.google.com/search?q={$query}`

## Search on Yahoo!

Yahoo! is the biggest portal and world-second option for people searching.

![Search on Yahoo!](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/yahoo.png) <a href='http://search.yahoo.com/search?p=Sharing+Buttons' target='blank'>Search on Yahoo!</a>

URL: `http://search.yahoo.com/search?p={$query}`

## Search using Bing

Microsoft's Bing search engine is popular keyword search engine.

![Search using Bing](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/bing.png) <a href='http://www.bing.com/search?q=Sharing+Buttons' target='blank'>Search using Bing</a>

URL: `http://www.bing.com/search?q={$query}`

## Search using Ask.com

Ask.com is the 4th most popular search engine

![Search using Ask.com](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/ask.png) <a href='http://www.ask.com/web?q=Sharing+Buttons' target='blank'>Search using Ask.com</a>

URL: `http://www.ask.com/web?q={$query}`

## Add to Gary's Guide

Gary's Guide is #1 Business Events Calendar In The World covering events in Technology, Media, Finance, Biotech, Cleantech, Entrepreneurship and more.

![Add to Gary's Guide](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/garysguide.gif) <a href='http://www.garysguide.com/events/new?event_title=Sharing+Buttons&event_description=Code+libraries+to+work+with+sharing+buttons&event_url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons' target='blank'>Add to Gary's Guide</a>

URL: `http://www.garysguide.com/events/new?event_title={$title}&event_description={$description}&event_url={$url}`

## Digg it

Digg is a social news website made for people to discover and share content from anywhere on the Internet, by submitting links and stories, and voting and commenting on submitted links and stories. Voting stories up and down is the site's cornerstone function, respectively called digging and burying. Many stories get submitted every day, but only the most Dugg stories appear on the front page.

![Digg it](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/digg.gif) <a href='http://digg.com/submit?url=https://github.com/sergeychernyshev/Sharing-Buttons' target='blank'>Digg it</a>

URL: `http://digg.com/submit?url={$url.raw}`

## Post to LiveJournal

Post it to LiveJournal blog or community.

![Post to LiveJournal](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/livejournal.png) <a href='http://www.livejournal.com/update.bml?usejournal=sergeyche&subject=Sharing+Buttons&event=Code+libraries+to+work+with+sharing+buttons' target='blank'>Post to LiveJournal</a>

URL: `http://www.livejournal.com/update.bml?usejournal={$journalname}&subject={$title}&event={$description}`

