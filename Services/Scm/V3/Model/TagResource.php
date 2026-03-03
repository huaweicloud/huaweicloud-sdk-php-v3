<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  证书的资源ID。
    * tags  标签列表，没有标签默认为空数组。
    * resourceName  资源名称，默认为空字符串。
    * resourceDetail  resourceDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Scm\V3\Model\ScsResourceTag[]',
            'resourceName' => 'string',
            'resourceDetail' => '\HuaweiCloud\SDK\Scm\V3\Model\TagResourceResourceDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  证书的资源ID。
    * tags  标签列表，没有标签默认为空数组。
    * resourceName  资源名称，默认为空字符串。
    * resourceDetail  resourceDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'tags' => null,
        'resourceName' => null,
        'resourceDetail' => null
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
    * resourceId  证书的资源ID。
    * tags  标签列表，没有标签默认为空数组。
    * resourceName  资源名称，默认为空字符串。
    * resourceDetail  resourceDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'tags' => 'tags',
            'resourceName' => 'resource_name',
            'resourceDetail' => 'resource_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  证书的资源ID。
    * tags  标签列表，没有标签默认为空数组。
    * resourceName  资源名称，默认为空字符串。
    * resourceDetail  resourceDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'tags' => 'setTags',
            'resourceName' => 'setResourceName',
            'resourceDetail' => 'setResourceDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  证书的资源ID。
    * tags  标签列表，没有标签默认为空数组。
    * resourceName  资源名称，默认为空字符串。
    * resourceDetail  resourceDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'tags' => 'getTags',
            'resourceName' => 'getResourceName',
            'resourceDetail' => 'getResourceDetail'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceDetail'] = isset($data['resourceDetail']) ? $data['resourceDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 63)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 63)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 63.";
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
    * Gets resourceId
    *  证书的资源ID。
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
    * @param string|null $resourceId 证书的资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，没有标签默认为空数组。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\ScsResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\ScsResourceTag[]|null $tags 标签列表，没有标签默认为空数组。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称，默认为空字符串。
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
    * @param string|null $resourceName 资源名称，默认为空字符串。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceDetail
    *  resourceDetail
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\TagResourceResourceDetail|null
    */
    public function getResourceDetail()
    {
        return $this->container['resourceDetail'];
    }

    /**
    * Sets resourceDetail
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\TagResourceResourceDetail|null $resourceDetail resourceDetail
    *
    * @return $this
    */
    public function setResourceDetail($resourceDetail)
    {
        $this->container['resourceDetail'] = $resourceDetail;
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

