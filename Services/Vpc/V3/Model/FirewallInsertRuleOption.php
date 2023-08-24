<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FirewallInsertRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FirewallInsertRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ingressRules  功能说明：ACL添加入方向规则列表
    * egressRules  功能说明：ACL添加出方向规则列表
    * insertAfterRule  功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ingressRules' => '\HuaweiCloud\SDK\Vpc\V3\Model\FirewallInsertRuleItemOption[]',
            'egressRules' => '\HuaweiCloud\SDK\Vpc\V3\Model\FirewallInsertRuleItemOption[]',
            'insertAfterRule' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ingressRules  功能说明：ACL添加入方向规则列表
    * egressRules  功能说明：ACL添加出方向规则列表
    * insertAfterRule  功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ingressRules' => null,
        'egressRules' => null,
        'insertAfterRule' => null
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
    * ingressRules  功能说明：ACL添加入方向规则列表
    * egressRules  功能说明：ACL添加出方向规则列表
    * insertAfterRule  功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ingressRules' => 'ingress_rules',
            'egressRules' => 'egress_rules',
            'insertAfterRule' => 'insert_after_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ingressRules  功能说明：ACL添加入方向规则列表
    * egressRules  功能说明：ACL添加出方向规则列表
    * insertAfterRule  功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @var string[]
    */
    protected static $setters = [
            'ingressRules' => 'setIngressRules',
            'egressRules' => 'setEgressRules',
            'insertAfterRule' => 'setInsertAfterRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ingressRules  功能说明：ACL添加入方向规则列表
    * egressRules  功能说明：ACL添加出方向规则列表
    * insertAfterRule  功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @var string[]
    */
    protected static $getters = [
            'ingressRules' => 'getIngressRules',
            'egressRules' => 'getEgressRules',
            'insertAfterRule' => 'getInsertAfterRule'
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
        $this->container['ingressRules'] = isset($data['ingressRules']) ? $data['ingressRules'] : null;
        $this->container['egressRules'] = isset($data['egressRules']) ? $data['egressRules'] : null;
        $this->container['insertAfterRule'] = isset($data['insertAfterRule']) ? $data['insertAfterRule'] : null;
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
    * Gets ingressRules
    *  功能说明：ACL添加入方向规则列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\FirewallInsertRuleItemOption[]|null
    */
    public function getIngressRules()
    {
        return $this->container['ingressRules'];
    }

    /**
    * Sets ingressRules
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\FirewallInsertRuleItemOption[]|null $ingressRules 功能说明：ACL添加入方向规则列表
    *
    * @return $this
    */
    public function setIngressRules($ingressRules)
    {
        $this->container['ingressRules'] = $ingressRules;
        return $this;
    }

    /**
    * Gets egressRules
    *  功能说明：ACL添加出方向规则列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\FirewallInsertRuleItemOption[]|null
    */
    public function getEgressRules()
    {
        return $this->container['egressRules'];
    }

    /**
    * Sets egressRules
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\FirewallInsertRuleItemOption[]|null $egressRules 功能说明：ACL添加出方向规则列表
    *
    * @return $this
    */
    public function setEgressRules($egressRules)
    {
        $this->container['egressRules'] = $egressRules;
        return $this;
    }

    /**
    * Gets insertAfterRule
    *  功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @return string|null
    */
    public function getInsertAfterRule()
    {
        return $this->container['insertAfterRule'];
    }

    /**
    * Sets insertAfterRule
    *
    * @param string|null $insertAfterRule 功能说明：插入ACL的规则在入方向或者出方向某条规则位置后，不指定则在入方向或者出方向规则列表最前面插入规则 约束：指定了insert_after_rule，ingress_rules和egress_rules只能同时设置一个，且该规则在入方向或者出方向规则中存在
    *
    * @return $this
    */
    public function setInsertAfterRule($insertAfterRule)
    {
        $this->container['insertAfterRule'] = $insertAfterRule;
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

