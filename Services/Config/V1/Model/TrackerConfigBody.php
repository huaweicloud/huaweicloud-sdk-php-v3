<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrackerConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrackerConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channel  channel
    * selector  selector
    * retentionPeriodInDays  存储历史信息的天数
    * agencyName  IAM委托名称
    * domainId  账号ID
    * frozenStatus  frozenStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channel' => '\HuaweiCloud\SDK\Config\V1\Model\ChannelConfigBody',
            'selector' => '\HuaweiCloud\SDK\Config\V1\Model\SelectorConfigBody',
            'retentionPeriodInDays' => 'int',
            'agencyName' => 'string',
            'domainId' => 'string',
            'frozenStatus' => '\HuaweiCloud\SDK\Config\V1\Model\FrozenStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channel  channel
    * selector  selector
    * retentionPeriodInDays  存储历史信息的天数
    * agencyName  IAM委托名称
    * domainId  账号ID
    * frozenStatus  frozenStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channel' => null,
        'selector' => null,
        'retentionPeriodInDays' => null,
        'agencyName' => null,
        'domainId' => null,
        'frozenStatus' => null
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
    * channel  channel
    * selector  selector
    * retentionPeriodInDays  存储历史信息的天数
    * agencyName  IAM委托名称
    * domainId  账号ID
    * frozenStatus  frozenStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channel' => 'channel',
            'selector' => 'selector',
            'retentionPeriodInDays' => 'retention_period_in_days',
            'agencyName' => 'agency_name',
            'domainId' => 'domain_id',
            'frozenStatus' => 'frozen_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channel  channel
    * selector  selector
    * retentionPeriodInDays  存储历史信息的天数
    * agencyName  IAM委托名称
    * domainId  账号ID
    * frozenStatus  frozenStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'channel' => 'setChannel',
            'selector' => 'setSelector',
            'retentionPeriodInDays' => 'setRetentionPeriodInDays',
            'agencyName' => 'setAgencyName',
            'domainId' => 'setDomainId',
            'frozenStatus' => 'setFrozenStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channel  channel
    * selector  selector
    * retentionPeriodInDays  存储历史信息的天数
    * agencyName  IAM委托名称
    * domainId  账号ID
    * frozenStatus  frozenStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'channel' => 'getChannel',
            'selector' => 'getSelector',
            'retentionPeriodInDays' => 'getRetentionPeriodInDays',
            'agencyName' => 'getAgencyName',
            'domainId' => 'getDomainId',
            'frozenStatus' => 'getFrozenStatus'
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
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['retentionPeriodInDays'] = isset($data['retentionPeriodInDays']) ? $data['retentionPeriodInDays'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['frozenStatus'] = isset($data['frozenStatus']) ? $data['frozenStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['selector'] === null) {
            $invalidProperties[] = "'selector' can't be null";
        }
        if ($this->container['agencyName'] === null) {
            $invalidProperties[] = "'agencyName' can't be null";
        }
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
    * Gets channel
    *  channel
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ChannelConfigBody
    */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
    * Sets channel
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ChannelConfigBody $channel channel
    *
    * @return $this
    */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;
        return $this;
    }

    /**
    * Gets selector
    *  selector
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\SelectorConfigBody
    */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
    * Sets selector
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\SelectorConfigBody $selector selector
    *
    * @return $this
    */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;
        return $this;
    }

    /**
    * Gets retentionPeriodInDays
    *  存储历史信息的天数
    *
    * @return int|null
    */
    public function getRetentionPeriodInDays()
    {
        return $this->container['retentionPeriodInDays'];
    }

    /**
    * Sets retentionPeriodInDays
    *
    * @param int|null $retentionPeriodInDays 存储历史信息的天数
    *
    * @return $this
    */
    public function setRetentionPeriodInDays($retentionPeriodInDays)
    {
        $this->container['retentionPeriodInDays'] = $retentionPeriodInDays;
        return $this;
    }

    /**
    * Gets agencyName
    *  IAM委托名称
    *
    * @return string
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string $agencyName IAM委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets frozenStatus
    *  frozenStatus
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\FrozenStatus|null
    */
    public function getFrozenStatus()
    {
        return $this->container['frozenStatus'];
    }

    /**
    * Sets frozenStatus
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\FrozenStatus|null $frozenStatus frozenStatus
    *
    * @return $this
    */
    public function setFrozenStatus($frozenStatus)
    {
        $this->container['frozenStatus'] = $frozenStatus;
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

