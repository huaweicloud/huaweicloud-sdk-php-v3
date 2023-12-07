<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStackInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStackInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
    * statusMessage  在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * stackDomainId  资源栈实例所关联的资源栈所在的租户ID
    * latestStackSetOperationId  最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    * region  资源栈实例所关联的资源栈所在的区域
    * createTime  资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * updateTime  资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * varOverrides  该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackSetId' => 'string',
            'stackSetName' => 'string',
            'status' => 'string',
            'statusMessage' => 'string',
            'stackId' => 'string',
            'stackName' => 'string',
            'stackDomainId' => 'string',
            'latestStackSetOperationId' => 'string',
            'region' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'varOverrides' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
    * statusMessage  在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * stackDomainId  资源栈实例所关联的资源栈所在的租户ID
    * latestStackSetOperationId  最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    * region  资源栈实例所关联的资源栈所在的区域
    * createTime  资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * updateTime  资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * varOverrides  该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackSetId' => null,
        'stackSetName' => null,
        'status' => null,
        'statusMessage' => null,
        'stackId' => null,
        'stackName' => null,
        'stackDomainId' => null,
        'latestStackSetOperationId' => null,
        'region' => null,
        'createTime' => null,
        'updateTime' => null,
        'varOverrides' => null
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
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
    * statusMessage  在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * stackDomainId  资源栈实例所关联的资源栈所在的租户ID
    * latestStackSetOperationId  最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    * region  资源栈实例所关联的资源栈所在的区域
    * createTime  资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * updateTime  资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * varOverrides  该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackSetId' => 'stack_set_id',
            'stackSetName' => 'stack_set_name',
            'status' => 'status',
            'statusMessage' => 'status_message',
            'stackId' => 'stack_id',
            'stackName' => 'stack_name',
            'stackDomainId' => 'stack_domain_id',
            'latestStackSetOperationId' => 'latest_stack_set_operation_id',
            'region' => 'region',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'varOverrides' => 'var_overrides'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
    * statusMessage  在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * stackDomainId  资源栈实例所关联的资源栈所在的租户ID
    * latestStackSetOperationId  最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    * region  资源栈实例所关联的资源栈所在的区域
    * createTime  资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * updateTime  资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * varOverrides  该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @var string[]
    */
    protected static $setters = [
            'stackSetId' => 'setStackSetId',
            'stackSetName' => 'setStackSetName',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage',
            'stackId' => 'setStackId',
            'stackName' => 'setStackName',
            'stackDomainId' => 'setStackDomainId',
            'latestStackSetOperationId' => 'setLatestStackSetOperationId',
            'region' => 'setRegion',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'varOverrides' => 'setVarOverrides'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackSetId  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
    * stackSetName  资源栈集（stack_set）的名字。此名字在domain_id+region下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * status  资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
    * statusMessage  在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
    * stackId  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * stackName  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * stackDomainId  资源栈实例所关联的资源栈所在的租户ID
    * latestStackSetOperationId  最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    * region  资源栈实例所关联的资源栈所在的区域
    * createTime  资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * updateTime  资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    * varOverrides  该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @var string[]
    */
    protected static $getters = [
            'stackSetId' => 'getStackSetId',
            'stackSetName' => 'getStackSetName',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage',
            'stackId' => 'getStackId',
            'stackName' => 'getStackName',
            'stackDomainId' => 'getStackDomainId',
            'latestStackSetOperationId' => 'getLatestStackSetOperationId',
            'region' => 'getRegion',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'varOverrides' => 'getVarOverrides'
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
    const STATUS_WAIT_IN_PROGRESS = 'WAIT_IN_PROGRESS';
    const STATUS_CANCEL_COMPLETE = 'CANCEL_COMPLETE';
    const STATUS_OPERATION_IN_PROGRESS = 'OPERATION_IN_PROGRESS';
    const STATUS_OPERATION_FAILED = 'OPERATION_FAILED';
    const STATUS_INOPERABLE = 'INOPERABLE';
    const STATUS_OPERATION_COMPLETE = 'OPERATION_COMPLETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAIT_IN_PROGRESS,
            self::STATUS_CANCEL_COMPLETE,
            self::STATUS_OPERATION_IN_PROGRESS,
            self::STATUS_OPERATION_FAILED,
            self::STATUS_INOPERABLE,
            self::STATUS_OPERATION_COMPLETE,
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
        $this->container['stackSetId'] = isset($data['stackSetId']) ? $data['stackSetId'] : null;
        $this->container['stackSetName'] = isset($data['stackSetName']) ? $data['stackSetName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['stackDomainId'] = isset($data['stackDomainId']) ? $data['stackDomainId'] : null;
        $this->container['latestStackSetOperationId'] = isset($data['latestStackSetOperationId']) ? $data['latestStackSetOperationId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['varOverrides'] = isset($data['varOverrides']) ? $data['varOverrides'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

            if (!is_null($this->container['stackName']) && (mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['stackName']) && (mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stackName']) && !preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
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
    * Gets stackSetId
    *  资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
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
    * @param string|null $stackSetId 资源栈集（stack_set）的唯一ID。  此ID由资源编排服务在生成资源栈集的时候生成，为UUID。  由于资源栈集名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈集，删除，在重新创建一个同名资源栈集。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈集就是我以为的那个，而不是又其他队友删除后创建的同名资源栈集。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈集所对应的ID都不相同，更新不会影响ID。如果给与的stack_set_id和当前资源栈集的ID不一致，则返回400
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
    *  资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
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
    * @param string|null $status 资源栈实例的状态  * `WAIT_IN_PROGRESS` - 资源栈实例等待操作中 * `CANCEL_COMPLETE` - 资源栈实例操作取消完成 * `OPERATION_IN_PROGRESS` - 资源栈实例操作中 * `OPERATION_FAILED` - 资源栈实例操作失败 * `INOPERABLE` - 资源栈实例不可操作 * `OPERATION_COMPLETE` - 资源栈实例操作完成
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
    *  在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
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
    * @param string|null $statusMessage 在资源栈实例状态为`INOPERABLE`或`OPERATION_FAILED`时，会显示简要的错误信息总结以供debug
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets stackId
    *  资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 资源栈（stack）的唯一ID。  此ID由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets stackName
    *  资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string|null
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string|null $stackName 资源栈的名称。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets stackDomainId
    *  资源栈实例所关联的资源栈所在的租户ID
    *
    * @return string|null
    */
    public function getStackDomainId()
    {
        return $this->container['stackDomainId'];
    }

    /**
    * Sets stackDomainId
    *
    * @param string|null $stackDomainId 资源栈实例所关联的资源栈所在的租户ID
    *
    * @return $this
    */
    public function setStackDomainId($stackDomainId)
    {
        $this->container['stackDomainId'] = $stackDomainId;
        return $this;
    }

    /**
    * Gets latestStackSetOperationId
    *  最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    *
    * @return string|null
    */
    public function getLatestStackSetOperationId()
    {
        return $this->container['latestStackSetOperationId'];
    }

    /**
    * Sets latestStackSetOperationId
    *
    * @param string|null $latestStackSetOperationId 最新一次部署该资源栈实例的资源栈集操作ID  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID
    *
    * @return $this
    */
    public function setLatestStackSetOperationId($latestStackSetOperationId)
    {
        $this->container['latestStackSetOperationId'] = $latestStackSetOperationId;
        return $this;
    }

    /**
    * Gets region
    *  资源栈实例所关联的资源栈所在的区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 资源栈实例所关联的资源栈所在的区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets createTime
    *  资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
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
    * @param string|null $createTime 资源栈实例的创建时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
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
    *  资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
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
    * @param string|null $updateTime 资源栈实例的更新时间，格式为YYYY-MM-DDTHH:mm:ss.SSSZ，精确到毫秒，UTC时区，即，如1970-01-01T00:00:00.000Z
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets varOverrides
    *  该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @return object|null
    */
    public function getVarOverrides()
    {
        return $this->container['varOverrides'];
    }

    /**
    * Sets varOverrides
    *
    * @param object|null $varOverrides 该资源栈实例的参数覆盖内容  若用户通过CreateStackInstances或UpdateStackInstances API 对该资源栈实例设置了参数覆盖，该字段会返回资源栈实例记录的最新参数覆盖内容  若该字段未返回，用户使用资源栈集中记录的参数部署该实例
    *
    * @return $this
    */
    public function setVarOverrides($varOverrides)
    {
        $this->container['varOverrides'] = $varOverrides;
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

