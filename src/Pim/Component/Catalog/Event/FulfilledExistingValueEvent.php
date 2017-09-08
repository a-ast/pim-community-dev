<?php

namespace Pim\Component\Catalog\Event;

use Pim\Component\Catalog\Model\ValueInterface;
use Symfony\Component\EventDispatcher\Event;

class FulfilledExistingValueEvent extends Event
{
    /** @var int */
    private $productId;

    /** @var ValueInterface */
    private $value;

    public function __construct(int $productId, ValueInterface $value)
    {
        $this->productId = $productId;
        $this->value = $value;
    }
}
