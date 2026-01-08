<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Result implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  任务类型
    * assetId  媒资ID
    * status  转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
    * createTime  转码下发时间，格式按照RFC3339，UTC时间
    * endTime  转码结束时间
    * transcodeResult  transcodeResult
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'assetId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'endTime' => 'string',
            'transcodeResult' => '\HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfoResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  任务类型
    * assetId  媒资ID
    * status  转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
    * createTime  转码下发时间，格式按照RFC3339，UTC时间
    * endTime  转码结束时间
    * transcodeResult  transcodeResult
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'assetId' => null,
        'status' => null,
        'createTime' => null,
        'endTime' => null,
        'transcodeResult' => null
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
    * type  任务类型
    * assetId  媒资ID
    * status  转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
    * createTime  转码下发时间，格式按照RFC3339，UTC时间
    * endTime  转码结束时间
    * transcodeResult  transcodeResult
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'assetId' => 'asset_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'transcodeResult' => 'transcode_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  任务类型
    * assetId  媒资ID
    * status  转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
    * createTime  转码下发时间，格式按照RFC3339，UTC时间
    * endTime  转码结束时间
    * transcodeResult  transcodeResult
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'assetId' => 'setAssetId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'transcodeResult' => 'setTranscodeResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  任务类型
    * assetId  媒资ID
    * status  转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
    * createTime  转码下发时间，格式按照RFC3339，UTC时间
    * endTime  转码结束时间
    * transcodeResult  transcodeResult
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'assetId' => 'getAssetId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'transcodeResult' => 'getTranscodeResult'
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
    const STATUS_WAITING = 'WAITING';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUCCEED = 'SUCCEED';
    const STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_PROCESSING,
            self::STATUS_SUCCEED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['transcodeResult'] = isset($data['transcodeResult']) ? $data['transcodeResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  任务类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets assetId
    *  媒资ID
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 媒资ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets status
    *  转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
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
    * @param string|null $status 转码状态 - WAITING 等待中 - PROCESSING 处理中 - SUCCEED 成功 - FAILED 失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  转码下发时间，格式按照RFC3339，UTC时间
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
    * @param string|null $createTime 转码下发时间，格式按照RFC3339，UTC时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  转码结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 转码结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets transcodeResult
    *  transcodeResult
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfoResult|null
    */
    public function getTranscodeResult()
    {
        return $this->container['transcodeResult'];
    }

    /**
    * Sets transcodeResult
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfoResult|null $transcodeResult transcodeResult
    *
    * @return $this
    */
    public function setTranscodeResult($transcodeResult)
    {
        $this->container['transcodeResult'] = $transcodeResult;
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

