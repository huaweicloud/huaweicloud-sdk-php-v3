<?php

namespace HuaweiCloud\SDK\Cts\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOperation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOperation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceType  事件对应的云服务类型。
    * resourceType  事件对应的资源类型。
    * operationList  操作事件名称数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceType' => 'string',
            'resourceType' => 'string',
            'operationList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceType  事件对应的云服务类型。
    * resourceType  事件对应的资源类型。
    * operationList  操作事件名称数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceType' => null,
        'resourceType' => null,
        'operationList' => null
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
    * serviceType  事件对应的云服务类型。
    * resourceType  事件对应的资源类型。
    * operationList  操作事件名称数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceType' => 'service_type',
            'resourceType' => 'resource_type',
            'operationList' => 'operation_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceType  事件对应的云服务类型。
    * resourceType  事件对应的资源类型。
    * operationList  操作事件名称数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceType' => 'setServiceType',
            'resourceType' => 'setResourceType',
            'operationList' => 'setOperationList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceType  事件对应的云服务类型。
    * resourceType  事件对应的资源类型。
    * operationList  操作事件名称数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceType' => 'getServiceType',
            'resourceType' => 'getResourceType',
            'operationList' => 'getOperationList'
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
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['operationList'] = isset($data['operationList']) ? $data['operationList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 100)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
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
    * Gets serviceType
    *  事件对应的云服务类型。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 事件对应的云服务类型。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  事件对应的资源类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 事件对应的资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets operationList
    *  操作事件名称数组。
    *
    * @return string[]|null
    */
    public function getOperationList()
    {
        return $this->container['operationList'];
    }

    /**
    * Sets operationList
    *
    * @param string[]|null $operationList 操作事件名称数组。
    *
    * @return $this
    */
    public function setOperationList($operationList)
    {
        $this->container['operationList'] = $operationList;
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

