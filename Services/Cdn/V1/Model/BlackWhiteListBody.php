<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlackWhiteListBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlackWhiteListBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    * ipList  IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'ipList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    * ipList  IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => 'int32',
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
    * type  IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    * ipList  IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'ipList' => 'ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    * ipList  IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'ipList' => 'setIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    * ipList  IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets type
    *  IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type IP黑白名单类型（0：关闭IP黑白名单功能，1：黑名单，2：白名单）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ipList
    *  IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
    *
    * @return string[]|null
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param string[]|null $ipList IP黑白名单列表（支持掩码且有掩码的情况下IP必须是该IP段的第一个IP）
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

