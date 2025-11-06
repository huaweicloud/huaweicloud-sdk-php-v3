<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimpleDiffDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimpleDiffDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addedLine  **参数解释：** 增加行数。 **取值范围：** 不涉及。
    * deletedLine  **参数解释：** 删除行数。 **取值范围：** 不涉及。
    * path  **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addedLine' => 'int',
            'deletedLine' => 'int',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addedLine  **参数解释：** 增加行数。 **取值范围：** 不涉及。
    * deletedLine  **参数解释：** 删除行数。 **取值范围：** 不涉及。
    * path  **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addedLine' => 'int32',
        'deletedLine' => 'int32',
        'path' => null
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
    * addedLine  **参数解释：** 增加行数。 **取值范围：** 不涉及。
    * deletedLine  **参数解释：** 删除行数。 **取值范围：** 不涉及。
    * path  **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addedLine' => 'added_line',
            'deletedLine' => 'deleted_line',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addedLine  **参数解释：** 增加行数。 **取值范围：** 不涉及。
    * deletedLine  **参数解释：** 删除行数。 **取值范围：** 不涉及。
    * path  **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'addedLine' => 'setAddedLine',
            'deletedLine' => 'setDeletedLine',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addedLine  **参数解释：** 增加行数。 **取值范围：** 不涉及。
    * deletedLine  **参数解释：** 删除行数。 **取值范围：** 不涉及。
    * path  **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'addedLine' => 'getAddedLine',
            'deletedLine' => 'getDeletedLine',
            'path' => 'getPath'
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
        $this->container['addedLine'] = isset($data['addedLine']) ? $data['addedLine'] : null;
        $this->container['deletedLine'] = isset($data['deletedLine']) ? $data['deletedLine'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
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
    * Gets addedLine
    *  **参数解释：** 增加行数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getAddedLine()
    {
        return $this->container['addedLine'];
    }

    /**
    * Sets addedLine
    *
    * @param int|null $addedLine **参数解释：** 增加行数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAddedLine($addedLine)
    {
        $this->container['addedLine'] = $addedLine;
        return $this;
    }

    /**
    * Gets deletedLine
    *  **参数解释：** 删除行数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDeletedLine()
    {
        return $this->container['deletedLine'];
    }

    /**
    * Sets deletedLine
    *
    * @param int|null $deletedLine **参数解释：** 删除行数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDeletedLine($deletedLine)
    {
        $this->container['deletedLine'] = $deletedLine;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

