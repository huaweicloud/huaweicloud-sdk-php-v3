<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSqlLimitRuleReqV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSqlLimitRuleReqV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  数据库名称。
    * id  SQL限流ID。
    * maxConcurrency  同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * maxWaiting  最大等待时间，单位为秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'id' => 'string',
            'maxConcurrency' => 'int',
            'maxWaiting' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  数据库名称。
    * id  SQL限流ID。
    * maxConcurrency  同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * maxWaiting  最大等待时间，单位为秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'id' => null,
        'maxConcurrency' => 'int32',
        'maxWaiting' => 'int32'
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
    * dbName  数据库名称。
    * id  SQL限流ID。
    * maxConcurrency  同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * maxWaiting  最大等待时间，单位为秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'id' => 'id',
            'maxConcurrency' => 'max_concurrency',
            'maxWaiting' => 'max_waiting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  数据库名称。
    * id  SQL限流ID。
    * maxConcurrency  同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * maxWaiting  最大等待时间，单位为秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'id' => 'setId',
            'maxConcurrency' => 'setMaxConcurrency',
            'maxWaiting' => 'setMaxWaiting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  数据库名称。
    * id  SQL限流ID。
    * maxConcurrency  同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * maxWaiting  最大等待时间，单位为秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'id' => 'getId',
            'maxConcurrency' => 'getMaxConcurrency',
            'maxWaiting' => 'getMaxWaiting'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['maxWaiting'] = isset($data['maxWaiting']) ? $data['maxWaiting'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['maxConcurrency'] === null) {
            $invalidProperties[] = "'maxConcurrency' can't be null";
        }
        if ($this->container['maxWaiting'] === null) {
            $invalidProperties[] = "'maxWaiting' can't be null";
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
    *  数据库名称。
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
    * @param string $dbName 数据库名称。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets id
    *  SQL限流ID。
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
    * @param string $id SQL限流ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    *
    * @return int
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int $maxConcurrency 同时执行的sql数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets maxWaiting
    *  最大等待时间，单位为秒。
    *
    * @return int
    */
    public function getMaxWaiting()
    {
        return $this->container['maxWaiting'];
    }

    /**
    * Sets maxWaiting
    *
    * @param int $maxWaiting 最大等待时间，单位为秒。
    *
    * @return $this
    */
    public function setMaxWaiting($maxWaiting)
    {
        $this->container['maxWaiting'] = $maxWaiting;
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

