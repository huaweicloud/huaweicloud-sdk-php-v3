<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcDomain';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名名称
    * expireDate  域名到期时间，eg：2023-01-10
    * status  域名服务状态
    * auditStatus  域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    * auditUnpassReason  域名实名认证失败原因
    * transferStatus  过户状态
    * regType  注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    * privacyProtection  是否开启隐私保护
    * nameServer  域名服务器列表
    * credentialType  证件类型
    * credentialId  证件号码
    * registrar  域名所属注册商
    * contact  联系人信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'expireDate' => 'string',
            'status' => 'string',
            'auditStatus' => 'string',
            'auditUnpassReason' => 'string',
            'transferStatus' => 'string',
            'regType' => 'string',
            'privacyProtection' => 'string',
            'nameServer' => 'string[]',
            'credentialType' => 'string',
            'credentialId' => 'string',
            'registrar' => 'string',
            'contact' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcDomainContact[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名名称
    * expireDate  域名到期时间，eg：2023-01-10
    * status  域名服务状态
    * auditStatus  域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    * auditUnpassReason  域名实名认证失败原因
    * transferStatus  过户状态
    * regType  注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    * privacyProtection  是否开启隐私保护
    * nameServer  域名服务器列表
    * credentialType  证件类型
    * credentialId  证件号码
    * registrar  域名所属注册商
    * contact  联系人信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'expireDate' => null,
        'status' => null,
        'auditStatus' => null,
        'auditUnpassReason' => null,
        'transferStatus' => null,
        'regType' => null,
        'privacyProtection' => null,
        'nameServer' => null,
        'credentialType' => null,
        'credentialId' => null,
        'registrar' => null,
        'contact' => null
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
    * domainName  域名名称
    * expireDate  域名到期时间，eg：2023-01-10
    * status  域名服务状态
    * auditStatus  域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    * auditUnpassReason  域名实名认证失败原因
    * transferStatus  过户状态
    * regType  注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    * privacyProtection  是否开启隐私保护
    * nameServer  域名服务器列表
    * credentialType  证件类型
    * credentialId  证件号码
    * registrar  域名所属注册商
    * contact  联系人信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'expireDate' => 'expire_date',
            'status' => 'status',
            'auditStatus' => 'audit_status',
            'auditUnpassReason' => 'audit_unpass_reason',
            'transferStatus' => 'transfer_status',
            'regType' => 'reg_type',
            'privacyProtection' => 'privacy_protection',
            'nameServer' => 'name_server',
            'credentialType' => 'credential_type',
            'credentialId' => 'credential_id',
            'registrar' => 'registrar',
            'contact' => 'contact'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名名称
    * expireDate  域名到期时间，eg：2023-01-10
    * status  域名服务状态
    * auditStatus  域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    * auditUnpassReason  域名实名认证失败原因
    * transferStatus  过户状态
    * regType  注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    * privacyProtection  是否开启隐私保护
    * nameServer  域名服务器列表
    * credentialType  证件类型
    * credentialId  证件号码
    * registrar  域名所属注册商
    * contact  联系人信息
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'expireDate' => 'setExpireDate',
            'status' => 'setStatus',
            'auditStatus' => 'setAuditStatus',
            'auditUnpassReason' => 'setAuditUnpassReason',
            'transferStatus' => 'setTransferStatus',
            'regType' => 'setRegType',
            'privacyProtection' => 'setPrivacyProtection',
            'nameServer' => 'setNameServer',
            'credentialType' => 'setCredentialType',
            'credentialId' => 'setCredentialId',
            'registrar' => 'setRegistrar',
            'contact' => 'setContact'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名名称
    * expireDate  域名到期时间，eg：2023-01-10
    * status  域名服务状态
    * auditStatus  域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    * auditUnpassReason  域名实名认证失败原因
    * transferStatus  过户状态
    * regType  注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    * privacyProtection  是否开启隐私保护
    * nameServer  域名服务器列表
    * credentialType  证件类型
    * credentialId  证件号码
    * registrar  域名所属注册商
    * contact  联系人信息
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'expireDate' => 'getExpireDate',
            'status' => 'getStatus',
            'auditStatus' => 'getAuditStatus',
            'auditUnpassReason' => 'getAuditUnpassReason',
            'transferStatus' => 'getTransferStatus',
            'regType' => 'getRegType',
            'privacyProtection' => 'getPrivacyProtection',
            'nameServer' => 'getNameServer',
            'credentialType' => 'getCredentialType',
            'credentialId' => 'getCredentialId',
            'registrar' => 'getRegistrar',
            'contact' => 'getContact'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['auditStatus'] = isset($data['auditStatus']) ? $data['auditStatus'] : null;
        $this->container['auditUnpassReason'] = isset($data['auditUnpassReason']) ? $data['auditUnpassReason'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['regType'] = isset($data['regType']) ? $data['regType'] : null;
        $this->container['privacyProtection'] = isset($data['privacyProtection']) ? $data['privacyProtection'] : null;
        $this->container['nameServer'] = isset($data['nameServer']) ? $data['nameServer'] : null;
        $this->container['credentialType'] = isset($data['credentialType']) ? $data['credentialType'] : null;
        $this->container['credentialId'] = isset($data['credentialId']) ? $data['credentialId'] : null;
        $this->container['registrar'] = isset($data['registrar']) ? $data['registrar'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 256)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['expireDate'] === null) {
            $invalidProperties[] = "'expireDate' can't be null";
        }
            if ((mb_strlen($this->container['expireDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'expireDate', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['expireDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireDate', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['auditStatus'] === null) {
            $invalidProperties[] = "'auditStatus' can't be null";
        }
            if ((mb_strlen($this->container['auditStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'auditStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['auditStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'auditStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['auditUnpassReason'] === null) {
            $invalidProperties[] = "'auditUnpassReason' can't be null";
        }
            if ((mb_strlen($this->container['auditUnpassReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'auditUnpassReason', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['auditUnpassReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'auditUnpassReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transferStatus']) && (mb_strlen($this->container['transferStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'transferStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['transferStatus']) && (mb_strlen($this->container['transferStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'transferStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regType'] === null) {
            $invalidProperties[] = "'regType' can't be null";
        }
            if ((mb_strlen($this->container['regType']) > 32)) {
                $invalidProperties[] = "invalid value for 'regType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regType']) < 0)) {
                $invalidProperties[] = "invalid value for 'regType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['privacyProtection'] === null) {
            $invalidProperties[] = "'privacyProtection' can't be null";
        }
            if ((mb_strlen($this->container['privacyProtection']) > 32)) {
                $invalidProperties[] = "invalid value for 'privacyProtection', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['privacyProtection']) < 0)) {
                $invalidProperties[] = "invalid value for 'privacyProtection', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nameServer'] === null) {
            $invalidProperties[] = "'nameServer' can't be null";
        }
        if ($this->container['credentialType'] === null) {
            $invalidProperties[] = "'credentialType' can't be null";
        }
            if ((mb_strlen($this->container['credentialType']) > 32)) {
                $invalidProperties[] = "invalid value for 'credentialType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['credentialType']) < 0)) {
                $invalidProperties[] = "invalid value for 'credentialType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['credentialId'] === null) {
            $invalidProperties[] = "'credentialId' can't be null";
        }
            if ((mb_strlen($this->container['credentialId']) > 128)) {
                $invalidProperties[] = "invalid value for 'credentialId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['credentialId']) < 0)) {
                $invalidProperties[] = "invalid value for 'credentialId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['registrar'] === null) {
            $invalidProperties[] = "'registrar' can't be null";
        }
            if ((mb_strlen($this->container['registrar']) > 128)) {
                $invalidProperties[] = "invalid value for 'registrar', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['registrar']) < 0)) {
                $invalidProperties[] = "invalid value for 'registrar', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
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
    * Gets domainName
    *  域名名称
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域名名称
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets expireDate
    *  域名到期时间，eg：2023-01-10
    *
    * @return string
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param string $expireDate 域名到期时间，eg：2023-01-10
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
        return $this;
    }

    /**
    * Gets status
    *  域名服务状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 域名服务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets auditStatus
    *  域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    *
    * @return string
    */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
    * Sets auditStatus
    *
    * @param string $auditStatus 域名实名认证状态。 取值范围： NONAUDIT：未实名认证 SUCCEED：已实名认证 FAILED：实名认证失败 AUDITING：实名认证审核中
    *
    * @return $this
    */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;
        return $this;
    }

    /**
    * Gets auditUnpassReason
    *  域名实名认证失败原因
    *
    * @return string
    */
    public function getAuditUnpassReason()
    {
        return $this->container['auditUnpassReason'];
    }

    /**
    * Sets auditUnpassReason
    *
    * @param string $auditUnpassReason 域名实名认证失败原因
    *
    * @return $this
    */
    public function setAuditUnpassReason($auditUnpassReason)
    {
        $this->container['auditUnpassReason'] = $auditUnpassReason;
        return $this;
    }

    /**
    * Gets transferStatus
    *  过户状态
    *
    * @return string|null
    */
    public function getTransferStatus()
    {
        return $this->container['transferStatus'];
    }

    /**
    * Sets transferStatus
    *
    * @param string|null $transferStatus 过户状态
    *
    * @return $this
    */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;
        return $this;
    }

    /**
    * Gets regType
    *  注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    *
    * @return string
    */
    public function getRegType()
    {
        return $this->container['regType'];
    }

    /**
    * Sets regType
    *
    * @param string $regType 注册类型 取值范围： PERSONAL：个人 COMPANY：企业
    *
    * @return $this
    */
    public function setRegType($regType)
    {
        $this->container['regType'] = $regType;
        return $this;
    }

    /**
    * Gets privacyProtection
    *  是否开启隐私保护
    *
    * @return string
    */
    public function getPrivacyProtection()
    {
        return $this->container['privacyProtection'];
    }

    /**
    * Sets privacyProtection
    *
    * @param string $privacyProtection 是否开启隐私保护
    *
    * @return $this
    */
    public function setPrivacyProtection($privacyProtection)
    {
        $this->container['privacyProtection'] = $privacyProtection;
        return $this;
    }

    /**
    * Gets nameServer
    *  域名服务器列表
    *
    * @return string[]
    */
    public function getNameServer()
    {
        return $this->container['nameServer'];
    }

    /**
    * Sets nameServer
    *
    * @param string[] $nameServer 域名服务器列表
    *
    * @return $this
    */
    public function setNameServer($nameServer)
    {
        $this->container['nameServer'] = $nameServer;
        return $this;
    }

    /**
    * Gets credentialType
    *  证件类型
    *
    * @return string
    */
    public function getCredentialType()
    {
        return $this->container['credentialType'];
    }

    /**
    * Sets credentialType
    *
    * @param string $credentialType 证件类型
    *
    * @return $this
    */
    public function setCredentialType($credentialType)
    {
        $this->container['credentialType'] = $credentialType;
        return $this;
    }

    /**
    * Gets credentialId
    *  证件号码
    *
    * @return string
    */
    public function getCredentialId()
    {
        return $this->container['credentialId'];
    }

    /**
    * Sets credentialId
    *
    * @param string $credentialId 证件号码
    *
    * @return $this
    */
    public function setCredentialId($credentialId)
    {
        $this->container['credentialId'] = $credentialId;
        return $this;
    }

    /**
    * Gets registrar
    *  域名所属注册商
    *
    * @return string
    */
    public function getRegistrar()
    {
        return $this->container['registrar'];
    }

    /**
    * Sets registrar
    *
    * @param string $registrar 域名所属注册商
    *
    * @return $this
    */
    public function setRegistrar($registrar)
    {
        $this->container['registrar'] = $registrar;
        return $this;
    }

    /**
    * Gets contact
    *  联系人信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcDomainContact[]
    */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
    * Sets contact
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcDomainContact[] $contact 联系人信息
    *
    * @return $this
    */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;
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

