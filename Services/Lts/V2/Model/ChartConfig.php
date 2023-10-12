<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChartConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChartConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canSort  是否开启排序
    * canSearch  是否开启搜索
    * pageSize  每页显示数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canSort' => 'bool',
            'canSearch' => 'bool',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canSort  是否开启排序
    * canSearch  是否开启搜索
    * pageSize  每页显示数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canSort' => null,
        'canSearch' => null,
        'pageSize' => 'int32'
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
    * canSort  是否开启排序
    * canSearch  是否开启搜索
    * pageSize  每页显示数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canSort' => 'canSort',
            'canSearch' => 'canSearch',
            'pageSize' => 'pageSize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canSort  是否开启排序
    * canSearch  是否开启搜索
    * pageSize  每页显示数量
    *
    * @var string[]
    */
    protected static $setters = [
            'canSort' => 'setCanSort',
            'canSearch' => 'setCanSearch',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canSort  是否开启排序
    * canSearch  是否开启搜索
    * pageSize  每页显示数量
    *
    * @var string[]
    */
    protected static $getters = [
            'canSort' => 'getCanSort',
            'canSearch' => 'getCanSearch',
            'pageSize' => 'getPageSize'
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
        $this->container['canSort'] = isset($data['canSort']) ? $data['canSort'] : null;
        $this->container['canSearch'] = isset($data['canSearch']) ? $data['canSearch'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['canSort'] === null) {
            $invalidProperties[] = "'canSort' can't be null";
        }
        if ($this->container['canSearch'] === null) {
            $invalidProperties[] = "'canSearch' can't be null";
        }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
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
    * Gets canSort
    *  是否开启排序
    *
    * @return bool
    */
    public function getCanSort()
    {
        return $this->container['canSort'];
    }

    /**
    * Sets canSort
    *
    * @param bool $canSort 是否开启排序
    *
    * @return $this
    */
    public function setCanSort($canSort)
    {
        $this->container['canSort'] = $canSort;
        return $this;
    }

    /**
    * Gets canSearch
    *  是否开启搜索
    *
    * @return bool
    */
    public function getCanSearch()
    {
        return $this->container['canSearch'];
    }

    /**
    * Sets canSearch
    *
    * @param bool $canSearch 是否开启搜索
    *
    * @return $this
    */
    public function setCanSearch($canSearch)
    {
        $this->container['canSearch'] = $canSearch;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示数量
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 每页显示数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

