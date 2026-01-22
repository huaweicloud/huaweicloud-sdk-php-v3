<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RocketMQExtendProductPropertiesEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RocketMQExtendProductPropertiesEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxBroker  **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopicPerBroker  **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumerPerBroker  **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minBroker  **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engineVersions  **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    * maxStoragePerNode  **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStoragePerNode  **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productAlias  **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * feature  **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopic  **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * core  **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumer  **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rcu  **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxStorage  **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStorage  **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTpsPerRcu  **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * elasticTps  **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxBroker' => 'string',
            'maxTopicPerBroker' => 'string',
            'maxConsumerPerBroker' => 'string',
            'minBroker' => 'string',
            'engineVersions' => 'string',
            'maxStoragePerNode' => 'string',
            'minStoragePerNode' => 'string',
            'productAlias' => 'string',
            'feature' => 'string',
            'maxTopic' => 'string',
            'brokerNum' => 'string',
            'core' => 'string',
            'maxConsumer' => 'string',
            'rcu' => 'string',
            'maxStorage' => 'string',
            'minStorage' => 'string',
            'maxTpsPerRcu' => 'string',
            'elasticTps' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxBroker  **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopicPerBroker  **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumerPerBroker  **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minBroker  **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engineVersions  **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    * maxStoragePerNode  **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStoragePerNode  **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productAlias  **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * feature  **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopic  **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * core  **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumer  **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rcu  **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxStorage  **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStorage  **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTpsPerRcu  **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * elasticTps  **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxBroker' => null,
        'maxTopicPerBroker' => null,
        'maxConsumerPerBroker' => null,
        'minBroker' => null,
        'engineVersions' => null,
        'maxStoragePerNode' => null,
        'minStoragePerNode' => null,
        'productAlias' => null,
        'feature' => null,
        'maxTopic' => null,
        'brokerNum' => null,
        'core' => null,
        'maxConsumer' => null,
        'rcu' => null,
        'maxStorage' => null,
        'minStorage' => null,
        'maxTpsPerRcu' => null,
        'elasticTps' => null
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
    * maxBroker  **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopicPerBroker  **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumerPerBroker  **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minBroker  **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engineVersions  **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    * maxStoragePerNode  **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStoragePerNode  **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productAlias  **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * feature  **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopic  **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * core  **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumer  **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rcu  **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxStorage  **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStorage  **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTpsPerRcu  **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * elasticTps  **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxBroker' => 'max_broker',
            'maxTopicPerBroker' => 'max_topic_per_broker',
            'maxConsumerPerBroker' => 'max_consumer_per_broker',
            'minBroker' => 'min_broker',
            'engineVersions' => 'engine_versions',
            'maxStoragePerNode' => 'max_storage_per_node',
            'minStoragePerNode' => 'min_storage_per_node',
            'productAlias' => 'product_alias',
            'feature' => 'feature',
            'maxTopic' => 'max_topic',
            'brokerNum' => 'broker_num',
            'core' => 'core',
            'maxConsumer' => 'max_consumer',
            'rcu' => 'rcu',
            'maxStorage' => 'max_storage',
            'minStorage' => 'min_storage',
            'maxTpsPerRcu' => 'max_tps_per_rcu',
            'elasticTps' => 'elastic_tps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxBroker  **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopicPerBroker  **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumerPerBroker  **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minBroker  **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engineVersions  **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    * maxStoragePerNode  **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStoragePerNode  **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productAlias  **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * feature  **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopic  **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * core  **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumer  **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rcu  **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxStorage  **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStorage  **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTpsPerRcu  **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * elasticTps  **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxBroker' => 'setMaxBroker',
            'maxTopicPerBroker' => 'setMaxTopicPerBroker',
            'maxConsumerPerBroker' => 'setMaxConsumerPerBroker',
            'minBroker' => 'setMinBroker',
            'engineVersions' => 'setEngineVersions',
            'maxStoragePerNode' => 'setMaxStoragePerNode',
            'minStoragePerNode' => 'setMinStoragePerNode',
            'productAlias' => 'setProductAlias',
            'feature' => 'setFeature',
            'maxTopic' => 'setMaxTopic',
            'brokerNum' => 'setBrokerNum',
            'core' => 'setCore',
            'maxConsumer' => 'setMaxConsumer',
            'rcu' => 'setRcu',
            'maxStorage' => 'setMaxStorage',
            'minStorage' => 'setMinStorage',
            'maxTpsPerRcu' => 'setMaxTpsPerRcu',
            'elasticTps' => 'setElasticTps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxBroker  **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopicPerBroker  **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumerPerBroker  **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minBroker  **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engineVersions  **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    * maxStoragePerNode  **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStoragePerNode  **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productAlias  **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * feature  **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTopic  **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * core  **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxConsumer  **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rcu  **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxStorage  **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minStorage  **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxTpsPerRcu  **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * elasticTps  **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxBroker' => 'getMaxBroker',
            'maxTopicPerBroker' => 'getMaxTopicPerBroker',
            'maxConsumerPerBroker' => 'getMaxConsumerPerBroker',
            'minBroker' => 'getMinBroker',
            'engineVersions' => 'getEngineVersions',
            'maxStoragePerNode' => 'getMaxStoragePerNode',
            'minStoragePerNode' => 'getMinStoragePerNode',
            'productAlias' => 'getProductAlias',
            'feature' => 'getFeature',
            'maxTopic' => 'getMaxTopic',
            'brokerNum' => 'getBrokerNum',
            'core' => 'getCore',
            'maxConsumer' => 'getMaxConsumer',
            'rcu' => 'getRcu',
            'maxStorage' => 'getMaxStorage',
            'minStorage' => 'getMinStorage',
            'maxTpsPerRcu' => 'getMaxTpsPerRcu',
            'elasticTps' => 'getElasticTps'
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
        $this->container['maxBroker'] = isset($data['maxBroker']) ? $data['maxBroker'] : null;
        $this->container['maxTopicPerBroker'] = isset($data['maxTopicPerBroker']) ? $data['maxTopicPerBroker'] : null;
        $this->container['maxConsumerPerBroker'] = isset($data['maxConsumerPerBroker']) ? $data['maxConsumerPerBroker'] : null;
        $this->container['minBroker'] = isset($data['minBroker']) ? $data['minBroker'] : null;
        $this->container['engineVersions'] = isset($data['engineVersions']) ? $data['engineVersions'] : null;
        $this->container['maxStoragePerNode'] = isset($data['maxStoragePerNode']) ? $data['maxStoragePerNode'] : null;
        $this->container['minStoragePerNode'] = isset($data['minStoragePerNode']) ? $data['minStoragePerNode'] : null;
        $this->container['productAlias'] = isset($data['productAlias']) ? $data['productAlias'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['maxTopic'] = isset($data['maxTopic']) ? $data['maxTopic'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['core'] = isset($data['core']) ? $data['core'] : null;
        $this->container['maxConsumer'] = isset($data['maxConsumer']) ? $data['maxConsumer'] : null;
        $this->container['rcu'] = isset($data['rcu']) ? $data['rcu'] : null;
        $this->container['maxStorage'] = isset($data['maxStorage']) ? $data['maxStorage'] : null;
        $this->container['minStorage'] = isset($data['minStorage']) ? $data['minStorage'] : null;
        $this->container['maxTpsPerRcu'] = isset($data['maxTpsPerRcu']) ? $data['maxTpsPerRcu'] : null;
        $this->container['elasticTps'] = isset($data['elasticTps']) ? $data['elasticTps'] : null;
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
    * Gets maxBroker
    *  **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxBroker()
    {
        return $this->container['maxBroker'];
    }

    /**
    * Sets maxBroker
    *
    * @param string|null $maxBroker **参数解释**： Broker的最大个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxBroker($maxBroker)
    {
        $this->container['maxBroker'] = $maxBroker;
        return $this;
    }

    /**
    * Gets maxTopicPerBroker
    *  **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxTopicPerBroker()
    {
        return $this->container['maxTopicPerBroker'];
    }

    /**
    * Sets maxTopicPerBroker
    *
    * @param string|null $maxTopicPerBroker **参数解释**： 每个节点最多能创建的Topic个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxTopicPerBroker($maxTopicPerBroker)
    {
        $this->container['maxTopicPerBroker'] = $maxTopicPerBroker;
        return $this;
    }

    /**
    * Gets maxConsumerPerBroker
    *  **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxConsumerPerBroker()
    {
        return $this->container['maxConsumerPerBroker'];
    }

    /**
    * Sets maxConsumerPerBroker
    *
    * @param string|null $maxConsumerPerBroker **参数解释**： 每个节点的最大消费者数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxConsumerPerBroker($maxConsumerPerBroker)
    {
        $this->container['maxConsumerPerBroker'] = $maxConsumerPerBroker;
        return $this;
    }

    /**
    * Gets minBroker
    *  **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMinBroker()
    {
        return $this->container['minBroker'];
    }

    /**
    * Sets minBroker
    *
    * @param string|null $minBroker **参数解释**： Broker的最小个数（仅RocketMQ 4.8.0版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMinBroker($minBroker)
    {
        $this->container['minBroker'] = $minBroker;
        return $this;
    }

    /**
    * Gets engineVersions
    *  **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEngineVersions()
    {
        return $this->container['engineVersions'];
    }

    /**
    * Sets engineVersions
    *
    * @param string|null $engineVersions **参数解释**： 消息引擎版本。 **约束限制**： 不涉及。 **取值范围**： [- 4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- 5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngineVersions($engineVersions)
    {
        $this->container['engineVersions'] = $engineVersions;
        return $this;
    }

    /**
    * Gets maxStoragePerNode
    *  **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxStoragePerNode()
    {
        return $this->container['maxStoragePerNode'];
    }

    /**
    * Sets maxStoragePerNode
    *
    * @param string|null $maxStoragePerNode **参数解释**： 每个节点的最大存储。单位为GB  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxStoragePerNode($maxStoragePerNode)
    {
        $this->container['maxStoragePerNode'] = $maxStoragePerNode;
        return $this;
    }

    /**
    * Gets minStoragePerNode
    *  **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMinStoragePerNode()
    {
        return $this->container['minStoragePerNode'];
    }

    /**
    * Sets minStoragePerNode
    *
    * @param string|null $minStoragePerNode **参数解释**： 每个节点的最小存储。单位为GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMinStoragePerNode($minStoragePerNode)
    {
        $this->container['minStoragePerNode'] = $minStoragePerNode;
        return $this;
    }

    /**
    * Gets productAlias
    *  **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProductAlias()
    {
        return $this->container['productAlias'];
    }

    /**
    * Sets productAlias
    *
    * @param string|null $productAlias **参数解释**： product_id的别名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProductAlias($productAlias)
    {
        $this->container['productAlias'] = $productAlias;
        return $this;
    }

    /**
    * Gets feature
    *  **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature **参数解释**： 该规格对应特性开关。（仅RocketMQ 5.x版本会显示此字段） **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets maxTopic
    *  **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxTopic()
    {
        return $this->container['maxTopic'];
    }

    /**
    * Sets maxTopic
    *
    * @param string|null $maxTopic **参数解释**： 实例Topic的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxTopic($maxTopic)
    {
        $this->container['maxTopic'] = $maxTopic;
        return $this;
    }

    /**
    * Gets brokerNum
    *  **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getBrokerNum()
    {
        return $this->container['brokerNum'];
    }

    /**
    * Sets brokerNum
    *
    * @param string|null $brokerNum **参数解释**： broker数量（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
        return $this;
    }

    /**
    * Gets core
    *  **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCore()
    {
        return $this->container['core'];
    }

    /**
    * Sets core
    *
    * @param string|null $core **参数解释**： 整个实例的计费核数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCore($core)
    {
        $this->container['core'] = $core;
        return $this;
    }

    /**
    * Gets maxConsumer
    *  **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxConsumer()
    {
        return $this->container['maxConsumer'];
    }

    /**
    * Sets maxConsumer
    *
    * @param string|null $maxConsumer **参数解释**： 实例消费者的最大数（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxConsumer($maxConsumer)
    {
        $this->container['maxConsumer'] = $maxConsumer;
        return $this;
    }

    /**
    * Gets rcu
    *  **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRcu()
    {
        return $this->container['rcu'];
    }

    /**
    * Sets rcu
    *
    * @param string|null $rcu **参数解释**： 流量单元，rcu * max_tpc_per_rcu = 规格最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRcu($rcu)
    {
        $this->container['rcu'] = $rcu;
        return $this;
    }

    /**
    * Gets maxStorage
    *  **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxStorage()
    {
        return $this->container['maxStorage'];
    }

    /**
    * Sets maxStorage
    *
    * @param string|null $maxStorage **参数解释**： 最大存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxStorage($maxStorage)
    {
        $this->container['maxStorage'] = $maxStorage;
        return $this;
    }

    /**
    * Gets minStorage
    *  **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMinStorage()
    {
        return $this->container['minStorage'];
    }

    /**
    * Sets minStorage
    *
    * @param string|null $minStorage **参数解释**： 最小存储空间（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMinStorage($minStorage)
    {
        $this->container['minStorage'] = $minStorage;
        return $this;
    }

    /**
    * Gets maxTpsPerRcu
    *  **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxTpsPerRcu()
    {
        return $this->container['maxTpsPerRcu'];
    }

    /**
    * Sets maxTpsPerRcu
    *
    * @param string|null $maxTpsPerRcu **参数解释**： 单个rcu最大TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxTpsPerRcu($maxTpsPerRcu)
    {
        $this->container['maxTpsPerRcu'] = $maxTpsPerRcu;
        return $this;
    }

    /**
    * Gets elasticTps
    *  **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getElasticTps()
    {
        return $this->container['elasticTps'];
    }

    /**
    * Sets elasticTps
    *
    * @param string|null $elasticTps **参数解释**： 弹性TPS（仅RocketMQ 5.x版本会显示此字段）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setElasticTps($elasticTps)
    {
        $this->container['elasticTps'] = $elasticTps;
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

