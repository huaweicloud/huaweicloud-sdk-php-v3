<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataFilterRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataFilterRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * generalFilteringList  数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    * advancedSettingList  数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    * source  校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    * dataFilterType  数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'generalFilteringList' => '\HuaweiCloud\SDK\Drs\V5\Model\GeneralTransformationReq[]',
            'advancedSettingList' => '\HuaweiCloud\SDK\Drs\V5\Model\DataFilteringAdvancedSetting[]',
            'source' => 'string',
            'dataFilterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * generalFilteringList  数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    * advancedSettingList  数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    * source  校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    * dataFilterType  数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'generalFilteringList' => null,
        'advancedSettingList' => null,
        'source' => null,
        'dataFilterType' => null
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
    * generalFilteringList  数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    * advancedSettingList  数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    * source  校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    * dataFilterType  数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'generalFilteringList' => 'general_filtering_list',
            'advancedSettingList' => 'advanced_setting_list',
            'source' => 'source',
            'dataFilterType' => 'data_filter_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * generalFilteringList  数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    * advancedSettingList  数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    * source  校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    * dataFilterType  数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'generalFilteringList' => 'setGeneralFilteringList',
            'advancedSettingList' => 'setAdvancedSettingList',
            'source' => 'setSource',
            'dataFilterType' => 'setDataFilterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * generalFilteringList  数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    * advancedSettingList  数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    * source  校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    * dataFilterType  数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'generalFilteringList' => 'getGeneralFilteringList',
            'advancedSettingList' => 'getAdvancedSettingList',
            'source' => 'getSource',
            'dataFilterType' => 'getDataFilterType'
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
    const SOURCE_JOB = 'job';
    const SOURCE_COMPARE = 'compare';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_JOB,
            self::SOURCE_COMPARE,
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
        $this->container['generalFilteringList'] = isset($data['generalFilteringList']) ? $data['generalFilteringList'] : null;
        $this->container['advancedSettingList'] = isset($data['advancedSettingList']) ? $data['advancedSettingList'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['dataFilterType'] = isset($data['dataFilterType']) ? $data['dataFilterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSourceAllowableValues();
                if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
    * Gets generalFilteringList
    *  数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\GeneralTransformationReq[]|null
    */
    public function getGeneralFilteringList()
    {
        return $this->container['generalFilteringList'];
    }

    /**
    * Sets generalFilteringList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\GeneralTransformationReq[]|null $generalFilteringList 数据过滤条件列表。包含需要校验的数据过滤规则信息，当data_filter_type为common（简单条件过滤）时，此参数为必填项。列表中的每个元素代表一组过滤条件，包含过滤对象列表和源库过滤条件SQL。包含以下关键字段：filter_object_list（过滤对象列表）/source_filter_condition（源库过滤条件SQL）。适用条件：data_filter_type=common时必填。
    *
    * @return $this
    */
    public function setGeneralFilteringList($generalFilteringList)
    {
        $this->container['generalFilteringList'] = $generalFilteringList;
        return $this;
    }

    /**
    * Gets advancedSettingList
    *  数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataFilteringAdvancedSetting[]|null
    */
    public function getAdvancedSettingList()
    {
        return $this->container['advancedSettingList'];
    }

    /**
    * Sets advancedSettingList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataFilteringAdvancedSetting[]|null $advancedSettingList 数据过滤高级设置列表。用于配置关联表场景下的高级过滤规则，包含数据库名、表名、列名、索引等详细过滤配置。当前Mysql-Mysql、Mysql-TaurusDB、TaurusDB-TaurusDB、TaurusDB-Mysql、Mysql-MariaDB、MariaDB-Mysql、MariaDB-TaurusDBL链路支持此功能。适用条件：data_filter_type=config时必填。
    *
    * @return $this
    */
    public function setAdvancedSettingList($advancedSettingList)
    {
        $this->container['advancedSettingList'] = $advancedSettingList;
        return $this;
    }

    /**
    * Gets source
    *  校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 校验请求的来源场景。用于区分数据过滤规则校验是来自数据同步任务执行场景，还是来自数据对比任务执行场景。 取值：job（数据同步任务执行时的过滤规则校验）/compare（数据对比任务执行时的过滤规则校验）
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets dataFilterType
    *  数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @return string|null
    */
    public function getDataFilterType()
    {
        return $this->container['dataFilterType'];
    }

    /**
    * Sets dataFilterType
    *
    * @param string|null $dataFilterType 数据过滤类型。用于指定数据过滤规则的模式，common表示简单条件过滤（单表过滤条件），config表示关联表过滤（多表关联条件过滤）。 取值：common（简单条件过滤）/config（关联表过滤）。 约束：当简单条件过滤是子查询时，需要先校验关联条件，关联条件校验成功之后，需要保存关联条件。
    *
    * @return $this
    */
    public function setDataFilterType($dataFilterType)
    {
        $this->container['dataFilterType'] = $dataFilterType;
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

