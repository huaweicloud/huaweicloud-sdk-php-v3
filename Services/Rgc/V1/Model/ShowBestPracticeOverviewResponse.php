<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBestPracticeOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBestPracticeOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalScore  总分数
    * detectTime  检测完成时间
    * organizationAccount  organizationAccount
    * identityPermission  identityPermission
    * networkPlanning  networkPlanning
    * complianceAudit  complianceAudit
    * financialGovernance  financialGovernance
    * dataBoundary  dataBoundary
    * omMonitor  omMonitor
    * securityManagement  securityManagement
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalScore' => 'float',
            'detectTime' => 'string',
            'organizationAccount' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'identityPermission' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'networkPlanning' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'complianceAudit' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'financialGovernance' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'dataBoundary' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'omMonitor' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem',
            'securityManagement' => '\HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalScore  总分数
    * detectTime  检测完成时间
    * organizationAccount  organizationAccount
    * identityPermission  identityPermission
    * networkPlanning  networkPlanning
    * complianceAudit  complianceAudit
    * financialGovernance  financialGovernance
    * dataBoundary  dataBoundary
    * omMonitor  omMonitor
    * securityManagement  securityManagement
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalScore' => null,
        'detectTime' => null,
        'organizationAccount' => null,
        'identityPermission' => null,
        'networkPlanning' => null,
        'complianceAudit' => null,
        'financialGovernance' => null,
        'dataBoundary' => null,
        'omMonitor' => null,
        'securityManagement' => null
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
    * totalScore  总分数
    * detectTime  检测完成时间
    * organizationAccount  organizationAccount
    * identityPermission  identityPermission
    * networkPlanning  networkPlanning
    * complianceAudit  complianceAudit
    * financialGovernance  financialGovernance
    * dataBoundary  dataBoundary
    * omMonitor  omMonitor
    * securityManagement  securityManagement
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalScore' => 'total_score',
            'detectTime' => 'detect_time',
            'organizationAccount' => 'organization_account',
            'identityPermission' => 'identity_permission',
            'networkPlanning' => 'network_planning',
            'complianceAudit' => 'compliance_audit',
            'financialGovernance' => 'financial_governance',
            'dataBoundary' => 'data_boundary',
            'omMonitor' => 'om_monitor',
            'securityManagement' => 'security_management'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalScore  总分数
    * detectTime  检测完成时间
    * organizationAccount  organizationAccount
    * identityPermission  identityPermission
    * networkPlanning  networkPlanning
    * complianceAudit  complianceAudit
    * financialGovernance  financialGovernance
    * dataBoundary  dataBoundary
    * omMonitor  omMonitor
    * securityManagement  securityManagement
    *
    * @var string[]
    */
    protected static $setters = [
            'totalScore' => 'setTotalScore',
            'detectTime' => 'setDetectTime',
            'organizationAccount' => 'setOrganizationAccount',
            'identityPermission' => 'setIdentityPermission',
            'networkPlanning' => 'setNetworkPlanning',
            'complianceAudit' => 'setComplianceAudit',
            'financialGovernance' => 'setFinancialGovernance',
            'dataBoundary' => 'setDataBoundary',
            'omMonitor' => 'setOmMonitor',
            'securityManagement' => 'setSecurityManagement'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalScore  总分数
    * detectTime  检测完成时间
    * organizationAccount  organizationAccount
    * identityPermission  identityPermission
    * networkPlanning  networkPlanning
    * complianceAudit  complianceAudit
    * financialGovernance  financialGovernance
    * dataBoundary  dataBoundary
    * omMonitor  omMonitor
    * securityManagement  securityManagement
    *
    * @var string[]
    */
    protected static $getters = [
            'totalScore' => 'getTotalScore',
            'detectTime' => 'getDetectTime',
            'organizationAccount' => 'getOrganizationAccount',
            'identityPermission' => 'getIdentityPermission',
            'networkPlanning' => 'getNetworkPlanning',
            'complianceAudit' => 'getComplianceAudit',
            'financialGovernance' => 'getFinancialGovernance',
            'dataBoundary' => 'getDataBoundary',
            'omMonitor' => 'getOmMonitor',
            'securityManagement' => 'getSecurityManagement'
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
        $this->container['totalScore'] = isset($data['totalScore']) ? $data['totalScore'] : null;
        $this->container['detectTime'] = isset($data['detectTime']) ? $data['detectTime'] : null;
        $this->container['organizationAccount'] = isset($data['organizationAccount']) ? $data['organizationAccount'] : null;
        $this->container['identityPermission'] = isset($data['identityPermission']) ? $data['identityPermission'] : null;
        $this->container['networkPlanning'] = isset($data['networkPlanning']) ? $data['networkPlanning'] : null;
        $this->container['complianceAudit'] = isset($data['complianceAudit']) ? $data['complianceAudit'] : null;
        $this->container['financialGovernance'] = isset($data['financialGovernance']) ? $data['financialGovernance'] : null;
        $this->container['dataBoundary'] = isset($data['dataBoundary']) ? $data['dataBoundary'] : null;
        $this->container['omMonitor'] = isset($data['omMonitor']) ? $data['omMonitor'] : null;
        $this->container['securityManagement'] = isset($data['securityManagement']) ? $data['securityManagement'] : null;
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
    * Gets totalScore
    *  总分数
    *
    * @return float|null
    */
    public function getTotalScore()
    {
        return $this->container['totalScore'];
    }

    /**
    * Sets totalScore
    *
    * @param float|null $totalScore 总分数
    *
    * @return $this
    */
    public function setTotalScore($totalScore)
    {
        $this->container['totalScore'] = $totalScore;
        return $this;
    }

    /**
    * Gets detectTime
    *  检测完成时间
    *
    * @return string|null
    */
    public function getDetectTime()
    {
        return $this->container['detectTime'];
    }

    /**
    * Sets detectTime
    *
    * @param string|null $detectTime 检测完成时间
    *
    * @return $this
    */
    public function setDetectTime($detectTime)
    {
        $this->container['detectTime'] = $detectTime;
        return $this;
    }

    /**
    * Gets organizationAccount
    *  organizationAccount
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getOrganizationAccount()
    {
        return $this->container['organizationAccount'];
    }

    /**
    * Sets organizationAccount
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $organizationAccount organizationAccount
    *
    * @return $this
    */
    public function setOrganizationAccount($organizationAccount)
    {
        $this->container['organizationAccount'] = $organizationAccount;
        return $this;
    }

    /**
    * Gets identityPermission
    *  identityPermission
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getIdentityPermission()
    {
        return $this->container['identityPermission'];
    }

    /**
    * Sets identityPermission
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $identityPermission identityPermission
    *
    * @return $this
    */
    public function setIdentityPermission($identityPermission)
    {
        $this->container['identityPermission'] = $identityPermission;
        return $this;
    }

    /**
    * Gets networkPlanning
    *  networkPlanning
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getNetworkPlanning()
    {
        return $this->container['networkPlanning'];
    }

    /**
    * Sets networkPlanning
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $networkPlanning networkPlanning
    *
    * @return $this
    */
    public function setNetworkPlanning($networkPlanning)
    {
        $this->container['networkPlanning'] = $networkPlanning;
        return $this;
    }

    /**
    * Gets complianceAudit
    *  complianceAudit
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getComplianceAudit()
    {
        return $this->container['complianceAudit'];
    }

    /**
    * Sets complianceAudit
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $complianceAudit complianceAudit
    *
    * @return $this
    */
    public function setComplianceAudit($complianceAudit)
    {
        $this->container['complianceAudit'] = $complianceAudit;
        return $this;
    }

    /**
    * Gets financialGovernance
    *  financialGovernance
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getFinancialGovernance()
    {
        return $this->container['financialGovernance'];
    }

    /**
    * Sets financialGovernance
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $financialGovernance financialGovernance
    *
    * @return $this
    */
    public function setFinancialGovernance($financialGovernance)
    {
        $this->container['financialGovernance'] = $financialGovernance;
        return $this;
    }

    /**
    * Gets dataBoundary
    *  dataBoundary
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getDataBoundary()
    {
        return $this->container['dataBoundary'];
    }

    /**
    * Sets dataBoundary
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $dataBoundary dataBoundary
    *
    * @return $this
    */
    public function setDataBoundary($dataBoundary)
    {
        $this->container['dataBoundary'] = $dataBoundary;
        return $this;
    }

    /**
    * Gets omMonitor
    *  omMonitor
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getOmMonitor()
    {
        return $this->container['omMonitor'];
    }

    /**
    * Sets omMonitor
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $omMonitor omMonitor
    *
    * @return $this
    */
    public function setOmMonitor($omMonitor)
    {
        $this->container['omMonitor'] = $omMonitor;
        return $this;
    }

    /**
    * Gets securityManagement
    *  securityManagement
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null
    */
    public function getSecurityManagement()
    {
        return $this->container['securityManagement'];
    }

    /**
    * Sets securityManagement
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\BestPracticeOverviewItem|null $securityManagement securityManagement
    *
    * @return $this
    */
    public function setSecurityManagement($securityManagement)
    {
        $this->container['securityManagement'] = $securityManagement;
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

