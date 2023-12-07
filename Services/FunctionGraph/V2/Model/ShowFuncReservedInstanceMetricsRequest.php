<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFuncReservedInstanceMetricsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFuncReservedInstanceMetricsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * funcUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'string',
            'funcUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * funcUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => null,
        'funcUrn' => null
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
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * funcUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'funcUrn' => 'func_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * funcUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'funcUrn' => 'setFuncUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  本次查询起始位置，默认值0
    * limit  本次查询最大返回的数据条数，最大值500，默认值100
    * funcUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'funcUrn' => 'getFuncUrn'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['funcUrn'] = isset($data['funcUrn']) ? $data['funcUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 64)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 0)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['funcUrn'] === null) {
            $invalidProperties[] = "'funcUrn' can't be null";
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
    * Gets marker
    *  本次查询起始位置，默认值0
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 本次查询起始位置，默认值0
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  本次查询最大返回的数据条数，最大值500，默认值100
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 本次查询最大返回的数据条数，最大值500，默认值100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets funcUrn
    *  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return string
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string $funcUrn 函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return $this
    */
    public function setFuncUrn($funcUrn)
    {
        $this->container['funcUrn'] = $funcUrn;
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

