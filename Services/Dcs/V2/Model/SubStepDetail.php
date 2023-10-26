<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubStepDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubStepDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subStepId  任务id
    * subStepName  任务名
    * subStepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * detail  子任务的附加属性详情
    * errorCode  错误码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subStepId' => 'string',
            'subStepName' => 'string',
            'subStepStatus' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'detail' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subStepId  任务id
    * subStepName  任务名
    * subStepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * detail  子任务的附加属性详情
    * errorCode  错误码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subStepId' => null,
        'subStepName' => null,
        'subStepStatus' => null,
        'beginTime' => null,
        'endTime' => null,
        'detail' => null,
        'errorCode' => null
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
    * subStepId  任务id
    * subStepName  任务名
    * subStepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * detail  子任务的附加属性详情
    * errorCode  错误码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subStepId' => 'sub_step_id',
            'subStepName' => 'sub_step_name',
            'subStepStatus' => 'sub_step_status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'detail' => 'detail',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subStepId  任务id
    * subStepName  任务名
    * subStepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * detail  子任务的附加属性详情
    * errorCode  错误码
    *
    * @var string[]
    */
    protected static $setters = [
            'subStepId' => 'setSubStepId',
            'subStepName' => 'setSubStepName',
            'subStepStatus' => 'setSubStepStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'detail' => 'setDetail',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subStepId  任务id
    * subStepName  任务名
    * subStepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * detail  子任务的附加属性详情
    * errorCode  错误码
    *
    * @var string[]
    */
    protected static $getters = [
            'subStepId' => 'getSubStepId',
            'subStepName' => 'getSubStepName',
            'subStepStatus' => 'getSubStepStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'detail' => 'getDetail',
            'errorCode' => 'getErrorCode'
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
        $this->container['subStepId'] = isset($data['subStepId']) ? $data['subStepId'] : null;
        $this->container['subStepName'] = isset($data['subStepName']) ? $data['subStepName'] : null;
        $this->container['subStepStatus'] = isset($data['subStepStatus']) ? $data['subStepStatus'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subStepName']) && (mb_strlen($this->container['subStepName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'subStepName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['detail']) && (mb_strlen($this->container['detail']) > 1024)) {
                $invalidProperties[] = "invalid value for 'detail', the character length must be smaller than or equal to 1024.";
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
    * Gets subStepId
    *  任务id
    *
    * @return string|null
    */
    public function getSubStepId()
    {
        return $this->container['subStepId'];
    }

    /**
    * Sets subStepId
    *
    * @param string|null $subStepId 任务id
    *
    * @return $this
    */
    public function setSubStepId($subStepId)
    {
        $this->container['subStepId'] = $subStepId;
        return $this;
    }

    /**
    * Gets subStepName
    *  任务名
    *
    * @return string|null
    */
    public function getSubStepName()
    {
        return $this->container['subStepName'];
    }

    /**
    * Sets subStepName
    *
    * @param string|null $subStepName 任务名
    *
    * @return $this
    */
    public function setSubStepName($subStepName)
    {
        $this->container['subStepName'] = $subStepName;
        return $this;
    }

    /**
    * Gets subStepStatus
    *  任务状态
    *
    * @return string|null
    */
    public function getSubStepStatus()
    {
        return $this->container['subStepStatus'];
    }

    /**
    * Sets subStepStatus
    *
    * @param string|null $subStepStatus 任务状态
    *
    * @return $this
    */
    public function setSubStepStatus($subStepStatus)
    {
        $this->container['subStepStatus'] = $subStepStatus;
        return $this;
    }

    /**
    * Gets beginTime
    *  任务启动时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 任务启动时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  任务结束时间，格式为2020-06-17T07:38:42.503Z
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
    * @param string|null $endTime 任务结束时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets detail
    *  子任务的附加属性详情
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 子任务的附加属性详情
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
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
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

