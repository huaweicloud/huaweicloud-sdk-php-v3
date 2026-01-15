<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAiOpsRequestBodyAlarm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAiOpsRequestBody_alarm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * level  **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * smnTopic  **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'level' => 'string',
            'smnTopic' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * level  **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * smnTopic  **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'level' => null,
        'smnTopic' => null
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
    * level  **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * smnTopic  **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'level' => 'level',
            'smnTopic' => 'smn_topic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * level  **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * smnTopic  **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'level' => 'setLevel',
            'smnTopic' => 'setSmnTopic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * level  **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * smnTopic  **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'level' => 'getLevel',
            'smnTopic' => 'getSmnTopic'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['smnTopic'] = isset($data['smnTopic']) ? $data['smnTopic'] : null;
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
    * Gets level
    *  **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**： 报告发送风险类别，当前功能已废弃。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets smnTopic
    *  **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getSmnTopic()
    {
        return $this->container['smnTopic'];
    }

    /**
    * Sets smnTopic
    *
    * @param string|null $smnTopic **参数解释**： 报告发送主题，当前功能已废弃。 **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSmnTopic($smnTopic)
    {
        $this->container['smnTopic'] = $smnTopic;
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

