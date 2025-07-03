<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ViewBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ViewBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectorName  采集器名称。
    * metricSet  视图对应的指标集的名称。
    * title  图标所需展示的标题。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * groupBy  分组规则。
    * filter  过滤列表模型。
    * fieldItemList  所需展示的字段列表模型。
    * span  span信息。
    * spanField  span字段属性。
    * orderBy  排序规则。
    * latest  是否只展示最近一笔数据。
    * viewType  视图类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectorName' => 'string',
            'metricSet' => 'string',
            'title' => 'string',
            'tableDirection' => 'string',
            'groupBy' => 'string',
            'filter' => 'string',
            'fieldItemList' => '\HuaweiCloud\SDK\Apm\V1\Model\FieldItem[]',
            'span' => 'bool',
            'spanField' => 'string',
            'orderBy' => 'string',
            'latest' => 'bool',
            'viewType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectorName  采集器名称。
    * metricSet  视图对应的指标集的名称。
    * title  图标所需展示的标题。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * groupBy  分组规则。
    * filter  过滤列表模型。
    * fieldItemList  所需展示的字段列表模型。
    * span  span信息。
    * spanField  span字段属性。
    * orderBy  排序规则。
    * latest  是否只展示最近一笔数据。
    * viewType  视图类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectorName' => null,
        'metricSet' => null,
        'title' => null,
        'tableDirection' => null,
        'groupBy' => null,
        'filter' => null,
        'fieldItemList' => null,
        'span' => null,
        'spanField' => null,
        'orderBy' => null,
        'latest' => null,
        'viewType' => null
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
    * collectorName  采集器名称。
    * metricSet  视图对应的指标集的名称。
    * title  图标所需展示的标题。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * groupBy  分组规则。
    * filter  过滤列表模型。
    * fieldItemList  所需展示的字段列表模型。
    * span  span信息。
    * spanField  span字段属性。
    * orderBy  排序规则。
    * latest  是否只展示最近一笔数据。
    * viewType  视图类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectorName' => 'collector_name',
            'metricSet' => 'metric_set',
            'title' => 'title',
            'tableDirection' => 'table_direction',
            'groupBy' => 'group_by',
            'filter' => 'filter',
            'fieldItemList' => 'field_item_list',
            'span' => 'span',
            'spanField' => 'span_field',
            'orderBy' => 'order_by',
            'latest' => 'latest',
            'viewType' => 'view_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectorName  采集器名称。
    * metricSet  视图对应的指标集的名称。
    * title  图标所需展示的标题。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * groupBy  分组规则。
    * filter  过滤列表模型。
    * fieldItemList  所需展示的字段列表模型。
    * span  span信息。
    * spanField  span字段属性。
    * orderBy  排序规则。
    * latest  是否只展示最近一笔数据。
    * viewType  视图类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'collectorName' => 'setCollectorName',
            'metricSet' => 'setMetricSet',
            'title' => 'setTitle',
            'tableDirection' => 'setTableDirection',
            'groupBy' => 'setGroupBy',
            'filter' => 'setFilter',
            'fieldItemList' => 'setFieldItemList',
            'span' => 'setSpan',
            'spanField' => 'setSpanField',
            'orderBy' => 'setOrderBy',
            'latest' => 'setLatest',
            'viewType' => 'setViewType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectorName  采集器名称。
    * metricSet  视图对应的指标集的名称。
    * title  图标所需展示的标题。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * groupBy  分组规则。
    * filter  过滤列表模型。
    * fieldItemList  所需展示的字段列表模型。
    * span  span信息。
    * spanField  span字段属性。
    * orderBy  排序规则。
    * latest  是否只展示最近一笔数据。
    * viewType  视图类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'collectorName' => 'getCollectorName',
            'metricSet' => 'getMetricSet',
            'title' => 'getTitle',
            'tableDirection' => 'getTableDirection',
            'groupBy' => 'getGroupBy',
            'filter' => 'getFilter',
            'fieldItemList' => 'getFieldItemList',
            'span' => 'getSpan',
            'spanField' => 'getSpanField',
            'orderBy' => 'getOrderBy',
            'latest' => 'getLatest',
            'viewType' => 'getViewType'
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
    const TABLE_DIRECTION_H = 'H';
    const TABLE_DIRECTION_V = 'V';
    const VIEW_TYPE_TREND = 'trend';
    const VIEW_TYPE_SUMTABLE = 'sumtable';
    const VIEW_TYPE_RAWTABLE = 'rawtable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTableDirectionAllowableValues()
    {
        return [
            self::TABLE_DIRECTION_H,
            self::TABLE_DIRECTION_V,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewTypeAllowableValues()
    {
        return [
            self::VIEW_TYPE_TREND,
            self::VIEW_TYPE_SUMTABLE,
            self::VIEW_TYPE_RAWTABLE,
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
        $this->container['collectorName'] = isset($data['collectorName']) ? $data['collectorName'] : null;
        $this->container['metricSet'] = isset($data['metricSet']) ? $data['metricSet'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['tableDirection'] = isset($data['tableDirection']) ? $data['tableDirection'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['fieldItemList'] = isset($data['fieldItemList']) ? $data['fieldItemList'] : null;
        $this->container['span'] = isset($data['span']) ? $data['span'] : null;
        $this->container['spanField'] = isset($data['spanField']) ? $data['spanField'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['latest'] = isset($data['latest']) ? $data['latest'] : null;
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTableDirectionAllowableValues();
                if (!is_null($this->container['tableDirection']) && !in_array($this->container['tableDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tableDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getViewTypeAllowableValues();
                if (!is_null($this->container['viewType']) && !in_array($this->container['viewType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'viewType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets collectorName
    *  采集器名称。
    *
    * @return string|null
    */
    public function getCollectorName()
    {
        return $this->container['collectorName'];
    }

    /**
    * Sets collectorName
    *
    * @param string|null $collectorName 采集器名称。
    *
    * @return $this
    */
    public function setCollectorName($collectorName)
    {
        $this->container['collectorName'] = $collectorName;
        return $this;
    }

    /**
    * Gets metricSet
    *  视图对应的指标集的名称。
    *
    * @return string|null
    */
    public function getMetricSet()
    {
        return $this->container['metricSet'];
    }

    /**
    * Sets metricSet
    *
    * @param string|null $metricSet 视图对应的指标集的名称。
    *
    * @return $this
    */
    public function setMetricSet($metricSet)
    {
        $this->container['metricSet'] = $metricSet;
        return $this;
    }

    /**
    * Gets title
    *  图标所需展示的标题。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 图标所需展示的标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets tableDirection
    *  表格的方向，H：默认，表头横向，V：表头纵向。
    *
    * @return string|null
    */
    public function getTableDirection()
    {
        return $this->container['tableDirection'];
    }

    /**
    * Sets tableDirection
    *
    * @param string|null $tableDirection 表格的方向，H：默认，表头横向，V：表头纵向。
    *
    * @return $this
    */
    public function setTableDirection($tableDirection)
    {
        $this->container['tableDirection'] = $tableDirection;
        return $this;
    }

    /**
    * Gets groupBy
    *  分组规则。
    *
    * @return string|null
    */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
    * Sets groupBy
    *
    * @param string|null $groupBy 分组规则。
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
        return $this;
    }

    /**
    * Gets filter
    *  过滤列表模型。
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 过滤列表模型。
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets fieldItemList
    *  所需展示的字段列表模型。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\FieldItem[]|null
    */
    public function getFieldItemList()
    {
        return $this->container['fieldItemList'];
    }

    /**
    * Sets fieldItemList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\FieldItem[]|null $fieldItemList 所需展示的字段列表模型。
    *
    * @return $this
    */
    public function setFieldItemList($fieldItemList)
    {
        $this->container['fieldItemList'] = $fieldItemList;
        return $this;
    }

    /**
    * Gets span
    *  span信息。
    *
    * @return bool|null
    */
    public function getSpan()
    {
        return $this->container['span'];
    }

    /**
    * Sets span
    *
    * @param bool|null $span span信息。
    *
    * @return $this
    */
    public function setSpan($span)
    {
        $this->container['span'] = $span;
        return $this;
    }

    /**
    * Gets spanField
    *  span字段属性。
    *
    * @return string|null
    */
    public function getSpanField()
    {
        return $this->container['spanField'];
    }

    /**
    * Sets spanField
    *
    * @param string|null $spanField span字段属性。
    *
    * @return $this
    */
    public function setSpanField($spanField)
    {
        $this->container['spanField'] = $spanField;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序规则。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序规则。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets latest
    *  是否只展示最近一笔数据。
    *
    * @return bool|null
    */
    public function getLatest()
    {
        return $this->container['latest'];
    }

    /**
    * Sets latest
    *
    * @param bool|null $latest 是否只展示最近一笔数据。
    *
    * @return $this
    */
    public function setLatest($latest)
    {
        $this->container['latest'] = $latest;
        return $this;
    }

    /**
    * Gets viewType
    *  视图类型。
    *
    * @return string|null
    */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
    * Sets viewType
    *
    * @param string|null $viewType 视图类型。
    *
    * @return $this
    */
    public function setViewType($viewType)
    {
        $this->container['viewType'] = $viewType;
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

