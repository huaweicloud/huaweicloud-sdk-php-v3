<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Explain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Explain';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  select子句的编号
    * selectType  select子句的类型
    * table  SQL优化器选择的表join顺序。
    * type  查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
    * possibleKeys  有助于高效查找行的索引。
    * key  出于最小化查询成本考虑，SQL优化器实际使用的索引
    * keyLen  key列所示索引的长度（字节）
    * ref  在使用key列所示索引查找数据时用到的列或常量
    * rows  key列所示索引的长度（字节）
    * filtered  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    * extra  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'selectType' => 'string',
            'table' => 'string',
            'type' => 'string',
            'possibleKeys' => 'string',
            'key' => 'string',
            'keyLen' => 'string',
            'ref' => 'string',
            'rows' => 'int',
            'filtered' => 'double',
            'extra' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  select子句的编号
    * selectType  select子句的类型
    * table  SQL优化器选择的表join顺序。
    * type  查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
    * possibleKeys  有助于高效查找行的索引。
    * key  出于最小化查询成本考虑，SQL优化器实际使用的索引
    * keyLen  key列所示索引的长度（字节）
    * ref  在使用key列所示索引查找数据时用到的列或常量
    * rows  key列所示索引的长度（字节）
    * filtered  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    * extra  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'selectType' => null,
        'table' => null,
        'type' => null,
        'possibleKeys' => null,
        'key' => null,
        'keyLen' => null,
        'ref' => null,
        'rows' => 'int64',
        'filtered' => 'double',
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
    * id  select子句的编号
    * selectType  select子句的类型
    * table  SQL优化器选择的表join顺序。
    * type  查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
    * possibleKeys  有助于高效查找行的索引。
    * key  出于最小化查询成本考虑，SQL优化器实际使用的索引
    * keyLen  key列所示索引的长度（字节）
    * ref  在使用key列所示索引查找数据时用到的列或常量
    * rows  key列所示索引的长度（字节）
    * filtered  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    * extra  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'selectType' => 'select_type',
            'table' => 'table',
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
    * id  select子句的编号
    * selectType  select子句的类型
    * table  SQL优化器选择的表join顺序。
    * type  查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
    * possibleKeys  有助于高效查找行的索引。
    * key  出于最小化查询成本考虑，SQL优化器实际使用的索引
    * keyLen  key列所示索引的长度（字节）
    * ref  在使用key列所示索引查找数据时用到的列或常量
    * rows  key列所示索引的长度（字节）
    * filtered  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    * extra  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'selectType' => 'setSelectType',
            'table' => 'setTable',
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
    * id  select子句的编号
    * selectType  select子句的类型
    * table  SQL优化器选择的表join顺序。
    * type  查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
    * possibleKeys  有助于高效查找行的索引。
    * key  出于最小化查询成本考虑，SQL优化器实际使用的索引
    * keyLen  key列所示索引的长度（字节）
    * ref  在使用key列所示索引查找数据时用到的列或常量
    * rows  key列所示索引的长度（字节）
    * filtered  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    * extra  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'selectType' => 'getSelectType',
            'table' => 'getTable',
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
    *  select子句的编号
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id select子句的编号
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
    * @return string|null
    */
    public function getSelectType()
    {
        return $this->container['selectType'];
    }

    /**
    * Sets selectType
    *
    * @param string|null $selectType select子句的类型
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
    *  SQL优化器选择的表join顺序。
    *
    * @return string|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string|null $table SQL优化器选择的表join顺序。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets type
    *  查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 查找表中行的访问类型(从好到坏依次为：null>system>const>eq_ref>ref>range>index>all)。
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
    *  有助于高效查找行的索引。
    *
    * @return string|null
    */
    public function getPossibleKeys()
    {
        return $this->container['possibleKeys'];
    }

    /**
    * Sets possibleKeys
    *
    * @param string|null $possibleKeys 有助于高效查找行的索引。
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
    *  出于最小化查询成本考虑，SQL优化器实际使用的索引
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 出于最小化查询成本考虑，SQL优化器实际使用的索引
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
    *  key列所示索引的长度（字节）
    *
    * @return string|null
    */
    public function getKeyLen()
    {
        return $this->container['keyLen'];
    }

    /**
    * Sets keyLen
    *
    * @param string|null $keyLen key列所示索引的长度（字节）
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
    *  在使用key列所示索引查找数据时用到的列或常量
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref 在使用key列所示索引查找数据时用到的列或常量
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
    *  key列所示索引的长度（字节）
    *
    * @return int|null
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int|null $rows key列所示索引的长度（字节）
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
    *  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @return double|null
    */
    public function getFiltered()
    {
        return $this->container['filtered'];
    }

    /**
    * Sets filtered
    *
    * @param double|null $filtered sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
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
    *  sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
    *
    * @return string|null
    */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
    * Sets extra
    *
    * @param string|null $extra sql解析的额外信息：当出现using index时，说明SQL使用覆盖索引，性能较好；而当出现 using filesort、using temporary、using where时，说明查询需要优化。
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

