<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePtrRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePtrRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    * tags  资源标签。
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicip' => '\HuaweiCloud\SDK\Dns\V2\Model\PublicIpReq',
            'ptrdnames' => 'string[]',
            'description' => 'string',
            'ttl' => 'int',
            'tags' => '\HuaweiCloud\SDK\Dns\V2\Model\Tag[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    * tags  资源标签。
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicip' => null,
        'ptrdnames' => null,
        'description' => null,
        'ttl' => 'int32',
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
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    * tags  资源标签。
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicip' => 'publicip',
            'ptrdnames' => 'ptrdnames',
            'description' => 'description',
            'ttl' => 'ttl',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    * tags  资源标签。
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicip' => 'setPublicip',
            'ptrdnames' => 'setPtrdnames',
            'description' => 'setDescription',
            'ttl' => 'setTtl',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    * tags  资源标签。
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicip' => 'getPublicip',
            'ptrdnames' => 'getPtrdnames',
            'description' => 'getDescription',
            'ttl' => 'getTtl',
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
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['ptrdnames'] = isset($data['ptrdnames']) ? $data['ptrdnames'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
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
        if ($this->container['ptrdnames'] === null) {
            $invalidProperties[] = "'ptrdnames' can't be null";
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
    * Gets publicip
    *  publicip
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PublicIpReq|null
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PublicIpReq|null $publicip publicip
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets ptrdnames
    *  反向解析记录对应的域名列表，最大个数不超过10个。
    *
    * @return string[]
    */
    public function getPtrdnames()
    {
        return $this->container['ptrdnames'];
    }

    /**
    * Sets ptrdnames
    *
    * @param string[] $ptrdnames 反向解析记录对应的域名列表，最大个数不超过10个。
    *
    * @return $this
    */
    public function setPtrdnames($ptrdnames)
    {
        $this->container['ptrdnames'] = $ptrdnames;
        return $this;
    }

    /**
    * Gets description
    *  对反向解析记录的描述。
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
    * @param string|null $description 对反向解析记录的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ttl
    *  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
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
    * @param int|null $ttl 反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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
    *  反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
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
    * @param string|null $enterpriseProjectId 反向解析关联的企业项目ID，长度不超过36个字符。默认值为0。
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

