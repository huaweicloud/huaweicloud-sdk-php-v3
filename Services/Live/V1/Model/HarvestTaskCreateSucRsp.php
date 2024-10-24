<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HarvestTaskCreateSucRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HarvestTaskCreateSucRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间错，单位为秒
    * endTime  结束时间。Unix时间错，单位为秒
    * createTime  任务创建时间。Unix时间错，单位为秒
    * eventName  事件名称
    * taskDesc  任务描述
    * status  任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    * maxRetryCnt  任务状态为FAILED时，最大允许重试的次数
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'domain' => 'string',
            'appName' => 'string',
            'id' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'createTime' => 'int',
            'eventName' => 'string',
            'taskDesc' => 'string',
            'status' => 'string',
            'maxRetryCnt' => 'int',
            'packageInfo' => '\HuaweiCloud\SDK\Live\V1\Model\VodPackageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间错，单位为秒
    * endTime  结束时间。Unix时间错，单位为秒
    * createTime  任务创建时间。Unix时间错，单位为秒
    * eventName  事件名称
    * taskDesc  任务描述
    * status  任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    * maxRetryCnt  任务状态为FAILED时，最大允许重试的次数
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'domain' => null,
        'appName' => null,
        'id' => null,
        'startTime' => 'int32',
        'endTime' => 'int32',
        'createTime' => 'int32',
        'eventName' => null,
        'taskDesc' => null,
        'status' => null,
        'maxRetryCnt' => 'int32',
        'packageInfo' => null
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
    * jobId  任务ID
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间错，单位为秒
    * endTime  结束时间。Unix时间错，单位为秒
    * createTime  任务创建时间。Unix时间错，单位为秒
    * eventName  事件名称
    * taskDesc  任务描述
    * status  任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    * maxRetryCnt  任务状态为FAILED时，最大允许重试的次数
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'domain' => 'domain',
            'appName' => 'app_name',
            'id' => 'id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'createTime' => 'create_time',
            'eventName' => 'event_name',
            'taskDesc' => 'task_desc',
            'status' => 'status',
            'maxRetryCnt' => 'max_retry_cnt',
            'packageInfo' => 'package_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间错，单位为秒
    * endTime  结束时间。Unix时间错，单位为秒
    * createTime  任务创建时间。Unix时间错，单位为秒
    * eventName  事件名称
    * taskDesc  任务描述
    * status  任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    * maxRetryCnt  任务状态为FAILED时，最大允许重试的次数
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'id' => 'setId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'createTime' => 'setCreateTime',
            'eventName' => 'setEventName',
            'taskDesc' => 'setTaskDesc',
            'status' => 'setStatus',
            'maxRetryCnt' => 'setMaxRetryCnt',
            'packageInfo' => 'setPackageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间错，单位为秒
    * endTime  结束时间。Unix时间错，单位为秒
    * createTime  任务创建时间。Unix时间错，单位为秒
    * eventName  事件名称
    * taskDesc  任务描述
    * status  任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    * maxRetryCnt  任务状态为FAILED时，最大允许重试的次数
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'id' => 'getId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'createTime' => 'getCreateTime',
            'eventName' => 'getEventName',
            'taskDesc' => 'getTaskDesc',
            'status' => 'getStatus',
            'maxRetryCnt' => 'getMaxRetryCnt',
            'packageInfo' => 'getPackageInfo'
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
    const STATUS_UNSTART = 'UNSTART';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNSTART,
            self::STATUS_IN_PROGRESS,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['taskDesc'] = isset($data['taskDesc']) ? $data['taskDesc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['maxRetryCnt'] = isset($data['maxRetryCnt']) ? $data['maxRetryCnt'] : null;
        $this->container['packageInfo'] = isset($data['packageInfo']) ? $data['packageInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 255)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
        if ($this->container['taskDesc'] === null) {
            $invalidProperties[] = "'taskDesc' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['maxRetryCnt'] === null) {
            $invalidProperties[] = "'maxRetryCnt' can't be null";
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
    *  任务ID
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets domain
    *  频道推流域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 频道推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  组名或应用名
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 组名或应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets id
    *  频道ID。频道唯一标识，为必填项。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 频道ID。频道唯一标识，为必填项。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。Unix时间错，单位为秒
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间。Unix时间错，单位为秒
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。Unix时间错，单位为秒
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间。Unix时间错，单位为秒
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。Unix时间错，单位为秒
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
    * @param int|null $createTime 任务创建时间。Unix时间错，单位为秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName 事件名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets taskDesc
    *  任务描述
    *
    * @return string
    */
    public function getTaskDesc()
    {
        return $this->container['taskDesc'];
    }

    /**
    * Sets taskDesc
    *
    * @param string $taskDesc 任务描述
    *
    * @return $this
    */
    public function setTaskDesc($taskDesc)
    {
        $this->container['taskDesc'] = $taskDesc;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 任务状态，取值为 [ UNSTART、IN_PROGRESS、SUCCEEDED、FAILED ]
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets maxRetryCnt
    *  任务状态为FAILED时，最大允许重试的次数
    *
    * @return int
    */
    public function getMaxRetryCnt()
    {
        return $this->container['maxRetryCnt'];
    }

    /**
    * Sets maxRetryCnt
    *
    * @param int $maxRetryCnt 任务状态为FAILED时，最大允许重试的次数
    *
    * @return $this
    */
    public function setMaxRetryCnt($maxRetryCnt)
    {
        $this->container['maxRetryCnt'] = $maxRetryCnt;
        return $this;
    }

    /**
    * Gets packageInfo
    *  packageInfo
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\VodPackageInfo|null
    */
    public function getPackageInfo()
    {
        return $this->container['packageInfo'];
    }

    /**
    * Sets packageInfo
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\VodPackageInfo|null $packageInfo packageInfo
    *
    * @return $this
    */
    public function setPackageInfo($packageInfo)
    {
        $this->container['packageInfo'] = $packageInfo;
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

