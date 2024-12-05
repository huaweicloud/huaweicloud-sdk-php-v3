<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDesignOperationResultRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDesignOperationResultRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * operationType  批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    * operationId  批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'xProjectId' => 'string',
            'contentType' => 'string',
            'operationType' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'operationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * operationType  批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    * operationId  批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'xProjectId' => null,
        'contentType' => null,
        'operationType' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'operationId' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * operationType  批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    * operationId  批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'xProjectId' => 'X-Project-Id',
            'contentType' => 'Content-Type',
            'operationType' => 'operation_type',
            'limit' => 'limit',
            'offset' => 'offset',
            'operationId' => 'operation_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * operationType  批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    * operationId  批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'xProjectId' => 'setXProjectId',
            'contentType' => 'setContentType',
            'operationType' => 'setOperationType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'operationId' => 'setOperationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * operationType  批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    * operationId  批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'xProjectId' => 'getXProjectId',
            'contentType' => 'getContentType',
            'operationType' => 'getOperationType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'operationId' => 'getOperationId'
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
    const OPERATION_TYPE_PUBLISH = 'PUBLISH';
    const OPERATION_TYPE_ADD_TAGS = 'ADD_TAGS';
    const OPERATION_TYPE_APPROVAL = 'APPROVAL';
    const OPERATION_TYPE_ER_REVERSE_DB = 'ER_REVERSE_DB';
    const OPERATION_TYPE_CODETABLE_REVERSE_DB = 'CODETABLE_REVERSE_DB';
    const OPERATION_TYPE_DIMENSION_REVERSE_DB = 'DIMENSION_REVERSE_DB';
    const OPERATION_TYPE_FACT_LOGIC_TABLE_REVERSE_DB = 'FACT_LOGIC_TABLE_REVERSE_DB';
    const OPERATION_TYPE_SYNC_TABLES = 'SYNC_TABLES';
    const OPERATION_TYPE_IMPORT_STANDARD = 'IMPORT_STANDARD';
    const OPERATION_TYPE_IMPORT_CODETABLE = 'IMPORT_CODETABLE';
    const OPERATION_TYPE_IMPORT_ER_TABLE = 'IMPORT_ER_TABLE';
    const OPERATION_TYPE_IMPORT_BUSINESS = 'IMPORT_BUSINESS';
    const OPERATION_TYPE_TRANSFORM_LOGIC_MODEL = 'TRANSFORM_LOGIC_MODEL';
    const OPERATION_TYPE_PUBLISH_CODETABLE = 'PUBLISH_CODETABLE';
    const OPERATION_TYPE_PUBLISH_STANDARD = 'PUBLISH_STANDARD';
    const OPERATION_TYPE_TABLE_MODEL_RELOCATE = 'TABLE_MODEL_RELOCATE';
    const OPERATION_TYPE_DIMENSION_RELOCATE = 'DIMENSION_RELOCATE';
    const OPERATION_TYPE_FACT_LOGIC_TABLE_RELOCATE = 'FACT_LOGIC_TABLE_RELOCATE';
    const OPERATION_TYPE_AGGREGATION_LOGIC_TABLE_RELOCATE = 'AGGREGATION_LOGIC_TABLE_RELOCATE';
    const OPERATION_TYPE_ATOMIC_INDEX_RELOCATE = 'ATOMIC_INDEX_RELOCATE';
    const OPERATION_TYPE_DERIVATIVE_INDEX_RELOCATE = 'DERIVATIVE_INDEX_RELOCATE';
    const OPERATION_TYPE_COMPOUND_METRIC_RELOCATE = 'COMPOUND_METRIC_RELOCATE';
    const OPERATION_TYPE_BIZ_METRIC_RELOCATE = 'BIZ_METRIC_RELOCATE';
    const OPERATION_TYPE_CODE_TABLE_RELOCATE = 'CODE_TABLE_RELOCATE';
    const OPERATION_TYPE_STANDARD_ELEMENT_RELOCATE = 'STANDARD_ELEMENT_RELOCATE';
    const OPERATION_TYPE_INFO_ARCH_RELOCATE = 'INFO_ARCH_RELOCATE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_PUBLISH,
            self::OPERATION_TYPE_ADD_TAGS,
            self::OPERATION_TYPE_APPROVAL,
            self::OPERATION_TYPE_ER_REVERSE_DB,
            self::OPERATION_TYPE_CODETABLE_REVERSE_DB,
            self::OPERATION_TYPE_DIMENSION_REVERSE_DB,
            self::OPERATION_TYPE_FACT_LOGIC_TABLE_REVERSE_DB,
            self::OPERATION_TYPE_SYNC_TABLES,
            self::OPERATION_TYPE_IMPORT_STANDARD,
            self::OPERATION_TYPE_IMPORT_CODETABLE,
            self::OPERATION_TYPE_IMPORT_ER_TABLE,
            self::OPERATION_TYPE_IMPORT_BUSINESS,
            self::OPERATION_TYPE_TRANSFORM_LOGIC_MODEL,
            self::OPERATION_TYPE_PUBLISH_CODETABLE,
            self::OPERATION_TYPE_PUBLISH_STANDARD,
            self::OPERATION_TYPE_TABLE_MODEL_RELOCATE,
            self::OPERATION_TYPE_DIMENSION_RELOCATE,
            self::OPERATION_TYPE_FACT_LOGIC_TABLE_RELOCATE,
            self::OPERATION_TYPE_AGGREGATION_LOGIC_TABLE_RELOCATE,
            self::OPERATION_TYPE_ATOMIC_INDEX_RELOCATE,
            self::OPERATION_TYPE_DERIVATIVE_INDEX_RELOCATE,
            self::OPERATION_TYPE_COMPOUND_METRIC_RELOCATE,
            self::OPERATION_TYPE_BIZ_METRIC_RELOCATE,
            self::OPERATION_TYPE_CODE_TABLE_RELOCATE,
            self::OPERATION_TYPE_STANDARD_ELEMENT_RELOCATE,
            self::OPERATION_TYPE_INFO_ARCH_RELOCATE,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 3)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contentType']) && (mb_strlen($this->container['contentType']) < 3)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets xProjectId
    *  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets contentType
    *  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets operationType
    *  批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 批量操作类型。 枚举值：   - PUBLISH: 发布   - ADD_TAGS: 打标签   - APPROVAL: 审批   - ER_REVERSE_DB: 关系建模逆向数据库   - CODETABLE_REVERSE_DB: 码表逆向数据库   - DIMENSION_REVERSE_DB: 维度逆向数据库   - FACT_LOGIC_TABLE_REVERSE_DB: 事实表逆向数据库   - SYNC_TABLES: 同步元模型   - IMPORT_STANDARD: 导入数据标准   - IMPORT_CODETABLE: 导入码表   - IMPORT_ER_TABLE: 导入关系建模（逻辑实体/物理表）   - IMPORT_BUSINESS: 导入业务分层（主题）   - TRANSFORM_LOGIC_MODEL: 逻辑模型转物理模型   - PUBLISH_CODETABLE: 发布码表   - PUBLISH_STANDARD: 发布数据标准   - TABLE_MODEL_RELOCATE: 关系建模业务表批量修改主题   - DIMENSION_RELOCATE: 维度批量修改主题   - FACT_LOGIC_TABLE_RELOCATE: 事实表批量修改主题   - AGGREGATION_LOGIC_TABLE_RELOCATE: 汇总表批量修改主题   - ATOMIC_INDEX_RELOCATE: 原子指标批量修改主题   - DERIVATIVE_INDEX_RELOCATE: 衍生指标批量修改主题   - COMPOUND_METRIC_RELOCATE: 复合指标批量修改主题   - BIZ_METRIC_RELOCATE: 业务指标批量修改流程   - CODE_TABLE_RELOCATE: 码表批量修改目录   - STANDARD_ELEMENT_RELOCATE: 数据标准批量修改目录   - INFO_ARCH_RELOCATE: 信息架构批量修改主题
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets limit
    *  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets operationId
    *  批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId 批量操作id，在逻辑模型转物理表时，填写的是逻辑模型的model_id，在逆向数据库时，填写的是目标模型的model_id。model_id可从接口[获取模型](ListWorkspaces.xml)中获取。
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
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

