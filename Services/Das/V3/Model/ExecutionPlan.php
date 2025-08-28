<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionPlan';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * selectType  select子句的类型
    * table  数据库表
    * partitions  查询将匹配记录的分区
    * type  访问类型
    * possibleKeys  可能使用的键(索引)
    * key  实际使用的键(索引)
    * keyLen  决定使用的键的长度
    * ref  使用哪个列或常数与键一起来选择行
    * rows  MySQL认为它执行查询时必须检查的行数
    * filtered  按表条件过滤的表行的估计百分比
    * extra  其他信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'selectType' => 'string',
            'table' => 'string',
            'partitions' => 'string',
            'type' => 'string',
            'possibleKeys' => 'string',
            'key' => 'string',
            'keyLen' => 'string',
            'ref' => 'string',
            'rows' => 'string',
            'filtered' => 'string',
            'extra' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * selectType  select子句的类型
    * table  数据库表
    * partitions  查询将匹配记录的分区
    * type  访问类型
    * possibleKeys  可能使用的键(索引)
    * key  实际使用的键(索引)
    * keyLen  决定使用的键的长度
    * ref  使用哪个列或常数与键一起来选择行
    * rows  MySQL认为它执行查询时必须检查的行数
    * filtered  按表条件过滤的表行的估计百分比
    * extra  其他信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'selectType' => null,
        'table' => null,
        'partitions' => null,
        'type' => null,
        'possibleKeys' => null,
        'key' => null,
        'keyLen' => null,
        'ref' => null,
        'rows' => null,
        'filtered' => null,
        'extra' => null
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
    * id  id
    * selectType  select子句的类型
    * table  数据库表
    * partitions  查询将匹配记录的分区
    * type  访问类型
    * possibleKeys  可能使用的键(索引)
    * key  实际使用的键(索引)
    * keyLen  决定使用的键的长度
    * ref  使用哪个列或常数与键一起来选择行
    * rows  MySQL认为它执行查询时必须检查的行数
    * filtered  按表条件过滤的表行的估计百分比
    * extra  其他信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'selectType' => 'select_type',
            'table' => 'table',
            'partitions' => 'partitions',
            'type' => 'type',
            'possibleKeys' => 'possible_keys',
            'key' => 'key',
            'keyLen' => 'key_len',
            'ref' => 'ref',
            'rows' => 'rows',
            'filtered' => 'filtered',
            'extra' => 'extra'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * selectType  select子句的类型
    * table  数据库表
    * partitions  查询将匹配记录的分区
    * type  访问类型
    * possibleKeys  可能使用的键(索引)
    * key  实际使用的键(索引)
    * keyLen  决定使用的键的长度
    * ref  使用哪个列或常数与键一起来选择行
    * rows  MySQL认为它执行查询时必须检查的行数
    * filtered  按表条件过滤的表行的估计百分比
    * extra  其他信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'selectType' => 'setSelectType',
            'table' => 'setTable',
            'partitions' => 'setPartitions',
            'type' => 'setType',
            'possibleKeys' => 'setPossibleKeys',
            'key' => 'setKey',
            'keyLen' => 'setKeyLen',
            'ref' => 'setRef',
            'rows' => 'setRows',
            'filtered' => 'setFiltered',
            'extra' => 'setExtra'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * selectType  select子句的类型
    * table  数据库表
    * partitions  查询将匹配记录的分区
    * type  访问类型
    * possibleKeys  可能使用的键(索引)
    * key  实际使用的键(索引)
    * keyLen  决定使用的键的长度
    * ref  使用哪个列或常数与键一起来选择行
    * rows  MySQL认为它执行查询时必须检查的行数
    * filtered  按表条件过滤的表行的估计百分比
    * extra  其他信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'selectType' => 'getSelectType',
            'table' => 'getTable',
            'partitions' => 'getPartitions',
            'type' => 'getType',
            'possibleKeys' => 'getPossibleKeys',
            'key' => 'getKey',
            'keyLen' => 'getKeyLen',
            'ref' => 'getRef',
            'rows' => 'getRows',
            'filtered' => 'getFiltered',
            'extra' => 'getExtra'
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
        $this->container['selectType'] = isset($data['selectType']) ? $data['selectType'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['partitions'] = isset($data['partitions']) ? $data['partitions'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['possibleKeys'] = isset($data['possibleKeys']) ? $data['possibleKeys'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['keyLen'] = isset($data['keyLen']) ? $data['keyLen'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['filtered'] = isset($data['filtered']) ? $data['filtered'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
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
        if ($this->container['selectType'] === null) {
            $invalidProperties[] = "'selectType' can't be null";
        }
        if ($this->container['table'] === null) {
            $invalidProperties[] = "'table' can't be null";
        }
        if ($this->container['partitions'] === null) {
            $invalidProperties[] = "'partitions' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['possibleKeys'] === null) {
            $invalidProperties[] = "'possibleKeys' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['keyLen'] === null) {
            $invalidProperties[] = "'keyLen' can't be null";
        }
        if ($this->container['ref'] === null) {
            $invalidProperties[] = "'ref' can't be null";
        }
        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
        }
        if ($this->container['filtered'] === null) {
            $invalidProperties[] = "'filtered' can't be null";
        }
        if ($this->container['extra'] === null) {
            $invalidProperties[] = "'extra' can't be null";
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
    *  id
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
    * @param string $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets selectType
    *  select子句的类型
    *
    * @return string
    */
    public function getSelectType()
    {
        return $this->container['selectType'];
    }

    /**
    * Sets selectType
    *
    * @param string $selectType select子句的类型
    *
    * @return $this
    */
    public function setSelectType($selectType)
    {
        $this->container['selectType'] = $selectType;
        return $this;
    }

    /**
    * Gets table
    *  数据库表
    *
    * @return string
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string $table 数据库表
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets partitions
    *  查询将匹配记录的分区
    *
    * @return string
    */
    public function getPartitions()
    {
        return $this->container['partitions'];
    }

    /**
    * Sets partitions
    *
    * @param string $partitions 查询将匹配记录的分区
    *
    * @return $this
    */
    public function setPartitions($partitions)
    {
        $this->container['partitions'] = $partitions;
        return $this;
    }

    /**
    * Gets type
    *  访问类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 访问类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets possibleKeys
    *  可能使用的键(索引)
    *
    * @return string
    */
    public function getPossibleKeys()
    {
        return $this->container['possibleKeys'];
    }

    /**
    * Sets possibleKeys
    *
    * @param string $possibleKeys 可能使用的键(索引)
    *
    * @return $this
    */
    public function setPossibleKeys($possibleKeys)
    {
        $this->container['possibleKeys'] = $possibleKeys;
        return $this;
    }

    /**
    * Gets key
    *  实际使用的键(索引)
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 实际使用的键(索引)
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets keyLen
    *  决定使用的键的长度
    *
    * @return string
    */
    public function getKeyLen()
    {
        return $this->container['keyLen'];
    }

    /**
    * Sets keyLen
    *
    * @param string $keyLen 决定使用的键的长度
    *
    * @return $this
    */
    public function setKeyLen($keyLen)
    {
        $this->container['keyLen'] = $keyLen;
        return $this;
    }

    /**
    * Gets ref
    *  使用哪个列或常数与键一起来选择行
    *
    * @return string
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string $ref 使用哪个列或常数与键一起来选择行
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets rows
    *  MySQL认为它执行查询时必须检查的行数
    *
    * @return string
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param string $rows MySQL认为它执行查询时必须检查的行数
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
        return $this;
    }

    /**
    * Gets filtered
    *  按表条件过滤的表行的估计百分比
    *
    * @return string
    */
    public function getFiltered()
    {
        return $this->container['filtered'];
    }

    /**
    * Sets filtered
    *
    * @param string $filtered 按表条件过滤的表行的估计百分比
    *
    * @return $this
    */
    public function setFiltered($filtered)
    {
        $this->container['filtered'] = $filtered;
        return $this;
    }

    /**
    * Gets extra
    *  其他信息
    *
    * @return string
    */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
    * Sets extra
    *
    * @param string $extra 其他信息
    *
    * @return $this
    */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;
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

