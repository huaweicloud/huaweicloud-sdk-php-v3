<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuertHistorySQLResultsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuertHistorySQLResultsBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastUseTime  上次修改时间，时间戳，毫秒数
    * sqlStatement  历史sql语句
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastUseTime' => 'int',
            'sqlStatement' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastUseTime  上次修改时间，时间戳，毫秒数
    * sqlStatement  历史sql语句
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastUseTime' => 'int64',
        'sqlStatement' => null
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
    * lastUseTime  上次修改时间，时间戳，毫秒数
    * sqlStatement  历史sql语句
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastUseTime' => 'last_use_time',
            'sqlStatement' => 'sql_statement'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastUseTime  上次修改时间，时间戳，毫秒数
    * sqlStatement  历史sql语句
    *
    * @var string[]
    */
    protected static $setters = [
            'lastUseTime' => 'setLastUseTime',
            'sqlStatement' => 'setSqlStatement'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastUseTime  上次修改时间，时间戳，毫秒数
    * sqlStatement  历史sql语句
    *
    * @var string[]
    */
    protected static $getters = [
            'lastUseTime' => 'getLastUseTime',
            'sqlStatement' => 'getSqlStatement'
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
        $this->container['lastUseTime'] = isset($data['lastUseTime']) ? $data['lastUseTime'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
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
    * Gets lastUseTime
    *  上次修改时间，时间戳，毫秒数
    *
    * @return int|null
    */
    public function getLastUseTime()
    {
        return $this->container['lastUseTime'];
    }

    /**
    * Sets lastUseTime
    *
    * @param int|null $lastUseTime 上次修改时间，时间戳，毫秒数
    *
    * @return $this
    */
    public function setLastUseTime($lastUseTime)
    {
        $this->container['lastUseTime'] = $lastUseTime;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  历史sql语句
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement 历史sql语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
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

