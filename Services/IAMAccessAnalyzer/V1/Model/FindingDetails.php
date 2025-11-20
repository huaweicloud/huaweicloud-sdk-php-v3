<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FindingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FindingDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalAccessDetails  externalAccessDetails
    * privilegeEscalationDetails  privilegeEscalationDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    * unusedIamAgencyDetails  unusedIamAgencyDetails
    * iamBpRootUserHasAccessKeyDetails  iamBpRootUserHasAccessKeyDetails
    * iamBpAccessApiWithPasswordDetails  iamBpAccessApiWithPasswordDetails
    * iamBpLoginProtectionDisabledDetails  iamBpLoginProtectionDisabledDetails
    * iamBpMfaUnconfiguredDetails  iamBpMfaUnconfiguredDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToUserDetails  iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    * iamBpAttachHighRiskSysIdentityPolicyToUserDetails  iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails  iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    * iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails  iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalAccessDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ExternalAccessDetails',
            'privilegeEscalationDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PrivilegeEscalationDetails',
            'unusedIamUserAccessKeyDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserAccessKeyDetails',
            'unusedIamUserPasswordDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserPasswordDetails',
            'unusedPermissionDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedPermissionDetails',
            'unusedIamAgencyDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamAgencyDetails',
            'iamBpRootUserHasAccessKeyDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpRootUserHasAccessKeyDetails',
            'iamBpAccessApiWithPasswordDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAccessApiWithPasswordDetails',
            'iamBpLoginProtectionDisabledDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpLoginProtectionDisabledDetails',
            'iamBpMfaUnconfiguredDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpMfaUnconfiguredDetails',
            'iamBpAssignHighRiskSysPolicyOrRoleToUserDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAssignHighRiskSysPolicyOrRoleToUserDetails',
            'iamBpAttachHighRiskSysIdentityPolicyToUserDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAttachHighRiskSysIdentityPolicyToUserDetails',
            'iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails',
            'iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalAccessDetails  externalAccessDetails
    * privilegeEscalationDetails  privilegeEscalationDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    * unusedIamAgencyDetails  unusedIamAgencyDetails
    * iamBpRootUserHasAccessKeyDetails  iamBpRootUserHasAccessKeyDetails
    * iamBpAccessApiWithPasswordDetails  iamBpAccessApiWithPasswordDetails
    * iamBpLoginProtectionDisabledDetails  iamBpLoginProtectionDisabledDetails
    * iamBpMfaUnconfiguredDetails  iamBpMfaUnconfiguredDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToUserDetails  iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    * iamBpAttachHighRiskSysIdentityPolicyToUserDetails  iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails  iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    * iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails  iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalAccessDetails' => null,
        'privilegeEscalationDetails' => null,
        'unusedIamUserAccessKeyDetails' => null,
        'unusedIamUserPasswordDetails' => null,
        'unusedPermissionDetails' => null,
        'unusedIamAgencyDetails' => null,
        'iamBpRootUserHasAccessKeyDetails' => null,
        'iamBpAccessApiWithPasswordDetails' => null,
        'iamBpLoginProtectionDisabledDetails' => null,
        'iamBpMfaUnconfiguredDetails' => null,
        'iamBpAssignHighRiskSysPolicyOrRoleToUserDetails' => null,
        'iamBpAttachHighRiskSysIdentityPolicyToUserDetails' => null,
        'iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails' => null,
        'iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails' => null
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
    * externalAccessDetails  externalAccessDetails
    * privilegeEscalationDetails  privilegeEscalationDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    * unusedIamAgencyDetails  unusedIamAgencyDetails
    * iamBpRootUserHasAccessKeyDetails  iamBpRootUserHasAccessKeyDetails
    * iamBpAccessApiWithPasswordDetails  iamBpAccessApiWithPasswordDetails
    * iamBpLoginProtectionDisabledDetails  iamBpLoginProtectionDisabledDetails
    * iamBpMfaUnconfiguredDetails  iamBpMfaUnconfiguredDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToUserDetails  iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    * iamBpAttachHighRiskSysIdentityPolicyToUserDetails  iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails  iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    * iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails  iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalAccessDetails' => 'external_access_details',
            'privilegeEscalationDetails' => 'privilege_escalation_details',
            'unusedIamUserAccessKeyDetails' => 'unused_iam_user_access_key_details',
            'unusedIamUserPasswordDetails' => 'unused_iam_user_password_details',
            'unusedPermissionDetails' => 'unused_permission_details',
            'unusedIamAgencyDetails' => 'unused_iam_agency_details',
            'iamBpRootUserHasAccessKeyDetails' => 'iam_bp_root_user_has_access_key_details',
            'iamBpAccessApiWithPasswordDetails' => 'iam_bp_access_api_with_password_details',
            'iamBpLoginProtectionDisabledDetails' => 'iam_bp_login_protection_disabled_details',
            'iamBpMfaUnconfiguredDetails' => 'iam_bp_mfa_unconfigured_details',
            'iamBpAssignHighRiskSysPolicyOrRoleToUserDetails' => 'iam_bp_assign_high_risk_sys_policy_or_role_to_user_details',
            'iamBpAttachHighRiskSysIdentityPolicyToUserDetails' => 'iam_bp_attach_high_risk_sys_identity_policy_to_user_details',
            'iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails' => 'iam_bp_assign_high_risk_sys_policy_or_role_to_agency_details',
            'iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails' => 'iam_bp_attach_high_risk_sys_identity_policy_to_agency_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalAccessDetails  externalAccessDetails
    * privilegeEscalationDetails  privilegeEscalationDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    * unusedIamAgencyDetails  unusedIamAgencyDetails
    * iamBpRootUserHasAccessKeyDetails  iamBpRootUserHasAccessKeyDetails
    * iamBpAccessApiWithPasswordDetails  iamBpAccessApiWithPasswordDetails
    * iamBpLoginProtectionDisabledDetails  iamBpLoginProtectionDisabledDetails
    * iamBpMfaUnconfiguredDetails  iamBpMfaUnconfiguredDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToUserDetails  iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    * iamBpAttachHighRiskSysIdentityPolicyToUserDetails  iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails  iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    * iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails  iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @var string[]
    */
    protected static $setters = [
            'externalAccessDetails' => 'setExternalAccessDetails',
            'privilegeEscalationDetails' => 'setPrivilegeEscalationDetails',
            'unusedIamUserAccessKeyDetails' => 'setUnusedIamUserAccessKeyDetails',
            'unusedIamUserPasswordDetails' => 'setUnusedIamUserPasswordDetails',
            'unusedPermissionDetails' => 'setUnusedPermissionDetails',
            'unusedIamAgencyDetails' => 'setUnusedIamAgencyDetails',
            'iamBpRootUserHasAccessKeyDetails' => 'setIamBpRootUserHasAccessKeyDetails',
            'iamBpAccessApiWithPasswordDetails' => 'setIamBpAccessApiWithPasswordDetails',
            'iamBpLoginProtectionDisabledDetails' => 'setIamBpLoginProtectionDisabledDetails',
            'iamBpMfaUnconfiguredDetails' => 'setIamBpMfaUnconfiguredDetails',
            'iamBpAssignHighRiskSysPolicyOrRoleToUserDetails' => 'setIamBpAssignHighRiskSysPolicyOrRoleToUserDetails',
            'iamBpAttachHighRiskSysIdentityPolicyToUserDetails' => 'setIamBpAttachHighRiskSysIdentityPolicyToUserDetails',
            'iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails' => 'setIamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails',
            'iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails' => 'setIamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalAccessDetails  externalAccessDetails
    * privilegeEscalationDetails  privilegeEscalationDetails
    * unusedIamUserAccessKeyDetails  unusedIamUserAccessKeyDetails
    * unusedIamUserPasswordDetails  unusedIamUserPasswordDetails
    * unusedPermissionDetails  unusedPermissionDetails
    * unusedIamAgencyDetails  unusedIamAgencyDetails
    * iamBpRootUserHasAccessKeyDetails  iamBpRootUserHasAccessKeyDetails
    * iamBpAccessApiWithPasswordDetails  iamBpAccessApiWithPasswordDetails
    * iamBpLoginProtectionDisabledDetails  iamBpLoginProtectionDisabledDetails
    * iamBpMfaUnconfiguredDetails  iamBpMfaUnconfiguredDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToUserDetails  iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    * iamBpAttachHighRiskSysIdentityPolicyToUserDetails  iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    * iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails  iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    * iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails  iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @var string[]
    */
    protected static $getters = [
            'externalAccessDetails' => 'getExternalAccessDetails',
            'privilegeEscalationDetails' => 'getPrivilegeEscalationDetails',
            'unusedIamUserAccessKeyDetails' => 'getUnusedIamUserAccessKeyDetails',
            'unusedIamUserPasswordDetails' => 'getUnusedIamUserPasswordDetails',
            'unusedPermissionDetails' => 'getUnusedPermissionDetails',
            'unusedIamAgencyDetails' => 'getUnusedIamAgencyDetails',
            'iamBpRootUserHasAccessKeyDetails' => 'getIamBpRootUserHasAccessKeyDetails',
            'iamBpAccessApiWithPasswordDetails' => 'getIamBpAccessApiWithPasswordDetails',
            'iamBpLoginProtectionDisabledDetails' => 'getIamBpLoginProtectionDisabledDetails',
            'iamBpMfaUnconfiguredDetails' => 'getIamBpMfaUnconfiguredDetails',
            'iamBpAssignHighRiskSysPolicyOrRoleToUserDetails' => 'getIamBpAssignHighRiskSysPolicyOrRoleToUserDetails',
            'iamBpAttachHighRiskSysIdentityPolicyToUserDetails' => 'getIamBpAttachHighRiskSysIdentityPolicyToUserDetails',
            'iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails' => 'getIamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails',
            'iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails' => 'getIamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'
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
        $this->container['externalAccessDetails'] = isset($data['externalAccessDetails']) ? $data['externalAccessDetails'] : null;
        $this->container['privilegeEscalationDetails'] = isset($data['privilegeEscalationDetails']) ? $data['privilegeEscalationDetails'] : null;
        $this->container['unusedIamUserAccessKeyDetails'] = isset($data['unusedIamUserAccessKeyDetails']) ? $data['unusedIamUserAccessKeyDetails'] : null;
        $this->container['unusedIamUserPasswordDetails'] = isset($data['unusedIamUserPasswordDetails']) ? $data['unusedIamUserPasswordDetails'] : null;
        $this->container['unusedPermissionDetails'] = isset($data['unusedPermissionDetails']) ? $data['unusedPermissionDetails'] : null;
        $this->container['unusedIamAgencyDetails'] = isset($data['unusedIamAgencyDetails']) ? $data['unusedIamAgencyDetails'] : null;
        $this->container['iamBpRootUserHasAccessKeyDetails'] = isset($data['iamBpRootUserHasAccessKeyDetails']) ? $data['iamBpRootUserHasAccessKeyDetails'] : null;
        $this->container['iamBpAccessApiWithPasswordDetails'] = isset($data['iamBpAccessApiWithPasswordDetails']) ? $data['iamBpAccessApiWithPasswordDetails'] : null;
        $this->container['iamBpLoginProtectionDisabledDetails'] = isset($data['iamBpLoginProtectionDisabledDetails']) ? $data['iamBpLoginProtectionDisabledDetails'] : null;
        $this->container['iamBpMfaUnconfiguredDetails'] = isset($data['iamBpMfaUnconfiguredDetails']) ? $data['iamBpMfaUnconfiguredDetails'] : null;
        $this->container['iamBpAssignHighRiskSysPolicyOrRoleToUserDetails'] = isset($data['iamBpAssignHighRiskSysPolicyOrRoleToUserDetails']) ? $data['iamBpAssignHighRiskSysPolicyOrRoleToUserDetails'] : null;
        $this->container['iamBpAttachHighRiskSysIdentityPolicyToUserDetails'] = isset($data['iamBpAttachHighRiskSysIdentityPolicyToUserDetails']) ? $data['iamBpAttachHighRiskSysIdentityPolicyToUserDetails'] : null;
        $this->container['iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails'] = isset($data['iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails']) ? $data['iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails'] : null;
        $this->container['iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'] = isset($data['iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails']) ? $data['iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'] : null;
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
    * Gets externalAccessDetails
    *  externalAccessDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ExternalAccessDetails|null
    */
    public function getExternalAccessDetails()
    {
        return $this->container['externalAccessDetails'];
    }

    /**
    * Sets externalAccessDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\ExternalAccessDetails|null $externalAccessDetails externalAccessDetails
    *
    * @return $this
    */
    public function setExternalAccessDetails($externalAccessDetails)
    {
        $this->container['externalAccessDetails'] = $externalAccessDetails;
        return $this;
    }

    /**
    * Gets privilegeEscalationDetails
    *  privilegeEscalationDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PrivilegeEscalationDetails|null
    */
    public function getPrivilegeEscalationDetails()
    {
        return $this->container['privilegeEscalationDetails'];
    }

    /**
    * Sets privilegeEscalationDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\PrivilegeEscalationDetails|null $privilegeEscalationDetails privilegeEscalationDetails
    *
    * @return $this
    */
    public function setPrivilegeEscalationDetails($privilegeEscalationDetails)
    {
        $this->container['privilegeEscalationDetails'] = $privilegeEscalationDetails;
        return $this;
    }

    /**
    * Gets unusedIamUserAccessKeyDetails
    *  unusedIamUserAccessKeyDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserAccessKeyDetails|null
    */
    public function getUnusedIamUserAccessKeyDetails()
    {
        return $this->container['unusedIamUserAccessKeyDetails'];
    }

    /**
    * Sets unusedIamUserAccessKeyDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserAccessKeyDetails|null $unusedIamUserAccessKeyDetails unusedIamUserAccessKeyDetails
    *
    * @return $this
    */
    public function setUnusedIamUserAccessKeyDetails($unusedIamUserAccessKeyDetails)
    {
        $this->container['unusedIamUserAccessKeyDetails'] = $unusedIamUserAccessKeyDetails;
        return $this;
    }

    /**
    * Gets unusedIamUserPasswordDetails
    *  unusedIamUserPasswordDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserPasswordDetails|null
    */
    public function getUnusedIamUserPasswordDetails()
    {
        return $this->container['unusedIamUserPasswordDetails'];
    }

    /**
    * Sets unusedIamUserPasswordDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamUserPasswordDetails|null $unusedIamUserPasswordDetails unusedIamUserPasswordDetails
    *
    * @return $this
    */
    public function setUnusedIamUserPasswordDetails($unusedIamUserPasswordDetails)
    {
        $this->container['unusedIamUserPasswordDetails'] = $unusedIamUserPasswordDetails;
        return $this;
    }

    /**
    * Gets unusedPermissionDetails
    *  unusedPermissionDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedPermissionDetails|null
    */
    public function getUnusedPermissionDetails()
    {
        return $this->container['unusedPermissionDetails'];
    }

    /**
    * Sets unusedPermissionDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedPermissionDetails|null $unusedPermissionDetails unusedPermissionDetails
    *
    * @return $this
    */
    public function setUnusedPermissionDetails($unusedPermissionDetails)
    {
        $this->container['unusedPermissionDetails'] = $unusedPermissionDetails;
        return $this;
    }

    /**
    * Gets unusedIamAgencyDetails
    *  unusedIamAgencyDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamAgencyDetails|null
    */
    public function getUnusedIamAgencyDetails()
    {
        return $this->container['unusedIamAgencyDetails'];
    }

    /**
    * Sets unusedIamAgencyDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\UnusedIamAgencyDetails|null $unusedIamAgencyDetails unusedIamAgencyDetails
    *
    * @return $this
    */
    public function setUnusedIamAgencyDetails($unusedIamAgencyDetails)
    {
        $this->container['unusedIamAgencyDetails'] = $unusedIamAgencyDetails;
        return $this;
    }

    /**
    * Gets iamBpRootUserHasAccessKeyDetails
    *  iamBpRootUserHasAccessKeyDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpRootUserHasAccessKeyDetails|null
    */
    public function getIamBpRootUserHasAccessKeyDetails()
    {
        return $this->container['iamBpRootUserHasAccessKeyDetails'];
    }

    /**
    * Sets iamBpRootUserHasAccessKeyDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpRootUserHasAccessKeyDetails|null $iamBpRootUserHasAccessKeyDetails iamBpRootUserHasAccessKeyDetails
    *
    * @return $this
    */
    public function setIamBpRootUserHasAccessKeyDetails($iamBpRootUserHasAccessKeyDetails)
    {
        $this->container['iamBpRootUserHasAccessKeyDetails'] = $iamBpRootUserHasAccessKeyDetails;
        return $this;
    }

    /**
    * Gets iamBpAccessApiWithPasswordDetails
    *  iamBpAccessApiWithPasswordDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAccessApiWithPasswordDetails|null
    */
    public function getIamBpAccessApiWithPasswordDetails()
    {
        return $this->container['iamBpAccessApiWithPasswordDetails'];
    }

    /**
    * Sets iamBpAccessApiWithPasswordDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAccessApiWithPasswordDetails|null $iamBpAccessApiWithPasswordDetails iamBpAccessApiWithPasswordDetails
    *
    * @return $this
    */
    public function setIamBpAccessApiWithPasswordDetails($iamBpAccessApiWithPasswordDetails)
    {
        $this->container['iamBpAccessApiWithPasswordDetails'] = $iamBpAccessApiWithPasswordDetails;
        return $this;
    }

    /**
    * Gets iamBpLoginProtectionDisabledDetails
    *  iamBpLoginProtectionDisabledDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpLoginProtectionDisabledDetails|null
    */
    public function getIamBpLoginProtectionDisabledDetails()
    {
        return $this->container['iamBpLoginProtectionDisabledDetails'];
    }

    /**
    * Sets iamBpLoginProtectionDisabledDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpLoginProtectionDisabledDetails|null $iamBpLoginProtectionDisabledDetails iamBpLoginProtectionDisabledDetails
    *
    * @return $this
    */
    public function setIamBpLoginProtectionDisabledDetails($iamBpLoginProtectionDisabledDetails)
    {
        $this->container['iamBpLoginProtectionDisabledDetails'] = $iamBpLoginProtectionDisabledDetails;
        return $this;
    }

    /**
    * Gets iamBpMfaUnconfiguredDetails
    *  iamBpMfaUnconfiguredDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpMfaUnconfiguredDetails|null
    */
    public function getIamBpMfaUnconfiguredDetails()
    {
        return $this->container['iamBpMfaUnconfiguredDetails'];
    }

    /**
    * Sets iamBpMfaUnconfiguredDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpMfaUnconfiguredDetails|null $iamBpMfaUnconfiguredDetails iamBpMfaUnconfiguredDetails
    *
    * @return $this
    */
    public function setIamBpMfaUnconfiguredDetails($iamBpMfaUnconfiguredDetails)
    {
        $this->container['iamBpMfaUnconfiguredDetails'] = $iamBpMfaUnconfiguredDetails;
        return $this;
    }

    /**
    * Gets iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    *  iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAssignHighRiskSysPolicyOrRoleToUserDetails|null
    */
    public function getIamBpAssignHighRiskSysPolicyOrRoleToUserDetails()
    {
        return $this->container['iamBpAssignHighRiskSysPolicyOrRoleToUserDetails'];
    }

    /**
    * Sets iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAssignHighRiskSysPolicyOrRoleToUserDetails|null $iamBpAssignHighRiskSysPolicyOrRoleToUserDetails iamBpAssignHighRiskSysPolicyOrRoleToUserDetails
    *
    * @return $this
    */
    public function setIamBpAssignHighRiskSysPolicyOrRoleToUserDetails($iamBpAssignHighRiskSysPolicyOrRoleToUserDetails)
    {
        $this->container['iamBpAssignHighRiskSysPolicyOrRoleToUserDetails'] = $iamBpAssignHighRiskSysPolicyOrRoleToUserDetails;
        return $this;
    }

    /**
    * Gets iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    *  iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAttachHighRiskSysIdentityPolicyToUserDetails|null
    */
    public function getIamBpAttachHighRiskSysIdentityPolicyToUserDetails()
    {
        return $this->container['iamBpAttachHighRiskSysIdentityPolicyToUserDetails'];
    }

    /**
    * Sets iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAttachHighRiskSysIdentityPolicyToUserDetails|null $iamBpAttachHighRiskSysIdentityPolicyToUserDetails iamBpAttachHighRiskSysIdentityPolicyToUserDetails
    *
    * @return $this
    */
    public function setIamBpAttachHighRiskSysIdentityPolicyToUserDetails($iamBpAttachHighRiskSysIdentityPolicyToUserDetails)
    {
        $this->container['iamBpAttachHighRiskSysIdentityPolicyToUserDetails'] = $iamBpAttachHighRiskSysIdentityPolicyToUserDetails;
        return $this;
    }

    /**
    * Gets iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    *  iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails|null
    */
    public function getIamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails()
    {
        return $this->container['iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails'];
    }

    /**
    * Sets iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails|null $iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails
    *
    * @return $this
    */
    public function setIamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails($iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails)
    {
        $this->container['iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails'] = $iamBpAssignHighRiskSysPolicyOrRoleToAgencyDetails;
        return $this;
    }

    /**
    * Gets iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *  iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAttachHighRiskSysIdentityPolicyToAgencyDetails|null
    */
    public function getIamBpAttachHighRiskSysIdentityPolicyToAgencyDetails()
    {
        return $this->container['iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'];
    }

    /**
    * Sets iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IamBpAttachHighRiskSysIdentityPolicyToAgencyDetails|null $iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails
    *
    * @return $this
    */
    public function setIamBpAttachHighRiskSysIdentityPolicyToAgencyDetails($iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails)
    {
        $this->container['iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails'] = $iamBpAttachHighRiskSysIdentityPolicyToAgencyDetails;
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

