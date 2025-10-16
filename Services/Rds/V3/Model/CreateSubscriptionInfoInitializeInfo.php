<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionInfoInitializeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionInfo_initialize_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileSource  初始化使用的文件源，仅支持OBS或BACKUP。
    * backupId  使用备份文件初始化的备份文件ID。
    * bucketName  使用OBS内备份文件恢复的bucket名称。
    * filePath  OBS桶内备份文件的路径。
    * fileName  OBS桶内备份文件的名称。
    * overwriteRestore  是否使用备份文件对订阅库进行覆盖还原。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileSource' => 'string',
            'backupId' => 'string',
            'bucketName' => 'string',
            'filePath' => 'string',
            'fileName' => 'string',
            'overwriteRestore' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileSource  初始化使用的文件源，仅支持OBS或BACKUP。
    * backupId  使用备份文件初始化的备份文件ID。
    * bucketName  使用OBS内备份文件恢复的bucket名称。
    * filePath  OBS桶内备份文件的路径。
    * fileName  OBS桶内备份文件的名称。
    * overwriteRestore  是否使用备份文件对订阅库进行覆盖还原。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileSource' => null,
        'backupId' => null,
        'bucketName' => null,
        'filePath' => null,
        'fileName' => null,
        'overwriteRestore' => null
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
    * fileSource  初始化使用的文件源，仅支持OBS或BACKUP。
    * backupId  使用备份文件初始化的备份文件ID。
    * bucketName  使用OBS内备份文件恢复的bucket名称。
    * filePath  OBS桶内备份文件的路径。
    * fileName  OBS桶内备份文件的名称。
    * overwriteRestore  是否使用备份文件对订阅库进行覆盖还原。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileSource' => 'file_source',
            'backupId' => 'backup_id',
            'bucketName' => 'bucket_name',
            'filePath' => 'file_path',
            'fileName' => 'file_name',
            'overwriteRestore' => 'overwrite_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileSource  初始化使用的文件源，仅支持OBS或BACKUP。
    * backupId  使用备份文件初始化的备份文件ID。
    * bucketName  使用OBS内备份文件恢复的bucket名称。
    * filePath  OBS桶内备份文件的路径。
    * fileName  OBS桶内备份文件的名称。
    * overwriteRestore  是否使用备份文件对订阅库进行覆盖还原。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileSource' => 'setFileSource',
            'backupId' => 'setBackupId',
            'bucketName' => 'setBucketName',
            'filePath' => 'setFilePath',
            'fileName' => 'setFileName',
            'overwriteRestore' => 'setOverwriteRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileSource  初始化使用的文件源，仅支持OBS或BACKUP。
    * backupId  使用备份文件初始化的备份文件ID。
    * bucketName  使用OBS内备份文件恢复的bucket名称。
    * filePath  OBS桶内备份文件的路径。
    * fileName  OBS桶内备份文件的名称。
    * overwriteRestore  是否使用备份文件对订阅库进行覆盖还原。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileSource' => 'getFileSource',
            'backupId' => 'getBackupId',
            'bucketName' => 'getBucketName',
            'filePath' => 'getFilePath',
            'fileName' => 'getFileName',
            'overwriteRestore' => 'getOverwriteRestore'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['overwriteRestore'] = isset($data['overwriteRestore']) ? $data['overwriteRestore'] : null;
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
    * Gets fileSource
    *  初始化使用的文件源，仅支持OBS或BACKUP。
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
    * @param string|null $fileSource 初始化使用的文件源，仅支持OBS或BACKUP。
    *
    * @return $this
    */
    public function setFileSource($fileSource)
    {
        $this->container['fileSource'] = $fileSource;
        return $this;
    }

    /**
    * Gets backupId
    *  使用备份文件初始化的备份文件ID。
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
    * @param string|null $backupId 使用备份文件初始化的备份文件ID。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets bucketName
    *  使用OBS内备份文件恢复的bucket名称。
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
    * @param string|null $bucketName 使用OBS内备份文件恢复的bucket名称。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets filePath
    *  OBS桶内备份文件的路径。
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath OBS桶内备份文件的路径。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileName
    *  OBS桶内备份文件的名称。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName OBS桶内备份文件的名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets overwriteRestore
    *  是否使用备份文件对订阅库进行覆盖还原。
    *
    * @return bool|null
    */
    public function getOverwriteRestore()
    {
        return $this->container['overwriteRestore'];
    }

    /**
    * Sets overwriteRestore
    *
    * @param bool|null $overwriteRestore 是否使用备份文件对订阅库进行覆盖还原。
    *
    * @return $this
    */
    public function setOverwriteRestore($overwriteRestore)
    {
        $this->container['overwriteRestore'] = $overwriteRestore;
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

