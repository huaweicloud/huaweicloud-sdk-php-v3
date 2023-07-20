<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetBackupPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetBackupPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupPolicy  backupPolicy
    * reserveBackups  仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupPolicy' => '\HuaweiCloud\SDK\Rds\V3\Model\BackupPolicy',
            'reserveBackups' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupPolicy  backupPolicy
    * reserveBackups  仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupPolicy' => null,
        'reserveBackups' => null
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
    * backupPolicy  backupPolicy
    * reserveBackups  仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupPolicy' => 'backup_policy',
            'reserveBackups' => 'reserve_backups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupPolicy  backupPolicy
    * reserveBackups  仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupPolicy' => 'setBackupPolicy',
            'reserveBackups' => 'setReserveBackups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupPolicy  backupPolicy
    * reserveBackups  仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupPolicy' => 'getBackupPolicy',
            'reserveBackups' => 'getReserveBackups'
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
        $this->container['backupPolicy'] = isset($data['backupPolicy']) ? $data['backupPolicy'] : null;
        $this->container['reserveBackups'] = isset($data['reserveBackups']) ? $data['reserveBackups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupPolicy'] === null) {
            $invalidProperties[] = "'backupPolicy' can't be null";
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
    * Gets backupPolicy
    *  backupPolicy
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\BackupPolicy
    */
    public function getBackupPolicy()
    {
        return $this->container['backupPolicy'];
    }

    /**
    * Sets backupPolicy
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\BackupPolicy $backupPolicy backupPolicy
    *
    * @return $this
    */
    public function setBackupPolicy($backupPolicy)
    {
        $this->container['backupPolicy'] = $backupPolicy;
        return $this;
    }

    /**
    * Gets reserveBackups
    *  仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @return bool|null
    */
    public function getReserveBackups()
    {
        return $this->container['reserveBackups'];
    }

    /**
    * Sets reserveBackups
    *
    * @param bool|null $reserveBackups 仅关闭备份策略时有效。  - true（默认），表示保留自动备份和差异备份。 - false，表示关闭备份策略的同时，删除已有的自动备份和差异备份。
    *
    * @return $this
    */
    public function setReserveBackups($reserveBackups)
    {
        $this->container['reserveBackups'] = $reserveBackups;
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

