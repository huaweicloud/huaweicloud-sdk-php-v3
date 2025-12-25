<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTableLogsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTableLogsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * query  检索查询条件, 语法介绍请参考帮助文档。
    * from  毫秒时间戳
    * to  毫秒时间戳
    * limit  每页数量
    * offset  页号
    * scriptParams  脚本参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'query' => 'string',
            'from' => 'int',
            'to' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'scriptParams' => '\HuaweiCloud\SDK\SecMaster\V2\Model\SearchScriptParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * query  检索查询条件, 语法介绍请参考帮助文档。
    * from  毫秒时间戳
    * to  毫秒时间戳
    * limit  每页数量
    * offset  页号
    * scriptParams  脚本参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'query' => null,
        'from' => 'int64',
        'to' => 'int64',
        'limit' => 'int64',
        'offset' => 'int64',
        'scriptParams' => null
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
    * query  检索查询条件, 语法介绍请参考帮助文档。
    * from  毫秒时间戳
    * to  毫秒时间戳
    * limit  每页数量
    * offset  页号
    * scriptParams  脚本参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'query' => 'query',
            'from' => 'from',
            'to' => 'to',
            'limit' => 'limit',
            'offset' => 'offset',
            'scriptParams' => 'script_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * query  检索查询条件, 语法介绍请参考帮助文档。
    * from  毫秒时间戳
    * to  毫秒时间戳
    * limit  每页数量
    * offset  页号
    * scriptParams  脚本参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'query' => 'setQuery',
            'from' => 'setFrom',
            'to' => 'setTo',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'scriptParams' => 'setScriptParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * query  检索查询条件, 语法介绍请参考帮助文档。
    * from  毫秒时间戳
    * to  毫秒时间戳
    * limit  每页数量
    * offset  页号
    * scriptParams  脚本参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'query' => 'getQuery',
            'from' => 'getFrom',
            'to' => 'getTo',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'scriptParams' => 'getScriptParams'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
            if ((mb_strlen($this->container['query']) > 10240)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['query']) < 0)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'from', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'to', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 500)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets query
    *  检索查询条件, 语法介绍请参考帮助文档。
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
    * @param string $query 检索查询条件, 语法介绍请参考帮助文档。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets from
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 毫秒时间戳
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to 毫秒时间戳
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
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
    * @param int $limit 每页数量
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
    *  页号
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 页号
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本参数列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\SearchScriptParam[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\SearchScriptParam[]|null $scriptParams 脚本参数列表
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
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

