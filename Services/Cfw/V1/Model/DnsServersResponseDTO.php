<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DnsServersResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DnsServersResponseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * isApplied  是否应用，0否 1是
    * isCustomized  是否是用户自定义的dns服务器，0否 1是
    * serverIp  DNS服务器IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'isApplied' => 'int',
            'isCustomized' => 'int',
            'serverIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * isApplied  是否应用，0否 1是
    * isCustomized  是否是用户自定义的dns服务器，0否 1是
    * serverIp  DNS服务器IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'isApplied' => 'int32',
        'isCustomized' => 'int32',
        'serverIp' => null
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
    * id  id
    * isApplied  是否应用，0否 1是
    * isCustomized  是否是用户自定义的dns服务器，0否 1是
    * serverIp  DNS服务器IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'isApplied' => 'is_applied',
            'isCustomized' => 'is_customized',
            'serverIp' => 'server_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * isApplied  是否应用，0否 1是
    * isCustomized  是否是用户自定义的dns服务器，0否 1是
    * serverIp  DNS服务器IP
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'isApplied' => 'setIsApplied',
            'isCustomized' => 'setIsCustomized',
            'serverIp' => 'setServerIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * isApplied  是否应用，0否 1是
    * isCustomized  是否是用户自定义的dns服务器，0否 1是
    * serverIp  DNS服务器IP
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'isApplied' => 'getIsApplied',
            'isCustomized' => 'getIsCustomized',
            'serverIp' => 'getServerIp'
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
        $this->container['isApplied'] = isset($data['isApplied']) ? $data['isApplied'] : null;
        $this->container['isCustomized'] = isset($data['isCustomized']) ? $data['isCustomized'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
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
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isApplied
    *  是否应用，0否 1是
    *
    * @return int|null
    */
    public function getIsApplied()
    {
        return $this->container['isApplied'];
    }

    /**
    * Sets isApplied
    *
    * @param int|null $isApplied 是否应用，0否 1是
    *
    * @return $this
    */
    public function setIsApplied($isApplied)
    {
        $this->container['isApplied'] = $isApplied;
        return $this;
    }

    /**
    * Gets isCustomized
    *  是否是用户自定义的dns服务器，0否 1是
    *
    * @return int|null
    */
    public function getIsCustomized()
    {
        return $this->container['isCustomized'];
    }

    /**
    * Sets isCustomized
    *
    * @param int|null $isCustomized 是否是用户自定义的dns服务器，0否 1是
    *
    * @return $this
    */
    public function setIsCustomized($isCustomized)
    {
        $this->container['isCustomized'] = $isCustomized;
        return $this;
    }

    /**
    * Gets serverIp
    *  DNS服务器IP
    *
    * @return string|null
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string|null $serverIp DNS服务器IP
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
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

