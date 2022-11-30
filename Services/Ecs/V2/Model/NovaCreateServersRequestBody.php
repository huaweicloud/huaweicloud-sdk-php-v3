<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaCreateServersRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaCreateServersRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * server  server
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'server' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersOption',
            'osschedulerHints' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersSchedulerHint'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * server  server
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'server' => null,
        'osschedulerHints' => null
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
    * server  server
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'server' => 'server',
            'osschedulerHints' => 'os:scheduler_hints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * server  server
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $setters = [
            'server' => 'setServer',
            'osschedulerHints' => 'setOsschedulerHints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * server  server
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $getters = [
            'server' => 'getServer',
            'osschedulerHints' => 'getOsschedulerHints'
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
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['osschedulerHints'] = isset($data['osschedulerHints']) ? $data['osschedulerHints'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['server'] === null) {
            $invalidProperties[] = "'server' can't be null";
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
    * Gets server
    *  server
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersOption
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersOption $server server
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets osschedulerHints
    *  osschedulerHints
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersSchedulerHint|null
    */
    public function getOsschedulerHints()
    {
        return $this->container['osschedulerHints'];
    }

    /**
    * Sets osschedulerHints
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaCreateServersSchedulerHint|null $osschedulerHints osschedulerHints
    *
    * @return $this
    */
    public function setOsschedulerHints($osschedulerHints)
    {
        $this->container['osschedulerHints'] = $osschedulerHints;
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

