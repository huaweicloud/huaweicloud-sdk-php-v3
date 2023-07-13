<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteConnectorRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteConnectorRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
    * csbInstanceProductId  包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'csbInstanceProductId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
    * csbInstanceProductId  包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'csbInstanceProductId' => null
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
    * orderId  cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
    * csbInstanceProductId  包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'csbInstanceProductId' => 'csb_instance_product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
    * csbInstanceProductId  包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'csbInstanceProductId' => 'setCsbInstanceProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
    * csbInstanceProductId  包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'csbInstanceProductId' => 'getCsbInstanceProductId'
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
        $this->container['csbInstanceProductId'] = isset($data['csbInstanceProductId']) ? $data['csbInstanceProductId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 100)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['csbInstanceProductId']) && (mb_strlen($this->container['csbInstanceProductId']) > 100)) {
                $invalidProperties[] = "invalid value for 'csbInstanceProductId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['csbInstanceProductId']) && (mb_strlen($this->container['csbInstanceProductId']) < 1)) {
                $invalidProperties[] = "invalid value for 'csbInstanceProductId', the character length must be bigger than or equal to 1.";
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
    * Gets orderId
    *  cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
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
    * @param string|null $orderId cbc生成实例变更的订单 按需实例不传入此参数。 包周期实例传入删除connector时生成的订单，由cbc调用时传入。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets csbInstanceProductId
    *  包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @return string|null
    */
    public function getCsbInstanceProductId()
    {
        return $this->container['csbInstanceProductId'];
    }

    /**
    * Sets csbInstanceProductId
    *
    * @param string|null $csbInstanceProductId 包周期实例变更时的product id 按需实例不传入此参数。 包周期实例传入对变更实例规格的product，由cbc调用时传入。
    *
    * @return $this
    */
    public function setCsbInstanceProductId($csbInstanceProductId)
    {
        $this->container['csbInstanceProductId'] = $csbInstanceProductId;
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

