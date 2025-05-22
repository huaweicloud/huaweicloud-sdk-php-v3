<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    * version  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * updated  **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * created  **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * port  **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    * endpoints  **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    * nodes  **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    * tags  **参数解释**： 集群标签。 **取值范围**： 不涉及。
    * userName  **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **取值范围**： 不涉及。
    * recentEvent  **参数解释**： 事件数。 **取值范围**： 不涉及。
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * vpcId  **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * publicIp  publicIp
    * publicEndpoints  **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    * actionProgress  **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    * subStatus  **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    * taskStatus  **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    * parameterGroup  parameterGroup
    * nodeType  **参数解释**： 集群规格。 **取值范围**： 不涉及。
    * nodeTypeId  **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * orderId  **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    * privateIp  **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    * maintainWindow  maintainWindow
    * resizeInfo  resizeInfo
    * failedReasons  failedReasons
    * elb  elb
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'version' => 'string',
            'updated' => 'string',
            'created' => 'string',
            'port' => 'int',
            'endpoints' => '\HuaweiCloud\SDK\Dws\V2\Model\Endpoints[]',
            'nodes' => '\HuaweiCloud\SDK\Dws\V2\Model\Nodes[]',
            'tags' => '\HuaweiCloud\SDK\Dws\V2\Model\Tags[]',
            'userName' => 'string',
            'numberOfNode' => 'int',
            'recentEvent' => 'int',
            'availabilityZone' => 'string',
            'enterpriseProjectId' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'publicIp' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicIp',
            'publicEndpoints' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicEndpoints[]',
            'actionProgress' => 'map[string,string]',
            'subStatus' => 'string',
            'taskStatus' => 'string',
            'parameterGroup' => '\HuaweiCloud\SDK\Dws\V2\Model\ParameterGroup',
            'nodeType' => 'string',
            'nodeTypeId' => 'string',
            'securityGroupId' => 'string',
            'orderId' => 'string',
            'privateIp' => 'string[]',
            'maintainWindow' => '\HuaweiCloud\SDK\Dws\V2\Model\MaintainWindow',
            'resizeInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\ResizeInfo',
            'failedReasons' => '\HuaweiCloud\SDK\Dws\V2\Model\FailedReason',
            'elb' => '\HuaweiCloud\SDK\Dws\V2\Model\ElbResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    * version  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * updated  **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * created  **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * port  **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    * endpoints  **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    * nodes  **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    * tags  **参数解释**： 集群标签。 **取值范围**： 不涉及。
    * userName  **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **取值范围**： 不涉及。
    * recentEvent  **参数解释**： 事件数。 **取值范围**： 不涉及。
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * vpcId  **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * publicIp  publicIp
    * publicEndpoints  **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    * actionProgress  **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    * subStatus  **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    * taskStatus  **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    * parameterGroup  parameterGroup
    * nodeType  **参数解释**： 集群规格。 **取值范围**： 不涉及。
    * nodeTypeId  **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * orderId  **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    * privateIp  **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    * maintainWindow  maintainWindow
    * resizeInfo  resizeInfo
    * failedReasons  failedReasons
    * elb  elb
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'version' => null,
        'updated' => null,
        'created' => null,
        'port' => 'int32',
        'endpoints' => null,
        'nodes' => null,
        'tags' => null,
        'userName' => null,
        'numberOfNode' => 'int32',
        'recentEvent' => 'int32',
        'availabilityZone' => null,
        'enterpriseProjectId' => null,
        'vpcId' => null,
        'subnetId' => null,
        'publicIp' => null,
        'publicEndpoints' => null,
        'actionProgress' => null,
        'subStatus' => null,
        'taskStatus' => null,
        'parameterGroup' => null,
        'nodeType' => null,
        'nodeTypeId' => null,
        'securityGroupId' => null,
        'orderId' => null,
        'privateIp' => null,
        'maintainWindow' => null,
        'resizeInfo' => null,
        'failedReasons' => null,
        'elb' => null
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
    * id  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    * version  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * updated  **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * created  **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * port  **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    * endpoints  **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    * nodes  **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    * tags  **参数解释**： 集群标签。 **取值范围**： 不涉及。
    * userName  **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **取值范围**： 不涉及。
    * recentEvent  **参数解释**： 事件数。 **取值范围**： 不涉及。
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * vpcId  **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * publicIp  publicIp
    * publicEndpoints  **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    * actionProgress  **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    * subStatus  **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    * taskStatus  **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    * parameterGroup  parameterGroup
    * nodeType  **参数解释**： 集群规格。 **取值范围**： 不涉及。
    * nodeTypeId  **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * orderId  **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    * privateIp  **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    * maintainWindow  maintainWindow
    * resizeInfo  resizeInfo
    * failedReasons  failedReasons
    * elb  elb
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'version' => 'version',
            'updated' => 'updated',
            'created' => 'created',
            'port' => 'port',
            'endpoints' => 'endpoints',
            'nodes' => 'nodes',
            'tags' => 'tags',
            'userName' => 'user_name',
            'numberOfNode' => 'number_of_node',
            'recentEvent' => 'recent_event',
            'availabilityZone' => 'availability_zone',
            'enterpriseProjectId' => 'enterprise_project_id',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'publicIp' => 'public_ip',
            'publicEndpoints' => 'public_endpoints',
            'actionProgress' => 'action_progress',
            'subStatus' => 'sub_status',
            'taskStatus' => 'task_status',
            'parameterGroup' => 'parameter_group',
            'nodeType' => 'node_type',
            'nodeTypeId' => 'node_type_id',
            'securityGroupId' => 'security_group_id',
            'orderId' => 'order_id',
            'privateIp' => 'private_ip',
            'maintainWindow' => 'maintain_window',
            'resizeInfo' => 'resize_info',
            'failedReasons' => 'failed_reasons',
            'elb' => 'elb'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    * version  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * updated  **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * created  **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * port  **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    * endpoints  **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    * nodes  **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    * tags  **参数解释**： 集群标签。 **取值范围**： 不涉及。
    * userName  **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **取值范围**： 不涉及。
    * recentEvent  **参数解释**： 事件数。 **取值范围**： 不涉及。
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * vpcId  **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * publicIp  publicIp
    * publicEndpoints  **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    * actionProgress  **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    * subStatus  **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    * taskStatus  **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    * parameterGroup  parameterGroup
    * nodeType  **参数解释**： 集群规格。 **取值范围**： 不涉及。
    * nodeTypeId  **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * orderId  **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    * privateIp  **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    * maintainWindow  maintainWindow
    * resizeInfo  resizeInfo
    * failedReasons  failedReasons
    * elb  elb
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'version' => 'setVersion',
            'updated' => 'setUpdated',
            'created' => 'setCreated',
            'port' => 'setPort',
            'endpoints' => 'setEndpoints',
            'nodes' => 'setNodes',
            'tags' => 'setTags',
            'userName' => 'setUserName',
            'numberOfNode' => 'setNumberOfNode',
            'recentEvent' => 'setRecentEvent',
            'availabilityZone' => 'setAvailabilityZone',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'publicIp' => 'setPublicIp',
            'publicEndpoints' => 'setPublicEndpoints',
            'actionProgress' => 'setActionProgress',
            'subStatus' => 'setSubStatus',
            'taskStatus' => 'setTaskStatus',
            'parameterGroup' => 'setParameterGroup',
            'nodeType' => 'setNodeType',
            'nodeTypeId' => 'setNodeTypeId',
            'securityGroupId' => 'setSecurityGroupId',
            'orderId' => 'setOrderId',
            'privateIp' => 'setPrivateIp',
            'maintainWindow' => 'setMaintainWindow',
            'resizeInfo' => 'setResizeInfo',
            'failedReasons' => 'setFailedReasons',
            'elb' => 'setElb'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    * version  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    * updated  **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * created  **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    * port  **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    * endpoints  **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    * nodes  **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    * tags  **参数解释**： 集群标签。 **取值范围**： 不涉及。
    * userName  **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    * numberOfNode  **参数解释**： 节点数量。 **取值范围**： 不涉及。
    * recentEvent  **参数解释**： 事件数。 **取值范围**： 不涉及。
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * vpcId  **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * publicIp  publicIp
    * publicEndpoints  **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    * actionProgress  **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    * subStatus  **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    * taskStatus  **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    * parameterGroup  parameterGroup
    * nodeType  **参数解释**： 集群规格。 **取值范围**： 不涉及。
    * nodeTypeId  **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * orderId  **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    * privateIp  **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    * maintainWindow  maintainWindow
    * resizeInfo  resizeInfo
    * failedReasons  failedReasons
    * elb  elb
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'version' => 'getVersion',
            'updated' => 'getUpdated',
            'created' => 'getCreated',
            'port' => 'getPort',
            'endpoints' => 'getEndpoints',
            'nodes' => 'getNodes',
            'tags' => 'getTags',
            'userName' => 'getUserName',
            'numberOfNode' => 'getNumberOfNode',
            'recentEvent' => 'getRecentEvent',
            'availabilityZone' => 'getAvailabilityZone',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'publicIp' => 'getPublicIp',
            'publicEndpoints' => 'getPublicEndpoints',
            'actionProgress' => 'getActionProgress',
            'subStatus' => 'getSubStatus',
            'taskStatus' => 'getTaskStatus',
            'parameterGroup' => 'getParameterGroup',
            'nodeType' => 'getNodeType',
            'nodeTypeId' => 'getNodeTypeId',
            'securityGroupId' => 'getSecurityGroupId',
            'orderId' => 'getOrderId',
            'privateIp' => 'getPrivateIp',
            'maintainWindow' => 'getMaintainWindow',
            'resizeInfo' => 'getResizeInfo',
            'failedReasons' => 'getFailedReasons',
            'elb' => 'getElb'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['numberOfNode'] = isset($data['numberOfNode']) ? $data['numberOfNode'] : null;
        $this->container['recentEvent'] = isset($data['recentEvent']) ? $data['recentEvent'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['subStatus'] = isset($data['subStatus']) ? $data['subStatus'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['parameterGroup'] = isset($data['parameterGroup']) ? $data['parameterGroup'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['nodeTypeId'] = isset($data['nodeTypeId']) ? $data['nodeTypeId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['maintainWindow'] = isset($data['maintainWindow']) ? $data['maintainWindow'] : null;
        $this->container['resizeInfo'] = isset($data['resizeInfo']) ? $data['resizeInfo'] : null;
        $this->container['failedReasons'] = isset($data['failedReasons']) ? $data['failedReasons'] : null;
        $this->container['elb'] = isset($data['elb']) ? $data['elb'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['endpoints'] === null) {
            $invalidProperties[] = "'endpoints' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['numberOfNode'] === null) {
            $invalidProperties[] = "'numberOfNode' can't be null";
        }
        if ($this->container['recentEvent'] === null) {
            $invalidProperties[] = "'recentEvent' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['publicIp'] === null) {
            $invalidProperties[] = "'publicIp' can't be null";
        }
        if ($this->container['publicEndpoints'] === null) {
            $invalidProperties[] = "'publicEndpoints' can't be null";
        }
        if ($this->container['actionProgress'] === null) {
            $invalidProperties[] = "'actionProgress' can't be null";
        }
        if ($this->container['subStatus'] === null) {
            $invalidProperties[] = "'subStatus' can't be null";
        }
        if ($this->container['taskStatus'] === null) {
            $invalidProperties[] = "'taskStatus' can't be null";
        }
        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
        }
        if ($this->container['nodeTypeId'] === null) {
            $invalidProperties[] = "'nodeTypeId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['privateIp'] === null) {
            $invalidProperties[] = "'privateIp' can't be null";
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
    *  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 集群名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**： 集群状态。 **取值范围**： - CREATING：创建中 - ACTIVE：可用 - FAILED：不可用 - CREATE_FAILED：创建失败 - DELETING：删除中 - DELETE_FAILED：删除失败 - DELETED：已删除 - FROZEN：普通冻结 - POLICE_FROZEN：公安冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version **参数解释**： 数据仓库版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets updated
    *  **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated **参数解释**： 集群上次修改时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets created
    *  **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created **参数解释**： 集群创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port **参数解释**： 集群服务端口。 **取值范围**： 8000~30000
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets endpoints
    *  **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Endpoints[]
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Endpoints[] $endpoints **参数解释**： 集群的内网连接信息。 **取值范围**： 非空对象数组。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets nodes
    *  **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Nodes[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Nodes[] $nodes **参数解释**： 集群实例。 **取值范围**： 非空对象数组。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 集群标签。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Tags[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Tags[] $tags **参数解释**： 集群标签。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName **参数解释**： 管理员用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets numberOfNode
    *  **参数解释**： 节点数量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getNumberOfNode()
    {
        return $this->container['numberOfNode'];
    }

    /**
    * Sets numberOfNode
    *
    * @param int $numberOfNode **参数解释**： 节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNumberOfNode($numberOfNode)
    {
        $this->container['numberOfNode'] = $numberOfNode;
        return $this;
    }

    /**
    * Gets recentEvent
    *  **参数解释**： 事件数。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getRecentEvent()
    {
        return $this->container['recentEvent'];
    }

    /**
    * Sets recentEvent
    *
    * @param int $recentEvent **参数解释**： 事件数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRecentEvent($recentEvent)
    {
        $this->container['recentEvent'] = $recentEvent;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**： 可用区。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone **参数解释**： 可用区。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释**： 企业项目ID，对集群指定企业项目。如果未指定，则使用默认企业项目“default”的ID，即0。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId **参数解释**： 虚拟私有云ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId **参数解释**： 子网ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PublicIp
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PublicIp $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets publicEndpoints
    *  **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PublicEndpoints[]
    */
    public function getPublicEndpoints()
    {
        return $this->container['publicEndpoints'];
    }

    /**
    * Sets publicEndpoints
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PublicEndpoints[] $publicEndpoints **参数解释**： 公网IP地址，如果未指定，则默认不使用公网连接。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicEndpoints($publicEndpoints)
    {
        $this->container['publicEndpoints'] = $publicEndpoints;
        return $this;
    }

    /**
    * Gets actionProgress
    *  **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    *
    * @return map[string,string]
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param map[string,string] $actionProgress **参数解释**： 任务信息，由key、value组成。key值为正在进行的任务，value值为正在进行任务的进度。 **取值范围**： key值的有效值包括但不限于以下： - CREATING：创建中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - REDISTRIBUTING：重分布中 - ELB_BINDING：弹性负载均衡绑定中 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_SWITCHING：弹性负载均衡切换中 - NETWORK_CONFIGURING：网络配置中 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BINDING：登录开通中 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中 - REPAIRING：修复中
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets subStatus
    *  **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    *
    * @return string
    */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
    * Sets subStatus
    *
    * @param string $subStatus **参数解释**： “可用”集群状态的子状态。 **取值范围**： 有效值包括： - NORMAL：正常 - READONLY：只读 - REDISTRIBUTING：重分布中 - REDISTRIBUTION-FAILURE：重分布失败 - UNBALANCED：非均衡 - UNBALANCED | READONLY：非均衡，只读 - DEGRADED：节点故障 - DEGRADED | READONLY：节点故障，只读 - DEGRADED | UNBALANCED：节点故障，非均衡 - UNBALANCED | REDISTRIBUTING：非均衡，重分布中 - UNBALANCED | REDISTRIBUTION-FAILURE：非均衡，重分布失败 - READONLY | REDISTRIBUTION-FAILURE：只读，重分布失败 - UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：非均衡，只读，重分布失败 - DEGRADED | REDISTRIBUTION-FAILURE：节点故障，重分布失败 - DEGRADED | UNBALANCED | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY | REDISTRIBUTION-FAILURE：节点故障，非均衡，只读，重分布失败 - DEGRADED | UNBALANCED | READONLY：节点故障，非均衡，只读
    *
    * @return $this
    */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;
        return $this;
    }

    /**
    * Gets taskStatus
    *  **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    *
    * @return string
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string $taskStatus **参数解释**： 集群管理任务。 **取值范围**： 有效值包括但不限于以下： - UNFREEZING：解冻中 - FREEZING：冻结中 - RESTORING：恢复中 - SNAPSHOTTING：快照中 - GROWING：扩容中 - REBOOTING：重启中 - SETTING_CONFIGURATION：安全设置配置中 - CONFIGURING_EXT_DATASOURCE：MRS连接配置中 - DELETING_EXT_DATASOURCE：删除MRS连接 - REBOOT_FAILURE：重启失败 - RESIZE_FAILURE：扩容失败 - ADD_CN_ING：增加CN中 - DEL_CN_ING：删除CN中 - CREATING_NODE：添加节点 - CREATE_NODE_FAILED：添加节点失败 - DELETING_NODE：删除节点 - DELETE_NODE_FAILED：删除节点失败 - REDISTRIBUTING：重分布中 - REDISTRIBUTE_FAILURE：重分布失败 - WAITING_REDISTRIBUTION：待重分布 - REDISTRIBUTION_PAUSED：重分布暂停 - ELB_BINDING：弹性负载均衡绑定中 - ELB_BIND_FAILED：弹性负载均衡绑定失败 - ELB_UNBINDING：弹性负载均衡解绑中 - ELB_UNBIND_FAILED：弹性负载均衡解绑失败 - ELB_SWITCHING：弹性负载均衡切换中 - ELB_SWITCHING_FAILED：弹性负载均衡切换失败 - NETWORK_CONFIGURING：网络配置中 - NETWORK_CONFIG_FAILED：网络配置失败 - DISK_EXPAND_FAILED：磁盘扩容失败 - DISK_EXPANDING：磁盘扩容中 - ACTIVE_STANDY_SWITCHOVER：主备恢复中 - ACTIVE_STANDY_SWITCHOVER_FAILURE：主备恢复失败 - CLUSTER_SHRINK_FAILED：缩容失败 - CLUSTER_SHRINKING：缩容中 - SHRINK_CHECK_FAILED：缩容检测失败 - SHRINK_CHECKING：缩容检测中 - FLAVOR_RESIZING_FAILED：规格变更失败 - FLAVOR_RESIZING：规格变更中 - MANAGE_IP_BIND_FAILED：登录开通失败 - MANAGE_IP_BINDING：登录开通中 - ORDER_PENDING：订单待支付 - FINE_GRAINED_RESTORING：细粒度恢复中 - DR_RECOVERING：容灾恢复中
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets parameterGroup
    *  parameterGroup
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ParameterGroup|null
    */
    public function getParameterGroup()
    {
        return $this->container['parameterGroup'];
    }

    /**
    * Sets parameterGroup
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ParameterGroup|null $parameterGroup parameterGroup
    *
    * @return $this
    */
    public function setParameterGroup($parameterGroup)
    {
        $this->container['parameterGroup'] = $parameterGroup;
        return $this;
    }

    /**
    * Gets nodeType
    *  **参数解释**： 集群规格。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string $nodeType **参数解释**： 集群规格。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets nodeTypeId
    *  **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getNodeTypeId()
    {
        return $this->container['nodeTypeId'];
    }

    /**
    * Sets nodeTypeId
    *
    * @param string $nodeTypeId **参数解释**： 集群规格ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeTypeId($nodeTypeId)
    {
        $this->container['nodeTypeId'] = $nodeTypeId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets orderId
    *  **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId **参数解释**： 订单ID，仅包周期场景返回。非空时可用于区分当前是包周期集群。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    *
    * @return string[]
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string[] $privateIp **参数解释**： 内网IP地址列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets maintainWindow
    *  maintainWindow
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\MaintainWindow|null
    */
    public function getMaintainWindow()
    {
        return $this->container['maintainWindow'];
    }

    /**
    * Sets maintainWindow
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\MaintainWindow|null $maintainWindow maintainWindow
    *
    * @return $this
    */
    public function setMaintainWindow($maintainWindow)
    {
        $this->container['maintainWindow'] = $maintainWindow;
        return $this;
    }

    /**
    * Gets resizeInfo
    *  resizeInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ResizeInfo|null
    */
    public function getResizeInfo()
    {
        return $this->container['resizeInfo'];
    }

    /**
    * Sets resizeInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ResizeInfo|null $resizeInfo resizeInfo
    *
    * @return $this
    */
    public function setResizeInfo($resizeInfo)
    {
        $this->container['resizeInfo'] = $resizeInfo;
        return $this;
    }

    /**
    * Gets failedReasons
    *  failedReasons
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\FailedReason|null
    */
    public function getFailedReasons()
    {
        return $this->container['failedReasons'];
    }

    /**
    * Sets failedReasons
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\FailedReason|null $failedReasons failedReasons
    *
    * @return $this
    */
    public function setFailedReasons($failedReasons)
    {
        $this->container['failedReasons'] = $failedReasons;
        return $this;
    }

    /**
    * Gets elb
    *  elb
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ElbResp|null
    */
    public function getElb()
    {
        return $this->container['elb'];
    }

    /**
    * Sets elb
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ElbResp|null $elb elb
    *
    * @return $this
    */
    public function setElb($elb)
    {
        $this->container['elb'] = $elb;
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

