<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKafkaScalePreCheckInfoResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKafkaScalePreCheckInfoResponse_body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 检查项名称。  **取值范围**： 不涉及。
    * success  **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    * reason  **参数解释**： 失败原因。    **取值范围**： 不涉及。
    * risk  **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'success' => 'bool',
            'reason' => 'string',
            'risk' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 检查项名称。  **取值范围**： 不涉及。
    * success  **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    * reason  **参数解释**： 失败原因。    **取值范围**： 不涉及。
    * risk  **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'success' => null,
        'reason' => null,
        'risk' => null
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
    * name  **参数解释**： 检查项名称。  **取值范围**： 不涉及。
    * success  **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    * reason  **参数解释**： 失败原因。    **取值范围**： 不涉及。
    * risk  **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'success' => 'success',
            'reason' => 'reason',
            'risk' => 'risk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 检查项名称。  **取值范围**： 不涉及。
    * success  **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    * reason  **参数解释**： 失败原因。    **取值范围**： 不涉及。
    * risk  **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'success' => 'setSuccess',
            'reason' => 'setReason',
            'risk' => 'setRisk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 检查项名称。  **取值范围**： 不涉及。
    * success  **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    * reason  **参数解释**： 失败原因。    **取值范围**： 不涉及。
    * risk  **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'success' => 'getSuccess',
            'reason' => 'getReason',
            'risk' => 'getRisk'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
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
    *  **参数解释**： 检查项名称。  **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 检查项名称。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets success
    *  **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success **参数解释**： 检查项状态。 **取值范围**： - true：正常。 - false：异常。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**： 失败原因。    **取值范围**： 不涉及。
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
    * @param string|null $reason **参数解释**： 失败原因。    **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets risk
    *  **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @return string|null
    */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
    * Sets risk
    *
    * @param string|null $risk **参数解释**： 风险等级。   **取值范围**： - low：低风险。 - medium：中风险。 - high：高风险。
    *
    * @return $this
    */
    public function setRisk($risk)
    {
        $this->container['risk'] = $risk;
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

