<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnoseTypeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnoseTypeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null
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
    * type  数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType'
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
    const TYPE_SENSITIVE_DATA = 'SENSITIVE_DATA';
    const TYPE_PERMISSION_MANAGEMENT = 'PERMISSION_MANAGEMENT';
    const TYPE_DATASOURCE_PROTECTION = 'DATASOURCE_PROTECTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SENSITIVE_DATA,
            self::TYPE_PERMISSION_MANAGEMENT,
            self::TYPE_DATASOURCE_PROTECTION,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets type
    *  数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 数据安全诊断项 * SENSITIVE_DATA 敏感数据保护 * PERMISSION_MANAGEMENT 数据权限控制 * DATASOURCE_PROTECTION 数据源防护
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

