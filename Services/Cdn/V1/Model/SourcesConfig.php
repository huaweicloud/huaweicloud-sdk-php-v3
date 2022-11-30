<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourcesConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourcesConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originAddr  源站IP或者域名。
    * originType  源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
    * priority  源站优先级（70：主，30：备）。
    * obsWebHostingStatus  是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    * httpPort  HTTP端口，默认80。
    * httpsPort  HTTPS端口，默认443。
    * hostName  回源HOST，默认加速域名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originAddr' => 'string',
            'originType' => 'string',
            'priority' => 'int',
            'obsWebHostingStatus' => 'string',
            'httpPort' => 'int',
            'httpsPort' => 'int',
            'hostName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originAddr  源站IP或者域名。
    * originType  源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
    * priority  源站优先级（70：主，30：备）。
    * obsWebHostingStatus  是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    * httpPort  HTTP端口，默认80。
    * httpsPort  HTTPS端口，默认443。
    * hostName  回源HOST，默认加速域名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originAddr' => null,
        'originType' => null,
        'priority' => null,
        'obsWebHostingStatus' => null,
        'httpPort' => null,
        'httpsPort' => null,
        'hostName' => null
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
    * originAddr  源站IP或者域名。
    * originType  源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
    * priority  源站优先级（70：主，30：备）。
    * obsWebHostingStatus  是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    * httpPort  HTTP端口，默认80。
    * httpsPort  HTTPS端口，默认443。
    * hostName  回源HOST，默认加速域名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originAddr' => 'origin_addr',
            'originType' => 'origin_type',
            'priority' => 'priority',
            'obsWebHostingStatus' => 'obs_web_hosting_status',
            'httpPort' => 'http_port',
            'httpsPort' => 'https_port',
            'hostName' => 'host_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originAddr  源站IP或者域名。
    * originType  源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
    * priority  源站优先级（70：主，30：备）。
    * obsWebHostingStatus  是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    * httpPort  HTTP端口，默认80。
    * httpsPort  HTTPS端口，默认443。
    * hostName  回源HOST，默认加速域名。
    *
    * @var string[]
    */
    protected static $setters = [
            'originAddr' => 'setOriginAddr',
            'originType' => 'setOriginType',
            'priority' => 'setPriority',
            'obsWebHostingStatus' => 'setObsWebHostingStatus',
            'httpPort' => 'setHttpPort',
            'httpsPort' => 'setHttpsPort',
            'hostName' => 'setHostName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originAddr  源站IP或者域名。
    * originType  源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
    * priority  源站优先级（70：主，30：备）。
    * obsWebHostingStatus  是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    * httpPort  HTTP端口，默认80。
    * httpsPort  HTTPS端口，默认443。
    * hostName  回源HOST，默认加速域名。
    *
    * @var string[]
    */
    protected static $getters = [
            'originAddr' => 'getOriginAddr',
            'originType' => 'getOriginType',
            'priority' => 'getPriority',
            'obsWebHostingStatus' => 'getObsWebHostingStatus',
            'httpPort' => 'getHttpPort',
            'httpsPort' => 'getHttpsPort',
            'hostName' => 'getHostName'
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
        $this->container['originAddr'] = isset($data['originAddr']) ? $data['originAddr'] : null;
        $this->container['originType'] = isset($data['originType']) ? $data['originType'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['obsWebHostingStatus'] = isset($data['obsWebHostingStatus']) ? $data['obsWebHostingStatus'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['originAddr'] === null) {
            $invalidProperties[] = "'originAddr' can't be null";
        }
        if ($this->container['originType'] === null) {
            $invalidProperties[] = "'originType' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets originAddr
    *  源站IP或者域名。
    *
    * @return string
    */
    public function getOriginAddr()
    {
        return $this->container['originAddr'];
    }

    /**
    * Sets originAddr
    *
    * @param string $originAddr 源站IP或者域名。
    *
    * @return $this
    */
    public function setOriginAddr($originAddr)
    {
        $this->container['originAddr'] = $originAddr;
        return $this;
    }

    /**
    * Gets originType
    *  源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
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
    * @param string $originType 源站类型（\"ipaddr\"：\"IP源站\"，\"domain\"：\"域名源站\"，\"obs_bucket\"：\"OBS Bucket源站\"）。
    *
    * @return $this
    */
    public function setOriginType($originType)
    {
        $this->container['originType'] = $originType;
        return $this;
    }

    /**
    * Gets priority
    *  源站优先级（70：主，30：备）。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 源站优先级（70：主，30：备）。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets obsWebHostingStatus
    *  是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    *
    * @return string|null
    */
    public function getObsWebHostingStatus()
    {
        return $this->container['obsWebHostingStatus'];
    }

    /**
    * Sets obsWebHostingStatus
    *
    * @param string|null $obsWebHostingStatus 是否开启Obs静态网站托管，源站类型为obs_bucket时传递(off：关闭，on：开启)。
    *
    * @return $this
    */
    public function setObsWebHostingStatus($obsWebHostingStatus)
    {
        $this->container['obsWebHostingStatus'] = $obsWebHostingStatus;
        return $this;
    }

    /**
    * Gets httpPort
    *  HTTP端口，默认80。
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
    * @param int|null $httpPort HTTP端口，默认80。
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
    *  HTTPS端口，默认443。
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
    * @param int|null $httpsPort HTTPS端口，默认443。
    *
    * @return $this
    */
    public function setHttpsPort($httpsPort)
    {
        $this->container['httpsPort'] = $httpsPort;
        return $this;
    }

    /**
    * Gets hostName
    *  回源HOST，默认加速域名。
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 回源HOST，默认加速域名。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
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

