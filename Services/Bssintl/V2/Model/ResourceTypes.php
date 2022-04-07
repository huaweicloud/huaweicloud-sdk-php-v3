<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceTypes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceTypes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    * resourceTypeDesc  |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    * serviceTypeCode  |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceTypeCode' => 'string',
            'resourceTypeName' => 'string',
            'resourceTypeDesc' => 'string',
            'serviceTypeCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    * resourceTypeDesc  |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    * serviceTypeCode  |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceTypeCode' => null,
        'resourceTypeName' => null,
        'resourceTypeDesc' => null,
        'serviceTypeCode' => null
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
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    * resourceTypeDesc  |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    * serviceTypeCode  |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceTypeCode' => 'resource_type_code',
            'resourceTypeName' => 'resource_type_name',
            'resourceTypeDesc' => 'resource_type_desc',
            'serviceTypeCode' => 'service_type_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    * resourceTypeDesc  |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    * serviceTypeCode  |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceTypeCode' => 'setResourceTypeCode',
            'resourceTypeName' => 'setResourceTypeName',
            'resourceTypeDesc' => 'setResourceTypeDesc',
            'serviceTypeCode' => 'setServiceTypeCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    * resourceTypeDesc  |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    * serviceTypeCode  |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceTypeCode' => 'getResourceTypeCode',
            'resourceTypeName' => 'getResourceTypeName',
            'resourceTypeDesc' => 'getResourceTypeDesc',
            'serviceTypeCode' => 'getServiceTypeCode'
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
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['resourceTypeDesc'] = isset($data['resourceTypeDesc']) ? $data['resourceTypeDesc'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
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
    * Gets resourceTypeCode
    *  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName |参数名称：资源类型名称| |参数约束及描述：资源类型名称|
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets resourceTypeDesc
    *  |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    *
    * @return string|null
    */
    public function getResourceTypeDesc()
    {
        return $this->container['resourceTypeDesc'];
    }

    /**
    * Sets resourceTypeDesc
    *
    * @param string|null $resourceTypeDesc |参数名称：资源类型描述| |参数约束及描述：资源类型描述|
    *
    * @return $this
    */
    public function setResourceTypeDesc($resourceTypeDesc)
    {
        $this->container['resourceTypeDesc'] = $resourceTypeDesc;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
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
    * @param string|null $serviceTypeCode |参数名称：资源类型归属的服务类型编码| |参数约束及描述：资源类型归属的服务类型编码|
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
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

