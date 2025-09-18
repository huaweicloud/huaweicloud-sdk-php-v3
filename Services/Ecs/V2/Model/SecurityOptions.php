<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secureBootEnabled  是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    * tpmEnabled  是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secureBootEnabled' => 'bool',
            'tpmEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secureBootEnabled  是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    * tpmEnabled  是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secureBootEnabled' => null,
        'tpmEnabled' => null
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
    * secureBootEnabled  是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    * tpmEnabled  是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secureBootEnabled' => 'secure_boot_enabled',
            'tpmEnabled' => 'tpm_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secureBootEnabled  是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    * tpmEnabled  是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @var string[]
    */
    protected static $setters = [
            'secureBootEnabled' => 'setSecureBootEnabled',
            'tpmEnabled' => 'setTpmEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secureBootEnabled  是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    * tpmEnabled  是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @var string[]
    */
    protected static $getters = [
            'secureBootEnabled' => 'getSecureBootEnabled',
            'tpmEnabled' => 'getTpmEnabled'
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
        $this->container['secureBootEnabled'] = isset($data['secureBootEnabled']) ? $data['secureBootEnabled'] : null;
        $this->container['tpmEnabled'] = isset($data['tpmEnabled']) ? $data['tpmEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['secureBootEnabled'] === null) {
            $invalidProperties[] = "'secureBootEnabled' can't be null";
        }
        if ($this->container['tpmEnabled'] === null) {
            $invalidProperties[] = "'tpmEnabled' can't be null";
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
    * Gets secureBootEnabled
    *  是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    *
    * @return bool
    */
    public function getSecureBootEnabled()
    {
        return $this->container['secureBootEnabled'];
    }

    /**
    * Sets secureBootEnabled
    *
    * @param bool $secureBootEnabled 是否支持安全启动 true:支持安全启动 false:不支持安全启动 默认值：false
    *
    * @return $this
    */
    public function setSecureBootEnabled($secureBootEnabled)
    {
        $this->container['secureBootEnabled'] = $secureBootEnabled;
        return $this;
    }

    /**
    * Gets tpmEnabled
    *  是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @return bool
    */
    public function getTpmEnabled()
    {
        return $this->container['tpmEnabled'];
    }

    /**
    * Sets tpmEnabled
    *
    * @param bool $tpmEnabled 是否支持vtpm启动 true:支持vtpm启动 false:不支持vtpm启动 默认值：false
    *
    * @return $this
    */
    public function setTpmEnabled($tpmEnabled)
    {
        $this->container['tpmEnabled'] = $tpmEnabled;
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

