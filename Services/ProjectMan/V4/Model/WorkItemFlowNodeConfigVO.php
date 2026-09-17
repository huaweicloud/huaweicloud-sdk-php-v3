<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowNodeConfigVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowNodeConfigVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  节点编码
    * name  节点名称
    * description  节点描述
    * end  是否为结束节点
    * last  是否为最末节点
    * start  是否为开始节点
    * enableSuspend  是否允许挂起
    * extraConfig  节点扩展配置
    * staticRules  静态规则列表
    * staticActions  静态动作配置
    * anyStatus  是否任意状态可流转
    * submitCanOperate  提交时是否可操作
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'name' => 'string',
            'description' => 'string',
            'end' => 'bool',
            'last' => 'bool',
            'start' => 'bool',
            'enableSuspend' => 'bool',
            'extraConfig' => 'map[string,object]',
            'staticRules' => 'map[string,object][]',
            'staticActions' => 'map[string,object]',
            'anyStatus' => 'bool',
            'submitCanOperate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  节点编码
    * name  节点名称
    * description  节点描述
    * end  是否为结束节点
    * last  是否为最末节点
    * start  是否为开始节点
    * enableSuspend  是否允许挂起
    * extraConfig  节点扩展配置
    * staticRules  静态规则列表
    * staticActions  静态动作配置
    * anyStatus  是否任意状态可流转
    * submitCanOperate  提交时是否可操作
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'description' => null,
        'end' => null,
        'last' => null,
        'start' => null,
        'enableSuspend' => null,
        'extraConfig' => null,
        'staticRules' => null,
        'staticActions' => null,
        'anyStatus' => null,
        'submitCanOperate' => null
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
    * code  节点编码
    * name  节点名称
    * description  节点描述
    * end  是否为结束节点
    * last  是否为最末节点
    * start  是否为开始节点
    * enableSuspend  是否允许挂起
    * extraConfig  节点扩展配置
    * staticRules  静态规则列表
    * staticActions  静态动作配置
    * anyStatus  是否任意状态可流转
    * submitCanOperate  提交时是否可操作
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'name' => 'name',
            'description' => 'description',
            'end' => 'end',
            'last' => 'last',
            'start' => 'start',
            'enableSuspend' => 'enable_suspend',
            'extraConfig' => 'extra_config',
            'staticRules' => 'static_rules',
            'staticActions' => 'static_actions',
            'anyStatus' => 'any_status',
            'submitCanOperate' => 'submit_can_operate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  节点编码
    * name  节点名称
    * description  节点描述
    * end  是否为结束节点
    * last  是否为最末节点
    * start  是否为开始节点
    * enableSuspend  是否允许挂起
    * extraConfig  节点扩展配置
    * staticRules  静态规则列表
    * staticActions  静态动作配置
    * anyStatus  是否任意状态可流转
    * submitCanOperate  提交时是否可操作
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'name' => 'setName',
            'description' => 'setDescription',
            'end' => 'setEnd',
            'last' => 'setLast',
            'start' => 'setStart',
            'enableSuspend' => 'setEnableSuspend',
            'extraConfig' => 'setExtraConfig',
            'staticRules' => 'setStaticRules',
            'staticActions' => 'setStaticActions',
            'anyStatus' => 'setAnyStatus',
            'submitCanOperate' => 'setSubmitCanOperate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  节点编码
    * name  节点名称
    * description  节点描述
    * end  是否为结束节点
    * last  是否为最末节点
    * start  是否为开始节点
    * enableSuspend  是否允许挂起
    * extraConfig  节点扩展配置
    * staticRules  静态规则列表
    * staticActions  静态动作配置
    * anyStatus  是否任意状态可流转
    * submitCanOperate  提交时是否可操作
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'name' => 'getName',
            'description' => 'getDescription',
            'end' => 'getEnd',
            'last' => 'getLast',
            'start' => 'getStart',
            'enableSuspend' => 'getEnableSuspend',
            'extraConfig' => 'getExtraConfig',
            'staticRules' => 'getStaticRules',
            'staticActions' => 'getStaticActions',
            'anyStatus' => 'getAnyStatus',
            'submitCanOperate' => 'getSubmitCanOperate'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['enableSuspend'] = isset($data['enableSuspend']) ? $data['enableSuspend'] : null;
        $this->container['extraConfig'] = isset($data['extraConfig']) ? $data['extraConfig'] : null;
        $this->container['staticRules'] = isset($data['staticRules']) ? $data['staticRules'] : null;
        $this->container['staticActions'] = isset($data['staticActions']) ? $data['staticActions'] : null;
        $this->container['anyStatus'] = isset($data['anyStatus']) ? $data['anyStatus'] : null;
        $this->container['submitCanOperate'] = isset($data['submitCanOperate']) ? $data['submitCanOperate'] : null;
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
    * Gets code
    *  节点编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 节点编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  节点名称
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
    * @param string|null $name 节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  节点描述
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
    * @param string|null $description 节点描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets end
    *  是否为结束节点
    *
    * @return bool|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param bool|null $end 是否为结束节点
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets last
    *  是否为最末节点
    *
    * @return bool|null
    */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
    * Sets last
    *
    * @param bool|null $last 是否为最末节点
    *
    * @return $this
    */
    public function setLast($last)
    {
        $this->container['last'] = $last;
        return $this;
    }

    /**
    * Gets start
    *  是否为开始节点
    *
    * @return bool|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param bool|null $start 是否为开始节点
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets enableSuspend
    *  是否允许挂起
    *
    * @return bool|null
    */
    public function getEnableSuspend()
    {
        return $this->container['enableSuspend'];
    }

    /**
    * Sets enableSuspend
    *
    * @param bool|null $enableSuspend 是否允许挂起
    *
    * @return $this
    */
    public function setEnableSuspend($enableSuspend)
    {
        $this->container['enableSuspend'] = $enableSuspend;
        return $this;
    }

    /**
    * Gets extraConfig
    *  节点扩展配置
    *
    * @return map[string,object]|null
    */
    public function getExtraConfig()
    {
        return $this->container['extraConfig'];
    }

    /**
    * Sets extraConfig
    *
    * @param map[string,object]|null $extraConfig 节点扩展配置
    *
    * @return $this
    */
    public function setExtraConfig($extraConfig)
    {
        $this->container['extraConfig'] = $extraConfig;
        return $this;
    }

    /**
    * Gets staticRules
    *  静态规则列表
    *
    * @return map[string,object][]|null
    */
    public function getStaticRules()
    {
        return $this->container['staticRules'];
    }

    /**
    * Sets staticRules
    *
    * @param map[string,object][]|null $staticRules 静态规则列表
    *
    * @return $this
    */
    public function setStaticRules($staticRules)
    {
        $this->container['staticRules'] = $staticRules;
        return $this;
    }

    /**
    * Gets staticActions
    *  静态动作配置
    *
    * @return map[string,object]|null
    */
    public function getStaticActions()
    {
        return $this->container['staticActions'];
    }

    /**
    * Sets staticActions
    *
    * @param map[string,object]|null $staticActions 静态动作配置
    *
    * @return $this
    */
    public function setStaticActions($staticActions)
    {
        $this->container['staticActions'] = $staticActions;
        return $this;
    }

    /**
    * Gets anyStatus
    *  是否任意状态可流转
    *
    * @return bool|null
    */
    public function getAnyStatus()
    {
        return $this->container['anyStatus'];
    }

    /**
    * Sets anyStatus
    *
    * @param bool|null $anyStatus 是否任意状态可流转
    *
    * @return $this
    */
    public function setAnyStatus($anyStatus)
    {
        $this->container['anyStatus'] = $anyStatus;
        return $this;
    }

    /**
    * Gets submitCanOperate
    *  提交时是否可操作
    *
    * @return bool|null
    */
    public function getSubmitCanOperate()
    {
        return $this->container['submitCanOperate'];
    }

    /**
    * Sets submitCanOperate
    *
    * @param bool|null $submitCanOperate 提交时是否可操作
    *
    * @return $this
    */
    public function setSubmitCanOperate($submitCanOperate)
    {
        $this->container['submitCanOperate'] = $submitCanOperate;
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

