<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDomainConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDomainConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * realServer  源站ip/源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
    * overseasType  防护区域：0-中国大陆、1-中国大陆外
    * certName  证书名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'realServerType' => 'int',
            'realServer' => 'string',
            'portHttp' => 'int[]',
            'portHttps' => 'int[]',
            'overseasType' => 'string',
            'certName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * realServer  源站ip/源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
    * overseasType  防护区域：0-中国大陆、1-中国大陆外
    * certName  证书名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'realServerType' => 'int32',
        'realServer' => null,
        'portHttp' => 'int32',
        'portHttps' => 'int32',
        'overseasType' => null,
        'certName' => null
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
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * realServer  源站ip/源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
    * overseasType  防护区域：0-中国大陆、1-中国大陆外
    * certName  证书名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'realServerType' => 'real_server_type',
            'realServer' => 'real_server',
            'portHttp' => 'port_http',
            'portHttps' => 'port_https',
            'overseasType' => 'overseas_type',
            'certName' => 'cert_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * realServer  源站ip/源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
    * overseasType  防护区域：0-中国大陆、1-中国大陆外
    * certName  证书名称
    *
    * @var string[]
    */
    protected static $setters = [
            'realServerType' => 'setRealServerType',
            'realServer' => 'setRealServer',
            'portHttp' => 'setPortHttp',
            'portHttps' => 'setPortHttps',
            'overseasType' => 'setOverseasType',
            'certName' => 'setCertName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * realServerType  源站类型。 0 - 源站IP， 1 - 源站域名。
    * realServer  源站ip/源站域名
    * portHttp  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
    * portHttps  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
    * overseasType  防护区域：0-中国大陆、1-中国大陆外
    * certName  证书名称
    *
    * @var string[]
    */
    protected static $getters = [
            'realServerType' => 'getRealServerType',
            'realServer' => 'getRealServer',
            'portHttp' => 'getPortHttp',
            'portHttps' => 'getPortHttps',
            'overseasType' => 'getOverseasType',
            'certName' => 'getCertName'
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
    const REAL_SERVER_TYPE_1 = 1;
    const REAL_SERVER_TYPE_0 = 0;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRealServerTypeAllowableValues()
    {
        return [
            self::REAL_SERVER_TYPE_1,
            self::REAL_SERVER_TYPE_0,
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
        $this->container['realServerType'] = isset($data['realServerType']) ? $data['realServerType'] : null;
        $this->container['realServer'] = isset($data['realServer']) ? $data['realServer'] : null;
        $this->container['portHttp'] = isset($data['portHttp']) ? $data['portHttp'] : null;
        $this->container['portHttps'] = isset($data['portHttps']) ? $data['portHttps'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['realServerType'] === null) {
            $invalidProperties[] = "'realServerType' can't be null";
        }
            $allowedValues = $this->getRealServerTypeAllowableValues();
                if (!is_null($this->container['realServerType']) && !in_array($this->container['realServerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'realServerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (($this->container['realServerType'] > 2000)) {
                $invalidProperties[] = "invalid value for 'realServerType', must be smaller than or equal to 2000.";
            }
            if (($this->container['realServerType'] < 0)) {
                $invalidProperties[] = "invalid value for 'realServerType', must be bigger than or equal to 0.";
            }
        if ($this->container['realServer'] === null) {
            $invalidProperties[] = "'realServer' can't be null";
        }
            if ((mb_strlen($this->container['realServer']) > 32768)) {
                $invalidProperties[] = "invalid value for 'realServer', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['realServer']) < 0)) {
                $invalidProperties[] = "invalid value for 'realServer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['overseasType']) && (mb_strlen($this->container['overseasType']) > 32768)) {
                $invalidProperties[] = "invalid value for 'overseasType', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['overseasType']) && (mb_strlen($this->container['overseasType']) < 0)) {
                $invalidProperties[] = "invalid value for 'overseasType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) > 32768)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) < 0)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be bigger than or equal to 0.";
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
    * Gets realServer
    *  源站ip/源站域名
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
    * @param string $realServer 源站ip/源站域名
    *
    * @return $this
    */
    public function setRealServer($realServer)
    {
        $this->container['realServer'] = $realServer;
        return $this;
    }

    /**
    * Gets portHttp
    *  HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
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
    * @param int[]|null $portHttp HTTP端口，与port_https不能同时为空。DDoS高防支持的HTTP端口可用ListDomainPort接口查询。
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
    *  HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
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
    * @param int[]|null $portHttps HTTPS端口，与port_http不能同时为空。DDoS高防支持的HTTPS端口可用ListDomainPort接口查询。
    *
    * @return $this
    */
    public function setPortHttps($portHttps)
    {
        $this->container['portHttps'] = $portHttps;
        return $this;
    }

    /**
    * Gets overseasType
    *  防护区域：0-中国大陆、1-中国大陆外
    *
    * @return string|null
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param string|null $overseasType 防护区域：0-中国大陆、1-中国大陆外
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

