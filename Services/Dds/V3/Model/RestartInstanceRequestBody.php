<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestartInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestartInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetType  **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    * targetId  **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    * isSerial  **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    * isForce  **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetType' => 'string',
            'targetId' => 'string',
            'isSerial' => 'bool',
            'isForce' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetType  **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    * targetId  **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    * isSerial  **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    * isForce  **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetType' => null,
        'targetId' => null,
        'isSerial' => null,
        'isForce' => null
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
    * targetType  **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    * targetId  **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    * isSerial  **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    * isForce  **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetType' => 'target_type',
            'targetId' => 'target_id',
            'isSerial' => 'is_serial',
            'isForce' => 'is_force'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetType  **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    * targetId  **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    * isSerial  **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    * isForce  **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetType' => 'setTargetType',
            'targetId' => 'setTargetId',
            'isSerial' => 'setIsSerial',
            'isForce' => 'setIsForce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetType  **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    * targetId  **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    * isSerial  **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    * isForce  **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetType' => 'getTargetType',
            'targetId' => 'getTargetId',
            'isSerial' => 'getIsSerial',
            'isForce' => 'getIsForce'
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
    const TARGET_TYPE_MONGOS = 'mongos';
    const TARGET_TYPE_SHARD = 'shard';
    const TARGET_TYPE_CONFIG = 'config';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_MONGOS,
            self::TARGET_TYPE_SHARD,
            self::TARGET_TYPE_CONFIG,
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
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['isSerial'] = isset($data['isSerial']) ? $data['isSerial'] : null;
        $this->container['isForce'] = isset($data['isForce']) ? $data['isForce'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTargetTypeAllowableValues();
                if (!is_null($this->container['targetType']) && !in_array($this->container['targetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetId'] === null) {
            $invalidProperties[] = "'targetId' can't be null";
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
    * Gets targetType
    *  **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType **参数解释：** 待重启对象的类型。 **约束限制：** 重启集群实例下的节点或组时，该参数必选。 - 重启mongos节点时，取值为“mongos”。 - 重启shard组时，取值为“shard”。 - 重启config组时，取值为“config”。 - 重启实例（集群、副本集、单节点）时，不传该参数。 **取值范围：** - mongos - shard - config **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetId
    *  **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string $targetId **参数解释：** 待重启对象的ID，可以调用“查询实例列表和详情”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **约束限制：** 节点状态为正常时，不允许重启主节点。 **取值范围：** - 重启整个实例时，取值为实例ID。 - 重启集群实例shard或config组时取值为shard或config的组ID。 - 重启单个节点时，取值为对应节点的节点ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets isSerial
    *  **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    *
    * @return bool|null
    */
    public function getIsSerial()
    {
        return $this->container['isSerial'];
    }

    /**
    * Sets isSerial
    *
    * @param bool|null $isSerial **参数解释：** 是否选择节点串行重启。 **约束限制：** 只支持副本集实例。 **取值范围：** - true：表示节点串行重启。 - false：表示节点并行重启。 **默认取值：** false。
    *
    * @return $this
    */
    public function setIsSerial($isSerial)
    {
        $this->container['isSerial'] = $isSerial;
        return $this;
    }

    /**
    * Gets isForce
    *  **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @return bool|null
    */
    public function getIsForce()
    {
        return $this->container['isForce'];
    }

    /**
    * Sets isForce
    *
    * @param bool|null $isForce **参数解释：** 是否强制重启。 **约束限制：** 仅支持节点状态为异常时进行强制重启。只读节点暂不支持强制重启。 **取值范围：** - true：表示异常节点进行强制重启。 - false：表示进行正常重启。 **默认取值：** false。
    *
    * @return $this
    */
    public function setIsForce($isForce)
    {
        $this->container['isForce'] = $isForce;
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

