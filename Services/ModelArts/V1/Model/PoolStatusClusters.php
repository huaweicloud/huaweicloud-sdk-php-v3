<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolStatusClusters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolStatus_clusters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：集群名称。 **取值范围**：不涉及。
    * clusterFlavor  **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    * type  **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    * version  **参数解释**：集群的版本号。 **取值范围**：不涉及。
    * plugins  plugins
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'clusterFlavor' => 'string',
            'type' => 'string',
            'version' => 'string',
            'plugins' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusClustersPlugins'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：集群名称。 **取值范围**：不涉及。
    * clusterFlavor  **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    * type  **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    * version  **参数解释**：集群的版本号。 **取值范围**：不涉及。
    * plugins  plugins
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'clusterFlavor' => null,
        'type' => null,
        'version' => null,
        'plugins' => null
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
    * name  **参数解释**：集群名称。 **取值范围**：不涉及。
    * clusterFlavor  **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    * type  **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    * version  **参数解释**：集群的版本号。 **取值范围**：不涉及。
    * plugins  plugins
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'clusterFlavor' => 'clusterFlavor',
            'type' => 'type',
            'version' => 'version',
            'plugins' => 'plugins'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：集群名称。 **取值范围**：不涉及。
    * clusterFlavor  **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    * type  **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    * version  **参数解释**：集群的版本号。 **取值范围**：不涉及。
    * plugins  plugins
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'clusterFlavor' => 'setClusterFlavor',
            'type' => 'setType',
            'version' => 'setVersion',
            'plugins' => 'setPlugins'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：集群名称。 **取值范围**：不涉及。
    * clusterFlavor  **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    * type  **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    * version  **参数解释**：集群的版本号。 **取值范围**：不涉及。
    * plugins  plugins
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'clusterFlavor' => 'getClusterFlavor',
            'type' => 'getType',
            'version' => 'getVersion',
            'plugins' => 'getPlugins'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['clusterFlavor'] = isset($data['clusterFlavor']) ? $data['clusterFlavor'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['plugins'] = isset($data['plugins']) ? $data['plugins'] : null;
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
    * Gets name
    *  **参数解释**：集群名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：集群名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets clusterFlavor
    *  **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getClusterFlavor()
    {
        return $this->container['clusterFlavor'];
    }

    /**
    * Sets clusterFlavor
    *
    * @param string|null $clusterFlavor **参数解释**：标准池的集群规格。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setClusterFlavor($clusterFlavor)
    {
        $this->container['clusterFlavor'] = $clusterFlavor;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：资源池集群的类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**：集群的版本号。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**：集群的版本号。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets plugins
    *  plugins
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusClustersPlugins|null
    */
    public function getPlugins()
    {
        return $this->container['plugins'];
    }

    /**
    * Sets plugins
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolStatusClustersPlugins|null $plugins plugins
    *
    * @return $this
    */
    public function setPlugins($plugins)
    {
        $this->container['plugins'] = $plugins;
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

