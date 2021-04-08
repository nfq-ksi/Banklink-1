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
use RKD\Banklink\Protocol\IPizza2015;

/**
 * Banklink settings for Šiaulių bank.
 *
 * For more information, please visit:
 * https://www.sb.lt/file/failai/?fl=136&lng=lt
 *
 * @author Rene Korss <rene.korss@gmail.com>
 */
class Siauliu extends Banklink
{
    /**
     * Request url.
     *
     * @var mixed
     */
    protected $requestUrl = 'https://e.sb.lt/ibpay/redirect';

    /**
     * @var string
     */
    protected $responseEncoding = 'windows-1257';

    /**
     * Test request url.
     *
     * @var mixed
     */
    protected $testRequestUrl = 'https://e.sb.lt/ibpay/redirect';

    /**
     * Force Siauliu class to use IPizza2015 protocol.
     *
     * @param RKD\Banklink\Protocol\IPizza2015 $protocol   Protocol used
     */
    public function __construct(IPizza2015 $protocol)
    {
        parent::__construct($protocol);
    }

    /**
     * Additional request fields merged to request data
     *
     * @return array Array of additional request fields to send to bank
     */
    protected function getAdditionalRequestFields() : array
    {
        return [
            'VK_PANK' => '71800',
            'VK_PCODE' => '',
            'VK_TERM' => '',
        ];
    }
}
