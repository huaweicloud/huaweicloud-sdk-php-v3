<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColdTableMetaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColdTableMetaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * ddId  **参数解释**：  表ID。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  冷表表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
    * expirationTime  **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    * retainedTime  **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    * dataSize  **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'spaceId' => 'string',
            'ddId' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'partitionName' => 'string',
            'expirationTime' => 'int',
            'retainedTime' => 'int',
            'dataSize' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * ddId  **参数解释**：  表ID。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  冷表表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
    * expirationTime  **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    * retainedTime  **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    * dataSize  **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'spaceId' => null,
        'ddId' => null,
        'databaseName' => null,
        'tableName' => null,
        'partitionName' => null,
        'expirationTime' => 'int64',
        'retainedTime' => 'int64',
        'dataSize' => 'float'
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
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * ddId  **参数解释**：  表ID。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  冷表表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
    * expirationTime  **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    * retainedTime  **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    * dataSize  **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'spaceId' => 'space_id',
            'ddId' => 'dd_id',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'partitionName' => 'partition_name',
            'expirationTime' => 'expiration_time',
            'retainedTime' => 'retained_time',
            'dataSize' => 'data_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * ddId  **参数解释**：  表ID。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  冷表表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
    * expirationTime  **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    * retainedTime  **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    * dataSize  **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @var string[]
    */
    protected static $setters = [
            'spaceId' => 'setSpaceId',
            'ddId' => 'setDdId',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'partitionName' => 'setPartitionName',
            'expirationTime' => 'setExpirationTime',
            'retainedTime' => 'setRetainedTime',
            'dataSize' => 'setDataSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * spaceId  **参数解释**：  表空间ID。  **取值范围**：  不涉及。
    * ddId  **参数解释**：  表ID。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    * tableName  **参数解释**：  冷表表名。  **取值范围**：  不涉及。
    * partitionName  **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
    * expirationTime  **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    * retainedTime  **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    * dataSize  **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @var string[]
    */
    protected static $getters = [
            'spaceId' => 'getSpaceId',
            'ddId' => 'getDdId',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'partitionName' => 'getPartitionName',
            'expirationTime' => 'getExpirationTime',
            'retainedTime' => 'getRetainedTime',
            'dataSize' => 'getDataSize'
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
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['ddId'] = isset($data['ddId']) ? $data['ddId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['partitionName'] = isset($data['partitionName']) ? $data['partitionName'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['retainedTime'] = isset($data['retainedTime']) ? $data['retainedTime'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
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
    * Gets ddId
    *  **参数解释**：  表ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDdId()
    {
        return $this->container['ddId'];
    }

    /**
    * Sets ddId
    *
    * @param string|null $ddId **参数解释**：  表ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDdId($ddId)
    {
        $this->container['ddId'] = $ddId;
        return $this;
    }

    /**
    * Gets databaseName
    *  **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName **参数解释**：  冷表库名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释**：  冷表表名。  **取值范围**：  不涉及。
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
    * @param string|null $tableName **参数解释**：  冷表表名。  **取值范围**：  不涉及。
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
    *  **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
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
    * @param string|null $partitionName **参数解释**：  冷表分区名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setPartitionName($partitionName)
    {
        $this->container['partitionName'] = $partitionName;
        return $this;
    }

    /**
    * Gets expirationTime
    *  **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    *
    * @return int|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param int|null $expirationTime **参数解释**：  冷表有效周期（秒）。  **取值范围**：  ≥0。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets retainedTime
    *  **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    *
    * @return int|null
    */
    public function getRetainedTime()
    {
        return $this->container['retainedTime'];
    }

    /**
    * Sets retainedTime
    *
    * @param int|null $retainedTime **参数解释**：  冷表已保留时间（秒）。  **取值范围**：  ≥0。
    *
    * @return $this
    */
    public function setRetainedTime($retainedTime)
    {
        $this->container['retainedTime'] = $retainedTime;
        return $this;
    }

    /**
    * Gets dataSize
    *  **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @return float|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param float|null $dataSize **参数解释**：  冷表数据量大小（MB）。  **取值范围**：  ≥0。
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
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

