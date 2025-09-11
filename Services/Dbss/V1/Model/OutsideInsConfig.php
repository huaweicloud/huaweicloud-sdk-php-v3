<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutsideInsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutsideInsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterNodeIp  主节点IP
    * slaveNodeIp  从节点IP
    * virtualIp  虚拟IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterNodeIp' => 'string',
            'slaveNodeIp' => 'string',
            'virtualIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterNodeIp  主节点IP
    * slaveNodeIp  从节点IP
    * virtualIp  虚拟IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterNodeIp' => null,
        'slaveNodeIp' => null,
        'virtualIp' => null
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
    * masterNodeIp  主节点IP
    * slaveNodeIp  从节点IP
    * virtualIp  虚拟IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterNodeIp' => 'master_node_ip',
            'slaveNodeIp' => 'slave_node_ip',
            'virtualIp' => 'virtual_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterNodeIp  主节点IP
    * slaveNodeIp  从节点IP
    * virtualIp  虚拟IP
    *
    * @var string[]
    */
    protected static $setters = [
            'masterNodeIp' => 'setMasterNodeIp',
            'slaveNodeIp' => 'setSlaveNodeIp',
            'virtualIp' => 'setVirtualIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterNodeIp  主节点IP
    * slaveNodeIp  从节点IP
    * virtualIp  虚拟IP
    *
    * @var string[]
    */
    protected static $getters = [
            'masterNodeIp' => 'getMasterNodeIp',
            'slaveNodeIp' => 'getSlaveNodeIp',
            'virtualIp' => 'getVirtualIp'
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
        $this->container['masterNodeIp'] = isset($data['masterNodeIp']) ? $data['masterNodeIp'] : null;
        $this->container['slaveNodeIp'] = isset($data['slaveNodeIp']) ? $data['slaveNodeIp'] : null;
        $this->container['virtualIp'] = isset($data['virtualIp']) ? $data['virtualIp'] : null;
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
    * Gets masterNodeIp
    *  主节点IP
    *
    * @return string|null
    */
    public function getMasterNodeIp()
    {
        return $this->container['masterNodeIp'];
    }

    /**
    * Sets masterNodeIp
    *
    * @param string|null $masterNodeIp 主节点IP
    *
    * @return $this
    */
    public function setMasterNodeIp($masterNodeIp)
    {
        $this->container['masterNodeIp'] = $masterNodeIp;
        return $this;
    }

    /**
    * Gets slaveNodeIp
    *  从节点IP
    *
    * @return string|null
    */
    public function getSlaveNodeIp()
    {
        return $this->container['slaveNodeIp'];
    }

    /**
    * Sets slaveNodeIp
    *
    * @param string|null $slaveNodeIp 从节点IP
    *
    * @return $this
    */
    public function setSlaveNodeIp($slaveNodeIp)
    {
        $this->container['slaveNodeIp'] = $slaveNodeIp;
        return $this;
    }

    /**
    * Gets virtualIp
    *  虚拟IP
    *
    * @return string|null
    */
    public function getVirtualIp()
    {
        return $this->container['virtualIp'];
    }

    /**
    * Sets virtualIp
    *
    * @param string|null $virtualIp 虚拟IP
    *
    * @return $this
    */
    public function setVirtualIp($virtualIp)
    {
        $this->container['virtualIp'] = $virtualIp;
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

