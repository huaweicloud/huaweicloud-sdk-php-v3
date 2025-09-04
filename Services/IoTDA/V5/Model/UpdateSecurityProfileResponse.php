<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityProfileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityProfileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * profileId  安全态势感知配置id
    * securityType  安全态势感知配置类型
    * alarmLevel  安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    * securityLevel  安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    * enable  安全态势感知项是否开启
    * profile  安全态势感知项配置结构体，用于设备侧检测项下发给设备
    * profileTargets  profileTargets
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'profileId' => 'string',
            'securityType' => 'string',
            'alarmLevel' => 'string',
            'securityLevel' => 'string',
            'enable' => 'bool',
            'profile' => '\HuaweiCloud\SDK\IoTDA\V5\Model\SecurityProfile[]',
            'profileTargets' => '\HuaweiCloud\SDK\IoTDA\V5\Model\SecurityTarget'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * profileId  安全态势感知配置id
    * securityType  安全态势感知配置类型
    * alarmLevel  安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    * securityLevel  安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    * enable  安全态势感知项是否开启
    * profile  安全态势感知项配置结构体，用于设备侧检测项下发给设备
    * profileTargets  profileTargets
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'profileId' => null,
        'securityType' => null,
        'alarmLevel' => null,
        'securityLevel' => null,
        'enable' => null,
        'profile' => null,
        'profileTargets' => null
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
    * profileId  安全态势感知配置id
    * securityType  安全态势感知配置类型
    * alarmLevel  安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    * securityLevel  安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    * enable  安全态势感知项是否开启
    * profile  安全态势感知项配置结构体，用于设备侧检测项下发给设备
    * profileTargets  profileTargets
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'profileId' => 'profile_id',
            'securityType' => 'security_type',
            'alarmLevel' => 'alarm_level',
            'securityLevel' => 'security_level',
            'enable' => 'enable',
            'profile' => 'profile',
            'profileTargets' => 'profile_targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * profileId  安全态势感知配置id
    * securityType  安全态势感知配置类型
    * alarmLevel  安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    * securityLevel  安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    * enable  安全态势感知项是否开启
    * profile  安全态势感知项配置结构体，用于设备侧检测项下发给设备
    * profileTargets  profileTargets
    *
    * @var string[]
    */
    protected static $setters = [
            'profileId' => 'setProfileId',
            'securityType' => 'setSecurityType',
            'alarmLevel' => 'setAlarmLevel',
            'securityLevel' => 'setSecurityLevel',
            'enable' => 'setEnable',
            'profile' => 'setProfile',
            'profileTargets' => 'setProfileTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * profileId  安全态势感知配置id
    * securityType  安全态势感知配置类型
    * alarmLevel  安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    * securityLevel  安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    * enable  安全态势感知项是否开启
    * profile  安全态势感知项配置结构体，用于设备侧检测项下发给设备
    * profileTargets  profileTargets
    *
    * @var string[]
    */
    protected static $getters = [
            'profileId' => 'getProfileId',
            'securityType' => 'getSecurityType',
            'alarmLevel' => 'getAlarmLevel',
            'securityLevel' => 'getSecurityLevel',
            'enable' => 'getEnable',
            'profile' => 'getProfile',
            'profileTargets' => 'getProfileTargets'
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
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['securityType'] = isset($data['securityType']) ? $data['securityType'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['profileTargets'] = isset($data['profileTargets']) ? $data['profileTargets'] : null;
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
    * Gets profileId
    *  安全态势感知配置id
    *
    * @return string|null
    */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
    * Sets profileId
    *
    * @param string|null $profileId 安全态势感知配置id
    *
    * @return $this
    */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;
        return $this;
    }

    /**
    * Gets securityType
    *  安全态势感知配置类型
    *
    * @return string|null
    */
    public function getSecurityType()
    {
        return $this->container['securityType'];
    }

    /**
    * Sets securityType
    *
    * @param string|null $securityType 安全态势感知配置类型
    *
    * @return $this
    */
    public function setSecurityType($securityType)
    {
        $this->container['securityType'] = $securityType;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel 安全态势感知告警级别，CRITICAL：严重告警，MAJOR：重要告警，MINOR：一般告警
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets securityLevel
    *  安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    *
    * @return string|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param string|null $securityLevel 安全态势感知项所属安全风险级别；BASIC_SECURITY：基础安全，ADVANCE_SECURITY：高级安全，ULTIMATE_SECURITY：极致安全
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
        return $this;
    }

    /**
    * Gets enable
    *  安全态势感知项是否开启
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 安全态势感知项是否开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets profile
    *  安全态势感知项配置结构体，用于设备侧检测项下发给设备
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\SecurityProfile[]|null
    */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
    * Sets profile
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\SecurityProfile[]|null $profile 安全态势感知项配置结构体，用于设备侧检测项下发给设备
    *
    * @return $this
    */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;
        return $this;
    }

    /**
    * Gets profileTargets
    *  profileTargets
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\SecurityTarget|null
    */
    public function getProfileTargets()
    {
        return $this->container['profileTargets'];
    }

    /**
    * Sets profileTargets
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\SecurityTarget|null $profileTargets profileTargets
    *
    * @return $this
    */
    public function setProfileTargets($profileTargets)
    {
        $this->container['profileTargets'] = $profileTargets;
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

