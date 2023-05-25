<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyFilterDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyFilterDefinition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域ID
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * resourceId  资源ID
    * tagKey  标签键
    * tagValue  标签值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'resourceProvider' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'tagKey' => 'string',
            'tagValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域ID
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * resourceId  资源ID
    * tagKey  标签键
    * tagValue  标签值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'resourceProvider' => null,
        'resourceType' => null,
        'resourceId' => null,
        'tagKey' => null,
        'tagValue' => null
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
    * regionId  区域ID
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * resourceId  资源ID
    * tagKey  标签键
    * tagValue  标签值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'resourceProvider' => 'resource_provider',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'tagKey' => 'tag_key',
            'tagValue' => 'tag_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域ID
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * resourceId  资源ID
    * tagKey  标签键
    * tagValue  标签值
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'resourceProvider' => 'setResourceProvider',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'tagKey' => 'setTagKey',
            'tagValue' => 'setTagValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域ID
    * resourceProvider  云服务名称
    * resourceType  资源类型
    * resourceId  资源ID
    * tagKey  标签键
    * tagValue  标签值
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'resourceProvider' => 'getResourceProvider',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'tagKey' => 'getTagKey',
            'tagValue' => 'getTagValue'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceProvider'] = isset($data['resourceProvider']) ? $data['resourceProvider'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['tagValue'] = isset($data['tagValue']) ? $data['tagValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceProvider']) && (mb_strlen($this->container['resourceProvider']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceProvider', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['tagKey']) && (mb_strlen($this->container['tagKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'tagKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tagValue']) && (mb_strlen($this->container['tagValue']) > 256)) {
                $invalidProperties[] = "invalid value for 'tagValue', the character length must be smaller than or equal to 256.";
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
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets resourceProvider
    *  云服务名称
    *
    * @return string|null
    */
    public function getResourceProvider()
    {
        return $this->container['resourceProvider'];
    }

    /**
    * Sets resourceProvider
    *
    * @param string|null $resourceProvider 云服务名称
    *
    * @return $this
    */
    public function setResourceProvider($resourceProvider)
    {
        $this->container['resourceProvider'] = $resourceProvider;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
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
    * @param string|null $resourceType 资源类型
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
    * Gets tagKey
    *  标签键
    *
    * @return string|null
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string|null $tagKey 标签键
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets tagValue
    *  标签值
    *
    * @return string|null
    */
    public function getTagValue()
    {
        return $this->container['tagValue'];
    }

    /**
    * Sets tagValue
    *
    * @param string|null $tagValue 标签值
    *
    * @return $this
    */
    public function setTagValue($tagValue)
    {
        $this->container['tagValue'] = $tagValue;
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

