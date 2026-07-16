<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchedulePolicyResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchedulePolicyResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requiredAffinity  requiredAffinity
    * priority  **参数解释**：训练作业优先级。 **取值范围**：0-3
    * preemptible  **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requiredAffinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RequiredAffinityResp',
            'priority' => 'int',
            'preemptible' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requiredAffinity  requiredAffinity
    * priority  **参数解释**：训练作业优先级。 **取值范围**：0-3
    * preemptible  **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requiredAffinity' => null,
        'priority' => 'int32',
        'preemptible' => null
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
    * requiredAffinity  requiredAffinity
    * priority  **参数解释**：训练作业优先级。 **取值范围**：0-3
    * preemptible  **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requiredAffinity' => 'required_affinity',
            'priority' => 'priority',
            'preemptible' => 'preemptible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requiredAffinity  requiredAffinity
    * priority  **参数解释**：训练作业优先级。 **取值范围**：0-3
    * preemptible  **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @var string[]
    */
    protected static $setters = [
            'requiredAffinity' => 'setRequiredAffinity',
            'priority' => 'setPriority',
            'preemptible' => 'setPreemptible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requiredAffinity  requiredAffinity
    * priority  **参数解释**：训练作业优先级。 **取值范围**：0-3
    * preemptible  **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @var string[]
    */
    protected static $getters = [
            'requiredAffinity' => 'getRequiredAffinity',
            'priority' => 'getPriority',
            'preemptible' => 'getPreemptible'
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
        $this->container['requiredAffinity'] = isset($data['requiredAffinity']) ? $data['requiredAffinity'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['preemptible'] = isset($data['preemptible']) ? $data['preemptible'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 3)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
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
    * Gets requiredAffinity
    *  requiredAffinity
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RequiredAffinityResp|null
    */
    public function getRequiredAffinity()
    {
        return $this->container['requiredAffinity'];
    }

    /**
    * Sets requiredAffinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RequiredAffinityResp|null $requiredAffinity requiredAffinity
    *
    * @return $this
    */
    public function setRequiredAffinity($requiredAffinity)
    {
        $this->container['requiredAffinity'] = $requiredAffinity;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释**：训练作业优先级。 **取值范围**：0-3
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
    * @param int|null $priority **参数解释**：训练作业优先级。 **取值范围**：0-3
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets preemptible
    *  **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @return bool|null
    */
    public function getPreemptible()
    {
        return $this->container['preemptible'];
    }

    /**
    * Sets preemptible
    *
    * @param bool|null $preemptible **参数解释**：是否可以被抢占。 **取值范围**： - true：可以被抢占 - false：不可以被抢占
    *
    * @return $this
    */
    public function setPreemptible($preemptible)
    {
        $this->container['preemptible'] = $preemptible;
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

