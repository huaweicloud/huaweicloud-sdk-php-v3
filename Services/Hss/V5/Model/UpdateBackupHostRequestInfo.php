<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBackupHostRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBackupHostRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostIp  **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostPort  **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
    * backupDir  **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'backupHostIp' => 'string',
            'backupHostPort' => 'int',
            'backupDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostIp  **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostPort  **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
    * backupDir  **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'backupHostIp' => null,
        'backupHostPort' => 'int32',
        'backupDir' => null
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
    * hostId  **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostIp  **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostPort  **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
    * backupDir  **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'backupHostIp' => 'backup_host_ip',
            'backupHostPort' => 'backup_host_port',
            'backupDir' => 'backup_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostIp  **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostPort  **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
    * backupDir  **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'backupHostIp' => 'setBackupHostIp',
            'backupHostPort' => 'setBackupHostPort',
            'backupDir' => 'setBackupDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostIp  **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    * backupHostPort  **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
    * backupDir  **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'backupHostIp' => 'getBackupHostIp',
            'backupHostPort' => 'getBackupHostPort',
            'backupDir' => 'getBackupDir'
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
        $this->container['backupHostIp'] = isset($data['backupHostIp']) ? $data['backupHostIp'] : null;
        $this->container['backupHostPort'] = isset($data['backupHostPort']) ? $data['backupHostPort'] : null;
        $this->container['backupDir'] = isset($data['backupDir']) ? $data['backupDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['backupHostIp'] === null) {
            $invalidProperties[] = "'backupHostIp' can't be null";
        }
            if ((mb_strlen($this->container['backupHostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupHostIp', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['backupHostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostIp', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['backupHostPort'] === null) {
            $invalidProperties[] = "'backupHostPort' can't be null";
        }
            if (($this->container['backupHostPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'backupHostPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['backupHostPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostPort', must be bigger than or equal to 0.";
            }
        if ($this->container['backupDir'] === null) {
            $invalidProperties[] = "'backupDir' can't be null";
        }
            if ((mb_strlen($this->container['backupDir']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupDir', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['backupDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupDir', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId **参数解释**: 远端备份服务器的服务器ID，如果备份服务器之前不存在，则本次操作为新增，如果之前已存在，则本次操作为修改 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets backupHostIp
    *  **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @return string
    */
    public function getBackupHostIp()
    {
        return $this->container['backupHostIp'];
    }

    /**
    * Sets backupHostIp
    *
    * @param string $backupHostIp **参数解释**: 备份服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
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
    *  **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
    *
    * @return int
    */
    public function getBackupHostPort()
    {
        return $this->container['backupHostPort'];
    }

    /**
    * Sets backupHostPort
    *
    * @param int $backupHostPort **参数解释**: 备份服务器端口 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值65535 **默认取值** : 不涉及
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
    *  **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @return string
    */
    public function getBackupDir()
    {
        return $this->container['backupDir'];
    }

    /**
    * Sets backupDir
    *
    * @param string $backupDir **参数解释**: 备份路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setBackupDir($backupDir)
    {
        $this->container['backupDir'] = $backupDir;
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

