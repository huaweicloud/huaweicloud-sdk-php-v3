<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RdsUpgradePrecheckV3Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RdsUpgradePrecheckV3Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetVersion  特定场景使用，普通用户无需填写该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetVersion  特定场景使用，普通用户无需填写该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetVersion' => null
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
    * targetVersion  特定场景使用，普通用户无需填写该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetVersion' => 'target_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetVersion  特定场景使用，普通用户无需填写该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetVersion  特定场景使用，普通用户无需填写该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetVersion' => 'getTargetVersion'
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
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['targetVersion']) && (mb_strlen($this->container['targetVersion']) > 36)) {
                $invalidProperties[] = "invalid value for 'targetVersion', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['targetVersion']) && (mb_strlen($this->container['targetVersion']) < 6)) {
                $invalidProperties[] = "invalid value for 'targetVersion', the character length must be bigger than or equal to 6.";
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
    * Gets targetVersion
    *  特定场景使用，普通用户无需填写该字段。
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 特定场景使用，普通用户无需填写该字段。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
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

