<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileSource  备份文件来源，包括OBS和RDS两种。
    * bucketName  OBS桶名称。
    * fileInfo  备份文件列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileSource' => 'string',
            'bucketName' => 'string',
            'fileInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupFileResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileSource  备份文件来源，包括OBS和RDS两种。
    * bucketName  OBS桶名称。
    * fileInfo  备份文件列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileSource' => null,
        'bucketName' => null,
        'fileInfo' => null
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
    * fileSource  备份文件来源，包括OBS和RDS两种。
    * bucketName  OBS桶名称。
    * fileInfo  备份文件列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileSource' => 'file_source',
            'bucketName' => 'bucket_name',
            'fileInfo' => 'file_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileSource  备份文件来源，包括OBS和RDS两种。
    * bucketName  OBS桶名称。
    * fileInfo  备份文件列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileSource' => 'setFileSource',
            'bucketName' => 'setBucketName',
            'fileInfo' => 'setFileInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileSource  备份文件来源，包括OBS和RDS两种。
    * bucketName  OBS桶名称。
    * fileInfo  备份文件列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileSource' => 'getFileSource',
            'bucketName' => 'getBucketName',
            'fileInfo' => 'getFileInfo'
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
        $this->container['fileSource'] = isset($data['fileSource']) ? $data['fileSource'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileSource']) && (mb_strlen($this->container['fileSource']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileSource', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileSource']) && (mb_strlen($this->container['fileSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) > 128)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bucketName']) && (mb_strlen($this->container['bucketName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 0.";
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
    * Gets fileSource
    *  备份文件来源，包括OBS和RDS两种。
    *
    * @return string|null
    */
    public function getFileSource()
    {
        return $this->container['fileSource'];
    }

    /**
    * Sets fileSource
    *
    * @param string|null $fileSource 备份文件来源，包括OBS和RDS两种。
    *
    * @return $this
    */
    public function setFileSource($fileSource)
    {
        $this->container['fileSource'] = $fileSource;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名称。
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
    * @param string|null $bucketName OBS桶名称。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets fileInfo
    *  备份文件列表。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupFileResp[]|null
    */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /**
    * Sets fileInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupFileResp[]|null $fileInfo 备份文件列表。
    *
    * @return $this
    */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;
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

