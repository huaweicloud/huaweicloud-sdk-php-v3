<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigurationsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigurationsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configTime  实例操作时间。格式为：2017-03-31T12:24:46.297Z
    * instanceId  实例ID。
    * redisConfig  实例配置项数组。
    * configStatus  实例修改状态 - UPDATING - FAILURE - SUCCESS
    * status  实例运行状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configTime' => 'string',
            'instanceId' => 'string',
            'redisConfig' => '\HuaweiCloud\SDK\Dcs\V2\Model\QueryRedisConfig[]',
            'configStatus' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configTime  实例操作时间。格式为：2017-03-31T12:24:46.297Z
    * instanceId  实例ID。
    * redisConfig  实例配置项数组。
    * configStatus  实例修改状态 - UPDATING - FAILURE - SUCCESS
    * status  实例运行状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configTime' => 'string',
        'instanceId' => 'string',
        'redisConfig' => null,
        'configStatus' => 'String',
        'status' => 'String'
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
    * configTime  实例操作时间。格式为：2017-03-31T12:24:46.297Z
    * instanceId  实例ID。
    * redisConfig  实例配置项数组。
    * configStatus  实例修改状态 - UPDATING - FAILURE - SUCCESS
    * status  实例运行状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configTime' => 'config_time',
            'instanceId' => 'instance_id',
            'redisConfig' => 'redis_config',
            'configStatus' => 'config_status',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configTime  实例操作时间。格式为：2017-03-31T12:24:46.297Z
    * instanceId  实例ID。
    * redisConfig  实例配置项数组。
    * configStatus  实例修改状态 - UPDATING - FAILURE - SUCCESS
    * status  实例运行状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'configTime' => 'setConfigTime',
            'instanceId' => 'setInstanceId',
            'redisConfig' => 'setRedisConfig',
            'configStatus' => 'setConfigStatus',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configTime  实例操作时间。格式为：2017-03-31T12:24:46.297Z
    * instanceId  实例ID。
    * redisConfig  实例配置项数组。
    * configStatus  实例修改状态 - UPDATING - FAILURE - SUCCESS
    * status  实例运行状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'configTime' => 'getConfigTime',
            'instanceId' => 'getInstanceId',
            'redisConfig' => 'getRedisConfig',
            'configStatus' => 'getConfigStatus',
            'status' => 'getStatus'
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
    const CONFIG_STATUS_UPDATING = 'UPDATING';
    const CONFIG_STATUS_FAILURE = 'FAILURE';
    const CONFIG_STATUS_SUCCESS = 'SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigStatusAllowableValues()
    {
        return [
            self::CONFIG_STATUS_UPDATING,
            self::CONFIG_STATUS_FAILURE,
            self::CONFIG_STATUS_SUCCESS,
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
        $this->container['configTime'] = isset($data['configTime']) ? $data['configTime'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['redisConfig'] = isset($data['redisConfig']) ? $data['redisConfig'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConfigStatusAllowableValues();
                if (!is_null($this->container['configStatus']) && !in_array($this->container['configStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configStatus', must be one of '%s'",
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
    * Gets configTime
    *  实例操作时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return string|null
    */
    public function getConfigTime()
    {
        return $this->container['configTime'];
    }

    /**
    * Sets configTime
    *
    * @param string|null $configTime 实例操作时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return $this
    */
    public function setConfigTime($configTime)
    {
        $this->container['configTime'] = $configTime;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets redisConfig
    *  实例配置项数组。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\QueryRedisConfig[]|null
    */
    public function getRedisConfig()
    {
        return $this->container['redisConfig'];
    }

    /**
    * Sets redisConfig
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\QueryRedisConfig[]|null $redisConfig 实例配置项数组。
    *
    * @return $this
    */
    public function setRedisConfig($redisConfig)
    {
        $this->container['redisConfig'] = $redisConfig;
        return $this;
    }

    /**
    * Gets configStatus
    *  实例修改状态 - UPDATING - FAILURE - SUCCESS
    *
    * @return string|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param string|null $configStatus 实例修改状态 - UPDATING - FAILURE - SUCCESS
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets status
    *  实例运行状态。
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
    * @param string|null $status 实例运行状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

