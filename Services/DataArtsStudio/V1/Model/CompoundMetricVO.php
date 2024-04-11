<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompoundMetricVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompoundMetricVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * metricIds  指标信息。
    * metricNames  指标名称信息。
    * calFnIds  引用函数ID。
    * calExp  计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dataType  字段类型。
    * createBy  创建人。
    * updateBy  更新人。
    * status  status
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * monitor  monitor
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'dimensionGroup' => 'string',
            'groupName' => 'string',
            'groupCode' => 'string',
            'metricIds' => 'int[]',
            'metricNames' => 'string[]',
            'calFnIds' => 'int[]',
            'calExp' => 'string',
            'l1Id' => 'int',
            'l2Id' => 'string',
            'l3Id' => 'int',
            'dataType' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'monitor' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetricMonitorVO',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'summaryTableId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * metricIds  指标信息。
    * metricNames  指标名称信息。
    * calFnIds  引用函数ID。
    * calExp  计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dataType  字段类型。
    * createBy  创建人。
    * updateBy  更新人。
    * status  status
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * monitor  monitor
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'nameEn' => null,
        'nameCh' => null,
        'description' => null,
        'dimensionGroup' => null,
        'groupName' => null,
        'groupCode' => null,
        'metricIds' => 'int64',
        'metricNames' => null,
        'calFnIds' => 'int64',
        'calExp' => null,
        'l1Id' => 'int64',
        'l2Id' => null,
        'l3Id' => 'int64',
        'dataType' => null,
        'createBy' => null,
        'updateBy' => null,
        'status' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'approvalInfo' => null,
        'newBiz' => null,
        'monitor' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'summaryTableId' => 'int64'
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
    * id  编码。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * metricIds  指标信息。
    * metricNames  指标名称信息。
    * calFnIds  引用函数ID。
    * calExp  计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dataType  字段类型。
    * createBy  创建人。
    * updateBy  更新人。
    * status  status
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * monitor  monitor
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'dimensionGroup' => 'dimension_group',
            'groupName' => 'group_name',
            'groupCode' => 'group_code',
            'metricIds' => 'metric_ids',
            'metricNames' => 'metric_names',
            'calFnIds' => 'cal_fn_ids',
            'calExp' => 'cal_exp',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'dataType' => 'data_type',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'monitor' => 'monitor',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'summaryTableId' => 'summary_table_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * metricIds  指标信息。
    * metricNames  指标名称信息。
    * calFnIds  引用函数ID。
    * calExp  计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dataType  字段类型。
    * createBy  创建人。
    * updateBy  更新人。
    * status  status
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * monitor  monitor
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'dimensionGroup' => 'setDimensionGroup',
            'groupName' => 'setGroupName',
            'groupCode' => 'setGroupCode',
            'metricIds' => 'setMetricIds',
            'metricNames' => 'setMetricNames',
            'calFnIds' => 'setCalFnIds',
            'calExp' => 'setCalExp',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'dataType' => 'setDataType',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'monitor' => 'setMonitor',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'summaryTableId' => 'setSummaryTableId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码。
    * nameEn  字段名。
    * nameCh  业务属性。
    * description  描述
    * dimensionGroup  颗粒度ID。
    * groupName  颗粒度名称。
    * groupCode  颗粒度编码。
    * metricIds  指标信息。
    * metricNames  指标名称信息。
    * calFnIds  引用函数ID。
    * calExp  计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    * l1Id  主题域分组ID。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象ID。
    * dataType  字段类型。
    * createBy  创建人。
    * updateBy  更新人。
    * status  status
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * monitor  monitor
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'dimensionGroup' => 'getDimensionGroup',
            'groupName' => 'getGroupName',
            'groupCode' => 'getGroupCode',
            'metricIds' => 'getMetricIds',
            'metricNames' => 'getMetricNames',
            'calFnIds' => 'getCalFnIds',
            'calExp' => 'getCalExp',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'dataType' => 'getDataType',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'monitor' => 'getMonitor',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'summaryTableId' => 'getSummaryTableId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dimensionGroup'] = isset($data['dimensionGroup']) ? $data['dimensionGroup'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupCode'] = isset($data['groupCode']) ? $data['groupCode'] : null;
        $this->container['metricIds'] = isset($data['metricIds']) ? $data['metricIds'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
        $this->container['calFnIds'] = isset($data['calFnIds']) ? $data['calFnIds'] : null;
        $this->container['calExp'] = isset($data['calExp']) ? $data['calExp'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['monitor'] = isset($data['monitor']) ? $data['monitor'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['summaryTableId'] = isset($data['summaryTableId']) ? $data['summaryTableId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z]+[a-zA-Z0-9_]*$/.";
            }
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\s]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa5]+[a-zA-Z0-9_\\u4e00-\\u9fa5\\-\\(\\)\\s]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['dimensionGroup'] === null) {
            $invalidProperties[] = "'dimensionGroup' can't be null";
        }
        if ($this->container['metricIds'] === null) {
            $invalidProperties[] = "'metricIds' can't be null";
        }
        if ($this->container['calExp'] === null) {
            $invalidProperties[] = "'calExp' can't be null";
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
    *  编码。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 编码。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nameEn
    *  字段名。
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 字段名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameCh
    *  业务属性。
    *
    * @return string
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string $nameCh 业务属性。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dimensionGroup
    *  颗粒度ID。
    *
    * @return string
    */
    public function getDimensionGroup()
    {
        return $this->container['dimensionGroup'];
    }

    /**
    * Sets dimensionGroup
    *
    * @param string $dimensionGroup 颗粒度ID。
    *
    * @return $this
    */
    public function setDimensionGroup($dimensionGroup)
    {
        $this->container['dimensionGroup'] = $dimensionGroup;
        return $this;
    }

    /**
    * Gets groupName
    *  颗粒度名称。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 颗粒度名称。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupCode
    *  颗粒度编码。
    *
    * @return string|null
    */
    public function getGroupCode()
    {
        return $this->container['groupCode'];
    }

    /**
    * Sets groupCode
    *
    * @param string|null $groupCode 颗粒度编码。
    *
    * @return $this
    */
    public function setGroupCode($groupCode)
    {
        $this->container['groupCode'] = $groupCode;
        return $this;
    }

    /**
    * Gets metricIds
    *  指标信息。
    *
    * @return int[]
    */
    public function getMetricIds()
    {
        return $this->container['metricIds'];
    }

    /**
    * Sets metricIds
    *
    * @param int[] $metricIds 指标信息。
    *
    * @return $this
    */
    public function setMetricIds($metricIds)
    {
        $this->container['metricIds'] = $metricIds;
        return $this;
    }

    /**
    * Gets metricNames
    *  指标名称信息。
    *
    * @return string[]|null
    */
    public function getMetricNames()
    {
        return $this->container['metricNames'];
    }

    /**
    * Sets metricNames
    *
    * @param string[]|null $metricNames 指标名称信息。
    *
    * @return $this
    */
    public function setMetricNames($metricNames)
    {
        $this->container['metricNames'] = $metricNames;
        return $this;
    }

    /**
    * Gets calFnIds
    *  引用函数ID。
    *
    * @return int[]|null
    */
    public function getCalFnIds()
    {
        return $this->container['calFnIds'];
    }

    /**
    * Sets calFnIds
    *
    * @param int[]|null $calFnIds 引用函数ID。
    *
    * @return $this
    */
    public function setCalFnIds($calFnIds)
    {
        $this->container['calFnIds'] = $calFnIds;
        return $this;
    }

    /**
    * Gets calExp
    *  计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    *
    * @return string
    */
    public function getCalExp()
    {
        return $this->container['calExp'];
    }

    /**
    * Sets calExp
    *
    * @param string $calExp 计算表达式，形如${index_id} + ${compound#index_id}，其中index_id代表引用的衍生指标ID，compound#index_id代表引用的复合指标ID。
    *
    * @return $this
    */
    public function setCalExp($calExp)
    {
        $this->container['calExp'] = $calExp;
        return $this;
    }

    /**
    * Gets l1Id
    *  主题域分组ID。
    *
    * @return int|null
    */
    public function getL1Id()
    {
        return $this->container['l1Id'];
    }

    /**
    * Sets l1Id
    *
    * @param int|null $l1Id 主题域分组ID。
    *
    * @return $this
    */
    public function setL1Id($l1Id)
    {
        $this->container['l1Id'] = $l1Id;
        return $this;
    }

    /**
    * Gets l2Id
    *  主题域ID，只读，创建和更新时无需填写。
    *
    * @return string|null
    */
    public function getL2Id()
    {
        return $this->container['l2Id'];
    }

    /**
    * Sets l2Id
    *
    * @param string|null $l2Id 主题域ID，只读，创建和更新时无需填写。
    *
    * @return $this
    */
    public function setL2Id($l2Id)
    {
        $this->container['l2Id'] = $l2Id;
        return $this;
    }

    /**
    * Gets l3Id
    *  业务对象ID。
    *
    * @return int|null
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param int|null $l3Id 业务对象ID。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets dataType
    *  字段类型。
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 字段类型。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
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
    * @param string|null $createBy 创建人。
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
    *  更新人。
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
    * @param string|null $updateBy 更新人。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
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
    * Gets createTime
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $updateTime 更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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
    * Gets monitor
    *  monitor
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetricMonitorVO|null
    */
    public function getMonitor()
    {
        return $this->container['monitor'];
    }

    /**
    * Sets monitor
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetricMonitorVO|null $monitor monitor
    *
    * @return $this
    */
    public function setMonitor($monitor)
    {
        $this->container['monitor'] = $monitor;
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
    * Gets summaryTableId
    *  汇总表ID。
    *
    * @return int|null
    */
    public function getSummaryTableId()
    {
        return $this->container['summaryTableId'];
    }

    /**
    * Sets summaryTableId
    *
    * @param int|null $summaryTableId 汇总表ID。
    *
    * @return $this
    */
    public function setSummaryTableId($summaryTableId)
    {
        $this->container['summaryTableId'] = $summaryTableId;
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

