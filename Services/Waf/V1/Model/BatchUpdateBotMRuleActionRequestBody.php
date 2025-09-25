<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateBotMRuleActionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateBotMRuleActionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleIds  **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleIds' => 'string[]',
            'defenseAction' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleIds  **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleIds' => null,
        'defenseAction' => 'int32'
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
    * ruleIds  **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleIds' => 'rule_ids',
            'defenseAction' => 'defense_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleIds  **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleIds' => 'setRuleIds',
            'defenseAction' => 'setDefenseAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleIds  **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleIds' => 'getRuleIds',
            'defenseAction' => 'getDefenseAction'
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
    const DEFENSE_ACTION_101 = 101;
    const DEFENSE_ACTION_102 = 102;
    const DEFENSE_ACTION_103 = 103;
    const DEFENSE_ACTION_104 = 104;
    const DEFENSE_ACTION_201 = 201;
    const DEFENSE_ACTION_202 = 202;
    const DEFENSE_ACTION_301 = 301;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefenseActionAllowableValues()
    {
        return [
            self::DEFENSE_ACTION_101,
            self::DEFENSE_ACTION_102,
            self::DEFENSE_ACTION_103,
            self::DEFENSE_ACTION_104,
            self::DEFENSE_ACTION_201,
            self::DEFENSE_ACTION_202,
            self::DEFENSE_ACTION_301,
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
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['defenseAction'] = isset($data['defenseAction']) ? $data['defenseAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDefenseActionAllowableValues();
                if (!is_null($this->container['defenseAction']) && !in_array($this->container['defenseAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defenseAction', must be one of '%s'",
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
    * Gets ruleIds
    *  **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string[]|null $ruleIds **参数解释：** 批量更新的规则ID，包含需要修改防护动作的多条BotM规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets defenseAction
    *  **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getDefenseAction()
    {
        return $this->container['defenseAction'];
    }

    /**
    * Sets defenseAction
    *
    * @param int|null $defenseAction **参数解释：** 批量更新的防护动作对应的数字，101-拦截、102-放行、103-观察、104-验证码、201-重定向、202-返回自定义页面、301-拉黑IP **约束限制：** 不涉及 **取值范围：** - 101：拦截 - 102：放行 - 103：观察 - 104：验证码 - 201：重定向 - 202：返回自定义页面 - 301：拉黑IP **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDefenseAction($defenseAction)
    {
        $this->container['defenseAction'] = $defenseAction;
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

