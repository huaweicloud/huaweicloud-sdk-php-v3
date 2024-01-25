<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Http2Rpc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Http2Rpc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gatewayId  网关的ID。
    * pluginConfig  传递给插件的配置。
    * name  name
    * routeName  路由的名称。
    * routeDestinationName  目标路由的名称。
    * dubbo  dubbo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gatewayId' => 'string',
            'pluginConfig' => 'object',
            'name' => 'string',
            'routeName' => 'string',
            'routeDestinationName' => 'string',
            'dubbo' => '\HuaweiCloud\SDK\Cse\V1\Model\Dubbo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gatewayId  网关的ID。
    * pluginConfig  传递给插件的配置。
    * name  name
    * routeName  路由的名称。
    * routeDestinationName  目标路由的名称。
    * dubbo  dubbo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gatewayId' => null,
        'pluginConfig' => null,
        'name' => null,
        'routeName' => null,
        'routeDestinationName' => null,
        'dubbo' => null
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
    * gatewayId  网关的ID。
    * pluginConfig  传递给插件的配置。
    * name  name
    * routeName  路由的名称。
    * routeDestinationName  目标路由的名称。
    * dubbo  dubbo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gatewayId' => 'gatewayId',
            'pluginConfig' => 'pluginConfig',
            'name' => 'name',
            'routeName' => 'routeName',
            'routeDestinationName' => 'routeDestinationName',
            'dubbo' => 'dubbo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gatewayId  网关的ID。
    * pluginConfig  传递给插件的配置。
    * name  name
    * routeName  路由的名称。
    * routeDestinationName  目标路由的名称。
    * dubbo  dubbo
    *
    * @var string[]
    */
    protected static $setters = [
            'gatewayId' => 'setGatewayId',
            'pluginConfig' => 'setPluginConfig',
            'name' => 'setName',
            'routeName' => 'setRouteName',
            'routeDestinationName' => 'setRouteDestinationName',
            'dubbo' => 'setDubbo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gatewayId  网关的ID。
    * pluginConfig  传递给插件的配置。
    * name  name
    * routeName  路由的名称。
    * routeDestinationName  目标路由的名称。
    * dubbo  dubbo
    *
    * @var string[]
    */
    protected static $getters = [
            'gatewayId' => 'getGatewayId',
            'pluginConfig' => 'getPluginConfig',
            'name' => 'getName',
            'routeName' => 'getRouteName',
            'routeDestinationName' => 'getRouteDestinationName',
            'dubbo' => 'getDubbo'
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
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['pluginConfig'] = isset($data['pluginConfig']) ? $data['pluginConfig'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['routeName'] = isset($data['routeName']) ? $data['routeName'] : null;
        $this->container['routeDestinationName'] = isset($data['routeDestinationName']) ? $data['routeDestinationName'] : null;
        $this->container['dubbo'] = isset($data['dubbo']) ? $data['dubbo'] : null;
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
    * Gets gatewayId
    *  网关的ID。
    *
    * @return string|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string|null $gatewayId 网关的ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets pluginConfig
    *  传递给插件的配置。
    *
    * @return object|null
    */
    public function getPluginConfig()
    {
        return $this->container['pluginConfig'];
    }

    /**
    * Sets pluginConfig
    *
    * @param object|null $pluginConfig 传递给插件的配置。
    *
    * @return $this
    */
    public function setPluginConfig($pluginConfig)
    {
        $this->container['pluginConfig'] = $pluginConfig;
        return $this;
    }

    /**
    * Gets name
    *  name
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets routeName
    *  路由的名称。
    *
    * @return string|null
    */
    public function getRouteName()
    {
        return $this->container['routeName'];
    }

    /**
    * Sets routeName
    *
    * @param string|null $routeName 路由的名称。
    *
    * @return $this
    */
    public function setRouteName($routeName)
    {
        $this->container['routeName'] = $routeName;
        return $this;
    }

    /**
    * Gets routeDestinationName
    *  目标路由的名称。
    *
    * @return string|null
    */
    public function getRouteDestinationName()
    {
        return $this->container['routeDestinationName'];
    }

    /**
    * Sets routeDestinationName
    *
    * @param string|null $routeDestinationName 目标路由的名称。
    *
    * @return $this
    */
    public function setRouteDestinationName($routeDestinationName)
    {
        $this->container['routeDestinationName'] = $routeDestinationName;
        return $this;
    }

    /**
    * Gets dubbo
    *  dubbo
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\Dubbo|null
    */
    public function getDubbo()
    {
        return $this->container['dubbo'];
    }

    /**
    * Sets dubbo
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\Dubbo|null $dubbo dubbo
    *
    * @return $this
    */
    public function setDubbo($dubbo)
    {
        $this->container['dubbo'] = $dubbo;
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

