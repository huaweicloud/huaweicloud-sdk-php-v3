<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAsyncDeviceCommandRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAsyncDeviceCommandRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * commandId  下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'instanceId' => 'string',
            'commandId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * commandId  下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'instanceId' => null,
        'commandId' => null
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
    * deviceId  下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * commandId  下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'instanceId' => 'Instance-Id',
            'commandId' => 'command_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * commandId  下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'instanceId' => 'setInstanceId',
            'commandId' => 'setCommandId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    * instanceId  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    * commandId  下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'instanceId' => 'getInstanceId',
            'commandId' => 'getCommandId'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['commandId'] = isset($data['commandId']) ? $data['commandId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-f0-9-]{36}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-f0-9-]{36}$/.";
            }
        if ($this->container['commandId'] === null) {
            $invalidProperties[] = "'commandId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,100}$/", $this->container['commandId'])) {
                $invalidProperties[] = "invalid value for 'commandId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,100}$/.";
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
    * Gets deviceId
    *  下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    *
    * @return string
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string $deviceId 下发消息的设备ID，用于唯一标识一个设备，在注册设备时由物联网平台分配获。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。物理多租下各实例的唯一标识，一般华为云租户无需携带该参数，仅在物理多租场景下从管理面访问API时需要携带该参数。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets commandId
    *  下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @return string
    */
    public function getCommandId()
    {
        return $this->container['commandId'];
    }

    /**
    * Sets commandId
    *
    * @param string $commandId 下发命令的命令id，用于唯一标识一个消息，在下发命令时由物联网平台分配获得。
    *
    * @return $this
    */
    public function setCommandId($commandId)
    {
        $this->container['commandId'] = $commandId;
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

