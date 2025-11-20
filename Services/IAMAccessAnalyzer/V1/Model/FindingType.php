<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class FindingType
{
    /**
     * Possible values of this enum
     */
    const EXTERNAL_ACCESS = 'external_access';
    const PRIVILEGE_ESCALATION = 'privilege_escalation';
    const UNUSED_IAM_USER_ACCESS_KEY = 'unused_iam_user_access_key';
    const UNUSED_IAM_USER_PASSWORD = 'unused_iam_user_password';
    const UNUSED_PERMISSION = 'unused_permission';
    const UNUSED_IAM_AGENCY = 'unused_iam_agency';
    const IAM_BP_ROOT_USER_HAS_ACCESS_KEY = 'iam_bp_root_user_has_access_key';
    const IAM_BP_ACCESS_API_WITH_PASSWORD = 'iam_bp_access_api_with_password';
    const IAM_BP_LOGIN_PROTECTION_DISABLED = 'iam_bp_login_protection_disabled';
    const IAM_BP_MFA_UNCONFIGURED = 'iam_bp_mfa_unconfigured';
    const IAM_BP_ASSIGN_HIGH_RISK_SYS_POLICY_OR_ROLE_TO_USER = 'iam_bp_assign_high_risk_sys_policy_or_role_to_user';
    const IAM_BP_ATTACH_HIGH_RISK_SYS_IDENTITY_POLICY_TO_USER = 'iam_bp_attach_high_risk_sys_identity_policy_to_user';
    const IAM_BP_ASSIGN_HIGH_RISK_SYS_POLICY_OR_ROLE_TO_AGENCY = 'iam_bp_assign_high_risk_sys_policy_or_role_to_agency';
    const IAM_BP_ATTACH_HIGH_RISK_SYS_IDENTITY_POLICY_TO_AGENCY = 'iam_bp_attach_high_risk_sys_identity_policy_to_agency';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTERNAL_ACCESS,
            self::PRIVILEGE_ESCALATION,
            self::UNUSED_IAM_USER_ACCESS_KEY,
            self::UNUSED_IAM_USER_PASSWORD,
            self::UNUSED_PERMISSION,
            self::UNUSED_IAM_AGENCY,
            self::IAM_BP_ROOT_USER_HAS_ACCESS_KEY,
            self::IAM_BP_ACCESS_API_WITH_PASSWORD,
            self::IAM_BP_LOGIN_PROTECTION_DISABLED,
            self::IAM_BP_MFA_UNCONFIGURED,
            self::IAM_BP_ASSIGN_HIGH_RISK_SYS_POLICY_OR_ROLE_TO_USER,
            self::IAM_BP_ATTACH_HIGH_RISK_SYS_IDENTITY_POLICY_TO_USER,
            self::IAM_BP_ASSIGN_HIGH_RISK_SYS_POLICY_OR_ROLE_TO_AGENCY,
            self::IAM_BP_ATTACH_HIGH_RISK_SYS_IDENTITY_POLICY_TO_AGENCY,
        ];
    }
}

