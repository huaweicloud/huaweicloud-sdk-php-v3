<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceAccessControlAttributeConfigurationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceAccessControlAttributeConfigurationDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessControlAttributes  IAM身份中心实例中ABAC配置的属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessControlAttributes' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\AccessControlAttributeDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessControlAttributes  IAM身份中心实例中ABAC配置的属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessControlAttributes' => null
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
    * accessControlAttributes  IAM身份中心实例中ABAC配置的属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessControlAttributes' => 'access_control_attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessControlAttributes  IAM身份中心实例中ABAC配置的属性
    *
    * @var string[]
    */
    protected static $setters = [
            'accessControlAttributes' => 'setAccessControlAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessControlAttributes  IAM身份中心实例中ABAC配置的属性
    *
    * @var string[]
    */
    protected static $getters = [
            'accessControlAttributes' => 'getAccessControlAttributes'
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
        $this->container['accessControlAttributes'] = isset($data['accessControlAttributes']) ? $data['accessControlAttributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessControlAttributes'] === null) {
            $invalidProperties[] = "'accessControlAttributes' can't be null";
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
    * Gets accessControlAttributes
    *  IAM身份中心实例中ABAC配置的属性
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\AccessControlAttributeDto[]
    */
    public function getAccessControlAttributes()
    {
        return $this->container['accessControlAttributes'];
    }

    /**
    * Sets accessControlAttributes
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\AccessControlAttributeDto[] $accessControlAttributes IAM身份中心实例中ABAC配置的属性
    *
    * @return $this
    */
    public function setAccessControlAttributes($accessControlAttributes)
    {
        $this->container['accessControlAttributes'] = $accessControlAttributes;
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

