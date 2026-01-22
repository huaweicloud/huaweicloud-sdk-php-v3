<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EntityInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EntityInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entityId  **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    * entityName  **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entityId' => 'string',
            'entityName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entityId  **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    * entityName  **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entityId' => null,
        'entityName' => null
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
    * entityId  **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    * entityName  **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entityId' => 'entity_id',
            'entityName' => 'entity_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entityId  **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    * entityName  **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'entityId' => 'setEntityId',
            'entityName' => 'setEntityName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entityId  **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    * entityName  **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'entityId' => 'getEntityId',
            'entityName' => 'getEntityName'
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
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['entityName'] = isset($data['entityName']) ? $data['entityName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['entityId'] === null) {
            $invalidProperties[] = "'entityId' can't be null";
        }
        if ($this->container['entityName'] === null) {
            $invalidProperties[] = "'entityName' can't be null";
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
    * Gets entityId
    *  **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string $entityId **参数解释：** 组ID或节点ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
        return $this;
    }

    /**
    * Gets entityName
    *  **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getEntityName()
    {
        return $this->container['entityName'];
    }

    /**
    * Sets entityName
    *
    * @param string $entityName **参数解释：** 组名称或节点名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEntityName($entityName)
    {
        $this->container['entityName'] = $entityName;
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

