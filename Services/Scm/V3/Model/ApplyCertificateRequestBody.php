<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * sans  绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    * csr  证书CSR串，与域名必须匹配。
    * companyName  公司名称，OV和EV型证书必填。字符长度为0~63位。
    * companyUnit  部门名称。字符长度为0~63位。
    * companyProvince  公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    * companyCity  公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    * country  OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    * applicantName  申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    * applicantPhone  申请人的电话号码。示例：13212345678
    * applicantEmail  申请人的邮箱。示例：example@huawei.com
    * contactName  技术联系人的姓名。字符长度为0~63位。
    * contactPhone  技术联系人的电话号码。示例：13212345678
    * contactEmail  技术联系人的邮箱。示例：example@huawei.com
    * autoDnsAuth  是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    * agreePrivacyProtection  是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * domainMethod  域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    * keyAlgorithm  密钥算法。默认RSA_2048
    * caHashAlgorithm  签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'sans' => 'string',
            'csr' => 'string',
            'companyName' => 'string',
            'companyUnit' => 'string',
            'companyProvince' => 'string',
            'companyCity' => 'string',
            'country' => 'string',
            'applicantName' => 'string',
            'applicantPhone' => 'string',
            'applicantEmail' => 'string',
            'contactName' => 'string',
            'contactPhone' => 'string',
            'contactEmail' => 'string',
            'autoDnsAuth' => 'bool',
            'agreePrivacyProtection' => 'bool',
            'domainMethod' => 'string',
            'keyAlgorithm' => 'string',
            'caHashAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * sans  绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    * csr  证书CSR串，与域名必须匹配。
    * companyName  公司名称，OV和EV型证书必填。字符长度为0~63位。
    * companyUnit  部门名称。字符长度为0~63位。
    * companyProvince  公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    * companyCity  公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    * country  OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    * applicantName  申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    * applicantPhone  申请人的电话号码。示例：13212345678
    * applicantEmail  申请人的邮箱。示例：example@huawei.com
    * contactName  技术联系人的姓名。字符长度为0~63位。
    * contactPhone  技术联系人的电话号码。示例：13212345678
    * contactEmail  技术联系人的邮箱。示例：example@huawei.com
    * autoDnsAuth  是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    * agreePrivacyProtection  是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * domainMethod  域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    * keyAlgorithm  密钥算法。默认RSA_2048
    * caHashAlgorithm  签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'sans' => null,
        'csr' => null,
        'companyName' => null,
        'companyUnit' => null,
        'companyProvince' => null,
        'companyCity' => null,
        'country' => null,
        'applicantName' => null,
        'applicantPhone' => null,
        'applicantEmail' => null,
        'contactName' => null,
        'contactPhone' => null,
        'contactEmail' => null,
        'autoDnsAuth' => null,
        'agreePrivacyProtection' => null,
        'domainMethod' => null,
        'keyAlgorithm' => null,
        'caHashAlgorithm' => null
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
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * sans  绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    * csr  证书CSR串，与域名必须匹配。
    * companyName  公司名称，OV和EV型证书必填。字符长度为0~63位。
    * companyUnit  部门名称。字符长度为0~63位。
    * companyProvince  公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    * companyCity  公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    * country  OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    * applicantName  申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    * applicantPhone  申请人的电话号码。示例：13212345678
    * applicantEmail  申请人的邮箱。示例：example@huawei.com
    * contactName  技术联系人的姓名。字符长度为0~63位。
    * contactPhone  技术联系人的电话号码。示例：13212345678
    * contactEmail  技术联系人的邮箱。示例：example@huawei.com
    * autoDnsAuth  是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    * agreePrivacyProtection  是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * domainMethod  域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    * keyAlgorithm  密钥算法。默认RSA_2048
    * caHashAlgorithm  签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'sans' => 'sans',
            'csr' => 'csr',
            'companyName' => 'company_name',
            'companyUnit' => 'company_unit',
            'companyProvince' => 'company_province',
            'companyCity' => 'company_city',
            'country' => 'country',
            'applicantName' => 'applicant_name',
            'applicantPhone' => 'applicant_phone',
            'applicantEmail' => 'applicant_email',
            'contactName' => 'contact_name',
            'contactPhone' => 'contact_phone',
            'contactEmail' => 'contact_email',
            'autoDnsAuth' => 'auto_dns_auth',
            'agreePrivacyProtection' => 'agree_privacy_protection',
            'domainMethod' => 'domain_method',
            'keyAlgorithm' => 'key_algorithm',
            'caHashAlgorithm' => 'ca_hash_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * sans  绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    * csr  证书CSR串，与域名必须匹配。
    * companyName  公司名称，OV和EV型证书必填。字符长度为0~63位。
    * companyUnit  部门名称。字符长度为0~63位。
    * companyProvince  公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    * companyCity  公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    * country  OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    * applicantName  申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    * applicantPhone  申请人的电话号码。示例：13212345678
    * applicantEmail  申请人的邮箱。示例：example@huawei.com
    * contactName  技术联系人的姓名。字符长度为0~63位。
    * contactPhone  技术联系人的电话号码。示例：13212345678
    * contactEmail  技术联系人的邮箱。示例：example@huawei.com
    * autoDnsAuth  是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    * agreePrivacyProtection  是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * domainMethod  域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    * keyAlgorithm  密钥算法。默认RSA_2048
    * caHashAlgorithm  签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'sans' => 'setSans',
            'csr' => 'setCsr',
            'companyName' => 'setCompanyName',
            'companyUnit' => 'setCompanyUnit',
            'companyProvince' => 'setCompanyProvince',
            'companyCity' => 'setCompanyCity',
            'country' => 'setCountry',
            'applicantName' => 'setApplicantName',
            'applicantPhone' => 'setApplicantPhone',
            'applicantEmail' => 'setApplicantEmail',
            'contactName' => 'setContactName',
            'contactPhone' => 'setContactPhone',
            'contactEmail' => 'setContactEmail',
            'autoDnsAuth' => 'setAutoDnsAuth',
            'agreePrivacyProtection' => 'setAgreePrivacyProtection',
            'domainMethod' => 'setDomainMethod',
            'keyAlgorithm' => 'setKeyAlgorithm',
            'caHashAlgorithm' => 'setCaHashAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * sans  绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    * csr  证书CSR串，与域名必须匹配。
    * companyName  公司名称，OV和EV型证书必填。字符长度为0~63位。
    * companyUnit  部门名称。字符长度为0~63位。
    * companyProvince  公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    * companyCity  公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    * country  OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    * applicantName  申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    * applicantPhone  申请人的电话号码。示例：13212345678
    * applicantEmail  申请人的邮箱。示例：example@huawei.com
    * contactName  技术联系人的姓名。字符长度为0~63位。
    * contactPhone  技术联系人的电话号码。示例：13212345678
    * contactEmail  技术联系人的邮箱。示例：example@huawei.com
    * autoDnsAuth  是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    * agreePrivacyProtection  是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * domainMethod  域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    * keyAlgorithm  密钥算法。默认RSA_2048
    * caHashAlgorithm  签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'sans' => 'getSans',
            'csr' => 'getCsr',
            'companyName' => 'getCompanyName',
            'companyUnit' => 'getCompanyUnit',
            'companyProvince' => 'getCompanyProvince',
            'companyCity' => 'getCompanyCity',
            'country' => 'getCountry',
            'applicantName' => 'getApplicantName',
            'applicantPhone' => 'getApplicantPhone',
            'applicantEmail' => 'getApplicantEmail',
            'contactName' => 'getContactName',
            'contactPhone' => 'getContactPhone',
            'contactEmail' => 'getContactEmail',
            'autoDnsAuth' => 'getAutoDnsAuth',
            'agreePrivacyProtection' => 'getAgreePrivacyProtection',
            'domainMethod' => 'getDomainMethod',
            'keyAlgorithm' => 'getKeyAlgorithm',
            'caHashAlgorithm' => 'getCaHashAlgorithm'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['sans'] = isset($data['sans']) ? $data['sans'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['companyUnit'] = isset($data['companyUnit']) ? $data['companyUnit'] : null;
        $this->container['companyProvince'] = isset($data['companyProvince']) ? $data['companyProvince'] : null;
        $this->container['companyCity'] = isset($data['companyCity']) ? $data['companyCity'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['applicantName'] = isset($data['applicantName']) ? $data['applicantName'] : null;
        $this->container['applicantPhone'] = isset($data['applicantPhone']) ? $data['applicantPhone'] : null;
        $this->container['applicantEmail'] = isset($data['applicantEmail']) ? $data['applicantEmail'] : null;
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['contactPhone'] = isset($data['contactPhone']) ? $data['contactPhone'] : null;
        $this->container['contactEmail'] = isset($data['contactEmail']) ? $data['contactEmail'] : null;
        $this->container['autoDnsAuth'] = isset($data['autoDnsAuth']) ? $data['autoDnsAuth'] : null;
        $this->container['agreePrivacyProtection'] = isset($data['agreePrivacyProtection']) ? $data['agreePrivacyProtection'] : null;
        $this->container['domainMethod'] = isset($data['domainMethod']) ? $data['domainMethod'] : null;
        $this->container['keyAlgorithm'] = isset($data['keyAlgorithm']) ? $data['keyAlgorithm'] : null;
        $this->container['caHashAlgorithm'] = isset($data['caHashAlgorithm']) ? $data['caHashAlgorithm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) > 4096)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) < 0)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['csr']) && (mb_strlen($this->container['csr']) > 5120)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be smaller than or equal to 5120.";
            }
            if (!is_null($this->container['csr']) && (mb_strlen($this->container['csr']) < 0)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 63)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyUnit']) && (mb_strlen($this->container['companyUnit']) > 63)) {
                $invalidProperties[] = "invalid value for 'companyUnit', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['companyUnit']) && (mb_strlen($this->container['companyUnit']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyUnit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyProvince']) && (mb_strlen($this->container['companyProvince']) > 63)) {
                $invalidProperties[] = "invalid value for 'companyProvince', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['companyProvince']) && (mb_strlen($this->container['companyProvince']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyProvince', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyCity']) && (mb_strlen($this->container['companyCity']) > 63)) {
                $invalidProperties[] = "invalid value for 'companyCity', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['companyCity']) && (mb_strlen($this->container['companyCity']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyCity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 2)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['applicantName'] === null) {
            $invalidProperties[] = "'applicantName' can't be null";
        }
            if ((mb_strlen($this->container['applicantName']) > 63)) {
                $invalidProperties[] = "invalid value for 'applicantName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['applicantName']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicantName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['applicantPhone'] === null) {
            $invalidProperties[] = "'applicantPhone' can't be null";
        }
            if ((mb_strlen($this->container['applicantPhone']) > 63)) {
                $invalidProperties[] = "invalid value for 'applicantPhone', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['applicantPhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicantPhone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['applicantEmail'] === null) {
            $invalidProperties[] = "'applicantEmail' can't be null";
        }
            if ((mb_strlen($this->container['applicantEmail']) > 256)) {
                $invalidProperties[] = "invalid value for 'applicantEmail', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['applicantEmail']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicantEmail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['contactName']) && (mb_strlen($this->container['contactName']) > 63)) {
                $invalidProperties[] = "invalid value for 'contactName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['contactName']) && (mb_strlen($this->container['contactName']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['contactPhone']) && (mb_strlen($this->container['contactPhone']) > 63)) {
                $invalidProperties[] = "invalid value for 'contactPhone', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['contactPhone']) && (mb_strlen($this->container['contactPhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactPhone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['contactEmail']) && (mb_strlen($this->container['contactEmail']) > 256)) {
                $invalidProperties[] = "invalid value for 'contactEmail', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['contactEmail']) && (mb_strlen($this->container['contactEmail']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactEmail', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['agreePrivacyProtection'] === null) {
            $invalidProperties[] = "'agreePrivacyProtection' can't be null";
        }
        if ($this->container['domainMethod'] === null) {
            $invalidProperties[] = "'domainMethod' can't be null";
        }
            if ((mb_strlen($this->container['domainMethod']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainMethod', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainMethod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyAlgorithm']) && (mb_strlen($this->container['keyAlgorithm']) > 32)) {
                $invalidProperties[] = "invalid value for 'keyAlgorithm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['keyAlgorithm']) && (mb_strlen($this->container['keyAlgorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyAlgorithm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['caHashAlgorithm']) && (mb_strlen($this->container['caHashAlgorithm']) > 32)) {
                $invalidProperties[] = "invalid value for 'caHashAlgorithm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['caHashAlgorithm']) && (mb_strlen($this->container['caHashAlgorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'caHashAlgorithm', the character length must be bigger than or equal to 0.";
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
    * Gets domain
    *  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets sans
    *  绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    *
    * @return string|null
    */
    public function getSans()
    {
        return $this->container['sans'];
    }

    /**
    * Sets sans
    *
    * @param string|null $sans 绑定多域名类型证书的附加域名。 当购买的证书为“多域名”类型的证书，且有可增加附加域名的额度时，才需要设置该值。 多个域名需要以“;”隔开。 示例：www.example.com;www.example1.com;www.example2.com
    *
    * @return $this
    */
    public function setSans($sans)
    {
        $this->container['sans'] = $sans;
        return $this;
    }

    /**
    * Gets csr
    *  证书CSR串，与域名必须匹配。
    *
    * @return string|null
    */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
    * Sets csr
    *
    * @param string|null $csr 证书CSR串，与域名必须匹配。
    *
    * @return $this
    */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;
        return $this;
    }

    /**
    * Gets companyName
    *  公司名称，OV和EV型证书必填。字符长度为0~63位。
    *
    * @return string|null
    */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
    * Sets companyName
    *
    * @param string|null $companyName 公司名称，OV和EV型证书必填。字符长度为0~63位。
    *
    * @return $this
    */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;
        return $this;
    }

    /**
    * Gets companyUnit
    *  部门名称。字符长度为0~63位。
    *
    * @return string|null
    */
    public function getCompanyUnit()
    {
        return $this->container['companyUnit'];
    }

    /**
    * Sets companyUnit
    *
    * @param string|null $companyUnit 部门名称。字符长度为0~63位。
    *
    * @return $this
    */
    public function setCompanyUnit($companyUnit)
    {
        $this->container['companyUnit'] = $companyUnit;
        return $this;
    }

    /**
    * Gets companyProvince
    *  公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    *
    * @return string|null
    */
    public function getCompanyProvince()
    {
        return $this->container['companyProvince'];
    }

    /**
    * Sets companyProvince
    *
    * @param string|null $companyProvince 公司所在省份，OV和EV型证书必填。字符长度为0~63位。
    *
    * @return $this
    */
    public function setCompanyProvince($companyProvince)
    {
        $this->container['companyProvince'] = $companyProvince;
        return $this;
    }

    /**
    * Gets companyCity
    *  公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    *
    * @return string|null
    */
    public function getCompanyCity()
    {
        return $this->container['companyCity'];
    }

    /**
    * Sets companyCity
    *
    * @param string|null $companyCity 公司所在市区，OV和EV型证书必填。字符长度为0~63位。
    *
    * @return $this
    */
    public function setCompanyCity($companyCity)
    {
        $this->container['companyCity'] = $companyCity;
        return $this;
    }

    /**
    * Gets country
    *  OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country OV和EV型证书必填,国家编码，需符合正则\"**[A-Za-z]{2}**\"。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets applicantName
    *  申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    *
    * @return string
    */
    public function getApplicantName()
    {
        return $this->container['applicantName'];
    }

    /**
    * Sets applicantName
    *
    * @param string $applicantName 申请人的姓名。请输入中文、英文字符，下划线，中划线，英文逗号，英文句点，且长度为4到100字节。
    *
    * @return $this
    */
    public function setApplicantName($applicantName)
    {
        $this->container['applicantName'] = $applicantName;
        return $this;
    }

    /**
    * Gets applicantPhone
    *  申请人的电话号码。示例：13212345678
    *
    * @return string
    */
    public function getApplicantPhone()
    {
        return $this->container['applicantPhone'];
    }

    /**
    * Sets applicantPhone
    *
    * @param string $applicantPhone 申请人的电话号码。示例：13212345678
    *
    * @return $this
    */
    public function setApplicantPhone($applicantPhone)
    {
        $this->container['applicantPhone'] = $applicantPhone;
        return $this;
    }

    /**
    * Gets applicantEmail
    *  申请人的邮箱。示例：example@huawei.com
    *
    * @return string
    */
    public function getApplicantEmail()
    {
        return $this->container['applicantEmail'];
    }

    /**
    * Sets applicantEmail
    *
    * @param string $applicantEmail 申请人的邮箱。示例：example@huawei.com
    *
    * @return $this
    */
    public function setApplicantEmail($applicantEmail)
    {
        $this->container['applicantEmail'] = $applicantEmail;
        return $this;
    }

    /**
    * Gets contactName
    *  技术联系人的姓名。字符长度为0~63位。
    *
    * @return string|null
    */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
    * Sets contactName
    *
    * @param string|null $contactName 技术联系人的姓名。字符长度为0~63位。
    *
    * @return $this
    */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;
        return $this;
    }

    /**
    * Gets contactPhone
    *  技术联系人的电话号码。示例：13212345678
    *
    * @return string|null
    */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
    * Sets contactPhone
    *
    * @param string|null $contactPhone 技术联系人的电话号码。示例：13212345678
    *
    * @return $this
    */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;
        return $this;
    }

    /**
    * Gets contactEmail
    *  技术联系人的邮箱。示例：example@huawei.com
    *
    * @return string|null
    */
    public function getContactEmail()
    {
        return $this->container['contactEmail'];
    }

    /**
    * Sets contactEmail
    *
    * @param string|null $contactEmail 技术联系人的邮箱。示例：example@huawei.com
    *
    * @return $this
    */
    public function setContactEmail($contactEmail)
    {
        $this->container['contactEmail'] = $contactEmail;
        return $this;
    }

    /**
    * Gets autoDnsAuth
    *  是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    *
    * @return bool|null
    */
    public function getAutoDnsAuth()
    {
        return $this->container['autoDnsAuth'];
    }

    /**
    * Sets autoDnsAuth
    *
    * @param bool|null $autoDnsAuth 是否将DNS验证信息推送到华为云解析服务。 - true：推送。 - false：不推送。
    *
    * @return $this
    */
    public function setAutoDnsAuth($autoDnsAuth)
    {
        $this->container['autoDnsAuth'] = $autoDnsAuth;
        return $this;
    }

    /**
    * Gets agreePrivacyProtection
    *  是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    *
    * @return bool
    */
    public function getAgreePrivacyProtection()
    {
        return $this->container['agreePrivacyProtection'];
    }

    /**
    * Sets agreePrivacyProtection
    *
    * @param bool $agreePrivacyProtection 是否同意授权隐私协议。此处仅能设置为true才能成功申请证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    *
    * @return $this
    */
    public function setAgreePrivacyProtection($agreePrivacyProtection)
    {
        $this->container['agreePrivacyProtection'] = $agreePrivacyProtection;
        return $this;
    }

    /**
    * Gets domainMethod
    *  域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    *
    * @return string
    */
    public function getDomainMethod()
    {
        return $this->container['domainMethod'];
    }

    /**
    * Sets domainMethod
    *
    * @param string $domainMethod 域名验证方式。 - DNS：DNS验证，指在域名管理平台通过解析指定的DNS记录，验证域名所有权。 - FILE：文件验证，指通过在服务器上创建指定文件的方式来验证域名所有权。 - EMAIL：邮箱验证，指登录域名管理员邮箱，接收域名确认邮件并根据提示进行操作来验证域名所有权。 DV域名型和DV基础版证书（GeoTrust入门级SSL证书和DigiCert免费SSL证书）默认通过“DNS验证”方式进行验证。 纯IP（公网IP）的证书仅支持通过“文件验证”方式进行验证，且仅纯IP证书支持“文件验证”方式验证。
    *
    * @return $this
    */
    public function setDomainMethod($domainMethod)
    {
        $this->container['domainMethod'] = $domainMethod;
        return $this;
    }

    /**
    * Gets keyAlgorithm
    *  密钥算法。默认RSA_2048
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
    * @param string|null $keyAlgorithm 密钥算法。默认RSA_2048
    *
    * @return $this
    */
    public function setKeyAlgorithm($keyAlgorithm)
    {
        $this->container['keyAlgorithm'] = $keyAlgorithm;
        return $this;
    }

    /**
    * Gets caHashAlgorithm
    *  签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @return string|null
    */
    public function getCaHashAlgorithm()
    {
        return $this->container['caHashAlgorithm'];
    }

    /**
    * Sets caHashAlgorithm
    *
    * @param string|null $caHashAlgorithm 签名算法。Geo OV证书必填。 - DEFAULT - SHA-256
    *
    * @return $this
    */
    public function setCaHashAlgorithm($caHashAlgorithm)
    {
        $this->container['caHashAlgorithm'] = $caHashAlgorithm;
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

