<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * runningStatus  运行状态。
    * cpuUsage  CPU使用率。
    * memoryUsage  内存使用率。
    * diskUsage  硬盘使用率。
    * totalMemory  总内存。单位MB。
    * availableMemory  可用内存。单位MB。
    * totalHardDiskSpace  总硬盘空间。单位GB。
    * availableHardDiskSpace  可用硬盘空间。单位GB。
    * networkRead  网络读取速度。单位Byte/s。
    * networkWrite  网络写入速度。单位Byte/s。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'runningStatus' => 'string',
            'cpuUsage' => 'string',
            'memoryUsage' => 'string',
            'diskUsage' => 'string',
            'totalMemory' => 'string',
            'availableMemory' => 'string',
            'totalHardDiskSpace' => 'string',
            'availableHardDiskSpace' => 'string',
            'networkRead' => 'string',
            'networkWrite' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * runningStatus  运行状态。
    * cpuUsage  CPU使用率。
    * memoryUsage  内存使用率。
    * diskUsage  硬盘使用率。
    * totalMemory  总内存。单位MB。
    * availableMemory  可用内存。单位MB。
    * totalHardDiskSpace  总硬盘空间。单位GB。
    * availableHardDiskSpace  可用硬盘空间。单位GB。
    * networkRead  网络读取速度。单位Byte/s。
    * networkWrite  网络写入速度。单位Byte/s。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'runningStatus' => null,
        'cpuUsage' => null,
        'memoryUsage' => null,
        'diskUsage' => null,
        'totalMemory' => null,
        'availableMemory' => null,
        'totalHardDiskSpace' => null,
        'availableHardDiskSpace' => null,
        'networkRead' => null,
        'networkWrite' => null
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
    * runningStatus  运行状态。
    * cpuUsage  CPU使用率。
    * memoryUsage  内存使用率。
    * diskUsage  硬盘使用率。
    * totalMemory  总内存。单位MB。
    * availableMemory  可用内存。单位MB。
    * totalHardDiskSpace  总硬盘空间。单位GB。
    * availableHardDiskSpace  可用硬盘空间。单位GB。
    * networkRead  网络读取速度。单位Byte/s。
    * networkWrite  网络写入速度。单位Byte/s。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'runningStatus' => 'running_status',
            'cpuUsage' => 'cpu_usage',
            'memoryUsage' => 'memory_usage',
            'diskUsage' => 'disk_usage',
            'totalMemory' => 'total_memory',
            'availableMemory' => 'available_memory',
            'totalHardDiskSpace' => 'total_hard_disk_space',
            'availableHardDiskSpace' => 'available_hard_disk_space',
            'networkRead' => 'network_read',
            'networkWrite' => 'network_write'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * runningStatus  运行状态。
    * cpuUsage  CPU使用率。
    * memoryUsage  内存使用率。
    * diskUsage  硬盘使用率。
    * totalMemory  总内存。单位MB。
    * availableMemory  可用内存。单位MB。
    * totalHardDiskSpace  总硬盘空间。单位GB。
    * availableHardDiskSpace  可用硬盘空间。单位GB。
    * networkRead  网络读取速度。单位Byte/s。
    * networkWrite  网络写入速度。单位Byte/s。
    *
    * @var string[]
    */
    protected static $setters = [
            'runningStatus' => 'setRunningStatus',
            'cpuUsage' => 'setCpuUsage',
            'memoryUsage' => 'setMemoryUsage',
            'diskUsage' => 'setDiskUsage',
            'totalMemory' => 'setTotalMemory',
            'availableMemory' => 'setAvailableMemory',
            'totalHardDiskSpace' => 'setTotalHardDiskSpace',
            'availableHardDiskSpace' => 'setAvailableHardDiskSpace',
            'networkRead' => 'setNetworkRead',
            'networkWrite' => 'setNetworkWrite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * runningStatus  运行状态。
    * cpuUsage  CPU使用率。
    * memoryUsage  内存使用率。
    * diskUsage  硬盘使用率。
    * totalMemory  总内存。单位MB。
    * availableMemory  可用内存。单位MB。
    * totalHardDiskSpace  总硬盘空间。单位GB。
    * availableHardDiskSpace  可用硬盘空间。单位GB。
    * networkRead  网络读取速度。单位Byte/s。
    * networkWrite  网络写入速度。单位Byte/s。
    *
    * @var string[]
    */
    protected static $getters = [
            'runningStatus' => 'getRunningStatus',
            'cpuUsage' => 'getCpuUsage',
            'memoryUsage' => 'getMemoryUsage',
            'diskUsage' => 'getDiskUsage',
            'totalMemory' => 'getTotalMemory',
            'availableMemory' => 'getAvailableMemory',
            'totalHardDiskSpace' => 'getTotalHardDiskSpace',
            'availableHardDiskSpace' => 'getAvailableHardDiskSpace',
            'networkRead' => 'getNetworkRead',
            'networkWrite' => 'getNetworkWrite'
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
        $this->container['runningStatus'] = isset($data['runningStatus']) ? $data['runningStatus'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['memoryUsage'] = isset($data['memoryUsage']) ? $data['memoryUsage'] : null;
        $this->container['diskUsage'] = isset($data['diskUsage']) ? $data['diskUsage'] : null;
        $this->container['totalMemory'] = isset($data['totalMemory']) ? $data['totalMemory'] : null;
        $this->container['availableMemory'] = isset($data['availableMemory']) ? $data['availableMemory'] : null;
        $this->container['totalHardDiskSpace'] = isset($data['totalHardDiskSpace']) ? $data['totalHardDiskSpace'] : null;
        $this->container['availableHardDiskSpace'] = isset($data['availableHardDiskSpace']) ? $data['availableHardDiskSpace'] : null;
        $this->container['networkRead'] = isset($data['networkRead']) ? $data['networkRead'] : null;
        $this->container['networkWrite'] = isset($data['networkWrite']) ? $data['networkWrite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['runningStatus']) && (mb_strlen($this->container['runningStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'runningStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cpuUsage']) && (mb_strlen($this->container['cpuUsage']) < 1)) {
                $invalidProperties[] = "invalid value for 'cpuUsage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memoryUsage']) && (mb_strlen($this->container['memoryUsage']) < 1)) {
                $invalidProperties[] = "invalid value for 'memoryUsage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diskUsage']) && (mb_strlen($this->container['diskUsage']) < 1)) {
                $invalidProperties[] = "invalid value for 'diskUsage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['availableHardDiskSpace']) && (mb_strlen($this->container['availableHardDiskSpace']) < 1)) {
                $invalidProperties[] = "invalid value for 'availableHardDiskSpace', the character length must be bigger than or equal to 1.";
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
    * Gets runningStatus
    *  运行状态。
    *
    * @return string|null
    */
    public function getRunningStatus()
    {
        return $this->container['runningStatus'];
    }

    /**
    * Sets runningStatus
    *
    * @param string|null $runningStatus 运行状态。
    *
    * @return $this
    */
    public function setRunningStatus($runningStatus)
    {
        $this->container['runningStatus'] = $runningStatus;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  CPU使用率。
    *
    * @return string|null
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param string|null $cpuUsage CPU使用率。
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets memoryUsage
    *  内存使用率。
    *
    * @return string|null
    */
    public function getMemoryUsage()
    {
        return $this->container['memoryUsage'];
    }

    /**
    * Sets memoryUsage
    *
    * @param string|null $memoryUsage 内存使用率。
    *
    * @return $this
    */
    public function setMemoryUsage($memoryUsage)
    {
        $this->container['memoryUsage'] = $memoryUsage;
        return $this;
    }

    /**
    * Gets diskUsage
    *  硬盘使用率。
    *
    * @return string|null
    */
    public function getDiskUsage()
    {
        return $this->container['diskUsage'];
    }

    /**
    * Sets diskUsage
    *
    * @param string|null $diskUsage 硬盘使用率。
    *
    * @return $this
    */
    public function setDiskUsage($diskUsage)
    {
        $this->container['diskUsage'] = $diskUsage;
        return $this;
    }

    /**
    * Gets totalMemory
    *  总内存。单位MB。
    *
    * @return string|null
    */
    public function getTotalMemory()
    {
        return $this->container['totalMemory'];
    }

    /**
    * Sets totalMemory
    *
    * @param string|null $totalMemory 总内存。单位MB。
    *
    * @return $this
    */
    public function setTotalMemory($totalMemory)
    {
        $this->container['totalMemory'] = $totalMemory;
        return $this;
    }

    /**
    * Gets availableMemory
    *  可用内存。单位MB。
    *
    * @return string|null
    */
    public function getAvailableMemory()
    {
        return $this->container['availableMemory'];
    }

    /**
    * Sets availableMemory
    *
    * @param string|null $availableMemory 可用内存。单位MB。
    *
    * @return $this
    */
    public function setAvailableMemory($availableMemory)
    {
        $this->container['availableMemory'] = $availableMemory;
        return $this;
    }

    /**
    * Gets totalHardDiskSpace
    *  总硬盘空间。单位GB。
    *
    * @return string|null
    */
    public function getTotalHardDiskSpace()
    {
        return $this->container['totalHardDiskSpace'];
    }

    /**
    * Sets totalHardDiskSpace
    *
    * @param string|null $totalHardDiskSpace 总硬盘空间。单位GB。
    *
    * @return $this
    */
    public function setTotalHardDiskSpace($totalHardDiskSpace)
    {
        $this->container['totalHardDiskSpace'] = $totalHardDiskSpace;
        return $this;
    }

    /**
    * Gets availableHardDiskSpace
    *  可用硬盘空间。单位GB。
    *
    * @return string|null
    */
    public function getAvailableHardDiskSpace()
    {
        return $this->container['availableHardDiskSpace'];
    }

    /**
    * Sets availableHardDiskSpace
    *
    * @param string|null $availableHardDiskSpace 可用硬盘空间。单位GB。
    *
    * @return $this
    */
    public function setAvailableHardDiskSpace($availableHardDiskSpace)
    {
        $this->container['availableHardDiskSpace'] = $availableHardDiskSpace;
        return $this;
    }

    /**
    * Gets networkRead
    *  网络读取速度。单位Byte/s。
    *
    * @return string|null
    */
    public function getNetworkRead()
    {
        return $this->container['networkRead'];
    }

    /**
    * Sets networkRead
    *
    * @param string|null $networkRead 网络读取速度。单位Byte/s。
    *
    * @return $this
    */
    public function setNetworkRead($networkRead)
    {
        $this->container['networkRead'] = $networkRead;
        return $this;
    }

    /**
    * Gets networkWrite
    *  网络写入速度。单位Byte/s。
    *
    * @return string|null
    */
    public function getNetworkWrite()
    {
        return $this->container['networkWrite'];
    }

    /**
    * Sets networkWrite
    *
    * @param string|null $networkWrite 网络写入速度。单位Byte/s。
    *
    * @return $this
    */
    public function setNetworkWrite($networkWrite)
    {
        $this->container['networkWrite'] = $networkWrite;
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

