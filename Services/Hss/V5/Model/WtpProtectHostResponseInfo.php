<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WtpProtectHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WtpProtectHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  服务器名称
    * hostId  云服务器ID
    * publicIp  弹性公网IP
    * privateIp  私有IP
    * groupName  服务器组名称
    * osBit  操作系统位数
    * osType  操作系统（linux，windows）
    * protectStatus  防护状态   - closed : 未开启   - opened : 防护中
    * raspProtectStatus  动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    * antiTamperingTimes  已防御篡改攻击次数
    * detectTamperingTimes  已发现篡改攻击
    * lastDetectTime  最近检测时间
    * scheduledShutdownStatus  定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    * agentStatus  Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'groupName' => 'string',
            'osBit' => 'string',
            'osType' => 'string',
            'protectStatus' => 'string',
            'raspProtectStatus' => 'string',
            'antiTamperingTimes' => 'int',
            'detectTamperingTimes' => 'int',
            'lastDetectTime' => 'int',
            'scheduledShutdownStatus' => 'string',
            'agentStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  服务器名称
    * hostId  云服务器ID
    * publicIp  弹性公网IP
    * privateIp  私有IP
    * groupName  服务器组名称
    * osBit  操作系统位数
    * osType  操作系统（linux，windows）
    * protectStatus  防护状态   - closed : 未开启   - opened : 防护中
    * raspProtectStatus  动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    * antiTamperingTimes  已防御篡改攻击次数
    * detectTamperingTimes  已发现篡改攻击
    * lastDetectTime  最近检测时间
    * scheduledShutdownStatus  定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    * agentStatus  Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'publicIp' => null,
        'privateIp' => null,
        'groupName' => null,
        'osBit' => null,
        'osType' => null,
        'protectStatus' => null,
        'raspProtectStatus' => null,
        'antiTamperingTimes' => 'int64',
        'detectTamperingTimes' => 'int64',
        'lastDetectTime' => 'int64',
        'scheduledShutdownStatus' => null,
        'agentStatus' => null
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
    * hostName  服务器名称
    * hostId  云服务器ID
    * publicIp  弹性公网IP
    * privateIp  私有IP
    * groupName  服务器组名称
    * osBit  操作系统位数
    * osType  操作系统（linux，windows）
    * protectStatus  防护状态   - closed : 未开启   - opened : 防护中
    * raspProtectStatus  动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    * antiTamperingTimes  已防御篡改攻击次数
    * detectTamperingTimes  已发现篡改攻击
    * lastDetectTime  最近检测时间
    * scheduledShutdownStatus  定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    * agentStatus  Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'groupName' => 'group_name',
            'osBit' => 'os_bit',
            'osType' => 'os_type',
            'protectStatus' => 'protect_status',
            'raspProtectStatus' => 'rasp_protect_status',
            'antiTamperingTimes' => 'anti_tampering_times',
            'detectTamperingTimes' => 'detect_tampering_times',
            'lastDetectTime' => 'last_detect_time',
            'scheduledShutdownStatus' => 'scheduled_shutdown_status',
            'agentStatus' => 'agent_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  服务器名称
    * hostId  云服务器ID
    * publicIp  弹性公网IP
    * privateIp  私有IP
    * groupName  服务器组名称
    * osBit  操作系统位数
    * osType  操作系统（linux，windows）
    * protectStatus  防护状态   - closed : 未开启   - opened : 防护中
    * raspProtectStatus  动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    * antiTamperingTimes  已防御篡改攻击次数
    * detectTamperingTimes  已发现篡改攻击
    * lastDetectTime  最近检测时间
    * scheduledShutdownStatus  定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    * agentStatus  Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'groupName' => 'setGroupName',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'protectStatus' => 'setProtectStatus',
            'raspProtectStatus' => 'setRaspProtectStatus',
            'antiTamperingTimes' => 'setAntiTamperingTimes',
            'detectTamperingTimes' => 'setDetectTamperingTimes',
            'lastDetectTime' => 'setLastDetectTime',
            'scheduledShutdownStatus' => 'setScheduledShutdownStatus',
            'agentStatus' => 'setAgentStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  服务器名称
    * hostId  云服务器ID
    * publicIp  弹性公网IP
    * privateIp  私有IP
    * groupName  服务器组名称
    * osBit  操作系统位数
    * osType  操作系统（linux，windows）
    * protectStatus  防护状态   - closed : 未开启   - opened : 防护中
    * raspProtectStatus  动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    * antiTamperingTimes  已防御篡改攻击次数
    * detectTamperingTimes  已发现篡改攻击
    * lastDetectTime  最近检测时间
    * scheduledShutdownStatus  定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    * agentStatus  Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'groupName' => 'getGroupName',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'protectStatus' => 'getProtectStatus',
            'raspProtectStatus' => 'getRaspProtectStatus',
            'antiTamperingTimes' => 'getAntiTamperingTimes',
            'detectTamperingTimes' => 'getDetectTamperingTimes',
            'lastDetectTime' => 'getLastDetectTime',
            'scheduledShutdownStatus' => 'getScheduledShutdownStatus',
            'agentStatus' => 'getAgentStatus'
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
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['raspProtectStatus'] = isset($data['raspProtectStatus']) ? $data['raspProtectStatus'] : null;
        $this->container['antiTamperingTimes'] = isset($data['antiTamperingTimes']) ? $data['antiTamperingTimes'] : null;
        $this->container['detectTamperingTimes'] = isset($data['detectTamperingTimes']) ? $data['detectTamperingTimes'] : null;
        $this->container['lastDetectTime'] = isset($data['lastDetectTime']) ? $data['lastDetectTime'] : null;
        $this->container['scheduledShutdownStatus'] = isset($data['scheduledShutdownStatus']) ? $data['scheduledShutdownStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
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
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) > 8)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) < 0)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['raspProtectStatus']) && (mb_strlen($this->container['raspProtectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'raspProtectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['raspProtectStatus']) && (mb_strlen($this->container['raspProtectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'raspProtectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['antiTamperingTimes']) && ($this->container['antiTamperingTimes'] > 2000000000)) {
                $invalidProperties[] = "invalid value for 'antiTamperingTimes', must be smaller than or equal to 2000000000.";
            }
            if (!is_null($this->container['antiTamperingTimes']) && ($this->container['antiTamperingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'antiTamperingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detectTamperingTimes']) && ($this->container['detectTamperingTimes'] > 2000000000)) {
                $invalidProperties[] = "invalid value for 'detectTamperingTimes', must be smaller than or equal to 2000000000.";
            }
            if (!is_null($this->container['detectTamperingTimes']) && ($this->container['detectTamperingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'detectTamperingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastDetectTime']) && ($this->container['lastDetectTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'lastDetectTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['lastDetectTime']) && ($this->container['lastDetectTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastDetectTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduledShutdownStatus']) && (mb_strlen($this->container['scheduledShutdownStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scheduledShutdownStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scheduledShutdownStatus']) && (mb_strlen($this->container['scheduledShutdownStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduledShutdownStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
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
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
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
    *  云服务器ID
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
    * @param string|null $hostId 云服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性公网IP
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
    * @param string|null $publicIp 弹性公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有IP
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
    * @param string|null $privateIp 私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets groupName
    *  服务器组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 服务器组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets osBit
    *  操作系统位数
    *
    * @return string|null
    */
    public function getOsBit()
    {
        return $this->container['osBit'];
    }

    /**
    * Sets osBit
    *
    * @param string|null $osBit 操作系统位数
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统（linux，windows）
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统（linux，windows）
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态   - closed : 未开启   - opened : 防护中
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态   - closed : 未开启   - opened : 防护中
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets raspProtectStatus
    *  动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    *
    * @return string|null
    */
    public function getRaspProtectStatus()
    {
        return $this->container['raspProtectStatus'];
    }

    /**
    * Sets raspProtectStatus
    *
    * @param string|null $raspProtectStatus 动态网页防篡改状态   - closed : 未开启   - opened : 防护中
    *
    * @return $this
    */
    public function setRaspProtectStatus($raspProtectStatus)
    {
        $this->container['raspProtectStatus'] = $raspProtectStatus;
        return $this;
    }

    /**
    * Gets antiTamperingTimes
    *  已防御篡改攻击次数
    *
    * @return int|null
    */
    public function getAntiTamperingTimes()
    {
        return $this->container['antiTamperingTimes'];
    }

    /**
    * Sets antiTamperingTimes
    *
    * @param int|null $antiTamperingTimes 已防御篡改攻击次数
    *
    * @return $this
    */
    public function setAntiTamperingTimes($antiTamperingTimes)
    {
        $this->container['antiTamperingTimes'] = $antiTamperingTimes;
        return $this;
    }

    /**
    * Gets detectTamperingTimes
    *  已发现篡改攻击
    *
    * @return int|null
    */
    public function getDetectTamperingTimes()
    {
        return $this->container['detectTamperingTimes'];
    }

    /**
    * Sets detectTamperingTimes
    *
    * @param int|null $detectTamperingTimes 已发现篡改攻击
    *
    * @return $this
    */
    public function setDetectTamperingTimes($detectTamperingTimes)
    {
        $this->container['detectTamperingTimes'] = $detectTamperingTimes;
        return $this;
    }

    /**
    * Gets lastDetectTime
    *  最近检测时间
    *
    * @return int|null
    */
    public function getLastDetectTime()
    {
        return $this->container['lastDetectTime'];
    }

    /**
    * Sets lastDetectTime
    *
    * @param int|null $lastDetectTime 最近检测时间
    *
    * @return $this
    */
    public function setLastDetectTime($lastDetectTime)
    {
        $this->container['lastDetectTime'] = $lastDetectTime;
        return $this;
    }

    /**
    * Gets scheduledShutdownStatus
    *  定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    *
    * @return string|null
    */
    public function getScheduledShutdownStatus()
    {
        return $this->container['scheduledShutdownStatus'];
    }

    /**
    * Sets scheduledShutdownStatus
    *
    * @param string|null $scheduledShutdownStatus 定时关闭防护开关状态   - opened : 开启   - closed : 未开启
    *
    * @return $this
    */
    public function setScheduledShutdownStatus($scheduledShutdownStatus)
    {
        $this->container['scheduledShutdownStatus'] = $scheduledShutdownStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus Agent状态   - not_installed : agent未安装   - online : agent在线   - offline : agent不在线
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
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

