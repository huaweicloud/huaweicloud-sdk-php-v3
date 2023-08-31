<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EffectiveRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EffectiveRoute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routeId  路由ID
    * destination  路由目的地
    * nextHops  路由下一跳列表
    * isBlackhole  是否黑洞路由
    * routeType  路由类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routeId' => 'string',
            'destination' => 'string',
            'nextHops' => '\HuaweiCloud\SDK\Er\V3\Model\RouteAttachment[]',
            'isBlackhole' => 'bool',
            'routeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routeId  路由ID
    * destination  路由目的地
    * nextHops  路由下一跳列表
    * isBlackhole  是否黑洞路由
    * routeType  路由类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routeId' => null,
        'destination' => null,
        'nextHops' => null,
        'isBlackhole' => null,
        'routeType' => null
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
    * routeId  路由ID
    * destination  路由目的地
    * nextHops  路由下一跳列表
    * isBlackhole  是否黑洞路由
    * routeType  路由类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routeId' => 'route_id',
            'destination' => 'destination',
            'nextHops' => 'next_hops',
            'isBlackhole' => 'is_blackhole',
            'routeType' => 'route_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routeId  路由ID
    * destination  路由目的地
    * nextHops  路由下一跳列表
    * isBlackhole  是否黑洞路由
    * routeType  路由类型
    *
    * @var string[]
    */
    protected static $setters = [
            'routeId' => 'setRouteId',
            'destination' => 'setDestination',
            'nextHops' => 'setNextHops',
            'isBlackhole' => 'setIsBlackhole',
            'routeType' => 'setRouteType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routeId  路由ID
    * destination  路由目的地
    * nextHops  路由下一跳列表
    * isBlackhole  是否黑洞路由
    * routeType  路由类型
    *
    * @var string[]
    */
    protected static $getters = [
            'routeId' => 'getRouteId',
            'destination' => 'getDestination',
            'nextHops' => 'getNextHops',
            'isBlackhole' => 'getIsBlackhole',
            'routeType' => 'getRouteType'
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
        $this->container['routeId'] = isset($data['routeId']) ? $data['routeId'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['nextHops'] = isset($data['nextHops']) ? $data['nextHops'] : null;
        $this->container['isBlackhole'] = isset($data['isBlackhole']) ? $data['isBlackhole'] : null;
        $this->container['routeType'] = isset($data['routeType']) ? $data['routeType'] : null;
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
    * Gets routeId
    *  路由ID
    *
    * @return string|null
    */
    public function getRouteId()
    {
        return $this->container['routeId'];
    }

    /**
    * Sets routeId
    *
    * @param string|null $routeId 路由ID
    *
    * @return $this
    */
    public function setRouteId($routeId)
    {
        $this->container['routeId'] = $routeId;
        return $this;
    }

    /**
    * Gets destination
    *  路由目的地
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 路由目的地
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets nextHops
    *  路由下一跳列表
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\RouteAttachment[]|null
    */
    public function getNextHops()
    {
        return $this->container['nextHops'];
    }

    /**
    * Sets nextHops
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\RouteAttachment[]|null $nextHops 路由下一跳列表
    *
    * @return $this
    */
    public function setNextHops($nextHops)
    {
        $this->container['nextHops'] = $nextHops;
        return $this;
    }

    /**
    * Gets isBlackhole
    *  是否黑洞路由
    *
    * @return bool|null
    */
    public function getIsBlackhole()
    {
        return $this->container['isBlackhole'];
    }

    /**
    * Sets isBlackhole
    *
    * @param bool|null $isBlackhole 是否黑洞路由
    *
    * @return $this
    */
    public function setIsBlackhole($isBlackhole)
    {
        $this->container['isBlackhole'] = $isBlackhole;
        return $this;
    }

    /**
    * Gets routeType
    *  路由类型
    *
    * @return string|null
    */
    public function getRouteType()
    {
        return $this->container['routeType'];
    }

    /**
    * Sets routeType
    *
    * @param string|null $routeType 路由类型
    *
    * @return $this
    */
    public function setRouteType($routeType)
    {
        $this->container['routeType'] = $routeType;
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

