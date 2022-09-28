<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceWithPort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceWithPort';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  加速域名id。
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    * activeStandby  主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    * httpPort  HTTP端口，默认80
    * httpsPort  HTTPS端口，默认443
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'ipOrDomain' => 'string',
            'originType' => 'string',
            'activeStandby' => 'int',
            'enableObsWebHosting' => 'int',
            'httpPort' => 'int',
            'httpsPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  加速域名id。
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    * activeStandby  主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    * httpPort  HTTP端口，默认80
    * httpsPort  HTTPS端口，默认443
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'ipOrDomain' => null,
        'originType' => null,
        'activeStandby' => 'int32',
        'enableObsWebHosting' => 'int32',
        'httpPort' => 'int32',
        'httpsPort' => 'int32'
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
    * domainId  加速域名id。
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    * activeStandby  主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    * httpPort  HTTP端口，默认80
    * httpsPort  HTTPS端口，默认443
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'ipOrDomain' => 'ip_or_domain',
            'originType' => 'origin_type',
            'activeStandby' => 'active_standby',
            'enableObsWebHosting' => 'enable_obs_web_hosting',
            'httpPort' => 'http_port',
            'httpsPort' => 'https_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  加速域名id。
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    * activeStandby  主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    * httpPort  HTTP端口，默认80
    * httpsPort  HTTPS端口，默认443
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'ipOrDomain' => 'setIpOrDomain',
            'originType' => 'setOriginType',
            'activeStandby' => 'setActiveStandby',
            'enableObsWebHosting' => 'setEnableObsWebHosting',
            'httpPort' => 'setHttpPort',
            'httpsPort' => 'setHttpsPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  加速域名id。
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    * activeStandby  主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    * httpPort  HTTP端口，默认80
    * httpsPort  HTTPS端口，默认443
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'ipOrDomain' => 'getIpOrDomain',
            'originType' => 'getOriginType',
            'activeStandby' => 'getActiveStandby',
            'enableObsWebHosting' => 'getEnableObsWebHosting',
            'httpPort' => 'getHttpPort',
            'httpsPort' => 'getHttpsPort'
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
    const ORIGIN_TYPE_IPADDR = 'ipaddr';
    const ORIGIN_TYPE_DOMAIN = 'domain';
    const ORIGIN_TYPE_OBS_BUCKET = 'obs_bucket';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginTypeAllowableValues()
    {
        return [
            self::ORIGIN_TYPE_IPADDR,
            self::ORIGIN_TYPE_DOMAIN,
            self::ORIGIN_TYPE_OBS_BUCKET,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ipOrDomain'] = isset($data['ipOrDomain']) ? $data['ipOrDomain'] : null;
        $this->container['originType'] = isset($data['originType']) ? $data['originType'] : null;
        $this->container['activeStandby'] = isset($data['activeStandby']) ? $data['activeStandby'] : null;
        $this->container['enableObsWebHosting'] = isset($data['enableObsWebHosting']) ? $data['enableObsWebHosting'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ipOrDomain'] === null) {
            $invalidProperties[] = "'ipOrDomain' can't be null";
        }
        if ($this->container['originType'] === null) {
            $invalidProperties[] = "'originType' can't be null";
        }
            $allowedValues = $this->getOriginTypeAllowableValues();
                if (!is_null($this->container['originType']) && !in_array($this->container['originType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'originType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['activeStandby'] === null) {
            $invalidProperties[] = "'activeStandby' can't be null";
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
    *  加速域名id。
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
    * @param string|null $domainId 加速域名id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ipOrDomain
    *  源站IP（非内网IP）或者域名。
    *
    * @return string
    */
    public function getIpOrDomain()
    {
        return $this->container['ipOrDomain'];
    }

    /**
    * Sets ipOrDomain
    *
    * @param string $ipOrDomain 源站IP（非内网IP）或者域名。
    *
    * @return $this
    */
    public function setIpOrDomain($ipOrDomain)
    {
        $this->container['ipOrDomain'] = $ipOrDomain;
        return $this;
    }

    /**
    * Gets originType
    *  源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    *
    * @return string
    */
    public function getOriginType()
    {
        return $this->container['originType'];
    }

    /**
    * Sets originType
    *
    * @param string $originType 源站类型（\"ipaddr\"： \"IP源站\"；\"domain\"： \"域名源站\"；\"obs_bucket\"： \"OBS Bucket源站\"）
    *
    * @return $this
    */
    public function setOriginType($originType)
    {
        $this->container['originType'] = $originType;
        return $this;
    }

    /**
    * Gets activeStandby
    *  主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    *
    * @return int
    */
    public function getActiveStandby()
    {
        return $this->container['activeStandby'];
    }

    /**
    * Sets activeStandby
    *
    * @param int $activeStandby 主备状态（1代表主站；0代表备站）；主源站必须存在，备源站可选。
    *
    * @return $this
    */
    public function setActiveStandby($activeStandby)
    {
        $this->container['activeStandby'] = $activeStandby;
        return $this;
    }

    /**
    * Gets enableObsWebHosting
    *  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @return int|null
    */
    public function getEnableObsWebHosting()
    {
        return $this->container['enableObsWebHosting'];
    }

    /**
    * Sets enableObsWebHosting
    *
    * @param int|null $enableObsWebHosting 是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @return $this
    */
    public function setEnableObsWebHosting($enableObsWebHosting)
    {
        $this->container['enableObsWebHosting'] = $enableObsWebHosting;
        return $this;
    }

    /**
    * Gets httpPort
    *  HTTP端口，默认80
    *
    * @return int|null
    */
    public function getHttpPort()
    {
        return $this->container['httpPort'];
    }

    /**
    * Sets httpPort
    *
    * @param int|null $httpPort HTTP端口，默认80
    *
    * @return $this
    */
    public function setHttpPort($httpPort)
    {
        $this->container['httpPort'] = $httpPort;
        return $this;
    }

    /**
    * Gets httpsPort
    *  HTTPS端口，默认443
    *
    * @return int|null
    */
    public function getHttpsPort()
    {
        return $this->container['httpsPort'];
    }

    /**
    * Sets httpsPort
    *
    * @param int|null $httpsPort HTTPS端口，默认443
    *
    * @return $this
    */
    public function setHttpsPort($httpsPort)
    {
        $this->container['httpsPort'] = $httpsPort;
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

