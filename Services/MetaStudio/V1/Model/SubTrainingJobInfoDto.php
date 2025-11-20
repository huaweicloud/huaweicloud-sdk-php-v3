<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTrainingJobInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTrainingJobInfoDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id
    * subJobType  子任务类型
    * heartBeatId  子任务心跳id
    * state  任务状态
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'subJobType' => 'string',
            'heartBeatId' => 'string',
            'state' => 'string',
            'createTime' => 'int',
            'lastUpdateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id
    * subJobType  子任务类型
    * heartBeatId  子任务心跳id
    * state  任务状态
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'subJobType' => null,
        'heartBeatId' => null,
        'state' => null,
        'createTime' => 'int64',
        'lastUpdateTime' => 'int64'
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
    * jobId  任务id
    * subJobType  子任务类型
    * heartBeatId  子任务心跳id
    * state  任务状态
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'subJobType' => 'sub_job_type',
            'heartBeatId' => 'heart_beat_id',
            'state' => 'state',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id
    * subJobType  子任务类型
    * heartBeatId  子任务心跳id
    * state  任务状态
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'subJobType' => 'setSubJobType',
            'heartBeatId' => 'setHeartBeatId',
            'state' => 'setState',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id
    * subJobType  子任务类型
    * heartBeatId  子任务心跳id
    * state  任务状态
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'subJobType' => 'getSubJobType',
            'heartBeatId' => 'getHeartBeatId',
            'state' => 'getState',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['subJobType'] = isset($data['subJobType']) ? $data['subJobType'] : null;
        $this->container['heartBeatId'] = isset($data['heartBeatId']) ? $data['heartBeatId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subJobType']) && (mb_strlen($this->container['subJobType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'subJobType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['subJobType']) && (mb_strlen($this->container['subJobType']) < 0)) {
                $invalidProperties[] = "invalid value for 'subJobType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['heartBeatId']) && (mb_strlen($this->container['heartBeatId']) > 64)) {
                $invalidProperties[] = "invalid value for 'heartBeatId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['heartBeatId']) && (mb_strlen($this->container['heartBeatId']) < 0)) {
                $invalidProperties[] = "invalid value for 'heartBeatId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 1024)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
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
    * Gets jobId
    *  任务id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets subJobType
    *  子任务类型
    *
    * @return string|null
    */
    public function getSubJobType()
    {
        return $this->container['subJobType'];
    }

    /**
    * Sets subJobType
    *
    * @param string|null $subJobType 子任务类型
    *
    * @return $this
    */
    public function setSubJobType($subJobType)
    {
        $this->container['subJobType'] = $subJobType;
        return $this;
    }

    /**
    * Gets heartBeatId
    *  子任务心跳id
    *
    * @return string|null
    */
    public function getHeartBeatId()
    {
        return $this->container['heartBeatId'];
    }

    /**
    * Sets heartBeatId
    *
    * @param string|null $heartBeatId 子任务心跳id
    *
    * @return $this
    */
    public function setHeartBeatId($heartBeatId)
    {
        $this->container['heartBeatId'] = $heartBeatId;
        return $this;
    }

    /**
    * Gets state
    *  任务状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
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

