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
    * projectId  **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * componentId  **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
    * name  **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * creatorId  **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * groupPathId  **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * byGroup  **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
    * isBanned  **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    * queryNew  **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
    * securityLevelList  **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'projectIds' => 'string[]',
            'componentId' => 'string',
            'name' => 'string',
            'status' => 'string[]',
            'isPublish' => 'bool',
            'creatorId' => 'string',
            'creatorIds' => 'string[]',
            'executorIds' => 'string[]',
            'startTime' => 'string',
            'endTime' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'groupPathId' => 'string',
            'byGroup' => 'bool',
            'isBanned' => 'bool',
            'queryNew' => 'bool',
            'securityLevelList' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * componentId  **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
    * name  **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * creatorId  **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * groupPathId  **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * byGroup  **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
    * isBanned  **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    * queryNew  **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
    * securityLevelList  **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'projectIds' => null,
        'componentId' => null,
        'name' => null,
        'status' => null,
        'isPublish' => null,
        'creatorId' => null,
        'creatorIds' => null,
        'executorIds' => null,
        'startTime' => null,
        'endTime' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null,
        'groupPathId' => null,
        'byGroup' => null,
        'isBanned' => null,
        'queryNew' => null,
        'securityLevelList' => null
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
    * projectId  **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * componentId  **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
    * name  **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * creatorId  **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * groupPathId  **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * byGroup  **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
    * isBanned  **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    * queryNew  **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
    * securityLevelList  **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'projectIds' => 'project_ids',
            'componentId' => 'component_id',
            'name' => 'name',
            'status' => 'status',
            'isPublish' => 'is_publish',
            'creatorId' => 'creator_id',
            'creatorIds' => 'creator_ids',
            'executorIds' => 'executor_ids',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'groupPathId' => 'group_path_id',
            'byGroup' => 'by_group',
            'isBanned' => 'is_banned',
            'queryNew' => 'query_new',
            'securityLevelList' => 'security_level_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * componentId  **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
    * name  **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * creatorId  **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * groupPathId  **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * byGroup  **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
    * isBanned  **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    * queryNew  **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
    * securityLevelList  **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'projectIds' => 'setProjectIds',
            'componentId' => 'setComponentId',
            'name' => 'setName',
            'status' => 'setStatus',
            'isPublish' => 'setIsPublish',
            'creatorId' => 'setCreatorId',
            'creatorIds' => 'setCreatorIds',
            'executorIds' => 'setExecutorIds',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'groupPathId' => 'setGroupPathId',
            'byGroup' => 'setByGroup',
            'isBanned' => 'setIsBanned',
            'queryNew' => 'setQueryNew',
            'securityLevelList' => 'setSecurityLevelList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * projectIds  **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * componentId  **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
    * name  **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    * creatorId  **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * creatorIds  **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * executorIds  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sortKey  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
    * sortDir  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
    * groupPathId  **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * byGroup  **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
    * isBanned  **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    * queryNew  **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
    * securityLevelList  **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'projectIds' => 'getProjectIds',
            'componentId' => 'getComponentId',
            'name' => 'getName',
            'status' => 'getStatus',
            'isPublish' => 'getIsPublish',
            'creatorId' => 'getCreatorId',
            'creatorIds' => 'getCreatorIds',
            'executorIds' => 'getExecutorIds',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'groupPathId' => 'getGroupPathId',
            'byGroup' => 'getByGroup',
            'isBanned' => 'getIsBanned',
            'queryNew' => 'getQueryNew',
            'securityLevelList' => 'getSecurityLevelList'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectIds'] = isset($data['projectIds']) ? $data['projectIds'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorIds'] = isset($data['creatorIds']) ? $data['creatorIds'] : null;
        $this->container['executorIds'] = isset($data['executorIds']) ? $data['executorIds'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['groupPathId'] = isset($data['groupPathId']) ? $data['groupPathId'] : null;
        $this->container['byGroup'] = isset($data['byGroup']) ? $data['byGroup'] : null;
        $this->container['isBanned'] = isset($data['isBanned']) ? $data['isBanned'] : null;
        $this->container['queryNew'] = isset($data['queryNew']) ? $data['queryNew'] : null;
        $this->container['securityLevelList'] = isset($data['securityLevelList']) ? $data['securityLevelList'] : null;
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
    * Gets projectId
    *  **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： CodeArts项目ID。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectIds
    *  **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
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
    * @param string[]|null $projectIds **参数解释**： CodeArts项目ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个项目ID为32位字符，由数字和字母组成。 **默认取值**： 不涉及。
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
    *  **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
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
    * @param string|null $componentId **参数解释**： 微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **约束限制**： 不涉及。 **取值范围**： 32位字符串。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 流水线名称，支持模糊查询。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
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
    * @param string[]|null $status **参数解释**： 流水线状态列表。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：已完成。 - RUNNING：运行中。 - FAILED：失败。 - CANCELED：取消。 - PAUSED：暂停。 - SUSPEND：挂起。 - IGNORED：忽略。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
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
    * @param bool|null $isPublish **参数解释**： 是否为变更流水线。 **约束限制**： 不涉及。 **取值范围**： - true：是变更流水线。 - false：非变更流水线。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId **参数解释**： 创建人ID，用户的userId。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorIds
    *  **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
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
    * @param string[]|null $creatorIds **参数解释**： 创建人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
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
    *  **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
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
    * @param string[]|null $executorIds **参数解释**： 执行人ID列表。 **约束限制**： 不涉及。 **取值范围**： 每个ID为32位字符串。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $startTime **参数解释**： 流水线开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 流水线结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $offset **参数解释**： 起始偏移。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $limit **参数解释**： 查询数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
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
    * @param string|null $sortKey **参数解释**： 排序字段名称。 **约束限制**： 不涉及。 **取值范围**： - name：流水线名。 - create_time：创建时间。 - update_time：更新时间。 **默认取值**： 不涉及。
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
    *  **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
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
    * @param string|null $sortDir **参数解释**： 排序规则。 **约束限制**： 不涉及。 **取值范围**： - asc：按排序字段升序。 - desc：按排序字段降序。 **默认取值**： 不涉及。
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
    *  **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $groupPathId **参数解释**： 流水线分组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroupPathId($groupPathId)
    {
        $this->container['groupPathId'] = $groupPathId;
        return $this;
    }

    /**
    * Gets byGroup
    *  **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
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
    * @param bool|null $byGroup **参数解释**： 是否分组查询。 **约束限制**： 不涉及。 **取值范围**： - true：是分组查询。 - false：不是分组查询。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setByGroup($byGroup)
    {
        $this->container['byGroup'] = $byGroup;
        return $this;
    }

    /**
    * Gets isBanned
    *  **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getIsBanned()
    {
        return $this->container['isBanned'];
    }

    /**
    * Sets isBanned
    *
    * @param bool|null $isBanned **参数解释**： 是否包含被禁用的流水线。 **约束限制**： 不涉及。 **取值范围**： - true：包含被禁用的流水线。 - false：不包含被禁用的流水线。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsBanned($isBanned)
    {
        $this->container['isBanned'] = $isBanned;
        return $this;
    }

    /**
    * Gets queryNew
    *  **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
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
    * @param bool|null $queryNew **参数解释**： 是否只查询新版流水线。 **约束限制**： 不涉及。 **取值范围**： - true：只查询新版流水线。 - false：不只查询新版流水线。 **默认取值**： true。
    *
    * @return $this
    */
    public function setQueryNew($queryNew)
    {
        $this->container['queryNew'] = $queryNew;
        return $this;
    }

    /**
    * Gets securityLevelList
    *  **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @return int[]|null
    */
    public function getSecurityLevelList()
    {
        return $this->container['securityLevelList'];
    }

    /**
    * Sets securityLevelList
    *
    * @param int[]|null $securityLevelList **参数解释**： 流水线密集等级。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 零及以上正整数。 0：未设置密级。 1：最低密级。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevelList($securityLevelList)
    {
        $this->container['securityLevelList'] = $securityLevelList;
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

