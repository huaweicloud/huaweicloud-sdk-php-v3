<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Port implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Port';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    * listenPort  端口号，大于等于10000，小于等于50000。
    * internetAccessible  为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'listenPort' => 'int',
            'internetAccessible' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    * listenPort  端口号，大于等于10000，小于等于50000。
    * internetAccessible  为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'listenPort' => 'int32',
        'internetAccessible' => null
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
    * name  应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    * listenPort  端口号，大于等于10000，小于等于50000。
    * internetAccessible  为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'listenPort' => 'listen_port',
            'internetAccessible' => 'internet_accessible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    * listenPort  端口号，大于等于10000，小于等于50000。
    * internetAccessible  为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'listenPort' => 'setListenPort',
            'internetAccessible' => 'setInternetAccessible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    * listenPort  端口号，大于等于10000，小于等于50000。
    * internetAccessible  为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'listenPort' => 'getListenPort',
            'internetAccessible' => 'getInternetAccessible'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['listenPort'] = isset($data['listenPort']) ? $data['listenPort'] : null;
        $this->container['internetAccessible'] = isset($data['internetAccessible']) ? $data['internetAccessible'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 16)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['listenPort'] === null) {
            $invalidProperties[] = "'listenPort' can't be null";
        }
            if (($this->container['listenPort'] > 50000)) {
                $invalidProperties[] = "invalid value for 'listenPort', must be smaller than or equal to 50000.";
            }
            if (($this->container['listenPort'] < 10000)) {
                $invalidProperties[] = "invalid value for 'listenPort', must be bigger than or equal to 10000.";
            }
        if ($this->container['internetAccessible'] === null) {
            $invalidProperties[] = "'internetAccessible' can't be null";
        }
            if ((mb_strlen($this->container['internetAccessible']) > 1024)) {
                $invalidProperties[] = "invalid value for 'internetAccessible', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['internetAccessible']) < 0)) {
                $invalidProperties[] = "invalid value for 'internetAccessible', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 应用端口名称，不超过16个字节，系统关键服务名称不能使用\"adb\"和\"vnc\"。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets listenPort
    *  端口号，大于等于10000，小于等于50000。
    *
    * @return int
    */
    public function getListenPort()
    {
        return $this->container['listenPort'];
    }

    /**
    * Sets listenPort
    *
    * @param int $listenPort 端口号，大于等于10000，小于等于50000。
    *
    * @return $this
    */
    public function setListenPort($listenPort)
    {
        $this->container['listenPort'] = $listenPort;
        return $this;
    }

    /**
    * Gets internetAccessible
    *  为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @return string
    */
    public function getInternetAccessible()
    {
        return $this->container['internetAccessible'];
    }

    /**
    * Sets internetAccessible
    *
    * @param string $internetAccessible 为\"true\"则映射出公网访问（忽略大小写）。 为其他则不映射。
    *
    * @return $this
    */
    public function setInternetAccessible($internetAccessible)
    {
        $this->container['internetAccessible'] = $internetAccessible;
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

