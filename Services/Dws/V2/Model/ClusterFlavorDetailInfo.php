<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterFlavorDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterFlavorDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * specName  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * currentNode  **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * datastoreVersion  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * volumeNode  volumeNode
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'specName' => 'string',
            'currentNode' => 'int',
            'minNode' => 'int',
            'maxNode' => 'int',
            'classify' => 'string',
            'datastoreVersion' => 'string',
            'attribute' => '\HuaweiCloud\SDK\Dws\V2\Model\FlavorAttributeInfo[]',
            'volumeNode' => '\HuaweiCloud\SDK\Dws\V2\Model\FlavorVolumeNodeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * specName  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * currentNode  **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * datastoreVersion  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * volumeNode  volumeNode
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'specName' => null,
        'currentNode' => 'int32',
        'minNode' => 'int32',
        'maxNode' => 'int32',
        'classify' => null,
        'datastoreVersion' => null,
        'attribute' => null,
        'volumeNode' => null
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
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * specName  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * currentNode  **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * datastoreVersion  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * volumeNode  volumeNode
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'specName' => 'spec_name',
            'currentNode' => 'current_node',
            'minNode' => 'min_node',
            'maxNode' => 'max_node',
            'classify' => 'classify',
            'datastoreVersion' => 'datastore_version',
            'attribute' => 'attribute',
            'volumeNode' => 'volume_node'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * specName  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * currentNode  **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * datastoreVersion  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * volumeNode  volumeNode
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'specName' => 'setSpecName',
            'currentNode' => 'setCurrentNode',
            'minNode' => 'setMinNode',
            'maxNode' => 'setMaxNode',
            'classify' => 'setClassify',
            'datastoreVersion' => 'setDatastoreVersion',
            'attribute' => 'setAttribute',
            'volumeNode' => 'setVolumeNode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * specName  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * currentNode  **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * datastoreVersion  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * volumeNode  volumeNode
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'specName' => 'getSpecName',
            'currentNode' => 'getCurrentNode',
            'minNode' => 'getMinNode',
            'maxNode' => 'getMaxNode',
            'classify' => 'getClassify',
            'datastoreVersion' => 'getDatastoreVersion',
            'attribute' => 'getAttribute',
            'volumeNode' => 'getVolumeNode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['specName'] = isset($data['specName']) ? $data['specName'] : null;
        $this->container['currentNode'] = isset($data['currentNode']) ? $data['currentNode'] : null;
        $this->container['minNode'] = isset($data['minNode']) ? $data['minNode'] : null;
        $this->container['maxNode'] = isset($data['maxNode']) ? $data['maxNode'] : null;
        $this->container['classify'] = isset($data['classify']) ? $data['classify'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['attribute'] = isset($data['attribute']) ? $data['attribute'] : null;
        $this->container['volumeNode'] = isset($data['volumeNode']) ? $data['volumeNode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['specName'] === null) {
            $invalidProperties[] = "'specName' can't be null";
        }
        if ($this->container['currentNode'] === null) {
            $invalidProperties[] = "'currentNode' can't be null";
        }
        if ($this->container['minNode'] === null) {
            $invalidProperties[] = "'minNode' can't be null";
        }
        if ($this->container['maxNode'] === null) {
            $invalidProperties[] = "'maxNode' can't be null";
        }
        if ($this->container['classify'] === null) {
            $invalidProperties[] = "'classify' can't be null";
        }
        if ($this->container['datastoreVersion'] === null) {
            $invalidProperties[] = "'datastoreVersion' can't be null";
        }
        if ($this->container['attribute'] === null) {
            $invalidProperties[] = "'attribute' can't be null";
        }
        if ($this->container['volumeNode'] === null) {
            $invalidProperties[] = "'volumeNode' can't be null";
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
    * Gets id
    *  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： 规格ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets specName
    *  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getSpecName()
    {
        return $this->container['specName'];
    }

    /**
    * Sets specName
    *
    * @param string $specName **参数解释**： 规格编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSpecName($specName)
    {
        $this->container['specName'] = $specName;
        return $this;
    }

    /**
    * Gets currentNode
    *  **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getCurrentNode()
    {
        return $this->container['currentNode'];
    }

    /**
    * Sets currentNode
    *
    * @param int $currentNode **参数解释**： 当前节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentNode($currentNode)
    {
        $this->container['currentNode'] = $currentNode;
        return $this;
    }

    /**
    * Gets minNode
    *  **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getMinNode()
    {
        return $this->container['minNode'];
    }

    /**
    * Sets minNode
    *
    * @param int $minNode **参数解释**： 最小节点阈值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinNode($minNode)
    {
        $this->container['minNode'] = $minNode;
        return $this;
    }

    /**
    * Gets maxNode
    *  **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getMaxNode()
    {
        return $this->container['maxNode'];
    }

    /**
    * Sets maxNode
    *
    * @param int $maxNode **参数解释**： 最大节点阈值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxNode($maxNode)
    {
        $this->container['maxNode'] = $maxNode;
        return $this;
    }

    /**
    * Gets classify
    *  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getClassify()
    {
        return $this->container['classify'];
    }

    /**
    * Sets classify
    *
    * @param string $classify **参数解释**： 规格类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClassify($classify)
    {
        $this->container['classify'] = $classify;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string $datastoreVersion **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets attribute
    *  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\FlavorAttributeInfo[]
    */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
    * Sets attribute
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\FlavorAttributeInfo[] $attribute **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;
        return $this;
    }

    /**
    * Gets volumeNode
    *  volumeNode
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\FlavorVolumeNodeInfo
    */
    public function getVolumeNode()
    {
        return $this->container['volumeNode'];
    }

    /**
    * Sets volumeNode
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\FlavorVolumeNodeInfo $volumeNode volumeNode
    *
    * @return $this
    */
    public function setVolumeNode($volumeNode)
    {
        $this->container['volumeNode'] = $volumeNode;
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

