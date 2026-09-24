<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataEncryption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataEncryption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cmkid  存储库的密钥ID。如果为非加密存储库，默认值为None
    * encryptedAlgorithm  存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cmkid' => 'string',
            'encryptedAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cmkid  存储库的密钥ID。如果为非加密存储库，默认值为None
    * encryptedAlgorithm  存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cmkid' => null,
        'encryptedAlgorithm' => null
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
    * cmkid  存储库的密钥ID。如果为非加密存储库，默认值为None
    * encryptedAlgorithm  存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cmkid' => 'cmkid',
            'encryptedAlgorithm' => 'encrypted_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cmkid  存储库的密钥ID。如果为非加密存储库，默认值为None
    * encryptedAlgorithm  存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @var string[]
    */
    protected static $setters = [
            'cmkid' => 'setCmkid',
            'encryptedAlgorithm' => 'setEncryptedAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cmkid  存储库的密钥ID。如果为非加密存储库，默认值为None
    * encryptedAlgorithm  存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @var string[]
    */
    protected static $getters = [
            'cmkid' => 'getCmkid',
            'encryptedAlgorithm' => 'getEncryptedAlgorithm'
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
        $this->container['cmkid'] = isset($data['cmkid']) ? $data['cmkid'] : null;
        $this->container['encryptedAlgorithm'] = isset($data['encryptedAlgorithm']) ? $data['encryptedAlgorithm'] : null;
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
    * Gets cmkid
    *  存储库的密钥ID。如果为非加密存储库，默认值为None
    *
    * @return string|null
    */
    public function getCmkid()
    {
        return $this->container['cmkid'];
    }

    /**
    * Sets cmkid
    *
    * @param string|null $cmkid 存储库的密钥ID。如果为非加密存储库，默认值为None
    *
    * @return $this
    */
    public function setCmkid($cmkid)
    {
        $this->container['cmkid'] = $cmkid;
        return $this;
    }

    /**
    * Gets encryptedAlgorithm
    *  存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @return string|null
    */
    public function getEncryptedAlgorithm()
    {
        return $this->container['encryptedAlgorithm'];
    }

    /**
    * Sets encryptedAlgorithm
    *
    * @param string|null $encryptedAlgorithm 存储库的加密算法类型。如果为非加密存储库，默认值为None
    *
    * @return $this
    */
    public function setEncryptedAlgorithm($encryptedAlgorithm)
    {
        $this->container['encryptedAlgorithm'] = $encryptedAlgorithm;
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

