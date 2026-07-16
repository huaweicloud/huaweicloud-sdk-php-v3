<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowStepExecutionPolicyResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowStepExecutionPolicyResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionPolicy  **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    * useCache  **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionPolicy' => 'string',
            'useCache' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionPolicy  **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    * useCache  **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionPolicy' => null,
        'useCache' => null
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
    * executionPolicy  **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    * useCache  **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionPolicy' => 'execution_policy',
            'useCache' => 'use_cache'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionPolicy  **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    * useCache  **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @var string[]
    */
    protected static $setters = [
            'executionPolicy' => 'setExecutionPolicy',
            'useCache' => 'setUseCache'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionPolicy  **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    * useCache  **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @var string[]
    */
    protected static $getters = [
            'executionPolicy' => 'getExecutionPolicy',
            'useCache' => 'getUseCache'
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
        $this->container['executionPolicy'] = isset($data['executionPolicy']) ? $data['executionPolicy'] : null;
        $this->container['useCache'] = isset($data['useCache']) ? $data['useCache'] : null;
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
    * Gets executionPolicy
    *  **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    *
    * @return string|null
    */
    public function getExecutionPolicy()
    {
        return $this->container['executionPolicy'];
    }

    /**
    * Sets executionPolicy
    *
    * @param string|null $executionPolicy **参数解释**：执行策略， **取值范围**：可选值如下： - retry：重试 - stop：停止 - continue：继续运行
    *
    * @return $this
    */
    public function setExecutionPolicy($executionPolicy)
    {
        $this->container['executionPolicy'] = $executionPolicy;
        return $this;
    }

    /**
    * Gets useCache
    *  **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @return bool|null
    */
    public function getUseCache()
    {
        return $this->container['useCache'];
    }

    /**
    * Sets useCache
    *
    * @param bool|null $useCache **参数解释**：是否使用的是缓存。 **取值范围**： - true：是缓存 - false：不是缓存
    *
    * @return $this
    */
    public function setUseCache($useCache)
    {
        $this->container['useCache'] = $useCache;
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

