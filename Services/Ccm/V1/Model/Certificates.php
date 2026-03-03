<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Certificates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Certificates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateId  私有证书ID。
    * status  证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
    * issuerId  父CA证书ID。
    * issuerName  父CA证书名称。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * encCertInfo  encCertInfo
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateId' => 'string',
            'status' => 'string',
            'issuerId' => 'string',
            'issuerName' => 'string',
            'keyAlgorithm' => 'string',
            'signatureAlgorithm' => 'string',
            'freezeFlag' => 'int',
            'genMode' => 'string',
            'serialNumber' => 'string',
            'createTime' => 'int',
            'deleteTime' => 'int',
            'notBefore' => 'int',
            'notAfter' => 'int',
            'distinguishedName' => '\HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName',
            'encCertInfo' => '\HuaweiCloud\SDK\Ccm\V1\Model\EncCertInfo',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateId  私有证书ID。
    * status  证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
    * issuerId  父CA证书ID。
    * issuerName  父CA证书名称。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * encCertInfo  encCertInfo
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateId' => null,
        'status' => null,
        'issuerId' => null,
        'issuerName' => null,
        'keyAlgorithm' => null,
        'signatureAlgorithm' => null,
        'freezeFlag' => 'int32',
        'genMode' => null,
        'serialNumber' => null,
        'createTime' => 'int64',
        'deleteTime' => 'int64',
        'notBefore' => 'int64',
        'notAfter' => 'int64',
        'distinguishedName' => null,
        'encCertInfo' => null,
        'enterpriseProjectId' => null
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
    * certificateId  私有证书ID。
    * status  证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
    * issuerId  父CA证书ID。
    * issuerName  父CA证书名称。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * encCertInfo  encCertInfo
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateId' => 'certificate_id',
            'status' => 'status',
            'issuerId' => 'issuer_id',
            'issuerName' => 'issuer_name',
            'keyAlgorithm' => 'key_algorithm',
            'signatureAlgorithm' => 'signature_algorithm',
            'freezeFlag' => 'freeze_flag',
            'genMode' => 'gen_mode',
            'serialNumber' => 'serial_number',
            'createTime' => 'create_time',
            'deleteTime' => 'delete_time',
            'notBefore' => 'not_before',
            'notAfter' => 'not_after',
            'distinguishedName' => 'distinguished_name',
            'encCertInfo' => 'enc_cert_info',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateId  私有证书ID。
    * status  证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
    * issuerId  父CA证书ID。
    * issuerName  父CA证书名称。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * encCertInfo  encCertInfo
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateId' => 'setCertificateId',
            'status' => 'setStatus',
            'issuerId' => 'setIssuerId',
            'issuerName' => 'setIssuerName',
            'keyAlgorithm' => 'setKeyAlgorithm',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'freezeFlag' => 'setFreezeFlag',
            'genMode' => 'setGenMode',
            'serialNumber' => 'setSerialNumber',
            'createTime' => 'setCreateTime',
            'deleteTime' => 'setDeleteTime',
            'notBefore' => 'setNotBefore',
            'notAfter' => 'setNotAfter',
            'distinguishedName' => 'setDistinguishedName',
            'encCertInfo' => 'setEncCertInfo',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateId  私有证书ID。
    * status  证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
    * issuerId  父CA证书ID。
    * issuerName  父CA证书名称。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * encCertInfo  encCertInfo
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateId' => 'getCertificateId',
            'status' => 'getStatus',
            'issuerId' => 'getIssuerId',
            'issuerName' => 'getIssuerName',
            'keyAlgorithm' => 'getKeyAlgorithm',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'freezeFlag' => 'getFreezeFlag',
            'genMode' => 'getGenMode',
            'serialNumber' => 'getSerialNumber',
            'createTime' => 'getCreateTime',
            'deleteTime' => 'getDeleteTime',
            'notBefore' => 'getNotBefore',
            'notAfter' => 'getNotAfter',
            'distinguishedName' => 'getDistinguishedName',
            'encCertInfo' => 'getEncCertInfo',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['issuerId'] = isset($data['issuerId']) ? $data['issuerId'] : null;
        $this->container['issuerName'] = isset($data['issuerName']) ? $data['issuerName'] : null;
        $this->container['keyAlgorithm'] = isset($data['keyAlgorithm']) ? $data['keyAlgorithm'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['freezeFlag'] = isset($data['freezeFlag']) ? $data['freezeFlag'] : null;
        $this->container['genMode'] = isset($data['genMode']) ? $data['genMode'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['distinguishedName'] = isset($data['distinguishedName']) ? $data['distinguishedName'] : null;
        $this->container['encCertInfo'] = isset($data['encCertInfo']) ? $data['encCertInfo'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificateId'] === null) {
            $invalidProperties[] = "'certificateId' can't be null";
        }
            if ((mb_strlen($this->container['certificateId']) > 36)) {
                $invalidProperties[] = "invalid value for 'certificateId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['certificateId']) < 36)) {
                $invalidProperties[] = "invalid value for 'certificateId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['issuerId'] === null) {
            $invalidProperties[] = "'issuerId' can't be null";
        }
            if ((mb_strlen($this->container['issuerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['issuerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['issuerName'] === null) {
            $invalidProperties[] = "'issuerName' can't be null";
        }
            if ((mb_strlen($this->container['issuerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'issuerName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['issuerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'issuerName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['keyAlgorithm'] === null) {
            $invalidProperties[] = "'keyAlgorithm' can't be null";
        }
        if ($this->container['signatureAlgorithm'] === null) {
            $invalidProperties[] = "'signatureAlgorithm' can't be null";
        }
        if ($this->container['freezeFlag'] === null) {
            $invalidProperties[] = "'freezeFlag' can't be null";
        }
        if ($this->container['genMode'] === null) {
            $invalidProperties[] = "'genMode' can't be null";
        }
        if ($this->container['serialNumber'] === null) {
            $invalidProperties[] = "'serialNumber' can't be null";
        }
            if ((mb_strlen($this->container['serialNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serialNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['deleteTime'] === null) {
            $invalidProperties[] = "'deleteTime' can't be null";
        }
        if ($this->container['notBefore'] === null) {
            $invalidProperties[] = "'notBefore' can't be null";
        }
        if ($this->container['notAfter'] === null) {
            $invalidProperties[] = "'notAfter' can't be null";
        }
        if ($this->container['distinguishedName'] === null) {
            $invalidProperties[] = "'distinguishedName' can't be null";
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
    * Gets certificateId
    *  私有证书ID。
    *
    * @return string
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string $certificateId 私有证书ID。
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets status
    *  证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
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
    * @param string $status 证书状态：   - **ISSUED** : 已签发；   - **EXPIRED** : 已过期；   - **REVOKED** : 已吊销。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets issuerId
    *  父CA证书ID。
    *
    * @return string
    */
    public function getIssuerId()
    {
        return $this->container['issuerId'];
    }

    /**
    * Sets issuerId
    *
    * @param string $issuerId 父CA证书ID。
    *
    * @return $this
    */
    public function setIssuerId($issuerId)
    {
        $this->container['issuerId'] = $issuerId;
        return $this;
    }

    /**
    * Gets issuerName
    *  父CA证书名称。
    *
    * @return string
    */
    public function getIssuerName()
    {
        return $this->container['issuerName'];
    }

    /**
    * Sets issuerName
    *
    * @param string $issuerName 父CA证书名称。
    *
    * @return $this
    */
    public function setIssuerName($issuerName)
    {
        $this->container['issuerName'] = $issuerName;
        return $this;
    }

    /**
    * Gets keyAlgorithm
    *  密钥算法。
    *
    * @return string
    */
    public function getKeyAlgorithm()
    {
        return $this->container['keyAlgorithm'];
    }

    /**
    * Sets keyAlgorithm
    *
    * @param string $keyAlgorithm 密钥算法。
    *
    * @return $this
    */
    public function setKeyAlgorithm($keyAlgorithm)
    {
        $this->container['keyAlgorithm'] = $keyAlgorithm;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  签名算法。
    *
    * @return string
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string $signatureAlgorithm 签名算法。
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets freezeFlag
    *  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    *
    * @return int
    */
    public function getFreezeFlag()
    {
        return $this->container['freezeFlag'];
    }

    /**
    * Sets freezeFlag
    *
    * @param int $freezeFlag 冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    *
    * @return $this
    */
    public function setFreezeFlag($freezeFlag)
    {
        $this->container['freezeFlag'] = $freezeFlag;
        return $this;
    }

    /**
    * Gets genMode
    *  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    *
    * @return string
    */
    public function getGenMode()
    {
        return $this->container['genMode'];
    }

    /**
    * Sets genMode
    *
    * @param string $genMode 证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    *
    * @return $this
    */
    public function setGenMode($genMode)
    {
        $this->container['genMode'] = $genMode;
        return $this;
    }

    /**
    * Gets serialNumber
    *  序列号。
    *
    * @return string
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string $serialNumber 序列号。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets createTime
    *  证书创建时间，格式为时间戳（毫秒级）。
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 证书创建时间，格式为时间戳（毫秒级）。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deleteTime
    *  证书删除时间，格式为时间戳（毫秒级）。
    *
    * @return int
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int $deleteTime 证书删除时间，格式为时间戳（毫秒级）。
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets notBefore
    *  证书创建时间，格式为时间戳（毫秒级）。
    *
    * @return int
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param int $notBefore 证书创建时间，格式为时间戳（毫秒级）。
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets notAfter
    *  证书到期时间，格式为时间戳（毫秒级）。
    *
    * @return int
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param int $notAfter 证书到期时间，格式为时间戳（毫秒级）。
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets distinguishedName
    *  distinguishedName
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName
    */
    public function getDistinguishedName()
    {
        return $this->container['distinguishedName'];
    }

    /**
    * Sets distinguishedName
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName $distinguishedName distinguishedName
    *
    * @return $this
    */
    public function setDistinguishedName($distinguishedName)
    {
        $this->container['distinguishedName'] = $distinguishedName;
        return $this;
    }

    /**
    * Gets encCertInfo
    *  encCertInfo
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\EncCertInfo|null
    */
    public function getEncCertInfo()
    {
        return $this->container['encCertInfo'];
    }

    /**
    * Sets encCertInfo
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\EncCertInfo|null $encCertInfo encCertInfo
    *
    * @return $this
    */
    public function setEncCertInfo($encCertInfo)
    {
        $this->container['encCertInfo'] = $encCertInfo;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

