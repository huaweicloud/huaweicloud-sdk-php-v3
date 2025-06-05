<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionInfoFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionInfo_flavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规格名称
    * concurrencyType  并发规格类型
    * concurrency  并发数
    * bandwidthType  带宽类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'concurrencyType' => 'string',
            'concurrency' => 'int',
            'bandwidthType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规格名称
    * concurrencyType  并发规格类型
    * concurrency  并发数
    * bandwidthType  带宽类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'concurrencyType' => null,
        'concurrency' => null,
        'bandwidthType' => null
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
    * name  规格名称
    * concurrencyType  并发规格类型
    * concurrency  并发数
    * bandwidthType  带宽类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'concurrencyType' => 'concurrency_type',
            'concurrency' => 'concurrency',
            'bandwidthType' => 'bandwidth_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规格名称
    * concurrencyType  并发规格类型
    * concurrency  并发数
    * bandwidthType  带宽类型
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'concurrencyType' => 'setConcurrencyType',
            'concurrency' => 'setConcurrency',
            'bandwidthType' => 'setBandwidthType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规格名称
    * concurrencyType  并发规格类型
    * concurrency  并发数
    * bandwidthType  带宽类型
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'concurrencyType' => 'getConcurrencyType',
            'concurrency' => 'getConcurrency',
            'bandwidthType' => 'getBandwidthType'
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
    const CONCURRENCY_TYPE_SHARED = 'shared';
    const CONCURRENCY_TYPE_EXCLUSIVE = 'exclusive';
    const BANDWIDTH_TYPE_SHARED = 'shared';
    const BANDWIDTH_TYPE_EXCLUSIVE = 'exclusive';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConcurrencyTypeAllowableValues()
    {
        return [
            self::CONCURRENCY_TYPE_SHARED,
            self::CONCURRENCY_TYPE_EXCLUSIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthTypeAllowableValues()
    {
        return [
            self::BANDWIDTH_TYPE_SHARED,
            self::BANDWIDTH_TYPE_EXCLUSIVE,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['concurrencyType'] = isset($data['concurrencyType']) ? $data['concurrencyType'] : null;
        $this->container['concurrency'] = isset($data['concurrency']) ? $data['concurrency'] : null;
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConcurrencyTypeAllowableValues();
                if (!is_null($this->container['concurrencyType']) && !in_array($this->container['concurrencyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'concurrencyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getBandwidthTypeAllowableValues();
                if (!is_null($this->container['bandwidthType']) && !in_array($this->container['bandwidthType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bandwidthType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  规格名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规格名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets concurrencyType
    *  并发规格类型
    *
    * @return string|null
    */
    public function getConcurrencyType()
    {
        return $this->container['concurrencyType'];
    }

    /**
    * Sets concurrencyType
    *
    * @param string|null $concurrencyType 并发规格类型
    *
    * @return $this
    */
    public function setConcurrencyType($concurrencyType)
    {
        $this->container['concurrencyType'] = $concurrencyType;
        return $this;
    }

    /**
    * Gets concurrency
    *  并发数
    *
    * @return int|null
    */
    public function getConcurrency()
    {
        return $this->container['concurrency'];
    }

    /**
    * Sets concurrency
    *
    * @param int|null $concurrency 并发数
    *
    * @return $this
    */
    public function setConcurrency($concurrency)
    {
        $this->container['concurrency'] = $concurrency;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  带宽类型
    *
    * @return string|null
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param string|null $bandwidthType 带宽类型
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
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

