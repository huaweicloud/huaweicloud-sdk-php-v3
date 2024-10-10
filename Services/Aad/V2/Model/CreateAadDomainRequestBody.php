<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAadDomainRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAadDomainRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名
    * enterpriseProjectId  企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    * ips  高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站（源站ip/源站域名）
    * overseasType  防护区域，0-大陆，1-海外
    * certName  证书名称（必须是已经存在的证书）
    * wafSwitch  开启0，关闭1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'enterpriseProjectId' => 'string',
            'ips' => 'string[]',
            'realServerType' => 'int',
            'portHttp' => 'int[]',
            'portHttps' => 'int[]',
            'realServer' => 'string',
            'overseasType' => 'string',
            'certName' => 'string',
            'wafSwitch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名
    * enterpriseProjectId  企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    * ips  高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站（源站ip/源站域名）
    * overseasType  防护区域，0-大陆，1-海外
    * certName  证书名称（必须是已经存在的证书）
    * wafSwitch  开启0，关闭1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'enterpriseProjectId' => null,
        'ips' => null,
        'realServerType' => 'int32',
        'portHttp' => 'int32',
        'portHttps' => 'int32',
        'realServer' => null,
        'overseasType' => null,
        'certName' => null,
        'wafSwitch' => null
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
    * domainName  域名
    * enterpriseProjectId  企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    * ips  高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站（源站ip/源站域名）
    * overseasType  防护区域，0-大陆，1-海外
    * certName  证书名称（必须是已经存在的证书）
    * wafSwitch  开启0，关闭1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ips' => 'ips',
            'realServerType' => 'real_server_type',
            'portHttp' => 'port_http',
            'portHttps' => 'port_https',
            'realServer' => 'real_server',
            'overseasType' => 'overseas_type',
            'certName' => 'cert_name',
            'wafSwitch' => 'waf_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名
    * enterpriseProjectId  企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    * ips  高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站（源站ip/源站域名）
    * overseasType  防护区域，0-大陆，1-海外
    * certName  证书名称（必须是已经存在的证书）
    * wafSwitch  开启0，关闭1
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ips' => 'setIps',
            'realServerType' => 'setRealServerType',
            'portHttp' => 'setPortHttp',
            'portHttps' => 'setPortHttps',
            'realServer' => 'setRealServer',
            'overseasType' => 'setOverseasType',
            'certName' => 'setCertName',
            'wafSwitch' => 'setWafSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名
    * enterpriseProjectId  企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    * ips  高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站（源站ip/源站域名）
    * overseasType  防护区域，0-大陆，1-海外
    * certName  证书名称（必须是已经存在的证书）
    * wafSwitch  开启0，关闭1
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ips' => 'getIps',
            'realServerType' => 'getRealServerType',
            'portHttp' => 'getPortHttp',
            'portHttps' => 'getPortHttps',
            'realServer' => 'getRealServer',
            'overseasType' => 'getOverseasType',
            'certName' => 'getCertName',
            'wafSwitch' => 'getWafSwitch'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ips'] = isset($data['ips']) ? $data['ips'] : null;
        $this->container['realServerType'] = isset($data['realServerType']) ? $data['realServerType'] : null;
        $this->container['portHttp'] = isset($data['portHttp']) ? $data['portHttp'] : null;
        $this->container['portHttps'] = isset($data['portHttps']) ? $data['portHttps'] : null;
        $this->container['realServer'] = isset($data['realServer']) ? $data['realServer'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['wafSwitch'] = isset($data['wafSwitch']) ? $data['wafSwitch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['ips'] === null) {
            $invalidProperties[] = "'ips' can't be null";
        }
        if ($this->container['realServerType'] === null) {
            $invalidProperties[] = "'realServerType' can't be null";
        }
        if ($this->container['portHttp'] === null) {
            $invalidProperties[] = "'portHttp' can't be null";
        }
        if ($this->container['realServer'] === null) {
            $invalidProperties[] = "'realServer' can't be null";
        }
        if ($this->container['overseasType'] === null) {
            $invalidProperties[] = "'overseasType' can't be null";
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
    * Gets domainName
    *  域名
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id，与接入的高防实例所属企业项目保持一致。可在华为云EPS服务中查看企业项目id，default企业项目id为\"0\"。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ips
    *  高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    *
    * @return string[]
    */
    public function getIps()
    {
        return $this->container['ips'];
    }

    /**
    * Sets ips
    *
    * @param string[] $ips 高防实例ip列表。多个高防实例ip必须属于同一企业项目。
    *
    * @return $this
    */
    public function setIps($ips)
    {
        $this->container['ips'] = $ips;
        return $this;
    }

    /**
    * Gets realServerType
    *  源站类型。 0 - 源站IP， 1 - 源站域名。
    *
    * @return int
    */
    public function getRealServerType()
    {
        return $this->container['realServerType'];
    }

    /**
    * Sets realServerType
    *
    * @param int $realServerType 源站类型。 0 - 源站IP， 1 - 源站域名。
    *
    * @return $this
    */
    public function setRealServerType($realServerType)
    {
        $this->container['realServerType'] = $realServerType;
        return $this;
    }

    /**
    * Gets portHttp
    *  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    *
    * @return int[]
    */
    public function getPortHttp()
    {
        return $this->container['portHttp'];
    }

    /**
    * Sets portHttp
    *
    * @param int[] $portHttp HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    *
    * @return $this
    */
    public function setPortHttp($portHttp)
    {
        $this->container['portHttp'] = $portHttp;
        return $this;
    }

    /**
    * Gets portHttps
    *  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    *
    * @return int[]|null
    */
    public function getPortHttps()
    {
        return $this->container['portHttps'];
    }

    /**
    * Sets portHttps
    *
    * @param int[]|null $portHttps HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    *
    * @return $this
    */
    public function setPortHttps($portHttps)
    {
        $this->container['portHttps'] = $portHttps;
        return $this;
    }

    /**
    * Gets realServer
    *  源站（源站ip/源站域名）
    *
    * @return string
    */
    public function getRealServer()
    {
        return $this->container['realServer'];
    }

    /**
    * Sets realServer
    *
    * @param string $realServer 源站（源站ip/源站域名）
    *
    * @return $this
    */
    public function setRealServer($realServer)
    {
        $this->container['realServer'] = $realServer;
        return $this;
    }

    /**
    * Gets overseasType
    *  防护区域，0-大陆，1-海外
    *
    * @return string
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param string $overseasType 防护区域，0-大陆，1-海外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
        return $this;
    }

    /**
    * Gets certName
    *  证书名称（必须是已经存在的证书）
    *
    * @return string|null
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string|null $certName 证书名称（必须是已经存在的证书）
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets wafSwitch
    *  开启0，关闭1
    *
    * @return string|null
    */
    public function getWafSwitch()
    {
        return $this->container['wafSwitch'];
    }

    /**
    * Sets wafSwitch
    *
    * @param string|null $wafSwitch 开启0，关闭1
    *
    * @return $this
    */
    public function setWafSwitch($wafSwitch)
    {
        $this->container['wafSwitch'] = $wafSwitch;
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

