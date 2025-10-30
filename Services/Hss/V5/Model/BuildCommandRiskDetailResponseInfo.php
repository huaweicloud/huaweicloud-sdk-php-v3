<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildCommandRiskDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildCommandRiskDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remediation  **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    * buildInstruction  **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remediation' => 'string',
            'buildInstruction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remediation  **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    * buildInstruction  **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remediation' => null,
        'buildInstruction' => null
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
    * remediation  **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    * buildInstruction  **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remediation' => 'remediation',
            'buildInstruction' => 'build_instruction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remediation  **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    * buildInstruction  **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'remediation' => 'setRemediation',
            'buildInstruction' => 'setBuildInstruction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remediation  **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    * buildInstruction  **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'remediation' => 'getRemediation',
            'buildInstruction' => 'getBuildInstruction'
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
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['buildInstruction'] = isset($data['buildInstruction']) ? $data['buildInstruction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) > 65534)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) < 0)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['buildInstruction']) && (mb_strlen($this->container['buildInstruction']) > 256)) {
                $invalidProperties[] = "invalid value for 'buildInstruction', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['buildInstruction']) && (mb_strlen($this->container['buildInstruction']) < 0)) {
                $invalidProperties[] = "invalid value for 'buildInstruction', the character length must be bigger than or equal to 0.";
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
    * Gets remediation
    *  **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    *
    * @return string|null
    */
    public function getRemediation()
    {
        return $this->container['remediation'];
    }

    /**
    * Sets remediation
    *
    * @param string|null $remediation **参数解释** 风险的处置建议 **取值范围** 字符长度0-65534位
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets buildInstruction
    *  **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getBuildInstruction()
    {
        return $this->container['buildInstruction'];
    }

    /**
    * Sets buildInstruction
    *
    * @param string|null $buildInstruction **参数解释** 存在风险的构建指令 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setBuildInstruction($buildInstruction)
    {
        $this->container['buildInstruction'] = $buildInstruction;
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

