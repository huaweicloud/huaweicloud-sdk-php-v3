<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkItemRule  **参数解释**： 检查项规则 **取值范围**： 不涉及
    * scanResult  **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkName' => 'string',
            'checkItemRule' => 'string',
            'scanResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkItemRule  **参数解释**： 检查项规则 **取值范围**： 不涉及
    * scanResult  **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkName' => null,
        'checkItemRule' => null,
        'scanResult' => null
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
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkItemRule  **参数解释**： 检查项规则 **取值范围**： 不涉及
    * scanResult  **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkName' => 'check_name',
            'checkItemRule' => 'check_item_rule',
            'scanResult' => 'scan_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkItemRule  **参数解释**： 检查项规则 **取值范围**： 不涉及
    * scanResult  **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @var string[]
    */
    protected static $setters = [
            'checkName' => 'setCheckName',
            'checkItemRule' => 'setCheckItemRule',
            'scanResult' => 'setScanResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkName  **参数解释**： 基线名称 **取值范围**： 不涉及
    * checkItemRule  **参数解释**： 检查项规则 **取值范围**： 不涉及
    * scanResult  **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @var string[]
    */
    protected static $getters = [
            'checkName' => 'getCheckName',
            'checkItemRule' => 'getCheckItemRule',
            'scanResult' => 'getScanResult'
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
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkItemRule'] = isset($data['checkItemRule']) ? $data['checkItemRule'] : null;
        $this->container['scanResult'] = isset($data['scanResult']) ? $data['scanResult'] : null;
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
    * Gets checkName
    *  **参数解释**： 基线名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string|null $checkName **参数解释**： 基线名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets checkItemRule
    *  **参数解释**： 检查项规则 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCheckItemRule()
    {
        return $this->container['checkItemRule'];
    }

    /**
    * Sets checkItemRule
    *
    * @param string|null $checkItemRule **参数解释**： 检查项规则 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCheckItemRule($checkItemRule)
    {
        $this->container['checkItemRule'] = $checkItemRule;
        return $this;
    }

    /**
    * Gets scanResult
    *  **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @return string|null
    */
    public function getScanResult()
    {
        return $this->container['scanResult'];
    }

    /**
    * Sets scanResult
    *
    * @param string|null $scanResult **参数解释**： 检测结果 **取值范围**： - pass：通过 - failed：未通过
    *
    * @return $this
    */
    public function setScanResult($scanResult)
    {
        $this->container['scanResult'] = $scanResult;
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

