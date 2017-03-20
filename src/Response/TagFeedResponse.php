<?php

namespace InstagramAPI;

class TagFeedResponse extends Response
{
    public $num_results;
    /**
     * @var Item[]
     */
    public $ranked_items;
    public $auto_load_more_enabled;
    /**
     * @var Item[]
     */
    public $items;
    public $more_available;
    /**
     * @var string
     */
    public $next_max_id;
}