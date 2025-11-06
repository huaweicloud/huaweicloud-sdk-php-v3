<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupStrategyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupStrategyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    * backupDatabase  **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    * backupSchemaList  **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    * backupTableList  **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'backupStrategy' => 'string',
            'backupType' => 'string',
            'backupLevel' => 'string',
            'nextFireTime' => 'string',
            'updateTime' => 'string',
            'timeZoneOffset' => 'int',
            'backupDatabase' => 'string',
            'backupSchemaList' => 'string',
            'backupTableList' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    * backupDatabase  **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    * backupSchemaList  **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    * backupTableList  **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'backupStrategy' => null,
        'backupType' => null,
        'backupLevel' => null,
        'nextFireTime' => null,
        'updateTime' => null,
        'timeZoneOffset' => 'int32',
        'backupDatabase' => null,
        'backupSchemaList' => null,
        'backupTableList' => null
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
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    * backupDatabase  **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    * backupSchemaList  **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    * backupTableList  **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'backupStrategy' => 'backup_strategy',
            'backupType' => 'backup_type',
            'backupLevel' => 'backup_level',
            'nextFireTime' => 'next_fire_time',
            'updateTime' => 'update_time',
            'timeZoneOffset' => 'time_zone_offset',
            'backupDatabase' => 'backup_database',
            'backupSchemaList' => 'backup_schema_list',
            'backupTableList' => 'backup_table_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    * backupDatabase  **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    * backupSchemaList  **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    * backupTableList  **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'backupStrategy' => 'setBackupStrategy',
            'backupType' => 'setBackupType',
            'backupLevel' => 'setBackupLevel',
            'nextFireTime' => 'setNextFireTime',
            'updateTime' => 'setUpdateTime',
            'timeZoneOffset' => 'setTimeZoneOffset',
            'backupDatabase' => 'setBackupDatabase',
            'backupSchemaList' => 'setBackupSchemaList',
            'backupTableList' => 'setBackupTableList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    * backupDatabase  **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    * backupSchemaList  **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    * backupTableList  **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'backupStrategy' => 'getBackupStrategy',
            'backupType' => 'getBackupType',
            'backupLevel' => 'getBackupLevel',
            'nextFireTime' => 'getNextFireTime',
            'updateTime' => 'getUpdateTime',
            'timeZoneOffset' => 'getTimeZoneOffset',
            'backupDatabase' => 'getBackupDatabase',
            'backupSchemaList' => 'getBackupSchemaList',
            'backupTableList' => 'getBackupTableList'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
        $this->container['nextFireTime'] = isset($data['nextFireTime']) ? $data['nextFireTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['timeZoneOffset'] = isset($data['timeZoneOffset']) ? $data['timeZoneOffset'] : null;
        $this->container['backupDatabase'] = isset($data['backupDatabase']) ? $data['backupDatabase'] : null;
        $this->container['backupSchemaList'] = isset($data['backupSchemaList']) ? $data['backupSchemaList'] : null;
        $this->container['backupTableList'] = isset($data['backupTableList']) ? $data['backupTableList'] : null;
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
    * Gets policyId
    *  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释**： 策略ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName **参数解释**： 策略名称。添加备份策略时为必选字段。策略名称在4位到92位之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他特殊字符，并且名称唯一。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param string|null $backupStrategy **参数解释**： 执行策略。添加备份策略时为必选字段。符合Cron表达式格式。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets backupType
    *  **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType **参数解释**： 备份类型。 **取值范围**： full：全量。 increment：增量。
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets backupLevel
    *  **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    *
    * @return string|null
    */
    public function getBackupLevel()
    {
        return $this->container['backupLevel'];
    }

    /**
    * Sets backupLevel
    *
    * @param string|null $backupLevel **参数解释**： 备份级别。 **取值范围**： cluster：集群级。 schema：模式级。 table：表级。
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
        return $this;
    }

    /**
    * Gets nextFireTime
    *  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNextFireTime()
    {
        return $this->container['nextFireTime'];
    }

    /**
    * Sets nextFireTime
    *
    * @param string|null $nextFireTime **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNextFireTime($nextFireTime)
    {
        $this->container['nextFireTime'] = $nextFireTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets timeZoneOffset
    *  **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTimeZoneOffset()
    {
        return $this->container['timeZoneOffset'];
    }

    /**
    * Sets timeZoneOffset
    *
    * @param int|null $timeZoneOffset **参数解释**： 时区偏移量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTimeZoneOffset($timeZoneOffset)
    {
        $this->container['timeZoneOffset'] = $timeZoneOffset;
        return $this;
    }

    /**
    * Gets backupDatabase
    *  **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupDatabase()
    {
        return $this->container['backupDatabase'];
    }

    /**
    * Sets backupDatabase
    *
    * @param string|null $backupDatabase **参数解释**： 备份的数据库。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupDatabase($backupDatabase)
    {
        $this->container['backupDatabase'] = $backupDatabase;
        return $this;
    }

    /**
    * Gets backupSchemaList
    *  **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupSchemaList()
    {
        return $this->container['backupSchemaList'];
    }

    /**
    * Sets backupSchemaList
    *
    * @param string|null $backupSchemaList **参数解释**： 备份的数据库模式列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupSchemaList($backupSchemaList)
    {
        $this->container['backupSchemaList'] = $backupSchemaList;
        return $this;
    }

    /**
    * Gets backupTableList
    *  **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupTableList()
    {
        return $this->container['backupTableList'];
    }

    /**
    * Sets backupTableList
    *
    * @param string|null $backupTableList **参数解释**： 备份的数据库表列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupTableList($backupTableList)
    {
        $this->container['backupTableList'] = $backupTableList;
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

