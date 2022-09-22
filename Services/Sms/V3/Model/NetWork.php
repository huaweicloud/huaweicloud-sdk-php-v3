<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetWork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetWork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  网卡的名称
    * ip  该网卡绑定的IP
    * netmask  掩码
    * gateway  网关
    * mtu  Linux必选，网卡的MTU
    * mac  Mac地址
    * id  数据库ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'ip' => 'string',
            'netmask' => 'string',
            'gateway' => 'string',
            'mtu' => 'int',
            'mac' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  网卡的名称
    * ip  该网卡绑定的IP
    * netmask  掩码
    * gateway  网关
    * mtu  Linux必选，网卡的MTU
    * mac  Mac地址
    * id  数据库ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'ip' => null,
        'netmask' => null,
        'gateway' => null,
        'mtu' => 'int32',
        'mac' => null,
        'id' => null
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
    * name  网卡的名称
    * ip  该网卡绑定的IP
    * netmask  掩码
    * gateway  网关
    * mtu  Linux必选，网卡的MTU
    * mac  Mac地址
    * id  数据库ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'ip' => 'ip',
            'netmask' => 'netmask',
            'gateway' => 'gateway',
            'mtu' => 'mtu',
            'mac' => 'mac',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  网卡的名称
    * ip  该网卡绑定的IP
    * netmask  掩码
    * gateway  网关
    * mtu  Linux必选，网卡的MTU
    * mac  Mac地址
    * id  数据库ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'ip' => 'setIp',
            'netmask' => 'setNetmask',
            'gateway' => 'setGateway',
            'mtu' => 'setMtu',
            'mac' => 'setMac',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  网卡的名称
    * ip  该网卡绑定的IP
    * netmask  掩码
    * gateway  网关
    * mtu  Linux必选，网卡的MTU
    * mac  Mac地址
    * id  数据库ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'ip' => 'getIp',
            'netmask' => 'getNetmask',
            'gateway' => 'getGateway',
            'mtu' => 'getMtu',
            'mac' => 'getMac',
            'id' => 'getId'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['netmask'] = isset($data['netmask']) ? $data['netmask'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['mtu'] = isset($data['mtu']) ? $data['mtu'] : null;
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
            if ((mb_strlen($this->container['ip']) > 255)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['netmask'] === null) {
            $invalidProperties[] = "'netmask' can't be null";
        }
            if ((mb_strlen($this->container['netmask']) > 255)) {
                $invalidProperties[] = "invalid value for 'netmask', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['netmask']) < 0)) {
                $invalidProperties[] = "invalid value for 'netmask', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['gateway'] === null) {
            $invalidProperties[] = "'gateway' can't be null";
        }
            if ((mb_strlen($this->container['gateway']) > 255)) {
                $invalidProperties[] = "invalid value for 'gateway', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['gateway']) < 0)) {
                $invalidProperties[] = "invalid value for 'gateway', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtu']) && ($this->container['mtu'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mtu', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mtu']) && ($this->container['mtu'] < 0)) {
                $invalidProperties[] = "invalid value for 'mtu', must be bigger than or equal to 0.";
            }
        if ($this->container['mac'] === null) {
            $invalidProperties[] = "'mac' can't be null";
        }
            if ((mb_strlen($this->container['mac']) > 255)) {
                $invalidProperties[] = "invalid value for 'mac', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['mac']) < 0)) {
                $invalidProperties[] = "invalid value for 'mac', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
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
    *  网卡的名称
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
    * @param string $name 网卡的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ip
    *  该网卡绑定的IP
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 该网卡绑定的IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets netmask
    *  掩码
    *
    * @return string
    */
    public function getNetmask()
    {
        return $this->container['netmask'];
    }

    /**
    * Sets netmask
    *
    * @param string $netmask 掩码
    *
    * @return $this
    */
    public function setNetmask($netmask)
    {
        $this->container['netmask'] = $netmask;
        return $this;
    }

    /**
    * Gets gateway
    *  网关
    *
    * @return string
    */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
    * Sets gateway
    *
    * @param string $gateway 网关
    *
    * @return $this
    */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;
        return $this;
    }

    /**
    * Gets mtu
    *  Linux必选，网卡的MTU
    *
    * @return int|null
    */
    public function getMtu()
    {
        return $this->container['mtu'];
    }

    /**
    * Sets mtu
    *
    * @param int|null $mtu Linux必选，网卡的MTU
    *
    * @return $this
    */
    public function setMtu($mtu)
    {
        $this->container['mtu'] = $mtu;
        return $this;
    }

    /**
    * Gets mac
    *  Mac地址
    *
    * @return string
    */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
    * Sets mac
    *
    * @param string $mac Mac地址
    *
    * @return $this
    */
    public function setMac($mac)
    {
        $this->container['mac'] = $mac;
        return $this;
    }

    /**
    * Gets id
    *  数据库ID
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
    * @param string|null $id 数据库ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

