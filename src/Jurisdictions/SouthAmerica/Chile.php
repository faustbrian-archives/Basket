<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\ChileValueAddedTax;
use Money\Currency;

/**
 * Class Chile.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Chile implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ChileValueAddedTax
     */
    private $tax;

    /**
     * Chile constructor.
     */
    public function __construct()
    {
        $this->tax = new ChileValueAddedTax();
        $this->currency = new Currency('CLP');
    }

    /**
     * @return ChileValueAddedTax
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