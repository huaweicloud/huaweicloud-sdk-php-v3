<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMessageTraceRespTrace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMessageTraceResp_trace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  是否成功。
    * traceType  轨迹类型
    * timestamp  时间。
    * groupName  生产组或消费组。
    * costTime  耗时。
    * requestId  请求ID。
    * consumeStatus  消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    * topic  主题名称。
    * msgId  消息ID。
    * offsetMsgId  offset消息ID。
    * tags  消息的标签。
    * keys  消息的keys。
    * storeHost  存储消息的主机IP。
    * clientHost  产生消息的主机IP。
    * retryTimes  重试次数。
    * bodyLength  消息体长度。
    * msgType  消息类型。
    * transactionState  事务状态。
    * transactionId  事务ID。
    * fromTransactionCheck  是否为事务回查的响应。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'bool',
            'traceType' => 'string',
            'timestamp' => 'float',
            'groupName' => 'string',
            'costTime' => 'float',
            'requestId' => 'string',
            'consumeStatus' => 'float',
            'topic' => 'string',
            'msgId' => 'string',
            'offsetMsgId' => 'string',
            'tags' => 'string',
            'keys' => 'string',
            'storeHost' => 'string',
            'clientHost' => 'string',
            'retryTimes' => 'int',
            'bodyLength' => 'float',
            'msgType' => 'string',
            'transactionState' => 'string',
            'transactionId' => 'string',
            'fromTransactionCheck' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  是否成功。
    * traceType  轨迹类型
    * timestamp  时间。
    * groupName  生产组或消费组。
    * costTime  耗时。
    * requestId  请求ID。
    * consumeStatus  消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    * topic  主题名称。
    * msgId  消息ID。
    * offsetMsgId  offset消息ID。
    * tags  消息的标签。
    * keys  消息的keys。
    * storeHost  存储消息的主机IP。
    * clientHost  产生消息的主机IP。
    * retryTimes  重试次数。
    * bodyLength  消息体长度。
    * msgType  消息类型。
    * transactionState  事务状态。
    * transactionId  事务ID。
    * fromTransactionCheck  是否为事务回查的响应。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'traceType' => null,
        'timestamp' => null,
        'groupName' => null,
        'costTime' => null,
        'requestId' => null,
        'consumeStatus' => null,
        'topic' => null,
        'msgId' => null,
        'offsetMsgId' => null,
        'tags' => null,
        'keys' => null,
        'storeHost' => null,
        'clientHost' => null,
        'retryTimes' => null,
        'bodyLength' => null,
        'msgType' => null,
        'transactionState' => null,
        'transactionId' => null,
        'fromTransactionCheck' => null
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
    * success  是否成功。
    * traceType  轨迹类型
    * timestamp  时间。
    * groupName  生产组或消费组。
    * costTime  耗时。
    * requestId  请求ID。
    * consumeStatus  消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    * topic  主题名称。
    * msgId  消息ID。
    * offsetMsgId  offset消息ID。
    * tags  消息的标签。
    * keys  消息的keys。
    * storeHost  存储消息的主机IP。
    * clientHost  产生消息的主机IP。
    * retryTimes  重试次数。
    * bodyLength  消息体长度。
    * msgType  消息类型。
    * transactionState  事务状态。
    * transactionId  事务ID。
    * fromTransactionCheck  是否为事务回查的响应。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'traceType' => 'trace_type',
            'timestamp' => 'timestamp',
            'groupName' => 'group_name',
            'costTime' => 'cost_time',
            'requestId' => 'request_id',
            'consumeStatus' => 'consume_status',
            'topic' => 'topic',
            'msgId' => 'msg_id',
            'offsetMsgId' => 'offset_msg_id',
            'tags' => 'tags',
            'keys' => 'keys',
            'storeHost' => 'store_host',
            'clientHost' => 'client_host',
            'retryTimes' => 'retry_times',
            'bodyLength' => 'body_length',
            'msgType' => 'msg_type',
            'transactionState' => 'transaction_state',
            'transactionId' => 'transaction_id',
            'fromTransactionCheck' => 'from_transaction_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  是否成功。
    * traceType  轨迹类型
    * timestamp  时间。
    * groupName  生产组或消费组。
    * costTime  耗时。
    * requestId  请求ID。
    * consumeStatus  消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    * topic  主题名称。
    * msgId  消息ID。
    * offsetMsgId  offset消息ID。
    * tags  消息的标签。
    * keys  消息的keys。
    * storeHost  存储消息的主机IP。
    * clientHost  产生消息的主机IP。
    * retryTimes  重试次数。
    * bodyLength  消息体长度。
    * msgType  消息类型。
    * transactionState  事务状态。
    * transactionId  事务ID。
    * fromTransactionCheck  是否为事务回查的响应。
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'traceType' => 'setTraceType',
            'timestamp' => 'setTimestamp',
            'groupName' => 'setGroupName',
            'costTime' => 'setCostTime',
            'requestId' => 'setRequestId',
            'consumeStatus' => 'setConsumeStatus',
            'topic' => 'setTopic',
            'msgId' => 'setMsgId',
            'offsetMsgId' => 'setOffsetMsgId',
            'tags' => 'setTags',
            'keys' => 'setKeys',
            'storeHost' => 'setStoreHost',
            'clientHost' => 'setClientHost',
            'retryTimes' => 'setRetryTimes',
            'bodyLength' => 'setBodyLength',
            'msgType' => 'setMsgType',
            'transactionState' => 'setTransactionState',
            'transactionId' => 'setTransactionId',
            'fromTransactionCheck' => 'setFromTransactionCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  是否成功。
    * traceType  轨迹类型
    * timestamp  时间。
    * groupName  生产组或消费组。
    * costTime  耗时。
    * requestId  请求ID。
    * consumeStatus  消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    * topic  主题名称。
    * msgId  消息ID。
    * offsetMsgId  offset消息ID。
    * tags  消息的标签。
    * keys  消息的keys。
    * storeHost  存储消息的主机IP。
    * clientHost  产生消息的主机IP。
    * retryTimes  重试次数。
    * bodyLength  消息体长度。
    * msgType  消息类型。
    * transactionState  事务状态。
    * transactionId  事务ID。
    * fromTransactionCheck  是否为事务回查的响应。
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'traceType' => 'getTraceType',
            'timestamp' => 'getTimestamp',
            'groupName' => 'getGroupName',
            'costTime' => 'getCostTime',
            'requestId' => 'getRequestId',
            'consumeStatus' => 'getConsumeStatus',
            'topic' => 'getTopic',
            'msgId' => 'getMsgId',
            'offsetMsgId' => 'getOffsetMsgId',
            'tags' => 'getTags',
            'keys' => 'getKeys',
            'storeHost' => 'getStoreHost',
            'clientHost' => 'getClientHost',
            'retryTimes' => 'getRetryTimes',
            'bodyLength' => 'getBodyLength',
            'msgType' => 'getMsgType',
            'transactionState' => 'getTransactionState',
            'transactionId' => 'getTransactionId',
            'fromTransactionCheck' => 'getFromTransactionCheck'
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
    const TRACE_TYPE_PUB = 'Pub';
    const TRACE_TYPE_SUB_BEFORE = 'SubBefore';
    const TRACE_TYPE_SUB_AFTER = 'SubAfter';
    const TRACE_TYPE_END_TRANSACTION = 'EndTransaction';
    const MSG_TYPE_NORMAL_MSG = 'Normal_Msg';
    const MSG_TYPE_TRANS_MSG_HALF = 'Trans_Msg_Half';
    const MSG_TYPE_TRANS_MSG_COMMIT = 'Trans_msg_Commit';
    const MSG_TYPE_DELAY_MSG = 'Delay_Msg';
    const TRANSACTION_STATE_COMMIT_MESSAGE = 'COMMIT_MESSAGE';
    const TRANSACTION_STATE_ROLLBACK_MESSAGE = 'ROLLBACK_MESSAGE';
    const TRANSACTION_STATE_UNKNOW = 'UNKNOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTraceTypeAllowableValues()
    {
        return [
            self::TRACE_TYPE_PUB,
            self::TRACE_TYPE_SUB_BEFORE,
            self::TRACE_TYPE_SUB_AFTER,
            self::TRACE_TYPE_END_TRANSACTION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMsgTypeAllowableValues()
    {
        return [
            self::MSG_TYPE_NORMAL_MSG,
            self::MSG_TYPE_TRANS_MSG_HALF,
            self::MSG_TYPE_TRANS_MSG_COMMIT,
            self::MSG_TYPE_DELAY_MSG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransactionStateAllowableValues()
    {
        return [
            self::TRANSACTION_STATE_COMMIT_MESSAGE,
            self::TRANSACTION_STATE_ROLLBACK_MESSAGE,
            self::TRANSACTION_STATE_UNKNOW,
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['traceType'] = isset($data['traceType']) ? $data['traceType'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['costTime'] = isset($data['costTime']) ? $data['costTime'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['consumeStatus'] = isset($data['consumeStatus']) ? $data['consumeStatus'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['msgId'] = isset($data['msgId']) ? $data['msgId'] : null;
        $this->container['offsetMsgId'] = isset($data['offsetMsgId']) ? $data['offsetMsgId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['storeHost'] = isset($data['storeHost']) ? $data['storeHost'] : null;
        $this->container['clientHost'] = isset($data['clientHost']) ? $data['clientHost'] : null;
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
        $this->container['bodyLength'] = isset($data['bodyLength']) ? $data['bodyLength'] : null;
        $this->container['msgType'] = isset($data['msgType']) ? $data['msgType'] : null;
        $this->container['transactionState'] = isset($data['transactionState']) ? $data['transactionState'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['fromTransactionCheck'] = isset($data['fromTransactionCheck']) ? $data['fromTransactionCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTraceTypeAllowableValues();
                if (!is_null($this->container['traceType']) && !in_array($this->container['traceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'traceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMsgTypeAllowableValues();
                if (!is_null($this->container['msgType']) && !in_array($this->container['msgType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'msgType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTransactionStateAllowableValues();
                if (!is_null($this->container['transactionState']) && !in_array($this->container['transactionState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transactionState', must be one of '%s'",
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
    * Gets success
    *  是否成功。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否成功。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets traceType
    *  轨迹类型
    *
    * @return string|null
    */
    public function getTraceType()
    {
        return $this->container['traceType'];
    }

    /**
    * Sets traceType
    *
    * @param string|null $traceType 轨迹类型
    *
    * @return $this
    */
    public function setTraceType($traceType)
    {
        $this->container['traceType'] = $traceType;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间。
    *
    * @return float|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param float|null $timestamp 时间。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets groupName
    *  生产组或消费组。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 生产组或消费组。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets costTime
    *  耗时。
    *
    * @return float|null
    */
    public function getCostTime()
    {
        return $this->container['costTime'];
    }

    /**
    * Sets costTime
    *
    * @param float|null $costTime 耗时。
    *
    * @return $this
    */
    public function setCostTime($costTime)
    {
        $this->container['costTime'] = $costTime;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets consumeStatus
    *  消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    *
    * @return float|null
    */
    public function getConsumeStatus()
    {
        return $this->container['consumeStatus'];
    }

    /**
    * Sets consumeStatus
    *
    * @param float|null $consumeStatus 消费状态：  - 0-消费成功  - 1-消费超时  - 2-消费发生异常   - 3-消费返回NULL  - 5-消费失败
    *
    * @return $this
    */
    public function setConsumeStatus($consumeStatus)
    {
        $this->container['consumeStatus'] = $consumeStatus;
        return $this;
    }

    /**
    * Gets topic
    *  主题名称。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 主题名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets msgId
    *  消息ID。
    *
    * @return string|null
    */
    public function getMsgId()
    {
        return $this->container['msgId'];
    }

    /**
    * Sets msgId
    *
    * @param string|null $msgId 消息ID。
    *
    * @return $this
    */
    public function setMsgId($msgId)
    {
        $this->container['msgId'] = $msgId;
        return $this;
    }

    /**
    * Gets offsetMsgId
    *  offset消息ID。
    *
    * @return string|null
    */
    public function getOffsetMsgId()
    {
        return $this->container['offsetMsgId'];
    }

    /**
    * Sets offsetMsgId
    *
    * @param string|null $offsetMsgId offset消息ID。
    *
    * @return $this
    */
    public function setOffsetMsgId($offsetMsgId)
    {
        $this->container['offsetMsgId'] = $offsetMsgId;
        return $this;
    }

    /**
    * Gets tags
    *  消息的标签。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 消息的标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets keys
    *  消息的keys。
    *
    * @return string|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param string|null $keys 消息的keys。
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }

    /**
    * Gets storeHost
    *  存储消息的主机IP。
    *
    * @return string|null
    */
    public function getStoreHost()
    {
        return $this->container['storeHost'];
    }

    /**
    * Sets storeHost
    *
    * @param string|null $storeHost 存储消息的主机IP。
    *
    * @return $this
    */
    public function setStoreHost($storeHost)
    {
        $this->container['storeHost'] = $storeHost;
        return $this;
    }

    /**
    * Gets clientHost
    *  产生消息的主机IP。
    *
    * @return string|null
    */
    public function getClientHost()
    {
        return $this->container['clientHost'];
    }

    /**
    * Sets clientHost
    *
    * @param string|null $clientHost 产生消息的主机IP。
    *
    * @return $this
    */
    public function setClientHost($clientHost)
    {
        $this->container['clientHost'] = $clientHost;
        return $this;
    }

    /**
    * Gets retryTimes
    *  重试次数。
    *
    * @return int|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param int|null $retryTimes 重试次数。
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
        return $this;
    }

    /**
    * Gets bodyLength
    *  消息体长度。
    *
    * @return float|null
    */
    public function getBodyLength()
    {
        return $this->container['bodyLength'];
    }

    /**
    * Sets bodyLength
    *
    * @param float|null $bodyLength 消息体长度。
    *
    * @return $this
    */
    public function setBodyLength($bodyLength)
    {
        $this->container['bodyLength'] = $bodyLength;
        return $this;
    }

    /**
    * Gets msgType
    *  消息类型。
    *
    * @return string|null
    */
    public function getMsgType()
    {
        return $this->container['msgType'];
    }

    /**
    * Sets msgType
    *
    * @param string|null $msgType 消息类型。
    *
    * @return $this
    */
    public function setMsgType($msgType)
    {
        $this->container['msgType'] = $msgType;
        return $this;
    }

    /**
    * Gets transactionState
    *  事务状态。
    *
    * @return string|null
    */
    public function getTransactionState()
    {
        return $this->container['transactionState'];
    }

    /**
    * Sets transactionState
    *
    * @param string|null $transactionState 事务状态。
    *
    * @return $this
    */
    public function setTransactionState($transactionState)
    {
        $this->container['transactionState'] = $transactionState;
        return $this;
    }

    /**
    * Gets transactionId
    *  事务ID。
    *
    * @return string|null
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string|null $transactionId 事务ID。
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets fromTransactionCheck
    *  是否为事务回查的响应。
    *
    * @return bool|null
    */
    public function getFromTransactionCheck()
    {
        return $this->container['fromTransactionCheck'];
    }

    /**
    * Sets fromTransactionCheck
    *
    * @param bool|null $fromTransactionCheck 是否为事务回查的响应。
    *
    * @return $this
    */
    public function setFromTransactionCheck($fromTransactionCheck)
    {
        $this->container['fromTransactionCheck'] = $fromTransactionCheck;
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

