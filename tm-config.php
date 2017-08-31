<?php

$buildPath = '/var/www/deploy/gulp-release-builder/tm/__bin';
$packages = array(
    'tm/core' => array(
        'summary' => 'Templates Master core functionality module',
        'description' => 'Templates Master core functionality for our another modules',
        'notes' => ''
    ),
    'tm/argento' => array(
        'summary' => 'Magento responsive theme with 6 layouts and 20 built-in modules',
        'description' => 'Premium Magento template brings your store to the highest level of usability. Developed given the innovative trends in e-commerce.',
        'notes' => ''
    ),
    'tm/templatef002' => array(
        'summary' => 'Free Magento theme with amazing minimalistic design.',
        'description' => 'The template is available in 10 colors. Comes with slider on the homepage.',
        'notes' => ''
    ),
    'tm/templatef001' => array(
        'summary' => 'Highly rated Free Magento theme available in 10 colors.',
        'description' => 'The template best suits any kind of store. Includes quick product overview feature, featured products block and image slider.',
        'notes' => ''
    ),
    'tm/firecheckout' => array(
        'summary' => 'Best Magento one step checkout extension with 6 layouts.',
        'description' => 'Simplifies the checkout process. Includes the Order Attachments, GEO iP, Google Address Autocomplete, Checkout VAT, USPS Address Verification and many more beneficial features to help your customers complete a purchase in your store.',
        'notes' => ''
    ),
    /*
EASY SPOTLIGHT
'summary' => 'Shows new products on main, catalog and product pages.',
'description' => 'supports 3 types of product listing: products grid, products list and products slider. Allows to change the number of products and columns.',
     */
    'tm/easyflags' => array(
        'summary' => 'Attractive Magento flag store switcher',
        'description' => 'Converts the default Magento store view switcher into nice flag buttons. Comes with complete flags icons collection.',
        'notes' => ''
    ),
    'tm/easylightbox' => array(
        'summary' => 'Magento lightbox extension.',
        'description' => 'Replaces the product image zoomer with an attractive lightbox window popup. Allows you to create the lightbox image gallery on CMS pages via widgets.',
        'notes' => ''
    ),
    'tm/easynavigation' => array(
        'summary' => 'The module improves the default Magento navigation.',
        'description' => 'Supports top navigation, left navigation and right navigation blocks. Allows to select navigation type, number of navigation levels to load as well as to change the navigation columns count and levels per dropdown.',
        'notes' => ''
    ),
    'tm/easytabs' => array(
        'summary' => 'Product tabs Magento extension.',
        'description' => 'Replaces the default Magento tabs with appealing and informative custom tabs that are based on content of cms blocks or products attributes. Supports adding multiple dynamic tabs on the product page. Responsive design.',
        'notes' => ''
    ),
    'tm/prozoom' => array(
        'summary' => 'Magento product image zoom extension.',
        'description' => 'Replaces the standard Magento zoom with flexible javascript zoom widget. Allows to select 3 prozoom types and configure the lens and stage settings.',
        'notes' => ''
    ),
    'tm/easycatalogimg' => array(
        'summary' => 'Adds the category listing block with subcategories and images.',
        'description' => 'Improves the navigation via the display of all subcategories directly on the category page. Allows you to assign images to categories/subcategories and add links and keywords to the list.',
        'notes' => ''
    ),
    'tm/ajax-pro' => array(
        'summary' => 'Ajax Magento module.',
        'description' => 'Provides with the following ajax functionality: auto-loading products on category page, add-to-wishlist and add-to-compare blocks, the display of different dialog window types while adding the item to the cart, setup of Login form block and Cart block in the header store block.',
        'notes' => ''
    ),
    'tm/ajax-search' => array(
        'summary' => 'Ajax Search Autocomplete module for Magento.',
        'description' => 'Improves the default Magento search with ajax autocomplete feature. Allows you to set up the search by the different product’s attributes. Enables the display of CMS pages in search popup. Comes with category filter combobox, the configurable suggest popup and input field settings, product\'s display in search box.',
        'notes' => ''
    ),
    'tm/easy-banner' => array(
        'summary' => 'Banner extension for Magento.',
        'description' => 'Helps you manage banners and block easily. Supports unlimited number of placeholders and banners. Allows to target specific customers groups, show the payments and security icons, display the scheduled events information and holidays related content.',
        'notes' => ''
    ),
    'tm/smartsuggest' => array(
        'summary' => 'Offers to users the recommended products based on their personalized behavior.',
        'description' => 'Enables the suggestion of products from the same category, attribute set, related, upsell and cross-sell products. Comes with 3 predefined and configurable blocks, grid, list and slide product listing modes. Allows to filter products by average price.',
        'notes' => ''
    ),
    'tm/facebooklb' => array(
        'summary' => 'Facebook Like button module for Magento.',
        'description' => 'Enables the Facebook Like button integration with Magento core functions. Supports Open Graph.',
        'notes' => ''
    ),
    'tm/quickshopping' => array(
        'summary' => 'Magento quick view module.',
        'description' => 'Allows to set the display of different content in quick view popup, change the product listing settings, configure the product page. Comes with ajax window support for configurable and bundle products. Helps users to navigate by using previous and next product links.',
        'notes' => ''
    ),
    'tm/ask-it' => array(
        'summary' => 'Magento product question extension.',
        'description' => 'Shows the recently discussion block with questions and answers at any place of your store. Helps to create user generated content related to your products. RSS and notification emails support. Integration with Akismet service.',
        'notes' => ''
    ),
    'tm/pro-labels' => array(
        'summary' => 'Product labels Magento extension.',
        'description' => 'Allows to add labels based on predefined rules as well as create custom labels based on the product attributes. Enables the display labels in content wrapper for mobile devices. Supports Magento multi-store feature.',
        'notes' => ''
    ),
    'tm/sold-together' => array(
        'summary' => 'Cross sell extension for Magento.',
        'description' => 'Includes 2 types of blocks with complementary products. Frequently Bought Together block supports Amazon style. Enables adding the Customers Bought Together block on suggest page after the item’s adding to the shopping cart.',
        'notes' => ''
    ),
    'tm/easycolorswatches' => array(
        'summary' => 'Color swatches Magento extension.',
        'description' => 'Helps to create professional looking color swatches easily. Allows using images as color thumbnails and text swatches. Includes attribute swatches feature.',
        'notes' => ''
    ),
    'tm/helpdesk' => array(
        'summary' => 'Help desk Magento extension with built-in Knowledge Base.',
        'description' => 'Simplifies support process via included knowledge base for most common questions. Allows to accept issues via e-mail, contact form or customer account page. Supports multiple email gateways (TLS and SSL), tickets priorities, different departments. Akismet service integration. The module comes with advanced intuitive interface.',
        'notes' => ''
    ),
    'tm/ajax-layered-navigation' => array(
        'summary' => 'Ajax layered navigation module for Magento.',
        'description' => 'Enables the layered navigation block both on the homepage and category pages through the entire website. Additional attributes can be shown as images or drop down.',
        'notes' => ''
    ),
    'tm/affiliate-suite' => array(
        'summary' => 'Magento affiliate module.',
        'description' => 'Allows to use separate affiliates accounts, join allowed campaigns, use available banners, widgets and simple html links to promote products. Enables tracking full history of all transactions completed by referred visitors and history of paid commissions. Allows to run multiple campaigns and send direct messages to partners.,',
        'notes' => ''
    ),
    'tm/highlight' => array(
        'summary' => 'Featured products extension for Magento.',
        'description' => 'Allows to filter products by category, price, attribute value; to show best sellers and most viewed products directly on the homepage. Enables the display of products filtered by custom filters. Comes with a set of widgets.',
        'notes' => ''
    ),
    'tm/easyslide' => array(
        'summary' => 'Image slider extension in Magento.',
        'description' => 'Creates an unlimited number of amazing image sliders. Enables using slides with dynamic content. Allows to place sliders via widget, XML code and block code. The Prototype and Nivo sliders are included. Swiper slider integration.',
        'notes' => ''
    ),
    'tm/socialsuite' => array(
        'summary' => 'Social media module in Magento.',
        'description' => 'Integrated with Facebook, Twitter, Google, Yahoo and Pinterest social networks. Enables the display of Facebook Like, Send, Google+, Tweet and Pinterest buttons on the product, category and CMS pages. Simplifies the registration process for new customers. Includes comment feature. Supports sharing reward discount code.',
        'notes' => ''
    ),
    'tm/lightboxpro' => array(
        'summary' => 'The replacement of default magento image zoom with powerfull Lighbox module. Allows you to fully configure your products media block from admin. Supports custom pop-up window for single images, text boxes and even complete image galleries.',
        'description' => 'Are you interested in boosting your visitors experience to the next level? Lightbox Pro will replace default magento image zoom with new easy-to-use and flexible Lightbox module. With Lightbox Pro extension you can also place single images, text boxes and even complete image galleries at your CMS pages with out any need to edit your store code. Our extension will make your products even more attractive for customers!',
        'notes' => ''
    ),
    'tm/templatem001' => array(
        'summary' => 'Make your Magento mobile friendly. Optimized layered navigation for mobile devices. Fast and efficient checkout layout. Multi-store and multi-language support. Android,iOS and Windows Phone platforms support.',
        'description' => 'It’s no surprise that most of your visitors are now equipped with mobile phones such as iPhones or Android devices. According to Forrester Research Mobile commerce is expected to reach $10 billion by the end of 2014 year only in US. And it’s easy to understand why 30% percent of all retailers already implemented mobile presence. Don’t loose your chance to keep contact with your customers while they are using their phones. We have created mobile Magento theme that will help you join new e-commerce revolution and build your mobile presence just in 5 minutes. Mobile Star is specially designed mobile magento template that will work on iPhone, Android and any other advanced phone.',
        'notes' => ''
    ),
    'tm/navigation-pro' => array(
        'summary' => 'Improve your store navigation. Provides various user-friendly menu types for your store. It allows you to improve your store navigation with unlimited number of sub-columns, additional links, banners and widgets.',
        'description' => 'Magento store navigation is most crucial part of any e-commerce site. Small mistake or using of bad practices in navigation can greatly damage your business. With proper navigation visitors can be driven to the right products and categories in order to increase your store sales. Navigation Pro allows you to get full control over your Magento navigation and quickly change look and structure of it. Now every navigation feature and setting is available directly in your store admin so you don’t need anymore hire developer to modify your custom navigation. Our magento menu extension allows you build any navigation tree your need just within several minutes. Also you could add multiply navigation blocks at same time in order to make navigation easier. So if you are looking for easiest way for magento edit menu then that extension is exactly for you. Navigation pro will allow you easily create magento dropdown menu, magento horizontal menu, magento static menu. Navigation Pro modules fully compatible with all our magento extensions so you can add brands slider to it using Brands pages extension or place products block using Highlight extension.',
        'notes' => ''
    ),
    'tm/richsnippets' => array(
        'summary' => "Easy and efficient way to highlight your store's products on search results pages. Support display of reviews, status and price on SERPs and much more. Provides also author snippets and breadcrumbs.",
        'description' => 'Every store owner would like to highlight their products among search results in order to get more organic traffic. Rich snippets is easiest and most efficient way to do that. Snippets is few lines of text that appear under every search result that give users additional information about your store products offer. According to SEOMOZ you can get up to 30% click through rate increase with Magento Google Rich Snippets installed.',
        'notes' => ''
    ),
    'tm/secure' => array(
        'summary' => 'Improves your admin security level. Offer you to use two-factor authentication based on the Google Authenticator application. Interface allows you to see and track the time, data and IP address of unauthorized attempts to the access.',
        'description' => 'Are you looking for a way to make your store data more secure from unauthorized login and hackers attack? Check our Improved Admin security module for Magento. Our extension will allow you to use two-factor authentication based on the Google Authenticator application. Verification security code except username and password will be required every admin login attempt. So even if the attackers will get your admin username and password, they will not be able to access your store admin unless they have a security code provided by Google Authenticator. The unique code expires in a short amount of time for security purposes.',
        'notes' => ''
    ),
    'tm/newsletterbooster' => array(
        'summary' => 'Email marketing extension for magento. Creating customer segments and targeted newsletter campaigns. Tracking newsletters’ efficiency. Integrated email verification feature.',
        'description' => "Be always on top in communication with your customers! We recommend you to use the Newsletter Booster extension in order to get the most out of your email marketing. Our extension allows you to create an effective newsletter campaign in a minutes, easily manage newsletter queue and track the e-mailing performance. Gain more from proper sending of promotional emails and deliver high results from engaging more and more customers in your store's services.",
        'notes' => ''
    ),
    'tm/cache' => array(
        'summary' => 'Makes your store faster. Based on core Magento features that support both static and dynamic blocks. Page configuration settings make it possible to restrict caching of any page in the extension configuration. Comes with the cache crawler.',
        'description' => 'Are you looking for a way to make your web-store faster? Tired of paying more and more for expensive hosting packages? Try using our Page Cache extension and it will help you. It was created with only one purpose - make your store faster. Page cache is based on core magento architecture that supports both static and dynamic blocks. Installation is really easy and it works right out of the box. But real power is hidden in additional extension settings that allow to set flexible cache rules based on page, block or any module. ',
        'notes' => ''
    ),
    'tm/attributepages' => array(
        'summary' => 'Attributes and brands pages creation. The improvement of website navigation. Allows your customers find the brands and products they are looking for much faster.',
        'description' => 'Dealing with many manufacturers and selling their products through the online store? Need to improve the layered navigation? Let’s create engaging attributes and brands pages with the Brands Pages plugin. The extension was developed in order to help your customers searching the products by brands and by other options like category, color, price, book author, film genre, etc. Once installed the module, you will get not only happy visitors because of friendly shopping process, but also the loyal and regular customers.',
        'notes' => ''
    ),
    'tm/cdn' => array(
        'summary' => 'Improve your store page load time by moving multiple files request from your server to content delivery network. Integration of the most popular CDN providers in your Magento store.Allows you to host and distribute product images, categories images, javascript and CSS files on a separate server.',
        'description' => 'Our CDN plugin will help you to integrate most popular CDN providers in your magento store. Installation and configuration is quite easy and all your need to do is simply select right settings in admin panel after uploading files. CDN implementation will lets your visitors benefit from faster page loads that will lead to increased sales conversions. ',
        'notes' => ''
    ),
    'tm/productvideos' => array(
        'summary' => 'Adding videos to the product page. Creating video gallery. Increase the conversion rate of product page in your Magento store!',
        'description' => 'People are making their purchases in the online stores based on multiple criteria. While viewing the product, they prefer to have better look and more detailed information about it. By placing videos on the products page you can show products advantages and how to use it in order to increase customer assurance and post sales satisfaction. By using the Product Videos extension you will: * Easily place the embed video at the product page in your magento store * Create product videos gallery * Improve e-commerce website usability * Make a product page more efficient using the videos * Help your visitors take more informed purchase decisions * Increase the conversion rate of your product pages ',
        'notes' => ''
    ),
    'tm/testimonials' => array(
        'summary' => "Increase your store credibility by using reviews from your satisfied customers on your Magento store pages. By placing a testimonials form, you will be able to monitor users' impressions about your store on a daily basis.",
        'description' => "Free Testimonials extension is an effective solution for spreading customers’ activity at your store. It allows to track and check testimonials’ process. The extension provides a support of multi store and multi language configuration. Four widget types for Magento are available. Let’s improve your store credibility by encouraging users to post their reviews directly on the store page.",
        'notes' => ''
    ),
    'tm/pagespeed' => array(
        'summary' => 'Speed up your Magento store with our Page speed extension. By using the Javascript and CSS files minify tool, lazy load image filter and image optimization service, you will get the extremely fast page loading.',
        'description' => 'Google says that all existing websites can benefit from improved page speed. Nowadays visitors prefer to wait less time to see the website information uploaded. Let’s bring the customers’ user experience to the highest level with Page Speed extension. Using the idea of JS,CSS minification and the images’ optimization, our module offers a lot of additional helpful features for reducing page loading time and increase of your Google rankings.',
        'notes' => ''
    ),
    'tm/review-reminder' => array(
        'summary' => 'Sending email review reminders. User-friendly email template. Easy to use and flexible configuration. ',
        'description' => 'Looking for the extension that motivates your customers posting reviews? Welcome to check our Review Reminder plugin created for Magento. The extension is a kind of reviews assistant, that offers users to leave opinions easily. You send review reminder emails and as a rule get positive feedback on the review pages at your store. In fact, such emails lead to creating an additional content generated by user reviews. Search engines commonly reward good content with top ranking and increased traffic. Moreover, review reminders can increase CTR rate. Why not to use all tools in order to get higher conversion rate.',
        'notes' => ''
    ),
    'tm/abandoned' => array(
        'summary' => 'Shopping cart abandonment recovery solution. Capture data via AJAX. Creats magento email reminders. ',
        'description' => 'Abandonment Cart Manager extension created for Magento aims to be an effective cart recovery assistant. It allows you to send scheduled reminders via email. Once the plugin get the notification cart abandonment email, the magento email reminder will be sent to the visitor’s address.',
        'notes' => ''
    ),
    'tm/dailydeals' => array(
        'summary' => 'Daily deal extension enables creating daily deals for a limited time. Comes with 4 magento widgets. Daily deals display is available as link, label and static block.',
        'description' => 'Develop your sales strategy with Daily Deal extension for magento. Let’s offer visitors get joy of shopping online by providing them with the most advantageous deals in your store. You can utilize our module to notify customers about amazing bargain every day or during specified period of time. Create a new deal, promote one product or more and boost your sales. Allow users stumble upon hot deal displayed as link, label or simple static block all around your magento store. Benefit with our extension! Engage new visitors with attractive daily deal block, get loyal customers satisfied with a discount and increase your revenue. In addition, the extension will help you to create landing page with daily deals that truly leads to conversion rate growth.',
        'notes' => ''
    ),
    'tm/bot-protection' => array(
        'summary' => 'Secure your store from unwelcome visitors',
        'description' => 'Extension offers you one more line of defence from unwelcome visitors like crawlers, spam bots, spiders and other robots that try to steal your content. And in the same time you can be sure that no one of Google or Bing robots will be blocked (except you want to block them).',
        'notes' => ''
    ),
    'tm/recaptcha' => array(
        'summary' => 'Extension replaces default Magento (Zend) captcha with Google reCAPTCHA.',
        'description' => 'What are always current challenges facing managing an ecommerce website? How to avoid unrelated advertisements, fake registrations and other kind of malware spread through spamming. How to build good reputation for a store and keep users enjoying the shopping in.It’s time to make your website friendly for visitors and troublesome for spambots. Start using Google reCaptcha service. This additional security check will help you to protect your site from spam and abuse. No solving annoying CAPTCHA tasks. Your visitors have to confirm they are human with a single click in reCAPTCHA window.',
        'notes' => ''
    ),
    'tm/address-autocomplete' => array(
        'summary' => 'Allows to integrate a Google Address Autocomplete feature on the Magento one page checkout.',
        'description' => 'Help your customers fill out the address field in a single click. Let them select an address from the dropdown provided by integrated Google maps autocomplete service.',
        'notes' => ''
    ),
    'tm/amp' => array(
        'summary' => 'Magento AMP extension. Makes mobile web pages load faster.',
        'description' => 'AMP template for optimizing user experience on mobile devices.',
        'notes' => ''
    ),
);
return array(
'packages' => $packages,
//The base_dir and archive_file path are combined to point to your tar archive
//The basic idea is a seperate process builds the tar file, then this finds it
'base_dir'               => $buildPath,
'archive_files'          => '',

//The Magento Connect extension name.  Must be unique on Magento Connect
//Has no relation to your code module name.  Will be the Connect extension name
'extension_name'         => '',

//Your extension version.  By default, if you're creating an extension from a
//single Magento module, the tar-to-connect script will look to make sure this
//matches the module version.  You can skip this check by setting the
//skip_version_compare value to true
'extension_version'      => '',
'skip_version_compare'   => true,

//You can also have the package script use the version in the module you
//are packaging with.
'auto_detect_version'   => false,

//Where on your local system you'd like to build the files to
'path_output'            => $buildPath . '/packages',

//Magento Connect license value.
'stability'              => 'stable',

//Magento Connect license value
'license'                => 'OSL-3.0',
'license_uri'            => 'https://opensource.org/licenses/OSL-3.0',

//Magento Connect channel value.  This should almost always (always?) be community
'channel'                => 'community',

//Magento Connect information fields.
'summary'                => '',
'description'            => '',
'notes'                  => '',

//Magento Connect author information. If author_email is foo@example.com, script will
//prompt you for the correct name.  Should match your http://www.magentocommerce.com/
//login email address
'author_name'            => 'TemplatesMaster',
'author_user'            => 'TemplatesMaster',
'author_email'           => 'support@templates-master.com',

// Optional: adds additional author nodes to package.xml
// 'additional_authors'     => array(
//   array(
//     'author_name'        => 'Mike West',
//     'author_user'        => 'micwest',
//     'author_email'       => 'foo2@example.com',
//   )
// ),

//PHP min/max fields for Connect.  I don't know if anyone uses these, but you should
//probably check that they're accurate
'php_min'                => '5.3.0',
'php_max'                => '7.2.0',

//PHP extension dependencies. An array containing one or more of either:
//  - a single string (the name of the extension dependency); use this if the
//    extension version does not matter
//  - an associative array with 'name', 'min', and 'max' keys which correspond
//    to the extension's name and min/max required versions
//Example:
//    array('json', array('name' => 'mongo', 'min' => '1.3.0', 'max' => '1.4.0'))
'extensions'             => array()
);
