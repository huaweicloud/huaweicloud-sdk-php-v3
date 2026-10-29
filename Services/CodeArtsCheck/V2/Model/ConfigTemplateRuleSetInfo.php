<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigTemplateRuleSetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigTemplateRuleSetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * ruleSetId  **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'ruleSetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * ruleSetId  **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'ruleSetId' => null
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
    * language  **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * ruleSetId  **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'ruleSetId' => 'ruleSetId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * ruleSetId  **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'ruleSetId' => 'setRuleSetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * ruleSetId  **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'ruleSetId' => 'getRuleSetId'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['ruleSetId'] = isset($data['ruleSetId']) ? $data['ruleSetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 64)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['language']) && !preg_match("/([\\s\\S]*)/", $this->container['language'])) {
                $invalidProperties[] = "invalid value for 'language', must be conform to the pattern /([\\s\\S]*)/.";
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
    * Gets language
    *  **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释：** 语言类型。 **取值范围：** 自定义语言或者系统内置语言，当前支持的系统内置语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets ruleSetId
    *  **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return string|null
    */
    public function getRuleSetId()
    {
        return $this->container['ruleSetId'];
    }

    /**
    * Sets ruleSetId
    *
    * @param string|null $ruleSetId **参数解释：** 规则集ID。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setRuleSetId($ruleSetId)
    {
        $this->container['ruleSetId'] = $ruleSetId;
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

