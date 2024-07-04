<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPortStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPortStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  端口号，精确匹配
    * portString  端口字符串，用来进行模糊匹配
    * type  端口类型
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * sortKey  排序的key值，目前支持按照端口号port排序
    * sortDir  升序还是降序，默认升序，asc
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int',
            'portString' => 'string',
            'type' => 'string',
            'enterpriseProjectId' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  端口号，精确匹配
    * portString  端口字符串，用来进行模糊匹配
    * type  端口类型
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * sortKey  排序的key值，目前支持按照端口号port排序
    * sortDir  升序还是降序，默认升序，asc
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => null,
        'portString' => null,
        'type' => null,
        'enterpriseProjectId' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'category' => null
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
    * port  端口号，精确匹配
    * portString  端口字符串，用来进行模糊匹配
    * type  端口类型
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * sortKey  排序的key值，目前支持按照端口号port排序
    * sortDir  升序还是降序，默认升序，asc
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port',
            'portString' => 'port_string',
            'type' => 'type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  端口号，精确匹配
    * portString  端口字符串，用来进行模糊匹配
    * type  端口类型
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * sortKey  排序的key值，目前支持按照端口号port排序
    * sortDir  升序还是降序，默认升序，asc
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort',
            'portString' => 'setPortString',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  端口号，精确匹配
    * portString  端口字符串，用来进行模糊匹配
    * type  端口类型
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * sortKey  排序的key值，目前支持按照端口号port排序
    * sortDir  升序还是降序，默认升序，asc
    * limit  每页显示数量
    * offset  偏移量：指定返回记录的开始位置
    * category  类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort',
            'portString' => 'getPortString',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'category' => 'getCategory'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['portString'] = isset($data['portString']) ? $data['portString'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['portString']) && (mb_strlen($this->container['portString']) > 256)) {
                $invalidProperties[] = "invalid value for 'portString', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['portString']) && (mb_strlen($this->container['portString']) < 1)) {
                $invalidProperties[] = "invalid value for 'portString', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
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
    * Gets port
    *  端口号，精确匹配
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口号，精确匹配
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets portString
    *  端口字符串，用来进行模糊匹配
    *
    * @return string|null
    */
    public function getPortString()
    {
        return $this->container['portString'];
    }

    /**
    * Sets portString
    *
    * @param string|null $portString 端口字符串，用来进行模糊匹配
    *
    * @return $this
    */
    public function setPortString($portString)
    {
        $this->container['portString'] = $portString;
        return $this;
    }

    /**
    * Gets type
    *  端口类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 端口类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序的key值，目前支持按照端口号port排序
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序的key值，目前支持按照端口号port排序
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  升序还是降序，默认升序，asc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 升序还是降序，默认升序，asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数量
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
    * @param int|null $limit 每页显示数量
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
    *  偏移量：指定返回记录的开始位置
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets category
    *  类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 类别，默认为host，包含如下： - host：主机 - container：容器
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

