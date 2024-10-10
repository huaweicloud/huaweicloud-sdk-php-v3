<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDomainItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDomainItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  域名ID
    * domainName  域名
    * cname  域名cname
    * domainStatus  域名状态 NORMAL = '0', FREEZE = '1'
    * ccStatus  cc防护状态
    * httpsCertStatus  证书状态：1---已上传  2---未上传
    * certName  证书名称
    * protocolType  域名协议
    * realServerType  源站类型
    * realServers  源站
    * wafStatus  waf防护状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string',
            'cname' => 'string',
            'domainStatus' => 'string',
            'ccStatus' => 'int',
            'httpsCertStatus' => 'int',
            'certName' => 'string',
            'protocolType' => 'string[]',
            'realServerType' => 'int',
            'realServers' => 'string',
            'wafStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  域名ID
    * domainName  域名
    * cname  域名cname
    * domainStatus  域名状态 NORMAL = '0', FREEZE = '1'
    * ccStatus  cc防护状态
    * httpsCertStatus  证书状态：1---已上传  2---未上传
    * certName  证书名称
    * protocolType  域名协议
    * realServerType  源站类型
    * realServers  源站
    * wafStatus  waf防护状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null,
        'cname' => null,
        'domainStatus' => null,
        'ccStatus' => null,
        'httpsCertStatus' => null,
        'certName' => null,
        'protocolType' => null,
        'realServerType' => 'int32',
        'realServers' => null,
        'wafStatus' => 'int32'
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
    * domainId  域名ID
    * domainName  域名
    * cname  域名cname
    * domainStatus  域名状态 NORMAL = '0', FREEZE = '1'
    * ccStatus  cc防护状态
    * httpsCertStatus  证书状态：1---已上传  2---未上传
    * certName  证书名称
    * protocolType  域名协议
    * realServerType  源站类型
    * realServers  源站
    * wafStatus  waf防护状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'cname' => 'cname',
            'domainStatus' => 'domain_status',
            'ccStatus' => 'cc_status',
            'httpsCertStatus' => 'https_cert_status',
            'certName' => 'cert_name',
            'protocolType' => 'protocol_type',
            'realServerType' => 'real_server_type',
            'realServers' => 'real_servers',
            'wafStatus' => 'waf_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  域名ID
    * domainName  域名
    * cname  域名cname
    * domainStatus  域名状态 NORMAL = '0', FREEZE = '1'
    * ccStatus  cc防护状态
    * httpsCertStatus  证书状态：1---已上传  2---未上传
    * certName  证书名称
    * protocolType  域名协议
    * realServerType  源站类型
    * realServers  源站
    * wafStatus  waf防护状态
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'cname' => 'setCname',
            'domainStatus' => 'setDomainStatus',
            'ccStatus' => 'setCcStatus',
            'httpsCertStatus' => 'setHttpsCertStatus',
            'certName' => 'setCertName',
            'protocolType' => 'setProtocolType',
            'realServerType' => 'setRealServerType',
            'realServers' => 'setRealServers',
            'wafStatus' => 'setWafStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  域名ID
    * domainName  域名
    * cname  域名cname
    * domainStatus  域名状态 NORMAL = '0', FREEZE = '1'
    * ccStatus  cc防护状态
    * httpsCertStatus  证书状态：1---已上传  2---未上传
    * certName  证书名称
    * protocolType  域名协议
    * realServerType  源站类型
    * realServers  源站
    * wafStatus  waf防护状态
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'cname' => 'getCname',
            'domainStatus' => 'getDomainStatus',
            'ccStatus' => 'getCcStatus',
            'httpsCertStatus' => 'getHttpsCertStatus',
            'certName' => 'getCertName',
            'protocolType' => 'getProtocolType',
            'realServerType' => 'getRealServerType',
            'realServers' => 'getRealServers',
            'wafStatus' => 'getWafStatus'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['cname'] = isset($data['cname']) ? $data['cname'] : null;
        $this->container['domainStatus'] = isset($data['domainStatus']) ? $data['domainStatus'] : null;
        $this->container['ccStatus'] = isset($data['ccStatus']) ? $data['ccStatus'] : null;
        $this->container['httpsCertStatus'] = isset($data['httpsCertStatus']) ? $data['httpsCertStatus'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['realServerType'] = isset($data['realServerType']) ? $data['realServerType'] : null;
        $this->container['realServers'] = isset($data['realServers']) ? $data['realServers'] : null;
        $this->container['wafStatus'] = isset($data['wafStatus']) ? $data['wafStatus'] : null;
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
    * Gets domainId
    *  域名ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 域名ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  域名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets cname
    *  域名cname
    *
    * @return string|null
    */
    public function getCname()
    {
        return $this->container['cname'];
    }

    /**
    * Sets cname
    *
    * @param string|null $cname 域名cname
    *
    * @return $this
    */
    public function setCname($cname)
    {
        $this->container['cname'] = $cname;
        return $this;
    }

    /**
    * Gets domainStatus
    *  域名状态 NORMAL = '0', FREEZE = '1'
    *
    * @return string|null
    */
    public function getDomainStatus()
    {
        return $this->container['domainStatus'];
    }

    /**
    * Sets domainStatus
    *
    * @param string|null $domainStatus 域名状态 NORMAL = '0', FREEZE = '1'
    *
    * @return $this
    */
    public function setDomainStatus($domainStatus)
    {
        $this->container['domainStatus'] = $domainStatus;
        return $this;
    }

    /**
    * Gets ccStatus
    *  cc防护状态
    *
    * @return int|null
    */
    public function getCcStatus()
    {
        return $this->container['ccStatus'];
    }

    /**
    * Sets ccStatus
    *
    * @param int|null $ccStatus cc防护状态
    *
    * @return $this
    */
    public function setCcStatus($ccStatus)
    {
        $this->container['ccStatus'] = $ccStatus;
        return $this;
    }

    /**
    * Gets httpsCertStatus
    *  证书状态：1---已上传  2---未上传
    *
    * @return int|null
    */
    public function getHttpsCertStatus()
    {
        return $this->container['httpsCertStatus'];
    }

    /**
    * Sets httpsCertStatus
    *
    * @param int|null $httpsCertStatus 证书状态：1---已上传  2---未上传
    *
    * @return $this
    */
    public function setHttpsCertStatus($httpsCertStatus)
    {
        $this->container['httpsCertStatus'] = $httpsCertStatus;
        return $this;
    }

    /**
    * Gets certName
    *  证书名称
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
    * @param string|null $certName 证书名称
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets protocolType
    *  域名协议
    *
    * @return string[]|null
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string[]|null $protocolType 域名协议
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
        return $this;
    }

    /**
    * Gets realServerType
    *  源站类型
    *
    * @return int|null
    */
    public function getRealServerType()
    {
        return $this->container['realServerType'];
    }

    /**
    * Sets realServerType
    *
    * @param int|null $realServerType 源站类型
    *
    * @return $this
    */
    public function setRealServerType($realServerType)
    {
        $this->container['realServerType'] = $realServerType;
        return $this;
    }

    /**
    * Gets realServers
    *  源站
    *
    * @return string|null
    */
    public function getRealServers()
    {
        return $this->container['realServers'];
    }

    /**
    * Sets realServers
    *
    * @param string|null $realServers 源站
    *
    * @return $this
    */
    public function setRealServers($realServers)
    {
        $this->container['realServers'] = $realServers;
        return $this;
    }

    /**
    * Gets wafStatus
    *  waf防护状态
    *
    * @return int|null
    */
    public function getWafStatus()
    {
        return $this->container['wafStatus'];
    }

    /**
    * Sets wafStatus
    *
    * @param int|null $wafStatus waf防护状态
    *
    * @return $this
    */
    public function setWafStatus($wafStatus)
    {
        $this->container['wafStatus'] = $wafStatus;
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

