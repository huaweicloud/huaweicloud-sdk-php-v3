<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProxyIpgroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProxyIpgroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableIpGroup  允许访问控制或者不允许 true | false。
    * type  白名单或者黑名单 'white' | 'black'
    * ipGroup  ipGroup
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableIpGroup' => 'bool',
            'type' => 'string',
            'ipGroup' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ProxyIpGroupDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableIpGroup  允许访问控制或者不允许 true | false。
    * type  白名单或者黑名单 'white' | 'black'
    * ipGroup  ipGroup
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableIpGroup' => null,
        'type' => null,
        'ipGroup' => null
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
    * enableIpGroup  允许访问控制或者不允许 true | false。
    * type  白名单或者黑名单 'white' | 'black'
    * ipGroup  ipGroup
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableIpGroup' => 'enable_ip_group',
            'type' => 'type',
            'ipGroup' => 'ip_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableIpGroup  允许访问控制或者不允许 true | false。
    * type  白名单或者黑名单 'white' | 'black'
    * ipGroup  ipGroup
    *
    * @var string[]
    */
    protected static $setters = [
            'enableIpGroup' => 'setEnableIpGroup',
            'type' => 'setType',
            'ipGroup' => 'setIpGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableIpGroup  允许访问控制或者不允许 true | false。
    * type  白名单或者黑名单 'white' | 'black'
    * ipGroup  ipGroup
    *
    * @var string[]
    */
    protected static $getters = [
            'enableIpGroup' => 'getEnableIpGroup',
            'type' => 'getType',
            'ipGroup' => 'getIpGroup'
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
        $this->container['enableIpGroup'] = isset($data['enableIpGroup']) ? $data['enableIpGroup'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ipGroup'] = isset($data['ipGroup']) ? $data['ipGroup'] : null;
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
    * Gets enableIpGroup
    *  允许访问控制或者不允许 true | false。
    *
    * @return bool|null
    */
    public function getEnableIpGroup()
    {
        return $this->container['enableIpGroup'];
    }

    /**
    * Sets enableIpGroup
    *
    * @param bool|null $enableIpGroup 允许访问控制或者不允许 true | false。
    *
    * @return $this
    */
    public function setEnableIpGroup($enableIpGroup)
    {
        $this->container['enableIpGroup'] = $enableIpGroup;
        return $this;
    }

    /**
    * Gets type
    *  白名单或者黑名单 'white' | 'black'
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 白名单或者黑名单 'white' | 'black'
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ipGroup
    *  ipGroup
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ProxyIpGroupDetail|null
    */
    public function getIpGroup()
    {
        return $this->container['ipGroup'];
    }

    /**
    * Sets ipGroup
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ProxyIpGroupDetail|null $ipGroup ipGroup
    *
    * @return $this
    */
    public function setIpGroup($ipGroup)
    {
        $this->container['ipGroup'] = $ipGroup;
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

