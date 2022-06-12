=== Social Media ===
Contributors: socialdude
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZWYMA8LFHGHCC
Tags: social media, facebook, instagram, youtube, twitter, share, social share, buttons, counter, pop-up, subscription, icons
Requires at least: 3.5
Tested up to: 5.6
Stable tag: 15.9

Super-easy to use and social media plugin which adds social media icons to your website with tons of customization features!

== Description ==

***The plugin is now ready for translation. If you speak a different language than English, please help us translate it! It's easy. Please email us at support at ultimatelysocial dot com and let us know to which language you want to translate it to. Thank you!***

This plugin is based on https://wordpress.org/plugins/ultimate-social-media-icons/, giving it even more functions and making it even easier to use at the same time.

Allows you to display social media icons on your website and tailor them to your needs.

You can add icons for RSS, Email, Facebook, Twitter, LinkedIn, Google+, Pinterest, Instagram, Youtube, "Share" (covering 200+ other social media platforms) and upload custom icons of your choice.

Additional features in this plugin:

- You can place icons also before posts
- You can place the icon next to your posts also on your homepage
- You can also choose to display the icon you picked before/after posts (not just a standard set)
- Placing the icon is easier than before (new third question)
- Several bugs fixed

As with its predecessor, you can:

- Pick from 16 different designs for your icons
- Give several actions to one icon (e.g. your facebook icon can lead visitors to your Facebook page, and also give visitors the opportunity to like your page)
- Decide to give your icons an animation (e.g. automatic shuffling, mouse-over effects) to make your visitors aware of them, increasing the chance that they follow/share your blog
- Allow visitors to subscribe to your blog by Email
- Add "counts" to your icons
- Decide to display a pop-up (on all or only on selected pages) asking people to follow/share you
- Select from many other customization features

The plugin is very easy to use as it takes you through the process step by step. Check out the screenshots.


Licensing: This WordPress plugin is constituted of two parts:
(1) The PHP and the HTML code are licensed under the GPLv3 license as the CMS platform - Wordpress - is. Please read the license terms here: https://www.gnu.org/licenses/gpl-3.0.html.
(2) All other parts of the plugin including, but not limited to the CSS code, images, and design are protected under international copyright law.

== Installation ==
Extract the zip file and drop the contents into the wp-content/plugins/ directory of your WordPress installation. Then activate the plugin from the plugins page.

Then go to plugin settings page and answer the first 3 questions. That's it.

Note: This plugin requires CURL to be activated/installed on your server (which should be the standard case). If you don't have it, please contact your hosting provider.

== Frequently Asked Questions ==

= Please also check the more comprehensive FAQ on https://www.ultimatelysocial.com/faq =


