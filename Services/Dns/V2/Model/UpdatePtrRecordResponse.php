<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePtrRecordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePtrRecordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  反向解析记录的ID，格式形如{region}:{floatingip_id}。
    * ptrdname  反向解析记录对应的域名。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * address  弹性公网IP的IP地址。
    * status  资源状态。
    * action  对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    * links  links
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ptrdname' => 'string',
            'description' => 'string',
            'ttl' => 'int',
            'address' => 'string',
            'status' => 'string',
            'action' => 'string',
            'links' => '\HuaweiCloud\SDK\Dns\V2\Model\PageLink'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  反向解析记录的ID，格式形如{region}:{floatingip_id}。
    * ptrdname  反向解析记录对应的域名。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * address  弹性公网IP的IP地址。
    * status  资源状态。
    * action  对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    * links  links
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ptrdname' => null,
        'description' => null,
        'ttl' => 'int32',
        'address' => null,
        'status' => null,
        'action' => null,
        'links' => null
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
    * id  反向解析记录的ID，格式形如{region}:{floatingip_id}。
    * ptrdname  反向解析记录对应的域名。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * address  弹性公网IP的IP地址。
    * status  资源状态。
    * action  对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    * links  links
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ptrdname' => 'ptrdname',
            'description' => 'description',
            'ttl' => 'ttl',
            'address' => 'address',
            'status' => 'status',
            'action' => 'action',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  反向解析记录的ID，格式形如{region}:{floatingip_id}。
    * ptrdname  反向解析记录对应的域名。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * address  弹性公网IP的IP地址。
    * status  资源状态。
    * action  对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    * links  links
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ptrdname' => 'setPtrdname',
            'description' => 'setDescription',
            'ttl' => 'setTtl',
            'address' => 'setAddress',
            'status' => 'setStatus',
            'action' => 'setAction',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  反向解析记录的ID，格式形如{region}:{floatingip_id}。
    * ptrdname  反向解析记录对应的域名。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。
    * address  弹性公网IP的IP地址。
    * status  资源状态。
    * action  对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    * links  links
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ptrdname' => 'getPtrdname',
            'description' => 'getDescription',
            'ttl' => 'getTtl',
            'address' => 'getAddress',
            'status' => 'getStatus',
            'action' => 'getAction',
            'links' => 'getLinks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ptrdname'] = isset($data['ptrdname']) ? $data['ptrdname'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    * Gets id
    *  反向解析记录的ID，格式形如{region}:{floatingip_id}。
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
    * @param string|null $id 反向解析记录的ID，格式形如{region}:{floatingip_id}。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ptrdname
    *  反向解析记录对应的域名。
    *
    * @return string|null
    */
    public function getPtrdname()
    {
        return $this->container['ptrdname'];
    }

    /**
    * Sets ptrdname
    *
    * @param string|null $ptrdname 反向解析记录对应的域名。
    *
    * @return $this
    */
    public function setPtrdname($ptrdname)
    {
        $this->container['ptrdname'] = $ptrdname;
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
    * Gets address
    *  弹性公网IP的IP地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 弹性公网IP的IP地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。
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
    * @param string|null $status 资源状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets action
    *  对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 对该资源的当前操作。  取值范围：  CREATE：表示创建 UPDATE：表示更新 DELETE：表示删除 NONE：表示无操作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

