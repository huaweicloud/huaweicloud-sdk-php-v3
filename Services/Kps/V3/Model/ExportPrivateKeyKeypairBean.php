<?php

namespace HuaweiCloud\SDK\Kps\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportPrivateKeyKeypairBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportPrivateKeyKeypairBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  SSH密钥对的名称。
    * privateKey  SSH密钥对的私钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'privateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  SSH密钥对的名称。
    * privateKey  SSH密钥对的私钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
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
    * name  SSH密钥对的名称。
    * privateKey  SSH密钥对的私钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'privateKey' => 'private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  SSH密钥对的名称。
    * privateKey  SSH密钥对的私钥
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'privateKey' => 'setPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  SSH密钥对的名称。
    * privateKey  SSH密钥对的私钥
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9_-]{1,255}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_-]{1,255}$/.";
            }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
        }
            if ((mb_strlen($this->container['privateKey']) > 65535)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['privateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  SSH密钥对的名称。
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
    * @param string $name SSH密钥对的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets privateKey
    *  SSH密钥对的私钥
    *
    * @return string
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string $privateKey SSH密钥对的私钥
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

