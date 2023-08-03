<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupSync implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupSync';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份副本ID
    * backupName  备份名称
    * bucketName  桶名
    * imagePath  备份链在存储单元上的路径
    * resourceId  备份对象ID
    * resourceName  备份对象名称
    * resourceType  备份对象资源类型
    * createdAt  备份时间戳，例如1548898428
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'backupName' => 'string',
            'bucketName' => 'string',
            'imagePath' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'createdAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份副本ID
    * backupName  备份名称
    * bucketName  桶名
    * imagePath  备份链在存储单元上的路径
    * resourceId  备份对象ID
    * resourceName  备份对象名称
    * resourceType  备份对象资源类型
    * createdAt  备份时间戳，例如1548898428
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'backupName' => null,
        'bucketName' => null,
        'imagePath' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceType' => null,
        'createdAt' => 'int32'
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
    * backupId  备份副本ID
    * backupName  备份名称
    * bucketName  桶名
    * imagePath  备份链在存储单元上的路径
    * resourceId  备份对象ID
    * resourceName  备份对象名称
    * resourceType  备份对象资源类型
    * createdAt  备份时间戳，例如1548898428
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'backupName' => 'backup_name',
            'bucketName' => 'bucket_name',
            'imagePath' => 'image_path',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份副本ID
    * backupName  备份名称
    * bucketName  桶名
    * imagePath  备份链在存储单元上的路径
    * resourceId  备份对象ID
    * resourceName  备份对象名称
    * resourceType  备份对象资源类型
    * createdAt  备份时间戳，例如1548898428
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'backupName' => 'setBackupName',
            'bucketName' => 'setBucketName',
            'imagePath' => 'setImagePath',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份副本ID
    * backupName  备份名称
    * bucketName  桶名
    * imagePath  备份链在存储单元上的路径
    * resourceId  备份对象ID
    * resourceName  备份对象名称
    * resourceType  备份对象资源类型
    * createdAt  备份时间戳，例如1548898428
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'backupName' => 'getBackupName',
            'bucketName' => 'getBucketName',
            'imagePath' => 'getImagePath',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'createdAt' => 'getCreatedAt'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['imagePath'] = isset($data['imagePath']) ? $data['imagePath'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupId'] === null) {
            $invalidProperties[] = "'backupId' can't be null";
        }
        if ($this->container['backupName'] === null) {
            $invalidProperties[] = "'backupName' can't be null";
        }
            if ((mb_strlen($this->container['backupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['backupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*/", $this->container['backupName'])) {
                $invalidProperties[] = "invalid value for 'backupName', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*/.";
            }
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
        if ($this->container['imagePath'] === null) {
            $invalidProperties[] = "'imagePath' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    * Gets backupId
    *  备份副本ID
    *
    * @return string
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string $backupId 备份副本ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backupName
    *  备份名称
    *
    * @return string
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string $backupName 备份名称
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName 桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets imagePath
    *  备份链在存储单元上的路径
    *
    * @return string
    */
    public function getImagePath()
    {
        return $this->container['imagePath'];
    }

    /**
    * Sets imagePath
    *
    * @param string $imagePath 备份链在存储单元上的路径
    *
    * @return $this
    */
    public function setImagePath($imagePath)
    {
        $this->container['imagePath'] = $imagePath;
        return $this;
    }

    /**
    * Gets resourceId
    *  备份对象ID
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
    * @param string $resourceId 备份对象ID
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
    *  备份对象名称
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
    * @param string $resourceName 备份对象名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  备份对象资源类型
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
    * @param string $resourceType 备份对象资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets createdAt
    *  备份时间戳，例如1548898428
    *
    * @return int
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int $createdAt 备份时间戳，例如1548898428
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

