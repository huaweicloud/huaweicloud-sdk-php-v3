<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCustomerOrderDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCustomerOrderDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'orderId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'orderId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'indirectPartnerId' => null
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
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'orderId' => 'order_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'orderId' => 'setOrderId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    * orderId  |参数名称：订单ID。| |参数的约束及描述：|
    * limit  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    * indirectPartnerId  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'orderId' => 'getOrderId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) > 10)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['xLanguage']) && (mb_strlen($this->container['xLanguage']) < 0)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets xLanguage
    *  |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage |参数名称：语言| |参数的约束及描述：中文：zh_CN 英文：en_US缺省为zh_CN|
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets orderId
    *  |参数名称：订单ID。| |参数的约束及描述：|
    *
    * @return string
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string $orderId |参数名称：订单ID。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets limit
    *  |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
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
    * @param int|null $limit |参数名称：每次查询的大小，默认为10| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
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
    * @param int|null $offset |参数名称：偏移量，从0开始，默认为0| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId |参数名称：二级经销商ID，只有伙伴用自身token调用的时候，该字段才有含义。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