= I face fundamental issues (the plugin doesn't load etc.) =

Please ensure that:

- You're using the latest version of the plugin(s)
- Your site is running on PHP 5.4 or above
- You have CURL activated (should be activated by default)

If you're not familiar with those please contact your hosting company or server admin.

Please check if you have browser extensions activated which may conflict with the plugin. Known culprits include:

- Open SEO Stats (Formerly: PageRank Status) in Chrome
- Adblock Plus in Chrome
- Vine in Chrome

Either de-activate those extensions or try it in a different browser.

If the plugin setting's area looks 'funny' after an upgrade then please clear your cache with String+F5 (PC) or Command+R (Mac).

Please also try if the other plugin works: https://wordpress.org/plugins/ultimate-social-media-icons/

= I get error messages 'Error : 7', 'Error : 56', 'Error : 6' etc. =

Those point to a CURL-issue on your site. Please contact your server admin or your hosting company to resolve it.

= Icons don't show =

Please ensure you actually placed them (under question 3).

If only some icons show, but not all, then please clear your cache, and check if you may have conflicting browser extensions (e.g. 'Disconnect'-app in Chrome). Also Ad-Blockers are known culprits, please switch them off temporarily to see if that is the reason.

If the icon still don't show then there's an issue with your template. Please contact the creator of your template for that.

= Twitter share-counts are not displaying (anymore) =

Unfortunately, Twitter stopped providing that information.

= Changes don't get saved / Deleted plugin but icons still show =

Most likely you have the WP Cache plugin installed. Please de-activate and then re-activate it.

= Links don't work =

Please ensure you've entered the 'http://' at the beginning of the url. If the icon are not clickable at all there is most likely an issue with your template.

= I cannot upload custom icons =

Most likely that's because you've set 'allow_url_fopen' to 'off'. Please turn it to 'on' (or ask your server admin to do so, he'll know what to do).

= My Youtube icon (direct follow) doesn't work =

Please ensure that you've selected the radio button 'Username' when you enter a youtube username, or 'Channel ID' when you entered a channel ID.

= Aligning the icon (centered, left- or right-aligned) doesn't work =

The alignment options under question 5 align the icon with respect to each other, not where they appear on the page. Everything else is template work.

= Clicking on the RSS icon returns funny codes =

That's normal. RSS users will know what to do with it (i.e. copy & paste the url into their RSS readers).

= Facebook 'like'-count isn't correct =

When you 'like' something on your blog via facebook it likes the site you're currently on (e.g. your blog) and not your Facebook page.

Therefore it also doesn't show the number of your facebook followers ,however, that's something we're thinking about offering as well.

= Sharing doesn't take the right text or picture =

We use the codes from Facebook, Google+ etc. and therefore don't have any influence over which text & pic gets shared.

Note that you can define an image as 'Featured Image' which tells Facebook / Google etc. to take that one. You'll find this 'Featured Image' section in your blog's admin area where you can edit your blog post.

You can crosscheck which image Facebook will take by entering your url on https://developers.facebook.com/tools/debug/og/object/.

= The pop-up shows although I only gave my icon one function =

The pop-up only disappears if you've given your icons only a 'visit us'-function, otherwise, (e.g. if you gave it 'Like' (on facebook) or 'Tweet' functions) a pop-up is still needed because the buttons for those are coming directly from the social media sites (e.g. Facebook, Twitter) and we don't have any influence over their design.

= I selected to display icons after every post but they don't show =

Please ensure you selected to display them also on your blog homepage (under question 3).

= Plugin decreases my site's loading speed =

The USM and USM+ plugins are one of the most optimized social media plugins in terms of impact on a site's loading speed (optimized code, compressed pictures etc.).

If you still experience loading speed issues, please note that:

- The more sharing- and invite- features you place on your site, the more external codes you load (i.e. from the social media sites; we just use their code), therefore impacting loading speed. So to prevent this, give your icons only 'Visit us'-functionality rather than sharing-functionalities.

- We've programmed it so that the code for the social media icons is the one which loads lasts on your site, i.e. after all the other content has already been loaded. This mean: even if there is a decrease in loading speed, it does not impact a user's experience because he sees your site as quickly as before, only the social media icons take a bit longer to load.

There might be also other issues on your site which cause a high loading speed (e.g. conflicts with our plugins or template issues). Please ask your template creator about that.

= After moving from demo-server to live-server the follow/subscribe-link doesn't work anymore =

Please delete and install the plugin again.

If you already placed the code for a subscription form on your site, remove it again and take the new one from the new plugin installation.

= When I try to like/share via Facebook, I get error message 'App Not Setup: This app is still...' =

If you get the error message...

'App Not Setup: This app is still in development mode, and you don't have access to it. Switch to a registered test user or ask an app admin for permissions.'

...then most likely you're currently logged in with a business account on Facebook. Please logout, or switch to your personal account.

= There are other issues when I activate the plugin or place the icon =

Please check the following:

Please try the other plugin, i.e. if you use our USM plugin, please also try it with the USM+ plugin and vice versa.

The plugins require that CURL is installed & activated on your server (which should be the standard case). If you don't have it, please contact your hosting provider.

Please ensure that you don't have any browser extension activated which may conflict with the plugin, esp. those which block certain content. Known culprits include the 'Disconnect' extension in Chrome or the 'Privacy Badger' extension in Firefox.

If issues persist most likely your theme has issues which makes it incompatible with our plugin. Please contact your template creator for that.

= How can I see how many people shared or liked my post? =

You can see this by activating the 'counts' on the front end (under question 4 in the USM plugin, question 5 in the USM+ plugin).

We cannot provide you this data in other ways as it's coming directly from the social media sites. One exception: if you like to know when people start to follow you by email, then you can get email alerts. For that, please claim your feed (see question above).

= How can I change the 'Please follow & like us :)'? =

You can change it in the Widget-area where you dropped the widget on the sidebar. Please click on it (on the sidebar), it will open the menu where you can change the text.

If you don't want to show any text, just enter a space (' ').

= How can I remove the credit-link ('Powered by Ultimatelysocial')? =

Please note that we didn't place the credit link without your consent (you agreed to it when de-selecting the email-icon).

Open the first question in the plugin ('1. Which icons do you want to show on your site?'), on the level of the email-icon you see a link on the right hand side. Please click it to remove the credit link.

= Can I use a shortcode to place the button ? =

Yes, it's [DISPLAY_ULTIMATE_PLUS]. You can place it into any editor.

Alternatively, you can place the following into your codes: <?php echo do_shortcode('[DISPLAY_ULTIMATE_PLUS]'); ?>

= Can I also give the email-icon a 'mailto:' functionality? =

Yes, you can! For that please upload an email icon as custom icon, and then enter the mailto:-link (and email) under question 2.

To get the email-icon in the same design style you picked, activate it, then on the front-end, rightclick on the icon, and save it as picture. Upload that picture as custom icon.

= Can I also display the socialmedia icons vertically? =

Yes. For that please go to question 5 and select to display only 1 icon per row.

= How can I change the text on the 'visit us'-buttons? =

You have several options for this under question 6.

= Can I deactivate the icons on mobile? =

Yes, there's an option for that under question 6.

= How can I use two instances of the plugin on my site? =

You cannot use the same plugin twice ,however, you can install both the USM as well as the USM+ plugin (https://wordpress.org/plugins/ultimate-social-media-icons/). We've developed the code so that there are no conflicts and they can be used in parallel.

= Can I show a count or counter for my icons (e.g. how many people clicked on them) =

Yes, we offer this for the most popular icons. See question 5.

= I want to show the socialmedia buttons according to my preferred design style. Can I do this with this plugin? =

Yes, you have 16 possible design styles to pick from. Those are:
- Default icons
- Flat icons
- Thin icons
- Cute icons
- Cube or Cubes icons
- Chrome blue or grey icons
- Splash icons
- Orange icons
- Crystal icons
- Glossy icons
- Black icons
- Silver icons
- Shaded dark or light icons
- Transparent icons

You can also add custom bookmarks to your site. Pleae ensure that the size of the bookmark icon is not too large.

= I want to have my icons float on the page. Can I do this? =

Under question 3 you can choose how your buttons should display. There you can also decide to show them floating. Floating icons can look very cool!

Other options to place the icons are:

- Via shortcode
- Via widget / sidebar
- Before or after posts

= Which social media buttons do you support? =

You can upload any custom symbol or icon. Out of the box we offer the following:

- RSS
- Email
- Facebook / FB / Like / Share
- Google+ / Google Plus / Google + / Upvote / Share
- Instagram / Follow
- Twitter / Tweet / Share / Follow
- Pinterest / Follow / Pin-it
- LinkedIn
- Youtube
- Houzz
- Share (which includes many more social media sites)

= How does it work with the email subscription? =

The email subscription is an optional feature which allows your visitors to subscribe or follow you by email. Just select the email icon, and you subscribers will receive your new posts automatically by email (or other channels). It can be seen as an automatic newsletter which you can offer without any hassle.

You can also place a subscription form under question 8.

The messages are taken from your RSS feed. Make sure that your RSS feed is valid (however, that should be the standard case if you're using Wordpress). It is a rss2email tool, allowing subscribers to apply various filter opportunities. You can set up as many feeds as you want.

= Can I show a pop-up which asks users to share or subscribe? =

Yes, that is possible under question 7.

= Why do you call your plugin "Ultimate"? How is it better or more ultimate than the other plugins like Shareaholic, Addthis, Social media feather, Social media widget, Socialize, Mashare and so on? =

1.) The USM plugin has way more functions than the others
2.) It is much easier to use (especially bloggers who are just starting out need an easy interface)
3.) It offers more design icon or symbols styles
4.) It is 100% ethical
5.) Also advanced features

