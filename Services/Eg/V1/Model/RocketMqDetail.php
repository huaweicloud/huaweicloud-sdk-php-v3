<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RocketMqDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RocketMqDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  RocketMQ实例ID
    * group  消费组
    * topic  Topic
    * accessKey  用户名
    * secretKey  密钥
    * vpcId  虚拟私有云
    * subnetId  子网
    * namesrvAddress  连接地址
    * sslEnable  SSL
    * enableAcl  ACL访问控制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'group' => 'string',
            'topic' => 'string',
            'accessKey' => 'string',
            'secretKey' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'namesrvAddress' => 'string',
            'sslEnable' => 'bool',
            'enableAcl' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  RocketMQ实例ID
    * group  消费组
    * topic  Topic
    * accessKey  用户名
    * secretKey  密钥
    * vpcId  虚拟私有云
    * subnetId  子网
    * namesrvAddress  连接地址
    * sslEnable  SSL
    * enableAcl  ACL访问控制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'group' => null,
        'topic' => null,
        'accessKey' => null,
        'secretKey' => null,
        'vpcId' => null,
        'subnetId' => null,
        'namesrvAddress' => null,
        'sslEnable' => null,
        'enableAcl' => null
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
    * instanceId  RocketMQ实例ID
    * group  消费组
    * topic  Topic
    * accessKey  用户名
    * secretKey  密钥
    * vpcId  虚拟私有云
    * subnetId  子网
    * namesrvAddress  连接地址
    * sslEnable  SSL
    * enableAcl  ACL访问控制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'group' => 'group',
            'topic' => 'topic',
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'namesrvAddress' => 'namesrv_address',
            'sslEnable' => 'ssl_enable',
            'enableAcl' => 'enable_acl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  RocketMQ实例ID
    * group  消费组
    * topic  Topic
    * accessKey  用户名
    * secretKey  密钥
    * vpcId  虚拟私有云
    * subnetId  子网
    * namesrvAddress  连接地址
    * sslEnable  SSL
    * enableAcl  ACL访问控制
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'group' => 'setGroup',
            'topic' => 'setTopic',
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'namesrvAddress' => 'setNamesrvAddress',
            'sslEnable' => 'setSslEnable',
            'enableAcl' => 'setEnableAcl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  RocketMQ实例ID
    * group  消费组
    * topic  Topic
    * accessKey  用户名
    * secretKey  密钥
    * vpcId  虚拟私有云
    * subnetId  子网
    * namesrvAddress  连接地址
    * sslEnable  SSL
    * enableAcl  ACL访问控制
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'group' => 'getGroup',
            'topic' => 'getTopic',
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'namesrvAddress' => 'getNamesrvAddress',
            'sslEnable' => 'getSslEnable',
            'enableAcl' => 'getEnableAcl'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['namesrvAddress'] = isset($data['namesrvAddress']) ? $data['namesrvAddress'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
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
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['accessKey'] === null) {
            $invalidProperties[] = "'accessKey' can't be null";
        }
        if ($this->container['secretKey'] === null) {
            $invalidProperties[] = "'secretKey' can't be null";
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
    *  RocketMQ实例ID
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
    * @param string|null $instanceId RocketMQ实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets group
    *  消费组
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
    * @param string $group 消费组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets topic
    *  Topic
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
    * @param string $topic Topic
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets accessKey
    *  用户名
    *
    * @return string
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string $accessKey 用户名
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets secretKey
    *  密钥
    *
    * @return string
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string $secretKey 密钥
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets namesrvAddress
    *  连接地址
    *
    * @return string|null
    */
    public function getNamesrvAddress()
    {
        return $this->container['namesrvAddress'];
    }

    /**
    * Sets namesrvAddress
    *
    * @param string|null $namesrvAddress 连接地址
    *
    * @return $this
    */
    public function setNamesrvAddress($namesrvAddress)
    {
        $this->container['namesrvAddress'] = $namesrvAddress;
        return $this;
    }

    /**
    * Gets sslEnable
    *  SSL
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable SSL
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets enableAcl
    *  ACL访问控制
    *
    * @return bool|null
    */
    public function getEnableAcl()
    {
        return $this->container['enableAcl'];
    }

    /**
    * Sets enableAcl
    *
    * @param bool|null $enableAcl ACL访问控制
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
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

