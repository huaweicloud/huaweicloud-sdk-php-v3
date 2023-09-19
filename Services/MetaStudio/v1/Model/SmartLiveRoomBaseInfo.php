<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartLiveRoomBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartLiveRoomBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  直播间ID
    * roomName  直播间名称
    * roomDescription  直播间描述。
    * coverUrl  直播间封面图URL
    * modelInfos  数字人模型信息
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStartTime  开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobEndTime  结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStatus  当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'roomName' => 'string',
            'roomDescription' => 'string',
            'coverUrl' => 'string',
            'modelInfos' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\ModelInfo[]',
            'createTime' => 'string',
            'updateTime' => 'string',
            'lastJobStartTime' => 'string',
            'lastJobEndTime' => 'string',
            'lastJobStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  直播间ID
    * roomName  直播间名称
    * roomDescription  直播间描述。
    * coverUrl  直播间封面图URL
    * modelInfos  数字人模型信息
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStartTime  开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobEndTime  结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStatus  当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'roomName' => null,
        'roomDescription' => null,
        'coverUrl' => null,
        'modelInfos' => null,
        'createTime' => null,
        'updateTime' => null,
        'lastJobStartTime' => null,
        'lastJobEndTime' => null,
        'lastJobStatus' => null
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
    * roomId  直播间ID
    * roomName  直播间名称
    * roomDescription  直播间描述。
    * coverUrl  直播间封面图URL
    * modelInfos  数字人模型信息
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStartTime  开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobEndTime  结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStatus  当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'roomName' => 'room_name',
            'roomDescription' => 'room_description',
            'coverUrl' => 'cover_url',
            'modelInfos' => 'model_infos',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'lastJobStartTime' => 'last_job_start_time',
            'lastJobEndTime' => 'last_job_end_time',
            'lastJobStatus' => 'last_job_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  直播间ID
    * roomName  直播间名称
    * roomDescription  直播间描述。
    * coverUrl  直播间封面图URL
    * modelInfos  数字人模型信息
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStartTime  开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobEndTime  结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStatus  当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'roomName' => 'setRoomName',
            'roomDescription' => 'setRoomDescription',
            'coverUrl' => 'setCoverUrl',
            'modelInfos' => 'setModelInfos',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'lastJobStartTime' => 'setLastJobStartTime',
            'lastJobEndTime' => 'setLastJobEndTime',
            'lastJobStatus' => 'setLastJobStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  直播间ID
    * roomName  直播间名称
    * roomDescription  直播间描述。
    * coverUrl  直播间封面图URL
    * modelInfos  数字人模型信息
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStartTime  开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobEndTime  结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * lastJobStatus  当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'roomName' => 'getRoomName',
            'roomDescription' => 'getRoomDescription',
            'coverUrl' => 'getCoverUrl',
            'modelInfos' => 'getModelInfos',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'lastJobStartTime' => 'getLastJobStartTime',
            'lastJobEndTime' => 'getLastJobEndTime',
            'lastJobStatus' => 'getLastJobStatus'
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
    const LAST_JOB_STATUS_WAITING = 'WAITING';
    const LAST_JOB_STATUS_PROCESSING = 'PROCESSING';
    const LAST_JOB_STATUS_SUCCEED = 'SUCCEED';
    const LAST_JOB_STATUS_FAILED = 'FAILED';
    const LAST_JOB_STATUS_CANCELED = 'CANCELED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLastJobStatusAllowableValues()
    {
        return [
            self::LAST_JOB_STATUS_WAITING,
            self::LAST_JOB_STATUS_PROCESSING,
            self::LAST_JOB_STATUS_SUCCEED,
            self::LAST_JOB_STATUS_FAILED,
            self::LAST_JOB_STATUS_CANCELED,
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['roomName'] = isset($data['roomName']) ? $data['roomName'] : null;
        $this->container['roomDescription'] = isset($data['roomDescription']) ? $data['roomDescription'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
        $this->container['modelInfos'] = isset($data['modelInfos']) ? $data['modelInfos'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['lastJobStartTime'] = isset($data['lastJobStartTime']) ? $data['lastJobStartTime'] : null;
        $this->container['lastJobEndTime'] = isset($data['lastJobEndTime']) ? $data['lastJobEndTime'] : null;
        $this->container['lastJobStatus'] = isset($data['lastJobStatus']) ? $data['lastJobStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roomName']) && (mb_strlen($this->container['roomName']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['roomName']) && (mb_strlen($this->container['roomName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['lastJobStartTime']) && (mb_strlen($this->container['lastJobStartTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'lastJobStartTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['lastJobStartTime']) && (mb_strlen($this->container['lastJobStartTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'lastJobStartTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['lastJobEndTime']) && (mb_strlen($this->container['lastJobEndTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'lastJobEndTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['lastJobEndTime']) && (mb_strlen($this->container['lastJobEndTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'lastJobEndTime', the character length must be bigger than or equal to 20.";
            }
            $allowedValues = $this->getLastJobStatusAllowableValues();
                if (!is_null($this->container['lastJobStatus']) && !in_array($this->container['lastJobStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lastJobStatus', must be one of '%s'",
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
    * Gets roomId
    *  直播间ID
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
    * @param string|null $roomId 直播间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets roomName
    *  直播间名称
    *
    * @return string|null
    */
    public function getRoomName()
    {
        return $this->container['roomName'];
    }

    /**
    * Sets roomName
    *
    * @param string|null $roomName 直播间名称
    *
    * @return $this
    */
    public function setRoomName($roomName)
    {
        $this->container['roomName'] = $roomName;
        return $this;
    }

    /**
    * Gets roomDescription
    *  直播间描述。
    *
    * @return string|null
    */
    public function getRoomDescription()
    {
        return $this->container['roomDescription'];
    }

    /**
    * Sets roomDescription
    *
    * @param string|null $roomDescription 直播间描述。
    *
    * @return $this
    */
    public function setRoomDescription($roomDescription)
    {
        $this->container['roomDescription'] = $roomDescription;
        return $this;
    }

    /**
    * Gets coverUrl
    *  直播间封面图URL
    *
    * @return string|null
    */
    public function getCoverUrl()
    {
        return $this->container['coverUrl'];
    }

    /**
    * Sets coverUrl
    *
    * @param string|null $coverUrl 直播间封面图URL
    *
    * @return $this
    */
    public function setCoverUrl($coverUrl)
    {
        $this->container['coverUrl'] = $coverUrl;
        return $this;
    }

    /**
    * Gets modelInfos
    *  数字人模型信息
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\ModelInfo[]|null
    */
    public function getModelInfos()
    {
        return $this->container['modelInfos'];
    }

    /**
    * Sets modelInfos
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\ModelInfo[]|null $modelInfos 数字人模型信息
    *
    * @return $this
    */
    public function setModelInfos($modelInfos)
    {
        $this->container['modelInfos'] = $modelInfos;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets lastJobStartTime
    *  开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getLastJobStartTime()
    {
        return $this->container['lastJobStartTime'];
    }

    /**
    * Sets lastJobStartTime
    *
    * @param string|null $lastJobStartTime 开始直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setLastJobStartTime($lastJobStartTime)
    {
        $this->container['lastJobStartTime'] = $lastJobStartTime;
        return $this;
    }

    /**
    * Gets lastJobEndTime
    *  结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getLastJobEndTime()
    {
        return $this->container['lastJobEndTime'];
    }

    /**
    * Sets lastJobEndTime
    *
    * @param string|null $lastJobEndTime 结束直播时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setLastJobEndTime($lastJobEndTime)
    {
        $this->container['lastJobEndTime'] = $lastJobEndTime;
        return $this;
    }

    /**
    * Gets lastJobStatus
    *  当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @return string|null
    */
    public function getLastJobStatus()
    {
        return $this->container['lastJobStatus'];
    }

    /**
    * Sets lastJobStatus
    *
    * @param string|null $lastJobStatus 当前直播状态 - WAITING：任务等待执行 - PROCESSING：任务执行中 - SUCCEED：任务处理成功 - FAILED：任务处理时变 - CANCELED：任务取消
    *
    * @return $this
    */
    public function setLastJobStatus($lastJobStatus)
    {
        $this->container['lastJobStatus'] = $lastJobStatus;
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

