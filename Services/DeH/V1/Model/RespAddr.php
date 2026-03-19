<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RespAddr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RespAddr';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addr  云服务器的vpc ip。
    * version  云服务器的vpc版本。
    * osExtIpStype  扩展属性，分配IP地址方式。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addr' => 'string',
            'version' => 'int',
            'osExtIpStype' => 'string',
            'osExtIpsMaCmacAddr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addr  云服务器的vpc ip。
    * version  云服务器的vpc版本。
    * osExtIpStype  扩展属性，分配IP地址方式。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addr' => null,
        'version' => null,
        'osExtIpStype' => null,
        'osExtIpsMaCmacAddr' => null
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
    * addr  云服务器的vpc ip。
    * version  云服务器的vpc版本。
    * osExtIpStype  扩展属性，分配IP地址方式。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addr' => 'addr',
            'version' => 'version',
            'osExtIpStype' => 'OS-EXT-IPS:type',
            'osExtIpsMaCmacAddr' => 'OS-EXT-IPS-MAC:mac_addr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addr  云服务器的vpc ip。
    * version  云服务器的vpc版本。
    * osExtIpStype  扩展属性，分配IP地址方式。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'addr' => 'setAddr',
            'version' => 'setVersion',
            'osExtIpStype' => 'setOsExtIpStype',
            'osExtIpsMaCmacAddr' => 'setOsExtIpsMaCmacAddr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addr  云服务器的vpc ip。
    * version  云服务器的vpc版本。
    * osExtIpStype  扩展属性，分配IP地址方式。
    * osExtIpsMaCmacAddr  扩展属性，MAC地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'addr' => 'getAddr',
            'version' => 'getVersion',
            'osExtIpStype' => 'getOsExtIpStype',
            'osExtIpsMaCmacAddr' => 'getOsExtIpsMaCmacAddr'
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['osExtIpStype'] = isset($data['osExtIpStype']) ? $data['osExtIpStype'] : null;
        $this->container['osExtIpsMaCmacAddr'] = isset($data['osExtIpsMaCmacAddr']) ? $data['osExtIpsMaCmacAddr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets addr
    *  云服务器的vpc ip。
    *
    * @return string
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string $addr 云服务器的vpc ip。
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets version
    *  云服务器的vpc版本。
    *
    * @return int
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int $version 云服务器的vpc版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets osExtIpStype
    *  扩展属性，分配IP地址方式。
    *
    * @return string|null
    */
    public function getOsExtIpStype()
    {
        return $this->container['osExtIpStype'];
    }

    /**
    * Sets osExtIpStype
    *
    * @param string|null $osExtIpStype 扩展属性，分配IP地址方式。
    *
    * @return $this
    */
    public function setOsExtIpStype($osExtIpStype)
    {
        $this->container['osExtIpStype'] = $osExtIpStype;
        return $this;
    }

    /**
    * Gets osExtIpsMaCmacAddr
    *  扩展属性，MAC地址。
    *
    * @return string|null
    */
    public function getOsExtIpsMaCmacAddr()
    {
        return $this->container['osExtIpsMaCmacAddr'];
    }

    /**
    * Sets osExtIpsMaCmacAddr
    *
    * @param string|null $osExtIpsMaCmacAddr 扩展属性，MAC地址。
    *
    * @return $this
    */
    public function setOsExtIpsMaCmacAddr($osExtIpsMaCmacAddr)
    {
        $this->container['osExtIpsMaCmacAddr'] = $osExtIpsMaCmacAddr;
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

