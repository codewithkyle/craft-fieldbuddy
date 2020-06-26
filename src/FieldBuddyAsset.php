<?php
/**
 * Field Buddy plugin for Craft CMS 3.x
 *
 * Gain one-click access to field names in the Craft 3 Control Panel.
 *
 * @link      https://kyleandrews.dev/
 * @copyright Copyright (c) 2020 Kyle Andrews
 */

namespace codewithkyle\fieldbuddy;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class FieldBuddyAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@codewithkyle/fieldbuddy/resources";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];
        $this->css = [
            'css/field-buddy.css'
        ];
        $this->js = [
            'js/field-buddy.js',
        ];

        parent::init();
    }
}
