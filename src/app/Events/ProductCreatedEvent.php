<?php

namespace VCComponent\Laravel\Product\Events;

use Illuminate\Queue\SerializesModels;

class ProductCreatedEvent
{
    use SerializesModels;

    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }
}
