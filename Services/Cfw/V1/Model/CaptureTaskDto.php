<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaptureTaskDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaptureTaskDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destination  destination
    * duration  抓包时长
    * maxPackets  最大抓包数
    * name  抓包任务名称
    * service  service
    * source  source
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destination' => '\HuaweiCloud\SDK\Cfw\V1\Model\CaptureRuleAddressDto',
            'duration' => 'int',
            'maxPackets' => 'int',
            'name' => 'string',
            'service' => '\HuaweiCloud\SDK\Cfw\V1\Model\CaptureServiceDto',
            'source' => '\HuaweiCloud\SDK\Cfw\V1\Model\CaptureRuleAddressDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destination  destination
    * duration  抓包时长
    * maxPackets  最大抓包数
    * name  抓包任务名称
    * service  service
    * source  source
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destination' => null,
        'duration' => 'int32',
        'maxPackets' => 'int32',
        'name' => null,
        'service' => null,
        'source' => null
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
    * destination  destination
    * duration  抓包时长
    * maxPackets  最大抓包数
    * name  抓包任务名称
    * service  service
    * source  source
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destination' => 'destination',
            'duration' => 'duration',
            'maxPackets' => 'max_packets',
            'name' => 'name',
            'service' => 'service',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destination  destination
    * duration  抓包时长
    * maxPackets  最大抓包数
    * name  抓包任务名称
    * service  service
    * source  source
    *
    * @var string[]
    */
    protected static $setters = [
            'destination' => 'setDestination',
            'duration' => 'setDuration',
            'maxPackets' => 'setMaxPackets',
            'name' => 'setName',
            'service' => 'setService',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destination  destination
    * duration  抓包时长
    * maxPackets  最大抓包数
    * name  抓包任务名称
    * service  service
    * source  source
    *
    * @var string[]
    */
    protected static $getters = [
            'destination' => 'getDestination',
            'duration' => 'getDuration',
            'maxPackets' => 'getMaxPackets',
            'name' => 'getName',
            'service' => 'getService',
            'source' => 'getSource'
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['maxPackets'] = isset($data['maxPackets']) ? $data['maxPackets'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['maxPackets'] === null) {
            $invalidProperties[] = "'maxPackets' can't be null";
        }
            if (($this->container['maxPackets'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'maxPackets', must be smaller than or equal to 1000000.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
    * Gets destination
    *  destination
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CaptureRuleAddressDto
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CaptureRuleAddressDto $destination destination
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets duration
    *  抓包时长
    *
    * @return int
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int $duration 抓包时长
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets maxPackets
    *  最大抓包数
    *
    * @return int
    */
    public function getMaxPackets()
    {
        return $this->container['maxPackets'];
    }

    /**
    * Sets maxPackets
    *
    * @param int $maxPackets 最大抓包数
    *
    * @return $this
    */
    public function setMaxPackets($maxPackets)
    {
        $this->container['maxPackets'] = $maxPackets;
        return $this;
    }

    /**
    * Gets name
    *  抓包任务名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 抓包任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets service
    *  service
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CaptureServiceDto
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CaptureServiceDto $service service
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CaptureRuleAddressDto
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CaptureRuleAddressDto $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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

