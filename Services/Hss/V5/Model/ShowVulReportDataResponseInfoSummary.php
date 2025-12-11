<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulReportDataResponseInfoSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulReportDataResponseInfo_summary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumUnfixed  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumLinux  **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWindows  **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWebCms  **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumApp  **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    * hostNumRisk  **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumHighRisk  **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumMediumRisk  **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumLowRisk  **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumImportant  **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumCommon  **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumTest  **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulNumRepairNecessity' => 'int',
            'vulNumUnfixed' => 'int',
            'vulNumLinux' => 'int',
            'vulNumWindows' => 'int',
            'vulNumWebCms' => 'int',
            'vulNumApp' => 'int',
            'hostNumRisk' => 'int',
            'hostNumHighRisk' => 'int',
            'hostNumMediumRisk' => 'int',
            'hostNumLowRisk' => 'int',
            'affectAssetNumImportant' => 'int',
            'affectAssetNumCommon' => 'int',
            'affectAssetNumTest' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumUnfixed  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumLinux  **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWindows  **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWebCms  **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumApp  **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    * hostNumRisk  **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumHighRisk  **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumMediumRisk  **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumLowRisk  **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumImportant  **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumCommon  **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumTest  **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulNumRepairNecessity' => 'int32',
        'vulNumUnfixed' => 'int32',
        'vulNumLinux' => 'int32',
        'vulNumWindows' => 'int32',
        'vulNumWebCms' => 'int32',
        'vulNumApp' => 'int32',
        'hostNumRisk' => 'int32',
        'hostNumHighRisk' => 'int32',
        'hostNumMediumRisk' => 'int32',
        'hostNumLowRisk' => 'int32',
        'affectAssetNumImportant' => 'int32',
        'affectAssetNumCommon' => 'int32',
        'affectAssetNumTest' => 'int32'
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
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumUnfixed  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumLinux  **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWindows  **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWebCms  **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumApp  **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    * hostNumRisk  **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumHighRisk  **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumMediumRisk  **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumLowRisk  **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumImportant  **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumCommon  **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumTest  **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulNumRepairNecessity' => 'vul_num_repair_necessity',
            'vulNumUnfixed' => 'vul_num_unfixed',
            'vulNumLinux' => 'vul_num_linux',
            'vulNumWindows' => 'vul_num_windows',
            'vulNumWebCms' => 'vul_num_web_cms',
            'vulNumApp' => 'vul_num_app',
            'hostNumRisk' => 'host_num_risk',
            'hostNumHighRisk' => 'host_num_high_risk',
            'hostNumMediumRisk' => 'host_num_medium_risk',
            'hostNumLowRisk' => 'host_num_low_risk',
            'affectAssetNumImportant' => 'affect_asset_num_important',
            'affectAssetNumCommon' => 'affect_asset_num_common',
            'affectAssetNumTest' => 'affect_asset_num_test'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumUnfixed  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumLinux  **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWindows  **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWebCms  **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumApp  **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    * hostNumRisk  **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumHighRisk  **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumMediumRisk  **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumLowRisk  **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumImportant  **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumCommon  **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumTest  **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $setters = [
            'vulNumRepairNecessity' => 'setVulNumRepairNecessity',
            'vulNumUnfixed' => 'setVulNumUnfixed',
            'vulNumLinux' => 'setVulNumLinux',
            'vulNumWindows' => 'setVulNumWindows',
            'vulNumWebCms' => 'setVulNumWebCms',
            'vulNumApp' => 'setVulNumApp',
            'hostNumRisk' => 'setHostNumRisk',
            'hostNumHighRisk' => 'setHostNumHighRisk',
            'hostNumMediumRisk' => 'setHostNumMediumRisk',
            'hostNumLowRisk' => 'setHostNumLowRisk',
            'affectAssetNumImportant' => 'setAffectAssetNumImportant',
            'affectAssetNumCommon' => 'setAffectAssetNumCommon',
            'affectAssetNumTest' => 'setAffectAssetNumTest'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulNumRepairNecessity  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumUnfixed  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumLinux  **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWindows  **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumWebCms  **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    * vulNumApp  **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    * hostNumRisk  **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumHighRisk  **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumMediumRisk  **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * hostNumLowRisk  **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumImportant  **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumCommon  **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    * affectAssetNumTest  **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @var string[]
    */
    protected static $getters = [
            'vulNumRepairNecessity' => 'getVulNumRepairNecessity',
            'vulNumUnfixed' => 'getVulNumUnfixed',
            'vulNumLinux' => 'getVulNumLinux',
            'vulNumWindows' => 'getVulNumWindows',
            'vulNumWebCms' => 'getVulNumWebCms',
            'vulNumApp' => 'getVulNumApp',
            'hostNumRisk' => 'getHostNumRisk',
            'hostNumHighRisk' => 'getHostNumHighRisk',
            'hostNumMediumRisk' => 'getHostNumMediumRisk',
            'hostNumLowRisk' => 'getHostNumLowRisk',
            'affectAssetNumImportant' => 'getAffectAssetNumImportant',
            'affectAssetNumCommon' => 'getAffectAssetNumCommon',
            'affectAssetNumTest' => 'getAffectAssetNumTest'
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
        $this->container['vulNumRepairNecessity'] = isset($data['vulNumRepairNecessity']) ? $data['vulNumRepairNecessity'] : null;
        $this->container['vulNumUnfixed'] = isset($data['vulNumUnfixed']) ? $data['vulNumUnfixed'] : null;
        $this->container['vulNumLinux'] = isset($data['vulNumLinux']) ? $data['vulNumLinux'] : null;
        $this->container['vulNumWindows'] = isset($data['vulNumWindows']) ? $data['vulNumWindows'] : null;
        $this->container['vulNumWebCms'] = isset($data['vulNumWebCms']) ? $data['vulNumWebCms'] : null;
        $this->container['vulNumApp'] = isset($data['vulNumApp']) ? $data['vulNumApp'] : null;
        $this->container['hostNumRisk'] = isset($data['hostNumRisk']) ? $data['hostNumRisk'] : null;
        $this->container['hostNumHighRisk'] = isset($data['hostNumHighRisk']) ? $data['hostNumHighRisk'] : null;
        $this->container['hostNumMediumRisk'] = isset($data['hostNumMediumRisk']) ? $data['hostNumMediumRisk'] : null;
        $this->container['hostNumLowRisk'] = isset($data['hostNumLowRisk']) ? $data['hostNumLowRisk'] : null;
        $this->container['affectAssetNumImportant'] = isset($data['affectAssetNumImportant']) ? $data['affectAssetNumImportant'] : null;
        $this->container['affectAssetNumCommon'] = isset($data['affectAssetNumCommon']) ? $data['affectAssetNumCommon'] : null;
        $this->container['affectAssetNumTest'] = isset($data['affectAssetNumTest']) ? $data['affectAssetNumTest'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulNumRepairNecessity']) && ($this->container['vulNumRepairNecessity'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumRepairNecessity', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumRepairNecessity']) && ($this->container['vulNumRepairNecessity'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumRepairNecessity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNumUnfixed']) && ($this->container['vulNumUnfixed'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumUnfixed', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumUnfixed']) && ($this->container['vulNumUnfixed'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumUnfixed', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNumLinux']) && ($this->container['vulNumLinux'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumLinux', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumLinux']) && ($this->container['vulNumLinux'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumLinux', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNumWindows']) && ($this->container['vulNumWindows'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumWindows', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumWindows']) && ($this->container['vulNumWindows'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumWindows', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNumWebCms']) && ($this->container['vulNumWebCms'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumWebCms', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumWebCms']) && ($this->container['vulNumWebCms'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumWebCms', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNumApp']) && ($this->container['vulNumApp'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'vulNumApp', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['vulNumApp']) && ($this->container['vulNumApp'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNumApp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNumRisk']) && ($this->container['hostNumRisk'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'hostNumRisk', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['hostNumRisk']) && ($this->container['hostNumRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNumRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNumHighRisk']) && ($this->container['hostNumHighRisk'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'hostNumHighRisk', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['hostNumHighRisk']) && ($this->container['hostNumHighRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNumHighRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNumMediumRisk']) && ($this->container['hostNumMediumRisk'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'hostNumMediumRisk', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['hostNumMediumRisk']) && ($this->container['hostNumMediumRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNumMediumRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNumLowRisk']) && ($this->container['hostNumLowRisk'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'hostNumLowRisk', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['hostNumLowRisk']) && ($this->container['hostNumLowRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNumLowRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['affectAssetNumImportant']) && ($this->container['affectAssetNumImportant'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'affectAssetNumImportant', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['affectAssetNumImportant']) && ($this->container['affectAssetNumImportant'] < 0)) {
                $invalidProperties[] = "invalid value for 'affectAssetNumImportant', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['affectAssetNumCommon']) && ($this->container['affectAssetNumCommon'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'affectAssetNumCommon', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['affectAssetNumCommon']) && ($this->container['affectAssetNumCommon'] < 0)) {
                $invalidProperties[] = "invalid value for 'affectAssetNumCommon', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['affectAssetNumTest']) && ($this->container['affectAssetNumTest'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'affectAssetNumTest', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['affectAssetNumTest']) && ($this->container['affectAssetNumTest'] < 0)) {
                $invalidProperties[] = "invalid value for 'affectAssetNumTest', must be bigger than or equal to 0.";
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
    * Gets vulNumRepairNecessity
    *  **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumRepairNecessity()
    {
        return $this->container['vulNumRepairNecessity'];
    }

    /**
    * Sets vulNumRepairNecessity
    *
    * @param int|null $vulNumRepairNecessity **参数解释**: 紧急修复漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumRepairNecessity($vulNumRepairNecessity)
    {
        $this->container['vulNumRepairNecessity'] = $vulNumRepairNecessity;
        return $this;
    }

    /**
    * Gets vulNumUnfixed
    *  **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumUnfixed()
    {
        return $this->container['vulNumUnfixed'];
    }

    /**
    * Sets vulNumUnfixed
    *
    * @param int|null $vulNumUnfixed **参数解释**: 未完成修复的漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumUnfixed($vulNumUnfixed)
    {
        $this->container['vulNumUnfixed'] = $vulNumUnfixed;
        return $this;
    }

    /**
    * Gets vulNumLinux
    *  **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumLinux()
    {
        return $this->container['vulNumLinux'];
    }

    /**
    * Sets vulNumLinux
    *
    * @param int|null $vulNumLinux **参数解释**: linux漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumLinux($vulNumLinux)
    {
        $this->container['vulNumLinux'] = $vulNumLinux;
        return $this;
    }

    /**
    * Gets vulNumWindows
    *  **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumWindows()
    {
        return $this->container['vulNumWindows'];
    }

    /**
    * Sets vulNumWindows
    *
    * @param int|null $vulNumWindows **参数解释**: windows的漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumWindows($vulNumWindows)
    {
        $this->container['vulNumWindows'] = $vulNumWindows;
        return $this;
    }

    /**
    * Gets vulNumWebCms
    *  **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumWebCms()
    {
        return $this->container['vulNumWebCms'];
    }

    /**
    * Sets vulNumWebCms
    *
    * @param int|null $vulNumWebCms **参数解释**: web-cms的漏洞数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumWebCms($vulNumWebCms)
    {
        $this->container['vulNumWebCms'] = $vulNumWebCms;
        return $this;
    }

    /**
    * Gets vulNumApp
    *  **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getVulNumApp()
    {
        return $this->container['vulNumApp'];
    }

    /**
    * Sets vulNumApp
    *
    * @param int|null $vulNumApp **参数解释**: 应用漏洞 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setVulNumApp($vulNumApp)
    {
        $this->container['vulNumApp'] = $vulNumApp;
        return $this;
    }

    /**
    * Gets hostNumRisk
    *  **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getHostNumRisk()
    {
        return $this->container['hostNumRisk'];
    }

    /**
    * Sets hostNumRisk
    *
    * @param int|null $hostNumRisk **参数解释**: 有风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setHostNumRisk($hostNumRisk)
    {
        $this->container['hostNumRisk'] = $hostNumRisk;
        return $this;
    }

    /**
    * Gets hostNumHighRisk
    *  **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getHostNumHighRisk()
    {
        return $this->container['hostNumHighRisk'];
    }

    /**
    * Sets hostNumHighRisk
    *
    * @param int|null $hostNumHighRisk **参数解释**: 有高危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setHostNumHighRisk($hostNumHighRisk)
    {
        $this->container['hostNumHighRisk'] = $hostNumHighRisk;
        return $this;
    }

    /**
    * Gets hostNumMediumRisk
    *  **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getHostNumMediumRisk()
    {
        return $this->container['hostNumMediumRisk'];
    }

    /**
    * Sets hostNumMediumRisk
    *
    * @param int|null $hostNumMediumRisk **参数解释**: 有中危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setHostNumMediumRisk($hostNumMediumRisk)
    {
        $this->container['hostNumMediumRisk'] = $hostNumMediumRisk;
        return $this;
    }

    /**
    * Gets hostNumLowRisk
    *  **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getHostNumLowRisk()
    {
        return $this->container['hostNumLowRisk'];
    }

    /**
    * Sets hostNumLowRisk
    *
    * @param int|null $hostNumLowRisk **参数解释**: 有低危风险的主机数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setHostNumLowRisk($hostNumLowRisk)
    {
        $this->container['hostNumLowRisk'] = $hostNumLowRisk;
        return $this;
    }

    /**
    * Gets affectAssetNumImportant
    *  **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getAffectAssetNumImportant()
    {
        return $this->container['affectAssetNumImportant'];
    }

    /**
    * Sets affectAssetNumImportant
    *
    * @param int|null $affectAssetNumImportant **参数解释**: 受影响的重要资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setAffectAssetNumImportant($affectAssetNumImportant)
    {
        $this->container['affectAssetNumImportant'] = $affectAssetNumImportant;
        return $this;
    }

    /**
    * Gets affectAssetNumCommon
    *  **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getAffectAssetNumCommon()
    {
        return $this->container['affectAssetNumCommon'];
    }

    /**
    * Sets affectAssetNumCommon
    *
    * @param int|null $affectAssetNumCommon **参数解释**: 受影响的一般资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setAffectAssetNumCommon($affectAssetNumCommon)
    {
        $this->container['affectAssetNumCommon'] = $affectAssetNumCommon;
        return $this;
    }

    /**
    * Gets affectAssetNumTest
    *  **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getAffectAssetNumTest()
    {
        return $this->container['affectAssetNumTest'];
    }

    /**
    * Sets affectAssetNumTest
    *
    * @param int|null $affectAssetNumTest **参数解释**: 受影响的测试资产数量 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setAffectAssetNumTest($affectAssetNumTest)
    {
        $this->container['affectAssetNumTest'] = $affectAssetNumTest;
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

