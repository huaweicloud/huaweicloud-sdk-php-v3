<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlBackupPolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlBackupPolicyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * retentionNumBackupLevel1  **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    * policies  **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'string',
            'endTime' => 'string',
            'retentionNumBackupLevel1' => 'int',
            'policies' => '\HuaweiCloud\SDK\GaussDB\V3\Model\PolicyInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * retentionNumBackupLevel1  **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    * policies  **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => null,
        'endTime' => null,
        'retentionNumBackupLevel1' => 'int32',
        'policies' => null
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
    * beginTime  **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * retentionNumBackupLevel1  **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    * policies  **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'retentionNumBackupLevel1' => 'retention_num_backup_level1',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * retentionNumBackupLevel1  **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    * policies  **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'retentionNumBackupLevel1' => 'setRetentionNumBackupLevel1',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    * retentionNumBackupLevel1  **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    * policies  **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'retentionNumBackupLevel1' => 'getRetentionNumBackupLevel1',
            'policies' => 'getPolicies'
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['retentionNumBackupLevel1'] = isset($data['retentionNumBackupLevel1']) ? $data['retentionNumBackupLevel1'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['policies'] === null) {
            $invalidProperties[] = "'policies' can't be null";
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
    * Gets beginTime
    *  **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime **参数解释**：  备份时间段开始时间。  **约束限制**：  不涉及。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime **参数解释**：  备份时间段结束时间。  **约束限制**：  end_time必须大于begin_time。  **取值范围**：  非空，格式必须为hh:mm且有效，当前时间指UTC时间。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets retentionNumBackupLevel1
    *  **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    *
    * @return int|null
    */
    public function getRetentionNumBackupLevel1()
    {
        return $this->container['retentionNumBackupLevel1'];
    }

    /**
    * Sets retentionNumBackupLevel1
    *
    * @param int|null $retentionNumBackupLevel1 **参数解释**：  一级备份保留数量。  **约束限制**：  当一级备份开关开启时，该参数必传。反之，不能传。  **取值范围**：  - 0：不保留一级备份。 - 1：保留1个一级备份。  **默认取值**：  0。
    *
    * @return $this
    */
    public function setRetentionNumBackupLevel1($retentionNumBackupLevel1)
    {
        $this->container['retentionNumBackupLevel1'] = $retentionNumBackupLevel1;
        return $this;
    }

    /**
    * Gets policies
    *  **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\PolicyInfo[]
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\PolicyInfo[] $policies **参数解释**：  备份策略集。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

