<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIamUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIamUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  IAM用户信息
    * total  IAM用户的总数
    * primaryAccountId  账号ID
    * primaryAccountName  账号名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'object',
            'total' => 'int',
            'primaryAccountId' => 'string',
            'primaryAccountName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  IAM用户信息
    * total  IAM用户的总数
    * primaryAccountId  账号ID
    * primaryAccountName  账号名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'total' => 'int32',
        'primaryAccountId' => null,
        'primaryAccountName' => null
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
    * data  IAM用户信息
    * total  IAM用户的总数
    * primaryAccountId  账号ID
    * primaryAccountName  账号名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'total' => 'total',
            'primaryAccountId' => 'primary_account_id',
            'primaryAccountName' => 'primary_account_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  IAM用户信息
    * total  IAM用户的总数
    * primaryAccountId  账号ID
    * primaryAccountName  账号名称
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'total' => 'setTotal',
            'primaryAccountId' => 'setPrimaryAccountId',
            'primaryAccountName' => 'setPrimaryAccountName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  IAM用户信息
    * total  IAM用户的总数
    * primaryAccountId  账号ID
    * primaryAccountName  账号名称
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'total' => 'getTotal',
            'primaryAccountId' => 'getPrimaryAccountId',
            'primaryAccountName' => 'getPrimaryAccountName'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['primaryAccountId'] = isset($data['primaryAccountId']) ? $data['primaryAccountId'] : null;
        $this->container['primaryAccountName'] = isset($data['primaryAccountName']) ? $data['primaryAccountName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets data
    *  IAM用户信息
    *
    * @return object|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param object|null $data IAM用户信息
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets total
    *  IAM用户的总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total IAM用户的总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets primaryAccountId
    *  账号ID
    *
    * @return string|null
    */
    public function getPrimaryAccountId()
    {
        return $this->container['primaryAccountId'];
    }

    /**
    * Sets primaryAccountId
    *
    * @param string|null $primaryAccountId 账号ID
    *
    * @return $this
    */
    public function setPrimaryAccountId($primaryAccountId)
    {
        $this->container['primaryAccountId'] = $primaryAccountId;
        return $this;
    }

    /**
    * Gets primaryAccountName
    *  账号名称
    *
    * @return string|null
    */
    public function getPrimaryAccountName()
    {
        return $this->container['primaryAccountName'];
    }

    /**
    * Sets primaryAccountName
    *
    * @param string|null $primaryAccountName 账号名称
    *
    * @return $this
    */
    public function setPrimaryAccountName($primaryAccountName)
    {
        $this->container['primaryAccountName'] = $primaryAccountName;
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

