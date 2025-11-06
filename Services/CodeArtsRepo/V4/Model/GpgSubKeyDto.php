<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GpgSubKeyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GpgSubKeyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 子公钥subkey的id。
    * fingerprint  **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * gpgKeyId  **参数解释：** gpg_key的id。
    * keyid  **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'fingerprint' => 'string',
            'gpgKeyId' => 'int',
            'keyid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 子公钥subkey的id。
    * fingerprint  **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * gpgKeyId  **参数解释：** gpg_key的id。
    * keyid  **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'fingerprint' => null,
        'gpgKeyId' => 'int32',
        'keyid' => null
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
    * id  **参数解释：** 子公钥subkey的id。
    * fingerprint  **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * gpgKeyId  **参数解释：** gpg_key的id。
    * keyid  **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fingerprint' => 'fingerprint',
            'gpgKeyId' => 'gpg_key_id',
            'keyid' => 'keyid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 子公钥subkey的id。
    * fingerprint  **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * gpgKeyId  **参数解释：** gpg_key的id。
    * keyid  **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fingerprint' => 'setFingerprint',
            'gpgKeyId' => 'setGpgKeyId',
            'keyid' => 'setKeyid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 子公钥subkey的id。
    * fingerprint  **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    * gpgKeyId  **参数解释：** gpg_key的id。
    * keyid  **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fingerprint' => 'getFingerprint',
            'gpgKeyId' => 'getGpgKeyId',
            'keyid' => 'getKeyid'
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
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['gpgKeyId'] = isset($data['gpgKeyId']) ? $data['gpgKeyId'] : null;
        $this->container['keyid'] = isset($data['keyid']) ? $data['keyid'] : null;
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
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) < 1)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gpgKeyId']) && ($this->container['gpgKeyId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'gpgKeyId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['gpgKeyId']) && ($this->container['gpgKeyId'] < 1)) {
                $invalidProperties[] = "invalid value for 'gpgKeyId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keyid']) && (mb_strlen($this->container['keyid']) > 1000)) {
                $invalidProperties[] = "invalid value for 'keyid', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['keyid']) && (mb_strlen($this->container['keyid']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyid', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 子公钥subkey的id。
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
    * @param int|null $id **参数解释：** 子公钥subkey的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fingerprint
    *  **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $fingerprint **参数解释：** 子公钥的指纹格式。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets gpgKeyId
    *  **参数解释：** gpg_key的id。
    *
    * @return int|null
    */
    public function getGpgKeyId()
    {
        return $this->container['gpgKeyId'];
    }

    /**
    * Sets gpgKeyId
    *
    * @param int|null $gpgKeyId **参数解释：** gpg_key的id。
    *
    * @return $this
    */
    public function setGpgKeyId($gpgKeyId)
    {
        $this->container['gpgKeyId'] = $gpgKeyId;
        return $this;
    }

    /**
    * Gets keyid
    *  **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getKeyid()
    {
        return $this->container['keyid'];
    }

    /**
    * Sets keyid
    *
    * @param string|null $keyid **参数解释：** 子密钥的id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setKeyid($keyid)
    {
        $this->container['keyid'] = $keyid;
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

