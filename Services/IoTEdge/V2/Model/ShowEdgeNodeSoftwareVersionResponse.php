<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEdgeNodeSoftwareVersionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEdgeNodeSoftwareVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'softwareVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'softwareVersion' => null
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
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'softwareVersion' => 'software_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $setters = [
            'softwareVersion' => 'setSoftwareVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * softwareVersion  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @var string[]
    */
    protected static $getters = [
            'softwareVersion' => 'getSoftwareVersion'
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
        $this->container['softwareVersion'] = isset($data['softwareVersion']) ? $data['softwareVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['softwareVersion']) && (mb_strlen($this->container['softwareVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'softwareVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['softwareVersion']) && (mb_strlen($this->container['softwareVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'softwareVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['softwareVersion']) && !preg_match("/^[A-Za-z0-9-_$]*$/", $this->container['softwareVersion'])) {
                $invalidProperties[] = "invalid value for 'softwareVersion', must be conform to the pattern /^[A-Za-z0-9-_$]*$/.";
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
    * Gets softwareVersion
    *  边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return string|null
    */
    public function getSoftwareVersion()
    {
        return $this->container['softwareVersion'];
    }

    /**
    * Sets softwareVersion
    *
    * @param string|null $softwareVersion 边缘应用id，只允许数字、英文小写、中划线，切必须以字母或数字结尾
    *
    * @return $this
    */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->container['softwareVersion'] = $softwareVersion;
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

