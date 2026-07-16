<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
    * os  os
    * hostNetwork  hostNetwork
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：数据盘信息。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'os' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Os',
            'hostNetwork' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork',
            'rootVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeVO',
            'dataVolumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeVO[]',
            'extendParams' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceExtendParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
    * os  os
    * hostNetwork  hostNetwork
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：数据盘信息。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'os' => null,
        'hostNetwork' => null,
        'rootVolume' => null,
        'dataVolumes' => null,
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
    * flavor  **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
    * os  os
    * hostNetwork  hostNetwork
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：数据盘信息。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'os' => 'os',
            'hostNetwork' => 'hostNetwork',
            'rootVolume' => 'rootVolume',
            'dataVolumes' => 'dataVolumes',
            'extendParams' => 'extendParams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
    * os  os
    * hostNetwork  hostNetwork
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：数据盘信息。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'os' => 'setOs',
            'hostNetwork' => 'setHostNetwork',
            'rootVolume' => 'setRootVolume',
            'dataVolumes' => 'setDataVolumes',
            'extendParams' => 'setExtendParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
    * os  os
    * hostNetwork  hostNetwork
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**：数据盘信息。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'os' => 'getOs',
            'hostNetwork' => 'getHostNetwork',
            'rootVolume' => 'getRootVolume',
            'dataVolumes' => 'getDataVolumes',
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
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
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
    *  **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
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
    * @param string $flavor **参数解释**：节点资源规格ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
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
    * Gets hostNetwork
    *  hostNetwork
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork|null
    */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
    * Sets hostNetwork
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeNetwork|null $hostNetwork hostNetwork
    *
    * @return $this
    */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeVO|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeVO|null $rootVolume rootVolume
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
    *  **参数解释**：数据盘信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeVO[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeVO[]|null $dataVolumes **参数解释**：数据盘信息。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
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

