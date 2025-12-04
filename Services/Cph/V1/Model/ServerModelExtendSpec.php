<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerModelExtendSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerModel_extend_spec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  云手机服务器cpu类型。
    * memory  云手机服务器内存类型。
    * disk  云手机服务器磁盘类型。
    * networkInterface  云手机服务器网络类型。
    * gpu  云手机服务器gpu类型。
    * bmsFlavor  云手机服务器bms规格。
    * gpuCount  云手机服务器gpu数量。
    * numaCount  云手机服务器numa数量。
    * osVolume  osVolume
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'string',
            'memory' => 'string',
            'disk' => 'string',
            'networkInterface' => 'string',
            'gpu' => 'string',
            'bmsFlavor' => 'string',
            'gpuCount' => 'int',
            'numaCount' => 'int',
            'osVolume' => '\HuaweiCloud\SDK\Cph\V1\Model\ServerModelExtendSpecOsVolume'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  云手机服务器cpu类型。
    * memory  云手机服务器内存类型。
    * disk  云手机服务器磁盘类型。
    * networkInterface  云手机服务器网络类型。
    * gpu  云手机服务器gpu类型。
    * bmsFlavor  云手机服务器bms规格。
    * gpuCount  云手机服务器gpu数量。
    * numaCount  云手机服务器numa数量。
    * osVolume  osVolume
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'memory' => null,
        'disk' => null,
        'networkInterface' => null,
        'gpu' => null,
        'bmsFlavor' => null,
        'gpuCount' => 'int32',
        'numaCount' => 'int32',
        'osVolume' => null
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
    * cpu  云手机服务器cpu类型。
    * memory  云手机服务器内存类型。
    * disk  云手机服务器磁盘类型。
    * networkInterface  云手机服务器网络类型。
    * gpu  云手机服务器gpu类型。
    * bmsFlavor  云手机服务器bms规格。
    * gpuCount  云手机服务器gpu数量。
    * numaCount  云手机服务器numa数量。
    * osVolume  osVolume
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'memory' => 'memory',
            'disk' => 'disk',
            'networkInterface' => 'network_interface',
            'gpu' => 'gpu',
            'bmsFlavor' => 'bms_flavor',
            'gpuCount' => 'gpu_count',
            'numaCount' => 'numa_count',
            'osVolume' => 'os_volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  云手机服务器cpu类型。
    * memory  云手机服务器内存类型。
    * disk  云手机服务器磁盘类型。
    * networkInterface  云手机服务器网络类型。
    * gpu  云手机服务器gpu类型。
    * bmsFlavor  云手机服务器bms规格。
    * gpuCount  云手机服务器gpu数量。
    * numaCount  云手机服务器numa数量。
    * osVolume  osVolume
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'disk' => 'setDisk',
            'networkInterface' => 'setNetworkInterface',
            'gpu' => 'setGpu',
            'bmsFlavor' => 'setBmsFlavor',
            'gpuCount' => 'setGpuCount',
            'numaCount' => 'setNumaCount',
            'osVolume' => 'setOsVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  云手机服务器cpu类型。
    * memory  云手机服务器内存类型。
    * disk  云手机服务器磁盘类型。
    * networkInterface  云手机服务器网络类型。
    * gpu  云手机服务器gpu类型。
    * bmsFlavor  云手机服务器bms规格。
    * gpuCount  云手机服务器gpu数量。
    * numaCount  云手机服务器numa数量。
    * osVolume  osVolume
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'disk' => 'getDisk',
            'networkInterface' => 'getNetworkInterface',
            'gpu' => 'getGpu',
            'bmsFlavor' => 'getBmsFlavor',
            'gpuCount' => 'getGpuCount',
            'numaCount' => 'getNumaCount',
            'osVolume' => 'getOsVolume'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['networkInterface'] = isset($data['networkInterface']) ? $data['networkInterface'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['bmsFlavor'] = isset($data['bmsFlavor']) ? $data['bmsFlavor'] : null;
        $this->container['gpuCount'] = isset($data['gpuCount']) ? $data['gpuCount'] : null;
        $this->container['numaCount'] = isset($data['numaCount']) ? $data['numaCount'] : null;
        $this->container['osVolume'] = isset($data['osVolume']) ? $data['osVolume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cpu']) && (mb_strlen($this->container['cpu']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cpu']) && (mb_strlen($this->container['cpu']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memory']) && (mb_strlen($this->container['memory']) > 1024)) {
                $invalidProperties[] = "invalid value for 'memory', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['memory']) && (mb_strlen($this->container['memory']) < 0)) {
                $invalidProperties[] = "invalid value for 'memory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['disk']) && (mb_strlen($this->container['disk']) > 1024)) {
                $invalidProperties[] = "invalid value for 'disk', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['disk']) && (mb_strlen($this->container['disk']) < 0)) {
                $invalidProperties[] = "invalid value for 'disk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkInterface']) && (mb_strlen($this->container['networkInterface']) > 1024)) {
                $invalidProperties[] = "invalid value for 'networkInterface', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['networkInterface']) && (mb_strlen($this->container['networkInterface']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkInterface', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gpu']) && (mb_strlen($this->container['gpu']) > 1024)) {
                $invalidProperties[] = "invalid value for 'gpu', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['gpu']) && (mb_strlen($this->container['gpu']) < 0)) {
                $invalidProperties[] = "invalid value for 'gpu', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bmsFlavor']) && (mb_strlen($this->container['bmsFlavor']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bmsFlavor', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bmsFlavor']) && (mb_strlen($this->container['bmsFlavor']) < 0)) {
                $invalidProperties[] = "invalid value for 'bmsFlavor', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gpuCount']) && ($this->container['gpuCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'gpuCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['gpuCount']) && ($this->container['gpuCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'gpuCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['numaCount']) && ($this->container['numaCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'numaCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['numaCount']) && ($this->container['numaCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'numaCount', must be bigger than or equal to 0.";
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
    * Gets cpu
    *  云手机服务器cpu类型。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu 云手机服务器cpu类型。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  云手机服务器内存类型。
    *
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory 云手机服务器内存类型。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets disk
    *  云手机服务器磁盘类型。
    *
    * @return string|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param string|null $disk 云手机服务器磁盘类型。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets networkInterface
    *  云手机服务器网络类型。
    *
    * @return string|null
    */
    public function getNetworkInterface()
    {
        return $this->container['networkInterface'];
    }

    /**
    * Sets networkInterface
    *
    * @param string|null $networkInterface 云手机服务器网络类型。
    *
    * @return $this
    */
    public function setNetworkInterface($networkInterface)
    {
        $this->container['networkInterface'] = $networkInterface;
        return $this;
    }

    /**
    * Gets gpu
    *  云手机服务器gpu类型。
    *
    * @return string|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param string|null $gpu 云手机服务器gpu类型。
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
        return $this;
    }

    /**
    * Gets bmsFlavor
    *  云手机服务器bms规格。
    *
    * @return string|null
    */
    public function getBmsFlavor()
    {
        return $this->container['bmsFlavor'];
    }

    /**
    * Sets bmsFlavor
    *
    * @param string|null $bmsFlavor 云手机服务器bms规格。
    *
    * @return $this
    */
    public function setBmsFlavor($bmsFlavor)
    {
        $this->container['bmsFlavor'] = $bmsFlavor;
        return $this;
    }

    /**
    * Gets gpuCount
    *  云手机服务器gpu数量。
    *
    * @return int|null
    */
    public function getGpuCount()
    {
        return $this->container['gpuCount'];
    }

    /**
    * Sets gpuCount
    *
    * @param int|null $gpuCount 云手机服务器gpu数量。
    *
    * @return $this
    */
    public function setGpuCount($gpuCount)
    {
        $this->container['gpuCount'] = $gpuCount;
        return $this;
    }

    /**
    * Gets numaCount
    *  云手机服务器numa数量。
    *
    * @return int|null
    */
    public function getNumaCount()
    {
        return $this->container['numaCount'];
    }

    /**
    * Sets numaCount
    *
    * @param int|null $numaCount 云手机服务器numa数量。
    *
    * @return $this
    */
    public function setNumaCount($numaCount)
    {
        $this->container['numaCount'] = $numaCount;
        return $this;
    }

    /**
    * Gets osVolume
    *  osVolume
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\ServerModelExtendSpecOsVolume|null
    */
    public function getOsVolume()
    {
        return $this->container['osVolume'];
    }

    /**
    * Sets osVolume
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\ServerModelExtendSpecOsVolume|null $osVolume osVolume
    *
    * @return $this
    */
    public function setOsVolume($osVolume)
    {
        $this->container['osVolume'] = $osVolume;
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

