<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostRiskResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostRiskResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  服务器ID
    * agentStatus  Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'agentStatus' => 'string',
            'installResultCode' => 'string',
            'version' => 'string',
            'protectStatus' => 'string',
            'detectResult' => 'string',
            'asset' => 'int',
            'vulnerability' => 'int',
            'baseline' => 'int',
            'intrusion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  服务器ID
    * agentStatus  Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'agentStatus' => null,
        'installResultCode' => null,
        'version' => null,
        'protectStatus' => null,
        'detectResult' => null,
        'asset' => 'int32',
        'vulnerability' => 'int32',
        'baseline' => 'int32',
        'intrusion' => 'int32'
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
    * hostId  服务器ID
    * agentStatus  Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'agentStatus' => 'agent_status',
            'installResultCode' => 'install_result_code',
            'version' => 'version',
            'protectStatus' => 'protect_status',
            'detectResult' => 'detect_result',
            'asset' => 'asset',
            'vulnerability' => 'vulnerability',
            'baseline' => 'baseline',
            'intrusion' => 'intrusion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  服务器ID
    * agentStatus  Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'agentStatus' => 'setAgentStatus',
            'installResultCode' => 'setInstallResultCode',
            'version' => 'setVersion',
            'protectStatus' => 'setProtectStatus',
            'detectResult' => 'setDetectResult',
            'asset' => 'setAsset',
            'vulnerability' => 'setVulnerability',
            'baseline' => 'setBaseline',
            'intrusion' => 'setIntrusion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  服务器ID
    * agentStatus  Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'agentStatus' => 'getAgentStatus',
            'installResultCode' => 'getInstallResultCode',
            'version' => 'getVersion',
            'protectStatus' => 'getProtectStatus',
            'detectResult' => 'getDetectResult',
            'asset' => 'getAsset',
            'vulnerability' => 'getVulnerability',
            'baseline' => 'getBaseline',
            'intrusion' => 'getIntrusion'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['installResultCode'] = isset($data['installResultCode']) ? $data['installResultCode'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['vulnerability'] = isset($data['vulnerability']) ? $data['vulnerability'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['intrusion'] = isset($data['intrusion']) ? $data['intrusion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installResultCode']) && (mb_strlen($this->container['installResultCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'installResultCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['installResultCode']) && (mb_strlen($this->container['installResultCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'installResultCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'asset', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] < 0)) {
                $invalidProperties[] = "invalid value for 'asset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baseline']) && ($this->container['baseline'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'baseline', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['baseline']) && ($this->container['baseline'] < 0)) {
                $invalidProperties[] = "invalid value for 'baseline', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] < 0)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be bigger than or equal to 0.";
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
    * Gets hostId
    *  服务器ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentStatus
    *  Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus Agent状态，包含如下5种。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets installResultCode
    *  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    *
    * @return string|null
    */
    public function getInstallResultCode()
    {
        return $this->container['installResultCode'];
    }

    /**
    * Sets installResultCode
    *
    * @param string|null $installResultCode 安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    *
    * @return $this
    */
    public function setInstallResultCode($installResultCode)
    {
        $this->container['installResultCode'] = $installResultCode;
        return $this;
    }

    /**
    * Gets version
    *  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets detectResult
    *  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    *
    * @return string|null
    */
    public function getDetectResult()
    {
        return $this->container['detectResult'];
    }

    /**
    * Sets detectResult
    *
    * @param string|null $detectResult 云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets asset
    *  资产风险
    *
    * @return int|null
    */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
    * Sets asset
    *
    * @param int|null $asset 资产风险
    *
    * @return $this
    */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;
        return $this;
    }

    /**
    * Gets vulnerability
    *  漏洞风险
    *
    * @return int|null
    */
    public function getVulnerability()
    {
        return $this->container['vulnerability'];
    }

    /**
    * Sets vulnerability
    *
    * @param int|null $vulnerability 漏洞风险
    *
    * @return $this
    */
    public function setVulnerability($vulnerability)
    {
        $this->container['vulnerability'] = $vulnerability;
        return $this;
    }

    /**
    * Gets baseline
    *  基线风险
    *
    * @return int|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param int|null $baseline 基线风险
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets intrusion
    *  入侵风险
    *
    * @return int|null
    */
    public function getIntrusion()
    {
        return $this->container['intrusion'];
    }

    /**
    * Sets intrusion
    *
    * @param int|null $intrusion 入侵风险
    *
    * @return $this
    */
    public function setIntrusion($intrusion)
    {
        $this->container['intrusion'] = $intrusion;
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

