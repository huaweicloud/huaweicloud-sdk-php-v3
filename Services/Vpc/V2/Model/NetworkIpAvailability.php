<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkIpAvailability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkIpAvailability';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * networkId  网络ID
    * networkName  网络名称
    * tenantId  项目ID
    * totalIps  网络中IP总数（不包含系统预留地址）
    * usedIps  网络中已经使用的IP数目（不包含系统预留地址）
    * subnetIpAvailability  子网IP使用情况的对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'networkId' => 'string',
            'networkName' => 'string',
            'tenantId' => 'string',
            'totalIps' => 'int',
            'usedIps' => 'int',
            'subnetIpAvailability' => '\HuaweiCloud\SDK\Vpc\V2\Model\SubnetIpAvailability[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * networkId  网络ID
    * networkName  网络名称
    * tenantId  项目ID
    * totalIps  网络中IP总数（不包含系统预留地址）
    * usedIps  网络中已经使用的IP数目（不包含系统预留地址）
    * subnetIpAvailability  子网IP使用情况的对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'networkId' => null,
        'networkName' => null,
        'tenantId' => null,
        'totalIps' => 'int32',
        'usedIps' => 'int32',
        'subnetIpAvailability' => null
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
    * networkId  网络ID
    * networkName  网络名称
    * tenantId  项目ID
    * totalIps  网络中IP总数（不包含系统预留地址）
    * usedIps  网络中已经使用的IP数目（不包含系统预留地址）
    * subnetIpAvailability  子网IP使用情况的对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'networkId' => 'network_id',
            'networkName' => 'network_name',
            'tenantId' => 'tenant_id',
            'totalIps' => 'total_ips',
            'usedIps' => 'used_ips',
            'subnetIpAvailability' => 'subnet_ip_availability'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * networkId  网络ID
    * networkName  网络名称
    * tenantId  项目ID
    * totalIps  网络中IP总数（不包含系统预留地址）
    * usedIps  网络中已经使用的IP数目（不包含系统预留地址）
    * subnetIpAvailability  子网IP使用情况的对象
    *
    * @var string[]
    */
    protected static $setters = [
            'networkId' => 'setNetworkId',
            'networkName' => 'setNetworkName',
            'tenantId' => 'setTenantId',
            'totalIps' => 'setTotalIps',
            'usedIps' => 'setUsedIps',
            'subnetIpAvailability' => 'setSubnetIpAvailability'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * networkId  网络ID
    * networkName  网络名称
    * tenantId  项目ID
    * totalIps  网络中IP总数（不包含系统预留地址）
    * usedIps  网络中已经使用的IP数目（不包含系统预留地址）
    * subnetIpAvailability  子网IP使用情况的对象
    *
    * @var string[]
    */
    protected static $getters = [
            'networkId' => 'getNetworkId',
            'networkName' => 'getNetworkName',
            'tenantId' => 'getTenantId',
            'totalIps' => 'getTotalIps',
            'usedIps' => 'getUsedIps',
            'subnetIpAvailability' => 'getSubnetIpAvailability'
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
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['networkName'] = isset($data['networkName']) ? $data['networkName'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['totalIps'] = isset($data['totalIps']) ? $data['totalIps'] : null;
        $this->container['usedIps'] = isset($data['usedIps']) ? $data['usedIps'] : null;
        $this->container['subnetIpAvailability'] = isset($data['subnetIpAvailability']) ? $data['subnetIpAvailability'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
            if (!preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['networkId'])) {
                $invalidProperties[] = "invalid value for 'networkId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
        if ($this->container['networkName'] === null) {
            $invalidProperties[] = "'networkName' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['totalIps'] === null) {
            $invalidProperties[] = "'totalIps' can't be null";
        }
        if ($this->container['usedIps'] === null) {
            $invalidProperties[] = "'usedIps' can't be null";
        }
        if ($this->container['subnetIpAvailability'] === null) {
            $invalidProperties[] = "'subnetIpAvailability' can't be null";
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
    * Gets networkId
    *  网络ID
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 网络ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets networkName
    *  网络名称
    *
    * @return string
    */
    public function getNetworkName()
    {
        return $this->container['networkName'];
    }

    /**
    * Sets networkName
    *
    * @param string $networkName 网络名称
    *
    * @return $this
    */
    public function setNetworkName($networkName)
    {
        $this->container['networkName'] = $networkName;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets totalIps
    *  网络中IP总数（不包含系统预留地址）
    *
    * @return int
    */
    public function getTotalIps()
    {
        return $this->container['totalIps'];
    }

    /**
    * Sets totalIps
    *
    * @param int $totalIps 网络中IP总数（不包含系统预留地址）
    *
    * @return $this
    */
    public function setTotalIps($totalIps)
    {
        $this->container['totalIps'] = $totalIps;
        return $this;
    }

    /**
    * Gets usedIps
    *  网络中已经使用的IP数目（不包含系统预留地址）
    *
    * @return int
    */
    public function getUsedIps()
    {
        return $this->container['usedIps'];
    }

    /**
    * Sets usedIps
    *
    * @param int $usedIps 网络中已经使用的IP数目（不包含系统预留地址）
    *
    * @return $this
    */
    public function setUsedIps($usedIps)
    {
        $this->container['usedIps'] = $usedIps;
        return $this;
    }

    /**
    * Gets subnetIpAvailability
    *  子网IP使用情况的对象
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\SubnetIpAvailability[]
    */
    public function getSubnetIpAvailability()
    {
        return $this->container['subnetIpAvailability'];
    }

    /**
    * Sets subnetIpAvailability
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\SubnetIpAvailability[] $subnetIpAvailability 子网IP使用情况的对象
    *
    * @return $this
    */
    public function setSubnetIpAvailability($subnetIpAvailability)
    {
        $this->container['subnetIpAvailability'] = $subnetIpAvailability;
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

