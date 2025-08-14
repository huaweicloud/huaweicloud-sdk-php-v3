<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServicePortInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServicePortInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * desc  服务名称
    * type  类型，可取值集合[http，https]
    * protocol  默认tcp。可取值集合[tcp，udp]
    * userPort  用户端口
    * port  容器内部端口
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'desc' => 'string',
            'type' => 'string',
            'protocol' => 'string',
            'userPort' => 'int',
            'port' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * desc  服务名称
    * type  类型，可取值集合[http，https]
    * protocol  默认tcp。可取值集合[tcp，udp]
    * userPort  用户端口
    * port  容器内部端口
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'desc' => null,
        'type' => null,
        'protocol' => null,
        'userPort' => 'int32',
        'port' => 'int32'
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
    * desc  服务名称
    * type  类型，可取值集合[http，https]
    * protocol  默认tcp。可取值集合[tcp，udp]
    * userPort  用户端口
    * port  容器内部端口
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'desc' => 'desc',
            'type' => 'type',
            'protocol' => 'protocol',
            'userPort' => 'user_port',
            'port' => 'port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * desc  服务名称
    * type  类型，可取值集合[http，https]
    * protocol  默认tcp。可取值集合[tcp，udp]
    * userPort  用户端口
    * port  容器内部端口
    *
    * @var string[]
    */
    protected static $setters = [
            'desc' => 'setDesc',
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'userPort' => 'setUserPort',
            'port' => 'setPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * desc  服务名称
    * type  类型，可取值集合[http，https]
    * protocol  默认tcp。可取值集合[tcp，udp]
    * userPort  用户端口
    * port  容器内部端口
    *
    * @var string[]
    */
    protected static $getters = [
            'desc' => 'getDesc',
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'userPort' => 'getUserPort',
            'port' => 'getPort'
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
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['userPort'] = isset($data['userPort']) ? $data['userPort'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['desc'] === null) {
            $invalidProperties[] = "'desc' can't be null";
        }
            if ((mb_strlen($this->container['desc']) > 128)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['desc']) < 1)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['desc'])) {
                $invalidProperties[] = "invalid value for 'desc', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^.*$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if ((mb_strlen($this->container['protocol']) > 128)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['userPort']) && ($this->container['userPort'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'userPort', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['userPort']) && ($this->container['userPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'userPort', must be bigger than or equal to 0.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
            if (($this->container['port'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 2147483547.";
            }
            if (($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
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
    * Gets desc
    *  服务名称
    *
    * @return string
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string $desc 服务名称
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets type
    *  类型，可取值集合[http，https]
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型，可取值集合[http，https]
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  默认tcp。可取值集合[tcp，udp]
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 默认tcp。可取值集合[tcp，udp]
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets userPort
    *  用户端口
    *
    * @return int|null
    */
    public function getUserPort()
    {
        return $this->container['userPort'];
    }

    /**
    * Sets userPort
    *
    * @param int|null $userPort 用户端口
    *
    * @return $this
    */
    public function setUserPort($userPort)
    {
        $this->container['userPort'] = $userPort;
        return $this;
    }

    /**
    * Gets port
    *  容器内部端口
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port 容器内部端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
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

