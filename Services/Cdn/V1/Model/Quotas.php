<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Quotas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Quotas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaLimit  配额上限。
    * type  配额类型。
    * used  已使用配额数。
    * userDomainId  域名所属用户的domain_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaLimit' => 'int',
            'type' => 'string',
            'used' => 'int',
            'userDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaLimit  配额上限。
    * type  配额类型。
    * used  已使用配额数。
    * userDomainId  域名所属用户的domain_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaLimit' => 'int32',
        'type' => null,
        'used' => 'int32',
        'userDomainId' => null
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
    * quotaLimit  配额上限。
    * type  配额类型。
    * used  已使用配额数。
    * userDomainId  域名所属用户的domain_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaLimit' => 'quota_limit',
            'type' => 'type',
            'used' => 'used',
            'userDomainId' => 'user_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaLimit  配额上限。
    * type  配额类型。
    * used  已使用配额数。
    * userDomainId  域名所属用户的domain_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaLimit' => 'setQuotaLimit',
            'type' => 'setType',
            'used' => 'setUsed',
            'userDomainId' => 'setUserDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaLimit  配额上限。
    * type  配额类型。
    * used  已使用配额数。
    * userDomainId  域名所属用户的domain_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaLimit' => 'getQuotaLimit',
            'type' => 'getType',
            'used' => 'getUsed',
            'userDomainId' => 'getUserDomainId'
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
        $this->container['quotaLimit'] = isset($data['quotaLimit']) ? $data['quotaLimit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['userDomainId'] = isset($data['userDomainId']) ? $data['userDomainId'] : null;
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
    * Gets quotaLimit
    *  配额上限。
    *
    * @return int|null
    */
    public function getQuotaLimit()
    {
        return $this->container['quotaLimit'];
    }

    /**
    * Sets quotaLimit
    *
    * @param int|null $quotaLimit 配额上限。
    *
    * @return $this
    */
    public function setQuotaLimit($quotaLimit)
    {
        $this->container['quotaLimit'] = $quotaLimit;
        return $this;
    }

    /**
    * Gets type
    *  配额类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 配额类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets used
    *  已使用配额数。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已使用配额数。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets userDomainId
    *  域名所属用户的domain_id。
    *
    * @return string|null
    */
    public function getUserDomainId()
    {
        return $this->container['userDomainId'];
    }

    /**
    * Sets userDomainId
    *
    * @param string|null $userDomainId 域名所属用户的domain_id。
    *
    * @return $this
    */
    public function setUserDomainId($userDomainId)
    {
        $this->container['userDomainId'] = $userDomainId;
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

