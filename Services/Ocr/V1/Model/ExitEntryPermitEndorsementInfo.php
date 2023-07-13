<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExitEntryPermitEndorsementInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExitEntryPermitEndorsementInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endorsementType  签注种类。
    * validRoundTrips  签注往返有效次数。
    * endorsementValidPeriod  签注有效期。
    * remark  签注备注。
    * issueInfo  签注签发信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endorsementType' => 'string',
            'validRoundTrips' => 'string',
            'endorsementValidPeriod' => 'string',
            'remark' => 'string',
            'issueInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endorsementType  签注种类。
    * validRoundTrips  签注往返有效次数。
    * endorsementValidPeriod  签注有效期。
    * remark  签注备注。
    * issueInfo  签注签发信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endorsementType' => null,
        'validRoundTrips' => null,
        'endorsementValidPeriod' => null,
        'remark' => null,
        'issueInfo' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * endorsementType  签注种类。
    * validRoundTrips  签注往返有效次数。
    * endorsementValidPeriod  签注有效期。
    * remark  签注备注。
    * issueInfo  签注签发信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endorsementType' => 'endorsement_type',
            'validRoundTrips' => 'valid_round_trips',
            'endorsementValidPeriod' => 'endorsement_valid_period',
            'remark' => 'remark',
            'issueInfo' => 'issue_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endorsementType  签注种类。
    * validRoundTrips  签注往返有效次数。
    * endorsementValidPeriod  签注有效期。
    * remark  签注备注。
    * issueInfo  签注签发信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'endorsementType' => 'setEndorsementType',
            'validRoundTrips' => 'setValidRoundTrips',
            'endorsementValidPeriod' => 'setEndorsementValidPeriod',
            'remark' => 'setRemark',
            'issueInfo' => 'setIssueInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endorsementType  签注种类。
    * validRoundTrips  签注往返有效次数。
    * endorsementValidPeriod  签注有效期。
    * remark  签注备注。
    * issueInfo  签注签发信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'endorsementType' => 'getEndorsementType',
            'validRoundTrips' => 'getValidRoundTrips',
            'endorsementValidPeriod' => 'getEndorsementValidPeriod',
            'remark' => 'getRemark',
            'issueInfo' => 'getIssueInfo'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['endorsementType'] = isset($data['endorsementType']) ? $data['endorsementType'] : null;
        $this->container['validRoundTrips'] = isset($data['validRoundTrips']) ? $data['validRoundTrips'] : null;
        $this->container['endorsementValidPeriod'] = isset($data['endorsementValidPeriod']) ? $data['endorsementValidPeriod'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['issueInfo'] = isset($data['issueInfo']) ? $data['issueInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets endorsementType
    *  签注种类。
    *
    * @return string|null
    */
    public function getEndorsementType()
    {
        return $this->container['endorsementType'];
    }

    /**
    * Sets endorsementType
    *
    * @param string|null $endorsementType 签注种类。
    *
    * @return $this
    */
    public function setEndorsementType($endorsementType)
    {
        $this->container['endorsementType'] = $endorsementType;
        return $this;
    }

    /**
    * Gets validRoundTrips
    *  签注往返有效次数。
    *
    * @return string|null
    */
    public function getValidRoundTrips()
    {
        return $this->container['validRoundTrips'];
    }

    /**
    * Sets validRoundTrips
    *
    * @param string|null $validRoundTrips 签注往返有效次数。
    *
    * @return $this
    */
    public function setValidRoundTrips($validRoundTrips)
    {
        $this->container['validRoundTrips'] = $validRoundTrips;
        return $this;
    }

    /**
    * Gets endorsementValidPeriod
    *  签注有效期。
    *
    * @return string|null
    */
    public function getEndorsementValidPeriod()
    {
        return $this->container['endorsementValidPeriod'];
    }

    /**
    * Sets endorsementValidPeriod
    *
    * @param string|null $endorsementValidPeriod 签注有效期。
    *
    * @return $this
    */
    public function setEndorsementValidPeriod($endorsementValidPeriod)
    {
        $this->container['endorsementValidPeriod'] = $endorsementValidPeriod;
        return $this;
    }

    /**
    * Gets remark
    *  签注备注。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 签注备注。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets issueInfo
    *  签注签发信息。
    *
    * @return string|null
    */
    public function getIssueInfo()
    {
        return $this->container['issueInfo'];
    }

    /**
    * Sets issueInfo
    *
    * @param string|null $issueInfo 签注签发信息。
    *
    * @return $this
    */
    public function setIssueInfo($issueInfo)
    {
        $this->container['issueInfo'] = $issueInfo;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

