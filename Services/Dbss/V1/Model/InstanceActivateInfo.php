<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceActivateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceActivateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dscProxyDomainName  代理DOMAIN名称
    * dscProxyIp  代理IP
    * dscProxyPort  代理端口
    * masterNodeId  主节点ID
    * slaveNodeId  备节点ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dscProxyDomainName' => 'string',
            'dscProxyIp' => 'string',
            'dscProxyPort' => 'int',
            'masterNodeId' => 'string',
            'slaveNodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dscProxyDomainName  代理DOMAIN名称
    * dscProxyIp  代理IP
    * dscProxyPort  代理端口
    * masterNodeId  主节点ID
    * slaveNodeId  备节点ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dscProxyDomainName' => null,
        'dscProxyIp' => null,
        'dscProxyPort' => 'int32',
        'masterNodeId' => null,
        'slaveNodeId' => null
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
    * dscProxyDomainName  代理DOMAIN名称
    * dscProxyIp  代理IP
    * dscProxyPort  代理端口
    * masterNodeId  主节点ID
    * slaveNodeId  备节点ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dscProxyDomainName' => 'dsc_proxy_domain_name',
            'dscProxyIp' => 'dsc_proxy_ip',
            'dscProxyPort' => 'dsc_proxy_port',
            'masterNodeId' => 'master_node_id',
            'slaveNodeId' => 'slave_node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dscProxyDomainName  代理DOMAIN名称
    * dscProxyIp  代理IP
    * dscProxyPort  代理端口
    * masterNodeId  主节点ID
    * slaveNodeId  备节点ID
    *
    * @var string[]
    */
    protected static $setters = [
            'dscProxyDomainName' => 'setDscProxyDomainName',
            'dscProxyIp' => 'setDscProxyIp',
            'dscProxyPort' => 'setDscProxyPort',
            'masterNodeId' => 'setMasterNodeId',
            'slaveNodeId' => 'setSlaveNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dscProxyDomainName  代理DOMAIN名称
    * dscProxyIp  代理IP
    * dscProxyPort  代理端口
    * masterNodeId  主节点ID
    * slaveNodeId  备节点ID
    *
    * @var string[]
    */
    protected static $getters = [
            'dscProxyDomainName' => 'getDscProxyDomainName',
            'dscProxyIp' => 'getDscProxyIp',
            'dscProxyPort' => 'getDscProxyPort',
            'masterNodeId' => 'getMasterNodeId',
            'slaveNodeId' => 'getSlaveNodeId'
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
        $this->container['dscProxyDomainName'] = isset($data['dscProxyDomainName']) ? $data['dscProxyDomainName'] : null;
        $this->container['dscProxyIp'] = isset($data['dscProxyIp']) ? $data['dscProxyIp'] : null;
        $this->container['dscProxyPort'] = isset($data['dscProxyPort']) ? $data['dscProxyPort'] : null;
        $this->container['masterNodeId'] = isset($data['masterNodeId']) ? $data['masterNodeId'] : null;
        $this->container['slaveNodeId'] = isset($data['slaveNodeId']) ? $data['slaveNodeId'] : null;
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
    * Gets dscProxyDomainName
    *  代理DOMAIN名称
    *
    * @return string|null
    */
    public function getDscProxyDomainName()
    {
        return $this->container['dscProxyDomainName'];
    }

    /**
    * Sets dscProxyDomainName
    *
    * @param string|null $dscProxyDomainName 代理DOMAIN名称
    *
    * @return $this
    */
    public function setDscProxyDomainName($dscProxyDomainName)
    {
        $this->container['dscProxyDomainName'] = $dscProxyDomainName;
        return $this;
    }

    /**
    * Gets dscProxyIp
    *  代理IP
    *
    * @return string|null
    */
    public function getDscProxyIp()
    {
        return $this->container['dscProxyIp'];
    }

    /**
    * Sets dscProxyIp
    *
    * @param string|null $dscProxyIp 代理IP
    *
    * @return $this
    */
    public function setDscProxyIp($dscProxyIp)
    {
        $this->container['dscProxyIp'] = $dscProxyIp;
        return $this;
    }

    /**
    * Gets dscProxyPort
    *  代理端口
    *
    * @return int|null
    */
    public function getDscProxyPort()
    {
        return $this->container['dscProxyPort'];
    }

    /**
    * Sets dscProxyPort
    *
    * @param int|null $dscProxyPort 代理端口
    *
    * @return $this
    */
    public function setDscProxyPort($dscProxyPort)
    {
        $this->container['dscProxyPort'] = $dscProxyPort;
        return $this;
    }

    /**
    * Gets masterNodeId
    *  主节点ID
    *
    * @return string|null
    */
    public function getMasterNodeId()
    {
        return $this->container['masterNodeId'];
    }

    /**
    * Sets masterNodeId
    *
    * @param string|null $masterNodeId 主节点ID
    *
    * @return $this
    */
    public function setMasterNodeId($masterNodeId)
    {
        $this->container['masterNodeId'] = $masterNodeId;
        return $this;
    }

    /**
    * Gets slaveNodeId
    *  备节点ID
    *
    * @return string|null
    */
    public function getSlaveNodeId()
    {
        return $this->container['slaveNodeId'];
    }

    /**
    * Sets slaveNodeId
    *
    * @param string|null $slaveNodeId 备节点ID
    *
    * @return $this
    */
    public function setSlaveNodeId($slaveNodeId)
    {
        $this->container['slaveNodeId'] = $slaveNodeId;
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

