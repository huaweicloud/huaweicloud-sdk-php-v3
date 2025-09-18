<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineVariable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineVariable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
    * sequence  **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    * type  **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    * value  **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
    * isSecret  **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    * description  **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    * isRuntime  **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    * limits  **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    * isReset  **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    * latestValue  **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sequence' => 'int',
            'type' => 'string',
            'value' => 'string',
            'isSecret' => 'bool',
            'description' => 'string',
            'isRuntime' => 'bool',
            'limits' => 'string[]',
            'isReset' => 'bool',
            'latestValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
    * sequence  **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    * type  **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    * value  **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
    * isSecret  **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    * description  **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    * isRuntime  **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    * limits  **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    * isReset  **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    * latestValue  **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sequence' => 'int32',
        'type' => null,
        'value' => null,
        'isSecret' => null,
        'description' => null,
        'isRuntime' => null,
        'limits' => null,
        'isReset' => null,
        'latestValue' => null
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
    * name  **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
    * sequence  **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    * type  **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    * value  **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
    * isSecret  **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    * description  **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    * isRuntime  **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    * limits  **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    * isReset  **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    * latestValue  **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sequence' => 'sequence',
            'type' => 'type',
            'value' => 'value',
            'isSecret' => 'is_secret',
            'description' => 'description',
            'isRuntime' => 'is_runtime',
            'limits' => 'limits',
            'isReset' => 'is_reset',
            'latestValue' => 'latest_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
    * sequence  **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    * type  **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    * value  **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
    * isSecret  **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    * description  **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    * isRuntime  **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    * limits  **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    * isReset  **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    * latestValue  **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sequence' => 'setSequence',
            'type' => 'setType',
            'value' => 'setValue',
            'isSecret' => 'setIsSecret',
            'description' => 'setDescription',
            'isRuntime' => 'setIsRuntime',
            'limits' => 'setLimits',
            'isReset' => 'setIsReset',
            'latestValue' => 'setLatestValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
    * sequence  **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    * type  **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    * value  **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
    * isSecret  **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    * description  **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    * isRuntime  **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    * limits  **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    * isReset  **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    * latestValue  **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sequence' => 'getSequence',
            'type' => 'getType',
            'value' => 'getValue',
            'isSecret' => 'getIsSecret',
            'description' => 'getDescription',
            'isRuntime' => 'getIsRuntime',
            'limits' => 'getLimits',
            'isReset' => 'getIsReset',
            'latestValue' => 'getLatestValue'
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['isSecret'] = isset($data['isSecret']) ? $data['isSecret'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isRuntime'] = isset($data['isRuntime']) ? $data['isRuntime'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['isReset'] = isset($data['isReset']) ? $data['isReset'] : null;
        $this->container['latestValue'] = isset($data['latestValue']) ? $data['latestValue'] : null;
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
    *  **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
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
    * @param string|null $name **参数解释**： 自定义参数名称。 **取值范围**： 仅支持大小写英文字母、数字、“_”，不超过128个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sequence
    *  **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence **参数解释**： 序号。 **取值范围**： [1, 2147483647]。
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 自定义参数的类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
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
    * @param string|null $value **参数解释**： 自定义参数的默认值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets isSecret
    *  **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    *
    * @return bool|null
    */
    public function getIsSecret()
    {
        return $this->container['isSecret'];
    }

    /**
    * Sets isSecret
    *
    * @param bool|null $isSecret **参数解释**： 是否为私密参数。 **取值范围**： - true：是私密参数。 - false：不是私密参数。
    *
    * @return $this
    */
    public function setIsSecret($isSecret)
    {
        $this->container['isSecret'] = $isSecret;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 自定义参数描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isRuntime
    *  **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    *
    * @return bool|null
    */
    public function getIsRuntime()
    {
        return $this->container['isRuntime'];
    }

    /**
    * Sets isRuntime
    *
    * @param bool|null $isRuntime **参数解释**： 是否运行时设置。 **取值范围**： - true：运行时设置。 - false：非运行时设置。
    *
    * @return $this
    */
    public function setIsRuntime($isRuntime)
    {
        $this->container['isRuntime'] = $isRuntime;
        return $this;
    }

    /**
    * Gets limits
    *  **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
    * Sets limits
    *
    * @param string[]|null $limits **参数解释**： 限定枚举值列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;
        return $this;
    }

    /**
    * Gets isReset
    *  **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    *
    * @return bool|null
    */
    public function getIsReset()
    {
        return $this->container['isReset'];
    }

    /**
    * Sets isReset
    *
    * @param bool|null $isReset **参数解释**： 自增长参数是否被重置。 **取值范围**： - true：被重置。 - false：不被重置。
    *
    * @return $this
    */
    public function setIsReset($isReset)
    {
        $this->container['isReset'] = $isReset;
        return $this;
    }

    /**
    * Gets latestValue
    *  **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLatestValue()
    {
        return $this->container['latestValue'];
    }

    /**
    * Sets latestValue
    *
    * @param string|null $latestValue **参数解释**： 自增长参数最新值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLatestValue($latestValue)
    {
        $this->container['latestValue'] = $latestValue;
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

