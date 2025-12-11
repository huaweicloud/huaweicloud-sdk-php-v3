<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditAgentRespoonseAgents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditAgentRespoonse_agents';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  agent ID
    * agentType  agent 类型 - DB: 数据库端 - APP: 应用端
    * agentOs  agent OS
    * agentIp  agent安装节点IP
    * memThreshold  内存阈值
    * cpuThreshold  cpu阈值
    * status  agent状态 - 1：开启 - 0：关闭
    * agentNic  agent网卡
    * dbName  数据库名称
    * datacapStatus  数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    * agentUrl  agent安装地址
    * universal  是否CCE场景
    * sha256  sha256值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'agentType' => 'string',
            'agentOs' => 'string',
            'agentIp' => 'string',
            'memThreshold' => 'int',
            'cpuThreshold' => 'int',
            'status' => 'int',
            'agentNic' => 'string',
            'dbName' => 'string',
            'datacapStatus' => 'int',
            'agentUrl' => 'string',
            'universal' => 'bool',
            'sha256' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  agent ID
    * agentType  agent 类型 - DB: 数据库端 - APP: 应用端
    * agentOs  agent OS
    * agentIp  agent安装节点IP
    * memThreshold  内存阈值
    * cpuThreshold  cpu阈值
    * status  agent状态 - 1：开启 - 0：关闭
    * agentNic  agent网卡
    * dbName  数据库名称
    * datacapStatus  数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    * agentUrl  agent安装地址
    * universal  是否CCE场景
    * sha256  sha256值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'agentType' => null,
        'agentOs' => null,
        'agentIp' => null,
        'memThreshold' => 'int32',
        'cpuThreshold' => 'int32',
        'status' => 'int32',
        'agentNic' => null,
        'dbName' => null,
        'datacapStatus' => 'int32',
        'agentUrl' => null,
        'universal' => null,
        'sha256' => null
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
    * agentId  agent ID
    * agentType  agent 类型 - DB: 数据库端 - APP: 应用端
    * agentOs  agent OS
    * agentIp  agent安装节点IP
    * memThreshold  内存阈值
    * cpuThreshold  cpu阈值
    * status  agent状态 - 1：开启 - 0：关闭
    * agentNic  agent网卡
    * dbName  数据库名称
    * datacapStatus  数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    * agentUrl  agent安装地址
    * universal  是否CCE场景
    * sha256  sha256值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'agentType' => 'agent_type',
            'agentOs' => 'agent_os',
            'agentIp' => 'agent_ip',
            'memThreshold' => 'mem_threshold',
            'cpuThreshold' => 'cpu_threshold',
            'status' => 'status',
            'agentNic' => 'agent_nic',
            'dbName' => 'db_name',
            'datacapStatus' => 'datacap_status',
            'agentUrl' => 'agent_url',
            'universal' => 'universal',
            'sha256' => 'sha256'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  agent ID
    * agentType  agent 类型 - DB: 数据库端 - APP: 应用端
    * agentOs  agent OS
    * agentIp  agent安装节点IP
    * memThreshold  内存阈值
    * cpuThreshold  cpu阈值
    * status  agent状态 - 1：开启 - 0：关闭
    * agentNic  agent网卡
    * dbName  数据库名称
    * datacapStatus  数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    * agentUrl  agent安装地址
    * universal  是否CCE场景
    * sha256  sha256值
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'agentType' => 'setAgentType',
            'agentOs' => 'setAgentOs',
            'agentIp' => 'setAgentIp',
            'memThreshold' => 'setMemThreshold',
            'cpuThreshold' => 'setCpuThreshold',
            'status' => 'setStatus',
            'agentNic' => 'setAgentNic',
            'dbName' => 'setDbName',
            'datacapStatus' => 'setDatacapStatus',
            'agentUrl' => 'setAgentUrl',
            'universal' => 'setUniversal',
            'sha256' => 'setSha256'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  agent ID
    * agentType  agent 类型 - DB: 数据库端 - APP: 应用端
    * agentOs  agent OS
    * agentIp  agent安装节点IP
    * memThreshold  内存阈值
    * cpuThreshold  cpu阈值
    * status  agent状态 - 1：开启 - 0：关闭
    * agentNic  agent网卡
    * dbName  数据库名称
    * datacapStatus  数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    * agentUrl  agent安装地址
    * universal  是否CCE场景
    * sha256  sha256值
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'agentType' => 'getAgentType',
            'agentOs' => 'getAgentOs',
            'agentIp' => 'getAgentIp',
            'memThreshold' => 'getMemThreshold',
            'cpuThreshold' => 'getCpuThreshold',
            'status' => 'getStatus',
            'agentNic' => 'getAgentNic',
            'dbName' => 'getDbName',
            'datacapStatus' => 'getDatacapStatus',
            'agentUrl' => 'getAgentUrl',
            'universal' => 'getUniversal',
            'sha256' => 'getSha256'
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
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
        $this->container['agentOs'] = isset($data['agentOs']) ? $data['agentOs'] : null;
        $this->container['agentIp'] = isset($data['agentIp']) ? $data['agentIp'] : null;
        $this->container['memThreshold'] = isset($data['memThreshold']) ? $data['memThreshold'] : null;
        $this->container['cpuThreshold'] = isset($data['cpuThreshold']) ? $data['cpuThreshold'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['agentNic'] = isset($data['agentNic']) ? $data['agentNic'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['datacapStatus'] = isset($data['datacapStatus']) ? $data['datacapStatus'] : null;
        $this->container['agentUrl'] = isset($data['agentUrl']) ? $data['agentUrl'] : null;
        $this->container['universal'] = isset($data['universal']) ? $data['universal'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agentId'] === null) {
            $invalidProperties[] = "'agentId' can't be null";
        }
        if ($this->container['agentType'] === null) {
            $invalidProperties[] = "'agentType' can't be null";
        }
        if ($this->container['agentOs'] === null) {
            $invalidProperties[] = "'agentOs' can't be null";
        }
        if ($this->container['agentIp'] === null) {
            $invalidProperties[] = "'agentIp' can't be null";
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
    *  agent ID
    *
    * @return string
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string $agentId agent ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentType
    *  agent 类型 - DB: 数据库端 - APP: 应用端
    *
    * @return string
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string $agentType agent 类型 - DB: 数据库端 - APP: 应用端
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
        return $this;
    }

    /**
    * Gets agentOs
    *  agent OS
    *
    * @return string
    */
    public function getAgentOs()
    {
        return $this->container['agentOs'];
    }

    /**
    * Sets agentOs
    *
    * @param string $agentOs agent OS
    *
    * @return $this
    */
    public function setAgentOs($agentOs)
    {
        $this->container['agentOs'] = $agentOs;
        return $this;
    }

    /**
    * Gets agentIp
    *  agent安装节点IP
    *
    * @return string
    */
    public function getAgentIp()
    {
        return $this->container['agentIp'];
    }

    /**
    * Sets agentIp
    *
    * @param string $agentIp agent安装节点IP
    *
    * @return $this
    */
    public function setAgentIp($agentIp)
    {
        $this->container['agentIp'] = $agentIp;
        return $this;
    }

    /**
    * Gets memThreshold
    *  内存阈值
    *
    * @return int|null
    */
    public function getMemThreshold()
    {
        return $this->container['memThreshold'];
    }

    /**
    * Sets memThreshold
    *
    * @param int|null $memThreshold 内存阈值
    *
    * @return $this
    */
    public function setMemThreshold($memThreshold)
    {
        $this->container['memThreshold'] = $memThreshold;
        return $this;
    }

    /**
    * Gets cpuThreshold
    *  cpu阈值
    *
    * @return int|null
    */
    public function getCpuThreshold()
    {
        return $this->container['cpuThreshold'];
    }

    /**
    * Sets cpuThreshold
    *
    * @param int|null $cpuThreshold cpu阈值
    *
    * @return $this
    */
    public function setCpuThreshold($cpuThreshold)
    {
        $this->container['cpuThreshold'] = $cpuThreshold;
        return $this;
    }

    /**
    * Gets status
    *  agent状态 - 1：开启 - 0：关闭
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status agent状态 - 1：开启 - 0：关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets agentNic
    *  agent网卡
    *
    * @return string|null
    */
    public function getAgentNic()
    {
        return $this->container['agentNic'];
    }

    /**
    * Sets agentNic
    *
    * @param string|null $agentNic agent网卡
    *
    * @return $this
    */
    public function setAgentNic($agentNic)
    {
        $this->container['agentNic'] = $agentNic;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets datacapStatus
    *  数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    *
    * @return int|null
    */
    public function getDatacapStatus()
    {
        return $this->container['datacapStatus'];
    }

    /**
    * Sets datacapStatus
    *
    * @param int|null $datacapStatus 数据流量抓取状态 - 1：运行中 - 2：休眠中 - 3：已停止 - 4：异常
    *
    * @return $this
    */
    public function setDatacapStatus($datacapStatus)
    {
        $this->container['datacapStatus'] = $datacapStatus;
        return $this;
    }

    /**
    * Gets agentUrl
    *  agent安装地址
    *
    * @return string|null
    */
    public function getAgentUrl()
    {
        return $this->container['agentUrl'];
    }

    /**
    * Sets agentUrl
    *
    * @param string|null $agentUrl agent安装地址
    *
    * @return $this
    */
    public function setAgentUrl($agentUrl)
    {
        $this->container['agentUrl'] = $agentUrl;
        return $this;
    }

    /**
    * Gets universal
    *  是否CCE场景
    *
    * @return bool|null
    */
    public function getUniversal()
    {
        return $this->container['universal'];
    }

    /**
    * Sets universal
    *
    * @param bool|null $universal 是否CCE场景
    *
    * @return $this
    */
    public function setUniversal($universal)
    {
        $this->container['universal'] = $universal;
        return $this;
    }

    /**
    * Gets sha256
    *  sha256值
    *
    * @return string|null
    */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
    * Sets sha256
    *
    * @param string|null $sha256 sha256值
    *
    * @return $this
    */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;
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

