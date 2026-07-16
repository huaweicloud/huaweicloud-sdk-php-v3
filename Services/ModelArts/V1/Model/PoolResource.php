<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
    * count  **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中节点的AZ信息。
    * nodePool  **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
    * labels  **参数解释**：k8s标签，格式为key/value键值对。
    * tags  **参数解释**：资源标签，非特权池不能指定。
    * network  network
    * extendParams  extendParams
    * creatingStep  creatingStep
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：自定义数据盘（云硬盘）列表信息。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
    * os  os
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'count' => 'int',
            'maxCount' => 'int',
            'azs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolNodeAz[]',
            'nodePool' => 'string',
            'taints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Taints[]',
            'labels' => 'map[string,string]',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UserTags[]',
            'network' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork',
            'extendParams' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceExtendParams',
            'creatingStep' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CreatingStep',
            'rootVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RootVolume',
            'dataVolumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataVolumeItem[]',
            'volumeGroupConfigs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeGroupConfig[]',
            'os' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Os'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
    * count  **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中节点的AZ信息。
    * nodePool  **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
    * labels  **参数解释**：k8s标签，格式为key/value键值对。
    * tags  **参数解释**：资源标签，非特权池不能指定。
    * network  network
    * extendParams  extendParams
    * creatingStep  creatingStep
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：自定义数据盘（云硬盘）列表信息。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
    * os  os
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'count' => 'int32',
        'maxCount' => 'int32',
        'azs' => null,
        'nodePool' => null,
        'taints' => null,
        'labels' => null,
        'tags' => null,
        'network' => null,
        'extendParams' => null,
        'creatingStep' => null,
        'rootVolume' => null,
        'dataVolumes' => null,
        'volumeGroupConfigs' => null,
        'os' => null
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
    * flavor  **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
    * count  **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中节点的AZ信息。
    * nodePool  **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
    * labels  **参数解释**：k8s标签，格式为key/value键值对。
    * tags  **参数解释**：资源标签，非特权池不能指定。
    * network  network
    * extendParams  extendParams
    * creatingStep  creatingStep
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：自定义数据盘（云硬盘）列表信息。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
    * os  os
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'count' => 'count',
            'maxCount' => 'maxCount',
            'azs' => 'azs',
            'nodePool' => 'nodePool',
            'taints' => 'taints',
            'labels' => 'labels',
            'tags' => 'tags',
            'network' => 'network',
            'extendParams' => 'extendParams',
            'creatingStep' => 'creatingStep',
            'rootVolume' => 'rootVolume',
            'dataVolumes' => 'dataVolumes',
            'volumeGroupConfigs' => 'volumeGroupConfigs',
            'os' => 'os'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
    * count  **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中节点的AZ信息。
    * nodePool  **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
    * labels  **参数解释**：k8s标签，格式为key/value键值对。
    * tags  **参数解释**：资源标签，非特权池不能指定。
    * network  network
    * extendParams  extendParams
    * creatingStep  creatingStep
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：自定义数据盘（云硬盘）列表信息。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
    * os  os
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'count' => 'setCount',
            'maxCount' => 'setMaxCount',
            'azs' => 'setAzs',
            'nodePool' => 'setNodePool',
            'taints' => 'setTaints',
            'labels' => 'setLabels',
            'tags' => 'setTags',
            'network' => 'setNetwork',
            'extendParams' => 'setExtendParams',
            'creatingStep' => 'setCreatingStep',
            'rootVolume' => 'setRootVolume',
            'dataVolumes' => 'setDataVolumes',
            'volumeGroupConfigs' => 'setVolumeGroupConfigs',
            'os' => 'setOs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
    * count  **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    * maxCount  **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    * azs  **参数解释**：资源池中节点的AZ信息。
    * nodePool  **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
    * taints  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
    * labels  **参数解释**：k8s标签，格式为key/value键值对。
    * tags  **参数解释**：资源标签，非特权池不能指定。
    * network  network
    * extendParams  extendParams
    * creatingStep  creatingStep
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：自定义数据盘（云硬盘）列表信息。
    * volumeGroupConfigs  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
    * os  os
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'count' => 'getCount',
            'maxCount' => 'getMaxCount',
            'azs' => 'getAzs',
            'nodePool' => 'getNodePool',
            'taints' => 'getTaints',
            'labels' => 'getLabels',
            'tags' => 'getTags',
            'network' => 'getNetwork',
            'extendParams' => 'getExtendParams',
            'creatingStep' => 'getCreatingStep',
            'rootVolume' => 'getRootVolume',
            'dataVolumes' => 'getDataVolumes',
            'volumeGroupConfigs' => 'getVolumeGroupConfigs',
            'os' => 'getOs'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['maxCount'] = isset($data['maxCount']) ? $data['maxCount'] : null;
        $this->container['azs'] = isset($data['azs']) ? $data['azs'] : null;
        $this->container['nodePool'] = isset($data['nodePool']) ? $data['nodePool'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['extendParams'] = isset($data['extendParams']) ? $data['extendParams'] : null;
        $this->container['creatingStep'] = isset($data['creatingStep']) ? $data['creatingStep'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['volumeGroupConfigs'] = isset($data['volumeGroupConfigs']) ? $data['volumeGroupConfigs'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
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
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['maxCount'] === null) {
            $invalidProperties[] = "'maxCount' can't be null";
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
    *  **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
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
    * @param string $flavor **参数解释**：资源规格名称，比如：modelarts.vm.gpu.t4u8。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count **参数解释**：规格保障使用量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets maxCount
    *  **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    *
    * @return int
    */
    public function getMaxCount()
    {
        return $this->container['maxCount'];
    }

    /**
    * Sets maxCount
    *
    * @param int $maxCount **参数解释**：资源规格的弹性使用量，物理池该值和count相同[，逻辑池该值大于等于count](tag:hcs,hcso)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMaxCount($maxCount)
    {
        $this->container['maxCount'] = $maxCount;
        return $this;
    }

    /**
    * Gets azs
    *  **参数解释**：资源池中节点的AZ信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolNodeAz[]|null
    */
    public function getAzs()
    {
        return $this->container['azs'];
    }

    /**
    * Sets azs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolNodeAz[]|null $azs **参数解释**：资源池中节点的AZ信息。
    *
    * @return $this
    */
    public function setAzs($azs)
    {
        $this->container['azs'] = $azs;
        return $this;
    }

    /**
    * Gets nodePool
    *  **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
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
    * @param string|null $nodePool **参数解释**：节点池名称。比如：nodePool-1。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNodePool($nodePool)
    {
        $this->container['nodePool'] = $nodePool;
        return $this;
    }

    /**
    * Gets taints
    *  **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Taints[]|null $taints **参数解释**：支持给创建出来的节点加taints来设置反亲和性，非特权池不能指定。
    *
    * @return $this
    */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**：k8s标签，格式为key/value键值对。
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
    * @param map[string,string]|null $labels **参数解释**：k8s标签，格式为key/value键值对。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：资源标签，非特权池不能指定。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UserTags[]|null $tags **参数解释**：资源标签，非特权池不能指定。
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
    *  **参数解释**：自定义数据盘（云硬盘）列表信息。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataVolumeItem[]|null $dataVolumes **参数解释**：自定义数据盘（云硬盘）列表信息。
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
    *  **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeGroupConfig[]|null $volumeGroupConfigs **参数解释**：磁盘高级配置。存在自定义数据盘时必须指定对应的高级配置。
    *
    * @return $this
    */
    public function setVolumeGroupConfigs($volumeGroupConfigs)
    {
        $this->container['volumeGroupConfigs'] = $volumeGroupConfigs;
        return $this;
    }

    /**
    * Gets os
    *  os
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Os|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Os|null $os os
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
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

