<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecoveryBackupSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecoveryBackupSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * type  恢复备份类型：backup，timestamp，different
    * backupId  用于恢复的备份ID。
    * restoreTime  UTC时间，时间戳
    * tableList  表基础信息。
    * schemaType  备份级别取值, 默认值：INSTANCE
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'type' => 'string',
            'backupId' => 'string',
            'restoreTime' => 'string',
            'tableList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RestoreTableListDetail[]',
            'schemaType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * type  恢复备份类型：backup，timestamp，different
    * backupId  用于恢复的备份ID。
    * restoreTime  UTC时间，时间戳
    * tableList  表基础信息。
    * schemaType  备份级别取值, 默认值：INSTANCE
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'type' => null,
        'backupId' => null,
        'restoreTime' => null,
        'tableList' => null,
        'schemaType' => null
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
    * instanceId  实例ID
    * type  恢复备份类型：backup，timestamp，different
    * backupId  用于恢复的备份ID。
    * restoreTime  UTC时间，时间戳
    * tableList  表基础信息。
    * schemaType  备份级别取值, 默认值：INSTANCE
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'type' => 'type',
            'backupId' => 'backup_id',
            'restoreTime' => 'restore_time',
            'tableList' => 'table_list',
            'schemaType' => 'schema_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * type  恢复备份类型：backup，timestamp，different
    * backupId  用于恢复的备份ID。
    * restoreTime  UTC时间，时间戳
    * tableList  表基础信息。
    * schemaType  备份级别取值, 默认值：INSTANCE
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'type' => 'setType',
            'backupId' => 'setBackupId',
            'restoreTime' => 'setRestoreTime',
            'tableList' => 'setTableList',
            'schemaType' => 'setSchemaType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * type  恢复备份类型：backup，timestamp，different
    * backupId  用于恢复的备份ID。
    * restoreTime  UTC时间，时间戳
    * tableList  表基础信息。
    * schemaType  备份级别取值, 默认值：INSTANCE
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'type' => 'getType',
            'backupId' => 'getBackupId',
            'restoreTime' => 'getRestoreTime',
            'tableList' => 'getTableList',
            'schemaType' => 'getSchemaType'
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
    const SCHEMA_TYPE_INSTANCE = 'INSTANCE 实例级备份';
    const SCHEMA_TYPE_DATABASE = 'DATABASE 库级备份';
    const SCHEMA_TYPE_DATABASE_TABLE = 'DATABASE_TABLE 表级备份';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSchemaTypeAllowableValues()
    {
        return [
            self::SCHEMA_TYPE_INSTANCE,
            self::SCHEMA_TYPE_DATABASE,
            self::SCHEMA_TYPE_DATABASE_TABLE,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['tableList'] = isset($data['tableList']) ? $data['tableList'] : null;
        $this->container['schemaType'] = isset($data['schemaType']) ? $data['schemaType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['backupId'] === null) {
            $invalidProperties[] = "'backupId' can't be null";
        }
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
        }
            $allowedValues = $this->getSchemaTypeAllowableValues();
                if (!is_null($this->container['schemaType']) && !in_array($this->container['schemaType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'schemaType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets type
    *  恢复备份类型：backup，timestamp，different
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 恢复备份类型：backup，timestamp，different
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets backupId
    *  用于恢复的备份ID。
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
    * @param string $backupId 用于恢复的备份ID。
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
    *  UTC时间，时间戳
    *
    * @return string
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param string $restoreTime UTC时间，时间戳
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets tableList
    *  表基础信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RestoreTableListDetail[]|null
    */
    public function getTableList()
    {
        return $this->container['tableList'];
    }

    /**
    * Sets tableList
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RestoreTableListDetail[]|null $tableList 表基础信息。
    *
    * @return $this
    */
    public function setTableList($tableList)
    {
        $this->container['tableList'] = $tableList;
        return $this;
    }

    /**
    * Gets schemaType
    *  备份级别取值, 默认值：INSTANCE
    *
    * @return string|null
    */
    public function getSchemaType()
    {
        return $this->container['schemaType'];
    }

    /**
    * Sets schemaType
    *
    * @param string|null $schemaType 备份级别取值, 默认值：INSTANCE
    *
    * @return $this
    */
    public function setSchemaType($schemaType)
    {
        $this->container['schemaType'] = $schemaType;
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

