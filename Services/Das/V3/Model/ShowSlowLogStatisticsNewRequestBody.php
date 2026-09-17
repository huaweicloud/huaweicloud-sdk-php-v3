<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlowLogStatisticsNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlowLogStatisticsNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeIds  节点ID列表
    * statisticsField  统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeIds' => 'string[]',
            'statisticsField' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'sortField' => 'string',
            'sortAsc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeIds  节点ID列表
    * statisticsField  统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeIds' => null,
        'statisticsField' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'sortField' => null,
        'sortAsc' => null
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
    * nodeIds  节点ID列表
    * statisticsField  统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeIds' => 'node_ids',
            'statisticsField' => 'statistics_field',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sortField' => 'sort_field',
            'sortAsc' => 'sort_asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeIds  节点ID列表
    * statisticsField  统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeIds' => 'setNodeIds',
            'statisticsField' => 'setStatisticsField',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sortField' => 'setSortField',
            'sortAsc' => 'setSortAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeIds  节点ID列表
    * statisticsField  统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    * startTime  开始时间（Unix timestamp），单位：毫秒
    * endTime  结束时间（Unix timestamp），单位：毫秒
    * sortField  排序字段
    * sortAsc  排序顺序（true：正序，false：逆序）
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeIds' => 'getNodeIds',
            'statisticsField' => 'getStatisticsField',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sortField' => 'getSortField',
            'sortAsc' => 'getSortAsc'
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
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['statisticsField'] = isset($data['statisticsField']) ? $data['statisticsField'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortAsc'] = isset($data['sortAsc']) ? $data['sortAsc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['statisticsField'] === null) {
            $invalidProperties[] = "'statisticsField' can't be null";
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
    * Gets nodeIds
    *  节点ID列表
    *
    * @return string[]|null
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[]|null $nodeIds 节点ID列表
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
        return $this;
    }

    /**
    * Gets statisticsField
    *  统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    *
    * @return string
    */
    public function getStatisticsField()
    {
        return $this->container['statisticsField'];
    }

    /**
    * Sets statisticsField
    *
    * @param string $statisticsField 统计字段，取值范围：nodeId、sqlType、dbName、collection、user、client
    *
    * @return $this
    */
    public function setStatisticsField($statisticsField)
    {
        $this->container['statisticsField'] = $statisticsField;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（Unix timestamp），单位：毫秒
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间（Unix timestamp），单位：毫秒
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
    *  结束时间（Unix timestamp），单位：毫秒
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortAsc
    *  排序顺序（true：正序，false：逆序）
    *
    * @return bool|null
    */
    public function getSortAsc()
    {
        return $this->container['sortAsc'];
    }

    /**
    * Sets sortAsc
    *
    * @param bool|null $sortAsc 排序顺序（true：正序，false：逆序）
    *
    * @return $this
    */
    public function setSortAsc($sortAsc)
    {
        $this->container['sortAsc'] = $sortAsc;
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

