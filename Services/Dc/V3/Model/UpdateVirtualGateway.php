<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVirtualGateway implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVirtualGateway';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  更新虚拟网关的名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'localEpGroup' => 'string[]',
            'localEpGroupIpv6' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  更新虚拟网关的名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'localEpGroup' => null,
        'localEpGroupIpv6' => null
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
    * name  更新虚拟网关的名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'localEpGroup' => 'local_ep_group',
            'localEpGroupIpv6' => 'local_ep_group_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  更新虚拟网关的名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'localEpGroup' => 'setLocalEpGroup',
            'localEpGroupIpv6' => 'setLocalEpGroupIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  更新虚拟网关的名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'localEpGroup' => 'getLocalEpGroup',
            'localEpGroupIpv6' => 'getLocalEpGroupIpv6'
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
        $this->container['localEpGroup'] = isset($data['localEpGroup']) ? $data['localEpGroup'] : null;
        $this->container['localEpGroupIpv6'] = isset($data['localEpGroupIpv6']) ? $data['localEpGroupIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  更新虚拟网关的名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 更新虚拟网关的名字
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
    *  虚拟网关的描述信息
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
    * @param string|null $description 虚拟网关的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets localEpGroup
    *  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    *
    * @return string[]|null
    */
    public function getLocalEpGroup()
    {
        return $this->container['localEpGroup'];
    }

    /**
    * Sets localEpGroup
    *
    * @param string[]|null $localEpGroup 虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    *
    * @return $this
    */
    public function setLocalEpGroup($localEpGroup)
    {
        $this->container['localEpGroup'] = $localEpGroup;
        return $this;
    }

    /**
    * Gets localEpGroupIpv6
    *  虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @return string[]|null
    */
    public function getLocalEpGroupIpv6()
    {
        return $this->container['localEpGroupIpv6'];
    }

    /**
    * Sets localEpGroupIpv6
    *
    * @param string[]|null $localEpGroupIpv6 虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @return $this
    */
    public function setLocalEpGroupIpv6($localEpGroupIpv6)
    {
        $this->container['localEpGroupIpv6'] = $localEpGroupIpv6;
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

