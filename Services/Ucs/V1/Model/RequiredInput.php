<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequiredInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequiredInput';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  用户名
    * master1  控制节点1IP地址
    * master2  控制节点2IP地址
    * master3  控制节点3IP地址
    * accessExternalLoadBalance  是否启用外部负载均衡器
    * ciliumIpv4PoolCidr  Cilium网络组件的IPv4地址池CIDR
    * networkCidr  容器网络的CIDR范围
    * dnsServerIp  DNS服务器IP地址
    * ntpServerIp  NTP服务器IP地址
    * iamDomainId  IAM域ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'master1' => 'string',
            'master2' => 'string',
            'master3' => 'string',
            'accessExternalLoadBalance' => 'bool',
            'ciliumIpv4PoolCidr' => 'string',
            'networkCidr' => 'string',
            'dnsServerIp' => 'string',
            'ntpServerIp' => 'string',
            'iamDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  用户名
    * master1  控制节点1IP地址
    * master2  控制节点2IP地址
    * master3  控制节点3IP地址
    * accessExternalLoadBalance  是否启用外部负载均衡器
    * ciliumIpv4PoolCidr  Cilium网络组件的IPv4地址池CIDR
    * networkCidr  容器网络的CIDR范围
    * dnsServerIp  DNS服务器IP地址
    * ntpServerIp  NTP服务器IP地址
    * iamDomainId  IAM域ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'master1' => null,
        'master2' => null,
        'master3' => null,
        'accessExternalLoadBalance' => null,
        'ciliumIpv4PoolCidr' => null,
        'networkCidr' => null,
        'dnsServerIp' => null,
        'ntpServerIp' => null,
        'iamDomainId' => null
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
    * username  用户名
    * master1  控制节点1IP地址
    * master2  控制节点2IP地址
    * master3  控制节点3IP地址
    * accessExternalLoadBalance  是否启用外部负载均衡器
    * ciliumIpv4PoolCidr  Cilium网络组件的IPv4地址池CIDR
    * networkCidr  容器网络的CIDR范围
    * dnsServerIp  DNS服务器IP地址
    * ntpServerIp  NTP服务器IP地址
    * iamDomainId  IAM域ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'USERNAME',
            'master1' => 'MASTER-1',
            'master2' => 'MASTER-2',
            'master3' => 'MASTER-3',
            'accessExternalLoadBalance' => 'ACCESS_EXTERNAL_LOAD_BALANCE',
            'ciliumIpv4PoolCidr' => 'CILIUM_IPV4POOL_CIDR',
            'networkCidr' => 'NETWORK_CIDR',
            'dnsServerIp' => 'DNS_SERVER_IP',
            'ntpServerIp' => 'NTP_SERVER_IP',
            'iamDomainId' => 'IAM_DOMAIN_ID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  用户名
    * master1  控制节点1IP地址
    * master2  控制节点2IP地址
    * master3  控制节点3IP地址
    * accessExternalLoadBalance  是否启用外部负载均衡器
    * ciliumIpv4PoolCidr  Cilium网络组件的IPv4地址池CIDR
    * networkCidr  容器网络的CIDR范围
    * dnsServerIp  DNS服务器IP地址
    * ntpServerIp  NTP服务器IP地址
    * iamDomainId  IAM域ID
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'master1' => 'setMaster1',
            'master2' => 'setMaster2',
            'master3' => 'setMaster3',
            'accessExternalLoadBalance' => 'setAccessExternalLoadBalance',
            'ciliumIpv4PoolCidr' => 'setCiliumIpv4PoolCidr',
            'networkCidr' => 'setNetworkCidr',
            'dnsServerIp' => 'setDnsServerIp',
            'ntpServerIp' => 'setNtpServerIp',
            'iamDomainId' => 'setIamDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  用户名
    * master1  控制节点1IP地址
    * master2  控制节点2IP地址
    * master3  控制节点3IP地址
    * accessExternalLoadBalance  是否启用外部负载均衡器
    * ciliumIpv4PoolCidr  Cilium网络组件的IPv4地址池CIDR
    * networkCidr  容器网络的CIDR范围
    * dnsServerIp  DNS服务器IP地址
    * ntpServerIp  NTP服务器IP地址
    * iamDomainId  IAM域ID
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'master1' => 'getMaster1',
            'master2' => 'getMaster2',
            'master3' => 'getMaster3',
            'accessExternalLoadBalance' => 'getAccessExternalLoadBalance',
            'ciliumIpv4PoolCidr' => 'getCiliumIpv4PoolCidr',
            'networkCidr' => 'getNetworkCidr',
            'dnsServerIp' => 'getDnsServerIp',
            'ntpServerIp' => 'getNtpServerIp',
            'iamDomainId' => 'getIamDomainId'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['master1'] = isset($data['master1']) ? $data['master1'] : null;
        $this->container['master2'] = isset($data['master2']) ? $data['master2'] : null;
        $this->container['master3'] = isset($data['master3']) ? $data['master3'] : null;
        $this->container['accessExternalLoadBalance'] = isset($data['accessExternalLoadBalance']) ? $data['accessExternalLoadBalance'] : null;
        $this->container['ciliumIpv4PoolCidr'] = isset($data['ciliumIpv4PoolCidr']) ? $data['ciliumIpv4PoolCidr'] : null;
        $this->container['networkCidr'] = isset($data['networkCidr']) ? $data['networkCidr'] : null;
        $this->container['dnsServerIp'] = isset($data['dnsServerIp']) ? $data['dnsServerIp'] : null;
        $this->container['ntpServerIp'] = isset($data['ntpServerIp']) ? $data['ntpServerIp'] : null;
        $this->container['iamDomainId'] = isset($data['iamDomainId']) ? $data['iamDomainId'] : null;
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
    * Gets username
    *  用户名
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
    * @param string|null $username 用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets master1
    *  控制节点1IP地址
    *
    * @return string|null
    */
    public function getMaster1()
    {
        return $this->container['master1'];
    }

    /**
    * Sets master1
    *
    * @param string|null $master1 控制节点1IP地址
    *
    * @return $this
    */
    public function setMaster1($master1)
    {
        $this->container['master1'] = $master1;
        return $this;
    }

    /**
    * Gets master2
    *  控制节点2IP地址
    *
    * @return string|null
    */
    public function getMaster2()
    {
        return $this->container['master2'];
    }

    /**
    * Sets master2
    *
    * @param string|null $master2 控制节点2IP地址
    *
    * @return $this
    */
    public function setMaster2($master2)
    {
        $this->container['master2'] = $master2;
        return $this;
    }

    /**
    * Gets master3
    *  控制节点3IP地址
    *
    * @return string|null
    */
    public function getMaster3()
    {
        return $this->container['master3'];
    }

    /**
    * Sets master3
    *
    * @param string|null $master3 控制节点3IP地址
    *
    * @return $this
    */
    public function setMaster3($master3)
    {
        $this->container['master3'] = $master3;
        return $this;
    }

    /**
    * Gets accessExternalLoadBalance
    *  是否启用外部负载均衡器
    *
    * @return bool|null
    */
    public function getAccessExternalLoadBalance()
    {
        return $this->container['accessExternalLoadBalance'];
    }

    /**
    * Sets accessExternalLoadBalance
    *
    * @param bool|null $accessExternalLoadBalance 是否启用外部负载均衡器
    *
    * @return $this
    */
    public function setAccessExternalLoadBalance($accessExternalLoadBalance)
    {
        $this->container['accessExternalLoadBalance'] = $accessExternalLoadBalance;
        return $this;
    }

    /**
    * Gets ciliumIpv4PoolCidr
    *  Cilium网络组件的IPv4地址池CIDR
    *
    * @return string|null
    */
    public function getCiliumIpv4PoolCidr()
    {
        return $this->container['ciliumIpv4PoolCidr'];
    }

    /**
    * Sets ciliumIpv4PoolCidr
    *
    * @param string|null $ciliumIpv4PoolCidr Cilium网络组件的IPv4地址池CIDR
    *
    * @return $this
    */
    public function setCiliumIpv4PoolCidr($ciliumIpv4PoolCidr)
    {
        $this->container['ciliumIpv4PoolCidr'] = $ciliumIpv4PoolCidr;
        return $this;
    }

    /**
    * Gets networkCidr
    *  容器网络的CIDR范围
    *
    * @return string|null
    */
    public function getNetworkCidr()
    {
        return $this->container['networkCidr'];
    }

    /**
    * Sets networkCidr
    *
    * @param string|null $networkCidr 容器网络的CIDR范围
    *
    * @return $this
    */
    public function setNetworkCidr($networkCidr)
    {
        $this->container['networkCidr'] = $networkCidr;
        return $this;
    }

    /**
    * Gets dnsServerIp
    *  DNS服务器IP地址
    *
    * @return string|null
    */
    public function getDnsServerIp()
    {
        return $this->container['dnsServerIp'];
    }

    /**
    * Sets dnsServerIp
    *
    * @param string|null $dnsServerIp DNS服务器IP地址
    *
    * @return $this
    */
    public function setDnsServerIp($dnsServerIp)
    {
        $this->container['dnsServerIp'] = $dnsServerIp;
        return $this;
    }

    /**
    * Gets ntpServerIp
    *  NTP服务器IP地址
    *
    * @return string|null
    */
    public function getNtpServerIp()
    {
        return $this->container['ntpServerIp'];
    }

    /**
    * Sets ntpServerIp
    *
    * @param string|null $ntpServerIp NTP服务器IP地址
    *
    * @return $this
    */
    public function setNtpServerIp($ntpServerIp)
    {
        $this->container['ntpServerIp'] = $ntpServerIp;
        return $this;
    }

    /**
    * Gets iamDomainId
    *  IAM域ID
    *
    * @return string|null
    */
    public function getIamDomainId()
    {
        return $this->container['iamDomainId'];
    }

    /**
    * Sets iamDomainId
    *
    * @param string|null $iamDomainId IAM域ID
    *
    * @return $this
    */
    public function setIamDomainId($iamDomainId)
    {
        $this->container['iamDomainId'] = $iamDomainId;
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

