<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDataLevelTableCompareJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDataLevelTableCompareJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * startTime  对比任务启动时间，时间戳格式，取值为空代表立即启动。
    * compareMode  数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    * compareObject  数据级对比的对象。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * compareObjectWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。
    * compareTaskNum  对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    * compareTransformationInfos  过滤数据信息。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'startTime' => 'string',
            'compareMode' => 'string',
            'compareObject' => '\HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfo[]',
            'options' => 'map[string,string]',
            'compareObjectWithToken' => '\HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfoWithToken[]',
            'compareTaskNum' => 'int',
            'compareTransformationInfos' => '\HuaweiCloud\SDK\Drs\V3\Model\AddDataTransformationReq[]',
            'proportionValue' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * startTime  对比任务启动时间，时间戳格式，取值为空代表立即启动。
    * compareMode  数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    * compareObject  数据级对比的对象。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * compareObjectWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。
    * compareTaskNum  对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    * compareTransformationInfos  过滤数据信息。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'startTime' => null,
        'compareMode' => null,
        'compareObject' => null,
        'options' => null,
        'compareObjectWithToken' => null,
        'compareTaskNum' => 'int32',
        'compareTransformationInfos' => null,
        'proportionValue' => 'double'
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
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * startTime  对比任务启动时间，时间戳格式，取值为空代表立即启动。
    * compareMode  数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    * compareObject  数据级对比的对象。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * compareObjectWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。
    * compareTaskNum  对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    * compareTransformationInfos  过滤数据信息。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'startTime' => 'start_time',
            'compareMode' => 'compare_mode',
            'compareObject' => 'compare_object',
            'options' => 'options',
            'compareObjectWithToken' => 'compare_object_with_token',
            'compareTaskNum' => 'compare_task_num',
            'compareTransformationInfos' => 'compare_transformation_infos',
            'proportionValue' => 'proportion_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * startTime  对比任务启动时间，时间戳格式，取值为空代表立即启动。
    * compareMode  数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    * compareObject  数据级对比的对象。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * compareObjectWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。
    * compareTaskNum  对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    * compareTransformationInfos  过滤数据信息。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'compareMode' => 'setCompareMode',
            'compareObject' => 'setCompareObject',
            'options' => 'setOptions',
            'compareObjectWithToken' => 'setCompareObjectWithToken',
            'compareTaskNum' => 'setCompareTaskNum',
            'compareTransformationInfos' => 'setCompareTransformationInfos',
            'proportionValue' => 'setProportionValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * startTime  对比任务启动时间，时间戳格式，取值为空代表立即启动。
    * compareMode  数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    * compareObject  数据级对比的对象。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * compareObjectWithToken  数据级对比的对象（Cassandra灾备专用，带token信息）。
    * compareTaskNum  对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    * compareTransformationInfos  过滤数据信息。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'compareMode' => 'getCompareMode',
            'compareObject' => 'getCompareObject',
            'options' => 'getOptions',
            'compareObjectWithToken' => 'getCompareObjectWithToken',
            'compareTaskNum' => 'getCompareTaskNum',
            'compareTransformationInfos' => 'getCompareTransformationInfos',
            'proportionValue' => 'getProportionValue'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['compareMode'] = isset($data['compareMode']) ? $data['compareMode'] : null;
        $this->container['compareObject'] = isset($data['compareObject']) ? $data['compareObject'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['compareObjectWithToken'] = isset($data['compareObjectWithToken']) ? $data['compareObjectWithToken'] : null;
        $this->container['compareTaskNum'] = isset($data['compareTaskNum']) ? $data['compareTaskNum'] : null;
        $this->container['compareTransformationInfos'] = isset($data['compareTransformationInfos']) ? $data['compareTransformationInfos'] : null;
        $this->container['proportionValue'] = isset($data['proportionValue']) ? $data['proportionValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets type
    *  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  对比任务启动时间，时间戳格式，取值为空代表立即启动。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 对比任务启动时间，时间戳格式，取值为空代表立即启动。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets compareMode
    *  数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    *
    * @return string|null
    */
    public function getCompareMode()
    {
        return $this->container['compareMode'];
    }

    /**
    * Sets compareMode
    *
    * @param string|null $compareMode 数据级对比模式，取值为空时需要在compare_object或者compare_object_with_token传对象信息，quick_comparison-快速对比。 取值：quick_comparison
    *
    * @return $this
    */
    public function setCompareMode($compareMode)
    {
        $this->container['compareMode'] = $compareMode;
        return $this;
    }

    /**
    * Gets compareObject
    *  数据级对比的对象。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfo[]|null
    */
    public function getCompareObject()
    {
        return $this->container['compareObject'];
    }

    /**
    * Sets compareObject
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfo[]|null $compareObject 数据级对比的对象。
    *
    * @return $this
    */
    public function setCompareObject($compareObject)
    {
        $this->container['compareObject'] = $compareObject;
        return $this;
    }

    /**
    * Gets options
    *  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    *
    * @return map[string,string]|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param map[string,string]|null $options 对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets compareObjectWithToken
    *  数据级对比的对象（Cassandra灾备专用，带token信息）。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfoWithToken[]|null
    */
    public function getCompareObjectWithToken()
    {
        return $this->container['compareObjectWithToken'];
    }

    /**
    * Sets compareObjectWithToken
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CompareObjectInfoWithToken[]|null $compareObjectWithToken 数据级对比的对象（Cassandra灾备专用，带token信息）。
    *
    * @return $this
    */
    public function setCompareObjectWithToken($compareObjectWithToken)
    {
        $this->container['compareObjectWithToken'] = $compareObjectWithToken;
        return $this;
    }

    /**
    * Gets compareTaskNum
    *  对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    *
    * @return int|null
    */
    public function getCompareTaskNum()
    {
        return $this->container['compareTaskNum'];
    }

    /**
    * Sets compareTaskNum
    *
    * @param int|null $compareTaskNum 对比任务线程数量，当前仅cloudDataGuard-cassandra和cloudDataGuard-gausscassandra-to-gausscassandra链路支持。
    *
    * @return $this
    */
    public function setCompareTaskNum($compareTaskNum)
    {
        $this->container['compareTaskNum'] = $compareTaskNum;
        return $this;
    }

    /**
    * Gets compareTransformationInfos
    *  过滤数据信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\AddDataTransformationReq[]|null
    */
    public function getCompareTransformationInfos()
    {
        return $this->container['compareTransformationInfos'];
    }

    /**
    * Sets compareTransformationInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\AddDataTransformationReq[]|null $compareTransformationInfos 过滤数据信息。
    *
    * @return $this
    */
    public function setCompareTransformationInfos($compareTransformationInfos)
    {
        $this->container['compareTransformationInfos'] = $compareTransformationInfos;
        return $this;
    }

    /**
    * Gets proportionValue
    *  抽样比例，对比类型为抽样对比时填写。
    *
    * @return double|null
    */
    public function getProportionValue()
    {
        return $this->container['proportionValue'];
    }

    /**
    * Sets proportionValue
    *
    * @param double|null $proportionValue 抽样比例，对比类型为抽样对比时填写。
    *
    * @return $this
    */
    public function setProportionValue($proportionValue)
    {
        $this->container['proportionValue'] = $proportionValue;
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

