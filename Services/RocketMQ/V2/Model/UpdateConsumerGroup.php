<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConsumerGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConsumerGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'broadcast' => 'bool',
            'brokers' => 'string[]',
            'name' => 'string',
            'retryMaxTime' => 'int',
            'consumeOrderly' => 'bool',
            'groupDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'broadcast' => null,
        'brokers' => null,
        'name' => null,
        'retryMaxTime' => null,
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
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'broadcast' => 'broadcast',
            'brokers' => 'brokers',
            'name' => 'name',
            'retryMaxTime' => 'retry_max_time',
            'consumeOrderly' => 'consume_orderly',
            'groupDesc' => 'group_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'broadcast' => 'setBroadcast',
            'brokers' => 'setBrokers',
            'name' => 'setName',
            'retryMaxTime' => 'setRetryMaxTime',
            'consumeOrderly' => 'setConsumeOrderly',
            'groupDesc' => 'setGroupDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'broadcast' => 'getBroadcast',
            'brokers' => 'getBrokers',
            'name' => 'getName',
            'retryMaxTime' => 'getRetryMaxTime',
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['broadcast'] = isset($data['broadcast']) ? $data['broadcast'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['retryMaxTime'] = isset($data['retryMaxTime']) ? $data['retryMaxTime'] : null;
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
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['broadcast'] === null) {
            $invalidProperties[] = "'broadcast' can't be null";
        }
        if ($this->container['retryMaxTime'] === null) {
            $invalidProperties[] = "'retryMaxTime' can't be null";
        }
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
    * Gets enabled
    *  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets broadcast
    *  **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    *
    * @return bool
    */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
    * Sets broadcast
    *
    * @param bool $broadcast **参数解释**： 是否设置为广播消费。 **约束限制**： 不涉及。 **取值范围**： - true：使用广播消费。 - false：不使用广播消费。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBroadcast($broadcast)
    {
        $this->container['broadcast'] = $broadcast;
        return $this;
    }

    /**
    * Gets brokers
    *  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string[]|null $brokers **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 待修改参数的消费组（消费组名称不支持修改）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets retryMaxTime
    *  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getRetryMaxTime()
    {
        return $this->container['retryMaxTime'];
    }

    /**
    * Sets retryMaxTime
    *
    * @param int $retryMaxTime **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRetryMaxTime($retryMaxTime)
    {
        $this->container['retryMaxTime'] = $retryMaxTime;
        return $this;
    }

    /**
    * Gets consumeOrderly
    *  **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
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
    * @param bool|null $consumeOrderly **参数解释**： 是否按顺序消费。 **约束限制**： 仅RocketMQ实例5.x版本需要填写此参数。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **取值范围**： - true：顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
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
    * @param string|null $groupDesc **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 0~200。 **默认取值**： 不涉及。
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

