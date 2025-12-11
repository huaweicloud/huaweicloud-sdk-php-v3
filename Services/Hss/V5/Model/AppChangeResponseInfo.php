<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppChangeResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppChangeResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * variationType  **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * version  **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    * updateTime  **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    * recentScanTime  **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'variationType' => 'string',
            'hostId' => 'string',
            'appName' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'version' => 'string',
            'updateTime' => 'int',
            'recentScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * variationType  **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * version  **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    * updateTime  **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    * recentScanTime  **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'variationType' => null,
        'hostId' => null,
        'appName' => null,
        'hostName' => null,
        'hostIp' => null,
        'version' => null,
        'updateTime' => 'int64',
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
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * variationType  **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * version  **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    * updateTime  **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    * recentScanTime  **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'variationType' => 'variation_type',
            'hostId' => 'host_id',
            'appName' => 'app_name',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'version' => 'version',
            'updateTime' => 'update_time',
            'recentScanTime' => 'recent_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * variationType  **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * version  **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    * updateTime  **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    * recentScanTime  **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'variationType' => 'setVariationType',
            'hostId' => 'setHostId',
            'appName' => 'setAppName',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'version' => 'setVersion',
            'updateTime' => 'setUpdateTime',
            'recentScanTime' => 'setRecentScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    * variationType  **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * version  **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    * updateTime  **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    * recentScanTime  **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'variationType' => 'getVariationType',
            'hostId' => 'getHostId',
            'appName' => 'getAppName',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'version' => 'getVersion',
            'updateTime' => 'getUpdateTime',
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
        $this->container['variationType'] = isset($data['variationType']) ? $data['variationType'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
            if (!is_null($this->container['variationType']) && (mb_strlen($this->container['variationType']) > 10)) {
                $invalidProperties[] = "invalid value for 'variationType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['variationType']) && (mb_strlen($this->container['variationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'variationType', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && !preg_match("/^.*$/", $this->container['appName'])) {
                $invalidProperties[] = "invalid value for 'appName', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    *  **参数解释**: Agent ID **取值范围**: 字符长度1-64位
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
    * @param string|null $agentId **参数解释**: Agent ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets variationType
    *  **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    *
    * @return string|null
    */
    public function getVariationType()
    {
        return $this->container['variationType'];
    }

    /**
    * Sets variationType
    *
    * @param string|null $variationType **参数解释**: 变更类型 **取值范围**: - add：新建 - delete：删除 - modify：修改
    *
    * @return $this
    */
    public function setVariationType($variationType)
    {
        $this->container['variationType'] = $variationType;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
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
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
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
    *  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
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
    * @param string|null $hostIp **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 版本号 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**: 软件更新时间，单位毫秒 **取值范围**: 最小值0，最大值10000
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets recentScanTime
    *  **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
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
    * @param int|null $recentScanTime **参数解释**: 最近扫描时间，单位毫秒 **取值范围**: 最小值0，最大值10000
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

