<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateAuthorityRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateAuthorityRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    * distinguishedName  distinguishedName
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * validity  validity
    * issuerId  父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
    * pathLength  CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
    * signatureAlgorithm  签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * caId  CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
    * hsmClusterInfo  hsmClusterInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'distinguishedName' => '\HuaweiCloud\SDK\Ccm\V1\Model\DistinguishedName',
            'keyAlgorithm' => 'string',
            'validity' => '\HuaweiCloud\SDK\Ccm\V1\Model\Validity',
            'issuerId' => 'string',
            'pathLength' => 'int',
            'signatureAlgorithm' => 'string',
            'keyUsages' => 'string[]',
            'crlConfiguration' => '\HuaweiCloud\SDK\Ccm\V1\Model\CrlConfiguration',
            'enterpriseProjectId' => 'string',
            'caId' => 'string',
            'hsmClusterInfo' => '\HuaweiCloud\SDK\Ccm\V1\Model\HsmClusterInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    * distinguishedName  distinguishedName
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * validity  validity
    * issuerId  父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
    * pathLength  CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
    * signatureAlgorithm  签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * caId  CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
    * hsmClusterInfo  hsmClusterInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'distinguishedName' => null,
        'keyAlgorithm' => null,
        'validity' => null,
        'issuerId' => null,
        'pathLength' => 'int32',
        'signatureAlgorithm' => null,
        'keyUsages' => null,
        'crlConfiguration' => null,
        'enterpriseProjectId' => null,
        'caId' => null,
        'hsmClusterInfo' => null
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
    * type  创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    * distinguishedName  distinguishedName
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * validity  validity
    * issuerId  父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
    * pathLength  CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
    * signatureAlgorithm  签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * caId  CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
    * hsmClusterInfo  hsmClusterInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'distinguishedName' => 'distinguished_name',
            'keyAlgorithm' => 'key_algorithm',
            'validity' => 'validity',
            'issuerId' => 'issuer_id',
            'pathLength' => 'path_length',
            'signatureAlgorithm' => 'signature_algorithm',
            'keyUsages' => 'key_usages',
            'crlConfiguration' => 'crl_configuration',
            'enterpriseProjectId' => 'enterprise_project_id',
            'caId' => 'ca_id',
            'hsmClusterInfo' => 'hsm_cluster_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    * distinguishedName  distinguishedName
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * validity  validity
    * issuerId  父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
    * pathLength  CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
    * signatureAlgorithm  签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * caId  CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
    * hsmClusterInfo  hsmClusterInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'distinguishedName' => 'setDistinguishedName',
            'keyAlgorithm' => 'setKeyAlgorithm',
            'validity' => 'setValidity',
            'issuerId' => 'setIssuerId',
            'pathLength' => 'setPathLength',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'keyUsages' => 'setKeyUsages',
            'crlConfiguration' => 'setCrlConfiguration',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'caId' => 'setCaId',
            'hsmClusterInfo' => 'setHsmClusterInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    * distinguishedName  distinguishedName
    * keyAlgorithm  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    * validity  validity
    * issuerId  父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
    * pathLength  CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
    * signatureAlgorithm  签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
    * keyUsages  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
    * crlConfiguration  crlConfiguration
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件.   取值为“all”   取值为“0”   满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * caId  CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
    * hsmClusterInfo  hsmClusterInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'distinguishedName' => 'getDistinguishedName',
            'keyAlgorithm' => 'getKeyAlgorithm',
            'validity' => 'getValidity',
            'issuerId' => 'getIssuerId',
            'pathLength' => 'getPathLength',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'keyUsages' => 'getKeyUsages',
            'crlConfiguration' => 'getCrlConfiguration',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'caId' => 'getCaId',
            'hsmClusterInfo' => 'getHsmClusterInfo'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['distinguishedName'] = isset($data['distinguishedName']) ? $data['distinguishedName'] : null;
        $this->container['keyAlgorithm'] = isset($data['keyAlgorithm']) ? $data['keyAlgorithm'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['issuerId'] = isset($data['issuerId']) ? $data['issuerId'] : null;
        $this->container['pathLength'] = isset($data['pathLength']) ? $data['pathLength'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['keyUsages'] = isset($data['keyUsages']) ? $data['keyUsages'] : null;
        $this->container['crlConfiguration'] = isset($data['crlConfiguration']) ? $data['crlConfiguration'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['caId'] = isset($data['caId']) ? $data['caId'] : null;
        $this->container['hsmClusterInfo'] = isset($data['hsmClusterInfo']) ? $data['hsmClusterInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['distinguishedName'] === null) {
            $invalidProperties[] = "'distinguishedName' can't be null";
        }
        if ($this->container['keyAlgorithm'] === null) {
            $invalidProperties[] = "'keyAlgorithm' can't be null";
        }
            if (!is_null($this->container['issuerId']) && (mb_strlen($this->container['issuerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['issuerId']) && (mb_strlen($this->container['issuerId']) < 36)) {
                $invalidProperties[] = "invalid value for 'issuerId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pathLength']) && ($this->container['pathLength'] > 6)) {
                $invalidProperties[] = "invalid value for 'pathLength', must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['pathLength']) && ($this->container['pathLength'] < 0)) {
                $invalidProperties[] = "invalid value for 'pathLength', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['caId']) && (mb_strlen($this->container['caId']) > 36)) {
                $invalidProperties[] = "invalid value for 'caId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['caId']) && (mb_strlen($this->container['caId']) < 36)) {
                $invalidProperties[] = "invalid value for 'caId', the character length must be bigger than or equal to 36.";
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
    * Gets type
    *  创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 创建的CA类型。 - **ROOT** : 根CA - **SUBORDINATE** : 从属CA
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets keyAlgorithm
    *  密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
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
    * @param string $keyAlgorithm 密钥算法，可选值如下：   - **RSA2048** : RSA算法，密钥长度2048位；   - **RSA4096** : RSA算法，密钥长度4096位；   - **EC256** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度256位；   - **EC384** : 椭圆曲线算法（Elliptic Curve Digital Signature Algorithm (ECDSA)），密钥长度384位；   - **SM2** : 国家密码管理局颁发的椭圆曲线算法（签名哈希算法SM3），密钥长度256位。（中国站）
    *
    * @return $this
    */
    public function setKeyAlgorithm($keyAlgorithm)
    {
        $this->container['keyAlgorithm'] = $keyAlgorithm;
        return $this;
    }

    /**
    * Gets validity
    *  validity
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\Validity|null
    */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
    * Sets validity
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\Validity|null $validity validity
    *
    * @return $this
    */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;
        return $this;
    }

    /**
    * Gets issuerId
    *  父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
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
    * @param string|null $issuerId 父CA证书ID，分以下三种情况：   - 创建根CA，根CA为自签名证书，无父CA，将忽略该参数；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。
    *
    * @return $this
    */
    public function setIssuerId($issuerId)
    {
        $this->container['issuerId'] = $issuerId;
        return $this;
    }

    /**
    * Gets pathLength
    *  CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
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
    * @param int|null $pathLength CA证书路径长度，分以下三种情况：   - 创建根CA，为便于后期对证书层级的扩展，根CA默认不对路径长度做限制，故将忽略该参数。证书层级规划可由从属CA做限制；   - 创建从属CA，并需要直接激活该证书，用户可自定义。缺省值为0；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略。激活证书时若要自定义，需要再次传入；
    *
    * @return $this
    */
    public function setPathLength($pathLength)
    {
        $this->container['pathLength'] = $pathLength;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
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
    * @param string|null $signatureAlgorithm 签名哈希算法。 - 分以下三种情况：   - 创建根CA，为必填值；   - 创建从属CA，并需要直接激活该证书，为必填值；   - 创建从属CA，不需要直接激活该证书，本参数值将被忽略，激活证书时需要再次传入。 - 可选值如下：   - **SHA256**   - **SHA384**   - **SHA512**   - **SM3**（中国站，密钥算法SM2）
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets keyUsages
    *  密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
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
    * @param string[]|null $keyUsages 密钥用法，具体标准参见RFC 5280中:[4.2.1.3节](https://datatracker.ietf.org/doc/html/rfc5280#section-4.2.1.3)。   - **digitalSignature** : 数字签名；   - **nonRepudiation** : 不可抵赖；   - **keyEncipherment** : 密钥用于加密密钥数据；   - **dataEncipherment** : 用于加密数据；   - **keyAgreement** : 密钥协商；   - **keyCertSign** : 签发证书；   - **cRLSign** : 签发吊销列表；   - **encipherOnly** : 仅用于加密；   - **decipherOnly** : 仅用于解密。 > 缺省值如下： > - 根CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，忽略用户传入值； > - 从属CA证书：默认为**[digitalSignature,keyCertSign,cRLSign]**，支持用户自定义。
    *
    * @return $this
    */
    public function setKeyUsages($keyUsages)
    {
        $this->container['keyUsages'] = $keyUsages;
        return $this;
    }

    /**
    * Gets crlConfiguration
    *  crlConfiguration
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\CrlConfiguration|null
    */
    public function getCrlConfiguration()
    {
        return $this->container['crlConfiguration'];
    }

    /**
    * Sets crlConfiguration
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\CrlConfiguration|null $crlConfiguration crlConfiguration
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
    * Gets caId
    *  CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
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
    * @param string|null $caId CA证书ID。如果为空，则创建按需CA；如果不为空，则保存包周期CA信息。
    *
    * @return $this
    */
    public function setCaId($caId)
    {
        $this->container['caId'] = $caId;
        return $this;
    }

    /**
    * Gets hsmClusterInfo
    *  hsmClusterInfo
    *
    * @return \HuaweiCloud\SDK\Ccm\V1\Model\HsmClusterInfo|null
    */
    public function getHsmClusterInfo()
    {
        return $this->container['hsmClusterInfo'];
    }

    /**
    * Sets hsmClusterInfo
    *
    * @param \HuaweiCloud\SDK\Ccm\V1\Model\HsmClusterInfo|null $hsmClusterInfo hsmClusterInfo
    *
    * @return $this
    */
    public function setHsmClusterInfo($hsmClusterInfo)
    {
        $this->container['hsmClusterInfo'] = $hsmClusterInfo;
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

