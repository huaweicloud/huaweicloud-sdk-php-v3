<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Whitelist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Whitelist';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  白名单分组名称，每个实例支持创建4个分组。
    * ipList  白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'ipList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  白名单分组名称，每个实例支持创建4个分组。
    * ipList  白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'ipList' => null
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
    * groupName  白名单分组名称，每个实例支持创建4个分组。
    * ipList  白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'ipList' => 'ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  白名单分组名称，每个实例支持创建4个分组。
    * ipList  白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'ipList' => 'setIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  白名单分组名称，每个实例支持创建4个分组。
    * ipList  白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'ipList' => 'getIpList'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
        if ($this->container['ipList'] === null) {
            $invalidProperties[] = "'ipList' can't be null";
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
    * Gets groupName
    *  白名单分组名称，每个实例支持创建4个分组。
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 白名单分组名称，每个实例支持创建4个分组。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets ipList
    *  白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @return string[]
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param string[] $ipList 白名单分组下的IP列表,每个实例最多可以添加20个IP地址/地址段。如果有多个，可以用逗号分隔。不支持的IP和地址段：0.0.0.0和0.0.0.0/0
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
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

