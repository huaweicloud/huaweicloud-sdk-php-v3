<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStorageTypeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStorageTypeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineName  数据库版本类型： - 取值为“DDS-Community”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineName  数据库版本类型： - 取值为“DDS-Community”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineName' => null
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
    * engineName  数据库版本类型： - 取值为“DDS-Community”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineName' => 'engine_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineName  数据库版本类型： - 取值为“DDS-Community”。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineName' => 'setEngineName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineName  数据库版本类型： - 取值为“DDS-Community”。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineName' => 'getEngineName'
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
    const ENGINE_NAME_DDS_COMMUNITY = 'DDS-Community';
    const ENGINE_NAME_DDS_ENHANCED = 'DDS-Enhanced';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineNameAllowableValues()
    {
        return [
            self::ENGINE_NAME_DDS_COMMUNITY,
            self::ENGINE_NAME_DDS_ENHANCED,
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
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEngineNameAllowableValues();
                if (!is_null($this->container['engineName']) && !in_array($this->container['engineName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineName', must be one of '%s'",
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
    * Gets engineName
    *  数据库版本类型： - 取值为“DDS-Community”。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 数据库版本类型： - 取值为“DDS-Community”。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
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

