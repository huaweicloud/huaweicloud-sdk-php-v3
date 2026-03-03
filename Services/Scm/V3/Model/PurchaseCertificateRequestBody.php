<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PurchaseCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PurchaseCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certBrand  证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    * certType  证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * effectiveTime  证书有效期（年）。
    * domainNumbers  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    * orderNumber  购买的证书数量。取值范围为1~100。
    * agreePrivacyProtection  是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * primaryDomainType  多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    * singleDomainNumber  附加单域名数量。
    * wildcardDomainNumber  附加泛域名数量。
    * isAutoPay  是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * orderId  订单号。仅组合购买场景使用。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certBrand' => 'string',
            'certType' => 'string',
            'domainType' => 'string',
            'effectiveTime' => 'int',
            'domainNumbers' => 'int',
            'orderNumber' => 'int',
            'agreePrivacyProtection' => 'bool',
            'primaryDomainType' => 'string',
            'singleDomainNumber' => 'int',
            'wildcardDomainNumber' => 'int',
            'isAutoPay' => 'bool',
            'enterpriseProjectId' => 'string',
            'orderId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Scm\V3\Model\ScsResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certBrand  证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    * certType  证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * effectiveTime  证书有效期（年）。
    * domainNumbers  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    * orderNumber  购买的证书数量。取值范围为1~100。
    * agreePrivacyProtection  是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * primaryDomainType  多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    * singleDomainNumber  附加单域名数量。
    * wildcardDomainNumber  附加泛域名数量。
    * isAutoPay  是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * orderId  订单号。仅组合购买场景使用。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certBrand' => null,
        'certType' => null,
        'domainType' => null,
        'effectiveTime' => 'int8',
        'domainNumbers' => 'int8',
        'orderNumber' => 'int32',
        'agreePrivacyProtection' => null,
        'primaryDomainType' => null,
        'singleDomainNumber' => 'int8',
        'wildcardDomainNumber' => 'int8',
        'isAutoPay' => null,
        'enterpriseProjectId' => null,
        'orderId' => null,
        'tags' => null
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
    * certBrand  证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    * certType  证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * effectiveTime  证书有效期（年）。
    * domainNumbers  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    * orderNumber  购买的证书数量。取值范围为1~100。
    * agreePrivacyProtection  是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * primaryDomainType  多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    * singleDomainNumber  附加单域名数量。
    * wildcardDomainNumber  附加泛域名数量。
    * isAutoPay  是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * orderId  订单号。仅组合购买场景使用。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certBrand' => 'cert_brand',
            'certType' => 'cert_type',
            'domainType' => 'domain_type',
            'effectiveTime' => 'effective_time',
            'domainNumbers' => 'domain_numbers',
            'orderNumber' => 'order_number',
            'agreePrivacyProtection' => 'agree_privacy_protection',
            'primaryDomainType' => 'primary_domain_type',
            'singleDomainNumber' => 'single_domain_number',
            'wildcardDomainNumber' => 'wildcard_domain_number',
            'isAutoPay' => 'is_auto_pay',
            'enterpriseProjectId' => 'enterprise_project_id',
            'orderId' => 'order_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certBrand  证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    * certType  证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * effectiveTime  证书有效期（年）。
    * domainNumbers  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    * orderNumber  购买的证书数量。取值范围为1~100。
    * agreePrivacyProtection  是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * primaryDomainType  多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    * singleDomainNumber  附加单域名数量。
    * wildcardDomainNumber  附加泛域名数量。
    * isAutoPay  是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * orderId  订单号。仅组合购买场景使用。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'certBrand' => 'setCertBrand',
            'certType' => 'setCertType',
            'domainType' => 'setDomainType',
            'effectiveTime' => 'setEffectiveTime',
            'domainNumbers' => 'setDomainNumbers',
            'orderNumber' => 'setOrderNumber',
            'agreePrivacyProtection' => 'setAgreePrivacyProtection',
            'primaryDomainType' => 'setPrimaryDomainType',
            'singleDomainNumber' => 'setSingleDomainNumber',
            'wildcardDomainNumber' => 'setWildcardDomainNumber',
            'isAutoPay' => 'setIsAutoPay',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'orderId' => 'setOrderId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certBrand  证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    * certType  证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * effectiveTime  证书有效期（年）。
    * domainNumbers  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    * orderNumber  购买的证书数量。取值范围为1~100。
    * agreePrivacyProtection  是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    * primaryDomainType  多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    * singleDomainNumber  附加单域名数量。
    * wildcardDomainNumber  附加泛域名数量。
    * isAutoPay  是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    * enterpriseProjectId  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    * orderId  订单号。仅组合购买场景使用。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'certBrand' => 'getCertBrand',
            'certType' => 'getCertType',
            'domainType' => 'getDomainType',
            'effectiveTime' => 'getEffectiveTime',
            'domainNumbers' => 'getDomainNumbers',
            'orderNumber' => 'getOrderNumber',
            'agreePrivacyProtection' => 'getAgreePrivacyProtection',
            'primaryDomainType' => 'getPrimaryDomainType',
            'singleDomainNumber' => 'getSingleDomainNumber',
            'wildcardDomainNumber' => 'getWildcardDomainNumber',
            'isAutoPay' => 'getIsAutoPay',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'orderId' => 'getOrderId',
            'tags' => 'getTags'
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
        $this->container['certBrand'] = isset($data['certBrand']) ? $data['certBrand'] : null;
        $this->container['certType'] = isset($data['certType']) ? $data['certType'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['domainNumbers'] = isset($data['domainNumbers']) ? $data['domainNumbers'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
        $this->container['agreePrivacyProtection'] = isset($data['agreePrivacyProtection']) ? $data['agreePrivacyProtection'] : null;
        $this->container['primaryDomainType'] = isset($data['primaryDomainType']) ? $data['primaryDomainType'] : null;
        $this->container['singleDomainNumber'] = isset($data['singleDomainNumber']) ? $data['singleDomainNumber'] : null;
        $this->container['wildcardDomainNumber'] = isset($data['wildcardDomainNumber']) ? $data['wildcardDomainNumber'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certBrand'] === null) {
            $invalidProperties[] = "'certBrand' can't be null";
        }
            if ((mb_strlen($this->container['certBrand']) > 32)) {
                $invalidProperties[] = "invalid value for 'certBrand', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['certBrand']) < 0)) {
                $invalidProperties[] = "invalid value for 'certBrand', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['certType'] === null) {
            $invalidProperties[] = "'certType' can't be null";
        }
            if ((mb_strlen($this->container['certType']) > 32)) {
                $invalidProperties[] = "invalid value for 'certType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['certType']) < 0)) {
                $invalidProperties[] = "invalid value for 'certType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['domainType'] === null) {
            $invalidProperties[] = "'domainType' can't be null";
        }
            if ((mb_strlen($this->container['domainType']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['effectiveTime'] === null) {
            $invalidProperties[] = "'effectiveTime' can't be null";
        }
            if (($this->container['effectiveTime'] > 3)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', must be smaller than or equal to 3.";
            }
            if (($this->container['effectiveTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', must be bigger than or equal to 1.";
            }
        if ($this->container['domainNumbers'] === null) {
            $invalidProperties[] = "'domainNumbers' can't be null";
        }
            if (($this->container['domainNumbers'] > 100)) {
                $invalidProperties[] = "invalid value for 'domainNumbers', must be smaller than or equal to 100.";
            }
            if (($this->container['domainNumbers'] < 1)) {
                $invalidProperties[] = "invalid value for 'domainNumbers', must be bigger than or equal to 1.";
            }
        if ($this->container['orderNumber'] === null) {
            $invalidProperties[] = "'orderNumber' can't be null";
        }
            if (($this->container['orderNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'orderNumber', must be smaller than or equal to 100.";
            }
            if (($this->container['orderNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'orderNumber', must be bigger than or equal to 1.";
            }
        if ($this->container['agreePrivacyProtection'] === null) {
            $invalidProperties[] = "'agreePrivacyProtection' can't be null";
        }
            if (!is_null($this->container['primaryDomainType']) && (mb_strlen($this->container['primaryDomainType']) > 63)) {
                $invalidProperties[] = "invalid value for 'primaryDomainType', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['primaryDomainType']) && (mb_strlen($this->container['primaryDomainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'primaryDomainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['singleDomainNumber']) && ($this->container['singleDomainNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'singleDomainNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['singleDomainNumber']) && ($this->container['singleDomainNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'singleDomainNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['wildcardDomainNumber']) && ($this->container['wildcardDomainNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'wildcardDomainNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['wildcardDomainNumber']) && ($this->container['wildcardDomainNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'wildcardDomainNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 63)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
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
    * Gets certBrand
    *  证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    *
    * @return string
    */
    public function getCertBrand()
    {
        return $this->container['certBrand'];
    }

    /**
    * Sets certBrand
    *
    * @param string $certBrand 证书品牌，取值如下： - GEOTRUST(购买RapidSSL请传该值) - GLOBALSIGN - SYMANTEC - CFCA - TRUSTASIA - VTRUS
    *
    * @return $this
    */
    public function setCertBrand($certBrand)
    {
        $this->container['certBrand'] = $certBrand;
        return $this;
    }

    /**
    * Gets certType
    *  证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    *
    * @return string
    */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
    * Sets certType
    *
    * @param string $certType 证书类型，取值如下： - DV_SSL_CERT - DV_SSL_CERT_BASIC - EV_SSL_CERT - EV_SSL_CERT_PRO - OV_SSL_CERT - OV_SSL_CERT_PRO
    *
    * @return $this
    */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;
        return $this;
    }

    /**
    * Gets domainType
    *  域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    *
    * @return string
    */
    public function getDomainType()
    {
        return $this->container['domainType'];
    }

    /**
    * Sets domainType
    *
    * @param string $domainType 域名类型，取值如下： - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  证书有效期（年）。
    *
    * @return int
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param int $effectiveTime 证书有效期（年）。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets domainNumbers
    *  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    *
    * @return int
    */
    public function getDomainNumbers()
    {
        return $this->container['domainNumbers'];
    }

    /**
    * Sets domainNumbers
    *
    * @param int $domainNumbers 域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~100”。
    *
    * @return $this
    */
    public function setDomainNumbers($domainNumbers)
    {
        $this->container['domainNumbers'] = $domainNumbers;
        return $this;
    }

    /**
    * Gets orderNumber
    *  购买的证书数量。取值范围为1~100。
    *
    * @return int
    */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
    * Sets orderNumber
    *
    * @param int $orderNumber 购买的证书数量。取值范围为1~100。
    *
    * @return $this
    */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;
        return $this;
    }

    /**
    * Gets agreePrivacyProtection
    *  是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
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
    * @param bool $agreePrivacyProtection 是否同意隐私协议，此处仅能设置为true才能成功购买证书。 - true：同意隐私协议。 - false：不同意隐私协议。
    *
    * @return $this
    */
    public function setAgreePrivacyProtection($agreePrivacyProtection)
    {
        $this->container['agreePrivacyProtection'] = $agreePrivacyProtection;
        return $this;
    }

    /**
    * Gets primaryDomainType
    *  多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    *
    * @return string|null
    */
    public function getPrimaryDomainType()
    {
        return $this->container['primaryDomainType'];
    }

    /**
    * Sets primaryDomainType
    *
    * @param string|null $primaryDomainType 多域名中的主域名类型。 - SINGLE_DOMAIN：主单域名 - WILDCARD_DOMAIN：主泛域名
    *
    * @return $this
    */
    public function setPrimaryDomainType($primaryDomainType)
    {
        $this->container['primaryDomainType'] = $primaryDomainType;
        return $this;
    }

    /**
    * Gets singleDomainNumber
    *  附加单域名数量。
    *
    * @return int|null
    */
    public function getSingleDomainNumber()
    {
        return $this->container['singleDomainNumber'];
    }

    /**
    * Sets singleDomainNumber
    *
    * @param int|null $singleDomainNumber 附加单域名数量。
    *
    * @return $this
    */
    public function setSingleDomainNumber($singleDomainNumber)
    {
        $this->container['singleDomainNumber'] = $singleDomainNumber;
        return $this;
    }

    /**
    * Gets wildcardDomainNumber
    *  附加泛域名数量。
    *
    * @return int|null
    */
    public function getWildcardDomainNumber()
    {
        return $this->container['wildcardDomainNumber'];
    }

    /**
    * Sets wildcardDomainNumber
    *
    * @param int|null $wildcardDomainNumber 附加泛域名数量。
    *
    * @return $this
    */
    public function setWildcardDomainNumber($wildcardDomainNumber)
    {
        $this->container['wildcardDomainNumber'] = $wildcardDomainNumber;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay 是否开启自动支付。 - true：开启自动支付。 - false：不开启自动支付。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
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
    * @param string|null $enterpriseProjectId 企业多项目ID。用户未开通企业多项目时，不需要输入该字段。 用户开通企业多项目时，查询资源可以输入该字段。 若用户不输入该字段，默认查询租户所有有权限的企业多项目下的资源。 此时“enterprise_project_id”取值为“all”。 若用户输入该字段，取值满足以下任一条件。 - 取值为“all” - 取值为“0” - 满足正则匹配：“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号。仅组合购买场景使用。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单号。仅组合购买场景使用。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\ScsResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\ScsResourceTag[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

