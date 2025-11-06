<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUserGpgKeysResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUserGpgKeysResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 记录id。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * emailsWithVerifiedStatus  **参数解释：** 解析到的邮箱列表以及是否生效。
    * fingerprint  **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * key  **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * title  **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    * primaryKeyid  **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * active  **参数解释：** 是否生效。
    * subkeys  **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'createdAt' => 'string',
            'emailsWithVerifiedStatus' => 'map[string,bool]',
            'fingerprint' => 'string',
            'key' => 'string',
            'description' => 'string',
            'title' => 'string',
            'primaryKeyid' => 'string',
            'active' => 'bool',
            'subkeys' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GpgSubKeyDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 记录id。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * emailsWithVerifiedStatus  **参数解释：** 解析到的邮箱列表以及是否生效。
    * fingerprint  **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * key  **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * title  **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    * primaryKeyid  **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * active  **参数解释：** 是否生效。
    * subkeys  **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'createdAt' => null,
        'emailsWithVerifiedStatus' => null,
        'fingerprint' => null,
        'key' => null,
        'description' => null,
        'title' => null,
        'primaryKeyid' => null,
        'active' => null,
        'subkeys' => null
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
    * id  **参数解释：** 记录id。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * emailsWithVerifiedStatus  **参数解释：** 解析到的邮箱列表以及是否生效。
    * fingerprint  **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * key  **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * title  **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    * primaryKeyid  **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * active  **参数解释：** 是否生效。
    * subkeys  **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createdAt' => 'created_at',
            'emailsWithVerifiedStatus' => 'emails_with_verified_status',
            'fingerprint' => 'fingerprint',
            'key' => 'key',
            'description' => 'description',
            'title' => 'title',
            'primaryKeyid' => 'primary_keyid',
            'active' => 'active',
            'subkeys' => 'subkeys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 记录id。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * emailsWithVerifiedStatus  **参数解释：** 解析到的邮箱列表以及是否生效。
    * fingerprint  **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * key  **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * title  **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    * primaryKeyid  **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * active  **参数解释：** 是否生效。
    * subkeys  **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createdAt' => 'setCreatedAt',
            'emailsWithVerifiedStatus' => 'setEmailsWithVerifiedStatus',
            'fingerprint' => 'setFingerprint',
            'key' => 'setKey',
            'description' => 'setDescription',
            'title' => 'setTitle',
            'primaryKeyid' => 'setPrimaryKeyid',
            'active' => 'setActive',
            'subkeys' => 'setSubkeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 记录id。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * emailsWithVerifiedStatus  **参数解释：** 解析到的邮箱列表以及是否生效。
    * fingerprint  **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * key  **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述。 **取值范围：** 字符串长度不少于1，不超过1000。
    * title  **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    * primaryKeyid  **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * active  **参数解释：** 是否生效。
    * subkeys  **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createdAt' => 'getCreatedAt',
            'emailsWithVerifiedStatus' => 'getEmailsWithVerifiedStatus',
            'fingerprint' => 'getFingerprint',
            'key' => 'getKey',
            'description' => 'getDescription',
            'title' => 'getTitle',
            'primaryKeyid' => 'getPrimaryKeyid',
            'active' => 'getActive',
            'subkeys' => 'getSubkeys'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['emailsWithVerifiedStatus'] = isset($data['emailsWithVerifiedStatus']) ? $data['emailsWithVerifiedStatus'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['primaryKeyid'] = isset($data['primaryKeyid']) ? $data['primaryKeyid'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['subkeys'] = isset($data['subkeys']) ? $data['subkeys'] : null;
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
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) < 1)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 1000)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1000)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['primaryKeyid']) && (mb_strlen($this->container['primaryKeyid']) > 1000)) {
                $invalidProperties[] = "invalid value for 'primaryKeyid', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['primaryKeyid']) && (mb_strlen($this->container['primaryKeyid']) < 1)) {
                $invalidProperties[] = "invalid value for 'primaryKeyid', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 记录id。
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
    * @param int|null $id **参数解释：** 记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets emailsWithVerifiedStatus
    *  **参数解释：** 解析到的邮箱列表以及是否生效。
    *
    * @return map[string,bool]|null
    */
    public function getEmailsWithVerifiedStatus()
    {
        return $this->container['emailsWithVerifiedStatus'];
    }

    /**
    * Sets emailsWithVerifiedStatus
    *
    * @param map[string,bool]|null $emailsWithVerifiedStatus **参数解释：** 解析到的邮箱列表以及是否生效。
    *
    * @return $this
    */
    public function setEmailsWithVerifiedStatus($emailsWithVerifiedStatus)
    {
        $this->container['emailsWithVerifiedStatus'] = $emailsWithVerifiedStatus;
        return $this;
    }

    /**
    * Gets fingerprint
    *  **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint **参数解释：** 主密/公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets key
    *  **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释：** gpg的公钥。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
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
    * Gets title
    *  **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：** gpg_key的标题。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets primaryKeyid
    *  **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getPrimaryKeyid()
    {
        return $this->container['primaryKeyid'];
    }

    /**
    * Sets primaryKeyid
    *
    * @param string|null $primaryKeyid **参数解释：** 主密/公钥primary_key的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setPrimaryKeyid($primaryKeyid)
    {
        $this->container['primaryKeyid'] = $primaryKeyid;
        return $this;
    }

    /**
    * Gets active
    *  **参数解释：** 是否生效。
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
    * @param bool|null $active **参数解释：** 是否生效。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets subkeys
    *  **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GpgSubKeyDto[]|null
    */
    public function getSubkeys()
    {
        return $this->container['subkeys'];
    }

    /**
    * Sets subkeys
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\GpgSubKeyDto[]|null $subkeys **参数解释：** 子钥列表。 **取值范围：** 列表长度不少于0，不超过1000。
    *
    * @return $this
    */
    public function setSubkeys($subkeys)
    {
        $this->container['subkeys'] = $subkeys;
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

