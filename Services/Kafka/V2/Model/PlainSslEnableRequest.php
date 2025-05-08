<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlainSslEnableRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlainSslEnableRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  需要开启或者关闭的接入方式。
    * enable  - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    * userName  首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
    * passWord  首次开启SASL时，需要输入用户名的密码。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'enable' => 'bool',
            'userName' => 'string',
            'passWord' => 'string',
            'saslEnabledMechanisms' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  需要开启或者关闭的接入方式。
    * enable  - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    * userName  首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
    * passWord  首次开启SASL时，需要输入用户名的密码。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'enable' => null,
        'userName' => null,
        'passWord' => null,
        'saslEnabledMechanisms' => null
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
    * protocol  需要开启或者关闭的接入方式。
    * enable  - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    * userName  首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
    * passWord  首次开启SASL时，需要输入用户名的密码。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'enable' => 'enable',
            'userName' => 'user_name',
            'passWord' => 'pass_word',
            'saslEnabledMechanisms' => 'sasl_enabled_mechanisms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  需要开启或者关闭的接入方式。
    * enable  - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    * userName  首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
    * passWord  首次开启SASL时，需要输入用户名的密码。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'enable' => 'setEnable',
            'userName' => 'setUserName',
            'passWord' => 'setPassWord',
            'saslEnabledMechanisms' => 'setSaslEnabledMechanisms'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  需要开启或者关闭的接入方式。
    * enable  - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    * userName  首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
    * passWord  首次开启SASL时，需要输入用户名的密码。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'enable' => 'getEnable',
            'userName' => 'getUserName',
            'passWord' => 'getPassWord',
            'saslEnabledMechanisms' => 'getSaslEnabledMechanisms'
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
    const PROTOCOL_PRIVATE_PLAIN_ENABLE = 'private_plain_enable';
    const PROTOCOL_PRIVATE_SASL_SSL_ENABLE = 'private_sasl_ssl_enable';
    const PROTOCOL_PRIVATE_SASL_PLAINTEXT_ENABLE = 'private_sasl_plaintext_enable';
    const PROTOCOL_PUBLIC_PLAIN_ENABLE = 'public_plain_enable';
    const PROTOCOL_PUBLIC_SASL_SSL_ENABLE = 'public_sasl_ssl_enable';
    const PROTOCOL_PUBLIC_SASL_PLAINTEXT_ENABLE = 'public_sasl_plaintext_enable';
    const SASL_ENABLED_MECHANISMS_SCRAM_SHA_512 = 'SCRAM-SHA-512';
    const SASL_ENABLED_MECHANISMS_PLAIN = 'PLAIN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_PRIVATE_PLAIN_ENABLE,
            self::PROTOCOL_PRIVATE_SASL_SSL_ENABLE,
            self::PROTOCOL_PRIVATE_SASL_PLAINTEXT_ENABLE,
            self::PROTOCOL_PUBLIC_PLAIN_ENABLE,
            self::PROTOCOL_PUBLIC_SASL_SSL_ENABLE,
            self::PROTOCOL_PUBLIC_SASL_PLAINTEXT_ENABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSaslEnabledMechanismsAllowableValues()
    {
        return [
            self::SASL_ENABLED_MECHANISMS_SCRAM_SHA_512,
            self::SASL_ENABLED_MECHANISMS_PLAIN,
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['passWord'] = isset($data['passWord']) ? $data['passWord'] : null;
        $this->container['saslEnabledMechanisms'] = isset($data['saslEnabledMechanisms']) ? $data['saslEnabledMechanisms'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
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
    * Gets protocol
    *  需要开启或者关闭的接入方式。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 需要开启或者关闭的接入方式。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets enable
    *  - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable - true：开启指定的接入方式。 - false：关闭指定的接入方式。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets userName
    *  首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
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
    * @param string|null $userName 首次开启SASL时，需要输入用户名。 实例创建后，关闭SASL并不会删除已经创建的用户，再次开启SASL时无需传入用户名，传入的用户名将无效。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets passWord
    *  首次开启SASL时，需要输入用户名的密码。
    *
    * @return string|null
    */
    public function getPassWord()
    {
        return $this->container['passWord'];
    }

    /**
    * Sets passWord
    *
    * @param string|null $passWord 首次开启SASL时，需要输入用户名的密码。
    *
    * @return $this
    */
    public function setPassWord($passWord)
    {
        $this->container['passWord'] = $passWord;
        return $this;
    }

    /**
    * Gets saslEnabledMechanisms
    *  开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @return string[]|null
    */
    public function getSaslEnabledMechanisms()
    {
        return $this->container['saslEnabledMechanisms'];
    }

    /**
    * Sets saslEnabledMechanisms
    *
    * @param string[]|null $saslEnabledMechanisms 开启SASL后使用的认证机制。仅在第一次开启SASL时传入生效。生效后再次传入无效。 - PLAIN：简单的用户名密码校验。 - SCRAM-SHA-512：用户凭证校验，安全性比PLAIN机制更高。
    *
    * @return $this
    */
    public function setSaslEnabledMechanisms($saslEnabledMechanisms)
    {
        $this->container['saslEnabledMechanisms'] = $saslEnabledMechanisms;
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

