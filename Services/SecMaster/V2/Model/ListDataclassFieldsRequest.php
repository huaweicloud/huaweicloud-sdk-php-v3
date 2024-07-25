<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDataclassFieldsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDataclassFieldsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * name  名称查询
    * isBuiltIn  是否内置
    * dataclassId  数据类id
    * fieldCategory  字段分类
    * mapping  是否展示在分类映射外的其他地方
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'isBuiltIn' => 'bool',
            'dataclassId' => 'string',
            'fieldCategory' => 'string',
            'mapping' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * name  名称查询
    * isBuiltIn  是否内置
    * dataclassId  数据类id
    * fieldCategory  字段分类
    * mapping  是否展示在分类映射外的其他地方
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'offset' => null,
        'limit' => null,
        'name' => null,
        'isBuiltIn' => null,
        'dataclassId' => null,
        'fieldCategory' => null,
        'mapping' => null
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
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * name  名称查询
    * isBuiltIn  是否内置
    * dataclassId  数据类id
    * fieldCategory  字段分类
    * mapping  是否展示在分类映射外的其他地方
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'isBuiltIn' => 'is_built_in',
            'dataclassId' => 'dataclass_id',
            'fieldCategory' => 'field_category',
            'mapping' => 'mapping'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * name  名称查询
    * isBuiltIn  是否内置
    * dataclassId  数据类id
    * fieldCategory  字段分类
    * mapping  是否展示在分类映射外的其他地方
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'isBuiltIn' => 'setIsBuiltIn',
            'dataclassId' => 'setDataclassId',
            'fieldCategory' => 'setFieldCategory',
            'mapping' => 'setMapping'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * workspaceId  工作空间id
    * offset  偏移量
    * limit  数据量
    * name  名称查询
    * isBuiltIn  是否内置
    * dataclassId  数据类id
    * fieldCategory  字段分类
    * mapping  是否展示在分类映射外的其他地方
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'isBuiltIn' => 'getIsBuiltIn',
            'dataclassId' => 'getDataclassId',
            'fieldCategory' => 'getFieldCategory',
            'mapping' => 'getMapping'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['fieldCategory'] = isset($data['fieldCategory']) ? $data['fieldCategory'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataclassId'] === null) {
            $invalidProperties[] = "'dataclassId' can't be null";
        }
            if ((mb_strlen($this->container['dataclassId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['fieldCategory']) && (mb_strlen($this->container['fieldCategory']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fieldCategory', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fieldCategory']) && (mb_strlen($this->container['fieldCategory']) < 0)) {
                $invalidProperties[] = "invalid value for 'fieldCategory', the character length must be bigger than or equal to 0.";
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
    * Gets contentType
    *  内容类型
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 内容类型
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  数据量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 数据量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  名称查询
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
    * @param string|null $name 名称查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否内置
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否内置
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类id
    *
    * @return string
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string $dataclassId 数据类id
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets fieldCategory
    *  字段分类
    *
    * @return string|null
    */
    public function getFieldCategory()
    {
        return $this->container['fieldCategory'];
    }

    /**
    * Sets fieldCategory
    *
    * @param string|null $fieldCategory 字段分类
    *
    * @return $this
    */
    public function setFieldCategory($fieldCategory)
    {
        $this->container['fieldCategory'] = $fieldCategory;
        return $this;
    }

    /**
    * Gets mapping
    *  是否展示在分类映射外的其他地方
    *
    * @return bool|null
    */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
    * Sets mapping
    *
    * @param bool|null $mapping 是否展示在分类映射外的其他地方
    *
    * @return $this
    */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;
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

