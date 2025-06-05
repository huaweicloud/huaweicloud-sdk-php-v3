<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaConnectionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaConnectionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  kafka实例id。
    * addr  kafka连接地址。
    * securityProtocol  安全协议。
    * enableSaslSsl  kafka实例是否开启了SASL_SSL。
    * userName  kafka实例用户名。实例开启了SASL_SSL时必填
    * password  kafka实例密码。实例开启了SASL_SSL时必填
    * acks  收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'addr' => 'string',
            'securityProtocol' => 'string',
            'enableSaslSsl' => 'bool',
            'userName' => 'string',
            'password' => 'string',
            'acks' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  kafka实例id。
    * addr  kafka连接地址。
    * securityProtocol  安全协议。
    * enableSaslSsl  kafka实例是否开启了SASL_SSL。
    * userName  kafka实例用户名。实例开启了SASL_SSL时必填
    * password  kafka实例密码。实例开启了SASL_SSL时必填
    * acks  收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'addr' => null,
        'securityProtocol' => null,
        'enableSaslSsl' => null,
        'userName' => null,
        'password' => null,
        'acks' => null
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
    * instanceId  kafka实例id。
    * addr  kafka连接地址。
    * securityProtocol  安全协议。
    * enableSaslSsl  kafka实例是否开启了SASL_SSL。
    * userName  kafka实例用户名。实例开启了SASL_SSL时必填
    * password  kafka实例密码。实例开启了SASL_SSL时必填
    * acks  收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'addr' => 'addr',
            'securityProtocol' => 'security_protocol',
            'enableSaslSsl' => 'enable_sasl_ssl',
            'userName' => 'user_name',
            'password' => 'password',
            'acks' => 'acks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  kafka实例id。
    * addr  kafka连接地址。
    * securityProtocol  安全协议。
    * enableSaslSsl  kafka实例是否开启了SASL_SSL。
    * userName  kafka实例用户名。实例开启了SASL_SSL时必填
    * password  kafka实例密码。实例开启了SASL_SSL时必填
    * acks  收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'addr' => 'setAddr',
            'securityProtocol' => 'setSecurityProtocol',
            'enableSaslSsl' => 'setEnableSaslSsl',
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'acks' => 'setAcks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  kafka实例id。
    * addr  kafka连接地址。
    * securityProtocol  安全协议。
    * enableSaslSsl  kafka实例是否开启了SASL_SSL。
    * userName  kafka实例用户名。实例开启了SASL_SSL时必填
    * password  kafka实例密码。实例开启了SASL_SSL时必填
    * acks  收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'addr' => 'getAddr',
            'securityProtocol' => 'getSecurityProtocol',
            'enableSaslSsl' => 'getEnableSaslSsl',
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'acks' => 'getAcks'
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
    const ACKS__0 = '0';
    const ACKS__1 = '1';
    const ACKS_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAcksAllowableValues()
    {
        return [
            self::ACKS__0,
            self::ACKS__1,
            self::ACKS_ALL,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['securityProtocol'] = isset($data['securityProtocol']) ? $data['securityProtocol'] : null;
        $this->container['enableSaslSsl'] = isset($data['enableSaslSsl']) ? $data['enableSaslSsl'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['acks'] = isset($data['acks']) ? $data['acks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
        if ($this->container['enableSaslSsl'] === null) {
            $invalidProperties[] = "'enableSaslSsl' can't be null";
        }
            $allowedValues = $this->getAcksAllowableValues();
                if (!is_null($this->container['acks']) && !in_array($this->container['acks'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'acks', must be one of '%s'",
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
    * Gets instanceId
    *  kafka实例id。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId kafka实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets addr
    *  kafka连接地址。
    *
    * @return string
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string $addr kafka连接地址。
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets securityProtocol
    *  安全协议。
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
    * @param string|null $securityProtocol 安全协议。
    *
    * @return $this
    */
    public function setSecurityProtocol($securityProtocol)
    {
        $this->container['securityProtocol'] = $securityProtocol;
        return $this;
    }

    /**
    * Gets enableSaslSsl
    *  kafka实例是否开启了SASL_SSL。
    *
    * @return bool
    */
    public function getEnableSaslSsl()
    {
        return $this->container['enableSaslSsl'];
    }

    /**
    * Sets enableSaslSsl
    *
    * @param bool $enableSaslSsl kafka实例是否开启了SASL_SSL。
    *
    * @return $this
    */
    public function setEnableSaslSsl($enableSaslSsl)
    {
        $this->container['enableSaslSsl'] = $enableSaslSsl;
        return $this;
    }

    /**
    * Gets userName
    *  kafka实例用户名。实例开启了SASL_SSL时必填
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
    * @param string|null $userName kafka实例用户名。实例开启了SASL_SSL时必填
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
    *  kafka实例密码。实例开启了SASL_SSL时必填
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
    * @param string|null $password kafka实例密码。实例开启了SASL_SSL时必填
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets acks
    *  收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @return string|null
    */
    public function getAcks()
    {
        return $this->container['acks'];
    }

    /**
    * Sets acks
    *
    * @param string|null $acks 收到Server端确认信号个数，表示procuder需要收到多少个这样的确认信号，算消息发送成功。acks参数代表了数据备份的可用性。支持选项： acks=0：表示producer不需要等待任何确认收到的信息，副本将立即加到socket buffer并认为已经发送。没有任何保障可以保证此种情况下server已经成功接收数据，同时重试配置不会发生作用（因为客户端不知道是否失败）回馈的offset会总是设置为-1。 acks=1：这意味着至少要等待leader已经成功将数据写入本地log，但是并没有等待所有follower是否成功写入。如果follower没有成功备份数据，而此时leader又无法提供服务，则消息会丢失。 acks=all：这意味着leader需要等待ISR中所有备份都成功写入日志，只有任何一个备份存活，数据都不会丢失。min.insync.replicas指定必须确认写入才能被认为成功的副本的最小数量。
    *
    * @return $this
    */
    public function setAcks($acks)
    {
        $this->container['acks'] = $acks;
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

