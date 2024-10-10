<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupJobEndpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupJobEndpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetInstanceId  备份迁移任务恢复目标RDS for SQL Server实例ID。
    * msFileStreamStatus  目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    * fileId  RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetInstanceId' => 'string',
            'msFileStreamStatus' => 'string',
            'fileId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetInstanceId  备份迁移任务恢复目标RDS for SQL Server实例ID。
    * msFileStreamStatus  目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    * fileId  RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetInstanceId' => null,
        'msFileStreamStatus' => null,
        'fileId' => null
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
    * targetInstanceId  备份迁移任务恢复目标RDS for SQL Server实例ID。
    * msFileStreamStatus  目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    * fileId  RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetInstanceId' => 'target_instance_id',
            'msFileStreamStatus' => 'ms_file_stream_status',
            'fileId' => 'file_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetInstanceId  备份迁移任务恢复目标RDS for SQL Server实例ID。
    * msFileStreamStatus  目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    * fileId  RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetInstanceId' => 'setTargetInstanceId',
            'msFileStreamStatus' => 'setMsFileStreamStatus',
            'fileId' => 'setFileId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetInstanceId  备份迁移任务恢复目标RDS for SQL Server实例ID。
    * msFileStreamStatus  目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    * fileId  RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetInstanceId' => 'getTargetInstanceId',
            'msFileStreamStatus' => 'getMsFileStreamStatus',
            'fileId' => 'getFileId'
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
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['msFileStreamStatus'] = isset($data['msFileStreamStatus']) ? $data['msFileStreamStatus'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetInstanceId'] === null) {
            $invalidProperties[] = "'targetInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['targetInstanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'targetInstanceId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['targetInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['msFileStreamStatus']) && (mb_strlen($this->container['msFileStreamStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'msFileStreamStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['msFileStreamStatus']) && (mb_strlen($this->container['msFileStreamStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'msFileStreamStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileId']) && (mb_strlen($this->container['fileId']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileId', the character length must be bigger than or equal to 0.";
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
    * Gets targetInstanceId
    *  备份迁移任务恢复目标RDS for SQL Server实例ID。
    *
    * @return string
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string $targetInstanceId 备份迁移任务恢复目标RDS for SQL Server实例ID。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets msFileStreamStatus
    *  目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    *
    * @return string|null
    */
    public function getMsFileStreamStatus()
    {
        return $this->container['msFileStreamStatus'];
    }

    /**
    * Sets msFileStreamStatus
    *
    * @param string|null $msFileStreamStatus 目标实例是否开启FileStream模式。可通过RDS for SQL Server详情接口获取。
    *
    * @return $this
    */
    public function setMsFileStreamStatus($msFileStreamStatus)
    {
        $this->container['msFileStreamStatus'] = $msFileStreamStatus;
        return $this;
    }

    /**
    * Gets fileId
    *  RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId RDS for SQL Server备份文件的文件ID，通过RDS全量恢复时必填。可通过云数据库RDS备份管理页面获取。
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
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

