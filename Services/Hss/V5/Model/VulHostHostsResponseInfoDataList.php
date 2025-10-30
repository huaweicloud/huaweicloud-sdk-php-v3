<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostHostsResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostHostsResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: agent id **取值范围**: 字符长度0-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * regionName  **参数解释**: 地域 **取值范围**: 字符长度0-32位
    * publicIp  **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
    * assetValue  **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * severityLevel  **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    * score  **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
    * handleStatus  **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    * vulNumWithRepairPriorityList  **参数解释**: 各个漏洞修复优先级下的漏洞数量
    * vulIdsInfo  vulIdsInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'agentId' => 'string',
            'hostName' => 'string',
            'regionName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'osType' => 'string',
            'assetValue' => 'string',
            'scanTime' => 'int',
            'severityLevel' => 'string',
            'score' => 'int',
            'version' => 'string',
            'handleStatus' => 'string',
            'vulNumWithRepairPriorityList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulHostHostsResponseInfoVulNumWithRepairPriorityList[]',
            'vulIdsInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\VulHostHostsResponseInfoVulIdsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: agent id **取值范围**: 字符长度0-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * regionName  **参数解释**: 地域 **取值范围**: 字符长度0-32位
    * publicIp  **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
    * assetValue  **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * severityLevel  **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    * score  **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
    * handleStatus  **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    * vulNumWithRepairPriorityList  **参数解释**: 各个漏洞修复优先级下的漏洞数量
    * vulIdsInfo  vulIdsInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'agentId' => null,
        'hostName' => null,
        'regionName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'groupId' => null,
        'groupName' => null,
        'osType' => null,
        'assetValue' => null,
        'scanTime' => 'int64',
        'severityLevel' => null,
        'score' => 'int32',
        'version' => null,
        'handleStatus' => null,
        'vulNumWithRepairPriorityList' => null,
        'vulIdsInfo' => null
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
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: agent id **取值范围**: 字符长度0-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * regionName  **参数解释**: 地域 **取值范围**: 字符长度0-32位
    * publicIp  **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
    * assetValue  **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * severityLevel  **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    * score  **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
    * handleStatus  **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    * vulNumWithRepairPriorityList  **参数解释**: 各个漏洞修复优先级下的漏洞数量
    * vulIdsInfo  vulIdsInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'hostName' => 'host_name',
            'regionName' => 'region_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'osType' => 'os_type',
            'assetValue' => 'asset_value',
            'scanTime' => 'scan_time',
            'severityLevel' => 'severity_level',
            'score' => 'score',
            'version' => 'version',
            'handleStatus' => 'handle_status',
            'vulNumWithRepairPriorityList' => 'vul_num_with_repair_priority_list',
            'vulIdsInfo' => 'vul_ids_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: agent id **取值范围**: 字符长度0-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * regionName  **参数解释**: 地域 **取值范围**: 字符长度0-32位
    * publicIp  **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
    * assetValue  **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * severityLevel  **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    * score  **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
    * handleStatus  **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    * vulNumWithRepairPriorityList  **参数解释**: 各个漏洞修复优先级下的漏洞数量
    * vulIdsInfo  vulIdsInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'hostName' => 'setHostName',
            'regionName' => 'setRegionName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'osType' => 'setOsType',
            'assetValue' => 'setAssetValue',
            'scanTime' => 'setScanTime',
            'severityLevel' => 'setSeverityLevel',
            'score' => 'setScore',
            'version' => 'setVersion',
            'handleStatus' => 'setHandleStatus',
            'vulNumWithRepairPriorityList' => 'setVulNumWithRepairPriorityList',
            'vulIdsInfo' => 'setVulIdsInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 主机id **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: agent id **取值范围**: 字符长度0-64位
    * hostName  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    * regionName  **参数解释**: 地域 **取值范围**: 字符长度0-32位
    * publicIp  **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
    * assetValue  **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    * severityLevel  **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    * score  **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
    * handleStatus  **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    * vulNumWithRepairPriorityList  **参数解释**: 各个漏洞修复优先级下的漏洞数量
    * vulIdsInfo  vulIdsInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'hostName' => 'getHostName',
            'regionName' => 'getRegionName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'osType' => 'getOsType',
            'assetValue' => 'getAssetValue',
            'scanTime' => 'getScanTime',
            'severityLevel' => 'getSeverityLevel',
            'score' => 'getScore',
            'version' => 'getVersion',
            'handleStatus' => 'getHandleStatus',
            'vulNumWithRepairPriorityList' => 'getVulNumWithRepairPriorityList',
            'vulIdsInfo' => 'getVulIdsInfo'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['vulNumWithRepairPriorityList'] = isset($data['vulNumWithRepairPriorityList']) ? $data['vulNumWithRepairPriorityList'] : null;
        $this->container['vulIdsInfo'] = isset($data['vulIdsInfo']) ? $data['vulIdsInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 4096)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] > 100)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 主机id **取值范围**: 字符长度0-64位
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
    * @param string|null $hostId **参数解释**: 主机id **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: agent id **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: agent id **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
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
    * @param string|null $hostName **参数解释**: 主机名称 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets regionName
    *  **参数解释**: 地域 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName **参数解释**: 地域 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
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
    * @param string|null $publicIp **参数解释**: 服务器公网ip **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
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
    * @param string|null $privateIp **参数解释**: 服务器私网ip **取值范围**: 字符长度0-4096位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
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
    * @param string|null $groupId **参数解释**: 服务器组id **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
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
    * @param string|null $osType **参数解释**: 操作系统类型 **取值范围**: - Linux ：Linux系统 - Windows ：Windows系统
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
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
    * @param string|null $assetValue **参数解释**: 资产重要性 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释**: 主机风险 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets score
    *  **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    *
    * @return int|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param int|null $score **参数解释**: 主机风险分数 **取值范围**: 最小值0，最大值100
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
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
    * @param string|null $version **参数解释**: 主机配额 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 主机配额 **取值范围**: - unhandled：待处理 - handled：已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets vulNumWithRepairPriorityList
    *  **参数解释**: 各个漏洞修复优先级下的漏洞数量
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulHostHostsResponseInfoVulNumWithRepairPriorityList[]|null
    */
    public function getVulNumWithRepairPriorityList()
    {
        return $this->container['vulNumWithRepairPriorityList'];
    }

    /**
    * Sets vulNumWithRepairPriorityList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulHostHostsResponseInfoVulNumWithRepairPriorityList[]|null $vulNumWithRepairPriorityList **参数解释**: 各个漏洞修复优先级下的漏洞数量
    *
    * @return $this
    */
    public function setVulNumWithRepairPriorityList($vulNumWithRepairPriorityList)
    {
        $this->container['vulNumWithRepairPriorityList'] = $vulNumWithRepairPriorityList;
        return $this;
    }

    /**
    * Gets vulIdsInfo
    *  vulIdsInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulHostHostsResponseInfoVulIdsInfo|null
    */
    public function getVulIdsInfo()
    {
        return $this->container['vulIdsInfo'];
    }

    /**
    * Sets vulIdsInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulHostHostsResponseInfoVulIdsInfo|null $vulIdsInfo vulIdsInfo
    *
    * @return $this
    */
    public function setVulIdsInfo($vulIdsInfo)
    {
        $this->container['vulIdsInfo'] = $vulIdsInfo;
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

