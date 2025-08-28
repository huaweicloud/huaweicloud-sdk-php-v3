<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetRemoteBackupInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetRemoteBackupInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remoteBackup  **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    * backupAddr  **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remoteBackup' => 'bool',
            'backupAddr' => 'string',
            'backupHostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remoteBackup  **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    * backupAddr  **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remoteBackup' => null,
        'backupAddr' => null,
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
    * remoteBackup  **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    * backupAddr  **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remoteBackup' => 'remote_backup',
            'backupAddr' => 'backup_addr',
            'backupHostId' => 'backup_host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remoteBackup  **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    * backupAddr  **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'remoteBackup' => 'setRemoteBackup',
            'backupAddr' => 'setBackupAddr',
            'backupHostId' => 'setBackupHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remoteBackup  **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    * backupAddr  **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * backupHostId  **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'remoteBackup' => 'getRemoteBackup',
            'backupAddr' => 'getBackupAddr',
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
        $this->container['remoteBackup'] = isset($data['remoteBackup']) ? $data['remoteBackup'] : null;
        $this->container['backupAddr'] = isset($data['backupAddr']) ? $data['backupAddr'] : null;
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
        if ($this->container['remoteBackup'] === null) {
            $invalidProperties[] = "'remoteBackup' can't be null";
        }
            if (!is_null($this->container['backupAddr']) && (mb_strlen($this->container['backupAddr']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupAddr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupAddr']) && (mb_strlen($this->container['backupAddr']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupAddr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupAddr']) && !preg_match("/^.*$/", $this->container['backupAddr'])) {
                $invalidProperties[] = "invalid value for 'backupAddr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['backupHostId']) && (mb_strlen($this->container['backupHostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'backupHostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['backupHostId']) && (mb_strlen($this->container['backupHostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupHostId']) && !preg_match("/^.*$/", $this->container['backupHostId'])) {
                $invalidProperties[] = "invalid value for 'backupHostId', must be conform to the pattern /^.*$/.";
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
    * Gets remoteBackup
    *  **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    *
    * @return bool
    */
    public function getRemoteBackup()
    {
        return $this->container['remoteBackup'];
    }

    /**
    * Sets remoteBackup
    *
    * @param bool $remoteBackup **参数解释**: 是否开启远端备份 **约束限制**: 不涉及 **取值范围**: - true ：开启远端备份，需要填写 backup_addr 和 backup_host_id。 - false ：关闭远端备份，无需填写 backup_addr 和 backup_host_id。  **默认取值**: false
    *
    * @return $this
    */
    public function setRemoteBackup($remoteBackup)
    {
        $this->container['remoteBackup'] = $remoteBackup;
        return $this;
    }

    /**
    * Gets backupAddr
    *  **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    * @param string|null $backupAddr **参数解释**: 远端备份地址，需包含IP和端口，格式为IP:端口 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    *  **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    * @param string|null $backupHostId **参数解释**: 远端备份服务器的服务器ID，填写的远端备份服务器ID必须是已运行中的备份服务器ID **约束限制**: 需要使用 ListBackupHostsInfo 接口查询已运行中的远端备份服务器，在 ListBackupHostsInfo 接口的响应体中，backup_host_status 等于 1 的 backup_host_id 是已运行的远端备份服务器ID **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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

