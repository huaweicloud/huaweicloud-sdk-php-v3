<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DecryptDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DecryptDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID。
    * plainText  明文。
    * plainTextBase64  明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'plainText' => 'string',
            'plainTextBase64' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID。
    * plainText  明文。
    * plainTextBase64  明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'plainText' => null,
        'plainTextBase64' => null
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
    * keyId  密钥ID。
    * plainText  明文。
    * plainTextBase64  明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'plainText' => 'plain_text',
            'plainTextBase64' => 'plain_text_base64'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID。
    * plainText  明文。
    * plainTextBase64  明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'plainText' => 'setPlainText',
            'plainTextBase64' => 'setPlainTextBase64'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID。
    * plainText  明文。
    * plainTextBase64  明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'plainText' => 'getPlainText',
            'plainTextBase64' => 'getPlainTextBase64'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['plainText'] = isset($data['plainText']) ? $data['plainText'] : null;
        $this->container['plainTextBase64'] = isset($data['plainTextBase64']) ? $data['plainTextBase64'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['plainText']) && !preg_match("/^.{1,4096}$/", $this->container['plainText'])) {
                $invalidProperties[] = "invalid value for 'plainText', must be conform to the pattern /^.{1,4096}$/.";
            }
            if (!is_null($this->container['plainTextBase64']) && !preg_match("/^[0-9a-zA-Z+\/=]{0,6144}$/", $this->container['plainTextBase64'])) {
                $invalidProperties[] = "invalid value for 'plainTextBase64', must be conform to the pattern /^[0-9a-zA-Z+\/=]{0,6144}$/.";
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
    * Gets keyId
    *  密钥ID。
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets plainText
    *  明文。
    *
    * @return string|null
    */
    public function getPlainText()
    {
        return $this->container['plainText'];
    }

    /**
    * Sets plainText
    *
    * @param string|null $plainText 明文。
    *
    * @return $this
    */
    public function setPlainText($plainText)
    {
        $this->container['plainText'] = $plainText;
        return $this;
    }

    /**
    * Gets plainTextBase64
    *  明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @return string|null
    */
    public function getPlainTextBase64()
    {
        return $this->container['plainTextBase64'];
    }

    /**
    * Sets plainTextBase64
    *
    * @param string|null $plainTextBase64 明文的Base64值，在非对称加密场景下，若加密的明文中含有不可见字符，则解密结果以该值为准。
    *
    * @return $this
    */
    public function setPlainTextBase64($plainTextBase64)
    {
        $this->container['plainTextBase64'] = $plainTextBase64;
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

