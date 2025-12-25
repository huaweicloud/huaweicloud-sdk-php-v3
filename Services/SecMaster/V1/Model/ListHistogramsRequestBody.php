<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHistogramsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHistogramsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * pipeId  数据管道ID
    * query  查询语句
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataspaceId' => 'string',
            'from' => 'int',
            'pipeId' => 'string',
            'query' => 'string',
            'to' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * pipeId  数据管道ID
    * query  查询语句
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataspaceId' => null,
        'from' => 'int64',
        'pipeId' => null,
        'query' => null,
        'to' => 'int64'
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
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * pipeId  数据管道ID
    * query  查询语句
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataspaceId' => 'dataspace_id',
            'from' => 'from',
            'pipeId' => 'pipe_id',
            'query' => 'query',
            'to' => 'to'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * pipeId  数据管道ID
    * query  查询语句
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $setters = [
            'dataspaceId' => 'setDataspaceId',
            'from' => 'setFrom',
            'pipeId' => 'setPipeId',
            'query' => 'setQuery',
            'to' => 'setTo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * pipeId  数据管道ID
    * query  查询语句
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $getters = [
            'dataspaceId' => 'getDataspaceId',
            'from' => 'getFrom',
            'pipeId' => 'getPipeId',
            'query' => 'getQuery',
            'to' => 'getTo'
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
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataspaceId'] === null) {
            $invalidProperties[] = "'dataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
            if (($this->container['from'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
        if ($this->container['pipeId'] === null) {
            $invalidProperties[] = "'pipeId' can't be null";
        }
            if ((mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
            if ((mb_strlen($this->container['query']) > 65535)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['query']) < 0)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
            if (($this->container['to'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
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
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets from
    *  查询开始时间点
    *
    * @return int
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int $from 查询开始时间点
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets pipeId
    *  数据管道ID
    *
    * @return string
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string $pipeId 数据管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets query
    *  查询语句
    *
    * @return string
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string $query 查询语句
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets to
    *  查询结束时间点
    *
    * @return int
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int $to 查询结束时间点
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
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

