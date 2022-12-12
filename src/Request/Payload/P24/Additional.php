<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Request\Payload\P24;

class Additional
{
    private Shipping $shipping;

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }
}
