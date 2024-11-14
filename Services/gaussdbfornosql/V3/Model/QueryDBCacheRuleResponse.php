<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDBCacheRuleResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDBCacheRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  内存加速规则ID。
    * name  内存加速规则名称。
    * status  内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。取值为： hash。
    * targetDatabase  目标数据库。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
    * keySeparator  映射的key分隔符。
    * valueSeparator  映射的value分隔符。
    * keyPrefix  键前缀。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
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
    * id  内存加速规则ID。
    * name  内存加速规则名称。
    * status  内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。取值为： hash。
    * targetDatabase  目标数据库。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
    * keySeparator  映射的key分隔符。
    * valueSeparator  映射的value分隔符。
    * keyPrefix  键前缀。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
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
    * id  内存加速规则ID。
    * name  内存加速规则名称。
    * status  内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。取值为： hash。
    * targetDatabase  目标数据库。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
    * keySeparator  映射的key分隔符。
    * valueSeparator  映射的value分隔符。
    * keyPrefix  键前缀。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
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
    * id  内存加速规则ID。
    * name  内存加速规则名称。
    * status  内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。取值为： hash。
    * targetDatabase  目标数据库。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
    * keySeparator  映射的key分隔符。
    * valueSeparator  映射的value分隔符。
    * keyPrefix  键前缀。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
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
    * id  内存加速规则ID。
    * name  内存加速规则名称。
    * status  内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
    * sourceDbSchema  源端数据库。
    * sourceDbTable  源端数据表。
    * storageType  目标数据存储类型。取值为： hash。
    * targetDatabase  目标数据库。
    * keyColumns  映射的key使用的column列表。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
    * keySeparator  映射的key分隔符。
    * valueSeparator  映射的value分隔符。
    * keyPrefix  键前缀。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets id
    *  内存加速规则ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 内存加速规则ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  内存加速规则名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 内存加速规则名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
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
    * @param string|null $status 内存加速规则状态。 - normal,正常;  - createfail, 创建失败;
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sourceDbSchema
    *  源端数据库。
    *
    * @return string|null
    */
    public function getSourceDbSchema()
    {
        return $this->container['sourceDbSchema'];
    }

    /**
    * Sets sourceDbSchema
    *
    * @param string|null $sourceDbSchema 源端数据库。
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
    * @return string|null
    */
    public function getSourceDbTable()
    {
        return $this->container['sourceDbTable'];
    }

    /**
    * Sets sourceDbTable
    *
    * @param string|null $sourceDbTable 源端数据表。
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
    *  目标数据存储类型。取值为： hash。
    *
    * @return string|null
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string|null $storageType 目标数据存储类型。取值为： hash。
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
    *  目标数据库。
    *
    * @return string|null
    */
    public function getTargetDatabase()
    {
        return $this->container['targetDatabase'];
    }

    /**
    * Sets targetDatabase
    *
    * @param string|null $targetDatabase 目标数据库。
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
    * @return string[]|null
    */
    public function getKeyColumns()
    {
        return $this->container['keyColumns'];
    }

    /**
    * Sets keyColumns
    *
    * @param string[]|null $keyColumns 映射的key使用的column列表。
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
    * @return string[]|null
    */
    public function getValueColumns()
    {
        return $this->container['valueColumns'];
    }

    /**
    * Sets valueColumns
    *
    * @param string[]|null $valueColumns 映射的value使用的column列表。
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
    *  key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
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
    * @param string|null $ttl key的生存时间。单位:ms。不传该值，默认取-1，表示永久存储。
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
    *  映射的key分隔符。
    *
    * @return string|null
    */
    public function getKeySeparator()
    {
        return $this->container['keySeparator'];
    }

    /**
    * Sets keySeparator
    *
    * @param string|null $keySeparator 映射的key分隔符。
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
    *  映射的value分隔符。
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
    * @param string|null $valueSeparator 映射的value分隔符。
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
    *  键前缀。
    *
    * @return string|null
    */
    public function getKeyPrefix()
    {
        return $this->container['keyPrefix'];
    }

    /**
    * Sets keyPrefix
    *
    * @param string|null $keyPrefix 键前缀。
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

