<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * appId  应用id。
    * appName  应用名称。
    * permissions  权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'broadcast' => 'bool',
            'brokers' => 'string[]',
            'name' => 'string',
            'retryMaxTime' => 'float',
            'appId' => 'string',
            'appName' => 'string',
            'permissions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * appId  应用id。
    * appName  应用名称。
    * permissions  权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'broadcast' => null,
        'brokers' => null,
        'name' => null,
        'retryMaxTime' => null,
        'appId' => null,
        'appName' => null,
        'permissions' => null
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
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * appId  应用id。
    * appName  应用名称。
    * permissions  权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'broadcast' => 'broadcast',
            'brokers' => 'brokers',
            'name' => 'name',
            'retryMaxTime' => 'retry_max_time',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'permissions' => 'permissions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * appId  应用id。
    * appName  应用名称。
    * permissions  权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'broadcast' => 'setBroadcast',
            'brokers' => 'setBrokers',
            'name' => 'setName',
            'retryMaxTime' => 'setRetryMaxTime',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'permissions' => 'setPermissions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * appId  应用id。
    * appName  应用名称。
    * permissions  权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'broadcast' => 'getBroadcast',
            'brokers' => 'getBrokers',
            'name' => 'getName',
            'retryMaxTime' => 'getRetryMaxTime',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'permissions' => 'getPermissions'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['broadcast'] = isset($data['broadcast']) ? $data['broadcast'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['retryMaxTime'] = isset($data['retryMaxTime']) ? $data['retryMaxTime'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
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
    * Gets enabled
    *  是否可以消费。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否可以消费。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets broadcast
    *  是否广播。
    *
    * @return bool|null
    */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
    * Sets broadcast
    *
    * @param bool|null $broadcast 是否广播。
    *
    * @return $this
    */
    public function setBroadcast($broadcast)
    {
        $this->container['broadcast'] = $broadcast;
        return $this;
    }

    /**
    * Gets brokers
    *  关联的代理列表。
    *
    * @return string[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param string[]|null $brokers 关联的代理列表。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets name
    *  消费组名称。
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
    * @param string|null $name 消费组名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets retryMaxTime
    *  最大重试次数。
    *
    * @return float|null
    */
    public function getRetryMaxTime()
    {
        return $this->container['retryMaxTime'];
    }

    /**
    * Sets retryMaxTime
    *
    * @param float|null $retryMaxTime 最大重试次数。
    *
    * @return $this
    */
    public function setRetryMaxTime($retryMaxTime)
    {
        $this->container['retryMaxTime'] = $retryMaxTime;
        return $this;
    }

    /**
    * Gets appId
    *  应用id。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets permissions
    *  权限。
    *
    * @return string[]|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param string[]|null $permissions 权限。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
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

