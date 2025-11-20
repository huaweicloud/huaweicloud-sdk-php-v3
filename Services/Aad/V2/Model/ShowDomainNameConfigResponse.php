<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainNameConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainNameConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  域名id
    * domainName  域名
    * realServerType  源站类型，0 - 源站IP， 1 - 源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站ip/源站域名
    * ppEnable  pp是否开启, 1-开启，0-关闭
    * overseasType  防护区域,0-大陆,1-海外
    * tls  tls(请求参数type=waf时)
    * cipher  加密套件(请求参数type=waf时)
    * http2Enable  是否允许http2(请求参数type=waf时)
    * headerMap  字段转发(请求参数type=waf时)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string',
            'realServerType' => 'int',
            'portHttp' => 'int[]',
            'portHttps' => 'int[]',
            'realServer' => 'string',
            'ppEnable' => 'int',
            'overseasType' => 'int',
            'tls' => 'string',
            'cipher' => 'string',
            'http2Enable' => 'bool',
            'headerMap' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  域名id
    * domainName  域名
    * realServerType  源站类型，0 - 源站IP， 1 - 源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站ip/源站域名
    * ppEnable  pp是否开启, 1-开启，0-关闭
    * overseasType  防护区域,0-大陆,1-海外
    * tls  tls(请求参数type=waf时)
    * cipher  加密套件(请求参数type=waf时)
    * http2Enable  是否允许http2(请求参数type=waf时)
    * headerMap  字段转发(请求参数type=waf时)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null,
        'realServerType' => 'int32',
        'portHttp' => 'int32',
        'portHttps' => 'int32',
        'realServer' => null,
        'ppEnable' => 'int32',
        'overseasType' => 'int32',
        'tls' => null,
        'cipher' => null,
        'http2Enable' => null,
        'headerMap' => null
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
    * domainId  域名id
    * domainName  域名
    * realServerType  源站类型，0 - 源站IP， 1 - 源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站ip/源站域名
    * ppEnable  pp是否开启, 1-开启，0-关闭
    * overseasType  防护区域,0-大陆,1-海外
    * tls  tls(请求参数type=waf时)
    * cipher  加密套件(请求参数type=waf时)
    * http2Enable  是否允许http2(请求参数type=waf时)
    * headerMap  字段转发(请求参数type=waf时)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'realServerType' => 'real_server_type',
            'portHttp' => 'port_http',
            'portHttps' => 'port_https',
            'realServer' => 'real_server',
            'ppEnable' => 'pp_enable',
            'overseasType' => 'overseas_type',
            'tls' => 'tls',
            'cipher' => 'cipher',
            'http2Enable' => 'http2_enable',
            'headerMap' => 'header_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  域名id
    * domainName  域名
    * realServerType  源站类型，0 - 源站IP， 1 - 源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站ip/源站域名
    * ppEnable  pp是否开启, 1-开启，0-关闭
    * overseasType  防护区域,0-大陆,1-海外
    * tls  tls(请求参数type=waf时)
    * cipher  加密套件(请求参数type=waf时)
    * http2Enable  是否允许http2(请求参数type=waf时)
    * headerMap  字段转发(请求参数type=waf时)
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'realServerType' => 'setRealServerType',
            'portHttp' => 'setPortHttp',
            'portHttps' => 'setPortHttps',
            'realServer' => 'setRealServer',
            'ppEnable' => 'setPpEnable',
            'overseasType' => 'setOverseasType',
            'tls' => 'setTls',
            'cipher' => 'setCipher',
            'http2Enable' => 'setHttp2Enable',
            'headerMap' => 'setHeaderMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  域名id
    * domainName  域名
    * realServerType  源站类型，0 - 源站IP， 1 - 源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可在控制台查看。
    * realServer  源站ip/源站域名
    * ppEnable  pp是否开启, 1-开启，0-关闭
    * overseasType  防护区域,0-大陆,1-海外
    * tls  tls(请求参数type=waf时)
    * cipher  加密套件(请求参数type=waf时)
    * http2Enable  是否允许http2(请求参数type=waf时)
    * headerMap  字段转发(请求参数type=waf时)
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'realServerType' => 'getRealServerType',
            'portHttp' => 'getPortHttp',
            'portHttps' => 'getPortHttps',
            'realServer' => 'getRealServer',
            'ppEnable' => 'getPpEnable',
            'overseasType' => 'getOverseasType',
            'tls' => 'getTls',
            'cipher' => 'getCipher',
            'http2Enable' => 'getHttp2Enable',
            'headerMap' => 'getHeaderMap'
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
        $this->container['realServerType'] = isset($data['realServerType']) ? $data['realServerType'] : null;
        $this->container['portHttp'] = isset($data['portHttp']) ? $data['portHttp'] : null;
        $this->container['portHttps'] = isset($data['portHttps']) ? $data['portHttps'] : null;
        $this->container['realServer'] = isset($data['realServer']) ? $data['realServer'] : null;
        $this->container['ppEnable'] = isset($data['ppEnable']) ? $data['ppEnable'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['cipher'] = isset($data['cipher']) ? $data['cipher'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['headerMap'] = isset($data['headerMap']) ? $data['headerMap'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 32768)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['realServerType']) && ($this->container['realServerType'] > 2000)) {
                $invalidProperties[] = "invalid value for 'realServerType', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['realServerType']) && ($this->container['realServerType'] < 0)) {
                $invalidProperties[] = "invalid value for 'realServerType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['realServer']) && (mb_strlen($this->container['realServer']) > 32768)) {
                $invalidProperties[] = "invalid value for 'realServer', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['realServer']) && (mb_strlen($this->container['realServer']) < 0)) {
                $invalidProperties[] = "invalid value for 'realServer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ppEnable']) && ($this->container['ppEnable'] > 2000)) {
                $invalidProperties[] = "invalid value for 'ppEnable', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['ppEnable']) && ($this->container['ppEnable'] < 0)) {
                $invalidProperties[] = "invalid value for 'ppEnable', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['overseasType']) && ($this->container['overseasType'] > 2000)) {
                $invalidProperties[] = "invalid value for 'overseasType', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['overseasType']) && ($this->container['overseasType'] < 0)) {
                $invalidProperties[] = "invalid value for 'overseasType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tls']) && (mb_strlen($this->container['tls']) > 32768)) {
                $invalidProperties[] = "invalid value for 'tls', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['tls']) && (mb_strlen($this->container['tls']) < 0)) {
                $invalidProperties[] = "invalid value for 'tls', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cipher']) && (mb_strlen($this->container['cipher']) > 32768)) {
                $invalidProperties[] = "invalid value for 'cipher', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['cipher']) && (mb_strlen($this->container['cipher']) < 0)) {
                $invalidProperties[] = "invalid value for 'cipher', the character length must be bigger than or equal to 0.";
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
    * Gets domainId
    *  域名id
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
    * @param string|null $domainId 域名id
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
    * Gets realServerType
    *  源站类型，0 - 源站IP， 1 - 源站域名
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
    * @param int|null $realServerType 源站类型，0 - 源站IP， 1 - 源站域名
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
    * @return int[]|null
    */
    public function getPortHttp()
    {
        return $this->container['portHttp'];
    }

    /**
    * Sets portHttp
    *
    * @param int[]|null $portHttp HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可在控制台查看。
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
    *  源站ip/源站域名
    *
    * @return string|null
    */
    public function getRealServer()
    {
        return $this->container['realServer'];
    }

    /**
    * Sets realServer
    *
    * @param string|null $realServer 源站ip/源站域名
    *
    * @return $this
    */
    public function setRealServer($realServer)
    {
        $this->container['realServer'] = $realServer;
        return $this;
    }

    /**
    * Gets ppEnable
    *  pp是否开启, 1-开启，0-关闭
    *
    * @return int|null
    */
    public function getPpEnable()
    {
        return $this->container['ppEnable'];
    }

    /**
    * Sets ppEnable
    *
    * @param int|null $ppEnable pp是否开启, 1-开启，0-关闭
    *
    * @return $this
    */
    public function setPpEnable($ppEnable)
    {
        $this->container['ppEnable'] = $ppEnable;
        return $this;
    }

    /**
    * Gets overseasType
    *  防护区域,0-大陆,1-海外
    *
    * @return int|null
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param int|null $overseasType 防护区域,0-大陆,1-海外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
        return $this;
    }

    /**
    * Gets tls
    *  tls(请求参数type=waf时)
    *
    * @return string|null
    */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
    * Sets tls
    *
    * @param string|null $tls tls(请求参数type=waf时)
    *
    * @return $this
    */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;
        return $this;
    }

    /**
    * Gets cipher
    *  加密套件(请求参数type=waf时)
    *
    * @return string|null
    */
    public function getCipher()
    {
        return $this->container['cipher'];
    }

    /**
    * Sets cipher
    *
    * @param string|null $cipher 加密套件(请求参数type=waf时)
    *
    * @return $this
    */
    public function setCipher($cipher)
    {
        $this->container['cipher'] = $cipher;
        return $this;
    }

    /**
    * Gets http2Enable
    *  是否允许http2(请求参数type=waf时)
    *
    * @return bool|null
    */
    public function getHttp2Enable()
    {
        return $this->container['http2Enable'];
    }

    /**
    * Sets http2Enable
    *
    * @param bool|null $http2Enable 是否允许http2(请求参数type=waf时)
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets headerMap
    *  字段转发(请求参数type=waf时)
    *
    * @return object|null
    */
    public function getHeaderMap()
    {
        return $this->container['headerMap'];
    }

    /**
    * Sets headerMap
    *
    * @param object|null $headerMap 字段转发(请求参数type=waf时)
    *
    * @return $this
    */
    public function setHeaderMap($headerMap)
    {
        $this->container['headerMap'] = $headerMap;
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

