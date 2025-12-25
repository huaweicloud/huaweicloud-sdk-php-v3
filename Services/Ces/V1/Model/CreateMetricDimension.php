<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMetricDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMetricDimension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
    * value  **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
    * value  **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null
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
    * name  **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
    * value  **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
    * value  **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
    * value  **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*$/.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 256)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && !preg_match("/^((([a-z]|[A-Z]|[0-9]|\\*|_){1}([a-z]|[A-Z]|[0-9]|_|-|\\.)*)|)$/", $this->container['value'])) {
                $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^((([a-z]|[A-Z]|[0-9]|\\*|_){1}([a-z]|[A-Z]|[0-9]|_|-|\\.)*)|)$/.";
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
    * Gets name
    *  **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
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
    * @param string $name **参数解释**： 监控维度名称，如ECS的维度为instance_id。各服务资源的指标维度名称可查看：“[服务维度名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 以字母开头，只能包含字母、数字、“_”、“-”。长度[1,32]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释**： 必填。监控维度取值，例如ECS的ID。 **约束限制**： 不涉及。 **取值范围**： 长度为[0,256]个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

