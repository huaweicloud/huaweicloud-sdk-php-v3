<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AcceptScheduledEventResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AcceptScheduledEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
    * catalog  **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    * type  **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
    * description  **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
    * state  **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    * instanceType  **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    * instanceId  **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    * publishTime  **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * startTime  **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * finishTime  **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * notBefore  **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    * probeMsg  **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * redeployType  **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'catalog' => 'string',
            'type' => 'string',
            'description' => 'string',
            'state' => 'string',
            'instanceType' => 'string',
            'instanceId' => 'string',
            'nodeName' => 'string',
            'poolName' => 'string',
            'poolDisplayName' => 'string',
            'publishTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'notBefore' => 'string',
            'probeMsg' => 'string',
            'redeployType' => 'string[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
    * catalog  **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    * type  **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
    * description  **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
    * state  **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    * instanceType  **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    * instanceId  **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    * publishTime  **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * startTime  **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * finishTime  **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * notBefore  **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    * probeMsg  **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * redeployType  **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'catalog' => null,
        'type' => null,
        'description' => null,
        'state' => null,
        'instanceType' => null,
        'instanceId' => null,
        'nodeName' => null,
        'poolName' => null,
        'poolDisplayName' => null,
        'publishTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'notBefore' => null,
        'probeMsg' => null,
        'redeployType' => null,
        'xRequestId' => null
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
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
    * catalog  **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    * type  **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
    * description  **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
    * state  **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    * instanceType  **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    * instanceId  **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    * publishTime  **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * startTime  **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * finishTime  **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * notBefore  **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    * probeMsg  **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * redeployType  **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'catalog' => 'catalog',
            'type' => 'type',
            'description' => 'description',
            'state' => 'state',
            'instanceType' => 'instanceType',
            'instanceId' => 'instanceId',
            'nodeName' => 'nodeName',
            'poolName' => 'poolName',
            'poolDisplayName' => 'poolDisplayName',
            'publishTime' => 'publishTime',
            'startTime' => 'startTime',
            'finishTime' => 'finishTime',
            'notBefore' => 'notBefore',
            'probeMsg' => 'probeMsg',
            'redeployType' => 'redeployType',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
    * catalog  **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    * type  **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
    * description  **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
    * state  **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    * instanceType  **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    * instanceId  **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    * publishTime  **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * startTime  **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * finishTime  **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * notBefore  **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    * probeMsg  **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * redeployType  **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'catalog' => 'setCatalog',
            'type' => 'setType',
            'description' => 'setDescription',
            'state' => 'setState',
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'nodeName' => 'setNodeName',
            'poolName' => 'setPoolName',
            'poolDisplayName' => 'setPoolDisplayName',
            'publishTime' => 'setPublishTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'notBefore' => 'setNotBefore',
            'probeMsg' => 'setProbeMsg',
            'redeployType' => 'setRedeployType',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
    * catalog  **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    * type  **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
    * description  **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
    * state  **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    * instanceType  **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    * instanceId  **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    * publishTime  **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * startTime  **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * finishTime  **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * notBefore  **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    * probeMsg  **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * redeployType  **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'catalog' => 'getCatalog',
            'type' => 'getType',
            'description' => 'getDescription',
            'state' => 'getState',
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'nodeName' => 'getNodeName',
            'poolName' => 'getPoolName',
            'poolDisplayName' => 'getPoolDisplayName',
            'publishTime' => 'getPublishTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'notBefore' => 'getNotBefore',
            'probeMsg' => 'getProbeMsg',
            'redeployType' => 'getRedeployType',
            'xRequestId' => 'getXRequestId'
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
    const CATALOG_SOFTWARE = 'software';
    const CATALOG_HARDWARE = 'hardware';
    const TYPE_SYSTEM_MAINTENANCE = 'system-maintenance';
    const TYPE_LOCALDISK_RECOVERY = 'localdisk-recovery';
    const TYPE_NODE_REBOOT = 'node_reboot';
    const TYPE_OPERATION_REQUEST = 'operation-request';
    const TYPE_NODE_MAINTENANCE = 'node_maintenance';
    const TYPE_NODE_REDEPLOY = 'node_redeploy';
    const TYPE_NODE_LOCALDISK_RECOVERY = 'node_localdisk_recovery';
    const STATE_INQUIRING = 'inquiring';
    const STATE_SCHEDULED = 'scheduled';
    const STATE_EXECUTING = 'executing';
    const STATE_COMPLETED = 'completed';
    const STATE_FAILED = 'failed';
    const STATE_CANCELED = 'canceled';
    const INSTANCE_TYPE_DEVSERVER = 'devserver';
    const INSTANCE_TYPE_LITE_CLUSTER = 'lite-cluster';
    const INSTANCE_TYPE_STANDARD = 'standard';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCatalogAllowableValues()
    {
        return [
            self::CATALOG_SOFTWARE,
            self::CATALOG_HARDWARE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SYSTEM_MAINTENANCE,
            self::TYPE_LOCALDISK_RECOVERY,
            self::TYPE_NODE_REBOOT,
            self::TYPE_OPERATION_REQUEST,
            self::TYPE_NODE_MAINTENANCE,
            self::TYPE_NODE_REDEPLOY,
            self::TYPE_NODE_LOCALDISK_RECOVERY,
        ];
    }

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_DEVSERVER,
            self::INSTANCE_TYPE_LITE_CLUSTER,
            self::INSTANCE_TYPE_STANDARD,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['poolName'] = isset($data['poolName']) ? $data['poolName'] : null;
        $this->container['poolDisplayName'] = isset($data['poolDisplayName']) ? $data['poolDisplayName'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['probeMsg'] = isset($data['probeMsg']) ? $data['probeMsg'] : null;
        $this->container['redeployType'] = isset($data['redeployType']) ? $data['redeployType'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCatalogAllowableValues();
                if (!is_null($this->container['catalog']) && !in_array($this->container['catalog'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'catalog', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstanceTypeAllowableValues();
                if (!is_null($this->container['instanceType']) && !in_array($this->container['instanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceType', must be one of '%s'",
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
    * Gets id
    *  **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：计划事件ID，取值查询计划事件列表接口的event_id字段。 系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets catalog
    *  **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    *
    * @return string|null
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param string|null $catalog **参数解释**：事件分类。 **取值范围**：可选值如下： - hardware：硬件维修。 - software：软件维修。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
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
    * @param string|null $type **参数解释**：事件类型。 **取值范围**：可选值如下： - system-maintenance：系统维护 - localdisk-recovery：本地盘恢复 - node_reboot：节点重启 - operation-request：运维授权 - node_maintenance：超节点维护 - node_redeploy：超节点重部署 - node_localdisk_recovery 超节点本地盘恢复。
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
    *  **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：对计划事件的描述信息。系统自动生成。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释**：事件状态。 **取值范围**：可选择值如下： - inquiring: 待授权, - scheduled: 待执行, - executing: 执行中, - completed: 执行成功 - failed: 执行失败 - canceled: 取消
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets instanceType
    *  **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType **参数解释**：节点类型归属。 **取值范围**可选择值如下： - devserver：lite-server节点 - lite-cluster lite池 - standard 标准池
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
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
    * @param string|null $instanceId **参数解释**：服务器ID。计算服务系统自动生成的实例ID，长度小于63。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
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
    * @param string|null $nodeName **参数解释**：节点名称，取值自节点详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
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
    *  **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
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
    * @param string|null $poolName **参数解释**：资源池名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，小于63个字符。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolName($poolName)
    {
        $this->container['poolName'] = $poolName;
        return $this;
    }

    /**
    * Gets poolDisplayName
    *  **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPoolDisplayName()
    {
        return $this->container['poolDisplayName'];
    }

    /**
    * Sets poolDisplayName
    *
    * @param string|null $poolDisplayName **参数解释**：资源池对外显示的名称, lite-cluster、standard才具有，取值自资源池详情的metadata.name字段。只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolDisplayName($poolDisplayName)
    {
        $this->container['poolDisplayName'] = $poolDisplayName;
        return $this;
    }

    /**
    * Gets publishTime
    *  **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param string|null $publishTime **参数解释**：事件发布时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $startTime **参数解释**：事件开始时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime **参数解释**：事件完成时间。 **约束限制**：格式为UTC时间字符串：2025-09-15T07:02:30Z。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets notBefore
    *  **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    *
    * @return string|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param string|null $notBefore **参数解释**：事件计划执行开始时间，格式为UTC时间字符串：2025-09-15T07:02:30Z。 **约束限制**：大于当前时间。 **取值范围**：不涉及。 **默认取值**：不填表示立即执行。
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets probeMsg
    *  **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getProbeMsg()
    {
        return $this->container['probeMsg'];
    }

    /**
    * Sets probeMsg
    *
    * @param string|null $probeMsg **参数解释**：提示信息。 **约束限制**：系统自动生成，只能以小写字母开头，数字、中划线组成，不能以中划线结尾，长度小于63字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setProbeMsg($probeMsg)
    {
        $this->container['probeMsg'] = $probeMsg;
        return $this;
    }

    /**
    * Gets redeployType
    *  **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    *
    * @return string[]|null
    */
    public function getRedeployType()
    {
        return $this->container['redeployType'];
    }

    /**
    * Sets redeployType
    *
    * @param string[]|null $redeployType **参数解释**：节点的重部署类型。 **约束限制**：不涉及。 **取值范围**：可选值如下：- HARD：表示支持强制重部署, - SOFT：表示支持重部署 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setRedeployType($redeployType)
    {
        $this->container['redeployType'] = $redeployType;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

