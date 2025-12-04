<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListObsBucketsResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListObsBucketsResponse_body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * responseHeaders  **参数解释**： 响应头。
    * originalHeaders  **参数解释**： 原始响应头。
    * statusCode  **参数解释**： 状态码。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * owner  **参数解释**： 桶拥有者信息。
    * creationDate  **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
    * location  **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
    * clustertype  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    * storageClass  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * metadata  **参数解释**： 元数据。
    * acl  **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
    * bucketStorageClass  **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
    * bucketType  **参数解释**： 桶类型。 **取值范围**： 不涉及。
    * requestId  **参数解释**： 请求ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'responseHeaders' => 'object',
            'originalHeaders' => 'object',
            'statusCode' => 'int',
            'bucketName' => 'string',
            'owner' => 'object',
            'creationDate' => 'int',
            'location' => 'string',
            'clustertype' => 'string',
            'storageClass' => 'string',
            'metadata' => 'object',
            'acl' => 'string',
            'bucketStorageClass' => 'string',
            'bucketType' => 'string',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * responseHeaders  **参数解释**： 响应头。
    * originalHeaders  **参数解释**： 原始响应头。
    * statusCode  **参数解释**： 状态码。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * owner  **参数解释**： 桶拥有者信息。
    * creationDate  **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
    * location  **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
    * clustertype  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    * storageClass  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * metadata  **参数解释**： 元数据。
    * acl  **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
    * bucketStorageClass  **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
    * bucketType  **参数解释**： 桶类型。 **取值范围**： 不涉及。
    * requestId  **参数解释**： 请求ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'responseHeaders' => null,
        'originalHeaders' => null,
        'statusCode' => null,
        'bucketName' => null,
        'owner' => null,
        'creationDate' => 'int64',
        'location' => null,
        'clustertype' => null,
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
    * responseHeaders  **参数解释**： 响应头。
    * originalHeaders  **参数解释**： 原始响应头。
    * statusCode  **参数解释**： 状态码。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * owner  **参数解释**： 桶拥有者信息。
    * creationDate  **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
    * location  **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
    * clustertype  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    * storageClass  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * metadata  **参数解释**： 元数据。
    * acl  **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
    * bucketStorageClass  **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
    * bucketType  **参数解释**： 桶类型。 **取值范围**： 不涉及。
    * requestId  **参数解释**： 请求ID。 **取值范围**： 不涉及。
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
            'clustertype' => 'clustertype',
            'storageClass' => 'storageClass',
            'metadata' => 'metadata',
            'acl' => 'acl',
            'bucketStorageClass' => 'bucketStorageClass',
            'bucketType' => 'bucketType',
            'requestId' => 'requestId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * responseHeaders  **参数解释**： 响应头。
    * originalHeaders  **参数解释**： 原始响应头。
    * statusCode  **参数解释**： 状态码。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * owner  **参数解释**： 桶拥有者信息。
    * creationDate  **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
    * location  **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
    * clustertype  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    * storageClass  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * metadata  **参数解释**： 元数据。
    * acl  **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
    * bucketStorageClass  **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
    * bucketType  **参数解释**： 桶类型。 **取值范围**： 不涉及。
    * requestId  **参数解释**： 请求ID。 **取值范围**： 不涉及。
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
            'clustertype' => 'setClustertype',
            'storageClass' => 'setStorageClass',
            'metadata' => 'setMetadata',
            'acl' => 'setAcl',
            'bucketStorageClass' => 'setBucketStorageClass',
            'bucketType' => 'setBucketType',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * responseHeaders  **参数解释**： 响应头。
    * originalHeaders  **参数解释**： 原始响应头。
    * statusCode  **参数解释**： 状态码。 **取值范围**： 不涉及。
    * bucketName  **参数解释**： 桶名。 **取值范围**： 不涉及。
    * owner  **参数解释**： 桶拥有者信息。
    * creationDate  **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
    * location  **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
    * clustertype  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    * storageClass  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * metadata  **参数解释**： 元数据。
    * acl  **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
    * bucketStorageClass  **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
    * bucketType  **参数解释**： 桶类型。 **取值范围**： 不涉及。
    * requestId  **参数解释**： 请求ID。 **取值范围**： 不涉及。
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
            'clustertype' => 'getClustertype',
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
        $this->container['clustertype'] = isset($data['clustertype']) ? $data['clustertype'] : null;
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
    *  **参数解释**： 响应头。
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
    * @param object|null $responseHeaders **参数解释**： 响应头。
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
    *  **参数解释**： 原始响应头。
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
    * @param object|null $originalHeaders **参数解释**： 原始响应头。
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
    *  **参数解释**： 状态码。 **取值范围**： 不涉及。
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
    * @param int|null $statusCode **参数解释**： 状态码。 **取值范围**： 不涉及。
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
    *  **参数解释**： 桶名。 **取值范围**： 不涉及。
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
    * @param string|null $bucketName **参数解释**： 桶名。 **取值范围**： 不涉及。
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
    *  **参数解释**： 桶拥有者信息。
    *
    * @return object|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param object|null $owner **参数解释**： 桶拥有者信息。
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
    *  **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
    *
    * @return int|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param int|null $creationDate **参数解释**： 桶的创建时间。 **取值范围**： 长度为24的字符串。
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
    *  **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
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
    * @param string|null $location **参数解释**： 桶所在的区域。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets clustertype
    *  **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClustertype()
    {
        return $this->container['clustertype'];
    }

    /**
    * Sets clustertype
    *
    * @param string|null $clustertype **参数解释**： 集群类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClustertype($clustertype)
    {
        $this->container['clustertype'] = $clustertype;
        return $this;
    }

    /**
    * Gets storageClass
    *  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStorageClass()
    {
        return $this->container['storageClass'];
    }

    /**
    * Sets storageClass
    *
    * @param string|null $storageClass **参数解释**： 存储类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 元数据。
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
    * @param object|null $metadata **参数解释**： 元数据。
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
    *  **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAcl()
    {
        return $this->container['acl'];
    }

    /**
    * Sets acl
    *
    * @param string|null $acl **参数解释**： 桶ACL策略。 **取值范围**： 不涉及。
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
    *  **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
    *
    * @return string|null
    */
    public function getBucketStorageClass()
    {
        return $this->container['bucketStorageClass'];
    }

    /**
    * Sets bucketStorageClass
    *
    * @param string|null $bucketStorageClass **参数解释**： 桶的存储类型。 **取值范围**： - STANDARD：标准存储。 - WARM：低频访问存储。 - COLD：归档存储。 - DEEP_ARCHIVE：深度归档存储（受限公测）。
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
    *  **参数解释**： 桶类型。 **取值范围**： 不涉及。
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
    * @param string|null $bucketType **参数解释**： 桶类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 请求ID。 **取值范围**： 不涉及。
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
    * @param string|null $requestId **参数解释**： 请求ID。 **取值范围**： 不涉及。
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

