<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resouceDetail  资源详情。 资源对象，用于扩展。默认为空
    * resourceId  资源ID
    * resourceName  资源名称，没有默认为空字符串
    * tags  标签列表，没有标签默认为空数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resouceDetail' => 'object',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'tags' => '\HuaweiCloud\SDK\Eip\V2\Model\ResourceTagResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resouceDetail  资源详情。 资源对象，用于扩展。默认为空
    * resourceId  资源ID
    * resourceName  资源名称，没有默认为空字符串
    * tags  标签列表，没有标签默认为空数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resouceDetail' => null,
        'resourceId' => null,
        'resourceName' => null,
        'tags' => null
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
    * resouceDetail  资源详情。 资源对象，用于扩展。默认为空
    * resourceId  资源ID
    * resourceName  资源名称，没有默认为空字符串
    * tags  标签列表，没有标签默认为空数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resouceDetail' => 'resouce_detail',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resouceDetail  资源详情。 资源对象，用于扩展。默认为空
    * resourceId  资源ID
    * resourceName  资源名称，没有默认为空字符串
    * tags  标签列表，没有标签默认为空数组
    *
    * @var string[]
    */
    protected static $setters = [
            'resouceDetail' => 'setResouceDetail',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resouceDetail  资源详情。 资源对象，用于扩展。默认为空
    * resourceId  资源ID
    * resourceName  资源名称，没有默认为空字符串
    * tags  标签列表，没有标签默认为空数组
    *
    * @var string[]
    */
    protected static $getters = [
            'resouceDetail' => 'getResouceDetail',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'tags' => 'getTags'
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
        $this->container['resouceDetail'] = isset($data['resouceDetail']) ? $data['resouceDetail'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
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
    * Gets resouceDetail
    *  资源详情。 资源对象，用于扩展。默认为空
    *
    * @return object|null
    */
    public function getResouceDetail()
    {
        return $this->container['resouceDetail'];
    }

    /**
    * Sets resouceDetail
    *
    * @param object|null $resouceDetail 资源详情。 资源对象，用于扩展。默认为空
    *
    * @return $this
    */
    public function setResouceDetail($resouceDetail)
    {
        $this->container['resouceDetail'] = $resouceDetail;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
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
    *  资源名称，没有默认为空字符串
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称，没有默认为空字符串
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，没有标签默认为空数组
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\ResourceTagResp[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\ResourceTagResp[]|null $tags 标签列表，没有标签默认为空数组
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

