<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupCount  备份数量
    * backupSize  备份容量
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * backupSizeMultiaz  多AZ备份大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupCount' => 'int',
            'backupSize' => 'int',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'backupSizeMultiaz' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupCount  备份数量
    * backupSize  备份容量
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * backupSizeMultiaz  多AZ备份大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupCount' => 'int32',
        'backupSize' => 'int32',
        'resourceId' => null,
        'resourceName' => null,
        'resourceType' => null,
        'backupSizeMultiaz' => 'int32'
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
    * backupCount  备份数量
    * backupSize  备份容量
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * backupSizeMultiaz  多AZ备份大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupCount' => 'backup_count',
            'backupSize' => 'backup_size',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'backupSizeMultiaz' => 'backup_size_multiaz'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupCount  备份数量
    * backupSize  备份容量
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * backupSizeMultiaz  多AZ备份大小
    *
    * @var string[]
    */
    protected static $setters = [
            'backupCount' => 'setBackupCount',
            'backupSize' => 'setBackupSize',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'backupSizeMultiaz' => 'setBackupSizeMultiaz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupCount  备份数量
    * backupSize  备份容量
    * resourceId  资源ID
    * resourceName  资源名称
    * resourceType  资源类型
    * backupSizeMultiaz  多AZ备份大小
    *
    * @var string[]
    */
    protected static $getters = [
            'backupCount' => 'getBackupCount',
            'backupSize' => 'getBackupSize',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'backupSizeMultiaz' => 'getBackupSizeMultiaz'
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
        $this->container['backupCount'] = isset($data['backupCount']) ? $data['backupCount'] : null;
        $this->container['backupSize'] = isset($data['backupSize']) ? $data['backupSize'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['backupSizeMultiaz'] = isset($data['backupSizeMultiaz']) ? $data['backupSizeMultiaz'] : null;
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
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
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
    * Gets backupCount
    *  备份数量
    *
    * @return int|null
    */
    public function getBackupCount()
    {
        return $this->container['backupCount'];
    }

    /**
    * Sets backupCount
    *
    * @param int|null $backupCount 备份数量
    *
    * @return $this
    */
    public function setBackupCount($backupCount)
    {
        $this->container['backupCount'] = $backupCount;
        return $this;
    }

    /**
    * Gets backupSize
    *  备份容量
    *
    * @return int|null
    */
    public function getBackupSize()
    {
        return $this->container['backupSize'];
    }

    /**
    * Sets backupSize
    *
    * @param int|null $backupSize 备份容量
    *
    * @return $this
    */
    public function setBackupSize($backupSize)
    {
        $this->container['backupSize'] = $backupSize;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
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
    * @param string $resourceId 资源ID
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
    *  资源名称
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
    * @param string $resourceName 资源名称
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
    *  资源类型
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
    * @param string $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets backupSizeMultiaz
    *  多AZ备份大小
    *
    * @return int|null
    */
    public function getBackupSizeMultiaz()
    {
        return $this->container['backupSizeMultiaz'];
    }

    /**
    * Sets backupSizeMultiaz
    *
    * @param int|null $backupSizeMultiaz 多AZ备份大小
    *
    * @return $this
    */
    public function setBackupSizeMultiaz($backupSizeMultiaz)
    {
        $this->container['backupSizeMultiaz'] = $backupSizeMultiaz;
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