= How does the sharing work exactly? =

We apply the code from the social media sites so that your visitors can share your post or website. Therefore, we don't have any control over what gets shared, it is not our code. If you think that not the right picture gets shared, or the wrong text, then please contact the social media provider.

--

FOR NON-ENGLISH PLUGIN USERS

We are currently working on the translation of the plugin. however, you can already decide to show some of the icon in your language.

Please note that we're currently looking for volunteers to help us to translate the plugin into various languages. If you are interested, please email us at support at ultimatelysocial dot com and let us know into which language you could translate the plugin. Thank you!

= Informacion para las personas que hablan espagnol =

Este plugin es el mejor plugin en el mercado para colocar los iconos de redes sociales ( medios de comunicacion social ) en su pagina web.

Los botones permiten a los usuarios a compartir su sitio, o visitar su perfil en los medios sociales. Puede elegir entre muchos estilos de diseno de iconos y beneficiarse de muchas opciones de personalizacion.

Tambien le permite ofrecer una suscripcion a sus visitantes, para que puedan recibir sus mensajes por correo electronico de forma automatica.

El plugin es totalmente gratuito y muy facil de usar.

= Informacoes para pessoas que falam portugues =

Este plugin e o melhor plug-in no mercado para colocar icones de midia social em seu site.

Os botoes permitem que seus visitantes para compartilhar seu site, ou visite o seu perfil de midia social. Voce pode escolher de muitos estilos icone de design e beneficiar de muitas opcoes de personalizacao.

Ele tambem permite-lhe oferecer uma assinatura para seus visitantes, de modo que eles recebem suas mensagens por e-mail automaticamente.

O plugin e totalmente gratuito e muito facil de usar.


= Informationen fuer Menschen die deutsch sprechen =

Dieses Plugin ist das beste Plugin auf dem Markt auf Ihrer Webseite Social-Media-Symbole zu platzieren.

Die Icons lassen Sie Ihre Besucher Ihrer Website zu teilen, oder Ihre Social-Media Profil zu besuchen. Sie koennen aus vielen Design Optionen und Stilen waehlen und von vielen Individualisierungsmoeglichkeiten profitieren.

Es erlaubt Ihnen auch ein Abonnement fuer Ihre Besucher zu bieten, so dass sie automatisch Ihre Beitraege per E-Mail erhalten.

Das Plugin ist voellig kostenlos und sehr einfach zu bedienen.


= Informasi untuk orang berbicara bahasa Indonesia =

Plugin ini adalah plugin terbaik di pasar untuk menempatkan ikon media sosial di website Anda.

Tombol memungkinkan pengunjung Anda untuk berbagi situs Anda, atau kunjungi profil media sosial Anda. Anda dapat memilih dari berbagai gaya ikon desain dan manfaat dari banyak pilihan kustomisasi.

Hal ini juga memungkinkan Anda untuk menawarkan langganan untuk pengunjung Anda, sehingga mereka menerima posting Anda melalui email secara otomatis.

Plugin adalah gratis dan sangat mudah digunakan.


== Screenshots ==

1. After installing the plugin, you'll see this overview. You'll be taken through the easy-to-understand steps to configure your plugin

2. As a first step you select which icons you want to display on your website

3. Then you'll define what the icon should do (they can perform several actions, e.g. lead users to your facebook page, or allow them to share your content on their facebook page)

4. In a third step you decide where the icon should be placed: a.) via Widget, b.) Floating, c.) via Shortcode and/or d.) Before or after posts

5. You can pick from a wide range of icon designs

6. Here you can animate your main icons (automatic shuffling, mouse-over effects etc.), to make visitors of your site aware that they can share, follow & like your site

7. You can choose to display counts next to your icons (e.g. number of Twitter-followers)

8. There are many more options to choose from

9. You can also display a pop-up (designed to your liking) which asks users to like & share your site

== Changelog ==
= 15.9 =
* Folder naming fix.

= 15.8 =
* New: 	  Added new GAB platform
* Update: Popup target as per settings for Pinterest sharing
* Fixed:  jQuery conflict with Autoptimize
* Fixed:  Link target and duplicate image issue for Pinterest popup
* Fixed:  Pinterest count display issue
* Fixed:  Some minor fixes

= 15.7 =

= 15.6 =
* Update: Custom link issue fixed
* Update: Email subscription form issue fix

= 15.5 =
* Update: Vulnerability fixed
* Update: Banner + Carrousel + WP 5.7 fixes added
* Update: New FB visit and share icons added
* Update: Custom link issues fixed

= 15.4 =
* Update: updated share url to carry query string on sharing.
* Update: Save button error message corrected.
* Update: Responsive icon in custom post type.
* Update: Debug logs from console removed.
* Update: UI improvements in settigns page
* Update: Wordpress 5.7 compatibility.
* Update: PHP 8 compatibility - adjustments.

= 15.3 =
* Update: Wordpress 5.6 compatibility.
* Update: PHP 8 compatibility.
* Update: Finnish icons not showing issue solved.

