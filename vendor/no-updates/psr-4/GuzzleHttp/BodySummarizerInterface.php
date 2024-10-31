<?php

namespace Rich4rdMuvirimi\NoUpdates\Vendor\GuzzleHttp;

use Rich4rdMuvirimi\NoUpdates\Vendor\Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
