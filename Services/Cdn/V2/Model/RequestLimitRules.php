<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestLimitRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestLimitRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  配置开关（on/off）
    * type  限速方式，目前只支持按流量大小限速，size:大小。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'type' => 'string',
            'limitRateAfter' => 'int',
            'limitRateValue' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  配置开关（on/off）
    * type  限速方式，目前只支持按流量大小限速，size:大小。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'type' => null,
        'limitRateAfter' => 'int64',
        'limitRateValue' => 'int32'
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
    * status  配置开关（on/off）
    * type  限速方式，目前只支持按流量大小限速，size:大小。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'type' => 'type',
            'limitRateAfter' => 'limit_rate_after',
            'limitRateValue' => 'limit_rate_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  配置开关（on/off）
    * type  限速方式，目前只支持按流量大小限速，size:大小。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'type' => 'setType',
            'limitRateAfter' => 'setLimitRateAfter',
            'limitRateValue' => 'setLimitRateValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  配置开关（on/off）
    * type  限速方式，目前只支持按流量大小限速，size:大小。
    * limitRateAfter  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    * limitRateValue  限速值,单位Bps，取值范围 0-104857600
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'type' => 'getType',
            'limitRateAfter' => 'getLimitRateAfter',
            'limitRateValue' => 'getLimitRateValue'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limitRateAfter'] = isset($data['limitRateAfter']) ? $data['limitRateAfter'] : null;
        $this->container['limitRateValue'] = isset($data['limitRateValue']) ? $data['limitRateValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets status
    *  配置开关（on/off）
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 配置开关（on/off）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  限速方式，目前只支持按流量大小限速，size:大小。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 限速方式，目前只支持按流量大小限速，size:大小。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limitRateAfter
    *  限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    *
    * @return int|null
    */
    public function getLimitRateAfter()
    {
        return $this->container['limitRateAfter'];
    }

    /**
    * Sets limitRateAfter
    *
    * @param int|null $limitRateAfter 限速条件,type=size,limit_rate_after=50表示从传输表示传输50个字节后开始限速且限速值为limit_rate_value， 单位byte，取值范围：0-1073741824。
    *
    * @return $this
    */
    public function setLimitRateAfter($limitRateAfter)
    {
        $this->container['limitRateAfter'] = $limitRateAfter;
        return $this;
    }

    /**
    * Gets limitRateValue
    *  限速值,单位Bps，取值范围 0-104857600
    *
    * @return int|null
    */
    public function getLimitRateValue()
    {
        return $this->container['limitRateValue'];
    }

    /**
    * Sets limitRateValue
    *
    * @param int|null $limitRateValue 限速值,单位Bps，取值范围 0-104857600
    *
    * @return $this
    */
    public function setLimitRateValue($limitRateValue)
    {
        $this->container['limitRateValue'] = $limitRateValue;
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

