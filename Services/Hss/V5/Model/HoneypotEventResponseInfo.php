<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HoneypotEventResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HoneypotEventResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    * attackIp  **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    * attackNum  **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    * attackLastTime  **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * attackStartTime  **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * deviceFingerprint  **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'agentId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'severity' => 'string',
            'attackIp' => 'string',
            'attackNum' => 'int',
            'attackLastTime' => 'int',
            'attackStartTime' => 'int',
            'deviceFingerprint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    * attackIp  **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    * attackNum  **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    * attackLastTime  **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * attackStartTime  **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * deviceFingerprint  **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'agentId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'severity' => null,
        'attackIp' => null,
        'attackNum' => 'int32',
        'attackLastTime' => 'int64',
        'attackStartTime' => 'int64',
        'deviceFingerprint' => null
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
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    * attackIp  **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    * attackNum  **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    * attackLastTime  **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * attackStartTime  **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * deviceFingerprint  **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'severity' => 'severity',
            'attackIp' => 'attack_ip',
            'attackNum' => 'attack_num',
            'attackLastTime' => 'attack_last_time',
            'attackStartTime' => 'attack_start_time',
            'deviceFingerprint' => 'device_fingerprint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    * attackIp  **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    * attackNum  **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    * attackLastTime  **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * attackStartTime  **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * deviceFingerprint  **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'severity' => 'setSeverity',
            'attackIp' => 'setAttackIp',
            'attackNum' => 'setAttackNum',
            'attackLastTime' => 'setAttackLastTime',
            'attackStartTime' => 'setAttackStartTime',
            'deviceFingerprint' => 'setDeviceFingerprint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    * attackIp  **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    * attackNum  **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    * attackLastTime  **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * attackStartTime  **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * deviceFingerprint  **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'severity' => 'getSeverity',
            'attackIp' => 'getAttackIp',
            'attackNum' => 'getAttackNum',
            'attackLastTime' => 'getAttackLastTime',
            'attackStartTime' => 'getAttackStartTime',
            'deviceFingerprint' => 'getDeviceFingerprint'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['attackIp'] = isset($data['attackIp']) ? $data['attackIp'] : null;
        $this->container['attackNum'] = isset($data['attackNum']) ? $data['attackNum'] : null;
        $this->container['attackLastTime'] = isset($data['attackLastTime']) ? $data['attackLastTime'] : null;
        $this->container['attackStartTime'] = isset($data['attackStartTime']) ? $data['attackStartTime'] : null;
        $this->container['deviceFingerprint'] = isset($data['deviceFingerprint']) ? $data['deviceFingerprint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 20)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attackIp']) && (mb_strlen($this->container['attackIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'attackIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['attackIp']) && (mb_strlen($this->container['attackIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attackNum']) && ($this->container['attackNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'attackNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['attackNum']) && ($this->container['attackNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackLastTime']) && ($this->container['attackLastTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'attackLastTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['attackLastTime']) && ($this->container['attackLastTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackLastTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackStartTime']) && ($this->container['attackStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'attackStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['attackStartTime']) && ($this->container['attackStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceFingerprint']) && (mb_strlen($this->container['deviceFingerprint']) > 512)) {
                $invalidProperties[] = "invalid value for 'deviceFingerprint', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['deviceFingerprint']) && (mb_strlen($this->container['deviceFingerprint']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceFingerprint', the character length must be bigger than or equal to 1.";
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
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
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
    * @param string|null $hostId **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low: 低危 - Medium: 中危 - High: 高危 - Critical: 危急
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets attackIp
    *  **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getAttackIp()
    {
        return $this->container['attackIp'];
    }

    /**
    * Sets attackIp
    *
    * @param string|null $attackIp **参数解释**: 攻击源IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setAttackIp($attackIp)
    {
        $this->container['attackIp'] = $attackIp;
        return $this;
    }

    /**
    * Gets attackNum
    *  **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getAttackNum()
    {
        return $this->container['attackNum'];
    }

    /**
    * Sets attackNum
    *
    * @param int|null $attackNum **参数解释**: 攻击次数 **取值范围**: 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setAttackNum($attackNum)
    {
        $this->container['attackNum'] = $attackNum;
        return $this;
    }

    /**
    * Gets attackLastTime
    *  **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getAttackLastTime()
    {
        return $this->container['attackLastTime'];
    }

    /**
    * Sets attackLastTime
    *
    * @param int|null $attackLastTime **参数解释**: 最近攻击时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setAttackLastTime($attackLastTime)
    {
        $this->container['attackLastTime'] = $attackLastTime;
        return $this;
    }

    /**
    * Gets attackStartTime
    *  **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getAttackStartTime()
    {
        return $this->container['attackStartTime'];
    }

    /**
    * Sets attackStartTime
    *
    * @param int|null $attackStartTime **参数解释**: 攻击开始时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setAttackStartTime($attackStartTime)
    {
        $this->container['attackStartTime'] = $attackStartTime;
        return $this;
    }

    /**
    * Gets deviceFingerprint
    *  **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @return string|null
    */
    public function getDeviceFingerprint()
    {
        return $this->container['deviceFingerprint'];
    }

    /**
    * Sets deviceFingerprint
    *
    * @param string|null $deviceFingerprint **参数解释**: 设备指纹 **取值范围**: 字符长度1-512位
    *
    * @return $this
    */
    public function setDeviceFingerprint($deviceFingerprint)
    {
        $this->container['deviceFingerprint'] = $deviceFingerprint;
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

