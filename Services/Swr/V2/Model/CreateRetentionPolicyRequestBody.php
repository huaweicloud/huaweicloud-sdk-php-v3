<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRetentionPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRetentionPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithm  算法，目前只支持or
    * enabled  是否启用或者关闭所有retentionRules
    * rules  匹配规则，配置repo范围、tag范围以及作用规则
    * trigger  trigger
    * name  策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithm' => 'string',
            'enabled' => 'bool',
            'rules' => '\HuaweiCloud\SDK\Swr\V2\Model\RetentionRule[]',
            'trigger' => '\HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithm  算法，目前只支持or
    * enabled  是否启用或者关闭所有retentionRules
    * rules  匹配规则，配置repo范围、tag范围以及作用规则
    * trigger  trigger
    * name  策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithm' => null,
        'enabled' => null,
        'rules' => null,
        'trigger' => null,
        'name' => null
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
    * algorithm  算法，目前只支持or
    * enabled  是否启用或者关闭所有retentionRules
    * rules  匹配规则，配置repo范围、tag范围以及作用规则
    * trigger  trigger
    * name  策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithm' => 'algorithm',
            'enabled' => 'enabled',
            'rules' => 'rules',
            'trigger' => 'trigger',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithm  算法，目前只支持or
    * enabled  是否启用或者关闭所有retentionRules
    * rules  匹配规则，配置repo范围、tag范围以及作用规则
    * trigger  trigger
    * name  策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithm' => 'setAlgorithm',
            'enabled' => 'setEnabled',
            'rules' => 'setRules',
            'trigger' => 'setTrigger',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithm  算法，目前只支持or
    * enabled  是否启用或者关闭所有retentionRules
    * rules  匹配规则，配置repo范围、tag范围以及作用规则
    * trigger  trigger
    * name  策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithm' => 'getAlgorithm',
            'enabled' => 'getEnabled',
            'rules' => 'getRules',
            'trigger' => 'getTrigger',
            'name' => 'getName'
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['algorithm'] === null) {
            $invalidProperties[] = "'algorithm' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets algorithm
    *  算法，目前只支持or
    *
    * @return string
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string $algorithm 算法，目前只支持or
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用或者关闭所有retentionRules
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否启用或者关闭所有retentionRules
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets rules
    *  匹配规则，配置repo范围、tag范围以及作用规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\RetentionRule[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\RetentionRule[] $rules 匹配规则，配置repo范围、tag范围以及作用规则
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets name
    *  策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
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
    * @param string $name 策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

