<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlLimitObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlLimitObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SQL限流ID。
    * queryId  由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    * queryString  SQL语句的文本形式。
    * maxConcurrency  同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * isEffective  是否生效
    * maxWaiting  最大等待时间，单位为秒。
    * searchPath  为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'queryId' => 'string',
            'queryString' => 'string',
            'maxConcurrency' => 'int',
            'isEffective' => 'bool',
            'maxWaiting' => 'int',
            'searchPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SQL限流ID。
    * queryId  由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    * queryString  SQL语句的文本形式。
    * maxConcurrency  同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * isEffective  是否生效
    * maxWaiting  最大等待时间，单位为秒。
    * searchPath  为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'queryId' => null,
        'queryString' => null,
        'maxConcurrency' => 'int32',
        'isEffective' => null,
        'maxWaiting' => 'int32',
        'searchPath' => null
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
    * id  SQL限流ID。
    * queryId  由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    * queryString  SQL语句的文本形式。
    * maxConcurrency  同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * isEffective  是否生效
    * maxWaiting  最大等待时间，单位为秒。
    * searchPath  为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'queryId' => 'query_id',
            'queryString' => 'query_string',
            'maxConcurrency' => 'max_concurrency',
            'isEffective' => 'is_effective',
            'maxWaiting' => 'max_waiting',
            'searchPath' => 'search_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SQL限流ID。
    * queryId  由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    * queryString  SQL语句的文本形式。
    * maxConcurrency  同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * isEffective  是否生效
    * maxWaiting  最大等待时间，单位为秒。
    * searchPath  为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'queryId' => 'setQueryId',
            'queryString' => 'setQueryString',
            'maxConcurrency' => 'setMaxConcurrency',
            'isEffective' => 'setIsEffective',
            'maxWaiting' => 'setMaxWaiting',
            'searchPath' => 'setSearchPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SQL限流ID。
    * queryId  由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    * queryString  SQL语句的文本形式。
    * maxConcurrency  同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    * isEffective  是否生效
    * maxWaiting  最大等待时间，单位为秒。
    * searchPath  为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'queryId' => 'getQueryId',
            'queryString' => 'getQueryString',
            'maxConcurrency' => 'getMaxConcurrency',
            'isEffective' => 'getIsEffective',
            'maxWaiting' => 'getMaxWaiting',
            'searchPath' => 'getSearchPath'
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
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['isEffective'] = isset($data['isEffective']) ? $data['isEffective'] : null;
        $this->container['maxWaiting'] = isset($data['maxWaiting']) ? $data['maxWaiting'] : null;
        $this->container['searchPath'] = isset($data['searchPath']) ? $data['searchPath'] : null;
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
        if ($this->container['queryId'] === null) {
            $invalidProperties[] = "'queryId' can't be null";
        }
        if ($this->container['queryString'] === null) {
            $invalidProperties[] = "'queryString' can't be null";
        }
        if ($this->container['maxConcurrency'] === null) {
            $invalidProperties[] = "'maxConcurrency' can't be null";
        }
        if ($this->container['isEffective'] === null) {
            $invalidProperties[] = "'isEffective' can't be null";
        }
        if ($this->container['maxWaiting'] === null) {
            $invalidProperties[] = "'maxWaiting' can't be null";
        }
        if ($this->container['searchPath'] === null) {
            $invalidProperties[] = "'searchPath' can't be null";
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
    * Gets queryId
    *  由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    *
    * @return string
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string $queryId 由SQL的语法解析树计算出的内部哈希码，默认为0，取值范围（-9223372036854775808~ 9223372036854775807）。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets queryString
    *  SQL语句的文本形式。
    *
    * @return string
    */
    public function getQueryString()
    {
        return $this->container['queryString'];
    }

    /**
    * Sets queryString
    *
    * @param string $queryString SQL语句的文本形式。
    *
    * @return $this
    */
    public function setQueryString($queryString)
    {
        $this->container['queryString'] = $queryString;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
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
    * @param int $maxConcurrency 同时执行的SQL数量，小于等于0表示不限制，默认为0，取值范围（-1~50000）。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets isEffective
    *  是否生效
    *
    * @return bool
    */
    public function getIsEffective()
    {
        return $this->container['isEffective'];
    }

    /**
    * Sets isEffective
    *
    * @param bool $isEffective 是否生效
    *
    * @return $this
    */
    public function setIsEffective($isEffective)
    {
        $this->container['isEffective'] = $isEffective;
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
    * Gets searchPath
    *  为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @return string
    */
    public function getSearchPath()
    {
        return $this->container['searchPath'];
    }

    /**
    * Sets searchPath
    *
    * @param string $searchPath 为不是模式限定的名称设置模式搜索顺序，默认为public。
    *
    * @return $this
    */
    public function setSearchPath($searchPath)
    {
        $this->container['searchPath'] = $searchPath;
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

