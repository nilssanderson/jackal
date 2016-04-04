<?php namespace NilsSanderson\BlogArchive;

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
            'icon'        => 'icon-newspaper-o'
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
            'NilsSanderson\BlogArchive\Components\ArchiveList' => 'archiveList'
        ];
    }
}
