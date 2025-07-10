<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountBaseline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountBaseline';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  纳管账号名称。
    * accountId  纳管账号的唯一标识符（ID）。
    * phone  手机号码。
    * accountEmail  纳管账号邮箱。
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'accountId' => 'string',
            'phone' => 'string',
            'accountEmail' => 'string',
            'accountType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  纳管账号名称。
    * accountId  纳管账号的唯一标识符（ID）。
    * phone  手机号码。
    * accountEmail  纳管账号邮箱。
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'accountId' => null,
        'phone' => null,
        'accountEmail' => null,
        'accountType' => null
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
    * accountName  纳管账号名称。
    * accountId  纳管账号的唯一标识符（ID）。
    * phone  手机号码。
    * accountEmail  纳管账号邮箱。
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'accountId' => 'account_id',
            'phone' => 'phone',
            'accountEmail' => 'account_email',
            'accountType' => 'account_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  纳管账号名称。
    * accountId  纳管账号的唯一标识符（ID）。
    * phone  手机号码。
    * accountEmail  纳管账号邮箱。
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'accountId' => 'setAccountId',
            'phone' => 'setPhone',
            'accountEmail' => 'setAccountEmail',
            'accountType' => 'setAccountType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  纳管账号名称。
    * accountId  纳管账号的唯一标识符（ID）。
    * phone  手机号码。
    * accountEmail  纳管账号邮箱。
    * accountType  纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'accountId' => 'getAccountId',
            'phone' => 'getPhone',
            'accountEmail' => 'getAccountEmail',
            'accountType' => 'getAccountType'
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
    const ACCOUNT_TYPE_LOGGING = 'LOGGING';
    const ACCOUNT_TYPE_SECURITY = 'SECURITY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_LOGGING,
            self::ACCOUNT_TYPE_SECURITY,
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['accountEmail'] = isset($data['accountEmail']) ? $data['accountEmail'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
            if ((mb_strlen($this->container['accountName']) > 32)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['accountName']) < 6)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 6.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['accountName'])) {
                $invalidProperties[] = "invalid value for 'accountName', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && !preg_match("/^[\\w-]+$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 32)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 1)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['phone']) && !preg_match("/^1[3456789]\\d{9}$/", $this->container['phone'])) {
                $invalidProperties[] = "invalid value for 'phone', must be conform to the pattern /^1[3456789]\\d{9}$/.";
            }
            if (!is_null($this->container['accountEmail']) && (mb_strlen($this->container['accountEmail']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountEmail', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountEmail']) && (mb_strlen($this->container['accountEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountEmail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountEmail']) && !preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/", $this->container['accountEmail'])) {
                $invalidProperties[] = "invalid value for 'accountEmail', must be conform to the pattern /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.";
            }
        if ($this->container['accountType'] === null) {
            $invalidProperties[] = "'accountType' can't be null";
        }
            $allowedValues = $this->getAccountTypeAllowableValues();
                if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accountType', must be one of '%s'",
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
    * Gets accountName
    *  纳管账号名称。
    *
    * @return string
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string $accountName 纳管账号名称。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets accountId
    *  纳管账号的唯一标识符（ID）。
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
    * @param string|null $accountId 纳管账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets phone
    *  手机号码。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 手机号码。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets accountEmail
    *  纳管账号邮箱。
    *
    * @return string|null
    */
    public function getAccountEmail()
    {
        return $this->container['accountEmail'];
    }

    /**
    * Sets accountEmail
    *
    * @param string|null $accountEmail 纳管账号邮箱。
    *
    * @return $this
    */
    public function setAccountEmail($accountEmail)
    {
        $this->container['accountEmail'] = $accountEmail;
        return $this;
    }

    /**
    * Gets accountType
    *  纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @return string
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param string $accountType 纳管账号类型。类型包括LOGGING，SECURITY。
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
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

