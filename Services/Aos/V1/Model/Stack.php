<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Stack implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Stack';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * stackId  资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    * createTime  资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * statusMessage  在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackName' => 'string',
            'description' => 'string',
            'stackId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'statusMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * stackId  资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    * createTime  资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * statusMessage  在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackName' => null,
        'description' => null,
        'stackId' => null,
        'status' => null,
        'createTime' => null,
        'updateTime' => null,
        'statusMessage' => null
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
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * stackId  资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    * createTime  资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * statusMessage  在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackName' => 'stack_name',
            'description' => 'description',
            'stackId' => 'stack_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'statusMessage' => 'status_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * stackId  资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    * createTime  资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * statusMessage  在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $setters = [
            'stackName' => 'setStackName',
            'description' => 'setDescription',
            'stackId' => 'setStackId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'statusMessage' => 'setStatusMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackName  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    * description  资源栈的描述。可用于客户识别自己的资源栈。
    * stackId  资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    * status  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    * createTime  资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * updateTime  资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * statusMessage  在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $getters = [
            'stackName' => 'getStackName',
            'description' => 'getDescription',
            'stackId' => 'getStackId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'statusMessage' => 'getStatusMessage'
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
    const STATUS_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const STATUS_DEPLOYMENT_IN_PROGRESS = 'DEPLOYMENT_IN_PROGRESS';
    const STATUS_DEPLOYMENT_FAILED = 'DEPLOYMENT_FAILED';
    const STATUS_DEPLOYMENT_COMPLETE = 'DEPLOYMENT_COMPLETE';
    const STATUS_ROLLBACK_IN_PROGRESS = 'ROLLBACK_IN_PROGRESS';
    const STATUS_ROLLBACK_FAILED = 'ROLLBACK_FAILED';
    const STATUS_ROLLBACK_COMPLETE = 'ROLLBACK_COMPLETE';
    const STATUS_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const STATUS_DELETION_FAILED = 'DELETION_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATION_COMPLETE,
            self::STATUS_DEPLOYMENT_IN_PROGRESS,
            self::STATUS_DEPLOYMENT_FAILED,
            self::STATUS_DEPLOYMENT_COMPLETE,
            self::STATUS_ROLLBACK_IN_PROGRESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_ROLLBACK_COMPLETE,
            self::STATUS_DELETION_IN_PROGRESS,
            self::STATUS_DELETION_FAILED,
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
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['stackName'] === null) {
            $invalidProperties[] = "'stackName' can't be null";
        }
            if ((mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[一-龥A-Za-z]+[一-龥A-Za-z0-9_-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackId'])) {
                $invalidProperties[] = "invalid value for 'stackId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets stackName
    *  用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return string
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string $stackName 用户希望生成的资源栈的名字。此名字在domain_id+区域+project_id下应唯一，可以使用中文、大小写英文、数字、下划线、中划线。首字符需为中文或者英文，区分大小写。
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets description
    *  资源栈的描述。可用于客户识别自己的资源栈。
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
    * @param string|null $description 资源栈的描述。可用于客户识别自己的资源栈。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets stackId
    *  资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
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
    * @param string|null $stackId 资源栈（stack）的唯一Id。  此Id由资源编排服务在生成资源栈的时候生成，为UUID。  由于资源栈名仅仅在同一时间下唯一，即用户允许先生成一个叫HelloWorld的资源栈，删除，再重新创建一个同名资源栈。  对于团队并行开发，用户可能希望确保，当前我操作的资源栈就是我认为的那个，而不是其他队友删除后创建的同名资源栈。因此，使用ID就可以做到强匹配。  资源编排服务保证每次创建的资源栈所对应的ID都不相同，更新不会影响ID。如果给与的stack_id和当前资源栈的ID不一致，则返回400
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets status
    *  资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
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
    * @param string|null $status 资源栈的状态     * `CREATION_COMPLETE` - 生成空资源栈完成，并没有任何部署     * `DEPLOYMENT_IN_PROGRESS` - 正在部署，请等待     * `DEPLOYMENT_FAILED` - 部署失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `DEPLOYMENT_COMPLETE` - 部署完成     * `ROLLBACK_IN_PROGRESS` - 部署失败，正在回滚，请等待     * `ROLLBACK_FAILED` - 回滚失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情     * `ROLLBACK_COMPLETE` - 回滚完成     * `DELETION_IN_PROGRESS` - 正在删除，请等待     * `DELETION_FAILED` - 删除失败。请于status_message见错误信息汇总，或者调用ListStackEvents获得事件详情
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    * @param string|null $createTime 资源栈的生成时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    *  资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
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
    * @param string|null $updateTime 资源栈的更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets statusMessage
    *  在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
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
    * @param string|null $statusMessage 在失败的时候（资源栈状态以FAILED结尾）会显示简要的错误信息总结以供debug
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
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

