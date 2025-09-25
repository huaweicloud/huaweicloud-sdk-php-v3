<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouteBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouteBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cname  WAF集群的cname后缀
    * name  WAF集群名称
    * servers  防护域名源站服务器信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cname' => 'string',
            'name' => 'string',
            'servers' => '\HuaweiCloud\SDK\Waf\V1\Model\RouteServerBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cname  WAF集群的cname后缀
    * name  WAF集群名称
    * servers  防护域名源站服务器信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cname' => null,
        'name' => null,
        'servers' => null
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
    * cname  WAF集群的cname后缀
    * name  WAF集群名称
    * servers  防护域名源站服务器信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cname' => 'cname',
            'name' => 'name',
            'servers' => 'servers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cname  WAF集群的cname后缀
    * name  WAF集群名称
    * servers  防护域名源站服务器信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'cname' => 'setCname',
            'name' => 'setName',
            'servers' => 'setServers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cname  WAF集群的cname后缀
    * name  WAF集群名称
    * servers  防护域名源站服务器信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'cname' => 'getCname',
            'name' => 'getName',
            'servers' => 'getServers'
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
        $this->container['cname'] = isset($data['cname']) ? $data['cname'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
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
        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
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
    * Gets cname
    *  WAF集群的cname后缀
    *
    * @return string|null
    */
    public function getCname()
    {
        return $this->container['cname'];
    }

    /**
    * Sets cname
    *
    * @param string|null $cname WAF集群的cname后缀
    *
    * @return $this
    */
    public function setCname($cname)
    {
        $this->container['cname'] = $cname;
        return $this;
    }

    /**
    * Gets name
    *  WAF集群名称
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
    * @param string $name WAF集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets servers
    *  防护域名源站服务器信息列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\RouteServerBody[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\RouteServerBody[] $servers 防护域名源站服务器信息列表
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
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

