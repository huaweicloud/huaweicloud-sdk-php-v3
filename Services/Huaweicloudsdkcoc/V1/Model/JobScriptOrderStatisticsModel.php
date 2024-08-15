<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScriptOrderStatisticsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScriptOrderStatisticsModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalInstance  实例总量
    * executeStatistics  每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalInstance' => 'int',
            'executeStatistics' => '\HuaweiCloud\SDK\Coc\V1\Model\ExectuionStatistic[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalInstance  实例总量
    * executeStatistics  每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalInstance' => 'int32',
        'executeStatistics' => null
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
    * totalInstance  实例总量
    * executeStatistics  每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalInstance' => 'total_instance',
            'executeStatistics' => 'execute_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalInstance  实例总量
    * executeStatistics  每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalInstance' => 'setTotalInstance',
            'executeStatistics' => 'setExecuteStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalInstance  实例总量
    * executeStatistics  每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalInstance' => 'getTotalInstance',
            'executeStatistics' => 'getExecuteStatistics'
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
        $this->container['totalInstance'] = isset($data['totalInstance']) ? $data['totalInstance'] : null;
        $this->container['executeStatistics'] = isset($data['executeStatistics']) ? $data['executeStatistics'] : null;
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
    * Gets totalInstance
    *  实例总量
    *
    * @return int|null
    */
    public function getTotalInstance()
    {
        return $this->container['totalInstance'];
    }

    /**
    * Sets totalInstance
    *
    * @param int|null $totalInstance 实例总量
    *
    * @return $this
    */
    public function setTotalInstance($totalInstance)
    {
        $this->container['totalInstance'] = $totalInstance;
        return $this;
    }

    /**
    * Gets executeStatistics
    *  每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExectuionStatistic[]|null
    */
    public function getExecuteStatistics()
    {
        return $this->container['executeStatistics'];
    }

    /**
    * Sets executeStatistics
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExectuionStatistic[]|null $executeStatistics 每个状态一个count，里面记录该状态的总数量，以及包含该状态的批次列表
    *
    * @return $this
    */
    public function setExecuteStatistics($executeStatistics)
    {
        $this->container['executeStatistics'] = $executeStatistics;
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

