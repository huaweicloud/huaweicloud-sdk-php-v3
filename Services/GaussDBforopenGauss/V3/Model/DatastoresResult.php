<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatastoresResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatastoresResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * supportedVersions  部署形态支持的引擎版本列表
    * instanceMode  部署形态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'supportedVersions' => 'string[]',
            'instanceMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * supportedVersions  部署形态支持的引擎版本列表
    * instanceMode  部署形态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'supportedVersions' => null,
        'instanceMode' => null
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
    * supportedVersions  部署形态支持的引擎版本列表
    * instanceMode  部署形态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'supportedVersions' => 'supported_versions',
            'instanceMode' => 'instance_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * supportedVersions  部署形态支持的引擎版本列表
    * instanceMode  部署形态
    *
    * @var string[]
    */
    protected static $setters = [
            'supportedVersions' => 'setSupportedVersions',
            'instanceMode' => 'setInstanceMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * supportedVersions  部署形态支持的引擎版本列表
    * instanceMode  部署形态
    *
    * @var string[]
    */
    protected static $getters = [
            'supportedVersions' => 'getSupportedVersions',
            'instanceMode' => 'getInstanceMode'
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
    const INSTANCE_MODE_HA = 'ha';
    const INSTANCE_MODE_INDEPENDENT = 'independent';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceModeAllowableValues()
    {
        return [
            self::INSTANCE_MODE_HA,
            self::INSTANCE_MODE_INDEPENDENT,
        ];
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
        $this->container['supportedVersions'] = isset($data['supportedVersions']) ? $data['supportedVersions'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['supportedVersions'] === null) {
            $invalidProperties[] = "'supportedVersions' can't be null";
        }
        if ($this->container['instanceMode'] === null) {
            $invalidProperties[] = "'instanceMode' can't be null";
        }
            $allowedValues = $this->getInstanceModeAllowableValues();
                if (!is_null($this->container['instanceMode']) && !in_array($this->container['instanceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets supportedVersions
    *  部署形态支持的引擎版本列表
    *
    * @return string[]
    */
    public function getSupportedVersions()
    {
        return $this->container['supportedVersions'];
    }

    /**
    * Sets supportedVersions
    *
    * @param string[] $supportedVersions 部署形态支持的引擎版本列表
    *
    * @return $this
    */
    public function setSupportedVersions($supportedVersions)
    {
        $this->container['supportedVersions'] = $supportedVersions;
        return $this;
    }

    /**
    * Gets instanceMode
    *  部署形态
    *
    * @return string
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string $instanceMode 部署形态
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
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

