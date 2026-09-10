<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotProgressInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  全量同步整体进度。
    * databaseTotal  全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    * databaseProcessed  全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    * schemaTotal  全量同步的schema总数，如果是分库分表，则是schema的数量。
    * schemaProcessed  全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    * tableTotal  全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    * tableProcessed  全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    * tableProgress  表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'string',
            'databaseTotal' => 'int',
            'databaseProcessed' => 'int',
            'schemaTotal' => 'int',
            'schemaProcessed' => 'int',
            'tableTotal' => 'int',
            'tableProcessed' => 'int',
            'tableProgress' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotTableProgressInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  全量同步整体进度。
    * databaseTotal  全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    * databaseProcessed  全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    * schemaTotal  全量同步的schema总数，如果是分库分表，则是schema的数量。
    * schemaProcessed  全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    * tableTotal  全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    * tableProcessed  全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    * tableProgress  表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => null,
        'databaseTotal' => null,
        'databaseProcessed' => null,
        'schemaTotal' => null,
        'schemaProcessed' => null,
        'tableTotal' => null,
        'tableProcessed' => null,
        'tableProgress' => null
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
    * progress  全量同步整体进度。
    * databaseTotal  全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    * databaseProcessed  全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    * schemaTotal  全量同步的schema总数，如果是分库分表，则是schema的数量。
    * schemaProcessed  全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    * tableTotal  全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    * tableProcessed  全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    * tableProgress  表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'databaseTotal' => 'database_total',
            'databaseProcessed' => 'database_processed',
            'schemaTotal' => 'schema_total',
            'schemaProcessed' => 'schema_processed',
            'tableTotal' => 'table_total',
            'tableProcessed' => 'table_processed',
            'tableProgress' => 'table_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  全量同步整体进度。
    * databaseTotal  全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    * databaseProcessed  全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    * schemaTotal  全量同步的schema总数，如果是分库分表，则是schema的数量。
    * schemaProcessed  全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    * tableTotal  全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    * tableProcessed  全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    * tableProgress  表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'databaseTotal' => 'setDatabaseTotal',
            'databaseProcessed' => 'setDatabaseProcessed',
            'schemaTotal' => 'setSchemaTotal',
            'schemaProcessed' => 'setSchemaProcessed',
            'tableTotal' => 'setTableTotal',
            'tableProcessed' => 'setTableProcessed',
            'tableProgress' => 'setTableProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  全量同步整体进度。
    * databaseTotal  全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    * databaseProcessed  全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    * schemaTotal  全量同步的schema总数，如果是分库分表，则是schema的数量。
    * schemaProcessed  全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    * tableTotal  全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    * tableProcessed  全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    * tableProgress  表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'databaseTotal' => 'getDatabaseTotal',
            'databaseProcessed' => 'getDatabaseProcessed',
            'schemaTotal' => 'getSchemaTotal',
            'schemaProcessed' => 'getSchemaProcessed',
            'tableTotal' => 'getTableTotal',
            'tableProcessed' => 'getTableProcessed',
            'tableProgress' => 'getTableProgress'
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['databaseTotal'] = isset($data['databaseTotal']) ? $data['databaseTotal'] : null;
        $this->container['databaseProcessed'] = isset($data['databaseProcessed']) ? $data['databaseProcessed'] : null;
        $this->container['schemaTotal'] = isset($data['schemaTotal']) ? $data['schemaTotal'] : null;
        $this->container['schemaProcessed'] = isset($data['schemaProcessed']) ? $data['schemaProcessed'] : null;
        $this->container['tableTotal'] = isset($data['tableTotal']) ? $data['tableTotal'] : null;
        $this->container['tableProcessed'] = isset($data['tableProcessed']) ? $data['tableProcessed'] : null;
        $this->container['tableProgress'] = isset($data['tableProgress']) ? $data['tableProgress'] : null;
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
    * Gets progress
    *  全量同步整体进度。
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 全量同步整体进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets databaseTotal
    *  全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    *
    * @return int|null
    */
    public function getDatabaseTotal()
    {
        return $this->container['databaseTotal'];
    }

    /**
    * Sets databaseTotal
    *
    * @param int|null $databaseTotal 全量同步的数据库总数，如果是分库分表，则是逻辑库的数量。
    *
    * @return $this
    */
    public function setDatabaseTotal($databaseTotal)
    {
        $this->container['databaseTotal'] = $databaseTotal;
        return $this;
    }

    /**
    * Gets databaseProcessed
    *  全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    *
    * @return int|null
    */
    public function getDatabaseProcessed()
    {
        return $this->container['databaseProcessed'];
    }

    /**
    * Sets databaseProcessed
    *
    * @param int|null $databaseProcessed 全量同步的数据库已读取数量，如果是分库分表，则是已读取的逻辑库数量。
    *
    * @return $this
    */
    public function setDatabaseProcessed($databaseProcessed)
    {
        $this->container['databaseProcessed'] = $databaseProcessed;
        return $this;
    }

    /**
    * Gets schemaTotal
    *  全量同步的schema总数，如果是分库分表，则是schema的数量。
    *
    * @return int|null
    */
    public function getSchemaTotal()
    {
        return $this->container['schemaTotal'];
    }

    /**
    * Sets schemaTotal
    *
    * @param int|null $schemaTotal 全量同步的schema总数，如果是分库分表，则是schema的数量。
    *
    * @return $this
    */
    public function setSchemaTotal($schemaTotal)
    {
        $this->container['schemaTotal'] = $schemaTotal;
        return $this;
    }

    /**
    * Gets schemaProcessed
    *  全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    *
    * @return int|null
    */
    public function getSchemaProcessed()
    {
        return $this->container['schemaProcessed'];
    }

    /**
    * Sets schemaProcessed
    *
    * @param int|null $schemaProcessed 全量同步的schema已读取数量，如果是分库分表，则是已读取的schema的数量。
    *
    * @return $this
    */
    public function setSchemaProcessed($schemaProcessed)
    {
        $this->container['schemaProcessed'] = $schemaProcessed;
        return $this;
    }

    /**
    * Gets tableTotal
    *  全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    *
    * @return int|null
    */
    public function getTableTotal()
    {
        return $this->container['tableTotal'];
    }

    /**
    * Sets tableTotal
    *
    * @param int|null $tableTotal 全量同步的表总数，如果是分库分表，则是逻辑表的数量。
    *
    * @return $this
    */
    public function setTableTotal($tableTotal)
    {
        $this->container['tableTotal'] = $tableTotal;
        return $this;
    }

    /**
    * Gets tableProcessed
    *  全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    *
    * @return int|null
    */
    public function getTableProcessed()
    {
        return $this->container['tableProcessed'];
    }

    /**
    * Sets tableProcessed
    *
    * @param int|null $tableProcessed 全量同步的表已读取数量，如果是分库分表，则是已读取的逻辑表的数量。
    *
    * @return $this
    */
    public function setTableProcessed($tableProcessed)
    {
        $this->container['tableProcessed'] = $tableProcessed;
        return $this;
    }

    /**
    * Gets tableProgress
    *  表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotTableProgressInfo[]|null
    */
    public function getTableProgress()
    {
        return $this->container['tableProgress'];
    }

    /**
    * Sets tableProgress
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotTableProgressInfo[]|null $tableProgress 表级别全量同步进度，如果是分库分表作业，则第一层为分库分表进度。
    *
    * @return $this
    */
    public function setTableProgress($tableProgress)
    {
        $this->container['tableProgress'] = $tableProgress;
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

