<?php

declare(strict_types=1);

/*
 * SiskomVoiceAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SiskomVoiceAPILib\Models;

use stdClass;

class IVRDeleteItemRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $ivrItemId;

    /**
     * @param string $ivrItemId
     */
    public function __construct(string $ivrItemId)
    {
        $this->ivrItemId = $ivrItemId;
    }

    /**
     * Returns Ivr Item Id.
     */
    public function getIvrItemId(): string
    {
        return $this->ivrItemId;
    }

    /**
     * Sets Ivr Item Id.
     *
     * @required
     * @maps ivr_item_id
     */
    public function setIvrItemId(string $ivrItemId): void
    {
        $this->ivrItemId = $ivrItemId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['ivr_item_id'] = $this->ivrItemId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
