<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColdTableWaitingTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColdTableWaitingTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    * createAt  **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'tableName' => 'string',
            'partitionName' => 'string',
            'status' => 'string',
            'createAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    * createAt  **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'tableName' => null,
        'partitionName' => null,
        'status' => null,
        'createAt' => 'int64'
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
    * partitionName  **参数解释**：  分区名。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    * createAt  **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'partitionName' => 'partition_name',
            'status' => 'status',
            'createAt' => 'create_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    * createAt  **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'partitionName' => 'setPartitionName',
            'status' => 'setStatus',
            'createAt' => 'setCreateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  分区名。  **取值范围**：  不涉及。
    * status  **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    * createAt  **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'partitionName' => 'getPartitionName',
            'status' => 'getStatus',
            'createAt' => 'getCreateAt'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
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
    * Gets dbName
    *  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName **参数解释**：  数据库名。  **取值范围**：  不涉及。
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
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName **参数解释**：  表名。  **取值范围**：  不涉及。
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
    *  **参数解释**：  分区名。  **取值范围**：  不涉及。
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
    * @param string|null $partitionName **参数解释**：  分区名。  **取值范围**：  不涉及。
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
    *  **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：  任务状态。  **取值范围**：  - waiting_archive：等待归档。 - waiting_unarchive：等待回迁。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：  任务创建时间，13位毫秒级时间戳。  **取值范围**：  非负整数。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
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

