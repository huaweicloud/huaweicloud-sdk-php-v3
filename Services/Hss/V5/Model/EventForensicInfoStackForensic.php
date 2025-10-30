<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoStackForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_stack_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackInputValue  **参数解释**： 攻击载荷 **取值范围**： 不涉及
    * appStack  **参数解释**： 堆栈信息 **取值范围**： 不涉及
    * chkProbe  **参数解释**： 攻击探针 **取值范围**： 不涉及
    * chkRule  **参数解释**： 特性规则 **取值范围**： 不涉及
    * pluginName  **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackInputValue' => 'string',
            'appStack' => 'string',
            'chkProbe' => 'int',
            'chkRule' => 'int',
            'pluginName' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackInputValue  **参数解释**： 攻击载荷 **取值范围**： 不涉及
    * appStack  **参数解释**： 堆栈信息 **取值范围**： 不涉及
    * chkProbe  **参数解释**： 攻击探针 **取值范围**： 不涉及
    * chkRule  **参数解释**： 特性规则 **取值范围**： 不涉及
    * pluginName  **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackInputValue' => null,
        'appStack' => null,
        'chkProbe' => null,
        'chkRule' => null,
        'pluginName' => null
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
    * attackInputValue  **参数解释**： 攻击载荷 **取值范围**： 不涉及
    * appStack  **参数解释**： 堆栈信息 **取值范围**： 不涉及
    * chkProbe  **参数解释**： 攻击探针 **取值范围**： 不涉及
    * chkRule  **参数解释**： 特性规则 **取值范围**： 不涉及
    * pluginName  **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackInputValue' => 'attack_input_value',
            'appStack' => 'app_stack',
            'chkProbe' => 'chk_probe',
            'chkRule' => 'chk_rule',
            'pluginName' => 'plugin_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackInputValue  **参数解释**： 攻击载荷 **取值范围**： 不涉及
    * appStack  **参数解释**： 堆栈信息 **取值范围**： 不涉及
    * chkProbe  **参数解释**： 攻击探针 **取值范围**： 不涉及
    * chkRule  **参数解释**： 特性规则 **取值范围**： 不涉及
    * pluginName  **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'attackInputValue' => 'setAttackInputValue',
            'appStack' => 'setAppStack',
            'chkProbe' => 'setChkProbe',
            'chkRule' => 'setChkRule',
            'pluginName' => 'setPluginName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackInputValue  **参数解释**： 攻击载荷 **取值范围**： 不涉及
    * appStack  **参数解释**： 堆栈信息 **取值范围**： 不涉及
    * chkProbe  **参数解释**： 攻击探针 **取值范围**： 不涉及
    * chkRule  **参数解释**： 特性规则 **取值范围**： 不涉及
    * pluginName  **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'attackInputValue' => 'getAttackInputValue',
            'appStack' => 'getAppStack',
            'chkProbe' => 'getChkProbe',
            'chkRule' => 'getChkRule',
            'pluginName' => 'getPluginName'
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
        $this->container['attackInputValue'] = isset($data['attackInputValue']) ? $data['attackInputValue'] : null;
        $this->container['appStack'] = isset($data['appStack']) ? $data['appStack'] : null;
        $this->container['chkProbe'] = isset($data['chkProbe']) ? $data['chkProbe'] : null;
        $this->container['chkRule'] = isset($data['chkRule']) ? $data['chkRule'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attackInputValue']) && !preg_match("/^.*$/", $this->container['attackInputValue'])) {
                $invalidProperties[] = "invalid value for 'attackInputValue', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['appStack']) && !preg_match("/^.*$/", $this->container['appStack'])) {
                $invalidProperties[] = "invalid value for 'appStack', must be conform to the pattern /^.*$/.";
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
    * Gets attackInputValue
    *  **参数解释**： 攻击载荷 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAttackInputValue()
    {
        return $this->container['attackInputValue'];
    }

    /**
    * Sets attackInputValue
    *
    * @param string|null $attackInputValue **参数解释**： 攻击载荷 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackInputValue($attackInputValue)
    {
        $this->container['attackInputValue'] = $attackInputValue;
        return $this;
    }

    /**
    * Gets appStack
    *  **参数解释**： 堆栈信息 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAppStack()
    {
        return $this->container['appStack'];
    }

    /**
    * Sets appStack
    *
    * @param string|null $appStack **参数解释**： 堆栈信息 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppStack($appStack)
    {
        $this->container['appStack'] = $appStack;
        return $this;
    }

    /**
    * Gets chkProbe
    *  **参数解释**： 攻击探针 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getChkProbe()
    {
        return $this->container['chkProbe'];
    }

    /**
    * Sets chkProbe
    *
    * @param int|null $chkProbe **参数解释**： 攻击探针 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setChkProbe($chkProbe)
    {
        $this->container['chkProbe'] = $chkProbe;
        return $this;
    }

    /**
    * Gets chkRule
    *  **参数解释**： 特性规则 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getChkRule()
    {
        return $this->container['chkRule'];
    }

    /**
    * Sets chkRule
    *
    * @param int|null $chkRule **参数解释**： 特性规则 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setChkRule($chkRule)
    {
        $this->container['chkRule'] = $chkRule;
        return $this;
    }

    /**
    * Gets pluginName
    *  **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param int|null $pluginName **参数解释**： 检测规则 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
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

