<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRecordSetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRecordSetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
    * type  记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * status  解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'status' => 'string',
            'ttl' => 'int',
            'records' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Dns\V2\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
    * type  记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * status  解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'type' => null,
        'status' => null,
        'ttl' => 'int32',
        'records' => null,
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
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
    * type  记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * status  解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'status' => 'status',
            'ttl' => 'ttl',
            'records' => 'records',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
    * type  记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * status  解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'status' => 'setStatus',
            'ttl' => 'setTtl',
            'records' => 'setRecords',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
    * description  可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
    * type  记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * status  解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
    * ttl  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    * records  解析记录的值。不同类型解析记录对应的值的规则不同。
    * tags  资源标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'status' => 'getStatus',
            'ttl' => 'getTtl',
            'records' => 'getRecords',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
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
    *  域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
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
    * @param string $name 域名，后缀需以zone name结束且为FQDN（即以“.”号结束的完整主机名）。
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
    *  可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
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
    * @param string|null $description 可选配置，对域名的描述。  长度不超过255个字符。  默认值为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 记录集的类型。  公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。  内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
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
    * @param string|null $status 解析记录的状态。 取值范围： ENABLE：启用 DISABLE：暂停 默认值为ENABLE。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ttl
    *  解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
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
    * @param int|null $ttl 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets records
    *  解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @return string[]
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[] $records 解析记录的值。不同类型解析记录对应的值的规则不同。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
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

