<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionResourcesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionResourcesDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 资源id。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameDisplay  **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameCnDisplay  **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scope  **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'nameCn' => 'string',
            'resourceNameDisplay' => 'string',
            'resourceNameCnDisplay' => 'string',
            'path' => 'string',
            'scope' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 资源id。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameDisplay  **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameCnDisplay  **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scope  **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'nameCn' => null,
        'resourceNameDisplay' => null,
        'resourceNameCnDisplay' => null,
        'path' => null,
        'scope' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  **参数解释：** 资源id。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameDisplay  **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameCnDisplay  **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scope  **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'nameCn' => 'name_cn',
            'resourceNameDisplay' => 'resource_name_display',
            'resourceNameCnDisplay' => 'resource_name_cn_display',
            'path' => 'path',
            'scope' => 'scope',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 资源id。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameDisplay  **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameCnDisplay  **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scope  **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'nameCn' => 'setNameCn',
            'resourceNameDisplay' => 'setResourceNameDisplay',
            'resourceNameCnDisplay' => 'setResourceNameCnDisplay',
            'path' => 'setPath',
            'scope' => 'setScope',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 资源id。
    * name  **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameDisplay  **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * resourceNameCnDisplay  **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * path  **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scope  **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'nameCn' => 'getNameCn',
            'resourceNameDisplay' => 'getResourceNameDisplay',
            'resourceNameCnDisplay' => 'getResourceNameCnDisplay',
            'path' => 'getPath',
            'scope' => 'getScope',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['resourceNameDisplay'] = isset($data['resourceNameDisplay']) ? $data['resourceNameDisplay'] : null;
        $this->container['resourceNameCnDisplay'] = isset($data['resourceNameCnDisplay']) ? $data['resourceNameCnDisplay'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceNameDisplay']) && (mb_strlen($this->container['resourceNameDisplay']) > 1000)) {
                $invalidProperties[] = "invalid value for 'resourceNameDisplay', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['resourceNameDisplay']) && (mb_strlen($this->container['resourceNameDisplay']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceNameDisplay', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceNameCnDisplay']) && (mb_strlen($this->container['resourceNameCnDisplay']) > 1000)) {
                $invalidProperties[] = "invalid value for 'resourceNameCnDisplay', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['resourceNameCnDisplay']) && (mb_strlen($this->container['resourceNameCnDisplay']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceNameCnDisplay', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1000)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 1000)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 1)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 资源id。
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
    * @param int|null $id **参数解释：** 资源id。
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
    *  **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $name **参数解释：** 资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameCn
    *  **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn **参数解释：** 资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets resourceNameDisplay
    *  **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getResourceNameDisplay()
    {
        return $this->container['resourceNameDisplay'];
    }

    /**
    * Sets resourceNameDisplay
    *
    * @param string|null $resourceNameDisplay **参数解释：** 禁用资源名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setResourceNameDisplay($resourceNameDisplay)
    {
        $this->container['resourceNameDisplay'] = $resourceNameDisplay;
        return $this;
    }

    /**
    * Gets resourceNameCnDisplay
    *  **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getResourceNameCnDisplay()
    {
        return $this->container['resourceNameCnDisplay'];
    }

    /**
    * Sets resourceNameCnDisplay
    *
    * @param string|null $resourceNameCnDisplay **参数解释：** 禁用资源中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setResourceNameCnDisplay($resourceNameCnDisplay)
    {
        $this->container['resourceNameCnDisplay'] = $resourceNameCnDisplay;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $path **参数解释：** 权限路径。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释：** 资源类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

