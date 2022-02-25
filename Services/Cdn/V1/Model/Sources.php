<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Sources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Sources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
    * activeStandby  主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipOrDomain' => 'string',
            'originType' => 'string',
            'activeStandby' => 'int',
            'enableObsWebHosting' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
    * activeStandby  主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipOrDomain' => null,
        'originType' => null,
        'activeStandby' => null,
        'enableObsWebHosting' => 'int32'
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
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
    * activeStandby  主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipOrDomain' => 'ip_or_domain',
            'originType' => 'origin_type',
            'activeStandby' => 'active_standby',
            'enableObsWebHosting' => 'enable_obs_web_hosting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
    * activeStandby  主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @var string[]
    */
    protected static $setters = [
            'ipOrDomain' => 'setIpOrDomain',
            'originType' => 'setOriginType',
            'activeStandby' => 'setActiveStandby',
            'enableObsWebHosting' => 'setEnableObsWebHosting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipOrDomain  源站IP（非内网IP）或者域名。
    * originType  源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
    * activeStandby  主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
    * enableObsWebHosting  是否开启Obs静态网站托管(0表示关闭,1表示则为开启)，源站类型为obs_bucket时传递。
    *
    * @var string[]
    */
    protected static $getters = [
            'ipOrDomain' => 'getIpOrDomain',
            'originType' => 'getOriginType',
            'activeStandby' => 'getActiveStandby',
            'enableObsWebHosting' => 'getEnableObsWebHosting'
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
        $this->container['ipOrDomain'] = isset($data['ipOrDomain']) ? $data['ipOrDomain'] : null;
        $this->container['originType'] = isset($data['originType']) ? $data['originType'] : null;
        $this->container['activeStandby'] = isset($data['activeStandby']) ? $data['activeStandby'] : null;
        $this->container['enableObsWebHosting'] = isset($data['enableObsWebHosting']) ? $data['enableObsWebHosting'] : null;
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
    *  源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
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
    * @param string $originType 源站类型取值：ipaddr、 domain、obs_bucket，分别表示：源站IP、源站域名、OBS桶访问域名。
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
    *  主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
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
    * @param int $activeStandby 主备状态（1代表主站；0代表备站）,主源站必须存在，备源站可选，OBS桶不能有备源站。
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

