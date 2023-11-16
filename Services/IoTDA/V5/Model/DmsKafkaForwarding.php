<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DmsKafkaForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DmsKafkaForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionName  **参数说明**：Kafka服务对应的region区域
    * projectId  **参数说明**：Kafka服务对应的projectId信息
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * username  **参数说明**：转发kafka关联的用户名信息。
    * password  **参数说明**：转发kafka关联的密码信息。
    * mechanism  **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    * securityProtocol  **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'projectId' => 'string',
            'addresses' => '\HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]',
            'topic' => 'string',
            'username' => 'string',
            'password' => 'string',
            'mechanism' => 'string',
            'securityProtocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionName  **参数说明**：Kafka服务对应的region区域
    * projectId  **参数说明**：Kafka服务对应的projectId信息
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * username  **参数说明**：转发kafka关联的用户名信息。
    * password  **参数说明**：转发kafka关联的密码信息。
    * mechanism  **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    * securityProtocol  **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'projectId' => null,
        'addresses' => null,
        'topic' => null,
        'username' => null,
        'password' => null,
        'mechanism' => null,
        'securityProtocol' => null
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
    * regionName  **参数说明**：Kafka服务对应的region区域
    * projectId  **参数说明**：Kafka服务对应的projectId信息
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * username  **参数说明**：转发kafka关联的用户名信息。
    * password  **参数说明**：转发kafka关联的密码信息。
    * mechanism  **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    * securityProtocol  **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionName' => 'region_name',
            'projectId' => 'project_id',
            'addresses' => 'addresses',
            'topic' => 'topic',
            'username' => 'username',
            'password' => 'password',
            'mechanism' => 'mechanism',
            'securityProtocol' => 'security_protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionName  **参数说明**：Kafka服务对应的region区域
    * projectId  **参数说明**：Kafka服务对应的projectId信息
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * username  **参数说明**：转发kafka关联的用户名信息。
    * password  **参数说明**：转发kafka关联的密码信息。
    * mechanism  **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    * securityProtocol  **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'projectId' => 'setProjectId',
            'addresses' => 'setAddresses',
            'topic' => 'setTopic',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'mechanism' => 'setMechanism',
            'securityProtocol' => 'setSecurityProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionName  **参数说明**：Kafka服务对应的region区域
    * projectId  **参数说明**：Kafka服务对应的projectId信息
    * addresses  **参数说明**：转发kafka消息对应的地址列表
    * topic  **参数说明**：转发kafka消息关联的topic信息。
    * username  **参数说明**：转发kafka关联的用户名信息。
    * password  **参数说明**：转发kafka关联的密码信息。
    * mechanism  **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    * securityProtocol  **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'projectId' => 'getProjectId',
            'addresses' => 'getAddresses',
            'topic' => 'getTopic',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'mechanism' => 'getMechanism',
            'securityProtocol' => 'getSecurityProtocol'
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['mechanism'] = isset($data['mechanism']) ? $data['mechanism'] : null;
        $this->container['securityProtocol'] = isset($data['securityProtocol']) ? $data['securityProtocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionName'] === null) {
            $invalidProperties[] = "'regionName' can't be null";
        }
            if ((mb_strlen($this->container['regionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['regionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 256)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topic']) < 1)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 256)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 256)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mechanism']) && !preg_match("/(PAAS|PLAIN|SCRAM-SHA-512)/", $this->container['mechanism'])) {
                $invalidProperties[] = "invalid value for 'mechanism', must be conform to the pattern /(PAAS|PLAIN|SCRAM-SHA-512)/.";
            }
            if (!is_null($this->container['securityProtocol']) && !preg_match("/(SASL_SSL|SASL_PLAINTEXT)/", $this->container['securityProtocol'])) {
                $invalidProperties[] = "invalid value for 'securityProtocol', must be conform to the pattern /(SASL_SSL|SASL_PLAINTEXT)/.";
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
    * Gets regionName
    *  **参数说明**：Kafka服务对应的region区域
    *
    * @return string
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string $regionName **参数说明**：Kafka服务对应的region区域
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数说明**：Kafka服务对应的projectId信息
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数说明**：Kafka服务对应的projectId信息
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets addresses
    *  **参数说明**：转发kafka消息对应的地址列表
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[] $addresses **参数说明**：转发kafka消息对应的地址列表
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets topic
    *  **参数说明**：转发kafka消息关联的topic信息。
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
    * @param string $topic **参数说明**：转发kafka消息关联的topic信息。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets username
    *  **参数说明**：转发kafka关联的用户名信息。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数说明**：转发kafka关联的用户名信息。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  **参数说明**：转发kafka关联的密码信息。
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
    * @param string|null $password **参数说明**：转发kafka关联的密码信息。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets mechanism
    *  **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    *
    * @return string|null
    */
    public function getMechanism()
    {
        return $this->container['mechanism'];
    }

    /**
    * Sets mechanism
    *
    * @param string|null $mechanism **参数说明**：转发kafka关联的SASL认证机制。 **取值范围**： - PAAS：明文传输，此模式下为非数据加密传输模式，数据传输不安全，建议您使用更安全的数据加密模式。 - PLAIN：SASL/PLAIN模式。需要填写对应的用户名密码信息。一种简单的用户名密码校验机制，在SASL_PLAINTEXT场景下，不建议使用。 - SCRAM-SHA-512：SASL/SCRAM-SHA-512模式。需要填写对应的用户名密码信息。采用哈希算法对用户名与密码生成凭证，进行身份校验的安全认证机制，比PLAIN机制安全性更高。
    *
    * @return $this
    */
    public function setMechanism($mechanism)
    {
        $this->container['mechanism'] = $mechanism;
        return $this;
    }

    /**
    * Gets securityProtocol
    *  **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
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
    * @param string|null $securityProtocol **参数说明**：kafka传输安全协议，此字段不填默认为SASL_SSL。当mechanism为PAAS或不填时，该字段不生效。 **取值范围**： - SASL_SSL：采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT：明文传输，支持帐号密码认证，性能更好，建议mechanism使用SCRAM-SHA-512机制。
    *
    * @return $this
    */
    public function setSecurityProtocol($securityProtocol)
    {
        $this->container['securityProtocol'] = $securityProtocol;
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

