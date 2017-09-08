<?php

namespace Pim\Component\Catalog\Event;

use Symfony\Component\EventDispatcher\Event;

class DisabledEvent extends Event
{
    /** @var int */
    private $productId;

    public function __construct(int $productId)
    {
        $this->productId = $productId;
    }
}
