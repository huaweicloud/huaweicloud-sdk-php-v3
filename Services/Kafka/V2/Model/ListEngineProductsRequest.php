<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

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
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'productId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'productId' => null
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
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'productId' => 'product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'productId' => 'setProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
    * productId  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'productId' => 'getProductId'
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
    const ENGINE_KAFKA = 'kafka';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_KAFKA,
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
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
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
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
    * Gets engine
    *  **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
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
    * @param string $engine **参数解释**： 消息引擎的类型。 **约束限制**： 不涉及。 **取值范围**： kafka **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释**： 产品ID。 **约束限制**： 不涉及。 **取值范围**： [- s6.2u4g.single.small：对应规格kafka.2u4g.single.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- c6.2u4g.single：对应规格kafka.2u4g.single。](tag:ax,dt,hws,hws_eu,hws_hk,srg) [- s6.2u4g.cluster.small：对应规格kafka.2u4g.cluster.small。](tag:ax,dt,hws,hws_eu,hws_hk,srg) - c6.2u4g.cluster：对应规格kafka.2u4g.cluster。 - c6.4u8g.cluster：对应规格kafka.4u8g.cluster。 - c6.8u16g.cluster：对应规格kafka.8u16g.cluster。 - c6.12u24g.cluster：对应规格kafka.12u24g.cluster。 - c6.16u32g.cluster：对应规格kafka.16u32g.cluster。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
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

