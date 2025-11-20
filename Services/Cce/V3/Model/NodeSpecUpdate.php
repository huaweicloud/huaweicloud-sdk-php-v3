<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSpecUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSpecUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    * az  **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    * os  **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * login  login
    * rootVolumeUpdate  rootVolumeUpdate
    * dataVolumesUpdate  **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    * storage  storage
    * runtime  runtime
    * taints  **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    * waitPostInstallFinish  **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    * k8sTags  **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    * userTags  **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    * nodeNameTemplate  nodeNameTemplate
    * initializedConditions  **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    * serverEnterpriseProjectId  **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    * nodeNicSpecUpdate  nodeNicSpecUpdate
    * extendParam  extendParam
    * publicIp  publicIp
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'az' => 'string',
            'os' => 'string',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\Login',
            'rootVolumeUpdate' => '\HuaweiCloud\SDK\Cce\V3\Model\Volume',
            'dataVolumesUpdate' => '\HuaweiCloud\SDK\Cce\V3\Model\Volume[]',
            'storage' => '\HuaweiCloud\SDK\Cce\V3\Model\Storage',
            'runtime' => '\HuaweiCloud\SDK\Cce\V3\Model\Runtime',
            'taints' => '\HuaweiCloud\SDK\Cce\V3\Model\Taint[]',
            'waitPostInstallFinish' => 'bool',
            'k8sTags' => 'map[string,string]',
            'userTags' => '\HuaweiCloud\SDK\Cce\V3\Model\UserTag[]',
            'nodeNameTemplate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdateNodeNameTemplate',
            'initializedConditions' => 'string[]',
            'serverEnterpriseProjectId' => 'string',
            'nodeNicSpecUpdate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdateNodeNicSpecUpdate',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\NodePoolUpdateExtendParam',
            'publicIp' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeEIPSpec'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    * az  **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    * os  **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * login  login
    * rootVolumeUpdate  rootVolumeUpdate
    * dataVolumesUpdate  **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    * storage  storage
    * runtime  runtime
    * taints  **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    * waitPostInstallFinish  **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    * k8sTags  **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    * userTags  **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    * nodeNameTemplate  nodeNameTemplate
    * initializedConditions  **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    * serverEnterpriseProjectId  **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    * nodeNicSpecUpdate  nodeNicSpecUpdate
    * extendParam  extendParam
    * publicIp  publicIp
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'az' => null,
        'os' => null,
        'login' => null,
        'rootVolumeUpdate' => null,
        'dataVolumesUpdate' => null,
        'storage' => null,
        'runtime' => null,
        'taints' => null,
        'waitPostInstallFinish' => null,
        'k8sTags' => null,
        'userTags' => null,
        'nodeNameTemplate' => null,
        'initializedConditions' => null,
        'serverEnterpriseProjectId' => null,
        'nodeNicSpecUpdate' => null,
        'extendParam' => null,
        'publicIp' => null
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
    * flavor  **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    * az  **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    * os  **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * login  login
    * rootVolumeUpdate  rootVolumeUpdate
    * dataVolumesUpdate  **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    * storage  storage
    * runtime  runtime
    * taints  **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    * waitPostInstallFinish  **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    * k8sTags  **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    * userTags  **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    * nodeNameTemplate  nodeNameTemplate
    * initializedConditions  **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    * serverEnterpriseProjectId  **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    * nodeNicSpecUpdate  nodeNicSpecUpdate
    * extendParam  extendParam
    * publicIp  publicIp
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'az' => 'az',
            'os' => 'os',
            'login' => 'login',
            'rootVolumeUpdate' => 'rootVolumeUpdate',
            'dataVolumesUpdate' => 'dataVolumesUpdate',
            'storage' => 'storage',
            'runtime' => 'runtime',
            'taints' => 'taints',
            'waitPostInstallFinish' => 'waitPostInstallFinish',
            'k8sTags' => 'k8sTags',
            'userTags' => 'userTags',
            'nodeNameTemplate' => 'nodeNameTemplate',
            'initializedConditions' => 'initializedConditions',
            'serverEnterpriseProjectId' => 'serverEnterpriseProjectID',
            'nodeNicSpecUpdate' => 'nodeNicSpecUpdate',
            'extendParam' => 'extendParam',
            'publicIp' => 'publicIP'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    * az  **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    * os  **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * login  login
    * rootVolumeUpdate  rootVolumeUpdate
    * dataVolumesUpdate  **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    * storage  storage
    * runtime  runtime
    * taints  **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    * waitPostInstallFinish  **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    * k8sTags  **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    * userTags  **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    * nodeNameTemplate  nodeNameTemplate
    * initializedConditions  **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    * serverEnterpriseProjectId  **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    * nodeNicSpecUpdate  nodeNicSpecUpdate
    * extendParam  extendParam
    * publicIp  publicIp
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'az' => 'setAz',
            'os' => 'setOs',
            'login' => 'setLogin',
            'rootVolumeUpdate' => 'setRootVolumeUpdate',
            'dataVolumesUpdate' => 'setDataVolumesUpdate',
            'storage' => 'setStorage',
            'runtime' => 'setRuntime',
            'taints' => 'setTaints',
            'waitPostInstallFinish' => 'setWaitPostInstallFinish',
            'k8sTags' => 'setK8sTags',
            'userTags' => 'setUserTags',
            'nodeNameTemplate' => 'setNodeNameTemplate',
            'initializedConditions' => 'setInitializedConditions',
            'serverEnterpriseProjectId' => 'setServerEnterpriseProjectId',
            'nodeNicSpecUpdate' => 'setNodeNicSpecUpdate',
            'extendParam' => 'setExtendParam',
            'publicIp' => 'setPublicIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    * az  **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    * os  **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    * login  login
    * rootVolumeUpdate  rootVolumeUpdate
    * dataVolumesUpdate  **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    * storage  storage
    * runtime  runtime
    * taints  **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    * waitPostInstallFinish  **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    * k8sTags  **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    * userTags  **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    * nodeNameTemplate  nodeNameTemplate
    * initializedConditions  **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    * serverEnterpriseProjectId  **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    * nodeNicSpecUpdate  nodeNicSpecUpdate
    * extendParam  extendParam
    * publicIp  publicIp
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'az' => 'getAz',
            'os' => 'getOs',
            'login' => 'getLogin',
            'rootVolumeUpdate' => 'getRootVolumeUpdate',
            'dataVolumesUpdate' => 'getDataVolumesUpdate',
            'storage' => 'getStorage',
            'runtime' => 'getRuntime',
            'taints' => 'getTaints',
            'waitPostInstallFinish' => 'getWaitPostInstallFinish',
            'k8sTags' => 'getK8sTags',
            'userTags' => 'getUserTags',
            'nodeNameTemplate' => 'getNodeNameTemplate',
            'initializedConditions' => 'getInitializedConditions',
            'serverEnterpriseProjectId' => 'getServerEnterpriseProjectId',
            'nodeNicSpecUpdate' => 'getNodeNicSpecUpdate',
            'extendParam' => 'getExtendParam',
            'publicIp' => 'getPublicIp'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['rootVolumeUpdate'] = isset($data['rootVolumeUpdate']) ? $data['rootVolumeUpdate'] : null;
        $this->container['dataVolumesUpdate'] = isset($data['dataVolumesUpdate']) ? $data['dataVolumesUpdate'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
        $this->container['waitPostInstallFinish'] = isset($data['waitPostInstallFinish']) ? $data['waitPostInstallFinish'] : null;
        $this->container['k8sTags'] = isset($data['k8sTags']) ? $data['k8sTags'] : null;
        $this->container['userTags'] = isset($data['userTags']) ? $data['userTags'] : null;
        $this->container['nodeNameTemplate'] = isset($data['nodeNameTemplate']) ? $data['nodeNameTemplate'] : null;
        $this->container['initializedConditions'] = isset($data['initializedConditions']) ? $data['initializedConditions'] : null;
        $this->container['serverEnterpriseProjectId'] = isset($data['serverEnterpriseProjectId']) ? $data['serverEnterpriseProjectId'] : null;
        $this->container['nodeNicSpecUpdate'] = isset($data['nodeNicSpecUpdate']) ? $data['nodeNicSpecUpdate'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) > 50)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) < 1)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['flavor']) && !preg_match("/^[A-Za-z0-9-_.]+$/", $this->container['flavor'])) {
                $invalidProperties[] = "invalid value for 'flavor', must be conform to the pattern /^[A-Za-z0-9-_.]+$/.";
            }
            if (!is_null($this->container['az']) && (mb_strlen($this->container['az']) > 200)) {
                $invalidProperties[] = "invalid value for 'az', the character length must be smaller than or equal to 200.";
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
    * Gets flavor
    *  **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释：** 节点的规格。  **约束限制**： 节点的规格不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **az** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围：** CCE支持的节点规格请参考[节点规格说明](cce_02_0368.xml)获取。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets az
    *  **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string|null $az **参数解释**： 节点所在的可用区，需要指定可用区（AZ）的名称。  **约束限制**： 节点的可用区不允许修改。 > 仅在删除节点池的默认伸缩组场景，允许设置为空字符串。当且仅当 **flavor** 字段也设置为空字符串时，才能删除默认伸缩组。如果节点池没有扩容伸缩组，默认伸缩组无法删除。  **取值范围**： [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk) **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
        return $this;
    }

    /**
    * Gets os
    *  **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os **参数解释**： 节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。 **约束限制**： - 若当前集群版本不支持该OS类型，则会自动替换为当前集群版本支持的同系列OS类型。 - 若在创建节点时指定了extendParam中的alpha.cce/NodeImageID参数，可以不填写此参数。 - 该参数缺省时，CCE会根据集群版本自动选择支持的OS版本。 - 创建节点池时，该参数为必选。 - 若创建节点时使用共享磁盘空间，即磁盘初始化配置管理参数使用storage，且StorageGroups中virtualSpaces的name字段指定为share，该参数为必选。  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Login|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Login|null $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets rootVolumeUpdate
    *  rootVolumeUpdate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Volume|null
    */
    public function getRootVolumeUpdate()
    {
        return $this->container['rootVolumeUpdate'];
    }

    /**
    * Sets rootVolumeUpdate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Volume|null $rootVolumeUpdate rootVolumeUpdate
    *
    * @return $this
    */
    public function setRootVolumeUpdate($rootVolumeUpdate)
    {
        $this->container['rootVolumeUpdate'] = $rootVolumeUpdate;
        return $this;
    }

    /**
    * Gets dataVolumesUpdate
    *  **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Volume[]|null
    */
    public function getDataVolumesUpdate()
    {
        return $this->container['dataVolumesUpdate'];
    }

    /**
    * Sets dataVolumesUpdate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Volume[]|null $dataVolumesUpdate **参数解释**： 节点的数据盘参数。针对专属云节点，参数解释与rootVolume一致。 **约束限制**： 磁盘挂载上限为虚拟机不超过16块，裸金属不超过10块。在此基础上还受限于虚拟机/裸金属规格可挂载磁盘数上限。（目前支持通过控制台和API为CCE节点添加多块数据盘）。 如果数据盘正供容器运行时和Kubelet组件使用，则不可被卸载，否则将导致节点不可用。
    *
    * @return $this
    */
    public function setDataVolumesUpdate($dataVolumesUpdate)
    {
        $this->container['dataVolumesUpdate'] = $dataVolumesUpdate;
        return $this;
    }

    /**
    * Gets storage
    *  storage
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Storage|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Storage|null $storage storage
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets runtime
    *  runtime
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null $runtime runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets taints
    *  **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Taint[]|null
    */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
    * Sets taints
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Taint[]|null $taints **参数解释**： 支持给创建出来的节点加Taints来设置反亲和性。每条Taints包含以下3个参数：  - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀。 - Value：必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 - Effect：只可选NoSchedule，PreferNoSchedule或NoExecute。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。  示例：  ``` \"taints\": [{   \"key\": \"status\",   \"value\": \"unavailable\",   \"effect\": \"NoSchedule\" }, {   \"key\": \"looks\",   \"value\": \"bad\",   \"effect\": \"NoSchedule\" }] ```  **约束限制**： - taints配置不超过20条。 - 参数未指定时将不会更新节点池的自定义Taints。 - 参数为空数组时将删除节点池的自定义Taints。
    *
    * @return $this
    */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;
        return $this;
    }

    /**
    * Gets waitPostInstallFinish
    *  **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @return bool|null
    */
    public function getWaitPostInstallFinish()
    {
        return $this->container['waitPostInstallFinish'];
    }

    /**
    * Sets waitPostInstallFinish
    *
    * @param bool|null $waitPostInstallFinish **参数解释：** 该参数用于控制更新节点池时 **post-install脚本执行完成前允许节点调度** 行为。当该参数未设置或者为false时，在kubernetes节点就绪时，容器即可被调度到可用节点。当该参数为true时，在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **约束限制：** 不涉及  **取值范围：** - false：在kubernetes节点就绪时，容器即可被调度到可用节点。           - true：在kubernetes节点就绪时且post-install脚本执行完成时，容器才可被调度到可用节点。  **默认取值：** false
    *
    * @return $this
    */
    public function setWaitPostInstallFinish($waitPostInstallFinish)
    {
        $this->container['waitPostInstallFinish'] = $waitPostInstallFinish;
        return $this;
    }

    /**
    * Gets k8sTags
    *  **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    *
    * @return map[string,string]|null
    */
    public function getK8sTags()
    {
        return $this->container['k8sTags'];
    }

    /**
    * Sets k8sTags
    *
    * @param map[string,string]|null $k8sTags **参数解释**： 格式为key/value键值对。 - Key：必须以字母或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符；另外可以使用DNS子域作为前缀，例如example.com/my-key，DNS子域最长253个字符。 - Value：可以为空或者非空字符串，非空字符串必须以字符或数字开头和结尾，可以包含字母、数字、连字符、下划线和点，最长63个字符。 字段使用场景：在节点创建场景下，支持指定初始值，查询时不返回该字段；在节点池场景下，创建节点池时节点模板参数中支持指定初始值，查询时支持返回该字段；在其余场景下，查询时都不会返回该字段。   示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```  **约束限制**： - 键值对个数不超过20条。 - 参数未指定时将不会更新节点池的自定义K8s标签。 - 参数为空对象时将删除节点池的自定义K8s标签。
    *
    * @return $this
    */
    public function setK8sTags($k8sTags)
    {
        $this->container['k8sTags'] = $k8sTags;
        return $this;
    }

    /**
    * Gets userTags
    *  **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UserTag[]|null
    */
    public function getUserTags()
    {
        return $this->container['userTags'];
    }

    /**
    * Sets userTags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UserTag[]|null $userTags **参数解释**： 云服务器标签（资源标签）。 **约束限制**： - 键必须唯一，CCE支持的最大用户自定义标签数量依region而定，自定义标签数上限为8个。 - 参数未指定时将不会更新节点池的自定义云服务器标签。 - 参数为空数组时将删除节点池的自定义云服务器标签。
    *
    * @return $this
    */
    public function setUserTags($userTags)
    {
        $this->container['userTags'] = $userTags;
        return $this;
    }

    /**
    * Gets nodeNameTemplate
    *  nodeNameTemplate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdateNodeNameTemplate|null
    */
    public function getNodeNameTemplate()
    {
        return $this->container['nodeNameTemplate'];
    }

    /**
    * Sets nodeNameTemplate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdateNodeNameTemplate|null $nodeNameTemplate nodeNameTemplate
    *
    * @return $this
    */
    public function setNodeNameTemplate($nodeNameTemplate)
    {
        $this->container['nodeNameTemplate'] = $nodeNameTemplate;
        return $this;
    }

    /**
    * Gets initializedConditions
    *  **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    *
    * @return string[]|null
    */
    public function getInitializedConditions()
    {
        return $this->container['initializedConditions'];
    }

    /**
    * Sets initializedConditions
    *
    * @param string[]|null $initializedConditions **参数解释**： 自定义初始化标记，默认值为空。  CCE节点在初始化完成之前，会打上初始化未完成污点（node.cloudprovider.kubernetes.io/uninitialized）防止pod调度到节点上。用户在创建节点时，可以通过设置initializedConditions参数，控制污点的移除时间（默认不设置超时时间）。  使用示例如下： 1. 创建节点，传入参数 \"initializedConditions\": [\"CCEInitial\", \"CustomedInitial\"]； 2. 更新节点，传入参数 \"initializedConditions\": [\"NodeInitial\"]，节点池新建的节点注册到集群时默认会被设置为不可调度； 3. 用户在执行完自定义初始化操作后，调用k8s接口（例如PATCH /v1/nodes/{node_ip}/status）更新节点的conditions，插入type为CCEInitial、CustomedInitial的两个标记，状态为True，如下所示：   ```   status:     conditions:     - type: CCEInitial       status: 'True'     - type: CustomedInitial       status: 'True'   ``` 4. CCE组件轮询节点的status.Conditions，查看是否存在type为CCEInitial、CustomedInitial的condition，若存在且status字段值为True，认为节点初始化完成，则移除初始化污点； 5. initializedConditions支持设置超时时间，用户可以在创节点时传入，如：\"initializedConditions\": [\"CCEInitial:15m\", \"CustomedInitial:15m\"]，表示超时时间为15分钟，达到超时时间后，当CCE组件轮询到节点时会自动忽略初始化condition，移除初始化污点。  **约束限制**： - initializedConditions中超时时间取值范围为[1-99]秒 - 必须以字母、数字组成，长度范围1-20位。 - 标记数量不超过2个。 - 超时时间仅支持分钟(m)单位。
    *
    * @return $this
    */
    public function setInitializedConditions($initializedConditions)
    {
        $this->container['initializedConditions'] = $initializedConditions;
        return $this;
    }

    /**
    * Gets serverEnterpriseProjectId
    *  **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    *
    * @return string|null
    */
    public function getServerEnterpriseProjectId()
    {
        return $this->container['serverEnterpriseProjectId'];
    }

    /**
    * Sets serverEnterpriseProjectId
    *
    * @param string|null $serverEnterpriseProjectId **参数解释**： 服务器企业项目ID。CCE服务不实现EPS相关特性，该字段仅用于同步服务器企业项目ID。 **约束限制**： 创建节点/节点池场景：可指定已存在企业项目，当取值为空时，该字段继承集群企业项目属性。 更新节点池场景：配置修改后仅会对新增节点的服务器生效，存量节点需前往EPS界面迁移。 **取值范围**： 不涉及 **默认取值**： 如果更新时不指定值，不会更新该字段。 当该字段为空时，返回集群企业项目。
    *
    * @return $this
    */
    public function setServerEnterpriseProjectId($serverEnterpriseProjectId)
    {
        $this->container['serverEnterpriseProjectId'] = $serverEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets nodeNicSpecUpdate
    *  nodeNicSpecUpdate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdateNodeNicSpecUpdate|null
    */
    public function getNodeNicSpecUpdate()
    {
        return $this->container['nodeNicSpecUpdate'];
    }

    /**
    * Sets nodeNicSpecUpdate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdateNodeNicSpecUpdate|null $nodeNicSpecUpdate nodeNicSpecUpdate
    *
    * @return $this
    */
    public function setNodeNicSpecUpdate($nodeNicSpecUpdate)
    {
        $this->container['nodeNicSpecUpdate'] = $nodeNicSpecUpdate;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodePoolUpdateExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodePoolUpdateExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeEIPSpec|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeEIPSpec|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
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

