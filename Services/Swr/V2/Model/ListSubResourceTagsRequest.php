<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubResourceTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubResourceTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  资源类型，支持的资源类型为：instances
    * resourceId  资源id
    * subResourceType  子资源类型，支持的子资源类型为：namespaces
    * subResourceId  子资源id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceId' => 'string',
            'subResourceType' => 'string',
            'subResourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  资源类型，支持的资源类型为：instances
    * resourceId  资源id
    * subResourceType  子资源类型，支持的子资源类型为：namespaces
    * subResourceId  子资源id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceId' => null,
        'subResourceType' => null,
        'subResourceId' => null
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
    * resourceType  资源类型，支持的资源类型为：instances
    * resourceId  资源id
    * subResourceType  子资源类型，支持的子资源类型为：namespaces
    * subResourceId  子资源id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'subResourceType' => 'sub_resource_type',
            'subResourceId' => 'sub_resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  资源类型，支持的资源类型为：instances
    * resourceId  资源id
    * subResourceType  子资源类型，支持的子资源类型为：namespaces
    * subResourceId  子资源id
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'subResourceType' => 'setSubResourceType',
            'subResourceId' => 'setSubResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  资源类型，支持的资源类型为：instances
    * resourceId  资源id
    * subResourceType  子资源类型，支持的子资源类型为：namespaces
    * subResourceId  子资源id
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'subResourceType' => 'getSubResourceType',
            'subResourceId' => 'getSubResourceId'
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
    const RESOURCE_TYPE_INSTANCES = 'instances';
    const SUB_RESOURCE_TYPE_NAMESPACES = 'namespaces';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_INSTANCES,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubResourceTypeAllowableValues()
    {
        return [
            self::SUB_RESOURCE_TYPE_NAMESPACES,
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['subResourceType'] = isset($data['subResourceType']) ? $data['subResourceType'] : null;
        $this->container['subResourceId'] = isset($data['subResourceId']) ? $data['subResourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['subResourceType'] === null) {
            $invalidProperties[] = "'subResourceType' can't be null";
        }
            $allowedValues = $this->getSubResourceTypeAllowableValues();
                if (!is_null($this->container['subResourceType']) && !in_array($this->container['subResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subResourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['subResourceId'] === null) {
            $invalidProperties[] = "'subResourceId' can't be null";
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
    * Gets resourceType
    *  资源类型，支持的资源类型为：instances
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型，支持的资源类型为：instances
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets subResourceType
    *  子资源类型，支持的子资源类型为：namespaces
    *
    * @return string
    */
    public function getSubResourceType()
    {
        return $this->container['subResourceType'];
    }

    /**
    * Sets subResourceType
    *
    * @param string $subResourceType 子资源类型，支持的子资源类型为：namespaces
    *
    * @return $this
    */
    public function setSubResourceType($subResourceType)
    {
        $this->container['subResourceType'] = $subResourceType;
        return $this;
    }

    /**
    * Gets subResourceId
    *  子资源id
    *
    * @return string
    */
    public function getSubResourceId()
    {
        return $this->container['subResourceId'];
    }

    /**
    * Sets subResourceId
    *
    * @param string $subResourceId 子资源id
    *
    * @return $this
    */
    public function setSubResourceId($subResourceId)
    {
        $this->container['subResourceId'] = $subResourceId;
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

