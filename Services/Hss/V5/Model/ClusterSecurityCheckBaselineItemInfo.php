<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckBaselineItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckBaselineItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
    * checkItem  **参数解释**： 检查项 **取值范围**： 不涉及
    * checkDescription  **参数解释**： 检查描述 **取值范围**： 不涉及
    * checkRemediation  **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkItem' => 'string',
            'checkDescription' => 'string',
            'checkRemediation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
    * checkItem  **参数解释**： 检查项 **取值范围**： 不涉及
    * checkDescription  **参数解释**： 检查描述 **取值范围**： 不涉及
    * checkRemediation  **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkItem' => null,
        'checkDescription' => null,
        'checkRemediation' => null
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
    * severity  **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
    * checkItem  **参数解释**： 检查项 **取值范围**： 不涉及
    * checkDescription  **参数解释**： 检查描述 **取值范围**： 不涉及
    * checkRemediation  **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkItem' => 'check_item',
            'checkDescription' => 'check_description',
            'checkRemediation' => 'check_remediation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
    * checkItem  **参数解释**： 检查项 **取值范围**： 不涉及
    * checkDescription  **参数解释**： 检查描述 **取值范围**： 不涉及
    * checkRemediation  **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkItem' => 'setCheckItem',
            'checkDescription' => 'setCheckDescription',
            'checkRemediation' => 'setCheckRemediation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
    * checkItem  **参数解释**： 检查项 **取值范围**： 不涉及
    * checkDescription  **参数解释**： 检查描述 **取值范围**： 不涉及
    * checkRemediation  **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkItem' => 'getCheckItem',
            'checkDescription' => 'getCheckDescription',
            'checkRemediation' => 'getCheckRemediation'
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
    const SEVERITY_HIGH = 'High';
    const SEVERITY_MEDIUM = 'Medium';
    const SEVERITY_LOW = 'Low';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_HIGH,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_LOW,
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['checkItem'] = isset($data['checkItem']) ? $data['checkItem'] : null;
        $this->container['checkDescription'] = isset($data['checkDescription']) ? $data['checkDescription'] : null;
        $this->container['checkRemediation'] = isset($data['checkRemediation']) ? $data['checkRemediation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 64)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
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
    * @param string|null $severity **参数解释**： 检查项风险等级 **取值范围**： - High：高危 - Medium：中危 - Low：低危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets checkItem
    *  **参数解释**： 检查项 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckItem()
    {
        return $this->container['checkItem'];
    }

    /**
    * Sets checkItem
    *
    * @param string|null $checkItem **参数解释**： 检查项 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckItem($checkItem)
    {
        $this->container['checkItem'] = $checkItem;
        return $this;
    }

    /**
    * Gets checkDescription
    *  **参数解释**： 检查描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckDescription()
    {
        return $this->container['checkDescription'];
    }

    /**
    * Sets checkDescription
    *
    * @param string|null $checkDescription **参数解释**： 检查描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckDescription($checkDescription)
    {
        $this->container['checkDescription'] = $checkDescription;
        return $this;
    }

    /**
    * Gets checkRemediation
    *  **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckRemediation()
    {
        return $this->container['checkRemediation'];
    }

    /**
    * Sets checkRemediation
    *
    * @param string|null $checkRemediation **参数解释**： 修复建议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckRemediation($checkRemediation)
    {
        $this->container['checkRemediation'] = $checkRemediation;
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

