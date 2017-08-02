<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Discounts;

use Money\Money;
use BrianFaust\Basket\Product;
use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Contracts\Money as MoneyInterface;

class ValueDiscount implements Discount, MoneyInterface
{
    /**
     * @var Money
     */
    private $rate;

    /**
     * ValueDiscount constructor.
     *
     * @param Money $rate
     */
    public function __construct(Money $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function product(Product $product): Money
    {
        return $this->rate;
    }

    /**
     * @return Money
     */
    public function rate(): Money
    {
        return $this->rate;
    }

    /**
     * @return Money
     */
    public function toMoney(): Money
    {
        return $this->rate;
    }
}
