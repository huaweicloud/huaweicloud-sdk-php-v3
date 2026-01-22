<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StepDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StepDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * statue  **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'statue' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * statue  **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'statue' => null,
        'startTime' => null,
        'endTime' => null
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
    * name  **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * statue  **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'statue' => 'statue',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * statue  **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'statue' => 'setStatue',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * statue  **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'statue' => 'getStatue',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statue'] = isset($data['statue']) ? $data['statue'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets name
    *  **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 任务名称。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets statue
    *  **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStatue()
    {
        return $this->container['statue'];
    }

    /**
    * Sets statue
    *
    * @param string|null $statue **参数解释**： 任务状态。 **约束限制**： 不涉及。 **取值范围**： - COMPLETED：任务已完成。 - IN_PROGRESS：任务正在进行。 - FAILED：任务失败。 - WAITING：等待开始。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStatue($statue)
    {
        $this->container['statue'] = $statue;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 开始时间。    **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 结束时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

