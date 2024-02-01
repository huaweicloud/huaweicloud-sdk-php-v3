<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlTdeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlTdeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableTde  是否打开透明加密功能。
    * encryptionType  透明加密算法，支持AES256、SM4加密算法。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableTde' => 'bool',
            'encryptionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableTde  是否打开透明加密功能。
    * encryptionType  透明加密算法，支持AES256、SM4加密算法。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableTde' => null,
        'encryptionType' => null
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
    * enableTde  是否打开透明加密功能。
    * encryptionType  透明加密算法，支持AES256、SM4加密算法。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableTde' => 'enable_tde',
            'encryptionType' => 'encryption_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableTde  是否打开透明加密功能。
    * encryptionType  透明加密算法，支持AES256、SM4加密算法。
    *
    * @var string[]
    */
    protected static $setters = [
            'enableTde' => 'setEnableTde',
            'encryptionType' => 'setEncryptionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableTde  是否打开透明加密功能。
    * encryptionType  透明加密算法，支持AES256、SM4加密算法。
    *
    * @var string[]
    */
    protected static $getters = [
            'enableTde' => 'getEnableTde',
            'encryptionType' => 'getEncryptionType'
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
        $this->container['enableTde'] = isset($data['enableTde']) ? $data['enableTde'] : null;
        $this->container['encryptionType'] = isset($data['encryptionType']) ? $data['encryptionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableTde'] === null) {
            $invalidProperties[] = "'enableTde' can't be null";
        }
        if ($this->container['encryptionType'] === null) {
            $invalidProperties[] = "'encryptionType' can't be null";
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
    * Gets enableTde
    *  是否打开透明加密功能。
    *
    * @return bool
    */
    public function getEnableTde()
    {
        return $this->container['enableTde'];
    }

    /**
    * Sets enableTde
    *
    * @param bool $enableTde 是否打开透明加密功能。
    *
    * @return $this
    */
    public function setEnableTde($enableTde)
    {
        $this->container['enableTde'] = $enableTde;
        return $this;
    }

    /**
    * Gets encryptionType
    *  透明加密算法，支持AES256、SM4加密算法。
    *
    * @return string
    */
    public function getEncryptionType()
    {
        return $this->container['encryptionType'];
    }

    /**
    * Sets encryptionType
    *
    * @param string $encryptionType 透明加密算法，支持AES256、SM4加密算法。
    *
    * @return $this
    */
    public function setEncryptionType($encryptionType)
    {
        $this->container['encryptionType'] = $encryptionType;
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

