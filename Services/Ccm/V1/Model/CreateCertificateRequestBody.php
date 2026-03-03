<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issuerId  父CA证书ID。
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * signatureAlgorithm  签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
    * distinguishedName  distinguishedName
    * validity  validity
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    * subjectAlternativeNames  主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    * extendedKeyUsage  extendedKeyUsage
    * customizedExtension  customizedExtension
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issuerId' => 'string',
            'keyAlgorithm' => 'string',
            'signatureAlgorithm' => 'string',
            'distinguishedName' => '\HuaweiCloud\SDK\Ccm\V1\Model\CertDistinguishedName',
            'validity' => '\HuaweiCloud\SDK\Ccm\V1\Model\Validity',
            'keyUsages' => 'string[]',
            'subjectAlternativeNames' => '\HuaweiCloud\SDK\Ccm\V1\Model\SubjectAlternativeName[]',
            'extendedKeyUsage' => '\HuaweiCloud\SDK\Ccm\V1\Model\ExtendedKeyUsage',
            'customizedExtension' => '\HuaweiCloud\SDK\Ccm\V1\Model\CustomizedExtension',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issuerId  父CA证书ID。
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * signatureAlgorithm  签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
    * distinguishedName  distinguishedName
    * validity  validity
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    * subjectAlternativeNames  主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    * extendedKeyUsage  extendedKeyUsage
    * customizedExtension  customizedExtension
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issuerId' => null,
        'keyAlgorithm' => null,
        'signatureAlgorithm' => null,
        'distinguishedName' => null,
        'validity' => null,
        'keyUsages' => null,
        'subjectAlternativeNames' => null,
        'extendedKeyUsage' => null,
        'customizedExtension' => null,
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
    * issuerId  父CA证书ID。
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * signatureAlgorithm  签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
    * distinguishedName  distinguishedName
    * validity  validity
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    * subjectAlternativeNames  主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    * extendedKeyUsage  extendedKeyUsage
    * customizedExtension  customizedExtension
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issuerId' => 'issuer_id',
            'keyAlgorithm' => 'key_algorithm',
            'signatureAlgorithm' => 'signature_algorithm',
            'distinguishedName' => 'distinguished_name',
            'validity' => 'validity',
            'keyUsages' => 'key_usages',
            'subjectAlternativeNames' => 'subject_alternative_names',
            'extendedKeyUsage' => 'extended_key_usage',
            'customizedExtension' => 'customized_extension',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issuerId  父CA证书ID。
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * signatureAlgorithm  签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
    * distinguishedName  distinguishedName
    * validity  validity
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    * subjectAlternativeNames  主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    * extendedKeyUsage  extendedKeyUsage
    * customizedExtension  customizedExtension
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $setters = [
            'issuerId' => 'setIssuerId',
            'keyAlgorithm' => 'setKeyAlgorithm',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'distinguishedName' => 'setDistinguishedName',
            'validity' => 'setValidity',
            'keyUsages' => 'setKeyUsages',
            'subjectAlternativeNames' => 'setSubjectAlternativeNames',
            'extendedKeyUsage' => 'setExtendedKeyUsage',
            'customizedExtension' => 'setCustomizedExtension',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issuerId  父CA证书ID。
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * signatureAlgorithm  签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
    * distinguishedName  distinguishedName
    * validity  validity
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    * subjectAlternativeNames  主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    * extendedKeyUsage  extendedKeyUsage
    * customizedExtension  customizedExtension
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @var string[]
    */
    protected static $getters = [
            'issuerId' => 'getIssuerId',
            'keyAlgorithm' => 'getKeyAlgorithm',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'distinguishedName' => 'getDistinguishedName',
            'validity' => 'getValidity',
            'keyUsages' => 'getKeyUsages',
            'subjectAlternativeNames' => 'getSubjectAlternativeNames',
            'extendedKeyUsage' => 'getExtendedKeyUsage',
            'customizedExtension' => 'getCustomizedExtension',
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
        $this->container['issuerId'] = isset($data['issuerId']) ? $data['issuerId'] : null;
        $this->container['keyAlgorithm'] = isset($data['keyAlgorithm']) ? $data['keyAlgorithm'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['distinguishedName'] = isset($data['distinguishedName']) ? $data['distinguishedName'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['keyUsages'] = isset($data['keyUsages']) ? $data['keyUsages'] : null;
        $this->container['subjectAlternativeNames'] = isset($data['subjectAlternativeNames']) ? $data['subjectAlternativeNames'] : null;
        $this->container['extendedKeyUsage'] = isset($data['extendedKeyUsage']) ? $data['extendedKeyUsage'] : null;
        $this->container['customizedExtension'] = isset($data['customizedExtension']) ? $data['customizedExtension'] : null;
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
        if ($this->container['issuerId'] === null) {
            $invalidProperties[] = "'issuerId' can't be null";
        }
            if ((mb_strlen($this->container['issuerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['issuerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['distinguishedName'] === null) {
            $invalidProperties[] = "'distinguishedName' can't be null";
        }
        if ($this->container['validity'] === null) {
            $invalidProperties[] = "'validity' can't be null";
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
    * Gets keyAlgorithm
    *  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
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
    * @param string|null $keyAlgorithm 密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
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
    *  签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
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
    * @param string|null $signatureAlgorithm 签名哈希算法，可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站）
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets distinguishedName
    *  distinguishedName
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\CertDistinguishedName
    */
    public function getDistinguishedName()
    {
        return $this->container['distinguishedName'];
    }

    /**
    * Sets distinguishedName
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\CertDistinguishedName $distinguishedName distinguishedName
    *
    * @return $this
    */
    public function setDistinguishedName($distinguishedName)
    {
        $this->container['distinguishedName'] = $distinguishedName;
        return $this;
    }

    /**
    * Gets validity
    *  validity
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\Validity
    */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
    * Sets validity
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\Validity $validity validity
    *
    * @return $this
    */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;
        return $this;
    }

    /**
    * Gets keyUsages
    *  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    *
    * @return string[]|null
    */
    public function getKeyUsages()
    {
        return $this->container['keyUsages'];
    }

    /**
    * Sets keyUsages
    *
    * @param string[]|null $keyUsages 密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。
    *
    * @return $this
    */
    public function setKeyUsages($keyUsages)
    {
        $this->container['keyUsages'] = $keyUsages;
        return $this;
    }

    /**
    * Gets subjectAlternativeNames
    *  主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\SubjectAlternativeName[]|null
    */
    public function getSubjectAlternativeNames()
    {
        return $this->container['subjectAlternativeNames'];
    }

    /**
    * Sets subjectAlternativeNames
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\SubjectAlternativeName[]|null $subjectAlternativeNames 主体备用名称，详情请参见**SubjectAlternativeName**字段数据结构说明。   - array大小：[0,20]。
    *
    * @return $this
    */
    public function setSubjectAlternativeNames($subjectAlternativeNames)
    {
        $this->container['subjectAlternativeNames'] = $subjectAlternativeNames;
        return $this;
    }

    /**
    * Gets extendedKeyUsage
    *  extendedKeyUsage
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\ExtendedKeyUsage|null
    */
    public function getExtendedKeyUsage()
    {
        return $this->container['extendedKeyUsage'];
    }

    /**
    * Sets extendedKeyUsage
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\ExtendedKeyUsage|null $extendedKeyUsage extendedKeyUsage
    *
    * @return $this
    */
    public function setExtendedKeyUsage($extendedKeyUsage)
    {
        $this->container['extendedKeyUsage'] = $extendedKeyUsage;
        return $this;
    }

    /**
    * Gets customizedExtension
    *  customizedExtension
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\CustomizedExtension|null
    */
    public function getCustomizedExtension()
    {
        return $this->container['customizedExtension'];
    }

    /**
    * Sets customizedExtension
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\CustomizedExtension|null $customizedExtension customizedExtension
    *
    * @return $this
    */
    public function setCustomizedExtension($customizedExtension)
    {
        $this->container['customizedExtension'] = $customizedExtension;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
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
    * @param string|null $enterpriseProjectId 企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
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

