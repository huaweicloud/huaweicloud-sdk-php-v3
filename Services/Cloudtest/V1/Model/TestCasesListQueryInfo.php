<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCasesListQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCasesListQueryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * keyword  关键字查询，用例名或编号
    * name  用例名称
    * number  用例编号
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * serviceType  服务类型
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionUri' => 'string',
            'caseUris' => 'string[]',
            'ownerIds' => 'string[]',
            'statusCodes' => 'string[]',
            'rankIds' => 'string[]',
            'moduleIds' => 'string[]',
            'keyword' => 'string',
            'name' => 'string',
            'number' => 'string',
            'sortField' => 'string',
            'sortType' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'serviceType' => 'int',
            'stageType' => 'int',
            'featureUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * keyword  关键字查询，用例名或编号
    * name  用例名称
    * number  用例编号
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * serviceType  服务类型
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionUri' => null,
        'caseUris' => null,
        'ownerIds' => null,
        'statusCodes' => null,
        'rankIds' => null,
        'moduleIds' => null,
        'keyword' => null,
        'name' => null,
        'number' => null,
        'sortField' => null,
        'sortType' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'serviceType' => null,
        'stageType' => null,
        'featureUri' => null
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
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * keyword  关键字查询，用例名或编号
    * name  用例名称
    * number  用例编号
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * serviceType  服务类型
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionUri' => 'version_uri',
            'caseUris' => 'case_uris',
            'ownerIds' => 'owner_ids',
            'statusCodes' => 'status_codes',
            'rankIds' => 'rank_ids',
            'moduleIds' => 'module_ids',
            'keyword' => 'keyword',
            'name' => 'name',
            'number' => 'number',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'serviceType' => 'service_type',
            'stageType' => 'stage_type',
            'featureUri' => 'feature_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * keyword  关键字查询，用例名或编号
    * name  用例名称
    * number  用例编号
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * serviceType  服务类型
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    *
    * @var string[]
    */
    protected static $setters = [
            'versionUri' => 'setVersionUri',
            'caseUris' => 'setCaseUris',
            'ownerIds' => 'setOwnerIds',
            'statusCodes' => 'setStatusCodes',
            'rankIds' => 'setRankIds',
            'moduleIds' => 'setModuleIds',
            'keyword' => 'setKeyword',
            'name' => 'setName',
            'number' => 'setNumber',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'serviceType' => 'setServiceType',
            'stageType' => 'setStageType',
            'featureUri' => 'setFeatureUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionUri  版本URI
    * caseUris  用例URI集合
    * ownerIds  处理者ID集合
    * statusCodes  状态Code集合
    * rankIds  用例等级ID集合
    * moduleIds  模块ID集合
    * keyword  关键字查询，用例名或编号
    * name  用例名称
    * number  用例编号
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * serviceType  服务类型
    * stageType  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    * featureUri  目录URI
    *
    * @var string[]
    */
    protected static $getters = [
            'versionUri' => 'getVersionUri',
            'caseUris' => 'getCaseUris',
            'ownerIds' => 'getOwnerIds',
            'statusCodes' => 'getStatusCodes',
            'rankIds' => 'getRankIds',
            'moduleIds' => 'getModuleIds',
            'keyword' => 'getKeyword',
            'name' => 'getName',
            'number' => 'getNumber',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'serviceType' => 'getServiceType',
            'stageType' => 'getStageType',
            'featureUri' => 'getFeatureUri'
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
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['caseUris'] = isset($data['caseUris']) ? $data['caseUris'] : null;
        $this->container['ownerIds'] = isset($data['ownerIds']) ? $data['ownerIds'] : null;
        $this->container['statusCodes'] = isset($data['statusCodes']) ? $data['statusCodes'] : null;
        $this->container['rankIds'] = isset($data['rankIds']) ? $data['rankIds'] : null;
        $this->container['moduleIds'] = isset($data['moduleIds']) ? $data['moduleIds'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['stageType'] = isset($data['stageType']) ? $data['stageType'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
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
    * Gets versionUri
    *  版本URI
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 版本URI
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets caseUris
    *  用例URI集合
    *
    * @return string[]|null
    */
    public function getCaseUris()
    {
        return $this->container['caseUris'];
    }

    /**
    * Sets caseUris
    *
    * @param string[]|null $caseUris 用例URI集合
    *
    * @return $this
    */
    public function setCaseUris($caseUris)
    {
        $this->container['caseUris'] = $caseUris;
        return $this;
    }

    /**
    * Gets ownerIds
    *  处理者ID集合
    *
    * @return string[]|null
    */
    public function getOwnerIds()
    {
        return $this->container['ownerIds'];
    }

    /**
    * Sets ownerIds
    *
    * @param string[]|null $ownerIds 处理者ID集合
    *
    * @return $this
    */
    public function setOwnerIds($ownerIds)
    {
        $this->container['ownerIds'] = $ownerIds;
        return $this;
    }

    /**
    * Gets statusCodes
    *  状态Code集合
    *
    * @return string[]|null
    */
    public function getStatusCodes()
    {
        return $this->container['statusCodes'];
    }

    /**
    * Sets statusCodes
    *
    * @param string[]|null $statusCodes 状态Code集合
    *
    * @return $this
    */
    public function setStatusCodes($statusCodes)
    {
        $this->container['statusCodes'] = $statusCodes;
        return $this;
    }

    /**
    * Gets rankIds
    *  用例等级ID集合
    *
    * @return string[]|null
    */
    public function getRankIds()
    {
        return $this->container['rankIds'];
    }

    /**
    * Sets rankIds
    *
    * @param string[]|null $rankIds 用例等级ID集合
    *
    * @return $this
    */
    public function setRankIds($rankIds)
    {
        $this->container['rankIds'] = $rankIds;
        return $this;
    }

    /**
    * Gets moduleIds
    *  模块ID集合
    *
    * @return string[]|null
    */
    public function getModuleIds()
    {
        return $this->container['moduleIds'];
    }

    /**
    * Sets moduleIds
    *
    * @param string[]|null $moduleIds 模块ID集合
    *
    * @return $this
    */
    public function setModuleIds($moduleIds)
    {
        $this->container['moduleIds'] = $moduleIds;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字查询，用例名或编号
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字查询，用例名或编号
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets name
    *  用例名称
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
    * @param string|null $name 用例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets number
    *  用例编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 用例编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortType
    *  排序方式
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序方式
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页数
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 当前页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets stageType
    *  阶段过程（2：测试设计，3：测试执行，4：质量报告）
    *
    * @return int|null
    */
    public function getStageType()
    {
        return $this->container['stageType'];
    }

    /**
    * Sets stageType
    *
    * @param int|null $stageType 阶段过程（2：测试设计，3：测试执行，4：质量报告）
    *
    * @return $this
    */
    public function setStageType($stageType)
    {
        $this->container['stageType'] = $stageType;
        return $this;
    }

    /**
    * Gets featureUri
    *  目录URI
    *
    * @return string|null
    */
    public function getFeatureUri()
    {
        return $this->container['featureUri'];
    }

    /**
    * Sets featureUri
    *
    * @param string|null $featureUri 目录URI
    *
    * @return $this
    */
    public function setFeatureUri($featureUri)
    {
        $this->container['featureUri'] = $featureUri;
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

