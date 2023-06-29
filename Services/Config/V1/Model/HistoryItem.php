<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HistoryItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  用户id
    * resourceId  资源id
    * resourceType  资源类型
    * captureTime  该资源在Config系统捕获时间
    * status  资源状态
    * relations  资源关系列表
    * resource  resource
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'captureTime' => 'string',
            'status' => 'string',
            'relations' => '\HuaweiCloud\SDK\Config\V1\Model\ResourceRelation[]',
            'resource' => '\HuaweiCloud\SDK\Config\V1\Model\ResourceEntity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  用户id
    * resourceId  资源id
    * resourceType  资源类型
    * captureTime  该资源在Config系统捕获时间
    * status  资源状态
    * relations  资源关系列表
    * resource  resource
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'resourceId' => null,
        'resourceType' => null,
        'captureTime' => null,
        'status' => null,
        'relations' => null,
        'resource' => null
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
    * domainId  用户id
    * resourceId  资源id
    * resourceType  资源类型
    * captureTime  该资源在Config系统捕获时间
    * status  资源状态
    * relations  资源关系列表
    * resource  resource
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'captureTime' => 'capture_time',
            'status' => 'status',
            'relations' => 'relations',
            'resource' => 'resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  用户id
    * resourceId  资源id
    * resourceType  资源类型
    * captureTime  该资源在Config系统捕获时间
    * status  资源状态
    * relations  资源关系列表
    * resource  resource
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'captureTime' => 'setCaptureTime',
            'status' => 'setStatus',
            'relations' => 'setRelations',
            'resource' => 'setResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  用户id
    * resourceId  资源id
    * resourceType  资源类型
    * captureTime  该资源在Config系统捕获时间
    * status  资源状态
    * relations  资源关系列表
    * resource  resource
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'captureTime' => 'getCaptureTime',
            'status' => 'getStatus',
            'relations' => 'getRelations',
            'resource' => 'getResource'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['captureTime'] = isset($data['captureTime']) ? $data['captureTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
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
    * Gets domainId
    *  用户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 用户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
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
    * @param string|null $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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
    * Gets captureTime
    *  该资源在Config系统捕获时间
    *
    * @return string|null
    */
    public function getCaptureTime()
    {
        return $this->container['captureTime'];
    }

    /**
    * Sets captureTime
    *
    * @param string|null $captureTime 该资源在Config系统捕获时间
    *
    * @return $this
    */
    public function setCaptureTime($captureTime)
    {
        $this->container['captureTime'] = $captureTime;
        return $this;
    }

    /**
    * Gets status
    *  资源状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets relations
    *  资源关系列表
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ResourceRelation[]|null
    */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
    * Sets relations
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ResourceRelation[]|null $relations 资源关系列表
    *
    * @return $this
    */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;
        return $this;
    }

    /**
    * Gets resource
    *  resource
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ResourceEntity|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ResourceEntity|null $resource resource
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
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

