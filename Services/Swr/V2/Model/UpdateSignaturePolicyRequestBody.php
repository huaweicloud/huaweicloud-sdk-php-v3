<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSignaturePolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSignaturePolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  签名策略描述
    * enabled  是否开启
    * signatureMethod  加签方式，可选KMS
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  加签Key
    * trigger  trigger
    * scopeRules  作用范围规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'enabled' => 'bool',
            'signatureMethod' => 'string',
            'signatureAlgorithm' => 'string',
            'signatureKey' => 'string',
            'trigger' => '\HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig',
            'scopeRules' => '\HuaweiCloud\SDK\Swr\V2\Model\SignScopeRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  签名策略描述
    * enabled  是否开启
    * signatureMethod  加签方式，可选KMS
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  加签Key
    * trigger  trigger
    * scopeRules  作用范围规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'enabled' => null,
        'signatureMethod' => null,
        'signatureAlgorithm' => null,
        'signatureKey' => null,
        'trigger' => null,
        'scopeRules' => null
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
    * name  签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  签名策略描述
    * enabled  是否开启
    * signatureMethod  加签方式，可选KMS
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  加签Key
    * trigger  trigger
    * scopeRules  作用范围规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'enabled' => 'enabled',
            'signatureMethod' => 'signature_method',
            'signatureAlgorithm' => 'signature_algorithm',
            'signatureKey' => 'signature_key',
            'trigger' => 'trigger',
            'scopeRules' => 'scope_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  签名策略描述
    * enabled  是否开启
    * signatureMethod  加签方式，可选KMS
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  加签Key
    * trigger  trigger
    * scopeRules  作用范围规则
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'enabled' => 'setEnabled',
            'signatureMethod' => 'setSignatureMethod',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'signatureKey' => 'setSignatureKey',
            'trigger' => 'setTrigger',
            'scopeRules' => 'setScopeRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  签名策略描述
    * enabled  是否开启
    * signatureMethod  加签方式，可选KMS
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  加签Key
    * trigger  trigger
    * scopeRules  作用范围规则
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'enabled' => 'getEnabled',
            'signatureMethod' => 'getSignatureMethod',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'signatureKey' => 'getSignatureKey',
            'trigger' => 'getTrigger',
            'scopeRules' => 'getScopeRules'
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
    const SIGNATURE_METHOD_KMS = 'KMS';
    const SIGNATURE_ALGORITHM_ECDSA_SHA_384 = 'ECDSA_SHA_384';
    const SIGNATURE_ALGORITHM_SM2_DSA_SM3 = 'SM2DSA_SM3';
    const SIGNATURE_ALGORITHM_ECDSA_SHA_256 = 'ECDSA_SHA_256';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSignatureMethodAllowableValues()
    {
        return [
            self::SIGNATURE_METHOD_KMS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSignatureAlgorithmAllowableValues()
    {
        return [
            self::SIGNATURE_ALGORITHM_ECDSA_SHA_384,
            self::SIGNATURE_ALGORITHM_SM2_DSA_SM3,
            self::SIGNATURE_ALGORITHM_ECDSA_SHA_256,
        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['signatureMethod'] = isset($data['signatureMethod']) ? $data['signatureMethod'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['signatureKey'] = isset($data['signatureKey']) ? $data['signatureKey'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['scopeRules'] = isset($data['scopeRules']) ? $data['scopeRules'] : null;
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
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['signatureMethod'] === null) {
            $invalidProperties[] = "'signatureMethod' can't be null";
        }
            $allowedValues = $this->getSignatureMethodAllowableValues();
                if (!is_null($this->container['signatureMethod']) && !in_array($this->container['signatureMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signatureMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['signatureAlgorithm'] === null) {
            $invalidProperties[] = "'signatureAlgorithm' can't be null";
        }
            $allowedValues = $this->getSignatureAlgorithmAllowableValues();
                if (!is_null($this->container['signatureAlgorithm']) && !in_array($this->container['signatureAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signatureAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['signatureKey'] === null) {
            $invalidProperties[] = "'signatureKey' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['scopeRules'] === null) {
            $invalidProperties[] = "'scopeRules' can't be null";
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
    *  签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
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
    * @param string $name 签名策略名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  签名策略描述
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
    * @param string|null $description 签名策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enabled
    *  是否开启
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
    * @param bool $enabled 是否开启
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets signatureMethod
    *  加签方式，可选KMS
    *
    * @return string
    */
    public function getSignatureMethod()
    {
        return $this->container['signatureMethod'];
    }

    /**
    * Sets signatureMethod
    *
    * @param string $signatureMethod 加签方式，可选KMS
    *
    * @return $this
    */
    public function setSignatureMethod($signatureMethod)
    {
        $this->container['signatureMethod'] = $signatureMethod;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    *
    * @return string
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string $signatureAlgorithm 加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets signatureKey
    *  加签Key
    *
    * @return string
    */
    public function getSignatureKey()
    {
        return $this->container['signatureKey'];
    }

    /**
    * Sets signatureKey
    *
    * @param string $signatureKey 加签Key
    *
    * @return $this
    */
    public function setSignatureKey($signatureKey)
    {
        $this->container['signatureKey'] = $signatureKey;
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
    * Gets scopeRules
    *  作用范围规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\SignScopeRule[]
    */
    public function getScopeRules()
    {
        return $this->container['scopeRules'];
    }

    /**
    * Sets scopeRules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\SignScopeRule[] $scopeRules 作用范围规则
    *
    * @return $this
    */
    public function setScopeRules($scopeRules)
    {
        $this->container['scopeRules'] = $scopeRules;
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

