<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpReputationRulesListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpReputationRulesListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * policyid  **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tags  **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * action  action
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'policyid' => 'string',
            'type' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'status' => 'int',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\IpReputationRulesListInfoAction'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * policyid  **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tags  **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * action  action
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'policyid' => null,
        'type' => null,
        'description' => null,
        'tags' => null,
        'status' => null,
        'action' => null
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
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * policyid  **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tags  **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * action  action
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'policyid' => 'policyid',
            'type' => 'type',
            'description' => 'description',
            'tags' => 'tags',
            'status' => 'status',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * policyid  **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tags  **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * action  action
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'policyid' => 'setPolicyid',
            'type' => 'setType',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * policyid  **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tags  **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * action  action
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'policyid' => 'getPolicyid',
            'type' => 'getType',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'action' => 'getAction'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
    * Gets name
    *  **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $name **参数解释：** 规则名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** Rule ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyid
    *  **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid **参数解释：** Policy ID. **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 信誉类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags **参数解释：** 信誉类型的IDC数据中心 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 规则状态，0：关闭，1：开启 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IpReputationRulesListInfoAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IpReputationRulesListInfoAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

