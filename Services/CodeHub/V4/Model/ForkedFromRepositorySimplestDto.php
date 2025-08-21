<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ForkedFromRepositorySimplestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ForkedFromRepositorySimplestDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * projectId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nameWithNamespace' => 'string',
            'pathWithNamespace' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'id' => 'int',
            'projectId' => 'string',
            'projectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * projectId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nameWithNamespace' => null,
        'pathWithNamespace' => null,
        'name' => null,
        'namespace' => null,
        'id' => null,
        'projectId' => null,
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
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * projectId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nameWithNamespace' => 'name_with_namespace',
            'pathWithNamespace' => 'path_with_namespace',
            'name' => 'name',
            'namespace' => 'namespace',
            'id' => 'id',
            'projectId' => 'project_id',
            'projectName' => 'project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * projectId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nameWithNamespace' => 'setNameWithNamespace',
            'pathWithNamespace' => 'setPathWithNamespace',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nameWithNamespace  **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    * pathWithNamespace  **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * projectId  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    * projectName  **参数解释：** 产品名称。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nameWithNamespace' => 'getNameWithNamespace',
            'pathWithNamespace' => 'getPathWithNamespace',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'id' => 'getId',
            'projectId' => 'getProjectId',
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
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    * Gets nameWithNamespace
    *  **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getNameWithNamespace()
    {
        return $this->container['nameWithNamespace'];
    }

    /**
    * Sets nameWithNamespace
    *
    * @param string|null $nameWithNamespace **参数解释：** 带命名空间的仓库名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets pathWithNamespace
    *  **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
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
    * @param string|null $pathWithNamespace **参数解释：** 带命名空间的仓库路径。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
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
    * @param string|null $name **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释：** 命名空间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 仓库ID **约束限制：** 不涉及。
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
    * @param int|null $id **参数解释：** 仓库ID **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 产品ID。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 产品ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 产品名称。 **约束限制：** 不涉及。
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
    * @param string|null $projectName **参数解释：** 产品名称。 **约束限制：** 不涉及。
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

