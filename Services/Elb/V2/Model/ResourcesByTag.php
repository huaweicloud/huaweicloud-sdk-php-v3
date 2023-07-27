<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcesByTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcesByTag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID.
    * resourceName  资源名称。
    * resourceDetail  资源描述。
    * tags  资源标签。
    * superResourceId  父级资源ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceDetail' => 'string',
            'tags' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceTag[]',
            'superResourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID.
    * resourceName  资源名称。
    * resourceDetail  资源描述。
    * tags  资源标签。
    * superResourceId  父级资源ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceName' => null,
        'resourceDetail' => null,
        'tags' => null,
        'superResourceId' => null
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
    * resourceId  资源ID.
    * resourceName  资源名称。
    * resourceDetail  资源描述。
    * tags  资源标签。
    * superResourceId  父级资源ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceDetail' => 'resource_detail',
            'tags' => 'tags',
            'superResourceId' => 'super_resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID.
    * resourceName  资源名称。
    * resourceDetail  资源描述。
    * tags  资源标签。
    * superResourceId  父级资源ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceDetail' => 'setResourceDetail',
            'tags' => 'setTags',
            'superResourceId' => 'setSuperResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID.
    * resourceName  资源名称。
    * resourceDetail  资源描述。
    * tags  资源标签。
    * superResourceId  父级资源ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceDetail' => 'getResourceDetail',
            'tags' => 'getTags',
            'superResourceId' => 'getSuperResourceId'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceDetail'] = isset($data['resourceDetail']) ? $data['resourceDetail'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['superResourceId'] = isset($data['superResourceId']) ? $data['superResourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['resourceDetail'] === null) {
            $invalidProperties[] = "'resourceDetail' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
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
    *  资源ID.
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
    * @param string $resourceId 资源ID.
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
    *  资源名称。
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
    * @param string $resourceName 资源名称。
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
    *  资源描述。
    *
    * @return string
    */
    public function getResourceDetail()
    {
        return $this->container['resourceDetail'];
    }

    /**
    * Sets resourceDetail
    *
    * @param string $resourceDetail 资源描述。
    *
    * @return $this
    */
    public function setResourceDetail($resourceDetail)
    {
        $this->container['resourceDetail'] = $resourceDetail;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签。
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceTag[] $tags 资源标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets superResourceId
    *  父级资源ID。
    *
    * @return string|null
    */
    public function getSuperResourceId()
    {
        return $this->container['superResourceId'];
    }

    /**
    * Sets superResourceId
    *
    * @param string|null $superResourceId 父级资源ID。
    *
    * @return $this
    */
    public function setSuperResourceId($superResourceId)
    {
        $this->container['superResourceId'] = $superResourceId;
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

