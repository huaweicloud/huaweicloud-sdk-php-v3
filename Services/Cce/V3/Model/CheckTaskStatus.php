<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckTaskStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckTaskStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    * message  **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    * riskList  **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'message' => 'string',
            'riskList' => '\HuaweiCloud\SDK\Cce\V3\Model\CheckTaskRisk[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    * message  **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    * riskList  **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'message' => null,
        'riskList' => null
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
    * status  **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    * message  **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    * riskList  **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'message' => 'message',
            'riskList' => 'riskList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    * message  **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    * riskList  **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'message' => 'setMessage',
            'riskList' => 'setRiskList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    * message  **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    * riskList  **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'message' => 'getMessage',
            'riskList' => 'getRiskList'
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
    const STATUS_INIT = 'Init';
    const STATUS_RUNNING = 'Running';
    const STATUS_FAILED = 'Failed';
    const STATUS_SUCCESS = 'Success';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_RUNNING,
            self::STATUS_FAILED,
            self::STATUS_SUCCESS,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['riskList'] = isset($data['riskList']) ? $data['riskList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
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
    * Gets status
    *  **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释：** 插件检查状态 **取值范围：** - Init: 插件检查状态，初始化 - Running: 插件检查状态，检查中 - Failed: 插件检查状态，检查完成有风险 - Success: 插件检查状态，检查完成无风险
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message **参数解释：** 插件检查结果信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets riskList
    *  **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\CheckTaskRisk[]|null
    */
    public function getRiskList()
    {
        return $this->container['riskList'];
    }

    /**
    * Sets riskList
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\CheckTaskRisk[]|null $riskList **参数解释：** 插件检查风险项列表，不同插件对应的风险检查项不同。 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setRiskList($riskList)
    {
        $this->container['riskList'] = $riskList;
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

