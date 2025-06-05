<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceKafkaMQParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceKafkaMQParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addr  kafka连接地址
    * group  kafka消费组
    * instanceName  kafka实例名称
    * securityProtocol  安全协议
    * instanceId  kafka实例ID
    * topic  kafka topic名称
    * seekTo  消费点位
    * enableSaslSsl  SASL_SSL是否开启
    * saslMechanism  SASL认证机制
    * sslCertificateUrl  SASL证书地址，配置的obs地址
    * sslCertificatePwd  SASL证书密码
    * userName  用户名
    * password  用户密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addr' => 'string',
            'group' => 'string',
            'instanceName' => 'string',
            'securityProtocol' => 'string',
            'instanceId' => 'string',
            'topic' => 'string',
            'seekTo' => 'string',
            'enableSaslSsl' => 'bool',
            'saslMechanism' => 'string',
            'sslCertificateUrl' => 'string',
            'sslCertificatePwd' => 'string',
            'userName' => 'string',
            'password' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addr  kafka连接地址
    * group  kafka消费组
    * instanceName  kafka实例名称
    * securityProtocol  安全协议
    * instanceId  kafka实例ID
    * topic  kafka topic名称
    * seekTo  消费点位
    * enableSaslSsl  SASL_SSL是否开启
    * saslMechanism  SASL认证机制
    * sslCertificateUrl  SASL证书地址，配置的obs地址
    * sslCertificatePwd  SASL证书密码
    * userName  用户名
    * password  用户密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addr' => null,
        'group' => null,
        'instanceName' => null,
        'securityProtocol' => null,
        'instanceId' => null,
        'topic' => null,
        'seekTo' => null,
        'enableSaslSsl' => null,
        'saslMechanism' => null,
        'sslCertificateUrl' => null,
        'sslCertificatePwd' => null,
        'userName' => null,
        'password' => null
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
    * addr  kafka连接地址
    * group  kafka消费组
    * instanceName  kafka实例名称
    * securityProtocol  安全协议
    * instanceId  kafka实例ID
    * topic  kafka topic名称
    * seekTo  消费点位
    * enableSaslSsl  SASL_SSL是否开启
    * saslMechanism  SASL认证机制
    * sslCertificateUrl  SASL证书地址，配置的obs地址
    * sslCertificatePwd  SASL证书密码
    * userName  用户名
    * password  用户密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addr' => 'addr',
            'group' => 'group',
            'instanceName' => 'instance_name',
            'securityProtocol' => 'security_protocol',
            'instanceId' => 'instance_id',
            'topic' => 'topic',
            'seekTo' => 'seek_to',
            'enableSaslSsl' => 'enable_sasl_ssl',
            'saslMechanism' => 'sasl_mechanism',
            'sslCertificateUrl' => 'ssl_certificate_url',
            'sslCertificatePwd' => 'ssl_certificate_pwd',
            'userName' => 'user_name',
            'password' => 'password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addr  kafka连接地址
    * group  kafka消费组
    * instanceName  kafka实例名称
    * securityProtocol  安全协议
    * instanceId  kafka实例ID
    * topic  kafka topic名称
    * seekTo  消费点位
    * enableSaslSsl  SASL_SSL是否开启
    * saslMechanism  SASL认证机制
    * sslCertificateUrl  SASL证书地址，配置的obs地址
    * sslCertificatePwd  SASL证书密码
    * userName  用户名
    * password  用户密码
    *
    * @var string[]
    */
    protected static $setters = [
            'addr' => 'setAddr',
            'group' => 'setGroup',
            'instanceName' => 'setInstanceName',
            'securityProtocol' => 'setSecurityProtocol',
            'instanceId' => 'setInstanceId',
            'topic' => 'setTopic',
            'seekTo' => 'setSeekTo',
            'enableSaslSsl' => 'setEnableSaslSsl',
            'saslMechanism' => 'setSaslMechanism',
            'sslCertificateUrl' => 'setSslCertificateUrl',
            'sslCertificatePwd' => 'setSslCertificatePwd',
            'userName' => 'setUserName',
            'password' => 'setPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addr  kafka连接地址
    * group  kafka消费组
    * instanceName  kafka实例名称
    * securityProtocol  安全协议
    * instanceId  kafka实例ID
    * topic  kafka topic名称
    * seekTo  消费点位
    * enableSaslSsl  SASL_SSL是否开启
    * saslMechanism  SASL认证机制
    * sslCertificateUrl  SASL证书地址，配置的obs地址
    * sslCertificatePwd  SASL证书密码
    * userName  用户名
    * password  用户密码
    *
    * @var string[]
    */
    protected static $getters = [
            'addr' => 'getAddr',
            'group' => 'getGroup',
            'instanceName' => 'getInstanceName',
            'securityProtocol' => 'getSecurityProtocol',
            'instanceId' => 'getInstanceId',
            'topic' => 'getTopic',
            'seekTo' => 'getSeekTo',
            'enableSaslSsl' => 'getEnableSaslSsl',
            'saslMechanism' => 'getSaslMechanism',
            'sslCertificateUrl' => 'getSslCertificateUrl',
            'sslCertificatePwd' => 'getSslCertificatePwd',
            'userName' => 'getUserName',
            'password' => 'getPassword'
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
    const SEEK_TO_LATEST = 'latest';
    const SEEK_TO_EARLIEST = 'earliest';
    const SASL_MECHANISM_SCRAM_SHA_512 = 'SCRAM-SHA-512';
    const SASL_MECHANISM_PLAIN = 'PLAIN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeekToAllowableValues()
    {
        return [
            self::SEEK_TO_LATEST,
            self::SEEK_TO_EARLIEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSaslMechanismAllowableValues()
    {
        return [
            self::SASL_MECHANISM_SCRAM_SHA_512,
            self::SASL_MECHANISM_PLAIN,
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['securityProtocol'] = isset($data['securityProtocol']) ? $data['securityProtocol'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['seekTo'] = isset($data['seekTo']) ? $data['seekTo'] : null;
        $this->container['enableSaslSsl'] = isset($data['enableSaslSsl']) ? $data['enableSaslSsl'] : null;
        $this->container['saslMechanism'] = isset($data['saslMechanism']) ? $data['saslMechanism'] : null;
        $this->container['sslCertificateUrl'] = isset($data['sslCertificateUrl']) ? $data['sslCertificateUrl'] : null;
        $this->container['sslCertificatePwd'] = isset($data['sslCertificatePwd']) ? $data['sslCertificatePwd'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
            if ((mb_strlen($this->container['group']) > 256)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['group']) < 1)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 4)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 200)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 200.";
            }
            if ((mb_strlen($this->container['topic']) < 3)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getSeekToAllowableValues();
                if (!is_null($this->container['seekTo']) && !in_array($this->container['seekTo'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'seekTo', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSaslMechanismAllowableValues();
                if (!is_null($this->container['saslMechanism']) && !in_array($this->container['saslMechanism'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'saslMechanism', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sslCertificateUrl']) && (mb_strlen($this->container['sslCertificateUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'sslCertificateUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['sslCertificateUrl']) && (mb_strlen($this->container['sslCertificateUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'sslCertificateUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sslCertificatePwd']) && (mb_strlen($this->container['sslCertificatePwd']) > 256)) {
                $invalidProperties[] = "invalid value for 'sslCertificatePwd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sslCertificatePwd']) && (mb_strlen($this->container['sslCertificatePwd']) < 1)) {
                $invalidProperties[] = "invalid value for 'sslCertificatePwd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 256)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 256)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
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
    * Gets addr
    *  kafka连接地址
    *
    * @return string|null
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string|null $addr kafka连接地址
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets group
    *  kafka消费组
    *
    * @return string
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string $group kafka消费组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets instanceName
    *  kafka实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName kafka实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets securityProtocol
    *  安全协议
    *
    * @return string|null
    */
    public function getSecurityProtocol()
    {
        return $this->container['securityProtocol'];
    }

    /**
    * Sets securityProtocol
    *
    * @param string|null $securityProtocol 安全协议
    *
    * @return $this
    */
    public function setSecurityProtocol($securityProtocol)
    {
        $this->container['securityProtocol'] = $securityProtocol;
        return $this;
    }

    /**
    * Gets instanceId
    *  kafka实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId kafka实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets topic
    *  kafka topic名称
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic kafka topic名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets seekTo
    *  消费点位
    *
    * @return string|null
    */
    public function getSeekTo()
    {
        return $this->container['seekTo'];
    }

    /**
    * Sets seekTo
    *
    * @param string|null $seekTo 消费点位
    *
    * @return $this
    */
    public function setSeekTo($seekTo)
    {
        $this->container['seekTo'] = $seekTo;
        return $this;
    }

    /**
    * Gets enableSaslSsl
    *  SASL_SSL是否开启
    *
    * @return bool|null
    */
    public function getEnableSaslSsl()
    {
        return $this->container['enableSaslSsl'];
    }

    /**
    * Sets enableSaslSsl
    *
    * @param bool|null $enableSaslSsl SASL_SSL是否开启
    *
    * @return $this
    */
    public function setEnableSaslSsl($enableSaslSsl)
    {
        $this->container['enableSaslSsl'] = $enableSaslSsl;
        return $this;
    }

    /**
    * Gets saslMechanism
    *  SASL认证机制
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
    * @param string|null $saslMechanism SASL认证机制
    *
    * @return $this
    */
    public function setSaslMechanism($saslMechanism)
    {
        $this->container['saslMechanism'] = $saslMechanism;
        return $this;
    }

    /**
    * Gets sslCertificateUrl
    *  SASL证书地址，配置的obs地址
    *
    * @return string|null
    */
    public function getSslCertificateUrl()
    {
        return $this->container['sslCertificateUrl'];
    }

    /**
    * Sets sslCertificateUrl
    *
    * @param string|null $sslCertificateUrl SASL证书地址，配置的obs地址
    *
    * @return $this
    */
    public function setSslCertificateUrl($sslCertificateUrl)
    {
        $this->container['sslCertificateUrl'] = $sslCertificateUrl;
        return $this;
    }

    /**
    * Gets sslCertificatePwd
    *  SASL证书密码
    *
    * @return string|null
    */
    public function getSslCertificatePwd()
    {
        return $this->container['sslCertificatePwd'];
    }

    /**
    * Sets sslCertificatePwd
    *
    * @param string|null $sslCertificatePwd SASL证书密码
    *
    * @return $this
    */
    public function setSslCertificatePwd($sslCertificatePwd)
    {
        $this->container['sslCertificatePwd'] = $sslCertificatePwd;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets password
    *  用户密码
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 用户密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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