= 15.2 =
* Update: solved dirname problem for older php.

= 15.1 =
* Update: New option to share icons from Gutenberg editor.
* Update: Widget elemento issue fixed.
* Update: Arabic icons not showing issue fixed.

= 15.0 =
* Update: UI Fixes.
* Update: Space between icons issue fixed.

= 14.9 =
* Update: Youtube and facebook counts retrive issue solved.
* Update: Woocomerce product image problem solved.
* Update: Sticky bar css issues fixed.

= 14.8 =
* Update: removed error header already sent.

= 14.7 =
* Update: Youtube API key.
* Update: Fixed Sticky bar css.

= 14.6 =
* Update: Youtube API ID.
* Update: Corrected widget css.
* Update: Css alignment fixed.

= 14.5 =
* Updated: Corrected a space issue.

= 14.4 =
* New:    New placement type "Sticky placement" added.
* Update: Bitly API updated to V4.
* Update: Corrected counts error for very large no of posts.
* Update: Lazyloaded icon now shows.
* Update: Corrected Css for IE and other browser.

= 14.3 =
* Update: LinkedIn follow counts removed.
* Update: Responsive icons in post issue resolved.
* Update: LinkedIn automatic language change option for visit icons.


= 14.2 =
* Update: Removed linkedin oEmbed conflict.
* Update: Corrected the body class problem.

= 14.1 =
* Update: Implemented follow.it.
* Update: CSS fixes.

= 14.0 =
* Update: Changed to follow.it.
* Update: Bitly slash remove.
* Update: The mobile placement option can't be deselected solved.
* Update: Plugin timestamp.
* Update: Wordpress compatablity to 5.4.0.

= 13.9 =
* Update: Added responsive icon for the woo-commerce.
* Update: Small css changes.

= 13.8 =
* Update: Icon Tooltip left right.
* Update: Optimized and Removed unused js.
* Update: Style improvemnt in admin section.
* Update: Updated the icon alignment.
* Update: Quotes in discription pinterest solved.
* Update: Solved the counts fetching for facebook.

= 13.7 =
* Update: Vertical icons with automatic tooltip on hover bottom fixed.
* Update: Fixed counts vertical alignment.

= 13.6 =
* Update: Icon Size Updated.
* Update: Icon placement corrected.
* Update: Icon Tooltip Automatic corrected.

= 13.5 =
* Update: Pinterest share error corrected.
* Update: vertical icons showing.
* Update: Alignments Icons per row corrected.

= 13.4 =
* Update: Pinterest trailing slash.
* Update: Added count format change option in Q6.
* Update: Pinterest Description.
* Update: Instagram count.
* Update: Shortcode don't change other alignment.
* Update: Icons will have good center placement.

= 13.3 =
* Update: Rss icon showing.
* Update: Fb trailing slash.
* Update: Hook priority value option.
* Update: Export and Import font and alignment changed.

= 13.2 =
* Update: Lazy load class added.

= 13.1 =
* Update: Added css for the icons.
* Update: var_dump in pinterest removed

= 13.0 =
* Update: Implemented import for old.
* Update: Pinterest url from create to create/button.
* Update: The ping function based on specificfeed recomondation.
* Update: Pinterest save with problem of #.
* Update: Removed the unused css and replaced the icon.
* Update: Mobile open in diffrent tab reset.
* Update: Linkedin mouseover text displays on empty solved.
* Update: Post page not selected fixed.

= 12.9 =
* Update: Import and export implemented for plus and premium.
* Update: Wordpress compatablity to 5.3.0.
* Update: Applied optional loadjs to youtube js.
* Update: Added the prefetch of the url.

= 12.8 =
* Update: Subscribe to youtube channel is working.
* Update: Plusses between words in description while Pinterest sharing is removed.

= 12.7 =
* Update: Solved plugin showing re-new notice after re-newal.
* Update: Solved wrong url in Image Over Sharing icon.
* Update: Separated Phone and Whatsapp Icon.
* Update: Security Patch in Wechat share for mobile devices.
* Update: Adjustment to some design elements.

= 12.6 =
* Update: Optimized the Mysql calls.
* Update: Yummly share count Implemented.
* Update: Current Tab reset solved.
* Update: Small improvements were done.
* Update: Updated meaningful error message for the errors.

= 12.5 =
* Update: Removed "+" from page title on pinterest description.
* Update: Implemnted the feed_id fetch on claim call.
* Update: Increased Timeout to decrease claiming issue.
* Update: Pinterest Icon on all images on mobile.
* Update: Removed deprecated scope from Instagram generate token call.
* Update: Instagram 0 counts solved.

= 12.4 =
* Update: Fixed cURL errors notifications on settings page.
* Update: Fixed Follow buttons and Subscribe Forms if curl is not enabled.
* Update: Moved all inline jQuery for better optimization of the site.
* Update: Updated better Messages on licance activation failure.
* Update: Facebook count logic updated for better stablity of the counts.
* Update: OG:image url tag from post featured image is updated to use the fullsize image
* Update: Fixed the popup when zoom is 150% and higher.

= 12.3 =
* New Feature: pinterest on hover image absolute for images with effects.
* Fixed Issue: pinterest image selector on popup.
* Fixed Issue: updating logic for Handling the pinterest image and description section in Q6 and post page
* Fixed Issue: Pinterest share sets title and discription from other options for the responsive icons.

= 12.2 =
* Fixed Issue: Fb limit reached corrected by checking the limit headers.
* Fixed Issue: Pinterest dumplcate images when sharing solved.
* Fixed Issue: Pinterest sharing not showing uploaded image from post/page.
* Fixed Issue: Typos corrected.

