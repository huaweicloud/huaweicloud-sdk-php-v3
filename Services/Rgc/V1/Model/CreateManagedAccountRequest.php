<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateManagedAccountRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateManagedAccountRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  纳管账号名。
    * accountEmail  纳管账号邮箱。
    * phone  手机号码。
    * identityStoreUserName  Identity Center用户名。
    * identityStoreEmail  Identity Center邮箱。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'accountEmail' => 'string',
            'phone' => 'string',
            'identityStoreUserName' => 'string',
            'identityStoreEmail' => 'string',
            'parentOrganizationalUnitId' => 'string',
            'parentOrganizationalUnitName' => 'string',
            'blueprint' => '\HuaweiCloud\SDK\Rgc\V1\Model\Blueprint'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  纳管账号名。
    * accountEmail  纳管账号邮箱。
    * phone  手机号码。
    * identityStoreUserName  Identity Center用户名。
    * identityStoreEmail  Identity Center邮箱。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'accountEmail' => null,
        'phone' => null,
        'identityStoreUserName' => null,
        'identityStoreEmail' => null,
        'parentOrganizationalUnitId' => null,
        'parentOrganizationalUnitName' => null,
        'blueprint' => null
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
    * accountName  纳管账号名。
    * accountEmail  纳管账号邮箱。
    * phone  手机号码。
    * identityStoreUserName  Identity Center用户名。
    * identityStoreEmail  Identity Center邮箱。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'accountEmail' => 'account_email',
            'phone' => 'phone',
            'identityStoreUserName' => 'identity_store_user_name',
            'identityStoreEmail' => 'identity_store_email',
            'parentOrganizationalUnitId' => 'parent_organizational_unit_id',
            'parentOrganizationalUnitName' => 'parent_organizational_unit_name',
            'blueprint' => 'blueprint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  纳管账号名。
    * accountEmail  纳管账号邮箱。
    * phone  手机号码。
    * identityStoreUserName  Identity Center用户名。
    * identityStoreEmail  Identity Center邮箱。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'accountEmail' => 'setAccountEmail',
            'phone' => 'setPhone',
            'identityStoreUserName' => 'setIdentityStoreUserName',
            'identityStoreEmail' => 'setIdentityStoreEmail',
            'parentOrganizationalUnitId' => 'setParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'setParentOrganizationalUnitName',
            'blueprint' => 'setBlueprint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  纳管账号名。
    * accountEmail  纳管账号邮箱。
    * phone  手机号码。
    * identityStoreUserName  Identity Center用户名。
    * identityStoreEmail  Identity Center邮箱。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'accountEmail' => 'getAccountEmail',
            'phone' => 'getPhone',
            'identityStoreUserName' => 'getIdentityStoreUserName',
            'identityStoreEmail' => 'getIdentityStoreEmail',
            'parentOrganizationalUnitId' => 'getParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'getParentOrganizationalUnitName',
            'blueprint' => 'getBlueprint'
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountEmail'] = isset($data['accountEmail']) ? $data['accountEmail'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['identityStoreUserName'] = isset($data['identityStoreUserName']) ? $data['identityStoreUserName'] : null;
        $this->container['identityStoreEmail'] = isset($data['identityStoreEmail']) ? $data['identityStoreEmail'] : null;
        $this->container['parentOrganizationalUnitId'] = isset($data['parentOrganizationalUnitId']) ? $data['parentOrganizationalUnitId'] : null;
        $this->container['parentOrganizationalUnitName'] = isset($data['parentOrganizationalUnitName']) ? $data['parentOrganizationalUnitName'] : null;
        $this->container['blueprint'] = isset($data['blueprint']) ? $data['blueprint'] : null;
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
            if (!is_null($this->container['accountEmail']) && (mb_strlen($this->container['accountEmail']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountEmail', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountEmail']) && (mb_strlen($this->container['accountEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountEmail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountEmail']) && !preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/", $this->container['accountEmail'])) {
                $invalidProperties[] = "invalid value for 'accountEmail', must be conform to the pattern /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.";
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
            if (!is_null($this->container['identityStoreUserName']) && (mb_strlen($this->container['identityStoreUserName']) > 128)) {
                $invalidProperties[] = "invalid value for 'identityStoreUserName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['identityStoreUserName']) && (mb_strlen($this->container['identityStoreUserName']) < 2)) {
                $invalidProperties[] = "invalid value for 'identityStoreUserName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['identityStoreUserName']) && !preg_match("/[\\w+=,.@-]+/", $this->container['identityStoreUserName'])) {
                $invalidProperties[] = "invalid value for 'identityStoreUserName', must be conform to the pattern /[\\w+=,.@-]+/.";
            }
            if (!is_null($this->container['identityStoreEmail']) && (mb_strlen($this->container['identityStoreEmail']) > 1024)) {
                $invalidProperties[] = "invalid value for 'identityStoreEmail', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['identityStoreEmail']) && (mb_strlen($this->container['identityStoreEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreEmail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identityStoreEmail']) && !preg_match("/^((([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))$/", $this->container['identityStoreEmail'])) {
                $invalidProperties[] = "invalid value for 'identityStoreEmail', must be conform to the pattern /^((([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))$/.";
            }
        if ($this->container['parentOrganizationalUnitId'] === null) {
            $invalidProperties[] = "'parentOrganizationalUnitId' can't be null";
        }
            if ((mb_strlen($this->container['parentOrganizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentOrganizationalUnitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^ou-[0-9a-z]{8,32}$/", $this->container['parentOrganizationalUnitId'])) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', must be conform to the pattern /^ou-[0-9a-z]{8,32}$/.";
            }
        if ($this->container['parentOrganizationalUnitName'] === null) {
            $invalidProperties[] = "'parentOrganizationalUnitName' can't be null";
        }
            if ((mb_strlen($this->container['parentOrganizationalUnitName']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentOrganizationalUnitName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['parentOrganizationalUnitName'])) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
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
    *  纳管账号名。
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
    * @param string $accountName 纳管账号名。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
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
    * Gets identityStoreUserName
    *  Identity Center用户名。
    *
    * @return string|null
    */
    public function getIdentityStoreUserName()
    {
        return $this->container['identityStoreUserName'];
    }

    /**
    * Sets identityStoreUserName
    *
    * @param string|null $identityStoreUserName Identity Center用户名。
    *
    * @return $this
    */
    public function setIdentityStoreUserName($identityStoreUserName)
    {
        $this->container['identityStoreUserName'] = $identityStoreUserName;
        return $this;
    }

    /**
    * Gets identityStoreEmail
    *  Identity Center邮箱。
    *
    * @return string|null
    */
    public function getIdentityStoreEmail()
    {
        return $this->container['identityStoreEmail'];
    }

    /**
    * Sets identityStoreEmail
    *
    * @param string|null $identityStoreEmail Identity Center邮箱。
    *
    * @return $this
    */
    public function setIdentityStoreEmail($identityStoreEmail)
    {
        $this->container['identityStoreEmail'] = $identityStoreEmail;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitId
    *  父注册OU ID。
    *
    * @return string
    */
    public function getParentOrganizationalUnitId()
    {
        return $this->container['parentOrganizationalUnitId'];
    }

    /**
    * Sets parentOrganizationalUnitId
    *
    * @param string $parentOrganizationalUnitId 父注册OU ID。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitId($parentOrganizationalUnitId)
    {
        $this->container['parentOrganizationalUnitId'] = $parentOrganizationalUnitId;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitName
    *  父注册OU名称。
    *
    * @return string
    */
    public function getParentOrganizationalUnitName()
    {
        return $this->container['parentOrganizationalUnitName'];
    }

    /**
    * Sets parentOrganizationalUnitName
    *
    * @param string $parentOrganizationalUnitName 父注册OU名称。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitName($parentOrganizationalUnitName)
    {
        $this->container['parentOrganizationalUnitName'] = $parentOrganizationalUnitName;
        return $this;
    }

    /**
    * Gets blueprint
    *  blueprint
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\Blueprint|null
    */
    public function getBlueprint()
    {
        return $this->container['blueprint'];
    }

    /**
    * Sets blueprint
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\Blueprint|null $blueprint blueprint
    *
    * @return $this
    */
    public function setBlueprint($blueprint)
    {
        $this->container['blueprint'] = $blueprint;
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

