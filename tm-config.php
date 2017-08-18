<?php

$buildPath = '/var/www/deploy/gulp-release-builder/tm/__bin';
$packages = array(
    'tm/core' => array(
        'summary' => '',
        'description' => 'Templates Master core functionality module',
        'notes' => ''
    ),
    // 'tm/secure' => array(
    //     'summary' => '',
    //     'description' => '',
    //     'notes' => ''
    // ),
    'tm/argento' => array(
        'summary' => ' Magento responsive theme with 6 layouts and 20 built-in modules',
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
