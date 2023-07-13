<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProductsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProductsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hourly  表示按需付费的产品列表。
    * monthly  表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hourly' => '\HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespHourly[]',
            'monthly' => '\HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespHourly[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hourly  表示按需付费的产品列表。
    * monthly  表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hourly' => null,
        'monthly' => null
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
    * hourly  表示按需付费的产品列表。
    * monthly  表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hourly' => 'Hourly',
            'monthly' => 'Monthly'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hourly  表示按需付费的产品列表。
    * monthly  表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'hourly' => 'setHourly',
            'monthly' => 'setMonthly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hourly  表示按需付费的产品列表。
    * monthly  表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'hourly' => 'getHourly',
            'monthly' => 'getMonthly'
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
        $this->container['hourly'] = isset($data['hourly']) ? $data['hourly'] : null;
        $this->container['monthly'] = isset($data['monthly']) ? $data['monthly'] : null;
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
    * Gets hourly
    *  表示按需付费的产品列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespHourly[]|null
    */
    public function getHourly()
    {
        return $this->container['hourly'];
    }

    /**
    * Sets hourly
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespHourly[]|null $hourly 表示按需付费的产品列表。
    *
    * @return $this
    */
    public function setHourly($hourly)
    {
        $this->container['hourly'] = $hourly;
        return $this;
    }

    /**
    * Gets monthly
    *  表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespHourly[]|null
    */
    public function getMonthly()
    {
        return $this->container['monthly'];
    }

    /**
    * Sets monthly
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespHourly[]|null $monthly 表示包年包月的产品列表。当前暂不支持通过API创建包年包月的Kafka实例。
    *
    * @return $this
    */
    public function setMonthly($monthly)
    {
        $this->container['monthly'] = $monthly;
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

