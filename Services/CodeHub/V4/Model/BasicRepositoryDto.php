<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicRepositoryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicRepositoryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'namespace' => 'string',
            'path' => 'string',
            'developMode' => 'string',
            'visibility' => 'string',
            'security' => 'string',
            'nameWithNamespace' => 'string',
            'archived' => 'bool',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'namespace' => null,
        'path' => null,
        'developMode' => null,
        'visibility' => null,
        'security' => null,
        'nameWithNamespace' => null,
        'archived' => null,
        'status' => null
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
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'namespace' => 'namespace',
            'path' => 'path',
            'developMode' => 'develop_mode',
            'visibility' => 'visibility',
            'security' => 'security',
            'nameWithNamespace' => 'name_with_namespace',
            'archived' => 'archived',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'path' => 'setPath',
            'developMode' => 'setDevelopMode',
            'visibility' => 'setVisibility',
            'security' => 'setSecurity',
            'nameWithNamespace' => 'setNameWithNamespace',
            'archived' => 'setArchived',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库ID **约束限制：** 不涉及。
    * name  **参数解释：** 仓库名称。 **约束限制：** 不涉及。
    * namespace  **参数解释：** 命名空间。 **约束限制：** 不涉及。
    * path  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    * visibility  **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    * security  **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    * nameWithNamespace  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    * archived  **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    * status  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'path' => 'getPath',
            'developMode' => 'getDevelopMode',
            'visibility' => 'getVisibility',
            'security' => 'getSecurity',
            'nameWithNamespace' => 'getNameWithNamespace',
            'archived' => 'getArchived',
            'status' => 'getStatus'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 255)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) > 255)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['developMode']) && (mb_strlen($this->container['developMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'developMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) > 255)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['visibility']) && (mb_strlen($this->container['visibility']) < 1)) {
                $invalidProperties[] = "invalid value for 'visibility', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) > 255)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['security']) && (mb_strlen($this->container['security']) < 1)) {
                $invalidProperties[] = "invalid value for 'security', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets path
    *  **参数解释：** 仓库路径。 **约束限制：** 不涉及。
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
    * @param string|null $path **参数解释：** 仓库路径。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getDevelopMode()
    {
        return $this->container['developMode'];
    }

    /**
    * Sets developMode
    *
    * @param string|null $developMode **参数解释：** 开发模式。 枚举值：normal：合并请求模式；CR：变更请求模式。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets visibility
    *  **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility **参数解释：** 仓库可见性。 枚举值：private：私有；internal：内部公开；public：公开。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets security
    *  **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
    * Sets security
    *
    * @param string|null $security **参数解释：** 安全级别。 枚举值：product_internal：项目内公开；tenant_internal：租户内公开。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;
        return $this;
    }

    /**
    * Gets nameWithNamespace
    *  **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
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
    * @param string|null $nameWithNamespace **参数解释：** 包含命名空间的仓库名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived **参数解释：** 是否归档。true：已归档；false：未归档。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 仓库状态。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

