=== Bing Maps for WordPress ===
Contributors: rgubby
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=rgubby%40googlemail%2ecom&lc=GB&item_name=Richard%20Gubby%20%2d%20WordPress%20plugins&currency_code=GBP&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: bing maps, wordpress, mapping
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.6

Bing Maps for WordPress allows you to place either a static or dynamic Bing map on your blog post with a simple shortcode

== Description ==

Bing Maps for WordPress allows you to create maps easily with a [bingMap] shortcode in your posts. You don't have to worry about how the maps are displayed, the plugin takes care of that. You can create dynamic maps that allow your visitors to pan and zoom, or static maps that don't have those features. You can create Road maps, Aerial views, Aerial views with roads marked on them, or even a 3D Birdseye view. 

**How to use - quick example**

Add a [bingMap] shortcode into a post, configure it, and you're done! Here is a quick example:

[bingMap location="Beunos Aires, Argentina" zoom="13"]

== Installation ==

1. To install through WordPress Control Panel:
	* Click "Plugins", then "Add New"
	* Enter "Bing Maps for Wordpress" as search term and click "Search Plugins"
	* Click the "Install" link on the right hand side against "Bing Maps for Wordpress"
	* Click the red "Install Now" button
	* Click the "Activate Plugin" link
	* Enter your Bing Maps API key into the settings page. You can get one from here [Bing Maps API Key Registration](http://msdn.microsoft.com/en-us/library/ff428642.aspx)
1. To download and install manually:
	* Upload the entire `bing-maps-for-wordpress` folder to the `/wp-content/plugins/` directory.
	* Activate the plugin through the `Plugins` menu in WordPress.
	* Enter your Bing Maps API key into the settings page. You can get one from here [Bing Maps API Key Registration](http://msdn.microsoft.com/en-us/library/ff428642.aspx)

== Screenshots ==

1. Dynamic Map

2. Static Map

== Frequently Asked Questions ==

= How do I use it? =

Once you have the plugin installed, edit a post, and use a shortcode of [bingMap] to create a Bing Map on the page.

If you just put `[bingMap]` on your page you'll get something, but it centers the map on Timbuktu, so you might want to change some attributes:

1. `location` - Specify where you want your map centered. Be as specific as you can, include the country code, an example would be "Birmingham, West Midlands, UK".
1. `width` - Define how wide you want your map to be. Default is 400px.
1. `height` - Define how high you want your map to be. Default is 400px.
1. `title` - Define a title for your map - displays above the map.
1. `locationtitle` - Override location title (dynamic map only)
1. `locationlink` - Set a URL for your title to link to (dynamic map only)
1. `type` - "static", or "dynamic". If you leave it blank, it will default to dynamic.
1. `maptype` - In static mode, options are: "Road", "Aerial" and "AerialWithLabels". In dynamic map mode, "Road", "Aerial", "AerialWithLabels" or "Birdseye". Default is "Road". 
1. `zoom` - Define the zoom level. the higher the more zoomed in. If you are in Birdseye mode, zoom is quite restricted. 
1. `pp` - Where to place a pushpin on your map. If you don't include a `pp` attribute, the center of the map will be used. Turn it off by setting `pp` to "false".
1. `pp*` - Add pushpins to your map. Use pp1="", pp2="" and so on. Bear in mind there is a limit to the number of pushpins you can actually have. If you're not in Birdseye mode, the map will automatically zoom out so all pushpins can display.
1. `ppt*` - Set the pushpin title (dynamic map only)
1. `ppd*` - Set the pushpin description (dynamic map only)
1. `ppl*` - Set the pushpin link (dynamic map only)

Here are a few examples:

* [bingMap location="Birmingham, West Midlands, UK" maptype="AerialWithLabels" zoom="15" description="Center of Birmingham, UK"]
* [bingMap type="static" location="Mexico City, Mexico" zoom="13"]
* [bingMap maptype="birdseye" location="Niagara Falls, Canada" width="650" height="300" pp="false"]
* [bingMap location="New York, USA" pp1="Philadelphia, USA"]

= Why won't my maps show at all? =

Have you signed up for a Bing Maps API key? And have you entered it in the settings page? If not, follow these steps:

1. [Sign up](http://msdn.microsoft.com/en-us/library/ff428642.aspx) for a Bing Maps API Key.
1. Enter it in the "Bing Maps for Wordpress" settings page - it's under Settings in your WordPress Control Panel.

= I've signed up, but I don't have an API key =

You have to go to the create/view keys section on the Bing Maps API signup - just create a key and enter your blog details.

= How do I change the style of the pushpin? =

At the moment, you can't if you're using a dynamic Bing map. But if you're using a static map, add ";5" (5 is the icon style) to the end of your pp attribute, so something like:
pp="Timbuktu;10"

For a full list of all icon styles for pushpins, check out [http://msdn.microsoft.com/en-us/library/ff701719.aspx](http://msdn.microsoft.com/en-us/library/ff701719.aspx)

= How do I style the map on my blog? =

All of the content is in a &lt;div&gt; container with a class of "bingMapsForWordpressContainer", the maps then sit inside a &lt;div&gt; with a class of "bingMapsForWordpress", so the structure looks a bit like this:

`<div class="bingMapsForWordpressContainer">
    <div class="bingMapsForWordpress">
        <span class="bingMapsForWordpressTitle">Map Title</span>
        ... map content is here ...
    </div>
</div>`

Reference any of these classes and IDs in your theme CSS and the maps will be styled - here is how to add a border to all your bing maps: 

`.bingMapsForWordpress{border:solid 2px red;}`

And here is how to style just the title:

`.bingMapsForWordpressTitle{font-weight:bold;}`

== Changelog ==

= 1.6 =
* Tested compatibility for WordPress 3.3.1
* Fixed issue when user does not have curl installed

= 1.5 =
* Added compatibility for WordPress 3.0.3
* Added tags for dynamic map titles, map title descriptions and map title links - thanks to Chris Witham for the code!

= 1.4 =
* Added uninstall option to remove option entry in DB

= 1.3 =
* Fixed bug with saving API key

= 1.2 =
* Fixed some more CSS issues by fixing settings fields

= 1.1 =
* Fixed CSS issue

= 1.0 =
* Added Bing Static Maps
* Added Bing Dynamic Maps