<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolStatusScope implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolStatus_scope';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scopeType  **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    * state  **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scopeType' => 'string',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scopeType  **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    * state  **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scopeType' => null,
        'state' => null
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
    * scopeType  **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    * state  **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scopeType' => 'scopeType',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scopeType  **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    * state  **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'scopeType' => 'setScopeType',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scopeType  **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    * state  **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'scopeType' => 'getScopeType',
            'state' => 'getState'
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
        $this->container['scopeType'] = isset($data['scopeType']) ? $data['scopeType'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scopeType'] === null) {
            $invalidProperties[] = "'scopeType' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
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
    * Gets scopeType
    *  **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    *
    * @return string
    */
    public function getScopeType()
    {
        return $this->container['scopeType'];
    }

    /**
    * Sets scopeType
    *
    * @param string $scopeType **参数解释**：资源池的业务类型。 **取值范围**：可选值如下： - Train：训练任务。 - Infer：推理任务。 - Notebook：Notebook作业。
    *
    * @return $this
    */
    public function setScopeType($scopeType)
    {
        $this->container['scopeType'] = $scopeType;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state **参数解释**：资源池业务类型状态。 **取值范围**：可选值如下： - Enabling：启动中。 - Enabled：已启动。 - Disabling：关闭中。 - Disabled：已关闭。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

