<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * createUser  创建用户
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * lastInstanceEndTime  最近实例的运行结束时间
    * lastInstanceStatus  最近实例的运行状态
    * lastUpdateTime  最后更新时间
    * lastUpdateUser  最后修改人
    * name  作业名称
    * owner  责任人
    * path  作业目录路径
    * priority  作业优先级
    * singleNodeJobFlag  单算子作业标识
    * startTime  作业启动时间
    * status  作业状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'createUser' => 'string',
            'jobType' => 'string',
            'lastInstanceEndTime' => 'int',
            'lastInstanceStatus' => 'string',
            'lastUpdateTime' => 'int',
            'lastUpdateUser' => 'string',
            'name' => 'string',
            'owner' => 'string',
            'path' => 'string',
            'priority' => 'int',
            'singleNodeJobFlag' => 'bool',
            'startTime' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * createUser  创建用户
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * lastInstanceEndTime  最近实例的运行结束时间
    * lastInstanceStatus  最近实例的运行状态
    * lastUpdateTime  最后更新时间
    * lastUpdateUser  最后修改人
    * name  作业名称
    * owner  责任人
    * path  作业目录路径
    * priority  作业优先级
    * singleNodeJobFlag  单算子作业标识
    * startTime  作业启动时间
    * status  作业状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'createUser' => null,
        'jobType' => null,
        'lastInstanceEndTime' => 'int64',
        'lastInstanceStatus' => null,
        'lastUpdateTime' => 'int64',
        'lastUpdateUser' => null,
        'name' => null,
        'owner' => null,
        'path' => null,
        'priority' => null,
        'singleNodeJobFlag' => null,
        'startTime' => 'int64',
        'status' => null
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
    * createTime  创建时间
    * createUser  创建用户
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * lastInstanceEndTime  最近实例的运行结束时间
    * lastInstanceStatus  最近实例的运行状态
    * lastUpdateTime  最后更新时间
    * lastUpdateUser  最后修改人
    * name  作业名称
    * owner  责任人
    * path  作业目录路径
    * priority  作业优先级
    * singleNodeJobFlag  单算子作业标识
    * startTime  作业启动时间
    * status  作业状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'jobType' => 'job_type',
            'lastInstanceEndTime' => 'last_instance_end_time',
            'lastInstanceStatus' => 'last_instance_status',
            'lastUpdateTime' => 'last_update_time',
            'lastUpdateUser' => 'last_update_user',
            'name' => 'name',
            'owner' => 'owner',
            'path' => 'path',
            'priority' => 'priority',
            'singleNodeJobFlag' => 'single_node_job_flag',
            'startTime' => 'start_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * createUser  创建用户
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * lastInstanceEndTime  最近实例的运行结束时间
    * lastInstanceStatus  最近实例的运行状态
    * lastUpdateTime  最后更新时间
    * lastUpdateUser  最后修改人
    * name  作业名称
    * owner  责任人
    * path  作业目录路径
    * priority  作业优先级
    * singleNodeJobFlag  单算子作业标识
    * startTime  作业启动时间
    * status  作业状态
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'jobType' => 'setJobType',
            'lastInstanceEndTime' => 'setLastInstanceEndTime',
            'lastInstanceStatus' => 'setLastInstanceStatus',
            'lastUpdateTime' => 'setLastUpdateTime',
            'lastUpdateUser' => 'setLastUpdateUser',
            'name' => 'setName',
            'owner' => 'setOwner',
            'path' => 'setPath',
            'priority' => 'setPriority',
            'singleNodeJobFlag' => 'setSingleNodeJobFlag',
            'startTime' => 'setStartTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * createUser  创建用户
    * jobType  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    * lastInstanceEndTime  最近实例的运行结束时间
    * lastInstanceStatus  最近实例的运行状态
    * lastUpdateTime  最后更新时间
    * lastUpdateUser  最后修改人
    * name  作业名称
    * owner  责任人
    * path  作业目录路径
    * priority  作业优先级
    * singleNodeJobFlag  单算子作业标识
    * startTime  作业启动时间
    * status  作业状态
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'jobType' => 'getJobType',
            'lastInstanceEndTime' => 'getLastInstanceEndTime',
            'lastInstanceStatus' => 'getLastInstanceStatus',
            'lastUpdateTime' => 'getLastUpdateTime',
            'lastUpdateUser' => 'getLastUpdateUser',
            'name' => 'getName',
            'owner' => 'getOwner',
            'path' => 'getPath',
            'priority' => 'getPriority',
            'singleNodeJobFlag' => 'getSingleNodeJobFlag',
            'startTime' => 'getStartTime',
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
    const JOB_TYPE_REAL_TIME = 'REAL_TIME';
    const JOB_TYPE_BATCH = 'BATCH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_REAL_TIME,
            self::JOB_TYPE_BATCH,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['lastInstanceEndTime'] = isset($data['lastInstanceEndTime']) ? $data['lastInstanceEndTime'] : null;
        $this->container['lastInstanceStatus'] = isset($data['lastInstanceStatus']) ? $data['lastInstanceStatus'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['lastUpdateUser'] = isset($data['lastUpdateUser']) ? $data['lastUpdateUser'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['singleNodeJobFlag'] = isset($data['singleNodeJobFlag']) ? $data['singleNodeJobFlag'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
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
    * Gets createUser
    *  创建用户
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建用户
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型:  - REAL_TIME: 实时处理  - BATCH: 批处理
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets lastInstanceEndTime
    *  最近实例的运行结束时间
    *
    * @return int|null
    */
    public function getLastInstanceEndTime()
    {
        return $this->container['lastInstanceEndTime'];
    }

    /**
    * Sets lastInstanceEndTime
    *
    * @param int|null $lastInstanceEndTime 最近实例的运行结束时间
    *
    * @return $this
    */
    public function setLastInstanceEndTime($lastInstanceEndTime)
    {
        $this->container['lastInstanceEndTime'] = $lastInstanceEndTime;
        return $this;
    }

    /**
    * Gets lastInstanceStatus
    *  最近实例的运行状态
    *
    * @return string|null
    */
    public function getLastInstanceStatus()
    {
        return $this->container['lastInstanceStatus'];
    }

    /**
    * Sets lastInstanceStatus
    *
    * @param string|null $lastInstanceStatus 最近实例的运行状态
    *
    * @return $this
    */
    public function setLastInstanceStatus($lastInstanceStatus)
    {
        $this->container['lastInstanceStatus'] = $lastInstanceStatus;
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
    * Gets lastUpdateUser
    *  最后修改人
    *
    * @return string|null
    */
    public function getLastUpdateUser()
    {
        return $this->container['lastUpdateUser'];
    }

    /**
    * Sets lastUpdateUser
    *
    * @param string|null $lastUpdateUser 最后修改人
    *
    * @return $this
    */
    public function setLastUpdateUser($lastUpdateUser)
    {
        $this->container['lastUpdateUser'] = $lastUpdateUser;
        return $this;
    }

    /**
    * Gets name
    *  作业名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 作业名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  责任人
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
    * @param string|null $owner 责任人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets path
    *  作业目录路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 作业目录路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets priority
    *  作业优先级
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
    * @param int|null $priority 作业优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets singleNodeJobFlag
    *  单算子作业标识
    *
    * @return bool|null
    */
    public function getSingleNodeJobFlag()
    {
        return $this->container['singleNodeJobFlag'];
    }

    /**
    * Sets singleNodeJobFlag
    *
    * @param bool|null $singleNodeJobFlag 单算子作业标识
    *
    * @return $this
    */
    public function setSingleNodeJobFlag($singleNodeJobFlag)
    {
        $this->container['singleNodeJobFlag'] = $singleNodeJobFlag;
        return $this;
    }

    /**
    * Gets startTime
    *  作业启动时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 作业启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  作业状态
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
    * @param string|null $status 作业状态
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

