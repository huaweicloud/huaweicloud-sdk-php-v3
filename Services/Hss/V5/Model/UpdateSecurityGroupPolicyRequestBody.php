<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityGroupPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityGroupPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    * policyName  **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    * securityGroups  **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    * policyName  **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    * securityGroups  **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'securityGroups' => null
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
    * policyId  **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    * policyName  **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    * securityGroups  **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'securityGroups' => 'security_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    * policyName  **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    * securityGroups  **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'securityGroups' => 'setSecurityGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    * policyName  **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    * securityGroups  **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'securityGroups' => 'getSecurityGroups'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
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
    * Gets policyId
    *  **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId **参数解释** 安全组策略的唯一标识，用于指定待更新的目标安全组策略 **约束限制** 需确保该策略已存在于指定集群和命名空间下，否则返回策略不存在错误 **取值范围** 字符长度1-64位，支持UUID格式（32位十六进制字符，含4个短横线分隔） **默认取值** 无
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName **参数解释** 安全组策略的名称，用于标识策略用途，更新时可修改该名称 **约束限制** 名称不能包含特殊字符（如@、#、$等），且同一命名空间下策略名称建议唯一 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线（-）、下划线（_） **默认取值** 无，不修改策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets securityGroups
    *  **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\SecurityGroup[] $securityGroups **参数解释** 待关联到安全组策略的安全组集合，更新后策略将仅应用于该列表中的安全组 **约束限制** 数组不能为空（至少包含1个安全组），且安全组需已存在于当前项目/企业项目下 **取值范围** 数组长度1-20个元素，每个元素需符合SecurityGroup对象结构 **默认取值** 无
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
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

