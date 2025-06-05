<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchStartProtectionRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchStartProtectionRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * ransomProtectionStatus  勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
    * protectionPolicyId  防护策略ID,若ransom_protection_status为opened,则该字段必选
    * backupProtectionStatus  是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
    * vaultId  需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    * hostIdList  开启防护的host id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operatingSystem' => 'string',
            'ransomProtectionStatus' => 'string',
            'protectionPolicyId' => 'string',
            'backupProtectionStatus' => 'string',
            'vaultId' => 'string',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * ransomProtectionStatus  勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
    * protectionPolicyId  防护策略ID,若ransom_protection_status为opened,则该字段必选
    * backupProtectionStatus  是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
    * vaultId  需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    * hostIdList  开启防护的host id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operatingSystem' => null,
        'ransomProtectionStatus' => null,
        'protectionPolicyId' => null,
        'backupProtectionStatus' => null,
        'vaultId' => null,
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
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * ransomProtectionStatus  勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
    * protectionPolicyId  防护策略ID,若ransom_protection_status为opened,则该字段必选
    * backupProtectionStatus  是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
    * vaultId  需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    * hostIdList  开启防护的host id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operatingSystem' => 'operating_system',
            'ransomProtectionStatus' => 'ransom_protection_status',
            'protectionPolicyId' => 'protection_policy_id',
            'backupProtectionStatus' => 'backup_protection_status',
            'vaultId' => 'vault_id',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * ransomProtectionStatus  勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
    * protectionPolicyId  防护策略ID,若ransom_protection_status为opened,则该字段必选
    * backupProtectionStatus  是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
    * vaultId  需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    * hostIdList  开启防护的host id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'operatingSystem' => 'setOperatingSystem',
            'ransomProtectionStatus' => 'setRansomProtectionStatus',
            'protectionPolicyId' => 'setProtectionPolicyId',
            'backupProtectionStatus' => 'setBackupProtectionStatus',
            'vaultId' => 'setVaultId',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * ransomProtectionStatus  勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
    * protectionPolicyId  防护策略ID,若ransom_protection_status为opened,则该字段必选
    * backupProtectionStatus  是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
    * vaultId  需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    * hostIdList  开启防护的host id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'operatingSystem' => 'getOperatingSystem',
            'ransomProtectionStatus' => 'getRansomProtectionStatus',
            'protectionPolicyId' => 'getProtectionPolicyId',
            'backupProtectionStatus' => 'getBackupProtectionStatus',
            'vaultId' => 'getVaultId',
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
        $this->container['backupProtectionStatus'] = isset($data['backupProtectionStatus']) ? $data['backupProtectionStatus'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
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
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 0.";
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
    *  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
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
    * @param string $operatingSystem 操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
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
    *  勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
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
    * @param string $ransomProtectionStatus 勒索防护是否开启，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启，protection_policy_id必填一项
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
    *  防护策略ID,若ransom_protection_status为opened,则该字段必选
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
    * @param string|null $protectionPolicyId 防护策略ID,若ransom_protection_status为opened,则该字段必选
    *
    * @return $this
    */
    public function setProtectionPolicyId($protectionPolicyId)
    {
        $this->container['protectionPolicyId'] = $protectionPolicyId;
        return $this;
    }

    /**
    * Gets backupProtectionStatus
    *  是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
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
    * @param string $backupProtectionStatus 是否服务器备份，包含如下：   - closed ：关闭。   - opened ：开启。   若选择开启服务器备份，则vault_id必填
    *
    * @return $this
    */
    public function setBackupProtectionStatus($backupProtectionStatus)
    {
        $this->container['backupProtectionStatus'] = $backupProtectionStatus;
        return $this;
    }

    /**
    * Gets vaultId
    *  需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 需要绑定的存储库ID，若backup_protection_status为opened，则该字段必填
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets hostIdList
    *  开启防护的host id列表
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
    * @param string[] $hostIdList 开启防护的host id列表
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

