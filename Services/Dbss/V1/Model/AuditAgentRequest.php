<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditAgentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditAgentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  数据库ID, 可在查询数据库列表接口的ID字段获取。
    * mode  模式 - 0：创建agent - 1：选择已有agent
    * agentId  选择已有agent时必输
    * agentType  agent类型 - APP：应用端 - DB：数据库端
    * agentOs  agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
    * agentIp  agent IP，安装节点类型为应用端时必输。
    * agentNic  agent审计网卡名称
    * cpuThreshold  CPU阈值
    * memThreshold  内存阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'string',
            'mode' => 'int',
            'agentId' => 'string',
            'agentType' => 'string',
            'agentOs' => 'string',
            'agentIp' => 'string',
            'agentNic' => 'string',
            'cpuThreshold' => 'int',
            'memThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  数据库ID, 可在查询数据库列表接口的ID字段获取。
    * mode  模式 - 0：创建agent - 1：选择已有agent
    * agentId  选择已有agent时必输
    * agentType  agent类型 - APP：应用端 - DB：数据库端
    * agentOs  agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
    * agentIp  agent IP，安装节点类型为应用端时必输。
    * agentNic  agent审计网卡名称
    * cpuThreshold  CPU阈值
    * memThreshold  内存阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => null,
        'mode' => 'int32',
        'agentId' => null,
        'agentType' => null,
        'agentOs' => null,
        'agentIp' => null,
        'agentNic' => null,
        'cpuThreshold' => 'int32',
        'memThreshold' => 'int32'
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
    * dbId  数据库ID, 可在查询数据库列表接口的ID字段获取。
    * mode  模式 - 0：创建agent - 1：选择已有agent
    * agentId  选择已有agent时必输
    * agentType  agent类型 - APP：应用端 - DB：数据库端
    * agentOs  agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
    * agentIp  agent IP，安装节点类型为应用端时必输。
    * agentNic  agent审计网卡名称
    * cpuThreshold  CPU阈值
    * memThreshold  内存阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'mode' => 'mode',
            'agentId' => 'agent_id',
            'agentType' => 'agent_type',
            'agentOs' => 'agent_os',
            'agentIp' => 'agent_ip',
            'agentNic' => 'agent_nic',
            'cpuThreshold' => 'cpu_threshold',
            'memThreshold' => 'mem_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  数据库ID, 可在查询数据库列表接口的ID字段获取。
    * mode  模式 - 0：创建agent - 1：选择已有agent
    * agentId  选择已有agent时必输
    * agentType  agent类型 - APP：应用端 - DB：数据库端
    * agentOs  agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
    * agentIp  agent IP，安装节点类型为应用端时必输。
    * agentNic  agent审计网卡名称
    * cpuThreshold  CPU阈值
    * memThreshold  内存阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'mode' => 'setMode',
            'agentId' => 'setAgentId',
            'agentType' => 'setAgentType',
            'agentOs' => 'setAgentOs',
            'agentIp' => 'setAgentIp',
            'agentNic' => 'setAgentNic',
            'cpuThreshold' => 'setCpuThreshold',
            'memThreshold' => 'setMemThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  数据库ID, 可在查询数据库列表接口的ID字段获取。
    * mode  模式 - 0：创建agent - 1：选择已有agent
    * agentId  选择已有agent时必输
    * agentType  agent类型 - APP：应用端 - DB：数据库端
    * agentOs  agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
    * agentIp  agent IP，安装节点类型为应用端时必输。
    * agentNic  agent审计网卡名称
    * cpuThreshold  CPU阈值
    * memThreshold  内存阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'mode' => 'getMode',
            'agentId' => 'getAgentId',
            'agentType' => 'getAgentType',
            'agentOs' => 'getAgentOs',
            'agentIp' => 'getAgentIp',
            'agentNic' => 'getAgentNic',
            'cpuThreshold' => 'getCpuThreshold',
            'memThreshold' => 'getMemThreshold'
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
    const AGENT_OS_LINUX64_X86 = 'LINUX64_X86';
    const AGENT_OS_LINUX64_ARM = 'LINUX64_ARM';
    const AGENT_OS_WINDOWS64 = 'WINDOWS64';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgentOsAllowableValues()
    {
        return [
            self::AGENT_OS_LINUX64_X86,
            self::AGENT_OS_LINUX64_ARM,
            self::AGENT_OS_WINDOWS64,
        ];
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
        $this->container['agentOs'] = isset($data['agentOs']) ? $data['agentOs'] : null;
        $this->container['agentIp'] = isset($data['agentIp']) ? $data['agentIp'] : null;
        $this->container['agentNic'] = isset($data['agentNic']) ? $data['agentNic'] : null;
        $this->container['cpuThreshold'] = isset($data['cpuThreshold']) ? $data['cpuThreshold'] : null;
        $this->container['memThreshold'] = isset($data['memThreshold']) ? $data['memThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbId'] === null) {
            $invalidProperties[] = "'dbId' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['agentType'] === null) {
            $invalidProperties[] = "'agentType' can't be null";
        }
        if ($this->container['agentOs'] === null) {
            $invalidProperties[] = "'agentOs' can't be null";
        }
            $allowedValues = $this->getAgentOsAllowableValues();
                if (!is_null($this->container['agentOs']) && !in_array($this->container['agentOs'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agentOs', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dbId
    *  数据库ID, 可在查询数据库列表接口的ID字段获取。
    *
    * @return string
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string $dbId 数据库ID, 可在查询数据库列表接口的ID字段获取。
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets mode
    *  模式 - 0：创建agent - 1：选择已有agent
    *
    * @return int
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param int $mode 模式 - 0：创建agent - 1：选择已有agent
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets agentId
    *  选择已有agent时必输
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
    * @param string|null $agentId 选择已有agent时必输
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
    *  agent类型 - APP：应用端 - DB：数据库端
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
    * @param string $agentType agent类型 - APP：应用端 - DB：数据库端
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
    *  agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
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
    * @param string $agentOs agent OS类型: - LINUX64_X86：LINUX64_X86 - LINUX64_ARM：LINUX64_ARM - WINDOWS64：WINDOWS64
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
    *  agent IP，安装节点类型为应用端时必输。
    *
    * @return string|null
    */
    public function getAgentIp()
    {
        return $this->container['agentIp'];
    }

    /**
    * Sets agentIp
    *
    * @param string|null $agentIp agent IP，安装节点类型为应用端时必输。
    *
    * @return $this
    */
    public function setAgentIp($agentIp)
    {
        $this->container['agentIp'] = $agentIp;
        return $this;
    }

    /**
    * Gets agentNic
    *  agent审计网卡名称
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
    * @param string|null $agentNic agent审计网卡名称
    *
    * @return $this
    */
    public function setAgentNic($agentNic)
    {
        $this->container['agentNic'] = $agentNic;
        return $this;
    }

    /**
    * Gets cpuThreshold
    *  CPU阈值
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
    * @param int|null $cpuThreshold CPU阈值
    *
    * @return $this
    */
    public function setCpuThreshold($cpuThreshold)
    {
        $this->container['cpuThreshold'] = $cpuThreshold;
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

