<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Bucket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Bucket';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetName  资产名称
    * bucketLocation  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    * createTime  创建时间
    * deleted  是否被删除
    * id  桶ID
    * isDeleted  是否被删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetName' => 'string',
            'bucketLocation' => 'string',
            'bucketName' => 'string',
            'bucketPolicy' => 'string',
            'createTime' => 'int',
            'deleted' => 'bool',
            'id' => 'string',
            'isDeleted' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetName  资产名称
    * bucketLocation  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    * createTime  创建时间
    * deleted  是否被删除
    * id  桶ID
    * isDeleted  是否被删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetName' => null,
        'bucketLocation' => null,
        'bucketName' => null,
        'bucketPolicy' => null,
        'createTime' => 'int64',
        'deleted' => null,
        'id' => null,
        'isDeleted' => null
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
    * assetName  资产名称
    * bucketLocation  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    * createTime  创建时间
    * deleted  是否被删除
    * id  桶ID
    * isDeleted  是否被删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetName' => 'asset_name',
            'bucketLocation' => 'bucket_location',
            'bucketName' => 'bucket_name',
            'bucketPolicy' => 'bucket_policy',
            'createTime' => 'create_time',
            'deleted' => 'deleted',
            'id' => 'id',
            'isDeleted' => 'is_deleted'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetName  资产名称
    * bucketLocation  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    * createTime  创建时间
    * deleted  是否被删除
    * id  桶ID
    * isDeleted  是否被删除
    *
    * @var string[]
    */
    protected static $setters = [
            'assetName' => 'setAssetName',
            'bucketLocation' => 'setBucketLocation',
            'bucketName' => 'setBucketName',
            'bucketPolicy' => 'setBucketPolicy',
            'createTime' => 'setCreateTime',
            'deleted' => 'setDeleted',
            'id' => 'setId',
            'isDeleted' => 'setIsDeleted'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetName  资产名称
    * bucketLocation  桶位置
    * bucketName  桶名称
    * bucketPolicy  桶策略
    * createTime  创建时间
    * deleted  是否被删除
    * id  桶ID
    * isDeleted  是否被删除
    *
    * @var string[]
    */
    protected static $getters = [
            'assetName' => 'getAssetName',
            'bucketLocation' => 'getBucketLocation',
            'bucketName' => 'getBucketName',
            'bucketPolicy' => 'getBucketPolicy',
            'createTime' => 'getCreateTime',
            'deleted' => 'getDeleted',
            'id' => 'getId',
            'isDeleted' => 'getIsDeleted'
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
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['bucketLocation'] = isset($data['bucketLocation']) ? $data['bucketLocation'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['bucketPolicy'] = isset($data['bucketPolicy']) ? $data['bucketPolicy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
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
    * Gets assetName
    *  资产名称
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName 资产名称
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets bucketLocation
    *  桶位置
    *
    * @return string|null
    */
    public function getBucketLocation()
    {
        return $this->container['bucketLocation'];
    }

    /**
    * Sets bucketLocation
    *
    * @param string|null $bucketLocation 桶位置
    *
    * @return $this
    */
    public function setBucketLocation($bucketLocation)
    {
        $this->container['bucketLocation'] = $bucketLocation;
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
    * Gets bucketPolicy
    *  桶策略
    *
    * @return string|null
    */
    public function getBucketPolicy()
    {
        return $this->container['bucketPolicy'];
    }

    /**
    * Sets bucketPolicy
    *
    * @param string|null $bucketPolicy 桶策略
    *
    * @return $this
    */
    public function setBucketPolicy($bucketPolicy)
    {
        $this->container['bucketPolicy'] = $bucketPolicy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deleted
    *  是否被删除
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted 是否被删除
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets id
    *  桶ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 桶ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否被删除
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 是否被删除
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
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

