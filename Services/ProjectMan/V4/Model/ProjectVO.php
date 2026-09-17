<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identifier  **参数解释：** 项目uuid **取值范围：** 不涉及。
    * name  **参数解释：** 项目名称 **取值范围：** 不涉及。
    * id  **参数解释：** 项目数字id **取值范围：** 不涉及。
    * projectType  **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identifier' => 'string',
            'name' => 'string',
            'id' => 'int',
            'projectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identifier  **参数解释：** 项目uuid **取值范围：** 不涉及。
    * name  **参数解释：** 项目名称 **取值范围：** 不涉及。
    * id  **参数解释：** 项目数字id **取值范围：** 不涉及。
    * projectType  **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identifier' => null,
        'name' => null,
        'id' => 'int32',
        'projectType' => null
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
    * identifier  **参数解释：** 项目uuid **取值范围：** 不涉及。
    * name  **参数解释：** 项目名称 **取值范围：** 不涉及。
    * id  **参数解释：** 项目数字id **取值范围：** 不涉及。
    * projectType  **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identifier' => 'identifier',
            'name' => 'name',
            'id' => 'id',
            'projectType' => 'project_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identifier  **参数解释：** 项目uuid **取值范围：** 不涉及。
    * name  **参数解释：** 项目名称 **取值范围：** 不涉及。
    * id  **参数解释：** 项目数字id **取值范围：** 不涉及。
    * projectType  **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @var string[]
    */
    protected static $setters = [
            'identifier' => 'setIdentifier',
            'name' => 'setName',
            'id' => 'setId',
            'projectType' => 'setProjectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identifier  **参数解释：** 项目uuid **取值范围：** 不涉及。
    * name  **参数解释：** 项目名称 **取值范围：** 不涉及。
    * id  **参数解释：** 项目数字id **取值范围：** 不涉及。
    * projectType  **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @var string[]
    */
    protected static $getters = [
            'identifier' => 'getIdentifier',
            'name' => 'getName',
            'id' => 'getId',
            'projectType' => 'getProjectType'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
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
    * Gets identifier
    *  **参数解释：** 项目uuid **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier **参数解释：** 项目uuid **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 项目名称 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 项目名称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 项目数字id **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 项目数字id **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectType
    *  **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @return string|null
    */
    public function getProjectType()
    {
        return $this->container['projectType'];
    }

    /**
    * Sets projectType
    *
    * @param string|null $projectType **参数解释：** 项目类型 **取值范围：** scrum。
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
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

