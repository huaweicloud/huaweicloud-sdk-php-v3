<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWhiteblackipRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWhiteblackipRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则id
    * name  黑白名单规则名称
    * policyid  策略id
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * timeMode  生效模式，默认为permanent（立即生效）
    * ipGroup  ipGroup
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    * timestamp  创建规则的时间戳,13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'policyid' => 'string',
            'addr' => 'string',
            'white' => 'int',
            'timeMode' => 'string',
            'ipGroup' => '\HuaweiCloud\SDK\Waf\V1\Model\IpGroup',
            'status' => 'int',
            'description' => 'string',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则id
    * name  黑白名单规则名称
    * policyid  策略id
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * timeMode  生效模式，默认为permanent（立即生效）
    * ipGroup  ipGroup
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    * timestamp  创建规则的时间戳,13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'policyid' => null,
        'addr' => null,
        'white' => 'int32',
        'timeMode' => null,
        'ipGroup' => null,
        'status' => null,
        'description' => null,
        'timestamp' => 'int64'
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
    * id  规则id
    * name  黑白名单规则名称
    * policyid  策略id
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * timeMode  生效模式，默认为permanent（立即生效）
    * ipGroup  ipGroup
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    * timestamp  创建规则的时间戳,13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'policyid' => 'policyid',
            'addr' => 'addr',
            'white' => 'white',
            'timeMode' => 'time_mode',
            'ipGroup' => 'ip_group',
            'status' => 'status',
            'description' => 'description',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则id
    * name  黑白名单规则名称
    * policyid  策略id
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * timeMode  生效模式，默认为permanent（立即生效）
    * ipGroup  ipGroup
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    * timestamp  创建规则的时间戳,13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'policyid' => 'setPolicyid',
            'addr' => 'setAddr',
            'white' => 'setWhite',
            'timeMode' => 'setTimeMode',
            'ipGroup' => 'setIpGroup',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则id
    * name  黑白名单规则名称
    * policyid  策略id
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * white  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    * timeMode  生效模式，默认为permanent（立即生效）
    * ipGroup  ipGroup
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    * timestamp  创建规则的时间戳,13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'policyid' => 'getPolicyid',
            'addr' => 'getAddr',
            'white' => 'getWhite',
            'timeMode' => 'getTimeMode',
            'ipGroup' => 'getIpGroup',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'timestamp' => 'getTimestamp'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['white'] = isset($data['white']) ? $data['white'] : null;
        $this->container['timeMode'] = isset($data['timeMode']) ? $data['timeMode'] : null;
        $this->container['ipGroup'] = isset($data['ipGroup']) ? $data['ipGroup'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
    * Gets id
    *  规则id
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
    * @param string|null $id 规则id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  黑白名单规则名称
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
    * @param string|null $name 黑白名单规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets policyid
    *  策略id
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
    * @param string|null $policyid 策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets addr
    *  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    *
    * @return string|null
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string|null $addr 黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets white
    *  防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    *
    * @return int|null
    */
    public function getWhite()
    {
        return $this->container['white'];
    }

    /**
    * Sets white
    *
    * @param int|null $white 防护动作：  - 0 拦截  - 1 放行  - 2 仅记录
    *
    * @return $this
    */
    public function setWhite($white)
    {
        $this->container['white'] = $white;
        return $this;
    }

    /**
    * Gets timeMode
    *  生效模式，默认为permanent（立即生效）
    *
    * @return string|null
    */
    public function getTimeMode()
    {
        return $this->container['timeMode'];
    }

    /**
    * Sets timeMode
    *
    * @param string|null $timeMode 生效模式，默认为permanent（立即生效）
    *
    * @return $this
    */
    public function setTimeMode($timeMode)
    {
        $this->container['timeMode'] = $timeMode;
        return $this;
    }

    /**
    * Gets ipGroup
    *  ipGroup
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IpGroup|null
    */
    public function getIpGroup()
    {
        return $this->container['ipGroup'];
    }

    /**
    * Sets ipGroup
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IpGroup|null $ipGroup ipGroup
    *
    * @return $this
    */
    public function setIpGroup($ipGroup)
    {
        $this->container['ipGroup'] = $ipGroup;
        return $this;
    }

    /**
    * Gets status
    *  规则状态，0：关闭，1：开启
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
    * @param int|null $status 规则状态，0：关闭，1：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
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
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets timestamp
    *  创建规则的时间戳,13位毫秒时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 创建规则的时间戳,13位毫秒时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

