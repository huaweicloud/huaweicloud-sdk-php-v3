<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelineQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelineQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectIds  项目ID列表
    * componentId  组件ID
    * name  流水线名称
    * status  状态
    * isPublish  是否为变更流水线
    * creatorIds  创建人ID列表
    * executorIds  执行人ID列表
    * startTime  开始时间
    * endTime  结束时间
    * offset  起始偏移
    * limit  查询数量
    * sortKey  排序字段名称
    * sortDir  排序规则
    * groupPathId  流水线分组ID
    * queryNew  是否只查询新版流水线
    * byGroup  是否分组查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectIds' => 'string[]',
            'componentId' => 'string',
            'name' => 'string',
            'status' => 'string[]',
            'isPublish' => 'bool',
            'creatorIds' => 'string[]',
            'executorIds' => 'string[]',
            'startTime' => 'string',
            'endTime' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'groupPathId' => 'string',
            'queryNew' => 'bool',
            'byGroup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectIds  项目ID列表
    * componentId  组件ID
    * name  流水线名称
    * status  状态
    * isPublish  是否为变更流水线
    * creatorIds  创建人ID列表
    * executorIds  执行人ID列表
    * startTime  开始时间
    * endTime  结束时间
    * offset  起始偏移
    * limit  查询数量
    * sortKey  排序字段名称
    * sortDir  排序规则
    * groupPathId  流水线分组ID
    * queryNew  是否只查询新版流水线
    * byGroup  是否分组查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectIds' => null,
        'componentId' => null,
        'name' => null,
        'status' => null,
        'isPublish' => null,
        'creatorIds' => null,
        'executorIds' => null,
        'startTime' => null,
        'endTime' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null,
        'groupPathId' => null,
        'queryNew' => null,
        'byGroup' => null
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
    * projectIds  项目ID列表
    * componentId  组件ID
    * name  流水线名称
    * status  状态
    * isPublish  是否为变更流水线
    * creatorIds  创建人ID列表
    * executorIds  执行人ID列表
    * startTime  开始时间
    * endTime  结束时间
    * offset  起始偏移
    * limit  查询数量
    * sortKey  排序字段名称
    * sortDir  排序规则
    * groupPathId  流水线分组ID
    * queryNew  是否只查询新版流水线
    * byGroup  是否分组查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectIds' => 'project_ids',
            'componentId' => 'component_id',
            'name' => 'name',
            'status' => 'status',
            'isPublish' => 'is_publish',
            'creatorIds' => 'creator_ids',
            'executorIds' => 'executor_ids',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'groupPathId' => 'group_path_id',
            'queryNew' => 'query_new',
            'byGroup' => 'by_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectIds  项目ID列表
    * componentId  组件ID
    * name  流水线名称
    * status  状态
    * isPublish  是否为变更流水线
    * creatorIds  创建人ID列表
    * executorIds  执行人ID列表
    * startTime  开始时间
    * endTime  结束时间
    * offset  起始偏移
    * limit  查询数量
    * sortKey  排序字段名称
    * sortDir  排序规则
    * groupPathId  流水线分组ID
    * queryNew  是否只查询新版流水线
    * byGroup  是否分组查询
    *
    * @var string[]
    */
    protected static $setters = [
            'projectIds' => 'setProjectIds',
            'componentId' => 'setComponentId',
            'name' => 'setName',
            'status' => 'setStatus',
            'isPublish' => 'setIsPublish',
            'creatorIds' => 'setCreatorIds',
            'executorIds' => 'setExecutorIds',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'groupPathId' => 'setGroupPathId',
            'queryNew' => 'setQueryNew',
            'byGroup' => 'setByGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectIds  项目ID列表
    * componentId  组件ID
    * name  流水线名称
    * status  状态
    * isPublish  是否为变更流水线
    * creatorIds  创建人ID列表
    * executorIds  执行人ID列表
    * startTime  开始时间
    * endTime  结束时间
    * offset  起始偏移
    * limit  查询数量
    * sortKey  排序字段名称
    * sortDir  排序规则
    * groupPathId  流水线分组ID
    * queryNew  是否只查询新版流水线
    * byGroup  是否分组查询
    *
    * @var string[]
    */
    protected static $getters = [
            'projectIds' => 'getProjectIds',
            'componentId' => 'getComponentId',
            'name' => 'getName',
            'status' => 'getStatus',
            'isPublish' => 'getIsPublish',
            'creatorIds' => 'getCreatorIds',
            'executorIds' => 'getExecutorIds',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'groupPathId' => 'getGroupPathId',
            'queryNew' => 'getQueryNew',
            'byGroup' => 'getByGroup'
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
        $this->container['projectIds'] = isset($data['projectIds']) ? $data['projectIds'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['executorIds'] = isset($data['executorIds']) ? $data['executorIds'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['groupPathId'] = isset($data['groupPathId']) ? $data['groupPathId'] : null;
        $this->container['queryNew'] = isset($data['queryNew']) ? $data['queryNew'] : null;
        $this->container['byGroup'] = isset($data['byGroup']) ? $data['byGroup'] : null;
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
    * Gets projectIds
    *  项目ID列表
    *
    * @return string[]|null
    */
    public function getProjectIds()
    {
        return $this->container['projectIds'];
    }

    /**
    * Sets projectIds
    *
    * @param string[]|null $projectIds 项目ID列表
    *
    * @return $this
    */
    public function setProjectIds($projectIds)
    {
        $this->container['projectIds'] = $projectIds;
        return $this;
    }

    /**
    * Gets componentId
    *  组件ID
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件ID
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets name
    *  流水线名称
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
    * @param string|null $name 流水线名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string[]|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isPublish
    *  是否为变更流水线
    *
    * @return bool|null
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool|null $isPublish 是否为变更流水线
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets creatorIds
    *  创建人ID列表
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
    * @param string[]|null $creatorIds 创建人ID列表
    *
    * @return $this
    */
    public function setCreatorIds($creatorIds)
    {
        $this->container['creatorIds'] = $creatorIds;
        return $this;
    }

    /**
    * Gets executorIds
    *  执行人ID列表
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
    * @param string[]|null $executorIds 执行人ID列表
    *
    * @return $this
    */
    public function setExecutorIds($executorIds)
    {
        $this->container['executorIds'] = $executorIds;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  起始偏移
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
    * @param int|null $offset 起始偏移
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询数量
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
    * @param int|null $limit 查询数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段名称
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段名称
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序规则
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序规则
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets groupPathId
    *  流水线分组ID
    *
    * @return string|null
    */
    public function getGroupPathId()
    {
        return $this->container['groupPathId'];
    }

    /**
    * Sets groupPathId
    *
    * @param string|null $groupPathId 流水线分组ID
    *
    * @return $this
    */
    public function setGroupPathId($groupPathId)
    {
        $this->container['groupPathId'] = $groupPathId;
        return $this;
    }

    /**
    * Gets queryNew
    *  是否只查询新版流水线
    *
    * @return bool|null
    */
    public function getQueryNew()
    {
        return $this->container['queryNew'];
    }

    /**
    * Sets queryNew
    *
    * @param bool|null $queryNew 是否只查询新版流水线
    *
    * @return $this
    */
    public function setQueryNew($queryNew)
    {
        $this->container['queryNew'] = $queryNew;
        return $this;
    }

    /**
    * Gets byGroup
    *  是否分组查询
    *
    * @return bool|null
    */
    public function getByGroup()
    {
        return $this->container['byGroup'];
    }

    /**
    * Sets byGroup
    *
    * @param bool|null $byGroup 是否分组查询
    *
    * @return $this
    */
    public function setByGroup($byGroup)
    {
        $this->container['byGroup'] = $byGroup;
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

