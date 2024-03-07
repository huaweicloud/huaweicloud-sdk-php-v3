<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccessPreviewReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccessPreviewReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurations  configurations
    * resourceUrn  访问分析的唯一资源标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurations' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Configuration',
            'resourceUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurations  configurations
    * resourceUrn  访问分析的唯一资源标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurations' => null,
        'resourceUrn' => null
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
    * configurations  configurations
    * resourceUrn  访问分析的唯一资源标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurations' => 'configurations',
            'resourceUrn' => 'resource_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurations  configurations
    * resourceUrn  访问分析的唯一资源标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'configurations' => 'setConfigurations',
            'resourceUrn' => 'setResourceUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurations  configurations
    * resourceUrn  访问分析的唯一资源标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'configurations' => 'getConfigurations',
            'resourceUrn' => 'getResourceUrn'
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
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
        $this->container['resourceUrn'] = isset($data['resourceUrn']) ? $data['resourceUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configurations'] === null) {
            $invalidProperties[] = "'configurations' can't be null";
        }
        if ($this->container['resourceUrn'] === null) {
            $invalidProperties[] = "'resourceUrn' can't be null";
        }
            if ((mb_strlen($this->container['resourceUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be smaller than or equal to 1500.";
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
    * Gets configurations
    *  configurations
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Configuration
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\Configuration $configurations configurations
    *
    * @return $this
    */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;
        return $this;
    }

    /**
    * Gets resourceUrn
    *  访问分析的唯一资源标识。
    *
    * @return string
    */
    public function getResourceUrn()
    {
        return $this->container['resourceUrn'];
    }

    /**
    * Sets resourceUrn
    *
    * @param string $resourceUrn 访问分析的唯一资源标识。
    *
    * @return $this
    */
    public function setResourceUrn($resourceUrn)
    {
        $this->container['resourceUrn'] = $resourceUrn;
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

