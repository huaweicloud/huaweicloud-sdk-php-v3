<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdviceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdviceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * messageId  messageId
    * statusCode  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    * indexAdvice  索引建议
    * tuningAdvice  诊断建议
    * formattedSql  格式化SQL
    * originalSql  原始SQL
    * explain  执行计划
    * tbPosInfos  表位置信息
    * feedbackInfos  feedbackInfos
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'messageId' => 'string',
            'statusCode' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'indexAdvice' => '\HuaweiCloud\SDK\Das\V3\Model\IndexAdviceInfo[]',
            'tuningAdvice' => 'string[]',
            'formattedSql' => 'string',
            'originalSql' => 'string',
            'explain' => '\HuaweiCloud\SDK\Das\V3\Model\Explain[]',
            'tbPosInfos' => '\HuaweiCloud\SDK\Das\V3\Model\TbPosInfo[]',
            'feedbackInfos' => '\HuaweiCloud\SDK\Das\V3\Model\FeedbackInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * messageId  messageId
    * statusCode  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    * indexAdvice  索引建议
    * tuningAdvice  诊断建议
    * formattedSql  格式化SQL
    * originalSql  原始SQL
    * explain  执行计划
    * tbPosInfos  表位置信息
    * feedbackInfos  feedbackInfos
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'messageId' => null,
        'statusCode' => null,
        'errorCode' => null,
        'errorMessage' => null,
        'indexAdvice' => null,
        'tuningAdvice' => null,
        'formattedSql' => null,
        'originalSql' => null,
        'explain' => null,
        'tbPosInfos' => null,
        'feedbackInfos' => null
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
    * messageId  messageId
    * statusCode  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    * indexAdvice  索引建议
    * tuningAdvice  诊断建议
    * formattedSql  格式化SQL
    * originalSql  原始SQL
    * explain  执行计划
    * tbPosInfos  表位置信息
    * feedbackInfos  feedbackInfos
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'messageId' => 'message_id',
            'statusCode' => 'status_code',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'indexAdvice' => 'index_advice',
            'tuningAdvice' => 'tuning_advice',
            'formattedSql' => 'formatted_sql',
            'originalSql' => 'original_sql',
            'explain' => 'explain',
            'tbPosInfos' => 'tb_pos_infos',
            'feedbackInfos' => 'feedback_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * messageId  messageId
    * statusCode  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    * indexAdvice  索引建议
    * tuningAdvice  诊断建议
    * formattedSql  格式化SQL
    * originalSql  原始SQL
    * explain  执行计划
    * tbPosInfos  表位置信息
    * feedbackInfos  feedbackInfos
    *
    * @var string[]
    */
    protected static $setters = [
            'messageId' => 'setMessageId',
            'statusCode' => 'setStatusCode',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'indexAdvice' => 'setIndexAdvice',
            'tuningAdvice' => 'setTuningAdvice',
            'formattedSql' => 'setFormattedSql',
            'originalSql' => 'setOriginalSql',
            'explain' => 'setExplain',
            'tbPosInfos' => 'setTbPosInfos',
            'feedbackInfos' => 'setFeedbackInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * messageId  messageId
    * statusCode  状态码
    * errorCode  错误码
    * errorMessage  错误信息
    * indexAdvice  索引建议
    * tuningAdvice  诊断建议
    * formattedSql  格式化SQL
    * originalSql  原始SQL
    * explain  执行计划
    * tbPosInfos  表位置信息
    * feedbackInfos  feedbackInfos
    *
    * @var string[]
    */
    protected static $getters = [
            'messageId' => 'getMessageId',
            'statusCode' => 'getStatusCode',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
            'indexAdvice' => 'getIndexAdvice',
            'tuningAdvice' => 'getTuningAdvice',
            'formattedSql' => 'getFormattedSql',
            'originalSql' => 'getOriginalSql',
            'explain' => 'getExplain',
            'tbPosInfos' => 'getTbPosInfos',
            'feedbackInfos' => 'getFeedbackInfos'
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
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['indexAdvice'] = isset($data['indexAdvice']) ? $data['indexAdvice'] : null;
        $this->container['tuningAdvice'] = isset($data['tuningAdvice']) ? $data['tuningAdvice'] : null;
        $this->container['formattedSql'] = isset($data['formattedSql']) ? $data['formattedSql'] : null;
        $this->container['originalSql'] = isset($data['originalSql']) ? $data['originalSql'] : null;
        $this->container['explain'] = isset($data['explain']) ? $data['explain'] : null;
        $this->container['tbPosInfos'] = isset($data['tbPosInfos']) ? $data['tbPosInfos'] : null;
        $this->container['feedbackInfos'] = isset($data['feedbackInfos']) ? $data['feedbackInfos'] : null;
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
    * Gets messageId
    *  messageId
    *
    * @return string|null
    */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
    * Sets messageId
    *
    * @param string|null $messageId messageId
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态码
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 状态码
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
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
    * Gets errorMessage
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets indexAdvice
    *  索引建议
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\IndexAdviceInfo[]|null
    */
    public function getIndexAdvice()
    {
        return $this->container['indexAdvice'];
    }

    /**
    * Sets indexAdvice
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\IndexAdviceInfo[]|null $indexAdvice 索引建议
    *
    * @return $this
    */
    public function setIndexAdvice($indexAdvice)
    {
        $this->container['indexAdvice'] = $indexAdvice;
        return $this;
    }

    /**
    * Gets tuningAdvice
    *  诊断建议
    *
    * @return string[]|null
    */
    public function getTuningAdvice()
    {
        return $this->container['tuningAdvice'];
    }

    /**
    * Sets tuningAdvice
    *
    * @param string[]|null $tuningAdvice 诊断建议
    *
    * @return $this
    */
    public function setTuningAdvice($tuningAdvice)
    {
        $this->container['tuningAdvice'] = $tuningAdvice;
        return $this;
    }

    /**
    * Gets formattedSql
    *  格式化SQL
    *
    * @return string|null
    */
    public function getFormattedSql()
    {
        return $this->container['formattedSql'];
    }

    /**
    * Sets formattedSql
    *
    * @param string|null $formattedSql 格式化SQL
    *
    * @return $this
    */
    public function setFormattedSql($formattedSql)
    {
        $this->container['formattedSql'] = $formattedSql;
        return $this;
    }

    /**
    * Gets originalSql
    *  原始SQL
    *
    * @return string|null
    */
    public function getOriginalSql()
    {
        return $this->container['originalSql'];
    }

    /**
    * Sets originalSql
    *
    * @param string|null $originalSql 原始SQL
    *
    * @return $this
    */
    public function setOriginalSql($originalSql)
    {
        $this->container['originalSql'] = $originalSql;
        return $this;
    }

    /**
    * Gets explain
    *  执行计划
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\Explain[]|null
    */
    public function getExplain()
    {
        return $this->container['explain'];
    }

    /**
    * Sets explain
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\Explain[]|null $explain 执行计划
    *
    * @return $this
    */
    public function setExplain($explain)
    {
        $this->container['explain'] = $explain;
        return $this;
    }

    /**
    * Gets tbPosInfos
    *  表位置信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TbPosInfo[]|null
    */
    public function getTbPosInfos()
    {
        return $this->container['tbPosInfos'];
    }

    /**
    * Sets tbPosInfos
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TbPosInfo[]|null $tbPosInfos 表位置信息
    *
    * @return $this
    */
    public function setTbPosInfos($tbPosInfos)
    {
        $this->container['tbPosInfos'] = $tbPosInfos;
        return $this;
    }

    /**
    * Gets feedbackInfos
    *  feedbackInfos
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\FeedbackInfo|null
    */
    public function getFeedbackInfos()
    {
        return $this->container['feedbackInfos'];
    }

    /**
    * Sets feedbackInfos
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\FeedbackInfo|null $feedbackInfos feedbackInfos
    *
    * @return $this
    */
    public function setFeedbackInfos($feedbackInfos)
    {
        $this->container['feedbackInfos'] = $feedbackInfos;
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

