<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreCheckItemStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreCheckItemStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  检查项名称
    * kind  检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    * group  检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    * level  检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * message  提示信息
    * riskSource  riskSource
    * errorCodes  错误码集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'kind' => 'string',
            'group' => 'string',
            'level' => 'string',
            'phase' => 'string',
            'message' => 'string',
            'riskSource' => '\HuaweiCloud\SDK\Cce\V3\Model\RiskSource',
            'errorCodes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  检查项名称
    * kind  检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    * group  检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    * level  检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * message  提示信息
    * riskSource  riskSource
    * errorCodes  错误码集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'kind' => null,
        'group' => null,
        'level' => null,
        'phase' => null,
        'message' => null,
        'riskSource' => null,
        'errorCodes' => null
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
    * name  检查项名称
    * kind  检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    * group  检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    * level  检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * message  提示信息
    * riskSource  riskSource
    * errorCodes  错误码集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'kind' => 'kind',
            'group' => 'group',
            'level' => 'level',
            'phase' => 'phase',
            'message' => 'message',
            'riskSource' => 'riskSource',
            'errorCodes' => 'errorCodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  检查项名称
    * kind  检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    * group  检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    * level  检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * message  提示信息
    * riskSource  riskSource
    * errorCodes  错误码集合
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'kind' => 'setKind',
            'group' => 'setGroup',
            'level' => 'setLevel',
            'phase' => 'setPhase',
            'message' => 'setMessage',
            'riskSource' => 'setRiskSource',
            'errorCodes' => 'setErrorCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  检查项名称
    * kind  检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    * group  检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    * level  检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * message  提示信息
    * riskSource  riskSource
    * errorCodes  错误码集合
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'kind' => 'getKind',
            'group' => 'getGroup',
            'level' => 'getLevel',
            'phase' => 'getPhase',
            'message' => 'getMessage',
            'riskSource' => 'getRiskSource',
            'errorCodes' => 'getErrorCodes'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['riskSource'] = isset($data['riskSource']) ? $data['riskSource'] : null;
        $this->container['errorCodes'] = isset($data['errorCodes']) ? $data['errorCodes'] : null;
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
    *  检查项名称
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
    * @param string|null $name 检查项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets kind
    *  检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind 检查项类型，取值如下 - Exception: 异常类，需要用户解决 - Risk：风险类，用户确认后可选择跳过
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets group
    *  检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 检查项分组，取值如下 - LimitCheck: 集群限制检查 - MasterCheck：控制节点检查 - NodeCheck：用户节点检查 - AddonCheck：插件检查 - ExecuteException：检查流程错误
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets level
    *  检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 检查项风险级别，取值如下 - Info: 提示级别 - Warning：风险级别 - Fatal：严重级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets phase
    *  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets message
    *  提示信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 提示信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets riskSource
    *  riskSource
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\RiskSource|null
    */
    public function getRiskSource()
    {
        return $this->container['riskSource'];
    }

    /**
    * Sets riskSource
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\RiskSource|null $riskSource riskSource
    *
    * @return $this
    */
    public function setRiskSource($riskSource)
    {
        $this->container['riskSource'] = $riskSource;
        return $this;
    }

    /**
    * Gets errorCodes
    *  错误码集合
    *
    * @return string[]|null
    */
    public function getErrorCodes()
    {
        return $this->container['errorCodes'];
    }

    /**
    * Sets errorCodes
    *
    * @param string[]|null $errorCodes 错误码集合
    *
    * @return $this
    */
    public function setErrorCodes($errorCodes)
    {
        $this->container['errorCodes'] = $errorCodes;
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

