<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserProcessAuditLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserProcessAuditLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id
    * instanceName  实例名
    * processId  会话id
    * executeUserName  执行用户名
    * executeTime  发生时间，UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'processId' => 'string',
            'executeUserName' => 'string',
            'executeTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id
    * instanceName  实例名
    * processId  会话id
    * executeUserName  执行用户名
    * executeTime  发生时间，UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'processId' => null,
        'executeUserName' => null,
        'executeTime' => null
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
    * instanceId  实例id
    * instanceName  实例名
    * processId  会话id
    * executeUserName  执行用户名
    * executeTime  发生时间，UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'processId' => 'process_id',
            'executeUserName' => 'execute_user_name',
            'executeTime' => 'execute_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id
    * instanceName  实例名
    * processId  会话id
    * executeUserName  执行用户名
    * executeTime  发生时间，UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'processId' => 'setProcessId',
            'executeUserName' => 'setExecuteUserName',
            'executeTime' => 'setExecuteTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id
    * instanceName  实例名
    * processId  会话id
    * executeUserName  执行用户名
    * executeTime  发生时间，UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'processId' => 'getProcessId',
            'executeUserName' => 'getExecuteUserName',
            'executeTime' => 'getExecuteTime'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['processId'] = isset($data['processId']) ? $data['processId'] : null;
        $this->container['executeUserName'] = isset($data['executeUserName']) ? $data['executeUserName'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
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
    * Gets instanceId
    *  实例id
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
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets processId
    *  会话id
    *
    * @return string|null
    */
    public function getProcessId()
    {
        return $this->container['processId'];
    }

    /**
    * Sets processId
    *
    * @param string|null $processId 会话id
    *
    * @return $this
    */
    public function setProcessId($processId)
    {
        $this->container['processId'] = $processId;
        return $this;
    }

    /**
    * Gets executeUserName
    *  执行用户名
    *
    * @return string|null
    */
    public function getExecuteUserName()
    {
        return $this->container['executeUserName'];
    }

    /**
    * Sets executeUserName
    *
    * @param string|null $executeUserName 执行用户名
    *
    * @return $this
    */
    public function setExecuteUserName($executeUserName)
    {
        $this->container['executeUserName'] = $executeUserName;
        return $this;
    }

    /**
    * Gets executeTime
    *  发生时间，UTC时间
    *
    * @return string|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param string|null $executeTime 发生时间，UTC时间
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
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

