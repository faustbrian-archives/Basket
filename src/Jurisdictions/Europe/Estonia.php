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
use DraperStudio\Basket\TaxRates\Europe\EstoniaValueAddedTax;
use Money\Currency;

/**
 * Class Estonia.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Estonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EstoniaValueAddedTax
     */
    private $tax;

    /**
     * Estonia constructor.
     */
    public function __construct()
    {
        $this->tax = new EstoniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return EstoniaValueAddedTax
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