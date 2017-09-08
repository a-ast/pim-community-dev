<?php

namespace Pim\Component\Catalog\Event;

use Pim\Component\Catalog\Model\FamilyInterface;
use Symfony\Component\EventDispatcher\Event;

class ChangeFamilyEvent extends Event
{
    /** @var int */
    private $productId;

    /** @var FamilyInterface */
    private $family;

    public function __construct(int $productId, FamilyInterface $family)
    {
        $this->productId = $productId;
        $this->family = $family;
    }
}
