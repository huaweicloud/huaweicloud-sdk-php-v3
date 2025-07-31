<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNetworkStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNetworkStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectedClusterTotalNum  未保护集群数
    * clusterTotalNum  集群数
    * namespaceTotalNum  命名空间数
    * networkPolicyTotalNum  策略数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectedClusterTotalNum' => 'int',
            'clusterTotalNum' => 'int',
            'namespaceTotalNum' => 'int',
            'networkPolicyTotalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectedClusterTotalNum  未保护集群数
    * clusterTotalNum  集群数
    * namespaceTotalNum  命名空间数
    * networkPolicyTotalNum  策略数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectedClusterTotalNum' => 'int32',
        'clusterTotalNum' => 'int32',
        'namespaceTotalNum' => 'int32',
        'networkPolicyTotalNum' => 'int32'
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
    * protectedClusterTotalNum  未保护集群数
    * clusterTotalNum  集群数
    * namespaceTotalNum  命名空间数
    * networkPolicyTotalNum  策略数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectedClusterTotalNum' => 'protected_cluster_total_num',
            'clusterTotalNum' => 'cluster_total_num',
            'namespaceTotalNum' => 'namespace_total_num',
            'networkPolicyTotalNum' => 'network_policy_total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectedClusterTotalNum  未保护集群数
    * clusterTotalNum  集群数
    * namespaceTotalNum  命名空间数
    * networkPolicyTotalNum  策略数
    *
    * @var string[]
    */
    protected static $setters = [
            'protectedClusterTotalNum' => 'setProtectedClusterTotalNum',
            'clusterTotalNum' => 'setClusterTotalNum',
            'namespaceTotalNum' => 'setNamespaceTotalNum',
            'networkPolicyTotalNum' => 'setNetworkPolicyTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectedClusterTotalNum  未保护集群数
    * clusterTotalNum  集群数
    * namespaceTotalNum  命名空间数
    * networkPolicyTotalNum  策略数
    *
    * @var string[]
    */
    protected static $getters = [
            'protectedClusterTotalNum' => 'getProtectedClusterTotalNum',
            'clusterTotalNum' => 'getClusterTotalNum',
            'namespaceTotalNum' => 'getNamespaceTotalNum',
            'networkPolicyTotalNum' => 'getNetworkPolicyTotalNum'
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
        $this->container['protectedClusterTotalNum'] = isset($data['protectedClusterTotalNum']) ? $data['protectedClusterTotalNum'] : null;
        $this->container['clusterTotalNum'] = isset($data['clusterTotalNum']) ? $data['clusterTotalNum'] : null;
        $this->container['namespaceTotalNum'] = isset($data['namespaceTotalNum']) ? $data['namespaceTotalNum'] : null;
        $this->container['networkPolicyTotalNum'] = isset($data['networkPolicyTotalNum']) ? $data['networkPolicyTotalNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectedClusterTotalNum']) && ($this->container['protectedClusterTotalNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'protectedClusterTotalNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['protectedClusterTotalNum']) && ($this->container['protectedClusterTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedClusterTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterTotalNum']) && ($this->container['clusterTotalNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'clusterTotalNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['clusterTotalNum']) && ($this->container['clusterTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'clusterTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceTotalNum']) && ($this->container['namespaceTotalNum'] > 100000)) {
                $invalidProperties[] = "invalid value for 'namespaceTotalNum', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['namespaceTotalNum']) && ($this->container['namespaceTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkPolicyTotalNum']) && ($this->container['networkPolicyTotalNum'] > 100000)) {
                $invalidProperties[] = "invalid value for 'networkPolicyTotalNum', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['networkPolicyTotalNum']) && ($this->container['networkPolicyTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'networkPolicyTotalNum', must be bigger than or equal to 0.";
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
    * Gets protectedClusterTotalNum
    *  未保护集群数
    *
    * @return int|null
    */
    public function getProtectedClusterTotalNum()
    {
        return $this->container['protectedClusterTotalNum'];
    }

    /**
    * Sets protectedClusterTotalNum
    *
    * @param int|null $protectedClusterTotalNum 未保护集群数
    *
    * @return $this
    */
    public function setProtectedClusterTotalNum($protectedClusterTotalNum)
    {
        $this->container['protectedClusterTotalNum'] = $protectedClusterTotalNum;
        return $this;
    }

    /**
    * Gets clusterTotalNum
    *  集群数
    *
    * @return int|null
    */
    public function getClusterTotalNum()
    {
        return $this->container['clusterTotalNum'];
    }

    /**
    * Sets clusterTotalNum
    *
    * @param int|null $clusterTotalNum 集群数
    *
    * @return $this
    */
    public function setClusterTotalNum($clusterTotalNum)
    {
        $this->container['clusterTotalNum'] = $clusterTotalNum;
        return $this;
    }

    /**
    * Gets namespaceTotalNum
    *  命名空间数
    *
    * @return int|null
    */
    public function getNamespaceTotalNum()
    {
        return $this->container['namespaceTotalNum'];
    }

    /**
    * Sets namespaceTotalNum
    *
    * @param int|null $namespaceTotalNum 命名空间数
    *
    * @return $this
    */
    public function setNamespaceTotalNum($namespaceTotalNum)
    {
        $this->container['namespaceTotalNum'] = $namespaceTotalNum;
        return $this;
    }

    /**
    * Gets networkPolicyTotalNum
    *  策略数
    *
    * @return int|null
    */
    public function getNetworkPolicyTotalNum()
    {
        return $this->container['networkPolicyTotalNum'];
    }

    /**
    * Sets networkPolicyTotalNum
    *
    * @param int|null $networkPolicyTotalNum 策略数
    *
    * @return $this
    */
    public function setNetworkPolicyTotalNum($networkPolicyTotalNum)
    {
        $this->container['networkPolicyTotalNum'] = $networkPolicyTotalNum;
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

