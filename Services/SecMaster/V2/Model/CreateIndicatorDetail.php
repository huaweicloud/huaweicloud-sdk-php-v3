<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIndicatorDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIndicatorDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataSource  dataSource
    * verdict  威胁度
    * confidence  置信度
    * status  状态
    * labels  标签
    * value  值
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * environment  environment
    * defanged  是否失效
    * firstReportTime  首次发生时间
    * lastReportTime  最近发生时间
    * id  指标ID
    * indicatorType  indicatorType
    * name  指标名称
    * dataclassId  数据类ID
    * dataObject  dataObject
    * workspaceId  workspace id
    * projectId  Project id value
    * layoutId  布局ID
    * dataclass  dataclass
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataSource' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailDataSource',
            'verdict' => 'string',
            'confidence' => 'int',
            'status' => 'string',
            'labels' => 'string',
            'value' => 'string',
            'granularMarking' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailEnvironment',
            'defanged' => 'bool',
            'firstReportTime' => 'string',
            'lastReportTime' => 'string',
            'id' => 'string',
            'indicatorType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailIndicatorType',
            'name' => 'string',
            'dataclassId' => 'string',
            'dataObject' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetail',
            'workspaceId' => 'string',
            'projectId' => 'string',
            'layoutId' => 'string',
            'dataclass' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataClassRefPojo',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataSource  dataSource
    * verdict  威胁度
    * confidence  置信度
    * status  状态
    * labels  标签
    * value  值
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * environment  environment
    * defanged  是否失效
    * firstReportTime  首次发生时间
    * lastReportTime  最近发生时间
    * id  指标ID
    * indicatorType  indicatorType
    * name  指标名称
    * dataclassId  数据类ID
    * dataObject  dataObject
    * workspaceId  workspace id
    * projectId  Project id value
    * layoutId  布局ID
    * dataclass  dataclass
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataSource' => null,
        'verdict' => null,
        'confidence' => null,
        'status' => null,
        'labels' => null,
        'value' => null,
        'granularMarking' => null,
        'environment' => null,
        'defanged' => null,
        'firstReportTime' => null,
        'lastReportTime' => null,
        'id' => null,
        'indicatorType' => null,
        'name' => null,
        'dataclassId' => null,
        'dataObject' => null,
        'workspaceId' => null,
        'projectId' => null,
        'layoutId' => null,
        'dataclass' => null,
        'createTime' => null,
        'updateTime' => null
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
    * dataSource  dataSource
    * verdict  威胁度
    * confidence  置信度
    * status  状态
    * labels  标签
    * value  值
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * environment  environment
    * defanged  是否失效
    * firstReportTime  首次发生时间
    * lastReportTime  最近发生时间
    * id  指标ID
    * indicatorType  indicatorType
    * name  指标名称
    * dataclassId  数据类ID
    * dataObject  dataObject
    * workspaceId  workspace id
    * projectId  Project id value
    * layoutId  布局ID
    * dataclass  dataclass
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataSource' => 'data_source',
            'verdict' => 'verdict',
            'confidence' => 'confidence',
            'status' => 'status',
            'labels' => 'labels',
            'value' => 'value',
            'granularMarking' => 'granular_marking',
            'environment' => 'environment',
            'defanged' => 'defanged',
            'firstReportTime' => 'first_report_time',
            'lastReportTime' => 'last_report_time',
            'id' => 'id',
            'indicatorType' => 'indicator_type',
            'name' => 'name',
            'dataclassId' => 'dataclass_id',
            'dataObject' => 'data_object',
            'workspaceId' => 'workspace_id',
            'projectId' => 'project_id',
            'layoutId' => 'layout_id',
            'dataclass' => 'dataclass',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataSource  dataSource
    * verdict  威胁度
    * confidence  置信度
    * status  状态
    * labels  标签
    * value  值
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * environment  environment
    * defanged  是否失效
    * firstReportTime  首次发生时间
    * lastReportTime  最近发生时间
    * id  指标ID
    * indicatorType  indicatorType
    * name  指标名称
    * dataclassId  数据类ID
    * dataObject  dataObject
    * workspaceId  workspace id
    * projectId  Project id value
    * layoutId  布局ID
    * dataclass  dataclass
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $setters = [
            'dataSource' => 'setDataSource',
            'verdict' => 'setVerdict',
            'confidence' => 'setConfidence',
            'status' => 'setStatus',
            'labels' => 'setLabels',
            'value' => 'setValue',
            'granularMarking' => 'setGranularMarking',
            'environment' => 'setEnvironment',
            'defanged' => 'setDefanged',
            'firstReportTime' => 'setFirstReportTime',
            'lastReportTime' => 'setLastReportTime',
            'id' => 'setId',
            'indicatorType' => 'setIndicatorType',
            'name' => 'setName',
            'dataclassId' => 'setDataclassId',
            'dataObject' => 'setDataObject',
            'workspaceId' => 'setWorkspaceId',
            'projectId' => 'setProjectId',
            'layoutId' => 'setLayoutId',
            'dataclass' => 'setDataclass',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataSource  dataSource
    * verdict  威胁度
    * confidence  置信度
    * status  状态
    * labels  标签
    * value  值
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * environment  environment
    * defanged  是否失效
    * firstReportTime  首次发生时间
    * lastReportTime  最近发生时间
    * id  指标ID
    * indicatorType  indicatorType
    * name  指标名称
    * dataclassId  数据类ID
    * dataObject  dataObject
    * workspaceId  workspace id
    * projectId  Project id value
    * layoutId  布局ID
    * dataclass  dataclass
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $getters = [
            'dataSource' => 'getDataSource',
            'verdict' => 'getVerdict',
            'confidence' => 'getConfidence',
            'status' => 'getStatus',
            'labels' => 'getLabels',
            'value' => 'getValue',
            'granularMarking' => 'getGranularMarking',
            'environment' => 'getEnvironment',
            'defanged' => 'getDefanged',
            'firstReportTime' => 'getFirstReportTime',
            'lastReportTime' => 'getLastReportTime',
            'id' => 'getId',
            'indicatorType' => 'getIndicatorType',
            'name' => 'getName',
            'dataclassId' => 'getDataclassId',
            'dataObject' => 'getDataObject',
            'workspaceId' => 'getWorkspaceId',
            'projectId' => 'getProjectId',
            'layoutId' => 'getLayoutId',
            'dataclass' => 'getDataclass',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['verdict'] = isset($data['verdict']) ? $data['verdict'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['granularMarking'] = isset($data['granularMarking']) ? $data['granularMarking'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['defanged'] = isset($data['defanged']) ? $data['defanged'] : null;
        $this->container['firstReportTime'] = isset($data['firstReportTime']) ? $data['firstReportTime'] : null;
        $this->container['lastReportTime'] = isset($data['lastReportTime']) ? $data['lastReportTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['indicatorType'] = isset($data['indicatorType']) ? $data['indicatorType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['dataObject'] = isset($data['dataObject']) ? $data['dataObject'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['dataclass'] = isset($data['dataclass']) ? $data['dataclass'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataSource'] === null) {
            $invalidProperties[] = "'dataSource' can't be null";
        }
        if ($this->container['verdict'] === null) {
            $invalidProperties[] = "'verdict' can't be null";
        }
            if ((mb_strlen($this->container['verdict']) > 64)) {
                $invalidProperties[] = "invalid value for 'verdict', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['verdict']) < 1)) {
                $invalidProperties[] = "invalid value for 'verdict', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 99)) {
                $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 0)) {
                $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 64)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 1)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['granularMarking'] === null) {
            $invalidProperties[] = "'granularMarking' can't be null";
        }
            if ((mb_strlen($this->container['granularMarking']) > 64)) {
                $invalidProperties[] = "invalid value for 'granularMarking', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['granularMarking']) < 1)) {
                $invalidProperties[] = "invalid value for 'granularMarking', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
        }
        if ($this->container['defanged'] === null) {
            $invalidProperties[] = "'defanged' can't be null";
        }
        if ($this->container['firstReportTime'] === null) {
            $invalidProperties[] = "'firstReportTime' can't be null";
        }
            if ((mb_strlen($this->container['firstReportTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'firstReportTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['firstReportTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'firstReportTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastReportTime']) && (mb_strlen($this->container['lastReportTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastReportTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastReportTime']) && (mb_strlen($this->container['lastReportTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastReportTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['indicatorType'] === null) {
            $invalidProperties[] = "'indicatorType' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets dataSource
    *  dataSource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailDataSource
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailDataSource $dataSource dataSource
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets verdict
    *  威胁度
    *
    * @return string
    */
    public function getVerdict()
    {
        return $this->container['verdict'];
    }

    /**
    * Sets verdict
    *
    * @param string $verdict 威胁度
    *
    * @return $this
    */
    public function setVerdict($verdict)
    {
        $this->container['verdict'] = $verdict;
        return $this;
    }

    /**
    * Gets confidence
    *  置信度
    *
    * @return int|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param int|null $confidence 置信度
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets value
    *  值
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets granularMarking
    *  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    *
    * @return string
    */
    public function getGranularMarking()
    {
        return $this->container['granularMarking'];
    }

    /**
    * Sets granularMarking
    *
    * @param string $granularMarking 粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    *
    * @return $this
    */
    public function setGranularMarking($granularMarking)
    {
        $this->container['granularMarking'] = $granularMarking;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailEnvironment
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailEnvironment $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets defanged
    *  是否失效
    *
    * @return bool
    */
    public function getDefanged()
    {
        return $this->container['defanged'];
    }

    /**
    * Sets defanged
    *
    * @param bool $defanged 是否失效
    *
    * @return $this
    */
    public function setDefanged($defanged)
    {
        $this->container['defanged'] = $defanged;
        return $this;
    }

    /**
    * Gets firstReportTime
    *  首次发生时间
    *
    * @return string
    */
    public function getFirstReportTime()
    {
        return $this->container['firstReportTime'];
    }

    /**
    * Sets firstReportTime
    *
    * @param string $firstReportTime 首次发生时间
    *
    * @return $this
    */
    public function setFirstReportTime($firstReportTime)
    {
        $this->container['firstReportTime'] = $firstReportTime;
        return $this;
    }

    /**
    * Gets lastReportTime
    *  最近发生时间
    *
    * @return string|null
    */
    public function getLastReportTime()
    {
        return $this->container['lastReportTime'];
    }

    /**
    * Sets lastReportTime
    *
    * @param string|null $lastReportTime 最近发生时间
    *
    * @return $this
    */
    public function setLastReportTime($lastReportTime)
    {
        $this->container['lastReportTime'] = $lastReportTime;
        return $this;
    }

    /**
    * Gets id
    *  指标ID
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
    * @param string|null $id 指标ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets indicatorType
    *  indicatorType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailIndicatorType
    */
    public function getIndicatorType()
    {
        return $this->container['indicatorType'];
    }

    /**
    * Sets indicatorType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CreateIndicatorDetailIndicatorType $indicatorType indicatorType
    *
    * @return $this
    */
    public function setIndicatorType($indicatorType)
    {
        $this->container['indicatorType'] = $indicatorType;
        return $this;
    }

    /**
    * Gets name
    *  指标名称
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
    * @param string $name 指标名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类ID
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 数据类ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets dataObject
    *  dataObject
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetail|null
    */
    public function getDataObject()
    {
        return $this->container['dataObject'];
    }

    /**
    * Sets dataObject
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetail|null $dataObject dataObject
    *
    * @return $this
    */
    public function setDataObject($dataObject)
    {
        $this->container['dataObject'] = $dataObject;
        return $this;
    }

    /**
    * Gets workspaceId
    *  workspace id
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId workspace id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets projectId
    *  Project id value
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId Project id value
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局ID
    *
    * @return string|null
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string|null $layoutId 布局ID
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
        return $this;
    }

    /**
    * Gets dataclass
    *  dataclass
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataClassRefPojo|null
    */
    public function getDataclass()
    {
        return $this->container['dataclass'];
    }

    /**
    * Sets dataclass
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataClassRefPojo|null $dataclass dataclass
    *
    * @return $this
    */
    public function setDataclass($dataclass)
    {
        $this->container['dataclass'] = $dataclass;
        return $this;
    }

    /**
    * Gets createTime
    *  Create time
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime Create time
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
    *  Update time
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime Update time
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

