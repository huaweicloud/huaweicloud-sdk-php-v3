<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProjectTenantSettingsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProjectTenantSettingsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defaultEncryptionEnabled  **参数解释：** 仓库默认加密设置是否开启。
    * encryptionType  **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    * permitPublic  **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defaultEncryptionEnabled' => 'bool',
            'encryptionType' => 'string',
            'permitPublic' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defaultEncryptionEnabled  **参数解释：** 仓库默认加密设置是否开启。
    * encryptionType  **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    * permitPublic  **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defaultEncryptionEnabled' => null,
        'encryptionType' => null,
        'permitPublic' => null
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
    * defaultEncryptionEnabled  **参数解释：** 仓库默认加密设置是否开启。
    * encryptionType  **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    * permitPublic  **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defaultEncryptionEnabled' => 'default_encryption_enabled',
            'encryptionType' => 'encryption_type',
            'permitPublic' => 'permit_public'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defaultEncryptionEnabled  **参数解释：** 仓库默认加密设置是否开启。
    * encryptionType  **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    * permitPublic  **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @var string[]
    */
    protected static $setters = [
            'defaultEncryptionEnabled' => 'setDefaultEncryptionEnabled',
            'encryptionType' => 'setEncryptionType',
            'permitPublic' => 'setPermitPublic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defaultEncryptionEnabled  **参数解释：** 仓库默认加密设置是否开启。
    * encryptionType  **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    * permitPublic  **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @var string[]
    */
    protected static $getters = [
            'defaultEncryptionEnabled' => 'getDefaultEncryptionEnabled',
            'encryptionType' => 'getEncryptionType',
            'permitPublic' => 'getPermitPublic'
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
        $this->container['defaultEncryptionEnabled'] = isset($data['defaultEncryptionEnabled']) ? $data['defaultEncryptionEnabled'] : null;
        $this->container['encryptionType'] = isset($data['encryptionType']) ? $data['encryptionType'] : null;
        $this->container['permitPublic'] = isset($data['permitPublic']) ? $data['permitPublic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['encryptionType']) && (mb_strlen($this->container['encryptionType']) > 2000)) {
                $invalidProperties[] = "invalid value for 'encryptionType', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['encryptionType']) && (mb_strlen($this->container['encryptionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'encryptionType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permitPublic']) && (mb_strlen($this->container['permitPublic']) > 2000)) {
                $invalidProperties[] = "invalid value for 'permitPublic', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['permitPublic']) && (mb_strlen($this->container['permitPublic']) < 1)) {
                $invalidProperties[] = "invalid value for 'permitPublic', the character length must be bigger than or equal to 1.";
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
    * Gets defaultEncryptionEnabled
    *  **参数解释：** 仓库默认加密设置是否开启。
    *
    * @return bool|null
    */
    public function getDefaultEncryptionEnabled()
    {
        return $this->container['defaultEncryptionEnabled'];
    }

    /**
    * Sets defaultEncryptionEnabled
    *
    * @param bool|null $defaultEncryptionEnabled **参数解释：** 仓库默认加密设置是否开启。
    *
    * @return $this
    */
    public function setDefaultEncryptionEnabled($defaultEncryptionEnabled)
    {
        $this->container['defaultEncryptionEnabled'] = $defaultEncryptionEnabled;
        return $this;
    }

    /**
    * Gets encryptionType
    *  **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    *
    * @return string|null
    */
    public function getEncryptionType()
    {
        return $this->container['encryptionType'];
    }

    /**
    * Sets encryptionType
    *
    * @param string|null $encryptionType **参数解释：** 租户设置的加密类型。 **取值范围：** KMS,normal,null,当为KMS时表示开启了KMS加密。
    *
    * @return $this
    */
    public function setEncryptionType($encryptionType)
    {
        $this->container['encryptionType'] = $encryptionType;
        return $this;
    }

    /**
    * Gets permitPublic
    *  **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @return string|null
    */
    public function getPermitPublic()
    {
        return $this->container['permitPublic'];
    }

    /**
    * Sets permitPublic
    *
    * @param string|null $permitPublic **参数解释：** 允许公共访问。 **取值范围：** allow 允许 deny 拒绝。
    *
    * @return $this
    */
    public function setPermitPublic($permitPublic)
    {
        $this->container['permitPublic'] = $permitPublic;
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

