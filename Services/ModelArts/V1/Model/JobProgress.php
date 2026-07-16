<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobProgress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
    * step  **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    * description  **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'step' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
    * step  **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    * description  **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'step' => 'int32',
        'description' => null
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
    * status  **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
    * step  **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    * description  **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'step' => 'step',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
    * step  **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    * description  **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'step' => 'setStep',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
    * step  **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    * description  **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'step' => 'getStep',
            'description' => 'getDescription'
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
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_WAITING = 'WAITING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_PROCESSING,
            self::STATUS_WAITING,
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
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets status
    *  **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
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
    * @param string|null $status **参数解释**：任务某个步骤的状态。 **取值范围**：枚举类型，取值如下： - WAITING：等待中 - PROCESSING：处理中 - FAILED：任务失败 - COMPLETED：任务完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets step
    *  **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step **参数解释**：任务的步骤。 **取值范围**：枚举类型，取值如下： - 1：准备存储 - 2：准备计算资源 - 3：配置网络 - 4：初始化实例
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：任务某个步骤的描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

