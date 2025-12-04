<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceRecycleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceRecycleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * name  **参数解释**： 实例名称。  **取值范围**： 不涉及。
    * engine  **参数解释**： 引擎。  **取值范围**： kafka。
    * inRecycleTime  **参数解释**： 回收时间。  **取值范围**： 不涉及。
    * saveTime  **参数解释**： 保留时间。  **取值范围**： 1~7天。
    * autoDeleteTime  **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    * costPerHour  **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    * errorMessage  **参数解释**： 错误信息。  **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'status' => 'string',
            'name' => 'string',
            'engine' => 'string',
            'inRecycleTime' => 'int',
            'saveTime' => 'int',
            'autoDeleteTime' => 'int',
            'costPerHour' => 'double',
            'errorMessage' => 'string',
            'productId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * name  **参数解释**： 实例名称。  **取值范围**： 不涉及。
    * engine  **参数解释**： 引擎。  **取值范围**： kafka。
    * inRecycleTime  **参数解释**： 回收时间。  **取值范围**： 不涉及。
    * saveTime  **参数解释**： 保留时间。  **取值范围**： 1~7天。
    * autoDeleteTime  **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    * costPerHour  **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    * errorMessage  **参数解释**： 错误信息。  **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'status' => null,
        'name' => null,
        'engine' => null,
        'inRecycleTime' => 'int64',
        'saveTime' => null,
        'autoDeleteTime' => 'int64',
        'costPerHour' => 'double',
        'errorMessage' => null,
        'productId' => null
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
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * name  **参数解释**： 实例名称。  **取值范围**： 不涉及。
    * engine  **参数解释**： 引擎。  **取值范围**： kafka。
    * inRecycleTime  **参数解释**： 回收时间。  **取值范围**： 不涉及。
    * saveTime  **参数解释**： 保留时间。  **取值范围**： 1~7天。
    * autoDeleteTime  **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    * costPerHour  **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    * errorMessage  **参数解释**： 错误信息。  **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'status' => 'status',
            'name' => 'name',
            'engine' => 'engine',
            'inRecycleTime' => 'in_recycle_time',
            'saveTime' => 'save_time',
            'autoDeleteTime' => 'auto_delete_time',
            'costPerHour' => 'cost_per_hour',
            'errorMessage' => 'error_message',
            'productId' => 'product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * name  **参数解释**： 实例名称。  **取值范围**： 不涉及。
    * engine  **参数解释**： 引擎。  **取值范围**： kafka。
    * inRecycleTime  **参数解释**： 回收时间。  **取值范围**： 不涉及。
    * saveTime  **参数解释**： 保留时间。  **取值范围**： 1~7天。
    * autoDeleteTime  **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    * costPerHour  **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    * errorMessage  **参数解释**： 错误信息。  **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'name' => 'setName',
            'engine' => 'setEngine',
            'inRecycleTime' => 'setInRecycleTime',
            'saveTime' => 'setSaveTime',
            'autoDeleteTime' => 'setAutoDeleteTime',
            'costPerHour' => 'setCostPerHour',
            'errorMessage' => 'setErrorMessage',
            'productId' => 'setProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * name  **参数解释**： 实例名称。  **取值范围**： 不涉及。
    * engine  **参数解释**： 引擎。  **取值范围**： kafka。
    * inRecycleTime  **参数解释**： 回收时间。  **取值范围**： 不涉及。
    * saveTime  **参数解释**： 保留时间。  **取值范围**： 1~7天。
    * autoDeleteTime  **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    * costPerHour  **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    * errorMessage  **参数解释**： 错误信息。  **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'name' => 'getName',
            'engine' => 'getEngine',
            'inRecycleTime' => 'getInRecycleTime',
            'saveTime' => 'getSaveTime',
            'autoDeleteTime' => 'getAutoDeleteTime',
            'costPerHour' => 'getCostPerHour',
            'errorMessage' => 'getErrorMessage',
            'productId' => 'getProductId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['inRecycleTime'] = isset($data['inRecycleTime']) ? $data['inRecycleTime'] : null;
        $this->container['saveTime'] = isset($data['saveTime']) ? $data['saveTime'] : null;
        $this->container['autoDeleteTime'] = isset($data['autoDeleteTime']) ? $data['autoDeleteTime'] : null;
        $this->container['costPerHour'] = isset($data['costPerHour']) ? $data['costPerHour'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
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
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $instanceId **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
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
    * @param string|null $status **参数解释**： 实例状态。  **取值范围**： 详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 实例名称。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 实例名称。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engine
    *  **参数解释**： 引擎。  **取值范围**： kafka。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine **参数解释**： 引擎。  **取值范围**： kafka。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets inRecycleTime
    *  **参数解释**： 回收时间。  **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getInRecycleTime()
    {
        return $this->container['inRecycleTime'];
    }

    /**
    * Sets inRecycleTime
    *
    * @param int|null $inRecycleTime **参数解释**： 回收时间。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInRecycleTime($inRecycleTime)
    {
        $this->container['inRecycleTime'] = $inRecycleTime;
        return $this;
    }

    /**
    * Gets saveTime
    *  **参数解释**： 保留时间。  **取值范围**： 1~7天。
    *
    * @return int|null
    */
    public function getSaveTime()
    {
        return $this->container['saveTime'];
    }

    /**
    * Sets saveTime
    *
    * @param int|null $saveTime **参数解释**： 保留时间。  **取值范围**： 1~7天。
    *
    * @return $this
    */
    public function setSaveTime($saveTime)
    {
        $this->container['saveTime'] = $saveTime;
        return $this;
    }

    /**
    * Gets autoDeleteTime
    *  **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAutoDeleteTime()
    {
        return $this->container['autoDeleteTime'];
    }

    /**
    * Sets autoDeleteTime
    *
    * @param int|null $autoDeleteTime **参数解释**： 自动删除时间。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAutoDeleteTime($autoDeleteTime)
    {
        $this->container['autoDeleteTime'] = $autoDeleteTime;
        return $this;
    }

    /**
    * Gets costPerHour
    *  **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    *
    * @return double|null
    */
    public function getCostPerHour()
    {
        return $this->container['costPerHour'];
    }

    /**
    * Sets costPerHour
    *
    * @param double|null $costPerHour **参数解释**： 每小时的费用。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCostPerHour($costPerHour)
    {
        $this->container['costPerHour'] = $costPerHour;
        return $this;
    }

    /**
    * Gets errorMessage
    *  **参数解释**： 错误信息。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage **参数解释**： 错误信息。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释**： 产品ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
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

