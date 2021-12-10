<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * app  应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * recordType  录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * planRecordTime  planRecordTime
    * defaultRecordConfig  defaultRecordConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'recordType' => 'string',
            'planRecordTime' => '\HuaweiCloud\SDK\Live\V1\Model\PlanRecordTime',
            'defaultRecordConfig' => '\HuaweiCloud\SDK\Live\V1\Model\DefaultRecordConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * app  应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * recordType  录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * planRecordTime  planRecordTime
    * defaultRecordConfig  defaultRecordConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'app' => null,
        'stream' => null,
        'recordType' => null,
        'planRecordTime' => null,
        'defaultRecordConfig' => null
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
    * publishDomain  直播推流域名
    * app  应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * recordType  录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * planRecordTime  planRecordTime
    * defaultRecordConfig  defaultRecordConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream',
            'recordType' => 'record_type',
            'planRecordTime' => 'plan_record_time',
            'defaultRecordConfig' => 'default_record_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  直播推流域名
    * app  应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * recordType  录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * planRecordTime  planRecordTime
    * defaultRecordConfig  defaultRecordConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'recordType' => 'setRecordType',
            'planRecordTime' => 'setPlanRecordTime',
            'defaultRecordConfig' => 'setDefaultRecordConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  直播推流域名
    * app  应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * recordType  录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * planRecordTime  planRecordTime
    * defaultRecordConfig  defaultRecordConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'recordType' => 'getRecordType',
            'planRecordTime' => 'getPlanRecordTime',
            'defaultRecordConfig' => 'getDefaultRecordConfig'
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
    const RECORD_TYPE_CONTINUOUS_RECORD = 'CONTINUOUS_RECORD';
    const RECORD_TYPE_COMMAND_RECORD = 'COMMAND_RECORD';
    const RECORD_TYPE_PLAN_RECORD = 'PLAN_RECORD';
    const RECORD_TYPE_ON_DEMAND_RECORD = 'ON_DEMAND_RECORD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordTypeAllowableValues()
    {
        return [
            self::RECORD_TYPE_CONTINUOUS_RECORD,
            self::RECORD_TYPE_COMMAND_RECORD,
            self::RECORD_TYPE_PLAN_RECORD,
            self::RECORD_TYPE_ON_DEMAND_RECORD,
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : 'CONTINUOUS_RECORD';
        $this->container['planRecordTime'] = isset($data['planRecordTime']) ? $data['planRecordTime'] : null;
        $this->container['defaultRecordConfig'] = isset($data['defaultRecordConfig']) ? $data['defaultRecordConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publishDomain'] === null) {
            $invalidProperties[] = "'publishDomain' can't be null";
        }
            if ((mb_strlen($this->container['publishDomain']) > 128)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['stream'] === null) {
            $invalidProperties[] = "'stream' can't be null";
        }
            if ((mb_strlen($this->container['stream']) > 128)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRecordTypeAllowableValues();
                if (!is_null($this->container['recordType']) && !in_array($this->container['recordType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recordType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['defaultRecordConfig'] === null) {
            $invalidProperties[] = "'defaultRecordConfig' can't be null";
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
    * Gets publishDomain
    *  直播推流域名
    *
    * @return string
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string $publishDomain 直播推流域名
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets app
    *  应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app 应用名，如需匹配任意应用则填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets stream
    *  录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    *
    * @return string
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string $stream 录制的流名，如需匹配任流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets recordType
    *  录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    *
    * @return string|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param string|null $recordType 录制类型，包括：CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD，ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets planRecordTime
    *  planRecordTime
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\PlanRecordTime|null
    */
    public function getPlanRecordTime()
    {
        return $this->container['planRecordTime'];
    }

    /**
    * Sets planRecordTime
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\PlanRecordTime|null $planRecordTime planRecordTime
    *
    * @return $this
    */
    public function setPlanRecordTime($planRecordTime)
    {
        $this->container['planRecordTime'] = $planRecordTime;
        return $this;
    }

    /**
    * Gets defaultRecordConfig
    *  defaultRecordConfig
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\DefaultRecordConfig
    */
    public function getDefaultRecordConfig()
    {
        return $this->container['defaultRecordConfig'];
    }

    /**
    * Sets defaultRecordConfig
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\DefaultRecordConfig $defaultRecordConfig defaultRecordConfig
    *
    * @return $this
    */
    public function setDefaultRecordConfig($defaultRecordConfig)
    {
        $this->container['defaultRecordConfig'] = $defaultRecordConfig;
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

