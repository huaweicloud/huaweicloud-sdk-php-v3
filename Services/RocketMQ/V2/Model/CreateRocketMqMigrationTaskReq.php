<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRocketMqMigrationTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRocketMqMigrationTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicConfigTable  RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * subscriptionGroupTable  RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * vhosts  RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * queues  RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * exchanges  RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * bindings  RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicConfigTable' => 'map[string,\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRocketMqTopicConfig]',
            'subscriptionGroupTable' => 'map[string,\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRocketMqSubscriptionGroup]',
            'vhosts' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitVhostMetadata[]',
            'queues' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitQueueMetadata[]',
            'exchanges' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitExchangeMetadata[]',
            'bindings' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitBindingMetadata[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicConfigTable  RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * subscriptionGroupTable  RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * vhosts  RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * queues  RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * exchanges  RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * bindings  RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicConfigTable' => null,
        'subscriptionGroupTable' => null,
        'vhosts' => null,
        'queues' => null,
        'exchanges' => null,
        'bindings' => null
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
    * topicConfigTable  RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * subscriptionGroupTable  RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * vhosts  RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * queues  RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * exchanges  RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * bindings  RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicConfigTable' => 'topicConfigTable',
            'subscriptionGroupTable' => 'subscriptionGroupTable',
            'vhosts' => 'vhosts',
            'queues' => 'queues',
            'exchanges' => 'exchanges',
            'bindings' => 'bindings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicConfigTable  RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * subscriptionGroupTable  RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * vhosts  RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * queues  RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * exchanges  RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * bindings  RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicConfigTable' => 'setTopicConfigTable',
            'subscriptionGroupTable' => 'setSubscriptionGroupTable',
            'vhosts' => 'setVhosts',
            'queues' => 'setQueues',
            'exchanges' => 'setExchanges',
            'bindings' => 'setBindings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicConfigTable  RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * subscriptionGroupTable  RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    * vhosts  RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * queues  RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * exchanges  RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    * bindings  RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicConfigTable' => 'getTopicConfigTable',
            'subscriptionGroupTable' => 'getSubscriptionGroupTable',
            'vhosts' => 'getVhosts',
            'queues' => 'getQueues',
            'exchanges' => 'getExchanges',
            'bindings' => 'getBindings'
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
        $this->container['topicConfigTable'] = isset($data['topicConfigTable']) ? $data['topicConfigTable'] : null;
        $this->container['subscriptionGroupTable'] = isset($data['subscriptionGroupTable']) ? $data['subscriptionGroupTable'] : null;
        $this->container['vhosts'] = isset($data['vhosts']) ? $data['vhosts'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['exchanges'] = isset($data['exchanges']) ? $data['exchanges'] : null;
        $this->container['bindings'] = isset($data['bindings']) ? $data['bindings'] : null;
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
    * Gets topicConfigTable
    *  RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    *
    * @return map[string,\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRocketMqTopicConfig]|null
    */
    public function getTopicConfigTable()
    {
        return $this->container['topicConfigTable'];
    }

    /**
    * Sets topicConfigTable
    *
    * @param map[string,\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRocketMqTopicConfig]|null $topicConfigTable RocketMQ topic 元数据，键为topic名，值为topic配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    *
    * @return $this
    */
    public function setTopicConfigTable($topicConfigTable)
    {
        $this->container['topicConfigTable'] = $topicConfigTable;
        return $this;
    }

    /**
    * Gets subscriptionGroupTable
    *  RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    *
    * @return map[string,\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRocketMqSubscriptionGroup]|null
    */
    public function getSubscriptionGroupTable()
    {
        return $this->container['subscriptionGroupTable'];
    }

    /**
    * Sets subscriptionGroupTable
    *
    * @param map[string,\HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRocketMqSubscriptionGroup]|null $subscriptionGroupTable RocketMQ消费组元数据，键为消费组名，值为消费组配置，迁移任务类型为自建RocketMQ上云(rocketmq)时必填。
    *
    * @return $this
    */
    public function setSubscriptionGroupTable($subscriptionGroupTable)
    {
        $this->container['subscriptionGroupTable'] = $subscriptionGroupTable;
        return $this;
    }

    /**
    * Gets vhosts
    *  RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitVhostMetadata[]|null
    */
    public function getVhosts()
    {
        return $this->container['vhosts'];
    }

    /**
    * Sets vhosts
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitVhostMetadata[]|null $vhosts RabbitMQ vhost元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return $this
    */
    public function setVhosts($vhosts)
    {
        $this->container['vhosts'] = $vhosts;
        return $this;
    }

    /**
    * Gets queues
    *  RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitQueueMetadata[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitQueueMetadata[]|null $queues RabbitMQ队列元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
        return $this;
    }

    /**
    * Gets exchanges
    *  RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitExchangeMetadata[]|null
    */
    public function getExchanges()
    {
        return $this->container['exchanges'];
    }

    /**
    * Sets exchanges
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitExchangeMetadata[]|null $exchanges RabbitMQ交换机元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return $this
    */
    public function setExchanges($exchanges)
    {
        $this->container['exchanges'] = $exchanges;
        return $this;
    }

    /**
    * Gets bindings
    *  RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitBindingMetadata[]|null
    */
    public function getBindings()
    {
        return $this->container['bindings'];
    }

    /**
    * Sets bindings
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\MigrationRabbitBindingMetadata[]|null $bindings RabbitMQ binding元数据列表，迁移任务类型为自建RabbitMQ上云(rabbitToRocket)时必填。
    *
    * @return $this
    */
    public function setBindings($bindings)
    {
        $this->container['bindings'] = $bindings;
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

