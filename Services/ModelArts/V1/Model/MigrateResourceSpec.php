<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateResourceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateResourceSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  creatingStep
    * nodePool  **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    * labels  **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * tags  **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    * network  network
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'creatingStep' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CreatingStep',
            'nodePool' => 'string',
            'rootVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RootVolume',
            'dataVolumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataVolumeItem[]',
            'volumeGroupConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeGroupConfig[]',
            'labels' => 'map[string,string]',
            'taints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Taints[]',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UserTags[]',
            'network' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork',
            'extendParams' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceExtendParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  creatingStep
    * nodePool  **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    * labels  **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * tags  **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    * network  network
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'creatingStep' => null,
        'nodePool' => null,
        'rootVolume' => null,
        'dataVolumes' => null,
        'volumeGroupConfigs' => null,
        'labels' => null,
        'taints' => null,
        'tags' => null,
        'network' => null,
        'extendParams' => null
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
    * flavor  **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  creatingStep
    * nodePool  **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    * labels  **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * tags  **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    * network  network
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'creatingStep' => 'creatingStep',
            'nodePool' => 'nodePool',
            'rootVolume' => 'rootVolume',
            'dataVolumes' => 'dataVolumes',
            'volumeGroupConfigs' => 'volumeGroupConfigs',
            'labels' => 'labels',
            'taints' => 'taints',
            'tags' => 'tags',
            'network' => 'network',
            'extendParams' => 'extendParams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  creatingStep
    * nodePool  **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    * labels  **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * tags  **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    * network  network
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'creatingStep' => 'setCreatingStep',
            'nodePool' => 'setNodePool',
            'rootVolume' => 'setRootVolume',
            'dataVolumes' => 'setDataVolumes',
            'volumeGroupConfigs' => 'setVolumeGroupConfigs',
            'labels' => 'setLabels',
            'taints' => 'setTaints',
            'tags' => 'setTags',
            'network' => 'setNetwork',
            'extendParams' => 'setExtendParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  creatingStep
    * nodePool  **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    * labels  **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    * tags  **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    * network  network
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'creatingStep' => 'getCreatingStep',
            'nodePool' => 'getNodePool',
            'rootVolume' => 'getRootVolume',
            'dataVolumes' => 'getDataVolumes',
            'volumeGroupConfigs' => 'getVolumeGroupConfigs',
            'labels' => 'getLabels',
            'taints' => 'getTaints',
            'tags' => 'getTags',
            'network' => 'getNetwork',
            'extendParams' => 'getExtendParams'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['creatingStep'] = isset($data['creatingStep']) ? $data['creatingStep'] : null;
        $this->container['nodePool'] = isset($data['nodePool']) ? $data['nodePool'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['volumeGroupConfigs'] = isset($data['volumeGroupConfigs']) ? $data['volumeGroupConfigs'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['extendParams'] = isset($data['extendParams']) ? $data['extendParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
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
    * Gets flavor
    *  **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor **参数解释**：资源规格名称，跨资源池迁移时该参数必传。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets creatingStep
    *  creatingStep
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CreatingStep|null
    */
    public function getCreatingStep()
    {
        return $this->container['creatingStep'];
    }

    /**
    * Sets creatingStep
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CreatingStep|null $creatingStep creatingStep
    *
    * @return $this
    */
    public function setCreatingStep($creatingStep)
    {
        $this->container['creatingStep'] = $creatingStep;
        return $this;
    }

    /**
    * Gets nodePool
    *  **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getNodePool()
    {
        return $this->container['nodePool'];
    }

    /**
    * Sets nodePool
    *
    * @param string|null $nodePool **参数解释**：资源迁移的目标节点池名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNodePool($nodePool)
    {
        $this->container['nodePool'] = $nodePool;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RootVolume|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RootVolume|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolumes
    *  **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DataVolumeItem[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataVolumeItem[]|null $dataVolumes **参数解释**：目标节点池的数据盘盘信息，新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets volumeGroupConfigs
    *  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeGroupConfig[]|null
    */
    public function getVolumeGroupConfigs()
    {
        return $this->container['volumeGroupConfigs'];
    }

    /**
    * Sets volumeGroupConfigs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeGroupConfig[]|null $volumeGroupConfigs **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置，新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setVolumeGroupConfigs($volumeGroupConfigs)
    {
        $this->container['volumeGroupConfigs'] = $volumeGroupConfigs;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels **参数解释**：k8s标签，格式为key/value键值对，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets taints
    *  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Taints[]|null
    */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
    * Sets taints
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Taints[]|null $taints **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UserTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UserTags[]|null $tags **参数解释**：资源标签。新建节点池时有效。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork|null
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork|null $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets extendParams
    *  extendParams
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceExtendParams|null
    */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
    * Sets extendParams
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceExtendParams|null $extendParams extendParams
    *
    * @return $this
    */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;
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

