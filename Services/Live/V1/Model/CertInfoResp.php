<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playDomain  播放域名
    * projectId  租户ID
    * tenantName  租户名
    * startTime  证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * expireTime  证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * certType  证书类型, 1：国密证书， 0:默认，标准国际证书
    * gmCertType  国密证书类型, 1：签名证书， 2:加密证书
    * source  证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
    * certName  scm来源的证书名, 自有证书为空
    * certId  scm来源的证书ID, 自有证书为空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playDomain' => 'string',
            'projectId' => 'string',
            'tenantName' => 'string',
            'startTime' => 'string',
            'expireTime' => 'string',
            'certType' => 'int',
            'gmCertType' => 'int',
            'source' => 'string',
            'certName' => 'string',
            'certId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playDomain  播放域名
    * projectId  租户ID
    * tenantName  租户名
    * startTime  证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * expireTime  证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * certType  证书类型, 1：国密证书， 0:默认，标准国际证书
    * gmCertType  国密证书类型, 1：签名证书， 2:加密证书
    * source  证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
    * certName  scm来源的证书名, 自有证书为空
    * certId  scm来源的证书ID, 自有证书为空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playDomain' => null,
        'projectId' => null,
        'tenantName' => null,
        'startTime' => null,
        'expireTime' => null,
        'certType' => null,
        'gmCertType' => null,
        'source' => null,
        'certName' => null,
        'certId' => null
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
    * playDomain  播放域名
    * projectId  租户ID
    * tenantName  租户名
    * startTime  证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * expireTime  证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * certType  证书类型, 1：国密证书， 0:默认，标准国际证书
    * gmCertType  国密证书类型, 1：签名证书， 2:加密证书
    * source  证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
    * certName  scm来源的证书名, 自有证书为空
    * certId  scm来源的证书ID, 自有证书为空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playDomain' => 'play_domain',
            'projectId' => 'project_id',
            'tenantName' => 'tenant_name',
            'startTime' => 'start_time',
            'expireTime' => 'expire_time',
            'certType' => 'cert_type',
            'gmCertType' => 'gm_cert_type',
            'source' => 'source',
            'certName' => 'cert_name',
            'certId' => 'cert_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playDomain  播放域名
    * projectId  租户ID
    * tenantName  租户名
    * startTime  证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * expireTime  证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * certType  证书类型, 1：国密证书， 0:默认，标准国际证书
    * gmCertType  国密证书类型, 1：签名证书， 2:加密证书
    * source  证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
    * certName  scm来源的证书名, 自有证书为空
    * certId  scm来源的证书ID, 自有证书为空
    *
    * @var string[]
    */
    protected static $setters = [
            'playDomain' => 'setPlayDomain',
            'projectId' => 'setProjectId',
            'tenantName' => 'setTenantName',
            'startTime' => 'setStartTime',
            'expireTime' => 'setExpireTime',
            'certType' => 'setCertType',
            'gmCertType' => 'setGmCertType',
            'source' => 'setSource',
            'certName' => 'setCertName',
            'certId' => 'setCertId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playDomain  播放域名
    * projectId  租户ID
    * tenantName  租户名
    * startTime  证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * expireTime  证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    * certType  证书类型, 1：国密证书， 0:默认，标准国际证书
    * gmCertType  国密证书类型, 1：签名证书， 2:加密证书
    * source  证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
    * certName  scm来源的证书名, 自有证书为空
    * certId  scm来源的证书ID, 自有证书为空
    *
    * @var string[]
    */
    protected static $getters = [
            'playDomain' => 'getPlayDomain',
            'projectId' => 'getProjectId',
            'tenantName' => 'getTenantName',
            'startTime' => 'getStartTime',
            'expireTime' => 'getExpireTime',
            'certType' => 'getCertType',
            'gmCertType' => 'getGmCertType',
            'source' => 'getSource',
            'certName' => 'getCertName',
            'certId' => 'getCertId'
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
        $this->container['playDomain'] = isset($data['playDomain']) ? $data['playDomain'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['certType'] = isset($data['certType']) ? $data['certType'] : null;
        $this->container['gmCertType'] = isset($data['gmCertType']) ? $data['gmCertType'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['playDomain'] === null) {
            $invalidProperties[] = "'playDomain' can't be null";
        }
            if ((mb_strlen($this->container['playDomain']) > 255)) {
                $invalidProperties[] = "invalid value for 'playDomain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['playDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'playDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['tenantName'] === null) {
            $invalidProperties[] = "'tenantName' can't be null";
        }
            if ((mb_strlen($this->container['tenantName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
            if ((mb_strlen($this->container['expireTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 64)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 0)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) > 64)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) < 0)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) > 64)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) < 0)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be bigger than or equal to 0.";
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
    * Gets playDomain
    *  播放域名
    *
    * @return string
    */
    public function getPlayDomain()
    {
        return $this->container['playDomain'];
    }

    /**
    * Sets playDomain
    *
    * @param string $playDomain 播放域名
    *
    * @return $this
    */
    public function setPlayDomain($playDomain)
    {
        $this->container['playDomain'] = $playDomain;
        return $this;
    }

    /**
    * Gets projectId
    *  租户ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名
    *
    * @return string
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string $tenantName 租户名
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets startTime
    *  证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 证书开始时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    *
    * @return string
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string $expireTime 证书过期时间，格式：YYYY-MM-DDTHH:mm:ssZ，UTC时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets certType
    *  证书类型, 1：国密证书， 0:默认，标准国际证书
    *
    * @return int|null
    */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
    * Sets certType
    *
    * @param int|null $certType 证书类型, 1：国密证书， 0:默认，标准国际证书
    *
    * @return $this
    */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;
        return $this;
    }

    /**
    * Gets gmCertType
    *  国密证书类型, 1：签名证书， 2:加密证书
    *
    * @return int|null
    */
    public function getGmCertType()
    {
        return $this->container['gmCertType'];
    }

    /**
    * Sets gmCertType
    *
    * @param int|null $gmCertType 国密证书类型, 1：签名证书， 2:加密证书
    *
    * @return $this
    */
    public function setGmCertType($gmCertType)
    {
        $this->container['gmCertType'] = $gmCertType;
        return $this;
    }

    /**
    * Gets source
    *  证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
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
    * @param string|null $source 证书来源。 - scm：云证书与管理服务CCM。 - user：自有证书。
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
    *  scm来源的证书名, 自有证书为空
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
    * @param string|null $certName scm来源的证书名, 自有证书为空
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
    *  scm来源的证书ID, 自有证书为空
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
    * @param string|null $certId scm来源的证书ID, 自有证书为空
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
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

