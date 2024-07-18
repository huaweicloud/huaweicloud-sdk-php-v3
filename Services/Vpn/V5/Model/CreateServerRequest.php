<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServerRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tunnelProtocol  隧道协议类型
    * clientCidr  客户端网段
    * localSubnets  本端网段列表，至少有一个本端网段
    * clientAuthType  客户端认证类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
    * sslOptions  sslOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tunnelProtocol' => 'string',
            'clientCidr' => 'string',
            'localSubnets' => 'string[]',
            'clientAuthType' => 'string',
            'serverCertificate' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestServerCertificate',
            'clientCaCertificates' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestClientCaCertificates[]',
            'sslOptions' => '\HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestSslOptions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tunnelProtocol  隧道协议类型
    * clientCidr  客户端网段
    * localSubnets  本端网段列表，至少有一个本端网段
    * clientAuthType  客户端认证类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
    * sslOptions  sslOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tunnelProtocol' => null,
        'clientCidr' => null,
        'localSubnets' => null,
        'clientAuthType' => null,
        'serverCertificate' => null,
        'clientCaCertificates' => null,
        'sslOptions' => null
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
    * tunnelProtocol  隧道协议类型
    * clientCidr  客户端网段
    * localSubnets  本端网段列表，至少有一个本端网段
    * clientAuthType  客户端认证类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
    * sslOptions  sslOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tunnelProtocol' => 'tunnel_protocol',
            'clientCidr' => 'client_cidr',
            'localSubnets' => 'local_subnets',
            'clientAuthType' => 'client_auth_type',
            'serverCertificate' => 'server_certificate',
            'clientCaCertificates' => 'client_ca_certificates',
            'sslOptions' => 'ssl_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tunnelProtocol  隧道协议类型
    * clientCidr  客户端网段
    * localSubnets  本端网段列表，至少有一个本端网段
    * clientAuthType  客户端认证类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
    * sslOptions  sslOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'tunnelProtocol' => 'setTunnelProtocol',
            'clientCidr' => 'setClientCidr',
            'localSubnets' => 'setLocalSubnets',
            'clientAuthType' => 'setClientAuthType',
            'serverCertificate' => 'setServerCertificate',
            'clientCaCertificates' => 'setClientCaCertificates',
            'sslOptions' => 'setSslOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tunnelProtocol  隧道协议类型
    * clientCidr  客户端网段
    * localSubnets  本端网段列表，至少有一个本端网段
    * clientAuthType  客户端认证类型
    * serverCertificate  serverCertificate
    * clientCaCertificates  客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
    * sslOptions  sslOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'tunnelProtocol' => 'getTunnelProtocol',
            'clientCidr' => 'getClientCidr',
            'localSubnets' => 'getLocalSubnets',
            'clientAuthType' => 'getClientAuthType',
            'serverCertificate' => 'getServerCertificate',
            'clientCaCertificates' => 'getClientCaCertificates',
            'sslOptions' => 'getSslOptions'
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
    const TUNNEL_PROTOCOL_SSL = 'SSL';
    const CLIENT_AUTH_TYPE_CERT = 'CERT';
    const CLIENT_AUTH_TYPE_LOCAL_PASSWORD = 'LOCAL_PASSWORD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTunnelProtocolAllowableValues()
    {
        return [
            self::TUNNEL_PROTOCOL_SSL,
        ];
    }

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
        $this->container['tunnelProtocol'] = isset($data['tunnelProtocol']) ? $data['tunnelProtocol'] : null;
        $this->container['clientCidr'] = isset($data['clientCidr']) ? $data['clientCidr'] : null;
        $this->container['localSubnets'] = isset($data['localSubnets']) ? $data['localSubnets'] : null;
        $this->container['clientAuthType'] = isset($data['clientAuthType']) ? $data['clientAuthType'] : null;
        $this->container['serverCertificate'] = isset($data['serverCertificate']) ? $data['serverCertificate'] : null;
        $this->container['clientCaCertificates'] = isset($data['clientCaCertificates']) ? $data['clientCaCertificates'] : null;
        $this->container['sslOptions'] = isset($data['sslOptions']) ? $data['sslOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tunnelProtocol'] === null) {
            $invalidProperties[] = "'tunnelProtocol' can't be null";
        }
            $allowedValues = $this->getTunnelProtocolAllowableValues();
                if (!is_null($this->container['tunnelProtocol']) && !in_array($this->container['tunnelProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tunnelProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['clientCidr'] === null) {
            $invalidProperties[] = "'clientCidr' can't be null";
        }
            if ((mb_strlen($this->container['clientCidr']) > 18)) {
                $invalidProperties[] = "invalid value for 'clientCidr', the character length must be smaller than or equal to 18.";
            }
            if ((mb_strlen($this->container['clientCidr']) < 9)) {
                $invalidProperties[] = "invalid value for 'clientCidr', the character length must be bigger than or equal to 9.";
            }
        if ($this->container['localSubnets'] === null) {
            $invalidProperties[] = "'localSubnets' can't be null";
        }
        if ($this->container['clientAuthType'] === null) {
            $invalidProperties[] = "'clientAuthType' can't be null";
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
    * Gets tunnelProtocol
    *  隧道协议类型
    *
    * @return string
    */
    public function getTunnelProtocol()
    {
        return $this->container['tunnelProtocol'];
    }

    /**
    * Sets tunnelProtocol
    *
    * @param string $tunnelProtocol 隧道协议类型
    *
    * @return $this
    */
    public function setTunnelProtocol($tunnelProtocol)
    {
        $this->container['tunnelProtocol'] = $tunnelProtocol;
        return $this;
    }

    /**
    * Gets clientCidr
    *  客户端网段
    *
    * @return string
    */
    public function getClientCidr()
    {
        return $this->container['clientCidr'];
    }

    /**
    * Sets clientCidr
    *
    * @param string $clientCidr 客户端网段
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
    *  本端网段列表，至少有一个本端网段
    *
    * @return string[]
    */
    public function getLocalSubnets()
    {
        return $this->container['localSubnets'];
    }

    /**
    * Sets localSubnets
    *
    * @param string[] $localSubnets 本端网段列表，至少有一个本端网段
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
    * @return string
    */
    public function getClientAuthType()
    {
        return $this->container['clientAuthType'];
    }

    /**
    * Sets clientAuthType
    *
    * @param string $clientAuthType 客户端认证类型
    *
    * @return $this
    */
    public function setClientAuthType($clientAuthType)
    {
        $this->container['clientAuthType'] = $clientAuthType;
        return $this;
    }

    /**
    * Gets serverCertificate
    *  serverCertificate
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestServerCertificate|null
    */
    public function getServerCertificate()
    {
        return $this->container['serverCertificate'];
    }

    /**
    * Sets serverCertificate
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestServerCertificate|null $serverCertificate serverCertificate
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
    *  客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestClientCaCertificates[]|null
    */
    public function getClientCaCertificates()
    {
        return $this->container['clientCaCertificates'];
    }

    /**
    * Sets clientCaCertificates
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestClientCaCertificates[]|null $clientCaCertificates 客户端证书列表。隧道协议类型是SSL且认证方式是证书认证时，必填
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
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestSslOptions|null
    */
    public function getSslOptions()
    {
        return $this->container['sslOptions'];
    }

    /**
    * Sets sslOptions
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\CreateServerRequestSslOptions|null $sslOptions sslOptions
    *
    * @return $this
    */
    public function setSslOptions($sslOptions)
    {
        $this->container['sslOptions'] = $sslOptions;
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

