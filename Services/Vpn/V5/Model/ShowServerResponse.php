<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  服务端 ID
    * p2cVgwId  P2C VPN 网关 ID
    * clientCidr  客户端网段
    * localSubnets  本端网段列表
    * clientAuthType  客户端认证类型
    * tunnelProtocol  隧道协议类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端CA证书列表
    * sslOptions  sslOptions
    * dnsServers  DNS服务器列表
    * idpName  身份提供商名称。
    * status  服务端状态
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'p2cVgwId' => 'string',
            'clientCidr' => 'string',
            'localSubnets' => 'string[]',
            'clientAuthType' => 'string',
            'tunnelProtocol' => 'string',
            'serverCertificate' => '\HuaweiCloud\SDK\Vpn\V5\Model\ShowServerResponseServerCertificate',
            'clientCaCertificates' => '\HuaweiCloud\SDK\Vpn\V5\Model\QueryClientCaCertificateBody[]',
            'sslOptions' => '\HuaweiCloud\SDK\Vpn\V5\Model\ShowServerResponseSslOptions',
            'dnsServers' => 'string[]',
            'idpName' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  服务端 ID
    * p2cVgwId  P2C VPN 网关 ID
    * clientCidr  客户端网段
    * localSubnets  本端网段列表
    * clientAuthType  客户端认证类型
    * tunnelProtocol  隧道协议类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端CA证书列表
    * sslOptions  sslOptions
    * dnsServers  DNS服务器列表
    * idpName  身份提供商名称。
    * status  服务端状态
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'p2cVgwId' => null,
        'clientCidr' => null,
        'localSubnets' => null,
        'clientAuthType' => null,
        'tunnelProtocol' => null,
        'serverCertificate' => null,
        'clientCaCertificates' => null,
        'sslOptions' => null,
        'dnsServers' => null,
        'idpName' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  服务端 ID
    * p2cVgwId  P2C VPN 网关 ID
    * clientCidr  客户端网段
    * localSubnets  本端网段列表
    * clientAuthType  客户端认证类型
    * tunnelProtocol  隧道协议类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端CA证书列表
    * sslOptions  sslOptions
    * dnsServers  DNS服务器列表
    * idpName  身份提供商名称。
    * status  服务端状态
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'p2cVgwId' => 'p2c_vgw_id',
            'clientCidr' => 'client_cidr',
            'localSubnets' => 'local_subnets',
            'clientAuthType' => 'client_auth_type',
            'tunnelProtocol' => 'tunnel_protocol',
            'serverCertificate' => 'server_certificate',
            'clientCaCertificates' => 'client_ca_certificates',
            'sslOptions' => 'ssl_options',
            'dnsServers' => 'dns_servers',
            'idpName' => 'idp_name',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  服务端 ID
    * p2cVgwId  P2C VPN 网关 ID
    * clientCidr  客户端网段
    * localSubnets  本端网段列表
    * clientAuthType  客户端认证类型
    * tunnelProtocol  隧道协议类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端CA证书列表
    * sslOptions  sslOptions
    * dnsServers  DNS服务器列表
    * idpName  身份提供商名称。
    * status  服务端状态
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'p2cVgwId' => 'setP2cVgwId',
            'clientCidr' => 'setClientCidr',
            'localSubnets' => 'setLocalSubnets',
            'clientAuthType' => 'setClientAuthType',
            'tunnelProtocol' => 'setTunnelProtocol',
            'serverCertificate' => 'setServerCertificate',
            'clientCaCertificates' => 'setClientCaCertificates',
            'sslOptions' => 'setSslOptions',
            'dnsServers' => 'setDnsServers',
            'idpName' => 'setIdpName',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  服务端 ID
    * p2cVgwId  P2C VPN 网关 ID
    * clientCidr  客户端网段
    * localSubnets  本端网段列表
    * clientAuthType  客户端认证类型
    * tunnelProtocol  隧道协议类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端CA证书列表
    * sslOptions  sslOptions
    * dnsServers  DNS服务器列表
    * idpName  身份提供商名称。
    * status  服务端状态
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'p2cVgwId' => 'getP2cVgwId',
            'clientCidr' => 'getClientCidr',
            'localSubnets' => 'getLocalSubnets',
            'clientAuthType' => 'getClientAuthType',
            'tunnelProtocol' => 'getTunnelProtocol',
            'serverCertificate' => 'getServerCertificate',
            'clientCaCertificates' => 'getClientCaCertificates',
            'sslOptions' => 'getSslOptions',
            'dnsServers' => 'getDnsServers',
            'idpName' => 'getIdpName',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['p2cVgwId'] = isset($data['p2cVgwId']) ? $data['p2cVgwId'] : null;
        $this->container['clientCidr'] = isset($data['clientCidr']) ? $data['clientCidr'] : null;
        $this->container['localSubnets'] = isset($data['localSubnets']) ? $data['localSubnets'] : null;
        $this->container['clientAuthType'] = isset($data['clientAuthType']) ? $data['clientAuthType'] : null;
        $this->container['tunnelProtocol'] = isset($data['tunnelProtocol']) ? $data['tunnelProtocol'] : null;
        $this->container['serverCertificate'] = isset($data['serverCertificate']) ? $data['serverCertificate'] : null;
        $this->container['clientCaCertificates'] = isset($data['clientCaCertificates']) ? $data['clientCaCertificates'] : null;
        $this->container['sslOptions'] = isset($data['sslOptions']) ? $data['sslOptions'] : null;
        $this->container['dnsServers'] = isset($data['dnsServers']) ? $data['dnsServers'] : null;
        $this->container['idpName'] = isset($data['idpName']) ? $data['idpName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets id
    *  服务端 ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 服务端 ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets p2cVgwId
    *  P2C VPN 网关 ID
    *
    * @return string|null
    */
    public function getP2cVgwId()
    {
        return $this->container['p2cVgwId'];
    }

    /**
    * Sets p2cVgwId
    *
    * @param string|null $p2cVgwId P2C VPN 网关 ID
    *
    * @return $this
    */
    public function setP2cVgwId($p2cVgwId)
    {
        $this->container['p2cVgwId'] = $p2cVgwId;
        return $this;
    }

    /**
    * Gets clientCidr
    *  客户端网段
    *
    * @return string|null
    */
    public function getClientCidr()
    {
        return $this->container['clientCidr'];
    }

    /**
    * Sets clientCidr
    *
    * @param string|null $clientCidr 客户端网段
    *
    * @return $this
    */
    public function setClientCidr($clientCidr)
    {
        $this->container['clientCidr'] = $clientCidr;
        return $this;
    }

    /**
    * Gets localSubnets
    *  本端网段列表
    *
    * @return string[]|null
    */
    public function getLocalSubnets()
    {
        return $this->container['localSubnets'];
    }

    /**
    * Sets localSubnets
    *
    * @param string[]|null $localSubnets 本端网段列表
    *
    * @return $this
    */
    public function setLocalSubnets($localSubnets)
    {
        $this->container['localSubnets'] = $localSubnets;
        return $this;
    }

    /**
    * Gets clientAuthType
    *  客户端认证类型
    *
    * @return string|null
    */
    public function getClientAuthType()
    {
        return $this->container['clientAuthType'];
    }

    /**
    * Sets clientAuthType
    *
    * @param string|null $clientAuthType 客户端认证类型
    *
    * @return $this
    */
    public function setClientAuthType($clientAuthType)
    {
        $this->container['clientAuthType'] = $clientAuthType;
        return $this;
    }

    /**
    * Gets tunnelProtocol
    *  隧道协议类型
    *
    * @return string|null
    */
    public function getTunnelProtocol()
    {
        return $this->container['tunnelProtocol'];
    }

    /**
    * Sets tunnelProtocol
    *
    * @param string|null $tunnelProtocol 隧道协议类型
    *
    * @return $this
    */
    public function setTunnelProtocol($tunnelProtocol)
    {
        $this->container['tunnelProtocol'] = $tunnelProtocol;
        return $this;
    }

    /**
    * Gets serverCertificate
    *  serverCertificate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\ShowServerResponseServerCertificate|null
    */
    public function getServerCertificate()
    {
        return $this->container['serverCertificate'];
    }

    /**
    * Sets serverCertificate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\ShowServerResponseServerCertificate|null $serverCertificate serverCertificate
    *
    * @return $this
    */
    public function setServerCertificate($serverCertificate)
    {
        $this->container['serverCertificate'] = $serverCertificate;
        return $this;
    }

    /**
    * Gets clientCaCertificates
    *  客户端CA证书列表
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\QueryClientCaCertificateBody[]|null
    */
    public function getClientCaCertificates()
    {
        return $this->container['clientCaCertificates'];
    }

    /**
    * Sets clientCaCertificates
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\QueryClientCaCertificateBody[]|null $clientCaCertificates 客户端CA证书列表
    *
    * @return $this
    */
    public function setClientCaCertificates($clientCaCertificates)
    {
        $this->container['clientCaCertificates'] = $clientCaCertificates;
        return $this;
    }

    /**
    * Gets sslOptions
    *  sslOptions
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\ShowServerResponseSslOptions|null
    */
    public function getSslOptions()
    {
        return $this->container['sslOptions'];
    }

    /**
    * Sets sslOptions
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\ShowServerResponseSslOptions|null $sslOptions sslOptions
    *
    * @return $this
    */
    public function setSslOptions($sslOptions)
    {
        $this->container['sslOptions'] = $sslOptions;
        return $this;
    }

    /**
    * Gets dnsServers
    *  DNS服务器列表
    *
    * @return string[]|null
    */
    public function getDnsServers()
    {
        return $this->container['dnsServers'];
    }

    /**
    * Sets dnsServers
    *
    * @param string[]|null $dnsServers DNS服务器列表
    *
    * @return $this
    */
    public function setDnsServers($dnsServers)
    {
        $this->container['dnsServers'] = $dnsServers;
        return $this;
    }

    /**
    * Gets idpName
    *  身份提供商名称。
    *
    * @return string|null
    */
    public function getIdpName()
    {
        return $this->container['idpName'];
    }

    /**
    * Sets idpName
    *
    * @param string|null $idpName 身份提供商名称。
    *
    * @return $this
    */
    public function setIdpName($idpName)
    {
        $this->container['idpName'] = $idpName;
        return $this;
    }

    /**
    * Gets status
    *  服务端状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 服务端状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

