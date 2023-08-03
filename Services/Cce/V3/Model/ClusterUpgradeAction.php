<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterUpgradeAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterUpgradeAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addons  插件配置列表
    * nodeOrder  节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    * nodePoolOrder  节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    * strategy  strategy
    * targetVersion  目标集群版本，例如\"v1.23\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addons' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeAddonConfig[]',
            'nodeOrder' => 'map[string,\HuaweiCloud\SDK\Cce\V3\Model\NodePriority[]]',
            'nodePoolOrder' => 'map[string,int]',
            'strategy' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy',
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addons  插件配置列表
    * nodeOrder  节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    * nodePoolOrder  节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    * strategy  strategy
    * targetVersion  目标集群版本，例如\"v1.23\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addons' => null,
        'nodeOrder' => null,
        'nodePoolOrder' => null,
        'strategy' => null,
        'targetVersion' => null
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
    * addons  插件配置列表
    * nodeOrder  节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    * nodePoolOrder  节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    * strategy  strategy
    * targetVersion  目标集群版本，例如\"v1.23\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addons' => 'addons',
            'nodeOrder' => 'nodeOrder',
            'nodePoolOrder' => 'nodePoolOrder',
            'strategy' => 'strategy',
            'targetVersion' => 'targetVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addons  插件配置列表
    * nodeOrder  节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    * nodePoolOrder  节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    * strategy  strategy
    * targetVersion  目标集群版本，例如\"v1.23\"
    *
    * @var string[]
    */
    protected static $setters = [
            'addons' => 'setAddons',
            'nodeOrder' => 'setNodeOrder',
            'nodePoolOrder' => 'setNodePoolOrder',
            'strategy' => 'setStrategy',
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addons  插件配置列表
    * nodeOrder  节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    * nodePoolOrder  节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    * strategy  strategy
    * targetVersion  目标集群版本，例如\"v1.23\"
    *
    * @var string[]
    */
    protected static $getters = [
            'addons' => 'getAddons',
            'nodeOrder' => 'getNodeOrder',
            'nodePoolOrder' => 'getNodePoolOrder',
            'strategy' => 'getStrategy',
            'targetVersion' => 'getTargetVersion'
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
        $this->container['addons'] = isset($data['addons']) ? $data['addons'] : null;
        $this->container['nodeOrder'] = isset($data['nodeOrder']) ? $data['nodeOrder'] : null;
        $this->container['nodePoolOrder'] = isset($data['nodePoolOrder']) ? $data['nodePoolOrder'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['strategy'] === null) {
            $invalidProperties[] = "'strategy' can't be null";
        }
        if ($this->container['targetVersion'] === null) {
            $invalidProperties[] = "'targetVersion' can't be null";
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
    * Gets addons
    *  插件配置列表
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeAddonConfig[]|null
    */
    public function getAddons()
    {
        return $this->container['addons'];
    }

    /**
    * Sets addons
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeAddonConfig[]|null $addons 插件配置列表
    *
    * @return $this
    */
    public function setAddons($addons)
    {
        $this->container['addons'] = $addons;
        return $this;
    }

    /**
    * Gets nodeOrder
    *  节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    *
    * @return map[string,\HuaweiCloud\SDK\Cce\V3\Model\NodePriority[]]|null
    */
    public function getNodeOrder()
    {
        return $this->container['nodeOrder'];
    }

    /**
    * Sets nodeOrder
    *
    * @param map[string,\HuaweiCloud\SDK\Cce\V3\Model\NodePriority[]]|null $nodeOrder 节点池内节点升级顺序配置。 > key表示节点池ID，默认节点池取值为\"DefaultPool\"
    *
    * @return $this
    */
    public function setNodeOrder($nodeOrder)
    {
        $this->container['nodeOrder'] = $nodeOrder;
        return $this;
    }

    /**
    * Gets nodePoolOrder
    *  节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @return map[string,int]|null
    */
    public function getNodePoolOrder()
    {
        return $this->container['nodePoolOrder'];
    }

    /**
    * Sets nodePoolOrder
    *
    * @param map[string,int]|null $nodePoolOrder 节点池升级顺序配置，key/value对格式。 > key表示节点池ID，默认节点池取值为\"DefaultPool\" > value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @return $this
    */
    public function setNodePoolOrder($nodePoolOrder)
    {
        $this->container['nodePoolOrder'] = $nodePoolOrder;
        return $this;
    }

    /**
    * Gets strategy
    *  strategy
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy $strategy strategy
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets targetVersion
    *  目标集群版本，例如\"v1.23\"
    *
    * @return string
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string $targetVersion 目标集群版本，例如\"v1.23\"
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
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

