<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    * operatorId  **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlId  **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * applyTime  **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    * accountId  **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  resources
    * configs  configs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'operatorId' => 'string',
            'tmlName' => 'string',
            'remark' => 'string',
            'tmlId' => 'string',
            'applyTime' => 'int',
            'type' => 'int',
            'accountId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Cdn\V2\Model\Resource[]',
            'configs' => '\HuaweiCloud\SDK\Cdn\V2\Model\TemplateConfigs'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    * operatorId  **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlId  **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * applyTime  **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    * accountId  **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  resources
    * configs  configs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'operatorId' => null,
        'tmlName' => null,
        'remark' => null,
        'tmlId' => null,
        'applyTime' => 'int64',
        'type' => null,
        'accountId' => null,
        'resources' => null,
        'configs' => null
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
    * status  **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    * operatorId  **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlId  **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * applyTime  **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    * accountId  **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  resources
    * configs  configs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'operatorId' => 'operator_id',
            'tmlName' => 'tml_name',
            'remark' => 'remark',
            'tmlId' => 'tml_id',
            'applyTime' => 'apply_time',
            'type' => 'type',
            'accountId' => 'account_id',
            'resources' => 'resources',
            'configs' => 'configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    * operatorId  **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlId  **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * applyTime  **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    * accountId  **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  resources
    * configs  configs
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'operatorId' => 'setOperatorId',
            'tmlName' => 'setTmlName',
            'remark' => 'setRemark',
            'tmlId' => 'setTmlId',
            'applyTime' => 'setApplyTime',
            'type' => 'setType',
            'accountId' => 'setAccountId',
            'resources' => 'setResources',
            'configs' => 'setConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    * operatorId  **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tmlId  **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * applyTime  **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    * accountId  **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  resources
    * configs  configs
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'operatorId' => 'getOperatorId',
            'tmlName' => 'getTmlName',
            'remark' => 'getRemark',
            'tmlId' => 'getTmlId',
            'applyTime' => 'getApplyTime',
            'type' => 'getType',
            'accountId' => 'getAccountId',
            'resources' => 'getResources',
            'configs' => 'getConfigs'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['operatorId'] = isset($data['operatorId']) ? $data['operatorId'] : null;
        $this->container['tmlName'] = isset($data['tmlName']) ? $data['tmlName'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['tmlId'] = isset($data['tmlId']) ? $data['tmlId'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
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
    * Gets status
    *  **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 应用模板结果 **约束限制：** 不涉及 **取值范围：** - success: 应用模板成功 - fail: 应用模板失败 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets operatorId
    *  **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
    * Sets operatorId
    *
    * @param string|null $operatorId **参数解释：** 操作ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;
        return $this;
    }

    /**
    * Gets tmlName
    *  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTmlName()
    {
        return $this->container['tmlName'];
    }

    /**
    * Sets tmlName
    *
    * @param string|null $tmlName **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTmlName($tmlName)
    {
        $this->container['tmlName'] = $tmlName;
        return $this;
    }

    /**
    * Gets remark
    *  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets tmlId
    *  **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTmlId()
    {
        return $this->container['tmlId'];
    }

    /**
    * Sets tmlId
    *
    * @param string|null $tmlId **参数解释：** 域名模板ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTmlId($tmlId)
    {
        $this->container['tmlId'] = $tmlId;
        return $this;
    }

    /**
    * Gets applyTime
    *  **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param int|null $applyTime **参数解释：** 域名模板应用时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释：** 域名模板类型 **约束限制：** 不涉及 **取值范围：** - 1: 系统预置模板 - 2: 租户自定义模板 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets accountId
    *  **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId **参数解释：** 账户ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Resource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Resource[]|null $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets configs
    *  configs
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\TemplateConfigs|null
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\TemplateConfigs|null $configs configs
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
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

