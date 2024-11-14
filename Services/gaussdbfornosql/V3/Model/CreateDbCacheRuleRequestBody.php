<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDbCacheRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDbCacheRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbcacheMappingId  内存加速映射ID。
    * name  内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。 取值为： hash。
    * targetDatabase  目标数据库。取值范围： [0-999]。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * keySeparator  映射的key分隔符。只允许一个字符。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    * keyPrefix  键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbcacheMappingId' => 'string',
            'name' => 'string',
            'sourceDbSchema' => 'string',
            'sourceDbTable' => 'string',
            'storageType' => 'string',
            'targetDatabase' => 'string',
            'keyColumns' => 'string[]',
            'valueColumns' => 'string[]',
            'ttl' => 'string',
            'keySeparator' => 'string',
            'valueSeparator' => 'string',
            'keyPrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbcacheMappingId  内存加速映射ID。
    * name  内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。 取值为： hash。
    * targetDatabase  目标数据库。取值范围： [0-999]。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * keySeparator  映射的key分隔符。只允许一个字符。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    * keyPrefix  键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbcacheMappingId' => null,
        'name' => null,
        'sourceDbSchema' => null,
        'sourceDbTable' => null,
        'storageType' => null,
        'targetDatabase' => null,
        'keyColumns' => null,
        'valueColumns' => null,
        'ttl' => null,
        'keySeparator' => null,
        'valueSeparator' => null,
        'keyPrefix' => null
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
    * dbcacheMappingId  内存加速映射ID。
    * name  内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。 取值为： hash。
    * targetDatabase  目标数据库。取值范围： [0-999]。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * keySeparator  映射的key分隔符。只允许一个字符。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    * keyPrefix  键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbcacheMappingId' => 'dbcache_mapping_id',
            'name' => 'name',
            'sourceDbSchema' => 'source_db_schema',
            'sourceDbTable' => 'source_db_table',
            'storageType' => 'storage_type',
            'targetDatabase' => 'target_database',
            'keyColumns' => 'key_columns',
            'valueColumns' => 'value_columns',
            'ttl' => 'ttl',
            'keySeparator' => 'key_separator',
            'valueSeparator' => 'value_separator',
            'keyPrefix' => 'key_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbcacheMappingId  内存加速映射ID。
    * name  内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。 取值为： hash。
    * targetDatabase  目标数据库。取值范围： [0-999]。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * keySeparator  映射的key分隔符。只允许一个字符。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    * keyPrefix  键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbcacheMappingId' => 'setDbcacheMappingId',
            'name' => 'setName',
            'sourceDbSchema' => 'setSourceDbSchema',
            'sourceDbTable' => 'setSourceDbTable',
            'storageType' => 'setStorageType',
            'targetDatabase' => 'setTargetDatabase',
            'keyColumns' => 'setKeyColumns',
            'valueColumns' => 'setValueColumns',
            'ttl' => 'setTtl',
            'keySeparator' => 'setKeySeparator',
            'valueSeparator' => 'setValueSeparator',
            'keyPrefix' => 'setKeyPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbcacheMappingId  内存加速映射ID。
    * name  内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。 取值为： hash。
    * targetDatabase  目标数据库。取值范围： [0-999]。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * keySeparator  映射的key分隔符。只允许一个字符。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    * keyPrefix  键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbcacheMappingId' => 'getDbcacheMappingId',
            'name' => 'getName',
            'sourceDbSchema' => 'getSourceDbSchema',
            'sourceDbTable' => 'getSourceDbTable',
            'storageType' => 'getStorageType',
            'targetDatabase' => 'getTargetDatabase',
            'keyColumns' => 'getKeyColumns',
            'valueColumns' => 'getValueColumns',
            'ttl' => 'getTtl',
            'keySeparator' => 'getKeySeparator',
            'valueSeparator' => 'getValueSeparator',
            'keyPrefix' => 'getKeyPrefix'
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
        $this->container['dbcacheMappingId'] = isset($data['dbcacheMappingId']) ? $data['dbcacheMappingId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceDbSchema'] = isset($data['sourceDbSchema']) ? $data['sourceDbSchema'] : null;
        $this->container['sourceDbTable'] = isset($data['sourceDbTable']) ? $data['sourceDbTable'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['targetDatabase'] = isset($data['targetDatabase']) ? $data['targetDatabase'] : null;
        $this->container['keyColumns'] = isset($data['keyColumns']) ? $data['keyColumns'] : null;
        $this->container['valueColumns'] = isset($data['valueColumns']) ? $data['valueColumns'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['keySeparator'] = isset($data['keySeparator']) ? $data['keySeparator'] : null;
        $this->container['valueSeparator'] = isset($data['valueSeparator']) ? $data['valueSeparator'] : null;
        $this->container['keyPrefix'] = isset($data['keyPrefix']) ? $data['keyPrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbcacheMappingId'] === null) {
            $invalidProperties[] = "'dbcacheMappingId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['sourceDbSchema'] === null) {
            $invalidProperties[] = "'sourceDbSchema' can't be null";
        }
        if ($this->container['sourceDbTable'] === null) {
            $invalidProperties[] = "'sourceDbTable' can't be null";
        }
        if ($this->container['storageType'] === null) {
            $invalidProperties[] = "'storageType' can't be null";
        }
        if ($this->container['targetDatabase'] === null) {
            $invalidProperties[] = "'targetDatabase' can't be null";
        }
        if ($this->container['keyColumns'] === null) {
            $invalidProperties[] = "'keyColumns' can't be null";
        }
        if ($this->container['valueColumns'] === null) {
            $invalidProperties[] = "'valueColumns' can't be null";
        }
        if ($this->container['keySeparator'] === null) {
            $invalidProperties[] = "'keySeparator' can't be null";
        }
        if ($this->container['keyPrefix'] === null) {
            $invalidProperties[] = "'keyPrefix' can't be null";
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
    * Gets dbcacheMappingId
    *  内存加速映射ID。
    *
    * @return string
    */
    public function getDbcacheMappingId()
    {
        return $this->container['dbcacheMappingId'];
    }

    /**
    * Sets dbcacheMappingId
    *
    * @param string $dbcacheMappingId 内存加速映射ID。
    *
    * @return $this
    */
    public function setDbcacheMappingId($dbcacheMappingId)
    {
        $this->container['dbcacheMappingId'] = $dbcacheMappingId;
        return $this;
    }

    /**
    * Gets name
    *  内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 内存加速规则名称。不超过256字符，需要确保在当前映射下唯一。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sourceDbSchema
    *  源端数据库。
    *
    * @return string
    */
    public function getSourceDbSchema()
    {
        return $this->container['sourceDbSchema'];
    }

    /**
    * Sets sourceDbSchema
    *
    * @param string $sourceDbSchema 源端数据库。
    *
    * @return $this
    */
    public function setSourceDbSchema($sourceDbSchema)
    {
        $this->container['sourceDbSchema'] = $sourceDbSchema;
        return $this;
    }

    /**
    * Gets sourceDbTable
    *  源端数据表。
    *
    * @return string
    */
    public function getSourceDbTable()
    {
        return $this->container['sourceDbTable'];
    }

    /**
    * Sets sourceDbTable
    *
    * @param string $sourceDbTable 源端数据表。
    *
    * @return $this
    */
    public function setSourceDbTable($sourceDbTable)
    {
        $this->container['sourceDbTable'] = $sourceDbTable;
        return $this;
    }

    /**
    * Gets storageType
    *  目标数据存储类型。 取值为： hash。
    *
    * @return string
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string $storageType 目标数据存储类型。 取值为： hash。
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets targetDatabase
    *  目标数据库。取值范围： [0-999]。
    *
    * @return string
    */
    public function getTargetDatabase()
    {
        return $this->container['targetDatabase'];
    }

    /**
    * Sets targetDatabase
    *
    * @param string $targetDatabase 目标数据库。取值范围： [0-999]。
    *
    * @return $this
    */
    public function setTargetDatabase($targetDatabase)
    {
        $this->container['targetDatabase'] = $targetDatabase;
        return $this;
    }

    /**
    * Gets keyColumns
    *  映射的key使用的column列表。
    *
    * @return string[]
    */
    public function getKeyColumns()
    {
        return $this->container['keyColumns'];
    }

    /**
    * Sets keyColumns
    *
    * @param string[] $keyColumns 映射的key使用的column列表。
    *
    * @return $this
    */
    public function setKeyColumns($keyColumns)
    {
        $this->container['keyColumns'] = $keyColumns;
        return $this;
    }

    /**
    * Gets valueColumns
    *  映射的value使用的column列表。
    *
    * @return string[]
    */
    public function getValueColumns()
    {
        return $this->container['valueColumns'];
    }

    /**
    * Sets valueColumns
    *
    * @param string[] $valueColumns 映射的value使用的column列表。
    *
    * @return $this
    */
    public function setValueColumns($valueColumns)
    {
        $this->container['valueColumns'] = $valueColumns;
        return $this;
    }

    /**
    * Gets ttl
    *  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    *
    * @return string|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param string|null $ttl key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets keySeparator
    *  映射的key分隔符。只允许一个字符。
    *
    * @return string
    */
    public function getKeySeparator()
    {
        return $this->container['keySeparator'];
    }

    /**
    * Sets keySeparator
    *
    * @param string $keySeparator 映射的key分隔符。只允许一个字符。
    *
    * @return $this
    */
    public function setKeySeparator($keySeparator)
    {
        $this->container['keySeparator'] = $keySeparator;
        return $this;
    }

    /**
    * Gets valueSeparator
    *  映射的value分隔符。只允许一个字符。
    *
    * @return string|null
    */
    public function getValueSeparator()
    {
        return $this->container['valueSeparator'];
    }

    /**
    * Sets valueSeparator
    *
    * @param string|null $valueSeparator 映射的value分隔符。只允许一个字符。
    *
    * @return $this
    */
    public function setValueSeparator($valueSeparator)
    {
        $this->container['valueSeparator'] = $valueSeparator;
        return $this;
    }

    /**
    * Gets keyPrefix
    *  键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @return string
    */
    public function getKeyPrefix()
    {
        return $this->container['keyPrefix'];
    }

    /**
    * Sets keyPrefix
    *
    * @param string $keyPrefix 键前缀。最长限制1024字符。需确保key_prefix和target_database在当前映射下唯一。
    *
    * @return $this
    */
    public function setKeyPrefix($keyPrefix)
    {
        $this->container['keyPrefix'] = $keyPrefix;
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

