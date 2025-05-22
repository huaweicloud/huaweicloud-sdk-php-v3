<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolSpecUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolSpecUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeTemplate  nodeTemplate
    * initialNodeCount  **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    * ignoreInitialNodeCount  **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    * autoscaling  autoscaling
    * nodeManagementUpdate  nodeManagementUpdate
    * taintPolicyOnExistingNodes  **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    * labelPolicyOnExistingNodes  **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    * userTagsPolicyOnExistingNodes  **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    * extensionScaleGroups  节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeTemplate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdate',
            'initialNodeCount' => 'int',
            'ignoreInitialNodeCount' => 'bool',
            'autoscaling' => '\HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling',
            'nodeManagementUpdate' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeManagement',
            'taintPolicyOnExistingNodes' => 'string',
            'labelPolicyOnExistingNodes' => 'string',
            'userTagsPolicyOnExistingNodes' => 'string',
            'extensionScaleGroups' => '\HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeTemplate  nodeTemplate
    * initialNodeCount  **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    * ignoreInitialNodeCount  **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    * autoscaling  autoscaling
    * nodeManagementUpdate  nodeManagementUpdate
    * taintPolicyOnExistingNodes  **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    * labelPolicyOnExistingNodes  **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    * userTagsPolicyOnExistingNodes  **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    * extensionScaleGroups  节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeTemplate' => null,
        'initialNodeCount' => 'int32',
        'ignoreInitialNodeCount' => null,
        'autoscaling' => null,
        'nodeManagementUpdate' => null,
        'taintPolicyOnExistingNodes' => null,
        'labelPolicyOnExistingNodes' => null,
        'userTagsPolicyOnExistingNodes' => null,
        'extensionScaleGroups' => null
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
    * nodeTemplate  nodeTemplate
    * initialNodeCount  **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    * ignoreInitialNodeCount  **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    * autoscaling  autoscaling
    * nodeManagementUpdate  nodeManagementUpdate
    * taintPolicyOnExistingNodes  **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    * labelPolicyOnExistingNodes  **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    * userTagsPolicyOnExistingNodes  **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    * extensionScaleGroups  节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeTemplate' => 'nodeTemplate',
            'initialNodeCount' => 'initialNodeCount',
            'ignoreInitialNodeCount' => 'ignoreInitialNodeCount',
            'autoscaling' => 'autoscaling',
            'nodeManagementUpdate' => 'nodeManagementUpdate',
            'taintPolicyOnExistingNodes' => 'taintPolicyOnExistingNodes',
            'labelPolicyOnExistingNodes' => 'labelPolicyOnExistingNodes',
            'userTagsPolicyOnExistingNodes' => 'userTagsPolicyOnExistingNodes',
            'extensionScaleGroups' => 'extensionScaleGroups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeTemplate  nodeTemplate
    * initialNodeCount  **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    * ignoreInitialNodeCount  **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    * autoscaling  autoscaling
    * nodeManagementUpdate  nodeManagementUpdate
    * taintPolicyOnExistingNodes  **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    * labelPolicyOnExistingNodes  **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    * userTagsPolicyOnExistingNodes  **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    * extensionScaleGroups  节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeTemplate' => 'setNodeTemplate',
            'initialNodeCount' => 'setInitialNodeCount',
            'ignoreInitialNodeCount' => 'setIgnoreInitialNodeCount',
            'autoscaling' => 'setAutoscaling',
            'nodeManagementUpdate' => 'setNodeManagementUpdate',
            'taintPolicyOnExistingNodes' => 'setTaintPolicyOnExistingNodes',
            'labelPolicyOnExistingNodes' => 'setLabelPolicyOnExistingNodes',
            'userTagsPolicyOnExistingNodes' => 'setUserTagsPolicyOnExistingNodes',
            'extensionScaleGroups' => 'setExtensionScaleGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeTemplate  nodeTemplate
    * initialNodeCount  **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    * ignoreInitialNodeCount  **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    * autoscaling  autoscaling
    * nodeManagementUpdate  nodeManagementUpdate
    * taintPolicyOnExistingNodes  **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    * labelPolicyOnExistingNodes  **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    * userTagsPolicyOnExistingNodes  **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    * extensionScaleGroups  节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeTemplate' => 'getNodeTemplate',
            'initialNodeCount' => 'getInitialNodeCount',
            'ignoreInitialNodeCount' => 'getIgnoreInitialNodeCount',
            'autoscaling' => 'getAutoscaling',
            'nodeManagementUpdate' => 'getNodeManagementUpdate',
            'taintPolicyOnExistingNodes' => 'getTaintPolicyOnExistingNodes',
            'labelPolicyOnExistingNodes' => 'getLabelPolicyOnExistingNodes',
            'userTagsPolicyOnExistingNodes' => 'getUserTagsPolicyOnExistingNodes',
            'extensionScaleGroups' => 'getExtensionScaleGroups'
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
        $this->container['nodeTemplate'] = isset($data['nodeTemplate']) ? $data['nodeTemplate'] : null;
        $this->container['initialNodeCount'] = isset($data['initialNodeCount']) ? $data['initialNodeCount'] : null;
        $this->container['ignoreInitialNodeCount'] = isset($data['ignoreInitialNodeCount']) ? $data['ignoreInitialNodeCount'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['nodeManagementUpdate'] = isset($data['nodeManagementUpdate']) ? $data['nodeManagementUpdate'] : null;
        $this->container['taintPolicyOnExistingNodes'] = isset($data['taintPolicyOnExistingNodes']) ? $data['taintPolicyOnExistingNodes'] : null;
        $this->container['labelPolicyOnExistingNodes'] = isset($data['labelPolicyOnExistingNodes']) ? $data['labelPolicyOnExistingNodes'] : null;
        $this->container['userTagsPolicyOnExistingNodes'] = isset($data['userTagsPolicyOnExistingNodes']) ? $data['userTagsPolicyOnExistingNodes'] : null;
        $this->container['extensionScaleGroups'] = isset($data['extensionScaleGroups']) ? $data['extensionScaleGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['initialNodeCount'] === null) {
            $invalidProperties[] = "'initialNodeCount' can't be null";
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
    * Gets nodeTemplate
    *  nodeTemplate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdate|null
    */
    public function getNodeTemplate()
    {
        return $this->container['nodeTemplate'];
    }

    /**
    * Sets nodeTemplate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeSpecUpdate|null $nodeTemplate nodeTemplate
    *
    * @return $this
    */
    public function setNodeTemplate($nodeTemplate)
    {
        $this->container['nodeTemplate'] = $nodeTemplate;
        return $this;
    }

    /**
    * Gets initialNodeCount
    *  **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    *
    * @return int
    */
    public function getInitialNodeCount()
    {
        return $this->container['initialNodeCount'];
    }

    /**
    * Sets initialNodeCount
    *
    * @param int $initialNodeCount **参数解释：** 节点池期望节点个数。 **约束限制：** 更新节点池时，此字段为必填字段。 > 注意：如果更新节点池时不填此字段，节点池期望节点个数将取默认值0，如果此时节点池节点个数大于0将导致节点池缩容。  **取值范围：** 大于0，小于集群节点规模。 **默认取值：** 0
    *
    * @return $this
    */
    public function setInitialNodeCount($initialNodeCount)
    {
        $this->container['initialNodeCount'] = $initialNodeCount;
        return $this;
    }

    /**
    * Gets ignoreInitialNodeCount
    *  **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    *
    * @return bool|null
    */
    public function getIgnoreInitialNodeCount()
    {
        return $this->container['ignoreInitialNodeCount'];
    }

    /**
    * Sets ignoreInitialNodeCount
    *
    * @param bool|null $ignoreInitialNodeCount **参数解释：** 该参数用于控制更新节点池时 **节点池期望节点个数(spec.initialNodeCount)** 的默认行为。当该参数未设置或者为false时，如果用户请求Body体中未设置spec.initialNodeCount，更新时将自动初始化spec.initialNodeCount为0。当该参数为true时，将忽略spec.initialNodeCount参数。 > 当用户不需要更新节点池spec.initialNodeCount时，必须显示的设置该参数为true，同时在更新节点池Body体中不设置spec.initialNodeCount。  **约束限制：** 不涉及 **取值范围：** - false：更新节点池时，如果spec.initialNodeCount参数未设置，将初始化spec.initialNodeCount为0。 > 如果节点池当前spec.initialNodeCount 不等于0将导致节点池缩容。  - true：更新节点池时，忽略spec.initialNodeCount参数，节点池spec.initialNodeCount参数将保持原样。  **默认取值：** false
    *
    * @return $this
    */
    public function setIgnoreInitialNodeCount($ignoreInitialNodeCount)
    {
        $this->container['ignoreInitialNodeCount'] = $ignoreInitialNodeCount;
        return $this;
    }

    /**
    * Gets autoscaling
    *  autoscaling
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodePoolNodeAutoscaling|null $autoscaling autoscaling
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
        return $this;
    }

    /**
    * Gets nodeManagementUpdate
    *  nodeManagementUpdate
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeManagement|null
    */
    public function getNodeManagementUpdate()
    {
        return $this->container['nodeManagementUpdate'];
    }

    /**
    * Sets nodeManagementUpdate
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeManagement|null $nodeManagementUpdate nodeManagementUpdate
    *
    * @return $this
    */
    public function setNodeManagementUpdate($nodeManagementUpdate)
    {
        $this->container['nodeManagementUpdate'] = $nodeManagementUpdate;
        return $this;
    }

    /**
    * Gets taintPolicyOnExistingNodes
    *  **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    *
    * @return string|null
    */
    public function getTaintPolicyOnExistingNodes()
    {
        return $this->container['taintPolicyOnExistingNodes'];
    }

    /**
    * Sets taintPolicyOnExistingNodes
    *
    * @param string|null $taintPolicyOnExistingNodes **参数解释：** 是否同步K8S污点。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S污点的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池K8S污点将不会同步更新到存量节点上。  **默认取值：** 无
    *
    * @return $this
    */
    public function setTaintPolicyOnExistingNodes($taintPolicyOnExistingNodes)
    {
        $this->container['taintPolicyOnExistingNodes'] = $taintPolicyOnExistingNodes;
        return $this;
    }

    /**
    * Gets labelPolicyOnExistingNodes
    *  **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    *
    * @return string|null
    */
    public function getLabelPolicyOnExistingNodes()
    {
        return $this->container['labelPolicyOnExistingNodes'];
    }

    /**
    * Sets labelPolicyOnExistingNodes
    *
    * @param string|null $labelPolicyOnExistingNodes **参数解释：** 是否同步K8S标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，K8S标签的改动将会被同步更新到存量节点上。 - 填写为ignore，K8S标签将不会同步更新到存量节点上。  **默认取值：** 无
    *
    * @return $this
    */
    public function setLabelPolicyOnExistingNodes($labelPolicyOnExistingNodes)
    {
        $this->container['labelPolicyOnExistingNodes'] = $labelPolicyOnExistingNodes;
        return $this;
    }

    /**
    * Gets userTagsPolicyOnExistingNodes
    *  **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    *
    * @return string|null
    */
    public function getUserTagsPolicyOnExistingNodes()
    {
        return $this->container['userTagsPolicyOnExistingNodes'];
    }

    /**
    * Sets userTagsPolicyOnExistingNodes
    *
    * @param string|null $userTagsPolicyOnExistingNodes **参数解释：** 是否同步节点池资源标签。 **约束限制**： 不涉及 **取值范围：** - 填写为refresh，节点池资源标签标签的改动将会被同步更新到存量节点上。 - 填写为ignore，节点池资源标签标签将不会同步更新到存量节点上。  **默认取值：** 无
    *
    * @return $this
    */
    public function setUserTagsPolicyOnExistingNodes($userTagsPolicyOnExistingNodes)
    {
        $this->container['userTagsPolicyOnExistingNodes'] = $userTagsPolicyOnExistingNodes;
        return $this;
    }

    /**
    * Gets extensionScaleGroups
    *  节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup[]|null
    */
    public function getExtensionScaleGroups()
    {
        return $this->container['extensionScaleGroups'];
    }

    /**
    * Sets extensionScaleGroups
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ExtensionScaleGroup[]|null $extensionScaleGroups 节点池扩展伸缩组配置列表，详情参见ExtensionScaleGroup类型定义
    *
    * @return $this
    */
    public function setExtensionScaleGroups($extensionScaleGroups)
    {
        $this->container['extensionScaleGroups'] = $extensionScaleGroups;
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

