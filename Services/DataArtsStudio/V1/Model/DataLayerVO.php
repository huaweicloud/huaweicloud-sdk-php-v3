<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataLayerVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataLayerVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数仓分层的ID，ID字符串。
    * level  层级，从1开始。
    * name  中文名称。
    * type  type
    * description  数仓分层描述。
    * isDefault  是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    * disabledCustomizedFieldIds  该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'level' => 'int',
            'name' => 'string',
            'type' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\LayerType',
            'description' => 'string',
            'isDefault' => 'bool',
            'disabledCustomizedFieldIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数仓分层的ID，ID字符串。
    * level  层级，从1开始。
    * name  中文名称。
    * type  type
    * description  数仓分层描述。
    * isDefault  是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    * disabledCustomizedFieldIds  该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'level' => null,
        'name' => null,
        'type' => null,
        'description' => null,
        'isDefault' => null,
        'disabledCustomizedFieldIds' => null
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
    * id  数仓分层的ID，ID字符串。
    * level  层级，从1开始。
    * name  中文名称。
    * type  type
    * description  数仓分层描述。
    * isDefault  是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    * disabledCustomizedFieldIds  该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'level' => 'level',
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'isDefault' => 'is_default',
            'disabledCustomizedFieldIds' => 'disabled_customized_field_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数仓分层的ID，ID字符串。
    * level  层级，从1开始。
    * name  中文名称。
    * type  type
    * description  数仓分层描述。
    * isDefault  是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    * disabledCustomizedFieldIds  该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'level' => 'setLevel',
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'isDefault' => 'setIsDefault',
            'disabledCustomizedFieldIds' => 'setDisabledCustomizedFieldIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数仓分层的ID，ID字符串。
    * level  层级，从1开始。
    * name  中文名称。
    * type  type
    * description  数仓分层描述。
    * isDefault  是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    * disabledCustomizedFieldIds  该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'level' => 'getLevel',
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'isDefault' => 'getIsDefault',
            'disabledCustomizedFieldIds' => 'getDisabledCustomizedFieldIds'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['disabledCustomizedFieldIds'] = isset($data['disabledCustomizedFieldIds']) ? $data['disabledCustomizedFieldIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 10)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
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
    *  数仓分层的ID，ID字符串。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 数仓分层的ID，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets level
    *  层级，从1开始。
    *
    * @return int
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int $level 层级，从1开始。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets name
    *  中文名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 中文名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\LayerType
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\LayerType $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  数仓分层描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 数仓分层描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否是不可删除的默认分层，包含SDI\\DWR\\DM。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets disabledCustomizedFieldIds
    *  该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @return string[]|null
    */
    public function getDisabledCustomizedFieldIds()
    {
        return $this->container['disabledCustomizedFieldIds'];
    }

    /**
    * Sets disabledCustomizedFieldIds
    *
    * @param string[]|null $disabledCustomizedFieldIds 该分层禁用的自定义项的ID列表，包括表级自定义项和字段级自定义项。
    *
    * @return $this
    */
    public function setDisabledCustomizedFieldIds($disabledCustomizedFieldIds)
    {
        $this->container['disabledCustomizedFieldIds'] = $disabledCustomizedFieldIds;
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

