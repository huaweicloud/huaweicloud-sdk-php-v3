<?php

namespace HuaweiCloud\SDK\Kps\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeyProtection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeyProtection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateKey  导入SSH密钥对的私钥。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateKey' => 'string',
            'encryption' => '\HuaweiCloud\SDK\Kps\V3\Model\Encryption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateKey  导入SSH密钥对的私钥。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateKey' => null,
        'encryption' => null
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
    * privateKey  导入SSH密钥对的私钥。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateKey' => 'private_key',
            'encryption' => 'encryption'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateKey  导入SSH密钥对的私钥。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $setters = [
            'privateKey' => 'setPrivateKey',
            'encryption' => 'setEncryption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateKey  导入SSH密钥对的私钥。
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $getters = [
            'privateKey' => 'getPrivateKey',
            'encryption' => 'getEncryption'
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
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 65535)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['encryption'] === null) {
            $invalidProperties[] = "'encryption' can't be null";
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
    * Gets privateKey
    *  导入SSH密钥对的私钥。
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey 导入SSH密钥对的私钥。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Kps\V3\Model\Encryption
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Kps\V3\Model\Encryption $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
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

