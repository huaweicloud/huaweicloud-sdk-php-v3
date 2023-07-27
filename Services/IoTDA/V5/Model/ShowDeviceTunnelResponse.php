<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeviceTunnelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeviceTunnelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tunnelId  隧道ID
    * deviceId  设备ID
    * createTime  隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * closedTime  隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  隧道状态 CLOSED | OPEN
    * sourceConnectState  sourceConnectState
    * deviceConnectState  deviceConnectState
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tunnelId' => 'string',
            'deviceId' => 'string',
            'createTime' => 'string',
            'closedTime' => 'string',
            'status' => 'string',
            'sourceConnectState' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ConnectState',
            'deviceConnectState' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ConnectState'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tunnelId  隧道ID
    * deviceId  设备ID
    * createTime  隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * closedTime  隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  隧道状态 CLOSED | OPEN
    * sourceConnectState  sourceConnectState
    * deviceConnectState  deviceConnectState
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tunnelId' => null,
        'deviceId' => null,
        'createTime' => null,
        'closedTime' => null,
        'status' => null,
        'sourceConnectState' => null,
        'deviceConnectState' => null
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
    * tunnelId  隧道ID
    * deviceId  设备ID
    * createTime  隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * closedTime  隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  隧道状态 CLOSED | OPEN
    * sourceConnectState  sourceConnectState
    * deviceConnectState  deviceConnectState
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tunnelId' => 'tunnel_id',
            'deviceId' => 'device_id',
            'createTime' => 'create_time',
            'closedTime' => 'closed_time',
            'status' => 'status',
            'sourceConnectState' => 'source_connect_state',
            'deviceConnectState' => 'device_connect_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tunnelId  隧道ID
    * deviceId  设备ID
    * createTime  隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * closedTime  隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  隧道状态 CLOSED | OPEN
    * sourceConnectState  sourceConnectState
    * deviceConnectState  deviceConnectState
    *
    * @var string[]
    */
    protected static $setters = [
            'tunnelId' => 'setTunnelId',
            'deviceId' => 'setDeviceId',
            'createTime' => 'setCreateTime',
            'closedTime' => 'setClosedTime',
            'status' => 'setStatus',
            'sourceConnectState' => 'setSourceConnectState',
            'deviceConnectState' => 'setDeviceConnectState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tunnelId  隧道ID
    * deviceId  设备ID
    * createTime  隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * closedTime  隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  隧道状态 CLOSED | OPEN
    * sourceConnectState  sourceConnectState
    * deviceConnectState  deviceConnectState
    *
    * @var string[]
    */
    protected static $getters = [
            'tunnelId' => 'getTunnelId',
            'deviceId' => 'getDeviceId',
            'createTime' => 'getCreateTime',
            'closedTime' => 'getClosedTime',
            'status' => 'getStatus',
            'sourceConnectState' => 'getSourceConnectState',
            'deviceConnectState' => 'getDeviceConnectState'
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
        $this->container['tunnelId'] = isset($data['tunnelId']) ? $data['tunnelId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sourceConnectState'] = isset($data['sourceConnectState']) ? $data['sourceConnectState'] : null;
        $this->container['deviceConnectState'] = isset($data['deviceConnectState']) ? $data['deviceConnectState'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tunnelId']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['tunnelId'])) {
                $invalidProperties[] = "invalid value for 'tunnelId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['deviceId']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['createTime']) && !preg_match("/^[0-9TZ]{16}$/", $this->container['createTime'])) {
                $invalidProperties[] = "invalid value for 'createTime', must be conform to the pattern /^[0-9TZ]{16}$/.";
            }
            if (!is_null($this->container['closedTime']) && !preg_match("/^[0-9TZ]{16}$/", $this->container['closedTime'])) {
                $invalidProperties[] = "invalid value for 'closedTime', must be conform to the pattern /^[0-9TZ]{16}$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^[a-zA-Z]{1,16}$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^[a-zA-Z]{1,16}$/.";
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
    * Gets tunnelId
    *  隧道ID
    *
    * @return string|null
    */
    public function getTunnelId()
    {
        return $this->container['tunnelId'];
    }

    /**
    * Sets tunnelId
    *
    * @param string|null $tunnelId 隧道ID
    *
    * @return $this
    */
    public function setTunnelId($tunnelId)
    {
        $this->container['tunnelId'] = $tunnelId;
        return $this;
    }

    /**
    * Gets deviceId
    *  设备ID
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备ID
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets createTime
    *  隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 隧道创建时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets closedTime
    *  隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getClosedTime()
    {
        return $this->container['closedTime'];
    }

    /**
    * Sets closedTime
    *
    * @param string|null $closedTime 隧道更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setClosedTime($closedTime)
    {
        $this->container['closedTime'] = $closedTime;
        return $this;
    }

    /**
    * Gets status
    *  隧道状态 CLOSED | OPEN
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 隧道状态 CLOSED | OPEN
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sourceConnectState
    *  sourceConnectState
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ConnectState|null
    */
    public function getSourceConnectState()
    {
        return $this->container['sourceConnectState'];
    }

    /**
    * Sets sourceConnectState
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ConnectState|null $sourceConnectState sourceConnectState
    *
    * @return $this
    */
    public function setSourceConnectState($sourceConnectState)
    {
        $this->container['sourceConnectState'] = $sourceConnectState;
        return $this;
    }

    /**
    * Gets deviceConnectState
    *  deviceConnectState
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ConnectState|null
    */
    public function getDeviceConnectState()
    {
        return $this->container['deviceConnectState'];
    }

    /**
    * Sets deviceConnectState
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ConnectState|null $deviceConnectState deviceConnectState
    *
    * @return $this
    */
    public function setDeviceConnectState($deviceConnectState)
    {
        $this->container['deviceConnectState'] = $deviceConnectState;
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

