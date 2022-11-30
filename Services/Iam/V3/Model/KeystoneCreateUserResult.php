<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneCreateUserResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneCreateUserResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * description  IAM用户描述信息。
    * passwordExpiresAt  IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    * links  links
    * id  IAM用户ID。
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'passwordExpiresAt' => 'string',
            'links' => '\HuaweiCloud\SDK\Iam\V3\Model\LinksSelf',
            'id' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * description  IAM用户描述信息。
    * passwordExpiresAt  IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    * links  links
    * id  IAM用户ID。
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'name' => null,
        'description' => null,
        'passwordExpiresAt' => null,
        'links' => null,
        'id' => null,
        'enabled' => null
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
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * description  IAM用户描述信息。
    * passwordExpiresAt  IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    * links  links
    * id  IAM用户ID。
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'name' => 'name',
            'description' => 'description',
            'passwordExpiresAt' => 'password_expires_at',
            'links' => 'links',
            'id' => 'id',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * description  IAM用户描述信息。
    * passwordExpiresAt  IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    * links  links
    * id  IAM用户ID。
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'description' => 'setDescription',
            'passwordExpiresAt' => 'setPasswordExpiresAt',
            'links' => 'setLinks',
            'id' => 'setId',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * description  IAM用户描述信息。
    * passwordExpiresAt  IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    * links  links
    * id  IAM用户ID。
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'description' => 'getDescription',
            'passwordExpiresAt' => 'getPasswordExpiresAt',
            'links' => 'getLinks',
            'id' => 'getId',
            'enabled' => 'getEnabled'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['passwordExpiresAt'] = isset($data['passwordExpiresAt']) ? $data['passwordExpiresAt'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['passwordExpiresAt'] === null) {
            $invalidProperties[] = "'passwordExpiresAt' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets domainId
    *  IAM用户所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId IAM用户所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  IAM用户名。
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
    * @param string $name IAM用户名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  IAM用户描述信息。
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
    * @param string|null $description IAM用户描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets passwordExpiresAt
    *  IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    *
    * @return string
    */
    public function getPasswordExpiresAt()
    {
        return $this->container['passwordExpiresAt'];
    }

    /**
    * Sets passwordExpiresAt
    *
    * @param string $passwordExpiresAt IAM用户密码过期时间（UTC时间），“null”表示密码不过期。
    *
    * @return $this
    */
    public function setPasswordExpiresAt($passwordExpiresAt)
    {
        $this->container['passwordExpiresAt'] = $passwordExpiresAt;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\LinksSelf
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\LinksSelf $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets id
    *  IAM用户ID。
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
    * @param string $id IAM用户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enabled
    *  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled IAM用户是否启用。true表示启用，false表示停用，默认为true。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

