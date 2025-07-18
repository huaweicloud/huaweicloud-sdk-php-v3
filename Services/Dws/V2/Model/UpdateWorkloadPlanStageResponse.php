<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWorkloadPlanStageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWorkloadPlanStageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    * workloadPlanStage  workloadPlanStage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadResCode' => 'int',
            'workloadResStr' => 'string',
            'workloadPlanStage' => '\HuaweiCloud\SDK\Dws\V2\Model\PlanStage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    * workloadPlanStage  workloadPlanStage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadResCode' => null,
        'workloadResStr' => null,
        'workloadPlanStage' => null
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
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    * workloadPlanStage  workloadPlanStage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadResCode' => 'workload_res_code',
            'workloadResStr' => 'workload_res_str',
            'workloadPlanStage' => 'workload_plan_stage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    * workloadPlanStage  workloadPlanStage
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadResCode' => 'setWorkloadResCode',
            'workloadResStr' => 'setWorkloadResStr',
            'workloadPlanStage' => 'setWorkloadPlanStage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadResCode  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    * workloadResStr  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    * workloadPlanStage  workloadPlanStage
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadResCode' => 'getWorkloadResCode',
            'workloadResStr' => 'getWorkloadResStr',
            'workloadPlanStage' => 'getWorkloadPlanStage'
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
        $this->container['workloadResCode'] = isset($data['workloadResCode']) ? $data['workloadResCode'] : null;
        $this->container['workloadResStr'] = isset($data['workloadResStr']) ? $data['workloadResStr'] : null;
        $this->container['workloadPlanStage'] = isset($data['workloadPlanStage']) ? $data['workloadPlanStage'] : null;
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
    * Gets workloadResCode
    *  **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getWorkloadResCode()
    {
        return $this->container['workloadResCode'];
    }

    /**
    * Sets workloadResCode
    *
    * @param int|null $workloadResCode **参数解释**： 结果状态码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkloadResCode($workloadResCode)
    {
        $this->container['workloadResCode'] = $workloadResCode;
        return $this;
    }

    /**
    * Gets workloadResStr
    *  **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWorkloadResStr()
    {
        return $this->container['workloadResStr'];
    }

    /**
    * Sets workloadResStr
    *
    * @param string|null $workloadResStr **参数解释**： 结果描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkloadResStr($workloadResStr)
    {
        $this->container['workloadResStr'] = $workloadResStr;
        return $this;
    }

    /**
    * Gets workloadPlanStage
    *  workloadPlanStage
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PlanStage|null
    */
    public function getWorkloadPlanStage()
    {
        return $this->container['workloadPlanStage'];
    }

    /**
    * Sets workloadPlanStage
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PlanStage|null $workloadPlanStage workloadPlanStage
    *
    * @return $this
    */
    public function setWorkloadPlanStage($workloadPlanStage)
    {
        $this->container['workloadPlanStage'] = $workloadPlanStage;
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

