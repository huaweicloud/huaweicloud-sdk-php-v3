<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WtpRemoteBackupResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WtpRemoteBackupResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupAddr  远端备份地址(ip+port)
    * backupHostId  远端备份主机HostId
    * backupHostName  远端备份服务器名称
    * remoteBackup  是否开启远端备份
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupAddr' => 'string',
            'backupHostId' => 'string',
            'backupHostName' => 'string',
            'remoteBackup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupAddr  远端备份地址(ip+port)
    * backupHostId  远端备份主机HostId
    * backupHostName  远端备份服务器名称
    * remoteBackup  是否开启远端备份
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupAddr' => null,
        'backupHostId' => null,
        'backupHostName' => null,
        'remoteBackup' => null
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
    * backupAddr  远端备份地址(ip+port)
    * backupHostId  远端备份主机HostId
    * backupHostName  远端备份服务器名称
    * remoteBackup  是否开启远端备份
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupAddr' => 'backup_addr',
            'backupHostId' => 'backup_host_id',
            'backupHostName' => 'backup_host_name',
            'remoteBackup' => 'remote_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupAddr  远端备份地址(ip+port)
    * backupHostId  远端备份主机HostId
    * backupHostName  远端备份服务器名称
    * remoteBackup  是否开启远端备份
    *
    * @var string[]
    */
    protected static $setters = [
            'backupAddr' => 'setBackupAddr',
            'backupHostId' => 'setBackupHostId',
            'backupHostName' => 'setBackupHostName',
            'remoteBackup' => 'setRemoteBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupAddr  远端备份地址(ip+port)
    * backupHostId  远端备份主机HostId
    * backupHostName  远端备份服务器名称
    * remoteBackup  是否开启远端备份
    *
    * @var string[]
    */
    protected static $getters = [
            'backupAddr' => 'getBackupAddr',
            'backupHostId' => 'getBackupHostId',
            'backupHostName' => 'getBackupHostName',
            'remoteBackup' => 'getRemoteBackup'
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
        $this->container['backupAddr'] = isset($data['backupAddr']) ? $data['backupAddr'] : null;
        $this->container['backupHostId'] = isset($data['backupHostId']) ? $data['backupHostId'] : null;
        $this->container['backupHostName'] = isset($data['backupHostName']) ? $data['backupHostName'] : null;
        $this->container['remoteBackup'] = isset($data['remoteBackup']) ? $data['remoteBackup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets backupAddr
    *  远端备份地址(ip+port)
    *
    * @return string|null
    */
    public function getBackupAddr()
    {
        return $this->container['backupAddr'];
    }

    /**
    * Sets backupAddr
    *
    * @param string|null $backupAddr 远端备份地址(ip+port)
    *
    * @return $this
    */
    public function setBackupAddr($backupAddr)
    {
        $this->container['backupAddr'] = $backupAddr;
        return $this;
    }

    /**
    * Gets backupHostId
    *  远端备份主机HostId
    *
    * @return string|null
    */
    public function getBackupHostId()
    {
        return $this->container['backupHostId'];
    }

    /**
    * Sets backupHostId
    *
    * @param string|null $backupHostId 远端备份主机HostId
    *
    * @return $this
    */
    public function setBackupHostId($backupHostId)
    {
        $this->container['backupHostId'] = $backupHostId;
        return $this;
    }

    /**
    * Gets backupHostName
    *  远端备份服务器名称
    *
    * @return string|null
    */
    public function getBackupHostName()
    {
        return $this->container['backupHostName'];
    }

    /**
    * Sets backupHostName
    *
    * @param string|null $backupHostName 远端备份服务器名称
    *
    * @return $this
    */
    public function setBackupHostName($backupHostName)
    {
        $this->container['backupHostName'] = $backupHostName;
        return $this;
    }

    /**
    * Gets remoteBackup
    *  是否开启远端备份
    *
    * @return bool|null
    */
    public function getRemoteBackup()
    {
        return $this->container['remoteBackup'];
    }

    /**
    * Sets remoteBackup
    *
    * @param bool|null $remoteBackup 是否开启远端备份
    *
    * @return $this
    */
    public function setRemoteBackup($remoteBackup)
    {
        $this->container['remoteBackup'] = $remoteBackup;
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

