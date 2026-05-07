<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DaemonsetYamlResponseInfoResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DaemonsetYamlResponseInfo_resource_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    * cpuLimit  **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    * memLimit  **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'cpuLimit' => 'string',
            'memLimit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    * cpuLimit  **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    * memLimit  **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'cpuLimit' => null,
        'memLimit' => null
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
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    * cpuLimit  **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    * memLimit  **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'cpuLimit' => 'cpu_limit',
            'memLimit' => 'mem_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    * cpuLimit  **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    * memLimit  **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'cpuLimit' => 'setCpuLimit',
            'memLimit' => 'setMemLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    * cpuLimit  **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    * memLimit  **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'cpuLimit' => 'getCpuLimit',
            'memLimit' => 'getMemLimit'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memLimit'] = isset($data['memLimit']) ? $data['memLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 32)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mode']) && !preg_match("/^(default|customized|adaptive)$/", $this->container['mode'])) {
                $invalidProperties[] = "invalid value for 'mode', must be conform to the pattern /^(default|customized|adaptive)$/.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) > 32)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memLimit']) && (mb_strlen($this->container['memLimit']) > 32)) {
                $invalidProperties[] = "invalid value for 'memLimit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['memLimit']) && (mb_strlen($this->container['memLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'memLimit', the character length must be bigger than or equal to 0.";
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
    * Gets mode
    *  **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**： 资源限制类型：默认规则or自定义or自适应 **取值范围**： - default：默认类型。 - customized：用户自定义类型。 - adaptive：自适应类型。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param string|null $cpuLimit **参数解释**: cpu最大值 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memLimit
    *  **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getMemLimit()
    {
        return $this->container['memLimit'];
    }

    /**
    * Sets memLimit
    *
    * @param string|null $memLimit **参数解释**: 内存最大值 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setMemLimit($memLimit)
    {
        $this->container['memLimit'] = $memLimit;
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

