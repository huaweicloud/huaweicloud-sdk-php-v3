<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryBriefDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryBriefDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 仓库名称。 **取值范围：** 不涉及。
    * path  **参数解释：** 仓库路径。 **取值范围：** 不涉及。
    * pathWithNamespace  **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'path' => 'string',
            'pathWithNamespace' => 'string',
            'projectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 仓库名称。 **取值范围：** 不涉及。
    * path  **参数解释：** 仓库路径。 **取值范围：** 不涉及。
    * pathWithNamespace  **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'pathWithNamespace' => null,
        'projectName' => null
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
    * id  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 仓库名称。 **取值范围：** 不涉及。
    * path  **参数解释：** 仓库路径。 **取值范围：** 不涉及。
    * pathWithNamespace  **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'path' => 'path',
            'pathWithNamespace' => 'path_with_namespace',
            'projectName' => 'project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 仓库名称。 **取值范围：** 不涉及。
    * path  **参数解释：** 仓库路径。 **取值范围：** 不涉及。
    * pathWithNamespace  **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'path' => 'setPath',
            'pathWithNamespace' => 'setPathWithNamespace',
            'projectName' => 'setProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 仓库名称。 **取值范围：** 不涉及。
    * path  **参数解释：** 仓库路径。 **取值范围：** 不涉及。
    * pathWithNamespace  **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'path' => 'getPath',
            'pathWithNamespace' => 'getPathWithNamespace',
            'projectName' => 'getProjectName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 200)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
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
    * @param int|null $id **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 仓库名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 仓库名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 仓库路径。 **取值范围：** 不涉及。
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
    * @param string|null $path **参数解释：** 仓库路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets pathWithNamespace
    *  **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPathWithNamespace()
    {
        return $this->container['pathWithNamespace'];
    }

    /**
    * Sets pathWithNamespace
    *
    * @param string|null $pathWithNamespace **参数解释：** 仓库完整路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释：** 仓库所属项目名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
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

