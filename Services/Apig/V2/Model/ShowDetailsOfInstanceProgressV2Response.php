<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailsOfInstanceProgressV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailsOfInstanceProgressV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  实例创建进度  单位：百分比
    * status  实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
    * errorCode  实例创建失败错误码
    * errorMsg  实例创建失败错误信息
    * startTime  实例创建开始时间。unix时间戳格式。
    * endTime  实例创建结束时间。unix时间戳格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'int',
            'status' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  实例创建进度  单位：百分比
    * status  实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
    * errorCode  实例创建失败错误码
    * errorMsg  实例创建失败错误信息
    * startTime  实例创建开始时间。unix时间戳格式。
    * endTime  实例创建结束时间。unix时间戳格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => 'int32',
        'status' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * progress  实例创建进度  单位：百分比
    * status  实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
    * errorCode  实例创建失败错误码
    * errorMsg  实例创建失败错误信息
    * startTime  实例创建开始时间。unix时间戳格式。
    * endTime  实例创建结束时间。unix时间戳格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'status' => 'status',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  实例创建进度  单位：百分比
    * status  实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
    * errorCode  实例创建失败错误码
    * errorMsg  实例创建失败错误信息
    * startTime  实例创建开始时间。unix时间戳格式。
    * endTime  实例创建结束时间。unix时间戳格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'status' => 'setStatus',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  实例创建进度  单位：百分比
    * status  实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
    * errorCode  实例创建失败错误码
    * errorMsg  实例创建失败错误信息
    * startTime  实例创建开始时间。unix时间戳格式。
    * endTime  实例创建结束时间。unix时间戳格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'status' => 'getStatus',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
    const PROGRESS_30 = 30;
    const PROGRESS_50 = 50;
    const PROGRESS_80 = 80;
    const PROGRESS_90 = 90;
    const PROGRESS_100 = 100;
    const STATUS_CREATING = 'creating';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProgressAllowableValues()
    {
        return [
            self::PROGRESS_30,
            self::PROGRESS_50,
            self::PROGRESS_80,
            self::PROGRESS_90,
            self::PROGRESS_100,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_SUCCESS,
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProgressAllowableValues();
                if (!is_null($this->container['progress']) && !in_array($this->container['progress'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'progress', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets progress
    *  实例创建进度  单位：百分比
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 实例创建进度  单位：百分比
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets status
    *  实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
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
    * @param string|null $status 实例创建状态 - creating：创建中 - success：创建成功 - failed：创建失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorCode
    *  实例创建失败错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 实例创建失败错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  实例创建失败错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 实例创建失败错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets startTime
    *  实例创建开始时间。unix时间戳格式。
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
    * @param int|null $startTime 实例创建开始时间。unix时间戳格式。
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
    *  实例创建结束时间。unix时间戳格式。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 实例创建结束时间。unix时间戳格式。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

