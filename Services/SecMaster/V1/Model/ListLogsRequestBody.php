<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * limit  查询返回的原始日志条数，最大值为500
    * offset  查询偏移值
    * pipeId  数据管道ID
    * query  查询语句
    * sort  是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataspaceId' => 'string',
            'from' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'pipeId' => 'string',
            'query' => 'string',
            'sort' => 'string',
            'to' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * limit  查询返回的原始日志条数，最大值为500
    * offset  查询偏移值
    * pipeId  数据管道ID
    * query  查询语句
    * sort  是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataspaceId' => null,
        'from' => 'int64',
        'limit' => null,
        'offset' => null,
        'pipeId' => null,
        'query' => null,
        'sort' => null,
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
    * limit  查询返回的原始日志条数，最大值为500
    * offset  查询偏移值
    * pipeId  数据管道ID
    * query  查询语句
    * sort  是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataspaceId' => 'dataspace_id',
            'from' => 'from',
            'limit' => 'limit',
            'offset' => 'offset',
            'pipeId' => 'pipe_id',
            'query' => 'query',
            'sort' => 'sort',
            'to' => 'to'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * limit  查询返回的原始日志条数，最大值为500
    * offset  查询偏移值
    * pipeId  数据管道ID
    * query  查询语句
    * sort  是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $setters = [
            'dataspaceId' => 'setDataspaceId',
            'from' => 'setFrom',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'pipeId' => 'setPipeId',
            'query' => 'setQuery',
            'sort' => 'setSort',
            'to' => 'setTo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataspaceId  数据空间ID
    * from  查询开始时间点
    * limit  查询返回的原始日志条数，最大值为500
    * offset  查询偏移值
    * pipeId  数据管道ID
    * query  查询语句
    * sort  是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    * to  查询结束时间点
    *
    * @var string[]
    */
    protected static $getters = [
            'dataspaceId' => 'getDataspaceId',
            'from' => 'getFrom',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'pipeId' => 'getPipeId',
            'query' => 'getQuery',
            'sort' => 'getSort',
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
    const SORT_DESC = 'desc';
    const SORT_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_DESC,
            self::SORT_ASC,
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
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
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
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
        if ($this->container['sort'] === null) {
            $invalidProperties[] = "'sort' can't be null";
        }
            $allowedValues = $this->getSortAllowableValues();
                if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets limit
    *  查询返回的原始日志条数，最大值为500
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 查询返回的原始日志条数，最大值为500
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移值
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 查询偏移值
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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
    * Gets sort
    *  是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    *
    * @return string
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string $sort 是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

