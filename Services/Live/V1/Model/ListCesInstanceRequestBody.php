<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCesInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCesInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  命名空间
    * query  查询信息
    * start  查询开始偏移
    * limit  查询限制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'query' => '\HuaweiCloud\SDK\Live\V1\Model\ListCesInstanceRequestBodyQuery[]',
            'start' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  命名空间
    * query  查询信息
    * start  查询开始偏移
    * limit  查询限制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'query' => null,
        'start' => 'int32',
        'limit' => 'int32'
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
    * namespace  命名空间
    * query  查询信息
    * start  查询开始偏移
    * limit  查询限制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'query' => 'query',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  命名空间
    * query  查询信息
    * start  查询开始偏移
    * limit  查询限制
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'query' => 'setQuery',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  命名空间
    * query  查询信息
    * start  查询开始偏移
    * limit  查询限制
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'query' => 'getQuery',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
    const MODEL_NAMESPACE_SYS_LIVE = 'SYS.LIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNamespaceAllowableValues()
    {
        return [
            self::MODEL_NAMESPACE_SYS_LIVE,
        ];
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            $allowedValues = $this->getNamespaceAllowableValues();
                if (!is_null($this->container['namespace']) && !in_array($this->container['namespace'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'namespace', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
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
    * Gets namespace
    *  命名空间
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets query
    *  查询信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\ListCesInstanceRequestBodyQuery[]
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\ListCesInstanceRequestBodyQuery[] $query 查询信息
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets start
    *  查询开始偏移
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 查询开始偏移
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  查询限制
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

