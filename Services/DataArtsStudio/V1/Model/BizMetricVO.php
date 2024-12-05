<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BizMetricVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BizMetricVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，更新时必填，创建时为空，ID字符串。
    * name  指标名称。
    * code  指标编码，只读。
    * nameAlias  指标别名。
    * bizType  bizType
    * status  status
    * bizCatalogId  归属的流程架构的ID，ID字符串。
    * bizCatalogPath  归属的流程架构路径，只读。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * dataOrigin  数据来源。
    * unit  计量单位。
    * timeFilters  统计周期(时间限定)。
    * dimensions  统计维度。
    * generalFilters  统计口径和修饰词。
    * intervalType  刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    * applyScenario  应用场景。
    * technicalMetric  关联技术指标，ID字符串。
    * technicalMetricName  关联技术指标名称，只读。
    * technicalMetricType  technicalMetricType
    * measure  度量对象。
    * owner  指标责任人。
    * ownerDepartment  指标管理部门。
    * destination  设置目的。
    * guid  资产同步后的guid，只读。
    * definition  指标定义。
    * expression  计算公式。
    * remark  备注。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * selfDefinedFields  自定义项
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'code' => 'string',
            'nameAlias' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'bizCatalogId' => 'string',
            'bizCatalogPath' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'dataOrigin' => 'string',
            'unit' => 'string',
            'timeFilters' => 'string',
            'dimensions' => 'string',
            'generalFilters' => 'string',
            'intervalType' => 'string',
            'applyScenario' => 'string',
            'technicalMetric' => 'string',
            'technicalMetricName' => 'string',
            'technicalMetricType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'measure' => 'string',
            'owner' => 'string',
            'ownerDepartment' => 'string',
            'destination' => 'string',
            'guid' => 'string',
            'definition' => 'string',
            'expression' => 'string',
            'remark' => 'string',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'bizMetric' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'summaryStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，更新时必填，创建时为空，ID字符串。
    * name  指标名称。
    * code  指标编码，只读。
    * nameAlias  指标别名。
    * bizType  bizType
    * status  status
    * bizCatalogId  归属的流程架构的ID，ID字符串。
    * bizCatalogPath  归属的流程架构路径，只读。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * dataOrigin  数据来源。
    * unit  计量单位。
    * timeFilters  统计周期(时间限定)。
    * dimensions  统计维度。
    * generalFilters  统计口径和修饰词。
    * intervalType  刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    * applyScenario  应用场景。
    * technicalMetric  关联技术指标，ID字符串。
    * technicalMetricName  关联技术指标名称，只读。
    * technicalMetricType  technicalMetricType
    * measure  度量对象。
    * owner  指标责任人。
    * ownerDepartment  指标管理部门。
    * destination  设置目的。
    * guid  资产同步后的guid，只读。
    * definition  指标定义。
    * expression  计算公式。
    * remark  备注。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * selfDefinedFields  自定义项
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'code' => null,
        'nameAlias' => null,
        'bizType' => null,
        'status' => null,
        'bizCatalogId' => null,
        'bizCatalogPath' => null,
        'createBy' => null,
        'updateBy' => null,
        'dataOrigin' => null,
        'unit' => null,
        'timeFilters' => null,
        'dimensions' => null,
        'generalFilters' => null,
        'intervalType' => null,
        'applyScenario' => null,
        'technicalMetric' => null,
        'technicalMetricName' => null,
        'technicalMetricType' => null,
        'measure' => null,
        'owner' => null,
        'ownerDepartment' => null,
        'destination' => null,
        'guid' => null,
        'definition' => null,
        'expression' => null,
        'remark' => null,
        'approvalInfo' => null,
        'newBiz' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'bizMetric' => null,
        'summaryStatus' => null,
        'selfDefinedFields' => null
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
    * id  编码，更新时必填，创建时为空，ID字符串。
    * name  指标名称。
    * code  指标编码，只读。
    * nameAlias  指标别名。
    * bizType  bizType
    * status  status
    * bizCatalogId  归属的流程架构的ID，ID字符串。
    * bizCatalogPath  归属的流程架构路径，只读。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * dataOrigin  数据来源。
    * unit  计量单位。
    * timeFilters  统计周期(时间限定)。
    * dimensions  统计维度。
    * generalFilters  统计口径和修饰词。
    * intervalType  刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    * applyScenario  应用场景。
    * technicalMetric  关联技术指标，ID字符串。
    * technicalMetricName  关联技术指标名称，只读。
    * technicalMetricType  technicalMetricType
    * measure  度量对象。
    * owner  指标责任人。
    * ownerDepartment  指标管理部门。
    * destination  设置目的。
    * guid  资产同步后的guid，只读。
    * definition  指标定义。
    * expression  计算公式。
    * remark  备注。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * selfDefinedFields  自定义项
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'code' => 'code',
            'nameAlias' => 'name_alias',
            'bizType' => 'biz_type',
            'status' => 'status',
            'bizCatalogId' => 'biz_catalog_id',
            'bizCatalogPath' => 'biz_catalog_path',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'dataOrigin' => 'data_origin',
            'unit' => 'unit',
            'timeFilters' => 'time_filters',
            'dimensions' => 'dimensions',
            'generalFilters' => 'general_filters',
            'intervalType' => 'interval_type',
            'applyScenario' => 'apply_scenario',
            'technicalMetric' => 'technical_metric',
            'technicalMetricName' => 'technical_metric_name',
            'technicalMetricType' => 'technical_metric_type',
            'measure' => 'measure',
            'owner' => 'owner',
            'ownerDepartment' => 'owner_department',
            'destination' => 'destination',
            'guid' => 'guid',
            'definition' => 'definition',
            'expression' => 'expression',
            'remark' => 'remark',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'bizMetric' => 'biz_metric',
            'summaryStatus' => 'summary_status',
            'selfDefinedFields' => 'self_defined_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，更新时必填，创建时为空，ID字符串。
    * name  指标名称。
    * code  指标编码，只读。
    * nameAlias  指标别名。
    * bizType  bizType
    * status  status
    * bizCatalogId  归属的流程架构的ID，ID字符串。
    * bizCatalogPath  归属的流程架构路径，只读。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * dataOrigin  数据来源。
    * unit  计量单位。
    * timeFilters  统计周期(时间限定)。
    * dimensions  统计维度。
    * generalFilters  统计口径和修饰词。
    * intervalType  刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    * applyScenario  应用场景。
    * technicalMetric  关联技术指标，ID字符串。
    * technicalMetricName  关联技术指标名称，只读。
    * technicalMetricType  technicalMetricType
    * measure  度量对象。
    * owner  指标责任人。
    * ownerDepartment  指标管理部门。
    * destination  设置目的。
    * guid  资产同步后的guid，只读。
    * definition  指标定义。
    * expression  计算公式。
    * remark  备注。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * selfDefinedFields  自定义项
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'code' => 'setCode',
            'nameAlias' => 'setNameAlias',
            'bizType' => 'setBizType',
            'status' => 'setStatus',
            'bizCatalogId' => 'setBizCatalogId',
            'bizCatalogPath' => 'setBizCatalogPath',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'dataOrigin' => 'setDataOrigin',
            'unit' => 'setUnit',
            'timeFilters' => 'setTimeFilters',
            'dimensions' => 'setDimensions',
            'generalFilters' => 'setGeneralFilters',
            'intervalType' => 'setIntervalType',
            'applyScenario' => 'setApplyScenario',
            'technicalMetric' => 'setTechnicalMetric',
            'technicalMetricName' => 'setTechnicalMetricName',
            'technicalMetricType' => 'setTechnicalMetricType',
            'measure' => 'setMeasure',
            'owner' => 'setOwner',
            'ownerDepartment' => 'setOwnerDepartment',
            'destination' => 'setDestination',
            'guid' => 'setGuid',
            'definition' => 'setDefinition',
            'expression' => 'setExpression',
            'remark' => 'setRemark',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'bizMetric' => 'setBizMetric',
            'summaryStatus' => 'setSummaryStatus',
            'selfDefinedFields' => 'setSelfDefinedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，更新时必填，创建时为空，ID字符串。
    * name  指标名称。
    * code  指标编码，只读。
    * nameAlias  指标别名。
    * bizType  bizType
    * status  status
    * bizCatalogId  归属的流程架构的ID，ID字符串。
    * bizCatalogPath  归属的流程架构路径，只读。
    * createBy  创建人，只读。
    * updateBy  更新人，只读。
    * dataOrigin  数据来源。
    * unit  计量单位。
    * timeFilters  统计周期(时间限定)。
    * dimensions  统计维度。
    * generalFilters  统计口径和修饰词。
    * intervalType  刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    * applyScenario  应用场景。
    * technicalMetric  关联技术指标，ID字符串。
    * technicalMetricName  关联技术指标名称，只读。
    * technicalMetricType  technicalMetricType
    * measure  度量对象。
    * owner  指标责任人。
    * ownerDepartment  指标管理部门。
    * destination  设置目的。
    * guid  资产同步后的guid，只读。
    * definition  指标定义。
    * expression  计算公式。
    * remark  备注。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * selfDefinedFields  自定义项
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'code' => 'getCode',
            'nameAlias' => 'getNameAlias',
            'bizType' => 'getBizType',
            'status' => 'getStatus',
            'bizCatalogId' => 'getBizCatalogId',
            'bizCatalogPath' => 'getBizCatalogPath',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'dataOrigin' => 'getDataOrigin',
            'unit' => 'getUnit',
            'timeFilters' => 'getTimeFilters',
            'dimensions' => 'getDimensions',
            'generalFilters' => 'getGeneralFilters',
            'intervalType' => 'getIntervalType',
            'applyScenario' => 'getApplyScenario',
            'technicalMetric' => 'getTechnicalMetric',
            'technicalMetricName' => 'getTechnicalMetricName',
            'technicalMetricType' => 'getTechnicalMetricType',
            'measure' => 'getMeasure',
            'owner' => 'getOwner',
            'ownerDepartment' => 'getOwnerDepartment',
            'destination' => 'getDestination',
            'guid' => 'getGuid',
            'definition' => 'getDefinition',
            'expression' => 'getExpression',
            'remark' => 'getRemark',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'bizMetric' => 'getBizMetric',
            'summaryStatus' => 'getSummaryStatus',
            'selfDefinedFields' => 'getSelfDefinedFields'
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
    const INTERVAL_TYPE_MINUTE = 'MINUTE';
    const INTERVAL_TYPE_HOUR = 'HOUR';
    const INTERVAL_TYPE_DAY = 'DAY';
    const INTERVAL_TYPE_WEEK = 'WEEK';
    const INTERVAL_TYPE_MONTH = 'MONTH';
    const INTERVAL_TYPE_YEAR = 'YEAR';
    const INTERVAL_TYPE_REAL_TIME = 'REAL_TIME';
    const INTERVAL_TYPE_HALF_HOUR = 'HALF_HOUR';
    const INTERVAL_TYPE_QUART = 'QUART';
    const INTERVAL_TYPE_DOUBLE_WEEK = 'DOUBLE_WEEK';
    const INTERVAL_TYPE_HALF_YEAR = 'HALF_YEAR';
    const INTERVAL_TYPE_HALF_DAY = 'HALF_DAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIntervalTypeAllowableValues()
    {
        return [
            self::INTERVAL_TYPE_MINUTE,
            self::INTERVAL_TYPE_HOUR,
            self::INTERVAL_TYPE_DAY,
            self::INTERVAL_TYPE_WEEK,
            self::INTERVAL_TYPE_MONTH,
            self::INTERVAL_TYPE_YEAR,
            self::INTERVAL_TYPE_REAL_TIME,
            self::INTERVAL_TYPE_HALF_HOUR,
            self::INTERVAL_TYPE_QUART,
            self::INTERVAL_TYPE_DOUBLE_WEEK,
            self::INTERVAL_TYPE_HALF_YEAR,
            self::INTERVAL_TYPE_HALF_DAY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['nameAlias'] = isset($data['nameAlias']) ? $data['nameAlias'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bizCatalogId'] = isset($data['bizCatalogId']) ? $data['bizCatalogId'] : null;
        $this->container['bizCatalogPath'] = isset($data['bizCatalogPath']) ? $data['bizCatalogPath'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['dataOrigin'] = isset($data['dataOrigin']) ? $data['dataOrigin'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['timeFilters'] = isset($data['timeFilters']) ? $data['timeFilters'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['generalFilters'] = isset($data['generalFilters']) ? $data['generalFilters'] : null;
        $this->container['intervalType'] = isset($data['intervalType']) ? $data['intervalType'] : null;
        $this->container['applyScenario'] = isset($data['applyScenario']) ? $data['applyScenario'] : null;
        $this->container['technicalMetric'] = isset($data['technicalMetric']) ? $data['technicalMetric'] : null;
        $this->container['technicalMetricName'] = isset($data['technicalMetricName']) ? $data['technicalMetricName'] : null;
        $this->container['technicalMetricType'] = isset($data['technicalMetricType']) ? $data['technicalMetricType'] : null;
        $this->container['measure'] = isset($data['measure']) ? $data['measure'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerDepartment'] = isset($data['ownerDepartment']) ? $data['ownerDepartment'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['bizMetric'] = isset($data['bizMetric']) ? $data['bizMetric'] : null;
        $this->container['summaryStatus'] = isset($data['summaryStatus']) ? $data['summaryStatus'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 500)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 500.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z\\d_\\(\\)\\-\/（）]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z\\d_\\(\\)\\-\/（）]*$/.";
            }
            if (!is_null($this->container['nameAlias']) && (mb_strlen($this->container['nameAlias']) > 500)) {
                $invalidProperties[] = "invalid value for 'nameAlias', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['nameAlias']) && !preg_match("/^[^\\\\<>]*$/", $this->container['nameAlias'])) {
                $invalidProperties[] = "invalid value for 'nameAlias', must be conform to the pattern /^[^\\\\<>]*$/.";
            }
        if ($this->container['bizCatalogId'] === null) {
            $invalidProperties[] = "'bizCatalogId' can't be null";
        }
            if (!is_null($this->container['dataOrigin']) && (mb_strlen($this->container['dataOrigin']) > 1000)) {
                $invalidProperties[] = "invalid value for 'dataOrigin', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['dataOrigin']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['dataOrigin'])) {
                $invalidProperties[] = "invalid value for 'dataOrigin', must be conform to the pattern /^[^\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 50)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 50.";
            }
        if ($this->container['timeFilters'] === null) {
            $invalidProperties[] = "'timeFilters' can't be null";
        }
            if ((mb_strlen($this->container['timeFilters']) > 500)) {
                $invalidProperties[] = "invalid value for 'timeFilters', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['dimensions']) && (mb_strlen($this->container['dimensions']) > 1000)) {
                $invalidProperties[] = "invalid value for 'dimensions', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['dimensions']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z\\d_\\(\\)\\-\/（）\\,]*$/", $this->container['dimensions'])) {
                $invalidProperties[] = "invalid value for 'dimensions', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z\\d_\\(\\)\\-\/（）\\,]*$/.";
            }
            if (!is_null($this->container['generalFilters']) && (mb_strlen($this->container['generalFilters']) > 1000)) {
                $invalidProperties[] = "invalid value for 'generalFilters', the character length must be smaller than or equal to 1000.";
            }
        if ($this->container['intervalType'] === null) {
            $invalidProperties[] = "'intervalType' can't be null";
        }
            $allowedValues = $this->getIntervalTypeAllowableValues();
                if (!is_null($this->container['intervalType']) && !in_array($this->container['intervalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'intervalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['applyScenario']) && (mb_strlen($this->container['applyScenario']) > 255)) {
                $invalidProperties[] = "invalid value for 'applyScenario', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['measure']) && (mb_strlen($this->container['measure']) > 255)) {
                $invalidProperties[] = "invalid value for 'measure', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
            if ((mb_strlen($this->container['owner']) > 100)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 100.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\.\\s]*$/", $this->container['owner'])) {
                $invalidProperties[] = "invalid value for 'owner', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5][a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\.\\s]*$/.";
            }
        if ($this->container['ownerDepartment'] === null) {
            $invalidProperties[] = "'ownerDepartment' can't be null";
        }
            if ((mb_strlen($this->container['ownerDepartment']) > 600)) {
                $invalidProperties[] = "invalid value for 'ownerDepartment', the character length must be smaller than or equal to 600.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z\\d_\\-\\s]*$/", $this->container['ownerDepartment'])) {
                $invalidProperties[] = "invalid value for 'ownerDepartment', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z\\d_\\-\\s]*$/.";
            }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
            if ((mb_strlen($this->container['destination']) > 1000)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 1000.";
            }
        if ($this->container['definition'] === null) {
            $invalidProperties[] = "'definition' can't be null";
        }
            if ((mb_strlen($this->container['definition']) > 1000)) {
                $invalidProperties[] = "invalid value for 'definition', the character length must be smaller than or equal to 1000.";
            }
        if ($this->container['expression'] === null) {
            $invalidProperties[] = "'expression' can't be null";
        }
            if ((mb_strlen($this->container['expression']) > 1000)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 600)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['remark']) && !preg_match("/^[^\\\\\\\\]*$/", $this->container['remark'])) {
                $invalidProperties[] = "invalid value for 'remark', must be conform to the pattern /^[^\\\\\\\\]*$/.";
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
    * Gets id
    *  编码，更新时必填，创建时为空，ID字符串。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 编码，更新时必填，创建时为空，ID字符串。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  指标名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 指标名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets code
    *  指标编码，只读。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 指标编码，只读。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets nameAlias
    *  指标别名。
    *
    * @return string|null
    */
    public function getNameAlias()
    {
        return $this->container['nameAlias'];
    }

    /**
    * Sets nameAlias
    *
    * @param string|null $nameAlias 指标别名。
    *
    * @return $this
    */
    public function setNameAlias($nameAlias)
    {
        $this->container['nameAlias'] = $nameAlias;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bizCatalogId
    *  归属的流程架构的ID，ID字符串。
    *
    * @return string
    */
    public function getBizCatalogId()
    {
        return $this->container['bizCatalogId'];
    }

    /**
    * Sets bizCatalogId
    *
    * @param string $bizCatalogId 归属的流程架构的ID，ID字符串。
    *
    * @return $this
    */
    public function setBizCatalogId($bizCatalogId)
    {
        $this->container['bizCatalogId'] = $bizCatalogId;
        return $this;
    }

    /**
    * Gets bizCatalogPath
    *  归属的流程架构路径，只读。
    *
    * @return string|null
    */
    public function getBizCatalogPath()
    {
        return $this->container['bizCatalogPath'];
    }

    /**
    * Sets bizCatalogPath
    *
    * @param string|null $bizCatalogPath 归属的流程架构路径，只读。
    *
    * @return $this
    */
    public function setBizCatalogPath($bizCatalogPath)
    {
        $this->container['bizCatalogPath'] = $bizCatalogPath;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人，只读。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人，只读。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人，只读。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人，只读。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets dataOrigin
    *  数据来源。
    *
    * @return string|null
    */
    public function getDataOrigin()
    {
        return $this->container['dataOrigin'];
    }

    /**
    * Sets dataOrigin
    *
    * @param string|null $dataOrigin 数据来源。
    *
    * @return $this
    */
    public function setDataOrigin($dataOrigin)
    {
        $this->container['dataOrigin'] = $dataOrigin;
        return $this;
    }

    /**
    * Gets unit
    *  计量单位。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 计量单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets timeFilters
    *  统计周期(时间限定)。
    *
    * @return string
    */
    public function getTimeFilters()
    {
        return $this->container['timeFilters'];
    }

    /**
    * Sets timeFilters
    *
    * @param string $timeFilters 统计周期(时间限定)。
    *
    * @return $this
    */
    public function setTimeFilters($timeFilters)
    {
        $this->container['timeFilters'] = $timeFilters;
        return $this;
    }

    /**
    * Gets dimensions
    *  统计维度。
    *
    * @return string|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param string|null $dimensions 统计维度。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets generalFilters
    *  统计口径和修饰词。
    *
    * @return string|null
    */
    public function getGeneralFilters()
    {
        return $this->container['generalFilters'];
    }

    /**
    * Sets generalFilters
    *
    * @param string|null $generalFilters 统计口径和修饰词。
    *
    * @return $this
    */
    public function setGeneralFilters($generalFilters)
    {
        $this->container['generalFilters'] = $generalFilters;
        return $this;
    }

    /**
    * Gets intervalType
    *  刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    *
    * @return string
    */
    public function getIntervalType()
    {
        return $this->container['intervalType'];
    }

    /**
    * Sets intervalType
    *
    * @param string $intervalType 刷新频率。 枚举值：   - MINUTE: 每分钟   - HOUR: 每小时   - DAY: 每天   - WEEK: 每周   - MONTH: 每月   - YEAR: 每年   - REAL_TIME: 实时   - HALF_HOUR: 每半小时   - QUART: 每15分钟   - DOUBLE_WEEK: 每两周   - HALF_YEAR: 每半年   - HALF_DAY: 每半天
    *
    * @return $this
    */
    public function setIntervalType($intervalType)
    {
        $this->container['intervalType'] = $intervalType;
        return $this;
    }

    /**
    * Gets applyScenario
    *  应用场景。
    *
    * @return string|null
    */
    public function getApplyScenario()
    {
        return $this->container['applyScenario'];
    }

    /**
    * Sets applyScenario
    *
    * @param string|null $applyScenario 应用场景。
    *
    * @return $this
    */
    public function setApplyScenario($applyScenario)
    {
        $this->container['applyScenario'] = $applyScenario;
        return $this;
    }

    /**
    * Gets technicalMetric
    *  关联技术指标，ID字符串。
    *
    * @return string|null
    */
    public function getTechnicalMetric()
    {
        return $this->container['technicalMetric'];
    }

    /**
    * Sets technicalMetric
    *
    * @param string|null $technicalMetric 关联技术指标，ID字符串。
    *
    * @return $this
    */
    public function setTechnicalMetric($technicalMetric)
    {
        $this->container['technicalMetric'] = $technicalMetric;
        return $this;
    }

    /**
    * Gets technicalMetricName
    *  关联技术指标名称，只读。
    *
    * @return string|null
    */
    public function getTechnicalMetricName()
    {
        return $this->container['technicalMetricName'];
    }

    /**
    * Sets technicalMetricName
    *
    * @param string|null $technicalMetricName 关联技术指标名称，只读。
    *
    * @return $this
    */
    public function setTechnicalMetricName($technicalMetricName)
    {
        $this->container['technicalMetricName'] = $technicalMetricName;
        return $this;
    }

    /**
    * Gets technicalMetricType
    *  technicalMetricType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getTechnicalMetricType()
    {
        return $this->container['technicalMetricType'];
    }

    /**
    * Sets technicalMetricType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $technicalMetricType technicalMetricType
    *
    * @return $this
    */
    public function setTechnicalMetricType($technicalMetricType)
    {
        $this->container['technicalMetricType'] = $technicalMetricType;
        return $this;
    }

    /**
    * Gets measure
    *  度量对象。
    *
    * @return string|null
    */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
    * Sets measure
    *
    * @param string|null $measure 度量对象。
    *
    * @return $this
    */
    public function setMeasure($measure)
    {
        $this->container['measure'] = $measure;
        return $this;
    }

    /**
    * Gets owner
    *  指标责任人。
    *
    * @return string
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string $owner 指标责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets ownerDepartment
    *  指标管理部门。
    *
    * @return string
    */
    public function getOwnerDepartment()
    {
        return $this->container['ownerDepartment'];
    }

    /**
    * Sets ownerDepartment
    *
    * @param string $ownerDepartment 指标管理部门。
    *
    * @return $this
    */
    public function setOwnerDepartment($ownerDepartment)
    {
        $this->container['ownerDepartment'] = $ownerDepartment;
        return $this;
    }

    /**
    * Gets destination
    *  设置目的。
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 设置目的。
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets guid
    *  资产同步后的guid，只读。
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 资产同步后的guid，只读。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets definition
    *  指标定义。
    *
    * @return string
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string $definition 指标定义。
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets expression
    *  计算公式。
    *
    * @return string
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string $expression 计算公式。
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets remark
    *  备注。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets approvalInfo
    *  approvalInfo
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null
    */
    public function getApprovalInfo()
    {
        return $this->container['approvalInfo'];
    }

    /**
    * Sets approvalInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null $approvalInfo approvalInfo
    *
    * @return $this
    */
    public function setApprovalInfo($approvalInfo)
    {
        $this->container['approvalInfo'] = $approvalInfo;
        return $this;
    }

    /**
    * Gets newBiz
    *  newBiz
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null
    */
    public function getNewBiz()
    {
        return $this->container['newBiz'];
    }

    /**
    * Sets newBiz
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null $newBiz newBiz
    *
    * @return $this
    */
    public function setNewBiz($newBiz)
    {
        $this->container['newBiz'] = $newBiz;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets l1
    *  主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL1()
    {
        return $this->container['l1'];
    }

    /**
    * Sets l1
    *
    * @param string|null $l1 主题域分组中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL1($l1)
    {
        $this->container['l1'] = $l1;
        return $this;
    }

    /**
    * Gets l2
    *  主题域中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
    * Sets l2
    *
    * @param string|null $l2 主题域中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;
        return $this;
    }

    /**
    * Gets l3
    *  业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL3()
    {
        return $this->container['l3'];
    }

    /**
    * Sets l3
    *
    * @param string|null $l3 业务对象中文名，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL3($l3)
    {
        $this->container['l3'] = $l3;
        return $this;
    }

    /**
    * Gets bizMetric
    *  bizMetric
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getBizMetric()
    {
        return $this->container['bizMetric'];
    }

    /**
    * Sets bizMetric
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $bizMetric bizMetric
    *
    * @return $this
    */
    public function setBizMetric($bizMetric)
    {
        $this->container['bizMetric'] = $bizMetric;
        return $this;
    }

    /**
    * Gets summaryStatus
    *  summaryStatus
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getSummaryStatus()
    {
        return $this->container['summaryStatus'];
    }

    /**
    * Sets summaryStatus
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $summaryStatus summaryStatus
    *
    * @return $this
    */
    public function setSummaryStatus($summaryStatus)
    {
        $this->container['summaryStatus'] = $summaryStatus;
        return $this;
    }

    /**
    * Gets selfDefinedFields
    *  自定义项
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null
    */
    public function getSelfDefinedFields()
    {
        return $this->container['selfDefinedFields'];
    }

    /**
    * Sets selfDefinedFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null $selfDefinedFields 自定义项
    *
    * @return $this
    */
    public function setSelfDefinedFields($selfDefinedFields)
    {
        $this->container['selfDefinedFields'] = $selfDefinedFields;
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

