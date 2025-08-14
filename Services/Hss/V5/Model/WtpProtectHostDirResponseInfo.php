<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WtpProtectHostDirResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WtpProtectHostDirResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDir  防护目录
    * excludeChildDir  排除子目录
    * excludeFilePath  排除文件路径
    * exclueFilePath  排除文件路径
    * localBackupDir  本地备份路径
    * protectStatus  防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    * error  失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDir' => 'string',
            'excludeChildDir' => 'string',
            'excludeFilePath' => 'string',
            'exclueFilePath' => 'string',
            'localBackupDir' => 'string',
            'protectStatus' => 'string',
            'error' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDir  防护目录
    * excludeChildDir  排除子目录
    * excludeFilePath  排除文件路径
    * exclueFilePath  排除文件路径
    * localBackupDir  本地备份路径
    * protectStatus  防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    * error  失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDir' => null,
        'excludeChildDir' => null,
        'excludeFilePath' => null,
        'exclueFilePath' => null,
        'localBackupDir' => null,
        'protectStatus' => null,
        'error' => null
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
    * protectDir  防护目录
    * excludeChildDir  排除子目录
    * excludeFilePath  排除文件路径
    * exclueFilePath  排除文件路径
    * localBackupDir  本地备份路径
    * protectStatus  防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    * error  失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDir' => 'protect_dir',
            'excludeChildDir' => 'exclude_child_dir',
            'excludeFilePath' => 'exclude_file_path',
            'exclueFilePath' => 'exclue_file_path',
            'localBackupDir' => 'local_backup_dir',
            'protectStatus' => 'protect_status',
            'error' => 'error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDir  防护目录
    * excludeChildDir  排除子目录
    * excludeFilePath  排除文件路径
    * exclueFilePath  排除文件路径
    * localBackupDir  本地备份路径
    * protectStatus  防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    * error  失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDir' => 'setProtectDir',
            'excludeChildDir' => 'setExcludeChildDir',
            'excludeFilePath' => 'setExcludeFilePath',
            'exclueFilePath' => 'setExclueFilePath',
            'localBackupDir' => 'setLocalBackupDir',
            'protectStatus' => 'setProtectStatus',
            'error' => 'setError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDir  防护目录
    * excludeChildDir  排除子目录
    * excludeFilePath  排除文件路径
    * exclueFilePath  排除文件路径
    * localBackupDir  本地备份路径
    * protectStatus  防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    * error  失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDir' => 'getProtectDir',
            'excludeChildDir' => 'getExcludeChildDir',
            'excludeFilePath' => 'getExcludeFilePath',
            'exclueFilePath' => 'getExclueFilePath',
            'localBackupDir' => 'getLocalBackupDir',
            'protectStatus' => 'getProtectStatus',
            'error' => 'getError'
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
    const PROTECT_STATUS_CLOSED = 'closed';
    const PROTECT_STATUS_OPENED = 'opened';
    const PROTECT_STATUS_OPENING = 'opening';
    const PROTECT_STATUS_CLOSING = 'closing';
    const PROTECT_STATUS_OPEN_FAILED = 'open_failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectStatusAllowableValues()
    {
        return [
            self::PROTECT_STATUS_CLOSED,
            self::PROTECT_STATUS_OPENED,
            self::PROTECT_STATUS_OPENING,
            self::PROTECT_STATUS_CLOSING,
            self::PROTECT_STATUS_OPEN_FAILED,
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
        $this->container['protectDir'] = isset($data['protectDir']) ? $data['protectDir'] : null;
        $this->container['excludeChildDir'] = isset($data['excludeChildDir']) ? $data['excludeChildDir'] : null;
        $this->container['excludeFilePath'] = isset($data['excludeFilePath']) ? $data['excludeFilePath'] : null;
        $this->container['exclueFilePath'] = isset($data['exclueFilePath']) ? $data['exclueFilePath'] : null;
        $this->container['localBackupDir'] = isset($data['localBackupDir']) ? $data['localBackupDir'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectDir']) && (mb_strlen($this->container['protectDir']) > 512)) {
                $invalidProperties[] = "invalid value for 'protectDir', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['protectDir']) && (mb_strlen($this->container['protectDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeChildDir']) && (mb_strlen($this->container['excludeChildDir']) > 512)) {
                $invalidProperties[] = "invalid value for 'excludeChildDir', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['excludeChildDir']) && (mb_strlen($this->container['excludeChildDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeChildDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeFilePath']) && (mb_strlen($this->container['excludeFilePath']) > 512)) {
                $invalidProperties[] = "invalid value for 'excludeFilePath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['excludeFilePath']) && (mb_strlen($this->container['excludeFilePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeFilePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['exclueFilePath']) && (mb_strlen($this->container['exclueFilePath']) > 512)) {
                $invalidProperties[] = "invalid value for 'exclueFilePath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['exclueFilePath']) && (mb_strlen($this->container['exclueFilePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'exclueFilePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localBackupDir']) && (mb_strlen($this->container['localBackupDir']) > 512)) {
                $invalidProperties[] = "invalid value for 'localBackupDir', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['localBackupDir']) && (mb_strlen($this->container['localBackupDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'localBackupDir', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtectStatusAllowableValues();
                if (!is_null($this->container['protectStatus']) && !in_array($this->container['protectStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 512)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) < 0)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be bigger than or equal to 0.";
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
    * Gets protectDir
    *  防护目录
    *
    * @return string|null
    */
    public function getProtectDir()
    {
        return $this->container['protectDir'];
    }

    /**
    * Sets protectDir
    *
    * @param string|null $protectDir 防护目录
    *
    * @return $this
    */
    public function setProtectDir($protectDir)
    {
        $this->container['protectDir'] = $protectDir;
        return $this;
    }

    /**
    * Gets excludeChildDir
    *  排除子目录
    *
    * @return string|null
    */
    public function getExcludeChildDir()
    {
        return $this->container['excludeChildDir'];
    }

    /**
    * Sets excludeChildDir
    *
    * @param string|null $excludeChildDir 排除子目录
    *
    * @return $this
    */
    public function setExcludeChildDir($excludeChildDir)
    {
        $this->container['excludeChildDir'] = $excludeChildDir;
        return $this;
    }

    /**
    * Gets excludeFilePath
    *  排除文件路径
    *
    * @return string|null
    */
    public function getExcludeFilePath()
    {
        return $this->container['excludeFilePath'];
    }

    /**
    * Sets excludeFilePath
    *
    * @param string|null $excludeFilePath 排除文件路径
    *
    * @return $this
    */
    public function setExcludeFilePath($excludeFilePath)
    {
        $this->container['excludeFilePath'] = $excludeFilePath;
        return $this;
    }

    /**
    * Gets exclueFilePath
    *  排除文件路径
    *
    * @return string|null
    */
    public function getExclueFilePath()
    {
        return $this->container['exclueFilePath'];
    }

    /**
    * Sets exclueFilePath
    *
    * @param string|null $exclueFilePath 排除文件路径
    *
    * @return $this
    */
    public function setExclueFilePath($exclueFilePath)
    {
        $this->container['exclueFilePath'] = $exclueFilePath;
        return $this;
    }

    /**
    * Gets localBackupDir
    *  本地备份路径
    *
    * @return string|null
    */
    public function getLocalBackupDir()
    {
        return $this->container['localBackupDir'];
    }

    /**
    * Sets localBackupDir
    *
    * @param string|null $localBackupDir 本地备份路径
    *
    * @return $this
    */
    public function setLocalBackupDir($localBackupDir)
    {
        $this->container['localBackupDir'] = $localBackupDir;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态（closed-未开启，opened-防护中，opening-开启中，closing-关闭中，open_failed-防护失败）
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets error
    *  失败原因
    *
    * @return string|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param string|null $error 失败原因
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
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

