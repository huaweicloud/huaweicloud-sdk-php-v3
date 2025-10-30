<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddProtectionPolicyInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddProtectionPolicyInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * deployMode  是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'protectionMode' => 'string',
            'deployMode' => 'string',
            'protectionDirectory' => 'string',
            'protectionType' => 'string',
            'excludeDirectory' => 'string',
            'operatingSystem' => 'string',
            'processWhitelist' => '\HuaweiCloud\SDK\Hss\V5\Model\TrustProcessInfo[]',
            'aiProtectionStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * deployMode  是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'protectionMode' => null,
        'deployMode' => null,
        'protectionDirectory' => null,
        'protectionType' => null,
        'excludeDirectory' => null,
        'operatingSystem' => null,
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
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * deployMode  是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'protectionMode' => 'protection_mode',
            'deployMode' => 'deploy_mode',
            'protectionDirectory' => 'protection_directory',
            'protectionType' => 'protection_type',
            'excludeDirectory' => 'exclude_directory',
            'operatingSystem' => 'operating_system',
            'processWhitelist' => 'process_whitelist',
            'aiProtectionStatus' => 'ai_protection_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * deployMode  是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'protectionMode' => 'setProtectionMode',
            'deployMode' => 'setDeployMode',
            'protectionDirectory' => 'setProtectionDirectory',
            'protectionType' => 'setProtectionType',
            'excludeDirectory' => 'setExcludeDirectory',
            'operatingSystem' => 'setOperatingSystem',
            'processWhitelist' => 'setProcessWhitelist',
            'aiProtectionStatus' => 'setAiProtectionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * protectionMode  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    * deployMode  是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
    * protectionDirectory  防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
    * protectionType  **参数解释**: 需要防护的文件类型 **约束限制**: 不涉及 **取值范围**: txt、csv、rtf、doc、docx、xls、xlsx、ppt、pptx、pdf、xml、json、sql、mdf、dbf、ldf、db、myd、wdb、si、cfs、cfe、fnm、fdx、fdt、tvx、tvf、tvd、tim、nvd、nvm、dvd、dvm、jpeg、bmp、gif、png、tiff、eps、mp3、mp4、avi、mpg、wmv、RMVB、mov、3pg、swf、flv、rar、gz、tgz、zip、7z、cpp、c、java、asp、php、python、html、js、vdi、vmdk、vdx、ovf、qcow2、vmem、vswp、img、bak、back、cer、crt、pem、key、csr **默认取值**: 不涉及
    * excludeDirectory  排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
    * operatingSystem  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    * processWhitelist  进程白名单
    * aiProtectionStatus  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'protectionMode' => 'getProtectionMode',
            'deployMode' => 'getDeployMode',
            'protectionDirectory' => 'getProtectionDirectory',
            'protectionType' => 'getProtectionType',
            'excludeDirectory' => 'getExcludeDirectory',
            'operatingSystem' => 'getOperatingSystem',
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['protectionMode'] = isset($data['protectionMode']) ? $data['protectionMode'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['protectionDirectory'] = isset($data['protectionDirectory']) ? $data['protectionDirectory'] : null;
        $this->container['protectionType'] = isset($data['protectionType']) ? $data['protectionType'] : null;
        $this->container['excludeDirectory'] = isset($data['excludeDirectory']) ? $data['excludeDirectory'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
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
            if (!is_null($this->container['aiProtectionStatus']) && (mb_strlen($this->container['aiProtectionStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'aiProtectionStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aiProtectionStatus']) && (mb_strlen($this->container['aiProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'aiProtectionStatus', the character length must be bigger than or equal to 0.";
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
    * Gets policyName
    *  策略名称
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
    * @param string $policyName 策略名称
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
    *  防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
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
    * @param string $protectionMode 防护动作，包含如下2种。   - alarm_and_isolation ：告警并自动隔离。   - alarm_only ：仅告警。
    *
    * @return $this
    */
    public function setProtectionMode($protectionMode)
    {
        $this->container['protectionMode'] = $protectionMode;
        return $this;
    }

    /**
    * Gets deployMode
    *  是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
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
    * @param string|null $deployMode 是否开启动态诱饵，包含如下2种，默认为关闭防护动态诱饵防护。   - opened ：开启。   - closed ：关闭。
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
    *  防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
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
    * @param string $protectionDirectory 防护目录，多个目录请用英文分号隔开，最多支持填写20个防护目录
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
    *  排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
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
    * @param string|null $excludeDirectory 排除目录(选填)，多个目录请用英文分号隔开，最多支持填写20个排除目录
    *
    * @return $this
    */
    public function setExcludeDirectory($excludeDirectory)
    {
        $this->container['excludeDirectory'] = $excludeDirectory;
        return $this;
    }

    /**
    * Gets operatingSystem
    *  操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
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
    * @param string $operatingSystem 操作系统，包含如下：   - Windows : Windows系统   - Linux : Linux系统
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
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
    *  **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
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
    * @param string|null $aiProtectionStatus **参数解释**: 是否开启AI勒索防护 **约束限制**: 不涉及 **取值范围**: 包含两种：   - opened ：开启。   - closed ：关闭。 **默认取值**: closed
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

