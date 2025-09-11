<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InterfaceExt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InterfaceExt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * preserveOnDelete  preserveOnDelete
    * portState  portState
    * fixedIps  fixedIps
    * netId  netId
    * portId  portId
    * macAddr  macAddr
    * deleteOnTermination  deleteOnTermination
    * driverMode  driverMode
    * minRate  minRate
    * multiqueueNum  multiqueueNum
    * pciAddress  pciAddress
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'preserveOnDelete' => 'bool',
            'portState' => 'string',
            'fixedIps' => '\HuaweiCloud\SDK\Ecs\V2\Model\FixedIp[]',
            'netId' => 'string',
            'portId' => 'string',
            'macAddr' => 'string',
            'deleteOnTermination' => 'bool',
            'driverMode' => 'string',
            'minRate' => 'int',
            'multiqueueNum' => 'int',
            'pciAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * preserveOnDelete  preserveOnDelete
    * portState  portState
    * fixedIps  fixedIps
    * netId  netId
    * portId  portId
    * macAddr  macAddr
    * deleteOnTermination  deleteOnTermination
    * driverMode  driverMode
    * minRate  minRate
    * multiqueueNum  multiqueueNum
    * pciAddress  pciAddress
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'preserveOnDelete' => null,
        'portState' => null,
        'fixedIps' => null,
        'netId' => null,
        'portId' => null,
        'macAddr' => null,
        'deleteOnTermination' => null,
        'driverMode' => null,
        'minRate' => null,
        'multiqueueNum' => null,
        'pciAddress' => null
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
    * preserveOnDelete  preserveOnDelete
    * portState  portState
    * fixedIps  fixedIps
    * netId  netId
    * portId  portId
    * macAddr  macAddr
    * deleteOnTermination  deleteOnTermination
    * driverMode  driverMode
    * minRate  minRate
    * multiqueueNum  multiqueueNum
    * pciAddress  pciAddress
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'preserveOnDelete' => 'preserve_on_delete',
            'portState' => 'port_state',
            'fixedIps' => 'fixed_ips',
            'netId' => 'net_id',
            'portId' => 'port_id',
            'macAddr' => 'mac_addr',
            'deleteOnTermination' => 'delete_on_termination',
            'driverMode' => 'driver_mode',
            'minRate' => 'min_rate',
            'multiqueueNum' => 'multiqueue_num',
            'pciAddress' => 'pci_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * preserveOnDelete  preserveOnDelete
    * portState  portState
    * fixedIps  fixedIps
    * netId  netId
    * portId  portId
    * macAddr  macAddr
    * deleteOnTermination  deleteOnTermination
    * driverMode  driverMode
    * minRate  minRate
    * multiqueueNum  multiqueueNum
    * pciAddress  pciAddress
    *
    * @var string[]
    */
    protected static $setters = [
            'preserveOnDelete' => 'setPreserveOnDelete',
            'portState' => 'setPortState',
            'fixedIps' => 'setFixedIps',
            'netId' => 'setNetId',
            'portId' => 'setPortId',
            'macAddr' => 'setMacAddr',
            'deleteOnTermination' => 'setDeleteOnTermination',
            'driverMode' => 'setDriverMode',
            'minRate' => 'setMinRate',
            'multiqueueNum' => 'setMultiqueueNum',
            'pciAddress' => 'setPciAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * preserveOnDelete  preserveOnDelete
    * portState  portState
    * fixedIps  fixedIps
    * netId  netId
    * portId  portId
    * macAddr  macAddr
    * deleteOnTermination  deleteOnTermination
    * driverMode  driverMode
    * minRate  minRate
    * multiqueueNum  multiqueueNum
    * pciAddress  pciAddress
    *
    * @var string[]
    */
    protected static $getters = [
            'preserveOnDelete' => 'getPreserveOnDelete',
            'portState' => 'getPortState',
            'fixedIps' => 'getFixedIps',
            'netId' => 'getNetId',
            'portId' => 'getPortId',
            'macAddr' => 'getMacAddr',
            'deleteOnTermination' => 'getDeleteOnTermination',
            'driverMode' => 'getDriverMode',
            'minRate' => 'getMinRate',
            'multiqueueNum' => 'getMultiqueueNum',
            'pciAddress' => 'getPciAddress'
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
        $this->container['preserveOnDelete'] = isset($data['preserveOnDelete']) ? $data['preserveOnDelete'] : null;
        $this->container['portState'] = isset($data['portState']) ? $data['portState'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['netId'] = isset($data['netId']) ? $data['netId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['macAddr'] = isset($data['macAddr']) ? $data['macAddr'] : null;
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : null;
        $this->container['driverMode'] = isset($data['driverMode']) ? $data['driverMode'] : null;
        $this->container['minRate'] = isset($data['minRate']) ? $data['minRate'] : null;
        $this->container['multiqueueNum'] = isset($data['multiqueueNum']) ? $data['multiqueueNum'] : null;
        $this->container['pciAddress'] = isset($data['pciAddress']) ? $data['pciAddress'] : null;
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
    * Gets preserveOnDelete
    *  preserveOnDelete
    *
    * @return bool|null
    */
    public function getPreserveOnDelete()
    {
        return $this->container['preserveOnDelete'];
    }

    /**
    * Sets preserveOnDelete
    *
    * @param bool|null $preserveOnDelete preserveOnDelete
    *
    * @return $this
    */
    public function setPreserveOnDelete($preserveOnDelete)
    {
        $this->container['preserveOnDelete'] = $preserveOnDelete;
        return $this;
    }

    /**
    * Gets portState
    *  portState
    *
    * @return string|null
    */
    public function getPortState()
    {
        return $this->container['portState'];
    }

    /**
    * Sets portState
    *
    * @param string|null $portState portState
    *
    * @return $this
    */
    public function setPortState($portState)
    {
        $this->container['portState'] = $portState;
        return $this;
    }

    /**
    * Gets fixedIps
    *  fixedIps
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\FixedIp[]|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\FixedIp[]|null $fixedIps fixedIps
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets netId
    *  netId
    *
    * @return string|null
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string|null $netId netId
    *
    * @return $this
    */
    public function setNetId($netId)
    {
        $this->container['netId'] = $netId;
        return $this;
    }

    /**
    * Gets portId
    *  portId
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId portId
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets macAddr
    *  macAddr
    *
    * @return string|null
    */
    public function getMacAddr()
    {
        return $this->container['macAddr'];
    }

    /**
    * Sets macAddr
    *
    * @param string|null $macAddr macAddr
    *
    * @return $this
    */
    public function setMacAddr($macAddr)
    {
        $this->container['macAddr'] = $macAddr;
        return $this;
    }

    /**
    * Gets deleteOnTermination
    *  deleteOnTermination
    *
    * @return bool|null
    */
    public function getDeleteOnTermination()
    {
        return $this->container['deleteOnTermination'];
    }

    /**
    * Sets deleteOnTermination
    *
    * @param bool|null $deleteOnTermination deleteOnTermination
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
        return $this;
    }

    /**
    * Gets driverMode
    *  driverMode
    *
    * @return string|null
    */
    public function getDriverMode()
    {
        return $this->container['driverMode'];
    }

    /**
    * Sets driverMode
    *
    * @param string|null $driverMode driverMode
    *
    * @return $this
    */
    public function setDriverMode($driverMode)
    {
        $this->container['driverMode'] = $driverMode;
        return $this;
    }

    /**
    * Gets minRate
    *  minRate
    *
    * @return int|null
    */
    public function getMinRate()
    {
        return $this->container['minRate'];
    }

    /**
    * Sets minRate
    *
    * @param int|null $minRate minRate
    *
    * @return $this
    */
    public function setMinRate($minRate)
    {
        $this->container['minRate'] = $minRate;
        return $this;
    }

    /**
    * Gets multiqueueNum
    *  multiqueueNum
    *
    * @return int|null
    */
    public function getMultiqueueNum()
    {
        return $this->container['multiqueueNum'];
    }

    /**
    * Sets multiqueueNum
    *
    * @param int|null $multiqueueNum multiqueueNum
    *
    * @return $this
    */
    public function setMultiqueueNum($multiqueueNum)
    {
        $this->container['multiqueueNum'] = $multiqueueNum;
        return $this;
    }

    /**
    * Gets pciAddress
    *  pciAddress
    *
    * @return string|null
    */
    public function getPciAddress()
    {
        return $this->container['pciAddress'];
    }

    /**
    * Sets pciAddress
    *
    * @param string|null $pciAddress pciAddress
    *
    * @return $this
    */
    public function setPciAddress($pciAddress)
    {
        $this->container['pciAddress'] = $pciAddress;
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

