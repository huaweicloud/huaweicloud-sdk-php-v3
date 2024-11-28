<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlowLogStatisticsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlowLogStatisticsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
    * offset  索引位置，偏移量。默认为0，表示从第一条数据开始查询。
    * nodeId  节点ID。
    * type  语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
    * database  数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    * startTime  开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    * sort  指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    * order  排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'nodeId' => 'string',
            'type' => 'string',
            'database' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'sort' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
    * offset  索引位置，偏移量。默认为0，表示从第一条数据开始查询。
    * nodeId  节点ID。
    * type  语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
    * database  数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    * startTime  开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    * sort  指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    * order  排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'offset' => null,
        'nodeId' => null,
        'type' => null,
        'database' => null,
        'startTime' => null,
        'endTime' => null,
        'sort' => null,
        'order' => null
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
    * limit  每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
    * offset  索引位置，偏移量。默认为0，表示从第一条数据开始查询。
    * nodeId  节点ID。
    * type  语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
    * database  数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    * startTime  开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    * sort  指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    * order  排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'nodeId' => 'node_id',
            'type' => 'type',
            'database' => 'database',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sort' => 'sort',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
    * offset  索引位置，偏移量。默认为0，表示从第一条数据开始查询。
    * nodeId  节点ID。
    * type  语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
    * database  数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    * startTime  开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    * sort  指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    * order  排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'nodeId' => 'setNodeId',
            'type' => 'setType',
            'database' => 'setDatabase',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sort' => 'setSort',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
    * offset  索引位置，偏移量。默认为0，表示从第一条数据开始查询。
    * nodeId  节点ID。
    * type  语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
    * database  数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    * startTime  开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * endTime  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    * sort  指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    * order  排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'nodeId' => 'getNodeId',
            'type' => 'getType',
            'database' => 'getDatabase',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sort' => 'getSort',
            'order' => 'getOrder'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets limit
    *  每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
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
    * @param int|null $limit 每页多少条记录（查询结果），取值范围是1~100，不填时默认为10。
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
    *  索引位置，偏移量。默认为0，表示从第一条数据开始查询。
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
    * @param int|null $offset 索引位置，偏移量。默认为0，表示从第一条数据开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets type
    *  语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
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
    * @param string|null $type 语句类型，取空值，表示查询所有语句类型。  枚举值:   - INSERT   - UPDATE   - SELECT   - DELETE   - CREATE   - ALL
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名称。数据库名称不支持包含特殊字符 < > & 等的搜索。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets startTime
    *  开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始日期，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。只能查询当前时间前一个月内的慢日志。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets sort
    *  指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 指定排序字段。   - executeTime：表示按照平均执行时间降序排序。   - 字段为空或传入其他值，表示按照执行次数降序排序。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets order
    *  排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序顺序。默认desc。 枚举值：   - desc   - asc
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

