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
use DraperStudio\Basket\TaxRates\Europe\DenmarkValueAddedTax;
use Money\Currency;

/**
 * Class Denmark.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Denmark implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DenmarkValueAddedTax
     */
    private $tax;

    /**
     * Denmark constructor.
     */
    public function __construct()
    {
        $this->tax = new DenmarkValueAddedTax();
        $this->currency = new Currency('DKK');
    }

    /**
     * @return DenmarkValueAddedTax
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