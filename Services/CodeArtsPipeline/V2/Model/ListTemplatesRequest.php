<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateType  模板类型
    * isBuildIn  是否内置模板
    * offset  偏移量,表示从此偏移量开始查询,offset大于等于0
    * limit  每页显示的条目数量
    * name  模板名称，匹配规则为模糊匹配
    * sort  排序字段
    * asc  是否正序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateType' => 'string',
            'isBuildIn' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'sort' => 'string',
            'asc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateType  模板类型
    * isBuildIn  是否内置模板
    * offset  偏移量,表示从此偏移量开始查询,offset大于等于0
    * limit  每页显示的条目数量
    * name  模板名称，匹配规则为模糊匹配
    * sort  排序字段
    * asc  是否正序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateType' => null,
        'isBuildIn' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'name' => null,
        'sort' => null,
        'asc' => null
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
    * templateType  模板类型
    * isBuildIn  是否内置模板
    * offset  偏移量,表示从此偏移量开始查询,offset大于等于0
    * limit  每页显示的条目数量
    * name  模板名称，匹配规则为模糊匹配
    * sort  排序字段
    * asc  是否正序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateType' => 'template_type',
            'isBuildIn' => 'is_build_in',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'sort' => 'sort',
            'asc' => 'asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateType  模板类型
    * isBuildIn  是否内置模板
    * offset  偏移量,表示从此偏移量开始查询,offset大于等于0
    * limit  每页显示的条目数量
    * name  模板名称，匹配规则为模糊匹配
    * sort  排序字段
    * asc  是否正序
    *
    * @var string[]
    */
    protected static $setters = [
            'templateType' => 'setTemplateType',
            'isBuildIn' => 'setIsBuildIn',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'sort' => 'setSort',
            'asc' => 'setAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateType  模板类型
    * isBuildIn  是否内置模板
    * offset  偏移量,表示从此偏移量开始查询,offset大于等于0
    * limit  每页显示的条目数量
    * name  模板名称，匹配规则为模糊匹配
    * sort  排序字段
    * asc  是否正序
    *
    * @var string[]
    */
    protected static $getters = [
            'templateType' => 'getTemplateType',
            'isBuildIn' => 'getIsBuildIn',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'sort' => 'getSort',
            'asc' => 'getAsc'
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
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['isBuildIn'] = isset($data['isBuildIn']) ? $data['isBuildIn'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
            if ((mb_strlen($this->container['templateType']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isBuildIn'] === null) {
            $invalidProperties[] = "'isBuildIn' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100.";
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 60)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sort']) && (mb_strlen($this->container['sort']) > 64)) {
                $invalidProperties[] = "invalid value for 'sort', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sort']) && (mb_strlen($this->container['sort']) < 1)) {
                $invalidProperties[] = "invalid value for 'sort', the character length must be bigger than or equal to 1.";
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
    * Gets templateType
    *  模板类型
    *
    * @return string
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string $templateType 模板类型
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets isBuildIn
    *  是否内置模板
    *
    * @return string
    */
    public function getIsBuildIn()
    {
        return $this->container['isBuildIn'];
    }

    /**
    * Sets isBuildIn
    *
    * @param string $isBuildIn 是否内置模板
    *
    * @return $this
    */
    public function setIsBuildIn($isBuildIn)
    {
        $this->container['isBuildIn'] = $isBuildIn;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量,表示从此偏移量开始查询,offset大于等于0
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
    * @param int|null $offset 偏移量,表示从此偏移量开始查询,offset大于等于0
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
    *  每页显示的条目数量
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
    * @param int|null $limit 每页显示的条目数量
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
    *  模板名称，匹配规则为模糊匹配
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
    * @param string|null $name 模板名称，匹配规则为模糊匹配
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序字段
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets asc
    *  是否正序
    *
    * @return string|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param string|null $asc 是否正序
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
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

