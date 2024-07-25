<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndicatorDataObjectDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndicatorDataObjectDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indicatorType  indicatorType
    * value  值，如：ip url domain等
    * updateTime  更新时间
    * createTime  创建时间
    * environment  environment
    * dataSource  dataSource
    * firstReportTime  首次发生时间
    * isDeleted  是否删除
    * lastReportTime  最近发生时间
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * name  名称
    * id  威胁情报ID
    * projectId  项目ID
    * revoked  是否作废
    * status  状态， Open--打开，Closed--关闭, Revoked--作废
    * verdict  威胁度， Black--黑,White--白，Gray--灰
    * workspaceId  工作空间ID
    * confidence  置信度，取值范围是80-100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indicatorType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailIndicatorType',
            'value' => 'string',
            'updateTime' => 'string',
            'createTime' => 'string',
            'environment' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailEnvironment',
            'dataSource' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailDataSource',
            'firstReportTime' => 'string',
            'isDeleted' => 'bool',
            'lastReportTime' => 'string',
            'granularMarking' => 'int',
            'name' => 'string',
            'id' => 'string',
            'projectId' => 'string',
            'revoked' => 'bool',
            'status' => 'string',
            'verdict' => 'string',
            'workspaceId' => 'string',
            'confidence' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indicatorType  indicatorType
    * value  值，如：ip url domain等
    * updateTime  更新时间
    * createTime  创建时间
    * environment  environment
    * dataSource  dataSource
    * firstReportTime  首次发生时间
    * isDeleted  是否删除
    * lastReportTime  最近发生时间
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * name  名称
    * id  威胁情报ID
    * projectId  项目ID
    * revoked  是否作废
    * status  状态， Open--打开，Closed--关闭, Revoked--作废
    * verdict  威胁度， Black--黑,White--白，Gray--灰
    * workspaceId  工作空间ID
    * confidence  置信度，取值范围是80-100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indicatorType' => null,
        'value' => null,
        'updateTime' => null,
        'createTime' => null,
        'environment' => null,
        'dataSource' => null,
        'firstReportTime' => null,
        'isDeleted' => null,
        'lastReportTime' => null,
        'granularMarking' => null,
        'name' => null,
        'id' => null,
        'projectId' => null,
        'revoked' => null,
        'status' => null,
        'verdict' => null,
        'workspaceId' => null,
        'confidence' => null
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
    * indicatorType  indicatorType
    * value  值，如：ip url domain等
    * updateTime  更新时间
    * createTime  创建时间
    * environment  environment
    * dataSource  dataSource
    * firstReportTime  首次发生时间
    * isDeleted  是否删除
    * lastReportTime  最近发生时间
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * name  名称
    * id  威胁情报ID
    * projectId  项目ID
    * revoked  是否作废
    * status  状态， Open--打开，Closed--关闭, Revoked--作废
    * verdict  威胁度， Black--黑,White--白，Gray--灰
    * workspaceId  工作空间ID
    * confidence  置信度，取值范围是80-100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indicatorType' => 'indicator_type',
            'value' => 'value',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'environment' => 'environment',
            'dataSource' => 'data_source',
            'firstReportTime' => 'first_report_time',
            'isDeleted' => 'is_deleted',
            'lastReportTime' => 'last_report_time',
            'granularMarking' => 'granular_marking',
            'name' => 'name',
            'id' => 'id',
            'projectId' => 'project_id',
            'revoked' => 'revoked',
            'status' => 'status',
            'verdict' => 'verdict',
            'workspaceId' => 'workspace_id',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indicatorType  indicatorType
    * value  值，如：ip url domain等
    * updateTime  更新时间
    * createTime  创建时间
    * environment  environment
    * dataSource  dataSource
    * firstReportTime  首次发生时间
    * isDeleted  是否删除
    * lastReportTime  最近发生时间
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * name  名称
    * id  威胁情报ID
    * projectId  项目ID
    * revoked  是否作废
    * status  状态， Open--打开，Closed--关闭, Revoked--作废
    * verdict  威胁度， Black--黑,White--白，Gray--灰
    * workspaceId  工作空间ID
    * confidence  置信度，取值范围是80-100
    *
    * @var string[]
    */
    protected static $setters = [
            'indicatorType' => 'setIndicatorType',
            'value' => 'setValue',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'environment' => 'setEnvironment',
            'dataSource' => 'setDataSource',
            'firstReportTime' => 'setFirstReportTime',
            'isDeleted' => 'setIsDeleted',
            'lastReportTime' => 'setLastReportTime',
            'granularMarking' => 'setGranularMarking',
            'name' => 'setName',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'revoked' => 'setRevoked',
            'status' => 'setStatus',
            'verdict' => 'setVerdict',
            'workspaceId' => 'setWorkspaceId',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indicatorType  indicatorType
    * value  值，如：ip url domain等
    * updateTime  更新时间
    * createTime  创建时间
    * environment  environment
    * dataSource  dataSource
    * firstReportTime  首次发生时间
    * isDeleted  是否删除
    * lastReportTime  最近发生时间
    * granularMarking  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    * name  名称
    * id  威胁情报ID
    * projectId  项目ID
    * revoked  是否作废
    * status  状态， Open--打开，Closed--关闭, Revoked--作废
    * verdict  威胁度， Black--黑,White--白，Gray--灰
    * workspaceId  工作空间ID
    * confidence  置信度，取值范围是80-100
    *
    * @var string[]
    */
    protected static $getters = [
            'indicatorType' => 'getIndicatorType',
            'value' => 'getValue',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'environment' => 'getEnvironment',
            'dataSource' => 'getDataSource',
            'firstReportTime' => 'getFirstReportTime',
            'isDeleted' => 'getIsDeleted',
            'lastReportTime' => 'getLastReportTime',
            'granularMarking' => 'getGranularMarking',
            'name' => 'getName',
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'revoked' => 'getRevoked',
            'status' => 'getStatus',
            'verdict' => 'getVerdict',
            'workspaceId' => 'getWorkspaceId',
            'confidence' => 'getConfidence'
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
        $this->container['indicatorType'] = isset($data['indicatorType']) ? $data['indicatorType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['firstReportTime'] = isset($data['firstReportTime']) ? $data['firstReportTime'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['lastReportTime'] = isset($data['lastReportTime']) ? $data['lastReportTime'] : null;
        $this->container['granularMarking'] = isset($data['granularMarking']) ? $data['granularMarking'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['revoked'] = isset($data['revoked']) ? $data['revoked'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['verdict'] = isset($data['verdict']) ? $data['verdict'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 256)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstReportTime']) && (mb_strlen($this->container['firstReportTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'firstReportTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['firstReportTime']) && (mb_strlen($this->container['firstReportTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'firstReportTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastReportTime']) && (mb_strlen($this->container['lastReportTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastReportTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastReportTime']) && (mb_strlen($this->container['lastReportTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastReportTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['granularMarking']) && ($this->container['granularMarking'] > 4)) {
                $invalidProperties[] = "invalid value for 'granularMarking', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['granularMarking']) && ($this->container['granularMarking'] < 1)) {
                $invalidProperties[] = "invalid value for 'granularMarking', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verdict']) && (mb_strlen($this->container['verdict']) > 64)) {
                $invalidProperties[] = "invalid value for 'verdict', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['verdict']) && (mb_strlen($this->container['verdict']) < 1)) {
                $invalidProperties[] = "invalid value for 'verdict', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] > 100)) {
                $invalidProperties[] = "invalid value for 'confidence', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['confidence']) && ($this->container['confidence'] < 80)) {
                $invalidProperties[] = "invalid value for 'confidence', must be bigger than or equal to 80.";
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
    * Gets indicatorType
    *  indicatorType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailIndicatorType|null
    */
    public function getIndicatorType()
    {
        return $this->container['indicatorType'];
    }

    /**
    * Sets indicatorType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailIndicatorType|null $indicatorType indicatorType
    *
    * @return $this
    */
    public function setIndicatorType($indicatorType)
    {
        $this->container['indicatorType'] = $indicatorType;
        return $this;
    }

    /**
    * Gets value
    *  值，如：ip url domain等
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值，如：ip url domain等
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets environment
    *  environment
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailEnvironment|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailEnvironment|null $environment environment
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets dataSource
    *  dataSource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailDataSource|null
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IndicatorDataObjectDetailDataSource|null $dataSource dataSource
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets firstReportTime
    *  首次发生时间
    *
    * @return string|null
    */
    public function getFirstReportTime()
    {
        return $this->container['firstReportTime'];
    }

    /**
    * Sets firstReportTime
    *
    * @param string|null $firstReportTime 首次发生时间
    *
    * @return $this
    */
    public function setFirstReportTime($firstReportTime)
    {
        $this->container['firstReportTime'] = $firstReportTime;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否删除
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 是否删除
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
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
    * Gets granularMarking
    *  粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    *
    * @return int|null
    */
    public function getGranularMarking()
    {
        return $this->container['granularMarking'];
    }

    /**
    * Sets granularMarking
    *
    * @param int|null $granularMarking 粒度（保密等级），由高到低：1（首次发现）、2（自产数据）、3（需购买）、4（外网直接查询）
    *
    * @return $this
    */
    public function setGranularMarking($granularMarking)
    {
        $this->container['granularMarking'] = $granularMarking;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  威胁情报ID
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
    * @param string|null $id 威胁情报ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets revoked
    *  是否作废
    *
    * @return bool|null
    */
    public function getRevoked()
    {
        return $this->container['revoked'];
    }

    /**
    * Sets revoked
    *
    * @param bool|null $revoked 是否作废
    *
    * @return $this
    */
    public function setRevoked($revoked)
    {
        $this->container['revoked'] = $revoked;
        return $this;
    }

    /**
    * Gets status
    *  状态， Open--打开，Closed--关闭, Revoked--作废
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
    * @param string|null $status 状态， Open--打开，Closed--关闭, Revoked--作废
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets verdict
    *  威胁度， Black--黑,White--白，Gray--灰
    *
    * @return string|null
    */
    public function getVerdict()
    {
        return $this->container['verdict'];
    }

    /**
    * Sets verdict
    *
    * @param string|null $verdict 威胁度， Black--黑,White--白，Gray--灰
    *
    * @return $this
    */
    public function setVerdict($verdict)
    {
        $this->container['verdict'] = $verdict;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets confidence
    *  置信度，取值范围是80-100
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
    * @param int|null $confidence 置信度，取值范围是80-100
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

