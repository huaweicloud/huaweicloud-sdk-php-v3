<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * openvpn  openvpn
    * linux  linux
    * rdp  rdp
    * mysql  mysql
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'openvpn' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraOpenvpnInfo',
            'linux' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraLinuxInfo',
            'rdp' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraRdpInfo',
            'mysql' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraMysqlInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * openvpn  openvpn
    * linux  linux
    * rdp  rdp
    * mysql  mysql
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'openvpn' => null,
        'linux' => null,
        'rdp' => null,
        'mysql' => null
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
    * openvpn  openvpn
    * linux  linux
    * rdp  rdp
    * mysql  mysql
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'openvpn' => 'openvpn',
            'linux' => 'linux',
            'rdp' => 'rdp',
            'mysql' => 'mysql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * openvpn  openvpn
    * linux  linux
    * rdp  rdp
    * mysql  mysql
    *
    * @var string[]
    */
    protected static $setters = [
            'openvpn' => 'setOpenvpn',
            'linux' => 'setLinux',
            'rdp' => 'setRdp',
            'mysql' => 'setMysql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * openvpn  openvpn
    * linux  linux
    * rdp  rdp
    * mysql  mysql
    *
    * @var string[]
    */
    protected static $getters = [
            'openvpn' => 'getOpenvpn',
            'linux' => 'getLinux',
            'rdp' => 'getRdp',
            'mysql' => 'getMysql'
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
        $this->container['openvpn'] = isset($data['openvpn']) ? $data['openvpn'] : null;
        $this->container['linux'] = isset($data['linux']) ? $data['linux'] : null;
        $this->container['rdp'] = isset($data['rdp']) ? $data['rdp'] : null;
        $this->container['mysql'] = isset($data['mysql']) ? $data['mysql'] : null;
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
    * Gets openvpn
    *  openvpn
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraOpenvpnInfo|null
    */
    public function getOpenvpn()
    {
        return $this->container['openvpn'];
    }

    /**
    * Sets openvpn
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraOpenvpnInfo|null $openvpn openvpn
    *
    * @return $this
    */
    public function setOpenvpn($openvpn)
    {
        $this->container['openvpn'] = $openvpn;
        return $this;
    }

    /**
    * Gets linux
    *  linux
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraLinuxInfo|null
    */
    public function getLinux()
    {
        return $this->container['linux'];
    }

    /**
    * Sets linux
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraLinuxInfo|null $linux linux
    *
    * @return $this
    */
    public function setLinux($linux)
    {
        $this->container['linux'] = $linux;
        return $this;
    }

    /**
    * Gets rdp
    *  rdp
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraRdpInfo|null
    */
    public function getRdp()
    {
        return $this->container['rdp'];
    }

    /**
    * Sets rdp
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraRdpInfo|null $rdp rdp
    *
    * @return $this
    */
    public function setRdp($rdp)
    {
        $this->container['rdp'] = $rdp;
        return $this;
    }

    /**
    * Gets mysql
    *  mysql
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraMysqlInfo|null
    */
    public function getMysql()
    {
        return $this->container['mysql'];
    }

    /**
    * Sets mysql
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerExtraMysqlInfo|null $mysql mysql
    *
    * @return $this
    */
    public function setMysql($mysql)
    {
        $this->container['mysql'] = $mysql;
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

