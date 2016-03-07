<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\TaxRates\NorthAmerica;

use DraperStudio\Basket\Contracts\TaxRate;

/**
 * Class DistrictofColumbiaValueAddedTax.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class DistrictofColumbiaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * DistrictofColumbiaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0575;
    }

    /**
     * @return float
     */
    public function float()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage()
    {
        return intval($this->rate * 100);
    }
}