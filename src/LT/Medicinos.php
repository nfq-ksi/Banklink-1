<?php
/**
 * RKD Banklink.
 *
 * @link https://github.com/renekorss/Banklink/
 *
 * @author Rene Korss <rene.korss@gmail.com>
 * @copyright 2016-2019 Rene Korss
 * @license MIT
 */
namespace RKD\Banklink\LT;

use RKD\Banklink\Banklink;
use RKD\Banklink\Protocol\ECommerce;
use RKD\Banklink\Protocol\IPizza\Services2015;
use RKD\Banklink\Protocol\IPizza2015;

/**
 * Banklink settings for Luminor.
 *
 * For more information, please visit:
 * https://www.luminor.lt/en/business/e-commerce-banklink
 *
 * @author Rene Korss <rene.korss@gmail.com>
 */

class Medicinos extends Banklink
{
    /**
     * Request url.
     *
     * @var mixed
     */
    protected $requestUrl = 'https://ibs.medbank.lt/loginb2b.aspx';

    /**
     * Test request url.
     *
     * @var mixed
     */
    protected $testRequestUrl = 'https://ibs.medbank.lt/loginb2b.aspx';

    /**
     * Force Nordea class to use ECommerce protocol.
     *
     * @param RKD\Banklink\Protocol\ECommerce $protocol   Protocol used
     */
    public function __construct(ECommerce $protocol)
    {
        parent::__construct($protocol);
    }
}
