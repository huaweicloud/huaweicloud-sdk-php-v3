<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupStrategyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupStrategyDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： 不涉及。
    * nextFireTime  **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
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
            'timeZoneOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： 不涉及。
    * nextFireTime  **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
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
        'timeZoneOffset' => 'int32'
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
    * policyName  **参数解释**： 策略名称。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： 不涉及。
    * nextFireTime  **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
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
            'timeZoneOffset' => 'time_zone_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： 不涉及。
    * nextFireTime  **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
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
            'timeZoneOffset' => 'setTimeZoneOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释**： 策略ID。 **取值范围**： 不涉及。
    * policyName  **参数解释**： 策略名称。 **取值范围**： 不涉及。
    * backupStrategy  **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： 不涉及。
    * nextFireTime  **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * timeZoneOffset  **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
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
            'timeZoneOffset' => 'getTimeZoneOffset'
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
    *  **参数解释**： 策略名称。 **取值范围**： 不涉及。
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
    * @param string|null $policyName **参数解释**： 策略名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
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
    * @param string|null $backupStrategy **参数解释**： 执行策略，一般为crontab表达式。 **取值范围**： 不涉及。
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
    *  **参数解释**： 备份类型。 **取值范围**： 不涉及。
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
    * @param string|null $backupType **参数解释**： 备份类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 备份级别。 **取值范围**： 不涉及。
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
    * @param string|null $backupLevel **参数解释**： 备份级别。 **取值范围**： 不涉及。
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
    *  **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
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
    * @param string|null $nextFireTime **参数解释**： 下次触发时间（预估，与其它任务冲突时不执行）。 **取值范围**： 不涉及。
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
    *  **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
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
    * @param int|null $timeZoneOffset **参数解释**： 时区偏移量（相比UTC时间）。 **取值范围**： 0~23
    *
    * @return $this
    */
    public function setTimeZoneOffset($timeZoneOffset)
    {
        $this->container['timeZoneOffset'] = $timeZoneOffset;
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

