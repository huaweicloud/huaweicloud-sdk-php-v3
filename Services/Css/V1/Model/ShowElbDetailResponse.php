<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowElbDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowElbDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverCertName  服务器证书名称。
    * serverCertId  服务器证书ID。
    * cacertName  ca证书名称。
    * cacertId  ca证书ID。
    * elbEnable  是否开启elb。 - true: 打开elb - false： 关闭elb
    * authenticationType  认证方式。
    * loadBalancer  loadBalancer
    * listener  listener
    * healthmonitors  健康检查结果集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverCertName' => 'string',
            'serverCertId' => 'string',
            'cacertName' => 'string',
            'cacertId' => 'string',
            'elbEnable' => 'bool',
            'authenticationType' => 'string',
            'loadBalancer' => '\HuaweiCloud\SDK\Css\V1\Model\LoadBalancer',
            'listener' => '\HuaweiCloud\SDK\Css\V1\Model\Elbv3Listener',
            'healthmonitors' => '\HuaweiCloud\SDK\Css\V1\Model\Member[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverCertName  服务器证书名称。
    * serverCertId  服务器证书ID。
    * cacertName  ca证书名称。
    * cacertId  ca证书ID。
    * elbEnable  是否开启elb。 - true: 打开elb - false： 关闭elb
    * authenticationType  认证方式。
    * loadBalancer  loadBalancer
    * listener  listener
    * healthmonitors  健康检查结果集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverCertName' => null,
        'serverCertId' => null,
        'cacertName' => null,
        'cacertId' => null,
        'elbEnable' => null,
        'authenticationType' => null,
        'loadBalancer' => null,
        'listener' => null,
        'healthmonitors' => null
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
    * serverCertName  服务器证书名称。
    * serverCertId  服务器证书ID。
    * cacertName  ca证书名称。
    * cacertId  ca证书ID。
    * elbEnable  是否开启elb。 - true: 打开elb - false： 关闭elb
    * authenticationType  认证方式。
    * loadBalancer  loadBalancer
    * listener  listener
    * healthmonitors  健康检查结果集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverCertName' => 'serverCertName',
            'serverCertId' => 'serverCertId',
            'cacertName' => 'cacertName',
            'cacertId' => 'cacertId',
            'elbEnable' => 'elb_enable',
            'authenticationType' => 'authentication_type',
            'loadBalancer' => 'loadBalancer',
            'listener' => 'listener',
            'healthmonitors' => 'healthmonitors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverCertName  服务器证书名称。
    * serverCertId  服务器证书ID。
    * cacertName  ca证书名称。
    * cacertId  ca证书ID。
    * elbEnable  是否开启elb。 - true: 打开elb - false： 关闭elb
    * authenticationType  认证方式。
    * loadBalancer  loadBalancer
    * listener  listener
    * healthmonitors  健康检查结果集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverCertName' => 'setServerCertName',
            'serverCertId' => 'setServerCertId',
            'cacertName' => 'setCacertName',
            'cacertId' => 'setCacertId',
            'elbEnable' => 'setElbEnable',
            'authenticationType' => 'setAuthenticationType',
            'loadBalancer' => 'setLoadBalancer',
            'listener' => 'setListener',
            'healthmonitors' => 'setHealthmonitors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverCertName  服务器证书名称。
    * serverCertId  服务器证书ID。
    * cacertName  ca证书名称。
    * cacertId  ca证书ID。
    * elbEnable  是否开启elb。 - true: 打开elb - false： 关闭elb
    * authenticationType  认证方式。
    * loadBalancer  loadBalancer
    * listener  listener
    * healthmonitors  健康检查结果集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverCertName' => 'getServerCertName',
            'serverCertId' => 'getServerCertId',
            'cacertName' => 'getCacertName',
            'cacertId' => 'getCacertId',
            'elbEnable' => 'getElbEnable',
            'authenticationType' => 'getAuthenticationType',
            'loadBalancer' => 'getLoadBalancer',
            'listener' => 'getListener',
            'healthmonitors' => 'getHealthmonitors'
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
        $this->container['serverCertName'] = isset($data['serverCertName']) ? $data['serverCertName'] : null;
        $this->container['serverCertId'] = isset($data['serverCertId']) ? $data['serverCertId'] : null;
        $this->container['cacertName'] = isset($data['cacertName']) ? $data['cacertName'] : null;
        $this->container['cacertId'] = isset($data['cacertId']) ? $data['cacertId'] : null;
        $this->container['elbEnable'] = isset($data['elbEnable']) ? $data['elbEnable'] : null;
        $this->container['authenticationType'] = isset($data['authenticationType']) ? $data['authenticationType'] : null;
        $this->container['loadBalancer'] = isset($data['loadBalancer']) ? $data['loadBalancer'] : null;
        $this->container['listener'] = isset($data['listener']) ? $data['listener'] : null;
        $this->container['healthmonitors'] = isset($data['healthmonitors']) ? $data['healthmonitors'] : null;
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
    * Gets serverCertName
    *  服务器证书名称。
    *
    * @return string|null
    */
    public function getServerCertName()
    {
        return $this->container['serverCertName'];
    }

    /**
    * Sets serverCertName
    *
    * @param string|null $serverCertName 服务器证书名称。
    *
    * @return $this
    */
    public function setServerCertName($serverCertName)
    {
        $this->container['serverCertName'] = $serverCertName;
        return $this;
    }

    /**
    * Gets serverCertId
    *  服务器证书ID。
    *
    * @return string|null
    */
    public function getServerCertId()
    {
        return $this->container['serverCertId'];
    }

    /**
    * Sets serverCertId
    *
    * @param string|null $serverCertId 服务器证书ID。
    *
    * @return $this
    */
    public function setServerCertId($serverCertId)
    {
        $this->container['serverCertId'] = $serverCertId;
        return $this;
    }

    /**
    * Gets cacertName
    *  ca证书名称。
    *
    * @return string|null
    */
    public function getCacertName()
    {
        return $this->container['cacertName'];
    }

    /**
    * Sets cacertName
    *
    * @param string|null $cacertName ca证书名称。
    *
    * @return $this
    */
    public function setCacertName($cacertName)
    {
        $this->container['cacertName'] = $cacertName;
        return $this;
    }

    /**
    * Gets cacertId
    *  ca证书ID。
    *
    * @return string|null
    */
    public function getCacertId()
    {
        return $this->container['cacertId'];
    }

    /**
    * Sets cacertId
    *
    * @param string|null $cacertId ca证书ID。
    *
    * @return $this
    */
    public function setCacertId($cacertId)
    {
        $this->container['cacertId'] = $cacertId;
        return $this;
    }

    /**
    * Gets elbEnable
    *  是否开启elb。 - true: 打开elb - false： 关闭elb
    *
    * @return bool|null
    */
    public function getElbEnable()
    {
        return $this->container['elbEnable'];
    }

    /**
    * Sets elbEnable
    *
    * @param bool|null $elbEnable 是否开启elb。 - true: 打开elb - false： 关闭elb
    *
    * @return $this
    */
    public function setElbEnable($elbEnable)
    {
        $this->container['elbEnable'] = $elbEnable;
        return $this;
    }

    /**
    * Gets authenticationType
    *  认证方式。
    *
    * @return string|null
    */
    public function getAuthenticationType()
    {
        return $this->container['authenticationType'];
    }

    /**
    * Sets authenticationType
    *
    * @param string|null $authenticationType 认证方式。
    *
    * @return $this
    */
    public function setAuthenticationType($authenticationType)
    {
        $this->container['authenticationType'] = $authenticationType;
        return $this;
    }

    /**
    * Gets loadBalancer
    *  loadBalancer
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\LoadBalancer|null
    */
    public function getLoadBalancer()
    {
        return $this->container['loadBalancer'];
    }

    /**
    * Sets loadBalancer
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\LoadBalancer|null $loadBalancer loadBalancer
    *
    * @return $this
    */
    public function setLoadBalancer($loadBalancer)
    {
        $this->container['loadBalancer'] = $loadBalancer;
        return $this;
    }

    /**
    * Gets listener
    *  listener
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\Elbv3Listener|null
    */
    public function getListener()
    {
        return $this->container['listener'];
    }

    /**
    * Sets listener
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\Elbv3Listener|null $listener listener
    *
    * @return $this
    */
    public function setListener($listener)
    {
        $this->container['listener'] = $listener;
        return $this;
    }

    /**
    * Gets healthmonitors
    *  健康检查结果集合。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\Member[]|null
    */
    public function getHealthmonitors()
    {
        return $this->container['healthmonitors'];
    }

    /**
    * Sets healthmonitors
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\Member[]|null $healthmonitors 健康检查结果集合。
    *
    * @return $this
    */
    public function setHealthmonitors($healthmonitors)
    {
        $this->container['healthmonitors'] = $healthmonitors;
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

