<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColdTableTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColdTableTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    * targetStorage  **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    * percent  **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    * totalCnt  **参数解释**：  对象数。  **取值范围**：  非负数。
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * version  **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'tableName' => 'string',
            'partitionName' => 'string',
            'status' => 'string',
            'targetStorage' => 'string',
            'percent' => 'double',
            'totalCnt' => 'double',
            'spaceId' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    * targetStorage  **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    * percent  **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    * totalCnt  **参数解释**：  对象数。  **取值范围**：  非负数。
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * version  **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'tableName' => null,
        'partitionName' => null,
        'status' => null,
        'targetStorage' => null,
        'percent' => 'double',
        'totalCnt' => 'double',
        'spaceId' => null,
        'version' => null
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
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    * targetStorage  **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    * percent  **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    * totalCnt  **参数解释**：  对象数。  **取值范围**：  非负数。
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * version  **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'partitionName' => 'partition_name',
            'status' => 'status',
            'targetStorage' => 'target_storage',
            'percent' => 'percent',
            'totalCnt' => 'total_cnt',
            'spaceId' => 'space_id',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    * targetStorage  **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    * percent  **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    * totalCnt  **参数解释**：  对象数。  **取值范围**：  非负数。
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * version  **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'partitionName' => 'setPartitionName',
            'status' => 'setStatus',
            'targetStorage' => 'setTargetStorage',
            'percent' => 'setPercent',
            'totalCnt' => 'setTotalCnt',
            'spaceId' => 'setSpaceId',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    * targetStorage  **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    * percent  **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    * totalCnt  **参数解释**：  对象数。  **取值范围**：  非负数。
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * version  **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'partitionName' => 'getPartitionName',
            'status' => 'getStatus',
            'targetStorage' => 'getTargetStorage',
            'percent' => 'getPercent',
            'totalCnt' => 'getTotalCnt',
            'spaceId' => 'getSpaceId',
            'version' => 'getVersion'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['partitionName'] = isset($data['partitionName']) ? $data['partitionName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['targetStorage'] = isset($data['targetStorage']) ? $data['targetStorage'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['totalCnt'] = isset($data['totalCnt']) ? $data['totalCnt'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets dbName
    *  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName **参数解释**：  数据库名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释**：  表名。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName **参数解释**：  表名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets partitionName
    *  **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getPartitionName()
    {
        return $this->container['partitionName'];
    }

    /**
    * Sets partitionName
    *
    * @param string|null $partitionName **参数解释**：  分区名，为空表示无分区表。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setPartitionName($partitionName)
    {
        $this->container['partitionName'] = $partitionName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**：  任务状态。  **取值范围**：  - BEGIN：开始。 - RUNNING：进行中。 - FINISH：已完成。 - FAIL：失败。 - REVOKE：回滚。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets targetStorage
    *  **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    *
    * @return string|null
    */
    public function getTargetStorage()
    {
        return $this->container['targetStorage'];
    }

    /**
    * Sets targetStorage
    *
    * @param string|null $targetStorage **参数解释**：  操作类型。  **取值范围**：  - OBS：创建冷表。 - SLICE：回迁冷表。
    *
    * @return $this
    */
    public function setTargetStorage($targetStorage)
    {
        $this->container['targetStorage'] = $targetStorage;
        return $this;
    }

    /**
    * Gets percent
    *  **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    *
    * @return double|null
    */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
    * Sets percent
    *
    * @param double|null $percent **参数解释**：  任务进度百分比。  **取值范围**：  0-1。
    *
    * @return $this
    */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;
        return $this;
    }

    /**
    * Gets totalCnt
    *  **参数解释**：  对象数。  **取值范围**：  非负数。
    *
    * @return double|null
    */
    public function getTotalCnt()
    {
        return $this->container['totalCnt'];
    }

    /**
    * Sets totalCnt
    *
    * @param double|null $totalCnt **参数解释**：  对象数。  **取值范围**：  非负数。
    *
    * @return $this
    */
    public function setTotalCnt($totalCnt)
    {
        $this->container['totalCnt'] = $totalCnt;
        return $this;
    }

    /**
    * Gets spaceId
    *  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param string|null $spaceId **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**：  冷表版本。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

