<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Ips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Ips';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipId  ip id
    * ip  ip
    * isp  线路
    * dataCenter  数据中心
    * foreignSwitchStatus  海外区域封禁状态 0-关闭 1-开启
    * udpSwitchStatus  UDP协议禁用 0-关闭 1-开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipId' => 'string',
            'ip' => 'string',
            'isp' => 'string',
            'dataCenter' => 'string',
            'foreignSwitchStatus' => 'int',
            'udpSwitchStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipId  ip id
    * ip  ip
    * isp  线路
    * dataCenter  数据中心
    * foreignSwitchStatus  海外区域封禁状态 0-关闭 1-开启
    * udpSwitchStatus  UDP协议禁用 0-关闭 1-开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipId' => null,
        'ip' => null,
        'isp' => null,
        'dataCenter' => null,
        'foreignSwitchStatus' => 'int32',
        'udpSwitchStatus' => 'int32'
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
    * ipId  ip id
    * ip  ip
    * isp  线路
    * dataCenter  数据中心
    * foreignSwitchStatus  海外区域封禁状态 0-关闭 1-开启
    * udpSwitchStatus  UDP协议禁用 0-关闭 1-开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipId' => 'ip_id',
            'ip' => 'ip',
            'isp' => 'isp',
            'dataCenter' => 'data_center',
            'foreignSwitchStatus' => 'foreign_switch_status',
            'udpSwitchStatus' => 'udp_switch_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipId  ip id
    * ip  ip
    * isp  线路
    * dataCenter  数据中心
    * foreignSwitchStatus  海外区域封禁状态 0-关闭 1-开启
    * udpSwitchStatus  UDP协议禁用 0-关闭 1-开启
    *
    * @var string[]
    */
    protected static $setters = [
            'ipId' => 'setIpId',
            'ip' => 'setIp',
            'isp' => 'setIsp',
            'dataCenter' => 'setDataCenter',
            'foreignSwitchStatus' => 'setForeignSwitchStatus',
            'udpSwitchStatus' => 'setUdpSwitchStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipId  ip id
    * ip  ip
    * isp  线路
    * dataCenter  数据中心
    * foreignSwitchStatus  海外区域封禁状态 0-关闭 1-开启
    * udpSwitchStatus  UDP协议禁用 0-关闭 1-开启
    *
    * @var string[]
    */
    protected static $getters = [
            'ipId' => 'getIpId',
            'ip' => 'getIp',
            'isp' => 'getIsp',
            'dataCenter' => 'getDataCenter',
            'foreignSwitchStatus' => 'getForeignSwitchStatus',
            'udpSwitchStatus' => 'getUdpSwitchStatus'
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
        $this->container['ipId'] = isset($data['ipId']) ? $data['ipId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['foreignSwitchStatus'] = isset($data['foreignSwitchStatus']) ? $data['foreignSwitchStatus'] : null;
        $this->container['udpSwitchStatus'] = isset($data['udpSwitchStatus']) ? $data['udpSwitchStatus'] : null;
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
    * Gets ipId
    *  ip id
    *
    * @return string|null
    */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
    * Sets ipId
    *
    * @param string|null $ipId ip id
    *
    * @return $this
    */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;
        return $this;
    }

    /**
    * Gets ip
    *  ip
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets isp
    *  线路
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets dataCenter
    *  数据中心
    *
    * @return string|null
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string|null $dataCenter 数据中心
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets foreignSwitchStatus
    *  海外区域封禁状态 0-关闭 1-开启
    *
    * @return int|null
    */
    public function getForeignSwitchStatus()
    {
        return $this->container['foreignSwitchStatus'];
    }

    /**
    * Sets foreignSwitchStatus
    *
    * @param int|null $foreignSwitchStatus 海外区域封禁状态 0-关闭 1-开启
    *
    * @return $this
    */
    public function setForeignSwitchStatus($foreignSwitchStatus)
    {
        $this->container['foreignSwitchStatus'] = $foreignSwitchStatus;
        return $this;
    }

    /**
    * Gets udpSwitchStatus
    *  UDP协议禁用 0-关闭 1-开启
    *
    * @return int|null
    */
    public function getUdpSwitchStatus()
    {
        return $this->container['udpSwitchStatus'];
    }

    /**
    * Sets udpSwitchStatus
    *
    * @param int|null $udpSwitchStatus UDP协议禁用 0-关闭 1-开启
    *
    * @return $this
    */
    public function setUdpSwitchStatus($udpSwitchStatus)
    {
        $this->container['udpSwitchStatus'] = $udpSwitchStatus;
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

