<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkFlowStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkFlowStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  phase
    * pointStatuses  升级流程中的各个任务项的执行状态
    * lineStatuses  表示该升级流程的任务执行线路
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => '\HuaweiCloud\SDK\Cce\V3\Model\WorkFlowPhase',
            'pointStatuses' => '\HuaweiCloud\SDK\Cce\V3\Model\PointStatus[]',
            'lineStatuses' => '\HuaweiCloud\SDK\Cce\V3\Model\LineStatus[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  phase
    * pointStatuses  升级流程中的各个任务项的执行状态
    * lineStatuses  表示该升级流程的任务执行线路
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'pointStatuses' => null,
        'lineStatuses' => null
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
    * phase  phase
    * pointStatuses  升级流程中的各个任务项的执行状态
    * lineStatuses  表示该升级流程的任务执行线路
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'pointStatuses' => 'pointStatuses',
            'lineStatuses' => 'lineStatuses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  phase
    * pointStatuses  升级流程中的各个任务项的执行状态
    * lineStatuses  表示该升级流程的任务执行线路
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'pointStatuses' => 'setPointStatuses',
            'lineStatuses' => 'setLineStatuses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  phase
    * pointStatuses  升级流程中的各个任务项的执行状态
    * lineStatuses  表示该升级流程的任务执行线路
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'pointStatuses' => 'getPointStatuses',
            'lineStatuses' => 'getLineStatuses'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['pointStatuses'] = isset($data['pointStatuses']) ? $data['pointStatuses'] : null;
        $this->container['lineStatuses'] = isset($data['lineStatuses']) ? $data['lineStatuses'] : null;
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
    * Gets phase
    *  phase
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\WorkFlowPhase|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\WorkFlowPhase|null $phase phase
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets pointStatuses
    *  升级流程中的各个任务项的执行状态
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\PointStatus[]|null
    */
    public function getPointStatuses()
    {
        return $this->container['pointStatuses'];
    }

    /**
    * Sets pointStatuses
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\PointStatus[]|null $pointStatuses 升级流程中的各个任务项的执行状态
    *
    * @return $this
    */
    public function setPointStatuses($pointStatuses)
    {
        $this->container['pointStatuses'] = $pointStatuses;
        return $this;
    }

    /**
    * Gets lineStatuses
    *  表示该升级流程的任务执行线路
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\LineStatus[]|null
    */
    public function getLineStatuses()
    {
        return $this->container['lineStatuses'];
    }

    /**
    * Sets lineStatuses
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\LineStatus[]|null $lineStatuses 表示该升级流程的任务执行线路
    *
    * @return $this
    */
    public function setLineStatuses($lineStatuses)
    {
        $this->container['lineStatuses'] = $lineStatuses;
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

