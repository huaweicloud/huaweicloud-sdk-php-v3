<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAlertPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAlertPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isDefault  **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rules  **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'name' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'isDefault' => 'bool',
            'createTime' => 'int',
            'rules' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\AlertRuleDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isDefault  **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rules  **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'name' => null,
        'domainId' => null,
        'projectId' => null,
        'isDefault' => null,
        'createTime' => 'int64',
        'rules' => null
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
    * policyId  **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isDefault  **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rules  **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policyId',
            'name' => 'name',
            'domainId' => 'domainId',
            'projectId' => 'projectId',
            'isDefault' => 'isDefault',
            'createTime' => 'createTime',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isDefault  **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rules  **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'name' => 'setName',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'isDefault' => 'setIsDefault',
            'createTime' => 'setCreateTime',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * domainId  **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * projectId  **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isDefault  **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * rules  **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'name' => 'getName',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'isDefault' => 'getIsDefault',
            'createTime' => 'getCreateTime',
            'rules' => 'getRules'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
    * Gets policyId
    *  **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释**： 策略ID。 **约束限制**： 更新时传，新增时不传。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 策略名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**： 租户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**： 项目ID。 **约束限制**： 暂时不用。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault **参数解释**： 是否为默认策略。 **约束限制**： 不涉及。 **取值范围**： - true：是默认策略。 - false：不是默认策略。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**： 创建时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets rules
    *  **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\AlertRuleDTO[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\AlertRuleDTO[]|null $rules **参数解释**： 所有规则。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

