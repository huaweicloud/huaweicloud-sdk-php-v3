<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PropagationSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PropagationSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSelectors  资源选择器，用于选择要传播的资源
    * propagateDeps  是否自动传播引用的资源
    * placement  placement
    * priority  策略的优先级，默认值为0
    * schedulerName  调度器名称，默认值为“default-scheduler”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSelectors' => '\HuaweiCloud\SDK\Ucs\V1\Model\ResourceSelector[]',
            'propagateDeps' => 'bool',
            'placement' => '\HuaweiCloud\SDK\Ucs\V1\Model\Placement',
            'priority' => 'int',
            'schedulerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSelectors  资源选择器，用于选择要传播的资源
    * propagateDeps  是否自动传播引用的资源
    * placement  placement
    * priority  策略的优先级，默认值为0
    * schedulerName  调度器名称，默认值为“default-scheduler”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSelectors' => null,
        'propagateDeps' => null,
        'placement' => null,
        'priority' => 'int32',
        'schedulerName' => null
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
    * resourceSelectors  资源选择器，用于选择要传播的资源
    * propagateDeps  是否自动传播引用的资源
    * placement  placement
    * priority  策略的优先级，默认值为0
    * schedulerName  调度器名称，默认值为“default-scheduler”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSelectors' => 'resourceSelectors',
            'propagateDeps' => 'propagateDeps',
            'placement' => 'placement',
            'priority' => 'priority',
            'schedulerName' => 'schedulerName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSelectors  资源选择器，用于选择要传播的资源
    * propagateDeps  是否自动传播引用的资源
    * placement  placement
    * priority  策略的优先级，默认值为0
    * schedulerName  调度器名称，默认值为“default-scheduler”
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSelectors' => 'setResourceSelectors',
            'propagateDeps' => 'setPropagateDeps',
            'placement' => 'setPlacement',
            'priority' => 'setPriority',
            'schedulerName' => 'setSchedulerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSelectors  资源选择器，用于选择要传播的资源
    * propagateDeps  是否自动传播引用的资源
    * placement  placement
    * priority  策略的优先级，默认值为0
    * schedulerName  调度器名称，默认值为“default-scheduler”
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSelectors' => 'getResourceSelectors',
            'propagateDeps' => 'getPropagateDeps',
            'placement' => 'getPlacement',
            'priority' => 'getPriority',
            'schedulerName' => 'getSchedulerName'
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
        $this->container['resourceSelectors'] = isset($data['resourceSelectors']) ? $data['resourceSelectors'] : null;
        $this->container['propagateDeps'] = isset($data['propagateDeps']) ? $data['propagateDeps'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['schedulerName'] = isset($data['schedulerName']) ? $data['schedulerName'] : null;
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
    * Gets resourceSelectors
    *  资源选择器，用于选择要传播的资源
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ResourceSelector[]|null
    */
    public function getResourceSelectors()
    {
        return $this->container['resourceSelectors'];
    }

    /**
    * Sets resourceSelectors
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ResourceSelector[]|null $resourceSelectors 资源选择器，用于选择要传播的资源
    *
    * @return $this
    */
    public function setResourceSelectors($resourceSelectors)
    {
        $this->container['resourceSelectors'] = $resourceSelectors;
        return $this;
    }

    /**
    * Gets propagateDeps
    *  是否自动传播引用的资源
    *
    * @return bool|null
    */
    public function getPropagateDeps()
    {
        return $this->container['propagateDeps'];
    }

    /**
    * Sets propagateDeps
    *
    * @param bool|null $propagateDeps 是否自动传播引用的资源
    *
    * @return $this
    */
    public function setPropagateDeps($propagateDeps)
    {
        $this->container['propagateDeps'] = $propagateDeps;
        return $this;
    }

    /**
    * Gets placement
    *  placement
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Placement|null
    */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
    * Sets placement
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Placement|null $placement placement
    *
    * @return $this
    */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;
        return $this;
    }

    /**
    * Gets priority
    *  策略的优先级，默认值为0
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 策略的优先级，默认值为0
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets schedulerName
    *  调度器名称，默认值为“default-scheduler”
    *
    * @return string|null
    */
    public function getSchedulerName()
    {
        return $this->container['schedulerName'];
    }

    /**
    * Sets schedulerName
    *
    * @param string|null $schedulerName 调度器名称，默认值为“default-scheduler”
    *
    * @return $this
    */
    public function setSchedulerName($schedulerName)
    {
        $this->container['schedulerName'] = $schedulerName;
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

