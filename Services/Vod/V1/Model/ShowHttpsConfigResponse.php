<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHttpsConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHttpsConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  来源，user表示用户自己上传，scm表示scm证书
    * certName  证书名称
    * certId  证书id
    * httpsStatus  https配置
    * certificate  证书内容
    * forceRedirectHttps  客户端请求是否强制重定向，0表示不重定向，1表示重定向
    * http2  是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'certName' => 'string',
            'certId' => 'string',
            'httpsStatus' => 'int',
            'certificate' => 'string',
            'forceRedirectHttps' => 'int',
            'http2' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  来源，user表示用户自己上传，scm表示scm证书
    * certName  证书名称
    * certId  证书id
    * httpsStatus  https配置
    * certificate  证书内容
    * forceRedirectHttps  客户端请求是否强制重定向，0表示不重定向，1表示重定向
    * http2  是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'certName' => null,
        'certId' => null,
        'httpsStatus' => null,
        'certificate' => null,
        'forceRedirectHttps' => null,
        'http2' => null
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
    * source  来源，user表示用户自己上传，scm表示scm证书
    * certName  证书名称
    * certId  证书id
    * httpsStatus  https配置
    * certificate  证书内容
    * forceRedirectHttps  客户端请求是否强制重定向，0表示不重定向，1表示重定向
    * http2  是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'certName' => 'cert_name',
            'certId' => 'cert_id',
            'httpsStatus' => 'https_status',
            'certificate' => 'certificate',
            'forceRedirectHttps' => 'force_redirect_https',
            'http2' => 'http2'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  来源，user表示用户自己上传，scm表示scm证书
    * certName  证书名称
    * certId  证书id
    * httpsStatus  https配置
    * certificate  证书内容
    * forceRedirectHttps  客户端请求是否强制重定向，0表示不重定向，1表示重定向
    * http2  是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'certName' => 'setCertName',
            'certId' => 'setCertId',
            'httpsStatus' => 'setHttpsStatus',
            'certificate' => 'setCertificate',
            'forceRedirectHttps' => 'setForceRedirectHttps',
            'http2' => 'setHttp2'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  来源，user表示用户自己上传，scm表示scm证书
    * certName  证书名称
    * certId  证书id
    * httpsStatus  https配置
    * certificate  证书内容
    * forceRedirectHttps  客户端请求是否强制重定向，0表示不重定向，1表示重定向
    * http2  是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'certName' => 'getCertName',
            'certId' => 'getCertId',
            'httpsStatus' => 'getHttpsStatus',
            'certificate' => 'getCertificate',
            'forceRedirectHttps' => 'getForceRedirectHttps',
            'http2' => 'getHttp2'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
        $this->container['httpsStatus'] = isset($data['httpsStatus']) ? $data['httpsStatus'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['forceRedirectHttps'] = isset($data['forceRedirectHttps']) ? $data['forceRedirectHttps'] : null;
        $this->container['http2'] = isset($data['http2']) ? $data['http2'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 64)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 0)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) > 64)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) < 3)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) > 16)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) < 16)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['httpsStatus']) && ($this->container['httpsStatus'] > 1)) {
                $invalidProperties[] = "invalid value for 'httpsStatus', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['httpsStatus']) && ($this->container['httpsStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'httpsStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) > 10240)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) < 0)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['forceRedirectHttps']) && ($this->container['forceRedirectHttps'] > 1)) {
                $invalidProperties[] = "invalid value for 'forceRedirectHttps', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['forceRedirectHttps']) && ($this->container['forceRedirectHttps'] < 0)) {
                $invalidProperties[] = "invalid value for 'forceRedirectHttps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['http2']) && ($this->container['http2'] > 1)) {
                $invalidProperties[] = "invalid value for 'http2', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['http2']) && ($this->container['http2'] < 0)) {
                $invalidProperties[] = "invalid value for 'http2', must be bigger than or equal to 0.";
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
    * Gets source
    *  来源，user表示用户自己上传，scm表示scm证书
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 来源，user表示用户自己上传，scm表示scm证书
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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
    * Gets certId
    *  证书id
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId 证书id
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
        return $this;
    }

    /**
    * Gets httpsStatus
    *  https配置
    *
    * @return int|null
    */
    public function getHttpsStatus()
    {
        return $this->container['httpsStatus'];
    }

    /**
    * Sets httpsStatus
    *
    * @param int|null $httpsStatus https配置
    *
    * @return $this
    */
    public function setHttpsStatus($httpsStatus)
    {
        $this->container['httpsStatus'] = $httpsStatus;
        return $this;
    }

    /**
    * Gets certificate
    *  证书内容
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate 证书内容
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets forceRedirectHttps
    *  客户端请求是否强制重定向，0表示不重定向，1表示重定向
    *
    * @return int|null
    */
    public function getForceRedirectHttps()
    {
        return $this->container['forceRedirectHttps'];
    }

    /**
    * Sets forceRedirectHttps
    *
    * @param int|null $forceRedirectHttps 客户端请求是否强制重定向，0表示不重定向，1表示重定向
    *
    * @return $this
    */
    public function setForceRedirectHttps($forceRedirectHttps)
    {
        $this->container['forceRedirectHttps'] = $forceRedirectHttps;
        return $this;
    }

    /**
    * Gets http2
    *  是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @return int|null
    */
    public function getHttp2()
    {
        return $this->container['http2'];
    }

    /**
    * Sets http2
    *
    * @param int|null $http2 是否使用HTTP2.0，0表示不使用HTTP2.0，1表示使用
    *
    * @return $this
    */
    public function setHttp2($http2)
    {
        $this->container['http2'] = $http2;
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

