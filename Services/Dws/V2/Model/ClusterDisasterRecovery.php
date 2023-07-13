<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDisasterRecovery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDisasterRecovery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * latestBarrierTime  latest_barrier_time
    * lastRecoverySpend  last_recovery_spend
    * recoveryPointObject  recovery_point_object
    * recoveryTimeObject  recovery_time_object
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primaryCluster' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterRecoveryProgress',
            'standbyCluster' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterRecoveryProgress',
            'latestBarrierTime' => 'string',
            'lastRecoverySpend' => 'int',
            'recoveryPointObject' => 'int',
            'recoveryTimeObject' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * latestBarrierTime  latest_barrier_time
    * lastRecoverySpend  last_recovery_spend
    * recoveryPointObject  recovery_point_object
    * recoveryTimeObject  recovery_time_object
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primaryCluster' => null,
        'standbyCluster' => null,
        'latestBarrierTime' => null,
        'lastRecoverySpend' => 'int64',
        'recoveryPointObject' => 'int64',
        'recoveryTimeObject' => 'int64'
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
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * latestBarrierTime  latest_barrier_time
    * lastRecoverySpend  last_recovery_spend
    * recoveryPointObject  recovery_point_object
    * recoveryTimeObject  recovery_time_object
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primaryCluster' => 'primary_cluster',
            'standbyCluster' => 'standby_cluster',
            'latestBarrierTime' => 'latest_barrier_time',
            'lastRecoverySpend' => 'last_recovery_spend',
            'recoveryPointObject' => 'recovery_point_object',
            'recoveryTimeObject' => 'recovery_time_object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * latestBarrierTime  latest_barrier_time
    * lastRecoverySpend  last_recovery_spend
    * recoveryPointObject  recovery_point_object
    * recoveryTimeObject  recovery_time_object
    *
    * @var string[]
    */
    protected static $setters = [
            'primaryCluster' => 'setPrimaryCluster',
            'standbyCluster' => 'setStandbyCluster',
            'latestBarrierTime' => 'setLatestBarrierTime',
            'lastRecoverySpend' => 'setLastRecoverySpend',
            'recoveryPointObject' => 'setRecoveryPointObject',
            'recoveryTimeObject' => 'setRecoveryTimeObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * latestBarrierTime  latest_barrier_time
    * lastRecoverySpend  last_recovery_spend
    * recoveryPointObject  recovery_point_object
    * recoveryTimeObject  recovery_time_object
    *
    * @var string[]
    */
    protected static $getters = [
            'primaryCluster' => 'getPrimaryCluster',
            'standbyCluster' => 'getStandbyCluster',
            'latestBarrierTime' => 'getLatestBarrierTime',
            'lastRecoverySpend' => 'getLastRecoverySpend',
            'recoveryPointObject' => 'getRecoveryPointObject',
            'recoveryTimeObject' => 'getRecoveryTimeObject'
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
        $this->container['primaryCluster'] = isset($data['primaryCluster']) ? $data['primaryCluster'] : null;
        $this->container['standbyCluster'] = isset($data['standbyCluster']) ? $data['standbyCluster'] : null;
        $this->container['latestBarrierTime'] = isset($data['latestBarrierTime']) ? $data['latestBarrierTime'] : null;
        $this->container['lastRecoverySpend'] = isset($data['lastRecoverySpend']) ? $data['lastRecoverySpend'] : null;
        $this->container['recoveryPointObject'] = isset($data['recoveryPointObject']) ? $data['recoveryPointObject'] : null;
        $this->container['recoveryTimeObject'] = isset($data['recoveryTimeObject']) ? $data['recoveryTimeObject'] : null;
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
    * Gets primaryCluster
    *  primaryCluster
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterRecoveryProgress|null
    */
    public function getPrimaryCluster()
    {
        return $this->container['primaryCluster'];
    }

    /**
    * Sets primaryCluster
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterRecoveryProgress|null $primaryCluster primaryCluster
    *
    * @return $this
    */
    public function setPrimaryCluster($primaryCluster)
    {
        $this->container['primaryCluster'] = $primaryCluster;
        return $this;
    }

    /**
    * Gets standbyCluster
    *  standbyCluster
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterRecoveryProgress|null
    */
    public function getStandbyCluster()
    {
        return $this->container['standbyCluster'];
    }

    /**
    * Sets standbyCluster
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterRecoveryProgress|null $standbyCluster standbyCluster
    *
    * @return $this
    */
    public function setStandbyCluster($standbyCluster)
    {
        $this->container['standbyCluster'] = $standbyCluster;
        return $this;
    }

    /**
    * Gets latestBarrierTime
    *  latest_barrier_time
    *
    * @return string|null
    */
    public function getLatestBarrierTime()
    {
        return $this->container['latestBarrierTime'];
    }

    /**
    * Sets latestBarrierTime
    *
    * @param string|null $latestBarrierTime latest_barrier_time
    *
    * @return $this
    */
    public function setLatestBarrierTime($latestBarrierTime)
    {
        $this->container['latestBarrierTime'] = $latestBarrierTime;
        return $this;
    }

    /**
    * Gets lastRecoverySpend
    *  last_recovery_spend
    *
    * @return int|null
    */
    public function getLastRecoverySpend()
    {
        return $this->container['lastRecoverySpend'];
    }

    /**
    * Sets lastRecoverySpend
    *
    * @param int|null $lastRecoverySpend last_recovery_spend
    *
    * @return $this
    */
    public function setLastRecoverySpend($lastRecoverySpend)
    {
        $this->container['lastRecoverySpend'] = $lastRecoverySpend;
        return $this;
    }

    /**
    * Gets recoveryPointObject
    *  recovery_point_object
    *
    * @return int|null
    */
    public function getRecoveryPointObject()
    {
        return $this->container['recoveryPointObject'];
    }

    /**
    * Sets recoveryPointObject
    *
    * @param int|null $recoveryPointObject recovery_point_object
    *
    * @return $this
    */
    public function setRecoveryPointObject($recoveryPointObject)
    {
        $this->container['recoveryPointObject'] = $recoveryPointObject;
        return $this;
    }

    /**
    * Gets recoveryTimeObject
    *  recovery_time_object
    *
    * @return int|null
    */
    public function getRecoveryTimeObject()
    {
        return $this->container['recoveryTimeObject'];
    }

    /**
    * Sets recoveryTimeObject
    *
    * @param int|null $recoveryTimeObject recovery_time_object
    *
    * @return $this
    */
    public function setRecoveryTimeObject($recoveryTimeObject)
    {
        $this->container['recoveryTimeObject'] = $recoveryTimeObject;
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

