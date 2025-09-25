<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportSecurityCheckInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportSecurityCheckInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * standard  基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * executableFilePath  配置检查（基线）的路径信息
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * scanResult  检测结果  - pass - failed
    * status  状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    * checkRuleDesc  规则描述
    * audit  审计描述
    * remediation  修改建议
    * checkInfoList  检测用例信息
    * createTime  首次扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'hostPublicIp' => 'string',
            'hostPrivateIp' => 'string',
            'checkType' => 'string',
            'checkName' => 'string',
            'standard' => 'string',
            'checkRuleName' => 'string',
            'executableFilePath' => 'string',
            'severity' => 'string',
            'scanResult' => 'string',
            'status' => 'string',
            'checkRuleDesc' => 'string',
            'audit' => 'string',
            'remediation' => 'string',
            'checkInfoList' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * standard  基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * executableFilePath  配置检查（基线）的路径信息
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * scanResult  检测结果  - pass - failed
    * status  状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    * checkRuleDesc  规则描述
    * audit  审计描述
    * remediation  修改建议
    * checkInfoList  检测用例信息
    * createTime  首次扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'hostPublicIp' => null,
        'hostPrivateIp' => null,
        'checkType' => null,
        'checkName' => null,
        'standard' => null,
        'checkRuleName' => null,
        'executableFilePath' => null,
        'severity' => null,
        'scanResult' => null,
        'status' => null,
        'checkRuleDesc' => null,
        'audit' => null,
        'remediation' => null,
        'checkInfoList' => null,
        'createTime' => 'int64'
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
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * standard  基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * executableFilePath  配置检查（基线）的路径信息
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * scanResult  检测结果  - pass - failed
    * status  状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    * checkRuleDesc  规则描述
    * audit  审计描述
    * remediation  修改建议
    * checkInfoList  检测用例信息
    * createTime  首次扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostPublicIp' => 'host_public_ip',
            'hostPrivateIp' => 'host_private_ip',
            'checkType' => 'check_type',
            'checkName' => 'check_name',
            'standard' => 'standard',
            'checkRuleName' => 'check_rule_name',
            'executableFilePath' => 'executable_file_path',
            'severity' => 'severity',
            'scanResult' => 'scan_result',
            'status' => 'status',
            'checkRuleDesc' => 'check_rule_desc',
            'audit' => 'audit',
            'remediation' => 'remediation',
            'checkInfoList' => 'check_info_list',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * standard  基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * executableFilePath  配置检查（基线）的路径信息
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * scanResult  检测结果  - pass - failed
    * status  状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    * checkRuleDesc  规则描述
    * audit  审计描述
    * remediation  修改建议
    * checkInfoList  检测用例信息
    * createTime  首次扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostPublicIp' => 'setHostPublicIp',
            'hostPrivateIp' => 'setHostPrivateIp',
            'checkType' => 'setCheckType',
            'checkName' => 'setCheckName',
            'standard' => 'setStandard',
            'checkRuleName' => 'setCheckRuleName',
            'executableFilePath' => 'setExecutableFilePath',
            'severity' => 'setSeverity',
            'scanResult' => 'setScanResult',
            'status' => 'setStatus',
            'checkRuleDesc' => 'setCheckRuleDesc',
            'audit' => 'setAudit',
            'remediation' => 'setRemediation',
            'checkInfoList' => 'setCheckInfoList',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * checkType  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    * checkName  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    * standard  基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
    * checkRuleName  检查项（检查规则）名称
    * executableFilePath  配置检查（基线）的路径信息
    * severity  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    * scanResult  检测结果  - pass - failed
    * status  状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    * checkRuleDesc  规则描述
    * audit  审计描述
    * remediation  修改建议
    * checkInfoList  检测用例信息
    * createTime  首次扫描时间，时间戳单位：毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostPublicIp' => 'getHostPublicIp',
            'hostPrivateIp' => 'getHostPrivateIp',
            'checkType' => 'getCheckType',
            'checkName' => 'getCheckName',
            'standard' => 'getStandard',
            'checkRuleName' => 'getCheckRuleName',
            'executableFilePath' => 'getExecutableFilePath',
            'severity' => 'getSeverity',
            'scanResult' => 'getScanResult',
            'status' => 'getStatus',
            'checkRuleDesc' => 'getCheckRuleDesc',
            'audit' => 'getAudit',
            'remediation' => 'getRemediation',
            'checkInfoList' => 'getCheckInfoList',
            'createTime' => 'getCreateTime'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostPublicIp'] = isset($data['hostPublicIp']) ? $data['hostPublicIp'] : null;
        $this->container['hostPrivateIp'] = isset($data['hostPrivateIp']) ? $data['hostPrivateIp'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['executableFilePath'] = isset($data['executableFilePath']) ? $data['executableFilePath'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['scanResult'] = isset($data['scanResult']) ? $data['scanResult'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['checkRuleDesc'] = isset($data['checkRuleDesc']) ? $data['checkRuleDesc'] : null;
        $this->container['audit'] = isset($data['audit']) ? $data['audit'] : null;
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['checkInfoList'] = isset($data['checkInfoList']) ? $data['checkInfoList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostPublicIp']) && (mb_strlen($this->container['hostPublicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostPublicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostPublicIp']) && (mb_strlen($this->container['hostPublicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPublicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostPrivateIp']) && (mb_strlen($this->container['hostPrivateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostPrivateIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostPrivateIp']) && (mb_strlen($this->container['hostPrivateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPrivateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 16)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executableFilePath']) && (mb_strlen($this->container['executableFilePath']) > 512)) {
                $invalidProperties[] = "invalid value for 'executableFilePath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['executableFilePath']) && (mb_strlen($this->container['executableFilePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'executableFilePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) > 65534)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleDesc']) && (mb_strlen($this->container['checkRuleDesc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'checkRuleDesc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['checkRuleDesc']) && (mb_strlen($this->container['checkRuleDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audit']) && (mb_strlen($this->container['audit']) > 65534)) {
                $invalidProperties[] = "invalid value for 'audit', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['audit']) && (mb_strlen($this->container['audit']) < 0)) {
                $invalidProperties[] = "invalid value for 'audit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) > 65534)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) < 0)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkInfoList']) && (mb_strlen($this->container['checkInfoList']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkInfoList', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkInfoList']) && (mb_strlen($this->container['checkInfoList']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkInfoList', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets hostId
    *  服务器ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostPublicIp
    *  服务器公网IP
    *
    * @return string|null
    */
    public function getHostPublicIp()
    {
        return $this->container['hostPublicIp'];
    }

    /**
    * Sets hostPublicIp
    *
    * @param string|null $hostPublicIp 服务器公网IP
    *
    * @return $this
    */
    public function setHostPublicIp($hostPublicIp)
    {
        $this->container['hostPublicIp'] = $hostPublicIp;
        return $this;
    }

    /**
    * Gets hostPrivateIp
    *  服务器私网IP
    *
    * @return string|null
    */
    public function getHostPrivateIp()
    {
        return $this->container['hostPrivateIp'];
    }

    /**
    * Sets hostPrivateIp
    *
    * @param string|null $hostPrivateIp 服务器私网IP
    *
    * @return $this
    */
    public function setHostPrivateIp($hostPrivateIp)
    {
        $this->container['hostPrivateIp'] = $hostPrivateIp;
        return $this;
    }

    /**
    * Gets checkType
    *  配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
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
    * @param string|null $checkType 配置检查（基线）的类型,Linux系统支持的基线一般check_type和check_name相同,例如SSH、CentOS 7。 Windows系统支持的基线一般check_type和check_name不相同，例如check_name为Windows的配置检查（基线），它的check_type包含Windows Server 2019 R2、Windows Server 2016 R2等。
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets checkName
    *  配置检查（基线）的名称，例如SSH、CentOS 7、Windows
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
    * @param string|null $checkName 配置检查（基线）的名称，例如SSH、CentOS 7、Windows
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets standard
    *  基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
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
    * @param string|null $standard 基线标准 - cn_standard#等保合规标准 - hw_standard#云安全实践标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  检查项（检查规则）名称
    *
    * @return string|null
    */
    public function getCheckRuleName()
    {
        return $this->container['checkRuleName'];
    }

    /**
    * Sets checkRuleName
    *
    * @param string|null $checkRuleName 检查项（检查规则）名称
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
        return $this;
    }

    /**
    * Gets executableFilePath
    *  配置检查（基线）的路径信息
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
    * @param string|null $executableFilePath 配置检查（基线）的路径信息
    *
    * @return $this
    */
    public function setExecutableFilePath($executableFilePath)
    {
        $this->container['executableFilePath'] = $executableFilePath;
        return $this;
    }

    /**
    * Gets severity
    *  风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
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
    * @param string|null $severity 风险等级，包含如下:   - Low : 低危   - Medium : 中危   - High : 高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets scanResult
    *  检测结果  - pass - failed
    *
    * @return string|null
    */
    public function getScanResult()
    {
        return $this->container['scanResult'];
    }

    /**
    * Sets scanResult
    *
    * @param string|null $scanResult 检测结果  - pass - failed
    *
    * @return $this
    */
    public function setScanResult($scanResult)
    {
        $this->container['scanResult'] = $scanResult;
        return $this;
    }

    /**
    * Gets status
    *  状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态  - safe : 无需处理 - ignored : 已忽略 - unhandled : 未处理
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets checkRuleDesc
    *  规则描述
    *
    * @return string|null
    */
    public function getCheckRuleDesc()
    {
        return $this->container['checkRuleDesc'];
    }

    /**
    * Sets checkRuleDesc
    *
    * @param string|null $checkRuleDesc 规则描述
    *
    * @return $this
    */
    public function setCheckRuleDesc($checkRuleDesc)
    {
        $this->container['checkRuleDesc'] = $checkRuleDesc;
        return $this;
    }

    /**
    * Gets audit
    *  审计描述
    *
    * @return string|null
    */
    public function getAudit()
    {
        return $this->container['audit'];
    }

    /**
    * Sets audit
    *
    * @param string|null $audit 审计描述
    *
    * @return $this
    */
    public function setAudit($audit)
    {
        $this->container['audit'] = $audit;
        return $this;
    }

    /**
    * Gets remediation
    *  修改建议
    *
    * @return string|null
    */
    public function getRemediation()
    {
        return $this->container['remediation'];
    }

    /**
    * Sets remediation
    *
    * @param string|null $remediation 修改建议
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets checkInfoList
    *  检测用例信息
    *
    * @return string|null
    */
    public function getCheckInfoList()
    {
        return $this->container['checkInfoList'];
    }

    /**
    * Sets checkInfoList
    *
    * @param string|null $checkInfoList 检测用例信息
    *
    * @return $this
    */
    public function setCheckInfoList($checkInfoList)
    {
        $this->container['checkInfoList'] = $checkInfoList;
        return $this;
    }

    /**
    * Gets createTime
    *  首次扫描时间，时间戳单位：毫秒
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 首次扫描时间，时间戳单位：毫秒
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

