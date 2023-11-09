<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentActionParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentAction_parameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replica  use for sacle, scale to specified replica
    * hosts  use for vmapp scale
    * version  use for rollback, rollback to specified version
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replica' => 'int',
            'hosts' => 'string[]',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replica  use for sacle, scale to specified replica
    * hosts  use for vmapp scale
    * version  use for rollback, rollback to specified version
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'replica' => null,
        'hosts' => null,
        'version' => null
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
    * replica  use for sacle, scale to specified replica
    * hosts  use for vmapp scale
    * version  use for rollback, rollback to specified version
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replica' => 'replica',
            'hosts' => 'hosts',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replica  use for sacle, scale to specified replica
    * hosts  use for vmapp scale
    * version  use for rollback, rollback to specified version
    *
    * @var string[]
    */
    protected static $setters = [
            'replica' => 'setReplica',
            'hosts' => 'setHosts',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replica  use for sacle, scale to specified replica
    * hosts  use for vmapp scale
    * version  use for rollback, rollback to specified version
    *
    * @var string[]
    */
    protected static $getters = [
            'replica' => 'getReplica',
            'hosts' => 'getHosts',
            'version' => 'getVersion'
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
        $this->container['replica'] = isset($data['replica']) ? $data['replica'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    * Gets replica
    *  use for sacle, scale to specified replica
    *
    * @return int|null
    */
    public function getReplica()
    {
        return $this->container['replica'];
    }

    /**
    * Sets replica
    *
    * @param int|null $replica use for sacle, scale to specified replica
    *
    * @return $this
    */
    public function setReplica($replica)
    {
        $this->container['replica'] = $replica;
        return $this;
    }

    /**
    * Gets hosts
    *  use for vmapp scale
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts use for vmapp scale
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets version
    *  use for rollback, rollback to specified version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version use for rollback, rollback to specified version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

