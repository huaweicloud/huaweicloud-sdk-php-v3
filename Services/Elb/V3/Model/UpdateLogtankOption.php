<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLogtankOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLogtankOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * logTopicId  **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'logTopicId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * logTopicId  **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'logTopicId' => null
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
    * logGroupId  **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * logTopicId  **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * logTopicId  **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * logTopicId  **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logTopicId']) && (mb_strlen($this->container['logTopicId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logTopicId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logTopicId']) && (mb_strlen($this->container['logTopicId']) < 1)) {
                $invalidProperties[] = "invalid value for 'logTopicId', the character length must be bigger than or equal to 1.";
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
    * Gets logGroupId
    *  **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId **参数解释**：日志组别id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTopicId
    *  **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string|null $logTopicId **参数解释**：日志订阅主题id，其他（非ELB）服务提供。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
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

