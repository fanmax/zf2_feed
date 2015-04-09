<?php

namespace Feed\Service;

class FeedService
{
    public function getFeeds()
    {
        
        
        $link = "http://g1.globo.com/dynamo/brasil/rss2.xml";
        $xml = simplexml_load_file($link) -> channel;

        
        return $xml;
        
    }
}