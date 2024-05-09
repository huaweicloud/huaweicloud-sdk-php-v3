<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaSecurity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaSecurity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
    * trustStoreKeyName  证书名称，安全协议为SSL、SASL_SSL时必填。
    * trustStoreKey  安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    * trustStorePassword  证书密码，证书设置了密码时必填。
    * endpointAlgorithm  主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    * saslMechanism  SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    * delegationTokens  是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    * enableKeyStore  是否开启SSL双向认证。
    * keyStoreKey  Keystore证书，开启SSL双向认证时需要。
    * keyStoreKeyName  Keystore证书名称，开启SSL双向认证时需要。
    * keyStorePassword  Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    * setPrivateKeyPassword  是否设置Keystore私钥密码，默认为false。
    * keyPassword  Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'trustStoreKeyName' => 'string',
            'trustStoreKey' => 'string',
            'trustStorePassword' => 'string',
            'endpointAlgorithm' => 'string',
            'saslMechanism' => 'string',
            'delegationTokens' => 'bool',
            'enableKeyStore' => 'bool',
            'keyStoreKey' => 'string',
            'keyStoreKeyName' => 'string',
            'keyStorePassword' => 'string',
            'setPrivateKeyPassword' => 'bool',
            'keyPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
    * trustStoreKeyName  证书名称，安全协议为SSL、SASL_SSL时必填。
    * trustStoreKey  安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    * trustStorePassword  证书密码，证书设置了密码时必填。
    * endpointAlgorithm  主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    * saslMechanism  SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    * delegationTokens  是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    * enableKeyStore  是否开启SSL双向认证。
    * keyStoreKey  Keystore证书，开启SSL双向认证时需要。
    * keyStoreKeyName  Keystore证书名称，开启SSL双向认证时需要。
    * keyStorePassword  Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    * setPrivateKeyPassword  是否设置Keystore私钥密码，默认为false。
    * keyPassword  Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'trustStoreKeyName' => null,
        'trustStoreKey' => null,
        'trustStorePassword' => null,
        'endpointAlgorithm' => null,
        'saslMechanism' => null,
        'delegationTokens' => null,
        'enableKeyStore' => null,
        'keyStoreKey' => null,
        'keyStoreKeyName' => null,
        'keyStorePassword' => null,
        'setPrivateKeyPassword' => null,
        'keyPassword' => null
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
    * type  安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
    * trustStoreKeyName  证书名称，安全协议为SSL、SASL_SSL时必填。
    * trustStoreKey  安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    * trustStorePassword  证书密码，证书设置了密码时必填。
    * endpointAlgorithm  主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    * saslMechanism  SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    * delegationTokens  是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    * enableKeyStore  是否开启SSL双向认证。
    * keyStoreKey  Keystore证书，开启SSL双向认证时需要。
    * keyStoreKeyName  Keystore证书名称，开启SSL双向认证时需要。
    * keyStorePassword  Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    * setPrivateKeyPassword  是否设置Keystore私钥密码，默认为false。
    * keyPassword  Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'trustStoreKeyName' => 'trust_store_key_name',
            'trustStoreKey' => 'trust_store_key',
            'trustStorePassword' => 'trust_store_password',
            'endpointAlgorithm' => 'endpoint_algorithm',
            'saslMechanism' => 'sasl_mechanism',
            'delegationTokens' => 'delegation_tokens',
            'enableKeyStore' => 'enable_key_store',
            'keyStoreKey' => 'key_store_key',
            'keyStoreKeyName' => 'key_store_key_name',
            'keyStorePassword' => 'key_store_password',
            'setPrivateKeyPassword' => 'set_private_key_password',
            'keyPassword' => 'key_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
    * trustStoreKeyName  证书名称，安全协议为SSL、SASL_SSL时必填。
    * trustStoreKey  安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    * trustStorePassword  证书密码，证书设置了密码时必填。
    * endpointAlgorithm  主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    * saslMechanism  SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    * delegationTokens  是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    * enableKeyStore  是否开启SSL双向认证。
    * keyStoreKey  Keystore证书，开启SSL双向认证时需要。
    * keyStoreKeyName  Keystore证书名称，开启SSL双向认证时需要。
    * keyStorePassword  Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    * setPrivateKeyPassword  是否设置Keystore私钥密码，默认为false。
    * keyPassword  Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'trustStoreKeyName' => 'setTrustStoreKeyName',
            'trustStoreKey' => 'setTrustStoreKey',
            'trustStorePassword' => 'setTrustStorePassword',
            'endpointAlgorithm' => 'setEndpointAlgorithm',
            'saslMechanism' => 'setSaslMechanism',
            'delegationTokens' => 'setDelegationTokens',
            'enableKeyStore' => 'setEnableKeyStore',
            'keyStoreKey' => 'setKeyStoreKey',
            'keyStoreKeyName' => 'setKeyStoreKeyName',
            'keyStorePassword' => 'setKeyStorePassword',
            'setPrivateKeyPassword' => 'setSetPrivateKeyPassword',
            'keyPassword' => 'setKeyPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
    * trustStoreKeyName  证书名称，安全协议为SSL、SASL_SSL时必填。
    * trustStoreKey  安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    * trustStorePassword  证书密码，证书设置了密码时必填。
    * endpointAlgorithm  主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    * saslMechanism  SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    * delegationTokens  是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    * enableKeyStore  是否开启SSL双向认证。
    * keyStoreKey  Keystore证书，开启SSL双向认证时需要。
    * keyStoreKeyName  Keystore证书名称，开启SSL双向认证时需要。
    * keyStorePassword  Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    * setPrivateKeyPassword  是否设置Keystore私钥密码，默认为false。
    * keyPassword  Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'trustStoreKeyName' => 'getTrustStoreKeyName',
            'trustStoreKey' => 'getTrustStoreKey',
            'trustStorePassword' => 'getTrustStorePassword',
            'endpointAlgorithm' => 'getEndpointAlgorithm',
            'saslMechanism' => 'getSaslMechanism',
            'delegationTokens' => 'getDelegationTokens',
            'enableKeyStore' => 'getEnableKeyStore',
            'keyStoreKey' => 'getKeyStoreKey',
            'keyStoreKeyName' => 'getKeyStoreKeyName',
            'keyStorePassword' => 'getKeyStorePassword',
            'setPrivateKeyPassword' => 'getSetPrivateKeyPassword',
            'keyPassword' => 'getKeyPassword'
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
    const TYPE_PLAINTEXT = 'PLAINTEXT';
    const TYPE_SASL_PLAINTEXT = 'SASL_PLAINTEXT';
    const TYPE_SASL_SSL = 'SASL_SSL';
    const TYPE_SSL = 'SSL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PLAINTEXT,
            self::TYPE_SASL_PLAINTEXT,
            self::TYPE_SASL_SSL,
            self::TYPE_SSL,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['trustStoreKeyName'] = isset($data['trustStoreKeyName']) ? $data['trustStoreKeyName'] : null;
        $this->container['trustStoreKey'] = isset($data['trustStoreKey']) ? $data['trustStoreKey'] : null;
        $this->container['trustStorePassword'] = isset($data['trustStorePassword']) ? $data['trustStorePassword'] : null;
        $this->container['endpointAlgorithm'] = isset($data['endpointAlgorithm']) ? $data['endpointAlgorithm'] : null;
        $this->container['saslMechanism'] = isset($data['saslMechanism']) ? $data['saslMechanism'] : null;
        $this->container['delegationTokens'] = isset($data['delegationTokens']) ? $data['delegationTokens'] : null;
        $this->container['enableKeyStore'] = isset($data['enableKeyStore']) ? $data['enableKeyStore'] : null;
        $this->container['keyStoreKey'] = isset($data['keyStoreKey']) ? $data['keyStoreKey'] : null;
        $this->container['keyStoreKeyName'] = isset($data['keyStoreKeyName']) ? $data['keyStoreKeyName'] : null;
        $this->container['keyStorePassword'] = isset($data['keyStorePassword']) ? $data['keyStorePassword'] : null;
        $this->container['setPrivateKeyPassword'] = isset($data['setPrivateKeyPassword']) ? $data['setPrivateKeyPassword'] : null;
        $this->container['keyPassword'] = isset($data['keyPassword']) ? $data['keyPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
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
    * @param string|null $type 安全协议，安全认证时必填，对应Kafka字段：security.protocol。 - PLAINTEXT：无安全认证方式，仅需输入IP和端口进行连接。 - SASL_PLAINTEXT：使用SASL机制连接Kafka，需要设置SASL相关配置。 - SSL：使用SSL加密方式连接Kafka，需要设置SSL相关配置。 - SASL_SSL：使用SASL及SSL加密认证方式，需要设置SSL及SASL相关参数配置信息。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets trustStoreKeyName
    *  证书名称，安全协议为SSL、SASL_SSL时必填。
    *
    * @return string|null
    */
    public function getTrustStoreKeyName()
    {
        return $this->container['trustStoreKeyName'];
    }

    /**
    * Sets trustStoreKeyName
    *
    * @param string|null $trustStoreKeyName 证书名称，安全协议为SSL、SASL_SSL时必填。
    *
    * @return $this
    */
    public function setTrustStoreKeyName($trustStoreKeyName)
    {
        $this->container['trustStoreKeyName'] = $trustStoreKeyName;
        return $this;
    }

    /**
    * Gets trustStoreKey
    *  安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    *
    * @return string|null
    */
    public function getTrustStoreKey()
    {
        return $this->container['trustStoreKey'];
    }

    /**
    * Sets trustStoreKey
    *
    * @param string|null $trustStoreKey 安全证书base64转码后的值，安全协议为SSL、SASL_SSL时必填。
    *
    * @return $this
    */
    public function setTrustStoreKey($trustStoreKey)
    {
        $this->container['trustStoreKey'] = $trustStoreKey;
        return $this;
    }

    /**
    * Gets trustStorePassword
    *  证书密码，证书设置了密码时必填。
    *
    * @return string|null
    */
    public function getTrustStorePassword()
    {
        return $this->container['trustStorePassword'];
    }

    /**
    * Sets trustStorePassword
    *
    * @param string|null $trustStorePassword 证书密码，证书设置了密码时必填。
    *
    * @return $this
    */
    public function setTrustStorePassword($trustStorePassword)
    {
        $this->container['trustStorePassword'] = $trustStorePassword;
        return $this;
    }

    /**
    * Gets endpointAlgorithm
    *  主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    *
    * @return string|null
    */
    public function getEndpointAlgorithm()
    {
        return $this->container['endpointAlgorithm'];
    }

    /**
    * Sets endpointAlgorithm
    *
    * @param string|null $endpointAlgorithm 主机名端点识别算法，指定通过服务端证书验证服务端主机名的端点识别算法，不填表示禁用主机名验证。对应Kafka字段：ssl.endpoint.identification.algorithm。
    *
    * @return $this
    */
    public function setEndpointAlgorithm($endpointAlgorithm)
    {
        $this->container['endpointAlgorithm'] = $endpointAlgorithm;
        return $this;
    }

    /**
    * Gets saslMechanism
    *  SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    *
    * @return string|null
    */
    public function getSaslMechanism()
    {
        return $this->container['saslMechanism'];
    }

    /**
    * Sets saslMechanism
    *
    * @param string|null $saslMechanism SASL机制，用于客户端连接的SASL机制，对应Kafka字段：sasl.mechanism，支持以下四项，取值： - GSSAPI - PLAIN - SCRAM-SHA-256 - SCRAM-SHA-512
    *
    * @return $this
    */
    public function setSaslMechanism($saslMechanism)
    {
        $this->container['saslMechanism'] = $saslMechanism;
        return $this;
    }

    /**
    * Gets delegationTokens
    *  是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    *
    * @return bool|null
    */
    public function getDelegationTokens()
    {
        return $this->container['delegationTokens'];
    }

    /**
    * Sets delegationTokens
    *
    * @param bool|null $delegationTokens 是否为委托令牌鉴权，安全协议为SASL_SSL和SASL_PLAINTEXT时，SASL机制选择“SCRAM-SHA-256”或者“SCRAM-SHA-512”时生效。
    *
    * @return $this
    */
    public function setDelegationTokens($delegationTokens)
    {
        $this->container['delegationTokens'] = $delegationTokens;
        return $this;
    }

    /**
    * Gets enableKeyStore
    *  是否开启SSL双向认证。
    *
    * @return bool|null
    */
    public function getEnableKeyStore()
    {
        return $this->container['enableKeyStore'];
    }

    /**
    * Sets enableKeyStore
    *
    * @param bool|null $enableKeyStore 是否开启SSL双向认证。
    *
    * @return $this
    */
    public function setEnableKeyStore($enableKeyStore)
    {
        $this->container['enableKeyStore'] = $enableKeyStore;
        return $this;
    }

    /**
    * Gets keyStoreKey
    *  Keystore证书，开启SSL双向认证时需要。
    *
    * @return string|null
    */
    public function getKeyStoreKey()
    {
        return $this->container['keyStoreKey'];
    }

    /**
    * Sets keyStoreKey
    *
    * @param string|null $keyStoreKey Keystore证书，开启SSL双向认证时需要。
    *
    * @return $this
    */
    public function setKeyStoreKey($keyStoreKey)
    {
        $this->container['keyStoreKey'] = $keyStoreKey;
        return $this;
    }

    /**
    * Gets keyStoreKeyName
    *  Keystore证书名称，开启SSL双向认证时需要。
    *
    * @return string|null
    */
    public function getKeyStoreKeyName()
    {
        return $this->container['keyStoreKeyName'];
    }

    /**
    * Sets keyStoreKeyName
    *
    * @param string|null $keyStoreKeyName Keystore证书名称，开启SSL双向认证时需要。
    *
    * @return $this
    */
    public function setKeyStoreKeyName($keyStoreKeyName)
    {
        $this->container['keyStoreKeyName'] = $keyStoreKeyName;
        return $this;
    }

    /**
    * Gets keyStorePassword
    *  Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    *
    * @return string|null
    */
    public function getKeyStorePassword()
    {
        return $this->container['keyStorePassword'];
    }

    /**
    * Sets keyStorePassword
    *
    * @param string|null $keyStorePassword Keystore证书密码，证书设置了密码时需要。对应Kafka字段：ssl.keystore.password。
    *
    * @return $this
    */
    public function setKeyStorePassword($keyStorePassword)
    {
        $this->container['keyStorePassword'] = $keyStorePassword;
        return $this;
    }

    /**
    * Gets setPrivateKeyPassword
    *  是否设置Keystore私钥密码，默认为false。
    *
    * @return bool|null
    */
    public function getSetPrivateKeyPassword()
    {
        return $this->container['setPrivateKeyPassword'];
    }

    /**
    * Sets setPrivateKeyPassword
    *
    * @param bool|null $setPrivateKeyPassword 是否设置Keystore私钥密码，默认为false。
    *
    * @return $this
    */
    public function setSetPrivateKeyPassword($setPrivateKeyPassword)
    {
        $this->container['setPrivateKeyPassword'] = $setPrivateKeyPassword;
        return $this;
    }

    /**
    * Gets keyPassword
    *  Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @return string|null
    */
    public function getKeyPassword()
    {
        return $this->container['keyPassword'];
    }

    /**
    * Sets keyPassword
    *
    * @param string|null $keyPassword Keystore私钥密码，开启SSL双向认证时，set_private_key_password为true时必填。对应Kafka字段：ssl.key.password。
    *
    * @return $this
    */
    public function setKeyPassword($keyPassword)
    {
        $this->container['keyPassword'] = $keyPassword;
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

