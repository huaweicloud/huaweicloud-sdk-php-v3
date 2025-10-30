<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateProtectionPolicyInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateProtectionPolicyInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * protectionMode  **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    * baitProtectionStatus  **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    * deployMode  **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    * protectionDirectory  **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * agentIdList  **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    * operatingSystem  **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * runtimeDetectionStatus  **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'protectionMode' => 'string',
            'baitProtectionStatus' => 'string',
            'deployMode' => 'string',
            'protectionDirectory' => 'string',
            'protectionType' => 'string',
            'excludeDirectory' => 'string',
            'agentIdList' => 'string[]',
            'operatingSystem' => 'string',
            'runtimeDetectionStatus' => 'string',
            'processWhitelist' => '\HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]',
            'aiProtectionStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * protectionMode  **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    * baitProtectionStatus  **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    * deployMode  **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    * protectionDirectory  **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * agentIdList  **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    * operatingSystem  **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * runtimeDetectionStatus  **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'protectionMode' => null,
        'baitProtectionStatus' => null,
        'deployMode' => null,
        'protectionDirectory' => null,
        'protectionType' => null,
        'excludeDirectory' => null,
        'agentIdList' => null,
        'operatingSystem' => null,
        'runtimeDetectionStatus' => null,
        'processWhitelist' => null,
        'aiProtectionStatus' => null
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
    * policyId  **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * protectionMode  **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    * baitProtectionStatus  **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    * deployMode  **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    * protectionDirectory  **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * agentIdList  **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    * operatingSystem  **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * runtimeDetectionStatus  **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'protectionMode' => 'protection_mode',
            'baitProtectionStatus' => 'bait_protection_status',
            'deployMode' => 'deploy_mode',
            'protectionDirectory' => 'protection_directory',
            'protectionType' => 'protection_type',
            'excludeDirectory' => 'exclude_directory',
            'agentIdList' => 'agent_id_list',
            'operatingSystem' => 'operating_system',
            'runtimeDetectionStatus' => 'runtime_detection_status',
            'processWhitelist' => 'process_whitelist',
            'aiProtectionStatus' => 'ai_protection_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * protectionMode  **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    * baitProtectionStatus  **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    * deployMode  **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    * protectionDirectory  **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * agentIdList  **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    * operatingSystem  **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * runtimeDetectionStatus  **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'protectionMode' => 'setProtectionMode',
            'baitProtectionStatus' => 'setBaitProtectionStatus',
            'deployMode' => 'setDeployMode',
            'protectionDirectory' => 'setProtectionDirectory',
            'protectionType' => 'setProtectionType',
            'excludeDirectory' => 'setExcludeDirectory',
            'agentIdList' => 'setAgentIdList',
            'operatingSystem' => 'setOperatingSystem',
            'runtimeDetectionStatus' => 'setRuntimeDetectionStatus',
            'processWhitelist' => 'setProcessWhitelist',
            'aiProtectionStatus' => 'setAiProtectionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * protectionMode  **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    * baitProtectionStatus  **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    * deployMode  **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    * protectionDirectory  **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    * agentIdList  **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    * operatingSystem  **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * runtimeDetectionStatus  **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'protectionMode' => 'getProtectionMode',
            'baitProtectionStatus' => 'getBaitProtectionStatus',
            'deployMode' => 'getDeployMode',
            'protectionDirectory' => 'getProtectionDirectory',
            'protectionType' => 'getProtectionType',
            'excludeDirectory' => 'getExcludeDirectory',
            'agentIdList' => 'getAgentIdList',
            'operatingSystem' => 'getOperatingSystem',
            'runtimeDetectionStatus' => 'getRuntimeDetectionStatus',
            'processWhitelist' => 'getProcessWhitelist',
            'aiProtectionStatus' => 'getAiProtectionStatus'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['protectionMode'] = isset($data['protectionMode']) ? $data['protectionMode'] : null;
        $this->container['baitProtectionStatus'] = isset($data['baitProtectionStatus']) ? $data['baitProtectionStatus'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['protectionDirectory'] = isset($data['protectionDirectory']) ? $data['protectionDirectory'] : null;
        $this->container['protectionType'] = isset($data['protectionType']) ? $data['protectionType'] : null;
        $this->container['excludeDirectory'] = isset($data['excludeDirectory']) ? $data['excludeDirectory'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->container['runtimeDetectionStatus'] = isset($data['runtimeDetectionStatus']) ? $data['runtimeDetectionStatus'] : null;
        $this->container['processWhitelist'] = isset($data['processWhitelist']) ? $data['processWhitelist'] : null;
        $this->container['aiProtectionStatus'] = isset($data['aiProtectionStatus']) ? $data['aiProtectionStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectionMode'] === null) {
            $invalidProperties[] = "'protectionMode' can't be null";
        }
            if ((mb_strlen($this->container['protectionMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectionMode', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['protectionMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baitProtectionStatus']) && (mb_strlen($this->container['baitProtectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'baitProtectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['baitProtectionStatus']) && (mb_strlen($this->container['baitProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'baitProtectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deployMode']) && (mb_strlen($this->container['deployMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'deployMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['deployMode']) && (mb_strlen($this->container['deployMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'deployMode', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectionDirectory'] === null) {
            $invalidProperties[] = "'protectionDirectory' can't be null";
        }
            if ((mb_strlen($this->container['protectionDirectory']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectionDirectory', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['protectionDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectionDirectory', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['protectionType'] === null) {
            $invalidProperties[] = "'protectionType' can't be null";
        }
            if ((mb_strlen($this->container['protectionType']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectionType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['protectionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectionType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['excludeDirectory']) && (mb_strlen($this->container['excludeDirectory']) > 128)) {
                $invalidProperties[] = "invalid value for 'excludeDirectory', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['excludeDirectory']) && (mb_strlen($this->container['excludeDirectory']) < 1)) {
                $invalidProperties[] = "invalid value for 'excludeDirectory', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['operatingSystem'] === null) {
            $invalidProperties[] = "'operatingSystem' can't be null";
        }
            if ((mb_strlen($this->container['operatingSystem']) > 64)) {
                $invalidProperties[] = "invalid value for 'operatingSystem', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['operatingSystem']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatingSystem', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runtimeDetectionStatus']) && (mb_strlen($this->container['runtimeDetectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeDetectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeDetectionStatus']) && (mb_strlen($this->container['runtimeDetectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'runtimeDetectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aiProtectionStatus']) && !preg_match("/^closed|opened$/", $this->container['aiProtectionStatus'])) {
                $invalidProperties[] = "invalid value for 'aiProtectionStatus', must be conform to the pattern /^closed|opened$/.";
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
    * Gets policyId
    *  **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId **参数解释**: 需要修改的防护策略ID，您可以通过[查询勒索病毒的防护策略列表](ListProtectionPolicy.xml)接口获取ID。 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets protectionMode
    *  **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getProtectionMode()
    {
        return $this->container['protectionMode'];
    }

    /**
    * Sets protectionMode
    *
    * @param string $protectionMode **参数解释**: 防护动作 **约束限制**: 不涉及 **取值范围**: 包含两种：   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectionMode($protectionMode)
    {
        $this->container['protectionMode'] = $protectionMode;
        return $this;
    }

    /**
    * Gets baitProtectionStatus
    *  **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getBaitProtectionStatus()
    {
        return $this->container['baitProtectionStatus'];
    }

    /**
    * Sets baitProtectionStatus
    *
    * @param string|null $baitProtectionStatus **参数解释**: 是否开启诱饵防护 **约束限制**: 不涉及 **取值范围**:   - opened ：开启。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBaitProtectionStatus($baitProtectionStatus)
    {
        $this->container['baitProtectionStatus'] = $baitProtectionStatus;
        return $this;
    }

    /**
    * Gets deployMode
    *  **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @return string|null
    */
    public function getDeployMode()
    {
        return $this->container['deployMode'];
    }

    /**
    * Sets deployMode
    *
    * @param string|null $deployMode **参数解释**: 是否开启动态诱饵 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @return $this
    */
    public function setDeployMode($deployMode)
    {
        $this->container['deployMode'] = $deployMode;
        return $this;
    }

    /**
    * Gets protectionDirectory
    *  **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getProtectionDirectory()
    {
        return $this->container['protectionDirectory'];
    }

    /**
    * Sets protectionDirectory
    *
    * @param string $protectionDirectory **参数解释**: 防护目录 **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个防护目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectionDirectory($protectionDirectory)
    {
        $this->container['protectionDirectory'] = $protectionDirectory;
        return $this;
    }

    /**
    * Gets protectionType
    *  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    *
    * @return string
    */
    public function getProtectionType()
    {
        return $this->container['protectionType'];
    }

    /**
    * Sets protectionType
    *
    * @param string $protectionType **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectionType($protectionType)
    {
        $this->container['protectionType'] = $protectionType;
        return $this;
    }

    /**
    * Gets excludeDirectory
    *  **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getExcludeDirectory()
    {
        return $this->container['excludeDirectory'];
    }

    /**
    * Sets excludeDirectory
    *
    * @param string|null $excludeDirectory **参数解释**: 排除目录(选填) **约束限制**: 多个目录请用英文分号隔开，最多支持填写20个排除目录 **取值范围**: 字符长度0-128位，特殊符号只允许使用._-+，不能以空格开头，防护目录长度不得超过256个字符。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExcludeDirectory($excludeDirectory)
    {
        $this->container['excludeDirectory'] = $excludeDirectory;
        return $this;
    }

    /**
    * Gets agentIdList
    *  **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[]|null $agentIdList **参数解释**: 开启了此勒索防护策略的agent的id列表 **约束限制**: 不涉及 **取值范围**: 列表最大1000条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets operatingSystem
    *  **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
    * Sets operatingSystem
    *
    * @param string $operatingSystem **参数解释**: 支持该策略的操作系统 **约束限制**: 不涉及 **取值范围**: 包含两种：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
        return $this;
    }

    /**
    * Gets runtimeDetectionStatus
    *  **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRuntimeDetectionStatus()
    {
        return $this->container['runtimeDetectionStatus'];
    }

    /**
    * Sets runtimeDetectionStatus
    *
    * @param string|null $runtimeDetectionStatus **参数解释**: 是否运行时检测 **约束限制**: 不涉及 **取值范围**: 包含如下2种，暂时只有关闭一种状态，为保留字段。   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRuntimeDetectionStatus($runtimeDetectionStatus)
    {
        $this->container['runtimeDetectionStatus'] = $runtimeDetectionStatus;
        return $this;
    }

    /**
    * Gets processWhitelist
    *  进程白名单
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]|null
    */
    public function getProcessWhitelist()
    {
        return $this->container['processWhitelist'];
    }

    /**
    * Sets processWhitelist
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]|null $processWhitelist 进程白名单
    *
    * @return $this
    */
    public function setProcessWhitelist($processWhitelist)
    {
        $this->container['processWhitelist'] = $processWhitelist;
        return $this;
    }

    /**
    * Gets aiProtectionStatus
    *  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAiProtectionStatus()
    {
        return $this->container['aiProtectionStatus'];
    }

    /**
    * Sets aiProtectionStatus
    *
    * @param string|null $aiProtectionStatus **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAiProtectionStatus($aiProtectionStatus)
    {
        $this->container['aiProtectionStatus'] = $aiProtectionStatus;
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

