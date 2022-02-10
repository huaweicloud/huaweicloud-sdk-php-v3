<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceTypeName  云服务类型的名称。
    * serviceTypeCode  云服务类型的编码。
    * abbreviation  云服务类型的缩写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceTypeName' => 'string',
            'serviceTypeCode' => 'string',
            'abbreviation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceTypeName  云服务类型的名称。
    * serviceTypeCode  云服务类型的编码。
    * abbreviation  云服务类型的缩写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceTypeName' => null,
        'serviceTypeCode' => null,
        'abbreviation' => null
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
    * serviceTypeName  云服务类型的名称。
    * serviceTypeCode  云服务类型的编码。
    * abbreviation  云服务类型的缩写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceTypeName' => 'service_type_name',
            'serviceTypeCode' => 'service_type_code',
            'abbreviation' => 'abbreviation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceTypeName  云服务类型的名称。
    * serviceTypeCode  云服务类型的编码。
    * abbreviation  云服务类型的缩写。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceTypeName' => 'setServiceTypeName',
            'serviceTypeCode' => 'setServiceTypeCode',
            'abbreviation' => 'setAbbreviation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceTypeName  云服务类型的名称。
    * serviceTypeCode  云服务类型的编码。
    * abbreviation  云服务类型的缩写。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceTypeName' => 'getServiceTypeName',
            'serviceTypeCode' => 'getServiceTypeCode',
            'abbreviation' => 'getAbbreviation'
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
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets serviceTypeName
    *  云服务类型的名称。
    *
    * @return string|null
    */
    public function getServiceTypeName()
    {
        return $this->container['serviceTypeName'];
    }

    /**
    * Sets serviceTypeName
    *
    * @param string|null $serviceTypeName 云服务类型的名称。
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型的编码。
    *
    * @return string|null
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string|null $serviceTypeCode 云服务类型的编码。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets abbreviation
    *  云服务类型的缩写。
    *
    * @return string|null
    */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
    * Sets abbreviation
    *
    * @param string|null $abbreviation 云服务类型的缩写。
    *
    * @return $this
    */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;
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

