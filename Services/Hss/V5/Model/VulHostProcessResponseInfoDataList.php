<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostProcessResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostProcessResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pid  **参数解释**： 进程id **取值范围**： 字符长度0-256位
    * hostIp  **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
    * path  **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
    * portProtocol  **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    * version  **参数解释**： 版本 **取值范围**： 字符长度0-256位
    * dependencyPackage  **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    * cpuUseRate  **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pid' => 'string',
            'hostIp' => 'string',
            'path' => 'string',
            'portProtocol' => 'string',
            'version' => 'string',
            'dependencyPackage' => 'string',
            'cpuUseRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pid  **参数解释**： 进程id **取值范围**： 字符长度0-256位
    * hostIp  **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
    * path  **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
    * portProtocol  **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    * version  **参数解释**： 版本 **取值范围**： 字符长度0-256位
    * dependencyPackage  **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    * cpuUseRate  **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pid' => null,
        'hostIp' => null,
        'path' => null,
        'portProtocol' => null,
        'version' => null,
        'dependencyPackage' => null,
        'cpuUseRate' => null
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
    * pid  **参数解释**： 进程id **取值范围**： 字符长度0-256位
    * hostIp  **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
    * path  **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
    * portProtocol  **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    * version  **参数解释**： 版本 **取值范围**： 字符长度0-256位
    * dependencyPackage  **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    * cpuUseRate  **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pid' => 'pid',
            'hostIp' => 'host_ip',
            'path' => 'path',
            'portProtocol' => 'port_protocol',
            'version' => 'version',
            'dependencyPackage' => 'dependency_package',
            'cpuUseRate' => 'cpu_use_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pid  **参数解释**： 进程id **取值范围**： 字符长度0-256位
    * hostIp  **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
    * path  **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
    * portProtocol  **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    * version  **参数解释**： 版本 **取值范围**： 字符长度0-256位
    * dependencyPackage  **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    * cpuUseRate  **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @var string[]
    */
    protected static $setters = [
            'pid' => 'setPid',
            'hostIp' => 'setHostIp',
            'path' => 'setPath',
            'portProtocol' => 'setPortProtocol',
            'version' => 'setVersion',
            'dependencyPackage' => 'setDependencyPackage',
            'cpuUseRate' => 'setCpuUseRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pid  **参数解释**： 进程id **取值范围**： 字符长度0-256位
    * hostIp  **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
    * path  **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
    * portProtocol  **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    * version  **参数解释**： 版本 **取值范围**： 字符长度0-256位
    * dependencyPackage  **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    * cpuUseRate  **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @var string[]
    */
    protected static $getters = [
            'pid' => 'getPid',
            'hostIp' => 'getHostIp',
            'path' => 'getPath',
            'portProtocol' => 'getPortProtocol',
            'version' => 'getVersion',
            'dependencyPackage' => 'getDependencyPackage',
            'cpuUseRate' => 'getCpuUseRate'
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
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['portProtocol'] = isset($data['portProtocol']) ? $data['portProtocol'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['dependencyPackage'] = isset($data['dependencyPackage']) ? $data['dependencyPackage'] : null;
        $this->container['cpuUseRate'] = isset($data['cpuUseRate']) ? $data['cpuUseRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pid']) && (mb_strlen($this->container['pid']) > 256)) {
                $invalidProperties[] = "invalid value for 'pid', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pid']) && (mb_strlen($this->container['pid']) < 0)) {
                $invalidProperties[] = "invalid value for 'pid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 256)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portProtocol']) && (mb_strlen($this->container['portProtocol']) > 32)) {
                $invalidProperties[] = "invalid value for 'portProtocol', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['portProtocol']) && (mb_strlen($this->container['portProtocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'portProtocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 256)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dependencyPackage']) && (mb_strlen($this->container['dependencyPackage']) > 256)) {
                $invalidProperties[] = "invalid value for 'dependencyPackage', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['dependencyPackage']) && (mb_strlen($this->container['dependencyPackage']) < 0)) {
                $invalidProperties[] = "invalid value for 'dependencyPackage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuUseRate']) && (mb_strlen($this->container['cpuUseRate']) > 32)) {
                $invalidProperties[] = "invalid value for 'cpuUseRate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cpuUseRate']) && (mb_strlen($this->container['cpuUseRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuUseRate', the character length must be bigger than or equal to 0.";
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
    * Gets pid
    *  **参数解释**： 进程id **取值范围**： 字符长度0-256位
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid **参数解释**： 进程id **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
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
    * @param string|null $hostIp **参数解释**： 绑定ip **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
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
    * @param string|null $path **参数解释**： 自启动项的路径 **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets portProtocol
    *  **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    *
    * @return string|null
    */
    public function getPortProtocol()
    {
        return $this->container['portProtocol'];
    }

    /**
    * Sets portProtocol
    *
    * @param string|null $portProtocol **参数解释**： 端口/协议 **取值范围**： 字符长度0-32位
    *
    * @return $this
    */
    public function setPortProtocol($portProtocol)
    {
        $this->container['portProtocol'] = $portProtocol;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 版本 **取值范围**： 字符长度0-256位
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
    * @param string|null $version **参数解释**： 版本 **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets dependencyPackage
    *  **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    *
    * @return string|null
    */
    public function getDependencyPackage()
    {
        return $this->container['dependencyPackage'];
    }

    /**
    * Sets dependencyPackage
    *
    * @param string|null $dependencyPackage **参数解释**： 依赖包 **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setDependencyPackage($dependencyPackage)
    {
        $this->container['dependencyPackage'] = $dependencyPackage;
        return $this;
    }

    /**
    * Gets cpuUseRate
    *  **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @return string|null
    */
    public function getCpuUseRate()
    {
        return $this->container['cpuUseRate'];
    }

    /**
    * Sets cpuUseRate
    *
    * @param string|null $cpuUseRate **参数解释**： cpu使用率 **取值范围**： 字符长度0-32位
    *
    * @return $this
    */
    public function setCpuUseRate($cpuUseRate)
    {
        $this->container['cpuUseRate'] = $cpuUseRate;
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

