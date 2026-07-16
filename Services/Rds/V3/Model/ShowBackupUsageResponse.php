<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackupUsageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackupUsageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupUseSpace  **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * dbUseSpace  **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsSnapshotUseSpace  **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offsiteUseSpace  **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupUseSpace' => 'double',
            'dbUseSpace' => 'double',
            'rdsSnapshotUseSpace' => 'double',
            'offsiteUseSpace' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupUseSpace  **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * dbUseSpace  **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsSnapshotUseSpace  **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offsiteUseSpace  **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupUseSpace' => 'double',
        'dbUseSpace' => 'double',
        'rdsSnapshotUseSpace' => 'double',
        'offsiteUseSpace' => 'double'
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
    * backupUseSpace  **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * dbUseSpace  **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsSnapshotUseSpace  **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offsiteUseSpace  **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupUseSpace' => 'backup_use_space',
            'dbUseSpace' => 'db_use_space',
            'rdsSnapshotUseSpace' => 'rds_snapshot_use_space',
            'offsiteUseSpace' => 'offsite_use_space'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupUseSpace  **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * dbUseSpace  **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsSnapshotUseSpace  **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offsiteUseSpace  **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupUseSpace' => 'setBackupUseSpace',
            'dbUseSpace' => 'setDbUseSpace',
            'rdsSnapshotUseSpace' => 'setRdsSnapshotUseSpace',
            'offsiteUseSpace' => 'setOffsiteUseSpace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupUseSpace  **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * dbUseSpace  **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * rdsSnapshotUseSpace  **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * offsiteUseSpace  **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupUseSpace' => 'getBackupUseSpace',
            'dbUseSpace' => 'getDbUseSpace',
            'rdsSnapshotUseSpace' => 'getRdsSnapshotUseSpace',
            'offsiteUseSpace' => 'getOffsiteUseSpace'
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
        $this->container['backupUseSpace'] = isset($data['backupUseSpace']) ? $data['backupUseSpace'] : null;
        $this->container['dbUseSpace'] = isset($data['dbUseSpace']) ? $data['dbUseSpace'] : null;
        $this->container['rdsSnapshotUseSpace'] = isset($data['rdsSnapshotUseSpace']) ? $data['rdsSnapshotUseSpace'] : null;
        $this->container['offsiteUseSpace'] = isset($data['offsiteUseSpace']) ? $data['offsiteUseSpace'] : null;
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
    * Gets backupUseSpace
    *  **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return double|null
    */
    public function getBackupUseSpace()
    {
        return $this->container['backupUseSpace'];
    }

    /**
    * Sets backupUseSpace
    *
    * @param double|null $backupUseSpace **参数解释**：  备份总使用量，各类备份占用的备份总大小。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBackupUseSpace($backupUseSpace)
    {
        $this->container['backupUseSpace'] = $backupUseSpace;
        return $this;
    }

    /**
    * Gets dbUseSpace
    *  **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return double|null
    */
    public function getDbUseSpace()
    {
        return $this->container['dbUseSpace'];
    }

    /**
    * Sets dbUseSpace
    *
    * @param double|null $dbUseSpace **参数解释**：  物理备份总使用量，包括本区域的物理全量备份，binlog日志备份，审计日志。 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setDbUseSpace($dbUseSpace)
    {
        $this->container['dbUseSpace'] = $dbUseSpace;
        return $this;
    }

    /**
    * Gets rdsSnapshotUseSpace
    *  **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return double|null
    */
    public function getRdsSnapshotUseSpace()
    {
        return $this->container['rdsSnapshotUseSpace'];
    }

    /**
    * Sets rdsSnapshotUseSpace
    *
    * @param double|null $rdsSnapshotUseSpace **参数解释**：  由RDS计费的cbr快照备份总使用量， 单位MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRdsSnapshotUseSpace($rdsSnapshotUseSpace)
    {
        $this->container['rdsSnapshotUseSpace'] = $rdsSnapshotUseSpace;
        return $this;
    }

    /**
    * Gets offsiteUseSpace
    *  **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return double|null
    */
    public function getOffsiteUseSpace()
    {
        return $this->container['offsiteUseSpace'];
    }

    /**
    * Sets offsiteUseSpace
    *
    * @param double|null $offsiteUseSpace **参数解释**：  跨区域备份总使用量，包括跨区域的物理全量备份，binlog日志备份， 单位：MB  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setOffsiteUseSpace($offsiteUseSpace)
    {
        $this->container['offsiteUseSpace'] = $offsiteUseSpace;
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

