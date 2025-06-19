<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TasksQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TasksQueryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uris  测试任务URI集合
    * keyword  关键字查询，任务名或编号
    * tags  标签集合
    * own  是否是我的
    * serviceType  服务类型
    * releaseDevList  发布版本号集合
    * resultCodes  结果Code集合
    * statusCodes  状态Code集合
    * ownerIds  责任人ID集合
    * executorIds  执行者ID集合
    * creatorIds  创建者ID集合
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * isPollingQuery  是否轮询查询
    * isQueryAssociatedCaseList  是否获取关联用例列表
    * planStartStartTimestamp  计划开始时间过滤起始时间戳
    * planStartEndTimestamp  计划开始时间过滤结束时间戳
    * planEndStartTimestamp  计划结束时间过滤起始时间戳
    * planEndEndTimestamp  计划结束时间过滤结束时间戳
    * expirationStatusList  测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uris' => 'string[]',
            'keyword' => 'string',
            'tags' => 'string[]',
            'own' => 'bool',
            'serviceType' => 'int',
            'releaseDevList' => 'string[]',
            'resultCodes' => 'string[]',
            'statusCodes' => 'string[]',
            'ownerIds' => 'string[]',
            'executorIds' => 'string[]',
            'creatorIds' => 'string[]',
            'sortField' => 'string',
            'sortType' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'isPollingQuery' => 'bool',
            'isQueryAssociatedCaseList' => 'bool',
            'planStartStartTimestamp' => 'int',
            'planStartEndTimestamp' => 'int',
            'planEndStartTimestamp' => 'int',
            'planEndEndTimestamp' => 'int',
            'expirationStatusList' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uris  测试任务URI集合
    * keyword  关键字查询，任务名或编号
    * tags  标签集合
    * own  是否是我的
    * serviceType  服务类型
    * releaseDevList  发布版本号集合
    * resultCodes  结果Code集合
    * statusCodes  状态Code集合
    * ownerIds  责任人ID集合
    * executorIds  执行者ID集合
    * creatorIds  创建者ID集合
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * isPollingQuery  是否轮询查询
    * isQueryAssociatedCaseList  是否获取关联用例列表
    * planStartStartTimestamp  计划开始时间过滤起始时间戳
    * planStartEndTimestamp  计划开始时间过滤结束时间戳
    * planEndStartTimestamp  计划结束时间过滤起始时间戳
    * planEndEndTimestamp  计划结束时间过滤结束时间戳
    * expirationStatusList  测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uris' => null,
        'keyword' => null,
        'tags' => null,
        'own' => null,
        'serviceType' => 'int32',
        'releaseDevList' => null,
        'resultCodes' => null,
        'statusCodes' => null,
        'ownerIds' => null,
        'executorIds' => null,
        'creatorIds' => null,
        'sortField' => null,
        'sortType' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'isPollingQuery' => null,
        'isQueryAssociatedCaseList' => null,
        'planStartStartTimestamp' => 'int64',
        'planStartEndTimestamp' => 'int64',
        'planEndStartTimestamp' => 'int64',
        'planEndEndTimestamp' => 'int64',
        'expirationStatusList' => 'int32'
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
    * uris  测试任务URI集合
    * keyword  关键字查询，任务名或编号
    * tags  标签集合
    * own  是否是我的
    * serviceType  服务类型
    * releaseDevList  发布版本号集合
    * resultCodes  结果Code集合
    * statusCodes  状态Code集合
    * ownerIds  责任人ID集合
    * executorIds  执行者ID集合
    * creatorIds  创建者ID集合
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * isPollingQuery  是否轮询查询
    * isQueryAssociatedCaseList  是否获取关联用例列表
    * planStartStartTimestamp  计划开始时间过滤起始时间戳
    * planStartEndTimestamp  计划开始时间过滤结束时间戳
    * planEndStartTimestamp  计划结束时间过滤起始时间戳
    * planEndEndTimestamp  计划结束时间过滤结束时间戳
    * expirationStatusList  测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uris' => 'uris',
            'keyword' => 'keyword',
            'tags' => 'tags',
            'own' => 'own',
            'serviceType' => 'service_type',
            'releaseDevList' => 'release_dev_list',
            'resultCodes' => 'result_codes',
            'statusCodes' => 'status_codes',
            'ownerIds' => 'owner_ids',
            'executorIds' => 'executor_ids',
            'creatorIds' => 'creator_ids',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'isPollingQuery' => 'is_polling_query',
            'isQueryAssociatedCaseList' => 'is_query_associated_case_list',
            'planStartStartTimestamp' => 'plan_start_start_timestamp',
            'planStartEndTimestamp' => 'plan_start_end_timestamp',
            'planEndStartTimestamp' => 'plan_end_start_timestamp',
            'planEndEndTimestamp' => 'plan_end_end_timestamp',
            'expirationStatusList' => 'expiration_status_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uris  测试任务URI集合
    * keyword  关键字查询，任务名或编号
    * tags  标签集合
    * own  是否是我的
    * serviceType  服务类型
    * releaseDevList  发布版本号集合
    * resultCodes  结果Code集合
    * statusCodes  状态Code集合
    * ownerIds  责任人ID集合
    * executorIds  执行者ID集合
    * creatorIds  创建者ID集合
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * isPollingQuery  是否轮询查询
    * isQueryAssociatedCaseList  是否获取关联用例列表
    * planStartStartTimestamp  计划开始时间过滤起始时间戳
    * planStartEndTimestamp  计划开始时间过滤结束时间戳
    * planEndStartTimestamp  计划结束时间过滤起始时间戳
    * planEndEndTimestamp  计划结束时间过滤结束时间戳
    * expirationStatusList  测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @var string[]
    */
    protected static $setters = [
            'uris' => 'setUris',
            'keyword' => 'setKeyword',
            'tags' => 'setTags',
            'own' => 'setOwn',
            'serviceType' => 'setServiceType',
            'releaseDevList' => 'setReleaseDevList',
            'resultCodes' => 'setResultCodes',
            'statusCodes' => 'setStatusCodes',
            'ownerIds' => 'setOwnerIds',
            'executorIds' => 'setExecutorIds',
            'creatorIds' => 'setCreatorIds',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'isPollingQuery' => 'setIsPollingQuery',
            'isQueryAssociatedCaseList' => 'setIsQueryAssociatedCaseList',
            'planStartStartTimestamp' => 'setPlanStartStartTimestamp',
            'planStartEndTimestamp' => 'setPlanStartEndTimestamp',
            'planEndStartTimestamp' => 'setPlanEndStartTimestamp',
            'planEndEndTimestamp' => 'setPlanEndEndTimestamp',
            'expirationStatusList' => 'setExpirationStatusList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uris  测试任务URI集合
    * keyword  关键字查询，任务名或编号
    * tags  标签集合
    * own  是否是我的
    * serviceType  服务类型
    * releaseDevList  发布版本号集合
    * resultCodes  结果Code集合
    * statusCodes  状态Code集合
    * ownerIds  责任人ID集合
    * executorIds  执行者ID集合
    * creatorIds  创建者ID集合
    * sortField  排序字段
    * sortType  排序方式
    * pageNo  当前页数
    * pageSize  每页条数
    * isPollingQuery  是否轮询查询
    * isQueryAssociatedCaseList  是否获取关联用例列表
    * planStartStartTimestamp  计划开始时间过滤起始时间戳
    * planStartEndTimestamp  计划开始时间过滤结束时间戳
    * planEndStartTimestamp  计划结束时间过滤起始时间戳
    * planEndEndTimestamp  计划结束时间过滤结束时间戳
    * expirationStatusList  测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @var string[]
    */
    protected static $getters = [
            'uris' => 'getUris',
            'keyword' => 'getKeyword',
            'tags' => 'getTags',
            'own' => 'getOwn',
            'serviceType' => 'getServiceType',
            'releaseDevList' => 'getReleaseDevList',
            'resultCodes' => 'getResultCodes',
            'statusCodes' => 'getStatusCodes',
            'ownerIds' => 'getOwnerIds',
            'executorIds' => 'getExecutorIds',
            'creatorIds' => 'getCreatorIds',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'isPollingQuery' => 'getIsPollingQuery',
            'isQueryAssociatedCaseList' => 'getIsQueryAssociatedCaseList',
            'planStartStartTimestamp' => 'getPlanStartStartTimestamp',
            'planStartEndTimestamp' => 'getPlanStartEndTimestamp',
            'planEndStartTimestamp' => 'getPlanEndStartTimestamp',
            'planEndEndTimestamp' => 'getPlanEndEndTimestamp',
            'expirationStatusList' => 'getExpirationStatusList'
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
        $this->container['uris'] = isset($data['uris']) ? $data['uris'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['own'] = isset($data['own']) ? $data['own'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['releaseDevList'] = isset($data['releaseDevList']) ? $data['releaseDevList'] : null;
        $this->container['resultCodes'] = isset($data['resultCodes']) ? $data['resultCodes'] : null;
        $this->container['statusCodes'] = isset($data['statusCodes']) ? $data['statusCodes'] : null;
        $this->container['ownerIds'] = isset($data['ownerIds']) ? $data['ownerIds'] : null;
        $this->container['executorIds'] = isset($data['executorIds']) ? $data['executorIds'] : null;
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['isPollingQuery'] = isset($data['isPollingQuery']) ? $data['isPollingQuery'] : null;
        $this->container['isQueryAssociatedCaseList'] = isset($data['isQueryAssociatedCaseList']) ? $data['isQueryAssociatedCaseList'] : null;
        $this->container['planStartStartTimestamp'] = isset($data['planStartStartTimestamp']) ? $data['planStartStartTimestamp'] : null;
        $this->container['planStartEndTimestamp'] = isset($data['planStartEndTimestamp']) ? $data['planStartEndTimestamp'] : null;
        $this->container['planEndStartTimestamp'] = isset($data['planEndStartTimestamp']) ? $data['planEndStartTimestamp'] : null;
        $this->container['planEndEndTimestamp'] = isset($data['planEndEndTimestamp']) ? $data['planEndEndTimestamp'] : null;
        $this->container['expirationStatusList'] = isset($data['expirationStatusList']) ? $data['expirationStatusList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
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
    * Gets uris
    *  测试任务URI集合
    *
    * @return string[]|null
    */
    public function getUris()
    {
        return $this->container['uris'];
    }

    /**
    * Sets uris
    *
    * @param string[]|null $uris 测试任务URI集合
    *
    * @return $this
    */
    public function setUris($uris)
    {
        $this->container['uris'] = $uris;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字查询，任务名或编号
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
    * @param string|null $keyword 关键字查询，任务名或编号
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets tags
    *  标签集合
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签集合
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets own
    *  是否是我的
    *
    * @return bool|null
    */
    public function getOwn()
    {
        return $this->container['own'];
    }

    /**
    * Sets own
    *
    * @param bool|null $own 是否是我的
    *
    * @return $this
    */
    public function setOwn($own)
    {
        $this->container['own'] = $own;
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
    * Gets releaseDevList
    *  发布版本号集合
    *
    * @return string[]|null
    */
    public function getReleaseDevList()
    {
        return $this->container['releaseDevList'];
    }

    /**
    * Sets releaseDevList
    *
    * @param string[]|null $releaseDevList 发布版本号集合
    *
    * @return $this
    */
    public function setReleaseDevList($releaseDevList)
    {
        $this->container['releaseDevList'] = $releaseDevList;
        return $this;
    }

    /**
    * Gets resultCodes
    *  结果Code集合
    *
    * @return string[]|null
    */
    public function getResultCodes()
    {
        return $this->container['resultCodes'];
    }

    /**
    * Sets resultCodes
    *
    * @param string[]|null $resultCodes 结果Code集合
    *
    * @return $this
    */
    public function setResultCodes($resultCodes)
    {
        $this->container['resultCodes'] = $resultCodes;
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
    * Gets ownerIds
    *  责任人ID集合
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
    * @param string[]|null $ownerIds 责任人ID集合
    *
    * @return $this
    */
    public function setOwnerIds($ownerIds)
    {
        $this->container['ownerIds'] = $ownerIds;
        return $this;
    }

    /**
    * Gets executorIds
    *  执行者ID集合
    *
    * @return string[]|null
    */
    public function getExecutorIds()
    {
        return $this->container['executorIds'];
    }

    /**
    * Sets executorIds
    *
    * @param string[]|null $executorIds 执行者ID集合
    *
    * @return $this
    */
    public function setExecutorIds($executorIds)
    {
        $this->container['executorIds'] = $executorIds;
        return $this;
    }

    /**
    * Gets creatorIds
    *  创建者ID集合
    *
    * @return string[]|null
    */
    public function getCreatorIds()
    {
        return $this->container['creatorIds'];
    }

    /**
    * Sets creatorIds
    *
    * @param string[]|null $creatorIds 创建者ID集合
    *
    * @return $this
    */
    public function setCreatorIds($creatorIds)
    {
        $this->container['creatorIds'] = $creatorIds;
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
    * Gets isPollingQuery
    *  是否轮询查询
    *
    * @return bool|null
    */
    public function getIsPollingQuery()
    {
        return $this->container['isPollingQuery'];
    }

    /**
    * Sets isPollingQuery
    *
    * @param bool|null $isPollingQuery 是否轮询查询
    *
    * @return $this
    */
    public function setIsPollingQuery($isPollingQuery)
    {
        $this->container['isPollingQuery'] = $isPollingQuery;
        return $this;
    }

    /**
    * Gets isQueryAssociatedCaseList
    *  是否获取关联用例列表
    *
    * @return bool|null
    */
    public function getIsQueryAssociatedCaseList()
    {
        return $this->container['isQueryAssociatedCaseList'];
    }

    /**
    * Sets isQueryAssociatedCaseList
    *
    * @param bool|null $isQueryAssociatedCaseList 是否获取关联用例列表
    *
    * @return $this
    */
    public function setIsQueryAssociatedCaseList($isQueryAssociatedCaseList)
    {
        $this->container['isQueryAssociatedCaseList'] = $isQueryAssociatedCaseList;
        return $this;
    }

    /**
    * Gets planStartStartTimestamp
    *  计划开始时间过滤起始时间戳
    *
    * @return int|null
    */
    public function getPlanStartStartTimestamp()
    {
        return $this->container['planStartStartTimestamp'];
    }

    /**
    * Sets planStartStartTimestamp
    *
    * @param int|null $planStartStartTimestamp 计划开始时间过滤起始时间戳
    *
    * @return $this
    */
    public function setPlanStartStartTimestamp($planStartStartTimestamp)
    {
        $this->container['planStartStartTimestamp'] = $planStartStartTimestamp;
        return $this;
    }

    /**
    * Gets planStartEndTimestamp
    *  计划开始时间过滤结束时间戳
    *
    * @return int|null
    */
    public function getPlanStartEndTimestamp()
    {
        return $this->container['planStartEndTimestamp'];
    }

    /**
    * Sets planStartEndTimestamp
    *
    * @param int|null $planStartEndTimestamp 计划开始时间过滤结束时间戳
    *
    * @return $this
    */
    public function setPlanStartEndTimestamp($planStartEndTimestamp)
    {
        $this->container['planStartEndTimestamp'] = $planStartEndTimestamp;
        return $this;
    }

    /**
    * Gets planEndStartTimestamp
    *  计划结束时间过滤起始时间戳
    *
    * @return int|null
    */
    public function getPlanEndStartTimestamp()
    {
        return $this->container['planEndStartTimestamp'];
    }

    /**
    * Sets planEndStartTimestamp
    *
    * @param int|null $planEndStartTimestamp 计划结束时间过滤起始时间戳
    *
    * @return $this
    */
    public function setPlanEndStartTimestamp($planEndStartTimestamp)
    {
        $this->container['planEndStartTimestamp'] = $planEndStartTimestamp;
        return $this;
    }

    /**
    * Gets planEndEndTimestamp
    *  计划结束时间过滤结束时间戳
    *
    * @return int|null
    */
    public function getPlanEndEndTimestamp()
    {
        return $this->container['planEndEndTimestamp'];
    }

    /**
    * Sets planEndEndTimestamp
    *
    * @param int|null $planEndEndTimestamp 计划结束时间过滤结束时间戳
    *
    * @return $this
    */
    public function setPlanEndEndTimestamp($planEndEndTimestamp)
    {
        $this->container['planEndEndTimestamp'] = $planEndEndTimestamp;
        return $this;
    }

    /**
    * Gets expirationStatusList
    *  测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @return int[]|null
    */
    public function getExpirationStatusList()
    {
        return $this->container['expirationStatusList'];
    }

    /**
    * Sets expirationStatusList
    *
    * @param int[]|null $expirationStatusList 测试套超期状态过滤，超期状态值分别为：无状态(null)、未超期(0)、即将超期(1)、已超期(2)、延期完成(3)、按期完成(4)
    *
    * @return $this
    */
    public function setExpirationStatusList($expirationStatusList)
    {
        $this->container['expirationStatusList'] = $expirationStatusList;
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

