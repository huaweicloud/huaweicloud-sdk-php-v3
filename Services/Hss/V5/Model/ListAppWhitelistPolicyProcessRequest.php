<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAppWhitelistPolicyProcessRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAppWhitelistPolicyProcessRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * policyId  **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * processStatus  **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    * processName  **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processHash  **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processPath  **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * handleStatus  **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    * osType  操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    * fileSigner  **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'policyId' => 'string',
            'processStatus' => 'string',
            'processType' => 'string',
            'processName' => 'string',
            'processHash' => 'string',
            'processPath' => 'string',
            'handleStatus' => 'string',
            'osType' => 'string',
            'fileSigner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * policyId  **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * processStatus  **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    * processName  **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processHash  **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processPath  **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * handleStatus  **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    * osType  操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    * fileSigner  **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'policyId' => null,
        'processStatus' => null,
        'processType' => null,
        'processName' => null,
        'processHash' => null,
        'processPath' => null,
        'handleStatus' => null,
        'osType' => null,
        'fileSigner' => null
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
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * policyId  **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * processStatus  **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    * processName  **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processHash  **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processPath  **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * handleStatus  **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    * osType  操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    * fileSigner  **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'policyId' => 'policy_id',
            'processStatus' => 'process_status',
            'processType' => 'process_type',
            'processName' => 'process_name',
            'processHash' => 'process_hash',
            'processPath' => 'process_path',
            'handleStatus' => 'handle_status',
            'osType' => 'os_type',
            'fileSigner' => 'file_signer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * policyId  **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * processStatus  **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    * processName  **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processHash  **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processPath  **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * handleStatus  **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    * osType  操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    * fileSigner  **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'policyId' => 'setPolicyId',
            'processStatus' => 'setProcessStatus',
            'processType' => 'setProcessType',
            'processName' => 'setProcessName',
            'processHash' => 'setProcessHash',
            'processPath' => 'setProcessPath',
            'handleStatus' => 'setHandleStatus',
            'osType' => 'setOsType',
            'fileSigner' => 'setFileSigner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * policyId  **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * processStatus  **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    * processType  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    * processName  **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processHash  **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * processPath  **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * handleStatus  **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    * osType  操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    * fileSigner  **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'policyId' => 'getPolicyId',
            'processStatus' => 'getProcessStatus',
            'processType' => 'getProcessType',
            'processName' => 'getProcessName',
            'processHash' => 'getProcessHash',
            'processPath' => 'getProcessPath',
            'handleStatus' => 'getHandleStatus',
            'osType' => 'getOsType',
            'fileSigner' => 'getFileSigner'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
        $this->container['processType'] = isset($data['processType']) ? $data['processType'] : null;
        $this->container['processName'] = isset($data['processName']) ? $data['processName'] : null;
        $this->container['processHash'] = isset($data['processHash']) ? $data['processHash'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['fileSigner'] = isset($data['fileSigner']) ? $data['fileSigner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
            if ((mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['processStatus']) && (mb_strlen($this->container['processStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'processStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processType']) && (mb_strlen($this->container['processType']) > 32)) {
                $invalidProperties[] = "invalid value for 'processType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['processType']) && (mb_strlen($this->container['processType']) < 1)) {
                $invalidProperties[] = "invalid value for 'processType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) > 128)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processName']) && (mb_strlen($this->container['processName']) < 1)) {
                $invalidProperties[] = "invalid value for 'processName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processName']) && !preg_match("/^.*$/", $this->container['processName'])) {
                $invalidProperties[] = "invalid value for 'processName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processHash']) && (mb_strlen($this->container['processHash']) > 128)) {
                $invalidProperties[] = "invalid value for 'processHash', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['processHash']) && (mb_strlen($this->container['processHash']) < 1)) {
                $invalidProperties[] = "invalid value for 'processHash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processHash']) && !preg_match("/^.*$/", $this->container['processHash'])) {
                $invalidProperties[] = "invalid value for 'processHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['processPath']) && !preg_match("/^.*$/", $this->container['processPath'])) {
                $invalidProperties[] = "invalid value for 'processPath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 10)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileSigner']) && (mb_strlen($this->container['fileSigner']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileSigner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileSigner']) && (mb_strlen($this->container['fileSigner']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileSigner', the character length must be bigger than or equal to 1.";
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
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
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
    * @param string $policyId **参数解释**： 策略ID **约束限制**： 必填 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets processStatus
    *  **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param string|null $processStatus **参数解释**： 信任状态 **约束限制**: 不涉及 **取值范围**: - trust：可信 - suspicious：可疑 - malicious：未知 - unknown：未知  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
        return $this;
    }

    /**
    * Gets processType
    *  **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getProcessType()
    {
        return $this->container['processType'];
    }

    /**
    * Sets processType
    *
    * @param string|null $processType **参数解释**： 进程类型 **约束限制**: 不涉及 **取值范围**: - system：系统程序 - interpretive：解释类程序 - normal：普通可执行程序  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProcessType($processType)
    {
        $this->container['processType'] = $processType;
        return $this;
    }

    /**
    * Gets processName
    *  **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getProcessName()
    {
        return $this->container['processName'];
    }

    /**
    * Sets processName
    *
    * @param string|null $processName **参数解释**： 进程名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProcessName($processName)
    {
        $this->container['processName'] = $processName;
        return $this;
    }

    /**
    * Gets processHash
    *  **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getProcessHash()
    {
        return $this->container['processHash'];
    }

    /**
    * Sets processHash
    *
    * @param string|null $processHash **参数解释**： 进程hash **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProcessHash($processHash)
    {
        $this->container['processHash'] = $processHash;
        return $this;
    }

    /**
    * Gets processPath
    *  **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getProcessPath()
    {
        return $this->container['processPath'];
    }

    /**
    * Sets processPath
    *
    * @param string|null $processPath **参数解释**： 进程路径 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**： 确认状态 **约束限制**: 不涉及 **取值范围**: - confirmed：已确认 - unconfirmed：未确认  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，包含如下2种。   - Linux：Linux。   - Windows：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets fileSigner
    *  **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getFileSigner()
    {
        return $this->container['fileSigner'];
    }

    /**
    * Sets fileSigner
    *
    * @param string|null $fileSigner **参数解释**： 文件签名 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFileSigner($fileSigner)
    {
        $this->container['fileSigner'] = $fileSigner;
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

