<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  转发规则名ID
    * forwardProtocol  转发协议，tcp或udp
    * forwardPort  转发端口
    * sourcePort  源站端口
    * lbMethod  LVS转发规则
    * sourceIp  源站IP，多个IP用逗号隔开，限制20个IP
    * status  源站状态 1 正常，2 异常
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'forwardProtocol' => 'string',
            'forwardPort' => 'int',
            'sourcePort' => 'int',
            'lbMethod' => 'string',
            'sourceIp' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  转发规则名ID
    * forwardProtocol  转发协议，tcp或udp
    * forwardPort  转发端口
    * sourcePort  源站端口
    * lbMethod  LVS转发规则
    * sourceIp  源站IP，多个IP用逗号隔开，限制20个IP
    * status  源站状态 1 正常，2 异常
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'forwardProtocol' => null,
        'forwardPort' => 'int32',
        'sourcePort' => 'int32',
        'lbMethod' => null,
        'sourceIp' => null,
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
    * ruleId  转发规则名ID
    * forwardProtocol  转发协议，tcp或udp
    * forwardPort  转发端口
    * sourcePort  源站端口
    * lbMethod  LVS转发规则
    * sourceIp  源站IP，多个IP用逗号隔开，限制20个IP
    * status  源站状态 1 正常，2 异常
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'forwardProtocol' => 'forward_protocol',
            'forwardPort' => 'forward_port',
            'sourcePort' => 'source_port',
            'lbMethod' => 'lb_method',
            'sourceIp' => 'source_ip',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  转发规则名ID
    * forwardProtocol  转发协议，tcp或udp
    * forwardPort  转发端口
    * sourcePort  源站端口
    * lbMethod  LVS转发规则
    * sourceIp  源站IP，多个IP用逗号隔开，限制20个IP
    * status  源站状态 1 正常，2 异常
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'forwardProtocol' => 'setForwardProtocol',
            'forwardPort' => 'setForwardPort',
            'sourcePort' => 'setSourcePort',
            'lbMethod' => 'setLbMethod',
            'sourceIp' => 'setSourceIp',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  转发规则名ID
    * forwardProtocol  转发协议，tcp或udp
    * forwardPort  转发端口
    * sourcePort  源站端口
    * lbMethod  LVS转发规则
    * sourceIp  源站IP，多个IP用逗号隔开，限制20个IP
    * status  源站状态 1 正常，2 异常
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'forwardProtocol' => 'getForwardProtocol',
            'forwardPort' => 'getForwardPort',
            'sourcePort' => 'getSourcePort',
            'lbMethod' => 'getLbMethod',
            'sourceIp' => 'getSourceIp',
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['forwardProtocol'] = isset($data['forwardProtocol']) ? $data['forwardProtocol'] : null;
        $this->container['forwardPort'] = isset($data['forwardPort']) ? $data['forwardPort'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['lbMethod'] = isset($data['lbMethod']) ? $data['lbMethod'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
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
            if (!is_null($this->container['forwardPort']) && ($this->container['forwardPort'] > 65536)) {
                $invalidProperties[] = "invalid value for 'forwardPort', must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['forwardPort']) && ($this->container['forwardPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'forwardPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourcePort']) && ($this->container['sourcePort'] > 65536)) {
                $invalidProperties[] = "invalid value for 'sourcePort', must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['sourcePort']) && ($this->container['sourcePort'] < 1)) {
                $invalidProperties[] = "invalid value for 'sourcePort', must be bigger than or equal to 1.";
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
    * Gets ruleId
    *  转发规则名ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 转发规则名ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets forwardProtocol
    *  转发协议，tcp或udp
    *
    * @return string|null
    */
    public function getForwardProtocol()
    {
        return $this->container['forwardProtocol'];
    }

    /**
    * Sets forwardProtocol
    *
    * @param string|null $forwardProtocol 转发协议，tcp或udp
    *
    * @return $this
    */
    public function setForwardProtocol($forwardProtocol)
    {
        $this->container['forwardProtocol'] = $forwardProtocol;
        return $this;
    }

    /**
    * Gets forwardPort
    *  转发端口
    *
    * @return int|null
    */
    public function getForwardPort()
    {
        return $this->container['forwardPort'];
    }

    /**
    * Sets forwardPort
    *
    * @param int|null $forwardPort 转发端口
    *
    * @return $this
    */
    public function setForwardPort($forwardPort)
    {
        $this->container['forwardPort'] = $forwardPort;
        return $this;
    }

    /**
    * Gets sourcePort
    *  源站端口
    *
    * @return int|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param int|null $sourcePort 源站端口
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets lbMethod
    *  LVS转发规则
    *
    * @return string|null
    */
    public function getLbMethod()
    {
        return $this->container['lbMethod'];
    }

    /**
    * Sets lbMethod
    *
    * @param string|null $lbMethod LVS转发规则
    *
    * @return $this
    */
    public function setLbMethod($lbMethod)
    {
        $this->container['lbMethod'] = $lbMethod;
        return $this;
    }

    /**
    * Gets sourceIp
    *  源站IP，多个IP用逗号隔开，限制20个IP
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 源站IP，多个IP用逗号隔开，限制20个IP
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets status
    *  源站状态 1 正常，2 异常
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
    * @param int|null $status 源站状态 1 正常，2 异常
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

