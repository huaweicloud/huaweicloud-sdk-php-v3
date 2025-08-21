<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NamespaceBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NamespaceBasicDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
    * path  **参数解释：** 路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * kind  **参数解释：** 类型。 **约束限制：** 不涉及。
    * fullPath  **参数解释：** 完整路径。 **约束限制：** 不涉及。
    * fullName  **参数解释：** 完整名称。 **约束限制：** 不涉及。
    * parentId  **参数解释：** 父级ID。 **约束限制：** 不涉及。
    * visibilityLevel  **参数解释：** 可见级别。 **约束限制：** 不涉及。
    * enableFileControl  **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    * ownerId  **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'path' => 'string',
            'developMode' => 'string',
            'kind' => 'string',
            'fullPath' => 'string',
            'fullName' => 'string',
            'parentId' => 'int',
            'visibilityLevel' => 'int',
            'enableFileControl' => 'bool',
            'ownerId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
    * path  **参数解释：** 路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * kind  **参数解释：** 类型。 **约束限制：** 不涉及。
    * fullPath  **参数解释：** 完整路径。 **约束限制：** 不涉及。
    * fullName  **参数解释：** 完整名称。 **约束限制：** 不涉及。
    * parentId  **参数解释：** 父级ID。 **约束限制：** 不涉及。
    * visibilityLevel  **参数解释：** 可见级别。 **约束限制：** 不涉及。
    * enableFileControl  **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    * ownerId  **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'developMode' => null,
        'kind' => null,
        'fullPath' => null,
        'fullName' => null,
        'parentId' => null,
        'visibilityLevel' => null,
        'enableFileControl' => null,
        'ownerId' => null
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
    * id  **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
    * path  **参数解释：** 路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * kind  **参数解释：** 类型。 **约束限制：** 不涉及。
    * fullPath  **参数解释：** 完整路径。 **约束限制：** 不涉及。
    * fullName  **参数解释：** 完整名称。 **约束限制：** 不涉及。
    * parentId  **参数解释：** 父级ID。 **约束限制：** 不涉及。
    * visibilityLevel  **参数解释：** 可见级别。 **约束限制：** 不涉及。
    * enableFileControl  **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    * ownerId  **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'path' => 'path',
            'developMode' => 'develop_mode',
            'kind' => 'kind',
            'fullPath' => 'full_path',
            'fullName' => 'full_name',
            'parentId' => 'parent_id',
            'visibilityLevel' => 'visibility_level',
            'enableFileControl' => 'enable_file_control',
            'ownerId' => 'owner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
    * path  **参数解释：** 路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * kind  **参数解释：** 类型。 **约束限制：** 不涉及。
    * fullPath  **参数解释：** 完整路径。 **约束限制：** 不涉及。
    * fullName  **参数解释：** 完整名称。 **约束限制：** 不涉及。
    * parentId  **参数解释：** 父级ID。 **约束限制：** 不涉及。
    * visibilityLevel  **参数解释：** 可见级别。 **约束限制：** 不涉及。
    * enableFileControl  **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    * ownerId  **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'path' => 'setPath',
            'developMode' => 'setDevelopMode',
            'kind' => 'setKind',
            'fullPath' => 'setFullPath',
            'fullName' => 'setFullName',
            'parentId' => 'setParentId',
            'visibilityLevel' => 'setVisibilityLevel',
            'enableFileControl' => 'setEnableFileControl',
            'ownerId' => 'setOwnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
    * name  **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
    * path  **参数解释：** 路径。 **约束限制：** 不涉及。
    * developMode  **参数解释：** 开发模式。 **约束限制：** 不涉及。
    * kind  **参数解释：** 类型。 **约束限制：** 不涉及。
    * fullPath  **参数解释：** 完整路径。 **约束限制：** 不涉及。
    * fullName  **参数解释：** 完整名称。 **约束限制：** 不涉及。
    * parentId  **参数解释：** 父级ID。 **约束限制：** 不涉及。
    * visibilityLevel  **参数解释：** 可见级别。 **约束限制：** 不涉及。
    * enableFileControl  **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    * ownerId  **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'path' => 'getPath',
            'developMode' => 'getDevelopMode',
            'kind' => 'getKind',
            'fullPath' => 'getFullPath',
            'fullName' => 'getFullName',
            'parentId' => 'getParentId',
            'visibilityLevel' => 'getVisibilityLevel',
            'enableFileControl' => 'getEnableFileControl',
            'ownerId' => 'getOwnerId'
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
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['visibilityLevel'] = isset($data['visibilityLevel']) ? $data['visibilityLevel'] : null;
        $this->container['enableFileControl'] = isset($data['enableFileControl']) ? $data['enableFileControl'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
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
            if (!is_null($this->container['kind']) && (mb_strlen($this->container['kind']) > 255)) {
                $invalidProperties[] = "invalid value for 'kind', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['kind']) && (mb_strlen($this->container['kind']) < 1)) {
                $invalidProperties[] = "invalid value for 'kind', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fullPath']) && (mb_strlen($this->container['fullPath']) > 255)) {
                $invalidProperties[] = "invalid value for 'fullPath', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fullPath']) && (mb_strlen($this->container['fullPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'fullPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) > 255)) {
                $invalidProperties[] = "invalid value for 'fullName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fullName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && ($this->container['parentId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentId']) && ($this->container['parentId'] < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['visibilityLevel']) && ($this->container['visibilityLevel'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'visibilityLevel', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['visibilityLevel']) && ($this->container['visibilityLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'visibilityLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerId']) && ($this->container['ownerId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ownerId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ownerId']) && ($this->container['ownerId'] < 1)) {
                $invalidProperties[] = "invalid value for 'ownerId', must be bigger than or equal to 1.";
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
    *  **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
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
    * @param int|null $id **参数解释：** 命名空间ID。 **约束限制：** 不涉及。
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
    *  **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
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
    * @param string|null $name **参数解释：** 命名空间名称。 **约束限制：** 不涉及。
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
    *  **参数解释：** 路径。 **约束限制：** 不涉及。
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
    * @param string|null $path **参数解释：** 路径。 **约束限制：** 不涉及。
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
    *  **参数解释：** 开发模式。 **约束限制：** 不涉及。
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
    * @param string|null $developMode **参数解释：** 开发模式。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets kind
    *  **参数解释：** 类型。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind **参数解释：** 类型。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets fullPath
    *  **参数解释：** 完整路径。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath **参数解释：** 完整路径。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets fullName
    *  **参数解释：** 完整名称。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param string|null $fullName **参数解释：** 完整名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：** 父级ID。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId **参数解释：** 父级ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets visibilityLevel
    *  **参数解释：** 可见级别。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getVisibilityLevel()
    {
        return $this->container['visibilityLevel'];
    }

    /**
    * Sets visibilityLevel
    *
    * @param int|null $visibilityLevel **参数解释：** 可见级别。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setVisibilityLevel($visibilityLevel)
    {
        $this->container['visibilityLevel'] = $visibilityLevel;
        return $this;
    }

    /**
    * Gets enableFileControl
    *  **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    *
    * @return bool|null
    */
    public function getEnableFileControl()
    {
        return $this->container['enableFileControl'];
    }

    /**
    * Sets enableFileControl
    *
    * @param bool|null $enableFileControl **参数解释：** 开启文件权限控制。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setEnableFileControl($enableFileControl)
    {
        $this->container['enableFileControl'] = $enableFileControl;
        return $this;
    }

    /**
    * Gets ownerId
    *  **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param int|null $ownerId **参数解释：** 所有人ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
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

