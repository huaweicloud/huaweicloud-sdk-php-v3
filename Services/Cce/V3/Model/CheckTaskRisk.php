<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckTaskRisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckTaskRisk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskName  **参数解释：** 风险项名称 **取值范围：** 不涉及
    * level  **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    * status  **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
    * message  **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskName' => 'string',
            'level' => 'string',
            'status' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskName  **参数解释：** 风险项名称 **取值范围：** 不涉及
    * level  **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    * status  **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
    * message  **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskName' => null,
        'level' => null,
        'status' => null,
        'message' => null
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
    * riskName  **参数解释：** 风险项名称 **取值范围：** 不涉及
    * level  **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    * status  **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
    * message  **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskName' => 'riskName',
            'level' => 'level',
            'status' => 'status',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskName  **参数解释：** 风险项名称 **取值范围：** 不涉及
    * level  **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    * status  **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
    * message  **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'riskName' => 'setRiskName',
            'level' => 'setLevel',
            'status' => 'setStatus',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskName  **参数解释：** 风险项名称 **取值范围：** 不涉及
    * level  **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    * status  **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
    * message  **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'riskName' => 'getRiskName',
            'level' => 'getLevel',
            'status' => 'getStatus',
            'message' => 'getMessage'
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
    const LEVEL_WARNING = 'Warning';
    const LEVEL_FATAL = 'Fatal';
    const STATUS_INIT = 'Init';
    const STATUS_RUNNING = 'Running';
    const STATUS_FAILED = 'Failed';
    const STATUS_SUCCESS = 'Success';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_WARNING,
            self::LEVEL_FATAL,
        ];
    }

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
        $this->container['riskName'] = isset($data['riskName']) ? $data['riskName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['riskName'] === null) {
            $invalidProperties[] = "'riskName' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets riskName
    *  **参数解释：** 风险项名称 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getRiskName()
    {
        return $this->container['riskName'];
    }

    /**
    * Sets riskName
    *
    * @param string $riskName **参数解释：** 风险项名称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setRiskName($riskName)
    {
        $this->container['riskName'] = $riskName;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level **参数解释：** 风险等级 **取值范围：** - Warning: 中危，允许跳过 - Fatal: 高危，不允许跳过
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
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
    * @param string $status **参数解释：** 风险项检查状态 **取值范围：** - Init: 风险项检查状态，初始化 - Running: 风险项检查状态，检查中 - Failed: 风险项检查状态，检查完成有风险 - Success: 风险项检查状态，检查完成无风险
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
    *  **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** 风险检查结果说明 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

