<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionApprovalOpenapiDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionApprovalOpenapiDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approvalDispatchErrorMsg  审批外发失败消息
    * approvalDispatchStatus  审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    * approvalType  申请类型, DATA_PERMISSION
    * approveReason  申请原因
    * currentNodeId  当前审批节点id
    * currentNodeName  当前审批节点审批人
    * currentNodeType  当前审批节点审批人类型
    * detail  detail
    * endTime  工单结束时间
    * expireTime  到期时间
    * id  工单id
    * instanceId  实例id
    * permissionSetId  审批人所在权限集id
    * projectId  项目id
    * proposerId  申请人id
    * proposerName  申请人名称
    * proposerWorkspaceId  用户申请权限时所在工作空间id
    * reason  拒绝理由
    * startTime  工单开始时间
    * status  工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
    * workspaceId  工作空间id
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approvalDispatchErrorMsg' => 'string',
            'approvalDispatchStatus' => 'string',
            'approvalType' => 'string',
            'approveReason' => 'string',
            'currentNodeId' => 'string',
            'currentNodeName' => 'string',
            'currentNodeType' => 'string',
            'detail' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTO',
            'endTime' => 'int',
            'expireTime' => 'int',
            'id' => 'string',
            'instanceId' => 'string',
            'permissionSetId' => 'string',
            'projectId' => 'string',
            'proposerId' => 'string',
            'proposerName' => 'string',
            'proposerWorkspaceId' => 'string',
            'reason' => 'string',
            'startTime' => 'int',
            'status' => 'string',
            'workspaceId' => 'string',
            'workspaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approvalDispatchErrorMsg  审批外发失败消息
    * approvalDispatchStatus  审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    * approvalType  申请类型, DATA_PERMISSION
    * approveReason  申请原因
    * currentNodeId  当前审批节点id
    * currentNodeName  当前审批节点审批人
    * currentNodeType  当前审批节点审批人类型
    * detail  detail
    * endTime  工单结束时间
    * expireTime  到期时间
    * id  工单id
    * instanceId  实例id
    * permissionSetId  审批人所在权限集id
    * projectId  项目id
    * proposerId  申请人id
    * proposerName  申请人名称
    * proposerWorkspaceId  用户申请权限时所在工作空间id
    * reason  拒绝理由
    * startTime  工单开始时间
    * status  工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
    * workspaceId  工作空间id
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approvalDispatchErrorMsg' => null,
        'approvalDispatchStatus' => null,
        'approvalType' => null,
        'approveReason' => null,
        'currentNodeId' => null,
        'currentNodeName' => null,
        'currentNodeType' => null,
        'detail' => null,
        'endTime' => 'int64',
        'expireTime' => 'int64',
        'id' => null,
        'instanceId' => null,
        'permissionSetId' => null,
        'projectId' => null,
        'proposerId' => null,
        'proposerName' => null,
        'proposerWorkspaceId' => null,
        'reason' => null,
        'startTime' => 'int64',
        'status' => null,
        'workspaceId' => null,
        'workspaceName' => null
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
    * approvalDispatchErrorMsg  审批外发失败消息
    * approvalDispatchStatus  审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    * approvalType  申请类型, DATA_PERMISSION
    * approveReason  申请原因
    * currentNodeId  当前审批节点id
    * currentNodeName  当前审批节点审批人
    * currentNodeType  当前审批节点审批人类型
    * detail  detail
    * endTime  工单结束时间
    * expireTime  到期时间
    * id  工单id
    * instanceId  实例id
    * permissionSetId  审批人所在权限集id
    * projectId  项目id
    * proposerId  申请人id
    * proposerName  申请人名称
    * proposerWorkspaceId  用户申请权限时所在工作空间id
    * reason  拒绝理由
    * startTime  工单开始时间
    * status  工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
    * workspaceId  工作空间id
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approvalDispatchErrorMsg' => 'approval_dispatch_error_msg',
            'approvalDispatchStatus' => 'approval_dispatch_status',
            'approvalType' => 'approval_type',
            'approveReason' => 'approve_reason',
            'currentNodeId' => 'current_node_id',
            'currentNodeName' => 'current_node_name',
            'currentNodeType' => 'current_node_type',
            'detail' => 'detail',
            'endTime' => 'end_time',
            'expireTime' => 'expire_time',
            'id' => 'id',
            'instanceId' => 'instance_id',
            'permissionSetId' => 'permission_set_id',
            'projectId' => 'project_id',
            'proposerId' => 'proposer_id',
            'proposerName' => 'proposer_name',
            'proposerWorkspaceId' => 'proposer_workspace_id',
            'reason' => 'reason',
            'startTime' => 'start_time',
            'status' => 'status',
            'workspaceId' => 'workspace_id',
            'workspaceName' => 'workspace_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approvalDispatchErrorMsg  审批外发失败消息
    * approvalDispatchStatus  审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    * approvalType  申请类型, DATA_PERMISSION
    * approveReason  申请原因
    * currentNodeId  当前审批节点id
    * currentNodeName  当前审批节点审批人
    * currentNodeType  当前审批节点审批人类型
    * detail  detail
    * endTime  工单结束时间
    * expireTime  到期时间
    * id  工单id
    * instanceId  实例id
    * permissionSetId  审批人所在权限集id
    * projectId  项目id
    * proposerId  申请人id
    * proposerName  申请人名称
    * proposerWorkspaceId  用户申请权限时所在工作空间id
    * reason  拒绝理由
    * startTime  工单开始时间
    * status  工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
    * workspaceId  工作空间id
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $setters = [
            'approvalDispatchErrorMsg' => 'setApprovalDispatchErrorMsg',
            'approvalDispatchStatus' => 'setApprovalDispatchStatus',
            'approvalType' => 'setApprovalType',
            'approveReason' => 'setApproveReason',
            'currentNodeId' => 'setCurrentNodeId',
            'currentNodeName' => 'setCurrentNodeName',
            'currentNodeType' => 'setCurrentNodeType',
            'detail' => 'setDetail',
            'endTime' => 'setEndTime',
            'expireTime' => 'setExpireTime',
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'permissionSetId' => 'setPermissionSetId',
            'projectId' => 'setProjectId',
            'proposerId' => 'setProposerId',
            'proposerName' => 'setProposerName',
            'proposerWorkspaceId' => 'setProposerWorkspaceId',
            'reason' => 'setReason',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'workspaceId' => 'setWorkspaceId',
            'workspaceName' => 'setWorkspaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approvalDispatchErrorMsg  审批外发失败消息
    * approvalDispatchStatus  审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    * approvalType  申请类型, DATA_PERMISSION
    * approveReason  申请原因
    * currentNodeId  当前审批节点id
    * currentNodeName  当前审批节点审批人
    * currentNodeType  当前审批节点审批人类型
    * detail  detail
    * endTime  工单结束时间
    * expireTime  到期时间
    * id  工单id
    * instanceId  实例id
    * permissionSetId  审批人所在权限集id
    * projectId  项目id
    * proposerId  申请人id
    * proposerName  申请人名称
    * proposerWorkspaceId  用户申请权限时所在工作空间id
    * reason  拒绝理由
    * startTime  工单开始时间
    * status  工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
    * workspaceId  工作空间id
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $getters = [
            'approvalDispatchErrorMsg' => 'getApprovalDispatchErrorMsg',
            'approvalDispatchStatus' => 'getApprovalDispatchStatus',
            'approvalType' => 'getApprovalType',
            'approveReason' => 'getApproveReason',
            'currentNodeId' => 'getCurrentNodeId',
            'currentNodeName' => 'getCurrentNodeName',
            'currentNodeType' => 'getCurrentNodeType',
            'detail' => 'getDetail',
            'endTime' => 'getEndTime',
            'expireTime' => 'getExpireTime',
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'permissionSetId' => 'getPermissionSetId',
            'projectId' => 'getProjectId',
            'proposerId' => 'getProposerId',
            'proposerName' => 'getProposerName',
            'proposerWorkspaceId' => 'getProposerWorkspaceId',
            'reason' => 'getReason',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'workspaceId' => 'getWorkspaceId',
            'workspaceName' => 'getWorkspaceName'
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
    const APPROVAL_TYPE_DATA_PERMISSION = 'DATA_PERMISSION';
    const STATUS_WAITING_APPROVE = 'WAITING_APPROVE';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_REJECT = 'REJECT';
    const STATUS_REVOKE = 'REVOKE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApprovalTypeAllowableValues()
    {
        return [
            self::APPROVAL_TYPE_DATA_PERMISSION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING_APPROVE,
            self::STATUS_APPROVED,
            self::STATUS_REJECT,
            self::STATUS_REVOKE,
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
        $this->container['approvalDispatchErrorMsg'] = isset($data['approvalDispatchErrorMsg']) ? $data['approvalDispatchErrorMsg'] : null;
        $this->container['approvalDispatchStatus'] = isset($data['approvalDispatchStatus']) ? $data['approvalDispatchStatus'] : null;
        $this->container['approvalType'] = isset($data['approvalType']) ? $data['approvalType'] : null;
        $this->container['approveReason'] = isset($data['approveReason']) ? $data['approveReason'] : null;
        $this->container['currentNodeId'] = isset($data['currentNodeId']) ? $data['currentNodeId'] : null;
        $this->container['currentNodeName'] = isset($data['currentNodeName']) ? $data['currentNodeName'] : null;
        $this->container['currentNodeType'] = isset($data['currentNodeType']) ? $data['currentNodeType'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['proposerId'] = isset($data['proposerId']) ? $data['proposerId'] : null;
        $this->container['proposerName'] = isset($data['proposerName']) ? $data['proposerName'] : null;
        $this->container['proposerWorkspaceId'] = isset($data['proposerWorkspaceId']) ? $data['proposerWorkspaceId'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['approvalDispatchErrorMsg']) && (mb_strlen($this->container['approvalDispatchErrorMsg']) > 65535)) {
                $invalidProperties[] = "invalid value for 'approvalDispatchErrorMsg', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['approvalDispatchErrorMsg']) && (mb_strlen($this->container['approvalDispatchErrorMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'approvalDispatchErrorMsg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approvalDispatchStatus']) && (mb_strlen($this->container['approvalDispatchStatus']) > 10)) {
                $invalidProperties[] = "invalid value for 'approvalDispatchStatus', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['approvalDispatchStatus']) && (mb_strlen($this->container['approvalDispatchStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'approvalDispatchStatus', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getApprovalTypeAllowableValues();
                if (!is_null($this->container['approvalType']) && !in_array($this->container['approvalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approvalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['approvalType']) && (mb_strlen($this->container['approvalType']) > 128)) {
                $invalidProperties[] = "invalid value for 'approvalType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['approvalType']) && (mb_strlen($this->container['approvalType']) < 1)) {
                $invalidProperties[] = "invalid value for 'approvalType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approveReason']) && (mb_strlen($this->container['approveReason']) > 500)) {
                $invalidProperties[] = "invalid value for 'approveReason', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['approveReason']) && (mb_strlen($this->container['approveReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'approveReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentNodeId']) && (mb_strlen($this->container['currentNodeId']) > 128)) {
                $invalidProperties[] = "invalid value for 'currentNodeId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['currentNodeId']) && (mb_strlen($this->container['currentNodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentNodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentNodeName']) && (mb_strlen($this->container['currentNodeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'currentNodeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['currentNodeName']) && (mb_strlen($this->container['currentNodeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentNodeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currentNodeType']) && (mb_strlen($this->container['currentNodeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'currentNodeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['currentNodeType']) && (mb_strlen($this->container['currentNodeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentNodeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['proposerId']) && (mb_strlen($this->container['proposerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'proposerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['proposerId']) && (mb_strlen($this->container['proposerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'proposerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['proposerName']) && (mb_strlen($this->container['proposerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'proposerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['proposerName']) && (mb_strlen($this->container['proposerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'proposerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['proposerWorkspaceId']) && (mb_strlen($this->container['proposerWorkspaceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'proposerWorkspaceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['proposerWorkspaceId']) && (mb_strlen($this->container['proposerWorkspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'proposerWorkspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 128)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 1)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceName']) && (mb_strlen($this->container['workspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspaceName']) && (mb_strlen($this->container['workspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceName', the character length must be bigger than or equal to 1.";
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
    * Gets approvalDispatchErrorMsg
    *  审批外发失败消息
    *
    * @return string|null
    */
    public function getApprovalDispatchErrorMsg()
    {
        return $this->container['approvalDispatchErrorMsg'];
    }

    /**
    * Sets approvalDispatchErrorMsg
    *
    * @param string|null $approvalDispatchErrorMsg 审批外发失败消息
    *
    * @return $this
    */
    public function setApprovalDispatchErrorMsg($approvalDispatchErrorMsg)
    {
        $this->container['approvalDispatchErrorMsg'] = $approvalDispatchErrorMsg;
        return $this;
    }

    /**
    * Gets approvalDispatchStatus
    *  审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    *
    * @return string|null
    */
    public function getApprovalDispatchStatus()
    {
        return $this->container['approvalDispatchStatus'];
    }

    /**
    * Sets approvalDispatchStatus
    *
    * @param string|null $approvalDispatchStatus 审批外发状态，0表示成功，1表示失败，null表示非SMN节点
    *
    * @return $this
    */
    public function setApprovalDispatchStatus($approvalDispatchStatus)
    {
        $this->container['approvalDispatchStatus'] = $approvalDispatchStatus;
        return $this;
    }

    /**
    * Gets approvalType
    *  申请类型, DATA_PERMISSION
    *
    * @return string|null
    */
    public function getApprovalType()
    {
        return $this->container['approvalType'];
    }

    /**
    * Sets approvalType
    *
    * @param string|null $approvalType 申请类型, DATA_PERMISSION
    *
    * @return $this
    */
    public function setApprovalType($approvalType)
    {
        $this->container['approvalType'] = $approvalType;
        return $this;
    }

    /**
    * Gets approveReason
    *  申请原因
    *
    * @return string|null
    */
    public function getApproveReason()
    {
        return $this->container['approveReason'];
    }

    /**
    * Sets approveReason
    *
    * @param string|null $approveReason 申请原因
    *
    * @return $this
    */
    public function setApproveReason($approveReason)
    {
        $this->container['approveReason'] = $approveReason;
        return $this;
    }

    /**
    * Gets currentNodeId
    *  当前审批节点id
    *
    * @return string|null
    */
    public function getCurrentNodeId()
    {
        return $this->container['currentNodeId'];
    }

    /**
    * Sets currentNodeId
    *
    * @param string|null $currentNodeId 当前审批节点id
    *
    * @return $this
    */
    public function setCurrentNodeId($currentNodeId)
    {
        $this->container['currentNodeId'] = $currentNodeId;
        return $this;
    }

    /**
    * Gets currentNodeName
    *  当前审批节点审批人
    *
    * @return string|null
    */
    public function getCurrentNodeName()
    {
        return $this->container['currentNodeName'];
    }

    /**
    * Sets currentNodeName
    *
    * @param string|null $currentNodeName 当前审批节点审批人
    *
    * @return $this
    */
    public function setCurrentNodeName($currentNodeName)
    {
        $this->container['currentNodeName'] = $currentNodeName;
        return $this;
    }

    /**
    * Gets currentNodeType
    *  当前审批节点审批人类型
    *
    * @return string|null
    */
    public function getCurrentNodeType()
    {
        return $this->container['currentNodeType'];
    }

    /**
    * Sets currentNodeType
    *
    * @param string|null $currentNodeType 当前审批节点审批人类型
    *
    * @return $this
    */
    public function setCurrentNodeType($currentNodeType)
    {
        $this->container['currentNodeType'] = $currentNodeType;
        return $this;
    }

    /**
    * Gets detail
    *  detail
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTO|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTO|null $detail detail
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets endTime
    *  工单结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 工单结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  到期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 到期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets id
    *  工单id
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
    * @param string|null $id 工单id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  审批人所在权限集id
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 审批人所在权限集id
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets proposerId
    *  申请人id
    *
    * @return string|null
    */
    public function getProposerId()
    {
        return $this->container['proposerId'];
    }

    /**
    * Sets proposerId
    *
    * @param string|null $proposerId 申请人id
    *
    * @return $this
    */
    public function setProposerId($proposerId)
    {
        $this->container['proposerId'] = $proposerId;
        return $this;
    }

    /**
    * Gets proposerName
    *  申请人名称
    *
    * @return string|null
    */
    public function getProposerName()
    {
        return $this->container['proposerName'];
    }

    /**
    * Sets proposerName
    *
    * @param string|null $proposerName 申请人名称
    *
    * @return $this
    */
    public function setProposerName($proposerName)
    {
        $this->container['proposerName'] = $proposerName;
        return $this;
    }

    /**
    * Gets proposerWorkspaceId
    *  用户申请权限时所在工作空间id
    *
    * @return string|null
    */
    public function getProposerWorkspaceId()
    {
        return $this->container['proposerWorkspaceId'];
    }

    /**
    * Sets proposerWorkspaceId
    *
    * @param string|null $proposerWorkspaceId 用户申请权限时所在工作空间id
    *
    * @return $this
    */
    public function setProposerWorkspaceId($proposerWorkspaceId)
    {
        $this->container['proposerWorkspaceId'] = $proposerWorkspaceId;
        return $this;
    }

    /**
    * Gets reason
    *  拒绝理由
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 拒绝理由
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets startTime
    *  工单开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 工单开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
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
    * @param string|null $status 工单状态, WAITING_APPROVE,APPROVED,REJECT,REVOKE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
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
    * @param string|null $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets workspaceName
    *  工作空间名称
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 工作空间名称
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
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

