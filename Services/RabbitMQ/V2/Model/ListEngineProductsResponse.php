<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEngineProductsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEngineProductsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    * total  **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    * versions  **参数解释**： 支持的产品版本类型。
    * products  **参数解释**： 产品规格的详细信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'total' => 'int',
            'nextOffset' => 'int',
            'previousOffset' => 'int',
            'versions' => 'string[]',
            'products' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ListEngineProductsEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    * total  **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    * versions  **参数解释**： 支持的产品版本类型。
    * products  **参数解释**： 产品规格的详细信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'total' => 'int32',
        'nextOffset' => 'int32',
        'previousOffset' => 'int32',
        'versions' => null,
        'products' => null
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
    * engine  **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    * total  **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    * versions  **参数解释**： 支持的产品版本类型。
    * products  **参数解释**： 产品规格的详细信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'total' => 'total',
            'nextOffset' => 'next_offset',
            'previousOffset' => 'previous_offset',
            'versions' => 'versions',
            'products' => 'products'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    * total  **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    * versions  **参数解释**： 支持的产品版本类型。
    * products  **参数解释**： 产品规格的详细信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'total' => 'setTotal',
            'nextOffset' => 'setNextOffset',
            'previousOffset' => 'setPreviousOffset',
            'versions' => 'setVersions',
            'products' => 'setProducts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    * total  **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    * versions  **参数解释**： 支持的产品版本类型。
    * products  **参数解释**： 产品规格的详细信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'total' => 'getTotal',
            'nextOffset' => 'getNextOffset',
            'previousOffset' => 'getPreviousOffset',
            'versions' => 'getVersions',
            'products' => 'getProducts'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['nextOffset'] = isset($data['nextOffset']) ? $data['nextOffset'] : null;
        $this->container['previousOffset'] = isset($data['previousOffset']) ? $data['previousOffset'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
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
    * Gets engine
    *  **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine **参数解释**： 消息引擎类型。 **取值范围**： rabbitmq：RabbitMQ引擎。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 查询结果总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets nextOffset
    *  **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getNextOffset()
    {
        return $this->container['nextOffset'];
    }

    /**
    * Sets nextOffset
    *
    * @param int|null $nextOffset **参数解释**： 下一个偏移量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNextOffset($nextOffset)
    {
        $this->container['nextOffset'] = $nextOffset;
        return $this;
    }

    /**
    * Gets previousOffset
    *  **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPreviousOffset()
    {
        return $this->container['previousOffset'];
    }

    /**
    * Sets previousOffset
    *
    * @param int|null $previousOffset **参数解释**： 前一个偏移量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPreviousOffset($previousOffset)
    {
        $this->container['previousOffset'] = $previousOffset;
        return $this;
    }

    /**
    * Gets versions
    *  **参数解释**： 支持的产品版本类型。
    *
    * @return string[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param string[]|null $versions **参数解释**： 支持的产品版本类型。
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
        return $this;
    }

    /**
    * Gets products
    *  **参数解释**： 产品规格的详细信息。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ListEngineProductsEntity[]|null
    */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
    * Sets products
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ListEngineProductsEntity[]|null $products **参数解释**： 产品规格的详细信息。
    *
    * @return $this
    */
    public function setProducts($products)
    {
        $this->container['products'] = $products;
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

