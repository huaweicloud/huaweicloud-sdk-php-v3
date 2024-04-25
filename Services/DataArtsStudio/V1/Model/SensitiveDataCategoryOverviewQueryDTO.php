<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SensitiveDataCategoryOverviewQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SensitiveDataCategoryOverviewQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rootId  当前分类节点的根节点id,根节点的
    * parentId  当前分类节点的父节点id
    * categoryId  分类的Id
    * categoryName  分类的名称
    * categoryPath  分类path
    * count  当前分类下的敏感字段数量
    * children  当前分类的子节点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rootId' => 'string',
            'parentId' => 'string',
            'categoryId' => 'string',
            'categoryName' => 'string',
            'categoryPath' => 'string',
            'count' => 'int',
            'children' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataCategoryOverviewQueryDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rootId  当前分类节点的根节点id,根节点的
    * parentId  当前分类节点的父节点id
    * categoryId  分类的Id
    * categoryName  分类的名称
    * categoryPath  分类path
    * count  当前分类下的敏感字段数量
    * children  当前分类的子节点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rootId' => 'int64',
        'parentId' => null,
        'categoryId' => null,
        'categoryName' => null,
        'categoryPath' => null,
        'count' => 'int64',
        'children' => null
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
    * rootId  当前分类节点的根节点id,根节点的
    * parentId  当前分类节点的父节点id
    * categoryId  分类的Id
    * categoryName  分类的名称
    * categoryPath  分类path
    * count  当前分类下的敏感字段数量
    * children  当前分类的子节点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rootId' => 'root_id',
            'parentId' => 'parent_id',
            'categoryId' => 'category_id',
            'categoryName' => 'category_name',
            'categoryPath' => 'category_path',
            'count' => 'count',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rootId  当前分类节点的根节点id,根节点的
    * parentId  当前分类节点的父节点id
    * categoryId  分类的Id
    * categoryName  分类的名称
    * categoryPath  分类path
    * count  当前分类下的敏感字段数量
    * children  当前分类的子节点
    *
    * @var string[]
    */
    protected static $setters = [
            'rootId' => 'setRootId',
            'parentId' => 'setParentId',
            'categoryId' => 'setCategoryId',
            'categoryName' => 'setCategoryName',
            'categoryPath' => 'setCategoryPath',
            'count' => 'setCount',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rootId  当前分类节点的根节点id,根节点的
    * parentId  当前分类节点的父节点id
    * categoryId  分类的Id
    * categoryName  分类的名称
    * categoryPath  分类path
    * count  当前分类下的敏感字段数量
    * children  当前分类的子节点
    *
    * @var string[]
    */
    protected static $getters = [
            'rootId' => 'getRootId',
            'parentId' => 'getParentId',
            'categoryId' => 'getCategoryId',
            'categoryName' => 'getCategoryName',
            'categoryPath' => 'getCategoryPath',
            'count' => 'getCount',
            'children' => 'getChildren'
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
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
        $this->container['categoryPath'] = isset($data['categoryPath']) ? $data['categoryPath'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoryName']) && (mb_strlen($this->container['categoryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['categoryName']) && (mb_strlen($this->container['categoryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoryPath']) && (mb_strlen($this->container['categoryPath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'categoryPath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['categoryPath']) && (mb_strlen($this->container['categoryPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets rootId
    *  当前分类节点的根节点id,根节点的
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId 当前分类节点的根节点id,根节点的
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets parentId
    *  当前分类节点的父节点id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 当前分类节点的父节点id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets categoryId
    *  分类的Id
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId 分类的Id
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets categoryName
    *  分类的名称
    *
    * @return string|null
    */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
    * Sets categoryName
    *
    * @param string|null $categoryName 分类的名称
    *
    * @return $this
    */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;
        return $this;
    }

    /**
    * Gets categoryPath
    *  分类path
    *
    * @return string|null
    */
    public function getCategoryPath()
    {
        return $this->container['categoryPath'];
    }

    /**
    * Sets categoryPath
    *
    * @param string|null $categoryPath 分类path
    *
    * @return $this
    */
    public function setCategoryPath($categoryPath)
    {
        $this->container['categoryPath'] = $categoryPath;
        return $this;
    }

    /**
    * Gets count
    *  当前分类下的敏感字段数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 当前分类下的敏感字段数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets children
    *  当前分类的子节点
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataCategoryOverviewQueryDTO[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SensitiveDataCategoryOverviewQueryDTO[]|null $children 当前分类的子节点
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
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

