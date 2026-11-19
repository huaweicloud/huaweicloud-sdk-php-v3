<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWebTamperProtectionConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWebTamperProtectionConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    * containerWtpInfo  containerWtpInfo
    * openProtectionImmediately  **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'protectMode' => 'string',
            'monitorProcess' => 'bool',
            'privilegedProcessList' => 'string[]',
            'privilegedChild' => 'bool',
            'containerWtpInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateWebTamperProtectionConfigRequestBodyContainerWtpInfo',
            'openProtectionImmediately' => 'bool',
            'quotaInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateWebTamperProtectionConfigRequestBodyQuotaInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    * containerWtpInfo  containerWtpInfo
    * openProtectionImmediately  **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'protectMode' => null,
        'monitorProcess' => null,
        'privilegedProcessList' => null,
        'privilegedChild' => null,
        'containerWtpInfo' => null,
        'openProtectionImmediately' => null,
        'quotaInfo' => null
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
    * type  **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    * containerWtpInfo  containerWtpInfo
    * openProtectionImmediately  **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'protectMode' => 'protect_mode',
            'monitorProcess' => 'monitor_process',
            'privilegedProcessList' => 'privileged_process_list',
            'privilegedChild' => 'privileged_child',
            'containerWtpInfo' => 'container_wtp_info',
            'openProtectionImmediately' => 'open_protection_immediately',
            'quotaInfo' => 'quota_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    * containerWtpInfo  containerWtpInfo
    * openProtectionImmediately  **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'protectMode' => 'setProtectMode',
            'monitorProcess' => 'setMonitorProcess',
            'privilegedProcessList' => 'setPrivilegedProcessList',
            'privilegedChild' => 'setPrivilegedChild',
            'containerWtpInfo' => 'setContainerWtpInfo',
            'openProtectionImmediately' => 'setOpenProtectionImmediately',
            'quotaInfo' => 'setQuotaInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    * monitorProcess  **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    * privilegedProcessList  **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    * privilegedChild  **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    * containerWtpInfo  containerWtpInfo
    * openProtectionImmediately  **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'protectMode' => 'getProtectMode',
            'monitorProcess' => 'getMonitorProcess',
            'privilegedProcessList' => 'getPrivilegedProcessList',
            'privilegedChild' => 'getPrivilegedChild',
            'containerWtpInfo' => 'getContainerWtpInfo',
            'openProtectionImmediately' => 'getOpenProtectionImmediately',
            'quotaInfo' => 'getQuotaInfo'
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
        $this->container['protectMode'] = isset($data['protectMode']) ? $data['protectMode'] : null;
        $this->container['monitorProcess'] = isset($data['monitorProcess']) ? $data['monitorProcess'] : null;
        $this->container['privilegedProcessList'] = isset($data['privilegedProcessList']) ? $data['privilegedProcessList'] : null;
        $this->container['privilegedChild'] = isset($data['privilegedChild']) ? $data['privilegedChild'] : null;
        $this->container['containerWtpInfo'] = isset($data['containerWtpInfo']) ? $data['containerWtpInfo'] : null;
        $this->container['openProtectionImmediately'] = isset($data['openProtectionImmediately']) ? $data['openProtectionImmediately'] : null;
        $this->container['quotaInfo'] = isset($data['quotaInfo']) ? $data['quotaInfo'] : null;
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
            if (!preg_match("/^container_wtp$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^container_wtp$/.";
            }
            if (!is_null($this->container['protectMode']) && !preg_match("/^alarm|block$/", $this->container['protectMode'])) {
                $invalidProperties[] = "invalid value for 'protectMode', must be conform to the pattern /^alarm|block$/.";
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
    *  **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
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
    * @param string $type **参数解释**: 网页防篡改的类型 **约束限制**: 不涉及 **取值范围**: - container_wtp：容器网页防篡改  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protectMode
    *  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    *
    * @return string|null
    */
    public function getProtectMode()
    {
        return $this->container['protectMode'];
    }

    /**
    * Sets protectMode
    *
    * @param string|null $protectMode **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - alarm：告警模式 - block：拦截模式  **默认取值**: alarm
    *
    * @return $this
    */
    public function setProtectMode($protectMode)
    {
        $this->container['protectMode'] = $protectMode;
        return $this;
    }

    /**
    * Gets monitorProcess
    *  **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    *
    * @return bool|null
    */
    public function getMonitorProcess()
    {
        return $this->container['monitorProcess'];
    }

    /**
    * Sets monitorProcess
    *
    * @param bool|null $monitorProcess **参数解释**: 是否对篡改行为进行进程监控 **约束限制**: 不涉及 **取值范围**: - true：监控篡改进程 - false：不监控篡改进程  **默认取值**: true
    *
    * @return $this
    */
    public function setMonitorProcess($monitorProcess)
    {
        $this->container['monitorProcess'] = $monitorProcess;
        return $this;
    }

    /**
    * Gets privilegedProcessList
    *  **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getPrivilegedProcessList()
    {
        return $this->container['privilegedProcessList'];
    }

    /**
    * Sets privilegedProcessList
    *
    * @param string[]|null $privilegedProcessList **参数解释**: 特权进程路径列表 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: 最少0条，最多10条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPrivilegedProcessList($privilegedProcessList)
    {
        $this->container['privilegedProcessList'] = $privilegedProcessList;
        return $this;
    }

    /**
    * Gets privilegedChild
    *  **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    *
    * @return bool|null
    */
    public function getPrivilegedChild()
    {
        return $this->container['privilegedChild'];
    }

    /**
    * Sets privilegedChild
    *
    * @param bool|null $privilegedChild **参数解释**: 特权进程的子进程是否仍享有特权 **约束限制**: monitor_process值为true时生效（不进行进程监控无法判断特权进程） **取值范围**: - true：特权进程的子进程依然是特权进程 - false：特权进程的子进程不再是特权进程  **默认取值**: false
    *
    * @return $this
    */
    public function setPrivilegedChild($privilegedChild)
    {
        $this->container['privilegedChild'] = $privilegedChild;
        return $this;
    }

    /**
    * Gets containerWtpInfo
    *  containerWtpInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateWebTamperProtectionConfigRequestBodyContainerWtpInfo|null
    */
    public function getContainerWtpInfo()
    {
        return $this->container['containerWtpInfo'];
    }

    /**
    * Sets containerWtpInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateWebTamperProtectionConfigRequestBodyContainerWtpInfo|null $containerWtpInfo containerWtpInfo
    *
    * @return $this
    */
    public function setContainerWtpInfo($containerWtpInfo)
    {
        $this->container['containerWtpInfo'] = $containerWtpInfo;
        return $this;
    }

    /**
    * Gets openProtectionImmediately
    *  **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    *
    * @return bool|null
    */
    public function getOpenProtectionImmediately()
    {
        return $this->container['openProtectionImmediately'];
    }

    /**
    * Sets openProtectionImmediately
    *
    * @param bool|null $openProtectionImmediately **参数解释**: 是否立即开启防护 **约束限制**: 不涉及 **取值范围**: - true：立即开启防护 - false：只保存配置内容，暂不开启防护  **默认取值**: false
    *
    * @return $this
    */
    public function setOpenProtectionImmediately($openProtectionImmediately)
    {
        $this->container['openProtectionImmediately'] = $openProtectionImmediately;
        return $this;
    }

    /**
    * Gets quotaInfo
    *  quotaInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateWebTamperProtectionConfigRequestBodyQuotaInfo|null
    */
    public function getQuotaInfo()
    {
        return $this->container['quotaInfo'];
    }

    /**
    * Sets quotaInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateWebTamperProtectionConfigRequestBodyQuotaInfo|null $quotaInfo quotaInfo
    *
    * @return $this
    */
    public function setQuotaInfo($quotaInfo)
    {
        $this->container['quotaInfo'] = $quotaInfo;
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

