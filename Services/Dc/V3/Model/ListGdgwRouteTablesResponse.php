<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGdgwRouteTablesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGdgwRouteTablesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求id
    * gdgwRoutetable  全域接入网关路由表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'gdgwRoutetable' => '\HuaweiCloud\SDK\Dc\V3\Model\ShowGdgwRoutetable[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求id
    * gdgwRoutetable  全域接入网关路由表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'gdgwRoutetable' => null
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
    * requestId  请求id
    * gdgwRoutetable  全域接入网关路由表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'gdgwRoutetable' => 'gdgw_routetable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求id
    * gdgwRoutetable  全域接入网关路由表
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'gdgwRoutetable' => 'setGdgwRoutetable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求id
    * gdgwRoutetable  全域接入网关路由表
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'gdgwRoutetable' => 'getGdgwRoutetable'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['gdgwRoutetable'] = isset($data['gdgwRoutetable']) ? $data['gdgwRoutetable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 0.";
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
    * Gets requestId
    *  请求id
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求id
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets gdgwRoutetable
    *  全域接入网关路由表
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\ShowGdgwRoutetable[]|null
    */
    public function getGdgwRoutetable()
    {
        return $this->container['gdgwRoutetable'];
    }

    /**
    * Sets gdgwRoutetable
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\ShowGdgwRoutetable[]|null $gdgwRoutetable 全域接入网关路由表
    *
    * @return $this
    */
    public function setGdgwRoutetable($gdgwRoutetable)
    {
        $this->container['gdgwRoutetable'] = $gdgwRoutetable;
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

