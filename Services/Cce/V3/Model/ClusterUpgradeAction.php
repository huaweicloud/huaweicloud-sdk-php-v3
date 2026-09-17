<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterUpgradeAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterUpgradeAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addons  **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodeOrder  **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodePoolOrder  **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * strategy  strategy
    * targetVersion  **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    * isOnlyUpgrade  **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    * agencyName  **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addons' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeAddonConfig[]',
            'nodeOrder' => 'map[string,\HuaweiCloud\SDK\Cce\V3\Model\NodePriority[]]',
            'nodePoolOrder' => 'map[string,int]',
            'strategy' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy',
            'targetVersion' => 'string',
            'isOnlyUpgrade' => 'bool',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addons  **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodeOrder  **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodePoolOrder  **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * strategy  strategy
    * targetVersion  **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    * isOnlyUpgrade  **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    * agencyName  **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addons' => null,
        'nodeOrder' => null,
        'nodePoolOrder' => null,
        'strategy' => null,
        'targetVersion' => null,
        'isOnlyUpgrade' => null,
        'agencyName' => null
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
    * addons  **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodeOrder  **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodePoolOrder  **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * strategy  strategy
    * targetVersion  **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    * isOnlyUpgrade  **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    * agencyName  **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addons' => 'addons',
            'nodeOrder' => 'nodeOrder',
            'nodePoolOrder' => 'nodePoolOrder',
            'strategy' => 'strategy',
            'targetVersion' => 'targetVersion',
            'isOnlyUpgrade' => 'isOnlyUpgrade',
            'agencyName' => 'agencyName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addons  **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodeOrder  **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodePoolOrder  **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * strategy  strategy
    * targetVersion  **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    * isOnlyUpgrade  **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    * agencyName  **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @var string[]
    */
    protected static $setters = [
            'addons' => 'setAddons',
            'nodeOrder' => 'setNodeOrder',
            'nodePoolOrder' => 'setNodePoolOrder',
            'strategy' => 'setStrategy',
            'targetVersion' => 'setTargetVersion',
            'isOnlyUpgrade' => 'setIsOnlyUpgrade',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addons  **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodeOrder  **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nodePoolOrder  **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * strategy  strategy
    * targetVersion  **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    * isOnlyUpgrade  **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    * agencyName  **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @var string[]
    */
    protected static $getters = [
            'addons' => 'getAddons',
            'nodeOrder' => 'getNodeOrder',
            'nodePoolOrder' => 'getNodePoolOrder',
            'strategy' => 'getStrategy',
            'targetVersion' => 'getTargetVersion',
            'isOnlyUpgrade' => 'getIsOnlyUpgrade',
            'agencyName' => 'getAgencyName'
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
        $this->container['addons'] = isset($data['addons']) ? $data['addons'] : null;
        $this->container['nodeOrder'] = isset($data['nodeOrder']) ? $data['nodeOrder'] : null;
        $this->container['nodePoolOrder'] = isset($data['nodePoolOrder']) ? $data['nodePoolOrder'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['isOnlyUpgrade'] = isset($data['isOnlyUpgrade']) ? $data['isOnlyUpgrade'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['strategy'] === null) {
            $invalidProperties[] = "'strategy' can't be null";
        }
        if ($this->container['targetVersion'] === null) {
            $invalidProperties[] = "'targetVersion' can't be null";
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
    * Gets addons
    *  **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeAddonConfig[]|null
    */
    public function getAddons()
    {
        return $this->container['addons'];
    }

    /**
    * Sets addons
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeAddonConfig[]|null $addons **参数解释：** 插件配置列表，CCE会在集群升级过程中按照配置对插件进行升级 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAddons($addons)
    {
        $this->container['addons'] = $addons;
        return $this;
    }

    /**
    * Gets nodeOrder
    *  **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return map[string,\HuaweiCloud\SDK\Cce\V3\Model\NodePriority[]]|null
    */
    public function getNodeOrder()
    {
        return $this->container['nodeOrder'];
    }

    /**
    * Sets nodeOrder
    *
    * @param map[string,\HuaweiCloud\SDK\Cce\V3\Model\NodePriority[]]|null $nodeOrder **参数解释：** 节点池内节点升级顺序配置。key表示节点池ID，默认节点池取值为\"DefaultPool\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNodeOrder($nodeOrder)
    {
        $this->container['nodeOrder'] = $nodeOrder;
        return $this;
    }

    /**
    * Gets nodePoolOrder
    *  **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return map[string,int]|null
    */
    public function getNodePoolOrder()
    {
        return $this->container['nodePoolOrder'];
    }

    /**
    * Sets nodePoolOrder
    *
    * @param map[string,int]|null $nodePoolOrder **参数解释：** 节点池升级顺序配置，key/value对格式。key表示节点池ID，默认节点池取值为\"DefaultPool\"，value表示对应节点池的优先级，默认值为0，优先级最低，数值越大优先级越高 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNodePoolOrder($nodePoolOrder)
    {
        $this->container['nodePoolOrder'] = $nodePoolOrder;
        return $this;
    }

    /**
    * Gets strategy
    *  strategy
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy $strategy strategy
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets targetVersion
    *  **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string $targetVersion **参数解释：** 升级的目标集群版本，例如\"v1.23\" **约束限制：** 只能升级到高版本，不允许填写等于或低于当前集群版本的值 **取值范围：** CCE支持的集群版本 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets isOnlyUpgrade
    *  **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    *
    * @return bool|null
    */
    public function getIsOnlyUpgrade()
    {
        return $this->container['isOnlyUpgrade'];
    }

    /**
    * Sets isOnlyUpgrade
    *
    * @param bool|null $isOnlyUpgrade **参数解释：** 是否在集群升级流程中跳过升级前检查。 **约束限制：** 不涉及 **取值范围：** - false：表示在集群升级流程中会执行升级前检查。 - true：表示在集群升级流程中跳过升级前检查。  **默认取值：** false
    *
    * @return $this
    */
    public function setIsOnlyUpgrade($isOnlyUpgrade)
    {
        $this->container['isOnlyUpgrade'] = $isOnlyUpgrade;
        return $this;
    }

    /**
    * Gets agencyName
    *  **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName **参数解释：** 指定集群使用的委托。该委托用于生成集群中组件使用的临时访问凭证，在集群中自动创建其他相关云服务的资源时会使用该委托权限。 当不传时，集群将优先继承原有配置，若原先未配置，则自动选择使用CCE的默认委托CCEAutoClusterAgency；当传空时，自动选择使用CCE的默认委托CCEAutoClusterAgency。  [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0556.html)](tag:hws) [ > 关于CCE系统委托的说明详情参见[系统委托说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0556.html)](tag:hws_hk)  **约束限制：** 仅v1.28.15-r90、v1.29.15-r50、v1.30.14-r50、v1.31.14-r10、v1.32.9-r10、v1.33.7-r10、v1.34.3-r0及以上版本集群支持该参数 **取值范围：** 不涉及 **默认取值：** 空
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

