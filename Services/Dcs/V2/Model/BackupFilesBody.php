<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupFilesBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupFilesBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileSource  数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
    * bucketName  OBS桶名。
    * files  导入的备份文件文件列表。
    * backupId  备份记录ID，数据来源为备份记录时必须填写
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileSource' => 'string',
            'bucketName' => 'string',
            'files' => '\HuaweiCloud\SDK\Dcs\V2\Model\Files[]',
            'backupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileSource  数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
    * bucketName  OBS桶名。
    * files  导入的备份文件文件列表。
    * backupId  备份记录ID，数据来源为备份记录时必须填写
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileSource' => null,
        'bucketName' => null,
        'files' => null,
        'backupId' => null
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
    * fileSource  数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
    * bucketName  OBS桶名。
    * files  导入的备份文件文件列表。
    * backupId  备份记录ID，数据来源为备份记录时必须填写
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileSource' => 'file_source',
            'bucketName' => 'bucket_name',
            'files' => 'files',
            'backupId' => 'backup_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileSource  数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
    * bucketName  OBS桶名。
    * files  导入的备份文件文件列表。
    * backupId  备份记录ID，数据来源为备份记录时必须填写
    *
    * @var string[]
    */
    protected static $setters = [
            'fileSource' => 'setFileSource',
            'bucketName' => 'setBucketName',
            'files' => 'setFiles',
            'backupId' => 'setBackupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileSource  数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
    * bucketName  OBS桶名。
    * files  导入的备份文件文件列表。
    * backupId  备份记录ID，数据来源为备份记录时必须填写
    *
    * @var string[]
    */
    protected static $getters = [
            'fileSource' => 'getFileSource',
            'bucketName' => 'getBucketName',
            'files' => 'getFiles',
            'backupId' => 'getBackupId'
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
    const FILE_SOURCE_SELF_BUILD_OBS = 'self_build_obs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFileSourceAllowableValues()
    {
        return [
            self::FILE_SOURCE_SELF_BUILD_OBS,
        ];
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
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFileSourceAllowableValues();
                if (!is_null($this->container['fileSource']) && !in_array($this->container['fileSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fileSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
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
    *  数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
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
    * @param string|null $fileSource 数据来源，当前仅支持OBS桶方式，取值为：self_build_obs。
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
    *  OBS桶名。
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
    * @param string $bucketName OBS桶名。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets files
    *  导入的备份文件文件列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\Files[]
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\Files[] $files 导入的备份文件文件列表。
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
        return $this;
    }

    /**
    * Gets backupId
    *  备份记录ID，数据来源为备份记录时必须填写
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份记录ID，数据来源为备份记录时必须填写
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
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

