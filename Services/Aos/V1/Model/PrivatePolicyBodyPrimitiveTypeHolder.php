<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivatePolicyBodyPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivatePolicyBodyPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyBody' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyBody' => null
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
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyBody' => 'policy_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $setters = [
            'policyBody' => 'setPolicyBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyBody  策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $getters = [
            'policyBody' => 'getPolicyBody'
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
        $this->container['policyBody'] = isset($data['policyBody']) ? $data['policyBody'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyBody']) && (mb_strlen($this->container['policyBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'policyBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['policyBody']) && (mb_strlen($this->container['policyBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyBody', the character length must be bigger than or equal to 0.";
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
    * Gets policyBody
    *  策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @return string|null
    */
    public function getPolicyBody()
    {
        return $this->container['policyBody'];
    }

    /**
    * Sets policyBody
    *
    * @param string|null $policyBody 策略内容。仅支持OPA开源引擎识别的，以rego（https://www.openpolicyagent.org/docs/latest/policy-language/）语言编写的策略模板。  policy_body和policy_uri 必须有且只有一个存在
    *
    * @return $this
    */
    public function setPolicyBody($policyBody)
    {
        $this->container['policyBody'] = $policyBody;
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

