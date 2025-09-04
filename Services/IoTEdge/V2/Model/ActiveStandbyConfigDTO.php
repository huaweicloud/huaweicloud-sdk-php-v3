<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActiveStandbyConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActiveStandbyConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workNode  当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    * masterInterfaceName  主节点网卡名称
    * slaveInterfaceName  备节点网卡名称
    * virtualIpAddress  网卡ip
    * virtualIpv6Address  网卡ipv6地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workNode' => 'string',
            'masterInterfaceName' => 'string',
            'slaveInterfaceName' => 'string',
            'virtualIpAddress' => 'string',
            'virtualIpv6Address' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workNode  当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    * masterInterfaceName  主节点网卡名称
    * slaveInterfaceName  备节点网卡名称
    * virtualIpAddress  网卡ip
    * virtualIpv6Address  网卡ipv6地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workNode' => null,
        'masterInterfaceName' => null,
        'slaveInterfaceName' => null,
        'virtualIpAddress' => null,
        'virtualIpv6Address' => null
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
    * workNode  当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    * masterInterfaceName  主节点网卡名称
    * slaveInterfaceName  备节点网卡名称
    * virtualIpAddress  网卡ip
    * virtualIpv6Address  网卡ipv6地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workNode' => 'work_node',
            'masterInterfaceName' => 'master_interface_name',
            'slaveInterfaceName' => 'slave_interface_name',
            'virtualIpAddress' => 'virtual_ip_address',
            'virtualIpv6Address' => 'virtual_ipv6_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workNode  当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    * masterInterfaceName  主节点网卡名称
    * slaveInterfaceName  备节点网卡名称
    * virtualIpAddress  网卡ip
    * virtualIpv6Address  网卡ipv6地址
    *
    * @var string[]
    */
    protected static $setters = [
            'workNode' => 'setWorkNode',
            'masterInterfaceName' => 'setMasterInterfaceName',
            'slaveInterfaceName' => 'setSlaveInterfaceName',
            'virtualIpAddress' => 'setVirtualIpAddress',
            'virtualIpv6Address' => 'setVirtualIpv6Address'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workNode  当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    * masterInterfaceName  主节点网卡名称
    * slaveInterfaceName  备节点网卡名称
    * virtualIpAddress  网卡ip
    * virtualIpv6Address  网卡ipv6地址
    *
    * @var string[]
    */
    protected static $getters = [
            'workNode' => 'getWorkNode',
            'masterInterfaceName' => 'getMasterInterfaceName',
            'slaveInterfaceName' => 'getSlaveInterfaceName',
            'virtualIpAddress' => 'getVirtualIpAddress',
            'virtualIpv6Address' => 'getVirtualIpv6Address'
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
        $this->container['workNode'] = isset($data['workNode']) ? $data['workNode'] : null;
        $this->container['masterInterfaceName'] = isset($data['masterInterfaceName']) ? $data['masterInterfaceName'] : null;
        $this->container['slaveInterfaceName'] = isset($data['slaveInterfaceName']) ? $data['slaveInterfaceName'] : null;
        $this->container['virtualIpAddress'] = isset($data['virtualIpAddress']) ? $data['virtualIpAddress'] : null;
        $this->container['virtualIpv6Address'] = isset($data['virtualIpv6Address']) ? $data['virtualIpv6Address'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workNode']) && (mb_strlen($this->container['workNode']) > 64)) {
                $invalidProperties[] = "invalid value for 'workNode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workNode']) && (mb_strlen($this->container['workNode']) < 1)) {
                $invalidProperties[] = "invalid value for 'workNode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workNode']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['workNode'])) {
                $invalidProperties[] = "invalid value for 'workNode', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['masterInterfaceName']) && (mb_strlen($this->container['masterInterfaceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'masterInterfaceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['masterInterfaceName']) && (mb_strlen($this->container['masterInterfaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'masterInterfaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['masterInterfaceName']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['masterInterfaceName'])) {
                $invalidProperties[] = "invalid value for 'masterInterfaceName', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['slaveInterfaceName']) && (mb_strlen($this->container['slaveInterfaceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'slaveInterfaceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['slaveInterfaceName']) && (mb_strlen($this->container['slaveInterfaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'slaveInterfaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['slaveInterfaceName']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['slaveInterfaceName'])) {
                $invalidProperties[] = "invalid value for 'slaveInterfaceName', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['virtualIpAddress']) && (mb_strlen($this->container['virtualIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'virtualIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['virtualIpAddress']) && (mb_strlen($this->container['virtualIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['virtualIpv6Address']) && (mb_strlen($this->container['virtualIpv6Address']) > 64)) {
                $invalidProperties[] = "invalid value for 'virtualIpv6Address', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['virtualIpv6Address']) && (mb_strlen($this->container['virtualIpv6Address']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualIpv6Address', the character length must be bigger than or equal to 0.";
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
    * Gets workNode
    *  当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    *
    * @return string|null
    */
    public function getWorkNode()
    {
        return $this->container['workNode'];
    }

    /**
    * Sets workNode
    *
    * @param string|null $workNode 当前的工作节点，主节点还是备节点在工作，初始创建时工作节点为DEFAULT节点，(DEFAULT|MASTER|SLAVE)
    *
    * @return $this
    */
    public function setWorkNode($workNode)
    {
        $this->container['workNode'] = $workNode;
        return $this;
    }

    /**
    * Gets masterInterfaceName
    *  主节点网卡名称
    *
    * @return string|null
    */
    public function getMasterInterfaceName()
    {
        return $this->container['masterInterfaceName'];
    }

    /**
    * Sets masterInterfaceName
    *
    * @param string|null $masterInterfaceName 主节点网卡名称
    *
    * @return $this
    */
    public function setMasterInterfaceName($masterInterfaceName)
    {
        $this->container['masterInterfaceName'] = $masterInterfaceName;
        return $this;
    }

    /**
    * Gets slaveInterfaceName
    *  备节点网卡名称
    *
    * @return string|null
    */
    public function getSlaveInterfaceName()
    {
        return $this->container['slaveInterfaceName'];
    }

    /**
    * Sets slaveInterfaceName
    *
    * @param string|null $slaveInterfaceName 备节点网卡名称
    *
    * @return $this
    */
    public function setSlaveInterfaceName($slaveInterfaceName)
    {
        $this->container['slaveInterfaceName'] = $slaveInterfaceName;
        return $this;
    }

    /**
    * Gets virtualIpAddress
    *  网卡ip
    *
    * @return string|null
    */
    public function getVirtualIpAddress()
    {
        return $this->container['virtualIpAddress'];
    }

    /**
    * Sets virtualIpAddress
    *
    * @param string|null $virtualIpAddress 网卡ip
    *
    * @return $this
    */
    public function setVirtualIpAddress($virtualIpAddress)
    {
        $this->container['virtualIpAddress'] = $virtualIpAddress;
        return $this;
    }

    /**
    * Gets virtualIpv6Address
    *  网卡ipv6地址
    *
    * @return string|null
    */
    public function getVirtualIpv6Address()
    {
        return $this->container['virtualIpv6Address'];
    }

    /**
    * Sets virtualIpv6Address
    *
    * @param string|null $virtualIpv6Address 网卡ipv6地址
    *
    * @return $this
    */
    public function setVirtualIpv6Address($virtualIpv6Address)
    {
        $this->container['virtualIpv6Address'] = $virtualIpv6Address;
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

