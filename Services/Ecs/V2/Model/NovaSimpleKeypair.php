<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaSimpleKeypair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaSimpleKeypair';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fingerprint  密钥对应指纹信息。
    * name  密钥名称。
    * publicKey  密钥对应publicKey信息。
    * type  密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fingerprint' => 'string',
            'name' => 'string',
            'publicKey' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fingerprint  密钥对应指纹信息。
    * name  密钥名称。
    * publicKey  密钥对应publicKey信息。
    * type  密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fingerprint' => null,
        'name' => null,
        'publicKey' => null,
        'type' => null
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
    * fingerprint  密钥对应指纹信息。
    * name  密钥名称。
    * publicKey  密钥对应publicKey信息。
    * type  密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fingerprint' => 'fingerprint',
            'name' => 'name',
            'publicKey' => 'public_key',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fingerprint  密钥对应指纹信息。
    * name  密钥名称。
    * publicKey  密钥对应publicKey信息。
    * type  密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @var string[]
    */
    protected static $setters = [
            'fingerprint' => 'setFingerprint',
            'name' => 'setName',
            'publicKey' => 'setPublicKey',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fingerprint  密钥对应指纹信息。
    * name  密钥名称。
    * publicKey  密钥对应publicKey信息。
    * type  密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @var string[]
    */
    protected static $getters = [
            'fingerprint' => 'getFingerprint',
            'name' => 'getName',
            'publicKey' => 'getPublicKey',
            'type' => 'getType'
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
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fingerprint'] === null) {
            $invalidProperties[] = "'fingerprint' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['publicKey'] === null) {
            $invalidProperties[] = "'publicKey' can't be null";
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
    * Gets fingerprint
    *  密钥对应指纹信息。
    *
    * @return string
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string $fingerprint 密钥对应指纹信息。
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets name
    *  密钥名称。
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
    * @param string $name 密钥名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets publicKey
    *  密钥对应publicKey信息。
    *
    * @return string
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string $publicKey 密钥对应publicKey信息。
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets type
    *  密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 密钥类型，默认“ssh”  微版本2.2以上支持
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

