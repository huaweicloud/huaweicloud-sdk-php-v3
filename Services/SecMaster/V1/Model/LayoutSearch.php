<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LayoutSearch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LayoutSearch';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  布局名称
    * usedBy  布局类型
    * bindingCode  创建布局选择的数据类的business_code
    * isBuiltIn  是否为系统内置
    * isTemplate  是否为模板
    * isDefault  是否为默认布局
    * layoutType  布局页面类型
    * offset  分页
    * limit  每页个数
    * sortKey  排序字段
    * sortDir  升序或者降序排列
    * searchTxt  搜索关键字
    * fromDate  起始时间
    * toDate  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'usedBy' => 'string',
            'bindingCode' => 'string',
            'isBuiltIn' => 'bool',
            'isTemplate' => 'bool',
            'isDefault' => 'bool',
            'layoutType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'searchTxt' => 'string',
            'fromDate' => 'string',
            'toDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  布局名称
    * usedBy  布局类型
    * bindingCode  创建布局选择的数据类的business_code
    * isBuiltIn  是否为系统内置
    * isTemplate  是否为模板
    * isDefault  是否为默认布局
    * layoutType  布局页面类型
    * offset  分页
    * limit  每页个数
    * sortKey  排序字段
    * sortDir  升序或者降序排列
    * searchTxt  搜索关键字
    * fromDate  起始时间
    * toDate  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'usedBy' => null,
        'bindingCode' => null,
        'isBuiltIn' => null,
        'isTemplate' => null,
        'isDefault' => null,
        'layoutType' => null,
        'offset' => null,
        'limit' => null,
        'sortKey' => null,
        'sortDir' => null,
        'searchTxt' => null,
        'fromDate' => null,
        'toDate' => null
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
    * name  布局名称
    * usedBy  布局类型
    * bindingCode  创建布局选择的数据类的business_code
    * isBuiltIn  是否为系统内置
    * isTemplate  是否为模板
    * isDefault  是否为默认布局
    * layoutType  布局页面类型
    * offset  分页
    * limit  每页个数
    * sortKey  排序字段
    * sortDir  升序或者降序排列
    * searchTxt  搜索关键字
    * fromDate  起始时间
    * toDate  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'usedBy' => 'used_by',
            'bindingCode' => 'binding_code',
            'isBuiltIn' => 'is_built_in',
            'isTemplate' => 'is_template',
            'isDefault' => 'is_default',
            'layoutType' => 'layout_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'searchTxt' => 'search_txt',
            'fromDate' => 'from_date',
            'toDate' => 'to_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  布局名称
    * usedBy  布局类型
    * bindingCode  创建布局选择的数据类的business_code
    * isBuiltIn  是否为系统内置
    * isTemplate  是否为模板
    * isDefault  是否为默认布局
    * layoutType  布局页面类型
    * offset  分页
    * limit  每页个数
    * sortKey  排序字段
    * sortDir  升序或者降序排列
    * searchTxt  搜索关键字
    * fromDate  起始时间
    * toDate  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'usedBy' => 'setUsedBy',
            'bindingCode' => 'setBindingCode',
            'isBuiltIn' => 'setIsBuiltIn',
            'isTemplate' => 'setIsTemplate',
            'isDefault' => 'setIsDefault',
            'layoutType' => 'setLayoutType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'searchTxt' => 'setSearchTxt',
            'fromDate' => 'setFromDate',
            'toDate' => 'setToDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  布局名称
    * usedBy  布局类型
    * bindingCode  创建布局选择的数据类的business_code
    * isBuiltIn  是否为系统内置
    * isTemplate  是否为模板
    * isDefault  是否为默认布局
    * layoutType  布局页面类型
    * offset  分页
    * limit  每页个数
    * sortKey  排序字段
    * sortDir  升序或者降序排列
    * searchTxt  搜索关键字
    * fromDate  起始时间
    * toDate  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'usedBy' => 'getUsedBy',
            'bindingCode' => 'getBindingCode',
            'isBuiltIn' => 'getIsBuiltIn',
            'isTemplate' => 'getIsTemplate',
            'isDefault' => 'getIsDefault',
            'layoutType' => 'getLayoutType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'searchTxt' => 'getSearchTxt',
            'fromDate' => 'getFromDate',
            'toDate' => 'getToDate'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['usedBy'] = isset($data['usedBy']) ? $data['usedBy'] : null;
        $this->container['bindingCode'] = isset($data['bindingCode']) ? $data['bindingCode'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['isTemplate'] = isset($data['isTemplate']) ? $data['isTemplate'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['layoutType'] = isset($data['layoutType']) ? $data['layoutType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['searchTxt'] = isset($data['searchTxt']) ? $data['searchTxt'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['usedBy']) && (mb_strlen($this->container['usedBy']) > 1024)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['usedBy']) && (mb_strlen($this->container['usedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bindingCode']) && (mb_strlen($this->container['bindingCode']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bindingCode', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bindingCode']) && (mb_strlen($this->container['bindingCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'bindingCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['layoutType']) && (mb_strlen($this->container['layoutType']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutType']) && (mb_strlen($this->container['layoutType']) < 1)) {
                $invalidProperties[] = "invalid value for 'layoutType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 65536)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['searchTxt']) && (mb_strlen($this->container['searchTxt']) > 36)) {
                $invalidProperties[] = "invalid value for 'searchTxt', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['searchTxt']) && (mb_strlen($this->container['searchTxt']) < 0)) {
                $invalidProperties[] = "invalid value for 'searchTxt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) > 36)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['fromDate']) && (mb_strlen($this->container['fromDate']) < 32)) {
                $invalidProperties[] = "invalid value for 'fromDate', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) > 36)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['toDate']) && (mb_strlen($this->container['toDate']) < 32)) {
                $invalidProperties[] = "invalid value for 'toDate', the character length must be bigger than or equal to 32.";
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
    * Gets name
    *  布局名称
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
    * @param string|null $name 布局名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets usedBy
    *  布局类型
    *
    * @return string|null
    */
    public function getUsedBy()
    {
        return $this->container['usedBy'];
    }

    /**
    * Sets usedBy
    *
    * @param string|null $usedBy 布局类型
    *
    * @return $this
    */
    public function setUsedBy($usedBy)
    {
        $this->container['usedBy'] = $usedBy;
        return $this;
    }

    /**
    * Gets bindingCode
    *  创建布局选择的数据类的business_code
    *
    * @return string|null
    */
    public function getBindingCode()
    {
        return $this->container['bindingCode'];
    }

    /**
    * Sets bindingCode
    *
    * @param string|null $bindingCode 创建布局选择的数据类的business_code
    *
    * @return $this
    */
    public function setBindingCode($bindingCode)
    {
        $this->container['bindingCode'] = $bindingCode;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否为系统内置
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
    * @param bool|null $isBuiltIn 是否为系统内置
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets isTemplate
    *  是否为模板
    *
    * @return bool|null
    */
    public function getIsTemplate()
    {
        return $this->container['isTemplate'];
    }

    /**
    * Sets isTemplate
    *
    * @param bool|null $isTemplate 是否为模板
    *
    * @return $this
    */
    public function setIsTemplate($isTemplate)
    {
        $this->container['isTemplate'] = $isTemplate;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否为默认布局
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否为默认布局
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets layoutType
    *  布局页面类型
    *
    * @return string|null
    */
    public function getLayoutType()
    {
        return $this->container['layoutType'];
    }

    /**
    * Sets layoutType
    *
    * @param string|null $layoutType 布局页面类型
    *
    * @return $this
    */
    public function setLayoutType($layoutType)
    {
        $this->container['layoutType'] = $layoutType;
        return $this;
    }

    /**
    * Gets offset
    *  分页
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
    * @param int|null $offset 分页
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
    *  每页个数
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
    * @param int|null $limit 每页个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  升序或者降序排列
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 升序或者降序排列
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets searchTxt
    *  搜索关键字
    *
    * @return string|null
    */
    public function getSearchTxt()
    {
        return $this->container['searchTxt'];
    }

    /**
    * Sets searchTxt
    *
    * @param string|null $searchTxt 搜索关键字
    *
    * @return $this
    */
    public function setSearchTxt($searchTxt)
    {
        $this->container['searchTxt'] = $searchTxt;
        return $this;
    }

    /**
    * Gets fromDate
    *  起始时间
    *
    * @return string|null
    */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
    * Sets fromDate
    *
    * @param string|null $fromDate 起始时间
    *
    * @return $this
    */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;
        return $this;
    }

    /**
    * Gets toDate
    *  结束时间
    *
    * @return string|null
    */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
    * Sets toDate
    *
    * @param string|null $toDate 结束时间
    *
    * @return $this
    */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;
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

