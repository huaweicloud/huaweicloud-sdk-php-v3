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
    * pipelineName  **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
    * outcome  **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * gitUrl  **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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
    * pipelineName  **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
    * outcome  **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * gitUrl  **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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
    * pipelineName  **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
    * outcome  **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * gitUrl  **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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
    * pipelineName  **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
    * outcome  **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * gitUrl  **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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
    * pipelineName  **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
    * outcome  **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * gitUrl  **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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
    *  **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $pipelineName **参数解释**： 流水线名字。查询时进行模糊匹配。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $projectIds **参数解释**： 项目id，有多个值时用逗号分隔，id个数取值[0,10]，非必选。如果该参数有值，则获取对应项目下的流水线列表；如果没有值，则获取用户有权限的所有项目的流水线列表 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $creatorIds **参数解释**： 创建人id，有多个值时用逗号分隔，id个数取值[0,10]，非必选 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $executorIds **参数解释**： 执行人id。有多个值时用逗号分隔，id个数取值[0,10]，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
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
    * @param string|null $status **参数解释**： 流水线运行状态。 **约束限制**： 不涉及。 **取值范围**： - waiting：等待中。 - running：运行中。 - verifying：待审核。 - suspending：挂起。 - completed：执行完成。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
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
    * @param string|null $outcome **参数解释**： 流水线执行结果。 **约束限制**： 不涉及。 **取值范围**： - success：成功。 - error：失败。 - aborted：终止。 **默认取值**： 不涉及。
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
    *  **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $sortKey **参数解释**： 用于排序的字段，非必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
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
    * @param string|null $sortDir **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
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
    *  **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $gitUrl **参数解释**： 代码仓地址。仅支持codehub仓库，如：git@codehub.XXX.git **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
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
    * @param int|null $offset **参数解释**： 偏移量。表示从此偏移量开始查询。 **约束限制**： 不涉及。 **取值范围**： offset大于等于0。 **默认取值**： 不涉及。
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
    *  **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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
    * @param int|null $limit **参数解释**： 每次查询的条目数量。 **约束限制**： 不涉及。 **取值范围**： 取值[10-50]。 **默认取值**： 10。
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

