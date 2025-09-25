<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportBaselineRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportBaselineRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    * exportSize  **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    * groupId  **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    * checkName  **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
    * standard  **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
    * scanResult  **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
    * severity  **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
    * hostId  **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置
    * exportHeaders  导出配置检测数据的表头信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'exportSize' => 'int',
            'groupId' => 'string',
            'checkName' => 'string',
            'standard' => 'string',
            'scanResult' => 'string',
            'severity' => 'string',
            'hostId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'exportHeaders' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    * exportSize  **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    * groupId  **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    * checkName  **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
    * standard  **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
    * scanResult  **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
    * severity  **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
    * hostId  **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置
    * exportHeaders  导出配置检测数据的表头信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'exportSize' => 'int32',
        'groupId' => null,
        'checkName' => null,
        'standard' => null,
        'scanResult' => null,
        'severity' => null,
        'hostId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'exportHeaders' => null
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
    * category  **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    * exportSize  **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    * groupId  **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    * checkName  **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
    * standard  **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
    * scanResult  **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
    * severity  **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
    * hostId  **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置
    * exportHeaders  导出配置检测数据的表头信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'exportSize' => 'export_size',
            'groupId' => 'group_id',
            'checkName' => 'check_name',
            'standard' => 'standard',
            'scanResult' => 'scan_result',
            'severity' => 'severity',
            'hostId' => 'host_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'exportHeaders' => 'export_headers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    * exportSize  **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    * groupId  **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    * checkName  **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
    * standard  **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
    * scanResult  **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
    * severity  **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
    * hostId  **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置
    * exportHeaders  导出配置检测数据的表头信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'exportSize' => 'setExportSize',
            'groupId' => 'setGroupId',
            'checkName' => 'setCheckName',
            'standard' => 'setStandard',
            'scanResult' => 'setScanResult',
            'severity' => 'setSeverity',
            'hostId' => 'setHostId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'exportHeaders' => 'setExportHeaders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    * exportSize  **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    * groupId  **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    * checkName  **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
    * standard  **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
    * scanResult  **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
    * severity  **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
    * hostId  **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
    * limit  每页显示个数
    * offset  偏移量：指定返回记录的开始位置
    * exportHeaders  导出配置检测数据的表头信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'exportSize' => 'getExportSize',
            'groupId' => 'getGroupId',
            'checkName' => 'getCheckName',
            'standard' => 'getStandard',
            'scanResult' => 'getScanResult',
            'severity' => 'getSeverity',
            'hostId' => 'getHostId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'exportHeaders' => 'getExportHeaders'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['scanResult'] = isset($data['scanResult']) ? $data['scanResult'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['exportHeaders'] = isset($data['exportHeaders']) ? $data['exportHeaders'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 128)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && !preg_match("/^(risk-config|password-complexity|weak-password)$/", $this->container['category'])) {
                $invalidProperties[] = "invalid value for 'category', must be conform to the pattern /^(risk-config|password-complexity|weak-password)$/.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] > 200000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && !preg_match("/^(cn_standard|hw_standard|cis_standard)$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^(cn_standard|hw_standard|cis_standard)$/.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanResult']) && (mb_strlen($this->container['scanResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanResult']) && !preg_match("/^(pass|unhandled)$/", $this->container['scanResult'])) {
                $invalidProperties[] = "invalid value for 'scanResult', must be conform to the pattern /^(pass|unhandled)$/.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && !preg_match("/^(Security|Low|Medium|High)$/", $this->container['severity'])) {
                $invalidProperties[] = "invalid value for 'severity', must be conform to the pattern /^(Security|Low|Medium|High)$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['exportHeaders'] === null) {
            $invalidProperties[] = "'exportHeaders' can't be null";
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
    * Gets category
    *  **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 导出类型 **约束限制**： 不涉及 **取值范围**： - risk-config : 基线配置检测 - password-complexity : 口令复杂度检测 - weak-password : 弱口令检测  **默认取值**： risk-config
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets exportSize
    *  **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    *
    * @return int|null
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int|null $exportSize **参数解释** 导出数据条数 **约束限制** 不涉及 **取值范围**  取值 1 - 200000  **默认取值** 100000
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**： 策略组id **约束限制**： 不涉及 **取值范围**： 字符长度0-128位  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
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
    * @param string|null $checkName **参数解释**： 配置检查（基线）的名称，例如SSH、CentOS 7、Windows **约束限制**： 不涉及 **取值范围**： 字符长度0-256位  **默认取值**: 不涉及
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
    *  **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
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
    * @param string|null $standard **参数解释**： 标准类型 **约束限制**： 不涉及 **取值范围**： - cn_standard ： 等保合规标准 - hw_standard ： 云安全实践标准 - cis_standard ： 通用安全标准  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets scanResult
    *  **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
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
    * @param string|null $scanResult **参数解释**： 检查结果 **约束限制**： 不涉及 **取值范围** - pass : 检查通过 - failed : 检查未通过(已废弃) - unhandled: 未通过  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setScanResult($scanResult)
    {
        $this->container['scanResult'] = $scanResult;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
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
    * @param string|null $severity **参数解释**： 风险等级 **约束限制**： 不涉及 **取值范围** - Security: 无风险 - Low : 低危 - Medium : 中危 - High: 高危  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**： 主机ID，不赋值时，查租户所有主机 **约束限制**： 不涉及 **取值范围**： 字符长度0-64位  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets exportHeaders
    *  导出配置检测数据的表头信息列表
    *
    * @return string[][]
    */
    public function getExportHeaders()
    {
        return $this->container['exportHeaders'];
    }

    /**
    * Sets exportHeaders
    *
    * @param string[][] $exportHeaders 导出配置检测数据的表头信息列表
    *
    * @return $this
    */
    public function setExportHeaders($exportHeaders)
    {
        $this->container['exportHeaders'] = $exportHeaders;
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

