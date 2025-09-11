<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackupRiskBucketPathResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackupRiskBucketPathResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupDomainId  账户ID
    * bucketName  OBS桶名称
    * bucketRootPath  OBS桶根路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupDomainId' => 'string',
            'bucketName' => 'string',
            'bucketRootPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupDomainId  账户ID
    * bucketName  OBS桶名称
    * bucketRootPath  OBS桶根路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupDomainId' => null,
        'bucketName' => null,
        'bucketRootPath' => null
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
    * backupDomainId  账户ID
    * bucketName  OBS桶名称
    * bucketRootPath  OBS桶根路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupDomainId' => 'backup_domain_id',
            'bucketName' => 'bucket_name',
            'bucketRootPath' => 'bucket_root_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupDomainId  账户ID
    * bucketName  OBS桶名称
    * bucketRootPath  OBS桶根路径
    *
    * @var string[]
    */
    protected static $setters = [
            'backupDomainId' => 'setBackupDomainId',
            'bucketName' => 'setBucketName',
            'bucketRootPath' => 'setBucketRootPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupDomainId  账户ID
    * bucketName  OBS桶名称
    * bucketRootPath  OBS桶根路径
    *
    * @var string[]
    */
    protected static $getters = [
            'backupDomainId' => 'getBackupDomainId',
            'bucketName' => 'getBucketName',
            'bucketRootPath' => 'getBucketRootPath'
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
        $this->container['backupDomainId'] = isset($data['backupDomainId']) ? $data['backupDomainId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['bucketRootPath'] = isset($data['bucketRootPath']) ? $data['bucketRootPath'] : null;
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
    * Gets backupDomainId
    *  账户ID
    *
    * @return string|null
    */
    public function getBackupDomainId()
    {
        return $this->container['backupDomainId'];
    }

    /**
    * Sets backupDomainId
    *
    * @param string|null $backupDomainId 账户ID
    *
    * @return $this
    */
    public function setBackupDomainId($backupDomainId)
    {
        $this->container['backupDomainId'] = $backupDomainId;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名称
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
    * @param string|null $bucketName OBS桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets bucketRootPath
    *  OBS桶根路径
    *
    * @return string|null
    */
    public function getBucketRootPath()
    {
        return $this->container['bucketRootPath'];
    }

    /**
    * Sets bucketRootPath
    *
    * @param string|null $bucketRootPath OBS桶根路径
    *
    * @return $this
    */
    public function setBucketRootPath($bucketRootPath)
    {
        $this->container['bucketRootPath'] = $bucketRootPath;
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

