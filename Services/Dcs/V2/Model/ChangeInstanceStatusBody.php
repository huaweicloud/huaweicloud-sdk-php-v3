<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeInstanceStatusBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeInstanceStatusBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instances  实例的ID列表。
    * action  对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instances' => 'string[]',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instances  实例的ID列表。
    * action  对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instances' => null,
        'action' => null
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
    * instances  实例的ID列表。
    * action  对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instances' => 'instances',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instances  实例的ID列表。
    * action  对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'instances' => 'setInstances',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instances  实例的ID列表。
    * action  对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'instances' => 'getInstances',
            'action' => 'getAction'
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
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
    * Gets instances
    *  实例的ID列表。
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances 实例的ID列表。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets action
    *  对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 对实例的操作：  restart: 强制重启  soft_restart: 软重启，只重启进程  flush: 清空数据 > 当前版本，只有Redis 4.0和Redis 5.0实例支持清空数据功能，即flush操作。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

