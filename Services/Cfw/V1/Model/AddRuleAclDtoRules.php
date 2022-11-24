<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddRuleAclDtoRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddRuleAclDto_rules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
    * sequence  sequence
    * addressType  地址类型，0 ipv4,1 ipv6,2 domain
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * longConnectTime  长连接时长
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectEnable  是否支持长连接，0表示支持长连接，1表示不支持长连接
    * description  描述
    * direction  方向：0表示外到内，1表示内到外
    * source  source
    * destination  destination
    * service  service
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sequence' => '\HuaweiCloud\SDK\Cfw\V1\Model\OrderRuleAclDto',
            'addressType' => 'int',
            'actionType' => 'int',
            'status' => 'int',
            'longConnectTime' => 'int',
            'longConnectTimeHour' => 'int',
            'longConnectTimeMinute' => 'int',
            'longConnectTimeSecond' => 'int',
            'longConnectEnable' => 'int',
            'description' => 'string',
            'direction' => 'int',
            'source' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto',
            'destination' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto',
            'service' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
    * sequence  sequence
    * addressType  地址类型，0 ipv4,1 ipv6,2 domain
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * longConnectTime  长连接时长
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectEnable  是否支持长连接，0表示支持长连接，1表示不支持长连接
    * description  描述
    * direction  方向：0表示外到内，1表示内到外
    * source  source
    * destination  destination
    * service  service
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sequence' => null,
        'addressType' => 'int32',
        'actionType' => null,
        'status' => 'int32',
        'longConnectTime' => 'int64',
        'longConnectTimeHour' => 'int64',
        'longConnectTimeMinute' => 'int64',
        'longConnectTimeSecond' => 'int64',
        'longConnectEnable' => 'int32',
        'description' => null,
        'direction' => 'int32',
        'source' => null,
        'destination' => null,
        'service' => null
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
    * name  规则名称
    * sequence  sequence
    * addressType  地址类型，0 ipv4,1 ipv6,2 domain
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * longConnectTime  长连接时长
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectEnable  是否支持长连接，0表示支持长连接，1表示不支持长连接
    * description  描述
    * direction  方向：0表示外到内，1表示内到外
    * source  source
    * destination  destination
    * service  service
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sequence' => 'sequence',
            'addressType' => 'address_type',
            'actionType' => 'action_type',
            'status' => 'status',
            'longConnectTime' => 'long_connect_time',
            'longConnectTimeHour' => 'long_connect_time_hour',
            'longConnectTimeMinute' => 'long_connect_time_minute',
            'longConnectTimeSecond' => 'long_connect_time_second',
            'longConnectEnable' => 'long_connect_enable',
            'description' => 'description',
            'direction' => 'direction',
            'source' => 'source',
            'destination' => 'destination',
            'service' => 'service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
    * sequence  sequence
    * addressType  地址类型，0 ipv4,1 ipv6,2 domain
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * longConnectTime  长连接时长
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectEnable  是否支持长连接，0表示支持长连接，1表示不支持长连接
    * description  描述
    * direction  方向：0表示外到内，1表示内到外
    * source  source
    * destination  destination
    * service  service
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sequence' => 'setSequence',
            'addressType' => 'setAddressType',
            'actionType' => 'setActionType',
            'status' => 'setStatus',
            'longConnectTime' => 'setLongConnectTime',
            'longConnectTimeHour' => 'setLongConnectTimeHour',
            'longConnectTimeMinute' => 'setLongConnectTimeMinute',
            'longConnectTimeSecond' => 'setLongConnectTimeSecond',
            'longConnectEnable' => 'setLongConnectEnable',
            'description' => 'setDescription',
            'direction' => 'setDirection',
            'source' => 'setSource',
            'destination' => 'setDestination',
            'service' => 'setService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
    * sequence  sequence
    * addressType  地址类型，0 ipv4,1 ipv6,2 domain
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * longConnectTime  长连接时长
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectEnable  是否支持长连接，0表示支持长连接，1表示不支持长连接
    * description  描述
    * direction  方向：0表示外到内，1表示内到外
    * source  source
    * destination  destination
    * service  service
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sequence' => 'getSequence',
            'addressType' => 'getAddressType',
            'actionType' => 'getActionType',
            'status' => 'getStatus',
            'longConnectTime' => 'getLongConnectTime',
            'longConnectTimeHour' => 'getLongConnectTimeHour',
            'longConnectTimeMinute' => 'getLongConnectTimeMinute',
            'longConnectTimeSecond' => 'getLongConnectTimeSecond',
            'longConnectEnable' => 'getLongConnectEnable',
            'description' => 'getDescription',
            'direction' => 'getDirection',
            'source' => 'getSource',
            'destination' => 'getDestination',
            'service' => 'getService'
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
    const ADDRESS_TYPE_0 = 0;
    const ADDRESS_TYPE_1 = 1;
    const ADDRESS_TYPE_2 = 2;
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const LONG_CONNECT_ENABLE_0 = 0;
    const LONG_CONNECT_ENABLE_1 = 1;
    const DIRECTION_0 = 0;
    const DIRECTION_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_0,
            self::ADDRESS_TYPE_1,
            self::ADDRESS_TYPE_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLongConnectEnableAllowableValues()
    {
        return [
            self::LONG_CONNECT_ENABLE_0,
            self::LONG_CONNECT_ENABLE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_0,
            self::DIRECTION_1,
        ];
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['longConnectTime'] = isset($data['longConnectTime']) ? $data['longConnectTime'] : null;
        $this->container['longConnectTimeHour'] = isset($data['longConnectTimeHour']) ? $data['longConnectTimeHour'] : null;
        $this->container['longConnectTimeMinute'] = isset($data['longConnectTimeMinute']) ? $data['longConnectTimeMinute'] : null;
        $this->container['longConnectTimeSecond'] = isset($data['longConnectTimeSecond']) ? $data['longConnectTimeSecond'] : null;
        $this->container['longConnectEnable'] = isset($data['longConnectEnable']) ? $data['longConnectEnable'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
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
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['addressType'] === null) {
            $invalidProperties[] = "'addressType' can't be null";
        }
            $allowedValues = $this->getAddressTypeAllowableValues();
                if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['actionType'] === null) {
            $invalidProperties[] = "'actionType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['longConnectTime'] === null) {
            $invalidProperties[] = "'longConnectTime' can't be null";
        }
        if ($this->container['longConnectTimeHour'] === null) {
            $invalidProperties[] = "'longConnectTimeHour' can't be null";
        }
        if ($this->container['longConnectTimeMinute'] === null) {
            $invalidProperties[] = "'longConnectTimeMinute' can't be null";
        }
        if ($this->container['longConnectTimeSecond'] === null) {
            $invalidProperties[] = "'longConnectTimeSecond' can't be null";
        }
        if ($this->container['longConnectEnable'] === null) {
            $invalidProperties[] = "'longConnectEnable' can't be null";
        }
            $allowedValues = $this->getLongConnectEnableAllowableValues();
                if (!is_null($this->container['longConnectEnable']) && !in_array($this->container['longConnectEnable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'longConnectEnable', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDirectionAllowableValues();
                if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
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
    *  规则名称
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
    * @param string $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sequence
    *  sequence
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\OrderRuleAclDto
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\OrderRuleAclDto $sequence sequence
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets addressType
    *  地址类型，0 ipv4,1 ipv6,2 domain
    *
    * @return int
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int $addressType 地址类型，0 ipv4,1 ipv6,2 domain
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets actionType
    *  动作0：permit,1：deny
    *
    * @return int
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param int $actionType 动作0：permit,1：deny
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets status
    *  规则下发状态 0：禁用,1：启用
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 规则下发状态 0：禁用,1：启用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets longConnectTime
    *  长连接时长
    *
    * @return int
    */
    public function getLongConnectTime()
    {
        return $this->container['longConnectTime'];
    }

    /**
    * Sets longConnectTime
    *
    * @param int $longConnectTime 长连接时长
    *
    * @return $this
    */
    public function setLongConnectTime($longConnectTime)
    {
        $this->container['longConnectTime'] = $longConnectTime;
        return $this;
    }

    /**
    * Gets longConnectTimeHour
    *  长连接时长小时
    *
    * @return int
    */
    public function getLongConnectTimeHour()
    {
        return $this->container['longConnectTimeHour'];
    }

    /**
    * Sets longConnectTimeHour
    *
    * @param int $longConnectTimeHour 长连接时长小时
    *
    * @return $this
    */
    public function setLongConnectTimeHour($longConnectTimeHour)
    {
        $this->container['longConnectTimeHour'] = $longConnectTimeHour;
        return $this;
    }

    /**
    * Gets longConnectTimeMinute
    *  长连接时长分钟
    *
    * @return int
    */
    public function getLongConnectTimeMinute()
    {
        return $this->container['longConnectTimeMinute'];
    }

    /**
    * Sets longConnectTimeMinute
    *
    * @param int $longConnectTimeMinute 长连接时长分钟
    *
    * @return $this
    */
    public function setLongConnectTimeMinute($longConnectTimeMinute)
    {
        $this->container['longConnectTimeMinute'] = $longConnectTimeMinute;
        return $this;
    }

    /**
    * Gets longConnectTimeSecond
    *  长连接时长秒
    *
    * @return int
    */
    public function getLongConnectTimeSecond()
    {
        return $this->container['longConnectTimeSecond'];
    }

    /**
    * Sets longConnectTimeSecond
    *
    * @param int $longConnectTimeSecond 长连接时长秒
    *
    * @return $this
    */
    public function setLongConnectTimeSecond($longConnectTimeSecond)
    {
        $this->container['longConnectTimeSecond'] = $longConnectTimeSecond;
        return $this;
    }

    /**
    * Gets longConnectEnable
    *  是否支持长连接，0表示支持长连接，1表示不支持长连接
    *
    * @return int
    */
    public function getLongConnectEnable()
    {
        return $this->container['longConnectEnable'];
    }

    /**
    * Sets longConnectEnable
    *
    * @param int $longConnectEnable 是否支持长连接，0表示支持长连接，1表示不支持长连接
    *
    * @return $this
    */
    public function setLongConnectEnable($longConnectEnable)
    {
        $this->container['longConnectEnable'] = $longConnectEnable;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets direction
    *  方向：0表示外到内，1表示内到外
    *
    * @return int|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param int|null $direction 方向：0表示外到内，1表示内到外
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets destination
    *  destination
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto $destination destination
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets service
    *  service
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto $service service
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
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

