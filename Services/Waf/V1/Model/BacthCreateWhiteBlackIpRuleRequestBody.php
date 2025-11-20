<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BacthCreateWhiteBlackIpRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BacthCreateWhiteBlackIpRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * description  黑白名单规则描述
    * white  防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    * ipGroupId  创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    * timeMode  生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
    * start  规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * terminal  规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * policyIds  添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'addr' => 'string',
            'description' => 'string',
            'white' => 'int',
            'ipGroupId' => 'string',
            'timeMode' => 'string',
            'start' => 'int',
            'terminal' => 'int',
            'policyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * description  黑白名单规则描述
    * white  防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    * ipGroupId  创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    * timeMode  生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
    * start  规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * terminal  规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * policyIds  添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'addr' => null,
        'description' => null,
        'white' => null,
        'ipGroupId' => null,
        'timeMode' => null,
        'start' => null,
        'terminal' => null,
        'policyIds' => null
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
    * name  规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * description  黑白名单规则描述
    * white  防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    * ipGroupId  创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    * timeMode  生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
    * start  规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * terminal  规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * policyIds  添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'addr' => 'addr',
            'description' => 'description',
            'white' => 'white',
            'ipGroupId' => 'ip_group_id',
            'timeMode' => 'time_mode',
            'start' => 'start',
            'terminal' => 'terminal',
            'policyIds' => 'policy_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * description  黑白名单规则描述
    * white  防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    * ipGroupId  创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    * timeMode  生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
    * start  规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * terminal  规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * policyIds  添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'addr' => 'setAddr',
            'description' => 'setDescription',
            'white' => 'setWhite',
            'ipGroupId' => 'setIpGroupId',
            'timeMode' => 'setTimeMode',
            'start' => 'setStart',
            'terminal' => 'setTerminal',
            'policyIds' => 'setPolicyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    * addr  黑白名单ip地址，需要输入标准的ip地址或地址段，例如：42.123.120.66或42.123.120.0/16
    * description  黑白名单规则描述
    * white  防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    * ipGroupId  创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    * timeMode  生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
    * start  规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * terminal  规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    * policyIds  添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'addr' => 'getAddr',
            'description' => 'getDescription',
            'white' => 'getWhite',
            'ipGroupId' => 'getIpGroupId',
            'timeMode' => 'getTimeMode',
            'start' => 'getStart',
            'terminal' => 'getTerminal',
            'policyIds' => 'getPolicyIds'
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['white'] = isset($data['white']) ? $data['white'] : null;
        $this->container['ipGroupId'] = isset($data['ipGroupId']) ? $data['ipGroupId'] : null;
        $this->container['timeMode'] = isset($data['timeMode']) ? $data['timeMode'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['policyIds'] = isset($data['policyIds']) ? $data['policyIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['white'] === null) {
            $invalidProperties[] = "'white' can't be null";
        }
        if ($this->container['policyIds'] === null) {
            $invalidProperties[] = "'policyIds' can't be null";
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
    * Gets name
    *  规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 规则名称只能由字母、数字、-、_和.组成，长度不能超过64个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets description
    *  黑白名单规则描述
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
    * @param string|null $description 黑白名单规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets white
    *  防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    *
    * @return int
    */
    public function getWhite()
    {
        return $this->container['white'];
    }

    /**
    * Sets white
    *
    * @param int $white 防护动作：  - 0 拦截  - 1 放行   - 2 仅记录
    *
    * @return $this
    */
    public function setWhite($white)
    {
        $this->container['white'] = $white;
        return $this;
    }

    /**
    * Gets ipGroupId
    *  创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    *
    * @return string|null
    */
    public function getIpGroupId()
    {
        return $this->container['ipGroupId'];
    }

    /**
    * Sets ipGroupId
    *
    * @param string|null $ipGroupId 创建的Ip地址组id，该参数与addr参数只能使用一个；Ip地址组可在控制台中对象管理->地址组管理中添加。
    *
    * @return $this
    */
    public function setIpGroupId($ipGroupId)
    {
        $this->container['ipGroupId'] = $ipGroupId;
        return $this;
    }

    /**
    * Gets timeMode
    *  生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
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
    * @param string|null $timeMode 生效模式，默认为permanent（立即生效）,创建自定义生效规则时请输入：customize
    *
    * @return $this
    */
    public function setTimeMode($timeMode)
    {
        $this->container['timeMode'] = $timeMode;
        return $this;
    }

    /**
    * Gets start
    *  规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 规则生效开始时间，生效模式为自定义时，此字段才有效，请输入时间戳
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets terminal
    *  规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    *
    * @return int|null
    */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
    * Sets terminal
    *
    * @param int|null $terminal 规则生效结束时间，生效模式为自定义时，此字段才有效，请输入时间戳
    *
    * @return $this
    */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;
        return $this;
    }

    /**
    * Gets policyIds
    *  添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @return string[]
    */
    public function getPolicyIds()
    {
        return $this->container['policyIds'];
    }

    /**
    * Sets policyIds
    *
    * @param string[] $policyIds 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开
    *
    * @return $this
    */
    public function setPolicyIds($policyIds)
    {
        $this->container['policyIds'] = $policyIds;
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

