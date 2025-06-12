<?php

namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * accountName  分配给用户的账号的名称
    * emailAddress  分配给用户的账号的电子邮箱地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountName' => 'string',
            'emailAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * accountName  分配给用户的账号的名称
    * emailAddress  分配给用户的账号的电子邮箱地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountName' => null,
        'emailAddress' => null
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
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * accountName  分配给用户的账号的名称
    * emailAddress  分配给用户的账号的电子邮箱地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'emailAddress' => 'email_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * accountName  分配给用户的账号的名称
    * emailAddress  分配给用户的账号的电子邮箱地址
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'emailAddress' => 'setEmailAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  分配给用户的账号的全局唯一标识符（ID）
    * accountName  分配给用户的账号的名称
    * emailAddress  分配给用户的账号的电子邮箱地址
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'emailAddress' => 'getEmailAddress'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['emailAddress'] = isset($data['emailAddress']) ? $data['emailAddress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['emailAddress']) && (mb_strlen($this->container['emailAddress']) > 254)) {
                $invalidProperties[] = "invalid value for 'emailAddress', the character length must be smaller than or equal to 254.";
            }
            if (!is_null($this->container['emailAddress']) && (mb_strlen($this->container['emailAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailAddress', the character length must be bigger than or equal to 1.";
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
    * Gets accountId
    *  分配给用户的账号的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 分配给用户的账号的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountName
    *  分配给用户的账号的名称
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 分配给用户的账号的名称
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets emailAddress
    *  分配给用户的账号的电子邮箱地址
    *
    * @return string|null
    */
    public function getEmailAddress()
    {
        return $this->container['emailAddress'];
    }

    /**
    * Sets emailAddress
    *
    * @param string|null $emailAddress 分配给用户的账号的电子邮箱地址
    *
    * @return $this
    */
    public function setEmailAddress($emailAddress)
    {
        $this->container['emailAddress'] = $emailAddress;
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

