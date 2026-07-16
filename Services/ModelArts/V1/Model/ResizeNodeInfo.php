<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchUid  **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * deleteNodeNames  **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchUid' => 'string',
            'deleteNodeNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchUid  **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * deleteNodeNames  **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchUid' => null,
        'deleteNodeNames' => null
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
    * batchUid  **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * deleteNodeNames  **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchUid' => 'batchUID',
            'deleteNodeNames' => 'deleteNodeNames'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchUid  **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * deleteNodeNames  **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'batchUid' => 'setBatchUid',
            'deleteNodeNames' => 'setDeleteNodeNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchUid  **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * deleteNodeNames  **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'batchUid' => 'getBatchUid',
            'deleteNodeNames' => 'getDeleteNodeNames'
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
        $this->container['batchUid'] = isset($data['batchUid']) ? $data['batchUid'] : null;
        $this->container['deleteNodeNames'] = isset($data['deleteNodeNames']) ? $data['deleteNodeNames'] : null;
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
    * Gets batchUid
    *  **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getBatchUid()
    {
        return $this->container['batchUid'];
    }

    /**
    * Sets batchUid
    *
    * @param string|null $batchUid **参数解释**：节点批次ID，批次变更时需要，可以从节点的os.modelarts.node/batch.uid标签中获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setBatchUid($batchUid)
    {
        $this->container['batchUid'] = $batchUid;
        return $this;
    }

    /**
    * Gets deleteNodeNames
    *  **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @return string[]|null
    */
    public function getDeleteNodeNames()
    {
        return $this->container['deleteNodeNames'];
    }

    /**
    * Sets deleteNodeNames
    *
    * @param string[]|null $deleteNodeNames **参数解释**：批次缩容场景，指定要缩容的节点名称列表。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setDeleteNodeNames($deleteNodeNames)
    {
        $this->container['deleteNodeNames'] = $deleteNodeNames;
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

