<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputKbps  缓存实例网络入流量，单位：Kbps。
    * outputKbps  缓存实例网络出流量，单位：Kbps。
    * instanceId  实例ID。
    * keys  缓存存储的数据条数。
    * usedMemory  缓存已经使用内存，单位：MB。
    * maxMemory  缓存的总内存，单位：MB。
    * cmdGetCount  缓存get命令被调用次数。
    * cmdSetCount  缓存set命令被调用次数。
    * usedCpu  CPU使用率，单位：百分比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputKbps' => 'string',
            'outputKbps' => 'string',
            'instanceId' => 'string',
            'keys' => 'int',
            'usedMemory' => 'int',
            'maxMemory' => 'int',
            'cmdGetCount' => 'int',
            'cmdSetCount' => 'int',
            'usedCpu' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputKbps  缓存实例网络入流量，单位：Kbps。
    * outputKbps  缓存实例网络出流量，单位：Kbps。
    * instanceId  实例ID。
    * keys  缓存存储的数据条数。
    * usedMemory  缓存已经使用内存，单位：MB。
    * maxMemory  缓存的总内存，单位：MB。
    * cmdGetCount  缓存get命令被调用次数。
    * cmdSetCount  缓存set命令被调用次数。
    * usedCpu  CPU使用率，单位：百分比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputKbps' => 'int64',
        'outputKbps' => 'int64',
        'instanceId' => 'string',
        'keys' => 'int64',
        'usedMemory' => 'int64',
        'maxMemory' => 'int64',
        'cmdGetCount' => 'int64',
        'cmdSetCount' => 'int64',
        'usedCpu' => 'int64'
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
    * inputKbps  缓存实例网络入流量，单位：Kbps。
    * outputKbps  缓存实例网络出流量，单位：Kbps。
    * instanceId  实例ID。
    * keys  缓存存储的数据条数。
    * usedMemory  缓存已经使用内存，单位：MB。
    * maxMemory  缓存的总内存，单位：MB。
    * cmdGetCount  缓存get命令被调用次数。
    * cmdSetCount  缓存set命令被调用次数。
    * usedCpu  CPU使用率，单位：百分比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputKbps' => 'input_kbps',
            'outputKbps' => 'output_kbps',
            'instanceId' => 'instance_id',
            'keys' => 'keys',
            'usedMemory' => 'used_memory',
            'maxMemory' => 'max_memory',
            'cmdGetCount' => 'cmd_get_count',
            'cmdSetCount' => 'cmd_set_count',
            'usedCpu' => 'used_cpu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputKbps  缓存实例网络入流量，单位：Kbps。
    * outputKbps  缓存实例网络出流量，单位：Kbps。
    * instanceId  实例ID。
    * keys  缓存存储的数据条数。
    * usedMemory  缓存已经使用内存，单位：MB。
    * maxMemory  缓存的总内存，单位：MB。
    * cmdGetCount  缓存get命令被调用次数。
    * cmdSetCount  缓存set命令被调用次数。
    * usedCpu  CPU使用率，单位：百分比。
    *
    * @var string[]
    */
    protected static $setters = [
            'inputKbps' => 'setInputKbps',
            'outputKbps' => 'setOutputKbps',
            'instanceId' => 'setInstanceId',
            'keys' => 'setKeys',
            'usedMemory' => 'setUsedMemory',
            'maxMemory' => 'setMaxMemory',
            'cmdGetCount' => 'setCmdGetCount',
            'cmdSetCount' => 'setCmdSetCount',
            'usedCpu' => 'setUsedCpu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputKbps  缓存实例网络入流量，单位：Kbps。
    * outputKbps  缓存实例网络出流量，单位：Kbps。
    * instanceId  实例ID。
    * keys  缓存存储的数据条数。
    * usedMemory  缓存已经使用内存，单位：MB。
    * maxMemory  缓存的总内存，单位：MB。
    * cmdGetCount  缓存get命令被调用次数。
    * cmdSetCount  缓存set命令被调用次数。
    * usedCpu  CPU使用率，单位：百分比。
    *
    * @var string[]
    */
    protected static $getters = [
            'inputKbps' => 'getInputKbps',
            'outputKbps' => 'getOutputKbps',
            'instanceId' => 'getInstanceId',
            'keys' => 'getKeys',
            'usedMemory' => 'getUsedMemory',
            'maxMemory' => 'getMaxMemory',
            'cmdGetCount' => 'getCmdGetCount',
            'cmdSetCount' => 'getCmdSetCount',
            'usedCpu' => 'getUsedCpu'
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
        $this->container['inputKbps'] = isset($data['inputKbps']) ? $data['inputKbps'] : null;
        $this->container['outputKbps'] = isset($data['outputKbps']) ? $data['outputKbps'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['usedMemory'] = isset($data['usedMemory']) ? $data['usedMemory'] : null;
        $this->container['maxMemory'] = isset($data['maxMemory']) ? $data['maxMemory'] : null;
        $this->container['cmdGetCount'] = isset($data['cmdGetCount']) ? $data['cmdGetCount'] : null;
        $this->container['cmdSetCount'] = isset($data['cmdSetCount']) ? $data['cmdSetCount'] : null;
        $this->container['usedCpu'] = isset($data['usedCpu']) ? $data['usedCpu'] : null;
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
    * Gets inputKbps
    *  缓存实例网络入流量，单位：Kbps。
    *
    * @return string|null
    */
    public function getInputKbps()
    {
        return $this->container['inputKbps'];
    }

    /**
    * Sets inputKbps
    *
    * @param string|null $inputKbps 缓存实例网络入流量，单位：Kbps。
    *
    * @return $this
    */
    public function setInputKbps($inputKbps)
    {
        $this->container['inputKbps'] = $inputKbps;
        return $this;
    }

    /**
    * Gets outputKbps
    *  缓存实例网络出流量，单位：Kbps。
    *
    * @return string|null
    */
    public function getOutputKbps()
    {
        return $this->container['outputKbps'];
    }

    /**
    * Sets outputKbps
    *
    * @param string|null $outputKbps 缓存实例网络出流量，单位：Kbps。
    *
    * @return $this
    */
    public function setOutputKbps($outputKbps)
    {
        $this->container['outputKbps'] = $outputKbps;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets keys
    *  缓存存储的数据条数。
    *
    * @return int|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param int|null $keys 缓存存储的数据条数。
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }

    /**
    * Gets usedMemory
    *  缓存已经使用内存，单位：MB。
    *
    * @return int|null
    */
    public function getUsedMemory()
    {
        return $this->container['usedMemory'];
    }

    /**
    * Sets usedMemory
    *
    * @param int|null $usedMemory 缓存已经使用内存，单位：MB。
    *
    * @return $this
    */
    public function setUsedMemory($usedMemory)
    {
        $this->container['usedMemory'] = $usedMemory;
        return $this;
    }

    /**
    * Gets maxMemory
    *  缓存的总内存，单位：MB。
    *
    * @return int|null
    */
    public function getMaxMemory()
    {
        return $this->container['maxMemory'];
    }

    /**
    * Sets maxMemory
    *
    * @param int|null $maxMemory 缓存的总内存，单位：MB。
    *
    * @return $this
    */
    public function setMaxMemory($maxMemory)
    {
        $this->container['maxMemory'] = $maxMemory;
        return $this;
    }

    /**
    * Gets cmdGetCount
    *  缓存get命令被调用次数。
    *
    * @return int|null
    */
    public function getCmdGetCount()
    {
        return $this->container['cmdGetCount'];
    }

    /**
    * Sets cmdGetCount
    *
    * @param int|null $cmdGetCount 缓存get命令被调用次数。
    *
    * @return $this
    */
    public function setCmdGetCount($cmdGetCount)
    {
        $this->container['cmdGetCount'] = $cmdGetCount;
        return $this;
    }

    /**
    * Gets cmdSetCount
    *  缓存set命令被调用次数。
    *
    * @return int|null
    */
    public function getCmdSetCount()
    {
        return $this->container['cmdSetCount'];
    }

    /**
    * Sets cmdSetCount
    *
    * @param int|null $cmdSetCount 缓存set命令被调用次数。
    *
    * @return $this
    */
    public function setCmdSetCount($cmdSetCount)
    {
        $this->container['cmdSetCount'] = $cmdSetCount;
        return $this;
    }

    /**
    * Gets usedCpu
    *  CPU使用率，单位：百分比。
    *
    * @return string|null
    */
    public function getUsedCpu()
    {
        return $this->container['usedCpu'];
    }

    /**
    * Sets usedCpu
    *
    * @param string|null $usedCpu CPU使用率，单位：百分比。
    *
    * @return $this
    */
    public function setUsedCpu($usedCpu)
    {
        $this->container['usedCpu'] = $usedCpu;
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

