<?php
class PackageRepository {

    private $json = array();

    public function getPackages($lab = 'tm')
    {
        if ('tm' == $lab) {
            $lab = 'tmhub';
        }
        if (!isset($this->json[$lab])) {
            $url = "https://$lab.github.io/packages/";
            // $url = 'http://docs.swissuplabs.com/packages/';
            $includes = json_decode(@file_get_contents($url . 'packages.json'), true);
            $include = current(array_keys($includes['includes']));
            $packages = json_decode(@file_get_contents($url . $include), true);
            $packages = $packages['packages'];

            $this->json[$lab] = $packages;
        }

        return $this->json[$lab];
    }

    public function getPackage($packageName, $lab = 'tm', $tag = 'dev-master')
    {
        $packages = $this->getPackages($lab);
        // Zend_Debug::dump($packages);
        $p = $packages[$packageName];
        if ('stable' === $tag) {
            $versions = array_keys($p);
            $result = $versions[0];
            foreach ($versions as $version) {
                if (false !== strpos($version, 'dev-')) {
                    continue;
                }
                if (version_compare($result, $version, '<')) {
                    $result = $version;
                }
            }
            $p = $p[$result];
        } else {
            $p = isset($p[$tag]) ? $p[$tag] : end($p);
        }
        return $p;
    }

    public function getReqires($packageName, $lab = 'tm')
    {
        $requires = [];
        if (is_array($packageName)) {
            foreach ($packageName as $package) {
                $_requires = $this->getReqires($package, $lab);
                $requires = array_merge($requires, $_requires);
            }
            $requires = array_merge($requires, $packageName);
            $requires = array_unique($requires);
        } else {
            $p = $this->getPackage($packageName, $lab);

            if (isset($p['require'])) {
                $requires = array_keys($p['require']);
                $rs = $requires;
                foreach ($rs as $r) {
                    $_requires = $this->getReqires($r, $lab);
                    $requires = array_merge($requires, $_requires);
                }
                $requires = array_merge($requires, [$packageName]);
                $requires = array_unique($requires);
            };
        }
        return $requires;
    }

    public function getModman($packageName)
    {
        $packageName = str_replace('tm/', 'tmhub/', $packageName);
        $modman = 'https://raw.githubusercontent.com/' . $packageName . "/modman";
        print_r($modman);
        $modman = file_get_contents($modman);
        print_r($modman);
        $modman = explode("\n", $modman);
        $files = array();
        foreach ($modman as $line) {
            list($file, ) = explode(' ', $line);
            $files[] = $file;
        }
        $files = array_filter($files);
        print_r($files);
        return $files;
    }

