<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsBucketInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsBucketInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * responseHeaders  响应头
    * originalHeaders  请求头
    * statusCode  状态
    * bucketName  桶名称
    * owner  owner
    * creationDate  桶的创建时间
    * location  桶的位置信息
    * storageClass  对象的存储类型
    * metadata  桶元数据
    * acl  桶ACL
    * bucketStorageClass  桶的存储类型
    * bucketType  桶类型
    * requestId  请求id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'responseHeaders' => 'object',
            'originalHeaders' => 'object',
            'statusCode' => 'int',
            'bucketName' => 'string',
            'owner' => '\HuaweiCloud\SDK\Eg\V1\Model\ObsBucketInfoOwner',
            'creationDate' => 'string',
            'location' => 'string',
            'storageClass' => 'object',
            'metadata' => 'object',
            'acl' => 'object',
            'bucketStorageClass' => 'object',
            'bucketType' => 'string',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * responseHeaders  响应头
    * originalHeaders  请求头
    * statusCode  状态
    * bucketName  桶名称
    * owner  owner
    * creationDate  桶的创建时间
    * location  桶的位置信息
    * storageClass  对象的存储类型
    * metadata  桶元数据
    * acl  桶ACL
    * bucketStorageClass  桶的存储类型
    * bucketType  桶类型
    * requestId  请求id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'responseHeaders' => null,
        'originalHeaders' => null,
        'statusCode' => null,
        'bucketName' => null,
        'owner' => null,
        'creationDate' => null,
        'location' => null,
        'storageClass' => null,
        'metadata' => null,
        'acl' => null,
        'bucketStorageClass' => null,
        'bucketType' => null,
        'requestId' => null
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
    * responseHeaders  响应头
    * originalHeaders  请求头
    * statusCode  状态
    * bucketName  桶名称
    * owner  owner
    * creationDate  桶的创建时间
    * location  桶的位置信息
    * storageClass  对象的存储类型
    * metadata  桶元数据
    * acl  桶ACL
    * bucketStorageClass  桶的存储类型
    * bucketType  桶类型
    * requestId  请求id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'responseHeaders' => 'responseHeaders',
            'originalHeaders' => 'originalHeaders',
            'statusCode' => 'statusCode',
            'bucketName' => 'bucketName',
            'owner' => 'owner',
            'creationDate' => 'creationDate',
            'location' => 'location',
            'storageClass' => 'storageClass',
            'metadata' => 'metadata',
            'acl' => 'acl',
            'bucketStorageClass' => 'bucketStorageClass',
            'bucketType' => 'bucketType',
            'requestId' => 'requestId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * responseHeaders  响应头
    * originalHeaders  请求头
    * statusCode  状态
    * bucketName  桶名称
    * owner  owner
    * creationDate  桶的创建时间
    * location  桶的位置信息
    * storageClass  对象的存储类型
    * metadata  桶元数据
    * acl  桶ACL
    * bucketStorageClass  桶的存储类型
    * bucketType  桶类型
    * requestId  请求id
    *
    * @var string[]
    */
    protected static $setters = [
            'responseHeaders' => 'setResponseHeaders',
            'originalHeaders' => 'setOriginalHeaders',
            'statusCode' => 'setStatusCode',
            'bucketName' => 'setBucketName',
            'owner' => 'setOwner',
            'creationDate' => 'setCreationDate',
            'location' => 'setLocation',
            'storageClass' => 'setStorageClass',
            'metadata' => 'setMetadata',
            'acl' => 'setAcl',
            'bucketStorageClass' => 'setBucketStorageClass',
            'bucketType' => 'setBucketType',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * responseHeaders  响应头
    * originalHeaders  请求头
    * statusCode  状态
    * bucketName  桶名称
    * owner  owner
    * creationDate  桶的创建时间
    * location  桶的位置信息
    * storageClass  对象的存储类型
    * metadata  桶元数据
    * acl  桶ACL
    * bucketStorageClass  桶的存储类型
    * bucketType  桶类型
    * requestId  请求id
    *
    * @var string[]
    */
    protected static $getters = [
            'responseHeaders' => 'getResponseHeaders',
            'originalHeaders' => 'getOriginalHeaders',
            'statusCode' => 'getStatusCode',
            'bucketName' => 'getBucketName',
            'owner' => 'getOwner',
            'creationDate' => 'getCreationDate',
            'location' => 'getLocation',
            'storageClass' => 'getStorageClass',
            'metadata' => 'getMetadata',
            'acl' => 'getAcl',
            'bucketStorageClass' => 'getBucketStorageClass',
            'bucketType' => 'getBucketType',
            'requestId' => 'getRequestId'
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
        $this->container['responseHeaders'] = isset($data['responseHeaders']) ? $data['responseHeaders'] : null;
        $this->container['originalHeaders'] = isset($data['originalHeaders']) ? $data['originalHeaders'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['storageClass'] = isset($data['storageClass']) ? $data['storageClass'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['acl'] = isset($data['acl']) ? $data['acl'] : null;
        $this->container['bucketStorageClass'] = isset($data['bucketStorageClass']) ? $data['bucketStorageClass'] : null;
        $this->container['bucketType'] = isset($data['bucketType']) ? $data['bucketType'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
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
    * Gets responseHeaders
    *  响应头
    *
    * @return object|null
    */
    public function getResponseHeaders()
    {
        return $this->container['responseHeaders'];
    }

    /**
    * Sets responseHeaders
    *
    * @param object|null $responseHeaders 响应头
    *
    * @return $this
    */
    public function setResponseHeaders($responseHeaders)
    {
        $this->container['responseHeaders'] = $responseHeaders;
        return $this;
    }

    /**
    * Gets originalHeaders
    *  请求头
    *
    * @return object|null
    */
    public function getOriginalHeaders()
    {
        return $this->container['originalHeaders'];
    }

    /**
    * Sets originalHeaders
    *
    * @param object|null $originalHeaders 请求头
    *
    * @return $this
    */
    public function setOriginalHeaders($originalHeaders)
    {
        $this->container['originalHeaders'] = $originalHeaders;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 状态
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名称
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ObsBucketInfoOwner|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ObsBucketInfoOwner|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets creationDate
    *  桶的创建时间
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 桶的创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets location
    *  桶的位置信息
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 桶的位置信息
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets storageClass
    *  对象的存储类型
    *
    * @return object|null
    */
    public function getStorageClass()
    {
        return $this->container['storageClass'];
    }

    /**
    * Sets storageClass
    *
    * @param object|null $storageClass 对象的存储类型
    *
    * @return $this
    */
    public function setStorageClass($storageClass)
    {
        $this->container['storageClass'] = $storageClass;
        return $this;
    }

    /**
    * Gets metadata
    *  桶元数据
    *
    * @return object|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param object|null $metadata 桶元数据
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets acl
    *  桶ACL
    *
    * @return object|null
    */
    public function getAcl()
    {
        return $this->container['acl'];
    }

    /**
    * Sets acl
    *
    * @param object|null $acl 桶ACL
    *
    * @return $this
    */
    public function setAcl($acl)
    {
        $this->container['acl'] = $acl;
        return $this;
    }

    /**
    * Gets bucketStorageClass
    *  桶的存储类型
    *
    * @return object|null
    */
    public function getBucketStorageClass()
    {
        return $this->container['bucketStorageClass'];
    }

    /**
    * Sets bucketStorageClass
    *
    * @param object|null $bucketStorageClass 桶的存储类型
    *
    * @return $this
    */
    public function setBucketStorageClass($bucketStorageClass)
    {
        $this->container['bucketStorageClass'] = $bucketStorageClass;
        return $this;
    }

    /**
    * Gets bucketType
    *  桶类型
    *
    * @return string|null
    */
    public function getBucketType()
    {
        return $this->container['bucketType'];
    }

    /**
    * Sets bucketType
    *
    * @param string|null $bucketType 桶类型
    *
    * @return $this
    */
    public function setBucketType($bucketType)
    {
        $this->container['bucketType'] = $bucketType;
        return $this;
    }

    /**
    * Gets requestId
    *  请求id
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求id
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
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

