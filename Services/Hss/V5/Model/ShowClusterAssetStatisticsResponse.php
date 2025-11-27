<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterAssetStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterAssetStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterNum  **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    * workLoadNum  **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    * serviceNum  **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    * podNum  **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterNum' => 'int',
            'workLoadNum' => 'int',
            'serviceNum' => 'int',
            'podNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterNum  **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    * workLoadNum  **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    * serviceNum  **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    * podNum  **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterNum' => 'int32',
        'workLoadNum' => 'int32',
        'serviceNum' => 'int32',
        'podNum' => 'int32'
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
    * clusterNum  **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    * workLoadNum  **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    * serviceNum  **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    * podNum  **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterNum' => 'cluster_num',
            'workLoadNum' => 'work_load_num',
            'serviceNum' => 'service_num',
            'podNum' => 'pod_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterNum  **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    * workLoadNum  **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    * serviceNum  **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    * podNum  **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterNum' => 'setClusterNum',
            'workLoadNum' => 'setWorkLoadNum',
            'serviceNum' => 'setServiceNum',
            'podNum' => 'setPodNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterNum  **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    * workLoadNum  **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    * serviceNum  **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    * podNum  **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterNum' => 'getClusterNum',
            'workLoadNum' => 'getWorkLoadNum',
            'serviceNum' => 'getServiceNum',
            'podNum' => 'getPodNum'
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
        $this->container['clusterNum'] = isset($data['clusterNum']) ? $data['clusterNum'] : null;
        $this->container['workLoadNum'] = isset($data['workLoadNum']) ? $data['workLoadNum'] : null;
        $this->container['serviceNum'] = isset($data['serviceNum']) ? $data['serviceNum'] : null;
        $this->container['podNum'] = isset($data['podNum']) ? $data['podNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterNum']) && ($this->container['clusterNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterNum']) && ($this->container['clusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'clusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workLoadNum']) && ($this->container['workLoadNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'workLoadNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workLoadNum']) && ($this->container['workLoadNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'workLoadNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceNum']) && ($this->container['serviceNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'serviceNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['serviceNum']) && ($this->container['serviceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'serviceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podNum']) && ($this->container['podNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'podNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['podNum']) && ($this->container['podNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'podNum', must be bigger than or equal to 0.";
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
    * Gets clusterNum
    *  **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getClusterNum()
    {
        return $this->container['clusterNum'];
    }

    /**
    * Sets clusterNum
    *
    * @param int|null $clusterNum **参数解释**: 集群数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setClusterNum($clusterNum)
    {
        $this->container['clusterNum'] = $clusterNum;
        return $this;
    }

    /**
    * Gets workLoadNum
    *  **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getWorkLoadNum()
    {
        return $this->container['workLoadNum'];
    }

    /**
    * Sets workLoadNum
    *
    * @param int|null $workLoadNum **参数解释**: 工作负载数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setWorkLoadNum($workLoadNum)
    {
        $this->container['workLoadNum'] = $workLoadNum;
        return $this;
    }

    /**
    * Gets serviceNum
    *  **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getServiceNum()
    {
        return $this->container['serviceNum'];
    }

    /**
    * Sets serviceNum
    *
    * @param int|null $serviceNum **参数解释**: 服务数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setServiceNum($serviceNum)
    {
        $this->container['serviceNum'] = $serviceNum;
        return $this;
    }

    /**
    * Gets podNum
    *  **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getPodNum()
    {
        return $this->container['podNum'];
    }

    /**
    * Sets podNum
    *
    * @param int|null $podNum **参数解释**: pod数量 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setPodNum($podNum)
    {
        $this->container['podNum'] = $podNum;
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

