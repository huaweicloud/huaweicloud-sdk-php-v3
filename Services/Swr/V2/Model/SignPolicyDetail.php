<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SignPolicyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SignPolicyDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  签名策略ID
    * name  签名策略名称
    * description  签名策略描述
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * trigger  trigger
    * creator  创建者
    * enabled  是否
    * scopeRules  作用范围规则
    * createdAt  创建时间
    * updatedAt  更新时间
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  签名算法key ID
    * signatureMethod  镜像签名方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'description' => 'string',
            'namespaceId' => 'int',
            'namespaceName' => 'string',
            'trigger' => '\HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig',
            'creator' => 'string',
            'enabled' => 'bool',
            'scopeRules' => '\HuaweiCloud\SDK\Swr\V2\Model\SignScopeRule[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'signatureAlgorithm' => 'string',
            'signatureKey' => 'string',
            'signatureMethod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  签名策略ID
    * name  签名策略名称
    * description  签名策略描述
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * trigger  trigger
    * creator  创建者
    * enabled  是否
    * scopeRules  作用范围规则
    * createdAt  创建时间
    * updatedAt  更新时间
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  签名算法key ID
    * signatureMethod  镜像签名方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'namespaceId' => null,
        'namespaceName' => null,
        'trigger' => null,
        'creator' => null,
        'enabled' => null,
        'scopeRules' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'signatureAlgorithm' => null,
        'signatureKey' => null,
        'signatureMethod' => null
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
    * id  签名策略ID
    * name  签名策略名称
    * description  签名策略描述
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * trigger  trigger
    * creator  创建者
    * enabled  是否
    * scopeRules  作用范围规则
    * createdAt  创建时间
    * updatedAt  更新时间
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  签名算法key ID
    * signatureMethod  镜像签名方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'namespaceId' => 'namespace_id',
            'namespaceName' => 'namespace_name',
            'trigger' => 'trigger',
            'creator' => 'creator',
            'enabled' => 'enabled',
            'scopeRules' => 'scope_rules',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'signatureAlgorithm' => 'signature_algorithm',
            'signatureKey' => 'signature_key',
            'signatureMethod' => 'signature_method'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  签名策略ID
    * name  签名策略名称
    * description  签名策略描述
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * trigger  trigger
    * creator  创建者
    * enabled  是否
    * scopeRules  作用范围规则
    * createdAt  创建时间
    * updatedAt  更新时间
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  签名算法key ID
    * signatureMethod  镜像签名方式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'namespaceId' => 'setNamespaceId',
            'namespaceName' => 'setNamespaceName',
            'trigger' => 'setTrigger',
            'creator' => 'setCreator',
            'enabled' => 'setEnabled',
            'scopeRules' => 'setScopeRules',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'signatureKey' => 'setSignatureKey',
            'signatureMethod' => 'setSignatureMethod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  签名策略ID
    * name  签名策略名称
    * description  签名策略描述
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * trigger  trigger
    * creator  创建者
    * enabled  是否
    * scopeRules  作用范围规则
    * createdAt  创建时间
    * updatedAt  更新时间
    * signatureAlgorithm  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    * signatureKey  签名算法key ID
    * signatureMethod  镜像签名方式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'namespaceId' => 'getNamespaceId',
            'namespaceName' => 'getNamespaceName',
            'trigger' => 'getTrigger',
            'creator' => 'getCreator',
            'enabled' => 'getEnabled',
            'scopeRules' => 'getScopeRules',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'signatureKey' => 'getSignatureKey',
            'signatureMethod' => 'getSignatureMethod'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['scopeRules'] = isset($data['scopeRules']) ? $data['scopeRules'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['signatureKey'] = isset($data['signatureKey']) ? $data['signatureKey'] : null;
        $this->container['signatureMethod'] = isset($data['signatureMethod']) ? $data['signatureMethod'] : null;
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
    * Gets id
    *  签名策略ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 签名策略ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  签名策略名称
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
    * @param string|null $name 签名策略名称
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
    * Gets namespaceId
    *  命名空间ID
    *
    * @return int|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int|null $namespaceId 命名空间ID
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间名
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig|null $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets creator
    *  创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets enabled
    *  是否
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets scopeRules
    *  作用范围规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\SignScopeRule[]|null
    */
    public function getScopeRules()
    {
        return $this->container['scopeRules'];
    }

    /**
    * Sets scopeRules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\SignScopeRule[]|null $scopeRules 作用范围规则
    *
    * @return $this
    */
    public function setScopeRules($scopeRules)
    {
        $this->container['scopeRules'] = $scopeRules;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
    *
    * @return string|null
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string|null $signatureAlgorithm 加签算法，KMS的密钥算法EC_P256对应着ECDSA_SHA_256，EC_P384对应着ECDSA_SHA_384，SM2对应着SM2DSA_SM3
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
    *  签名算法key ID
    *
    * @return string|null
    */
    public function getSignatureKey()
    {
        return $this->container['signatureKey'];
    }

    /**
    * Sets signatureKey
    *
    * @param string|null $signatureKey 签名算法key ID
    *
    * @return $this
    */
    public function setSignatureKey($signatureKey)
    {
        $this->container['signatureKey'] = $signatureKey;
        return $this;
    }

    /**
    * Gets signatureMethod
    *  镜像签名方式
    *
    * @return string|null
    */
    public function getSignatureMethod()
    {
        return $this->container['signatureMethod'];
    }

    /**
    * Sets signatureMethod
    *
    * @param string|null $signatureMethod 镜像签名方式
    *
    * @return $this
    */
    public function setSignatureMethod($signatureMethod)
    {
        $this->container['signatureMethod'] = $signatureMethod;
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

