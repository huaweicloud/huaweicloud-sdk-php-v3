<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class V2JobStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'V2JobStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    * reason  **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * completionTime  **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'reason' => 'string',
            'completionTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    * reason  **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * completionTime  **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'reason' => null,
        'completionTime' => null
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
    * status  **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    * reason  **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * completionTime  **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'reason' => 'reason',
            'completionTime' => 'completionTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    * reason  **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * completionTime  **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'reason' => 'setReason',
            'completionTime' => 'setCompletionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    * reason  **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * completionTime  **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'reason' => 'getReason',
            'completionTime' => 'getCompletionTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['completionTime'] = isset($data['completionTime']) ? $data['completionTime'] : null;
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
    * Gets status
    *  **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： Job的状态 **约束限制**： 不涉及 **取值范围**： - Initializing：未执行 - Running：执行中 - Failed：执行失败 - Success：执行成功  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**： Job执行失败的原因 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets completionTime
    *  **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getCompletionTime()
    {
        return $this->container['completionTime'];
    }

    /**
    * Sets completionTime
    *
    * @param string|null $completionTime **参数解释**： Job完成时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCompletionTime($completionTime)
    {
        $this->container['completionTime'] = $completionTime;
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

