<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MqttConnectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MqttConnectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverAddress  采用cleint方式连接时，mqtt服务器地址
    * clientId  mqtt连接时，client_id
    * authType  鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    * privateKey  证书秘钥
    * certificate  证书
    * userName  用户名
    * password  密码
    * qos  服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverAddress' => 'string',
            'clientId' => 'string',
            'authType' => 'string',
            'privateKey' => 'string',
            'certificate' => 'string',
            'userName' => 'string',
            'password' => 'string',
            'qos' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverAddress  采用cleint方式连接时，mqtt服务器地址
    * clientId  mqtt连接时，client_id
    * authType  鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    * privateKey  证书秘钥
    * certificate  证书
    * userName  用户名
    * password  密码
    * qos  服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverAddress' => null,
        'clientId' => null,
        'authType' => null,
        'privateKey' => null,
        'certificate' => null,
        'userName' => null,
        'password' => null,
        'qos' => null
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
    * serverAddress  采用cleint方式连接时，mqtt服务器地址
    * clientId  mqtt连接时，client_id
    * authType  鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    * privateKey  证书秘钥
    * certificate  证书
    * userName  用户名
    * password  密码
    * qos  服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverAddress' => 'server_address',
            'clientId' => 'client_id',
            'authType' => 'auth_type',
            'privateKey' => 'private_key',
            'certificate' => 'certificate',
            'userName' => 'user_name',
            'password' => 'password',
            'qos' => 'qos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverAddress  采用cleint方式连接时，mqtt服务器地址
    * clientId  mqtt连接时，client_id
    * authType  鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    * privateKey  证书秘钥
    * certificate  证书
    * userName  用户名
    * password  密码
    * qos  服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @var string[]
    */
    protected static $setters = [
            'serverAddress' => 'setServerAddress',
            'clientId' => 'setClientId',
            'authType' => 'setAuthType',
            'privateKey' => 'setPrivateKey',
            'certificate' => 'setCertificate',
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'qos' => 'setQos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverAddress  采用cleint方式连接时，mqtt服务器地址
    * clientId  mqtt连接时，client_id
    * authType  鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    * privateKey  证书秘钥
    * certificate  证书
    * userName  用户名
    * password  密码
    * qos  服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @var string[]
    */
    protected static $getters = [
            'serverAddress' => 'getServerAddress',
            'clientId' => 'getClientId',
            'authType' => 'getAuthType',
            'privateKey' => 'getPrivateKey',
            'certificate' => 'getCertificate',
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'qos' => 'getQos'
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
        $this->container['serverAddress'] = isset($data['serverAddress']) ? $data['serverAddress'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['qos'] = isset($data['qos']) ? $data['qos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverAddress']) && (mb_strlen($this->container['serverAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverAddress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serverAddress']) && (mb_strlen($this->container['serverAddress']) < 4)) {
                $invalidProperties[] = "invalid value for 'serverAddress', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) < 4)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['authType']) && !preg_match("/(SECRET|CERTIFICATES)/", $this->container['authType'])) {
                $invalidProperties[] = "invalid value for 'authType', must be conform to the pattern /(SECRET|CERTIFICATES)/.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 20000)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 4)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) > 20000)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) < 4)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 256)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 4)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 256)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 4)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 4.";
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
    * Gets serverAddress
    *  采用cleint方式连接时，mqtt服务器地址
    *
    * @return string|null
    */
    public function getServerAddress()
    {
        return $this->container['serverAddress'];
    }

    /**
    * Sets serverAddress
    *
    * @param string|null $serverAddress 采用cleint方式连接时，mqtt服务器地址
    *
    * @return $this
    */
    public function setServerAddress($serverAddress)
    {
        $this->container['serverAddress'] = $serverAddress;
        return $this;
    }

    /**
    * Gets clientId
    *  mqtt连接时，client_id
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId mqtt连接时，client_id
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets authType
    *  鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 鉴权类型。支持密钥认证接入(SECRET)和证书认证接入(CERTIFICATES)两种方式。使用密钥认证接入方式(SECRET)填写user_name和user_name字段，使用证书认证接入方式(CERTIFICATES)填写privateKey和certificate字段
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets privateKey
    *  证书秘钥
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey 证书秘钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets certificate
    *  证书
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate 证书
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
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
    *  密码
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
    * @param string|null $password 密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets qos
    *  服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @return int|null
    */
    public function getQos()
    {
        return $this->container['qos'];
    }

    /**
    * Sets qos
    *
    * @param int|null $qos 服务质量,默认为0,表示最多一次的传输,1表示至少一次,2表示仅一次.
    *
    * @return $this
    */
    public function setQos($qos)
    {
        $this->container['qos'] = $qos;
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

