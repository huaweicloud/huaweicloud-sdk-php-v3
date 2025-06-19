<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProgressVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProgressVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  进度uri
    * name  异步进度名称
    * total  资源总数
    * completed  异步操作是否完成
    * cancelled  异步操作是否取消
    * informations  提示信息列表
    * code  错误编码
    * reason  错误信息
    * submittedTime  提交时间
    * beginTime  开始时间
    * endTime  结束时间
    * serverIp  服务ip
    * lastModifiedTime  最后修改时间
    * finishedCount  执行完成总数
    * returnValue  异步操作返回值
    * exceptionMessage  异常信息
    * lineUpNum  行编号
    * asynOperationKey  异步操作的key
    * isEnded  是否结束
    * finishedPercent  异步操作完成进度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'total' => 'int',
            'completed' => 'bool',
            'cancelled' => 'bool',
            'informations' => 'string[]',
            'code' => 'string',
            'reason' => 'string',
            'submittedTime' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'serverIp' => 'string',
            'lastModifiedTime' => 'int',
            'finishedCount' => 'int',
            'returnValue' => 'object',
            'exceptionMessage' => 'string',
            'lineUpNum' => 'int',
            'asynOperationKey' => 'string',
            'isEnded' => 'bool',
            'finishedPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  进度uri
    * name  异步进度名称
    * total  资源总数
    * completed  异步操作是否完成
    * cancelled  异步操作是否取消
    * informations  提示信息列表
    * code  错误编码
    * reason  错误信息
    * submittedTime  提交时间
    * beginTime  开始时间
    * endTime  结束时间
    * serverIp  服务ip
    * lastModifiedTime  最后修改时间
    * finishedCount  执行完成总数
    * returnValue  异步操作返回值
    * exceptionMessage  异常信息
    * lineUpNum  行编号
    * asynOperationKey  异步操作的key
    * isEnded  是否结束
    * finishedPercent  异步操作完成进度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'total' => 'int32',
        'completed' => null,
        'cancelled' => null,
        'informations' => null,
        'code' => null,
        'reason' => null,
        'submittedTime' => null,
        'beginTime' => null,
        'endTime' => null,
        'serverIp' => null,
        'lastModifiedTime' => 'int64',
        'finishedCount' => 'int32',
        'returnValue' => null,
        'exceptionMessage' => null,
        'lineUpNum' => 'int32',
        'asynOperationKey' => null,
        'isEnded' => null,
        'finishedPercent' => 'int32'
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
    * uri  进度uri
    * name  异步进度名称
    * total  资源总数
    * completed  异步操作是否完成
    * cancelled  异步操作是否取消
    * informations  提示信息列表
    * code  错误编码
    * reason  错误信息
    * submittedTime  提交时间
    * beginTime  开始时间
    * endTime  结束时间
    * serverIp  服务ip
    * lastModifiedTime  最后修改时间
    * finishedCount  执行完成总数
    * returnValue  异步操作返回值
    * exceptionMessage  异常信息
    * lineUpNum  行编号
    * asynOperationKey  异步操作的key
    * isEnded  是否结束
    * finishedPercent  异步操作完成进度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'total' => 'total',
            'completed' => 'completed',
            'cancelled' => 'cancelled',
            'informations' => 'informations',
            'code' => 'code',
            'reason' => 'reason',
            'submittedTime' => 'submitted_time',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'serverIp' => 'server_ip',
            'lastModifiedTime' => 'last_modified_time',
            'finishedCount' => 'finished_count',
            'returnValue' => 'return_value',
            'exceptionMessage' => 'exception_message',
            'lineUpNum' => 'line_up_num',
            'asynOperationKey' => 'asyn_operation_key',
            'isEnded' => 'is_ended',
            'finishedPercent' => 'finished_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  进度uri
    * name  异步进度名称
    * total  资源总数
    * completed  异步操作是否完成
    * cancelled  异步操作是否取消
    * informations  提示信息列表
    * code  错误编码
    * reason  错误信息
    * submittedTime  提交时间
    * beginTime  开始时间
    * endTime  结束时间
    * serverIp  服务ip
    * lastModifiedTime  最后修改时间
    * finishedCount  执行完成总数
    * returnValue  异步操作返回值
    * exceptionMessage  异常信息
    * lineUpNum  行编号
    * asynOperationKey  异步操作的key
    * isEnded  是否结束
    * finishedPercent  异步操作完成进度
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'total' => 'setTotal',
            'completed' => 'setCompleted',
            'cancelled' => 'setCancelled',
            'informations' => 'setInformations',
            'code' => 'setCode',
            'reason' => 'setReason',
            'submittedTime' => 'setSubmittedTime',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'serverIp' => 'setServerIp',
            'lastModifiedTime' => 'setLastModifiedTime',
            'finishedCount' => 'setFinishedCount',
            'returnValue' => 'setReturnValue',
            'exceptionMessage' => 'setExceptionMessage',
            'lineUpNum' => 'setLineUpNum',
            'asynOperationKey' => 'setAsynOperationKey',
            'isEnded' => 'setIsEnded',
            'finishedPercent' => 'setFinishedPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  进度uri
    * name  异步进度名称
    * total  资源总数
    * completed  异步操作是否完成
    * cancelled  异步操作是否取消
    * informations  提示信息列表
    * code  错误编码
    * reason  错误信息
    * submittedTime  提交时间
    * beginTime  开始时间
    * endTime  结束时间
    * serverIp  服务ip
    * lastModifiedTime  最后修改时间
    * finishedCount  执行完成总数
    * returnValue  异步操作返回值
    * exceptionMessage  异常信息
    * lineUpNum  行编号
    * asynOperationKey  异步操作的key
    * isEnded  是否结束
    * finishedPercent  异步操作完成进度
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'total' => 'getTotal',
            'completed' => 'getCompleted',
            'cancelled' => 'getCancelled',
            'informations' => 'getInformations',
            'code' => 'getCode',
            'reason' => 'getReason',
            'submittedTime' => 'getSubmittedTime',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'serverIp' => 'getServerIp',
            'lastModifiedTime' => 'getLastModifiedTime',
            'finishedCount' => 'getFinishedCount',
            'returnValue' => 'getReturnValue',
            'exceptionMessage' => 'getExceptionMessage',
            'lineUpNum' => 'getLineUpNum',
            'asynOperationKey' => 'getAsynOperationKey',
            'isEnded' => 'getIsEnded',
            'finishedPercent' => 'getFinishedPercent'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['cancelled'] = isset($data['cancelled']) ? $data['cancelled'] : null;
        $this->container['informations'] = isset($data['informations']) ? $data['informations'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['submittedTime'] = isset($data['submittedTime']) ? $data['submittedTime'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['finishedCount'] = isset($data['finishedCount']) ? $data['finishedCount'] : null;
        $this->container['returnValue'] = isset($data['returnValue']) ? $data['returnValue'] : null;
        $this->container['exceptionMessage'] = isset($data['exceptionMessage']) ? $data['exceptionMessage'] : null;
        $this->container['lineUpNum'] = isset($data['lineUpNum']) ? $data['lineUpNum'] : null;
        $this->container['asynOperationKey'] = isset($data['asynOperationKey']) ? $data['asynOperationKey'] : null;
        $this->container['isEnded'] = isset($data['isEnded']) ? $data['isEnded'] : null;
        $this->container['finishedPercent'] = isset($data['finishedPercent']) ? $data['finishedPercent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets uri
    *  进度uri
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 进度uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  异步进度名称
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
    * @param string|null $name 异步进度名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets total
    *  资源总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 资源总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets completed
    *  异步操作是否完成
    *
    * @return bool|null
    */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
    * Sets completed
    *
    * @param bool|null $completed 异步操作是否完成
    *
    * @return $this
    */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;
        return $this;
    }

    /**
    * Gets cancelled
    *  异步操作是否取消
    *
    * @return bool|null
    */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
    * Sets cancelled
    *
    * @param bool|null $cancelled 异步操作是否取消
    *
    * @return $this
    */
    public function setCancelled($cancelled)
    {
        $this->container['cancelled'] = $cancelled;
        return $this;
    }

    /**
    * Gets informations
    *  提示信息列表
    *
    * @return string[]|null
    */
    public function getInformations()
    {
        return $this->container['informations'];
    }

    /**
    * Sets informations
    *
    * @param string[]|null $informations 提示信息列表
    *
    * @return $this
    */
    public function setInformations($informations)
    {
        $this->container['informations'] = $informations;
        return $this;
    }

    /**
    * Gets code
    *  错误编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 错误编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets reason
    *  错误信息
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 错误信息
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets submittedTime
    *  提交时间
    *
    * @return string|null
    */
    public function getSubmittedTime()
    {
        return $this->container['submittedTime'];
    }

    /**
    * Sets submittedTime
    *
    * @param string|null $submittedTime 提交时间
    *
    * @return $this
    */
    public function setSubmittedTime($submittedTime)
    {
        $this->container['submittedTime'] = $submittedTime;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间
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
    * @param string|null $beginTime 开始时间
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
    *  结束时间
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
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets serverIp
    *  服务ip
    *
    * @return string|null
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string|null $serverIp 服务ip
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
        return $this;
    }

    /**
    * Gets lastModifiedTime
    *  最后修改时间
    *
    * @return int|null
    */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
    * Sets lastModifiedTime
    *
    * @param int|null $lastModifiedTime 最后修改时间
    *
    * @return $this
    */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;
        return $this;
    }

    /**
    * Gets finishedCount
    *  执行完成总数
    *
    * @return int|null
    */
    public function getFinishedCount()
    {
        return $this->container['finishedCount'];
    }

    /**
    * Sets finishedCount
    *
    * @param int|null $finishedCount 执行完成总数
    *
    * @return $this
    */
    public function setFinishedCount($finishedCount)
    {
        $this->container['finishedCount'] = $finishedCount;
        return $this;
    }

    /**
    * Gets returnValue
    *  异步操作返回值
    *
    * @return object|null
    */
    public function getReturnValue()
    {
        return $this->container['returnValue'];
    }

    /**
    * Sets returnValue
    *
    * @param object|null $returnValue 异步操作返回值
    *
    * @return $this
    */
    public function setReturnValue($returnValue)
    {
        $this->container['returnValue'] = $returnValue;
        return $this;
    }

    /**
    * Gets exceptionMessage
    *  异常信息
    *
    * @return string|null
    */
    public function getExceptionMessage()
    {
        return $this->container['exceptionMessage'];
    }

    /**
    * Sets exceptionMessage
    *
    * @param string|null $exceptionMessage 异常信息
    *
    * @return $this
    */
    public function setExceptionMessage($exceptionMessage)
    {
        $this->container['exceptionMessage'] = $exceptionMessage;
        return $this;
    }

    /**
    * Gets lineUpNum
    *  行编号
    *
    * @return int|null
    */
    public function getLineUpNum()
    {
        return $this->container['lineUpNum'];
    }

    /**
    * Sets lineUpNum
    *
    * @param int|null $lineUpNum 行编号
    *
    * @return $this
    */
    public function setLineUpNum($lineUpNum)
    {
        $this->container['lineUpNum'] = $lineUpNum;
        return $this;
    }

    /**
    * Gets asynOperationKey
    *  异步操作的key
    *
    * @return string|null
    */
    public function getAsynOperationKey()
    {
        return $this->container['asynOperationKey'];
    }

    /**
    * Sets asynOperationKey
    *
    * @param string|null $asynOperationKey 异步操作的key
    *
    * @return $this
    */
    public function setAsynOperationKey($asynOperationKey)
    {
        $this->container['asynOperationKey'] = $asynOperationKey;
        return $this;
    }

    /**
    * Gets isEnded
    *  是否结束
    *
    * @return bool|null
    */
    public function getIsEnded()
    {
        return $this->container['isEnded'];
    }

    /**
    * Sets isEnded
    *
    * @param bool|null $isEnded 是否结束
    *
    * @return $this
    */
    public function setIsEnded($isEnded)
    {
        $this->container['isEnded'] = $isEnded;
        return $this;
    }

    /**
    * Gets finishedPercent
    *  异步操作完成进度
    *
    * @return int|null
    */
    public function getFinishedPercent()
    {
        return $this->container['finishedPercent'];
    }

    /**
    * Sets finishedPercent
    *
    * @param int|null $finishedPercent 异步操作完成进度
    *
    * @return $this
    */
    public function setFinishedPercent($finishedPercent)
    {
        $this->container['finishedPercent'] = $finishedPercent;
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

