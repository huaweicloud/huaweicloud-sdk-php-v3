<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddPolicyGroupRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddPolicyGroupRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    * name  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    * groupId  **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'name' => 'string',
            'groupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    * name  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    * groupId  **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'name' => null,
        'groupId' => null
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
    * description  **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    * name  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    * groupId  **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'name' => 'name',
            'groupId' => 'group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    * name  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    * groupId  **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'name' => 'setName',
            'groupId' => 'setGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    * name  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    * groupId  **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'name' => 'getName',
            'groupId' => 'getGroupId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9,. _-]{0,64}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9,. _-]{0,64}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9,. _-]{0,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9,. _-]{0,64}$/.";
            }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
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
    * Gets description
    *  **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**: 策略组的描述信息 **约束限制**: 不涉及 **取值范围**: 字符长度1-64，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-32，只能由中文字符、英文字母、数字、逗号、句号、空格及\"_\"、\"-\"组成，且不能以default_policy_group开头 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释**: 需要被复制的策略组ID，仅旗舰版和容器版策略组支持复制 **约束限制**: 需要使用 ListPolicyGroup 接口查询旗舰版和容器版策略组，在 ListPolicyGroup 接口的响应体中，support_version 等于 hss.version.container.enterprise 或 hss.version.premium 的 group_id 是可以被复制的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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

