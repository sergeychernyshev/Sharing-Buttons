Code libraries to work with sharing buttons and corresponding intent URLs

## Tweet it

Twitter is a social networking and micro-blogging service that allows its users to send and read other users' updates (otherwise known as tweets), which are text-based posts of up to 140 characters in length.

![Tweet it](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/twitter.gif) [Tweet it](http://twitter.com/home?status=Sharing+Buttons:+https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons)

URL: `http://twitter.com/home?status={$title}:+{$url}`

## Email

Send an email

![Email](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/email.gif) [Email](mailto:?Subject=Sharing%20Buttons&Body=Code%20libraries%20to%20work%20with%20sharing%20buttons%0D%0Ahttps%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons)

URL: `mailto:?Subject={$title.spaceencoded}&Body={$description.spaceencoded}%0D%0A{$url}`

## List on Etsy

List an item on Etsy on-line craft and DIY storefront.

![List on Etsy](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/etsy.png) [List on Etsy](http://www.etsy.com/create_listing1.php)

URL: `http://www.etsy.com/create_listing1.php`

## Post to LiveJournal

Post it to LiveJournal blog or community.

![Post to LiveJournal](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/livejournal.png) [Post to LiveJournal](http://www.livejournal.com/update.bml?usejournal=sergeyche&subject=Sharing+Buttons&event=Code+libraries+to+work+with+sharing+buttons)

URL: `http://www.livejournal.com/update.bml?usejournal={$journalname}&subject={$title}&event={$description}`

## Add to Delicious

Delicious is a social bookmarking web service for storing, sharing, and discovering web bookmarks. 

![Add to Delicious](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/delicious.gif) [Add to Delicious](http://delicious.com/save?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons)

URL: `http://delicious.com/save?url={$url}&title={$title}`

## Share on Facebook

Facebook is a social utility that connects people with friends and others who work, study and live around them. People use Facebook to keep up with friends, upload an unlimited number of photos, post links and videos, and learn more about the people they meet. 

![Share on Facebook](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/facebook.gif) [Share on Facebook](http://www.facebook.com/sharer.php?&u=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&t=Sharing+Buttons)

URL: `http://www.facebook.com/sharer.php?&u={$url}&t={$title}`

## Add to Google Bookmarks

Google Bookmarks feature lets you save shortcuts to your favorite webpages, and navigate to them in seconds. 

![Add to Google Bookmarks](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/google_bookmarks.png) [Add to Google Bookmarks](http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons&annotation=Code+libraries+to+work+with+sharing+buttons&labels=share)

URL: `http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk={$url}&title={$title}&annotation={$description}&labels={$tags}`

## Seed Newsvine

Newsvine is a community-powered news website which draws content from its users and syndicated content from mainstream sources such as The Associated Press. Users can write articles, seed links to external content, and discuss news items submitted by both users and professional journalists. 

![Seed Newsvine](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/newsvine.gif) [Seed Newsvine](http://www.newsvine.com/_tools/seed&save?u=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&h=Sharing+Buttons)

URL: `http://www.newsvine.com/_tools/seed&save?u={$url}&h={$title}`

## Reddit this

Post to Reddit

![Reddit this](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/reddit.gif) [Reddit this](http://reddit.com/submit?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons)

URL: `http://reddit.com/submit?url={$url}&title={$title}`

## Stumble!

Add to Stumble Upon social link sharing service 

![Stumble!](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/stumbleupon.gif) [Stumble!](http://www.stumbleupon.com/submit?url=https://github.com/sergeychernyshev/Sharing-Buttons&title=Sharing+Buttons)

URL: `http://www.stumbleupon.com/submit?url={$url.raw}&title={$title}`

## Post to Wordpress blog

Blogs based on Open Source Wordpress software, including hosted http://www.wordpress.com/ blogs. 

![Post to Wordpress blog](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/wordpress.org.png) [Post to Wordpress blog]({$wp-base.raw}wp-admin/press-this.php?u=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&t=Sharing+Buttons&s=Code+libraries+to+work+with+sharing+buttons)

URL: `{$wp-base.raw}wp-admin/press-this.php?u={$url}&t={$title}&s={$description}`

## Create TinyURL

TinyURL is a first service that popularized URL shortening.

![Create TinyURL](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/tinyurl.gif) [Create TinyURL](http://tinyurl.com/create.php?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons)

URL: `http://tinyurl.com/create.php?url={$url}`

## Shorten the URL using is.gd

is.gd is yet another URL shortener

![Shorten the URL using is.gd](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/isgd.png) [Shorten the URL using is.gd](http://is.gd/create.php?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons)

URL: `http://is.gd/create.php?url={$url}`

## Google it

Google is the most popular keyword-based search engine

![Google it](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/google.png) [Google it](http://www.google.com/search?q=Sharing+Buttons)

URL: `http://www.google.com/search?q={$query}`

## Search on Yahoo!

Yahoo! is the biggest portal and world-second option for people searching.

![Search on Yahoo!](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/yahoo.png) [Search on Yahoo!](http://search.yahoo.com/search?p=Sharing+Buttons)

URL: `http://search.yahoo.com/search?p={$query}`

## Search using Bing

Microsoft's Bing search engine is popular keyword search engine.

![Search using Bing](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/bing.png) [Search using Bing](http://www.bing.com/search?q=Sharing+Buttons)

URL: `http://www.bing.com/search?q={$query}`

## Search using Ask.com

Ask.com is the 4th most popular search engine

![Search using Ask.com](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/search/ask.png) [Search using Ask.com](http://www.ask.com/web?q=Sharing+Buttons)

URL: `http://www.ask.com/web?q={$query}`

## Add to Gary's Guide

Gary's Guide is #1 Business Events Calendar In The World covering events in Technology, Media, Finance, Biotech, Cleantech, Entrepreneurship and more.

![Add to Gary's Guide](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/garysguide.gif) [Add to Gary's Guide](http://www.garysguide.com/events/new?event_title=Sharing+Buttons&event_description=Code+libraries+to+work+with+sharing+buttons&event_url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons)

URL: `http://www.garysguide.com/events/new?event_title={$title}&event_description={$description}&event_url={$url}`

## Digg it

Digg is a social news website made for people to discover and share content from anywhere on the Internet, by submitting links and stories, and voting and commenting on submitted links and stories. Voting stories up and down is the site's cornerstone function, respectively called digging and burying. Many stories get submitted every day, but only the most Dugg stories appear on the front page.

![Digg it](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/digg.gif) [Digg it](http://digg.com/submit?url=https://github.com/sergeychernyshev/Sharing-Buttons)

URL: `http://digg.com/submit?url={$url.raw}`

## Share on LinkedIn

LinkedIn is a business-oriented social networking site. Founded in December 2002 and launched in May 2003, it is mainly used for professional networking. As of 2 November 2010, LinkedIn had more than 80 million registered users, spanning more than 200 countries and territories worldwide.

![Share on LinkedIn](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/linkedin.png) [Share on LinkedIn](http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons&title=Sharing+Buttons&summary=Code+libraries+to+work+with+sharing+buttons)

URL: `http://www.linkedin.com/shareArticle?mini=true&url={$url}&title={$title}&summary={$description}`

## Post to Google+

Share on Google Plus

![Post to Google+](https://raw.githubusercontent.com/sergeychernyshev/Sharing-Buttons/master/icons/googleplus.png) [Post to Google+](https://plus.google.com/share?url=https%3A%2F%2Fgithub.com%2Fsergeychernyshev%2FSharing-Buttons)

URL: `https://plus.google.com/share?url={$url}`

