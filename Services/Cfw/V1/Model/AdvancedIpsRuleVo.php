<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdvancedIpsRuleVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdvancedIpsRuleVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    * ipsRuleId  高级ips规则id
    * ipsRuleType  ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    * param  包含特殊参数的JSON字符串
    * status  status
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'int',
            'ipsRuleId' => 'string',
            'ipsRuleType' => 'int',
            'param' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    * ipsRuleId  高级ips规则id
    * ipsRuleType  ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    * param  包含特殊参数的JSON字符串
    * status  status
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => 'int32',
        'ipsRuleId' => null,
        'ipsRuleType' => 'int32',
        'param' => null,
        'status' => 'int32'
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
    * action  动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    * ipsRuleId  高级ips规则id
    * ipsRuleType  ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    * param  包含特殊参数的JSON字符串
    * status  status
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'ipsRuleId' => 'ips_rule_id',
            'ipsRuleType' => 'ips_rule_type',
            'param' => 'param',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    * ipsRuleId  高级ips规则id
    * ipsRuleType  ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    * param  包含特殊参数的JSON字符串
    * status  status
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'ipsRuleId' => 'setIpsRuleId',
            'ipsRuleType' => 'setIpsRuleType',
            'param' => 'setParam',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    * ipsRuleId  高级ips规则id
    * ipsRuleType  ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    * param  包含特殊参数的JSON字符串
    * status  status
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'ipsRuleId' => 'getIpsRuleId',
            'ipsRuleType' => 'getIpsRuleType',
            'param' => 'getParam',
            'status' => 'getStatus'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['ipsRuleId'] = isset($data['ipsRuleId']) ? $data['ipsRuleId'] : null;
        $this->container['ipsRuleType'] = isset($data['ipsRuleType']) ? $data['ipsRuleType'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets action
    *  动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    *
    * @return int|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param int|null $action 动作：0表示仅记录日志、1表示拦截session、2表示拦截ip
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets ipsRuleId
    *  高级ips规则id
    *
    * @return string|null
    */
    public function getIpsRuleId()
    {
        return $this->container['ipsRuleId'];
    }

    /**
    * Sets ipsRuleId
    *
    * @param string|null $ipsRuleId 高级ips规则id
    *
    * @return $this
    */
    public function setIpsRuleId($ipsRuleId)
    {
        $this->container['ipsRuleId'] = $ipsRuleId;
        return $this;
    }

    /**
    * Gets ipsRuleType
    *  ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    *
    * @return int|null
    */
    public function getIpsRuleType()
    {
        return $this->container['ipsRuleType'];
    }

    /**
    * Sets ipsRuleType
    *
    * @param int|null $ipsRuleType ips规则类型：0表示敏感目录扫描、1表示反弹xshell
    *
    * @return $this
    */
    public function setIpsRuleType($ipsRuleType)
    {
        $this->container['ipsRuleType'] = $ipsRuleType;
        return $this;
    }

    /**
    * Gets param
    *  包含特殊参数的JSON字符串
    *
    * @return string|null
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param string|null $param 包含特殊参数的JSON字符串
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
        return $this;
    }

    /**
    * Gets status
    *  status
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
    * @param int|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

