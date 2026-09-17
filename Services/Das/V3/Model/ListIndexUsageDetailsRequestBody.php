<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIndexUsageDetailsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIndexUsageDetailsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditions  过滤条件
    * objectName  表名称
    * sortField  排序字段
    * sortAsc  排序是否升序
    * curPage  当前页
    * perPage  页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditions' => '\HuaweiCloud\SDK\Das\V3\Model\IndexUsageCondition[]',
            'objectName' => 'string',
            'sortField' => 'string',
            'sortAsc' => 'bool',
            'curPage' => 'int',
            'perPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditions  过滤条件
    * objectName  表名称
    * sortField  排序字段
    * sortAsc  排序是否升序
    * curPage  当前页
    * perPage  页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditions' => null,
        'objectName' => null,
        'sortField' => null,
        'sortAsc' => null,
        'curPage' => 'int32',
        'perPage' => 'int32'
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
    * conditions  过滤条件
    * objectName  表名称
    * sortField  排序字段
    * sortAsc  排序是否升序
    * curPage  当前页
    * perPage  页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditions' => 'conditions',
            'objectName' => 'object_name',
            'sortField' => 'sort_field',
            'sortAsc' => 'sort_asc',
            'curPage' => 'cur_page',
            'perPage' => 'per_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditions  过滤条件
    * objectName  表名称
    * sortField  排序字段
    * sortAsc  排序是否升序
    * curPage  当前页
    * perPage  页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'conditions' => 'setConditions',
            'objectName' => 'setObjectName',
            'sortField' => 'setSortField',
            'sortAsc' => 'setSortAsc',
            'curPage' => 'setCurPage',
            'perPage' => 'setPerPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditions  过滤条件
    * objectName  表名称
    * sortField  排序字段
    * sortAsc  排序是否升序
    * curPage  当前页
    * perPage  页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'conditions' => 'getConditions',
            'objectName' => 'getObjectName',
            'sortField' => 'getSortField',
            'sortAsc' => 'getSortAsc',
            'curPage' => 'getCurPage',
            'perPage' => 'getPerPage'
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
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortAsc'] = isset($data['sortAsc']) ? $data['sortAsc'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
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
    * Gets conditions
    *  过滤条件
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\IndexUsageCondition[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\IndexUsageCondition[] $conditions 过滤条件
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets objectName
    *  表名称
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 表名称
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortAsc
    *  排序是否升序
    *
    * @return bool|null
    */
    public function getSortAsc()
    {
        return $this->container['sortAsc'];
    }

    /**
    * Sets sortAsc
    *
    * @param bool|null $sortAsc 排序是否升序
    *
    * @return $this
    */
    public function setSortAsc($sortAsc)
    {
        $this->container['sortAsc'] = $sortAsc;
        return $this;
    }

    /**
    * Gets curPage
    *  当前页
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 当前页
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets perPage
    *  页大小
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 页大小
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
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

