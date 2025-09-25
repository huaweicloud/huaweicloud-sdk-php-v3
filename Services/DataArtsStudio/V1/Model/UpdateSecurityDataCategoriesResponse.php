<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityDataCategoriesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityDataCategoriesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryId  数据分类id。
    * categoryName  数据分类名称。
    * description  数据分类描述。
    * categoryLevel  数据分类层级。
    * rootId  分类树根节点。
    * parentId  父分类节点。
    * categoryPath  分类树路径。
    * createBy  创建者。
    * createTime  创建时间。
    * updateBy  更新者。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryId' => 'string',
            'categoryName' => 'string',
            'description' => 'string',
            'categoryLevel' => 'int',
            'rootId' => 'string',
            'parentId' => 'string',
            'categoryPath' => 'string',
            'createBy' => 'string',
            'createTime' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryId  数据分类id。
    * categoryName  数据分类名称。
    * description  数据分类描述。
    * categoryLevel  数据分类层级。
    * rootId  分类树根节点。
    * parentId  父分类节点。
    * categoryPath  分类树路径。
    * createBy  创建者。
    * createTime  创建时间。
    * updateBy  更新者。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryId' => null,
        'categoryName' => null,
        'description' => null,
        'categoryLevel' => 'int32',
        'rootId' => null,
        'parentId' => null,
        'categoryPath' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'updateBy' => null,
        'updateTime' => 'int64'
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
    * categoryId  数据分类id。
    * categoryName  数据分类名称。
    * description  数据分类描述。
    * categoryLevel  数据分类层级。
    * rootId  分类树根节点。
    * parentId  父分类节点。
    * categoryPath  分类树路径。
    * createBy  创建者。
    * createTime  创建时间。
    * updateBy  更新者。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryId' => 'category_id',
            'categoryName' => 'category_name',
            'description' => 'description',
            'categoryLevel' => 'category_level',
            'rootId' => 'root_id',
            'parentId' => 'parent_id',
            'categoryPath' => 'category_path',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryId  数据分类id。
    * categoryName  数据分类名称。
    * description  数据分类描述。
    * categoryLevel  数据分类层级。
    * rootId  分类树根节点。
    * parentId  父分类节点。
    * categoryPath  分类树路径。
    * createBy  创建者。
    * createTime  创建时间。
    * updateBy  更新者。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryId' => 'setCategoryId',
            'categoryName' => 'setCategoryName',
            'description' => 'setDescription',
            'categoryLevel' => 'setCategoryLevel',
            'rootId' => 'setRootId',
            'parentId' => 'setParentId',
            'categoryPath' => 'setCategoryPath',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryId  数据分类id。
    * categoryName  数据分类名称。
    * description  数据分类描述。
    * categoryLevel  数据分类层级。
    * rootId  分类树根节点。
    * parentId  父分类节点。
    * categoryPath  分类树路径。
    * createBy  创建者。
    * createTime  创建时间。
    * updateBy  更新者。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryId' => 'getCategoryId',
            'categoryName' => 'getCategoryName',
            'description' => 'getDescription',
            'categoryLevel' => 'getCategoryLevel',
            'rootId' => 'getRootId',
            'parentId' => 'getParentId',
            'categoryPath' => 'getCategoryPath',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime'
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
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryLevel'] = isset($data['categoryLevel']) ? $data['categoryLevel'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['categoryPath'] = isset($data['categoryPath']) ? $data['categoryPath'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categoryLevel']) && ($this->container['categoryLevel'] > 4)) {
                $invalidProperties[] = "invalid value for 'categoryLevel', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['categoryLevel']) && ($this->container['categoryLevel'] < 0)) {
                $invalidProperties[] = "invalid value for 'categoryLevel', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootId']) && (mb_strlen($this->container['rootId']) > 128)) {
                $invalidProperties[] = "invalid value for 'rootId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['rootId']) && (mb_strlen($this->container['rootId']) < 1)) {
                $invalidProperties[] = "invalid value for 'rootId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoryPath']) && (mb_strlen($this->container['categoryPath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'categoryPath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['categoryPath']) && (mb_strlen($this->container['categoryPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets categoryId
    *  数据分类id。
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
    * @param string|null $categoryId 数据分类id。
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
    *  数据分类名称。
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
    * @param string|null $categoryName 数据分类名称。
    *
    * @return $this
    */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;
        return $this;
    }

    /**
    * Gets description
    *  数据分类描述。
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
    * @param string|null $description 数据分类描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets categoryLevel
    *  数据分类层级。
    *
    * @return int|null
    */
    public function getCategoryLevel()
    {
        return $this->container['categoryLevel'];
    }

    /**
    * Sets categoryLevel
    *
    * @param int|null $categoryLevel 数据分类层级。
    *
    * @return $this
    */
    public function setCategoryLevel($categoryLevel)
    {
        $this->container['categoryLevel'] = $categoryLevel;
        return $this;
    }

    /**
    * Gets rootId
    *  分类树根节点。
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
    * @param string|null $rootId 分类树根节点。
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
    *  父分类节点。
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
    * @param string|null $parentId 父分类节点。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets categoryPath
    *  分类树路径。
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
    * @param string|null $categoryPath 分类树路径。
    *
    * @return $this
    */
    public function setCategoryPath($categoryPath)
    {
        $this->container['categoryPath'] = $categoryPath;
        return $this;
    }

    /**
    * Gets createBy
    *  创建者。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建者。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新者。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新者。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

