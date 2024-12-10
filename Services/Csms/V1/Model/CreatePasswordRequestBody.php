<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePasswordRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePasswordRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * passwordPolicyName  策略名称
    * length  长度，默认32
    * excludeCharacters  需要排除的字符
    * excludeLowercase  排除小写字母，默认false
    * excludeUppercase  排除大写字母，默认false
    * excludeNumbers  排除数字，默认false
    * excludePunctuation  排除符号，默认false
    * includeSpace  包含空格，默认false
    * requireEachIncludedType  需要每个包含的类型，默认false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'passwordPolicyName' => 'string',
            'length' => 'int',
            'excludeCharacters' => 'string',
            'excludeLowercase' => 'bool',
            'excludeUppercase' => 'bool',
            'excludeNumbers' => 'bool',
            'excludePunctuation' => 'bool',
            'includeSpace' => 'bool',
            'requireEachIncludedType' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * passwordPolicyName  策略名称
    * length  长度，默认32
    * excludeCharacters  需要排除的字符
    * excludeLowercase  排除小写字母，默认false
    * excludeUppercase  排除大写字母，默认false
    * excludeNumbers  排除数字，默认false
    * excludePunctuation  排除符号，默认false
    * includeSpace  包含空格，默认false
    * requireEachIncludedType  需要每个包含的类型，默认false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'passwordPolicyName' => null,
        'length' => 'int32',
        'excludeCharacters' => null,
        'excludeLowercase' => null,
        'excludeUppercase' => null,
        'excludeNumbers' => null,
        'excludePunctuation' => null,
        'includeSpace' => null,
        'requireEachIncludedType' => null
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
    * passwordPolicyName  策略名称
    * length  长度，默认32
    * excludeCharacters  需要排除的字符
    * excludeLowercase  排除小写字母，默认false
    * excludeUppercase  排除大写字母，默认false
    * excludeNumbers  排除数字，默认false
    * excludePunctuation  排除符号，默认false
    * includeSpace  包含空格，默认false
    * requireEachIncludedType  需要每个包含的类型，默认false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'passwordPolicyName' => 'password_policy_name',
            'length' => 'length',
            'excludeCharacters' => 'exclude_characters',
            'excludeLowercase' => 'exclude_lowercase',
            'excludeUppercase' => 'exclude_uppercase',
            'excludeNumbers' => 'exclude_numbers',
            'excludePunctuation' => 'exclude_punctuation',
            'includeSpace' => 'include_space',
            'requireEachIncludedType' => 'require_each_included_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * passwordPolicyName  策略名称
    * length  长度，默认32
    * excludeCharacters  需要排除的字符
    * excludeLowercase  排除小写字母，默认false
    * excludeUppercase  排除大写字母，默认false
    * excludeNumbers  排除数字，默认false
    * excludePunctuation  排除符号，默认false
    * includeSpace  包含空格，默认false
    * requireEachIncludedType  需要每个包含的类型，默认false
    *
    * @var string[]
    */
    protected static $setters = [
            'passwordPolicyName' => 'setPasswordPolicyName',
            'length' => 'setLength',
            'excludeCharacters' => 'setExcludeCharacters',
            'excludeLowercase' => 'setExcludeLowercase',
            'excludeUppercase' => 'setExcludeUppercase',
            'excludeNumbers' => 'setExcludeNumbers',
            'excludePunctuation' => 'setExcludePunctuation',
            'includeSpace' => 'setIncludeSpace',
            'requireEachIncludedType' => 'setRequireEachIncludedType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * passwordPolicyName  策略名称
    * length  长度，默认32
    * excludeCharacters  需要排除的字符
    * excludeLowercase  排除小写字母，默认false
    * excludeUppercase  排除大写字母，默认false
    * excludeNumbers  排除数字，默认false
    * excludePunctuation  排除符号，默认false
    * includeSpace  包含空格，默认false
    * requireEachIncludedType  需要每个包含的类型，默认false
    *
    * @var string[]
    */
    protected static $getters = [
            'passwordPolicyName' => 'getPasswordPolicyName',
            'length' => 'getLength',
            'excludeCharacters' => 'getExcludeCharacters',
            'excludeLowercase' => 'getExcludeLowercase',
            'excludeUppercase' => 'getExcludeUppercase',
            'excludeNumbers' => 'getExcludeNumbers',
            'excludePunctuation' => 'getExcludePunctuation',
            'includeSpace' => 'getIncludeSpace',
            'requireEachIncludedType' => 'getRequireEachIncludedType'
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
        $this->container['passwordPolicyName'] = isset($data['passwordPolicyName']) ? $data['passwordPolicyName'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['excludeCharacters'] = isset($data['excludeCharacters']) ? $data['excludeCharacters'] : null;
        $this->container['excludeLowercase'] = isset($data['excludeLowercase']) ? $data['excludeLowercase'] : null;
        $this->container['excludeUppercase'] = isset($data['excludeUppercase']) ? $data['excludeUppercase'] : null;
        $this->container['excludeNumbers'] = isset($data['excludeNumbers']) ? $data['excludeNumbers'] : null;
        $this->container['excludePunctuation'] = isset($data['excludePunctuation']) ? $data['excludePunctuation'] : null;
        $this->container['includeSpace'] = isset($data['includeSpace']) ? $data['includeSpace'] : null;
        $this->container['requireEachIncludedType'] = isset($data['requireEachIncludedType']) ? $data['requireEachIncludedType'] : null;
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
    * Gets passwordPolicyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPasswordPolicyName()
    {
        return $this->container['passwordPolicyName'];
    }

    /**
    * Sets passwordPolicyName
    *
    * @param string|null $passwordPolicyName 策略名称
    *
    * @return $this
    */
    public function setPasswordPolicyName($passwordPolicyName)
    {
        $this->container['passwordPolicyName'] = $passwordPolicyName;
        return $this;
    }

    /**
    * Gets length
    *  长度，默认32
    *
    * @return int|null
    */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
    * Sets length
    *
    * @param int|null $length 长度，默认32
    *
    * @return $this
    */
    public function setLength($length)
    {
        $this->container['length'] = $length;
        return $this;
    }

    /**
    * Gets excludeCharacters
    *  需要排除的字符
    *
    * @return string|null
    */
    public function getExcludeCharacters()
    {
        return $this->container['excludeCharacters'];
    }

    /**
    * Sets excludeCharacters
    *
    * @param string|null $excludeCharacters 需要排除的字符
    *
    * @return $this
    */
    public function setExcludeCharacters($excludeCharacters)
    {
        $this->container['excludeCharacters'] = $excludeCharacters;
        return $this;
    }

    /**
    * Gets excludeLowercase
    *  排除小写字母，默认false
    *
    * @return bool|null
    */
    public function getExcludeLowercase()
    {
        return $this->container['excludeLowercase'];
    }

    /**
    * Sets excludeLowercase
    *
    * @param bool|null $excludeLowercase 排除小写字母，默认false
    *
    * @return $this
    */
    public function setExcludeLowercase($excludeLowercase)
    {
        $this->container['excludeLowercase'] = $excludeLowercase;
        return $this;
    }

    /**
    * Gets excludeUppercase
    *  排除大写字母，默认false
    *
    * @return bool|null
    */
    public function getExcludeUppercase()
    {
        return $this->container['excludeUppercase'];
    }

    /**
    * Sets excludeUppercase
    *
    * @param bool|null $excludeUppercase 排除大写字母，默认false
    *
    * @return $this
    */
    public function setExcludeUppercase($excludeUppercase)
    {
        $this->container['excludeUppercase'] = $excludeUppercase;
        return $this;
    }

    /**
    * Gets excludeNumbers
    *  排除数字，默认false
    *
    * @return bool|null
    */
    public function getExcludeNumbers()
    {
        return $this->container['excludeNumbers'];
    }

    /**
    * Sets excludeNumbers
    *
    * @param bool|null $excludeNumbers 排除数字，默认false
    *
    * @return $this
    */
    public function setExcludeNumbers($excludeNumbers)
    {
        $this->container['excludeNumbers'] = $excludeNumbers;
        return $this;
    }

    /**
    * Gets excludePunctuation
    *  排除符号，默认false
    *
    * @return bool|null
    */
    public function getExcludePunctuation()
    {
        return $this->container['excludePunctuation'];
    }

    /**
    * Sets excludePunctuation
    *
    * @param bool|null $excludePunctuation 排除符号，默认false
    *
    * @return $this
    */
    public function setExcludePunctuation($excludePunctuation)
    {
        $this->container['excludePunctuation'] = $excludePunctuation;
        return $this;
    }

    /**
    * Gets includeSpace
    *  包含空格，默认false
    *
    * @return bool|null
    */
    public function getIncludeSpace()
    {
        return $this->container['includeSpace'];
    }

    /**
    * Sets includeSpace
    *
    * @param bool|null $includeSpace 包含空格，默认false
    *
    * @return $this
    */
    public function setIncludeSpace($includeSpace)
    {
        $this->container['includeSpace'] = $includeSpace;
        return $this;
    }

    /**
    * Gets requireEachIncludedType
    *  需要每个包含的类型，默认false
    *
    * @return bool|null
    */
    public function getRequireEachIncludedType()
    {
        return $this->container['requireEachIncludedType'];
    }

    /**
    * Sets requireEachIncludedType
    *
    * @param bool|null $requireEachIncludedType 需要每个包含的类型，默认false
    *
    * @return $this
    */
    public function setRequireEachIncludedType($requireEachIncludedType)
    {
        $this->container['requireEachIncludedType'] = $requireEachIncludedType;
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

