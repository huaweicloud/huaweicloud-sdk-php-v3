<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPageNoticesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPageNoticesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * pageLocation  访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'pageLocation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * pageLocation  访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'pageLocation' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * pageLocation  访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'pageLocation' => 'page_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * pageLocation  访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'pageLocation' => 'setPageLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * pageLocation  访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'pageLocation' => 'getPageLocation'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['pageLocation'] = isset($data['pageLocation']) ? $data['pageLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['pageLocation']) && (mb_strlen($this->container['pageLocation']) > 128)) {
                $invalidProperties[] = "invalid value for 'pageLocation', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pageLocation']) && (mb_strlen($this->container['pageLocation']) < 1)) {
                $invalidProperties[] = "invalid value for 'pageLocation', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageLocation']) && !preg_match("/^hostMgmt|hostProtectQuota|containerNodeList|containerProtectQuota|containerMirror|container|clusterAgent|vulView|vulHostView|ransomwareProtection|policyMgmt|antiVirus|hostAlarm|containerAlarm$/", $this->container['pageLocation'])) {
                $invalidProperties[] = "invalid value for 'pageLocation', must be conform to the pattern /^hostMgmt|hostProtectQuota|containerNodeList|containerProtectQuota|containerMirror|container|clusterAgent|vulView|vulHostView|ransomwareProtection|policyMgmt|antiVirus|hostAlarm|containerAlarm$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets pageLocation
    *  访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @return string|null
    */
    public function getPageLocation()
    {
        return $this->container['pageLocation'];
    }

    /**
    * Sets pageLocation
    *
    * @param string|null $pageLocation 访问页面位置，包含下面这些页面 - hostMgmt : 主机管理-云服务器 - hostProtectQuota : 主机管理-防护配额 - containerNodeList : 容器管理-容器节点管理 - containerProtectQuota : 容器管理-容器防护配额 - containerMirror : 容器管理-容器镜像 - container : 容器管理-容器 - clusterAgent : 容器管理-集群Agent管理 - vulView : 漏洞管理-漏洞视图 - vulHostView : 漏洞管理-主机视图 - ransomwareProtection : 勒索病毒防护 - policyMgmt : 策略管理 - antiVirus : 病毒查杀 - hostAlarm : 安全告警事件-主机安全告警 - containerAlarm : 安全告警事件-容器安全告警
    *
    * @return $this
    */
    public function setPageLocation($pageLocation)
    {
        $this->container['pageLocation'] = $pageLocation;
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

