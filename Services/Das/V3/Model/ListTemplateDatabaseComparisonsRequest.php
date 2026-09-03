<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTemplateDatabaseComparisonsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTemplateDatabaseComparisonsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt1  比较时间段1的开始时间，Unix timestamp，单位：毫秒
    * endAt1  比较时间段1的结束时间，Unix timestamp，单位：毫秒
    * startAt2  比较时间段2的开始时间，Unix timestamp，单位：毫秒
    * endAt2  比较时间段2的结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库列表
    * keyword  关键字
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'startAt1' => 'int',
            'endAt1' => 'int',
            'startAt2' => 'int',
            'endAt2' => 'int',
            'operation' => 'string',
            'dbNameList' => 'string[]',
            'keyword' => 'string',
            'sort' => 'string',
            'asc' => 'bool',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt1  比较时间段1的开始时间，Unix timestamp，单位：毫秒
    * endAt1  比较时间段1的结束时间，Unix timestamp，单位：毫秒
    * startAt2  比较时间段2的开始时间，Unix timestamp，单位：毫秒
    * endAt2  比较时间段2的结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库列表
    * keyword  关键字
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'startAt1' => 'int64',
        'endAt1' => 'int64',
        'startAt2' => 'int64',
        'endAt2' => 'int64',
        'operation' => null,
        'dbNameList' => null,
        'keyword' => null,
        'sort' => null,
        'asc' => null,
        'size' => 'int32'
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
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt1  比较时间段1的开始时间，Unix timestamp，单位：毫秒
    * endAt1  比较时间段1的结束时间，Unix timestamp，单位：毫秒
    * startAt2  比较时间段2的开始时间，Unix timestamp，单位：毫秒
    * endAt2  比较时间段2的结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库列表
    * keyword  关键字
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'startAt1' => 'start_at1',
            'endAt1' => 'end_at1',
            'startAt2' => 'start_at2',
            'endAt2' => 'end_at2',
            'operation' => 'operation',
            'dbNameList' => 'db_name_list',
            'keyword' => 'keyword',
            'sort' => 'sort',
            'asc' => 'asc',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt1  比较时间段1的开始时间，Unix timestamp，单位：毫秒
    * endAt1  比较时间段1的结束时间，Unix timestamp，单位：毫秒
    * startAt2  比较时间段2的开始时间，Unix timestamp，单位：毫秒
    * endAt2  比较时间段2的结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库列表
    * keyword  关键字
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'startAt1' => 'setStartAt1',
            'endAt1' => 'setEndAt1',
            'startAt2' => 'setStartAt2',
            'endAt2' => 'setEndAt2',
            'operation' => 'setOperation',
            'dbNameList' => 'setDbNameList',
            'keyword' => 'setKeyword',
            'sort' => 'setSort',
            'asc' => 'setAsc',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * startAt1  比较时间段1的开始时间，Unix timestamp，单位：毫秒
    * endAt1  比较时间段1的结束时间，Unix timestamp，单位：毫秒
    * startAt2  比较时间段2的开始时间，Unix timestamp，单位：毫秒
    * endAt2  比较时间段2的结束时间，Unix timestamp，单位：毫秒
    * operation  操作类型，可组合，用逗号分隔
    * dbNameList  数据库列表
    * keyword  关键字
    * sort  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    * asc  排序顺序，true（正序）、false（逆序）
    * size  数量，默认30
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'startAt1' => 'getStartAt1',
            'endAt1' => 'getEndAt1',
            'startAt2' => 'getStartAt2',
            'endAt2' => 'getEndAt2',
            'operation' => 'getOperation',
            'dbNameList' => 'getDbNameList',
            'keyword' => 'getKeyword',
            'sort' => 'getSort',
            'asc' => 'getAsc',
            'size' => 'getSize'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['startAt1'] = isset($data['startAt1']) ? $data['startAt1'] : null;
        $this->container['endAt1'] = isset($data['endAt1']) ? $data['endAt1'] : null;
        $this->container['startAt2'] = isset($data['startAt2']) ? $data['startAt2'] : null;
        $this->container['endAt2'] = isset($data['endAt2']) ? $data['endAt2'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['dbNameList'] = isset($data['dbNameList']) ? $data['dbNameList'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['startAt1'] === null) {
            $invalidProperties[] = "'startAt1' can't be null";
        }
        if ($this->container['endAt1'] === null) {
            $invalidProperties[] = "'endAt1' can't be null";
        }
        if ($this->container['startAt2'] === null) {
            $invalidProperties[] = "'startAt2' can't be null";
        }
        if ($this->container['endAt2'] === null) {
            $invalidProperties[] = "'endAt2' can't be null";
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
    * Gets instanceId
    *  实例ID，实例的唯一标识
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，实例的唯一标识
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，实例节点的唯一标识
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets startAt1
    *  比较时间段1的开始时间，Unix timestamp，单位：毫秒
    *
    * @return int
    */
    public function getStartAt1()
    {
        return $this->container['startAt1'];
    }

    /**
    * Sets startAt1
    *
    * @param int $startAt1 比较时间段1的开始时间，Unix timestamp，单位：毫秒
    *
    * @return $this
    */
    public function setStartAt1($startAt1)
    {
        $this->container['startAt1'] = $startAt1;
        return $this;
    }

    /**
    * Gets endAt1
    *  比较时间段1的结束时间，Unix timestamp，单位：毫秒
    *
    * @return int
    */
    public function getEndAt1()
    {
        return $this->container['endAt1'];
    }

    /**
    * Sets endAt1
    *
    * @param int $endAt1 比较时间段1的结束时间，Unix timestamp，单位：毫秒
    *
    * @return $this
    */
    public function setEndAt1($endAt1)
    {
        $this->container['endAt1'] = $endAt1;
        return $this;
    }

    /**
    * Gets startAt2
    *  比较时间段2的开始时间，Unix timestamp，单位：毫秒
    *
    * @return int
    */
    public function getStartAt2()
    {
        return $this->container['startAt2'];
    }

    /**
    * Sets startAt2
    *
    * @param int $startAt2 比较时间段2的开始时间，Unix timestamp，单位：毫秒
    *
    * @return $this
    */
    public function setStartAt2($startAt2)
    {
        $this->container['startAt2'] = $startAt2;
        return $this;
    }

    /**
    * Gets endAt2
    *  比较时间段2的结束时间，Unix timestamp，单位：毫秒
    *
    * @return int
    */
    public function getEndAt2()
    {
        return $this->container['endAt2'];
    }

    /**
    * Sets endAt2
    *
    * @param int $endAt2 比较时间段2的结束时间，Unix timestamp，单位：毫秒
    *
    * @return $this
    */
    public function setEndAt2($endAt2)
    {
        $this->container['endAt2'] = $endAt2;
        return $this;
    }

    /**
    * Gets operation
    *  操作类型，可组合，用逗号分隔
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作类型，可组合，用逗号分隔
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets dbNameList
    *  数据库列表
    *
    * @return string[]|null
    */
    public function getDbNameList()
    {
        return $this->container['dbNameList'];
    }

    /**
    * Sets dbNameList
    *
    * @param string[]|null $dbNameList 数据库列表
    *
    * @return $this
    */
    public function setDbNameList($dbNameList)
    {
        $this->container['dbNameList'] = $dbNameList;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字
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
    * @param string|null $keyword 关键字
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
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
    * @param string|null $sort 排序字段，取值范围：executeNum（执行次数）、totalCost（总耗时）、avgCost（平均耗时）、totalScan（总扫描行数）、avgScan（平均扫描行数）
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets asc
    *  排序顺序，true（正序）、false（逆序）
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc 排序顺序，true（正序）、false（逆序）
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets size
    *  数量，默认30
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 数量，默认30
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

