<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableTarget';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * tableName  **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * partitionName  **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'tableName' => 'string',
            'partitionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * tableName  **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * partitionName  **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'tableName' => null,
        'partitionName' => null
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
    * dbName  **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * tableName  **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * partitionName  **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'partitionName' => 'partition_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * tableName  **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * partitionName  **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'partitionName' => 'setPartitionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * tableName  **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * partitionName  **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'partitionName' => 'getPartitionName'
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
    *  **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string $dbName **参数解释**：  数据库名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string $tableName **参数解释**：  表名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $partitionName **参数解释**：  分区名。  获取方法请参见[查询冷热分离可归档表信息](https://support.huaweicloud.com/api-taurusdb/ListArchivableTables.html)。  **约束限制**：  如果指定表下存在分区，则该参数必填。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setPartitionName($partitionName)
    {
        $this->container['partitionName'] = $partitionName;
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

