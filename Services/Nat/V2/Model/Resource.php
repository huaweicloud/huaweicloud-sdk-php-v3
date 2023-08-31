<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Resource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Resource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceDetail  资源详情。用于扩展。默认为空。
    * resourceId  资源的ID。
    * resourceName  资源名称，资源没有名称时默认为空字符串。
    * resourceTag  标签列表，没有标签默认为空数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceDetail' => 'object',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceTag' => '\HuaweiCloud\SDK\Nat\V2\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceDetail  资源详情。用于扩展。默认为空。
    * resourceId  资源的ID。
    * resourceName  资源名称，资源没有名称时默认为空字符串。
    * resourceTag  标签列表，没有标签默认为空数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceDetail' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceTag' => null
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
    * resourceDetail  资源详情。用于扩展。默认为空。
    * resourceId  资源的ID。
    * resourceName  资源名称，资源没有名称时默认为空字符串。
    * resourceTag  标签列表，没有标签默认为空数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceDetail' => 'resource_detail',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceTag' => 'resource_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceDetail  资源详情。用于扩展。默认为空。
    * resourceId  资源的ID。
    * resourceName  资源名称，资源没有名称时默认为空字符串。
    * resourceTag  标签列表，没有标签默认为空数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceDetail' => 'setResourceDetail',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceTag' => 'setResourceTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceDetail  资源详情。用于扩展。默认为空。
    * resourceId  资源的ID。
    * resourceName  资源名称，资源没有名称时默认为空字符串。
    * resourceTag  标签列表，没有标签默认为空数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceDetail' => 'getResourceDetail',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceTag' => 'getResourceTag'
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
        $this->container['resourceDetail'] = isset($data['resourceDetail']) ? $data['resourceDetail'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceTag'] = isset($data['resourceTag']) ? $data['resourceTag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceDetail'] === null) {
            $invalidProperties[] = "'resourceDetail' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
            if ((mb_strlen($this->container['resourceName']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceTag'] === null) {
            $invalidProperties[] = "'resourceTag' can't be null";
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
    * Gets resourceDetail
    *  资源详情。用于扩展。默认为空。
    *
    * @return object
    */
    public function getResourceDetail()
    {
        return $this->container['resourceDetail'];
    }

    /**
    * Sets resourceDetail
    *
    * @param object $resourceDetail 资源详情。用于扩展。默认为空。
    *
    * @return $this
    */
    public function setResourceDetail($resourceDetail)
    {
        $this->container['resourceDetail'] = $resourceDetail;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源的ID。
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
    * @param string $resourceId 资源的ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称，资源没有名称时默认为空字符串。
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName 资源名称，资源没有名称时默认为空字符串。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceTag
    *  标签列表，没有标签默认为空数组。
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\ResourceTag[]
    */
    public function getResourceTag()
    {
        return $this->container['resourceTag'];
    }

    /**
    * Sets resourceTag
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\ResourceTag[] $resourceTag 标签列表，没有标签默认为空数组。
    *
    * @return $this
    */
    public function setResourceTag($resourceTag)
    {
        $this->container['resourceTag'] = $resourceTag;
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

