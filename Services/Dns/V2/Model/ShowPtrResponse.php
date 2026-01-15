<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPtrResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPtrResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表,最大个数不超过10个。
    * id  反向解析记录的ID。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    * links  links
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicip' => '\HuaweiCloud\SDK\Dns\V2\Model\PublicIpRes',
            'ptrdnames' => 'string[]',
            'id' => 'string',
            'description' => 'string',
            'ttl' => 'int',
            'status' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表,最大个数不超过10个。
    * id  反向解析记录的ID。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    * links  links
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicip' => null,
        'ptrdnames' => null,
        'id' => null,
        'description' => null,
        'ttl' => 'int32',
        'status' => null,
        'links' => null,
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
    * ptrdnames  反向解析记录对应的域名列表,最大个数不超过10个。
    * id  反向解析记录的ID。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    * links  links
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicip' => 'publicip',
            'ptrdnames' => 'ptrdnames',
            'id' => 'id',
            'description' => 'description',
            'ttl' => 'ttl',
            'status' => 'status',
            'links' => 'links',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表,最大个数不超过10个。
    * id  反向解析记录的ID。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    * links  links
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicip' => 'setPublicip',
            'ptrdnames' => 'setPtrdnames',
            'id' => 'setId',
            'description' => 'setDescription',
            'ttl' => 'setTtl',
            'status' => 'setStatus',
            'links' => 'setLinks',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicip  publicip
    * ptrdnames  反向解析记录对应的域名列表,最大个数不超过10个。
    * id  反向解析记录的ID。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * status  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    * links  links
    * enterpriseProjectId  反向解析关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicip' => 'getPublicip',
            'ptrdnames' => 'getPtrdnames',
            'id' => 'getId',
            'description' => 'getDescription',
            'ttl' => 'getTtl',
            'status' => 'getStatus',
            'links' => 'getLinks',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PublicIpRes|null
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PublicIpRes|null $publicip publicip
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
    *  反向解析记录对应的域名列表,最大个数不超过10个。
    *
    * @return string[]|null
    */
    public function getPtrdnames()
    {
        return $this->container['ptrdnames'];
    }

    /**
    * Sets ptrdnames
    *
    * @param string[]|null $ptrdnames 反向解析记录对应的域名列表,最大个数不超过10个。
    *
    * @return $this
    */
    public function setPtrdnames($ptrdnames)
    {
        $this->container['ptrdnames'] = $ptrdnames;
        return $this;
    }

    /**
    * Gets id
    *  反向解析记录的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 反向解析记录的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    *  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
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
    * @param int|null $ttl 反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 资源状态。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ILLEGAL：违规冻结 - POLICE：公安冻结 - ERROR：失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\PageLink|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  反向解析关联的企业项目ID，长度不超过36个字符。
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
    * @param string|null $enterpriseProjectId 反向解析关联的企业项目ID，长度不超过36个字符。
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

