<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * accountId  **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    * organizationId  **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    * projectId  **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    * projectName  **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    * hostNum  **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
    * vulnerabilityNum  **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * baselineNum  **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * intrusionNum  **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'accountId' => 'string',
            'organizationId' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'hostNum' => 'int',
            'vulnerabilityNum' => 'int',
            'baselineNum' => 'int',
            'intrusionNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * accountId  **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    * organizationId  **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    * projectId  **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    * projectName  **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    * hostNum  **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
    * vulnerabilityNum  **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * baselineNum  **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * intrusionNum  **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'accountId' => null,
        'organizationId' => null,
        'projectId' => null,
        'projectName' => null,
        'hostNum' => 'int32',
        'vulnerabilityNum' => 'int32',
        'baselineNum' => 'int32',
        'intrusionNum' => 'int32'
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
    * accountName  **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * accountId  **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    * organizationId  **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    * projectId  **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    * projectName  **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    * hostNum  **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
    * vulnerabilityNum  **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * baselineNum  **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * intrusionNum  **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'accountId' => 'account_id',
            'organizationId' => 'organization_id',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'hostNum' => 'host_num',
            'vulnerabilityNum' => 'vulnerability_num',
            'baselineNum' => 'baseline_num',
            'intrusionNum' => 'intrusion_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * accountId  **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    * organizationId  **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    * projectId  **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    * projectName  **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    * hostNum  **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
    * vulnerabilityNum  **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * baselineNum  **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * intrusionNum  **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'accountId' => 'setAccountId',
            'organizationId' => 'setOrganizationId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'hostNum' => 'setHostNum',
            'vulnerabilityNum' => 'setVulnerabilityNum',
            'baselineNum' => 'setBaselineNum',
            'intrusionNum' => 'setIntrusionNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    * accountId  **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    * organizationId  **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    * projectId  **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    * projectName  **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    * hostNum  **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
    * vulnerabilityNum  **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * baselineNum  **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    * intrusionNum  **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'accountId' => 'getAccountId',
            'organizationId' => 'getOrganizationId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'hostNum' => 'getHostNum',
            'vulnerabilityNum' => 'getVulnerabilityNum',
            'baselineNum' => 'getBaselineNum',
            'intrusionNum' => 'getIntrusionNum'
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['vulnerabilityNum'] = isset($data['vulnerabilityNum']) ? $data['vulnerabilityNum'] : null;
        $this->container['baselineNum'] = isset($data['baselineNum']) ? $data['baselineNum'] : null;
        $this->container['intrusionNum'] = isset($data['intrusionNum']) ? $data['intrusionNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountName']) && !preg_match("/^.*$/", $this->container['accountName'])) {
                $invalidProperties[] = "invalid value for 'accountName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountId']) && !preg_match("/^.*$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['organizationId']) && (mb_strlen($this->container['organizationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organizationId']) && (mb_strlen($this->container['organizationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationId']) && !preg_match("/^.*$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^.*$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && !preg_match("/^.*$/", $this->container['projectName'])) {
                $invalidProperties[] = "invalid value for 'projectName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnerabilityNum']) && ($this->container['vulnerabilityNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulnerabilityNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulnerabilityNum']) && ($this->container['vulnerabilityNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulnerabilityNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baselineNum']) && ($this->container['baselineNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'baselineNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['baselineNum']) && ($this->container['baselineNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'baselineNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intrusionNum']) && ($this->container['intrusionNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'intrusionNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['intrusionNum']) && ($this->container['intrusionNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'intrusionNum', must be bigger than or equal to 0.";
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
    * Gets accountName
    *  **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName **参数解释**: 账号的唯一名称，用于标识账号身份； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线，不能以特殊字符开头或结尾
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets accountId
    *  **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId **参数解释**: 账号的唯一标识ID，用于唯一确定某个账号； **取值范围**: 字符长度1-64位，符合平台账号ID命名规范（如UUID或数字组合）
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets organizationId
    *  **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId **参数解释**: 账号所属组织的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台组织ID命名规范
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**: 账号所属项目的唯一标识ID； **取值范围**: 字符长度1-64位，符合平台项目ID命名规范；
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释**: 账号所属项目的名称，用于直观标识项目； **取值范围**: 字符长度1-64位，支持字母、数字、连字符、下划线及中文，无复杂度额外要求
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
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
    * @param int|null $hostNum **参数解释**: 当前账号下已关联的主机总数量； **取值范围**: 非负整数，最小值0，最大值取决于平台资源配额；单位：台
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets vulnerabilityNum
    *  **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    *
    * @return int|null
    */
    public function getVulnerabilityNum()
    {
        return $this->container['vulnerabilityNum'];
    }

    /**
    * Sets vulnerabilityNum
    *
    * @param int|null $vulnerabilityNum **参数解释**: 当前账号下主机存在的漏洞风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    *
    * @return $this
    */
    public function setVulnerabilityNum($vulnerabilityNum)
    {
        $this->container['vulnerabilityNum'] = $vulnerabilityNum;
        return $this;
    }

    /**
    * Gets baselineNum
    *  **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    *
    * @return int|null
    */
    public function getBaselineNum()
    {
        return $this->container['baselineNum'];
    }

    /**
    * Sets baselineNum
    *
    * @param int|null $baselineNum **参数解释**: 当前账号下主机基线检测未通过的风险总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：个
    *
    * @return $this
    */
    public function setBaselineNum($baselineNum)
    {
        $this->container['baselineNum'] = $baselineNum;
        return $this;
    }

    /**
    * Gets intrusionNum
    *  **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @return int|null
    */
    public function getIntrusionNum()
    {
        return $this->container['intrusionNum'];
    }

    /**
    * Sets intrusionNum
    *
    * @param int|null $intrusionNum **参数解释**: 当前账号下主机发生的安全入侵告警总数量； **取值范围**: 非负整数，取值范围0-2147483647；单位：条
    *
    * @return $this
    */
    public function setIntrusionNum($intrusionNum)
    {
        $this->container['intrusionNum'] = $intrusionNum;
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