= 12.1 =
* New Feature: Option to use Featured Post image as Sharing image.
* Fixed Issue: Updated vk to use https.
* Fixed Issue: Problem with Pinterent hover icon patched.
* Fixed Issue: Licence Expiry notice after renewal removed.
* Fixed Issue: Q2 Validation before Q1 save prevented.
* Fixed Issue: Title set for image hover pinterest icon.
* Fixed Issue: Responsive icon now uses the target window set in Q6.

= 12.0 =
* New Feature: Youtube share button language change.
* Fixed Issue: Theme icons tagged for better support.
* Fixed Issue: Instagram icon corrected.
* Fixed Issue: Conditional calling of crons for faster response.
* Fixed Issue: no of icon in a row lessthan specified.
* Fixed Issue: stoped api call to backedend when not needed.

= 11.9 =
* Fixed Issue: Large Error log solved.
* Fixed Issue: Plugin Modernizer set in no conflict mode.
* Fixed Issue: Option 2 not upating on option1 save.
* Fixed Issue: Removed Depreceted google plus.
* Fixed Issue: most of the W3 validation Errros removed.

= 11.8 =
* Fixed Issue: Crashing site.

= 11.7 =
* Fixed issue: widget missalignment.
* Fixed issue: Solved the checkbox not loading and double loading problem .
* Fixed issue: Database errors removed made hidable.
* Fixed issue: Large error log problem solved.
* Fixed issue: Some compatablity issue with wordpress 5.2


= 11.6 =
* Fixed issue: New Icon type conflict removed.
* Fixed issue: Page moving to sidebar solved.
* Fixed issue: Widget sidebar error removed.

= 11.5 =
* New Feature: New Icon Type for before/after post and pages.
* Fixed issue: Fb count errors for cached counts.
* Fixed issue: Custom icon not able to delete.
* Fixed issue: Custom Icons and Custom Skin upload problem when relative url is switched on.
* Fixed issue: conflict in js due to jQuery.noConflict() corrected.
* Fixed issue: Ajax issue when rest api is disabled.

= 11.4 =
* New Feature: Custom social media scripts.
* Fixed Issue: Custom Icons not shown
* Fixed Issue: wechat icon not shon when multiple custom icons are selected.
* Fixed Issue: nonce implemented on all ajax calls.
* Fixed Issue: user Acess checked on all ajax calls.
* FIxed Issue: direct curl calls replaced with wp_remote_Calls for better management, stablity and compatablity.
* Fixed Issue: Youtube Button hides when hover over the share button.
* Fixed Issue: ajax_object conflict .
* Fixed Issue: Change in font weight to make note more visible.


= 11.3 =
* New Feature: Domain name change for commulative count.
* Fixed Issue: Count Error in pinterest.
* Fixed Issue: More destrictive Error Message for activation errors.
* Fixed Issue: Woo Comerce icons show hide option corrected.
* Fixed Issue: Solved conflict with old plugin for icon tooltip.
* Fixed Issue: share url update for yummly and pinterest when relative url filter is applied.
* Fixed Issue: youtube tooltip hides when hover for firefox.
* Fixed Issue: icons not rendering in tooltip.
* Fixed Issue: icon count not working on mobile.
* Fixed Issue: Wechat Icons not showing for icon themes other than default.

= 11.2 =
* Fixed Issue: Licence page made clearer.
* Fixed Issue: Google plus is deprecated.
* New Feature: Custom path to share option if relative path filters applied.
* Fixed Issue: Global tweet text getting preferd over individual tweet text.
* Fixed Issue: Corrected some changes to support legacy wordpress versions and legacy php.
* Fixed Issue: Increased minimum support of wordpress version from 3.0 to 3.5.

= 11.1 =
* Fixed Issue: Updated cummulative count to add both http and https counts rather than returnig returning max
* Fixed Issue: updated popup to allow overright to the font for popups

= 11.0 =
* New Feature: New Icon positions for woocomerce product pages.
* Fixed Issue: error key message on support page.

= 10.9 =
* Fixed Issue: Icons shown for only mobile icons.
* Fixed Issue: Default Licencing changed to SELLCODES.
* Fixed Issue: Show icons in the section2 for only mobile icons in section1.
* New Feature: Fb Messanger action update for desktop.


= 10.8 =
* Fixed Issue: fb messenger icon
* Fixed Issue: Fb and Twitter icons on ie
* New Feature: we chat qr share for desktop

= 10.7 =
* Fixed Issue: Ractangular FB icon not rendering in async js load.
* Fixed Issue: Bitly short url resulting in 404.

= 10.6 =
* Fixed Issue: Activation Problem
* Fixed Issue: Icons not centered in Widget.

= 10.5 =
* Fixed Issue: Updated Yummly and Houzz features
* Fixed Issue: Removed depricated Google Like.
* Fixed Issue: Include Exclude page restriction message for pinterest checbox.
* Fixed Issue: problem with icon suffle
* Fixed Issue: Problem with icon order in php-7.1
* Fixed Issue: Problem not showing icon in homepage.
* Fixed Issue: Problem Pinterest Hover Image displacement.
* New Feature: Whatsapp support for mobile and desktop using whatsapp API.
* New Feature: Support for Wechat Aded.


= 10.4 =
* Fixed Issue: Custom icons not getting uploaded in backend
* Fixed Issue: Pinterest custom skin icon in Question 4 not showing after upload in backend
* Fixed Issue: specificfeeds.com links changed to https

= 10.3 =
* Fixed Issue: No update shown in dashboard resolved.
* FIxed Issue: Custom icons not shown in front-end.

= 10.2 =
* Fixed Issue: Pinterest icon issue showed on hover of image.
* New feature: New icons added: Facebook messenger, Mix, OK(Odnoklassniki), Telegram, VK, Weibo, Xing.

