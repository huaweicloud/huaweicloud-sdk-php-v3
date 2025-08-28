<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlLimitRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlLimitRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SQL限流规则ID
    * sqlType  SQL类型
    * pattern  限流规则
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sqlType' => 'string',
            'pattern' => 'string',
            'maxConcurrency' => 'int',
            'maxWaiting' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SQL限流规则ID
    * sqlType  SQL类型
    * pattern  限流规则
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sqlType' => null,
        'pattern' => null,
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
    * id  SQL限流规则ID
    * sqlType  SQL类型
    * pattern  限流规则
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sqlType' => 'sql_type',
            'pattern' => 'pattern',
            'maxConcurrency' => 'max_concurrency',
            'maxWaiting' => 'max_waiting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SQL限流规则ID
    * sqlType  SQL类型
    * pattern  限流规则
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sqlType' => 'setSqlType',
            'pattern' => 'setPattern',
            'maxConcurrency' => 'setMaxConcurrency',
            'maxWaiting' => 'setMaxWaiting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SQL限流规则ID
    * sqlType  SQL类型
    * pattern  限流规则
    * maxConcurrency  最大并发数
    * maxWaiting  最大等待时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sqlType' => 'getSqlType',
            'pattern' => 'getPattern',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['sqlType'] === null) {
            $invalidProperties[] = "'sqlType' can't be null";
        }
        if ($this->container['pattern'] === null) {
            $invalidProperties[] = "'pattern' can't be null";
        }
        if ($this->container['maxConcurrency'] === null) {
            $invalidProperties[] = "'maxConcurrency' can't be null";
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
    *  SQL限流规则ID
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
    * @param string $id SQL限流规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sqlType
    *  SQL类型
    *
    * @return string
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string $sqlType SQL类型
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets pattern
    *  限流规则
    *
    * @return string
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string $pattern 限流规则
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  最大并发数
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
    * @param int $maxConcurrency 最大并发数
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
    *  最大等待时间
    *
    * @return int|null
    */
    public function getMaxWaiting()
    {
        return $this->container['maxWaiting'];
    }

    /**
    * Sets maxWaiting
    *
    * @param int|null $maxWaiting 最大等待时间
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

