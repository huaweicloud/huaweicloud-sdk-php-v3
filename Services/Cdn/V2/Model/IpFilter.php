<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
    * value  配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
    * value  配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null
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
    * type  IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
    * value  配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
    * value  配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
    * value  配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    *  IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
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
    * @param string $type IP黑白名单类型，off：关闭IP黑白名单，black：IP黑名单，white：IP白名单。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 配置IP黑白名单，当type=off时，非必传， 支持IPv6,支持配置IP地址和IP&掩码格式的网段, 多条规则用“,”分割,最多支持配置150个, 多个完全重复的IP/IP段将合并为一个,不支持带通配符的地址，如192.168.0.*。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

