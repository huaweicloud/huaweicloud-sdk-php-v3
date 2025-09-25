<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWebTamperHostPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWebTamperHostPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDirInfo  protectDirInfo
    * enableTimingOff  **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    * raspPath  **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    * enablePrivilegedProcess  **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDirInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectDirRequestInfo',
            'enableTimingOff' => 'bool',
            'timingOffConfigInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperTimingOffConfigInfoRequestInfo',
            'enableRaspProtect' => 'bool',
            'raspPath' => 'string',
            'enablePrivilegedProcess' => 'bool',
            'privilegedProcessInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperPrivilegedProcessRequestInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDirInfo  protectDirInfo
    * enableTimingOff  **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    * raspPath  **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    * enablePrivilegedProcess  **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDirInfo' => null,
        'enableTimingOff' => null,
        'timingOffConfigInfo' => null,
        'enableRaspProtect' => null,
        'raspPath' => null,
        'enablePrivilegedProcess' => null,
        'privilegedProcessInfo' => null
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
    * protectDirInfo  protectDirInfo
    * enableTimingOff  **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    * raspPath  **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    * enablePrivilegedProcess  **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDirInfo' => 'protect_dir_info',
            'enableTimingOff' => 'enable_timing_off',
            'timingOffConfigInfo' => 'timing_off_config_info',
            'enableRaspProtect' => 'enable_rasp_protect',
            'raspPath' => 'rasp_path',
            'enablePrivilegedProcess' => 'enable_privileged_process',
            'privilegedProcessInfo' => 'privileged_process_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDirInfo  protectDirInfo
    * enableTimingOff  **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    * raspPath  **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    * enablePrivilegedProcess  **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDirInfo' => 'setProtectDirInfo',
            'enableTimingOff' => 'setEnableTimingOff',
            'timingOffConfigInfo' => 'setTimingOffConfigInfo',
            'enableRaspProtect' => 'setEnableRaspProtect',
            'raspPath' => 'setRaspPath',
            'enablePrivilegedProcess' => 'setEnablePrivilegedProcess',
            'privilegedProcessInfo' => 'setPrivilegedProcessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDirInfo  protectDirInfo
    * enableTimingOff  **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    * timingOffConfigInfo  timingOffConfigInfo
    * enableRaspProtect  **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    * raspPath  **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    * enablePrivilegedProcess  **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    * privilegedProcessInfo  privilegedProcessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDirInfo' => 'getProtectDirInfo',
            'enableTimingOff' => 'getEnableTimingOff',
            'timingOffConfigInfo' => 'getTimingOffConfigInfo',
            'enableRaspProtect' => 'getEnableRaspProtect',
            'raspPath' => 'getRaspPath',
            'enablePrivilegedProcess' => 'getEnablePrivilegedProcess',
            'privilegedProcessInfo' => 'getPrivilegedProcessInfo'
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
        $this->container['protectDirInfo'] = isset($data['protectDirInfo']) ? $data['protectDirInfo'] : null;
        $this->container['enableTimingOff'] = isset($data['enableTimingOff']) ? $data['enableTimingOff'] : null;
        $this->container['timingOffConfigInfo'] = isset($data['timingOffConfigInfo']) ? $data['timingOffConfigInfo'] : null;
        $this->container['enableRaspProtect'] = isset($data['enableRaspProtect']) ? $data['enableRaspProtect'] : null;
        $this->container['raspPath'] = isset($data['raspPath']) ? $data['raspPath'] : null;
        $this->container['enablePrivilegedProcess'] = isset($data['enablePrivilegedProcess']) ? $data['enablePrivilegedProcess'] : null;
        $this->container['privilegedProcessInfo'] = isset($data['privilegedProcessInfo']) ? $data['privilegedProcessInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protectDirInfo'] === null) {
            $invalidProperties[] = "'protectDirInfo' can't be null";
        }
            if (!is_null($this->container['raspPath']) && (mb_strlen($this->container['raspPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'raspPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['raspPath']) && (mb_strlen($this->container['raspPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'raspPath', the character length must be bigger than or equal to 1.";
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
    * Gets protectDirInfo
    *  protectDirInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectDirRequestInfo
    */
    public function getProtectDirInfo()
    {
        return $this->container['protectDirInfo'];
    }

    /**
    * Sets protectDirInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperProtectDirRequestInfo $protectDirInfo protectDirInfo
    *
    * @return $this
    */
    public function setProtectDirInfo($protectDirInfo)
    {
        $this->container['protectDirInfo'] = $protectDirInfo;
        return $this;
    }

    /**
    * Gets enableTimingOff
    *  **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    *
    * @return bool|null
    */
    public function getEnableTimingOff()
    {
        return $this->container['enableTimingOff'];
    }

    /**
    * Sets enableTimingOff
    *
    * @param bool|null $enableTimingOff **参数解释**: 定时开关设置状态 **约束限制**: 不涉及 **取值范围**: - True ：开启定时关闭防护功能，必须填写timing_off_config_info。 - False ：关闭定时关闭防护功能，无需填写timing_off_config_info。  **默认取值**: False
    *
    * @return $this
    */
    public function setEnableTimingOff($enableTimingOff)
    {
        $this->container['enableTimingOff'] = $enableTimingOff;
        return $this;
    }

    /**
    * Gets timingOffConfigInfo
    *  timingOffConfigInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperTimingOffConfigInfoRequestInfo|null
    */
    public function getTimingOffConfigInfo()
    {
        return $this->container['timingOffConfigInfo'];
    }

    /**
    * Sets timingOffConfigInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperTimingOffConfigInfoRequestInfo|null $timingOffConfigInfo timingOffConfigInfo
    *
    * @return $this
    */
    public function setTimingOffConfigInfo($timingOffConfigInfo)
    {
        $this->container['timingOffConfigInfo'] = $timingOffConfigInfo;
        return $this;
    }

    /**
    * Gets enableRaspProtect
    *  **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    *
    * @return bool|null
    */
    public function getEnableRaspProtect()
    {
        return $this->container['enableRaspProtect'];
    }

    /**
    * Sets enableRaspProtect
    *
    * @param bool|null $enableRaspProtect **参数解释**: 动态网页防篡改开启状态，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持开启动态网页防篡改，Windows服务器不可填写该字段。 **取值范围**: - True ：开启动态网页防篡改，必须填写rasp_path。 - False ：关闭动态网页防篡改，无需填写rasp_path。  **默认取值**: False
    *
    * @return $this
    */
    public function setEnableRaspProtect($enableRaspProtect)
    {
        $this->container['enableRaspProtect'] = $enableRaspProtect;
        return $this;
    }

    /**
    * Gets raspPath
    *  **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRaspPath()
    {
        return $this->container['raspPath'];
    }

    /**
    * Sets raspPath
    *
    * @param string|null $raspPath **参数解释**: 动态网页防篡改的Tomcat bin目录，仅Linux服务器支持。 **约束限制**: 仅Linux服务器支持配置动态网页防篡改的Tomcat bin目录，Windows服务器不可填写该字段。 **取值范围**: 字符长度1-256位，必须以/开头，不能以/结尾，只能包含英文大小写字母，数字，下划线，中划线和点。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRaspPath($raspPath)
    {
        $this->container['raspPath'] = $raspPath;
        return $this;
    }

    /**
    * Gets enablePrivilegedProcess
    *  **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    *
    * @return bool|null
    */
    public function getEnablePrivilegedProcess()
    {
        return $this->container['enablePrivilegedProcess'];
    }

    /**
    * Sets enablePrivilegedProcess
    *
    * @param bool|null $enablePrivilegedProcess **参数解释**: 特权进程开启状态 **约束限制**: 不涉及 **取值范围**: - True ：开启特权进程，必须填写privileged_process_info。 - False ：关闭特权进程，无需填写privileged_process_info。  **默认取值**: False
    *
    * @return $this
    */
    public function setEnablePrivilegedProcess($enablePrivilegedProcess)
    {
        $this->container['enablePrivilegedProcess'] = $enablePrivilegedProcess;
        return $this;
    }

    /**
    * Gets privilegedProcessInfo
    *  privilegedProcessInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperPrivilegedProcessRequestInfo|null
    */
    public function getPrivilegedProcessInfo()
    {
        return $this->container['privilegedProcessInfo'];
    }

    /**
    * Sets privilegedProcessInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperPrivilegedProcessRequestInfo|null $privilegedProcessInfo privilegedProcessInfo
    *
    * @return $this
    */
    public function setPrivilegedProcessInfo($privilegedProcessInfo)
    {
        $this->container['privilegedProcessInfo'] = $privilegedProcessInfo;
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

