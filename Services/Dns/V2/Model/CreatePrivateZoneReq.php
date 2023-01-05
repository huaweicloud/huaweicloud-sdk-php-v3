<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateZoneReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateZoneReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  待创建的域名。
    * description  域名的描述信息。
    * zoneType  域名类型。取值：private。
    * email  管理该zone的管理员邮箱。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    * router  router
    * proxyPattern  内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    * tags  资源标签。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'zoneType' => 'string',
            'email' => 'string',
            'ttl' => 'int',
            'router' => '\HuaweiCloud\SDK\Dns\V2\Model\Router',
            'proxyPattern' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dns\V2\Model\Tag[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  待创建的域名。
    * description  域名的描述信息。
    * zoneType  域名类型。取值：private。
    * email  管理该zone的管理员邮箱。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    * router  router
    * proxyPattern  内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    * tags  资源标签。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'zoneType' => null,
        'email' => null,
        'ttl' => 'int32',
        'router' => null,
        'proxyPattern' => null,
        'tags' => null,
        'enterpriseProjectId' => null
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
    * name  待创建的域名。
    * description  域名的描述信息。
    * zoneType  域名类型。取值：private。
    * email  管理该zone的管理员邮箱。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    * router  router
    * proxyPattern  内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    * tags  资源标签。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'zoneType' => 'zone_type',
            'email' => 'email',
            'ttl' => 'ttl',
            'router' => 'router',
            'proxyPattern' => 'proxy_pattern',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  待创建的域名。
    * description  域名的描述信息。
    * zoneType  域名类型。取值：private。
    * email  管理该zone的管理员邮箱。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    * router  router
    * proxyPattern  内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    * tags  资源标签。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'zoneType' => 'setZoneType',
            'email' => 'setEmail',
            'ttl' => 'setTtl',
            'router' => 'setRouter',
            'proxyPattern' => 'setProxyPattern',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  待创建的域名。
    * description  域名的描述信息。
    * zoneType  域名类型。取值：private。
    * email  管理该zone的管理员邮箱。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    * router  router
    * proxyPattern  内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    * tags  资源标签。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'zoneType' => 'getZoneType',
            'email' => 'getEmail',
            'ttl' => 'getTtl',
            'router' => 'getRouter',
            'proxyPattern' => 'getProxyPattern',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['zoneType'] = isset($data['zoneType']) ? $data['zoneType'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['router'] = isset($data['router']) ? $data['router'] : null;
        $this->container['proxyPattern'] = isset($data['proxyPattern']) ? $data['proxyPattern'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['zoneType'] === null) {
            $invalidProperties[] = "'zoneType' can't be null";
        }
        if ($this->container['router'] === null) {
            $invalidProperties[] = "'router' can't be null";
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
    * Gets name
    *  待创建的域名。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 待创建的域名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  域名的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 域名的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets zoneType
    *  域名类型。取值：private。
    *
    * @return string
    */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
    * Sets zoneType
    *
    * @param string $zoneType 域名类型。取值：private。
    *
    * @return $this
    */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;
        return $this;
    }

    /**
    * Gets email
    *  管理该zone的管理员邮箱。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 管理该zone的管理员邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets ttl
    *  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl 用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets router
    *  router
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Router
    */
    public function getRouter()
    {
        return $this->container['router'];
    }

    /**
    * Sets router
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Router $router router
    *
    * @return $this
    */
    public function setRouter($router)
    {
        $this->container['router'] = $router;
        return $this;
    }

    /**
    * Gets proxyPattern
    *  内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    *
    * @return string|null
    */
    public function getProxyPattern()
    {
        return $this->container['proxyPattern'];
    }

    /**
    * Sets proxyPattern
    *
    * @param string|null $proxyPattern 内网Zone的子域名递归解析代理模式。  取值范围：  AUTHORITY：当前Zone不进行递归解析 RECURSIVE：开启递归解析代理
    *
    * @return $this
    */
    public function setProxyPattern($proxyPattern)
    {
        $this->container['proxyPattern'] = $proxyPattern;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Tag[]|null $tags 资源标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 域名关联的企业项目ID，长度不超过36个字符。  默认值为0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

