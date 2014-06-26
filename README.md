AnchoredGallery
===============

A photoblog theme for Anchor CMS

-> Anchored Gallery

Anchored Gallery is a theme for Anchor CMS developed by Alexander Stavrinou (alexstv.com)
It's a theme for photographers or designers or really anyone with pictures they want to show
as the focal point of their blog

-> Demo
See it in action at http://alexstv.com/anchoredgallery/

-> Custom Fields 

image

Type: post
Field: image
Unique Key: image
Label: Main Image
File types: 
Image max width: 
Image max height: 

-> Custom Markdown

Post a full width image styled correctly using this tag:

[image]image link[/image]

-> Comments
Comments are supported and I think they're working right
-> Search
Searching is supported, search box in the footer

-> Custom post code (paste this into a post body to see this in action or go to http://alexstv.com/anchoredgallery/index.php/posts/bridge )

Use this code to show a large image in the body of a post: 

[image]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/image]

You can also post smaller images with this code:

[img]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/img]

Placing the images tag around your images will remove the side padding and since img uses 50% width two img tags in an images tag will fill across the width of the post.

[images]
[img]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/img]
[img]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/img]
[/images]

The icon tag creates a 25% width image:

[icon]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/icon]

It can also be placed within an images tag, 4 will fill the row. It can also be mixed with img tags.

[images]
[icon]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/icon]
[icon]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/icon]
[icon]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/icon]
[icon]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/icon]
[img]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/img]
[img]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/img]
[/images]

The centerimg tag posts an image in the center of the page without text on the sides.

[centerimg]http://alexstv.com/anchoredgallery/content/lvh407h.jpg[/centerimg]
