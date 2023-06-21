<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMixJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMixJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务编号，可以用于修改、查看和停止合流任务
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * mixParam  mixParam
    * recordParam  recordParam
    * createTime  任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  状态描述，对state字段的一些补充说明，可用于人工查阅。
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'streamName' => 'string',
            'appId' => 'string',
            'roomId' => 'string',
            'mixParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MixParam',
            'recordParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam',
            'createTime' => 'string',
            'updateTime' => 'string',
            'state' => 'string',
            'stopReason' => 'string',
            'description' => 'string',
            'startTime' => 'string',
            'stopTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务编号，可以用于修改、查看和停止合流任务
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * mixParam  mixParam
    * recordParam  recordParam
    * createTime  任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  状态描述，对state字段的一些补充说明，可用于人工查阅。
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'streamName' => null,
        'appId' => null,
        'roomId' => null,
        'mixParam' => null,
        'recordParam' => null,
        'createTime' => null,
        'updateTime' => null,
        'state' => null,
        'stopReason' => null,
        'description' => null,
        'startTime' => null,
        'stopTime' => null,
        'xRequestId' => null
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
    * jobId  任务编号，可以用于修改、查看和停止合流任务
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * mixParam  mixParam
    * recordParam  recordParam
    * createTime  任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  状态描述，对state字段的一些补充说明，可用于人工查阅。
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'streamName' => 'stream_name',
            'appId' => 'app_id',
            'roomId' => 'room_id',
            'mixParam' => 'mix_param',
            'recordParam' => 'record_param',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'state' => 'state',
            'stopReason' => 'stop_reason',
            'description' => 'description',
            'startTime' => 'start_time',
            'stopTime' => 'stop_time',
            'xRequestId' => 'X-request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务编号，可以用于修改、查看和停止合流任务
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * mixParam  mixParam
    * recordParam  recordParam
    * createTime  任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  状态描述，对state字段的一些补充说明，可用于人工查阅。
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'streamName' => 'setStreamName',
            'appId' => 'setAppId',
            'roomId' => 'setRoomId',
            'mixParam' => 'setMixParam',
            'recordParam' => 'setRecordParam',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'state' => 'setState',
            'stopReason' => 'setStopReason',
            'description' => 'setDescription',
            'startTime' => 'setStartTime',
            'stopTime' => 'setStopTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务编号，可以用于修改、查看和停止合流任务
    * streamName  流名
    * appId  应用id
    * roomId  房间id
    * mixParam  mixParam
    * recordParam  recordParam
    * createTime  任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * updateTime  任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * state  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    * stopReason  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    * description  状态描述，对state字段的一些补充说明，可用于人工查阅。
    * startTime  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * stopTime  任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'streamName' => 'getStreamName',
            'appId' => 'getAppId',
            'roomId' => 'getRoomId',
            'mixParam' => 'getMixParam',
            'recordParam' => 'getRecordParam',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'state' => 'getState',
            'stopReason' => 'getStopReason',
            'description' => 'getDescription',
            'startTime' => 'getStartTime',
            'stopTime' => 'getStopTime',
            'xRequestId' => 'getXRequestId'
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
    const STATE_INIT = 'INIT';
    const STATE_RUNNING = 'RUNNING';
    const STATE_STOPPED = 'STOPPED';
    const STOP_REASON_TENANT_STOP = 'TENANT_STOP';
    const STOP_REASON_EXCEED_MAX_IDLE_TIME = 'EXCEED_MAX_IDLE_TIME';
    const STOP_REASON_INTERNAL_ERROR = 'INTERNAL_ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INIT,
            self::STATE_RUNNING,
            self::STATE_STOPPED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStopReasonAllowableValues()
    {
        return [
            self::STOP_REASON_TENANT_STOP,
            self::STOP_REASON_EXCEED_MAX_IDLE_TIME,
            self::STOP_REASON_INTERNAL_ERROR,
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
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['mixParam'] = isset($data['mixParam']) ? $data['mixParam'] : null;
        $this->container['recordParam'] = isset($data['recordParam']) ? $data['recordParam'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stopReason'] = isset($data['stopReason']) ? $data['stopReason'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['stopTime'] = isset($data['stopTime']) ? $data['stopTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 256)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 256)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStopReasonAllowableValues();
                if (!is_null($this->container['stopReason']) && !in_array($this->container['stopReason'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'stopReason', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['stopReason']) && (mb_strlen($this->container['stopReason']) > 32)) {
                $invalidProperties[] = "invalid value for 'stopReason', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['stopReason']) && (mb_strlen($this->container['stopReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'stopReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stopTime']) && (mb_strlen($this->container['stopTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'stopTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stopTime']) && (mb_strlen($this->container['stopTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'stopTime', the character length must be bigger than or equal to 1.";
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
    *  任务编号，可以用于修改、查看和停止合流任务
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
    * @param string|null $jobId 任务编号，可以用于修改、查看和停止合流任务
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets streamName
    *  流名
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 流名
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets appId
    *  应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets roomId
    *  房间id
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 房间id
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets mixParam
    *  mixParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\MixParam|null
    */
    public function getMixParam()
    {
        return $this->container['mixParam'];
    }

    /**
    * Sets mixParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MixParam|null $mixParam mixParam
    *
    * @return $this
    */
    public function setMixParam($mixParam)
    {
        $this->container['mixParam'] = $mixParam;
        return $this;
    }

    /**
    * Gets recordParam
    *  recordParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null
    */
    public function getRecordParam()
    {
        return $this->container['recordParam'];
    }

    /**
    * Sets recordParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null $recordParam recordParam
    *
    * @return $this
    */
    public function setRecordParam($recordParam)
    {
        $this->container['recordParam'] = $recordParam;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 任务中的布局更新的时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets state
    *  任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
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
    * @param string|null $state 任务状态。  - INIT：任务正在初始化 - RUNNING：任务正在运行 - STOPPED：任务已停止
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets stopReason
    *  任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    *
    * @return string|null
    */
    public function getStopReason()
    {
        return $this->container['stopReason'];
    }

    /**
    * Sets stopReason
    *
    * @param string|null $stopReason 任务结束原因 - TENANT_STOP - EXCEED_MAX_IDLE_TIME - INTERNAL_ERROR
    *
    * @return $this
    */
    public function setStopReason($stopReason)
    {
        $this->container['stopReason'] = $stopReason;
        return $this;
    }

    /**
    * Gets description
    *  状态描述，对state字段的一些补充说明，可用于人工查阅。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 状态描述，对state字段的一些补充说明，可用于人工查阅。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets stopTime
    *  任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getStopTime()
    {
        return $this->container['stopTime'];
    }

    /**
    * Sets stopTime
    *
    * @param string|null $stopTime 任务结束时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setStopTime($stopTime)
    {
        $this->container['stopTime'] = $stopTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

