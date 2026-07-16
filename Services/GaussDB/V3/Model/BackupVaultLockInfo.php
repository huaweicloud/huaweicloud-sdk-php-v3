<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupVaultLockInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupVaultLockInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockRetentionDays  **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    * lockPolicy  **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    * lockStartTime  **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    * lockEndTime  **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockRetentionDays' => 'int',
            'lockPolicy' => 'bool',
            'lockStartTime' => 'int',
            'lockEndTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockRetentionDays  **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    * lockPolicy  **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    * lockStartTime  **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    * lockEndTime  **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockRetentionDays' => 'int32',
        'lockPolicy' => null,
        'lockStartTime' => 'int64',
        'lockEndTime' => 'int64'
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
    * lockRetentionDays  **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    * lockPolicy  **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    * lockStartTime  **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    * lockEndTime  **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockRetentionDays' => 'lock_retention_days',
            'lockPolicy' => 'lock_policy',
            'lockStartTime' => 'lock_start_time',
            'lockEndTime' => 'lock_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockRetentionDays  **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    * lockPolicy  **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    * lockStartTime  **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    * lockEndTime  **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'lockRetentionDays' => 'setLockRetentionDays',
            'lockPolicy' => 'setLockPolicy',
            'lockStartTime' => 'setLockStartTime',
            'lockEndTime' => 'setLockEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockRetentionDays  **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    * lockPolicy  **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    * lockStartTime  **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    * lockEndTime  **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'lockRetentionDays' => 'getLockRetentionDays',
            'lockPolicy' => 'getLockPolicy',
            'lockStartTime' => 'getLockStartTime',
            'lockEndTime' => 'getLockEndTime'
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
        $this->container['lockRetentionDays'] = isset($data['lockRetentionDays']) ? $data['lockRetentionDays'] : null;
        $this->container['lockPolicy'] = isset($data['lockPolicy']) ? $data['lockPolicy'] : null;
        $this->container['lockStartTime'] = isset($data['lockStartTime']) ? $data['lockStartTime'] : null;
        $this->container['lockEndTime'] = isset($data['lockEndTime']) ? $data['lockEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['lockRetentionDays'] === null) {
            $invalidProperties[] = "'lockRetentionDays' can't be null";
        }
            if (($this->container['lockRetentionDays'] > 36500)) {
                $invalidProperties[] = "invalid value for 'lockRetentionDays', must be smaller than or equal to 36500.";
            }
            if (($this->container['lockRetentionDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'lockRetentionDays', must be bigger than or equal to 1.";
            }
        if ($this->container['lockPolicy'] === null) {
            $invalidProperties[] = "'lockPolicy' can't be null";
        }
        if ($this->container['lockStartTime'] === null) {
            $invalidProperties[] = "'lockStartTime' can't be null";
        }
        if ($this->container['lockEndTime'] === null) {
            $invalidProperties[] = "'lockEndTime' can't be null";
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
    * Gets lockRetentionDays
    *  **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    *
    * @return int
    */
    public function getLockRetentionDays()
    {
        return $this->container['lockRetentionDays'];
    }

    /**
    * Sets lockRetentionDays
    *
    * @param int $lockRetentionDays **参数解释**：  合规锁保留期，单位是天。  **取值范围**：  1-36500。
    *
    * @return $this
    */
    public function setLockRetentionDays($lockRetentionDays)
    {
        $this->container['lockRetentionDays'] = $lockRetentionDays;
        return $this;
    }

    /**
    * Gets lockPolicy
    *  **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    *
    * @return bool
    */
    public function getLockPolicy()
    {
        return $this->container['lockPolicy'];
    }

    /**
    * Sets lockPolicy
    *
    * @param bool $lockPolicy **参数解释**：  合规锁配置策略。  **取值范围**：  - true：已开启合规锁配置。 - false: 未开启合规锁配置。
    *
    * @return $this
    */
    public function setLockPolicy($lockPolicy)
    {
        $this->container['lockPolicy'] = $lockPolicy;
        return $this;
    }

    /**
    * Gets lockStartTime
    *  **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @return int
    */
    public function getLockStartTime()
    {
        return $this->container['lockStartTime'];
    }

    /**
    * Sets lockStartTime
    *
    * @param int $lockStartTime **参数解释**：  合规锁开始时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setLockStartTime($lockStartTime)
    {
        $this->container['lockStartTime'] = $lockStartTime;
        return $this;
    }

    /**
    * Gets lockEndTime
    *  **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @return int
    */
    public function getLockEndTime()
    {
        return $this->container['lockEndTime'];
    }

    /**
    * Sets lockEndTime
    *
    * @param int $lockEndTime **参数解释**：  合规锁结束时间，时间戳格式。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setLockEndTime($lockEndTime)
    {
        $this->container['lockEndTime'] = $lockEndTime;
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

