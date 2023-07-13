<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingConfigurationId  伸缩配置ID，全局唯一。
    * tenant  租户ID。
    * scalingConfigurationName  伸缩配置名称。
    * instanceConfig  instanceConfig
    * createTime  创建伸缩配置的时间，遵循UTC时间。
    * scalingGroupId  绑定该伸缩配置的伸缩组ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingConfigurationId' => 'string',
            'tenant' => 'string',
            'scalingConfigurationName' => 'string',
            'instanceConfig' => '\HuaweiCloud\SDK\_As\V1\Model\InstanceConfigResult',
            'createTime' => '\DateTime',
            'scalingGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingConfigurationId  伸缩配置ID，全局唯一。
    * tenant  租户ID。
    * scalingConfigurationName  伸缩配置名称。
    * instanceConfig  instanceConfig
    * createTime  创建伸缩配置的时间，遵循UTC时间。
    * scalingGroupId  绑定该伸缩配置的伸缩组ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingConfigurationId' => null,
        'tenant' => null,
        'scalingConfigurationName' => null,
        'instanceConfig' => null,
        'createTime' => 'date-time',
        'scalingGroupId' => null
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
    * scalingConfigurationId  伸缩配置ID，全局唯一。
    * tenant  租户ID。
    * scalingConfigurationName  伸缩配置名称。
    * instanceConfig  instanceConfig
    * createTime  创建伸缩配置的时间，遵循UTC时间。
    * scalingGroupId  绑定该伸缩配置的伸缩组ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingConfigurationId' => 'scaling_configuration_id',
            'tenant' => 'tenant',
            'scalingConfigurationName' => 'scaling_configuration_name',
            'instanceConfig' => 'instance_config',
            'createTime' => 'create_time',
            'scalingGroupId' => 'scaling_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingConfigurationId  伸缩配置ID，全局唯一。
    * tenant  租户ID。
    * scalingConfigurationName  伸缩配置名称。
    * instanceConfig  instanceConfig
    * createTime  创建伸缩配置的时间，遵循UTC时间。
    * scalingGroupId  绑定该伸缩配置的伸缩组ID
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingConfigurationId' => 'setScalingConfigurationId',
            'tenant' => 'setTenant',
            'scalingConfigurationName' => 'setScalingConfigurationName',
            'instanceConfig' => 'setInstanceConfig',
            'createTime' => 'setCreateTime',
            'scalingGroupId' => 'setScalingGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingConfigurationId  伸缩配置ID，全局唯一。
    * tenant  租户ID。
    * scalingConfigurationName  伸缩配置名称。
    * instanceConfig  instanceConfig
    * createTime  创建伸缩配置的时间，遵循UTC时间。
    * scalingGroupId  绑定该伸缩配置的伸缩组ID
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingConfigurationId' => 'getScalingConfigurationId',
            'tenant' => 'getTenant',
            'scalingConfigurationName' => 'getScalingConfigurationName',
            'instanceConfig' => 'getInstanceConfig',
            'createTime' => 'getCreateTime',
            'scalingGroupId' => 'getScalingGroupId'
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
        $this->container['scalingConfigurationId'] = isset($data['scalingConfigurationId']) ? $data['scalingConfigurationId'] : null;
        $this->container['tenant'] = isset($data['tenant']) ? $data['tenant'] : null;
        $this->container['scalingConfigurationName'] = isset($data['scalingConfigurationName']) ? $data['scalingConfigurationName'] : null;
        $this->container['instanceConfig'] = isset($data['instanceConfig']) ? $data['instanceConfig'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scalingConfigurationId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingConfigurationId'])) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['tenant']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['tenant'])) {
                $invalidProperties[] = "invalid value for 'tenant', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingGroupId'])) {
                $invalidProperties[] = "invalid value for 'scalingGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets scalingConfigurationId
    *  伸缩配置ID，全局唯一。
    *
    * @return string|null
    */
    public function getScalingConfigurationId()
    {
        return $this->container['scalingConfigurationId'];
    }

    /**
    * Sets scalingConfigurationId
    *
    * @param string|null $scalingConfigurationId 伸缩配置ID，全局唯一。
    *
    * @return $this
    */
    public function setScalingConfigurationId($scalingConfigurationId)
    {
        $this->container['scalingConfigurationId'] = $scalingConfigurationId;
        return $this;
    }

    /**
    * Gets tenant
    *  租户ID。
    *
    * @return string|null
    */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
    * Sets tenant
    *
    * @param string|null $tenant 租户ID。
    *
    * @return $this
    */
    public function setTenant($tenant)
    {
        $this->container['tenant'] = $tenant;
        return $this;
    }

    /**
    * Gets scalingConfigurationName
    *  伸缩配置名称。
    *
    * @return string|null
    */
    public function getScalingConfigurationName()
    {
        return $this->container['scalingConfigurationName'];
    }

    /**
    * Sets scalingConfigurationName
    *
    * @param string|null $scalingConfigurationName 伸缩配置名称。
    *
    * @return $this
    */
    public function setScalingConfigurationName($scalingConfigurationName)
    {
        $this->container['scalingConfigurationName'] = $scalingConfigurationName;
        return $this;
    }

    /**
    * Gets instanceConfig
    *  instanceConfig
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\InstanceConfigResult|null
    */
    public function getInstanceConfig()
    {
        return $this->container['instanceConfig'];
    }

    /**
    * Sets instanceConfig
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\InstanceConfigResult|null $instanceConfig instanceConfig
    *
    * @return $this
    */
    public function setInstanceConfig($instanceConfig)
    {
        $this->container['instanceConfig'] = $instanceConfig;
        return $this;
    }

    /**
    * Gets createTime
    *  创建伸缩配置的时间，遵循UTC时间。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建伸缩配置的时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets scalingGroupId
    *  绑定该伸缩配置的伸缩组ID
    *
    * @return string|null
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string|null $scalingGroupId 绑定该伸缩配置的伸缩组ID
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
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

