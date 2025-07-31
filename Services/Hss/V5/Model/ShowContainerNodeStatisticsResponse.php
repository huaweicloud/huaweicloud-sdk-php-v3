<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowContainerNodeStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowContainerNodeStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unprotectedNum  未防护服务器数
    * protectedNum  开启防护节点
    * protectedNumOnDemand  按需开启防护节点
    * protectedNumPacketCycle  按配额开启防护节点
    * clusterNodeNotInstalledNum  未安装集群节点
    * notClusterNodeNotInstalledNum  未安装非集群节点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unprotectedNum' => 'int',
            'protectedNum' => 'int',
            'protectedNumOnDemand' => 'int',
            'protectedNumPacketCycle' => 'int',
            'clusterNodeNotInstalledNum' => 'int',
            'notClusterNodeNotInstalledNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unprotectedNum  未防护服务器数
    * protectedNum  开启防护节点
    * protectedNumOnDemand  按需开启防护节点
    * protectedNumPacketCycle  按配额开启防护节点
    * clusterNodeNotInstalledNum  未安装集群节点
    * notClusterNodeNotInstalledNum  未安装非集群节点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unprotectedNum' => 'int32',
        'protectedNum' => 'int32',
        'protectedNumOnDemand' => 'int32',
        'protectedNumPacketCycle' => 'int32',
        'clusterNodeNotInstalledNum' => 'int32',
        'notClusterNodeNotInstalledNum' => 'int32'
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
    * unprotectedNum  未防护服务器数
    * protectedNum  开启防护节点
    * protectedNumOnDemand  按需开启防护节点
    * protectedNumPacketCycle  按配额开启防护节点
    * clusterNodeNotInstalledNum  未安装集群节点
    * notClusterNodeNotInstalledNum  未安装非集群节点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unprotectedNum' => 'unprotected_num',
            'protectedNum' => 'protected_num',
            'protectedNumOnDemand' => 'protected_num_on_demand',
            'protectedNumPacketCycle' => 'protected_num_packet_cycle',
            'clusterNodeNotInstalledNum' => 'cluster_node_not_installed_num',
            'notClusterNodeNotInstalledNum' => 'not_cluster_node_not_installed_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unprotectedNum  未防护服务器数
    * protectedNum  开启防护节点
    * protectedNumOnDemand  按需开启防护节点
    * protectedNumPacketCycle  按配额开启防护节点
    * clusterNodeNotInstalledNum  未安装集群节点
    * notClusterNodeNotInstalledNum  未安装非集群节点
    *
    * @var string[]
    */
    protected static $setters = [
            'unprotectedNum' => 'setUnprotectedNum',
            'protectedNum' => 'setProtectedNum',
            'protectedNumOnDemand' => 'setProtectedNumOnDemand',
            'protectedNumPacketCycle' => 'setProtectedNumPacketCycle',
            'clusterNodeNotInstalledNum' => 'setClusterNodeNotInstalledNum',
            'notClusterNodeNotInstalledNum' => 'setNotClusterNodeNotInstalledNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unprotectedNum  未防护服务器数
    * protectedNum  开启防护节点
    * protectedNumOnDemand  按需开启防护节点
    * protectedNumPacketCycle  按配额开启防护节点
    * clusterNodeNotInstalledNum  未安装集群节点
    * notClusterNodeNotInstalledNum  未安装非集群节点
    *
    * @var string[]
    */
    protected static $getters = [
            'unprotectedNum' => 'getUnprotectedNum',
            'protectedNum' => 'getProtectedNum',
            'protectedNumOnDemand' => 'getProtectedNumOnDemand',
            'protectedNumPacketCycle' => 'getProtectedNumPacketCycle',
            'clusterNodeNotInstalledNum' => 'getClusterNodeNotInstalledNum',
            'notClusterNodeNotInstalledNum' => 'getNotClusterNodeNotInstalledNum'
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
        $this->container['unprotectedNum'] = isset($data['unprotectedNum']) ? $data['unprotectedNum'] : null;
        $this->container['protectedNum'] = isset($data['protectedNum']) ? $data['protectedNum'] : null;
        $this->container['protectedNumOnDemand'] = isset($data['protectedNumOnDemand']) ? $data['protectedNumOnDemand'] : null;
        $this->container['protectedNumPacketCycle'] = isset($data['protectedNumPacketCycle']) ? $data['protectedNumPacketCycle'] : null;
        $this->container['clusterNodeNotInstalledNum'] = isset($data['clusterNodeNotInstalledNum']) ? $data['clusterNodeNotInstalledNum'] : null;
        $this->container['notClusterNodeNotInstalledNum'] = isset($data['notClusterNodeNotInstalledNum']) ? $data['notClusterNodeNotInstalledNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unprotectedNum']) && ($this->container['unprotectedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unprotectedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unprotectedNum']) && ($this->container['unprotectedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedNum']) && ($this->container['protectedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedNum']) && ($this->container['protectedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedNumOnDemand']) && ($this->container['protectedNumOnDemand'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedNumOnDemand', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedNumOnDemand']) && ($this->container['protectedNumOnDemand'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedNumOnDemand', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedNumPacketCycle']) && ($this->container['protectedNumPacketCycle'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedNumPacketCycle', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedNumPacketCycle']) && ($this->container['protectedNumPacketCycle'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedNumPacketCycle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterNodeNotInstalledNum']) && ($this->container['clusterNodeNotInstalledNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'clusterNodeNotInstalledNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['clusterNodeNotInstalledNum']) && ($this->container['clusterNodeNotInstalledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'clusterNodeNotInstalledNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notClusterNodeNotInstalledNum']) && ($this->container['notClusterNodeNotInstalledNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'notClusterNodeNotInstalledNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['notClusterNodeNotInstalledNum']) && ($this->container['notClusterNodeNotInstalledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'notClusterNodeNotInstalledNum', must be bigger than or equal to 0.";
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
    * Gets unprotectedNum
    *  未防护服务器数
    *
    * @return int|null
    */
    public function getUnprotectedNum()
    {
        return $this->container['unprotectedNum'];
    }

    /**
    * Sets unprotectedNum
    *
    * @param int|null $unprotectedNum 未防护服务器数
    *
    * @return $this
    */
    public function setUnprotectedNum($unprotectedNum)
    {
        $this->container['unprotectedNum'] = $unprotectedNum;
        return $this;
    }

    /**
    * Gets protectedNum
    *  开启防护节点
    *
    * @return int|null
    */
    public function getProtectedNum()
    {
        return $this->container['protectedNum'];
    }

    /**
    * Sets protectedNum
    *
    * @param int|null $protectedNum 开启防护节点
    *
    * @return $this
    */
    public function setProtectedNum($protectedNum)
    {
        $this->container['protectedNum'] = $protectedNum;
        return $this;
    }

    /**
    * Gets protectedNumOnDemand
    *  按需开启防护节点
    *
    * @return int|null
    */
    public function getProtectedNumOnDemand()
    {
        return $this->container['protectedNumOnDemand'];
    }

    /**
    * Sets protectedNumOnDemand
    *
    * @param int|null $protectedNumOnDemand 按需开启防护节点
    *
    * @return $this
    */
    public function setProtectedNumOnDemand($protectedNumOnDemand)
    {
        $this->container['protectedNumOnDemand'] = $protectedNumOnDemand;
        return $this;
    }

    /**
    * Gets protectedNumPacketCycle
    *  按配额开启防护节点
    *
    * @return int|null
    */
    public function getProtectedNumPacketCycle()
    {
        return $this->container['protectedNumPacketCycle'];
    }

    /**
    * Sets protectedNumPacketCycle
    *
    * @param int|null $protectedNumPacketCycle 按配额开启防护节点
    *
    * @return $this
    */
    public function setProtectedNumPacketCycle($protectedNumPacketCycle)
    {
        $this->container['protectedNumPacketCycle'] = $protectedNumPacketCycle;
        return $this;
    }

    /**
    * Gets clusterNodeNotInstalledNum
    *  未安装集群节点
    *
    * @return int|null
    */
    public function getClusterNodeNotInstalledNum()
    {
        return $this->container['clusterNodeNotInstalledNum'];
    }

    /**
    * Sets clusterNodeNotInstalledNum
    *
    * @param int|null $clusterNodeNotInstalledNum 未安装集群节点
    *
    * @return $this
    */
    public function setClusterNodeNotInstalledNum($clusterNodeNotInstalledNum)
    {
        $this->container['clusterNodeNotInstalledNum'] = $clusterNodeNotInstalledNum;
        return $this;
    }

    /**
    * Gets notClusterNodeNotInstalledNum
    *  未安装非集群节点
    *
    * @return int|null
    */
    public function getNotClusterNodeNotInstalledNum()
    {
        return $this->container['notClusterNodeNotInstalledNum'];
    }

    /**
    * Sets notClusterNodeNotInstalledNum
    *
    * @param int|null $notClusterNodeNotInstalledNum 未安装非集群节点
    *
    * @return $this
    */
    public function setNotClusterNodeNotInstalledNum($notClusterNodeNotInstalledNum)
    {
        $this->container['notClusterNodeNotInstalledNum'] = $notClusterNodeNotInstalledNum;
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

