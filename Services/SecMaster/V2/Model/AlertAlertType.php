<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertAlertType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_alert_type';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  类别
    * alertType  告警类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'alertType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  类别
    * alertType  告警类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'alertType' => null
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
    * category  类别
    * alertType  告警类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'alertType' => 'alert_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  类别
    * alertType  告警类型
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'alertType' => 'setAlertType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  类别
    * alertType  告警类型
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'alertType' => 'getAlertType'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['alertType'] = isset($data['alertType']) ? $data['alertType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 1024)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertType']) && (mb_strlen($this->container['alertType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'alertType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['alertType']) && (mb_strlen($this->container['alertType']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertType', the character length must be bigger than or equal to 0.";
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
    * Gets category
    *  类别
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets alertType
    *  告警类型
    *
    * @return string|null
    */
    public function getAlertType()
    {
        return $this->container['alertType'];
    }

    /**
    * Sets alertType
    *
    * @param string|null $alertType 告警类型
    *
    * @return $this
    */
    public function setAlertType($alertType)
    {
        $this->container['alertType'] = $alertType;
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

