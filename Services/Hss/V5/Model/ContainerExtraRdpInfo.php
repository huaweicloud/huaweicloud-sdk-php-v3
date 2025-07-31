<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerExtraRdpInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerExtraRdpInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protoEnv  协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    * system  系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protoEnv' => 'string',
            'system' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protoEnv  协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    * system  系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protoEnv' => null,
        'system' => null
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
    * protoEnv  协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    * system  系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protoEnv' => 'proto_env',
            'system' => 'system'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protoEnv  协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    * system  系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @var string[]
    */
    protected static $setters = [
            'protoEnv' => 'setProtoEnv',
            'system' => 'setSystem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protoEnv  协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    * system  系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @var string[]
    */
    protected static $getters = [
            'protoEnv' => 'getProtoEnv',
            'system' => 'getSystem'
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
        $this->container['protoEnv'] = isset($data['protoEnv']) ? $data['protoEnv'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protoEnv']) && (mb_strlen($this->container['protoEnv']) > 4)) {
                $invalidProperties[] = "invalid value for 'protoEnv', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['protoEnv']) && (mb_strlen($this->container['protoEnv']) < 1)) {
                $invalidProperties[] = "invalid value for 'protoEnv', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protoEnv']) && !preg_match("/^.*$/", $this->container['protoEnv'])) {
                $invalidProperties[] = "invalid value for 'protoEnv', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['system']) && (mb_strlen($this->container['system']) > 16)) {
                $invalidProperties[] = "invalid value for 'system', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['system']) && (mb_strlen($this->container['system']) < 1)) {
                $invalidProperties[] = "invalid value for 'system', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['system']) && !preg_match("/^.*$/", $this->container['system'])) {
                $invalidProperties[] = "invalid value for 'system', must be conform to the pattern /^.*$/.";
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
    * Gets protoEnv
    *  协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    *
    * @return string|null
    */
    public function getProtoEnv()
    {
        return $this->container['protoEnv'];
    }

    /**
    * Sets protoEnv
    *
    * @param string|null $protoEnv 协议类型: - 0 : 协议模拟 - 1 : 系统模拟
    *
    * @return $this
    */
    public function setProtoEnv($protoEnv)
    {
        $this->container['protoEnv'] = $protoEnv;
        return $this;
    }

    /**
    * Gets system
    *  系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @return string|null
    */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
    * Sets system
    *
    * @param string|null $system 系统类型，系统模拟时使用: - win7 : win 7 - win8 : win 8 - win10 : win 10 - win-server2012 : win-server 2012 - win-server2016 : win-server 2016
    *
    * @return $this
    */
    public function setSystem($system)
    {
        $this->container['system'] = $system;
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

