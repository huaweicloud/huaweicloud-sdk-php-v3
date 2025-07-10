<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetupLandingZoneReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetupLandingZoneReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityStoreEmail  管理员纳管账号创建Identity Center用户所用邮箱。
    * homeRegion  主区域。
    * setupLandingZoneActionType  设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    * regionConfigurationList  当前纳管账号纳管的区域。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    * organizationStructure  基础环境的纳管账号体系。
    * denyUngovernedRegions  是否允许区域拒绝，默认false。
    * cloudTrailType  是否允许设置组织汇聚。
    * kmsKeyId  加密字段。
    * loggingConfiguration  loggingConfiguration
    * baselineVersion  基线版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityStoreEmail' => 'string',
            'homeRegion' => 'string',
            'setupLandingZoneActionType' => 'string',
            'regionConfigurationList' => '\HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]',
            'identityCenterStatus' => 'string',
            'organizationStructureType' => 'string',
            'organizationStructure' => '\HuaweiCloud\SDK\Rgc\V1\Model\OrganizationStructureBaseLine[]',
            'denyUngovernedRegions' => 'bool',
            'cloudTrailType' => 'bool',
            'kmsKeyId' => 'string',
            'loggingConfiguration' => '\HuaweiCloud\SDK\Rgc\V1\Model\LoggingConfiguration',
            'baselineVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityStoreEmail  管理员纳管账号创建Identity Center用户所用邮箱。
    * homeRegion  主区域。
    * setupLandingZoneActionType  设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    * regionConfigurationList  当前纳管账号纳管的区域。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    * organizationStructure  基础环境的纳管账号体系。
    * denyUngovernedRegions  是否允许区域拒绝，默认false。
    * cloudTrailType  是否允许设置组织汇聚。
    * kmsKeyId  加密字段。
    * loggingConfiguration  loggingConfiguration
    * baselineVersion  基线版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityStoreEmail' => null,
        'homeRegion' => null,
        'setupLandingZoneActionType' => null,
        'regionConfigurationList' => null,
        'identityCenterStatus' => null,
        'organizationStructureType' => null,
        'organizationStructure' => null,
        'denyUngovernedRegions' => null,
        'cloudTrailType' => null,
        'kmsKeyId' => null,
        'loggingConfiguration' => null,
        'baselineVersion' => null
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
    * identityStoreEmail  管理员纳管账号创建Identity Center用户所用邮箱。
    * homeRegion  主区域。
    * setupLandingZoneActionType  设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    * regionConfigurationList  当前纳管账号纳管的区域。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    * organizationStructure  基础环境的纳管账号体系。
    * denyUngovernedRegions  是否允许区域拒绝，默认false。
    * cloudTrailType  是否允许设置组织汇聚。
    * kmsKeyId  加密字段。
    * loggingConfiguration  loggingConfiguration
    * baselineVersion  基线版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityStoreEmail' => 'identity_store_email',
            'homeRegion' => 'home_region',
            'setupLandingZoneActionType' => 'setup_landing_zone_action_type',
            'regionConfigurationList' => 'region_configuration_list',
            'identityCenterStatus' => 'identity_center_status',
            'organizationStructureType' => 'organization_structure_type',
            'organizationStructure' => 'organization_structure',
            'denyUngovernedRegions' => 'deny_ungoverned_regions',
            'cloudTrailType' => 'cloud_trail_type',
            'kmsKeyId' => 'kms_key_id',
            'loggingConfiguration' => 'logging_configuration',
            'baselineVersion' => 'baseline_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityStoreEmail  管理员纳管账号创建Identity Center用户所用邮箱。
    * homeRegion  主区域。
    * setupLandingZoneActionType  设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    * regionConfigurationList  当前纳管账号纳管的区域。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    * organizationStructure  基础环境的纳管账号体系。
    * denyUngovernedRegions  是否允许区域拒绝，默认false。
    * cloudTrailType  是否允许设置组织汇聚。
    * kmsKeyId  加密字段。
    * loggingConfiguration  loggingConfiguration
    * baselineVersion  基线版本
    *
    * @var string[]
    */
    protected static $setters = [
            'identityStoreEmail' => 'setIdentityStoreEmail',
            'homeRegion' => 'setHomeRegion',
            'setupLandingZoneActionType' => 'setSetupLandingZoneActionType',
            'regionConfigurationList' => 'setRegionConfigurationList',
            'identityCenterStatus' => 'setIdentityCenterStatus',
            'organizationStructureType' => 'setOrganizationStructureType',
            'organizationStructure' => 'setOrganizationStructure',
            'denyUngovernedRegions' => 'setDenyUngovernedRegions',
            'cloudTrailType' => 'setCloudTrailType',
            'kmsKeyId' => 'setKmsKeyId',
            'loggingConfiguration' => 'setLoggingConfiguration',
            'baselineVersion' => 'setBaselineVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityStoreEmail  管理员纳管账号创建Identity Center用户所用邮箱。
    * homeRegion  主区域。
    * setupLandingZoneActionType  设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    * regionConfigurationList  当前纳管账号纳管的区域。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    * organizationStructure  基础环境的纳管账号体系。
    * denyUngovernedRegions  是否允许区域拒绝，默认false。
    * cloudTrailType  是否允许设置组织汇聚。
    * kmsKeyId  加密字段。
    * loggingConfiguration  loggingConfiguration
    * baselineVersion  基线版本
    *
    * @var string[]
    */
    protected static $getters = [
            'identityStoreEmail' => 'getIdentityStoreEmail',
            'homeRegion' => 'getHomeRegion',
            'setupLandingZoneActionType' => 'getSetupLandingZoneActionType',
            'regionConfigurationList' => 'getRegionConfigurationList',
            'identityCenterStatus' => 'getIdentityCenterStatus',
            'organizationStructureType' => 'getOrganizationStructureType',
            'organizationStructure' => 'getOrganizationStructure',
            'denyUngovernedRegions' => 'getDenyUngovernedRegions',
            'cloudTrailType' => 'getCloudTrailType',
            'kmsKeyId' => 'getKmsKeyId',
            'loggingConfiguration' => 'getLoggingConfiguration',
            'baselineVersion' => 'getBaselineVersion'
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
    const SETUP_LANDING_ZONE_ACTION_TYPE_CREATE = 'CREATE';
    const SETUP_LANDING_ZONE_ACTION_TYPE_UPDATE = 'UPDATE';
    const SETUP_LANDING_ZONE_ACTION_TYPE_REPAIR = 'REPAIR';
    const IDENTITY_CENTER_STATUS_ENABLE = 'ENABLE';
    const IDENTITY_CENTER_STATUS_DISABLE = 'DISABLE';
    const ORGANIZATION_STRUCTURE_TYPE_STANDARD = 'STANDARD';
    const ORGANIZATION_STRUCTURE_TYPE_NON_STANDARD = 'NON_STANDARD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSetupLandingZoneActionTypeAllowableValues()
    {
        return [
            self::SETUP_LANDING_ZONE_ACTION_TYPE_CREATE,
            self::SETUP_LANDING_ZONE_ACTION_TYPE_UPDATE,
            self::SETUP_LANDING_ZONE_ACTION_TYPE_REPAIR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIdentityCenterStatusAllowableValues()
    {
        return [
            self::IDENTITY_CENTER_STATUS_ENABLE,
            self::IDENTITY_CENTER_STATUS_DISABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrganizationStructureTypeAllowableValues()
    {
        return [
            self::ORGANIZATION_STRUCTURE_TYPE_STANDARD,
            self::ORGANIZATION_STRUCTURE_TYPE_NON_STANDARD,
        ];
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
        $this->container['identityStoreEmail'] = isset($data['identityStoreEmail']) ? $data['identityStoreEmail'] : null;
        $this->container['homeRegion'] = isset($data['homeRegion']) ? $data['homeRegion'] : null;
        $this->container['setupLandingZoneActionType'] = isset($data['setupLandingZoneActionType']) ? $data['setupLandingZoneActionType'] : null;
        $this->container['regionConfigurationList'] = isset($data['regionConfigurationList']) ? $data['regionConfigurationList'] : null;
        $this->container['identityCenterStatus'] = isset($data['identityCenterStatus']) ? $data['identityCenterStatus'] : null;
        $this->container['organizationStructureType'] = isset($data['organizationStructureType']) ? $data['organizationStructureType'] : null;
        $this->container['organizationStructure'] = isset($data['organizationStructure']) ? $data['organizationStructure'] : null;
        $this->container['denyUngovernedRegions'] = isset($data['denyUngovernedRegions']) ? $data['denyUngovernedRegions'] : null;
        $this->container['cloudTrailType'] = isset($data['cloudTrailType']) ? $data['cloudTrailType'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['loggingConfiguration'] = isset($data['loggingConfiguration']) ? $data['loggingConfiguration'] : null;
        $this->container['baselineVersion'] = isset($data['baselineVersion']) ? $data['baselineVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['identityStoreEmail']) && (mb_strlen($this->container['identityStoreEmail']) > 1024)) {
                $invalidProperties[] = "invalid value for 'identityStoreEmail', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['identityStoreEmail']) && (mb_strlen($this->container['identityStoreEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreEmail', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identityStoreEmail']) && !preg_match("/^((([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))$/", $this->container['identityStoreEmail'])) {
                $invalidProperties[] = "invalid value for 'identityStoreEmail', must be conform to the pattern /^((([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([A-Za-z]|\\d|[!#\\$%&'\\*\\+\\-\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([A-Za-z]|\\d|-|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([A-Za-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))$/.";
            }
        if ($this->container['homeRegion'] === null) {
            $invalidProperties[] = "'homeRegion' can't be null";
        }
            if ((mb_strlen($this->container['homeRegion']) > 64)) {
                $invalidProperties[] = "invalid value for 'homeRegion', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['homeRegion']) < 1)) {
                $invalidProperties[] = "invalid value for 'homeRegion', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/", $this->container['homeRegion'])) {
                $invalidProperties[] = "invalid value for 'homeRegion', must be conform to the pattern /[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/.";
            }
        if ($this->container['setupLandingZoneActionType'] === null) {
            $invalidProperties[] = "'setupLandingZoneActionType' can't be null";
        }
            $allowedValues = $this->getSetupLandingZoneActionTypeAllowableValues();
                if (!is_null($this->container['setupLandingZoneActionType']) && !in_array($this->container['setupLandingZoneActionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'setupLandingZoneActionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['regionConfigurationList'] === null) {
            $invalidProperties[] = "'regionConfigurationList' can't be null";
        }
            $allowedValues = $this->getIdentityCenterStatusAllowableValues();
                if (!is_null($this->container['identityCenterStatus']) && !in_array($this->container['identityCenterStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'identityCenterStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrganizationStructureTypeAllowableValues();
                if (!is_null($this->container['organizationStructureType']) && !in_array($this->container['organizationStructureType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'organizationStructureType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['organizationStructure'] === null) {
            $invalidProperties[] = "'organizationStructure' can't be null";
        }
        if ($this->container['loggingConfiguration'] === null) {
            $invalidProperties[] = "'loggingConfiguration' can't be null";
        }
            if (!is_null($this->container['baselineVersion']) && (mb_strlen($this->container['baselineVersion']) > 5)) {
                $invalidProperties[] = "invalid value for 'baselineVersion', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['baselineVersion']) && (mb_strlen($this->container['baselineVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'baselineVersion', the character length must be bigger than or equal to 1.";
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
    * Gets identityStoreEmail
    *  管理员纳管账号创建Identity Center用户所用邮箱。
    *
    * @return string|null
    */
    public function getIdentityStoreEmail()
    {
        return $this->container['identityStoreEmail'];
    }

    /**
    * Sets identityStoreEmail
    *
    * @param string|null $identityStoreEmail 管理员纳管账号创建Identity Center用户所用邮箱。
    *
    * @return $this
    */
    public function setIdentityStoreEmail($identityStoreEmail)
    {
        $this->container['identityStoreEmail'] = $identityStoreEmail;
        return $this;
    }

    /**
    * Gets homeRegion
    *  主区域。
    *
    * @return string
    */
    public function getHomeRegion()
    {
        return $this->container['homeRegion'];
    }

    /**
    * Sets homeRegion
    *
    * @param string $homeRegion 主区域。
    *
    * @return $this
    */
    public function setHomeRegion($homeRegion)
    {
        $this->container['homeRegion'] = $homeRegion;
        return $this;
    }

    /**
    * Gets setupLandingZoneActionType
    *  设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    *
    * @return string
    */
    public function getSetupLandingZoneActionType()
    {
        return $this->container['setupLandingZoneActionType'];
    }

    /**
    * Sets setupLandingZoneActionType
    *
    * @param string $setupLandingZoneActionType 设置Landing Zone的类型。包括CREATE、REPAIR以及UPDATE。
    *
    * @return $this
    */
    public function setSetupLandingZoneActionType($setupLandingZoneActionType)
    {
        $this->container['setupLandingZoneActionType'] = $setupLandingZoneActionType;
        return $this;
    }

    /**
    * Gets regionConfigurationList
    *  当前纳管账号纳管的区域。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]
    */
    public function getRegionConfigurationList()
    {
        return $this->container['regionConfigurationList'];
    }

    /**
    * Sets regionConfigurationList
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[] $regionConfigurationList 当前纳管账号纳管的区域。
    *
    * @return $this
    */
    public function setRegionConfigurationList($regionConfigurationList)
    {
        $this->container['regionConfigurationList'] = $regionConfigurationList;
        return $this;
    }

    /**
    * Gets identityCenterStatus
    *  是否设置Landing Zone的identity center。
    *
    * @return string|null
    */
    public function getIdentityCenterStatus()
    {
        return $this->container['identityCenterStatus'];
    }

    /**
    * Sets identityCenterStatus
    *
    * @param string|null $identityCenterStatus 是否设置Landing Zone的identity center。
    *
    * @return $this
    */
    public function setIdentityCenterStatus($identityCenterStatus)
    {
        $this->container['identityCenterStatus'] = $identityCenterStatus;
        return $this;
    }

    /**
    * Gets organizationStructureType
    *  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @return string|null
    */
    public function getOrganizationStructureType()
    {
        return $this->container['organizationStructureType'];
    }

    /**
    * Sets organizationStructureType
    *
    * @param string|null $organizationStructureType 设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @return $this
    */
    public function setOrganizationStructureType($organizationStructureType)
    {
        $this->container['organizationStructureType'] = $organizationStructureType;
        return $this;
    }

    /**
    * Gets organizationStructure
    *  基础环境的纳管账号体系。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationStructureBaseLine[]
    */
    public function getOrganizationStructure()
    {
        return $this->container['organizationStructure'];
    }

    /**
    * Sets organizationStructure
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationStructureBaseLine[] $organizationStructure 基础环境的纳管账号体系。
    *
    * @return $this
    */
    public function setOrganizationStructure($organizationStructure)
    {
        $this->container['organizationStructure'] = $organizationStructure;
        return $this;
    }

    /**
    * Gets denyUngovernedRegions
    *  是否允许区域拒绝，默认false。
    *
    * @return bool|null
    */
    public function getDenyUngovernedRegions()
    {
        return $this->container['denyUngovernedRegions'];
    }

    /**
    * Sets denyUngovernedRegions
    *
    * @param bool|null $denyUngovernedRegions 是否允许区域拒绝，默认false。
    *
    * @return $this
    */
    public function setDenyUngovernedRegions($denyUngovernedRegions)
    {
        $this->container['denyUngovernedRegions'] = $denyUngovernedRegions;
        return $this;
    }

    /**
    * Gets cloudTrailType
    *  是否允许设置组织汇聚。
    *
    * @return bool|null
    */
    public function getCloudTrailType()
    {
        return $this->container['cloudTrailType'];
    }

    /**
    * Sets cloudTrailType
    *
    * @param bool|null $cloudTrailType 是否允许设置组织汇聚。
    *
    * @return $this
    */
    public function setCloudTrailType($cloudTrailType)
    {
        $this->container['cloudTrailType'] = $cloudTrailType;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  加密字段。
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId 加密字段。
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
        return $this;
    }

    /**
    * Gets loggingConfiguration
    *  loggingConfiguration
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\LoggingConfiguration
    */
    public function getLoggingConfiguration()
    {
        return $this->container['loggingConfiguration'];
    }

    /**
    * Sets loggingConfiguration
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\LoggingConfiguration $loggingConfiguration loggingConfiguration
    *
    * @return $this
    */
    public function setLoggingConfiguration($loggingConfiguration)
    {
        $this->container['loggingConfiguration'] = $loggingConfiguration;
        return $this;
    }

    /**
    * Gets baselineVersion
    *  基线版本
    *
    * @return string|null
    */
    public function getBaselineVersion()
    {
        return $this->container['baselineVersion'];
    }

    /**
    * Sets baselineVersion
    *
    * @param string|null $baselineVersion 基线版本
    *
    * @return $this
    */
    public function setBaselineVersion($baselineVersion)
    {
        $this->container['baselineVersion'] = $baselineVersion;
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

