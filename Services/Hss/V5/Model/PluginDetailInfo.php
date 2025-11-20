<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * id  **参数解释**： 插件id **取值范围**: 不涉及
    * version  **参数解释**： 插件版本 **取值范围**: 不涉及
    * agentVersion  **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    * arch  **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osType  **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * versionDescription  **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    * size  **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    * cpuLimit  **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    * memoryLimit  **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    * updateTime  **参数解释**： 插件更新时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'version' => 'string',
            'agentVersion' => 'string',
            'arch' => 'string',
            'osType' => 'string',
            'versionDescription' => 'string',
            'size' => 'string',
            'cpuLimit' => 'int',
            'memoryLimit' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * id  **参数解释**： 插件id **取值范围**: 不涉及
    * version  **参数解释**： 插件版本 **取值范围**: 不涉及
    * agentVersion  **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    * arch  **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osType  **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * versionDescription  **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    * size  **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    * cpuLimit  **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    * memoryLimit  **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    * updateTime  **参数解释**： 插件更新时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'version' => null,
        'agentVersion' => null,
        'arch' => null,
        'osType' => null,
        'versionDescription' => null,
        'size' => null,
        'cpuLimit' => 'int32',
        'memoryLimit' => 'int32',
        'updateTime' => 'int64'
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
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * id  **参数解释**： 插件id **取值范围**: 不涉及
    * version  **参数解释**： 插件版本 **取值范围**: 不涉及
    * agentVersion  **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    * arch  **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osType  **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * versionDescription  **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    * size  **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    * cpuLimit  **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    * memoryLimit  **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    * updateTime  **参数解释**： 插件更新时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'version' => 'version',
            'agentVersion' => 'agent_version',
            'arch' => 'arch',
            'osType' => 'os_type',
            'versionDescription' => 'version_description',
            'size' => 'size',
            'cpuLimit' => 'cpu_limit',
            'memoryLimit' => 'memory_limit',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * id  **参数解释**： 插件id **取值范围**: 不涉及
    * version  **参数解释**： 插件版本 **取值范围**: 不涉及
    * agentVersion  **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    * arch  **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osType  **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * versionDescription  **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    * size  **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    * cpuLimit  **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    * memoryLimit  **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    * updateTime  **参数解释**： 插件更新时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'version' => 'setVersion',
            'agentVersion' => 'setAgentVersion',
            'arch' => 'setArch',
            'osType' => 'setOsType',
            'versionDescription' => 'setVersionDescription',
            'size' => 'setSize',
            'cpuLimit' => 'setCpuLimit',
            'memoryLimit' => 'setMemoryLimit',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 插件名称 **取值范围**: 不涉及
    * id  **参数解释**： 插件id **取值范围**: 不涉及
    * version  **参数解释**： 插件版本 **取值范围**: 不涉及
    * agentVersion  **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    * arch  **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osType  **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    * versionDescription  **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    * size  **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    * cpuLimit  **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    * memoryLimit  **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    * updateTime  **参数解释**： 插件更新时间 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'version' => 'getVersion',
            'agentVersion' => 'getAgentVersion',
            'arch' => 'getArch',
            'osType' => 'getOsType',
            'versionDescription' => 'getVersionDescription',
            'size' => 'getSize',
            'cpuLimit' => 'getCpuLimit',
            'memoryLimit' => 'getMemoryLimit',
            'updateTime' => 'getUpdateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 256)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) > 10)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['arch']) && (mb_strlen($this->container['arch']) < 0)) {
                $invalidProperties[] = "invalid value for 'arch', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 10)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['versionDescription']) && (mb_strlen($this->container['versionDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'versionDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && (mb_strlen($this->container['size']) > 200)) {
                $invalidProperties[] = "invalid value for 'size', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['size']) && (mb_strlen($this->container['size']) < 0)) {
                $invalidProperties[] = "invalid value for 'size', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuLimit']) && ($this->container['cpuLimit'] > 100)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['cpuLimit']) && ($this->container['cpuLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryLimit']) && ($this->container['memoryLimit'] > 200)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['memoryLimit']) && ($this->container['memoryLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets name
    *  **参数解释**： 插件名称 **取值范围**: 不涉及
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
    * @param string|null $name **参数解释**： 插件名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 插件id **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 插件id **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 插件版本 **取值范围**: 不涉及
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
    * @param string|null $version **参数解释**： 插件版本 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string|null $agentVersion **参数解释**： 插件支持的最低Agent版本 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets arch
    *  **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**： 插件架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
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
    * @param string|null $osType **参数解释**： 插件支持的操作系统类型 **取值范围**: - Linux：Linux操作系统 - Windows：Windows操作系统
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets versionDescription
    *  **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription **参数解释**： 插件版本信息描述 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size **参数解释**： 插件安装包大小(MB) **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param int|null $cpuLimit **参数解释**： 运行插件所需单核CPU(0-100%) **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memoryLimit
    *  **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getMemoryLimit()
    {
        return $this->container['memoryLimit'];
    }

    /**
    * Sets memoryLimit
    *
    * @param int|null $memoryLimit **参数解释**： 运行插件所需内存(MB) **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMemoryLimit($memoryLimit)
    {
        $this->container['memoryLimit'] = $memoryLimit;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 插件更新时间 **取值范围**: 不涉及
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
    * @param int|null $updateTime **参数解释**： 插件更新时间 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

