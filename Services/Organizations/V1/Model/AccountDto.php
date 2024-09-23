<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  账号的唯一标识符（ID）。
    * urn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式。invited：邀请加入，created：创建加入。
    * status  账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    * joinedAt  账号加入组织的日期。
    * name  账号名称
    * mobilePhone  手机号码
    * intlNumberPrefix  手机号前缀。
    * email  与此账号关联的电子邮件地址。
    * description  描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'urn' => 'string',
            'joinMethod' => 'string',
            'status' => 'string',
            'joinedAt' => '\DateTime',
            'name' => 'string',
            'mobilePhone' => 'string',
            'intlNumberPrefix' => 'string',
            'email' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  账号的唯一标识符（ID）。
    * urn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式。invited：邀请加入，created：创建加入。
    * status  账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    * joinedAt  账号加入组织的日期。
    * name  账号名称
    * mobilePhone  手机号码
    * intlNumberPrefix  手机号前缀。
    * email  与此账号关联的电子邮件地址。
    * description  描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'urn' => null,
        'joinMethod' => null,
        'status' => null,
        'joinedAt' => 'date-time',
        'name' => null,
        'mobilePhone' => null,
        'intlNumberPrefix' => null,
        'email' => null,
        'description' => null
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
    * id  账号的唯一标识符（ID）。
    * urn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式。invited：邀请加入，created：创建加入。
    * status  账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    * joinedAt  账号加入组织的日期。
    * name  账号名称
    * mobilePhone  手机号码
    * intlNumberPrefix  手机号前缀。
    * email  与此账号关联的电子邮件地址。
    * description  描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'urn' => 'urn',
            'joinMethod' => 'join_method',
            'status' => 'status',
            'joinedAt' => 'joined_at',
            'name' => 'name',
            'mobilePhone' => 'mobile_phone',
            'intlNumberPrefix' => 'intl_number_prefix',
            'email' => 'email',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  账号的唯一标识符（ID）。
    * urn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式。invited：邀请加入，created：创建加入。
    * status  账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    * joinedAt  账号加入组织的日期。
    * name  账号名称
    * mobilePhone  手机号码
    * intlNumberPrefix  手机号前缀。
    * email  与此账号关联的电子邮件地址。
    * description  描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'urn' => 'setUrn',
            'joinMethod' => 'setJoinMethod',
            'status' => 'setStatus',
            'joinedAt' => 'setJoinedAt',
            'name' => 'setName',
            'mobilePhone' => 'setMobilePhone',
            'intlNumberPrefix' => 'setIntlNumberPrefix',
            'email' => 'setEmail',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  账号的唯一标识符（ID）。
    * urn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式。invited：邀请加入，created：创建加入。
    * status  账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    * joinedAt  账号加入组织的日期。
    * name  账号名称
    * mobilePhone  手机号码
    * intlNumberPrefix  手机号前缀。
    * email  与此账号关联的电子邮件地址。
    * description  描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'urn' => 'getUrn',
            'joinMethod' => 'getJoinMethod',
            'status' => 'getStatus',
            'joinedAt' => 'getJoinedAt',
            'name' => 'getName',
            'mobilePhone' => 'getMobilePhone',
            'intlNumberPrefix' => 'getIntlNumberPrefix',
            'email' => 'getEmail',
            'description' => 'getDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['joinMethod'] = isset($data['joinMethod']) ? $data['joinMethod'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['joinedAt'] = isset($data['joinedAt']) ? $data['joinedAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mobilePhone'] = isset($data['mobilePhone']) ? $data['mobilePhone'] : null;
        $this->container['intlNumberPrefix'] = isset($data['intlNumberPrefix']) ? $data['intlNumberPrefix'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['joinMethod'] === null) {
            $invalidProperties[] = "'joinMethod' can't be null";
        }
            if ((mb_strlen($this->container['joinMethod']) > 64)) {
                $invalidProperties[] = "invalid value for 'joinMethod', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['joinMethod']) < 1)) {
                $invalidProperties[] = "invalid value for 'joinMethod', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['joinedAt'] === null) {
            $invalidProperties[] = "'joinedAt' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 32)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) < 1)) {
                $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mobilePhone']) && !preg_match("/^1[3456789]\\d{9}$/", $this->container['mobilePhone'])) {
                $invalidProperties[] = "invalid value for 'mobilePhone', must be conform to the pattern /^1[3456789]\\d{9}$/.";
            }
            if (!is_null($this->container['intlNumberPrefix']) && (mb_strlen($this->container['intlNumberPrefix']) > 10)) {
                $invalidProperties[] = "invalid value for 'intlNumberPrefix', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['intlNumberPrefix']) && (mb_strlen($this->container['intlNumberPrefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'intlNumberPrefix', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['email']) && !preg_match("/^[\\s]*[\\w+=.#|!&-]+@[\\w.-]+\\.[\\w]+[\\s]*$/", $this->container['email'])) {
                $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^[\\s]*[\\w+=.#|!&-]+@[\\w.-]+\\.[\\w]+[\\s]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  账号的唯一标识符（ID）。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  账号的统一资源名称。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 账号的统一资源名称。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets joinMethod
    *  账号加入组织的方式。invited：邀请加入，created：创建加入。
    *
    * @return string
    */
    public function getJoinMethod()
    {
        return $this->container['joinMethod'];
    }

    /**
    * Sets joinMethod
    *
    * @param string $joinMethod 账号加入组织的方式。invited：邀请加入，created：创建加入。
    *
    * @return $this
    */
    public function setJoinMethod($joinMethod)
    {
        $this->container['joinMethod'] = $joinMethod;
        return $this;
    }

    /**
    * Gets status
    *  账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 账号当前的状态。active：有效； suspended：已关闭； pending_closure：关闭中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets joinedAt
    *  账号加入组织的日期。
    *
    * @return \DateTime
    */
    public function getJoinedAt()
    {
        return $this->container['joinedAt'];
    }

    /**
    * Sets joinedAt
    *
    * @param \DateTime $joinedAt 账号加入组织的日期。
    *
    * @return $this
    */
    public function setJoinedAt($joinedAt)
    {
        $this->container['joinedAt'] = $joinedAt;
        return $this;
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
    * Gets mobilePhone
    *  手机号码
    *
    * @return string|null
    */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
    * Sets mobilePhone
    *
    * @param string|null $mobilePhone 手机号码
    *
    * @return $this
    */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;
        return $this;
    }

    /**
    * Gets intlNumberPrefix
    *  手机号前缀。
    *
    * @return string|null
    */
    public function getIntlNumberPrefix()
    {
        return $this->container['intlNumberPrefix'];
    }

    /**
    * Sets intlNumberPrefix
    *
    * @param string|null $intlNumberPrefix 手机号前缀。
    *
    * @return $this
    */
    public function setIntlNumberPrefix($intlNumberPrefix)
    {
        $this->container['intlNumberPrefix'] = $intlNumberPrefix;
        return $this;
    }

    /**
    * Gets email
    *  与此账号关联的电子邮件地址。
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
    * @param string|null $email 与此账号关联的电子邮件地址。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

