<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineStateStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineStateStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  阶段或任务标识
    * name  阶段或任务名称
    * type  类别(阶段/任务)
    * startTime  执行开始时间
    * endTime  执行结束时间
    * elapsedTime  运行耗时
    * status  运行状态
    * outcome  运行结果
    * errorCode  错误码
    * errorMsg  错误信息
    * children  子任务运行信息(对任务来说是空的)
    * detailUrl  任务运行记录跳转链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'elapsedTime' => 'string',
            'status' => 'string',
            'outcome' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'children' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\PipelineStateStatus[]',
            'detailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  阶段或任务标识
    * name  阶段或任务名称
    * type  类别(阶段/任务)
    * startTime  执行开始时间
    * endTime  执行结束时间
    * elapsedTime  运行耗时
    * status  运行状态
    * outcome  运行结果
    * errorCode  错误码
    * errorMsg  错误信息
    * children  子任务运行信息(对任务来说是空的)
    * detailUrl  任务运行记录跳转链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'startTime' => null,
        'endTime' => null,
        'elapsedTime' => null,
        'status' => null,
        'outcome' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'children' => null,
        'detailUrl' => null
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
    * id  阶段或任务标识
    * name  阶段或任务名称
    * type  类别(阶段/任务)
    * startTime  执行开始时间
    * endTime  执行结束时间
    * elapsedTime  运行耗时
    * status  运行状态
    * outcome  运行结果
    * errorCode  错误码
    * errorMsg  错误信息
    * children  子任务运行信息(对任务来说是空的)
    * detailUrl  任务运行记录跳转链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'elapsedTime' => 'elapsed_time',
            'status' => 'status',
            'outcome' => 'outcome',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'children' => 'children',
            'detailUrl' => 'detail_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  阶段或任务标识
    * name  阶段或任务名称
    * type  类别(阶段/任务)
    * startTime  执行开始时间
    * endTime  执行结束时间
    * elapsedTime  运行耗时
    * status  运行状态
    * outcome  运行结果
    * errorCode  错误码
    * errorMsg  错误信息
    * children  子任务运行信息(对任务来说是空的)
    * detailUrl  任务运行记录跳转链接
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'elapsedTime' => 'setElapsedTime',
            'status' => 'setStatus',
            'outcome' => 'setOutcome',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'children' => 'setChildren',
            'detailUrl' => 'setDetailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  阶段或任务标识
    * name  阶段或任务名称
    * type  类别(阶段/任务)
    * startTime  执行开始时间
    * endTime  执行结束时间
    * elapsedTime  运行耗时
    * status  运行状态
    * outcome  运行结果
    * errorCode  错误码
    * errorMsg  错误信息
    * children  子任务运行信息(对任务来说是空的)
    * detailUrl  任务运行记录跳转链接
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'elapsedTime' => 'getElapsedTime',
            'status' => 'getStatus',
            'outcome' => 'getOutcome',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'children' => 'getChildren',
            'detailUrl' => 'getDetailUrl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['elapsedTime'] = isset($data['elapsedTime']) ? $data['elapsedTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['elapsedTime'] === null) {
            $invalidProperties[] = "'elapsedTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['outcome'] === null) {
            $invalidProperties[] = "'outcome' can't be null";
        }
        if ($this->container['errorCode'] === null) {
            $invalidProperties[] = "'errorCode' can't be null";
        }
        if ($this->container['errorMsg'] === null) {
            $invalidProperties[] = "'errorMsg' can't be null";
        }
        if ($this->container['children'] === null) {
            $invalidProperties[] = "'children' can't be null";
        }
        if ($this->container['detailUrl'] === null) {
            $invalidProperties[] = "'detailUrl' can't be null";
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
    * Gets id
    *  阶段或任务标识
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
    * @param string $id 阶段或任务标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  阶段或任务名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 阶段或任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  类别(阶段/任务)
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 类别(阶段/任务)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  执行开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 执行开始时间
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
    *  执行结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 执行结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets elapsedTime
    *  运行耗时
    *
    * @return string
    */
    public function getElapsedTime()
    {
        return $this->container['elapsedTime'];
    }

    /**
    * Sets elapsedTime
    *
    * @param string $elapsedTime 运行耗时
    *
    * @return $this
    */
    public function setElapsedTime($elapsedTime)
    {
        $this->container['elapsedTime'] = $elapsedTime;
        return $this;
    }

    /**
    * Gets status
    *  运行状态
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
    * @param string $status 运行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets outcome
    *  运行结果
    *
    * @return string
    */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
    * Sets outcome
    *
    * @param string $outcome 运行结果
    *
    * @return $this
    */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
    *
    * @return string
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string $errorCode 错误码
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
    *  错误信息
    *
    * @return string
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets children
    *  子任务运行信息(对任务来说是空的)
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\PipelineStateStatus[]
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\PipelineStateStatus[] $children 子任务运行信息(对任务来说是空的)
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets detailUrl
    *  任务运行记录跳转链接
    *
    * @return string
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string $detailUrl 任务运行记录跳转链接
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
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

