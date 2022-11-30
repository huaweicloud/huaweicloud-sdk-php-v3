<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCertKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCertKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cert  证书
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cert' => 'string',
            'privateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cert  证书
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cert' => null,
        'privateKey' => null
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
    * cert  证书
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cert' => 'cert',
            'privateKey' => 'private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cert  证书
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $setters = [
            'cert' => 'setCert',
            'privateKey' => 'setPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cert  证书
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $getters = [
            'cert' => 'getCert',
            'privateKey' => 'getPrivateKey'
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
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cert']) && (mb_strlen($this->container['cert']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'cert', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['cert']) && (mb_strlen($this->container['cert']) < 1)) {
                $invalidProperties[] = "invalid value for 'cert', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 1.";
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
    * Gets cert
    *  证书
    *
    * @return string|null
    */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
    * Sets cert
    *
    * @param string|null $cert 证书
    *
    * @return $this
    */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;
        return $this;
    }

    /**
    * Gets privateKey
    *  私钥
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
    * @param string|null $privateKey 私钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
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

