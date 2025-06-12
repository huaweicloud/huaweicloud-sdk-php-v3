<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTopicReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTopicReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * queueNum  总队列数，范围1~50。
    * queues  队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * permission  权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    * messageType  消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'brokers' => 'string[]',
            'queueNum' => 'float',
            'queues' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\CreateTopicReqQueues[]',
            'permission' => 'string',
            'messageType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * queueNum  总队列数，范围1~50。
    * queues  队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * permission  权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    * messageType  消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'brokers' => null,
        'queueNum' => null,
        'queues' => null,
        'permission' => null,
        'messageType' => null
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
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * queueNum  总队列数，范围1~50。
    * queues  队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * permission  权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    * messageType  消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'brokers' => 'brokers',
            'queueNum' => 'queue_num',
            'queues' => 'queues',
            'permission' => 'permission',
            'messageType' => 'message_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * queueNum  总队列数，范围1~50。
    * queues  队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * permission  权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    * messageType  消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'brokers' => 'setBrokers',
            'queueNum' => 'setQueueNum',
            'queues' => 'setQueues',
            'permission' => 'setPermission',
            'messageType' => 'setMessageType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * queueNum  总队列数，范围1~50。
    * queues  队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * permission  权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    * messageType  消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'brokers' => 'getBrokers',
            'queueNum' => 'getQueueNum',
            'queues' => 'getQueues',
            'permission' => 'getPermission',
            'messageType' => 'getMessageType'
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
    const PERMISSION_SUB = 'sub';
    const PERMISSION_PUB = 'pub';
    const PERMISSION_ALL = 'all';
    const MESSAGE_TYPE_NORMAL = 'NORMAL';
    const MESSAGE_TYPE_FIFO = 'FIFO';
    const MESSAGE_TYPE_DELAY = 'DELAY';
    const MESSAGE_TYPE_TRANSACTION = 'TRANSACTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionAllowableValues()
    {
        return [
            self::PERMISSION_SUB,
            self::PERMISSION_PUB,
            self::PERMISSION_ALL,
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
            self::MESSAGE_TYPE_FIFO,
            self::MESSAGE_TYPE_DELAY,
            self::MESSAGE_TYPE_TRANSACTION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['queueNum'] = isset($data['queueNum']) ? $data['queueNum'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['messageType'] = isset($data['messageType']) ? $data['messageType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPermissionAllowableValues();
                if (!is_null($this->container['permission']) && !in_array($this->container['permission'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permission', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMessageTypeAllowableValues();
                if (!is_null($this->container['messageType']) && !in_array($this->container['messageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'messageType', must be one of '%s'",
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
    * Gets name
    *  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
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
    * @param string|null $name 主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets brokers
    *  关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    *
    * @return string[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param string[]|null $brokers 关联的代理（仅RocketMQ实例4.8.0版本需要填写此参数）。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets queueNum
    *  总队列数，范围1~50。
    *
    * @return float|null
    */
    public function getQueueNum()
    {
        return $this->container['queueNum'];
    }

    /**
    * Sets queueNum
    *
    * @param float|null $queueNum 总队列数，范围1~50。
    *
    * @return $this
    */
    public function setQueueNum($queueNum)
    {
        $this->container['queueNum'] = $queueNum;
        return $this;
    }

    /**
    * Gets queues
    *  队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\CreateTopicReqQueues[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\CreateTopicReqQueues[]|null $queues 队列（仅RocketMQ实例4.8.0版本需要填写此参数）。
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
        return $this;
    }

    /**
    * Gets permission
    *  权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限（仅RocketMQ实例4.8.0版本需要填写此参数）。 取值范围：   - pub（发布）   - sub（订阅）   - all（发布+订阅）
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets messageType
    *  消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
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
    * @param string|null $messageType 消息类型（仅RocketMQ实例5.x版本需要填写此参数）。 取值范围：   - NORMAL（普通消息）   - FIFO（顺序消息）   - DELAY（定时消息）   - TRANSACTION（事务消息）
    *
    * @return $this
    */
    public function setMessageType($messageType)
    {
        $this->container['messageType'] = $messageType;
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

