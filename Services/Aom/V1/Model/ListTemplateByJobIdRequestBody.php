<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTemplateByJobIdRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTemplateByJobIdRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  方案名称
    * pageNum  page_num为正整数
    * pageSize  每页显示的条数
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'orderByColumn' => 'string',
            'sortOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  方案名称
    * pageNum  page_num为正整数
    * pageSize  每页显示的条数
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'orderByColumn' => null,
        'sortOrder' => null
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
    * name  方案名称
    * pageNum  page_num为正整数
    * pageSize  每页显示的条数
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'orderByColumn' => 'order_by_column',
            'sortOrder' => 'sort_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  方案名称
    * pageNum  page_num为正整数
    * pageSize  每页显示的条数
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'orderByColumn' => 'setOrderByColumn',
            'sortOrder' => 'setSortOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  方案名称
    * pageNum  page_num为正整数
    * pageSize  每页显示的条数
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'orderByColumn' => 'getOrderByColumn',
            'sortOrder' => 'getSortOrder'
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
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['orderByColumn'] = isset($data['orderByColumn']) ? $data['orderByColumn'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageNum']) && ($this->container['pageNum'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'pageNum', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['pageNum']) && ($this->container['pageNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
        if ($this->container['orderByColumn'] === null) {
            $invalidProperties[] = "'orderByColumn' can't be null";
        }
            if ((mb_strlen($this->container['orderByColumn']) > 16)) {
                $invalidProperties[] = "invalid value for 'orderByColumn', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['orderByColumn']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderByColumn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortOrder']) && (mb_strlen($this->container['sortOrder']) > 16)) {
                $invalidProperties[] = "invalid value for 'sortOrder', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['sortOrder']) && (mb_strlen($this->container['sortOrder']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortOrder', the character length must be bigger than or equal to 1.";
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
    *  方案名称
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
    * @param string|null $name 方案名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets pageNum
    *  page_num为正整数
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum page_num为正整数
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示的条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页显示的条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets orderByColumn
    *  需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    *
    * @return string
    */
    public function getOrderByColumn()
    {
        return $this->container['orderByColumn'];
    }

    /**
    * Sets orderByColumn
    *
    * @param string $orderByColumn 需要排序的字段(默认为更新时间),支持字段有name，create_time，update_time。
    *
    * @return $this
    */
    public function setOrderByColumn($orderByColumn)
    {
        $this->container['orderByColumn'] = $orderByColumn;
        return $this;
    }

    /**
    * Gets sortOrder
    *  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder 排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
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

