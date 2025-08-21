<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryInheritSettingUpdateBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryInheritSettingUpdateBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    * inheritMod  **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'inheritMod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    * inheritMod  **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'inheritMod' => null
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
    * name  **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    * inheritMod  **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'inheritMod' => 'inherit_mod'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    * inheritMod  **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'inheritMod' => 'setInheritMod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    * inheritMod  **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'inheritMod' => 'getInheritMod'
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
    const NAME_PROTECTED_BRANCHES = 'protected_branches';
    const NAME_PROTECTED_TAGS = 'protected_tags';
    const NAME_REPOSITORY_SETTINGS = 'repository_settings';
    const NAME_PUSH_RULES = 'push_rules';
    const NAME_MERGE_REQUESTS = 'merge_requests';
    const NAME_E2E_SETTINGS = 'e2e_settings';
    const NAME_WATERMARK = 'watermark';
    const INHERIT_MOD_INHERIT = 'inherit';
    const INHERIT_MOD_CUSTOM = 'custom';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_PROTECTED_BRANCHES,
            self::NAME_PROTECTED_TAGS,
            self::NAME_REPOSITORY_SETTINGS,
            self::NAME_PUSH_RULES,
            self::NAME_MERGE_REQUESTS,
            self::NAME_E2E_SETTINGS,
            self::NAME_WATERMARK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInheritModAllowableValues()
    {
        return [
            self::INHERIT_MOD_INHERIT,
            self::INHERIT_MOD_CUSTOM,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inheritMod'] = isset($data['inheritMod']) ? $data['inheritMod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInheritModAllowableValues();
                if (!is_null($this->container['inheritMod']) && !in_array($this->container['inheritMod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'inheritMod', must be one of '%s'",
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
    * Gets name
    *  **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 设置源类型。 **约束限制：** 不涉及。 **取值范围：** - protected_branches，保护分支设置。 - protected_tags，保护Tag设置。 - repository_settings，仓库设置。 - push_rules，提交规则设置。 - merge_requests，合并请求设置。 - e2e_settings，E2E设置。 - watermark，水印设置。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets inheritMod
    *  **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getInheritMod()
    {
        return $this->container['inheritMod'];
    }

    /**
    * Sets inheritMod
    *
    * @param string|null $inheritMod **参数解释：** 继承设置。 **约束限制：** 不涉及。 **取值范围：** - inherit，继承上级配置。 - custom，使用当前仓库配置。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setInheritMod($inheritMod)
    {
        $this->container['inheritMod'] = $inheritMod;
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