= 10.1 =
* Fixed Issue: Animated icons links pointing to themed icons.
* Fixed Issue: Animated icons added in Question 4
* Fixed Issue: Error Default suppressed in some installations in plugin's settings.
* Fixed Issue: Empty mouseover text is allowed in Section 6.
* Fixed Issue: Facebook count becomes zero while showing on frontend.
* Fixed Issue: Custom Icon not getting uploaded.
* Fixed Issue: License Manager Error message on plugin activation.


= 10.0 =
* New feature: Custom icons added in Question 4->Mouse-Over effects-> Show other icons on mouse-over
* New feature: Pinterest button on images on hover
* Fixed Issue: Pinterest app creating tutorial updated
* Fixed Issue: Loading the third party libraries of social networks if needed

* Fixed Issue: Count warning on pages

= 9.9 =
* Fixed Issue: Pinterest icon displays count even if unchecked
* Fixed Issue: Errors & conflict with gallery plugin: Fatal error causing in admin
* Fixed Issue: Facebook count issues with caching. Count not displayed on pages having count > 1000
* Fixed Issue: Same name image upload issue with uploading custom icons
* Fixed Issue: Wrong order of icons on mobile
* New feature: New animations added in Question 4
* New feature: Its possible to upload gif as custom icon without loosing its animation

= 9.8 =
* Fixed Issue: Number of urls for fb count changed for facebook api batch call from 50 to 4950

= 9.7 =
* New Feature: Inclusion Exclusion rules for each icon type added in Question 3.
* Fixed Issue: Pintrest Manual counts not displayed.
* Fixed Issue: Missing Alt tags to some social icon images.
* Fixed Issue: Wrong share url when index.php in permalink.
* Fixed Issue: Wrong share url when plain permalink
* Fixed Issue: Facebook count issue :- Opimtized functionality & database for saving cached count

= 9.6 =
* Fixed issue:	Plugin settings not loading on Internet explorer.
* Fixed issue:  Error messages if user uploads pic not meeting criteria for social network
* Fixed issue:  Rectangle icons don't align centrally
* Fixed issue:	Users cannot see save button (custom icon upload) in plugin in settings in Question 4

= 9.5 =
* Fixed issue:	Custom icon setting doesn't work on mobile
* Fixed issue:  Count too far from icon
* Fixed issue:  Error message on selecting Google Plus sharing on custom archive page.
* Fixed issue:	Error messages due to error reporting

= 9.4 =
* Fixed issue: Exclusion settings doesn't work on mobile
* Fixed issue: double bitly links in twitter sharing
* Fixed issue: plugin js removing empty p tags

= 9.3 =
* Fixed issue: Facebook share not taking current url on custom author page
* Fixed issue: Icons cannot be made vertical

= 9.2 =
* Fixed issue: Facebook share opens in new window even if new tab is selected
* Fixed issue: bit.ly short link creation issue fixed
* New feature: New option added in Question 6 to give different order for icons on mobile

= 9.1 =
* New feature: New option added for adding icons on pages before page content under Question 3
* Fixed issue: "/" added before special character " ' " in popup text defined in Question 7
* Fixed issue: Author page url (/author/<username>) not getting shared

= 9.0 =
* Fixed issue: curl error on license activation on http sites
* Fixed issue: Page reload on icon click if not action is added
* Fixed issue: Page/Post not saving

= 8.9 =
* Fixed issue: Plugin's license check call prevented on every admin page
* New feature: New options added for click on icon link: 'New window & current tab' under Question 6

= 8.8 =
* Fixed issue: Pinterest cumulative count issue fixed

= 8.7 =
* New feature: Twitter followers count caching feature added in Question 5
* New feature: It's possible to make you icon links nofollow in Question 6
* New feature: User can now change facebook api calling interval for facebook like count caching under Question 5

= 8.6 =
* Fixed issue: Pinterest icon not shown correctly according to selected theme in Question 4

= 8.5 =
* New feature: It's possible to add multiline text for subscribe popup in Question 7
* New feature: It's possible to add minimum number for count to show count tooltip in Question 5
* Fixed issue: Icons not getting centered on device rotation for floating icons

= 8.4 =
* New feature: It's possible to place icons on specific pages using inclusion rules added in Question 3
* Fixed issue: Conflict with smart slider plugin fixed

= 8.3 =
* New feature: It's possible to add Privacy Policy link in subscription form in Question 8
* New feature: It's possible to turn off error reporting of site.
* Fixed issue: Facebook caching count fetch caused crossing facebook app limit

= 8.2 =
* Fixed issue: Admin locked out issue

= 8.1 =
* Fixed issue: Admin page load optimized

= 8.0 =
* Fixed issue: Not able to activate the plugin's license
* New feature: Its possible to cache the facebook count of webpage
* New feature: Added options to choose when to hide popup in Question 7
* Fixed issue: Icons were showing on category/tag pages when not selected to show
* Fixed issue: Printfriendly not working for custom icons
* Fixed issue: Pinterest count showing zero

= 7.9 =
* Rollback to 7.7

= 7.8 =
* New feature: Its possible to cache the facebook count of webpage
* New feature: Added options to choose when to hide popup in Question 7
* Fixed issue: Icons were showing on category/tag pages when not selected to show
* Fixed issue: Printfriendly not working for custom icons
* Fixed issue: Pinterest count showing zero

= 7.7 =
* Fixed issue: Aggregate count for facebook & pinterest
* Fixed issue: Link to support ticket updated

= 7.6 =
* Fixed issue: Validated email icon html with W3C standard
* Fixed issue: Twitter follower count
* Fixed issue: Aggregation of count of facebook

= 7.5 =
* Fixed issue: Whatsapp icon (on mobile) doesn't do anything on click
* Fixed issue: Plugin activation throws fatal error: function is_blog_page causesed conflict

= 7.4 =
* Fixed issue: Aligment of icons on mobile when placed with shortode
* Fixed issue: Code update to get Pinterest & Instagram count as updatation in API


