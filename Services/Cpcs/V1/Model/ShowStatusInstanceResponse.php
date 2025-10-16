<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatusInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatusInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuUtils  CPU使用率
    * memUtils  内存使用率
    * diskUtils  磁盘使用率
    * cpuUtilInstanceNames  CPU使用率对应实例名称
    * memUtilInstanceNames  内存使用率对应实例名称
    * diskUtilInstanceNames  磁盘使用率对应实例名称
    * cpuUtilAverages  CPU使用率平均值
    * memUtilAverages  内存使用率平均值
    * diskUtilAverages  磁盘使用率平均值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuUtils' => '\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]',
            'memUtils' => '\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]',
            'diskUtils' => '\HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]',
            'cpuUtilInstanceNames' => 'string[]',
            'memUtilInstanceNames' => 'string[]',
            'diskUtilInstanceNames' => 'string[]',
            'cpuUtilAverages' => 'double[]',
            'memUtilAverages' => 'double[]',
            'diskUtilAverages' => 'double[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuUtils  CPU使用率
    * memUtils  内存使用率
    * diskUtils  磁盘使用率
    * cpuUtilInstanceNames  CPU使用率对应实例名称
    * memUtilInstanceNames  内存使用率对应实例名称
    * diskUtilInstanceNames  磁盘使用率对应实例名称
    * cpuUtilAverages  CPU使用率平均值
    * memUtilAverages  内存使用率平均值
    * diskUtilAverages  磁盘使用率平均值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuUtils' => null,
        'memUtils' => null,
        'diskUtils' => null,
        'cpuUtilInstanceNames' => null,
        'memUtilInstanceNames' => null,
        'diskUtilInstanceNames' => null,
        'cpuUtilAverages' => 'double',
        'memUtilAverages' => 'double',
        'diskUtilAverages' => 'double'
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
    * cpuUtils  CPU使用率
    * memUtils  内存使用率
    * diskUtils  磁盘使用率
    * cpuUtilInstanceNames  CPU使用率对应实例名称
    * memUtilInstanceNames  内存使用率对应实例名称
    * diskUtilInstanceNames  磁盘使用率对应实例名称
    * cpuUtilAverages  CPU使用率平均值
    * memUtilAverages  内存使用率平均值
    * diskUtilAverages  磁盘使用率平均值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuUtils' => 'cpu_utils',
            'memUtils' => 'mem_utils',
            'diskUtils' => 'disk_utils',
            'cpuUtilInstanceNames' => 'cpu_util_instance_names',
            'memUtilInstanceNames' => 'mem_util_instance_names',
            'diskUtilInstanceNames' => 'disk_util_instance_names',
            'cpuUtilAverages' => 'cpu_util_averages',
            'memUtilAverages' => 'mem_util_averages',
            'diskUtilAverages' => 'disk_util_averages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuUtils  CPU使用率
    * memUtils  内存使用率
    * diskUtils  磁盘使用率
    * cpuUtilInstanceNames  CPU使用率对应实例名称
    * memUtilInstanceNames  内存使用率对应实例名称
    * diskUtilInstanceNames  磁盘使用率对应实例名称
    * cpuUtilAverages  CPU使用率平均值
    * memUtilAverages  内存使用率平均值
    * diskUtilAverages  磁盘使用率平均值
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuUtils' => 'setCpuUtils',
            'memUtils' => 'setMemUtils',
            'diskUtils' => 'setDiskUtils',
            'cpuUtilInstanceNames' => 'setCpuUtilInstanceNames',
            'memUtilInstanceNames' => 'setMemUtilInstanceNames',
            'diskUtilInstanceNames' => 'setDiskUtilInstanceNames',
            'cpuUtilAverages' => 'setCpuUtilAverages',
            'memUtilAverages' => 'setMemUtilAverages',
            'diskUtilAverages' => 'setDiskUtilAverages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuUtils  CPU使用率
    * memUtils  内存使用率
    * diskUtils  磁盘使用率
    * cpuUtilInstanceNames  CPU使用率对应实例名称
    * memUtilInstanceNames  内存使用率对应实例名称
    * diskUtilInstanceNames  磁盘使用率对应实例名称
    * cpuUtilAverages  CPU使用率平均值
    * memUtilAverages  内存使用率平均值
    * diskUtilAverages  磁盘使用率平均值
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuUtils' => 'getCpuUtils',
            'memUtils' => 'getMemUtils',
            'diskUtils' => 'getDiskUtils',
            'cpuUtilInstanceNames' => 'getCpuUtilInstanceNames',
            'memUtilInstanceNames' => 'getMemUtilInstanceNames',
            'diskUtilInstanceNames' => 'getDiskUtilInstanceNames',
            'cpuUtilAverages' => 'getCpuUtilAverages',
            'memUtilAverages' => 'getMemUtilAverages',
            'diskUtilAverages' => 'getDiskUtilAverages'
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
        $this->container['cpuUtils'] = isset($data['cpuUtils']) ? $data['cpuUtils'] : null;
        $this->container['memUtils'] = isset($data['memUtils']) ? $data['memUtils'] : null;
        $this->container['diskUtils'] = isset($data['diskUtils']) ? $data['diskUtils'] : null;
        $this->container['cpuUtilInstanceNames'] = isset($data['cpuUtilInstanceNames']) ? $data['cpuUtilInstanceNames'] : null;
        $this->container['memUtilInstanceNames'] = isset($data['memUtilInstanceNames']) ? $data['memUtilInstanceNames'] : null;
        $this->container['diskUtilInstanceNames'] = isset($data['diskUtilInstanceNames']) ? $data['diskUtilInstanceNames'] : null;
        $this->container['cpuUtilAverages'] = isset($data['cpuUtilAverages']) ? $data['cpuUtilAverages'] : null;
        $this->container['memUtilAverages'] = isset($data['memUtilAverages']) ? $data['memUtilAverages'] : null;
        $this->container['diskUtilAverages'] = isset($data['diskUtilAverages']) ? $data['diskUtilAverages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets cpuUtils
    *  CPU使用率
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]|null
    */
    public function getCpuUtils()
    {
        return $this->container['cpuUtils'];
    }

    /**
    * Sets cpuUtils
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]|null $cpuUtils CPU使用率
    *
    * @return $this
    */
    public function setCpuUtils($cpuUtils)
    {
        $this->container['cpuUtils'] = $cpuUtils;
        return $this;
    }

    /**
    * Gets memUtils
    *  内存使用率
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]|null
    */
    public function getMemUtils()
    {
        return $this->container['memUtils'];
    }

    /**
    * Sets memUtils
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]|null $memUtils 内存使用率
    *
    * @return $this
    */
    public function setMemUtils($memUtils)
    {
        $this->container['memUtils'] = $memUtils;
        return $this;
    }

    /**
    * Gets diskUtils
    *  磁盘使用率
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]|null
    */
    public function getDiskUtils()
    {
        return $this->container['diskUtils'];
    }

    /**
    * Sets diskUtils
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\ShowStatusInstanceItem[]|null $diskUtils 磁盘使用率
    *
    * @return $this
    */
    public function setDiskUtils($diskUtils)
    {
        $this->container['diskUtils'] = $diskUtils;
        return $this;
    }

    /**
    * Gets cpuUtilInstanceNames
    *  CPU使用率对应实例名称
    *
    * @return string[]|null
    */
    public function getCpuUtilInstanceNames()
    {
        return $this->container['cpuUtilInstanceNames'];
    }

    /**
    * Sets cpuUtilInstanceNames
    *
    * @param string[]|null $cpuUtilInstanceNames CPU使用率对应实例名称
    *
    * @return $this
    */
    public function setCpuUtilInstanceNames($cpuUtilInstanceNames)
    {
        $this->container['cpuUtilInstanceNames'] = $cpuUtilInstanceNames;
        return $this;
    }

    /**
    * Gets memUtilInstanceNames
    *  内存使用率对应实例名称
    *
    * @return string[]|null
    */
    public function getMemUtilInstanceNames()
    {
        return $this->container['memUtilInstanceNames'];
    }

    /**
    * Sets memUtilInstanceNames
    *
    * @param string[]|null $memUtilInstanceNames 内存使用率对应实例名称
    *
    * @return $this
    */
    public function setMemUtilInstanceNames($memUtilInstanceNames)
    {
        $this->container['memUtilInstanceNames'] = $memUtilInstanceNames;
        return $this;
    }

    /**
    * Gets diskUtilInstanceNames
    *  磁盘使用率对应实例名称
    *
    * @return string[]|null
    */
    public function getDiskUtilInstanceNames()
    {
        return $this->container['diskUtilInstanceNames'];
    }

    /**
    * Sets diskUtilInstanceNames
    *
    * @param string[]|null $diskUtilInstanceNames 磁盘使用率对应实例名称
    *
    * @return $this
    */
    public function setDiskUtilInstanceNames($diskUtilInstanceNames)
    {
        $this->container['diskUtilInstanceNames'] = $diskUtilInstanceNames;
        return $this;
    }

    /**
    * Gets cpuUtilAverages
    *  CPU使用率平均值
    *
    * @return double[]|null
    */
    public function getCpuUtilAverages()
    {
        return $this->container['cpuUtilAverages'];
    }

    /**
    * Sets cpuUtilAverages
    *
    * @param double[]|null $cpuUtilAverages CPU使用率平均值
    *
    * @return $this
    */
    public function setCpuUtilAverages($cpuUtilAverages)
    {
        $this->container['cpuUtilAverages'] = $cpuUtilAverages;
        return $this;
    }

    /**
    * Gets memUtilAverages
    *  内存使用率平均值
    *
    * @return double[]|null
    */
    public function getMemUtilAverages()
    {
        return $this->container['memUtilAverages'];
    }

    /**
    * Sets memUtilAverages
    *
    * @param double[]|null $memUtilAverages 内存使用率平均值
    *
    * @return $this
    */
    public function setMemUtilAverages($memUtilAverages)
    {
        $this->container['memUtilAverages'] = $memUtilAverages;
        return $this;
    }

    /**
    * Gets diskUtilAverages
    *  磁盘使用率平均值
    *
    * @return double[]|null
    */
    public function getDiskUtilAverages()
    {
        return $this->container['diskUtilAverages'];
    }

    /**
    * Sets diskUtilAverages
    *
    * @param double[]|null $diskUtilAverages 磁盘使用率平均值
    *
    * @return $this
    */
    public function setDiskUtilAverages($diskUtilAverages)
    {
        $this->container['diskUtilAverages'] = $diskUtilAverages;
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

