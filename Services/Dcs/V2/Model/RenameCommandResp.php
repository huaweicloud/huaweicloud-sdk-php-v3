<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RenameCommandResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RenameCommandResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * command  命令command
    * flushall  命令flushall
    * flushdb  命令flushdb
    * hgetall  命令hgetall
    * keys  命令keys
    * hscan  命令hscan
    * scan  命令scan
    * sscan  命令sscan
    * zscan  命令zscan
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'command' => 'string',
            'flushall' => 'string',
            'flushdb' => 'string',
            'hgetall' => 'string',
            'keys' => 'string',
            'hscan' => 'string',
            'scan' => 'string',
            'sscan' => 'string',
            'zscan' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * command  命令command
    * flushall  命令flushall
    * flushdb  命令flushdb
    * hgetall  命令hgetall
    * keys  命令keys
    * hscan  命令hscan
    * scan  命令scan
    * sscan  命令sscan
    * zscan  命令zscan
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'command' => null,
        'flushall' => null,
        'flushdb' => null,
        'hgetall' => null,
        'keys' => null,
        'hscan' => null,
        'scan' => null,
        'sscan' => null,
        'zscan' => null
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
    * command  命令command
    * flushall  命令flushall
    * flushdb  命令flushdb
    * hgetall  命令hgetall
    * keys  命令keys
    * hscan  命令hscan
    * scan  命令scan
    * sscan  命令sscan
    * zscan  命令zscan
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'command' => 'command',
            'flushall' => 'flushall',
            'flushdb' => 'flushdb',
            'hgetall' => 'hgetall',
            'keys' => 'keys',
            'hscan' => 'hscan',
            'scan' => 'scan',
            'sscan' => 'sscan',
            'zscan' => 'zscan'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * command  命令command
    * flushall  命令flushall
    * flushdb  命令flushdb
    * hgetall  命令hgetall
    * keys  命令keys
    * hscan  命令hscan
    * scan  命令scan
    * sscan  命令sscan
    * zscan  命令zscan
    *
    * @var string[]
    */
    protected static $setters = [
            'command' => 'setCommand',
            'flushall' => 'setFlushall',
            'flushdb' => 'setFlushdb',
            'hgetall' => 'setHgetall',
            'keys' => 'setKeys',
            'hscan' => 'setHscan',
            'scan' => 'setScan',
            'sscan' => 'setSscan',
            'zscan' => 'setZscan'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * command  命令command
    * flushall  命令flushall
    * flushdb  命令flushdb
    * hgetall  命令hgetall
    * keys  命令keys
    * hscan  命令hscan
    * scan  命令scan
    * sscan  命令sscan
    * zscan  命令zscan
    *
    * @var string[]
    */
    protected static $getters = [
            'command' => 'getCommand',
            'flushall' => 'getFlushall',
            'flushdb' => 'getFlushdb',
            'hgetall' => 'getHgetall',
            'keys' => 'getKeys',
            'hscan' => 'getHscan',
            'scan' => 'getScan',
            'sscan' => 'getSscan',
            'zscan' => 'getZscan'
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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['flushall'] = isset($data['flushall']) ? $data['flushall'] : null;
        $this->container['flushdb'] = isset($data['flushdb']) ? $data['flushdb'] : null;
        $this->container['hgetall'] = isset($data['hgetall']) ? $data['hgetall'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['hscan'] = isset($data['hscan']) ? $data['hscan'] : null;
        $this->container['scan'] = isset($data['scan']) ? $data['scan'] : null;
        $this->container['sscan'] = isset($data['sscan']) ? $data['sscan'] : null;
        $this->container['zscan'] = isset($data['zscan']) ? $data['zscan'] : null;
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
    * Gets command
    *  命令command
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 命令command
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets flushall
    *  命令flushall
    *
    * @return string|null
    */
    public function getFlushall()
    {
        return $this->container['flushall'];
    }

    /**
    * Sets flushall
    *
    * @param string|null $flushall 命令flushall
    *
    * @return $this
    */
    public function setFlushall($flushall)
    {
        $this->container['flushall'] = $flushall;
        return $this;
    }

    /**
    * Gets flushdb
    *  命令flushdb
    *
    * @return string|null
    */
    public function getFlushdb()
    {
        return $this->container['flushdb'];
    }

    /**
    * Sets flushdb
    *
    * @param string|null $flushdb 命令flushdb
    *
    * @return $this
    */
    public function setFlushdb($flushdb)
    {
        $this->container['flushdb'] = $flushdb;
        return $this;
    }

    /**
    * Gets hgetall
    *  命令hgetall
    *
    * @return string|null
    */
    public function getHgetall()
    {
        return $this->container['hgetall'];
    }

    /**
    * Sets hgetall
    *
    * @param string|null $hgetall 命令hgetall
    *
    * @return $this
    */
    public function setHgetall($hgetall)
    {
        $this->container['hgetall'] = $hgetall;
        return $this;
    }

    /**
    * Gets keys
    *  命令keys
    *
    * @return string|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param string|null $keys 命令keys
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }

    /**
    * Gets hscan
    *  命令hscan
    *
    * @return string|null
    */
    public function getHscan()
    {
        return $this->container['hscan'];
    }

    /**
    * Sets hscan
    *
    * @param string|null $hscan 命令hscan
    *
    * @return $this
    */
    public function setHscan($hscan)
    {
        $this->container['hscan'] = $hscan;
        return $this;
    }

    /**
    * Gets scan
    *  命令scan
    *
    * @return string|null
    */
    public function getScan()
    {
        return $this->container['scan'];
    }

    /**
    * Sets scan
    *
    * @param string|null $scan 命令scan
    *
    * @return $this
    */
    public function setScan($scan)
    {
        $this->container['scan'] = $scan;
        return $this;
    }

    /**
    * Gets sscan
    *  命令sscan
    *
    * @return string|null
    */
    public function getSscan()
    {
        return $this->container['sscan'];
    }

    /**
    * Sets sscan
    *
    * @param string|null $sscan 命令sscan
    *
    * @return $this
    */
    public function setSscan($sscan)
    {
        $this->container['sscan'] = $sscan;
        return $this;
    }

    /**
    * Gets zscan
    *  命令zscan
    *
    * @return string|null
    */
    public function getZscan()
    {
        return $this->container['zscan'];
    }

    /**
    * Sets zscan
    *
    * @param string|null $zscan 命令zscan
    *
    * @return $this
    */
    public function setZscan($zscan)
    {
        $this->container['zscan'] = $zscan;
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

