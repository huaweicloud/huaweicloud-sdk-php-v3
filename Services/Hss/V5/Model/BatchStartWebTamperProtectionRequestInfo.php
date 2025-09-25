<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchStartWebTamperProtectionRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchStartWebTamperProtectionRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIdList  **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    * tags  **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
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
            'hostIdList' => 'string[]',
            'chargingMode' => 'string',
            'resourceId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]',
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
    * hostIdList  **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    * tags  **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
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
        'hostIdList' => null,
        'chargingMode' => null,
        'resourceId' => null,
        'tags' => null,
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
    * hostIdList  **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    * tags  **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
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
            'hostIdList' => 'host_id_list',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'tags' => 'tags',
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
    * hostIdList  **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    * tags  **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
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
            'hostIdList' => 'setHostIdList',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'tags' => 'setTags',
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
    * hostIdList  **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    * chargingMode  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    * resourceId  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    * tags  **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
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
            'hostIdList' => 'getHostIdList',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'tags' => 'getTags',
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
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
        }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
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
    * Gets hostIdList
    *  **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList **参数解释**: 需要开启防护的服务器ID列表，仅支持填写未开启网页防篡改防护的服务器ID，已开启网页防篡改防护的服务器可使用UpdateWebTamperHostPolicy接口进行修改策略。 **约束限制** : 仅支持填写未开启网页防篡改防护的服务器ID，且Linux服务器和Windows服务器不可同时填写，需分批开启。 **取值范围**: 最少1条，最多20000条 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**: 计费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle: 包年/包月，可填写resource_id。 - on_demand: 按需计费，无需填写resource_id。  **默认取值**: on_demand
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**: 资源ID，即网页防篡改配额的配额ID，当charging_mode选择packet_cycle时可填写该字段，表示使用一个指定配额，也可不填写该字段，表示随机选择符合的配额。 **约束限制** : 不涉及 **取值范围**: 字符长度0-64位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TagInfo[]|null $tags **参数解释**： 资源标签列表，仅计费模式选择按需计费时支持填写。 **约束限制**: 仅计费模式选择按需计费时支持填写。 **取值范围**: 最少0条，最多2097152条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
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

