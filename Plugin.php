<?php namespace Nilssanderson\Blogarchive;

use Backend;
use System\Classes\PluginBase;

/**
 * Instructions Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Blog Archive',
            'description' => 'No description provided yet...',
            'author'      => 'Nils Sanderson',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any components included with the plugin
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Nilssanderson\Blogarchive\Components\ArchiveList' => 'archiveList'
        ];
    }
}
