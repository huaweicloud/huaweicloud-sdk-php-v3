<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * supportTls  支持的tls版本列表
    * cipher  加密套件列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'supportTls' => 'string[]',
            'cipher' => '\HuaweiCloud\SDK\Aad\V2\Model\CipherInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * supportTls  支持的tls版本列表
    * cipher  加密套件列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'supportTls' => null,
        'cipher' => null
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
    * supportTls  支持的tls版本列表
    * cipher  加密套件列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'supportTls' => 'support_tls',
            'cipher' => 'cipher'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * supportTls  支持的tls版本列表
    * cipher  加密套件列表
    *
    * @var string[]
    */
    protected static $setters = [
            'supportTls' => 'setSupportTls',
            'cipher' => 'setCipher'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * supportTls  支持的tls版本列表
    * cipher  加密套件列表
    *
    * @var string[]
    */
    protected static $getters = [
            'supportTls' => 'getSupportTls',
            'cipher' => 'getCipher'
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
        $this->container['supportTls'] = isset($data['supportTls']) ? $data['supportTls'] : null;
        $this->container['cipher'] = isset($data['cipher']) ? $data['cipher'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets supportTls
    *  支持的tls版本列表
    *
    * @return string[]|null
    */
    public function getSupportTls()
    {
        return $this->container['supportTls'];
    }

    /**
    * Sets supportTls
    *
    * @param string[]|null $supportTls 支持的tls版本列表
    *
    * @return $this
    */
    public function setSupportTls($supportTls)
    {
        $this->container['supportTls'] = $supportTls;
        return $this;
    }

    /**
    * Gets cipher
    *  加密套件列表
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\CipherInfo[]|null
    */
    public function getCipher()
    {
        return $this->container['cipher'];
    }

    /**
    * Sets cipher
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\CipherInfo[]|null $cipher 加密套件列表
    *
    * @return $this
    */
    public function setCipher($cipher)
    {
        $this->container['cipher'] = $cipher;
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