    public function getExtensionNameByPackagename($packageName)
    {
        $a = array(
            'tm/abandoned'             => 'TM_Abandoned',
            'tm/ajax-layered-navigation' => 'TM_AjaxLayeredNavigation',
            'tm/ajax-pro'              => 'TM_AjaxPro',
            'tm/ajax-search'           => 'TM_AjaxSearch',
            'tm/akismet'               => 'TM_Akismet',
            'tm/argento'               => 'TM_Argento',
            'tm/argento_argentotheme'  => 'TM_ArgentoArgentotheme',
            'tm/argento_mage2cloud'    => 'TM_ArgentoMage2Cloud',
            'tm/argento_swissup'       => 'TM_ArgentoSwissup',
            'tm/argento_tm'            => 'TM_ArgentoTM',
            'tm/ask-it'                => 'TM_AskIt',
            'tm/attributepages'        => 'TM_Attributepages',
            'tm/cache'                 => array('TM_Cache', 'TM_Crawler'),
            'tm/catalog-configurable-swatches' => 'TM_CatalogConfigurableSwatches',
            'tm/cdn'                   => 'TM_CDN',
            'tm/core'                  => 'TM_Core',
            'tm/countdowntimer'        => 'TM_CountdownTimer',
            'tm/dailydeals'            => 'TM_DailyDeals',
            'tm/downloadable'          => 'TM_Downloadable',
            'tm/easy-banner'           => 'TM_EasyBanner',
            'tm/easycatalogimg'        => 'TM_EasyCatalogImg',
            'tm/easycolorswatches'     => 'TM_EasyColorSwatches',
            'tm/easyflags'             => 'TM_EasyFlags',
            'tm/easylightbox'          => 'TM_EasyLightbox',
            'tm/easynavigation'        => 'TM_EasyNavigation',
            'tm/easyslide'             => 'TM_Easyslide',
            'tm/easytabs'              => 'TM_EasyTabs',
            'tm/email'                 => 'TM_Email',
            'tm/facebooklb'            => 'TM_FacebookLB', //FaceBookLB
            'tm/firecheckout'          => array('TM_FireCheckout', 'TM_CheckoutFields' , 'TM_CheckoutSuccess'),
            'tm/checkout-success'      => 'TM_CheckoutSuccess',
            'tm/helpdesk'              => array('TM_Helpmate', 'TM_KnowledgeBase'),
            'tm/knowledge-base'        => 'TM_KnowledgeBase',
            'tm/highlight'             => 'TM_Highlight',
            'tm/license'               => 'TM_License',
            'tm/lightboxpro'           => 'TM_LightboxPro',
            'tm/mobileswitcher'        => 'TM_MobileSwitcher',
            'tm/navigation-pro'        => 'TM_NavigationPro',
            'tm/newsletterbooster'     => array('TM_NewsletterBooster', 'TM_SegmentationSuite'),
            'tm/notifier'              => 'TM_Notifier',
            'tm/orderattachment'       => 'TM_OrderAttachment',
            'tm/pagespeed'             => 'TM_Pagespeed',
            'tm/pro-labels'            => 'TM_ProLabels',
            'tm/prozoom'               => 'TM_Prozoom',
            'tm/purify'                => 'TM_Purify',
            'tm/productvideos'         => 'TM_ProductVideos',
            'tm/quickshopping'         => 'TM_QuickShopping',
            'tm/review-reminder'       => 'TM_ReviewReminder',
            'tm/richsnippets'          => 'TM_RichSnippets',
            'tm/recurring'             => 'TM_Recurring',
            'tm/reward'                => 'TM_Reward',
            'tm/secure'                => array('TM_BigBrother', 'TM_TwoFactorAuthentication'),
            'tm/smartsuggest'          => 'TM_SmartSuggest',
            'tm/sold-together'         => 'TM_SoldTogether',
            'tm/socialsuite'           => 'TM_SocialSuite',
            'tm/subscription'          => 'TM_Subscription',
            'tm/subscription-checker'  => 'TM_SubscriptionChecker',
            'tm/suggestpage'           => 'TM_SuggestPage',
            'tm/templatef001'          => array('TM_Templatef001', 'TM_Ajax', 'TM_Featured'),
            'tm/templatef002'          => 'TM_Templatef002',
            'tm/templatem001'          => 'TM_Templatem001',
            'tm/testimonials'          => 'TM_Testimonials',
            'tm/demo-deployer'         => 'TM_Deployer',
            // 'tm/botprotection'         => 'TM_BotProtection',
            'tm/bot-protection'        => 'TM_BotProtection',
            'tm/affiliate-suite'       => 'TM_AffiliateSuite',
            'tm/ga-plugin-scrolldepth' => 'TM_GaPluginScrolldepth',

            'swissup/prolabels'      => 'Swissup_ProLabels',
            'swissup/reviewreminder' => 'Swissup_Reviewreminder',
            'swissup/maintenance'    => 'Swissup_Maintenance',
            'swissup/email'          => 'Swissup_Email',
            'swissup/askit'          => 'Swissup_Askit',
            'swissup/testimonials'   => 'Swissup_Testimonials',
            'swissup/highlight'      => 'Swissup_Highlight',
            'swissup/core'           => 'Swissup_Core',
            'swissup/countdowntimer' => 'Swissup_Countdowntimer',
            'swissup/address-autocomplete' => 'Swissup_AddressAutocomplete',
            'swissup/taxvat'         => 'Swissup_Taxvat',
            'swissup/ajaxpro'        => 'Swissup_Ajaxpro',
            'swissup/checkout-success' => 'Swissup_CheckoutSuccess',
            'swissup/sold-together'  => 'Swissup_SoldTogether',
            'swissup/firecheckout'   => 'Swissup_Firecheckout',
            'swissup/orderattachment' => 'Swissup_Orderattachment',
            'swissup/geoip'          => 'Swissup_Geoip',
            'swissup/akismet'        => 'Swissup_Akismet',
            'swissup/ajaxsearch'     => 'Swissup_Ajaxsearch',
            'swissup/easycatalogimg' => 'Swissup_Easycatalogimg',
            'swissup/attributepages' => 'Swissup_Attributepages',
            'swissup/easy-slide'     => 'Swissup_EasySlide',
            'swissup/pro-labels'     => 'Swissup_ProLabels',
            'swissup/easybanner'     => 'Swissup_Easybanner',
            'swissup/easytabs'       => 'Swissup_Easytabs',
            'swissup/subscription-checker' => 'Swissup_SubscriptionChecker',
            'swissup/fblike'         => 'Swissup_Fblike',
            'swissup/rich-snippets'  => 'Swissup_RichSnippets',
            'swissup/easyflags'      => 'Swissup_Easyflags',
            'swissup/slick-carousel' => 'Swissup_SlickCarousel',
            'swissup/dailydeals'     => 'Swissup_Dailydeals',
            'swissup/font-awesome'   => 'Swissup_FontAwesome'
        );

        $name = isset($a[$packageName]) ? $a[$packageName] : false;
        if (is_array($name)) {
            $name = current($name);
        }
        return $name;
    }
}
