<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortProtocolsEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortProtocolsEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privatePlainEnable  实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    * privatePlainAddress  kafka内网PLAINTEXT接入方式连接地址。
    * privatePlainDomainName  内网明文连接域名
    * privateSaslSslEnable  实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    * privateSaslSslAddress  kafka内网SASL_SSL接入方式连接地址。
    * privateSaslSslDomainName  内网SASL_SSL连接域名
    * privateSaslPlaintextEnable  实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    * privateSaslPlaintextAddress  kafka内网SASL_PLAINTEXT接入方式连接地址。
    * privateSaslPlaintextDomainName  内网SASL_PLAINTEXT连接域名
    * publicPlainEnable  实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    * publicPlainAddress  kafka公网PLAINTEXT接入方式连接地址。
    * publicPlainDomainName  公网明文连接域名
    * publicSaslSslEnable  实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    * publicSaslSslAddress  kafka公网SASL_SSL接入方式连接地址。
    * publicSaslSslDomainName  公网SASL_SSL连接域名
    * publicSaslPlaintextEnable  实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    * publicSaslPlaintextAddress  kafka公网SASL_PLAINTEXT接入方式连接地址。
    * publicSaslPlaintextDomainName  公网SASL_PLAINTEXT连接域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privatePlainEnable' => 'bool',
            'privatePlainAddress' => 'string',
            'privatePlainDomainName' => 'string',
            'privateSaslSslEnable' => 'bool',
            'privateSaslSslAddress' => 'string',
            'privateSaslSslDomainName' => 'string',
            'privateSaslPlaintextEnable' => 'bool',
            'privateSaslPlaintextAddress' => 'string',
            'privateSaslPlaintextDomainName' => 'string',
            'publicPlainEnable' => 'bool',
            'publicPlainAddress' => 'string',
            'publicPlainDomainName' => 'string',
            'publicSaslSslEnable' => 'bool',
            'publicSaslSslAddress' => 'string',
            'publicSaslSslDomainName' => 'string',
            'publicSaslPlaintextEnable' => 'bool',
            'publicSaslPlaintextAddress' => 'string',
            'publicSaslPlaintextDomainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privatePlainEnable  实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    * privatePlainAddress  kafka内网PLAINTEXT接入方式连接地址。
    * privatePlainDomainName  内网明文连接域名
    * privateSaslSslEnable  实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    * privateSaslSslAddress  kafka内网SASL_SSL接入方式连接地址。
    * privateSaslSslDomainName  内网SASL_SSL连接域名
    * privateSaslPlaintextEnable  实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    * privateSaslPlaintextAddress  kafka内网SASL_PLAINTEXT接入方式连接地址。
    * privateSaslPlaintextDomainName  内网SASL_PLAINTEXT连接域名
    * publicPlainEnable  实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    * publicPlainAddress  kafka公网PLAINTEXT接入方式连接地址。
    * publicPlainDomainName  公网明文连接域名
    * publicSaslSslEnable  实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    * publicSaslSslAddress  kafka公网SASL_SSL接入方式连接地址。
    * publicSaslSslDomainName  公网SASL_SSL连接域名
    * publicSaslPlaintextEnable  实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    * publicSaslPlaintextAddress  kafka公网SASL_PLAINTEXT接入方式连接地址。
    * publicSaslPlaintextDomainName  公网SASL_PLAINTEXT连接域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privatePlainEnable' => null,
        'privatePlainAddress' => null,
        'privatePlainDomainName' => null,
        'privateSaslSslEnable' => null,
        'privateSaslSslAddress' => null,
        'privateSaslSslDomainName' => null,
        'privateSaslPlaintextEnable' => null,
        'privateSaslPlaintextAddress' => null,
        'privateSaslPlaintextDomainName' => null,
        'publicPlainEnable' => null,
        'publicPlainAddress' => null,
        'publicPlainDomainName' => null,
        'publicSaslSslEnable' => null,
        'publicSaslSslAddress' => null,
        'publicSaslSslDomainName' => null,
        'publicSaslPlaintextEnable' => null,
        'publicSaslPlaintextAddress' => null,
        'publicSaslPlaintextDomainName' => null
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
    * privatePlainEnable  实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    * privatePlainAddress  kafka内网PLAINTEXT接入方式连接地址。
    * privatePlainDomainName  内网明文连接域名
    * privateSaslSslEnable  实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    * privateSaslSslAddress  kafka内网SASL_SSL接入方式连接地址。
    * privateSaslSslDomainName  内网SASL_SSL连接域名
    * privateSaslPlaintextEnable  实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    * privateSaslPlaintextAddress  kafka内网SASL_PLAINTEXT接入方式连接地址。
    * privateSaslPlaintextDomainName  内网SASL_PLAINTEXT连接域名
    * publicPlainEnable  实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    * publicPlainAddress  kafka公网PLAINTEXT接入方式连接地址。
    * publicPlainDomainName  公网明文连接域名
    * publicSaslSslEnable  实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    * publicSaslSslAddress  kafka公网SASL_SSL接入方式连接地址。
    * publicSaslSslDomainName  公网SASL_SSL连接域名
    * publicSaslPlaintextEnable  实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    * publicSaslPlaintextAddress  kafka公网SASL_PLAINTEXT接入方式连接地址。
    * publicSaslPlaintextDomainName  公网SASL_PLAINTEXT连接域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privatePlainEnable' => 'private_plain_enable',
            'privatePlainAddress' => 'private_plain_address',
            'privatePlainDomainName' => 'private_plain_domain_name',
            'privateSaslSslEnable' => 'private_sasl_ssl_enable',
            'privateSaslSslAddress' => 'private_sasl_ssl_address',
            'privateSaslSslDomainName' => 'private_sasl_ssl_domain_name',
            'privateSaslPlaintextEnable' => 'private_sasl_plaintext_enable',
            'privateSaslPlaintextAddress' => 'private_sasl_plaintext_address',
            'privateSaslPlaintextDomainName' => 'private_sasl_plaintext_domain_name',
            'publicPlainEnable' => 'public_plain_enable',
            'publicPlainAddress' => 'public_plain_address',
            'publicPlainDomainName' => 'public_plain_domain_name',
            'publicSaslSslEnable' => 'public_sasl_ssl_enable',
            'publicSaslSslAddress' => 'public_sasl_ssl_address',
            'publicSaslSslDomainName' => 'public_sasl_ssl_domain_name',
            'publicSaslPlaintextEnable' => 'public_sasl_plaintext_enable',
            'publicSaslPlaintextAddress' => 'public_sasl_plaintext_address',
            'publicSaslPlaintextDomainName' => 'public_sasl_plaintext_domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privatePlainEnable  实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    * privatePlainAddress  kafka内网PLAINTEXT接入方式连接地址。
    * privatePlainDomainName  内网明文连接域名
    * privateSaslSslEnable  实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    * privateSaslSslAddress  kafka内网SASL_SSL接入方式连接地址。
    * privateSaslSslDomainName  内网SASL_SSL连接域名
    * privateSaslPlaintextEnable  实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    * privateSaslPlaintextAddress  kafka内网SASL_PLAINTEXT接入方式连接地址。
    * privateSaslPlaintextDomainName  内网SASL_PLAINTEXT连接域名
    * publicPlainEnable  实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    * publicPlainAddress  kafka公网PLAINTEXT接入方式连接地址。
    * publicPlainDomainName  公网明文连接域名
    * publicSaslSslEnable  实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    * publicSaslSslAddress  kafka公网SASL_SSL接入方式连接地址。
    * publicSaslSslDomainName  公网SASL_SSL连接域名
    * publicSaslPlaintextEnable  实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    * publicSaslPlaintextAddress  kafka公网SASL_PLAINTEXT接入方式连接地址。
    * publicSaslPlaintextDomainName  公网SASL_PLAINTEXT连接域名
    *
    * @var string[]
    */
    protected static $setters = [
            'privatePlainEnable' => 'setPrivatePlainEnable',
            'privatePlainAddress' => 'setPrivatePlainAddress',
            'privatePlainDomainName' => 'setPrivatePlainDomainName',
            'privateSaslSslEnable' => 'setPrivateSaslSslEnable',
            'privateSaslSslAddress' => 'setPrivateSaslSslAddress',
            'privateSaslSslDomainName' => 'setPrivateSaslSslDomainName',
            'privateSaslPlaintextEnable' => 'setPrivateSaslPlaintextEnable',
            'privateSaslPlaintextAddress' => 'setPrivateSaslPlaintextAddress',
            'privateSaslPlaintextDomainName' => 'setPrivateSaslPlaintextDomainName',
            'publicPlainEnable' => 'setPublicPlainEnable',
            'publicPlainAddress' => 'setPublicPlainAddress',
            'publicPlainDomainName' => 'setPublicPlainDomainName',
            'publicSaslSslEnable' => 'setPublicSaslSslEnable',
            'publicSaslSslAddress' => 'setPublicSaslSslAddress',
            'publicSaslSslDomainName' => 'setPublicSaslSslDomainName',
            'publicSaslPlaintextEnable' => 'setPublicSaslPlaintextEnable',
            'publicSaslPlaintextAddress' => 'setPublicSaslPlaintextAddress',
            'publicSaslPlaintextDomainName' => 'setPublicSaslPlaintextDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privatePlainEnable  实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    * privatePlainAddress  kafka内网PLAINTEXT接入方式连接地址。
    * privatePlainDomainName  内网明文连接域名
    * privateSaslSslEnable  实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    * privateSaslSslAddress  kafka内网SASL_SSL接入方式连接地址。
    * privateSaslSslDomainName  内网SASL_SSL连接域名
    * privateSaslPlaintextEnable  实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    * privateSaslPlaintextAddress  kafka内网SASL_PLAINTEXT接入方式连接地址。
    * privateSaslPlaintextDomainName  内网SASL_PLAINTEXT连接域名
    * publicPlainEnable  实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    * publicPlainAddress  kafka公网PLAINTEXT接入方式连接地址。
    * publicPlainDomainName  公网明文连接域名
    * publicSaslSslEnable  实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    * publicSaslSslAddress  kafka公网SASL_SSL接入方式连接地址。
    * publicSaslSslDomainName  公网SASL_SSL连接域名
    * publicSaslPlaintextEnable  实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    * publicSaslPlaintextAddress  kafka公网SASL_PLAINTEXT接入方式连接地址。
    * publicSaslPlaintextDomainName  公网SASL_PLAINTEXT连接域名
    *
    * @var string[]
    */
    protected static $getters = [
            'privatePlainEnable' => 'getPrivatePlainEnable',
            'privatePlainAddress' => 'getPrivatePlainAddress',
            'privatePlainDomainName' => 'getPrivatePlainDomainName',
            'privateSaslSslEnable' => 'getPrivateSaslSslEnable',
            'privateSaslSslAddress' => 'getPrivateSaslSslAddress',
            'privateSaslSslDomainName' => 'getPrivateSaslSslDomainName',
            'privateSaslPlaintextEnable' => 'getPrivateSaslPlaintextEnable',
            'privateSaslPlaintextAddress' => 'getPrivateSaslPlaintextAddress',
            'privateSaslPlaintextDomainName' => 'getPrivateSaslPlaintextDomainName',
            'publicPlainEnable' => 'getPublicPlainEnable',
            'publicPlainAddress' => 'getPublicPlainAddress',
            'publicPlainDomainName' => 'getPublicPlainDomainName',
            'publicSaslSslEnable' => 'getPublicSaslSslEnable',
            'publicSaslSslAddress' => 'getPublicSaslSslAddress',
            'publicSaslSslDomainName' => 'getPublicSaslSslDomainName',
            'publicSaslPlaintextEnable' => 'getPublicSaslPlaintextEnable',
            'publicSaslPlaintextAddress' => 'getPublicSaslPlaintextAddress',
            'publicSaslPlaintextDomainName' => 'getPublicSaslPlaintextDomainName'
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
        $this->container['privatePlainEnable'] = isset($data['privatePlainEnable']) ? $data['privatePlainEnable'] : null;
        $this->container['privatePlainAddress'] = isset($data['privatePlainAddress']) ? $data['privatePlainAddress'] : null;
        $this->container['privatePlainDomainName'] = isset($data['privatePlainDomainName']) ? $data['privatePlainDomainName'] : null;
        $this->container['privateSaslSslEnable'] = isset($data['privateSaslSslEnable']) ? $data['privateSaslSslEnable'] : null;
        $this->container['privateSaslSslAddress'] = isset($data['privateSaslSslAddress']) ? $data['privateSaslSslAddress'] : null;
        $this->container['privateSaslSslDomainName'] = isset($data['privateSaslSslDomainName']) ? $data['privateSaslSslDomainName'] : null;
        $this->container['privateSaslPlaintextEnable'] = isset($data['privateSaslPlaintextEnable']) ? $data['privateSaslPlaintextEnable'] : null;
        $this->container['privateSaslPlaintextAddress'] = isset($data['privateSaslPlaintextAddress']) ? $data['privateSaslPlaintextAddress'] : null;
        $this->container['privateSaslPlaintextDomainName'] = isset($data['privateSaslPlaintextDomainName']) ? $data['privateSaslPlaintextDomainName'] : null;
        $this->container['publicPlainEnable'] = isset($data['publicPlainEnable']) ? $data['publicPlainEnable'] : null;
        $this->container['publicPlainAddress'] = isset($data['publicPlainAddress']) ? $data['publicPlainAddress'] : null;
        $this->container['publicPlainDomainName'] = isset($data['publicPlainDomainName']) ? $data['publicPlainDomainName'] : null;
        $this->container['publicSaslSslEnable'] = isset($data['publicSaslSslEnable']) ? $data['publicSaslSslEnable'] : null;
        $this->container['publicSaslSslAddress'] = isset($data['publicSaslSslAddress']) ? $data['publicSaslSslAddress'] : null;
        $this->container['publicSaslSslDomainName'] = isset($data['publicSaslSslDomainName']) ? $data['publicSaslSslDomainName'] : null;
        $this->container['publicSaslPlaintextEnable'] = isset($data['publicSaslPlaintextEnable']) ? $data['publicSaslPlaintextEnable'] : null;
        $this->container['publicSaslPlaintextAddress'] = isset($data['publicSaslPlaintextAddress']) ? $data['publicSaslPlaintextAddress'] : null;
        $this->container['publicSaslPlaintextDomainName'] = isset($data['publicSaslPlaintextDomainName']) ? $data['publicSaslPlaintextDomainName'] : null;
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
    * Gets privatePlainEnable
    *  实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    *
    * @return bool|null
    */
    public function getPrivatePlainEnable()
    {
        return $this->container['privatePlainEnable'];
    }

    /**
    * Sets privatePlainEnable
    *
    * @param bool|null $privatePlainEnable 实例是否支持内网PLAINTEXT访问接入方式。  - true：实例支持内网PLAINTEXT访问方式接入方式。  - false：实例不支持内网PLAINTEXT访问接入方式。
    *
    * @return $this
    */
    public function setPrivatePlainEnable($privatePlainEnable)
    {
        $this->container['privatePlainEnable'] = $privatePlainEnable;
        return $this;
    }

    /**
    * Gets privatePlainAddress
    *  kafka内网PLAINTEXT接入方式连接地址。
    *
    * @return string|null
    */
    public function getPrivatePlainAddress()
    {
        return $this->container['privatePlainAddress'];
    }

    /**
    * Sets privatePlainAddress
    *
    * @param string|null $privatePlainAddress kafka内网PLAINTEXT接入方式连接地址。
    *
    * @return $this
    */
    public function setPrivatePlainAddress($privatePlainAddress)
    {
        $this->container['privatePlainAddress'] = $privatePlainAddress;
        return $this;
    }

    /**
    * Gets privatePlainDomainName
    *  内网明文连接域名
    *
    * @return string|null
    */
    public function getPrivatePlainDomainName()
    {
        return $this->container['privatePlainDomainName'];
    }

    /**
    * Sets privatePlainDomainName
    *
    * @param string|null $privatePlainDomainName 内网明文连接域名
    *
    * @return $this
    */
    public function setPrivatePlainDomainName($privatePlainDomainName)
    {
        $this->container['privatePlainDomainName'] = $privatePlainDomainName;
        return $this;
    }

    /**
    * Gets privateSaslSslEnable
    *  实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    *
    * @return bool|null
    */
    public function getPrivateSaslSslEnable()
    {
        return $this->container['privateSaslSslEnable'];
    }

    /**
    * Sets privateSaslSslEnable
    *
    * @param bool|null $privateSaslSslEnable 实例是否支持内网SASL_SSL访问接入方式。  - true：实例支持内网SASL_SSL访问方式接入方式。  - false：实例不支持内网SASL_SSL访问接入方式。
    *
    * @return $this
    */
    public function setPrivateSaslSslEnable($privateSaslSslEnable)
    {
        $this->container['privateSaslSslEnable'] = $privateSaslSslEnable;
        return $this;
    }

    /**
    * Gets privateSaslSslAddress
    *  kafka内网SASL_SSL接入方式连接地址。
    *
    * @return string|null
    */
    public function getPrivateSaslSslAddress()
    {
        return $this->container['privateSaslSslAddress'];
    }

    /**
    * Sets privateSaslSslAddress
    *
    * @param string|null $privateSaslSslAddress kafka内网SASL_SSL接入方式连接地址。
    *
    * @return $this
    */
    public function setPrivateSaslSslAddress($privateSaslSslAddress)
    {
        $this->container['privateSaslSslAddress'] = $privateSaslSslAddress;
        return $this;
    }

    /**
    * Gets privateSaslSslDomainName
    *  内网SASL_SSL连接域名
    *
    * @return string|null
    */
    public function getPrivateSaslSslDomainName()
    {
        return $this->container['privateSaslSslDomainName'];
    }

    /**
    * Sets privateSaslSslDomainName
    *
    * @param string|null $privateSaslSslDomainName 内网SASL_SSL连接域名
    *
    * @return $this
    */
    public function setPrivateSaslSslDomainName($privateSaslSslDomainName)
    {
        $this->container['privateSaslSslDomainName'] = $privateSaslSslDomainName;
        return $this;
    }

    /**
    * Gets privateSaslPlaintextEnable
    *  实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    *
    * @return bool|null
    */
    public function getPrivateSaslPlaintextEnable()
    {
        return $this->container['privateSaslPlaintextEnable'];
    }

    /**
    * Sets privateSaslPlaintextEnable
    *
    * @param bool|null $privateSaslPlaintextEnable 实例是否支持内网SASL_PLAINTEXT访问接入方式。  - true，实例支持内网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持内网SASL_PLAINTEXT访问接入方式。
    *
    * @return $this
    */
    public function setPrivateSaslPlaintextEnable($privateSaslPlaintextEnable)
    {
        $this->container['privateSaslPlaintextEnable'] = $privateSaslPlaintextEnable;
        return $this;
    }

    /**
    * Gets privateSaslPlaintextAddress
    *  kafka内网SASL_PLAINTEXT接入方式连接地址。
    *
    * @return string|null
    */
    public function getPrivateSaslPlaintextAddress()
    {
        return $this->container['privateSaslPlaintextAddress'];
    }

    /**
    * Sets privateSaslPlaintextAddress
    *
    * @param string|null $privateSaslPlaintextAddress kafka内网SASL_PLAINTEXT接入方式连接地址。
    *
    * @return $this
    */
    public function setPrivateSaslPlaintextAddress($privateSaslPlaintextAddress)
    {
        $this->container['privateSaslPlaintextAddress'] = $privateSaslPlaintextAddress;
        return $this;
    }

    /**
    * Gets privateSaslPlaintextDomainName
    *  内网SASL_PLAINTEXT连接域名
    *
    * @return string|null
    */
    public function getPrivateSaslPlaintextDomainName()
    {
        return $this->container['privateSaslPlaintextDomainName'];
    }

    /**
    * Sets privateSaslPlaintextDomainName
    *
    * @param string|null $privateSaslPlaintextDomainName 内网SASL_PLAINTEXT连接域名
    *
    * @return $this
    */
    public function setPrivateSaslPlaintextDomainName($privateSaslPlaintextDomainName)
    {
        $this->container['privateSaslPlaintextDomainName'] = $privateSaslPlaintextDomainName;
        return $this;
    }

    /**
    * Gets publicPlainEnable
    *  实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    *
    * @return bool|null
    */
    public function getPublicPlainEnable()
    {
        return $this->container['publicPlainEnable'];
    }

    /**
    * Sets publicPlainEnable
    *
    * @param bool|null $publicPlainEnable 实例是否支持公网PLAINTEXT访问接入方式。  - true，实例支持公网PLAINTEXT访问方式接入方式。  - false，实例不支持公网PLAINTEXT访问接入方式。
    *
    * @return $this
    */
    public function setPublicPlainEnable($publicPlainEnable)
    {
        $this->container['publicPlainEnable'] = $publicPlainEnable;
        return $this;
    }

    /**
    * Gets publicPlainAddress
    *  kafka公网PLAINTEXT接入方式连接地址。
    *
    * @return string|null
    */
    public function getPublicPlainAddress()
    {
        return $this->container['publicPlainAddress'];
    }

    /**
    * Sets publicPlainAddress
    *
    * @param string|null $publicPlainAddress kafka公网PLAINTEXT接入方式连接地址。
    *
    * @return $this
    */
    public function setPublicPlainAddress($publicPlainAddress)
    {
        $this->container['publicPlainAddress'] = $publicPlainAddress;
        return $this;
    }

    /**
    * Gets publicPlainDomainName
    *  公网明文连接域名
    *
    * @return string|null
    */
    public function getPublicPlainDomainName()
    {
        return $this->container['publicPlainDomainName'];
    }

    /**
    * Sets publicPlainDomainName
    *
    * @param string|null $publicPlainDomainName 公网明文连接域名
    *
    * @return $this
    */
    public function setPublicPlainDomainName($publicPlainDomainName)
    {
        $this->container['publicPlainDomainName'] = $publicPlainDomainName;
        return $this;
    }

    /**
    * Gets publicSaslSslEnable
    *  实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    *
    * @return bool|null
    */
    public function getPublicSaslSslEnable()
    {
        return $this->container['publicSaslSslEnable'];
    }

    /**
    * Sets publicSaslSslEnable
    *
    * @param bool|null $publicSaslSslEnable 实例是否支持公网SASL_SSL访问接入方式。  - true，实例支持内网SASL_SSL访问方式接入方式。  - false，实例不支持公网SASL_SSL访问接入方式。
    *
    * @return $this
    */
    public function setPublicSaslSslEnable($publicSaslSslEnable)
    {
        $this->container['publicSaslSslEnable'] = $publicSaslSslEnable;
        return $this;
    }

    /**
    * Gets publicSaslSslAddress
    *  kafka公网SASL_SSL接入方式连接地址。
    *
    * @return string|null
    */
    public function getPublicSaslSslAddress()
    {
        return $this->container['publicSaslSslAddress'];
    }

    /**
    * Sets publicSaslSslAddress
    *
    * @param string|null $publicSaslSslAddress kafka公网SASL_SSL接入方式连接地址。
    *
    * @return $this
    */
    public function setPublicSaslSslAddress($publicSaslSslAddress)
    {
        $this->container['publicSaslSslAddress'] = $publicSaslSslAddress;
        return $this;
    }

    /**
    * Gets publicSaslSslDomainName
    *  公网SASL_SSL连接域名
    *
    * @return string|null
    */
    public function getPublicSaslSslDomainName()
    {
        return $this->container['publicSaslSslDomainName'];
    }

    /**
    * Sets publicSaslSslDomainName
    *
    * @param string|null $publicSaslSslDomainName 公网SASL_SSL连接域名
    *
    * @return $this
    */
    public function setPublicSaslSslDomainName($publicSaslSslDomainName)
    {
        $this->container['publicSaslSslDomainName'] = $publicSaslSslDomainName;
        return $this;
    }

    /**
    * Gets publicSaslPlaintextEnable
    *  实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    *
    * @return bool|null
    */
    public function getPublicSaslPlaintextEnable()
    {
        return $this->container['publicSaslPlaintextEnable'];
    }

    /**
    * Sets publicSaslPlaintextEnable
    *
    * @param bool|null $publicSaslPlaintextEnable 实例是否支持公网SASL_PLAINTEXT访问接入方式。  - true，实例支持公网SASL_PLAINTEXT访问方式接入方式。  - false，实例不支持公网SASL_PLAINTEXT访问接入方式。
    *
    * @return $this
    */
    public function setPublicSaslPlaintextEnable($publicSaslPlaintextEnable)
    {
        $this->container['publicSaslPlaintextEnable'] = $publicSaslPlaintextEnable;
        return $this;
    }

    /**
    * Gets publicSaslPlaintextAddress
    *  kafka公网SASL_PLAINTEXT接入方式连接地址。
    *
    * @return string|null
    */
    public function getPublicSaslPlaintextAddress()
    {
        return $this->container['publicSaslPlaintextAddress'];
    }

    /**
    * Sets publicSaslPlaintextAddress
    *
    * @param string|null $publicSaslPlaintextAddress kafka公网SASL_PLAINTEXT接入方式连接地址。
    *
    * @return $this
    */
    public function setPublicSaslPlaintextAddress($publicSaslPlaintextAddress)
    {
        $this->container['publicSaslPlaintextAddress'] = $publicSaslPlaintextAddress;
        return $this;
    }

    /**
    * Gets publicSaslPlaintextDomainName
    *  公网SASL_PLAINTEXT连接域名
    *
    * @return string|null
    */
    public function getPublicSaslPlaintextDomainName()
    {
        return $this->container['publicSaslPlaintextDomainName'];
    }

    /**
    * Sets publicSaslPlaintextDomainName
    *
    * @param string|null $publicSaslPlaintextDomainName 公网SASL_PLAINTEXT连接域名
    *
    * @return $this
    */
    public function setPublicSaslPlaintextDomainName($publicSaslPlaintextDomainName)
    {
        $this->container['publicSaslPlaintextDomainName'] = $publicSaslPlaintextDomainName;
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

