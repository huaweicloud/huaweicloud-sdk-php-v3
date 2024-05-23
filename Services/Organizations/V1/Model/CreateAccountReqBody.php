<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccountReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccountReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  账号名称
    * email  邮箱
    * phone  手机号码
    * agencyName  委托名称
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'agencyName' => 'string',
            'tags' => '\HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  账号名称
    * email  邮箱
    * phone  手机号码
    * agencyName  委托名称
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'email' => null,
        'phone' => null,
        'agencyName' => null,
        'tags' => null
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
    * name  账号名称
    * email  邮箱
    * phone  手机号码
    * agencyName  委托名称
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'email' => 'email',
            'phone' => 'phone',
            'agencyName' => 'agency_name',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  账号名称
    * email  邮箱
    * phone  手机号码
    * agencyName  委托名称
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'email' => 'setEmail',
            'phone' => 'setPhone',
            'agencyName' => 'setAgencyName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  账号名称
    * email  邮箱
    * phone  手机号码
    * agencyName  委托名称
    * tags  要绑定到新创建的账号的标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'email' => 'getEmail',
            'phone' => 'getPhone',
            'agencyName' => 'getAgencyName',
            'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['email']) && !preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/", $this->container['email'])) {
                $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.";
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
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agencyName']) && !preg_match("/^[\\w-]+$/", $this->container['agencyName'])) {
                $invalidProperties[] = "invalid value for 'agencyName', must be conform to the pattern /^[\\w-]+$/.";
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
    * Gets name
    *  账号名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 账号名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets email
    *  邮箱
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets phone
    *  手机号码
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
    * @param string|null $phone 手机号码
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets tags
    *  要绑定到新创建的账号的标签列表。
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\TagDto[]|null $tags 要绑定到新创建的账号的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

