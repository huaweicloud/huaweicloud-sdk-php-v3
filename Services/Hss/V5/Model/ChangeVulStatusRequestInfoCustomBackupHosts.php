<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeVulStatusRequestInfoCustomBackupHosts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeVulStatusRequestInfo_custom_backup_hosts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机id
    * vaultId  存储库id
    * backupName  备份名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'vaultId' => 'string',
            'backupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机id
    * vaultId  存储库id
    * backupName  备份名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'vaultId' => null,
        'backupName' => null
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
    * hostId  主机id
    * vaultId  存储库id
    * backupName  备份名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'vaultId' => 'vault_id',
            'backupName' => 'backup_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机id
    * vaultId  存储库id
    * backupName  备份名称
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'vaultId' => 'setVaultId',
            'backupName' => 'setBackupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机id
    * vaultId  存储库id
    * backupName  备份名称
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'vaultId' => 'getVaultId',
            'backupName' => 'getBackupName'
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
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be bigger than or equal to 1.";
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
    *  主机id
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
    * @param string|null $hostId 主机id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库id
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
    * @param string|null $vaultId 存储库id
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets backupName
    *  备份名称
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName 备份名称
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
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

