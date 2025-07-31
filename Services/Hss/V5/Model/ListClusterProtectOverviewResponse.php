<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterProtectOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterProtectOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterNum  集群数量
    * underProtectNum  防护中数量
    * policyNum  策略数量
    * eventNum  事件数量
    * blockNum  已阻断事件数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterNum' => 'int',
            'underProtectNum' => 'int',
            'policyNum' => 'int',
            'eventNum' => 'int',
            'blockNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterNum  集群数量
    * underProtectNum  防护中数量
    * policyNum  策略数量
    * eventNum  事件数量
    * blockNum  已阻断事件数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterNum' => 'int32',
        'underProtectNum' => 'int32',
        'policyNum' => 'int32',
        'eventNum' => 'int32',
        'blockNum' => 'int32'
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
    * clusterNum  集群数量
    * underProtectNum  防护中数量
    * policyNum  策略数量
    * eventNum  事件数量
    * blockNum  已阻断事件数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterNum' => 'cluster_num',
            'underProtectNum' => 'under_protect_num',
            'policyNum' => 'policy_num',
            'eventNum' => 'event_num',
            'blockNum' => 'block_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterNum  集群数量
    * underProtectNum  防护中数量
    * policyNum  策略数量
    * eventNum  事件数量
    * blockNum  已阻断事件数量
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterNum' => 'setClusterNum',
            'underProtectNum' => 'setUnderProtectNum',
            'policyNum' => 'setPolicyNum',
            'eventNum' => 'setEventNum',
            'blockNum' => 'setBlockNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterNum  集群数量
    * underProtectNum  防护中数量
    * policyNum  策略数量
    * eventNum  事件数量
    * blockNum  已阻断事件数量
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterNum' => 'getClusterNum',
            'underProtectNum' => 'getUnderProtectNum',
            'policyNum' => 'getPolicyNum',
            'eventNum' => 'getEventNum',
            'blockNum' => 'getBlockNum'
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
        $this->container['underProtectNum'] = isset($data['underProtectNum']) ? $data['underProtectNum'] : null;
        $this->container['policyNum'] = isset($data['policyNum']) ? $data['policyNum'] : null;
        $this->container['eventNum'] = isset($data['eventNum']) ? $data['eventNum'] : null;
        $this->container['blockNum'] = isset($data['blockNum']) ? $data['blockNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterNum']) && ($this->container['clusterNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'clusterNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['clusterNum']) && ($this->container['clusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'clusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['underProtectNum']) && ($this->container['underProtectNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'underProtectNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['underProtectNum']) && ($this->container['underProtectNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'underProtectNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockNum']) && ($this->container['blockNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'blockNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['blockNum']) && ($this->container['blockNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockNum', must be bigger than or equal to 0.";
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
    *  集群数量
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
    * @param int|null $clusterNum 集群数量
    *
    * @return $this
    */
    public function setClusterNum($clusterNum)
    {
        $this->container['clusterNum'] = $clusterNum;
        return $this;
    }

    /**
    * Gets underProtectNum
    *  防护中数量
    *
    * @return int|null
    */
    public function getUnderProtectNum()
    {
        return $this->container['underProtectNum'];
    }

    /**
    * Sets underProtectNum
    *
    * @param int|null $underProtectNum 防护中数量
    *
    * @return $this
    */
    public function setUnderProtectNum($underProtectNum)
    {
        $this->container['underProtectNum'] = $underProtectNum;
        return $this;
    }

    /**
    * Gets policyNum
    *  策略数量
    *
    * @return int|null
    */
    public function getPolicyNum()
    {
        return $this->container['policyNum'];
    }

    /**
    * Sets policyNum
    *
    * @param int|null $policyNum 策略数量
    *
    * @return $this
    */
    public function setPolicyNum($policyNum)
    {
        $this->container['policyNum'] = $policyNum;
        return $this;
    }

    /**
    * Gets eventNum
    *  事件数量
    *
    * @return int|null
    */
    public function getEventNum()
    {
        return $this->container['eventNum'];
    }

    /**
    * Sets eventNum
    *
    * @param int|null $eventNum 事件数量
    *
    * @return $this
    */
    public function setEventNum($eventNum)
    {
        $this->container['eventNum'] = $eventNum;
        return $this;
    }

    /**
    * Gets blockNum
    *  已阻断事件数量
    *
    * @return int|null
    */
    public function getBlockNum()
    {
        return $this->container['blockNum'];
    }

    /**
    * Sets blockNum
    *
    * @param int|null $blockNum 已阻断事件数量
    *
    * @return $this
    */
    public function setBlockNum($blockNum)
    {
        $this->container['blockNum'] = $blockNum;
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

