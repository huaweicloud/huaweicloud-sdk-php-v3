<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectionInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectionInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operatingSystem  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * ransomProtectionStatus  **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * protectionPolicyId  **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * createProtectionPolicy  createProtectionPolicy
    * backupProtectionStatus  **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * backupResources  backupResources
    * backupPolicyId  **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * backupCycle  backupCycle
    * agentIdList  **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operatingSystem' => 'string',
            'ransomProtectionStatus' => 'string',
            'protectionPolicyId' => 'string',
            'createProtectionPolicy' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectionProxyInfoRequestInfo',
            'backupProtectionStatus' => 'string',
            'backupResources' => '\HuaweiCloud\SDK\Hss\V5\Model\BackupResources',
            'backupPolicyId' => 'string',
            'backupCycle' => '\HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyRequestInfo1',
            'agentIdList' => 'string[]',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operatingSystem  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * ransomProtectionStatus  **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * protectionPolicyId  **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * createProtectionPolicy  createProtectionPolicy
    * backupProtectionStatus  **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * backupResources  backupResources
    * backupPolicyId  **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * backupCycle  backupCycle
    * agentIdList  **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operatingSystem' => null,
        'ransomProtectionStatus' => null,
        'protectionPolicyId' => null,
        'createProtectionPolicy' => null,
        'backupProtectionStatus' => null,
        'backupResources' => null,
        'backupPolicyId' => null,
        'backupCycle' => null,
        'agentIdList' => null,
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
    * operatingSystem  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * ransomProtectionStatus  **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * protectionPolicyId  **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * createProtectionPolicy  createProtectionPolicy
    * backupProtectionStatus  **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * backupResources  backupResources
    * backupPolicyId  **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * backupCycle  backupCycle
    * agentIdList  **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operatingSystem' => 'operating_system',
            'ransomProtectionStatus' => 'ransom_protection_status',
            'protectionPolicyId' => 'protection_policy_id',
            'createProtectionPolicy' => 'create_protection_policy',
            'backupProtectionStatus' => 'backup_protection_status',
            'backupResources' => 'backup_resources',
            'backupPolicyId' => 'backup_policy_id',
            'backupCycle' => 'backup_cycle',
            'agentIdList' => 'agent_id_list',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operatingSystem  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * ransomProtectionStatus  **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * protectionPolicyId  **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * createProtectionPolicy  createProtectionPolicy
    * backupProtectionStatus  **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * backupResources  backupResources
    * backupPolicyId  **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * backupCycle  backupCycle
    * agentIdList  **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'operatingSystem' => 'setOperatingSystem',
            'ransomProtectionStatus' => 'setRansomProtectionStatus',
            'protectionPolicyId' => 'setProtectionPolicyId',
            'createProtectionPolicy' => 'setCreateProtectionPolicy',
            'backupProtectionStatus' => 'setBackupProtectionStatus',
            'backupResources' => 'setBackupResources',
            'backupPolicyId' => 'setBackupPolicyId',
            'backupCycle' => 'setBackupCycle',
            'agentIdList' => 'setAgentIdList',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operatingSystem  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * ransomProtectionStatus  **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * protectionPolicyId  **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * createProtectionPolicy  createProtectionPolicy
    * backupProtectionStatus  **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    * backupResources  backupResources
    * backupPolicyId  **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * backupCycle  backupCycle
    * agentIdList  **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    * hostIdList  **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'operatingSystem' => 'getOperatingSystem',
            'ransomProtectionStatus' => 'getRansomProtectionStatus',
            'protectionPolicyId' => 'getProtectionPolicyId',
            'createProtectionPolicy' => 'getCreateProtectionPolicy',
            'backupProtectionStatus' => 'getBackupProtectionStatus',
            'backupResources' => 'getBackupResources',
            'backupPolicyId' => 'getBackupPolicyId',
            'backupCycle' => 'getBackupCycle',
            'agentIdList' => 'getAgentIdList',
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
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->container['ransomProtectionStatus'] = isset($data['ransomProtectionStatus']) ? $data['ransomProtectionStatus'] : null;
        $this->container['protectionPolicyId'] = isset($data['protectionPolicyId']) ? $data['protectionPolicyId'] : null;
        $this->container['createProtectionPolicy'] = isset($data['createProtectionPolicy']) ? $data['createProtectionPolicy'] : null;
        $this->container['backupProtectionStatus'] = isset($data['backupProtectionStatus']) ? $data['backupProtectionStatus'] : null;
        $this->container['backupResources'] = isset($data['backupResources']) ? $data['backupResources'] : null;
        $this->container['backupPolicyId'] = isset($data['backupPolicyId']) ? $data['backupPolicyId'] : null;
        $this->container['backupCycle'] = isset($data['backupCycle']) ? $data['backupCycle'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
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
        if ($this->container['operatingSystem'] === null) {
            $invalidProperties[] = "'operatingSystem' can't be null";
        }
            if ((mb_strlen($this->container['operatingSystem']) > 64)) {
                $invalidProperties[] = "invalid value for 'operatingSystem', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['operatingSystem']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatingSystem', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ransomProtectionStatus'] === null) {
            $invalidProperties[] = "'ransomProtectionStatus' can't be null";
        }
            if ((mb_strlen($this->container['ransomProtectionStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['ransomProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectionPolicyId']) && (mb_strlen($this->container['protectionPolicyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectionPolicyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectionPolicyId']) && (mb_strlen($this->container['protectionPolicyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionPolicyId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['backupProtectionStatus'] === null) {
            $invalidProperties[] = "'backupProtectionStatus' can't be null";
        }
            if ((mb_strlen($this->container['backupProtectionStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'backupProtectionStatus', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['backupProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupProtectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupPolicyId']) && (mb_strlen($this->container['backupPolicyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'backupPolicyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['backupPolicyId']) && (mb_strlen($this->container['backupPolicyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupPolicyId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['agentIdList'] === null) {
            $invalidProperties[] = "'agentIdList' can't be null";
        }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
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
    * Gets operatingSystem
    *  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
    * Sets operatingSystem
    *
    * @param string $operatingSystem **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
        return $this;
    }

    /**
    * Gets ransomProtectionStatus
    *  **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getRansomProtectionStatus()
    {
        return $this->container['ransomProtectionStatus'];
    }

    /**
    * Sets ransomProtectionStatus
    *
    * @param string $ransomProtectionStatus **参数解释**: 勒索防护是否开启，若开启勒索病毒防护，则必填protection_policy_id或者create_protection_policy其中一项。 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRansomProtectionStatus($ransomProtectionStatus)
    {
        $this->container['ransomProtectionStatus'] = $ransomProtectionStatus;
        return $this;
    }

    /**
    * Gets protectionPolicyId
    *  **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getProtectionPolicyId()
    {
        return $this->container['protectionPolicyId'];
    }

    /**
    * Sets protectionPolicyId
    *
    * @param string|null $protectionPolicyId **参数解释**: 勒索防护策略ID，若开启勒索防护，选择已有策略防护，则该字段必选。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectionPolicyId($protectionPolicyId)
    {
        $this->container['protectionPolicyId'] = $protectionPolicyId;
        return $this;
    }

    /**
    * Gets createProtectionPolicy
    *  createProtectionPolicy
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectionProxyInfoRequestInfo|null
    */
    public function getCreateProtectionPolicy()
    {
        return $this->container['createProtectionPolicy'];
    }

    /**
    * Sets createProtectionPolicy
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectionProxyInfoRequestInfo|null $createProtectionPolicy createProtectionPolicy
    *
    * @return $this
    */
    public function setCreateProtectionPolicy($createProtectionPolicy)
    {
        $this->container['createProtectionPolicy'] = $createProtectionPolicy;
        return $this;
    }

    /**
    * Gets backupProtectionStatus
    *  **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getBackupProtectionStatus()
    {
        return $this->container['backupProtectionStatus'];
    }

    /**
    * Sets backupProtectionStatus
    *
    * @param string $backupProtectionStatus **参数解释**: 是否服务器备份，若选择开启服务器备份，则backup_cycle必填 **约束限制**: 不涉及 **取值范围**: 包含如下：   - closed ：关闭。   - opened ：开启。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBackupProtectionStatus($backupProtectionStatus)
    {
        $this->container['backupProtectionStatus'] = $backupProtectionStatus;
        return $this;
    }

    /**
    * Gets backupResources
    *  backupResources
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BackupResources|null
    */
    public function getBackupResources()
    {
        return $this->container['backupResources'];
    }

    /**
    * Sets backupResources
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BackupResources|null $backupResources backupResources
    *
    * @return $this
    */
    public function setBackupResources($backupResources)
    {
        $this->container['backupResources'] = $backupResources;
        return $this;
    }

    /**
    * Gets backupPolicyId
    *  **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getBackupPolicyId()
    {
        return $this->container['backupPolicyId'];
    }

    /**
    * Sets backupPolicyId
    *
    * @param string|null $backupPolicyId **参数解释**: 备份策略ID **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBackupPolicyId($backupPolicyId)
    {
        $this->container['backupPolicyId'] = $backupPolicyId;
        return $this;
    }

    /**
    * Gets backupCycle
    *  backupCycle
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyRequestInfo1|null
    */
    public function getBackupCycle()
    {
        return $this->container['backupCycle'];
    }

    /**
    * Sets backupCycle
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\UpdateBackupPolicyRequestInfo1|null $backupCycle backupCycle
    *
    * @return $this
    */
    public function setBackupCycle($backupCycle)
    {
        $this->container['backupCycle'] = $backupCycle;
        return $this;
    }

    /**
    * Gets agentIdList
    *  **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[] $agentIdList **参数解释**: 开启防护的Agent id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList **参数解释**: 开启防护的host id列表 **约束限制**: 不涉及 **取值范围**: 列表条数0-64 **默认取值**: 不涉及
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

