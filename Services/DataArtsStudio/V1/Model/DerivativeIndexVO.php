<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DerivativeIndexVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DerivativeIndexVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * nameCh  中文名。
    * description  描述，只读。
    * createBy  创建人。
    * dataType  字段类型。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，填写String类型替代Long类型。
    * status  status
    * atomicIndexId  原子指标ID，填写String类型替代Long类型。
    * timeConditionId  时间限定ID，填写String类型替代Long类型。
    * timeFieldId  时间限定关联字段ID，填写String类型替代Long类型。
    * timeFieldName  时间限定关联字段名称，只读。
    * commonConditions  通用限定信息。
    * dimensionGroups  维度组(颗粒度)。
    * monitor  monitor
    * atomicIndex  atomicIndex
    * timeConditionName  时间限定名称，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID，只读，填写String类型替代Long类型。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'nameEn' => 'string',
            'nameCh' => 'string',
            'description' => 'string',
            'createBy' => 'string',
            'dataType' => 'string',
            'l1Id' => 'string',
            'l2Id' => 'string',
            'l3Id' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'atomicIndexId' => 'string',
            'timeConditionId' => 'string',
            'timeFieldId' => 'string',
            'timeFieldName' => 'string',
            'commonConditions' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CommonConditionVO[]',
            'dimensionGroups' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DerivativeIndexDimensionVO[]',
            'monitor' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetricMonitorVO',
            'atomicIndex' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtomicIndexVO',
            'timeConditionName' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'summaryTableId' => 'string',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * nameCh  中文名。
    * description  描述，只读。
    * createBy  创建人。
    * dataType  字段类型。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，填写String类型替代Long类型。
    * status  status
    * atomicIndexId  原子指标ID，填写String类型替代Long类型。
    * timeConditionId  时间限定ID，填写String类型替代Long类型。
    * timeFieldId  时间限定关联字段ID，填写String类型替代Long类型。
    * timeFieldName  时间限定关联字段名称，只读。
    * commonConditions  通用限定信息。
    * dimensionGroups  维度组(颗粒度)。
    * monitor  monitor
    * atomicIndex  atomicIndex
    * timeConditionName  时间限定名称，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID，只读，填写String类型替代Long类型。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'nameEn' => null,
        'nameCh' => null,
        'description' => null,
        'createBy' => null,
        'dataType' => null,
        'l1Id' => null,
        'l2Id' => null,
        'l3Id' => null,
        'status' => null,
        'atomicIndexId' => null,
        'timeConditionId' => null,
        'timeFieldId' => null,
        'timeFieldName' => null,
        'commonConditions' => null,
        'dimensionGroups' => null,
        'monitor' => null,
        'atomicIndex' => null,
        'timeConditionName' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'summaryTableId' => null,
        'approvalInfo' => null,
        'newBiz' => null
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
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * nameCh  中文名。
    * description  描述，只读。
    * createBy  创建人。
    * dataType  字段类型。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，填写String类型替代Long类型。
    * status  status
    * atomicIndexId  原子指标ID，填写String类型替代Long类型。
    * timeConditionId  时间限定ID，填写String类型替代Long类型。
    * timeFieldId  时间限定关联字段ID，填写String类型替代Long类型。
    * timeFieldName  时间限定关联字段名称，只读。
    * commonConditions  通用限定信息。
    * dimensionGroups  维度组(颗粒度)。
    * monitor  monitor
    * atomicIndex  atomicIndex
    * timeConditionName  时间限定名称，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID，只读，填写String类型替代Long类型。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nameEn' => 'name_en',
            'nameCh' => 'name_ch',
            'description' => 'description',
            'createBy' => 'create_by',
            'dataType' => 'data_type',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'status' => 'status',
            'atomicIndexId' => 'atomic_index_id',
            'timeConditionId' => 'time_condition_id',
            'timeFieldId' => 'time_field_id',
            'timeFieldName' => 'time_field_name',
            'commonConditions' => 'common_conditions',
            'dimensionGroups' => 'dimension_groups',
            'monitor' => 'monitor',
            'atomicIndex' => 'atomic_index',
            'timeConditionName' => 'time_condition_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'summaryTableId' => 'summary_table_id',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * nameCh  中文名。
    * description  描述，只读。
    * createBy  创建人。
    * dataType  字段类型。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，填写String类型替代Long类型。
    * status  status
    * atomicIndexId  原子指标ID，填写String类型替代Long类型。
    * timeConditionId  时间限定ID，填写String类型替代Long类型。
    * timeFieldId  时间限定关联字段ID，填写String类型替代Long类型。
    * timeFieldName  时间限定关联字段名称，只读。
    * commonConditions  通用限定信息。
    * dimensionGroups  维度组(颗粒度)。
    * monitor  monitor
    * atomicIndex  atomicIndex
    * timeConditionName  时间限定名称，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID，只读，填写String类型替代Long类型。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nameEn' => 'setNameEn',
            'nameCh' => 'setNameCh',
            'description' => 'setDescription',
            'createBy' => 'setCreateBy',
            'dataType' => 'setDataType',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'status' => 'setStatus',
            'atomicIndexId' => 'setAtomicIndexId',
            'timeConditionId' => 'setTimeConditionId',
            'timeFieldId' => 'setTimeFieldId',
            'timeFieldName' => 'setTimeFieldName',
            'commonConditions' => 'setCommonConditions',
            'dimensionGroups' => 'setDimensionGroups',
            'monitor' => 'setMonitor',
            'atomicIndex' => 'setAtomicIndex',
            'timeConditionName' => 'setTimeConditionName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'summaryTableId' => 'setSummaryTableId',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，填写String类型替代Long类型。
    * nameEn  字段名。
    * nameCh  中文名。
    * description  描述，只读。
    * createBy  创建人。
    * dataType  字段类型。
    * l1Id  主题域分组ID，只读，填写String类型替代Long类型。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，填写String类型替代Long类型。
    * status  status
    * atomicIndexId  原子指标ID，填写String类型替代Long类型。
    * timeConditionId  时间限定ID，填写String类型替代Long类型。
    * timeFieldId  时间限定关联字段ID，填写String类型替代Long类型。
    * timeFieldName  时间限定关联字段名称，只读。
    * commonConditions  通用限定信息。
    * dimensionGroups  维度组(颗粒度)。
    * monitor  monitor
    * atomicIndex  atomicIndex
    * timeConditionName  时间限定名称，只读。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
    * summaryTableId  汇总表ID，只读，填写String类型替代Long类型。
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nameEn' => 'getNameEn',
            'nameCh' => 'getNameCh',
            'description' => 'getDescription',
            'createBy' => 'getCreateBy',
            'dataType' => 'getDataType',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'status' => 'getStatus',
            'atomicIndexId' => 'getAtomicIndexId',
            'timeConditionId' => 'getTimeConditionId',
            'timeFieldId' => 'getTimeFieldId',
            'timeFieldName' => 'getTimeFieldName',
            'commonConditions' => 'getCommonConditions',
            'dimensionGroups' => 'getDimensionGroups',
            'monitor' => 'getMonitor',
            'atomicIndex' => 'getAtomicIndex',
            'timeConditionName' => 'getTimeConditionName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'summaryTableId' => 'getSummaryTableId',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz'
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
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['atomicIndexId'] = isset($data['atomicIndexId']) ? $data['atomicIndexId'] : null;
        $this->container['timeConditionId'] = isset($data['timeConditionId']) ? $data['timeConditionId'] : null;
        $this->container['timeFieldId'] = isset($data['timeFieldId']) ? $data['timeFieldId'] : null;
        $this->container['timeFieldName'] = isset($data['timeFieldName']) ? $data['timeFieldName'] : null;
        $this->container['commonConditions'] = isset($data['commonConditions']) ? $data['commonConditions'] : null;
        $this->container['dimensionGroups'] = isset($data['dimensionGroups']) ? $data['dimensionGroups'] : null;
        $this->container['monitor'] = isset($data['monitor']) ? $data['monitor'] : null;
        $this->container['atomicIndex'] = isset($data['atomicIndex']) ? $data['atomicIndex'] : null;
        $this->container['timeConditionName'] = isset($data['timeConditionName']) ? $data['timeConditionName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['summaryTableId'] = isset($data['summaryTableId']) ? $data['summaryTableId'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
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
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9_]*$/.";
            }
        if ($this->container['nameCh'] === null) {
            $invalidProperties[] = "'nameCh' can't be null";
        }
            if ((mb_strlen($this->container['nameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 200.";
            }
            if (!preg_match("/^[a-zA-Z\\u4e00-\\u9fa50-9][a-zA-Z0-9_\\u4e00-\\u9fa5\\(\\)\\-,\\.]*$/", $this->container['nameCh'])) {
                $invalidProperties[] = "invalid value for 'nameCh', must be conform to the pattern /^[a-zA-Z\\u4e00-\\u9fa50-9][a-zA-Z0-9_\\u4e00-\\u9fa5\\(\\)\\-,\\.]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['l3Id'] === null) {
            $invalidProperties[] = "'l3Id' can't be null";
        }
        if ($this->container['atomicIndexId'] === null) {
            $invalidProperties[] = "'atomicIndexId' can't be null";
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
    *  编码，填写String类型替代Long类型。
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
    * @param string|null $id 编码，填写String类型替代Long类型。
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
    *  中文名。
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
    * @param string $nameCh 中文名。
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
    *  描述，只读。
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
    * @param string|null $description 描述，只读。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets l1Id
    *  主题域分组ID，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getL1Id()
    {
        return $this->container['l1Id'];
    }

    /**
    * Sets l1Id
    *
    * @param string|null $l1Id 主题域分组ID，只读，填写String类型替代Long类型。
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
    *  业务对象guid，填写String类型替代Long类型。
    *
    * @return string
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param string $l3Id 业务对象guid，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
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
    * Gets atomicIndexId
    *  原子指标ID，填写String类型替代Long类型。
    *
    * @return string
    */
    public function getAtomicIndexId()
    {
        return $this->container['atomicIndexId'];
    }

    /**
    * Sets atomicIndexId
    *
    * @param string $atomicIndexId 原子指标ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setAtomicIndexId($atomicIndexId)
    {
        $this->container['atomicIndexId'] = $atomicIndexId;
        return $this;
    }

    /**
    * Gets timeConditionId
    *  时间限定ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getTimeConditionId()
    {
        return $this->container['timeConditionId'];
    }

    /**
    * Sets timeConditionId
    *
    * @param string|null $timeConditionId 时间限定ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setTimeConditionId($timeConditionId)
    {
        $this->container['timeConditionId'] = $timeConditionId;
        return $this;
    }

    /**
    * Gets timeFieldId
    *  时间限定关联字段ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getTimeFieldId()
    {
        return $this->container['timeFieldId'];
    }

    /**
    * Sets timeFieldId
    *
    * @param string|null $timeFieldId 时间限定关联字段ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setTimeFieldId($timeFieldId)
    {
        $this->container['timeFieldId'] = $timeFieldId;
        return $this;
    }

    /**
    * Gets timeFieldName
    *  时间限定关联字段名称，只读。
    *
    * @return string|null
    */
    public function getTimeFieldName()
    {
        return $this->container['timeFieldName'];
    }

    /**
    * Sets timeFieldName
    *
    * @param string|null $timeFieldName 时间限定关联字段名称，只读。
    *
    * @return $this
    */
    public function setTimeFieldName($timeFieldName)
    {
        $this->container['timeFieldName'] = $timeFieldName;
        return $this;
    }

    /**
    * Gets commonConditions
    *  通用限定信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CommonConditionVO[]|null
    */
    public function getCommonConditions()
    {
        return $this->container['commonConditions'];
    }

    /**
    * Sets commonConditions
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CommonConditionVO[]|null $commonConditions 通用限定信息。
    *
    * @return $this
    */
    public function setCommonConditions($commonConditions)
    {
        $this->container['commonConditions'] = $commonConditions;
        return $this;
    }

    /**
    * Gets dimensionGroups
    *  维度组(颗粒度)。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DerivativeIndexDimensionVO[]|null
    */
    public function getDimensionGroups()
    {
        return $this->container['dimensionGroups'];
    }

    /**
    * Sets dimensionGroups
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DerivativeIndexDimensionVO[]|null $dimensionGroups 维度组(颗粒度)。
    *
    * @return $this
    */
    public function setDimensionGroups($dimensionGroups)
    {
        $this->container['dimensionGroups'] = $dimensionGroups;
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
    * Gets atomicIndex
    *  atomicIndex
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtomicIndexVO|null
    */
    public function getAtomicIndex()
    {
        return $this->container['atomicIndex'];
    }

    /**
    * Sets atomicIndex
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtomicIndexVO|null $atomicIndex atomicIndex
    *
    * @return $this
    */
    public function setAtomicIndex($atomicIndex)
    {
        $this->container['atomicIndex'] = $atomicIndex;
        return $this;
    }

    /**
    * Gets timeConditionName
    *  时间限定名称，只读。
    *
    * @return string|null
    */
    public function getTimeConditionName()
    {
        return $this->container['timeConditionName'];
    }

    /**
    * Sets timeConditionName
    *
    * @param string|null $timeConditionName 时间限定名称，只读。
    *
    * @return $this
    */
    public function setTimeConditionName($timeConditionName)
    {
        $this->container['timeConditionName'] = $timeConditionName;
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
    * Gets summaryTableId
    *  汇总表ID，只读，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getSummaryTableId()
    {
        return $this->container['summaryTableId'];
    }

    /**
    * Sets summaryTableId
    *
    * @param string|null $summaryTableId 汇总表ID，只读，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setSummaryTableId($summaryTableId)
    {
        $this->container['summaryTableId'] = $summaryTableId;
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

