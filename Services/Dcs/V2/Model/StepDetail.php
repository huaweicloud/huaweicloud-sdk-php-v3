<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StepDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StepDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stepId  任务id
    * stepName  任务名
    * stepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * errorCode  错误码
    * subStepDetails  子任务详情列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stepId' => 'string',
            'stepName' => 'string',
            'stepStatus' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'errorCode' => 'string',
            'subStepDetails' => '\HuaweiCloud\SDK\Dcs\V2\Model\SubStepDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stepId  任务id
    * stepName  任务名
    * stepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * errorCode  错误码
    * subStepDetails  子任务详情列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stepId' => null,
        'stepName' => null,
        'stepStatus' => null,
        'beginTime' => null,
        'endTime' => null,
        'errorCode' => null,
        'subStepDetails' => null
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
    * stepId  任务id
    * stepName  任务名
    * stepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * errorCode  错误码
    * subStepDetails  子任务详情列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stepId' => 'step_id',
            'stepName' => 'step_name',
            'stepStatus' => 'step_status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'errorCode' => 'error_code',
            'subStepDetails' => 'sub_step_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stepId  任务id
    * stepName  任务名
    * stepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * errorCode  错误码
    * subStepDetails  子任务详情列表
    *
    * @var string[]
    */
    protected static $setters = [
            'stepId' => 'setStepId',
            'stepName' => 'setStepName',
            'stepStatus' => 'setStepStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'errorCode' => 'setErrorCode',
            'subStepDetails' => 'setSubStepDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stepId  任务id
    * stepName  任务名
    * stepStatus  任务状态
    * beginTime  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * endTime  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * errorCode  错误码
    * subStepDetails  子任务详情列表
    *
    * @var string[]
    */
    protected static $getters = [
            'stepId' => 'getStepId',
            'stepName' => 'getStepName',
            'stepStatus' => 'getStepStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'errorCode' => 'getErrorCode',
            'subStepDetails' => 'getSubStepDetails'
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
    const STEP_STATUS_FINISH = 'FINISH';
    const STEP_STATUS_FAILED = 'FAILED';
    const STEP_STATUS_EXECUTING = 'EXECUTING';
    const STEP_STATUS_WAITING = 'WAITING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStepStatusAllowableValues()
    {
        return [
            self::STEP_STATUS_FINISH,
            self::STEP_STATUS_FAILED,
            self::STEP_STATUS_EXECUTING,
            self::STEP_STATUS_WAITING,
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
        $this->container['stepId'] = isset($data['stepId']) ? $data['stepId'] : null;
        $this->container['stepName'] = isset($data['stepName']) ? $data['stepName'] : null;
        $this->container['stepStatus'] = isset($data['stepStatus']) ? $data['stepStatus'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['subStepDetails'] = isset($data['subStepDetails']) ? $data['subStepDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stepName']) && (mb_strlen($this->container['stepName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'stepName', the character length must be smaller than or equal to 1024.";
            }
            $allowedValues = $this->getStepStatusAllowableValues();
                if (!is_null($this->container['stepStatus']) && !in_array($this->container['stepStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'stepStatus', must be one of '%s'",
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
    * Gets stepId
    *  任务id
    *
    * @return string|null
    */
    public function getStepId()
    {
        return $this->container['stepId'];
    }

    /**
    * Sets stepId
    *
    * @param string|null $stepId 任务id
    *
    * @return $this
    */
    public function setStepId($stepId)
    {
        $this->container['stepId'] = $stepId;
        return $this;
    }

    /**
    * Gets stepName
    *  任务名
    *
    * @return string|null
    */
    public function getStepName()
    {
        return $this->container['stepName'];
    }

    /**
    * Sets stepName
    *
    * @param string|null $stepName 任务名
    *
    * @return $this
    */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;
        return $this;
    }

    /**
    * Gets stepStatus
    *  任务状态
    *
    * @return string|null
    */
    public function getStepStatus()
    {
        return $this->container['stepStatus'];
    }

    /**
    * Sets stepStatus
    *
    * @param string|null $stepStatus 任务状态
    *
    * @return $this
    */
    public function setStepStatus($stepStatus)
    {
        $this->container['stepStatus'] = $stepStatus;
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
    * Gets subStepDetails
    *  子任务详情列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\SubStepDetail[]|null
    */
    public function getSubStepDetails()
    {
        return $this->container['subStepDetails'];
    }

    /**
    * Sets subStepDetails
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\SubStepDetail[]|null $subStepDetails 子任务详情列表
    *
    * @return $this
    */
    public function setSubStepDetails($subStepDetails)
    {
        $this->container['subStepDetails'] = $subStepDetails;
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

