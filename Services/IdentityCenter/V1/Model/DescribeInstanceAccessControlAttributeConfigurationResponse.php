<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DescribeInstanceAccessControlAttributeConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DescribeInstanceAccessControlAttributeConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceAccessControlAttributeConfiguration  instanceAccessControlAttributeConfiguration
    * status  ABAC属性配置的状态
    * statusReason  提供有关指定属性的当前状态的更多详细信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceAccessControlAttributeConfiguration' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\InstanceAccessControlAttributeConfigurationDto',
            'status' => 'string',
            'statusReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceAccessControlAttributeConfiguration  instanceAccessControlAttributeConfiguration
    * status  ABAC属性配置的状态
    * statusReason  提供有关指定属性的当前状态的更多详细信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceAccessControlAttributeConfiguration' => null,
        'status' => null,
        'statusReason' => null
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
    * instanceAccessControlAttributeConfiguration  instanceAccessControlAttributeConfiguration
    * status  ABAC属性配置的状态
    * statusReason  提供有关指定属性的当前状态的更多详细信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceAccessControlAttributeConfiguration' => 'instance_access_control_attribute_configuration',
            'status' => 'status',
            'statusReason' => 'status_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceAccessControlAttributeConfiguration  instanceAccessControlAttributeConfiguration
    * status  ABAC属性配置的状态
    * statusReason  提供有关指定属性的当前状态的更多详细信息
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceAccessControlAttributeConfiguration' => 'setInstanceAccessControlAttributeConfiguration',
            'status' => 'setStatus',
            'statusReason' => 'setStatusReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceAccessControlAttributeConfiguration  instanceAccessControlAttributeConfiguration
    * status  ABAC属性配置的状态
    * statusReason  提供有关指定属性的当前状态的更多详细信息
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceAccessControlAttributeConfiguration' => 'getInstanceAccessControlAttributeConfiguration',
            'status' => 'getStatus',
            'statusReason' => 'getStatusReason'
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
    const STATUS_ENABLED = 'ENABLED';
    const STATUS_CREATION_IN_PROGRESS = 'CREATION_IN_PROGRESS';
    const STATUS_CREATION_FAILED = 'CREATION_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_CREATION_IN_PROGRESS,
            self::STATUS_CREATION_FAILED,
        ];
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
        $this->container['instanceAccessControlAttributeConfiguration'] = isset($data['instanceAccessControlAttributeConfiguration']) ? $data['instanceAccessControlAttributeConfiguration'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusReason'] = isset($data['statusReason']) ? $data['statusReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceAccessControlAttributeConfiguration
    *  instanceAccessControlAttributeConfiguration
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\InstanceAccessControlAttributeConfigurationDto|null
    */
    public function getInstanceAccessControlAttributeConfiguration()
    {
        return $this->container['instanceAccessControlAttributeConfiguration'];
    }

    /**
    * Sets instanceAccessControlAttributeConfiguration
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\InstanceAccessControlAttributeConfigurationDto|null $instanceAccessControlAttributeConfiguration instanceAccessControlAttributeConfiguration
    *
    * @return $this
    */
    public function setInstanceAccessControlAttributeConfiguration($instanceAccessControlAttributeConfiguration)
    {
        $this->container['instanceAccessControlAttributeConfiguration'] = $instanceAccessControlAttributeConfiguration;
        return $this;
    }

    /**
    * Gets status
    *  ABAC属性配置的状态
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
    * @param string|null $status ABAC属性配置的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusReason
    *  提供有关指定属性的当前状态的更多详细信息
    *
    * @return string|null
    */
    public function getStatusReason()
    {
        return $this->container['statusReason'];
    }

    /**
    * Sets statusReason
    *
    * @param string|null $statusReason 提供有关指定属性的当前状态的更多详细信息
    *
    * @return $this
    */
    public function setStatusReason($statusReason)
    {
        $this->container['statusReason'] = $statusReason;
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

