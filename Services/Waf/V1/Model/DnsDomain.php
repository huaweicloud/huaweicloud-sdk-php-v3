<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DnsDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DnsDomain';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * domain  domain
    * servers  servers
    * protectPort  protectPort
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domain' => 'string',
            'servers' => '\HuaweiCloud\SDK\Waf\V1\Model\Server[]',
            'protectPort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * domain  domain
    * servers  servers
    * protectPort  protectPort
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domain' => null,
        'servers' => null,
        'protectPort' => null
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
    * domain  domain
    * servers  servers
    * protectPort  protectPort
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domain' => 'domain',
            'servers' => 'servers',
            'protectPort' => 'protect_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * domain  domain
    * servers  servers
    * protectPort  protectPort
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domain' => 'setDomain',
            'servers' => 'setServers',
            'protectPort' => 'setProtectPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * domain  domain
    * servers  servers
    * protectPort  protectPort
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domain' => 'getDomain',
            'servers' => 'getServers',
            'protectPort' => 'getProtectPort'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['protectPort'] = isset($data['protectPort']) ? $data['protectPort'] : null;
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
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets servers
    *  servers
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\Server[]|null
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\Server[]|null $servers servers
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
        return $this;
    }

    /**
    * Gets protectPort
    *  protectPort
    *
    * @return string|null
    */
    public function getProtectPort()
    {
        return $this->container['protectPort'];
    }

    /**
    * Sets protectPort
    *
    * @param string|null $protectPort protectPort
    *
    * @return $this
    */
    public function setProtectPort($protectPort)
    {
        $this->container['protectPort'] = $protectPort;
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

