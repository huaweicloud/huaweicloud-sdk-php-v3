<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopologyEdge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopologyEdge';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  **参数解释**：边起点id。  **取值范围**：不涉及
    * target  **参数解释**：边终点id。  **取值范围**：不涉及
    * sourceType  **参数解释**：边起点类型。  **取值范围**：不涉及
    * targetType  **参数解释**：边终点类型。  **取值范围**：不涉及
    * label  **参数解释**：边label信息。  **取值范围**：不涉及
    * labelId  **参数解释**：label id。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'target' => 'string',
            'sourceType' => 'string',
            'targetType' => 'string',
            'label' => 'string',
            'labelId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  **参数解释**：边起点id。  **取值范围**：不涉及
    * target  **参数解释**：边终点id。  **取值范围**：不涉及
    * sourceType  **参数解释**：边起点类型。  **取值范围**：不涉及
    * targetType  **参数解释**：边终点类型。  **取值范围**：不涉及
    * label  **参数解释**：边label信息。  **取值范围**：不涉及
    * labelId  **参数解释**：label id。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'target' => null,
        'sourceType' => null,
        'targetType' => null,
        'label' => null,
        'labelId' => null
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
    * source  **参数解释**：边起点id。  **取值范围**：不涉及
    * target  **参数解释**：边终点id。  **取值范围**：不涉及
    * sourceType  **参数解释**：边起点类型。  **取值范围**：不涉及
    * targetType  **参数解释**：边终点类型。  **取值范围**：不涉及
    * label  **参数解释**：边label信息。  **取值范围**：不涉及
    * labelId  **参数解释**：label id。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'target' => 'target',
            'sourceType' => 'source_type',
            'targetType' => 'target_type',
            'label' => 'label',
            'labelId' => 'label_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  **参数解释**：边起点id。  **取值范围**：不涉及
    * target  **参数解释**：边终点id。  **取值范围**：不涉及
    * sourceType  **参数解释**：边起点类型。  **取值范围**：不涉及
    * targetType  **参数解释**：边终点类型。  **取值范围**：不涉及
    * label  **参数解释**：边label信息。  **取值范围**：不涉及
    * labelId  **参数解释**：label id。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'target' => 'setTarget',
            'sourceType' => 'setSourceType',
            'targetType' => 'setTargetType',
            'label' => 'setLabel',
            'labelId' => 'setLabelId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  **参数解释**：边起点id。  **取值范围**：不涉及
    * target  **参数解释**：边终点id。  **取值范围**：不涉及
    * sourceType  **参数解释**：边起点类型。  **取值范围**：不涉及
    * targetType  **参数解释**：边终点类型。  **取值范围**：不涉及
    * label  **参数解释**：边label信息。  **取值范围**：不涉及
    * labelId  **参数解释**：label id。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'target' => 'getTarget',
            'sourceType' => 'getSourceType',
            'targetType' => 'getTargetType',
            'label' => 'getLabel',
            'labelId' => 'getLabelId'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['labelId'] = isset($data['labelId']) ? $data['labelId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
        if ($this->container['targetType'] === null) {
            $invalidProperties[] = "'targetType' can't be null";
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
    * Gets source
    *  **参数解释**：边起点id。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string $source **参数解释**：边起点id。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets target
    *  **参数解释**：边终点id。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string $target **参数解释**：边终点id。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets sourceType
    *  **参数解释**：边起点类型。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string $sourceType **参数解释**：边起点类型。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets targetType
    *  **参数解释**：边终点类型。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string $targetType **参数解释**：边终点类型。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets label
    *  **参数解释**：边label信息。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label **参数解释**：边label信息。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets labelId
    *  **参数解释**：label id。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getLabelId()
    {
        return $this->container['labelId'];
    }

    /**
    * Sets labelId
    *
    * @param string|null $labelId **参数解释**：label id。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setLabelId($labelId)
    {
        $this->container['labelId'] = $labelId;
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

