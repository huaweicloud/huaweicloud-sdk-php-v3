<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConsumerGroupOrBatchDeleteConsumerGroupReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConsumerGroupOrBatchDeleteConsumerGroupReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groups  待删除的消费组列表。
    * name  消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * broadcast  是否广播。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    * enabled  是否可以消费。
    * consumeOrderly  是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    * groupDesc  消费组描述，长度0~200个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groups' => 'string[]',
            'name' => 'string',
            'brokers' => 'string[]',
            'broadcast' => 'bool',
            'retryMaxTime' => 'int',
            'enabled' => 'bool',
            'consumeOrderly' => 'bool',
            'groupDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groups  待删除的消费组列表。
    * name  消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * broadcast  是否广播。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    * enabled  是否可以消费。
    * consumeOrderly  是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    * groupDesc  消费组描述，长度0~200个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groups' => null,
        'name' => null,
        'brokers' => null,
        'broadcast' => null,
        'retryMaxTime' => null,
        'enabled' => null,
        'consumeOrderly' => null,
        'groupDesc' => null
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
    * groups  待删除的消费组列表。
    * name  消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * broadcast  是否广播。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    * enabled  是否可以消费。
    * consumeOrderly  是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    * groupDesc  消费组描述，长度0~200个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groups' => 'groups',
            'name' => 'name',
            'brokers' => 'brokers',
            'broadcast' => 'broadcast',
            'retryMaxTime' => 'retry_max_time',
            'enabled' => 'enabled',
            'consumeOrderly' => 'consume_orderly',
            'groupDesc' => 'group_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groups  待删除的消费组列表。
    * name  消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * broadcast  是否广播。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    * enabled  是否可以消费。
    * consumeOrderly  是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    * groupDesc  消费组描述，长度0~200个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'groups' => 'setGroups',
            'name' => 'setName',
            'brokers' => 'setBrokers',
            'broadcast' => 'setBroadcast',
            'retryMaxTime' => 'setRetryMaxTime',
            'enabled' => 'setEnabled',
            'consumeOrderly' => 'setConsumeOrderly',
            'groupDesc' => 'setGroupDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groups  待删除的消费组列表。
    * name  消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
    * broadcast  是否广播。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    * enabled  是否可以消费。
    * consumeOrderly  是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    * groupDesc  消费组描述，长度0~200个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'groups' => 'getGroups',
            'name' => 'getName',
            'brokers' => 'getBrokers',
            'broadcast' => 'getBroadcast',
            'retryMaxTime' => 'getRetryMaxTime',
            'enabled' => 'getEnabled',
            'consumeOrderly' => 'getConsumeOrderly',
            'groupDesc' => 'getGroupDesc'
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
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['broadcast'] = isset($data['broadcast']) ? $data['broadcast'] : null;
        $this->container['retryMaxTime'] = isset($data['retryMaxTime']) ? $data['retryMaxTime'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['consumeOrderly'] = isset($data['consumeOrderly']) ? $data['consumeOrderly'] : null;
        $this->container['groupDesc'] = isset($data['groupDesc']) ? $data['groupDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupDesc']) && (mb_strlen($this->container['groupDesc']) > 200)) {
                $invalidProperties[] = "invalid value for 'groupDesc', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['groupDesc']) && (mb_strlen($this->container['groupDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupDesc', the character length must be bigger than or equal to 0.";
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
    * Gets groups
    *  待删除的消费组列表。
    *
    * @return string[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param string[]|null $groups 待删除的消费组列表。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets name
    *  消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
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
    * @param string|null $name 消费组名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
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
    *  关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
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
    * @param string[]|null $brokers 关联的代理列表（仅RocketMQ实例4.8.0版本需要填写此参数）。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets broadcast
    *  是否广播。
    *
    * @return bool|null
    */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
    * Sets broadcast
    *
    * @param bool|null $broadcast 是否广播。
    *
    * @return $this
    */
    public function setBroadcast($broadcast)
    {
        $this->container['broadcast'] = $broadcast;
        return $this;
    }

    /**
    * Gets retryMaxTime
    *  最大重试次数，取值范围为1~16。
    *
    * @return int|null
    */
    public function getRetryMaxTime()
    {
        return $this->container['retryMaxTime'];
    }

    /**
    * Sets retryMaxTime
    *
    * @param int|null $retryMaxTime 最大重试次数，取值范围为1~16。
    *
    * @return $this
    */
    public function setRetryMaxTime($retryMaxTime)
    {
        $this->container['retryMaxTime'] = $retryMaxTime;
        return $this;
    }

    /**
    * Gets enabled
    *  是否可以消费。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否可以消费。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets consumeOrderly
    *  是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    *
    * @return bool|null
    */
    public function getConsumeOrderly()
    {
        return $this->container['consumeOrderly'];
    }

    /**
    * Sets consumeOrderly
    *
    * @param bool|null $consumeOrderly 是否按顺序消费（仅RocketMQ实例5.x版本需要填写此参数）。
    *
    * @return $this
    */
    public function setConsumeOrderly($consumeOrderly)
    {
        $this->container['consumeOrderly'] = $consumeOrderly;
        return $this;
    }

    /**
    * Gets groupDesc
    *  消费组描述，长度0~200个字符。
    *
    * @return string|null
    */
    public function getGroupDesc()
    {
        return $this->container['groupDesc'];
    }

    /**
    * Sets groupDesc
    *
    * @param string|null $groupDesc 消费组描述，长度0~200个字符。
    *
    * @return $this
    */
    public function setGroupDesc($groupDesc)
    {
        $this->container['groupDesc'] = $groupDesc;
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

