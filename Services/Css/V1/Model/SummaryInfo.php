<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SummaryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SummaryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * highRisk  **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    * mediumRisk  **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    * normal  **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    * suggestion  **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'highRisk' => 'int',
            'mediumRisk' => 'int',
            'normal' => 'int',
            'suggestion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * highRisk  **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    * mediumRisk  **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    * normal  **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    * suggestion  **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'highRisk' => null,
        'mediumRisk' => null,
        'normal' => null,
        'suggestion' => 'int32'
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
    * highRisk  **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    * mediumRisk  **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    * normal  **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    * suggestion  **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'highRisk' => 'highRisk',
            'mediumRisk' => 'mediumRisk',
            'normal' => 'normal',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * highRisk  **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    * mediumRisk  **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    * normal  **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    * suggestion  **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $setters = [
            'highRisk' => 'setHighRisk',
            'mediumRisk' => 'setMediumRisk',
            'normal' => 'setNormal',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * highRisk  **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    * mediumRisk  **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    * normal  **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    * suggestion  **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $getters = [
            'highRisk' => 'getHighRisk',
            'mediumRisk' => 'getMediumRisk',
            'normal' => 'getNormal',
            'suggestion' => 'getSuggestion'
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
        $this->container['highRisk'] = isset($data['highRisk']) ? $data['highRisk'] : null;
        $this->container['mediumRisk'] = isset($data['mediumRisk']) ? $data['mediumRisk'] : null;
        $this->container['normal'] = isset($data['normal']) ? $data['normal'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
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
    * Gets highRisk
    *  **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getHighRisk()
    {
        return $this->container['highRisk'];
    }

    /**
    * Sets highRisk
    *
    * @param int|null $highRisk **参数解释**： 集群风险概要。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHighRisk($highRisk)
    {
        $this->container['highRisk'] = $highRisk;
        return $this;
    }

    /**
    * Gets mediumRisk
    *  **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    *
    * @return int|null
    */
    public function getMediumRisk()
    {
        return $this->container['mediumRisk'];
    }

    /**
    * Sets mediumRisk
    *
    * @param int|null $mediumRisk **参数解释**： 集群风险检测项判定为中风险的数量。 **取值范围**： 0-100
    *
    * @return $this
    */
    public function setMediumRisk($mediumRisk)
    {
        $this->container['mediumRisk'] = $mediumRisk;
        return $this;
    }

    /**
    * Gets normal
    *  **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    *
    * @return int|null
    */
    public function getNormal()
    {
        return $this->container['normal'];
    }

    /**
    * Sets normal
    *
    * @param int|null $normal **参数解释： 集群风险检测项判定为正常项的数量。 **取值范围**： 0-100
    *
    * @return $this
    */
    public function setNormal($normal)
    {
        $this->container['normal'] = $normal;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @return int|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param int|null $suggestion **参数解释**： 集群风险检测项判定为提示项的数量。 **取值范围**： 0-100
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

