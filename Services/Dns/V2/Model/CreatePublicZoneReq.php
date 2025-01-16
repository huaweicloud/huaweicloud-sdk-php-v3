<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePublicZoneReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePublicZoneReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Zone名称
    * description  描述
    * zoneType  域名类型。取值：public。
    * email  管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符.
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'zoneType' => 'string',
            'email' => 'string',
            'ttl' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dns\V2\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Zone名称
    * description  描述
    * zoneType  域名类型。取值：public。
    * email  管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符.
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'zoneType' => null,
        'email' => null,
        'ttl' => 'int32',
        'enterpriseProjectId' => null,
        'tags' => null
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
    * name  Zone名称
    * description  描述
    * zoneType  域名类型。取值：public。
    * email  管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符.
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'zoneType' => 'zone_type',
            'email' => 'email',
            'ttl' => 'ttl',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Zone名称
    * description  描述
    * zoneType  域名类型。取值：public。
    * email  管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符.
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'zoneType' => 'setZoneType',
            'email' => 'setEmail',
            'ttl' => 'setTtl',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Zone名称
    * description  描述
    * zoneType  域名类型。取值：public。
    * email  管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符.
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'zoneType' => 'getZoneType',
            'email' => 'getEmail',
            'ttl' => 'getTtl',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    *  Zone名称
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
    * @param string $name Zone名称
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
    *  描述
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
    * @param string|null $description 描述
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
    *  域名类型。取值：public。
    *
    * @return string|null
    */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
    * Sets zoneType
    *
    * @param string|null $zoneType 域名类型。取值：public。
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
    *  管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
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
    * @param string|null $email 管理该zone的管理员邮箱，用于生成该Zone的SOA记录。
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
    *  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
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
    * @param int|null $ttl 用于填写默认生成的SOA记录中有效缓存时间，以秒为单位.
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  域名关联的企业项目ID，长度不超过36个字符.
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
    * @param string|null $enterpriseProjectId 域名关联的企业项目ID，长度不超过36个字符.
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

