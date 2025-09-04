<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceIds  设备id数组
    * action  任务执行的动作，当前支持SetProperties
    * paras  对应action的参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceIds' => 'string[]',
            'action' => 'string',
            'paras' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceIds  设备id数组
    * action  任务执行的动作，当前支持SetProperties
    * paras  对应action的参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceIds' => null,
        'action' => null,
        'paras' => null
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
    * deviceIds  设备id数组
    * action  任务执行的动作，当前支持SetProperties
    * paras  对应action的参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceIds' => 'device_ids',
            'action' => 'action',
            'paras' => 'paras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceIds  设备id数组
    * action  任务执行的动作，当前支持SetProperties
    * paras  对应action的参数
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceIds' => 'setDeviceIds',
            'action' => 'setAction',
            'paras' => 'setParas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceIds  设备id数组
    * action  任务执行的动作，当前支持SetProperties
    * paras  对应action的参数
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceIds' => 'getDeviceIds',
            'action' => 'getAction',
            'paras' => 'getParas'
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
        $this->container['deviceIds'] = isset($data['deviceIds']) ? $data['deviceIds'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['paras'] = isset($data['paras']) ? $data['paras'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['deviceIds'] === null) {
            $invalidProperties[] = "'deviceIds' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if (!preg_match("/(SetProperties)/", $this->container['action'])) {
                $invalidProperties[] = "invalid value for 'action', must be conform to the pattern /(SetProperties)/.";
            }
        if ($this->container['paras'] === null) {
            $invalidProperties[] = "'paras' can't be null";
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
    * Gets deviceIds
    *  设备id数组
    *
    * @return string[]
    */
    public function getDeviceIds()
    {
        return $this->container['deviceIds'];
    }

    /**
    * Sets deviceIds
    *
    * @param string[] $deviceIds 设备id数组
    *
    * @return $this
    */
    public function setDeviceIds($deviceIds)
    {
        $this->container['deviceIds'] = $deviceIds;
        return $this;
    }

    /**
    * Gets action
    *  任务执行的动作，当前支持SetProperties
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 任务执行的动作，当前支持SetProperties
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets paras
    *  对应action的参数
    *
    * @return object
    */
    public function getParas()
    {
        return $this->container['paras'];
    }

    /**
    * Sets paras
    *
    * @param object $paras 对应action的参数
    *
    * @return $this
    */
    public function setParas($paras)
    {
        $this->container['paras'] = $paras;
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

