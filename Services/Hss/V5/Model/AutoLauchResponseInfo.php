<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoLauchResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoLauchResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    * name  **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    * type  **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    * path  **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    * hash  **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    * runUser  **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'name' => 'string',
            'type' => 'int',
            'path' => 'string',
            'hash' => 'string',
            'runUser' => 'string',
            'recentScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    * name  **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    * type  **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    * path  **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    * hash  **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    * runUser  **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'name' => null,
        'type' => null,
        'path' => null,
        'hash' => null,
        'runUser' => null,
        'recentScanTime' => 'int64'
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
    * agentId  **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    * name  **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    * type  **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    * path  **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    * hash  **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    * runUser  **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'name' => 'name',
            'type' => 'type',
            'path' => 'path',
            'hash' => 'hash',
            'runUser' => 'run_user',
            'recentScanTime' => 'recent_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    * name  **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    * type  **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    * path  **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    * hash  **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    * runUser  **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'name' => 'setName',
            'type' => 'setType',
            'path' => 'setPath',
            'hash' => 'setHash',
            'runUser' => 'setRunUser',
            'recentScanTime' => 'setRecentScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    * name  **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    * type  **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    * path  **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    * hash  **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    * runUser  **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    * recentScanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'name' => 'getName',
            'type' => 'getType',
            'path' => 'getPath',
            'hash' => 'getHash',
            'runUser' => 'getRunUser',
            'recentScanTime' => 'getRecentScanTime'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['runUser'] = isset($data['runUser']) ? $data['runUser'] : null;
        $this->container['recentScanTime'] = isset($data['recentScanTime']) ? $data['recentScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 11)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 128)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runUser']) && (mb_strlen($this->container['runUser']) > 128)) {
                $invalidProperties[] = "invalid value for 'runUser', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runUser']) && (mb_strlen($this->container['runUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'runUser', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['recentScanTime']) && ($this->container['recentScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'recentScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['recentScanTime']) && ($this->container['recentScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recentScanTime', must be bigger than or equal to 0.";
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
    * Gets agentId
    *  **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $agentId **参数解释**: Agent ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
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
    * @param string|null $hostId **参数解释**: 服务器ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
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
    * Gets hostIp
    *  **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 主机IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**: 自启动项名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释**: 自启动项类型 **取值范围**: - 0：自启动服务 - 1：定时任务 - 2：预加载动态库 - 3：Run注册表键 - 4：开机启动文件夹
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 自启动项的路径 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets hash
    *  **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash **参数解释**: 采用sha256算法生成的文件hash值 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets runUser
    *  **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getRunUser()
    {
        return $this->container['runUser'];
    }

    /**
    * Sets runUser
    *
    * @param string|null $runUser **参数解释**: 运行用户 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setRunUser($runUser)
    {
        $this->container['runUser'] = $runUser;
        return $this;
    }

    /**
    * Gets recentScanTime
    *  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getRecentScanTime()
    {
        return $this->container['recentScanTime'];
    }

    /**
    * Sets recentScanTime
    *
    * @param int|null $recentScanTime **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setRecentScanTime($recentScanTime)
    {
        $this->container['recentScanTime'] = $recentScanTime;
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

