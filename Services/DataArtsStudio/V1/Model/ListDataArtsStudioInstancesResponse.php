<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDataArtsStudioInstancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDataArtsStudioInstancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billingCheck  是否需要账单
    * count  返回记录总数
    * commodityOrderLists  返回实例列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billingCheck' => 'bool',
            'count' => 'int',
            'commodityOrderLists' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigCommodityOrder[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billingCheck  是否需要账单
    * count  返回记录总数
    * commodityOrderLists  返回实例列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billingCheck' => null,
        'count' => null,
        'commodityOrderLists' => null
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
    * billingCheck  是否需要账单
    * count  返回记录总数
    * commodityOrderLists  返回实例列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billingCheck' => 'billing_check',
            'count' => 'count',
            'commodityOrderLists' => 'commodity_order_lists'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billingCheck  是否需要账单
    * count  返回记录总数
    * commodityOrderLists  返回实例列表
    *
    * @var string[]
    */
    protected static $setters = [
            'billingCheck' => 'setBillingCheck',
            'count' => 'setCount',
            'commodityOrderLists' => 'setCommodityOrderLists'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billingCheck  是否需要账单
    * count  返回记录总数
    * commodityOrderLists  返回实例列表
    *
    * @var string[]
    */
    protected static $getters = [
            'billingCheck' => 'getBillingCheck',
            'count' => 'getCount',
            'commodityOrderLists' => 'getCommodityOrderLists'
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
        $this->container['billingCheck'] = isset($data['billingCheck']) ? $data['billingCheck'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['commodityOrderLists'] = isset($data['commodityOrderLists']) ? $data['commodityOrderLists'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets billingCheck
    *  是否需要账单
    *
    * @return bool|null
    */
    public function getBillingCheck()
    {
        return $this->container['billingCheck'];
    }

    /**
    * Sets billingCheck
    *
    * @param bool|null $billingCheck 是否需要账单
    *
    * @return $this
    */
    public function setBillingCheck($billingCheck)
    {
        $this->container['billingCheck'] = $billingCheck;
        return $this;
    }

    /**
    * Gets count
    *  返回记录总数
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
    * @param int|null $count 返回记录总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets commodityOrderLists
    *  返回实例列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigCommodityOrder[]|null
    */
    public function getCommodityOrderLists()
    {
        return $this->container['commodityOrderLists'];
    }

    /**
    * Sets commodityOrderLists
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigCommodityOrder[]|null $commodityOrderLists 返回实例列表
    *
    * @return $this
    */
    public function setCommodityOrderLists($commodityOrderLists)
    {
        $this->container['commodityOrderLists'] = $commodityOrderLists;
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

