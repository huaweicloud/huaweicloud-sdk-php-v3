<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecretConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecretConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disableDefaultAddonCredSecret  **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    * disableNodeAgencyCredSecret  **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    * disableDefaultImagePullSecret  **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disableDefaultAddonCredSecret' => 'bool',
            'disableNodeAgencyCredSecret' => 'bool',
            'disableDefaultImagePullSecret' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disableDefaultAddonCredSecret  **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    * disableNodeAgencyCredSecret  **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    * disableDefaultImagePullSecret  **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disableDefaultAddonCredSecret' => null,
        'disableNodeAgencyCredSecret' => null,
        'disableDefaultImagePullSecret' => null
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
    * disableDefaultAddonCredSecret  **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    * disableNodeAgencyCredSecret  **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    * disableDefaultImagePullSecret  **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disableDefaultAddonCredSecret' => 'disableDefaultAddonCredSecret',
            'disableNodeAgencyCredSecret' => 'disableNodeAgencyCredSecret',
            'disableDefaultImagePullSecret' => 'disableDefaultImagePullSecret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disableDefaultAddonCredSecret  **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    * disableNodeAgencyCredSecret  **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    * disableDefaultImagePullSecret  **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @var string[]
    */
    protected static $setters = [
            'disableDefaultAddonCredSecret' => 'setDisableDefaultAddonCredSecret',
            'disableNodeAgencyCredSecret' => 'setDisableNodeAgencyCredSecret',
            'disableDefaultImagePullSecret' => 'setDisableDefaultImagePullSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disableDefaultAddonCredSecret  **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    * disableNodeAgencyCredSecret  **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    * disableDefaultImagePullSecret  **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @var string[]
    */
    protected static $getters = [
            'disableDefaultAddonCredSecret' => 'getDisableDefaultAddonCredSecret',
            'disableNodeAgencyCredSecret' => 'getDisableNodeAgencyCredSecret',
            'disableDefaultImagePullSecret' => 'getDisableDefaultImagePullSecret'
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
        $this->container['disableDefaultAddonCredSecret'] = isset($data['disableDefaultAddonCredSecret']) ? $data['disableDefaultAddonCredSecret'] : null;
        $this->container['disableNodeAgencyCredSecret'] = isset($data['disableNodeAgencyCredSecret']) ? $data['disableNodeAgencyCredSecret'] : null;
        $this->container['disableDefaultImagePullSecret'] = isset($data['disableDefaultImagePullSecret']) ? $data['disableDefaultImagePullSecret'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets disableDefaultAddonCredSecret
    *  **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    *
    * @return bool|null
    */
    public function getDisableDefaultAddonCredSecret()
    {
        return $this->container['disableDefaultAddonCredSecret'];
    }

    /**
    * Sets disableDefaultAddonCredSecret
    *
    * @param bool|null $disableDefaultAddonCredSecret **参数解释：** 是否在集群中禁用默认插件凭证（paas.elb、paas.aksk secret）。该Secret的data内容是临时AK/SK数据，部分插件在未配置自定义委托时会使用它作为IAM凭证访问其他云服务。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 仅当集群中所有需要访问云服务的插件均已配置自定义委托后，才能禁用该Secret。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** 新建集群默认true
    *
    * @return $this
    */
    public function setDisableDefaultAddonCredSecret($disableDefaultAddonCredSecret)
    {
        $this->container['disableDefaultAddonCredSecret'] = $disableDefaultAddonCredSecret;
        return $this;
    }

    /**
    * Gets disableNodeAgencyCredSecret
    *  **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @return bool|null
    */
    public function getDisableNodeAgencyCredSecret()
    {
        return $this->container['disableNodeAgencyCredSecret'];
    }

    /**
    * Sets disableNodeAgencyCredSecret
    *
    * @param bool|null $disableNodeAgencyCredSecret **参数解释：** 是否在集群中禁用节点凭证（node-agency-cred secret）。该Secret的data内容是临时AK/SK数据，节点上安装的系统组件默认使用该凭证。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保已为每个节点/节点池配置委托，且委托至少具备cce:node:get、cce::assumeAgencyForPodIdentity权限，否则禁用该Secret会导致节点安装、运行异常。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @return $this
    */
    public function setDisableNodeAgencyCredSecret($disableNodeAgencyCredSecret)
    {
        $this->container['disableNodeAgencyCredSecret'] = $disableNodeAgencyCredSecret;
        return $this;
    }

    /**
    * Gets disableDefaultImagePullSecret
    *  **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @return bool|null
    */
    public function getDisableDefaultImagePullSecret()
    {
        return $this->container['disableDefaultImagePullSecret'];
    }

    /**
    * Sets disableDefaultImagePullSecret
    *
    * @param bool|null $disableDefaultImagePullSecret **参数解释：** 是否在集群中禁用默认镜像访问凭证（default-secret secret）。该Secret的data内容是SWR临时登录指令，用于SWR的私有镜像拉取。 [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/usermanual-cce/cce_10_1111.html)。](tag:hws) [更多信息请参见[禁用集群中静态存储的临时凭据说明](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_1111.html)。](tag:hws_hk) **约束限制：** 需确保集群中的工作负载不使用default-secret作为镜像拉取凭证（配置了镜像免密下载或者使用自定义镜像拉取凭证），否则禁用该Secret后可能会导致镜像拉取失败。 **取值范围：** - true: 禁用 - false: 启用  **默认取值：** false
    *
    * @return $this
    */
    public function setDisableDefaultImagePullSecret($disableDefaultImagePullSecret)
    {
        $this->container['disableDefaultImagePullSecret'] = $disableDefaultImagePullSecret;
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

