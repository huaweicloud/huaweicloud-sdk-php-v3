<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SQLTplCmp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SQLTplCmp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTplDto1  sqlTplDto1
    * sqlTplDto2  sqlTplDto2
    * new  是否为新增数据
    * executeTimeIncrease  是否有执行时间增长
    * lockWaitIncrease  是否有锁等待时间增长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTplDto1' => '\HuaweiCloud\SDK\Das\V3\Model\TplCmp',
            'sqlTplDto2' => '\HuaweiCloud\SDK\Das\V3\Model\TplCmp',
            'new' => 'bool',
            'executeTimeIncrease' => 'bool',
            'lockWaitIncrease' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTplDto1  sqlTplDto1
    * sqlTplDto2  sqlTplDto2
    * new  是否为新增数据
    * executeTimeIncrease  是否有执行时间增长
    * lockWaitIncrease  是否有锁等待时间增长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTplDto1' => null,
        'sqlTplDto2' => null,
        'new' => null,
        'executeTimeIncrease' => null,
        'lockWaitIncrease' => null
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
    * sqlTplDto1  sqlTplDto1
    * sqlTplDto2  sqlTplDto2
    * new  是否为新增数据
    * executeTimeIncrease  是否有执行时间增长
    * lockWaitIncrease  是否有锁等待时间增长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTplDto1' => 'sql_tpl_dto1',
            'sqlTplDto2' => 'sql_tpl_dto2',
            'new' => 'new',
            'executeTimeIncrease' => 'execute_time_increase',
            'lockWaitIncrease' => 'lock_wait_increase'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTplDto1  sqlTplDto1
    * sqlTplDto2  sqlTplDto2
    * new  是否为新增数据
    * executeTimeIncrease  是否有执行时间增长
    * lockWaitIncrease  是否有锁等待时间增长
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTplDto1' => 'setSqlTplDto1',
            'sqlTplDto2' => 'setSqlTplDto2',
            'new' => 'setNew',
            'executeTimeIncrease' => 'setExecuteTimeIncrease',
            'lockWaitIncrease' => 'setLockWaitIncrease'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTplDto1  sqlTplDto1
    * sqlTplDto2  sqlTplDto2
    * new  是否为新增数据
    * executeTimeIncrease  是否有执行时间增长
    * lockWaitIncrease  是否有锁等待时间增长
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTplDto1' => 'getSqlTplDto1',
            'sqlTplDto2' => 'getSqlTplDto2',
            'new' => 'getNew',
            'executeTimeIncrease' => 'getExecuteTimeIncrease',
            'lockWaitIncrease' => 'getLockWaitIncrease'
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
        $this->container['sqlTplDto1'] = isset($data['sqlTplDto1']) ? $data['sqlTplDto1'] : null;
        $this->container['sqlTplDto2'] = isset($data['sqlTplDto2']) ? $data['sqlTplDto2'] : null;
        $this->container['new'] = isset($data['new']) ? $data['new'] : null;
        $this->container['executeTimeIncrease'] = isset($data['executeTimeIncrease']) ? $data['executeTimeIncrease'] : null;
        $this->container['lockWaitIncrease'] = isset($data['lockWaitIncrease']) ? $data['lockWaitIncrease'] : null;
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
    * Gets sqlTplDto1
    *  sqlTplDto1
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TplCmp|null
    */
    public function getSqlTplDto1()
    {
        return $this->container['sqlTplDto1'];
    }

    /**
    * Sets sqlTplDto1
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TplCmp|null $sqlTplDto1 sqlTplDto1
    *
    * @return $this
    */
    public function setSqlTplDto1($sqlTplDto1)
    {
        $this->container['sqlTplDto1'] = $sqlTplDto1;
        return $this;
    }

    /**
    * Gets sqlTplDto2
    *  sqlTplDto2
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TplCmp|null
    */
    public function getSqlTplDto2()
    {
        return $this->container['sqlTplDto2'];
    }

    /**
    * Sets sqlTplDto2
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TplCmp|null $sqlTplDto2 sqlTplDto2
    *
    * @return $this
    */
    public function setSqlTplDto2($sqlTplDto2)
    {
        $this->container['sqlTplDto2'] = $sqlTplDto2;
        return $this;
    }

    /**
    * Gets new
    *  是否为新增数据
    *
    * @return bool|null
    */
    public function getNew()
    {
        return $this->container['new'];
    }

    /**
    * Sets new
    *
    * @param bool|null $new 是否为新增数据
    *
    * @return $this
    */
    public function setNew($new)
    {
        $this->container['new'] = $new;
        return $this;
    }

    /**
    * Gets executeTimeIncrease
    *  是否有执行时间增长
    *
    * @return bool|null
    */
    public function getExecuteTimeIncrease()
    {
        return $this->container['executeTimeIncrease'];
    }

    /**
    * Sets executeTimeIncrease
    *
    * @param bool|null $executeTimeIncrease 是否有执行时间增长
    *
    * @return $this
    */
    public function setExecuteTimeIncrease($executeTimeIncrease)
    {
        $this->container['executeTimeIncrease'] = $executeTimeIncrease;
        return $this;
    }

    /**
    * Gets lockWaitIncrease
    *  是否有锁等待时间增长
    *
    * @return bool|null
    */
    public function getLockWaitIncrease()
    {
        return $this->container['lockWaitIncrease'];
    }

    /**
    * Sets lockWaitIncrease
    *
    * @param bool|null $lockWaitIncrease 是否有锁等待时间增长
    *
    * @return $this
    */
    public function setLockWaitIncrease($lockWaitIncrease)
    {
        $this->container['lockWaitIncrease'] = $lockWaitIncrease;
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

