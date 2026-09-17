<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableVacuumInfoOpen implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableVacuumInfoOpen';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vacuumRunningInfo  **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    * vacuumWaitingInfo  **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    * vacuumFinishedInfo  **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    * vacuumCanceledInfo  **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vacuumRunningInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]',
            'vacuumWaitingInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]',
            'vacuumFinishedInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]',
            'vacuumCanceledInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vacuumRunningInfo  **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    * vacuumWaitingInfo  **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    * vacuumFinishedInfo  **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    * vacuumCanceledInfo  **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vacuumRunningInfo' => null,
        'vacuumWaitingInfo' => null,
        'vacuumFinishedInfo' => null,
        'vacuumCanceledInfo' => null
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
    * vacuumRunningInfo  **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    * vacuumWaitingInfo  **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    * vacuumFinishedInfo  **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    * vacuumCanceledInfo  **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vacuumRunningInfo' => 'vacuum_running_info',
            'vacuumWaitingInfo' => 'vacuum_waiting_info',
            'vacuumFinishedInfo' => 'vacuum_finished_info',
            'vacuumCanceledInfo' => 'vacuum_canceled_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vacuumRunningInfo  **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    * vacuumWaitingInfo  **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    * vacuumFinishedInfo  **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    * vacuumCanceledInfo  **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'vacuumRunningInfo' => 'setVacuumRunningInfo',
            'vacuumWaitingInfo' => 'setVacuumWaitingInfo',
            'vacuumFinishedInfo' => 'setVacuumFinishedInfo',
            'vacuumCanceledInfo' => 'setVacuumCanceledInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vacuumRunningInfo  **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    * vacuumWaitingInfo  **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    * vacuumFinishedInfo  **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    * vacuumCanceledInfo  **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'vacuumRunningInfo' => 'getVacuumRunningInfo',
            'vacuumWaitingInfo' => 'getVacuumWaitingInfo',
            'vacuumFinishedInfo' => 'getVacuumFinishedInfo',
            'vacuumCanceledInfo' => 'getVacuumCanceledInfo'
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
        $this->container['vacuumRunningInfo'] = isset($data['vacuumRunningInfo']) ? $data['vacuumRunningInfo'] : null;
        $this->container['vacuumWaitingInfo'] = isset($data['vacuumWaitingInfo']) ? $data['vacuumWaitingInfo'] : null;
        $this->container['vacuumFinishedInfo'] = isset($data['vacuumFinishedInfo']) ? $data['vacuumFinishedInfo'] : null;
        $this->container['vacuumCanceledInfo'] = isset($data['vacuumCanceledInfo']) ? $data['vacuumCanceledInfo'] : null;
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
    * Gets vacuumRunningInfo
    *  **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null
    */
    public function getVacuumRunningInfo()
    {
        return $this->container['vacuumRunningInfo'];
    }

    /**
    * Sets vacuumRunningInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null $vacuumRunningInfo **参数解释**： 运行中的表信息。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVacuumRunningInfo($vacuumRunningInfo)
    {
        $this->container['vacuumRunningInfo'] = $vacuumRunningInfo;
        return $this;
    }

    /**
    * Gets vacuumWaitingInfo
    *  **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null
    */
    public function getVacuumWaitingInfo()
    {
        return $this->container['vacuumWaitingInfo'];
    }

    /**
    * Sets vacuumWaitingInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null $vacuumWaitingInfo **参数解释**： 等待中的表信息。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVacuumWaitingInfo($vacuumWaitingInfo)
    {
        $this->container['vacuumWaitingInfo'] = $vacuumWaitingInfo;
        return $this;
    }

    /**
    * Gets vacuumFinishedInfo
    *  **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null
    */
    public function getVacuumFinishedInfo()
    {
        return $this->container['vacuumFinishedInfo'];
    }

    /**
    * Sets vacuumFinishedInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null $vacuumFinishedInfo **参数解释**： 已结束的表信息。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVacuumFinishedInfo($vacuumFinishedInfo)
    {
        $this->container['vacuumFinishedInfo'] = $vacuumFinishedInfo;
        return $this;
    }

    /**
    * Gets vacuumCanceledInfo
    *  **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null
    */
    public function getVacuumCanceledInfo()
    {
        return $this->container['vacuumCanceledInfo'];
    }

    /**
    * Sets vacuumCanceledInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableInfoOpen[]|null $vacuumCanceledInfo **参数解释**： 取消的表信息。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVacuumCanceledInfo($vacuumCanceledInfo)
    {
        $this->container['vacuumCanceledInfo'] = $vacuumCanceledInfo;
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

