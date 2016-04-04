<?php namespace Nilssanderson\Blogarchive\Components;

use Rainlab\Blog\Models\Post;
use Cms\Classes\ComponentBase;
use DB;
use Carbon\Carbon;

class ArchiveList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Blog Archive List',
            'description' => 'Provides a list of Posts in an Archive view.'
        ];
    }

    public function defineProperties()
    {
        return [
            'maxPosts' => [
                'title'             => 'Max Posts',
                'description'       => 'The maximum amount of Posts for this instance',
                'default'           => 20,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols'
            ]
        ];
    }

    public function onRun()
    {
        // This code will not execute for ajax requests

        $this->archive = $this->page['archive'] = Post::orderBy('published_at', 'desc')
            ->where('published', '1')
            ->take($this->property('maxPosts'))
            ->get()
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('M Y');
            });
    }

}
