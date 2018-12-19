<?php
namespace fostercommerce\useractivity;

use Craft;
use craft\base\Plugin as BasePlugin;

class Plugin extends BasePlugin
{
    public function getCpNavItem()
    {
        $item = parent::getCpNavItem();

        $item['label'] = Craft::t('useractivity', 'User Activity');
        $item['badgeCount'] = 0;
        $item['subnav'] = [
            'recent-logins' => [
                'label' => Craft::t('useractivity', 'Recent Logins'),
                'url' => 'useractivity/recent-logins'
            ],
        ];
        return $item;
    }
}
