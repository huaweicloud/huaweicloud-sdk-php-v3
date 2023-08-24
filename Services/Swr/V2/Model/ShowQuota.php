<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQuota implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQuota';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaLimit  配额限制
    * quotaKey  配额类型
    * unit  单位
    * used  已用配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaLimit' => 'int',
            'quotaKey' => 'string',
            'unit' => 'string',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaLimit  配额限制
    * quotaKey  配额类型
    * unit  单位
    * used  已用配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaLimit' => 'int32',
        'quotaKey' => null,
        'unit' => null,
        'used' => 'int32'
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
    * quotaLimit  配额限制
    * quotaKey  配额类型
    * unit  单位
    * used  已用配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaLimit' => 'quota_limit',
            'quotaKey' => 'quota_key',
            'unit' => 'unit',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaLimit  配额限制
    * quotaKey  配额类型
    * unit  单位
    * used  已用配额
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaLimit' => 'setQuotaLimit',
            'quotaKey' => 'setQuotaKey',
            'unit' => 'setUnit',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaLimit  配额限制
    * quotaKey  配额类型
    * unit  单位
    * used  已用配额
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaLimit' => 'getQuotaLimit',
            'quotaKey' => 'getQuotaKey',
            'unit' => 'getUnit',
            'used' => 'getUsed'
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
        $this->container['quotaLimit'] = isset($data['quotaLimit']) ? $data['quotaLimit'] : null;
        $this->container['quotaKey'] = isset($data['quotaKey']) ? $data['quotaKey'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quotaLimit'] === null) {
            $invalidProperties[] = "'quotaLimit' can't be null";
        }
        if ($this->container['quotaKey'] === null) {
            $invalidProperties[] = "'quotaKey' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
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
    * Gets quotaLimit
    *  配额限制
    *
    * @return int
    */
    public function getQuotaLimit()
    {
        return $this->container['quotaLimit'];
    }

    /**
    * Sets quotaLimit
    *
    * @param int $quotaLimit 配额限制
    *
    * @return $this
    */
    public function setQuotaLimit($quotaLimit)
    {
        $this->container['quotaLimit'] = $quotaLimit;
        return $this;
    }

    /**
    * Gets quotaKey
    *  配额类型
    *
    * @return string
    */
    public function getQuotaKey()
    {
        return $this->container['quotaKey'];
    }

    /**
    * Sets quotaKey
    *
    * @param string $quotaKey 配额类型
    *
    * @return $this
    */
    public function setQuotaKey($quotaKey)
    {
        $this->container['quotaKey'] = $quotaKey;
        return $this;
    }

    /**
    * Gets unit
    *  单位
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit 单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets used
    *  已用配额
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used 已用配额
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

