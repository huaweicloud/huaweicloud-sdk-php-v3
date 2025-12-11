<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeAgentsRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeAgentsRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateAll  **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * version  **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * protectStatus  **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupId  **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    * assetValue  资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateAll' => 'bool',
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'version' => 'string',
            'protectStatus' => 'string',
            'osType' => 'string',
            'policyGroupId' => 'string',
            'groupId' => 'string',
            'assetValue' => 'string',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateAll  **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * version  **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * protectStatus  **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupId  **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    * assetValue  资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateAll' => null,
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'version' => null,
        'protectStatus' => null,
        'osType' => null,
        'policyGroupId' => null,
        'groupId' => null,
        'assetValue' => null,
        'hostIdList' => null
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
    * operateAll  **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * version  **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * protectStatus  **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupId  **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    * assetValue  资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateAll' => 'operate_all',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'version' => 'version',
            'protectStatus' => 'protect_status',
            'osType' => 'os_type',
            'policyGroupId' => 'policy_group_id',
            'groupId' => 'group_id',
            'assetValue' => 'asset_value',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateAll  **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * version  **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * protectStatus  **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupId  **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    * assetValue  资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'operateAll' => 'setOperateAll',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'version' => 'setVersion',
            'protectStatus' => 'setProtectStatus',
            'osType' => 'setOsType',
            'policyGroupId' => 'setPolicyGroupId',
            'groupId' => 'setGroupId',
            'assetValue' => 'setAssetValue',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateAll  **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * version  **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * protectStatus  **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupId  **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    * assetValue  资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'operateAll' => 'getOperateAll',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'version' => 'getVersion',
            'protectStatus' => 'getProtectStatus',
            'osType' => 'getOsType',
            'policyGroupId' => 'getPolicyGroupId',
            'groupId' => 'getGroupId',
            'assetValue' => 'getAssetValue',
            'hostIdList' => 'getHostIdList'
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
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operateAll'] === null) {
            $invalidProperties[] = "'operateAll' can't be null";
        }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && !preg_match("/^hss.version.basic|hss.version.advanced|hss.version.enterprise|hss.version.premium|hss.version.wtp|hss.version.container.enterprise$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^hss.version.basic|hss.version.advanced|hss.version.enterprise|hss.version.premium|hss.version.wtp|hss.version.container.enterprise$/.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && !preg_match("/^closed|opened$/", $this->container['protectStatus'])) {
                $invalidProperties[] = "invalid value for 'protectStatus', must be conform to the pattern /^closed|opened$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^Linux|Windows$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^Linux|Windows$/.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['policyGroupId']) && !preg_match("/^.*$/", $this->container['policyGroupId'])) {
                $invalidProperties[] = "invalid value for 'policyGroupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
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
    * Gets operateAll
    *  **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    *
    * @return bool
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool $operateAll **参数解释**: 是否全量升级 **约束限制**: 不涉及 **取值范围**: - true: 全量升级，不需要填写host_id_list，按照其余筛选条件筛选符合升级的服务器。 - false: 非全量升级，需要填写host_id_list，只升级host_id_list中包含的服务器。  **默认取值**: false
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
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
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
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
    * @param string|null $version **参数解释**： 防护版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
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
    *  **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
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
    * @param string|null $protectStatus **参数解释**： 防护状态 **约束限制**: 不涉及 **取值范围**： - closed ：未防护。 - opened ：防护中。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**： 操作系统类型 **约束限制**: 不涉及 **取值范围**： - Linux：Linux系统。 - Windows：Windows系统。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    *
    * @return string|null
    */
    public function getPolicyGroupId()
    {
        return $this->container['policyGroupId'];
    }

    /**
    * Sets policyGroupId
    *
    * @param string|null $policyGroupId **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**: 主机所属服务器组的唯一标识ID **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue 资产重要性 **参数解释**： 资产重要性 **约束限制**: 不涉及 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

