<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetInstanceId  目标实例ID。
    * sourceInstanceId  源实例ID。
    * backupId  用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
    * restoreTime  恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    * type  表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetInstanceId' => 'string',
            'sourceInstanceId' => 'string',
            'backupId' => 'string',
            'restoreTime' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetInstanceId  目标实例ID。
    * sourceInstanceId  源实例ID。
    * backupId  用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
    * restoreTime  恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    * type  表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetInstanceId' => null,
        'sourceInstanceId' => null,
        'backupId' => null,
        'restoreTime' => 'int64',
        'type' => null
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
    * targetInstanceId  目标实例ID。
    * sourceInstanceId  源实例ID。
    * backupId  用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
    * restoreTime  恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    * type  表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetInstanceId' => 'target_instance_id',
            'sourceInstanceId' => 'source_instance_id',
            'backupId' => 'backup_id',
            'restoreTime' => 'restore_time',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetInstanceId  目标实例ID。
    * sourceInstanceId  源实例ID。
    * backupId  用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
    * restoreTime  恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    * type  表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetInstanceId' => 'setTargetInstanceId',
            'sourceInstanceId' => 'setSourceInstanceId',
            'backupId' => 'setBackupId',
            'restoreTime' => 'setRestoreTime',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetInstanceId  目标实例ID。
    * sourceInstanceId  源实例ID。
    * backupId  用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
    * restoreTime  恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    * type  表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetInstanceId' => 'getTargetInstanceId',
            'sourceInstanceId' => 'getSourceInstanceId',
            'backupId' => 'getBackupId',
            'restoreTime' => 'getRestoreTime',
            'type' => 'getType'
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
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    *  目标实例ID。
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
    * @param string $targetInstanceId 目标实例ID。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets sourceInstanceId
    *  源实例ID。
    *
    * @return string
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string $sourceInstanceId 源实例ID。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets backupId
    *  用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
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
    * @param string|null $backupId 用于恢复的备份ID。当使用备份文件恢复时需要指定该参数。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets restoreTime
    *  恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    *
    * @return int|null
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param int|null $restoreTime 恢复数据的时间点，格式为UNIX时间戳，单位是毫秒，时区为UTC。
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets type
    *  表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 表示恢复方式，枚举值： - backup：表示使用备份文件恢复，按照此方式恢复时，当\"type\"字段为非必选时，\"backup_id\"必选。 - timestamp：表示按时间点恢复，按照此方式恢复时，当\"type\"字段必选时，\"restore_time\"必选。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

