<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetLogBackupReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetLogBackupReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    * limit  指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
    * timeIndex  返回指定时间之前的日志。
    * keyword  基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'level' => 'string',
            'logType' => 'string',
            'limit' => 'int',
            'timeIndex' => 'string',
            'keyword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    * limit  指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
    * timeIndex  返回指定时间之前的日志。
    * keyword  基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'level' => null,
        'logType' => null,
        'limit' => 'int32',
        'timeIndex' => null,
        'keyword' => null
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
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    * limit  指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
    * timeIndex  返回指定时间之前的日志。
    * keyword  基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'level' => 'level',
            'logType' => 'log_type',
            'limit' => 'limit',
            'timeIndex' => 'time_index',
            'keyword' => 'keyword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    * limit  指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
    * timeIndex  返回指定时间之前的日志。
    * keyword  基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'level' => 'setLevel',
            'logType' => 'setLogType',
            'limit' => 'setLimit',
            'timeIndex' => 'setTimeIndex',
            'keyword' => 'setKeyword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    * level  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    * logType  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    * limit  指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
    * timeIndex  返回指定时间之前的日志。
    * keyword  基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'level' => 'getLevel',
            'logType' => 'getLogType',
            'limit' => 'getLimit',
            'timeIndex' => 'getTimeIndex',
            'keyword' => 'getKeyword'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['timeIndex'] = isset($data['timeIndex']) ? $data['timeIndex'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
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
    * Gets instanceName
    *  节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 节点名称。通过[查询集群详情](ShowClusterDetail.xml)获取instances中的name属性。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets level
    *  日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level 日志级别。可查询的日志级别为：INFO，ERROR，DEBUG，WARN。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets logType
    *  日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @return string
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string $logType 日志类型。可查询的日志类型为：deprecation，indexingSlow，searchSlow， instance。
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets limit
    *  指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
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
    * @param int|null $limit 指定返回日志的条数，默认返回100条，最大返回10000条日志，且日志大小不超过1MB。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets timeIndex
    *  返回指定时间之前的日志。
    *
    * @return string|null
    */
    public function getTimeIndex()
    {
        return $this->container['timeIndex'];
    }

    /**
    * Sets timeIndex
    *
    * @param string|null $timeIndex 返回指定时间之前的日志。
    *
    * @return $this
    */
    public function setTimeIndex($timeIndex)
    {
        $this->container['timeIndex'] = $timeIndex;
        return $this;
    }

    /**
    * Gets keyword
    *  基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 基于日志内容字段值需要过滤的关键字，注意搜索到的日志包含关键字。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
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

