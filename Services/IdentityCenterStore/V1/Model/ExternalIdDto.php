<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalIdDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalIdDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  外部身份提供商颁发给此资源的标识符
    * issuer  外部标识符的颁发者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'issuer' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  外部身份提供商颁发给此资源的标识符
    * issuer  外部标识符的颁发者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'issuer' => null
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
    * id  外部身份提供商颁发给此资源的标识符
    * issuer  外部标识符的颁发者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'issuer' => 'issuer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  外部身份提供商颁发给此资源的标识符
    * issuer  外部标识符的颁发者
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'issuer' => 'setIssuer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  外部身份提供商颁发给此资源的标识符
    * issuer  外部标识符的颁发者
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'issuer' => 'getIssuer'
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
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 256)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}]+/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}]+/.";
            }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
            if ((mb_strlen($this->container['issuer']) > 100)) {
                $invalidProperties[] = "invalid value for 'issuer', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['issuer']) < 1)) {
                $invalidProperties[] = "invalid value for 'issuer', the character length must be bigger than or equal to 1.";
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
    *  外部身份提供商颁发给此资源的标识符
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 外部身份提供商颁发给此资源的标识符
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets issuer
    *  外部标识符的颁发者
    *
    * @return string
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string $issuer 外部标识符的颁发者
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
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

