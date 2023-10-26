<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStackSetOperationMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStackSetOperationMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackSetOperationId  资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
    * statusMessage  资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    * action  用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    * administrationAgencyName  管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * administrationAgencyUrn  管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    * managedAgencyName  被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * deploymentTargets  deploymentTargets
    * createTime  资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackSetOperationId' => 'string',
            'stackSetId' => 'string',
            'stackSetName' => 'string',
            'status' => 'string',
            'statusMessage' => 'string',
            'action' => 'string',
            'administrationAgencyName' => 'string',
            'administrationAgencyUrn' => 'string',
            'managedAgencyName' => 'string',
            'deploymentTargets' => '\HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargets',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackSetOperationId  资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
    * statusMessage  资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    * action  用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    * administrationAgencyName  管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * administrationAgencyUrn  管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    * managedAgencyName  被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * deploymentTargets  deploymentTargets
    * createTime  资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackSetOperationId' => null,
        'stackSetId' => null,
        'stackSetName' => null,
        'status' => null,
        'statusMessage' => null,
        'action' => null,
        'administrationAgencyName' => null,
        'administrationAgencyUrn' => null,
        'managedAgencyName' => null,
        'deploymentTargets' => null,
        'createTime' => null,
        'updateTime' => null
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
    * stackSetOperationId  资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
    * statusMessage  资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    * action  用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    * administrationAgencyName  管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * administrationAgencyUrn  管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    * managedAgencyName  被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * deploymentTargets  deploymentTargets
    * createTime  资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackSetOperationId' => 'stack_set_operation_id',
            'stackSetId' => 'stack_set_id',
            'stackSetName' => 'stack_set_name',
            'status' => 'status',
            'statusMessage' => 'status_message',
            'action' => 'action',
            'administrationAgencyName' => 'administration_agency_name',
            'administrationAgencyUrn' => 'administration_agency_urn',
            'managedAgencyName' => 'managed_agency_name',
            'deploymentTargets' => 'deployment_targets',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackSetOperationId  资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
    * statusMessage  资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    * action  用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    * administrationAgencyName  管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * administrationAgencyUrn  管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    * managedAgencyName  被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * deploymentTargets  deploymentTargets
    * createTime  资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'stackSetOperationId' => 'setStackSetOperationId',
            'stackSetId' => 'setStackSetId',
            'stackSetName' => 'setStackSetName',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage',
            'action' => 'setAction',
            'administrationAgencyName' => 'setAdministrationAgencyName',
            'administrationAgencyUrn' => 'setAdministrationAgencyUrn',
            'managedAgencyName' => 'setManagedAgencyName',
            'deploymentTargets' => 'setDeploymentTargets',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackSetOperationId  资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
    * statusMessage  资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    * action  用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    * administrationAgencyName  管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * administrationAgencyUrn  管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    * managedAgencyName  被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    * deploymentTargets  deploymentTargets
    * createTime  资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    * updateTime  资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'stackSetOperationId' => 'getStackSetOperationId',
            'stackSetId' => 'getStackSetId',
            'stackSetName' => 'getStackSetName',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage',
            'action' => 'getAction',
            'administrationAgencyName' => 'getAdministrationAgencyName',
            'administrationAgencyUrn' => 'getAdministrationAgencyUrn',
            'managedAgencyName' => 'getManagedAgencyName',
            'deploymentTargets' => 'getDeploymentTargets',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const STATUS_QUEUE_IN_PROGRESS = 'QUEUE_IN_PROGRESS';
    const STATUS_OPERATION_IN_PROGRESS = 'OPERATION_IN_PROGRESS';
    const STATUS_OPERATION_COMPLETE = 'OPERATION_COMPLETE';
    const STATUS_OPERATION_FAILED = 'OPERATION_FAILED';
    const STATUS_STOP_IN_PROGRESS = 'STOP_IN_PROGRESS';
    const STATUS_STOP_COMPLETE = 'STOP_COMPLETE';
    const STATUS_STOP_FAILED = 'STOP_FAILED';
    const ACTION_CREATE_STACK_INSTANCES = 'CREATE_STACK_INSTANCES';
    const ACTION_DELETE_STACK_INSTANCES = 'DELETE_STACK_INSTANCES';
    const ACTION_DEPLOY_STACK_SET = 'DEPLOY_STACK_SET';
    const ACTION_DEPLOY_STACK_INSTANCES = 'DEPLOY_STACK_INSTANCES';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUE_IN_PROGRESS,
            self::STATUS_OPERATION_IN_PROGRESS,
            self::STATUS_OPERATION_COMPLETE,
            self::STATUS_OPERATION_FAILED,
            self::STATUS_STOP_IN_PROGRESS,
            self::STATUS_STOP_COMPLETE,
            self::STATUS_STOP_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE_STACK_INSTANCES,
            self::ACTION_DELETE_STACK_INSTANCES,
            self::ACTION_DEPLOY_STACK_SET,
            self::ACTION_DEPLOY_STACK_INSTANCES,
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
        $this->container['stackSetOperationId'] = isset($data['stackSetOperationId']) ? $data['stackSetOperationId'] : null;
        $this->container['stackSetId'] = isset($data['stackSetId']) ? $data['stackSetId'] : null;
        $this->container['stackSetName'] = isset($data['stackSetName']) ? $data['stackSetName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['administrationAgencyName'] = isset($data['administrationAgencyName']) ? $data['administrationAgencyName'] : null;
        $this->container['administrationAgencyUrn'] = isset($data['administrationAgencyUrn']) ? $data['administrationAgencyUrn'] : null;
        $this->container['managedAgencyName'] = isset($data['managedAgencyName']) ? $data['managedAgencyName'] : null;
        $this->container['deploymentTargets'] = isset($data['deploymentTargets']) ? $data['deploymentTargets'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackSetOperationId']) && (mb_strlen($this->container['stackSetOperationId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackSetOperationId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackSetOperationId']) && (mb_strlen($this->container['stackSetOperationId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackSetOperationId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackSetOperationId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackSetOperationId'])) {
                $invalidProperties[] = "invalid value for 'stackSetOperationId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['stackSetId']) && (mb_strlen($this->container['stackSetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackSetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackSetId']) && (mb_strlen($this->container['stackSetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackSetId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackSetId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackSetId'])) {
                $invalidProperties[] = "invalid value for 'stackSetId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
        if ($this->container['stackSetName'] === null) {
            $invalidProperties[] = "'stackSetName' can't be null";
        }
            if ((mb_strlen($this->container['stackSetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackSetName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stackSetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackSetName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackSetName'])) {
                $invalidProperties[] = "invalid value for 'stackSetName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['administrationAgencyName']) && (mb_strlen($this->container['administrationAgencyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'administrationAgencyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['administrationAgencyName']) && (mb_strlen($this->container['administrationAgencyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'administrationAgencyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['administrationAgencyUrn']) && !preg_match("/^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/", $this->container['administrationAgencyUrn'])) {
                $invalidProperties[] = "invalid value for 'administrationAgencyUrn', must be conform to the pattern /^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/.";
            }
            if (!is_null($this->container['managedAgencyName']) && (mb_strlen($this->container['managedAgencyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'managedAgencyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['managedAgencyName']) && (mb_strlen($this->container['managedAgencyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'managedAgencyName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['deploymentTargets'] === null) {
            $invalidProperties[] = "'deploymentTargets' can't be null";
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
    * Gets stackSetOperationId
    *  资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @return string|null
    */
    public function getStackSetOperationId()
    {
        return $this->container['stackSetOperationId'];
    }

    /**
    * Sets stackSetOperationId
    *
    * @param string|null $stackSetOperationId 资源栈集操作（operation）的唯一Id。  此Id由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @return $this
    */
    public function setStackSetOperationId($stackSetOperationId)
    {
        $this->container['stackSetOperationId'] = $stackSetOperationId;
        return $this;
    }

    /**
    * Gets stackSetId
    *  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    *
    * @return string|null
    */
    public function getStackSetId()
    {
        return $this->container['stackSetId'];
    }

    /**
    * Sets stackSetId
    *
    * @param string|null $stackSetId 资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    *
    * @return $this
    */
    public function setStackSetId($stackSetId)
    {
        $this->container['stackSetId'] = $stackSetId;
        return $this;
    }

    /**
    * Gets stackSetName
    *  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string
    */
    public function getStackSetName()
    {
        return $this->container['stackSetName'];
    }

    /**
    * Sets stackSetName
    *
    * @param string $stackSetName 资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setStackSetName($stackSetName)
    {
        $this->container['stackSetName'] = $stackSetName;
        return $this;
    }

    /**
    * Gets status
    *  资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
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
    * @param string|null $status 资源栈集操作状态   * `QUEUE_IN_PROGRESS` - 正在排队   * `OPERATION_IN_PROGRESS` - 正在操作   * `OPERATION_COMPLETE` - 操作完成   * `OPERATION_FAILED` - 操作失败   * `STOP_IN_PROGRESS` - 正在停止   * `STOP_COMPLETE` - 停止完成   * `STOP_FAILED` - 停止失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusMessage
    *  资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 资源栈集操作失败时会展示此次操作失败的原因，例如，资源栈实例部署或删除失败个数超过上限或资源栈集操作超时。  如果需要查看详细失败信息，可通过ListStackInstances API获取查看资源栈实例的status_message。
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets action
    *  用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 用户当前的操作   * `CREATE_STACK_INSTANCES` - 创建资源栈实例   * `DELETE_STACK_INSTANCES` - 删除资源栈实例   * `DEPLOY_STACK_SET` - 部署资源栈集   * `DEPLOY_STACK_INSTANCES` - 部署资源栈实例
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets administrationAgencyName
    *  管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    *
    * @return string|null
    */
    public function getAdministrationAgencyName()
    {
        return $this->container['administrationAgencyName'];
    }

    /**
    * Sets administrationAgencyName
    *
    * @param string|null $administrationAgencyName 管理委托名称  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收v3委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    *
    * @return $this
    */
    public function setAdministrationAgencyName($administrationAgencyName)
    {
        $this->container['administrationAgencyName'] = $administrationAgencyName;
        return $this;
    }

    /**
    * Gets administrationAgencyUrn
    *  管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    *
    * @return string|null
    */
    public function getAdministrationAgencyUrn()
    {
        return $this->container['administrationAgencyUrn'];
    }

    /**
    * Sets administrationAgencyUrn
    *
    * @param string|null $administrationAgencyUrn 管理委托URN  资源编排服务使用该委托获取成员账号委托给管理账号的权限  当用户定义SELF_MANAGED权限类型时，administration_agency_name和administration_agency_urn 必须有且只有一个存在。  推荐用户在使用v5委托时给与administration_agency_urn，administration_agency_name只支持接收普通委托名称，若给与了v5委托名称，则会在部署模板时失败。  当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400。
    *
    * @return $this
    */
    public function setAdministrationAgencyUrn($administrationAgencyUrn)
    {
        $this->container['administrationAgencyUrn'] = $administrationAgencyUrn;
        return $this;
    }

    /**
    * Gets managedAgencyName
    *  被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    *
    * @return string|null
    */
    public function getManagedAgencyName()
    {
        return $this->container['managedAgencyName'];
    }

    /**
    * Sets managedAgencyName
    *
    * @param string|null $managedAgencyName 被管理的委托名称。  资源编排服务会使用该委托获取实际部署资源所需要的权限  不同成员账号委托给管理账号的委托名称需要保持一致。暂不支持根据不同provider定义不同委托权限  当用户定义SELF_MANAGED权限类型时，必须指定该参数。当用户使用SERVICE_MANAGED权限类型时，指定该参数将报错400  [创建委托及授权方式](https://support.huaweicloud.com/usermanual-iam/iam_06_0002.html)
    *
    * @return $this
    */
    public function setManagedAgencyName($managedAgencyName)
    {
        $this->container['managedAgencyName'] = $managedAgencyName;
        return $this;
    }

    /**
    * Gets deploymentTargets
    *  deploymentTargets
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargets
    */
    public function getDeploymentTargets()
    {
        return $this->container['deploymentTargets'];
    }

    /**
    * Sets deploymentTargets
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargets $deploymentTargets deploymentTargets
    *
    * @return $this
    */
    public function setDeploymentTargets($deploymentTargets)
    {
        $this->container['deploymentTargets'] = $deploymentTargets;
        return $this;
    }

    /**
    * Gets createTime
    *  资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 资源栈集操作的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 资源栈集操作的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

