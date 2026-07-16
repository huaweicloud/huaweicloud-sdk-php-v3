<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AffinityRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AffinityRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    * operator  **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    * values  参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    * weight  设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'operator' => 'string',
            'values' => 'string[]',
            'weight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    * operator  **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    * values  参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    * weight  设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'operator' => null,
        'values' => null,
        'weight' => 'int32'
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
    * key  **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    * operator  **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    * values  参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    * weight  设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'operator' => 'operator',
            'values' => 'values',
            'weight' => 'weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    * operator  **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    * values  参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    * weight  设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'operator' => 'setOperator',
            'values' => 'setValues',
            'weight' => 'setWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    * operator  **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    * values  参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    * weight  设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'operator' => 'getOperator',
            'values' => 'getValues',
            'weight' => 'getWeight'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 253)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 253.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 100)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
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
    * Gets key
    *  **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释**：亲和度描述具体信息。 该标签可以使用系统默认的标签，也可以使用自定义标签。系统默认的节点标签详情请参见[[管理节点标签](https://support.huaweicloud.com/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hc)[[管理节点标签](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0004.html#cce_10_0004__section74111324152813)](tag:hk)。 **约束限制**：标签是键值对。有效的标签键有两个段：可选的前缀和名称，用斜杠（/）分隔。 **取值范围**：名称段是必需的，必须小于等于 63 个字符，以字母数字字符（[a-z0-9A-Z]）开头和结尾， 带有破折号（-），下划线（_），点（ .）和之间的字母数字;前缀是可选的。如果指定，前缀必须是 DNS 子域：由点（.）分隔的一系列 DNS 标签，总共不超过 253 个字符， 后跟斜杠（/）.请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/) **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator **参数解释**：操作符 **约束限制**：不涉及 **取值范围**：可以设置六种匹配关系（In、NotIn、Exists、DoesNotExist、Gt、Lt）。  In：亲和/反亲和对象的标签在标签值列表（values字段）中。 NotIn：亲和/反亲和对象的标签不在标签值列表（values字段）中。 Exists：亲和/反亲和对象存在指定标签名。 DoesNotExist：亲和/反亲和对象不存在指定标签名。 Gt：调度节点的标签值大于列表值 （字符串比较）。 Lt：调度节点的标签值小于列表值 （字符串比较）。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets values
    *  参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values 参数解释：设置节点亲和性时，填写节点标签对应的标签值 约束限制：必须为 63 个字符或更少（可以为空），除非标签值为空，必须以字母数字字符（[a-z0-9A-Z]）开头和结尾，包含破折号（-）、下划线（_）、点（.）和字母或数字 请参见[标签和选择算符](https://kubernetes.io/zh-cn/docs/concepts/overview/working-with-objects/labels/)
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets weight
    *  设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 设置弱亲和节点的权重值，该值的取值应为0-100之间，强亲和该值为NULL，弱亲和该值可选
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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

