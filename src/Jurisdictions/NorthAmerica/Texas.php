<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\TexasValueAddedTax;
use Money\Currency;

class Texas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TexasValueAddedTax
     */
    private $tax;

    /**
     * Texas constructor.
     */
    public function __construct()
    {
        $this->tax = new TexasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TexasValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
