<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigPwdPolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigPwdPolicyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minLength  **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * uppercaseLetter  **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * lowercaseLetter  **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * number  **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    * specialCharacter  **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * suggestion  **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minLength' => 'bool',
            'uppercaseLetter' => 'bool',
            'lowercaseLetter' => 'bool',
            'number' => 'bool',
            'specialCharacter' => 'bool',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minLength  **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * uppercaseLetter  **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * lowercaseLetter  **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * number  **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    * specialCharacter  **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * suggestion  **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minLength' => null,
        'uppercaseLetter' => null,
        'lowercaseLetter' => null,
        'number' => null,
        'specialCharacter' => null,
        'suggestion' => null
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
    * minLength  **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * uppercaseLetter  **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * lowercaseLetter  **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * number  **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    * specialCharacter  **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * suggestion  **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minLength' => 'min_length',
            'uppercaseLetter' => 'uppercase_letter',
            'lowercaseLetter' => 'lowercase_letter',
            'number' => 'number',
            'specialCharacter' => 'special_character',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minLength  **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * uppercaseLetter  **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * lowercaseLetter  **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * number  **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    * specialCharacter  **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * suggestion  **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'minLength' => 'setMinLength',
            'uppercaseLetter' => 'setUppercaseLetter',
            'lowercaseLetter' => 'setLowercaseLetter',
            'number' => 'setNumber',
            'specialCharacter' => 'setSpecialCharacter',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minLength  **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * uppercaseLetter  **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * lowercaseLetter  **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * number  **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    * specialCharacter  **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    * suggestion  **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'minLength' => 'getMinLength',
            'uppercaseLetter' => 'getUppercaseLetter',
            'lowercaseLetter' => 'getLowercaseLetter',
            'number' => 'getNumber',
            'specialCharacter' => 'getSpecialCharacter',
            'suggestion' => 'getSuggestion'
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
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['uppercaseLetter'] = isset($data['uppercaseLetter']) ? $data['uppercaseLetter'] : null;
        $this->container['lowercaseLetter'] = isset($data['lowercaseLetter']) ? $data['lowercaseLetter'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['specialCharacter'] = isset($data['specialCharacter']) ? $data['specialCharacter'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
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
    * Gets minLength
    *  **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return bool|null
    */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
    * Sets minLength
    *
    * @param bool|null $minLength **参数解释**： 口令最小长度策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return $this
    */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;
        return $this;
    }

    /**
    * Gets uppercaseLetter
    *  **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return bool|null
    */
    public function getUppercaseLetter()
    {
        return $this->container['uppercaseLetter'];
    }

    /**
    * Sets uppercaseLetter
    *
    * @param bool|null $uppercaseLetter **参数解释**： 大写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return $this
    */
    public function setUppercaseLetter($uppercaseLetter)
    {
        $this->container['uppercaseLetter'] = $uppercaseLetter;
        return $this;
    }

    /**
    * Gets lowercaseLetter
    *  **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return bool|null
    */
    public function getLowercaseLetter()
    {
        return $this->container['lowercaseLetter'];
    }

    /**
    * Sets lowercaseLetter
    *
    * @param bool|null $lowercaseLetter **参数解释**： 小写字母策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return $this
    */
    public function setLowercaseLetter($lowercaseLetter)
    {
        $this->container['lowercaseLetter'] = $lowercaseLetter;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    *
    * @return bool|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param bool|null $number **参数解释**： 数字策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求不涉及
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets specialCharacter
    *  **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return bool|null
    */
    public function getSpecialCharacter()
    {
        return $this->container['specialCharacter'];
    }

    /**
    * Sets specialCharacter
    *
    * @param bool|null $specialCharacter **参数解释**： 特殊字符策略是否满足要求 **取值范围**： - true：满足要求 - false：不满足要求
    *
    * @return $this
    */
    public function setSpecialCharacter($specialCharacter)
    {
        $this->container['specialCharacter'] = $specialCharacter;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion **参数解释**： 修改建议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

