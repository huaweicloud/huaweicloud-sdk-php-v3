<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEngineProductsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEngineProductsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'type' => 'string',
            'productId' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'type' => null,
        'productId' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'type' => 'type',
            'productId' => 'product_id',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'type' => 'setType',
            'productId' => 'setProductId',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    * offset  **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'type' => 'getType',
            'productId' => 'getProductId',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
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
    * Gets engine
    *  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $type **参数解释**： 产品类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $productId **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 偏移量，表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

