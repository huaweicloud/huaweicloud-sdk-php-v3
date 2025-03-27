<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCommandResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCommandResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    * commandParam  commandParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commandName' => 'string',
            'commandParam' => '\HuaweiCloud\SDK\Sms\V3\Model\CommandParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    * commandParam  commandParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commandName' => null,
        'commandParam' => null
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
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    * commandParam  commandParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commandName' => 'command_name',
            'commandParam' => 'command_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    * commandParam  commandParam
    *
    * @var string[]
    */
    protected static $setters = [
            'commandName' => 'setCommandName',
            'commandParam' => 'setCommandParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commandName  命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    * commandParam  commandParam
    *
    * @var string[]
    */
    protected static $getters = [
            'commandName' => 'getCommandName',
            'commandParam' => 'getCommandParam'
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
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['commandParam'] = isset($data['commandParam']) ? $data['commandParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commandName']) && (mb_strlen($this->container['commandName']) > 255)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['commandName']) && (mb_strlen($this->container['commandName']) < 0)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be bigger than or equal to 0.";
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
    * Gets commandName
    *  命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    *
    * @return string|null
    */
    public function getCommandName()
    {
        return $this->container['commandName'];
    }

    /**
    * Sets commandName
    *
    * @param string|null $commandName 命令名称，分为：START、STOP、DELETE、SYNC、SKIP
    *
    * @return $this
    */
    public function setCommandName($commandName)
    {
        $this->container['commandName'] = $commandName;
        return $this;
    }

    /**
    * Gets commandParam
    *  commandParam
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\CommandParam|null
    */
    public function getCommandParam()
    {
        return $this->container['commandParam'];
    }

    /**
    * Sets commandParam
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\CommandParam|null $commandParam commandParam
    *
    * @return $this
    */
    public function setCommandParam($commandParam)
    {
        $this->container['commandParam'] = $commandParam;
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

