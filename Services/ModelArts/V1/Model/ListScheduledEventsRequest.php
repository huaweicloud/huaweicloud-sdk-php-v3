<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * state  **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishStartTime  **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishEndTime  **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'state' => 'string[]',
            'type' => 'string[]',
            'id' => 'string',
            'nodeName' => 'string',
            'poolName' => 'string',
            'publishStartTime' => 'string',
            'publishEndTime' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * state  **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishStartTime  **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishEndTime  **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'state' => null,
        'type' => null,
        'id' => null,
        'nodeName' => null,
        'poolName' => null,
        'publishStartTime' => null,
        'publishEndTime' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * state  **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishStartTime  **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishEndTime  **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspaceId',
            'state' => 'state',
            'type' => 'type',
            'id' => 'id',
            'nodeName' => 'nodeName',
            'poolName' => 'poolName',
            'publishStartTime' => 'publishStartTime',
            'publishEndTime' => 'publishEndTime',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * state  **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishStartTime  **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishEndTime  **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'state' => 'setState',
            'type' => 'setType',
            'id' => 'setId',
            'nodeName' => 'setNodeName',
            'poolName' => 'setPoolName',
            'publishStartTime' => 'setPublishStartTime',
            'publishEndTime' => 'setPublishEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * state  **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishStartTime  **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * publishEndTime  **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
    * limit  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'state' => 'getState',
            'type' => 'getType',
            'id' => 'getId',
            'nodeName' => 'getNodeName',
            'poolName' => 'getPoolName',
            'publishStartTime' => 'getPublishStartTime',
            'publishEndTime' => 'getPublishEndTime',
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
    const STATE_INQUIRING = 'inquiring';
    const STATE_SCHEDULED = 'scheduled';
    const STATE_EXECUTING = 'executing';
    const STATE_COMPLETED = 'completed';
    const STATE_FAILED = 'failed';
    const STATE_CANCELED = 'canceled';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INQUIRING,
            self::STATE_SCHEDULED,
            self::STATE_EXECUTING,
            self::STATE_COMPLETED,
            self::STATE_FAILED,
            self::STATE_CANCELED,
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['poolName'] = isset($data['poolName']) ? $data['poolName'] : null;
        $this->container['publishStartTime'] = isset($data['publishStartTime']) ? $data['publishStartTime'] : null;
        $this->container['publishEndTime'] = isset($data['publishEndTime']) ? $data['publishEndTime'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 63)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['poolName']) && (mb_strlen($this->container['poolName']) > 63)) {
                $invalidProperties[] = "invalid value for 'poolName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['poolName']) && (mb_strlen($this->container['poolName']) < 0)) {
                $invalidProperties[] = "invalid value for 'poolName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publishStartTime']) && (mb_strlen($this->container['publishStartTime']) > 24)) {
                $invalidProperties[] = "invalid value for 'publishStartTime', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['publishStartTime']) && (mb_strlen($this->container['publishStartTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'publishStartTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publishEndTime']) && (mb_strlen($this->container['publishEndTime']) > 24)) {
                $invalidProperties[] = "invalid value for 'publishEndTime', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['publishEndTime']) && (mb_strlen($this->container['publishEndTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'publishEndTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets workspaceId
    *  **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID，默认值为0，取值于查询workspaces列表的接口的id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    *
    * @return string[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string[]|null $state **参数解释**：事件状态。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行 - executing: 执行中 - completed: 执行成功 - failed: 执行失败 - canceled: 取消 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选择值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $id **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName **参数解释**：节点名称，取值自节点详情的metadata.name字段。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets poolName
    *  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $poolName **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。查询指定standard cluster和lite cluster下节点的计划事件时可传递该参数。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPoolName($poolName)
    {
        $this->container['poolName'] = $poolName;
        return $this;
    }

    /**
    * Gets publishStartTime
    *  **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPublishStartTime()
    {
        return $this->container['publishStartTime'];
    }

    /**
    * Sets publishStartTime
    *
    * @param string|null $publishStartTime **参数解释**：事件发布开始时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPublishStartTime($publishStartTime)
    {
        $this->container['publishStartTime'] = $publishStartTime;
        return $this;
    }

    /**
    * Gets publishEndTime
    *  **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPublishEndTime()
    {
        return $this->container['publishEndTime'];
    }

    /**
    * Sets publishEndTime
    *
    * @param string|null $publishEndTime **参数解释**：事件发布结束时间,按照时间范围过滤。 **约束限制**：按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPublishEndTime($publishEndTime)
    {
        $this->container['publishEndTime'] = $publishEndTime;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
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
    * @param int|null $offset **参数解释**：偏移量,表示从此偏移量开始查询。 **约束限制**：不涉及。 **取值范围**：[0,1000000000]。 **默认取值**：0。
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
    *  **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
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
    * @param int|null $limit **参数解释**：指定每一页返回的最大条目数。 **约束限制**：不涉及。 **取值范围**：[1,100]。 **默认取值**：100。
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

