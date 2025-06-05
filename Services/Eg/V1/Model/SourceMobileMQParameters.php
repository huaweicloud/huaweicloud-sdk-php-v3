<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceMobileMQParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceMobileMQParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  消费组id
    * instanceId  实例id
    * topic  topic
    * tag  标签
    * authenticationRequired  鉴权认证
    * msgTraceSwitch  保存消息轨迹
    * accessKey  AccessKey
    * secretKey  SecretKey
    * messageModel  订阅方式
    * addrType  接入点类型
    * addr  地址
    * sdkUrl  依赖SDK
    * consumeTimeout  消费超时时间
    * messageType  消息类型
    * suspendTime  失败重试的等待时间
    * maxReconsumerTimes  最大重试次数
    * consumerThreadNums  消费线程数
    * consumerBatchMaxSize  批量消费最大消息数
    * consumerMaxWait  批量消费最大等待时长，单位：秒
    * vpcId  虚拟私有云
    * subnetId  子网
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'instanceId' => 'string',
            'topic' => 'string',
            'tag' => 'string',
            'authenticationRequired' => 'bool',
            'msgTraceSwitch' => 'bool',
            'accessKey' => 'string',
            'secretKey' => 'string',
            'messageModel' => 'string',
            'addrType' => 'string',
            'addr' => 'string',
            'sdkUrl' => 'string',
            'consumeTimeout' => 'int',
            'messageType' => 'string',
            'suspendTime' => 'int',
            'maxReconsumerTimes' => 'int',
            'consumerThreadNums' => 'int',
            'consumerBatchMaxSize' => 'int',
            'consumerMaxWait' => 'int',
            'vpcId' => 'string',
            'subnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  消费组id
    * instanceId  实例id
    * topic  topic
    * tag  标签
    * authenticationRequired  鉴权认证
    * msgTraceSwitch  保存消息轨迹
    * accessKey  AccessKey
    * secretKey  SecretKey
    * messageModel  订阅方式
    * addrType  接入点类型
    * addr  地址
    * sdkUrl  依赖SDK
    * consumeTimeout  消费超时时间
    * messageType  消息类型
    * suspendTime  失败重试的等待时间
    * maxReconsumerTimes  最大重试次数
    * consumerThreadNums  消费线程数
    * consumerBatchMaxSize  批量消费最大消息数
    * consumerMaxWait  批量消费最大等待时长，单位：秒
    * vpcId  虚拟私有云
    * subnetId  子网
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'instanceId' => null,
        'topic' => null,
        'tag' => null,
        'authenticationRequired' => null,
        'msgTraceSwitch' => null,
        'accessKey' => null,
        'secretKey' => null,
        'messageModel' => null,
        'addrType' => null,
        'addr' => null,
        'sdkUrl' => null,
        'consumeTimeout' => 'int32',
        'messageType' => null,
        'suspendTime' => 'int32',
        'maxReconsumerTimes' => 'int32',
        'consumerThreadNums' => 'int32',
        'consumerBatchMaxSize' => 'int32',
        'consumerMaxWait' => 'int32',
        'vpcId' => null,
        'subnetId' => null
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
    * groupId  消费组id
    * instanceId  实例id
    * topic  topic
    * tag  标签
    * authenticationRequired  鉴权认证
    * msgTraceSwitch  保存消息轨迹
    * accessKey  AccessKey
    * secretKey  SecretKey
    * messageModel  订阅方式
    * addrType  接入点类型
    * addr  地址
    * sdkUrl  依赖SDK
    * consumeTimeout  消费超时时间
    * messageType  消息类型
    * suspendTime  失败重试的等待时间
    * maxReconsumerTimes  最大重试次数
    * consumerThreadNums  消费线程数
    * consumerBatchMaxSize  批量消费最大消息数
    * consumerMaxWait  批量消费最大等待时长，单位：秒
    * vpcId  虚拟私有云
    * subnetId  子网
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'instanceId' => 'instance_id',
            'topic' => 'topic',
            'tag' => 'tag',
            'authenticationRequired' => 'authentication_required',
            'msgTraceSwitch' => 'msg_trace_switch',
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'messageModel' => 'message_model',
            'addrType' => 'addr_type',
            'addr' => 'addr',
            'sdkUrl' => 'sdk_url',
            'consumeTimeout' => 'consume_timeout',
            'messageType' => 'message_type',
            'suspendTime' => 'suspend_time',
            'maxReconsumerTimes' => 'max_reconsumer_times',
            'consumerThreadNums' => 'consumer_thread_nums',
            'consumerBatchMaxSize' => 'consumer_batch_max_size',
            'consumerMaxWait' => 'consumer_max_wait',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  消费组id
    * instanceId  实例id
    * topic  topic
    * tag  标签
    * authenticationRequired  鉴权认证
    * msgTraceSwitch  保存消息轨迹
    * accessKey  AccessKey
    * secretKey  SecretKey
    * messageModel  订阅方式
    * addrType  接入点类型
    * addr  地址
    * sdkUrl  依赖SDK
    * consumeTimeout  消费超时时间
    * messageType  消息类型
    * suspendTime  失败重试的等待时间
    * maxReconsumerTimes  最大重试次数
    * consumerThreadNums  消费线程数
    * consumerBatchMaxSize  批量消费最大消息数
    * consumerMaxWait  批量消费最大等待时长，单位：秒
    * vpcId  虚拟私有云
    * subnetId  子网
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'instanceId' => 'setInstanceId',
            'topic' => 'setTopic',
            'tag' => 'setTag',
            'authenticationRequired' => 'setAuthenticationRequired',
            'msgTraceSwitch' => 'setMsgTraceSwitch',
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'messageModel' => 'setMessageModel',
            'addrType' => 'setAddrType',
            'addr' => 'setAddr',
            'sdkUrl' => 'setSdkUrl',
            'consumeTimeout' => 'setConsumeTimeout',
            'messageType' => 'setMessageType',
            'suspendTime' => 'setSuspendTime',
            'maxReconsumerTimes' => 'setMaxReconsumerTimes',
            'consumerThreadNums' => 'setConsumerThreadNums',
            'consumerBatchMaxSize' => 'setConsumerBatchMaxSize',
            'consumerMaxWait' => 'setConsumerMaxWait',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  消费组id
    * instanceId  实例id
    * topic  topic
    * tag  标签
    * authenticationRequired  鉴权认证
    * msgTraceSwitch  保存消息轨迹
    * accessKey  AccessKey
    * secretKey  SecretKey
    * messageModel  订阅方式
    * addrType  接入点类型
    * addr  地址
    * sdkUrl  依赖SDK
    * consumeTimeout  消费超时时间
    * messageType  消息类型
    * suspendTime  失败重试的等待时间
    * maxReconsumerTimes  最大重试次数
    * consumerThreadNums  消费线程数
    * consumerBatchMaxSize  批量消费最大消息数
    * consumerMaxWait  批量消费最大等待时长，单位：秒
    * vpcId  虚拟私有云
    * subnetId  子网
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'instanceId' => 'getInstanceId',
            'topic' => 'getTopic',
            'tag' => 'getTag',
            'authenticationRequired' => 'getAuthenticationRequired',
            'msgTraceSwitch' => 'getMsgTraceSwitch',
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'messageModel' => 'getMessageModel',
            'addrType' => 'getAddrType',
            'addr' => 'getAddr',
            'sdkUrl' => 'getSdkUrl',
            'consumeTimeout' => 'getConsumeTimeout',
            'messageType' => 'getMessageType',
            'suspendTime' => 'getSuspendTime',
            'maxReconsumerTimes' => 'getMaxReconsumerTimes',
            'consumerThreadNums' => 'getConsumerThreadNums',
            'consumerBatchMaxSize' => 'getConsumerBatchMaxSize',
            'consumerMaxWait' => 'getConsumerMaxWait',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId'
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
    const MESSAGE_MODEL_CLUSTERING = 'CLUSTERING';
    const MESSAGE_MODEL_BROADCASTING = 'BROADCASTING';
    const ADDR_TYPE__PUBLIC = 'PUBLIC';
    const ADDR_TYPE__PRIVATE = 'PRIVATE';
    const MESSAGE_TYPE_NORMAL = 'NORMAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMessageModelAllowableValues()
    {
        return [
            self::MESSAGE_MODEL_CLUSTERING,
            self::MESSAGE_MODEL_BROADCASTING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddrTypeAllowableValues()
    {
        return [
            self::ADDR_TYPE__PUBLIC,
            self::ADDR_TYPE__PRIVATE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_NORMAL,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['authenticationRequired'] = isset($data['authenticationRequired']) ? $data['authenticationRequired'] : null;
        $this->container['msgTraceSwitch'] = isset($data['msgTraceSwitch']) ? $data['msgTraceSwitch'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['messageModel'] = isset($data['messageModel']) ? $data['messageModel'] : null;
        $this->container['addrType'] = isset($data['addrType']) ? $data['addrType'] : null;
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['sdkUrl'] = isset($data['sdkUrl']) ? $data['sdkUrl'] : null;
        $this->container['consumeTimeout'] = isset($data['consumeTimeout']) ? $data['consumeTimeout'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
        $this->container['suspendTime'] = isset($data['suspendTime']) ? $data['suspendTime'] : null;
        $this->container['maxReconsumerTimes'] = isset($data['maxReconsumerTimes']) ? $data['maxReconsumerTimes'] : null;
        $this->container['consumerThreadNums'] = isset($data['consumerThreadNums']) ? $data['consumerThreadNums'] : null;
        $this->container['consumerBatchMaxSize'] = isset($data['consumerBatchMaxSize']) ? $data['consumerBatchMaxSize'] : null;
        $this->container['consumerMaxWait'] = isset($data['consumerMaxWait']) ? $data['consumerMaxWait'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['groupId']) < 3)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['instanceId']) < 3)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 128)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['topic']) < 3)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 128)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['accessKey']) && (mb_strlen($this->container['accessKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'accessKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secretKey']) && (mb_strlen($this->container['secretKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'secretKey', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['messageModel'] === null) {
            $invalidProperties[] = "'messageModel' can't be null";
        }
            $allowedValues = $this->getMessageModelAllowableValues();
                if (!is_null($this->container['messageModel']) && !in_array($this->container['messageModel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'messageModel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['addrType'] === null) {
            $invalidProperties[] = "'addrType' can't be null";
        }
            $allowedValues = $this->getAddrTypeAllowableValues();
                if (!is_null($this->container['addrType']) && !in_array($this->container['addrType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addrType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
            if ((mb_strlen($this->container['addr']) > 256)) {
                $invalidProperties[] = "invalid value for 'addr', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['sdkUrl'] === null) {
            $invalidProperties[] = "'sdkUrl' can't be null";
        }
            if ((mb_strlen($this->container['sdkUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'sdkUrl', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['consumeTimeout'] === null) {
            $invalidProperties[] = "'consumeTimeout' can't be null";
        }
            if (($this->container['consumeTimeout'] > 900000)) {
                $invalidProperties[] = "invalid value for 'consumeTimeout', must be smaller than or equal to 900000.";
            }
            if (($this->container['consumeTimeout'] < 1000)) {
                $invalidProperties[] = "invalid value for 'consumeTimeout', must be bigger than or equal to 1000.";
            }
        if ($this->container['messageType'] === null) {
            $invalidProperties[] = "'messageType' can't be null";
        }
            $allowedValues = $this->getMessageTypeAllowableValues();
                if (!is_null($this->container['messageType']) && !in_array($this->container['messageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'messageType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['suspendTime']) && ($this->container['suspendTime'] > 1800)) {
                $invalidProperties[] = "invalid value for 'suspendTime', must be smaller than or equal to 1800.";
            }
            if (!is_null($this->container['suspendTime']) && ($this->container['suspendTime'] < 10)) {
                $invalidProperties[] = "invalid value for 'suspendTime', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['maxReconsumerTimes']) && ($this->container['maxReconsumerTimes'] > 16)) {
                $invalidProperties[] = "invalid value for 'maxReconsumerTimes', must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['maxReconsumerTimes']) && ($this->container['maxReconsumerTimes'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxReconsumerTimes', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['consumerThreadNums']) && ($this->container['consumerThreadNums'] > 64)) {
                $invalidProperties[] = "invalid value for 'consumerThreadNums', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['consumerThreadNums']) && ($this->container['consumerThreadNums'] < 20)) {
                $invalidProperties[] = "invalid value for 'consumerThreadNums', must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['consumerBatchMaxSize']) && ($this->container['consumerBatchMaxSize'] > 1024)) {
                $invalidProperties[] = "invalid value for 'consumerBatchMaxSize', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['consumerBatchMaxSize']) && ($this->container['consumerBatchMaxSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'consumerBatchMaxSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['consumerMaxWait']) && ($this->container['consumerMaxWait'] > 450)) {
                $invalidProperties[] = "invalid value for 'consumerMaxWait', must be smaller than or equal to 450.";
            }
            if (!is_null($this->container['consumerMaxWait']) && ($this->container['consumerMaxWait'] < 0)) {
                $invalidProperties[] = "invalid value for 'consumerMaxWait', must be bigger than or equal to 0.";
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
    * Gets groupId
    *  消费组id
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 消费组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets topic
    *  topic
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic topic
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets tag
    *  标签
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets authenticationRequired
    *  鉴权认证
    *
    * @return bool|null
    */
    public function getAuthenticationRequired()
    {
        return $this->container['authenticationRequired'];
    }

    /**
    * Sets authenticationRequired
    *
    * @param bool|null $authenticationRequired 鉴权认证
    *
    * @return $this
    */
    public function setAuthenticationRequired($authenticationRequired)
    {
        $this->container['authenticationRequired'] = $authenticationRequired;
        return $this;
    }

    /**
    * Gets msgTraceSwitch
    *  保存消息轨迹
    *
    * @return bool|null
    */
    public function getMsgTraceSwitch()
    {
        return $this->container['msgTraceSwitch'];
    }

    /**
    * Sets msgTraceSwitch
    *
    * @param bool|null $msgTraceSwitch 保存消息轨迹
    *
    * @return $this
    */
    public function setMsgTraceSwitch($msgTraceSwitch)
    {
        $this->container['msgTraceSwitch'] = $msgTraceSwitch;
        return $this;
    }

    /**
    * Gets accessKey
    *  AccessKey
    *
    * @return string|null
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string|null $accessKey AccessKey
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets secretKey
    *  SecretKey
    *
    * @return string|null
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string|null $secretKey SecretKey
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets messageModel
    *  订阅方式
    *
    * @return string
    */
    public function getMessageModel()
    {
        return $this->container['messageModel'];
    }

    /**
    * Sets messageModel
    *
    * @param string $messageModel 订阅方式
    *
    * @return $this
    */
    public function setMessageModel($messageModel)
    {
        $this->container['messageModel'] = $messageModel;
        return $this;
    }

    /**
    * Gets addrType
    *  接入点类型
    *
    * @return string
    */
    public function getAddrType()
    {
        return $this->container['addrType'];
    }

    /**
    * Sets addrType
    *
    * @param string $addrType 接入点类型
    *
    * @return $this
    */
    public function setAddrType($addrType)
    {
        $this->container['addrType'] = $addrType;
        return $this;
    }

    /**
    * Gets addr
    *  地址
    *
    * @return string
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string $addr 地址
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets sdkUrl
    *  依赖SDK
    *
    * @return string
    */
    public function getSdkUrl()
    {
        return $this->container['sdkUrl'];
    }

    /**
    * Sets sdkUrl
    *
    * @param string $sdkUrl 依赖SDK
    *
    * @return $this
    */
    public function setSdkUrl($sdkUrl)
    {
        $this->container['sdkUrl'] = $sdkUrl;
        return $this;
    }

    /**
    * Gets consumeTimeout
    *  消费超时时间
    *
    * @return int
    */
    public function getConsumeTimeout()
    {
        return $this->container['consumeTimeout'];
    }

    /**
    * Sets consumeTimeout
    *
    * @param int $consumeTimeout 消费超时时间
    *
    * @return $this
    */
    public function setConsumeTimeout($consumeTimeout)
    {
        $this->container['consumeTimeout'] = $consumeTimeout;
        return $this;
    }

    /**
    * Gets messageType
    *  消息类型
    *
    * @return string
    */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
    * Sets messageType
    *
    * @param string $messageType 消息类型
    *
    * @return $this
    */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;
        return $this;
    }

    /**
    * Gets suspendTime
    *  失败重试的等待时间
    *
    * @return int|null
    */
    public function getSuspendTime()
    {
        return $this->container['suspendTime'];
    }

    /**
    * Sets suspendTime
    *
    * @param int|null $suspendTime 失败重试的等待时间
    *
    * @return $this
    */
    public function setSuspendTime($suspendTime)
    {
        $this->container['suspendTime'] = $suspendTime;
        return $this;
    }

    /**
    * Gets maxReconsumerTimes
    *  最大重试次数
    *
    * @return int|null
    */
    public function getMaxReconsumerTimes()
    {
        return $this->container['maxReconsumerTimes'];
    }

    /**
    * Sets maxReconsumerTimes
    *
    * @param int|null $maxReconsumerTimes 最大重试次数
    *
    * @return $this
    */
    public function setMaxReconsumerTimes($maxReconsumerTimes)
    {
        $this->container['maxReconsumerTimes'] = $maxReconsumerTimes;
        return $this;
    }

    /**
    * Gets consumerThreadNums
    *  消费线程数
    *
    * @return int|null
    */
    public function getConsumerThreadNums()
    {
        return $this->container['consumerThreadNums'];
    }

    /**
    * Sets consumerThreadNums
    *
    * @param int|null $consumerThreadNums 消费线程数
    *
    * @return $this
    */
    public function setConsumerThreadNums($consumerThreadNums)
    {
        $this->container['consumerThreadNums'] = $consumerThreadNums;
        return $this;
    }

    /**
    * Gets consumerBatchMaxSize
    *  批量消费最大消息数
    *
    * @return int|null
    */
    public function getConsumerBatchMaxSize()
    {
        return $this->container['consumerBatchMaxSize'];
    }

    /**
    * Sets consumerBatchMaxSize
    *
    * @param int|null $consumerBatchMaxSize 批量消费最大消息数
    *
    * @return $this
    */
    public function setConsumerBatchMaxSize($consumerBatchMaxSize)
    {
        $this->container['consumerBatchMaxSize'] = $consumerBatchMaxSize;
        return $this;
    }

    /**
    * Gets consumerMaxWait
    *  批量消费最大等待时长，单位：秒
    *
    * @return int|null
    */
    public function getConsumerMaxWait()
    {
        return $this->container['consumerMaxWait'];
    }

    /**
    * Sets consumerMaxWait
    *
    * @param int|null $consumerMaxWait 批量消费最大等待时长，单位：秒
    *
    * @return $this
    */
    public function setConsumerMaxWait($consumerMaxWait)
    {
        $this->container['consumerMaxWait'] = $consumerMaxWait;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
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

