<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WtpBackupHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WtpBackupHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupHostIp  **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    * backupHostPort  **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    * backupDir  **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    * backupHostStatus  **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    * backupHostName  **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupHostIp' => 'string',
            'backupHostPort' => 'int',
            'backupDir' => 'string',
            'backupHostStatus' => 'int',
            'backupHostName' => 'string',
            'backupHostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupHostIp  **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    * backupHostPort  **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    * backupDir  **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    * backupHostStatus  **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    * backupHostName  **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupHostIp' => null,
        'backupHostPort' => 'int32',
        'backupDir' => null,
        'backupHostStatus' => 'int32',
        'backupHostName' => null,
        'backupHostId' => null
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
    * backupHostIp  **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    * backupHostPort  **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    * backupDir  **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    * backupHostStatus  **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    * backupHostName  **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupHostIp' => 'backup_host_ip',
            'backupHostPort' => 'backup_host_port',
            'backupDir' => 'backup_dir',
            'backupHostStatus' => 'backup_host_status',
            'backupHostName' => 'backup_host_name',
            'backupHostId' => 'backup_host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupHostIp  **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    * backupHostPort  **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    * backupDir  **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    * backupHostStatus  **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    * backupHostName  **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'backupHostIp' => 'setBackupHostIp',
            'backupHostPort' => 'setBackupHostPort',
            'backupDir' => 'setBackupDir',
            'backupHostStatus' => 'setBackupHostStatus',
            'backupHostName' => 'setBackupHostName',
            'backupHostId' => 'setBackupHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupHostIp  **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    * backupHostPort  **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    * backupDir  **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    * backupHostStatus  **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    * backupHostName  **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'backupHostIp' => 'getBackupHostIp',
            'backupHostPort' => 'getBackupHostPort',
            'backupDir' => 'getBackupDir',
            'backupHostStatus' => 'getBackupHostStatus',
            'backupHostName' => 'getBackupHostName',
            'backupHostId' => 'getBackupHostId'
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
        $this->container['backupHostIp'] = isset($data['backupHostIp']) ? $data['backupHostIp'] : null;
        $this->container['backupHostPort'] = isset($data['backupHostPort']) ? $data['backupHostPort'] : null;
        $this->container['backupDir'] = isset($data['backupDir']) ? $data['backupDir'] : null;
        $this->container['backupHostStatus'] = isset($data['backupHostStatus']) ? $data['backupHostStatus'] : null;
        $this->container['backupHostName'] = isset($data['backupHostName']) ? $data['backupHostName'] : null;
        $this->container['backupHostId'] = isset($data['backupHostId']) ? $data['backupHostId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['backupHostIp']) && (mb_strlen($this->container['backupHostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupHostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupHostIp']) && (mb_strlen($this->container['backupHostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupHostPort']) && ($this->container['backupHostPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'backupHostPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['backupHostPort']) && ($this->container['backupHostPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupDir']) && (mb_strlen($this->container['backupDir']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupDir', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupDir']) && (mb_strlen($this->container['backupDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupHostStatus']) && ($this->container['backupHostStatus'] > 10)) {
                $invalidProperties[] = "invalid value for 'backupHostStatus', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['backupHostStatus']) && ($this->container['backupHostStatus'] < -1)) {
                $invalidProperties[] = "invalid value for 'backupHostStatus', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['backupHostName']) && (mb_strlen($this->container['backupHostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupHostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupHostName']) && (mb_strlen($this->container['backupHostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupHostId']) && (mb_strlen($this->container['backupHostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupHostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupHostId']) && (mb_strlen($this->container['backupHostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostId', the character length must be bigger than or equal to 0.";
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
    * Gets backupHostIp
    *  **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getBackupHostIp()
    {
        return $this->container['backupHostIp'];
    }

    /**
    * Sets backupHostIp
    *
    * @param string|null $backupHostIp **参数解释**: 备份服务器IP **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setBackupHostIp($backupHostIp)
    {
        $this->container['backupHostIp'] = $backupHostIp;
        return $this;
    }

    /**
    * Gets backupHostPort
    *  **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getBackupHostPort()
    {
        return $this->container['backupHostPort'];
    }

    /**
    * Sets backupHostPort
    *
    * @param int|null $backupHostPort **参数解释**: 备份服务器端口 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setBackupHostPort($backupHostPort)
    {
        $this->container['backupHostPort'] = $backupHostPort;
        return $this;
    }

    /**
    * Gets backupDir
    *  **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getBackupDir()
    {
        return $this->container['backupDir'];
    }

    /**
    * Sets backupDir
    *
    * @param string|null $backupDir **参数解释**: 备份路径 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setBackupDir($backupDir)
    {
        $this->container['backupDir'] = $backupDir;
        return $this;
    }

    /**
    * Gets backupHostStatus
    *  **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    *
    * @return int|null
    */
    public function getBackupHostStatus()
    {
        return $this->container['backupHostStatus'];
    }

    /**
    * Sets backupHostStatus
    *
    * @param int|null $backupHostStatus **参数解释**: 备份状态 **取值范围**: - -1 ：启动失败 - 0 ：未启动 - 1 ：运行中 - 2 ：启动中
    *
    * @return $this
    */
    public function setBackupHostStatus($backupHostStatus)
    {
        $this->container['backupHostStatus'] = $backupHostStatus;
        return $this;
    }

    /**
    * Gets backupHostName
    *  **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $backupHostName **参数解释**: 远端备份服务器的服务器名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setBackupHostName($backupHostName)
    {
        $this->container['backupHostName'] = $backupHostName;
        return $this;
    }

    /**
    * Gets backupHostId
    *  **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
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
    * @param string|null $backupHostId **参数解释**: 远端备份服务器的服务器ID **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setBackupHostId($backupHostId)
    {
        $this->container['backupHostId'] = $backupHostId;
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

