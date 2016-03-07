<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\AustriaValueAddedTax;
use Money\Currency;

/**
 * Class Austria.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Austria implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustriaValueAddedTax
     */
    private $tax;

    /**
     * Austria constructor.
     */
    public function __construct()
    {
        $this->tax = new AustriaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return AustriaValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}