= 7.3 =
* Fixed issue: Attributes for height missing in icons image
* Fixed issue: Contact us link set to underlined

= 7.2 =
* Fixed issue: Support ticket now linked to wordpress platform
* Fixed issue: Non-numeric value warning
* Fixed issue: CSS & JS not loading on plugin's setting page on SSL sites

= 7.1 =
* Fixed issue: SSL Mixed Content warning.

= 7.0 =
* Fixed issue: If user selected only Question 2->FB share option then it shouldn't show the tooltip.

= 6.9 =
* New feature: Custom CSS section added for removing the conflict at in admin of USM settings page

= 6.8 =
* Fixed issue: Ultimate Social Media â€“ Sharing text & pictures section showing even after Question 6->Sharing texts & pictures->Set it per post/page
setting is not active

= 6.7 =
* Fixed issue: On using excerpt on blog page showing icons twice
* Fixed issue: Question 5->Facebook accestoken option removed
* Fixed issue: Follow icon showing large

= 6.6 =
* Removed feature: Question 2->Facebook follow option removed as facebook stopped follow button
* Options added to use the activate plugin with  Sellcodes license key & Ultimatelysocial license key in same plugin.
* Pointing users to affiliate program banner added in plugin's admin setting page.

= 6.5 =
* Fixed issue: On update to plugin version 6.4 caused deactivation of plugin

= 6.4 =
* New feature: For whatsapp in Question 2 user can now place ${title} ${link} in Pre-filled message.
* New feature: In Question 6 user can enable/disable load of jquery library by plugin.

= 6.3 =
* Fixed issue: Ultimate Social Media – Sharing text & pictures not showing even after selecting option in Question 6->Set it per post/page

= 6.2 =
* Fixed issue: Image upload popup not opening for custom icon upload in Question 1
* Fixed issue: Alignments of before/after posts on mobile not changing according to selected setting in Question 3
* Fixed issue: Facebook og:description tag goes empty if content has double & single quotes
* Fixed issue: Incompatibility issue with NextGEN Gallery (Image not uploading in gallery when USM plugin is active)

= 6.1 =
* Fixed issue: Icons displayed on home page when show icons on blog pages setting is not active

= 6.0 =
* Fixed issue: 'Share' & 'Follow' words showing after post content
* Fixed issue: Icons shown on home page when home page is static page without selection on Question 3-> On Blog Pages

= 5.9 =
* Fixed issue: Icons updated for instagram & youtube as old icons having white lines around it
* Fixed issue: License expiration notice was coming even after license renewal
* Fixed issue: After deactivating the license from "USM Plugin License" page plugin will not be usable on usable

= 5.8 =
* Fixed issue: Post content getting empty if "Desktop/Mobile" option not selected after activating Question 3->Show them before or after posts
* Fixed issue: Twiiter sharing apostrophe not showing

= 5.7 =
* Fixed issue: Twitter sharing character issue if page/post title has double quotes

= 5.6 =
* Fixed issue: User was not able to delete selected picture in "Ultimate Social Media – Sharing text & pictures"
* Fixed issue: No media selection screen when adding picture in "Ultimate Social Media – Sharing text & pictures"

= 5.5 =
* Fixed issue: Question 4-> Custom icon upload issue when not selecing full size image
* Fixed issue: Question 6-> Custom tweet text apart from title & link not showing on single post page

= 5.4 =
* Fixed issue: Question 6 & Question 2 settings not saved on wp version below 4.7
* Fixed issue: Question 6-> Set global text & picture image overriding page/post's custom image

= 5.3 =
* Fixed issue: Custom icons not showing on frontend after update

= 5.2 =
* New features added in Question 3: It is possible to give different alignment of icons for every placement
* Fixed Issue: On category page twiiter icon (in floating icons) not sharing current page link
* Fixed Issue: Top position for floating icons not aligning icons on top properly on mobile
* Fixed Issue: Aggregate count for facebook not giving correct count
* Fixed Issue: Image cache issue of twitter card image
* Fixed Issue: Wrong shortner url links generated
* Fixed Issue: Design issues fixed for plugin's admin pages

= 5.1 =
* Fixed Issue: Text widget sidebar getting removed

= 5.0 =
* New features added in Question 1: Uploaded custom icons can be selected for mobile
* New features added in Question 3: It is possible now to give alignments for icons placed using shortcode

= 4.9 =
* Fixed Issue: Infinite spinning icon issue on plugin backend
* New features added in Quesion 6: It is possible now to share global image & text for sharing on social networks
* New features added in Quesion 2: It is possible now to open skype chat for sharing on skype

= 4.8 =
* Fixed Issue: Two twitter windows opening

= 4.7 =
* New features added in Quesion 3: It is possible to give vertical spacing for icons in "Show them before or after posts" for round icons
* Enhancement: Pinterest save button showed without tooltip if only Pin my blog on Pinterest (+1) is selected in Question 2
* Enhancement: If icons are not displyed on page, then plugin's JS & CSS files will not be added on page
* Fixed Issue: First icon alignment issue on mobile when floating icons displyed vertically


= 4.6 =
* New features added in Quesion 4: It is possible now to upload custom icons for all social icons
* New features added in Quesion 5: It is possible now to show count of followers, show count of pins, show count of pins specific to board from your pinterest account
* Fixed Issue: "Facebook «Visit»-icon" image not showing for other languages in Question 6: Language & Button-text

= 4.5 =
* New features added in Quesion 3: It is possible now to choose show icons on desktop & mobile for every position of icons: Widget, Float, Shortcodes, Before & After Posts

= 4.4 =
* New feature added in Question 3: New positions for floating icons "center-top", "center-bottom" added
* New feature added in Question 6: Cumulative count feature added for pinterest

