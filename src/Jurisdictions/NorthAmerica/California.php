<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\NorthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\NorthAmerica\CaliforniaValueAddedTax;
use Money\Currency;

/**
 * Class California.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class California implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CaliforniaValueAddedTax
     */
    private $tax;

    /**
     * California constructor.
     */
    public function __construct()
    {
        $this->tax = new CaliforniaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return CaliforniaValueAddedTax
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