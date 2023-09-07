<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesRecommendationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesRecommendationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  引擎类型
    * recommendedProducts  推荐商品信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'recommendedProducts' => '\HuaweiCloud\SDK\Rds\V3\Model\RecommendedProduct[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  引擎类型
    * recommendedProducts  推荐商品信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'recommendedProducts' => null
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
    * engine  引擎类型
    * recommendedProducts  推荐商品信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'recommendedProducts' => 'recommended_products'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  引擎类型
    * recommendedProducts  推荐商品信息
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'recommendedProducts' => 'setRecommendedProducts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  引擎类型
    * recommendedProducts  推荐商品信息
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'recommendedProducts' => 'getRecommendedProducts'
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
    const ENGINE_MYSQL = 'mysql';
    const ENGINE_POSTGRESQL = 'postgresql';
    const ENGINE_SQLSERVER = 'sqlserver';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_MYSQL,
            self::ENGINE_POSTGRESQL,
            self::ENGINE_SQLSERVER,
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
        $this->container['recommendedProducts'] = isset($data['recommendedProducts']) ? $data['recommendedProducts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  引擎类型
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
    * @param string|null $engine 引擎类型
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets recommendedProducts
    *  推荐商品信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\RecommendedProduct[]|null
    */
    public function getRecommendedProducts()
    {
        return $this->container['recommendedProducts'];
    }

    /**
    * Sets recommendedProducts
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\RecommendedProduct[]|null $recommendedProducts 推荐商品信息
    *
    * @return $this
    */
    public function setRecommendedProducts($recommendedProducts)
    {
        $this->container['recommendedProducts'] = $recommendedProducts;
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

