<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckSqlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckSqlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  待执行的SQL语句。
    * currentdb  SQL语句执行所在的数据库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'currentdb' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  待执行的SQL语句。
    * currentdb  SQL语句执行所在的数据库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'currentdb' => null
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
    * sql  待执行的SQL语句。
    * currentdb  SQL语句执行所在的数据库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'currentdb' => 'currentdb'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  待执行的SQL语句。
    * currentdb  SQL语句执行所在的数据库。
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'currentdb' => 'setCurrentdb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  待执行的SQL语句。
    * currentdb  SQL语句执行所在的数据库。
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'currentdb' => 'getCurrentdb'
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['currentdb'] = isset($data['currentdb']) ? $data['currentdb'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
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
    * Gets sql
    *  待执行的SQL语句。
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql 待执行的SQL语句。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets currentdb
    *  SQL语句执行所在的数据库。
    *
    * @return string|null
    */
    public function getCurrentdb()
    {
        return $this->container['currentdb'];
    }

    /**
    * Sets currentdb
    *
    * @param string|null $currentdb SQL语句执行所在的数据库。
    *
    * @return $this
    */
    public function setCurrentdb($currentdb)
    {
        $this->container['currentdb'] = $currentdb;
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

