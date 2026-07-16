<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchedulePolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchedulePolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requiredAffinity  requiredAffinity
    * preferredAffinity  preferredAffinity
    * priority  **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
    * preemptible  **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requiredAffinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RequiredAffinity',
            'preferredAffinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PreferredAffinity',
            'priority' => 'int',
            'preemptible' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requiredAffinity  requiredAffinity
    * preferredAffinity  preferredAffinity
    * priority  **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
    * preemptible  **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requiredAffinity' => null,
        'preferredAffinity' => null,
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
    * preferredAffinity  preferredAffinity
    * priority  **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
    * preemptible  **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requiredAffinity' => 'required_affinity',
            'preferredAffinity' => 'preferred_affinity',
            'priority' => 'priority',
            'preemptible' => 'preemptible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requiredAffinity  requiredAffinity
    * preferredAffinity  preferredAffinity
    * priority  **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
    * preemptible  **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'requiredAffinity' => 'setRequiredAffinity',
            'preferredAffinity' => 'setPreferredAffinity',
            'priority' => 'setPriority',
            'preemptible' => 'setPreemptible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requiredAffinity  requiredAffinity
    * preferredAffinity  preferredAffinity
    * priority  **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
    * preemptible  **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'requiredAffinity' => 'getRequiredAffinity',
            'preferredAffinity' => 'getPreferredAffinity',
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
        $this->container['preferredAffinity'] = isset($data['preferredAffinity']) ? $data['preferredAffinity'] : null;
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RequiredAffinity|null
    */
    public function getRequiredAffinity()
    {
        return $this->container['requiredAffinity'];
    }

    /**
    * Sets requiredAffinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RequiredAffinity|null $requiredAffinity requiredAffinity
    *
    * @return $this
    */
    public function setRequiredAffinity($requiredAffinity)
    {
        $this->container['requiredAffinity'] = $requiredAffinity;
        return $this;
    }

    /**
    * Gets preferredAffinity
    *  preferredAffinity
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PreferredAffinity|null
    */
    public function getPreferredAffinity()
    {
        return $this->container['preferredAffinity'];
    }

    /**
    * Sets preferredAffinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PreferredAffinity|null $preferredAffinity preferredAffinity
    *
    * @return $this
    */
    public function setPreferredAffinity($preferredAffinity)
    {
        $this->container['preferredAffinity'] = $preferredAffinity;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
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
    * @param int|null $priority **参数解释**：训练作业优先级。 **约束限制**： - 仅使用专属资源池训练时才支持设置训练作业优先级。 - 作业优先级取值为1~3，默认优先级为1，最高优先级为3。 默认用户权限可选择优先级1和2，配置了“设置作业为高优先级权限”的用户可选择优先级1~3。  **取值范围**：0-3 **默认取值**：不涉及。
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
    *  **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
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
    * @param bool|null $preemptible **参数解释**：是否可以被抢占。 **约束限制**：不涉及。 **取值范围**： - true：可以被抢占 - false：不可以被抢占  **默认取值**：不涉及。
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

