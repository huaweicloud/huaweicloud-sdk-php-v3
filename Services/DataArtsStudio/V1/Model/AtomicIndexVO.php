<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AtomicIndexVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AtomicIndexVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * nameEn  原子指标英文名。
    * nameCh  原子指标英文名。
    * description  描述。
    * createBy  创建人。
    * calExp  计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
    * calFnIds  引用函数ID，ID字符串。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，ID字符串。
    * tableId  事实表ID，ID字符串。
    * tbName  事实表名称。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * fieldIds  字段ID信息，ID字符串。
    * fieldNames  字段名称信息。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
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
            'calExp' => 'string',
            'calFnIds' => 'string[]',
            'l1Id' => 'string',
            'l2Id' => 'string',
            'l3Id' => 'string',
            'tableId' => 'string',
            'tbName' => 'string',
            'dwType' => 'string',
            'fieldIds' => 'string[]',
            'fieldNames' => 'string[]',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'l1' => 'string',
            'l2' => 'string',
            'l3' => 'string',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，ID字符串。
    * nameEn  原子指标英文名。
    * nameCh  原子指标英文名。
    * description  描述。
    * createBy  创建人。
    * calExp  计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
    * calFnIds  引用函数ID，ID字符串。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，ID字符串。
    * tableId  事实表ID，ID字符串。
    * tbName  事实表名称。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * fieldIds  字段ID信息，ID字符串。
    * fieldNames  字段名称信息。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
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
        'calExp' => null,
        'calFnIds' => null,
        'l1Id' => null,
        'l2Id' => null,
        'l3Id' => null,
        'tableId' => null,
        'tbName' => null,
        'dwType' => null,
        'fieldIds' => null,
        'fieldNames' => null,
        'status' => null,
        'bizType' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'l1' => null,
        'l2' => null,
        'l3' => null,
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
    * id  编码，ID字符串。
    * nameEn  原子指标英文名。
    * nameCh  原子指标英文名。
    * description  描述。
    * createBy  创建人。
    * calExp  计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
    * calFnIds  引用函数ID，ID字符串。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，ID字符串。
    * tableId  事实表ID，ID字符串。
    * tbName  事实表名称。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * fieldIds  字段ID信息，ID字符串。
    * fieldNames  字段名称信息。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
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
            'calExp' => 'cal_exp',
            'calFnIds' => 'cal_fn_ids',
            'l1Id' => 'l1_id',
            'l2Id' => 'l2_id',
            'l3Id' => 'l3_id',
            'tableId' => 'table_id',
            'tbName' => 'tb_name',
            'dwType' => 'dw_type',
            'fieldIds' => 'field_ids',
            'fieldNames' => 'field_names',
            'status' => 'status',
            'bizType' => 'biz_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，ID字符串。
    * nameEn  原子指标英文名。
    * nameCh  原子指标英文名。
    * description  描述。
    * createBy  创建人。
    * calExp  计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
    * calFnIds  引用函数ID，ID字符串。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，ID字符串。
    * tableId  事实表ID，ID字符串。
    * tbName  事实表名称。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * fieldIds  字段ID信息，ID字符串。
    * fieldNames  字段名称信息。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
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
            'calExp' => 'setCalExp',
            'calFnIds' => 'setCalFnIds',
            'l1Id' => 'setL1Id',
            'l2Id' => 'setL2Id',
            'l3Id' => 'setL3Id',
            'tableId' => 'setTableId',
            'tbName' => 'setTbName',
            'dwType' => 'setDwType',
            'fieldIds' => 'setFieldIds',
            'fieldNames' => 'setFieldNames',
            'status' => 'setStatus',
            'bizType' => 'setBizType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，ID字符串。
    * nameEn  原子指标英文名。
    * nameCh  原子指标英文名。
    * description  描述。
    * createBy  创建人。
    * calExp  计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
    * calFnIds  引用函数ID，ID字符串。
    * l1Id  主题域分组ID，只读，ID字符串。
    * l2Id  主题域ID，只读，创建和更新时无需填写。
    * l3Id  业务对象guid，ID字符串。
    * tableId  事实表ID，ID字符串。
    * tbName  事实表名称。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * fieldIds  字段ID信息，ID字符串。
    * fieldNames  字段名称信息。
    * status  status
    * bizType  bizType
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * l1  主题域分组中文名，只读，创建和更新时无需填写。
    * l2  主题域中文名，只读，创建和更新时无需填写。
    * l3  业务对象中文名，只读，创建和更新时无需填写。
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
            'calExp' => 'getCalExp',
            'calFnIds' => 'getCalFnIds',
            'l1Id' => 'getL1Id',
            'l2Id' => 'getL2Id',
            'l3Id' => 'getL3Id',
            'tableId' => 'getTableId',
            'tbName' => 'getTbName',
            'dwType' => 'getDwType',
            'fieldIds' => 'getFieldIds',
            'fieldNames' => 'getFieldNames',
            'status' => 'getStatus',
            'bizType' => 'getBizType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
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
        $this->container['calExp'] = isset($data['calExp']) ? $data['calExp'] : null;
        $this->container['calFnIds'] = isset($data['calFnIds']) ? $data['calFnIds'] : null;
        $this->container['l1Id'] = isset($data['l1Id']) ? $data['l1Id'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['tbName'] = isset($data['tbName']) ? $data['tbName'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['fieldIds'] = isset($data['fieldIds']) ? $data['fieldIds'] : null;
        $this->container['fieldNames'] = isset($data['fieldNames']) ? $data['fieldNames'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
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
        if ($this->container['calExp'] === null) {
            $invalidProperties[] = "'calExp' can't be null";
        }
            if ((mb_strlen($this->container['calExp']) > 200)) {
                $invalidProperties[] = "invalid value for 'calExp', the character length must be smaller than or equal to 200.";
            }
        if ($this->container['l3Id'] === null) {
            $invalidProperties[] = "'l3Id' can't be null";
        }
        if ($this->container['tableId'] === null) {
            $invalidProperties[] = "'tableId' can't be null";
        }
        if ($this->container['fieldIds'] === null) {
            $invalidProperties[] = "'fieldIds' can't be null";
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
    *  编码，ID字符串。
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
    * @param string|null $id 编码，ID字符串。
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
    *  原子指标英文名。
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
    * @param string $nameEn 原子指标英文名。
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
    *  原子指标英文名。
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
    * @param string $nameCh 原子指标英文名。
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
    *  描述。
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
    * @param string|null $description 描述。
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
    * Gets calExp
    *  计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
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
    * @param string $calExp 计算表达式，形如'sum(${fact_column_id})'，其中fact_column_id表示引用事实表中的字段ID
    *
    * @return $this
    */
    public function setCalExp($calExp)
    {
        $this->container['calExp'] = $calExp;
        return $this;
    }

    /**
    * Gets calFnIds
    *  引用函数ID，ID字符串。
    *
    * @return string[]|null
    */
    public function getCalFnIds()
    {
        return $this->container['calFnIds'];
    }

    /**
    * Sets calFnIds
    *
    * @param string[]|null $calFnIds 引用函数ID，ID字符串。
    *
    * @return $this
    */
    public function setCalFnIds($calFnIds)
    {
        $this->container['calFnIds'] = $calFnIds;
        return $this;
    }

    /**
    * Gets l1Id
    *  主题域分组ID，只读，ID字符串。
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
    * @param string|null $l1Id 主题域分组ID，只读，ID字符串。
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
    *  业务对象guid，ID字符串。
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
    * @param string $l3Id 业务对象guid，ID字符串。
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
        return $this;
    }

    /**
    * Gets tableId
    *  事实表ID，ID字符串。
    *
    * @return string
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string $tableId 事实表ID，ID字符串。
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets tbName
    *  事实表名称。
    *
    * @return string|null
    */
    public function getTbName()
    {
        return $this->container['tbName'];
    }

    /**
    * Sets tbName
    *
    * @param string|null $tbName 事实表名称。
    *
    * @return $this
    */
    public function setTbName($tbName)
    {
        $this->container['tbName'] = $tbName;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets fieldIds
    *  字段ID信息，ID字符串。
    *
    * @return string[]
    */
    public function getFieldIds()
    {
        return $this->container['fieldIds'];
    }

    /**
    * Sets fieldIds
    *
    * @param string[] $fieldIds 字段ID信息，ID字符串。
    *
    * @return $this
    */
    public function setFieldIds($fieldIds)
    {
        $this->container['fieldIds'] = $fieldIds;
        return $this;
    }

    /**
    * Gets fieldNames
    *  字段名称信息。
    *
    * @return string[]|null
    */
    public function getFieldNames()
    {
        return $this->container['fieldNames'];
    }

    /**
    * Sets fieldNames
    *
    * @param string[]|null $fieldNames 字段名称信息。
    *
    * @return $this
    */
    public function setFieldNames($fieldNames)
    {
        $this->container['fieldNames'] = $fieldNames;
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

