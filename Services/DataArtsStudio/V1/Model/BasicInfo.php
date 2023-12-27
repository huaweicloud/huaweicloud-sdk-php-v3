<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  作业责任人
    * priority  作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    * executeUser  作业执行用户，必须是已存在的用户名。
    * instanceTimeout  实例超时时间，单位是分钟。
    * customFields  用户自定义属性字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'string',
            'priority' => 'int',
            'executeUser' => 'string',
            'instanceTimeout' => 'int',
            'customFields' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  作业责任人
    * priority  作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    * executeUser  作业执行用户，必须是已存在的用户名。
    * instanceTimeout  实例超时时间，单位是分钟。
    * customFields  用户自定义属性字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'priority' => 'int32',
        'executeUser' => null,
        'instanceTimeout' => 'int32',
        'customFields' => null
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
    * owner  作业责任人
    * priority  作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    * executeUser  作业执行用户，必须是已存在的用户名。
    * instanceTimeout  实例超时时间，单位是分钟。
    * customFields  用户自定义属性字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'priority' => 'priority',
            'executeUser' => 'execute_user',
            'instanceTimeout' => 'instance_timeout',
            'customFields' => 'custom_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  作业责任人
    * priority  作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    * executeUser  作业执行用户，必须是已存在的用户名。
    * instanceTimeout  实例超时时间，单位是分钟。
    * customFields  用户自定义属性字段
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'priority' => 'setPriority',
            'executeUser' => 'setExecuteUser',
            'instanceTimeout' => 'setInstanceTimeout',
            'customFields' => 'setCustomFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  作业责任人
    * priority  作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    * executeUser  作业执行用户，必须是已存在的用户名。
    * instanceTimeout  实例超时时间，单位是分钟。
    * customFields  用户自定义属性字段
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'priority' => 'getPriority',
            'executeUser' => 'getExecuteUser',
            'instanceTimeout' => 'getInstanceTimeout',
            'customFields' => 'getCustomFields'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['executeUser'] = isset($data['executeUser']) ? $data['executeUser'] : null;
        $this->container['instanceTimeout'] = isset($data['instanceTimeout']) ? $data['instanceTimeout'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 2)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceTimeout']) && ($this->container['instanceTimeout'] > 1440)) {
                $invalidProperties[] = "invalid value for 'instanceTimeout', must be smaller than or equal to 1440.";
            }
            if (!is_null($this->container['instanceTimeout']) && ($this->container['instanceTimeout'] < 5)) {
                $invalidProperties[] = "invalid value for 'instanceTimeout', must be bigger than or equal to 5.";
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
    * Gets owner
    *  作业责任人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 作业责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets priority
    *  作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 作业优先级，0代表高优先级，1代表中优先级，2代表低优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets executeUser
    *  作业执行用户，必须是已存在的用户名。
    *
    * @return string|null
    */
    public function getExecuteUser()
    {
        return $this->container['executeUser'];
    }

    /**
    * Sets executeUser
    *
    * @param string|null $executeUser 作业执行用户，必须是已存在的用户名。
    *
    * @return $this
    */
    public function setExecuteUser($executeUser)
    {
        $this->container['executeUser'] = $executeUser;
        return $this;
    }

    /**
    * Gets instanceTimeout
    *  实例超时时间，单位是分钟。
    *
    * @return int|null
    */
    public function getInstanceTimeout()
    {
        return $this->container['instanceTimeout'];
    }

    /**
    * Sets instanceTimeout
    *
    * @param int|null $instanceTimeout 实例超时时间，单位是分钟。
    *
    * @return $this
    */
    public function setInstanceTimeout($instanceTimeout)
    {
        $this->container['instanceTimeout'] = $instanceTimeout;
        return $this;
    }

    /**
    * Gets customFields
    *  用户自定义属性字段
    *
    * @return object|null
    */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
    * Sets customFields
    *
    * @param object|null $customFields 用户自定义属性字段
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
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

