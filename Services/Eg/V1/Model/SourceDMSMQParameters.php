<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceDMSMQParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceDMSMQParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  实例名称，仅dms的rockectMq需要该字段
    * instanceId  实例ID，仅dms的rockectMq需要该字段
    * group  消费组
    * topic  topic名称
    * tag  标签
    * sslEnable  开启SSL
    * enableAcl  ACL访问控制
    * accessKey  用户名
    * secretKey  密码
    * messageType  消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    * engineVersion  mq实例版本
    * consumeTimeout  消费超时时间
    * consumerThreadNums  线程消费数
    * consumerBatchMaxSize  批量消费最大消息数
    * maxReconsumeTimes  最大重试次数，-1表示一直重试
    * suspendCurrentQueueTimeMillis  重试间隔，单位ms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'instanceId' => 'string',
            'group' => 'string',
            'topic' => 'string',
            'tag' => 'string',
            'sslEnable' => 'bool',
            'enableAcl' => 'bool',
            'accessKey' => 'string',
            'secretKey' => 'string',
            'messageType' => 'string',
            'engineVersion' => 'string',
            'consumeTimeout' => 'int',
            'consumerThreadNums' => 'int',
            'consumerBatchMaxSize' => 'int',
            'maxReconsumeTimes' => 'int',
            'suspendCurrentQueueTimeMillis' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  实例名称，仅dms的rockectMq需要该字段
    * instanceId  实例ID，仅dms的rockectMq需要该字段
    * group  消费组
    * topic  topic名称
    * tag  标签
    * sslEnable  开启SSL
    * enableAcl  ACL访问控制
    * accessKey  用户名
    * secretKey  密码
    * messageType  消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    * engineVersion  mq实例版本
    * consumeTimeout  消费超时时间
    * consumerThreadNums  线程消费数
    * consumerBatchMaxSize  批量消费最大消息数
    * maxReconsumeTimes  最大重试次数，-1表示一直重试
    * suspendCurrentQueueTimeMillis  重试间隔，单位ms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'instanceId' => null,
        'group' => null,
        'topic' => null,
        'tag' => null,
        'sslEnable' => null,
        'enableAcl' => null,
        'accessKey' => null,
        'secretKey' => null,
        'messageType' => null,
        'engineVersion' => null,
        'consumeTimeout' => 'int32',
        'consumerThreadNums' => 'int32',
        'consumerBatchMaxSize' => 'int32',
        'maxReconsumeTimes' => 'int32',
        'suspendCurrentQueueTimeMillis' => 'int32'
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
    * instanceName  实例名称，仅dms的rockectMq需要该字段
    * instanceId  实例ID，仅dms的rockectMq需要该字段
    * group  消费组
    * topic  topic名称
    * tag  标签
    * sslEnable  开启SSL
    * enableAcl  ACL访问控制
    * accessKey  用户名
    * secretKey  密码
    * messageType  消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    * engineVersion  mq实例版本
    * consumeTimeout  消费超时时间
    * consumerThreadNums  线程消费数
    * consumerBatchMaxSize  批量消费最大消息数
    * maxReconsumeTimes  最大重试次数，-1表示一直重试
    * suspendCurrentQueueTimeMillis  重试间隔，单位ms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'group' => 'group',
            'topic' => 'topic',
            'tag' => 'tag',
            'sslEnable' => 'ssl_enable',
            'enableAcl' => 'enable_acl',
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'messageType' => 'message_type',
            'engineVersion' => 'engine_version',
            'consumeTimeout' => 'consume_timeout',
            'consumerThreadNums' => 'consumer_thread_nums',
            'consumerBatchMaxSize' => 'consumer_batch_max_size',
            'maxReconsumeTimes' => 'max_reconsume_times',
            'suspendCurrentQueueTimeMillis' => 'suspend_current_queue_time_millis'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  实例名称，仅dms的rockectMq需要该字段
    * instanceId  实例ID，仅dms的rockectMq需要该字段
    * group  消费组
    * topic  topic名称
    * tag  标签
    * sslEnable  开启SSL
    * enableAcl  ACL访问控制
    * accessKey  用户名
    * secretKey  密码
    * messageType  消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    * engineVersion  mq实例版本
    * consumeTimeout  消费超时时间
    * consumerThreadNums  线程消费数
    * consumerBatchMaxSize  批量消费最大消息数
    * maxReconsumeTimes  最大重试次数，-1表示一直重试
    * suspendCurrentQueueTimeMillis  重试间隔，单位ms
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'group' => 'setGroup',
            'topic' => 'setTopic',
            'tag' => 'setTag',
            'sslEnable' => 'setSslEnable',
            'enableAcl' => 'setEnableAcl',
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'messageType' => 'setMessageType',
            'engineVersion' => 'setEngineVersion',
            'consumeTimeout' => 'setConsumeTimeout',
            'consumerThreadNums' => 'setConsumerThreadNums',
            'consumerBatchMaxSize' => 'setConsumerBatchMaxSize',
            'maxReconsumeTimes' => 'setMaxReconsumeTimes',
            'suspendCurrentQueueTimeMillis' => 'setSuspendCurrentQueueTimeMillis'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  实例名称，仅dms的rockectMq需要该字段
    * instanceId  实例ID，仅dms的rockectMq需要该字段
    * group  消费组
    * topic  topic名称
    * tag  标签
    * sslEnable  开启SSL
    * enableAcl  ACL访问控制
    * accessKey  用户名
    * secretKey  密码
    * messageType  消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    * engineVersion  mq实例版本
    * consumeTimeout  消费超时时间
    * consumerThreadNums  线程消费数
    * consumerBatchMaxSize  批量消费最大消息数
    * maxReconsumeTimes  最大重试次数，-1表示一直重试
    * suspendCurrentQueueTimeMillis  重试间隔，单位ms
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'group' => 'getGroup',
            'topic' => 'getTopic',
            'tag' => 'getTag',
            'sslEnable' => 'getSslEnable',
            'enableAcl' => 'getEnableAcl',
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'messageType' => 'getMessageType',
            'engineVersion' => 'getEngineVersion',
            'consumeTimeout' => 'getConsumeTimeout',
            'consumerThreadNums' => 'getConsumerThreadNums',
            'consumerBatchMaxSize' => 'getConsumerBatchMaxSize',
            'maxReconsumeTimes' => 'getMaxReconsumeTimes',
            'suspendCurrentQueueTimeMillis' => 'getSuspendCurrentQueueTimeMillis'
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
    const MESSAGE_TYPE_NORMAL = 'NORMAL';
    const MESSAGE_TYPE_ORDER = 'ORDER';
    const ENGINE_VERSION__4_X = '4.x';
    const ENGINE_VERSION__5_X = '5.x';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_NORMAL,
            self::MESSAGE_TYPE_ORDER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineVersionAllowableValues()
    {
        return [
            self::ENGINE_VERSION__4_X,
            self::ENGINE_VERSION__5_X,
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['consumeTimeout'] = isset($data['consumeTimeout']) ? $data['consumeTimeout'] : null;
        $this->container['consumerThreadNums'] = isset($data['consumerThreadNums']) ? $data['consumerThreadNums'] : null;
        $this->container['consumerBatchMaxSize'] = isset($data['consumerBatchMaxSize']) ? $data['consumerBatchMaxSize'] : null;
        $this->container['maxReconsumeTimes'] = isset($data['maxReconsumeTimes']) ? $data['maxReconsumeTimes'] : null;
        $this->container['suspendCurrentQueueTimeMillis'] = isset($data['suspendCurrentQueueTimeMillis']) ? $data['suspendCurrentQueueTimeMillis'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
            if ((mb_strlen($this->container['group']) > 64)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['group']) < 3)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be bigger than or equal to 3.";
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
            $allowedValues = $this->getMessageTypeAllowableValues();
                if (!is_null($this->container['messageType']) && !in_array($this->container['messageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'messageType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEngineVersionAllowableValues();
                if (!is_null($this->container['engineVersion']) && !in_array($this->container['engineVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['consumeTimeout']) && ($this->container['consumeTimeout'] > 900000)) {
                $invalidProperties[] = "invalid value for 'consumeTimeout', must be smaller than or equal to 900000.";
            }
            if (!is_null($this->container['consumeTimeout']) && ($this->container['consumeTimeout'] < 1000)) {
                $invalidProperties[] = "invalid value for 'consumeTimeout', must be bigger than or equal to 1000.";
            }
            if (!is_null($this->container['consumerThreadNums']) && ($this->container['consumerThreadNums'] > 64)) {
                $invalidProperties[] = "invalid value for 'consumerThreadNums', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['consumerThreadNums']) && ($this->container['consumerThreadNums'] < 20)) {
                $invalidProperties[] = "invalid value for 'consumerThreadNums', must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['consumerBatchMaxSize']) && ($this->container['consumerBatchMaxSize'] > 32)) {
                $invalidProperties[] = "invalid value for 'consumerBatchMaxSize', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['consumerBatchMaxSize']) && ($this->container['consumerBatchMaxSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'consumerBatchMaxSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxReconsumeTimes']) && ($this->container['maxReconsumeTimes'] < -1)) {
                $invalidProperties[] = "invalid value for 'maxReconsumeTimes', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['suspendCurrentQueueTimeMillis']) && ($this->container['suspendCurrentQueueTimeMillis'] > 30000)) {
                $invalidProperties[] = "invalid value for 'suspendCurrentQueueTimeMillis', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['suspendCurrentQueueTimeMillis']) && ($this->container['suspendCurrentQueueTimeMillis'] < 20)) {
                $invalidProperties[] = "invalid value for 'suspendCurrentQueueTimeMillis', must be bigger than or equal to 20.";
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
    * Gets instanceName
    *  实例名称，仅dms的rockectMq需要该字段
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称，仅dms的rockectMq需要该字段
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID，仅dms的rockectMq需要该字段
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
    * @param string $instanceId 实例ID，仅dms的rockectMq需要该字段
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets group
    *  消费组
    *
    * @return string
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string $group 消费组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets topic
    *  topic名称
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
    * @param string $topic topic名称
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
    * Gets sslEnable
    *  开启SSL
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable 开启SSL
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets enableAcl
    *  ACL访问控制
    *
    * @return bool|null
    */
    public function getEnableAcl()
    {
        return $this->container['enableAcl'];
    }

    /**
    * Sets enableAcl
    *
    * @param bool|null $enableAcl ACL访问控制
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
        return $this;
    }

    /**
    * Gets accessKey
    *  用户名
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
    * @param string|null $accessKey 用户名
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
    *  密码
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
    * @param string|null $secretKey 密码
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets messageType
    *  消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    *
    * @return string|null
    */
    public function getMessageType()
    {
        return $this->container['messageType'];
    }

    /**
    * Sets messageType
    *
    * @param string|null $messageType 消费方式，针对不同生产顺序消息类型，选择消费方式会导致不同结果，请严格按照需求选择消费方式。1、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：顺序消费，实际消息处理结果：按照消息组粒度，严格保证消息顺序。 同一消息组内的消息的消费顺序和发送顺序完全一致。2、生产顺序为：设置消息组，保证消息顺序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按时间顺序处理。3、生产顺序为：未设置消息组，消息乱序发送。消费方式为：顺序消费，实际消息处理结果：按队列存储粒度，严格顺序。 基于 Apache RocketMQ 本身队列的属性，消费顺序和队列存储的顺序一致，但不保证和发送顺序一致。4、生产顺序为：未设置消息组，消息乱序发送。消费方式为：并发消费，实际消息处理结果：并发消费，尽可能按照时间顺序处理。
    *
    * @return $this
    */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;
        return $this;
    }

    /**
    * Gets engineVersion
    *  mq实例版本
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion mq实例版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets consumeTimeout
    *  消费超时时间
    *
    * @return int|null
    */
    public function getConsumeTimeout()
    {
        return $this->container['consumeTimeout'];
    }

    /**
    * Sets consumeTimeout
    *
    * @param int|null $consumeTimeout 消费超时时间
    *
    * @return $this
    */
    public function setConsumeTimeout($consumeTimeout)
    {
        $this->container['consumeTimeout'] = $consumeTimeout;
        return $this;
    }

    /**
    * Gets consumerThreadNums
    *  线程消费数
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
    * @param int|null $consumerThreadNums 线程消费数
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
    * Gets maxReconsumeTimes
    *  最大重试次数，-1表示一直重试
    *
    * @return int|null
    */
    public function getMaxReconsumeTimes()
    {
        return $this->container['maxReconsumeTimes'];
    }

    /**
    * Sets maxReconsumeTimes
    *
    * @param int|null $maxReconsumeTimes 最大重试次数，-1表示一直重试
    *
    * @return $this
    */
    public function setMaxReconsumeTimes($maxReconsumeTimes)
    {
        $this->container['maxReconsumeTimes'] = $maxReconsumeTimes;
        return $this;
    }

    /**
    * Gets suspendCurrentQueueTimeMillis
    *  重试间隔，单位ms
    *
    * @return int|null
    */
    public function getSuspendCurrentQueueTimeMillis()
    {
        return $this->container['suspendCurrentQueueTimeMillis'];
    }

    /**
    * Sets suspendCurrentQueueTimeMillis
    *
    * @param int|null $suspendCurrentQueueTimeMillis 重试间隔，单位ms
    *
    * @return $this
    */
    public function setSuspendCurrentQueueTimeMillis($suspendCurrentQueueTimeMillis)
    {
        $this->container['suspendCurrentQueueTimeMillis'] = $suspendCurrentQueueTimeMillis;
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

