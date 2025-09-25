<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionTimeDetailsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionTimeDetailsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceTime  resourceTime
    * kernelTime  kernelTime
    * kernelExecutionTime  kernelExecutionTime
    * waitEventTime  waitEventTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceTime',
            'kernelTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelTime',
            'kernelExecutionTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelExecutionTime',
            'waitEventTime' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WaitEventTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceTime  resourceTime
    * kernelTime  kernelTime
    * kernelExecutionTime  kernelExecutionTime
    * waitEventTime  waitEventTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceTime' => null,
        'kernelTime' => null,
        'kernelExecutionTime' => null,
        'waitEventTime' => null
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
    * resourceTime  resourceTime
    * kernelTime  kernelTime
    * kernelExecutionTime  kernelExecutionTime
    * waitEventTime  waitEventTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceTime' => 'resource_time',
            'kernelTime' => 'kernel_time',
            'kernelExecutionTime' => 'kernel_execution_time',
            'waitEventTime' => 'wait_event_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceTime  resourceTime
    * kernelTime  kernelTime
    * kernelExecutionTime  kernelExecutionTime
    * waitEventTime  waitEventTime
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceTime' => 'setResourceTime',
            'kernelTime' => 'setKernelTime',
            'kernelExecutionTime' => 'setKernelExecutionTime',
            'waitEventTime' => 'setWaitEventTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceTime  resourceTime
    * kernelTime  kernelTime
    * kernelExecutionTime  kernelExecutionTime
    * waitEventTime  waitEventTime
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceTime' => 'getResourceTime',
            'kernelTime' => 'getKernelTime',
            'kernelExecutionTime' => 'getKernelExecutionTime',
            'waitEventTime' => 'getWaitEventTime'
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
        $this->container['resourceTime'] = isset($data['resourceTime']) ? $data['resourceTime'] : null;
        $this->container['kernelTime'] = isset($data['kernelTime']) ? $data['kernelTime'] : null;
        $this->container['kernelExecutionTime'] = isset($data['kernelExecutionTime']) ? $data['kernelExecutionTime'] : null;
        $this->container['waitEventTime'] = isset($data['waitEventTime']) ? $data['waitEventTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceTime'] === null) {
            $invalidProperties[] = "'resourceTime' can't be null";
        }
        if ($this->container['kernelTime'] === null) {
            $invalidProperties[] = "'kernelTime' can't be null";
        }
        if ($this->container['waitEventTime'] === null) {
            $invalidProperties[] = "'waitEventTime' can't be null";
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
    * Gets resourceTime
    *  resourceTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceTime
    */
    public function getResourceTime()
    {
        return $this->container['resourceTime'];
    }

    /**
    * Sets resourceTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceTime $resourceTime resourceTime
    *
    * @return $this
    */
    public function setResourceTime($resourceTime)
    {
        $this->container['resourceTime'] = $resourceTime;
        return $this;
    }

    /**
    * Gets kernelTime
    *  kernelTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelTime
    */
    public function getKernelTime()
    {
        return $this->container['kernelTime'];
    }

    /**
    * Sets kernelTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelTime $kernelTime kernelTime
    *
    * @return $this
    */
    public function setKernelTime($kernelTime)
    {
        $this->container['kernelTime'] = $kernelTime;
        return $this;
    }

    /**
    * Gets kernelExecutionTime
    *  kernelExecutionTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelExecutionTime|null
    */
    public function getKernelExecutionTime()
    {
        return $this->container['kernelExecutionTime'];
    }

    /**
    * Sets kernelExecutionTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\KernelExecutionTime|null $kernelExecutionTime kernelExecutionTime
    *
    * @return $this
    */
    public function setKernelExecutionTime($kernelExecutionTime)
    {
        $this->container['kernelExecutionTime'] = $kernelExecutionTime;
        return $this;
    }

    /**
    * Gets waitEventTime
    *  waitEventTime
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WaitEventTime
    */
    public function getWaitEventTime()
    {
        return $this->container['waitEventTime'];
    }

    /**
    * Sets waitEventTime
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\WaitEventTime $waitEventTime waitEventTime
    *
    * @return $this
    */
    public function setWaitEventTime($waitEventTime)
    {
        $this->container['waitEventTime'] = $waitEventTime;
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

