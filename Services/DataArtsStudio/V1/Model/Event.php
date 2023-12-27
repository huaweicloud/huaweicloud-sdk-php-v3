<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Event';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    * channel  DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    * failPolicy  执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    * concurrent  调度并发数
    * readPolicy  读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'channel' => 'string',
            'failPolicy' => 'string',
            'concurrent' => 'int',
            'readPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    * channel  DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    * failPolicy  执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    * concurrent  调度并发数
    * readPolicy  读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'channel' => null,
        'failPolicy' => null,
        'concurrent' => 'int32',
        'readPolicy' => null
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
    * eventType  事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    * channel  DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    * failPolicy  执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    * concurrent  调度并发数
    * readPolicy  读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'channel' => 'channel',
            'failPolicy' => 'fail_policy',
            'concurrent' => 'concurrent',
            'readPolicy' => 'read_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    * channel  DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    * failPolicy  执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    * concurrent  调度并发数
    * readPolicy  读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'channel' => 'setChannel',
            'failPolicy' => 'setFailPolicy',
            'concurrent' => 'setConcurrent',
            'readPolicy' => 'setReadPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    * channel  DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    * failPolicy  执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    * concurrent  调度并发数
    * readPolicy  读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'channel' => 'getChannel',
            'failPolicy' => 'getFailPolicy',
            'concurrent' => 'getConcurrent',
            'readPolicy' => 'getReadPolicy'
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
    const EVENT_TYPE_KAFKA = 'KAFKA';
    const EVENT_TYPE_DIS = 'DIS';
    const EVENT_TYPE_OBS = 'OBS';
    const FAIL_POLICY_SUSPEND = 'SUSPEND';
    const FAIL_POLICY_IGNORE = 'IGNORE';
    const READ_POLICY_LAST = 'LAST';
    const READ_POLICY__NEW = 'NEW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_KAFKA,
            self::EVENT_TYPE_DIS,
            self::EVENT_TYPE_OBS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailPolicyAllowableValues()
    {
        return [
            self::FAIL_POLICY_SUSPEND,
            self::FAIL_POLICY_IGNORE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReadPolicyAllowableValues()
    {
        return [
            self::READ_POLICY_LAST,
            self::READ_POLICY__NEW,
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['failPolicy'] = isset($data['failPolicy']) ? $data['failPolicy'] : null;
        $this->container['concurrent'] = isset($data['concurrent']) ? $data['concurrent'] : null;
        $this->container['readPolicy'] = isset($data['readPolicy']) ? $data['readPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
            $allowedValues = $this->getFailPolicyAllowableValues();
                if (!is_null($this->container['failPolicy']) && !in_array($this->container['failPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['concurrent']) && ($this->container['concurrent'] > 128)) {
                $invalidProperties[] = "invalid value for 'concurrent', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['concurrent']) && ($this->container['concurrent'] < 1)) {
                $invalidProperties[] = "invalid value for 'concurrent', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getReadPolicyAllowableValues();
                if (!is_null($this->container['readPolicy']) && !in_array($this->container['readPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'readPolicy', must be one of '%s'",
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
    * Gets eventType
    *  事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 事件类型。 - KAFKA: 选择对应的连接名称与topic，当有新的kafka消息时将会触发作业运行一次 - DIS: 当前只支持监听DIS通道的新上报数据事件，每上报一条数据，触发作业运行一次。 - OBS: 选择要监听的OBS路径，如果该路径下有新增文件，则触发调度；新增的文件的路径名，可以通过变量Job.trigger.obsNewFiles引用。前提条件：该OBS路径已经配置DIS消息通知。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets channel
    *  DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    *
    * @return string
    */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
    * Sets channel
    *
    * @param string $channel DIS通道名称。通过DIS管理控制台获取通道名称：登录管理控制台。单击“数据接入服务”，左侧列表选择“通道管理”。通道管理页面中列出了用户拥有的通道
    *
    * @return $this
    */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;
        return $this;
    }

    /**
    * Gets failPolicy
    *  执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    *
    * @return string|null
    */
    public function getFailPolicy()
    {
        return $this->container['failPolicy'];
    }

    /**
    * Sets failPolicy
    *
    * @param string|null $failPolicy 执行失败处理策略。 - SUSPEND: 挂起 - IGNORE：忽略失败，读取下一事件
    *
    * @return $this
    */
    public function setFailPolicy($failPolicy)
    {
        $this->container['failPolicy'] = $failPolicy;
        return $this;
    }

    /**
    * Gets concurrent
    *  调度并发数
    *
    * @return int|null
    */
    public function getConcurrent()
    {
        return $this->container['concurrent'];
    }

    /**
    * Sets concurrent
    *
    * @param int|null $concurrent 调度并发数
    *
    * @return $this
    */
    public function setConcurrent($concurrent)
    {
        $this->container['concurrent'] = $concurrent;
        return $this;
    }

    /**
    * Gets readPolicy
    *  读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @return string|null
    */
    public function getReadPolicy()
    {
        return $this->container['readPolicy'];
    }

    /**
    * Sets readPolicy
    *
    * @param string|null $readPolicy 读取策略。 - LAST: 从上次位置读取 - NEW：从最新位置读取
    *
    * @return $this
    */
    public function setReadPolicy($readPolicy)
    {
        $this->container['readPolicy'] = $readPolicy;
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

