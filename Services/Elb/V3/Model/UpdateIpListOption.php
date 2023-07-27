<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateIpListOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateIpListOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  IP地址组的名称
    * ipList  IP地址组中包含的IP列表。
    * description  IP地址组的描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ipList' => '\HuaweiCloud\SDK\Elb\V3\Model\UpadateIpGroupIpOption[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  IP地址组的名称
    * ipList  IP地址组中包含的IP列表。
    * description  IP地址组的描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ipList' => null,
        'description' => null
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
    * name  IP地址组的名称
    * ipList  IP地址组中包含的IP列表。
    * description  IP地址组的描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ipList' => 'ip_list',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  IP地址组的名称
    * ipList  IP地址组中包含的IP列表。
    * description  IP地址组的描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ipList' => 'setIpList',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  IP地址组的名称
    * ipList  IP地址组中包含的IP列表。
    * description  IP地址组的描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ipList' => 'getIpList',
            'description' => 'getDescription'
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
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets name
    *  IP地址组的名称
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
    * @param string|null $name IP地址组的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipList
    *  IP地址组中包含的IP列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpadateIpGroupIpOption[]|null
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpadateIpGroupIpOption[]|null $ipList IP地址组中包含的IP列表。
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
        return $this;
    }

    /**
    * Gets description
    *  IP地址组的描述信息
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
    * @param string|null $description IP地址组的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

