<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeBatchMigrationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeBatchMigrationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * migrateNodeNames  **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    * fromClusterName  **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toClusterName  **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toPoolName  **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resourceSpec  resourceSpec
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'migrateNodeNames' => 'string[]',
            'fromClusterName' => 'string',
            'toClusterName' => 'string',
            'toPoolName' => 'string',
            'resourceSpec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MigrateResourceSpec'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * migrateNodeNames  **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    * fromClusterName  **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toClusterName  **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toPoolName  **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resourceSpec  resourceSpec
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'migrateNodeNames' => null,
        'fromClusterName' => null,
        'toClusterName' => null,
        'toPoolName' => null,
        'resourceSpec' => null
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
    * migrateNodeNames  **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    * fromClusterName  **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toClusterName  **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toPoolName  **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resourceSpec  resourceSpec
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'migrateNodeNames' => 'migrateNodeNames',
            'fromClusterName' => 'fromClusterName',
            'toClusterName' => 'toClusterName',
            'toPoolName' => 'toPoolName',
            'resourceSpec' => 'resourceSpec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * migrateNodeNames  **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    * fromClusterName  **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toClusterName  **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toPoolName  **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resourceSpec  resourceSpec
    *
    * @var string[]
    */
    protected static $setters = [
            'migrateNodeNames' => 'setMigrateNodeNames',
            'fromClusterName' => 'setFromClusterName',
            'toClusterName' => 'setToClusterName',
            'toPoolName' => 'setToPoolName',
            'resourceSpec' => 'setResourceSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * migrateNodeNames  **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    * fromClusterName  **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toClusterName  **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * toPoolName  **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resourceSpec  resourceSpec
    *
    * @var string[]
    */
    protected static $getters = [
            'migrateNodeNames' => 'getMigrateNodeNames',
            'fromClusterName' => 'getFromClusterName',
            'toClusterName' => 'getToClusterName',
            'toPoolName' => 'getToPoolName',
            'resourceSpec' => 'getResourceSpec'
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
        $this->container['migrateNodeNames'] = isset($data['migrateNodeNames']) ? $data['migrateNodeNames'] : null;
        $this->container['fromClusterName'] = isset($data['fromClusterName']) ? $data['fromClusterName'] : null;
        $this->container['toClusterName'] = isset($data['toClusterName']) ? $data['toClusterName'] : null;
        $this->container['toPoolName'] = isset($data['toPoolName']) ? $data['toPoolName'] : null;
        $this->container['resourceSpec'] = isset($data['resourceSpec']) ? $data['resourceSpec'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['migrateNodeNames'] === null) {
            $invalidProperties[] = "'migrateNodeNames' can't be null";
        }
        if ($this->container['fromClusterName'] === null) {
            $invalidProperties[] = "'fromClusterName' can't be null";
        }
        if ($this->container['toClusterName'] === null) {
            $invalidProperties[] = "'toClusterName' can't be null";
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
    * Gets migrateNodeNames
    *  **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    *
    * @return string[]
    */
    public function getMigrateNodeNames()
    {
        return $this->container['migrateNodeNames'];
    }

    /**
    * Sets migrateNodeNames
    *
    * @param string[] $migrateNodeNames **参数解释**：待迁移的节点名称列表。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setMigrateNodeNames($migrateNodeNames)
    {
        $this->container['migrateNodeNames'] = $migrateNodeNames;
        return $this;
    }

    /**
    * Gets fromClusterName
    *  **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getFromClusterName()
    {
        return $this->container['fromClusterName'];
    }

    /**
    * Sets fromClusterName
    *
    * @param string $fromClusterName **参数解释**：迁移起始集群名称。 专属算力资源时该字段与源资源池名称相同，取自源资源池metadata.name字段的值； 轻量算力集群时该字段取自迁移节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFromClusterName($fromClusterName)
    {
        $this->container['fromClusterName'] = $fromClusterName;
        return $this;
    }

    /**
    * Gets toClusterName
    *  **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getToClusterName()
    {
        return $this->container['toClusterName'];
    }

    /**
    * Sets toClusterName
    *
    * @param string $toClusterName **参数解释**：迁移目标集群名称。 专属算力资源时该字段与源资源池名称相同，取自目标资源池metadata.name字段的值； 轻量算力集群时该字段取自目标资源池内节点metadata.labels[os.modelarts.node/cluster]字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setToClusterName($toClusterName)
    {
        $this->container['toClusterName'] = $toClusterName;
        return $this;
    }

    /**
    * Gets toPoolName
    *  **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getToPoolName()
    {
        return $this->container['toPoolName'];
    }

    /**
    * Sets toPoolName
    *
    * @param string|null $toPoolName **参数解释**：迁移目标资源池名称。该字段取自目标资源池metadata.name字段的值。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setToPoolName($toPoolName)
    {
        $this->container['toPoolName'] = $toPoolName;
        return $this;
    }

    /**
    * Gets resourceSpec
    *  resourceSpec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\MigrateResourceSpec|null
    */
    public function getResourceSpec()
    {
        return $this->container['resourceSpec'];
    }

    /**
    * Sets resourceSpec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\MigrateResourceSpec|null $resourceSpec resourceSpec
    *
    * @return $this
    */
    public function setResourceSpec($resourceSpec)
    {
        $this->container['resourceSpec'] = $resourceSpec;
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

