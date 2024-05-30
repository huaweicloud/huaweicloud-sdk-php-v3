<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDimensionGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDimensionGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableId  关联表的ID，填写String类型替代Long类型。
    * bizType  按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'xProjectId' => 'string',
            'contentType' => 'string',
            'tableId' => 'string',
            'bizType' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableId  关联表的ID，填写String类型替代Long类型。
    * bizType  按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'xProjectId' => null,
        'contentType' => null,
        'tableId' => null,
        'bizType' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * tableId  关联表的ID，填写String类型替代Long类型。
    * bizType  按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'xProjectId' => 'X-Project-Id',
            'contentType' => 'Content-Type',
            'tableId' => 'table_id',
            'bizType' => 'biz_type',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableId  关联表的ID，填写String类型替代Long类型。
    * bizType  按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'xProjectId' => 'setXProjectId',
            'contentType' => 'setContentType',
            'tableId' => 'setTableId',
            'bizType' => 'setBizType',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * xProjectId  项目ID，获取方法请参见[项目ID和账号ID](projectid_accountid.xml)。  多project场景采用AK/SK认证的接口请求，则该字段必选。
    * contentType  默认值：application/json;charset=UTF-8 可选，有Body体的情况下必选，没有Body体则无需填写和校验。
    * tableId  关联表的ID，填写String类型替代Long类型。
    * bizType  按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    * limit  每页查询条数，即查询Y条数据。默认值50，取值范围[1,100]。
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整，默认值0。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'xProjectId' => 'getXProjectId',
            'contentType' => 'getContentType',
            'tableId' => 'getTableId',
            'bizType' => 'getBizType',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets tableId
    *  关联表的ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 关联表的ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets bizType
    *  按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    *
    * @return string|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param string|null $bizType 按业务类型查询，可选业务类型有：ATOMIC_INDEX（原子指标）、DERIVATIVE_INDEX（衍生指标）、DIMENSION（维度）、TIME_CONDITION（时间限定）、DIMENSION_LOGIC_TABLE（维度表）、FACT_LOGIC_TABLE（事实表）、AGGREGATION_LOGIC_TABLE（汇总表）、TABLE_MODEL（关系建模表）、CODE_TABLE（码表）、STANDARD_ELEMENT）（数据标准）、BIZ_METRIC（业务指标）、COMPOUND_METRIC（复合指标）、SUBJECT（主题）、ATOMIC_METRIC（原子指标（新））、DERIVED_METRIC（衍生指标（新））、COMPOSITE_METRIC（复合指标（新））。
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
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

