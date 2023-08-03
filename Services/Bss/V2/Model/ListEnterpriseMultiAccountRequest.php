<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseMultiAccountRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseMultiAccountRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subCustomerId  企业子账户的账号ID。
    * balanceType  账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * offset  偏移量，默认值为0。只有信用账户有效。
    * limit  每次查询条数，默认值为10。只有信用账户有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subCustomerId' => 'string',
            'balanceType' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subCustomerId  企业子账户的账号ID。
    * balanceType  账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * offset  偏移量，默认值为0。只有信用账户有效。
    * limit  每次查询条数，默认值为10。只有信用账户有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subCustomerId' => null,
        'balanceType' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * subCustomerId  企业子账户的账号ID。
    * balanceType  账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * offset  偏移量，默认值为0。只有信用账户有效。
    * limit  每次查询条数，默认值为10。只有信用账户有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subCustomerId' => 'sub_customer_id',
            'balanceType' => 'balance_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subCustomerId  企业子账户的账号ID。
    * balanceType  账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * offset  偏移量，默认值为0。只有信用账户有效。
    * limit  每次查询条数，默认值为10。只有信用账户有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'subCustomerId' => 'setSubCustomerId',
            'balanceType' => 'setBalanceType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subCustomerId  企业子账户的账号ID。
    * balanceType  账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * offset  偏移量，默认值为0。只有信用账户有效。
    * limit  每次查询条数，默认值为10。只有信用账户有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'subCustomerId' => 'getSubCustomerId',
            'balanceType' => 'getBalanceType',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['subCustomerId'] = isset($data['subCustomerId']) ? $data['subCustomerId'] : null;
        $this->container['balanceType'] = isset($data['balanceType']) ? $data['balanceType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subCustomerId'] === null) {
            $invalidProperties[] = "'subCustomerId' can't be null";
        }
        if ($this->container['balanceType'] === null) {
            $invalidProperties[] = "'balanceType' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 21474836476)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 21474836476.";
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
    * Gets subCustomerId
    *  企业子账户的账号ID。
    *
    * @return string
    */
    public function getSubCustomerId()
    {
        return $this->container['subCustomerId'];
    }

    /**
    * Sets subCustomerId
    *
    * @param string $subCustomerId 企业子账户的账号ID。
    *
    * @return $this
    */
    public function setSubCustomerId($subCustomerId)
    {
        $this->container['subCustomerId'] = $subCustomerId;
        return $this;
    }

    /**
    * Gets balanceType
    *  账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    *
    * @return string
    */
    public function getBalanceType()
    {
        return $this->container['balanceType'];
    }

    /**
    * Sets balanceType
    *
    * @param string $balanceType 账户类型：BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    *
    * @return $this
    */
    public function setBalanceType($balanceType)
    {
        $this->container['balanceType'] = $balanceType;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，默认值为0。只有信用账户有效。
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
    * @param int|null $offset 偏移量，默认值为0。只有信用账户有效。
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
    *  每次查询条数，默认值为10。只有信用账户有效。
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
    * @param int|null $limit 每次查询条数，默认值为10。只有信用账户有效。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

