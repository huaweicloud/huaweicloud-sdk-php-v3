<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupVaultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupVaultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vaultId  存储库ID
    * vaultName  存储库名称
    * vaultSize  存储库总容量，单位GB
    * vaultUsed  已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    * vaultAllocated  已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    * vaultChargingMode  存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    * vaultStatus  存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
    * backupPolicyName  备份策略名称
    * backupPolicyEnabled  备份策略是否启用
    * resourcesNum  已绑定服务器（个）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vaultId' => 'string',
            'vaultName' => 'string',
            'vaultSize' => 'int',
            'vaultUsed' => 'int',
            'vaultAllocated' => 'int',
            'vaultChargingMode' => 'string',
            'vaultStatus' => 'string',
            'backupPolicyId' => 'string',
            'backupPolicyName' => 'string',
            'backupPolicyEnabled' => 'bool',
            'resourcesNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vaultId  存储库ID
    * vaultName  存储库名称
    * vaultSize  存储库总容量，单位GB
    * vaultUsed  已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    * vaultAllocated  已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    * vaultChargingMode  存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    * vaultStatus  存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
    * backupPolicyName  备份策略名称
    * backupPolicyEnabled  备份策略是否启用
    * resourcesNum  已绑定服务器（个）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vaultId' => null,
        'vaultName' => null,
        'vaultSize' => null,
        'vaultUsed' => null,
        'vaultAllocated' => null,
        'vaultChargingMode' => null,
        'vaultStatus' => null,
        'backupPolicyId' => null,
        'backupPolicyName' => null,
        'backupPolicyEnabled' => null,
        'resourcesNum' => null
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
    * vaultId  存储库ID
    * vaultName  存储库名称
    * vaultSize  存储库总容量，单位GB
    * vaultUsed  已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    * vaultAllocated  已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    * vaultChargingMode  存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    * vaultStatus  存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
    * backupPolicyName  备份策略名称
    * backupPolicyEnabled  备份策略是否启用
    * resourcesNum  已绑定服务器（个）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vaultId' => 'vault_id',
            'vaultName' => 'vault_name',
            'vaultSize' => 'vault_size',
            'vaultUsed' => 'vault_used',
            'vaultAllocated' => 'vault_allocated',
            'vaultChargingMode' => 'vault_charging_mode',
            'vaultStatus' => 'vault_status',
            'backupPolicyId' => 'backup_policy_id',
            'backupPolicyName' => 'backup_policy_name',
            'backupPolicyEnabled' => 'backup_policy_enabled',
            'resourcesNum' => 'resources_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vaultId  存储库ID
    * vaultName  存储库名称
    * vaultSize  存储库总容量，单位GB
    * vaultUsed  已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    * vaultAllocated  已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    * vaultChargingMode  存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    * vaultStatus  存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
    * backupPolicyName  备份策略名称
    * backupPolicyEnabled  备份策略是否启用
    * resourcesNum  已绑定服务器（个）
    *
    * @var string[]
    */
    protected static $setters = [
            'vaultId' => 'setVaultId',
            'vaultName' => 'setVaultName',
            'vaultSize' => 'setVaultSize',
            'vaultUsed' => 'setVaultUsed',
            'vaultAllocated' => 'setVaultAllocated',
            'vaultChargingMode' => 'setVaultChargingMode',
            'vaultStatus' => 'setVaultStatus',
            'backupPolicyId' => 'setBackupPolicyId',
            'backupPolicyName' => 'setBackupPolicyName',
            'backupPolicyEnabled' => 'setBackupPolicyEnabled',
            'resourcesNum' => 'setResourcesNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vaultId  存储库ID
    * vaultName  存储库名称
    * vaultSize  存储库总容量，单位GB
    * vaultUsed  已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    * vaultAllocated  已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    * vaultChargingMode  存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    * vaultStatus  存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
    * backupPolicyName  备份策略名称
    * backupPolicyEnabled  备份策略是否启用
    * resourcesNum  已绑定服务器（个）
    *
    * @var string[]
    */
    protected static $getters = [
            'vaultId' => 'getVaultId',
            'vaultName' => 'getVaultName',
            'vaultSize' => 'getVaultSize',
            'vaultUsed' => 'getVaultUsed',
            'vaultAllocated' => 'getVaultAllocated',
            'vaultChargingMode' => 'getVaultChargingMode',
            'vaultStatus' => 'getVaultStatus',
            'backupPolicyId' => 'getBackupPolicyId',
            'backupPolicyName' => 'getBackupPolicyName',
            'backupPolicyEnabled' => 'getBackupPolicyEnabled',
            'resourcesNum' => 'getResourcesNum'
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
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['vaultName'] = isset($data['vaultName']) ? $data['vaultName'] : null;
        $this->container['vaultSize'] = isset($data['vaultSize']) ? $data['vaultSize'] : null;
        $this->container['vaultUsed'] = isset($data['vaultUsed']) ? $data['vaultUsed'] : null;
        $this->container['vaultAllocated'] = isset($data['vaultAllocated']) ? $data['vaultAllocated'] : null;
        $this->container['vaultChargingMode'] = isset($data['vaultChargingMode']) ? $data['vaultChargingMode'] : null;
        $this->container['vaultStatus'] = isset($data['vaultStatus']) ? $data['vaultStatus'] : null;
        $this->container['backupPolicyId'] = isset($data['backupPolicyId']) ? $data['backupPolicyId'] : null;
        $this->container['backupPolicyName'] = isset($data['backupPolicyName']) ? $data['backupPolicyName'] : null;
        $this->container['backupPolicyEnabled'] = isset($data['backupPolicyEnabled']) ? $data['backupPolicyEnabled'] : null;
        $this->container['resourcesNum'] = isset($data['resourcesNum']) ? $data['resourcesNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultName']) && (mb_strlen($this->container['vaultName']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultName']) && (mb_strlen($this->container['vaultName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultSize']) && ($this->container['vaultSize'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vaultSize', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vaultSize']) && ($this->container['vaultSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultUsed']) && ($this->container['vaultUsed'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vaultUsed', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vaultUsed']) && ($this->container['vaultUsed'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultUsed', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultAllocated']) && ($this->container['vaultAllocated'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vaultAllocated', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vaultAllocated']) && ($this->container['vaultAllocated'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultAllocated', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultChargingMode']) && (mb_strlen($this->container['vaultChargingMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultChargingMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultChargingMode']) && (mb_strlen($this->container['vaultChargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultChargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultStatus']) && (mb_strlen($this->container['vaultStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultStatus']) && (mb_strlen($this->container['vaultStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupPolicyId']) && (mb_strlen($this->container['backupPolicyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupPolicyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupPolicyId']) && (mb_strlen($this->container['backupPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupPolicyName']) && (mb_strlen($this->container['backupPolicyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupPolicyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupPolicyName']) && (mb_strlen($this->container['backupPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourcesNum']) && ($this->container['resourcesNum'] > 256)) {
                $invalidProperties[] = "invalid value for 'resourcesNum', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourcesNum']) && ($this->container['resourcesNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourcesNum', must be bigger than or equal to 0.";
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
    * Gets vaultId
    *  存储库ID
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
    * @param string|null $vaultId 存储库ID
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets vaultName
    *  存储库名称
    *
    * @return string|null
    */
    public function getVaultName()
    {
        return $this->container['vaultName'];
    }

    /**
    * Sets vaultName
    *
    * @param string|null $vaultName 存储库名称
    *
    * @return $this
    */
    public function setVaultName($vaultName)
    {
        $this->container['vaultName'] = $vaultName;
        return $this;
    }

    /**
    * Gets vaultSize
    *  存储库总容量，单位GB
    *
    * @return int|null
    */
    public function getVaultSize()
    {
        return $this->container['vaultSize'];
    }

    /**
    * Sets vaultSize
    *
    * @param int|null $vaultSize 存储库总容量，单位GB
    *
    * @return $this
    */
    public function setVaultSize($vaultSize)
    {
        $this->container['vaultSize'] = $vaultSize;
        return $this;
    }

    /**
    * Gets vaultUsed
    *  已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    *
    * @return int|null
    */
    public function getVaultUsed()
    {
        return $this->container['vaultUsed'];
    }

    /**
    * Sets vaultUsed
    *
    * @param int|null $vaultUsed 已使用容量，单位MB，指的是已有备份占用的容量，例如绑定了1台主机，已经有两个备份数，两个备份60G,则已使用容量为60G。
    *
    * @return $this
    */
    public function setVaultUsed($vaultUsed)
    {
        $this->container['vaultUsed'] = $vaultUsed;
        return $this;
    }

    /**
    * Gets vaultAllocated
    *  已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    *
    * @return int|null
    */
    public function getVaultAllocated()
    {
        return $this->container['vaultAllocated'];
    }

    /**
    * Sets vaultAllocated
    *
    * @param int|null $vaultAllocated 已分配容量，单位GB，指绑定的服务器大小，例如绑定了1台主机，主机大小40G，则已分配容量为40G。
    *
    * @return $this
    */
    public function setVaultAllocated($vaultAllocated)
    {
        $this->container['vaultAllocated'] = $vaultAllocated;
        return $this;
    }

    /**
    * Gets vaultChargingMode
    *  存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    *
    * @return string|null
    */
    public function getVaultChargingMode()
    {
        return $this->container['vaultChargingMode'];
    }

    /**
    * Sets vaultChargingMode
    *
    * @param string|null $vaultChargingMode 存储库创建模式：   - 按需：post_paid   - 包周期：pre_paid
    *
    * @return $this
    */
    public function setVaultChargingMode($vaultChargingMode)
    {
        $this->container['vaultChargingMode'] = $vaultChargingMode;
        return $this;
    }

    /**
    * Gets vaultStatus
    *  存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    *
    * @return string|null
    */
    public function getVaultStatus()
    {
        return $this->container['vaultStatus'];
    }

    /**
    * Sets vaultStatus
    *
    * @param string|null $vaultStatus 存储库状态。   - available：可用。   - lock：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    *
    * @return $this
    */
    public function setVaultStatus($vaultStatus)
    {
        $this->container['vaultStatus'] = $vaultStatus;
        return $this;
    }

    /**
    * Gets backupPolicyId
    *  备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
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
    * @param string|null $backupPolicyId 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用
    *
    * @return $this
    */
    public function setBackupPolicyId($backupPolicyId)
    {
        $this->container['backupPolicyId'] = $backupPolicyId;
        return $this;
    }

    /**
    * Gets backupPolicyName
    *  备份策略名称
    *
    * @return string|null
    */
    public function getBackupPolicyName()
    {
        return $this->container['backupPolicyName'];
    }

    /**
    * Sets backupPolicyName
    *
    * @param string|null $backupPolicyName 备份策略名称
    *
    * @return $this
    */
    public function setBackupPolicyName($backupPolicyName)
    {
        $this->container['backupPolicyName'] = $backupPolicyName;
        return $this;
    }

    /**
    * Gets backupPolicyEnabled
    *  备份策略是否启用
    *
    * @return bool|null
    */
    public function getBackupPolicyEnabled()
    {
        return $this->container['backupPolicyEnabled'];
    }

    /**
    * Sets backupPolicyEnabled
    *
    * @param bool|null $backupPolicyEnabled 备份策略是否启用
    *
    * @return $this
    */
    public function setBackupPolicyEnabled($backupPolicyEnabled)
    {
        $this->container['backupPolicyEnabled'] = $backupPolicyEnabled;
        return $this;
    }

    /**
    * Gets resourcesNum
    *  已绑定服务器（个）
    *
    * @return int|null
    */
    public function getResourcesNum()
    {
        return $this->container['resourcesNum'];
    }

    /**
    * Sets resourcesNum
    *
    * @param int|null $resourcesNum 已绑定服务器（个）
    *
    * @return $this
    */
    public function setResourcesNum($resourcesNum)
    {
        $this->container['resourcesNum'] = $resourcesNum;
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

