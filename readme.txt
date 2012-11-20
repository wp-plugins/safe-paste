=== Safe Paste ===
Contributors: samuelaguilera
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8ER3Y2THBMFV6
Tags: strip tags, html, tinymce, post content, editor, wysiwyg
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: 1.1.1
License: GPL2

Removes a lot of HTML tags from post and page content before inserting it to database. Preventing users to paste undesired HTML tags to content.

== Description ==

WordPress do a great job by default filtering potentially dangerous code inside your content. So this plugin is NOT about security.

But people can break your site design without compromising your security... That's the purpose of this little plugin.

Do you have users that creates content for you?. Do you own an online Magazine?

If you answer yes to at least one of the above questions, I'm sure you have minor design troubles in your site because of your users using copy/paste (ofcourse without using TinyMCE buttons to remove code) while not being aware of all the HTML tags they are pasting...

This plugin simply removes a lot of HTML tags (and HTML entities) from post and page content before inserting it to database. Preventing users (including you) to paste undesired HTML tags to the content.

It only does his work while you're editing your post/page (it can be in any status). So it'll do the job on the new post/pages you create after the activation of the plugin and in old content that you edit after the plugin activation.

These are the HTML tags that stays:

&lt;p&gt;
&lt;a&gt; (allowed attributes: href, title).
&lt;img&gt; (allowed attributes: src, alt, class).
&lt;h1&gt;
&lt;h2&gt;
&lt;h3&gt;
&lt;h4&gt;
&lt;h5&gt;
&lt;h6&gt;
&lt;blockquote&gt;
&lt;ol&gt;
&lt;ul&gt;
&lt;li&gt;
&lt;em&gt;
&lt;strong&gt;
&lt;del&gt;

Any other HTML tag (or attributes) should be removed.

= Features =

* <a href="http://en.wikipedia.org/wiki/KISS_principle">KISS</a> philosofy :)

= Requirements =

* WordPress 3.x or higher.
    	
== Installation ==

* Extract the zip file and just drop the contents in the <code>wp-content/plugins/</code> directory of your WordPress installation (or install it directly from your dashboard) and then activate the plugin from Plugins page.
* Nothing more! No settings page (for the moment), just activate or deactivate it.
  
== Frequently Asked Questions ==

= Will this plugin works in WordPress older than 3.x? =

Maybe... But the question is... WTF are you using anything older than that?

= Are you planning to add more features? =

Maybe adding a settings page to choose wich tags to remove or leave and setting an user level to apply the filter.

== Changelog ==

= 1.1.1 =

* Changed: Allow 'width' and 'height' for img tag. This allow to resize images in the WP editor.

= 1.1 =

* Changed: Now using WP function wp_kses instead of generic PHP strip_tags. This change also allow to use cforms plugin, that uses HTML comments to insert their forms (a very bad method by the way, should use shortcodes instead).
* Added: Allow only http and https protocols in post/page content.

= 1.0 =

* Initial release.

== Upgrade Notice ==

= 1.1.1 =
Changed: Allow 'width' and 'height' for img tag. This allow to resize images in the WP editor.
