<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateServerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateServerRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientCidr  客户端网段
    * localSubnets  本端网段列表,至少有一个本端网段
    * serverCertificate  serverCertificate
    * sslOptions  sslOptions
    * clientAuthType  客户端认证类型
    * dnsServers  DNS服务器列表，最多两个DNS
    * idpName  身份提供商名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientCidr' => 'string',
            'localSubnets' => 'string[]',
            'serverCertificate' => '\HuaweiCloud\SDK\Vpn\V5\Model\UpdateServerRequestServerCertificate',
            'sslOptions' => '\HuaweiCloud\SDK\Vpn\V5\Model\UpdateServerRequestSslOptions',
            'clientAuthType' => 'string',
            'dnsServers' => 'string[]',
            'idpName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientCidr  客户端网段
    * localSubnets  本端网段列表,至少有一个本端网段
    * serverCertificate  serverCertificate
    * sslOptions  sslOptions
    * clientAuthType  客户端认证类型
    * dnsServers  DNS服务器列表，最多两个DNS
    * idpName  身份提供商名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientCidr' => null,
        'localSubnets' => null,
        'serverCertificate' => null,
        'sslOptions' => null,
        'clientAuthType' => null,
        'dnsServers' => null,
        'idpName' => null
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
    * clientCidr  客户端网段
    * localSubnets  本端网段列表,至少有一个本端网段
    * serverCertificate  serverCertificate
    * sslOptions  sslOptions
    * clientAuthType  客户端认证类型
    * dnsServers  DNS服务器列表，最多两个DNS
    * idpName  身份提供商名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientCidr' => 'client_cidr',
            'localSubnets' => 'local_subnets',
            'serverCertificate' => 'server_certificate',
            'sslOptions' => 'ssl_options',
            'clientAuthType' => 'client_auth_type',
            'dnsServers' => 'dns_servers',
            'idpName' => 'idp_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientCidr  客户端网段
    * localSubnets  本端网段列表,至少有一个本端网段
    * serverCertificate  serverCertificate
    * sslOptions  sslOptions
    * clientAuthType  客户端认证类型
    * dnsServers  DNS服务器列表，最多两个DNS
    * idpName  身份提供商名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientCidr' => 'setClientCidr',
            'localSubnets' => 'setLocalSubnets',
            'serverCertificate' => 'setServerCertificate',
            'sslOptions' => 'setSslOptions',
            'clientAuthType' => 'setClientAuthType',
            'dnsServers' => 'setDnsServers',
            'idpName' => 'setIdpName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientCidr  客户端网段
    * localSubnets  本端网段列表,至少有一个本端网段
    * serverCertificate  serverCertificate
    * sslOptions  sslOptions
    * clientAuthType  客户端认证类型
    * dnsServers  DNS服务器列表，最多两个DNS
    * idpName  身份提供商名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientCidr' => 'getClientCidr',
            'localSubnets' => 'getLocalSubnets',
            'serverCertificate' => 'getServerCertificate',
            'sslOptions' => 'getSslOptions',
            'clientAuthType' => 'getClientAuthType',
            'dnsServers' => 'getDnsServers',
            'idpName' => 'getIdpName'
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
    const CLIENT_AUTH_TYPE_CERT = 'CERT';
    const CLIENT_AUTH_TYPE_LOCAL_PASSWORD = 'LOCAL_PASSWORD';
    const CLIENT_AUTH_TYPE_IAM = 'IAM';
    const CLIENT_AUTH_TYPE_FEDERATED = 'FEDERATED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClientAuthTypeAllowableValues()
    {
        return [
            self::CLIENT_AUTH_TYPE_CERT,
            self::CLIENT_AUTH_TYPE_LOCAL_PASSWORD,
            self::CLIENT_AUTH_TYPE_IAM,
            self::CLIENT_AUTH_TYPE_FEDERATED,
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
        $this->container['clientCidr'] = isset($data['clientCidr']) ? $data['clientCidr'] : null;
        $this->container['localSubnets'] = isset($data['localSubnets']) ? $data['localSubnets'] : null;
        $this->container['serverCertificate'] = isset($data['serverCertificate']) ? $data['serverCertificate'] : null;
        $this->container['sslOptions'] = isset($data['sslOptions']) ? $data['sslOptions'] : null;
        $this->container['clientAuthType'] = isset($data['clientAuthType']) ? $data['clientAuthType'] : null;
        $this->container['dnsServers'] = isset($data['dnsServers']) ? $data['dnsServers'] : null;
        $this->container['idpName'] = isset($data['idpName']) ? $data['idpName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clientCidr']) && (mb_strlen($this->container['clientCidr']) > 18)) {
                $invalidProperties[] = "invalid value for 'clientCidr', the character length must be smaller than or equal to 18.";
            }
            if (!is_null($this->container['clientCidr']) && (mb_strlen($this->container['clientCidr']) < 9)) {
                $invalidProperties[] = "invalid value for 'clientCidr', the character length must be bigger than or equal to 9.";
            }
            $allowedValues = $this->getClientAuthTypeAllowableValues();
                if (!is_null($this->container['clientAuthType']) && !in_array($this->container['clientAuthType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clientAuthType', must be one of '%s'",
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
    *  本端网段列表,至少有一个本端网段
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
    * @param string[]|null $localSubnets 本端网段列表,至少有一个本端网段
    *
    * @return $this
    */
    public function setLocalSubnets($localSubnets)
    {
        $this->container['localSubnets'] = $localSubnets;
        return $this;
    }

    /**
    * Gets serverCertificate
    *  serverCertificate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\UpdateServerRequestServerCertificate|null
    */
    public function getServerCertificate()
    {
        return $this->container['serverCertificate'];
    }

    /**
    * Sets serverCertificate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\UpdateServerRequestServerCertificate|null $serverCertificate serverCertificate
    *
    * @return $this
    */
    public function setServerCertificate($serverCertificate)
    {
        $this->container['serverCertificate'] = $serverCertificate;
        return $this;
    }

    /**
    * Gets sslOptions
    *  sslOptions
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\UpdateServerRequestSslOptions|null
    */
    public function getSslOptions()
    {
        return $this->container['sslOptions'];
    }

    /**
    * Sets sslOptions
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\UpdateServerRequestSslOptions|null $sslOptions sslOptions
    *
    * @return $this
    */
    public function setSslOptions($sslOptions)
    {
        $this->container['sslOptions'] = $sslOptions;
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
    * Gets dnsServers
    *  DNS服务器列表，最多两个DNS
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
    * @param string[]|null $dnsServers DNS服务器列表，最多两个DNS
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

