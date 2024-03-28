<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlDomainAccessSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlDomainAccessSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * slDomainAccessEnabled  设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'slDomainAccessEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * slDomainAccessEnabled  设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'slDomainAccessEnabled' => null
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
    * slDomainAccessEnabled  设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'slDomainAccessEnabled' => 'sl_domain_access_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * slDomainAccessEnabled  设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @var string[]
    */
    protected static $setters = [
            'slDomainAccessEnabled' => 'setSlDomainAccessEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * slDomainAccessEnabled  设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @var string[]
    */
    protected static $getters = [
            'slDomainAccessEnabled' => 'getSlDomainAccessEnabled'
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
        $this->container['slDomainAccessEnabled'] = isset($data['slDomainAccessEnabled']) ? $data['slDomainAccessEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['slDomainAccessEnabled'] === null) {
            $invalidProperties[] = "'slDomainAccessEnabled' can't be null";
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
    * Gets slDomainAccessEnabled
    *  设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @return bool
    */
    public function getSlDomainAccessEnabled()
    {
        return $this->container['slDomainAccessEnabled'];
    }

    /**
    * Sets slDomainAccessEnabled
    *
    * @param bool $slDomainAccessEnabled 设置调试域名是否可以访问，true为可以访问，false为禁止访问
    *
    * @return $this
    */
    public function setSlDomainAccessEnabled($slDomainAccessEnabled)
    {
        $this->container['slDomainAccessEnabled'] = $slDomainAccessEnabled;
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

