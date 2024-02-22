<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWidgetInfoProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWidgetInfo_properties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filter  聚合类型，目前只有TopN这一种类型
    * topN  Top值前N个
    * order  排序字段，asc正序，desc倒序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filter' => 'string',
            'topN' => 'int',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filter  聚合类型，目前只有TopN这一种类型
    * topN  Top值前N个
    * order  排序字段，asc正序，desc倒序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filter' => null,
        'topN' => 'int32',
        'order' => null
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
    * filter  聚合类型，目前只有TopN这一种类型
    * topN  Top值前N个
    * order  排序字段，asc正序，desc倒序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filter' => 'filter',
            'topN' => 'topN',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filter  聚合类型，目前只有TopN这一种类型
    * topN  Top值前N个
    * order  排序字段，asc正序，desc倒序
    *
    * @var string[]
    */
    protected static $setters = [
            'filter' => 'setFilter',
            'topN' => 'setTopN',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filter  聚合类型，目前只有TopN这一种类型
    * topN  Top值前N个
    * order  排序字段，asc正序，desc倒序
    *
    * @var string[]
    */
    protected static $getters = [
            'filter' => 'getFilter',
            'topN' => 'getTopN',
            'order' => 'getOrder'
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
    const FILTER_TOP_N = 'topN';
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterAllowableValues()
    {
        return [
            self::FILTER_TOP_N,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
        ];
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['topN'] = isset($data['topN']) ? $data['topN'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFilterAllowableValues();
                if (!is_null($this->container['filter']) && !in_array($this->container['filter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['topN']) && ($this->container['topN'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'topN', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['topN']) && ($this->container['topN'] < 1)) {
                $invalidProperties[] = "invalid value for 'topN', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets filter
    *  聚合类型，目前只有TopN这一种类型
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 聚合类型，目前只有TopN这一种类型
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets topN
    *  Top值前N个
    *
    * @return int|null
    */
    public function getTopN()
    {
        return $this->container['topN'];
    }

    /**
    * Sets topN
    *
    * @param int|null $topN Top值前N个
    *
    * @return $this
    */
    public function setTopN($topN)
    {
        $this->container['topN'] = $topN;
        return $this;
    }

    /**
    * Gets order
    *  排序字段，asc正序，desc倒序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序字段，asc正序，desc倒序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

