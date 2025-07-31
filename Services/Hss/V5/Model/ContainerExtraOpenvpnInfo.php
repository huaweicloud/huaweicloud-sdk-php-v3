<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerExtraOpenvpnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerExtraOpenvpnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * outsideIp  映射ip
    * outsidePort  映射端口
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'outsideIp' => 'string',
            'outsidePort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * outsideIp  映射ip
    * outsidePort  映射端口
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'outsideIp' => null,
        'outsidePort' => null
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
    * outsideIp  映射ip
    * outsidePort  映射端口
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'outsideIp' => 'outside_ip',
            'outsidePort' => 'outside_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * outsideIp  映射ip
    * outsidePort  映射端口
    *
    * @var string[]
    */
    protected static $setters = [
            'outsideIp' => 'setOutsideIp',
            'outsidePort' => 'setOutsidePort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * outsideIp  映射ip
    * outsidePort  映射端口
    *
    * @var string[]
    */
    protected static $getters = [
            'outsideIp' => 'getOutsideIp',
            'outsidePort' => 'getOutsidePort'
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
        $this->container['outsideIp'] = isset($data['outsideIp']) ? $data['outsideIp'] : null;
        $this->container['outsidePort'] = isset($data['outsidePort']) ? $data['outsidePort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['outsideIp']) && (mb_strlen($this->container['outsideIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'outsideIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['outsideIp']) && (mb_strlen($this->container['outsideIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'outsideIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['outsideIp']) && !preg_match("/^.*$/", $this->container['outsideIp'])) {
                $invalidProperties[] = "invalid value for 'outsideIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['outsidePort']) && (mb_strlen($this->container['outsidePort']) > 128)) {
                $invalidProperties[] = "invalid value for 'outsidePort', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['outsidePort']) && (mb_strlen($this->container['outsidePort']) < 1)) {
                $invalidProperties[] = "invalid value for 'outsidePort', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['outsidePort']) && !preg_match("/^.*$/", $this->container['outsidePort'])) {
                $invalidProperties[] = "invalid value for 'outsidePort', must be conform to the pattern /^.*$/.";
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
    * Gets outsideIp
    *  映射ip
    *
    * @return string|null
    */
    public function getOutsideIp()
    {
        return $this->container['outsideIp'];
    }

    /**
    * Sets outsideIp
    *
    * @param string|null $outsideIp 映射ip
    *
    * @return $this
    */
    public function setOutsideIp($outsideIp)
    {
        $this->container['outsideIp'] = $outsideIp;
        return $this;
    }

    /**
    * Gets outsidePort
    *  映射端口
    *
    * @return string|null
    */
    public function getOutsidePort()
    {
        return $this->container['outsidePort'];
    }

    /**
    * Sets outsidePort
    *
    * @param string|null $outsidePort 映射端口
    *
    * @return $this
    */
    public function setOutsidePort($outsidePort)
    {
        $this->container['outsidePort'] = $outsidePort;
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

