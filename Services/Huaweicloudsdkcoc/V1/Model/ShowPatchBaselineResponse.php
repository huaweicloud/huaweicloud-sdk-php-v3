<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPatchBaselineResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPatchBaselineResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baselineId  补丁基准ID
    * name  补丁基准名称
    * description  补丁基准描述
    * region  区域
    * baselineScene  基线使用场景(CCE、ECS、BMS)
    * ruleType  基线规则类型(Standard,Custom)
    * operatingSystem  操作系统
    * type  补丁基准类型（公共/自定义）
    * approvalRules  操作系统的批准规则
    * customBaselineRules  自定义基线列表
    * defaultPatchBaseline  是否默认基准
    * rejectedPatches  拒绝的补丁
    * rejectedAction  拒绝策略
    * approvedPatches  批准的补丁
    * approvedCompliance  批准的补丁合规性级别
    * enableSecurityApproved  批准的补丁是否安全更新
    * createdTime  创建时间
    * modifiedTime  modifiedTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baselineId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'region' => 'string',
            'baselineScene' => 'string',
            'ruleType' => 'string',
            'operatingSystem' => 'string',
            'type' => 'string',
            'approvalRules' => '\HuaweiCloud\SDK\Coc\V1\Model\PatchRule[]',
            'customBaselineRules' => '\HuaweiCloud\SDK\Coc\V1\Model\CustomBaselineRule[]',
            'defaultPatchBaseline' => 'bool',
            'rejectedPatches' => 'string',
            'rejectedAction' => 'string',
            'approvedPatches' => 'string',
            'approvedCompliance' => 'string',
            'enableSecurityApproved' => 'bool',
            'createdTime' => 'int',
            'modifiedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baselineId  补丁基准ID
    * name  补丁基准名称
    * description  补丁基准描述
    * region  区域
    * baselineScene  基线使用场景(CCE、ECS、BMS)
    * ruleType  基线规则类型(Standard,Custom)
    * operatingSystem  操作系统
    * type  补丁基准类型（公共/自定义）
    * approvalRules  操作系统的批准规则
    * customBaselineRules  自定义基线列表
    * defaultPatchBaseline  是否默认基准
    * rejectedPatches  拒绝的补丁
    * rejectedAction  拒绝策略
    * approvedPatches  批准的补丁
    * approvedCompliance  批准的补丁合规性级别
    * enableSecurityApproved  批准的补丁是否安全更新
    * createdTime  创建时间
    * modifiedTime  modifiedTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baselineId' => null,
        'name' => null,
        'description' => null,
        'region' => null,
        'baselineScene' => null,
        'ruleType' => null,
        'operatingSystem' => null,
        'type' => null,
        'approvalRules' => null,
        'customBaselineRules' => null,
        'defaultPatchBaseline' => null,
        'rejectedPatches' => null,
        'rejectedAction' => null,
        'approvedPatches' => null,
        'approvedCompliance' => null,
        'enableSecurityApproved' => null,
        'createdTime' => 'int64',
        'modifiedTime' => 'int64'
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
    * baselineId  补丁基准ID
    * name  补丁基准名称
    * description  补丁基准描述
    * region  区域
    * baselineScene  基线使用场景(CCE、ECS、BMS)
    * ruleType  基线规则类型(Standard,Custom)
    * operatingSystem  操作系统
    * type  补丁基准类型（公共/自定义）
    * approvalRules  操作系统的批准规则
    * customBaselineRules  自定义基线列表
    * defaultPatchBaseline  是否默认基准
    * rejectedPatches  拒绝的补丁
    * rejectedAction  拒绝策略
    * approvedPatches  批准的补丁
    * approvedCompliance  批准的补丁合规性级别
    * enableSecurityApproved  批准的补丁是否安全更新
    * createdTime  创建时间
    * modifiedTime  modifiedTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baselineId' => 'baseline_id',
            'name' => 'name',
            'description' => 'description',
            'region' => 'region',
            'baselineScene' => 'baseline_scene',
            'ruleType' => 'rule_type',
            'operatingSystem' => 'operating_system',
            'type' => 'type',
            'approvalRules' => 'approval_rules',
            'customBaselineRules' => 'custom_baseline_rules',
            'defaultPatchBaseline' => 'default_patch_baseline',
            'rejectedPatches' => 'rejected_patches',
            'rejectedAction' => 'rejected_action',
            'approvedPatches' => 'approved_patches',
            'approvedCompliance' => 'approved_compliance',
            'enableSecurityApproved' => 'enable_security_approved',
            'createdTime' => 'created_time',
            'modifiedTime' => 'modified_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baselineId  补丁基准ID
    * name  补丁基准名称
    * description  补丁基准描述
    * region  区域
    * baselineScene  基线使用场景(CCE、ECS、BMS)
    * ruleType  基线规则类型(Standard,Custom)
    * operatingSystem  操作系统
    * type  补丁基准类型（公共/自定义）
    * approvalRules  操作系统的批准规则
    * customBaselineRules  自定义基线列表
    * defaultPatchBaseline  是否默认基准
    * rejectedPatches  拒绝的补丁
    * rejectedAction  拒绝策略
    * approvedPatches  批准的补丁
    * approvedCompliance  批准的补丁合规性级别
    * enableSecurityApproved  批准的补丁是否安全更新
    * createdTime  创建时间
    * modifiedTime  modifiedTime
    *
    * @var string[]
    */
    protected static $setters = [
            'baselineId' => 'setBaselineId',
            'name' => 'setName',
            'description' => 'setDescription',
            'region' => 'setRegion',
            'baselineScene' => 'setBaselineScene',
            'ruleType' => 'setRuleType',
            'operatingSystem' => 'setOperatingSystem',
            'type' => 'setType',
            'approvalRules' => 'setApprovalRules',
            'customBaselineRules' => 'setCustomBaselineRules',
            'defaultPatchBaseline' => 'setDefaultPatchBaseline',
            'rejectedPatches' => 'setRejectedPatches',
            'rejectedAction' => 'setRejectedAction',
            'approvedPatches' => 'setApprovedPatches',
            'approvedCompliance' => 'setApprovedCompliance',
            'enableSecurityApproved' => 'setEnableSecurityApproved',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baselineId  补丁基准ID
    * name  补丁基准名称
    * description  补丁基准描述
    * region  区域
    * baselineScene  基线使用场景(CCE、ECS、BMS)
    * ruleType  基线规则类型(Standard,Custom)
    * operatingSystem  操作系统
    * type  补丁基准类型（公共/自定义）
    * approvalRules  操作系统的批准规则
    * customBaselineRules  自定义基线列表
    * defaultPatchBaseline  是否默认基准
    * rejectedPatches  拒绝的补丁
    * rejectedAction  拒绝策略
    * approvedPatches  批准的补丁
    * approvedCompliance  批准的补丁合规性级别
    * enableSecurityApproved  批准的补丁是否安全更新
    * createdTime  创建时间
    * modifiedTime  modifiedTime
    *
    * @var string[]
    */
    protected static $getters = [
            'baselineId' => 'getBaselineId',
            'name' => 'getName',
            'description' => 'getDescription',
            'region' => 'getRegion',
            'baselineScene' => 'getBaselineScene',
            'ruleType' => 'getRuleType',
            'operatingSystem' => 'getOperatingSystem',
            'type' => 'getType',
            'approvalRules' => 'getApprovalRules',
            'customBaselineRules' => 'getCustomBaselineRules',
            'defaultPatchBaseline' => 'getDefaultPatchBaseline',
            'rejectedPatches' => 'getRejectedPatches',
            'rejectedAction' => 'getRejectedAction',
            'approvedPatches' => 'getApprovedPatches',
            'approvedCompliance' => 'getApprovedCompliance',
            'enableSecurityApproved' => 'getEnableSecurityApproved',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime'
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
        $this->container['baselineId'] = isset($data['baselineId']) ? $data['baselineId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['baselineScene'] = isset($data['baselineScene']) ? $data['baselineScene'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['approvalRules'] = isset($data['approvalRules']) ? $data['approvalRules'] : null;
        $this->container['customBaselineRules'] = isset($data['customBaselineRules']) ? $data['customBaselineRules'] : null;
        $this->container['defaultPatchBaseline'] = isset($data['defaultPatchBaseline']) ? $data['defaultPatchBaseline'] : null;
        $this->container['rejectedPatches'] = isset($data['rejectedPatches']) ? $data['rejectedPatches'] : null;
        $this->container['rejectedAction'] = isset($data['rejectedAction']) ? $data['rejectedAction'] : null;
        $this->container['approvedPatches'] = isset($data['approvedPatches']) ? $data['approvedPatches'] : null;
        $this->container['approvedCompliance'] = isset($data['approvedCompliance']) ? $data['approvedCompliance'] : null;
        $this->container['enableSecurityApproved'] = isset($data['enableSecurityApproved']) ? $data['enableSecurityApproved'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets baselineId
    *  补丁基准ID
    *
    * @return string|null
    */
    public function getBaselineId()
    {
        return $this->container['baselineId'];
    }

    /**
    * Sets baselineId
    *
    * @param string|null $baselineId 补丁基准ID
    *
    * @return $this
    */
    public function setBaselineId($baselineId)
    {
        $this->container['baselineId'] = $baselineId;
        return $this;
    }

    /**
    * Gets name
    *  补丁基准名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 补丁基准名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  补丁基准描述
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
    * @param string|null $description 补丁基准描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets baselineScene
    *  基线使用场景(CCE、ECS、BMS)
    *
    * @return string|null
    */
    public function getBaselineScene()
    {
        return $this->container['baselineScene'];
    }

    /**
    * Sets baselineScene
    *
    * @param string|null $baselineScene 基线使用场景(CCE、ECS、BMS)
    *
    * @return $this
    */
    public function setBaselineScene($baselineScene)
    {
        $this->container['baselineScene'] = $baselineScene;
        return $this;
    }

    /**
    * Gets ruleType
    *  基线规则类型(Standard,Custom)
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 基线规则类型(Standard,Custom)
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets operatingSystem
    *  操作系统
    *
    * @return string|null
    */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
    * Sets operatingSystem
    *
    * @param string|null $operatingSystem 操作系统
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
        return $this;
    }

    /**
    * Gets type
    *  补丁基准类型（公共/自定义）
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 补丁基准类型（公共/自定义）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets approvalRules
    *  操作系统的批准规则
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\PatchRule[]|null
    */
    public function getApprovalRules()
    {
        return $this->container['approvalRules'];
    }

    /**
    * Sets approvalRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\PatchRule[]|null $approvalRules 操作系统的批准规则
    *
    * @return $this
    */
    public function setApprovalRules($approvalRules)
    {
        $this->container['approvalRules'] = $approvalRules;
        return $this;
    }

    /**
    * Gets customBaselineRules
    *  自定义基线列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CustomBaselineRule[]|null
    */
    public function getCustomBaselineRules()
    {
        return $this->container['customBaselineRules'];
    }

    /**
    * Sets customBaselineRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CustomBaselineRule[]|null $customBaselineRules 自定义基线列表
    *
    * @return $this
    */
    public function setCustomBaselineRules($customBaselineRules)
    {
        $this->container['customBaselineRules'] = $customBaselineRules;
        return $this;
    }

    /**
    * Gets defaultPatchBaseline
    *  是否默认基准
    *
    * @return bool|null
    */
    public function getDefaultPatchBaseline()
    {
        return $this->container['defaultPatchBaseline'];
    }

    /**
    * Sets defaultPatchBaseline
    *
    * @param bool|null $defaultPatchBaseline 是否默认基准
    *
    * @return $this
    */
    public function setDefaultPatchBaseline($defaultPatchBaseline)
    {
        $this->container['defaultPatchBaseline'] = $defaultPatchBaseline;
        return $this;
    }

    /**
    * Gets rejectedPatches
    *  拒绝的补丁
    *
    * @return string|null
    */
    public function getRejectedPatches()
    {
        return $this->container['rejectedPatches'];
    }

    /**
    * Sets rejectedPatches
    *
    * @param string|null $rejectedPatches 拒绝的补丁
    *
    * @return $this
    */
    public function setRejectedPatches($rejectedPatches)
    {
        $this->container['rejectedPatches'] = $rejectedPatches;
        return $this;
    }

    /**
    * Gets rejectedAction
    *  拒绝策略
    *
    * @return string|null
    */
    public function getRejectedAction()
    {
        return $this->container['rejectedAction'];
    }

    /**
    * Sets rejectedAction
    *
    * @param string|null $rejectedAction 拒绝策略
    *
    * @return $this
    */
    public function setRejectedAction($rejectedAction)
    {
        $this->container['rejectedAction'] = $rejectedAction;
        return $this;
    }

    /**
    * Gets approvedPatches
    *  批准的补丁
    *
    * @return string|null
    */
    public function getApprovedPatches()
    {
        return $this->container['approvedPatches'];
    }

    /**
    * Sets approvedPatches
    *
    * @param string|null $approvedPatches 批准的补丁
    *
    * @return $this
    */
    public function setApprovedPatches($approvedPatches)
    {
        $this->container['approvedPatches'] = $approvedPatches;
        return $this;
    }

    /**
    * Gets approvedCompliance
    *  批准的补丁合规性级别
    *
    * @return string|null
    */
    public function getApprovedCompliance()
    {
        return $this->container['approvedCompliance'];
    }

    /**
    * Sets approvedCompliance
    *
    * @param string|null $approvedCompliance 批准的补丁合规性级别
    *
    * @return $this
    */
    public function setApprovedCompliance($approvedCompliance)
    {
        $this->container['approvedCompliance'] = $approvedCompliance;
        return $this;
    }

    /**
    * Gets enableSecurityApproved
    *  批准的补丁是否安全更新
    *
    * @return bool|null
    */
    public function getEnableSecurityApproved()
    {
        return $this->container['enableSecurityApproved'];
    }

    /**
    * Sets enableSecurityApproved
    *
    * @param bool|null $enableSecurityApproved 批准的补丁是否安全更新
    *
    * @return $this
    */
    public function setEnableSecurityApproved($enableSecurityApproved)
    {
        $this->container['enableSecurityApproved'] = $enableSecurityApproved;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  modifiedTime
    *
    * @return int|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param int|null $modifiedTime modifiedTime
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
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

