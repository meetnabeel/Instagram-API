<?php

namespace InstagramAPI\Response;

class BlockedReelsResponse extends \InstagramAPI\Response
{
    /**
     * @var Model\User[]
     */
    public $users;
    /**
     * @var string
     */
    public $next_max_id;
    public $page_size;
    public $big_list;
}
