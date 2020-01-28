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
 * Banklink settings for Swedbank.
 *
 * For more information, please visit:
 * https://www.swedbank.lt/business/cash/banklink/start?language=ENG
 *
 * @author Rene Korss <rene.korss@gmail.com>
 */
class Swedbank extends Banklink
{
    /**
     * Request url.
     *
     * @var mixed
     */
    protected $requestUrl = 'https://www.swedbank.lt/banklink/';

    /**
     * Test request url.
     *
     * @var mixed
     */
    protected $testRequestUrl = 'https://www.swedbank.lt/banklink/';

    /**
     * Force SEB class to use IPizza2015 protocol.
     *
     * @param RKD\Banklink\Protocol\IPizza2015 $protocol   Protocol used
     */
    public function __construct(IPizza2015 $protocol)
    {
        parent::__construct($protocol);
    }

    /**
     * Override encoding field.
     */
    protected function getEncodingField() : string
    {
        return 'VK_ENCODING';
    }

    /**
     * By default uses UTF-8.
     *
     * @return array Array of additional fields to send to bank
     */
    protected function getAdditionalFields() : array
    {
        return [
            'VK_ENCODING' => $this->requestEncoding,
        ];
    }

    /**
     * Additional request fields merged to request data
     *
     * @return array Array of additional request fields to send to bank
     */
    protected function getAdditionalRequestFields() : array
    {
        return [
            'VK_PANK' => '73000'
        ];
    }
}
