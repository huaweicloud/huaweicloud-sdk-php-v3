<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterRedistributionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterRedistributionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisInfo  redisInfo
    * scheduleMode  调度模式
    * pauseEnable  是否允许暂停
    * recoverEnable  是否允许恢复
    * retryEnable  是否允许重试
    * updateEnable  是否允许更新
    * controlEnable  是否允许控制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\RdsRedisInfo',
            'scheduleMode' => 'bool',
            'pauseEnable' => 'bool',
            'recoverEnable' => 'bool',
            'retryEnable' => 'bool',
            'updateEnable' => 'bool',
            'controlEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisInfo  redisInfo
    * scheduleMode  调度模式
    * pauseEnable  是否允许暂停
    * recoverEnable  是否允许恢复
    * retryEnable  是否允许重试
    * updateEnable  是否允许更新
    * controlEnable  是否允许控制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisInfo' => null,
        'scheduleMode' => null,
        'pauseEnable' => null,
        'recoverEnable' => null,
        'retryEnable' => null,
        'updateEnable' => null,
        'controlEnable' => null
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
    * redisInfo  redisInfo
    * scheduleMode  调度模式
    * pauseEnable  是否允许暂停
    * recoverEnable  是否允许恢复
    * retryEnable  是否允许重试
    * updateEnable  是否允许更新
    * controlEnable  是否允许控制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisInfo' => 'redis_info',
            'scheduleMode' => 'schedule_mode',
            'pauseEnable' => 'pause_enable',
            'recoverEnable' => 'recover_enable',
            'retryEnable' => 'retry_enable',
            'updateEnable' => 'update_enable',
            'controlEnable' => 'control_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisInfo  redisInfo
    * scheduleMode  调度模式
    * pauseEnable  是否允许暂停
    * recoverEnable  是否允许恢复
    * retryEnable  是否允许重试
    * updateEnable  是否允许更新
    * controlEnable  是否允许控制
    *
    * @var string[]
    */
    protected static $setters = [
            'redisInfo' => 'setRedisInfo',
            'scheduleMode' => 'setScheduleMode',
            'pauseEnable' => 'setPauseEnable',
            'recoverEnable' => 'setRecoverEnable',
            'retryEnable' => 'setRetryEnable',
            'updateEnable' => 'setUpdateEnable',
            'controlEnable' => 'setControlEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisInfo  redisInfo
    * scheduleMode  调度模式
    * pauseEnable  是否允许暂停
    * recoverEnable  是否允许恢复
    * retryEnable  是否允许重试
    * updateEnable  是否允许更新
    * controlEnable  是否允许控制
    *
    * @var string[]
    */
    protected static $getters = [
            'redisInfo' => 'getRedisInfo',
            'scheduleMode' => 'getScheduleMode',
            'pauseEnable' => 'getPauseEnable',
            'recoverEnable' => 'getRecoverEnable',
            'retryEnable' => 'getRetryEnable',
            'updateEnable' => 'getUpdateEnable',
            'controlEnable' => 'getControlEnable'
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
        $this->container['redisInfo'] = isset($data['redisInfo']) ? $data['redisInfo'] : null;
        $this->container['scheduleMode'] = isset($data['scheduleMode']) ? $data['scheduleMode'] : null;
        $this->container['pauseEnable'] = isset($data['pauseEnable']) ? $data['pauseEnable'] : null;
        $this->container['recoverEnable'] = isset($data['recoverEnable']) ? $data['recoverEnable'] : null;
        $this->container['retryEnable'] = isset($data['retryEnable']) ? $data['retryEnable'] : null;
        $this->container['updateEnable'] = isset($data['updateEnable']) ? $data['updateEnable'] : null;
        $this->container['controlEnable'] = isset($data['controlEnable']) ? $data['controlEnable'] : null;
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
    * Gets redisInfo
    *  redisInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RdsRedisInfo|null
    */
    public function getRedisInfo()
    {
        return $this->container['redisInfo'];
    }

    /**
    * Sets redisInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RdsRedisInfo|null $redisInfo redisInfo
    *
    * @return $this
    */
    public function setRedisInfo($redisInfo)
    {
        $this->container['redisInfo'] = $redisInfo;
        return $this;
    }

    /**
    * Gets scheduleMode
    *  调度模式
    *
    * @return bool|null
    */
    public function getScheduleMode()
    {
        return $this->container['scheduleMode'];
    }

    /**
    * Sets scheduleMode
    *
    * @param bool|null $scheduleMode 调度模式
    *
    * @return $this
    */
    public function setScheduleMode($scheduleMode)
    {
        $this->container['scheduleMode'] = $scheduleMode;
        return $this;
    }

    /**
    * Gets pauseEnable
    *  是否允许暂停
    *
    * @return bool|null
    */
    public function getPauseEnable()
    {
        return $this->container['pauseEnable'];
    }

    /**
    * Sets pauseEnable
    *
    * @param bool|null $pauseEnable 是否允许暂停
    *
    * @return $this
    */
    public function setPauseEnable($pauseEnable)
    {
        $this->container['pauseEnable'] = $pauseEnable;
        return $this;
    }

    /**
    * Gets recoverEnable
    *  是否允许恢复
    *
    * @return bool|null
    */
    public function getRecoverEnable()
    {
        return $this->container['recoverEnable'];
    }

    /**
    * Sets recoverEnable
    *
    * @param bool|null $recoverEnable 是否允许恢复
    *
    * @return $this
    */
    public function setRecoverEnable($recoverEnable)
    {
        $this->container['recoverEnable'] = $recoverEnable;
        return $this;
    }

    /**
    * Gets retryEnable
    *  是否允许重试
    *
    * @return bool|null
    */
    public function getRetryEnable()
    {
        return $this->container['retryEnable'];
    }

    /**
    * Sets retryEnable
    *
    * @param bool|null $retryEnable 是否允许重试
    *
    * @return $this
    */
    public function setRetryEnable($retryEnable)
    {
        $this->container['retryEnable'] = $retryEnable;
        return $this;
    }

    /**
    * Gets updateEnable
    *  是否允许更新
    *
    * @return bool|null
    */
    public function getUpdateEnable()
    {
        return $this->container['updateEnable'];
    }

    /**
    * Sets updateEnable
    *
    * @param bool|null $updateEnable 是否允许更新
    *
    * @return $this
    */
    public function setUpdateEnable($updateEnable)
    {
        $this->container['updateEnable'] = $updateEnable;
        return $this;
    }

    /**
    * Gets controlEnable
    *  是否允许控制
    *
    * @return bool|null
    */
    public function getControlEnable()
    {
        return $this->container['controlEnable'];
    }

    /**
    * Sets controlEnable
    *
    * @param bool|null $controlEnable 是否允许控制
    *
    * @return $this
    */
    public function setControlEnable($controlEnable)
    {
        $this->container['controlEnable'] = $controlEnable;
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

