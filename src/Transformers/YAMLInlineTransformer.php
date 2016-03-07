<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Transformers;

use DraperStudio\Basket\Order;

/**
 * Class YAMLInlineTransformer.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class YAMLInlineTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return string
     */
    public function transform(Order $order)
    {
        return yaml_inline_serialise($this->build($order), true);
    }
}