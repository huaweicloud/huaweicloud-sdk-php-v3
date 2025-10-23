<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImpersonationToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImpersonationToken';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 唯一标识id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * revoked  **参数解释：** 是否撤销。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scopes  **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    * active  **参数解释：** 是否可用。
    * expiresAt  **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * impersonation  **参数解释：** 是否为个人token。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'revoked' => 'bool',
            'createdAt' => 'string',
            'scopes' => 'string[]',
            'active' => 'bool',
            'expiresAt' => 'string',
            'impersonation' => 'bool',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 唯一标识id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * revoked  **参数解释：** 是否撤销。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scopes  **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    * active  **参数解释：** 是否可用。
    * expiresAt  **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * impersonation  **参数解释：** 是否为个人token。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'revoked' => null,
        'createdAt' => null,
        'scopes' => null,
        'active' => null,
        'expiresAt' => null,
        'impersonation' => null,
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
    * id  **参数解释：** 唯一标识id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * revoked  **参数解释：** 是否撤销。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scopes  **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    * active  **参数解释：** 是否可用。
    * expiresAt  **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * impersonation  **参数解释：** 是否为个人token。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'revoked' => 'revoked',
            'createdAt' => 'created_at',
            'scopes' => 'scopes',
            'active' => 'active',
            'expiresAt' => 'expires_at',
            'impersonation' => 'impersonation',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 唯一标识id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * revoked  **参数解释：** 是否撤销。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scopes  **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    * active  **参数解释：** 是否可用。
    * expiresAt  **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * impersonation  **参数解释：** 是否为个人token。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'revoked' => 'setRevoked',
            'createdAt' => 'setCreatedAt',
            'scopes' => 'setScopes',
            'active' => 'setActive',
            'expiresAt' => 'setExpiresAt',
            'impersonation' => 'setImpersonation',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 唯一标识id。
    * name  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * revoked  **参数解释：** 是否撤销。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * scopes  **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    * active  **参数解释：** 是否可用。
    * expiresAt  **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * impersonation  **参数解释：** 是否为个人token。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'revoked' => 'getRevoked',
            'createdAt' => 'getCreatedAt',
            'scopes' => 'getScopes',
            'active' => 'getActive',
            'expiresAt' => 'getExpiresAt',
            'impersonation' => 'getImpersonation',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['revoked'] = isset($data['revoked']) ? $data['revoked'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['impersonation'] = isset($data['impersonation']) ? $data['impersonation'] : null;
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
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expiresAt']) && (mb_strlen($this->container['expiresAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'expiresAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['expiresAt']) && (mb_strlen($this->container['expiresAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'expiresAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 唯一标识id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 唯一标识id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets revoked
    *  **参数解释：** 是否撤销。
    *
    * @return bool|null
    */
    public function getRevoked()
    {
        return $this->container['revoked'];
    }

    /**
    * Sets revoked
    *
    * @param bool|null $revoked **参数解释：** 是否撤销。
    *
    * @return $this
    */
    public function setRevoked($revoked)
    {
        $this->container['revoked'] = $revoked;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets scopes
    *  **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    *
    * @return string[]|null
    */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
    * Sets scopes
    *
    * @param string[]|null $scopes **参数解释：** scope权限。 **取值范围：** 字符串长度不少于0，不超过1000。
    *
    * @return $this
    */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;
        return $this;
    }

    /**
    * Gets active
    *  **参数解释：** 是否可用。
    *
    * @return bool|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool|null $active **参数解释：** 是否可用。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets expiresAt
    *  **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string|null $expiresAt **参数解释：** 过期时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets impersonation
    *  **参数解释：** 是否为个人token。
    *
    * @return bool|null
    */
    public function getImpersonation()
    {
        return $this->container['impersonation'];
    }

    /**
    * Sets impersonation
    *
    * @param bool|null $impersonation **参数解释：** 是否为个人token。
    *
    * @return $this
    */
    public function setImpersonation($impersonation)
    {
        $this->container['impersonation'] = $impersonation;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
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

