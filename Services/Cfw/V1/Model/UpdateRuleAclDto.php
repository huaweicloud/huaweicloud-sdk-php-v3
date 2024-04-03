<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRuleAclDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRuleAclDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addressType  地址类型，0 ipv4,1 ipv6
    * name  规则名称
    * sequence  sequence
    * direction  方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * applications  应用列表
    * applicationsJsonString  应用列表转化为字符串
    * description  描述
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectTime  长连接时长
    * longConnectEnable  是否支持长连接，0表示不支持，1表示支持
    * profile  profile
    * source  source
    * destination  destination
    * service  service
    * type  规则type，0：互联网规则，1：vpc规则，2：nat规则
    * tag  tag
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addressType' => 'int',
            'name' => 'string',
            'sequence' => '\HuaweiCloud\SDK\Cfw\V1\Model\OrderRuleAclDto',
            'direction' => 'int',
            'actionType' => 'int',
            'status' => 'int',
            'applications' => 'string[]',
            'applicationsJsonString' => 'string',
            'description' => 'string',
            'longConnectTimeHour' => 'int',
            'longConnectTimeMinute' => 'int',
            'longConnectTimeSecond' => 'int',
            'longConnectTime' => 'int',
            'longConnectEnable' => 'int',
            'profile' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleProfileDto',
            'source' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto',
            'destination' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto',
            'service' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto',
            'type' => 'int',
            'tag' => '\HuaweiCloud\SDK\Cfw\V1\Model\TagsVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addressType  地址类型，0 ipv4,1 ipv6
    * name  规则名称
    * sequence  sequence
    * direction  方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * applications  应用列表
    * applicationsJsonString  应用列表转化为字符串
    * description  描述
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectTime  长连接时长
    * longConnectEnable  是否支持长连接，0表示不支持，1表示支持
    * profile  profile
    * source  source
    * destination  destination
    * service  service
    * type  规则type，0：互联网规则，1：vpc规则，2：nat规则
    * tag  tag
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addressType' => 'int32',
        'name' => null,
        'sequence' => null,
        'direction' => 'int32',
        'actionType' => 'int32',
        'status' => null,
        'applications' => null,
        'applicationsJsonString' => null,
        'description' => null,
        'longConnectTimeHour' => 'int64',
        'longConnectTimeMinute' => 'int64',
        'longConnectTimeSecond' => 'int64',
        'longConnectTime' => 'int64',
        'longConnectEnable' => 'int32',
        'profile' => null,
        'source' => null,
        'destination' => null,
        'service' => null,
        'type' => 'int32',
        'tag' => null
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
    * addressType  地址类型，0 ipv4,1 ipv6
    * name  规则名称
    * sequence  sequence
    * direction  方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * applications  应用列表
    * applicationsJsonString  应用列表转化为字符串
    * description  描述
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectTime  长连接时长
    * longConnectEnable  是否支持长连接，0表示不支持，1表示支持
    * profile  profile
    * source  source
    * destination  destination
    * service  service
    * type  规则type，0：互联网规则，1：vpc规则，2：nat规则
    * tag  tag
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addressType' => 'address_type',
            'name' => 'name',
            'sequence' => 'sequence',
            'direction' => 'direction',
            'actionType' => 'action_type',
            'status' => 'status',
            'applications' => 'applications',
            'applicationsJsonString' => 'applicationsJsonString',
            'description' => 'description',
            'longConnectTimeHour' => 'long_connect_time_hour',
            'longConnectTimeMinute' => 'long_connect_time_minute',
            'longConnectTimeSecond' => 'long_connect_time_second',
            'longConnectTime' => 'long_connect_time',
            'longConnectEnable' => 'long_connect_enable',
            'profile' => 'profile',
            'source' => 'source',
            'destination' => 'destination',
            'service' => 'service',
            'type' => 'type',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addressType  地址类型，0 ipv4,1 ipv6
    * name  规则名称
    * sequence  sequence
    * direction  方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * applications  应用列表
    * applicationsJsonString  应用列表转化为字符串
    * description  描述
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectTime  长连接时长
    * longConnectEnable  是否支持长连接，0表示不支持，1表示支持
    * profile  profile
    * source  source
    * destination  destination
    * service  service
    * type  规则type，0：互联网规则，1：vpc规则，2：nat规则
    * tag  tag
    *
    * @var string[]
    */
    protected static $setters = [
            'addressType' => 'setAddressType',
            'name' => 'setName',
            'sequence' => 'setSequence',
            'direction' => 'setDirection',
            'actionType' => 'setActionType',
            'status' => 'setStatus',
            'applications' => 'setApplications',
            'applicationsJsonString' => 'setApplicationsJsonString',
            'description' => 'setDescription',
            'longConnectTimeHour' => 'setLongConnectTimeHour',
            'longConnectTimeMinute' => 'setLongConnectTimeMinute',
            'longConnectTimeSecond' => 'setLongConnectTimeSecond',
            'longConnectTime' => 'setLongConnectTime',
            'longConnectEnable' => 'setLongConnectEnable',
            'profile' => 'setProfile',
            'source' => 'setSource',
            'destination' => 'setDestination',
            'service' => 'setService',
            'type' => 'setType',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addressType  地址类型，0 ipv4,1 ipv6
    * name  规则名称
    * sequence  sequence
    * direction  方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
    * actionType  动作0：permit,1：deny
    * status  规则下发状态 0：禁用,1：启用
    * applications  应用列表
    * applicationsJsonString  应用列表转化为字符串
    * description  描述
    * longConnectTimeHour  长连接时长小时
    * longConnectTimeMinute  长连接时长分钟
    * longConnectTimeSecond  长连接时长秒
    * longConnectTime  长连接时长
    * longConnectEnable  是否支持长连接，0表示不支持，1表示支持
    * profile  profile
    * source  source
    * destination  destination
    * service  service
    * type  规则type，0：互联网规则，1：vpc规则，2：nat规则
    * tag  tag
    *
    * @var string[]
    */
    protected static $getters = [
            'addressType' => 'getAddressType',
            'name' => 'getName',
            'sequence' => 'getSequence',
            'direction' => 'getDirection',
            'actionType' => 'getActionType',
            'status' => 'getStatus',
            'applications' => 'getApplications',
            'applicationsJsonString' => 'getApplicationsJsonString',
            'description' => 'getDescription',
            'longConnectTimeHour' => 'getLongConnectTimeHour',
            'longConnectTimeMinute' => 'getLongConnectTimeMinute',
            'longConnectTimeSecond' => 'getLongConnectTimeSecond',
            'longConnectTime' => 'getLongConnectTime',
            'longConnectEnable' => 'getLongConnectEnable',
            'profile' => 'getProfile',
            'source' => 'getSource',
            'destination' => 'getDestination',
            'service' => 'getService',
            'type' => 'getType',
            'tag' => 'getTag'
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
    const DIRECTION_0 = 0;
    const DIRECTION_1 = 1;
    const ACTION_TYPE_0 = 0;
    const ACTION_TYPE_1 = 1;
    const LONG_CONNECT_ENABLE_0 = 0;
    const LONG_CONNECT_ENABLE_1 = 1;
    const TYPE_0 = 0;
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_0,
            self::ACTION_TYPE_1,
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_0,
            self::TYPE_1,
            self::TYPE_2,
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
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['applicationsJsonString'] = isset($data['applicationsJsonString']) ? $data['applicationsJsonString'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['longConnectTimeHour'] = isset($data['longConnectTimeHour']) ? $data['longConnectTimeHour'] : null;
        $this->container['longConnectTimeMinute'] = isset($data['longConnectTimeMinute']) ? $data['longConnectTimeMinute'] : null;
        $this->container['longConnectTimeSecond'] = isset($data['longConnectTimeSecond']) ? $data['longConnectTimeSecond'] : null;
        $this->container['longConnectTime'] = isset($data['longConnectTime']) ? $data['longConnectTime'] : null;
        $this->container['longConnectEnable'] = isset($data['longConnectEnable']) ? $data['longConnectEnable'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAddressTypeAllowableValues();
                if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
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

            $allowedValues = $this->getActionTypeAllowableValues();
                if (!is_null($this->container['actionType']) && !in_array($this->container['actionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLongConnectEnableAllowableValues();
                if (!is_null($this->container['longConnectEnable']) && !in_array($this->container['longConnectEnable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'longConnectEnable', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets addressType
    *  地址类型，0 ipv4,1 ipv6
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType 地址类型，0 ipv4,1 ipv6
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
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
    * @param string|null $name 规则名称
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
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\OrderRuleAclDto|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\OrderRuleAclDto|null $sequence sequence
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets direction
    *  方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
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
    * @param int|null $direction 方向：0表示外到内，1表示内到外【说明：规则type=0：互联网规则 | 2：nat规则时方向值必填】
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets actionType
    *  动作0：permit,1：deny
    *
    * @return int|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param int|null $actionType 动作0：permit,1：deny
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
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 规则下发状态 0：禁用,1：启用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets applications
    *  应用列表
    *
    * @return string[]|null
    */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
    * Sets applications
    *
    * @param string[]|null $applications 应用列表
    *
    * @return $this
    */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;
        return $this;
    }

    /**
    * Gets applicationsJsonString
    *  应用列表转化为字符串
    *
    * @return string|null
    */
    public function getApplicationsJsonString()
    {
        return $this->container['applicationsJsonString'];
    }

    /**
    * Sets applicationsJsonString
    *
    * @param string|null $applicationsJsonString 应用列表转化为字符串
    *
    * @return $this
    */
    public function setApplicationsJsonString($applicationsJsonString)
    {
        $this->container['applicationsJsonString'] = $applicationsJsonString;
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
    * Gets longConnectTimeHour
    *  长连接时长小时
    *
    * @return int|null
    */
    public function getLongConnectTimeHour()
    {
        return $this->container['longConnectTimeHour'];
    }

    /**
    * Sets longConnectTimeHour
    *
    * @param int|null $longConnectTimeHour 长连接时长小时
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
    * @return int|null
    */
    public function getLongConnectTimeMinute()
    {
        return $this->container['longConnectTimeMinute'];
    }

    /**
    * Sets longConnectTimeMinute
    *
    * @param int|null $longConnectTimeMinute 长连接时长分钟
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
    * @return int|null
    */
    public function getLongConnectTimeSecond()
    {
        return $this->container['longConnectTimeSecond'];
    }

    /**
    * Sets longConnectTimeSecond
    *
    * @param int|null $longConnectTimeSecond 长连接时长秒
    *
    * @return $this
    */
    public function setLongConnectTimeSecond($longConnectTimeSecond)
    {
        $this->container['longConnectTimeSecond'] = $longConnectTimeSecond;
        return $this;
    }

    /**
    * Gets longConnectTime
    *  长连接时长
    *
    * @return int|null
    */
    public function getLongConnectTime()
    {
        return $this->container['longConnectTime'];
    }

    /**
    * Sets longConnectTime
    *
    * @param int|null $longConnectTime 长连接时长
    *
    * @return $this
    */
    public function setLongConnectTime($longConnectTime)
    {
        $this->container['longConnectTime'] = $longConnectTime;
        return $this;
    }

    /**
    * Gets longConnectEnable
    *  是否支持长连接，0表示不支持，1表示支持
    *
    * @return int|null
    */
    public function getLongConnectEnable()
    {
        return $this->container['longConnectEnable'];
    }

    /**
    * Sets longConnectEnable
    *
    * @param int|null $longConnectEnable 是否支持长连接，0表示不支持，1表示支持
    *
    * @return $this
    */
    public function setLongConnectEnable($longConnectEnable)
    {
        $this->container['longConnectEnable'] = $longConnectEnable;
        return $this;
    }

    /**
    * Gets profile
    *  profile
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleProfileDto|null
    */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
    * Sets profile
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleProfileDto|null $profile profile
    *
    * @return $this
    */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null $source source
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
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null $destination destination
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
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto|null $service service
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets type
    *  规则type，0：互联网规则，1：vpc规则，2：nat规则
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
    * @param int|null $type 规则type，0：互联网规则，1：vpc规则，2：nat规则
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tag
    *  tag
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TagsVO|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TagsVO|null $tag tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

