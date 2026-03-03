<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCertificateAuthorityResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCertificateAuthorityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caId  CA证书ID。
    * type  CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
    * status  CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * pathLength  CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    * issuerId  父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
    * issuerName  父CA证书名称。根CA中，此参数为**null**。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名哈希算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  证书序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * freeQuota  免费证书配额。
    * chargingMode  计费模式:   - **0** : 包周期；   - **1** : 按需。
    * clusterId  dhsm集群id。
    * domainId  账号ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'pathLength' => 'int',
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
            'crlConfiguration' => '\HuaweiCloud\SDK\Ccm\V1\Model\ListCrlConfiguration',
            'enterpriseProjectId' => 'string',
            'freeQuota' => 'int',
            'chargingMode' => 'int',
            'clusterId' => 'string',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caId  CA证书ID。
    * type  CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
    * status  CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * pathLength  CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    * issuerId  父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
    * issuerName  父CA证书名称。根CA中，此参数为**null**。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名哈希算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  证书序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * freeQuota  免费证书配额。
    * chargingMode  计费模式:   - **0** : 包周期；   - **1** : 按需。
    * clusterId  dhsm集群id。
    * domainId  账号ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caId' => null,
        'type' => null,
        'status' => null,
        'pathLength' => 'int32',
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
        'crlConfiguration' => null,
        'enterpriseProjectId' => null,
        'freeQuota' => 'int32',
        'chargingMode' => 'int32',
        'clusterId' => null,
        'domainId' => null
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
    * caId  CA证书ID。
    * type  CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
    * status  CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * pathLength  CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    * issuerId  父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
    * issuerName  父CA证书名称。根CA中，此参数为**null**。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名哈希算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  证书序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * freeQuota  免费证书配额。
    * chargingMode  计费模式:   - **0** : 包周期；   - **1** : 按需。
    * clusterId  dhsm集群id。
    * domainId  账号ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caId' => 'ca_id',
            'type' => 'type',
            'status' => 'status',
            'pathLength' => 'path_length',
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
            'crlConfiguration' => 'crl_configuration',
            'enterpriseProjectId' => 'enterprise_project_id',
            'freeQuota' => 'free_quota',
            'chargingMode' => 'charging_mode',
            'clusterId' => 'cluster_id',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caId  CA证书ID。
    * type  CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
    * status  CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * pathLength  CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    * issuerId  父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
    * issuerName  父CA证书名称。根CA中，此参数为**null**。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名哈希算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  证书序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * freeQuota  免费证书配额。
    * chargingMode  计费模式:   - **0** : 包周期；   - **1** : 按需。
    * clusterId  dhsm集群id。
    * domainId  账号ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'caId' => 'setCaId',
            'type' => 'setType',
            'status' => 'setStatus',
            'pathLength' => 'setPathLength',
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
            'crlConfiguration' => 'setCrlConfiguration',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'freeQuota' => 'setFreeQuota',
            'chargingMode' => 'setChargingMode',
            'clusterId' => 'setClusterId',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caId  CA证书ID。
    * type  CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
    * status  CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    * pathLength  CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    * issuerId  父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
    * issuerName  父CA证书名称。根CA中，此参数为**null**。
    * keyAlgorithm  密钥算法。
    * signatureAlgorithm  签名哈希算法。
    * freezeFlag  冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
    * genMode  证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
    * serialNumber  证书序列号。
    * createTime  证书创建时间，格式为时间戳（毫秒级）。
    * deleteTime  证书删除时间，格式为时间戳（毫秒级）。
    * notBefore  证书创建时间，格式为时间戳（毫秒级）。
    * notAfter  证书到期时间，格式为时间戳（毫秒级）。
    * distinguishedName  distinguishedName
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * freeQuota  免费证书配额。
    * chargingMode  计费模式:   - **0** : 包周期；   - **1** : 按需。
    * clusterId  dhsm集群id。
    * domainId  账号ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'caId' => 'getCaId',
            'type' => 'getType',
            'status' => 'getStatus',
            'pathLength' => 'getPathLength',
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
            'crlConfiguration' => 'getCrlConfiguration',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'freeQuota' => 'getFreeQuota',
            'chargingMode' => 'getChargingMode',
            'clusterId' => 'getClusterId',
            'domainId' => 'getDomainId'
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
        $this->container['caId'] = isset($data['caId']) ? $data['caId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['pathLength'] = isset($data['pathLength']) ? $data['pathLength'] : null;
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
        $this->container['crlConfiguration'] = isset($data['crlConfiguration']) ? $data['crlConfiguration'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['freeQuota'] = isset($data['freeQuota']) ? $data['freeQuota'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['caId']) && (mb_strlen($this->container['caId']) > 36)) {
                $invalidProperties[] = "invalid value for 'caId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['caId']) && (mb_strlen($this->container['caId']) < 36)) {
                $invalidProperties[] = "invalid value for 'caId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pathLength']) && ($this->container['pathLength'] > 6)) {
                $invalidProperties[] = "invalid value for 'pathLength', must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['pathLength']) && ($this->container['pathLength'] < 0)) {
                $invalidProperties[] = "invalid value for 'pathLength', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issuerId']) && (mb_strlen($this->container['issuerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['issuerId']) && (mb_strlen($this->container['issuerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['issuerName']) && (mb_strlen($this->container['issuerName']) > 64)) {
                $invalidProperties[] = "invalid value for 'issuerName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['issuerName']) && (mb_strlen($this->container['issuerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'issuerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serialNumber']) && (mb_strlen($this->container['serialNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serialNumber']) && (mb_strlen($this->container['serialNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'serialNumber', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
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
    * Gets caId
    *  CA证书ID。
    *
    * @return string|null
    */
    public function getCaId()
    {
        return $this->container['caId'];
    }

    /**
    * Sets caId
    *
    * @param string|null $caId CA证书ID。
    *
    * @return $this
    */
    public function setCaId($caId)
    {
        $this->container['caId'] = $caId;
        return $this;
    }

    /**
    * Gets type
    *  CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
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
    * @param string|null $type CA类型:   - **ROOT**: 根CA   - **SUBORDINATE**: 从属CA
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status CA证书状态：   - **PENDING** : 待激活，此状态下，不可用于签发证书；   - **ACTIVED** : 已激活，此状态下，可用于签发证书；   - **DISABLED** : 已禁用，此状态下，不可用于签发证书；   - **DELETED** : 计划删除，此状态下，不可用于签发证书；   - **EXPIRED** : 已过期，此状态下，不可用于签发证书。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets pathLength
    *  CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    *
    * @return int|null
    */
    public function getPathLength()
    {
        return $this->container['pathLength'];
    }

    /**
    * Sets pathLength
    *
    * @param int|null $pathLength CA路径长度。 > 注：生成的根CA证书，其路径长度不做限制，但本字段在数据库中统一置为7。从属CA的路径长度在创建时由用户指定，缺省值为0。
    *
    * @return $this
    */
    public function setPathLength($pathLength)
    {
        $this->container['pathLength'] = $pathLength;
        return $this;
    }

    /**
    * Gets issuerId
    *  父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
    *
    * @return string|null
    */
    public function getIssuerId()
    {
        return $this->container['issuerId'];
    }

    /**
    * Sets issuerId
    *
    * @param string|null $issuerId 父CA证书ID，即签发此证书的CA证书ID。根CA中，此参数为**null**。
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
    *  父CA证书名称。根CA中，此参数为**null**。
    *
    * @return string|null
    */
    public function getIssuerName()
    {
        return $this->container['issuerName'];
    }

    /**
    * Sets issuerName
    *
    * @param string|null $issuerName 父CA证书名称。根CA中，此参数为**null**。
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
    * @return string|null
    */
    public function getKeyAlgorithm()
    {
        return $this->container['keyAlgorithm'];
    }

    /**
    * Sets keyAlgorithm
    *
    * @param string|null $keyAlgorithm 密钥算法。
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
    *  签名哈希算法。
    *
    * @return string|null
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string|null $signatureAlgorithm 签名哈希算法。
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
    * @return int|null
    */
    public function getFreezeFlag()
    {
        return $this->container['freezeFlag'];
    }

    /**
    * Sets freezeFlag
    *
    * @param int|null $freezeFlag 冻结标识:   - **0** : 非冻结状态；   - **其它值** : 冻结状态，当前预留。
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
    * @return string|null
    */
    public function getGenMode()
    {
        return $this->container['genMode'];
    }

    /**
    * Sets genMode
    *
    * @param string|null $genMode 证书生成方式：  - **GENERATE** : PCA系统生成；  - **IMPORT** : 外部导入；  - **CSR** : 外部提供CSR，内部CA进行签发，即私钥不在PCA进行托管。
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
    *  证书序列号。
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 证书序列号。
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
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 证书创建时间，格式为时间戳（毫秒级）。
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
    * @return int|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int|null $deleteTime 证书删除时间，格式为时间戳（毫秒级）。
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
    * @return int|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param int|null $notBefore 证书创建时间，格式为时间戳（毫秒级）。
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
    * @return int|null
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param int|null $notAfter 证书到期时间，格式为时间戳（毫秒级）。
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
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName|null
    */
    public function getDistinguishedName()
    {
        return $this->container['distinguishedName'];
    }

    /**
    * Sets distinguishedName
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName|null $distinguishedName distinguishedName
    *
    * @return $this
    */
    public function setDistinguishedName($distinguishedName)
    {
        $this->container['distinguishedName'] = $distinguishedName;
        return $this;
    }

    /**
    * Gets crlConfiguration
    *  crlConfiguration
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\ListCrlConfiguration|null
    */
    public function getCrlConfiguration()
    {
        return $this->container['crlConfiguration'];
    }

    /**
    * Sets crlConfiguration
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\ListCrlConfiguration|null $crlConfiguration crlConfiguration
    *
    * @return $this
    */
    public function setCrlConfiguration($crlConfiguration)
    {
        $this->container['crlConfiguration'] = $crlConfiguration;
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
    * Gets freeQuota
    *  免费证书配额。
    *
    * @return int|null
    */
    public function getFreeQuota()
    {
        return $this->container['freeQuota'];
    }

    /**
    * Sets freeQuota
    *
    * @param int|null $freeQuota 免费证书配额。
    *
    * @return $this
    */
    public function setFreeQuota($freeQuota)
    {
        $this->container['freeQuota'] = $freeQuota;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式:   - **0** : 包周期；   - **1** : 按需。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 计费模式:   - **0** : 包周期；   - **1** : 按需。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets clusterId
    *  dhsm集群id。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId dhsm集群id。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

