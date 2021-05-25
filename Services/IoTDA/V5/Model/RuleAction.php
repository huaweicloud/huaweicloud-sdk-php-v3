<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    * addition  附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    * smnForwarding  smnForwarding
    * deviceAlarm  deviceAlarm
    * deviceCommand  deviceCommand
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * kafkaForwarding  kafkaForwarding
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'addition' => 'string[]',
            'smnForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionSmnForwarding',
            'deviceAlarm' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionDeviceAlarm',
            'deviceCommand' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionDeviceCommand',
            'disForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionDisForwarding',
            'obsForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionObsForwarding',
            'romaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionRomaForwarding',
            'iotaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionIoTAForwarding',
            'kafkaForwarding' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ActionKafkaForwarding'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    * addition  附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    * smnForwarding  smnForwarding
    * deviceAlarm  deviceAlarm
    * deviceCommand  deviceCommand
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * kafkaForwarding  kafkaForwarding
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'addition' => null,
        'smnForwarding' => null,
        'deviceAlarm' => null,
        'deviceCommand' => null,
        'disForwarding' => null,
        'obsForwarding' => null,
        'romaForwarding' => null,
        'iotaForwarding' => null,
        'kafkaForwarding' => null
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
    * type  规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    * addition  附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    * smnForwarding  smnForwarding
    * deviceAlarm  deviceAlarm
    * deviceCommand  deviceCommand
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * kafkaForwarding  kafkaForwarding
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'addition' => 'addition',
            'smnForwarding' => 'smn_forwarding',
            'deviceAlarm' => 'device_alarm',
            'deviceCommand' => 'device_command',
            'disForwarding' => 'dis_forwarding',
            'obsForwarding' => 'obs_forwarding',
            'romaForwarding' => 'roma_forwarding',
            'iotaForwarding' => 'iota_forwarding',
            'kafkaForwarding' => 'kafka_forwarding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    * addition  附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    * smnForwarding  smnForwarding
    * deviceAlarm  deviceAlarm
    * deviceCommand  deviceCommand
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * kafkaForwarding  kafkaForwarding
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'addition' => 'setAddition',
            'smnForwarding' => 'setSmnForwarding',
            'deviceAlarm' => 'setDeviceAlarm',
            'deviceCommand' => 'setDeviceCommand',
            'disForwarding' => 'setDisForwarding',
            'obsForwarding' => 'setObsForwarding',
            'romaForwarding' => 'setRomaForwarding',
            'iotaForwarding' => 'setIotaForwarding',
            'kafkaForwarding' => 'setKafkaForwarding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    * addition  附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    * smnForwarding  smnForwarding
    * deviceAlarm  deviceAlarm
    * deviceCommand  deviceCommand
    * disForwarding  disForwarding
    * obsForwarding  obsForwarding
    * romaForwarding  romaForwarding
    * iotaForwarding  iotaForwarding
    * kafkaForwarding  kafkaForwarding
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'addition' => 'getAddition',
            'smnForwarding' => 'getSmnForwarding',
            'deviceAlarm' => 'getDeviceAlarm',
            'deviceCommand' => 'getDeviceCommand',
            'disForwarding' => 'getDisForwarding',
            'obsForwarding' => 'getObsForwarding',
            'romaForwarding' => 'getRomaForwarding',
            'iotaForwarding' => 'getIotaForwarding',
            'kafkaForwarding' => 'getKafkaForwarding'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['addition'] = isset($data['addition']) ? $data['addition'] : null;
        $this->container['smnForwarding'] = isset($data['smnForwarding']) ? $data['smnForwarding'] : null;
        $this->container['deviceAlarm'] = isset($data['deviceAlarm']) ? $data['deviceAlarm'] : null;
        $this->container['deviceCommand'] = isset($data['deviceCommand']) ? $data['deviceCommand'] : null;
        $this->container['disForwarding'] = isset($data['disForwarding']) ? $data['disForwarding'] : null;
        $this->container['obsForwarding'] = isset($data['obsForwarding']) ? $data['obsForwarding'] : null;
        $this->container['romaForwarding'] = isset($data['romaForwarding']) ? $data['romaForwarding'] : null;
        $this->container['iotaForwarding'] = isset($data['iotaForwarding']) ? $data['iotaForwarding'] : null;
        $this->container['kafkaForwarding'] = isset($data['kafkaForwarding']) ? $data['kafkaForwarding'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!preg_match("/(DEVICE_CMD|SMN_FORWARDING|DEVICE_ALARM|DIS_FORWARDING|OBS_FORWARDING|ROMA_FORWARDING|IoTA_FORWARDING|KAFKA_FORWARDING)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(DEVICE_CMD|SMN_FORWARDING|DEVICE_ALARM|DIS_FORWARDING|OBS_FORWARDING|ROMA_FORWARDING|IoTA_FORWARDING|KAFKA_FORWARDING)/.";
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
    * Gets type
    *  规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 规则动作的类型，取值范围： - DEVICE_CMD：下发设备命令消息类型。 - SMN_FORWARDING：发送SMN消息类型。 - DEVICE_ALARM：上报设备告警消息类型。当选择该类型时，condition中必须有DEVICE_DATA条件类型。该类型动作只能唯一。 - DIS_FORWARDING：转发DIS服务消息类型。 - OBS_FORWARDING：转发OBS服务消息类型。 - ROMA_FORWARDING：转发ROMA Connect服务消息类型。 - IoTA_FORWARDING：转发IoTA服务消息类型。 - KAFKA_FORWARDING：转发kafka消息类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets addition
    *  附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    *
    * @return string[]|null
    */
    public function getAddition()
    {
        return $this->container['addition'];
    }

    /**
    * Sets addition
    *
    * @param string[]|null $addition 附加信息，在默认规则执行结果中附加额外内容，仅设备属性和消息类型数据转发规则支持，取值范围：PRODUCT_ID
    *
    * @return $this
    */
    public function setAddition($addition)
    {
        $this->container['addition'] = $addition;
        return $this;
    }

    /**
    * Gets smnForwarding
    *  smnForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionSmnForwarding|null
    */
    public function getSmnForwarding()
    {
        return $this->container['smnForwarding'];
    }

    /**
    * Sets smnForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionSmnForwarding|null $smnForwarding smnForwarding
    *
    * @return $this
    */
    public function setSmnForwarding($smnForwarding)
    {
        $this->container['smnForwarding'] = $smnForwarding;
        return $this;
    }

    /**
    * Gets deviceAlarm
    *  deviceAlarm
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionDeviceAlarm|null
    */
    public function getDeviceAlarm()
    {
        return $this->container['deviceAlarm'];
    }

    /**
    * Sets deviceAlarm
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionDeviceAlarm|null $deviceAlarm deviceAlarm
    *
    * @return $this
    */
    public function setDeviceAlarm($deviceAlarm)
    {
        $this->container['deviceAlarm'] = $deviceAlarm;
        return $this;
    }

    /**
    * Gets deviceCommand
    *  deviceCommand
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionDeviceCommand|null
    */
    public function getDeviceCommand()
    {
        return $this->container['deviceCommand'];
    }

    /**
    * Sets deviceCommand
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionDeviceCommand|null $deviceCommand deviceCommand
    *
    * @return $this
    */
    public function setDeviceCommand($deviceCommand)
    {
        $this->container['deviceCommand'] = $deviceCommand;
        return $this;
    }

    /**
    * Gets disForwarding
    *  disForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionDisForwarding|null
    */
    public function getDisForwarding()
    {
        return $this->container['disForwarding'];
    }

    /**
    * Sets disForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionDisForwarding|null $disForwarding disForwarding
    *
    * @return $this
    */
    public function setDisForwarding($disForwarding)
    {
        $this->container['disForwarding'] = $disForwarding;
        return $this;
    }

    /**
    * Gets obsForwarding
    *  obsForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionObsForwarding|null
    */
    public function getObsForwarding()
    {
        return $this->container['obsForwarding'];
    }

    /**
    * Sets obsForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionObsForwarding|null $obsForwarding obsForwarding
    *
    * @return $this
    */
    public function setObsForwarding($obsForwarding)
    {
        $this->container['obsForwarding'] = $obsForwarding;
        return $this;
    }

    /**
    * Gets romaForwarding
    *  romaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionRomaForwarding|null
    */
    public function getRomaForwarding()
    {
        return $this->container['romaForwarding'];
    }

    /**
    * Sets romaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionRomaForwarding|null $romaForwarding romaForwarding
    *
    * @return $this
    */
    public function setRomaForwarding($romaForwarding)
    {
        $this->container['romaForwarding'] = $romaForwarding;
        return $this;
    }

    /**
    * Gets iotaForwarding
    *  iotaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionIoTAForwarding|null
    */
    public function getIotaForwarding()
    {
        return $this->container['iotaForwarding'];
    }

    /**
    * Sets iotaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionIoTAForwarding|null $iotaForwarding iotaForwarding
    *
    * @return $this
    */
    public function setIotaForwarding($iotaForwarding)
    {
        $this->container['iotaForwarding'] = $iotaForwarding;
        return $this;
    }

    /**
    * Gets kafkaForwarding
    *  kafkaForwarding
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ActionKafkaForwarding|null
    */
    public function getKafkaForwarding()
    {
        return $this->container['kafkaForwarding'];
    }

    /**
    * Sets kafkaForwarding
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ActionKafkaForwarding|null $kafkaForwarding kafkaForwarding
    *
    * @return $this
    */
    public function setKafkaForwarding($kafkaForwarding)
    {
        $this->container['kafkaForwarding'] = $kafkaForwarding;
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

