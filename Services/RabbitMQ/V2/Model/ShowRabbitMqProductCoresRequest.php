<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRabbitMqProductCoresRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRabbitMqProductCoresRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'productId' => 'string',
            'brokerNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'productId' => null,
        'brokerNum' => null
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
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'productId' => 'product_id',
            'brokerNum' => 'broker_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'productId' => 'setProductId',
            'brokerNum' => 'setBrokerNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'productId' => 'getProductId',
            'brokerNum' => 'getBrokerNum'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['brokerNum'] === null) {
            $invalidProperties[] = "'brokerNum' can't be null";
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
    * Gets instanceId
    *  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。实例ID非必填项，只有填写实例ID响应体才会返回total_extend_storage_space。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： - c6.2u4g.single：对应规格rabbitmq.2u4g.single。 - c6.4u8g.single：对应规格rabbitmq.4u8g.single。 - c6.8u16g.single：对应规格rabbitmq.8u16g.single。 - c6.16u32g.single：对应规格rabbitmq.16u32g.single。 - c6.24u48g.single：对应规格rabbitmq.24u48g.single。 - c6.2u4g.cluster：对应规格rabbitmq.2u4g.cluster。 - c6.4u8g.cluster：对应规格rabbitmq.4u8g.cluster。 - c6.8u16g.cluster：对应规格rabbitmq.8u16g.cluster。 - c6.12u24g.cluster：对应规格rabbitmq.12u24g.cluster。 - c6.16u32g.cluster：对应规格rabbitmq.16u32g.cluster。 - c6.24u48g.cluster：对应规格rabbitmq.24u48g.cluster。 - c6.32u64g.cluster：对应规格rabbitmq.32u64g.cluster。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets brokerNum
    *  **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getBrokerNum()
    {
        return $this->container['brokerNum'];
    }

    /**
    * Sets brokerNum
    *
    * @param string $brokerNum **参数解释**： broker数量。 **约束限制**： 不涉及。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
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

