<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    * checkType  **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    * executableFilePath  **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    * checkRuleNum  **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    * failedRuleNum  **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    * hostNum  **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    * scanTime  **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    * checkTypeDesc  **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'checkName' => 'string',
            'checkType' => 'string',
            'standard' => 'string',
            'executableFilePath' => 'string',
            'checkRuleNum' => 'int',
            'failedRuleNum' => 'int',
            'hostNum' => 'int',
            'scanTime' => 'int',
            'checkTypeDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    * checkType  **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    * executableFilePath  **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    * checkRuleNum  **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    * failedRuleNum  **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    * hostNum  **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    * scanTime  **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    * checkTypeDesc  **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'checkName' => null,
        'checkType' => null,
        'standard' => null,
        'executableFilePath' => null,
        'checkRuleNum' => 'int32',
        'failedRuleNum' => 'int32',
        'hostNum' => 'int32',
        'scanTime' => 'int64',
        'checkTypeDesc' => null
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
    * severity  **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    * checkType  **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    * executableFilePath  **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    * checkRuleNum  **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    * failedRuleNum  **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    * hostNum  **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    * scanTime  **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    * checkTypeDesc  **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'checkName' => 'check_name',
            'checkType' => 'check_type',
            'standard' => 'standard',
            'executableFilePath' => 'executable_file_path',
            'checkRuleNum' => 'check_rule_num',
            'failedRuleNum' => 'failed_rule_num',
            'hostNum' => 'host_num',
            'scanTime' => 'scan_time',
            'checkTypeDesc' => 'check_type_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    * checkType  **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    * executableFilePath  **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    * checkRuleNum  **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    * failedRuleNum  **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    * hostNum  **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    * scanTime  **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    * checkTypeDesc  **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'checkName' => 'setCheckName',
            'checkType' => 'setCheckType',
            'standard' => 'setStandard',
            'executableFilePath' => 'setExecutableFilePath',
            'checkRuleNum' => 'setCheckRuleNum',
            'failedRuleNum' => 'setFailedRuleNum',
            'hostNum' => 'setHostNum',
            'scanTime' => 'setScanTime',
            'checkTypeDesc' => 'setCheckTypeDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    * checkName  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    * checkType  **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    * standard  **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    * executableFilePath  **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    * checkRuleNum  **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    * failedRuleNum  **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    * hostNum  **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    * scanTime  **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    * checkTypeDesc  **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'checkName' => 'getCheckName',
            'checkType' => 'getCheckType',
            'standard' => 'getStandard',
            'executableFilePath' => 'getExecutableFilePath',
            'checkRuleNum' => 'getCheckRuleNum',
            'failedRuleNum' => 'getFailedRuleNum',
            'hostNum' => 'getHostNum',
            'scanTime' => 'getScanTime',
            'checkTypeDesc' => 'getCheckTypeDesc'
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['executableFilePath'] = isset($data['executableFilePath']) ? $data['executableFilePath'] : null;
        $this->container['checkRuleNum'] = isset($data['checkRuleNum']) ? $data['checkRuleNum'] : null;
        $this->container['failedRuleNum'] = isset($data['failedRuleNum']) ? $data['failedRuleNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['checkTypeDesc'] = isset($data['checkTypeDesc']) ? $data['checkTypeDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 16)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 1)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executableFilePath']) && (mb_strlen($this->container['executableFilePath']) > 512)) {
                $invalidProperties[] = "invalid value for 'executableFilePath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['executableFilePath']) && (mb_strlen($this->container['executableFilePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'executableFilePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['checkRuleNum']) && ($this->container['checkRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedRuleNum']) && ($this->container['failedRuleNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'failedRuleNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['failedRuleNum']) && ($this->container['failedRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkTypeDesc']) && (mb_strlen($this->container['checkTypeDesc']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkTypeDesc', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkTypeDesc']) && (mb_strlen($this->container['checkTypeDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkTypeDesc', the character length must be bigger than or equal to 0.";
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
    * Gets severity
    *  **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**: 风险等级 **取值范围**: - Low : 低危 - Medium : 中危 - High : 高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string|null $checkName **参数解释**: 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType **参数解释**: 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard **参数解释**: 标准类型 **取值范围**: - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets executableFilePath
    *  **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getExecutableFilePath()
    {
        return $this->container['executableFilePath'];
    }

    /**
    * Sets executableFilePath
    *
    * @param string|null $executableFilePath **参数解释**: 配置检查（基线）的路径信息 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setExecutableFilePath($executableFilePath)
    {
        $this->container['executableFilePath'] = $executableFilePath;
        return $this;
    }

    /**
    * Gets checkRuleNum
    *  **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getCheckRuleNum()
    {
        return $this->container['checkRuleNum'];
    }

    /**
    * Sets checkRuleNum
    *
    * @param int|null $checkRuleNum **参数解释**: 当前配置检查（基线）类型下，用户共检测了多少个检查项。例如标准类型为hw_standard的SSH基线，主机安全提供了17个检查项，但用户所有主机都只检测了SSH基线的其中5个检查项，check_rule_num就是5。用户有一台主机进行了全量检查项检测，check_rule_num就是17。 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCheckRuleNum($checkRuleNum)
    {
        $this->container['checkRuleNum'] = $checkRuleNum;
        return $this;
    }

    /**
    * Gets failedRuleNum
    *  **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getFailedRuleNum()
    {
        return $this->container['failedRuleNum'];
    }

    /**
    * Sets failedRuleNum
    *
    * @param int|null $failedRuleNum **参数解释**: 未通过的检查项数量，check_rule_num中只要有一台主机没通过某个检查项，这个检查项就会被计算在failed_rule_num中 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setFailedRuleNum($failedRuleNum)
    {
        $this->container['failedRuleNum'] = $failedRuleNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 受影响的服务器的数量，进行了当前基线检测的服务器数量 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**: 最新检测时间(ms) **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets checkTypeDesc
    *  **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getCheckTypeDesc()
    {
        return $this->container['checkTypeDesc'];
    }

    /**
    * Sets checkTypeDesc
    *
    * @param string|null $checkTypeDesc **参数解释**: 对配置检查（基线）类型的描述信息，概括当前基线包含的检查项是根据什么标准制定的，能够审计哪些方面的问题。 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCheckTypeDesc($checkTypeDesc)
    {
        $this->container['checkTypeDesc'] = $checkTypeDesc;
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

