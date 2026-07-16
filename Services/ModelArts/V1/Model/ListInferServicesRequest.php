<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInferServicesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInferServicesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolName  **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * authType  **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userName  **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    * tags  **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * assetId  **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'poolId' => 'string',
            'poolName' => 'string',
            'sortKey' => 'string',
            'status' => 'string',
            'name' => 'string',
            'authType' => 'string',
            'type' => 'string',
            'description' => 'string',
            'workspaceId' => 'string',
            'userName' => 'string',
            'tags' => 'string',
            'assetId' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'contentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolName  **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * authType  **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userName  **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    * tags  **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * assetId  **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'poolId' => null,
        'poolName' => null,
        'sortKey' => null,
        'status' => null,
        'name' => null,
        'authType' => null,
        'type' => null,
        'description' => null,
        'workspaceId' => null,
        'userName' => null,
        'tags' => null,
        'assetId' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'contentType' => null
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
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolName  **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * authType  **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userName  **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    * tags  **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * assetId  **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'poolId' => 'pool_id',
            'poolName' => 'pool_name',
            'sortKey' => 'sort_key',
            'status' => 'status',
            'name' => 'name',
            'authType' => 'auth_type',
            'type' => 'type',
            'description' => 'description',
            'workspaceId' => 'workspace_id',
            'userName' => 'user_name',
            'tags' => 'tags',
            'assetId' => 'asset_id',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'contentType' => 'Content-Type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolName  **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * authType  **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userName  **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    * tags  **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * assetId  **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'poolId' => 'setPoolId',
            'poolName' => 'setPoolName',
            'sortKey' => 'setSortKey',
            'status' => 'setStatus',
            'name' => 'setName',
            'authType' => 'setAuthType',
            'type' => 'setType',
            'description' => 'setDescription',
            'workspaceId' => 'setWorkspaceId',
            'userName' => 'setUserName',
            'tags' => 'setTags',
            'assetId' => 'setAssetId',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'contentType' => 'setContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolName  **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
    * name  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    * authType  **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    * type  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    * description  **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * userName  **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    * tags  **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * assetId  **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'poolId' => 'getPoolId',
            'poolName' => 'getPoolName',
            'sortKey' => 'getSortKey',
            'status' => 'getStatus',
            'name' => 'getName',
            'authType' => 'getAuthType',
            'type' => 'getType',
            'description' => 'getDescription',
            'workspaceId' => 'getWorkspaceId',
            'userName' => 'getUserName',
            'tags' => 'getTags',
            'assetId' => 'getAssetId',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'contentType' => 'getContentType'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['poolName'] = isset($data['poolName']) ? $data['poolName'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tags']) && !preg_match("/^(?![,|])(?!,$)(?:[a-zA-Z0-9\\u4e00-\\u9fa5\\s_.:\/=+-@]|(?<![,|])[,|](?![,|]))+$/", $this->container['tags'])) {
                $invalidProperties[] = "invalid value for 'tags', must be conform to the pattern /^(?![,|])(?!,$)(?:[a-zA-Z0-9\\u4e00-\\u9fa5\\s_.:\/=+-@]|(?<![,|])[,|](?![,|]))+$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
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
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
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
    * @param string|null $id **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets poolName
    *  **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolName()
    {
        return $this->container['poolName'];
    }

    /**
    * Sets poolName
    *
    * @param string|null $poolName **参数解释：** 资源池name，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPoolName($poolName)
    {
        $this->container['poolName'] = $poolName;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
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
    * @param string|null $sortKey **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
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
    * @param string|null $status **参数解释：** 服务当前状态，查询指定状态的过滤。默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 服务名，用户在[创建服务](CreateInferService.xml)时自定义。 **约束限制：** 服务在删除之前名字不能重复。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets authType
    *  **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType **参数解释：** 认证类型，默认不过滤。 **约束限制：** 不涉及。 **取值范围：** - TOKEN：IAM Token认证。 - API_KEY：API Key认证。 - NONE：无认证。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 推理服务类型。 **约束限制：** 不涉及。 **取值范围：** - REAL_TIME：在线服务。 - ASYNC_REAL_TIME：异步服务。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $description **参数解释：** 服务描述，模糊查询，默认不过滤。由用户[创建服务](CreateInferService.xml)时自行填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释：** 创建者，即创建服务的用户名。 **约束限制：** 不涉及。 **取值范围：** 创建服务的用户名。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释：** 标签，查询指定标签的服务，默认不过滤。根据标签过滤service参数，格式：每组tag之间使用英文逗号分隔，每个标签内的key和value使用英文竖划线分隔，例：tag_key1|tag_value1,tag_key2|tag_value2 **约束限制：** 不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分隔。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets assetId
    *  **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId **参数解释：** 资产ID，查询使用了指定资产的服务，默认不过滤。可通过[资产管理][模型列表]获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
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
    * @param string|null $sortDir **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
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
    * @param int|null $limit **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
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
    *  **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
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
    * @param int|null $offset **参数解释：** 分页列表查询的偏移量。 **约束限制：** offset必须是limit的整数倍。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets contentType
    *  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
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

