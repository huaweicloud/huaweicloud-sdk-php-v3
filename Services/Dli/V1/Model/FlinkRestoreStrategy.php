<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkRestoreStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkRestoreStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restoreType  启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    * allowNonRestoredState  允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    * jobStartTimeInMs  无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    * savepointId  启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restoreType' => 'string',
            'allowNonRestoredState' => 'bool',
            'jobStartTimeInMs' => 'int',
            'savepointId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restoreType  启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    * allowNonRestoredState  允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    * jobStartTimeInMs  无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    * savepointId  启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restoreType' => null,
        'allowNonRestoredState' => null,
        'jobStartTimeInMs' => 'long',
        'savepointId' => null
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
    * restoreType  启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    * allowNonRestoredState  允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    * jobStartTimeInMs  无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    * savepointId  启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restoreType' => 'restore_type',
            'allowNonRestoredState' => 'allow_non_restored_state',
            'jobStartTimeInMs' => 'job_start_time_in_ms',
            'savepointId' => 'savepoint_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restoreType  启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    * allowNonRestoredState  允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    * jobStartTimeInMs  无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    * savepointId  启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'restoreType' => 'setRestoreType',
            'allowNonRestoredState' => 'setAllowNonRestoredState',
            'jobStartTimeInMs' => 'setJobStartTimeInMs',
            'savepointId' => 'setSavepointId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restoreType  启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    * allowNonRestoredState  允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    * jobStartTimeInMs  无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    * savepointId  启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'restoreType' => 'getRestoreType',
            'allowNonRestoredState' => 'getAllowNonRestoredState',
            'jobStartTimeInMs' => 'getJobStartTimeInMs',
            'savepointId' => 'getSavepointId'
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
        $this->container['restoreType'] = isset($data['restoreType']) ? $data['restoreType'] : null;
        $this->container['allowNonRestoredState'] = isset($data['allowNonRestoredState']) ? $data['allowNonRestoredState'] : null;
        $this->container['jobStartTimeInMs'] = isset($data['jobStartTimeInMs']) ? $data['jobStartTimeInMs'] : null;
        $this->container['savepointId'] = isset($data['savepointId']) ? $data['savepointId'] : null;
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
    * Gets restoreType
    *  启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    *
    * @return string|null
    */
    public function getRestoreType()
    {
        return $this->container['restoreType'];
    }

    /**
    * Sets restoreType
    *
    * @param string|null $restoreType 启动位点类型。 NONE：无状态启动。 LATEST_SAVEPOINT：最新的作业快照启动。 FROM_SAVEPOINT：从指定快照启动。 LATEST_STATE：最新状态启动。
    *
    * @return $this
    */
    public function setRestoreType($restoreType)
    {
        $this->container['restoreType'] = $restoreType;
        return $this;
    }

    /**
    * Gets allowNonRestoredState
    *  允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    *
    * @return bool|null
    */
    public function getAllowNonRestoredState()
    {
        return $this->container['allowNonRestoredState'];
    }

    /**
    * Sets allowNonRestoredState
    *
    * @param bool|null $allowNonRestoredState 允许忽略部分算子状态。仅当作业选择有状态恢复时需要设置。
    *
    * @return $this
    */
    public function setAllowNonRestoredState($allowNonRestoredState)
    {
        $this->container['allowNonRestoredState'] = $allowNonRestoredState;
        return $this;
    }

    /**
    * Gets jobStartTimeInMs
    *  无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    *
    * @return int|null
    */
    public function getJobStartTimeInMs()
    {
        return $this->container['jobStartTimeInMs'];
    }

    /**
    * Sets jobStartTimeInMs
    *
    * @param int|null $jobStartTimeInMs 无状态启动时间，需输入 13 位时间戳。当选择无状态启动时，可以设置本参数让所有支持 startTime 的源表均从该时刻开始读取数据。
    *
    * @return $this
    */
    public function setJobStartTimeInMs($jobStartTimeInMs)
    {
        $this->container['jobStartTimeInMs'] = $jobStartTimeInMs;
        return $this;
    }

    /**
    * Gets savepointId
    *  启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @return string|null
    */
    public function getSavepointId()
    {
        return $this->container['savepointId'];
    }

    /**
    * Sets savepointId
    *
    * @param string|null $savepointId 启动作业快照 ID，启动策略为 FROM_SAVEPOINT 时必填。
    *
    * @return $this
    */
    public function setSavepointId($savepointId)
    {
        $this->container['savepointId'] = $savepointId;
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

