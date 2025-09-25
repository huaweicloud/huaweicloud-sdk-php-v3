<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityRiskResponseImageRiskRiskList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityRiskResponse_image_risk_risk_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * imageNum  **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'imageNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * imageNum  **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'imageNum' => 'int32'
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
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * imageNum  **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'imageNum' => 'image_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * imageNum  **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'imageNum' => 'setImageNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    * imageNum  **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'imageNum' => 'getImageNum'
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be bigger than or equal to 0.";
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
    * Gets severity
    *  **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets imageNum
    *  **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum **参数解释**： 镜像数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
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

