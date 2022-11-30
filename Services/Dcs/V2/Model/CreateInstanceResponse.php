<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  订单ID，仅在创建包周期实例时返回。
    * instances  缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'instances' => '\HuaweiCloud\SDK\Dcs\V2\Model\Instances[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  订单ID，仅在创建包周期实例时返回。
    * instances  缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'instances' => null
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
    * orderId  订单ID，仅在创建包周期实例时返回。
    * instances  缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  订单ID，仅在创建包周期实例时返回。
    * instances  缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  订单ID，仅在创建包周期实例时返回。
    * instances  缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'instances' => 'getInstances'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
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
    * Gets orderId
    *  订单ID，仅在创建包周期实例时返回。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID，仅在创建包周期实例时返回。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets instances
    *  缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\Instances[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\Instances[]|null $instances 缓存实例ID和名称，如果批量创建实例，则会返回多个。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

