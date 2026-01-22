<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsumerGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsumerGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * permissions  **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupOnline  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'broadcast' => 'bool',
            'brokers' => 'string[]',
            'name' => 'string',
            'groupDesc' => 'string',
            'retryMaxTime' => 'int',
            'createdAt' => 'int',
            'permissions' => 'string[]',
            'consumeOrderly' => 'bool',
            'groupOnline' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * permissions  **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupOnline  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'broadcast' => null,
        'brokers' => null,
        'name' => null,
        'groupDesc' => null,
        'retryMaxTime' => null,
        'createdAt' => 'int64',
        'permissions' => null,
        'consumeOrderly' => null,
        'groupOnline' => null
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
    * broadcast  **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * permissions  **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupOnline  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'broadcast' => 'broadcast',
            'brokers' => 'brokers',
            'name' => 'name',
            'groupDesc' => 'group_desc',
            'retryMaxTime' => 'retry_max_time',
            'createdAt' => 'created_at',
            'permissions' => 'permissions',
            'consumeOrderly' => 'consume_orderly',
            'groupOnline' => 'group_online'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * permissions  **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupOnline  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'broadcast' => 'setBroadcast',
            'brokers' => 'setBrokers',
            'name' => 'setName',
            'groupDesc' => 'setGroupDesc',
            'retryMaxTime' => 'setRetryMaxTime',
            'createdAt' => 'setCreatedAt',
            'permissions' => 'setPermissions',
            'consumeOrderly' => 'setConsumeOrderly',
            'groupOnline' => 'setGroupOnline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
    * broadcast  **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 关联的代理列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groupDesc  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retryMaxTime  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    * createdAt  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * permissions  **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeOrderly  **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    * groupOnline  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'broadcast' => 'getBroadcast',
            'brokers' => 'getBrokers',
            'name' => 'getName',
            'groupDesc' => 'getGroupDesc',
            'retryMaxTime' => 'getRetryMaxTime',
            'createdAt' => 'getCreatedAt',
            'permissions' => 'getPermissions',
            'consumeOrderly' => 'getConsumeOrderly',
            'groupOnline' => 'getGroupOnline'
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
        $this->container['groupDesc'] = isset($data['groupDesc']) ? $data['groupDesc'] : null;
        $this->container['retryMaxTime'] = isset($data['retryMaxTime']) ? $data['retryMaxTime'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['consumeOrderly'] = isset($data['consumeOrderly']) ? $data['consumeOrderly'] : null;
        $this->container['groupOnline'] = isset($data['groupOnline']) ? $data['groupOnline'] : null;
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
    * Gets enabled
    *  **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
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
    * @param bool|null $enabled **参数解释**： 是否可以消费。 **约束限制**： 不涉及。 **取值范围**： - true：可以消费。 - false：不可以消费。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
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
    * @param bool|null $broadcast **参数解释**： 是否广播。 **约束限制**： 不涉及。 **取值范围**： - true：可以广播。 - false：不可以广播。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets groupDesc
    *  **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $groupDesc **参数解释**： 消费组描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroupDesc($groupDesc)
    {
        $this->container['groupDesc'] = $groupDesc;
        return $this;
    }

    /**
    * Gets retryMaxTime
    *  **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
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
    * @param int|null $retryMaxTime **参数解释**： 最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 1~16。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRetryMaxTime($retryMaxTime)
    {
        $this->container['retryMaxTime'] = $retryMaxTime;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets permissions
    *  **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param string[]|null $permissions **参数解释**： 权限集。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
        return $this;
    }

    /**
    * Gets consumeOrderly
    *  **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
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
    * @param bool|null $consumeOrderly **参数解释**： 是否按顺序消费。 **约束限制**： 不涉及。 **取值范围**： - true：按顺序消费。 - false：不按顺序消费。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConsumeOrderly($consumeOrderly)
    {
        $this->container['consumeOrderly'] = $consumeOrderly;
        return $this;
    }

    /**
    * Gets groupOnline
    *  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getGroupOnline()
    {
        return $this->container['groupOnline'];
    }

    /**
    * Sets groupOnline
    *
    * @param bool|null $groupOnline **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：消费组在线。 - false：消费组不在线。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroupOnline($groupOnline)
    {
        $this->container['groupOnline'] = $groupOnline;
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

