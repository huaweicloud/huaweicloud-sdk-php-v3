<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIacFileRisksResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIacFileRisksResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskId  风险id
    * ruleId  风险检测规则id
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    * riskNum  风险数量
    * lastScanTime  最近一次扫描时间
    * description  风险描述
    * remediation  风险的处置建议
    * buildInstruction  存在风险的构建指令
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskId' => 'string',
            'ruleId' => 'string',
            'riskName' => 'string',
            'riskLevel' => 'string',
            'riskCategory' => 'string',
            'riskNum' => 'int',
            'lastScanTime' => 'int',
            'description' => 'string',
            'remediation' => 'string',
            'buildInstruction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskId  风险id
    * ruleId  风险检测规则id
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    * riskNum  风险数量
    * lastScanTime  最近一次扫描时间
    * description  风险描述
    * remediation  风险的处置建议
    * buildInstruction  存在风险的构建指令
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskId' => null,
        'ruleId' => null,
        'riskName' => null,
        'riskLevel' => null,
        'riskCategory' => null,
        'riskNum' => 'int32',
        'lastScanTime' => 'int64',
        'description' => null,
        'remediation' => null,
        'buildInstruction' => null
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
    * riskId  风险id
    * ruleId  风险检测规则id
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    * riskNum  风险数量
    * lastScanTime  最近一次扫描时间
    * description  风险描述
    * remediation  风险的处置建议
    * buildInstruction  存在风险的构建指令
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskId' => 'risk_id',
            'ruleId' => 'rule_id',
            'riskName' => 'risk_name',
            'riskLevel' => 'risk_level',
            'riskCategory' => 'risk_category',
            'riskNum' => 'risk_num',
            'lastScanTime' => 'last_scan_time',
            'description' => 'description',
            'remediation' => 'remediation',
            'buildInstruction' => 'build_instruction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskId  风险id
    * ruleId  风险检测规则id
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    * riskNum  风险数量
    * lastScanTime  最近一次扫描时间
    * description  风险描述
    * remediation  风险的处置建议
    * buildInstruction  存在风险的构建指令
    *
    * @var string[]
    */
    protected static $setters = [
            'riskId' => 'setRiskId',
            'ruleId' => 'setRuleId',
            'riskName' => 'setRiskName',
            'riskLevel' => 'setRiskLevel',
            'riskCategory' => 'setRiskCategory',
            'riskNum' => 'setRiskNum',
            'lastScanTime' => 'setLastScanTime',
            'description' => 'setDescription',
            'remediation' => 'setRemediation',
            'buildInstruction' => 'setBuildInstruction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskId  风险id
    * ruleId  风险检测规则id
    * riskName  风险名称
    * riskLevel  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    * riskCategory  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    * riskNum  风险数量
    * lastScanTime  最近一次扫描时间
    * description  风险描述
    * remediation  风险的处置建议
    * buildInstruction  存在风险的构建指令
    *
    * @var string[]
    */
    protected static $getters = [
            'riskId' => 'getRiskId',
            'ruleId' => 'getRuleId',
            'riskName' => 'getRiskName',
            'riskLevel' => 'getRiskLevel',
            'riskCategory' => 'getRiskCategory',
            'riskNum' => 'getRiskNum',
            'lastScanTime' => 'getLastScanTime',
            'description' => 'getDescription',
            'remediation' => 'getRemediation',
            'buildInstruction' => 'getBuildInstruction'
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
        $this->container['riskId'] = isset($data['riskId']) ? $data['riskId'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['riskName'] = isset($data['riskName']) ? $data['riskName'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['riskCategory'] = isset($data['riskCategory']) ? $data['riskCategory'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['lastScanTime'] = isset($data['lastScanTime']) ? $data['lastScanTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['remediation'] = isset($data['remediation']) ? $data['remediation'] : null;
        $this->container['buildInstruction'] = isset($data['buildInstruction']) ? $data['buildInstruction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['riskId']) && (mb_strlen($this->container['riskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskId']) && (mb_strlen($this->container['riskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskName']) && (mb_strlen($this->container['riskName']) > 512)) {
                $invalidProperties[] = "invalid value for 'riskName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['riskName']) && (mb_strlen($this->container['riskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskCategory']) && (mb_strlen($this->container['riskCategory']) > 64)) {
                $invalidProperties[] = "invalid value for 'riskCategory', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['riskCategory']) && (mb_strlen($this->container['riskCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskCategory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastScanTime']) && ($this->container['lastScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastScanTime']) && ($this->container['lastScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 65534)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) > 65534)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['remediation']) && (mb_strlen($this->container['remediation']) < 0)) {
                $invalidProperties[] = "invalid value for 'remediation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['buildInstruction']) && (mb_strlen($this->container['buildInstruction']) > 256)) {
                $invalidProperties[] = "invalid value for 'buildInstruction', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['buildInstruction']) && (mb_strlen($this->container['buildInstruction']) < 0)) {
                $invalidProperties[] = "invalid value for 'buildInstruction', the character length must be bigger than or equal to 0.";
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
    * Gets riskId
    *  风险id
    *
    * @return string|null
    */
    public function getRiskId()
    {
        return $this->container['riskId'];
    }

    /**
    * Sets riskId
    *
    * @param string|null $riskId 风险id
    *
    * @return $this
    */
    public function setRiskId($riskId)
    {
        $this->container['riskId'] = $riskId;
        return $this;
    }

    /**
    * Gets ruleId
    *  风险检测规则id
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 风险检测规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets riskName
    *  风险名称
    *
    * @return string|null
    */
    public function getRiskName()
    {
        return $this->container['riskName'];
    }

    /**
    * Sets riskName
    *
    * @param string|null $riskName 风险名称
    *
    * @return $this
    */
    public function setRiskName($riskName)
    {
        $this->container['riskName'] = $riskName;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险程度，包含如下   - high ：高危   - medium ：中危   - low ：低危   - tips ：提示
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets riskCategory
    *  风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @return string|null
    */
    public function getRiskCategory()
    {
        return $this->container['riskCategory'];
    }

    /**
    * Sets riskCategory
    *
    * @param string|null $riskCategory 风险分类，包含如下：   - control_plane：控制平面   - access_control：访问控制   - network：网络   - workload：工作负载   - secrets：密钥管理   - node_escape：节点逃逸
    *
    * @return $this
    */
    public function setRiskCategory($riskCategory)
    {
        $this->container['riskCategory'] = $riskCategory;
        return $this;
    }

    /**
    * Gets riskNum
    *  风险数量
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum 风险数量
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets lastScanTime
    *  最近一次扫描时间
    *
    * @return int|null
    */
    public function getLastScanTime()
    {
        return $this->container['lastScanTime'];
    }

    /**
    * Sets lastScanTime
    *
    * @param int|null $lastScanTime 最近一次扫描时间
    *
    * @return $this
    */
    public function setLastScanTime($lastScanTime)
    {
        $this->container['lastScanTime'] = $lastScanTime;
        return $this;
    }

    /**
    * Gets description
    *  风险描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 风险描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets remediation
    *  风险的处置建议
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
    * @param string|null $remediation 风险的处置建议
    *
    * @return $this
    */
    public function setRemediation($remediation)
    {
        $this->container['remediation'] = $remediation;
        return $this;
    }

    /**
    * Gets buildInstruction
    *  存在风险的构建指令
    *
    * @return string|null
    */
    public function getBuildInstruction()
    {
        return $this->container['buildInstruction'];
    }

    /**
    * Sets buildInstruction
    *
    * @param string|null $buildInstruction 存在风险的构建指令
    *
    * @return $this
    */
    public function setBuildInstruction($buildInstruction)
    {
        $this->container['buildInstruction'] = $buildInstruction;
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

