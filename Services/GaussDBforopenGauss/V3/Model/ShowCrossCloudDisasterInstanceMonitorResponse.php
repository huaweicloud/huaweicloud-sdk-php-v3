<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCrossCloudDisasterInstanceMonitorResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCrossCloudDisasterInstanceMonitorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * status  容灾状态。
    * rpo  数据恢复点目标。
    * rto  数据恢复时间目标。
    * rpoThreshold  rpo阈值。
    * rtoThreshold  rto阈值。
    * switchoverProgress  主从切换进度。该值为一个百分数。例如：40%。
    * failoverProgress  容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'status' => 'string',
            'rpo' => 'string',
            'rto' => 'string',
            'rpoThreshold' => 'string',
            'rtoThreshold' => 'string',
            'switchoverProgress' => 'string',
            'failoverProgress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * status  容灾状态。
    * rpo  数据恢复点目标。
    * rto  数据恢复时间目标。
    * rpoThreshold  rpo阈值。
    * rtoThreshold  rto阈值。
    * switchoverProgress  主从切换进度。该值为一个百分数。例如：40%。
    * failoverProgress  容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'status' => null,
        'rpo' => null,
        'rto' => null,
        'rpoThreshold' => null,
        'rtoThreshold' => null,
        'switchoverProgress' => null,
        'failoverProgress' => null
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
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * status  容灾状态。
    * rpo  数据恢复点目标。
    * rto  数据恢复时间目标。
    * rpoThreshold  rpo阈值。
    * rtoThreshold  rto阈值。
    * switchoverProgress  主从切换进度。该值为一个百分数。例如：40%。
    * failoverProgress  容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'status' => 'status',
            'rpo' => 'rpo',
            'rto' => 'rto',
            'rpoThreshold' => 'rpo_threshold',
            'rtoThreshold' => 'rto_threshold',
            'switchoverProgress' => 'switchover_progress',
            'failoverProgress' => 'failover_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * status  容灾状态。
    * rpo  数据恢复点目标。
    * rto  数据恢复时间目标。
    * rpoThreshold  rpo阈值。
    * rtoThreshold  rto阈值。
    * switchoverProgress  主从切换进度。该值为一个百分数。例如：40%。
    * failoverProgress  容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'rpo' => 'setRpo',
            'rto' => 'setRto',
            'rpoThreshold' => 'setRpoThreshold',
            'rtoThreshold' => 'setRtoThreshold',
            'switchoverProgress' => 'setSwitchoverProgress',
            'failoverProgress' => 'setFailoverProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * status  容灾状态。
    * rpo  数据恢复点目标。
    * rto  数据恢复时间目标。
    * rpoThreshold  rpo阈值。
    * rtoThreshold  rto阈值。
    * switchoverProgress  主从切换进度。该值为一个百分数。例如：40%。
    * failoverProgress  容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'rpo' => 'getRpo',
            'rto' => 'getRto',
            'rpoThreshold' => 'getRpoThreshold',
            'rtoThreshold' => 'getRtoThreshold',
            'switchoverProgress' => 'getSwitchoverProgress',
            'failoverProgress' => 'getFailoverProgress'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['rpo'] = isset($data['rpo']) ? $data['rpo'] : null;
        $this->container['rto'] = isset($data['rto']) ? $data['rto'] : null;
        $this->container['rpoThreshold'] = isset($data['rpoThreshold']) ? $data['rpoThreshold'] : null;
        $this->container['rtoThreshold'] = isset($data['rtoThreshold']) ? $data['rtoThreshold'] : null;
        $this->container['switchoverProgress'] = isset($data['switchoverProgress']) ? $data['switchoverProgress'] : null;
        $this->container['failoverProgress'] = isset($data['failoverProgress']) ? $data['failoverProgress'] : null;
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
    * Gets instanceId
    *  **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 实例ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  容灾状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 容灾状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets rpo
    *  数据恢复点目标。
    *
    * @return string|null
    */
    public function getRpo()
    {
        return $this->container['rpo'];
    }

    /**
    * Sets rpo
    *
    * @param string|null $rpo 数据恢复点目标。
    *
    * @return $this
    */
    public function setRpo($rpo)
    {
        $this->container['rpo'] = $rpo;
        return $this;
    }

    /**
    * Gets rto
    *  数据恢复时间目标。
    *
    * @return string|null
    */
    public function getRto()
    {
        return $this->container['rto'];
    }

    /**
    * Sets rto
    *
    * @param string|null $rto 数据恢复时间目标。
    *
    * @return $this
    */
    public function setRto($rto)
    {
        $this->container['rto'] = $rto;
        return $this;
    }

    /**
    * Gets rpoThreshold
    *  rpo阈值。
    *
    * @return string|null
    */
    public function getRpoThreshold()
    {
        return $this->container['rpoThreshold'];
    }

    /**
    * Sets rpoThreshold
    *
    * @param string|null $rpoThreshold rpo阈值。
    *
    * @return $this
    */
    public function setRpoThreshold($rpoThreshold)
    {
        $this->container['rpoThreshold'] = $rpoThreshold;
        return $this;
    }

    /**
    * Gets rtoThreshold
    *  rto阈值。
    *
    * @return string|null
    */
    public function getRtoThreshold()
    {
        return $this->container['rtoThreshold'];
    }

    /**
    * Sets rtoThreshold
    *
    * @param string|null $rtoThreshold rto阈值。
    *
    * @return $this
    */
    public function setRtoThreshold($rtoThreshold)
    {
        $this->container['rtoThreshold'] = $rtoThreshold;
        return $this;
    }

    /**
    * Gets switchoverProgress
    *  主从切换进度。该值为一个百分数。例如：40%。
    *
    * @return string|null
    */
    public function getSwitchoverProgress()
    {
        return $this->container['switchoverProgress'];
    }

    /**
    * Sets switchoverProgress
    *
    * @param string|null $switchoverProgress 主从切换进度。该值为一个百分数。例如：40%。
    *
    * @return $this
    */
    public function setSwitchoverProgress($switchoverProgress)
    {
        $this->container['switchoverProgress'] = $switchoverProgress;
        return $this;
    }

    /**
    * Gets failoverProgress
    *  容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @return string|null
    */
    public function getFailoverProgress()
    {
        return $this->container['failoverProgress'];
    }

    /**
    * Sets failoverProgress
    *
    * @param string|null $failoverProgress 容灾升主进度。该值为一个百分数。例如：40%。
    *
    * @return $this
    */
    public function setFailoverProgress($failoverProgress)
    {
        $this->container['failoverProgress'] = $failoverProgress;
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

