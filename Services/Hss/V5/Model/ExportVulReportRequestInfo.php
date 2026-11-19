<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportVulReportRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportVulReportRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * severityLevel  **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
    * handleStatus  **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    * status  **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetValue' => 'string',
            'groupName' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'severityLevel' => 'string',
            'handleStatus' => 'string',
            'status' => 'string',
            'hostIds' => 'string[]',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * severityLevel  **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
    * handleStatus  **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    * status  **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetValue' => null,
        'groupName' => null,
        'hostName' => null,
        'hostIp' => null,
        'severityLevel' => null,
        'handleStatus' => null,
        'status' => null,
        'hostIds' => null,
        'clusterId' => null
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
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * severityLevel  **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
    * handleStatus  **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    * status  **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetValue' => 'asset_value',
            'groupName' => 'group_name',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'severityLevel' => 'severity_level',
            'handleStatus' => 'handle_status',
            'status' => 'status',
            'hostIds' => 'host_ids',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * severityLevel  **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
    * handleStatus  **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    * status  **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'assetValue' => 'setAssetValue',
            'groupName' => 'setGroupName',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'severityLevel' => 'setSeverityLevel',
            'handleStatus' => 'setHandleStatus',
            'status' => 'setStatus',
            'hostIds' => 'setHostIds',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
    * groupName  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostName  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * hostIp  **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * severityLevel  **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
    * handleStatus  **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    * status  **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    * hostIds  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    * clusterId  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'assetValue' => 'getAssetValue',
            'groupName' => 'getGroupName',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'severityLevel' => 'getSeverityLevel',
            'handleStatus' => 'getHandleStatus',
            'status' => 'getStatus',
            'hostIds' => 'getHostIds',
            'clusterId' => 'getClusterId'
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
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 10)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 10)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['handleStatus'] === null) {
            $invalidProperties[] = "'handleStatus' can't be null";
        }
            if ((mb_strlen($this->container['handleStatus']) > 15)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
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
    * Gets assetValue
    *  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
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
    * @param string|null $assetValue **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
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
    * @param string|null $groupName **参数解释**： 服务器组名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
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
    * @param string|null $hostName **参数解释**： 主机名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**： 主机IP **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
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
    * @param string|null $severityLevel **参数解释**： 漏洞风险等级 **约束限制**： 不涉及 **取值范围**： - Security：安全 - High：高危 - Medium：中危 - Low：低危  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string $handleStatus **参数解释**： 漏洞处理状态 **约束限制**： 必填 **取值范围**： - handled：已处理 - unhandled：未处理  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 漏洞状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-32位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**： 主机ID列表 **约束限制**： 不涉及 **取值范围**： 0-1000个主机ID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**： 集群ID **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

