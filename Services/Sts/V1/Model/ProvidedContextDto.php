<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProvidedContextDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProvidedContextDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contextProviderUrn  **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * contextAssertion  **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contextProviderUrn' => 'string',
            'contextAssertion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contextProviderUrn  **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * contextAssertion  **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contextProviderUrn' => null,
        'contextAssertion' => null
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
    * contextProviderUrn  **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * contextAssertion  **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contextProviderUrn' => 'context_provider_urn',
            'contextAssertion' => 'context_assertion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contextProviderUrn  **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * contextAssertion  **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'contextProviderUrn' => 'setContextProviderUrn',
            'contextAssertion' => 'setContextAssertion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contextProviderUrn  **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * contextAssertion  **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'contextProviderUrn' => 'getContextProviderUrn',
            'contextAssertion' => 'getContextAssertion'
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
        $this->container['contextProviderUrn'] = isset($data['contextProviderUrn']) ? $data['contextProviderUrn'] : null;
        $this->container['contextAssertion'] = isset($data['contextAssertion']) ? $data['contextAssertion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contextProviderUrn'] === null) {
            $invalidProperties[] = "'contextProviderUrn' can't be null";
        }
            if ((mb_strlen($this->container['contextProviderUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'contextProviderUrn', the character length must be smaller than or equal to 1500.";
            }
            if (!preg_match("/^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+$/", $this->container['contextProviderUrn'])) {
                $invalidProperties[] = "invalid value for 'contextProviderUrn', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+$/.";
            }
        if ($this->container['contextAssertion'] === null) {
            $invalidProperties[] = "'contextAssertion' can't be null";
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
    * Gets contextProviderUrn
    *  **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getContextProviderUrn()
    {
        return $this->container['contextProviderUrn'];
    }

    /**
    * Sets contextProviderUrn
    *
    * @param string $contextProviderUrn **参数解释**： 生成可信上下文断言的提供者的URN。  **约束限制**： 长度最多为1500个字符。格式为5段，用\":\"分隔，各段允许大小写字母、数字、\"+\"、\"/\"、\"=\"、\"-\"、\"_\"（第2段还额外允许 \"*\"），长度限制为：第1段至少1位，第2段0~255位，第3段1~64位，第4段1~64位，第5段至少1位（任意字符）。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setContextProviderUrn($contextProviderUrn)
    {
        $this->container['contextProviderUrn'] = $contextProviderUrn;
        return $this;
    }

    /**
    * Gets contextAssertion
    *  **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getContextAssertion()
    {
        return $this->container['contextAssertion'];
    }

    /**
    * Sets contextAssertion
    *
    * @param string $contextAssertion **参数解释**： 经过签名和加密的可信上下文断言。  **约束限制**： 不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setContextAssertion($contextAssertion)
    {
        $this->container['contextAssertion'] = $contextAssertion;
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

