<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatastoreOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatastoreOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineVersion  数据库版本。支持2.3版本，取值为“2.3”。
    * instanceMode  部署形态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineVersion' => 'string',
            'instanceMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineVersion  数据库版本。支持2.3版本，取值为“2.3”。
    * instanceMode  部署形态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineVersion' => null,
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
    * engineVersion  数据库版本。支持2.3版本，取值为“2.3”。
    * instanceMode  部署形态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineVersion' => 'engine_version',
            'instanceMode' => 'instance_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineVersion  数据库版本。支持2.3版本，取值为“2.3”。
    * instanceMode  部署形态。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineVersion' => 'setEngineVersion',
            'instanceMode' => 'setInstanceMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineVersion  数据库版本。支持2.3版本，取值为“2.3”。
    * instanceMode  部署形态。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineVersion' => 'getEngineVersion',
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
    const INSTANCE_MODE_HAREADONLY = 'ha:readonly';
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
            self::INSTANCE_MODE_HAREADONLY,
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
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
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
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
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
    * Gets engineVersion
    *  数据库版本。支持2.3版本，取值为“2.3”。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 数据库版本。支持2.3版本，取值为“2.3”。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets instanceMode
    *  部署形态。
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
    * @param string $instanceMode 部署形态。
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

