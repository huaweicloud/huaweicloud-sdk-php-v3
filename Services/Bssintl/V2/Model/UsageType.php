<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UsageType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UsageType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    * name  |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * serviceTypeCode  |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'name' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeName' => 'string',
            'serviceTypeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    * name  |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * serviceTypeCode  |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'resourceTypeCode' => null,
        'serviceTypeCode' => null,
        'resourceTypeName' => null,
        'serviceTypeName' => null
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
    * code  |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    * name  |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * serviceTypeCode  |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'name' => 'name',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeName' => 'resource_type_name',
            'serviceTypeName' => 'service_type_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    * name  |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * serviceTypeCode  |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'name' => 'setName',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeName' => 'setResourceTypeName',
            'serviceTypeName' => 'setServiceTypeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    * name  |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    * resourceTypeCode  |参数名称：资源类型编码| |参数约束及描述：资源类型编码|
    * serviceTypeCode  |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'name' => 'getName',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeName' => 'getResourceTypeName',
            'serviceTypeName' => 'getServiceTypeName'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
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
    * Gets code
    *  |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code |参数名称：用量类型编码如：duration| |参数约束及描述：用量类型编码如：duration|
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name |参数名称：用量类型名称| |参数约束及描述：用量类型名称|
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
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
    * Gets serviceTypeCode
    *  |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
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
    * @param string|null $serviceTypeCode |参数名称：服务类型编码| |参数约束及描述：服务类型编码|
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
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
    * @param string|null $resourceTypeName |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets serviceTypeName
    *  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
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
    * @param string|null $serviceTypeName |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
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

