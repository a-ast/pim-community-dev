<?php

namespace Pim\Component\Catalog\Event;

use Pim\Component\Catalog\Model\CategoryInterface;
use Symfony\Component\EventDispatcher\Event;

class UnclassifiedEvent extends Event
{
    /** @var int */
    private $productId;

    /** @var CategoryInterface */
    private $category;

    public function __construct(int $productId, CategoryInterface $category)
    {
        $this->productId = $productId;
        $this->category = $category;
    }
}
