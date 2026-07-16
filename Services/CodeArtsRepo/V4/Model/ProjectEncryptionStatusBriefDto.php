<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectEncryptionStatusBriefDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectEncryptionStatusBriefDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    * lastEncryptionAt  **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    * lastDecryptionAt  **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    * isConsistent  **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'status' => 'string',
            'lastEncryptionAt' => 'string',
            'lastDecryptionAt' => 'string',
            'isConsistent' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    * lastEncryptionAt  **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    * lastDecryptionAt  **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    * isConsistent  **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'status' => null,
        'lastEncryptionAt' => null,
        'lastDecryptionAt' => null,
        'isConsistent' => null
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
    * id  **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    * lastEncryptionAt  **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    * lastDecryptionAt  **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    * isConsistent  **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'lastEncryptionAt' => 'last_encryption_at',
            'lastDecryptionAt' => 'last_decryption_at',
            'isConsistent' => 'is_consistent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    * lastEncryptionAt  **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    * lastDecryptionAt  **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    * isConsistent  **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'lastEncryptionAt' => 'setLastEncryptionAt',
            'lastDecryptionAt' => 'setLastDecryptionAt',
            'isConsistent' => 'setIsConsistent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    * lastEncryptionAt  **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    * lastDecryptionAt  **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    * isConsistent  **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'lastEncryptionAt' => 'getLastEncryptionAt',
            'lastDecryptionAt' => 'getLastDecryptionAt',
            'isConsistent' => 'getIsConsistent'
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
    const STATUS_ENCRYPTING = 'encrypting';
    const STATUS_ENCRYPTED = 'encrypted';
    const STATUS_DECRYPTING = 'decrypting';
    const STATUS_DECRYPTED = 'decrypted';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENCRYPTING,
            self::STATUS_ENCRYPTED,
            self::STATUS_DECRYPTING,
            self::STATUS_DECRYPTED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastEncryptionAt'] = isset($data['lastEncryptionAt']) ? $data['lastEncryptionAt'] : null;
        $this->container['lastDecryptionAt'] = isset($data['lastDecryptionAt']) ? $data['lastDecryptionAt'] : null;
        $this->container['isConsistent'] = isset($data['isConsistent']) ? $data['isConsistent'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lastEncryptionAt']) && (mb_strlen($this->container['lastEncryptionAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'lastEncryptionAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['lastEncryptionAt']) && (mb_strlen($this->container['lastEncryptionAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastEncryptionAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastDecryptionAt']) && (mb_strlen($this->container['lastDecryptionAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'lastDecryptionAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['lastDecryptionAt']) && (mb_strlen($this->container['lastDecryptionAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastDecryptionAt', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
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
    * @param int|null $id **参数解释：** 仓库加密状态ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 仓库加密状态 **取值范围：** - encrypting，加密中。 - encrypted，已加密。 - decrypting，解密中。 - decrypted，已解密。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastEncryptionAt
    *  **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastEncryptionAt()
    {
        return $this->container['lastEncryptionAt'];
    }

    /**
    * Sets lastEncryptionAt
    *
    * @param string|null $lastEncryptionAt **参数解释：** 最近加密时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastEncryptionAt($lastEncryptionAt)
    {
        $this->container['lastEncryptionAt'] = $lastEncryptionAt;
        return $this;
    }

    /**
    * Gets lastDecryptionAt
    *  **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLastDecryptionAt()
    {
        return $this->container['lastDecryptionAt'];
    }

    /**
    * Sets lastDecryptionAt
    *
    * @param string|null $lastDecryptionAt **参数解释：** 最近解密时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLastDecryptionAt($lastDecryptionAt)
    {
        $this->container['lastDecryptionAt'] = $lastDecryptionAt;
        return $this;
    }

    /**
    * Gets isConsistent
    *  **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @return bool|null
    */
    public function getIsConsistent()
    {
        return $this->container['isConsistent'];
    }

    /**
    * Sets isConsistent
    *
    * @param bool|null $isConsistent **参数解释：** 是否开启仓库加密。 **约束限制：** 不涉及。 **取值范围：** - true，开启仓库加密。 - false，关闭仓库加密。
    *
    * @return $this
    */
    public function setIsConsistent($isConsistent)
    {
        $this->container['isConsistent'] = $isConsistent;
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

