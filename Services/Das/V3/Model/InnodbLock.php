<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InnodbLock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InnodbLock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockId  锁ID
    * lockTrxId  事务ID
    * lockMode  锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    * lockType  锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    * lockTable  加锁的表
    * lockIndex  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockSpace  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockPage  如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    * lockRec  如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    * lockData  事务锁住的主键值，若是表锁，则该值为null
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockId' => 'string',
            'lockTrxId' => 'string',
            'lockMode' => 'string',
            'lockType' => 'string',
            'lockTable' => 'string',
            'lockIndex' => 'string',
            'lockSpace' => 'string',
            'lockPage' => 'string',
            'lockRec' => 'string',
            'lockData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockId  锁ID
    * lockTrxId  事务ID
    * lockMode  锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    * lockType  锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    * lockTable  加锁的表
    * lockIndex  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockSpace  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockPage  如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    * lockRec  如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    * lockData  事务锁住的主键值，若是表锁，则该值为null
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockId' => null,
        'lockTrxId' => null,
        'lockMode' => null,
        'lockType' => null,
        'lockTable' => null,
        'lockIndex' => null,
        'lockSpace' => null,
        'lockPage' => null,
        'lockRec' => null,
        'lockData' => null
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
    * lockId  锁ID
    * lockTrxId  事务ID
    * lockMode  锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    * lockType  锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    * lockTable  加锁的表
    * lockIndex  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockSpace  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockPage  如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    * lockRec  如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    * lockData  事务锁住的主键值，若是表锁，则该值为null
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockId' => 'lock_id',
            'lockTrxId' => 'lock_trx_id',
            'lockMode' => 'lock_mode',
            'lockType' => 'lock_type',
            'lockTable' => 'lock_table',
            'lockIndex' => 'lock_index',
            'lockSpace' => 'lock_space',
            'lockPage' => 'lock_page',
            'lockRec' => 'lock_rec',
            'lockData' => 'lock_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockId  锁ID
    * lockTrxId  事务ID
    * lockMode  锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    * lockType  锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    * lockTable  加锁的表
    * lockIndex  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockSpace  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockPage  如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    * lockRec  如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    * lockData  事务锁住的主键值，若是表锁，则该值为null
    *
    * @var string[]
    */
    protected static $setters = [
            'lockId' => 'setLockId',
            'lockTrxId' => 'setLockTrxId',
            'lockMode' => 'setLockMode',
            'lockType' => 'setLockType',
            'lockTable' => 'setLockTable',
            'lockIndex' => 'setLockIndex',
            'lockSpace' => 'setLockSpace',
            'lockPage' => 'setLockPage',
            'lockRec' => 'setLockRec',
            'lockData' => 'setLockData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockId  锁ID
    * lockTrxId  事务ID
    * lockMode  锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    * lockType  锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    * lockTable  加锁的表
    * lockIndex  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockSpace  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    * lockPage  如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    * lockRec  如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    * lockData  事务锁住的主键值，若是表锁，则该值为null
    *
    * @var string[]
    */
    protected static $getters = [
            'lockId' => 'getLockId',
            'lockTrxId' => 'getLockTrxId',
            'lockMode' => 'getLockMode',
            'lockType' => 'getLockType',
            'lockTable' => 'getLockTable',
            'lockIndex' => 'getLockIndex',
            'lockSpace' => 'getLockSpace',
            'lockPage' => 'getLockPage',
            'lockRec' => 'getLockRec',
            'lockData' => 'getLockData'
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
        $this->container['lockId'] = isset($data['lockId']) ? $data['lockId'] : null;
        $this->container['lockTrxId'] = isset($data['lockTrxId']) ? $data['lockTrxId'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['lockType'] = isset($data['lockType']) ? $data['lockType'] : null;
        $this->container['lockTable'] = isset($data['lockTable']) ? $data['lockTable'] : null;
        $this->container['lockIndex'] = isset($data['lockIndex']) ? $data['lockIndex'] : null;
        $this->container['lockSpace'] = isset($data['lockSpace']) ? $data['lockSpace'] : null;
        $this->container['lockPage'] = isset($data['lockPage']) ? $data['lockPage'] : null;
        $this->container['lockRec'] = isset($data['lockRec']) ? $data['lockRec'] : null;
        $this->container['lockData'] = isset($data['lockData']) ? $data['lockData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['lockId'] === null) {
            $invalidProperties[] = "'lockId' can't be null";
        }
        if ($this->container['lockTrxId'] === null) {
            $invalidProperties[] = "'lockTrxId' can't be null";
        }
        if ($this->container['lockMode'] === null) {
            $invalidProperties[] = "'lockMode' can't be null";
        }
        if ($this->container['lockType'] === null) {
            $invalidProperties[] = "'lockType' can't be null";
        }
        if ($this->container['lockTable'] === null) {
            $invalidProperties[] = "'lockTable' can't be null";
        }
        if ($this->container['lockIndex'] === null) {
            $invalidProperties[] = "'lockIndex' can't be null";
        }
        if ($this->container['lockSpace'] === null) {
            $invalidProperties[] = "'lockSpace' can't be null";
        }
        if ($this->container['lockPage'] === null) {
            $invalidProperties[] = "'lockPage' can't be null";
        }
        if ($this->container['lockRec'] === null) {
            $invalidProperties[] = "'lockRec' can't be null";
        }
        if ($this->container['lockData'] === null) {
            $invalidProperties[] = "'lockData' can't be null";
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
    * Gets lockId
    *  锁ID
    *
    * @return string
    */
    public function getLockId()
    {
        return $this->container['lockId'];
    }

    /**
    * Sets lockId
    *
    * @param string $lockId 锁ID
    *
    * @return $this
    */
    public function setLockId($lockId)
    {
        $this->container['lockId'] = $lockId;
        return $this;
    }

    /**
    * Gets lockTrxId
    *  事务ID
    *
    * @return string
    */
    public function getLockTrxId()
    {
        return $this->container['lockTrxId'];
    }

    /**
    * Sets lockTrxId
    *
    * @param string $lockTrxId 事务ID
    *
    * @return $this
    */
    public function setLockTrxId($lockTrxId)
    {
        $this->container['lockTrxId'] = $lockTrxId;
        return $this;
    }

    /**
    * Gets lockMode
    *  锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    *
    * @return string
    */
    public function getLockMode()
    {
        return $this->container['lockMode'];
    }

    /**
    * Sets lockMode
    *
    * @param string $lockMode 锁模式，取值为S[,GAP], X[,GAP], IS[,GAP], IX[,GAP], AUTO_INC, and UNKNOWN。
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets lockType
    *  锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    *
    * @return string
    */
    public function getLockType()
    {
        return $this->container['lockType'];
    }

    /**
    * Sets lockType
    *
    * @param string $lockType 锁类型，取值为RECORD或TABLE。RECORD为行锁, TABLE为表锁
    *
    * @return $this
    */
    public function setLockType($lockType)
    {
        $this->container['lockType'] = $lockType;
        return $this;
    }

    /**
    * Gets lockTable
    *  加锁的表
    *
    * @return string
    */
    public function getLockTable()
    {
        return $this->container['lockTable'];
    }

    /**
    * Sets lockTable
    *
    * @param string $lockTable 加锁的表
    *
    * @return $this
    */
    public function setLockTable($lockTable)
    {
        $this->container['lockTable'] = $lockTable;
        return $this;
    }

    /**
    * Gets lockIndex
    *  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    *
    * @return string
    */
    public function getLockIndex()
    {
        return $this->container['lockIndex'];
    }

    /**
    * Sets lockIndex
    *
    * @param string $lockIndex 如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    *
    * @return $this
    */
    public function setLockIndex($lockIndex)
    {
        $this->container['lockIndex'] = $lockIndex;
        return $this;
    }

    /**
    * Gets lockSpace
    *  如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    *
    * @return string
    */
    public function getLockSpace()
    {
        return $this->container['lockSpace'];
    }

    /**
    * Sets lockSpace
    *
    * @param string $lockSpace 如果是lock_type='RECORD' 行级锁 ,为锁住的索引，如果是表锁为null
    *
    * @return $this
    */
    public function setLockSpace($lockSpace)
    {
        $this->container['lockSpace'] = $lockSpace;
        return $this;
    }

    /**
    * Gets lockPage
    *  如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    *
    * @return string
    */
    public function getLockPage()
    {
        return $this->container['lockPage'];
    }

    /**
    * Sets lockPage
    *
    * @param string $lockPage 如果是lock_type='RECORD' 行级锁 ,为锁住的页号，如果是表锁为null
    *
    * @return $this
    */
    public function setLockPage($lockPage)
    {
        $this->container['lockPage'] = $lockPage;
        return $this;
    }

    /**
    * Gets lockRec
    *  如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    *
    * @return string
    */
    public function getLockRec()
    {
        return $this->container['lockRec'];
    }

    /**
    * Sets lockRec
    *
    * @param string $lockRec 如果是lock_type='RECORD' 行级锁 ,为锁住的堆号，如果是表锁为null
    *
    * @return $this
    */
    public function setLockRec($lockRec)
    {
        $this->container['lockRec'] = $lockRec;
        return $this;
    }

    /**
    * Gets lockData
    *  事务锁住的主键值，若是表锁，则该值为null
    *
    * @return string
    */
    public function getLockData()
    {
        return $this->container['lockData'];
    }

    /**
    * Sets lockData
    *
    * @param string $lockData 事务锁住的主键值，若是表锁，则该值为null
    *
    * @return $this
    */
    public function setLockData($lockData)
    {
        $this->container['lockData'] = $lockData;
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

