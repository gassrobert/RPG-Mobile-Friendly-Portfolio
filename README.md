# RPG Mobile Friendly Portfolio WordPress Theme

I created the RPG Mobile Friendly Portfolio WordPress Theme to serve as a theme for my own online portfolio. It is designed to display standard posts, dynamic gallery posts, link posts, image posts, video posts, and audio posts as well as profile information in the sidebar.

Just before creating this theme, I had spent a bunch of time styling bizdoconline.net with Bootstrap 3 so I decided to challenge myself by constructing all the CSS from scratch using Sass, with the exception of the carousel for the dynamic gallery posts, which uses the Bootstrap carousel. The experience definitely helped to improve my Sass skills.

On laptops and most tablets it shows a fixed sidebar on the left with a list of posts on the right. The sidebar is fixed on all pages, while the content on the right side changes from page to page and post to post.

# Fully Responsive Interface

On mobile devices the sidebar and the menu options disappear and the businessman icon is displayed. Clicking on the businessman icon causes a hidden sidebar to display with a mobile menu and the same options that would be displayed on a laptop. I decided to make a separate menu for mobile devices since there may be pages unsuitable for mobile devices in the laptop menu.

# Personal Data Custom Administration Page

The personal information in the left hand sidebar is entered from the custom WordPress administration page entitled Personal Data.

# Choice of Six Post Formats

There are six formats for the posts.

The first post format is the standard format, which is the default format. This displays the Featured Image in the listw.

If there is no Featured Image it merely shows the Excerpt.

The second post format is the gallery format. This takes images from within the post itself and displays them in a series of slides that can be clicked through. The images should all be rectangular and have a caption entered with a description that will appear in the dark area at the bottom of each slide. This was done using a modified form of the bootstrap 3 carousel, but that’s the only thing from bootstrap in this theme. The  rest of the CSS and Javascript were written by me.

The third post format is the link format and it’s the most basic of all. It merely displays a link icon with the title of the post beneath it and the link leads to a URL specified within the post.

The fourth post format is the image post format and it displays the Featured Image with a dark space at the bottom containing the Excerpt and the button over it in larger devices. In smaller devices, the image is no longer large enough to contain the title, excerpt, or button, so it is styled using a media query to look like the standard post format.


The fifth post format is the video post format and it displays a clickable video. I prefer using links to embedded Youtube videos, because it tends to be the simplest and least problematic way of displaying video content in web pages. Part of the problem with this however is that Youtube includes previews of other unrelated videos after the video is run. I dealt with this using the following jquery code.

$(“iframe”).each(function() {
var src = $(this).attr(‘src’);
$(this).attr(‘src’, src.replace(‘?feature=oembed’, ‘?rel=0’));
});

The audio post format is similar to the video post format, but it’s styled specifically for displaying audio content.

# The Featured Posts Custom Post Type

While it makes sense to show the most recent posts first in a portfolio, since the most recent work is more indicative of the person’s current capabilities than the earlier work, the most recent work may not always be the first thing a person wants potential employers to see. There may be an earlier project of more breadth and scope than the most recent post. For this reason I created a custom post type called Featured Posts. This custom post type functions just like the regular posts in this theme, but Featured Posts are displayed at the top of the first page of posts before all the regular posts.

One thing that occurred to me was that people may want to make featured posts into regular posts as they get older. Rather than reinventing the wheel, I found a perfectly good plugin for this called the Post Type Switcher. I merely include a recommendation for this plugin in the Edit Featured Post page and I employ it myself on my portfolio.