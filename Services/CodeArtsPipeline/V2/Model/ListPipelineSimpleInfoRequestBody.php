<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelineSimpleInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelineSimpleInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineName  流水线名字。参数存在，则进行模糊匹配
    * projectIds  CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    * creatorIds  创建人id。该参数存在，逗号分隔，id个数取值[0,10]
    * executorIds  执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    * status  流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
    * outcome  流水线结果，标记流水线。error、success、aborted
    * sortKey  用于排序的字段。取值为：pipeline_name,create_time,start_time
    * sortDir  排序类型。asc按排序字段升序，desc按排序字段降序
    * gitUrl  codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
    * limit  每次查询的条目数量。取值[10-50]，默认取值为10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineName' => 'string',
            'projectIds' => 'string',
            'creatorIds' => 'string',
            'executorIds' => 'string',
            'status' => 'string',
            'outcome' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'gitUrl' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineName  流水线名字。参数存在，则进行模糊匹配
    * projectIds  CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    * creatorIds  创建人id。该参数存在，逗号分隔，id个数取值[0,10]
    * executorIds  执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    * status  流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
    * outcome  流水线结果，标记流水线。error、success、aborted
    * sortKey  用于排序的字段。取值为：pipeline_name,create_time,start_time
    * sortDir  排序类型。asc按排序字段升序，desc按排序字段降序
    * gitUrl  codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
    * limit  每次查询的条目数量。取值[10-50]，默认取值为10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineName' => null,
        'projectIds' => null,
        'creatorIds' => null,
        'executorIds' => null,
        'status' => null,
        'outcome' => null,
        'sortKey' => null,
        'sortDir' => null,
        'gitUrl' => null,
        'offset' => null,
        'limit' => null
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
    * pipelineName  流水线名字。参数存在，则进行模糊匹配
    * projectIds  CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    * creatorIds  创建人id。该参数存在，逗号分隔，id个数取值[0,10]
    * executorIds  执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    * status  流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
    * outcome  流水线结果，标记流水线。error、success、aborted
    * sortKey  用于排序的字段。取值为：pipeline_name,create_time,start_time
    * sortDir  排序类型。asc按排序字段升序，desc按排序字段降序
    * gitUrl  codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
    * limit  每次查询的条目数量。取值[10-50]，默认取值为10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineName' => 'pipeline_name',
            'projectIds' => 'project_ids',
            'creatorIds' => 'creator_ids',
            'executorIds' => 'executor_ids',
            'status' => 'status',
            'outcome' => 'outcome',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'gitUrl' => 'git_url',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineName  流水线名字。参数存在，则进行模糊匹配
    * projectIds  CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    * creatorIds  创建人id。该参数存在，逗号分隔，id个数取值[0,10]
    * executorIds  执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    * status  流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
    * outcome  流水线结果，标记流水线。error、success、aborted
    * sortKey  用于排序的字段。取值为：pipeline_name,create_time,start_time
    * sortDir  排序类型。asc按排序字段升序，desc按排序字段降序
    * gitUrl  codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
    * limit  每次查询的条目数量。取值[10-50]，默认取值为10
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineName' => 'setPipelineName',
            'projectIds' => 'setProjectIds',
            'creatorIds' => 'setCreatorIds',
            'executorIds' => 'setExecutorIds',
            'status' => 'setStatus',
            'outcome' => 'setOutcome',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'gitUrl' => 'setGitUrl',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineName  流水线名字。参数存在，则进行模糊匹配
    * projectIds  CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    * creatorIds  创建人id。该参数存在，逗号分隔，id个数取值[0,10]
    * executorIds  执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    * status  流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
    * outcome  流水线结果，标记流水线。error、success、aborted
    * sortKey  用于排序的字段。取值为：pipeline_name,create_time,start_time
    * sortDir  排序类型。asc按排序字段升序，desc按排序字段降序
    * gitUrl  codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
    * limit  每次查询的条目数量。取值[10-50]，默认取值为10
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineName' => 'getPipelineName',
            'projectIds' => 'getProjectIds',
            'creatorIds' => 'getCreatorIds',
            'executorIds' => 'getExecutorIds',
            'status' => 'getStatus',
            'outcome' => 'getOutcome',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'gitUrl' => 'getGitUrl',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
        $this->container['projectIds'] = isset($data['projectIds']) ? $data['projectIds'] : null;
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['executorIds'] = isset($data['executorIds']) ? $data['executorIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    * Gets pipelineName
    *  流水线名字。参数存在，则进行模糊匹配
    *
    * @return string|null
    */
    public function getPipelineName()
    {
        return $this->container['pipelineName'];
    }

    /**
    * Sets pipelineName
    *
    * @param string|null $pipelineName 流水线名字。参数存在，则进行模糊匹配
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
        return $this;
    }

    /**
    * Gets projectIds
    *  CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    *
    * @return string|null
    */
    public function getProjectIds()
    {
        return $this->container['projectIds'];
    }

    /**
    * Sets projectIds
    *
    * @param string|null $projectIds CodeArts项目ids。该参数存在，则获取对应项目下的流水线列表，逗号分隔，id个数取值[0,10]；如果不存在，则获取调用方所属租户的流水线列表
    *
    * @return $this
    */
    public function setProjectIds($projectIds)
    {
        $this->container['projectIds'] = $projectIds;
        return $this;
    }

    /**
    * Gets creatorIds
    *  创建人id。该参数存在，逗号分隔，id个数取值[0,10]
    *
    * @return string|null
    */
    public function getCreatorIds()
    {
        return $this->container['creatorIds'];
    }

    /**
    * Sets creatorIds
    *
    * @param string|null $creatorIds 创建人id。该参数存在，逗号分隔，id个数取值[0,10]
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
    *  执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    *
    * @return string|null
    */
    public function getExecutorIds()
    {
        return $this->container['executorIds'];
    }

    /**
    * Sets executorIds
    *
    * @param string|null $executorIds 执行人id。该参数存在，逗号分隔，id个数取值[0,10]；
    *
    * @return $this
    */
    public function setExecutorIds($executorIds)
    {
        $this->container['executorIds'] = $executorIds;
        return $this;
    }

    /**
    * Gets status
    *  流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
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
    * @param string|null $status 流水线运行状态。取值范围：waiting,running,verifying,handling,suspending,completed
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets outcome
    *  流水线结果，标记流水线。error、success、aborted
    *
    * @return string|null
    */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
    * Sets outcome
    *
    * @param string|null $outcome 流水线结果，标记流水线。error、success、aborted
    *
    * @return $this
    */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;
        return $this;
    }

    /**
    * Gets sortKey
    *  用于排序的字段。取值为：pipeline_name,create_time,start_time
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
    * @param string|null $sortKey 用于排序的字段。取值为：pipeline_name,create_time,start_time
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
    *  排序类型。asc按排序字段升序，desc按排序字段降序
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
    * @param string|null $sortDir 排序类型。asc按排序字段升序，desc按排序字段降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets gitUrl
    *  codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl codehub搜索链接：git@codehub.XXX.git；gitee搜索链接：git@gitee.com.XXX.git；github搜索链接：git@github.com.XXX.git等
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
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
    * @param int|null $offset 偏移量。表示从此偏移量开始查询，offset大于等于0，默认取值为0
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
    *  每次查询的条目数量。取值[10-50]，默认取值为10
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
    * @param int|null $limit 每次查询的条目数量。取值[10-50]，默认取值为10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