= 4.3 =
* New feature added in Question 3: It is possible to now to give font-family,font-color for text before icons on before/after posts
* New feature added in Question 6: It is possible now to cumulate facebook counts when site is switched from http to https

= 4.2 =
* New feature added in Question 6: User can add custom CSS which will be used on website frontend
* Fixed Issue: Issue causing URL using get_the_ID() in wordpress version 4.8.1 fixed

= 4.1 =
* New feature added: In Question 2 it is possible now to add multiline text to share on email
* Fixed Issue: Custom icons upload issue on subdomain
* Fixed Issue: Custom text added from Question 6 not displaying while sharing on twiiter
* Fixed Issue: Missing font files added

= 4.0 =
* Fixed Issue: Spacing coming before first icon fixed
* Feature added in Question 3: New exclusion rule added to not show icons on custom post types & custom taxomonies

= 3.9 =
* Host header injection vulnerability fixed
* Custom icon upload issue fixed
* Feature added in Question 6: It is now possible to define for which social icons url shortening to be used (or not used)

= 3.8 =
* Fixed Issue: In Question 8 font color option for email field was not added
* Feature added in Question 2: Possible now to add link for SMS & CALL for custom icons

= 3.7 =
* Fixed Issue: Ultimate Social Media – Sharing text & pictures was not taking post excerpt when description box is set empty
* Fixed Issue: Breaking of og:description tags due to custom page/post editor
* Feature added in Question 7: Possible now to show subscription form in popup

= 3.6 =
* Feature added in Question 7: Possible now to show subscription form in popup

= 3.5 =
* Fixed Issue: Settings was not saved in Question 6 on safari
* Fixed Issue: Facebook open graph tags added by plugin not taken by facebook when other SEO plugins are adding their open gprah meta tags

= 3.4 =
* Fixed Issue: Facebook image, title & description sharing

= 3.3 =
* Fixed Issue: Sharing image issue on social network when website is on https
* New Feature added: You can also place rectangle icons with [DISPLAY_PREMIUM_RECTANGLE_ICONS] shortcode using the settings defined under Question 3.

= 3.2 =
* Fixing Issue: CSS issue fixed for feature in Question 3 in selection to show icons on category pages

= 3.1 =
* New feature added in Question 3: User can choose to show icons on category pages

= 3.0 =
* Fixed issue: Spaces in the sharing text get removed in section "Ultimate Social Media – Sharing text & pictures"

= 2.9 =
* Fixed issue: Twitter sharing only shows title page and link (nothing of custom text entered from Question 6)
* Fixed issue: All the social icons pointing to Whatsapp sharing link
* Fixed issue: Sharing with Whatsapp not displaying custom text entered from Question 2, displaying only the title and link

= 2.8 =
* Issue of wrong custom icon showing (Question 4) fixed
* Issue of sharing wrong article with email fixed
* New setting added to choose whether Ultimate Social Media Premium Plugin to set the open graph meta tags

= 2.7 =
* Possible now to define specifically which image, snippet text and tweet should get shared per post
* Issue of incorrect Facebook counts fixed
* Whatsapp issue fixed ("contact me"- link had issues)
* Wrong custom icon showing in specific cases

= 2.6 =
* Facebook counts issue fixed
* Youtube count issue fixed
* New Feature added: You can decide which pic & text to share to be shared on social media

= 2.5 =
* URL Shortner added for Twitter & Whatsapp sharing  ( In Question 6)
* Showing icons on custom posts or not feature added ( In Question 3)
* Error messages after upgrade fixed
* Facebook token issue fixed

= 2.4 =
* JS confliction issue fixed

= 2.3 =
* New feature "Twitter cards" added (allows pictures and snippets of the shared page to get added to Tweets)
* Incorrect error messages on dashboard removed
* Whatsapp sharing texts can now have special characters

= 2.2 =
* Claiming process optimized
* After activation of plugin you're directly taken to the plugin's settings page
* Click-to-call feature for custom icons enabled
* Facebook token issue fixed
* "Mandatory" removed from email and rss icons
* Error message if user is using outdated PHP version
* New option to place icons at end of pages
* New CURL error messages to point better to the specific issue
* Icons not underlined anymore (was a conflict with certain themes)

= 2.1 =
* New option to define the page which gets liked
* De-activation of certain sharing features sometimes left code on the site, fixed now
* W3C errors fixed
* Links changed from http to https

= 2.0 =
* Shortcode added to pull the url of the site the icon is on (relevant for turning custom icons into sharing icons)

= 1.9 =
* Limit for uploading custom icons increased - now up to 10 custom icons can be uploaded

= 1.8 =
* Instagram count issue fixed

= 1.7 =
* Possibility added to generate Facebook token, to display number of Facebook likes on page
* Error corrected which threw wrong error messages on front-end
* Widget re-named to Premium
* New Instagram icon updated
* Icon mix-ups corrected

= 1.6 =

* (Withdrawn)

= 1.5 =
* Several more alignment options added: you can now define the alignment of icons within widget or shortcode (left, center, right)
* Selection simplified for vertical icons
* Prompt for placing credit link or review removed
* Bug fixed that # lead to issues if used in predefined Tweets
* Custom icon upload for Whattsapp, Reddit and Skype added
* Plugin size reduced
* Some icons looked pixelated on some screens, fixed now
* Facebook made changes in API (to display counts), this is adjusted in the plugin now
* Instructions to create Facebook API updated

= 1.4 =
* Whatsapp feature added that users can send you a Whatsapp message
* Invite to rate plugin or donate removed

= 1.3 =
* Several bugs fixed

= 1.2 =
* More options for email icon
* Option added that ions are still visible as user scrolls down
* WhatsApp page sharing feature added

= 1.1 =
* Added more options for email icon
* Added linkedin-icon before/after posts (square layout)

= 1.0 =
* First release

== Upgrade Notice ==

= 15.8 =
* Please upgrade
