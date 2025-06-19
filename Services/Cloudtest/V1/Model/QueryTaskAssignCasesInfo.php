<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTaskAssignCasesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTaskAssignCasesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stage  测试用例在任务中的阶段
    * owners  处理人过滤数组
    * pageNo  页码
    * pageSize  页数量
    * results  结果过滤
    * status  状态过滤
    * versionUri  分支/迭代uri
    * releaseDev  任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    * sortField  排序字段
    * sortType  排序方法
    * featureUri  特性目录URI
    * taskResultUri  测试套结果uri
    * rankIds  用例等级ID集合
    * keyWord  关键字
    * issueId  需求id
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * selectAllPages  是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    * isAvailable  用例是否可用
    * isScriptExist  用例脚本字段是否有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stage' => 'int',
            'owners' => 'string[]',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'results' => 'string[]',
            'status' => 'string[]',
            'versionUri' => 'string',
            'releaseDev' => 'string',
            'sortField' => 'string',
            'sortType' => 'string',
            'featureUri' => 'string',
            'taskResultUri' => 'string',
            'rankIds' => 'int[]',
            'keyWord' => 'string',
            'issueId' => 'string',
            'associatedIssue' => 'bool',
            'selectAllPages' => 'bool',
            'isAvailable' => 'bool',
            'isScriptExist' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stage  测试用例在任务中的阶段
    * owners  处理人过滤数组
    * pageNo  页码
    * pageSize  页数量
    * results  结果过滤
    * status  状态过滤
    * versionUri  分支/迭代uri
    * releaseDev  任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    * sortField  排序字段
    * sortType  排序方法
    * featureUri  特性目录URI
    * taskResultUri  测试套结果uri
    * rankIds  用例等级ID集合
    * keyWord  关键字
    * issueId  需求id
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * selectAllPages  是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    * isAvailable  用例是否可用
    * isScriptExist  用例脚本字段是否有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stage' => 'int32',
        'owners' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'results' => null,
        'status' => null,
        'versionUri' => null,
        'releaseDev' => null,
        'sortField' => null,
        'sortType' => null,
        'featureUri' => null,
        'taskResultUri' => null,
        'rankIds' => 'int32',
        'keyWord' => null,
        'issueId' => null,
        'associatedIssue' => null,
        'selectAllPages' => null,
        'isAvailable' => null,
        'isScriptExist' => null
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
    * stage  测试用例在任务中的阶段
    * owners  处理人过滤数组
    * pageNo  页码
    * pageSize  页数量
    * results  结果过滤
    * status  状态过滤
    * versionUri  分支/迭代uri
    * releaseDev  任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    * sortField  排序字段
    * sortType  排序方法
    * featureUri  特性目录URI
    * taskResultUri  测试套结果uri
    * rankIds  用例等级ID集合
    * keyWord  关键字
    * issueId  需求id
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * selectAllPages  是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    * isAvailable  用例是否可用
    * isScriptExist  用例脚本字段是否有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stage' => 'stage',
            'owners' => 'owners',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'results' => 'results',
            'status' => 'status',
            'versionUri' => 'version_uri',
            'releaseDev' => 'release_dev',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'featureUri' => 'feature_uri',
            'taskResultUri' => 'task_result_uri',
            'rankIds' => 'rank_ids',
            'keyWord' => 'key_word',
            'issueId' => 'issue_id',
            'associatedIssue' => 'associated_issue',
            'selectAllPages' => 'select_all_pages',
            'isAvailable' => 'is_available',
            'isScriptExist' => 'is_script_exist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stage  测试用例在任务中的阶段
    * owners  处理人过滤数组
    * pageNo  页码
    * pageSize  页数量
    * results  结果过滤
    * status  状态过滤
    * versionUri  分支/迭代uri
    * releaseDev  任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    * sortField  排序字段
    * sortType  排序方法
    * featureUri  特性目录URI
    * taskResultUri  测试套结果uri
    * rankIds  用例等级ID集合
    * keyWord  关键字
    * issueId  需求id
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * selectAllPages  是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    * isAvailable  用例是否可用
    * isScriptExist  用例脚本字段是否有值
    *
    * @var string[]
    */
    protected static $setters = [
            'stage' => 'setStage',
            'owners' => 'setOwners',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'results' => 'setResults',
            'status' => 'setStatus',
            'versionUri' => 'setVersionUri',
            'releaseDev' => 'setReleaseDev',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'featureUri' => 'setFeatureUri',
            'taskResultUri' => 'setTaskResultUri',
            'rankIds' => 'setRankIds',
            'keyWord' => 'setKeyWord',
            'issueId' => 'setIssueId',
            'associatedIssue' => 'setAssociatedIssue',
            'selectAllPages' => 'setSelectAllPages',
            'isAvailable' => 'setIsAvailable',
            'isScriptExist' => 'setIsScriptExist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stage  测试用例在任务中的阶段
    * owners  处理人过滤数组
    * pageNo  页码
    * pageSize  页数量
    * results  结果过滤
    * status  状态过滤
    * versionUri  分支/迭代uri
    * releaseDev  任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    * sortField  排序字段
    * sortType  排序方法
    * featureUri  特性目录URI
    * taskResultUri  测试套结果uri
    * rankIds  用例等级ID集合
    * keyWord  关键字
    * issueId  需求id
    * associatedIssue  是否关联需求（null：不限，false：未关联，true：已关联）
    * selectAllPages  是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    * isAvailable  用例是否可用
    * isScriptExist  用例脚本字段是否有值
    *
    * @var string[]
    */
    protected static $getters = [
            'stage' => 'getStage',
            'owners' => 'getOwners',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'results' => 'getResults',
            'status' => 'getStatus',
            'versionUri' => 'getVersionUri',
            'releaseDev' => 'getReleaseDev',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'featureUri' => 'getFeatureUri',
            'taskResultUri' => 'getTaskResultUri',
            'rankIds' => 'getRankIds',
            'keyWord' => 'getKeyWord',
            'issueId' => 'getIssueId',
            'associatedIssue' => 'getAssociatedIssue',
            'selectAllPages' => 'getSelectAllPages',
            'isAvailable' => 'getIsAvailable',
            'isScriptExist' => 'getIsScriptExist'
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
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['owners'] = isset($data['owners']) ? $data['owners'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['featureUri'] = isset($data['featureUri']) ? $data['featureUri'] : null;
        $this->container['taskResultUri'] = isset($data['taskResultUri']) ? $data['taskResultUri'] : null;
        $this->container['rankIds'] = isset($data['rankIds']) ? $data['rankIds'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['associatedIssue'] = isset($data['associatedIssue']) ? $data['associatedIssue'] : null;
        $this->container['selectAllPages'] = isset($data['selectAllPages']) ? $data['selectAllPages'] : null;
        $this->container['isAvailable'] = isset($data['isAvailable']) ? $data['isAvailable'] : null;
        $this->container['isScriptExist'] = isset($data['isScriptExist']) ? $data['isScriptExist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets stage
    *  测试用例在任务中的阶段
    *
    * @return int|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param int|null $stage 测试用例在任务中的阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets owners
    *  处理人过滤数组
    *
    * @return string[]|null
    */
    public function getOwners()
    {
        return $this->container['owners'];
    }

    /**
    * Sets owners
    *
    * @param string[]|null $owners 处理人过滤数组
    *
    * @return $this
    */
    public function setOwners($owners)
    {
        $this->container['owners'] = $owners;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码
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
    * @param int|null $pageNo 页码
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
    *  页数量
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
    * @param int|null $pageSize 页数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets results
    *  结果过滤
    *
    * @return string[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param string[]|null $results 结果过滤
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
        return $this;
    }

    /**
    * Gets status
    *  状态过滤
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 状态过滤
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支/迭代uri
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
    * @param string|null $versionUri 分支/迭代uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets releaseDev
    *  任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 任务版本过滤条件，影响关联任务的结果查询，查询当前任务版本下的用例最新结果
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
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
    *  排序方法
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
    * @param string|null $sortType 排序方法
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets featureUri
    *  特性目录URI
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
    * @param string|null $featureUri 特性目录URI
    *
    * @return $this
    */
    public function setFeatureUri($featureUri)
    {
        $this->container['featureUri'] = $featureUri;
        return $this;
    }

    /**
    * Gets taskResultUri
    *  测试套结果uri
    *
    * @return string|null
    */
    public function getTaskResultUri()
    {
        return $this->container['taskResultUri'];
    }

    /**
    * Sets taskResultUri
    *
    * @param string|null $taskResultUri 测试套结果uri
    *
    * @return $this
    */
    public function setTaskResultUri($taskResultUri)
    {
        $this->container['taskResultUri'] = $taskResultUri;
        return $this;
    }

    /**
    * Gets rankIds
    *  用例等级ID集合
    *
    * @return int[]|null
    */
    public function getRankIds()
    {
        return $this->container['rankIds'];
    }

    /**
    * Sets rankIds
    *
    * @param int[]|null $rankIds 用例等级ID集合
    *
    * @return $this
    */
    public function setRankIds($rankIds)
    {
        $this->container['rankIds'] = $rankIds;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets issueId
    *  需求id
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 需求id
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets associatedIssue
    *  是否关联需求（null：不限，false：未关联，true：已关联）
    *
    * @return bool|null
    */
    public function getAssociatedIssue()
    {
        return $this->container['associatedIssue'];
    }

    /**
    * Sets associatedIssue
    *
    * @param bool|null $associatedIssue 是否关联需求（null：不限，false：未关联，true：已关联）
    *
    * @return $this
    */
    public function setAssociatedIssue($associatedIssue)
    {
        $this->container['associatedIssue'] = $associatedIssue;
        return $this;
    }

    /**
    * Gets selectAllPages
    *  是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    *
    * @return bool|null
    */
    public function getSelectAllPages()
    {
        return $this->container['selectAllPages'];
    }

    /**
    * Sets selectAllPages
    *
    * @param bool|null $selectAllPages 是否全选所有页（null：不全选，false：不全选，true：全选），用于任务批量执行结果功能，只返回用例uri，不返回其他信息
    *
    * @return $this
    */
    public function setSelectAllPages($selectAllPages)
    {
        $this->container['selectAllPages'] = $selectAllPages;
        return $this;
    }

    /**
    * Gets isAvailable
    *  用例是否可用
    *
    * @return bool|null
    */
    public function getIsAvailable()
    {
        return $this->container['isAvailable'];
    }

    /**
    * Sets isAvailable
    *
    * @param bool|null $isAvailable 用例是否可用
    *
    * @return $this
    */
    public function setIsAvailable($isAvailable)
    {
        $this->container['isAvailable'] = $isAvailable;
        return $this;
    }

    /**
    * Gets isScriptExist
    *  用例脚本字段是否有值
    *
    * @return bool|null
    */
    public function getIsScriptExist()
    {
        return $this->container['isScriptExist'];
    }

    /**
    * Sets isScriptExist
    *
    * @param bool|null $isScriptExist 用例脚本字段是否有值
    *
    * @return $this
    */
    public function setIsScriptExist($isScriptExist)
    {
        $this->container['isScriptExist'] = $isScriptExist;
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

