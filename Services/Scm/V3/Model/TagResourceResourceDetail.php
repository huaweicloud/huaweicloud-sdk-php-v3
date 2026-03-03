<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagResourceResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagResource_resource_detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certId  证书ID。
    * certName  证书名称。字符长度为3~63位。
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * certType  证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    * certBrand  证书品牌。GLOBALSIGN：GlobalSign品牌。
    * domainType  域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * purchasePeriod  证书有效期（年）。
    * expiredTime  证书到期时间，毫秒级时间戳。
    * orderStatus  订单状态。
    * domainNum  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    * wildcardNumber  泛域名数量。
    * sans  证书绑定的附加域名信息。
    * certDes  证书描述。
    * signatureAlgorithm  签名算法。
    * failReason  失败原因。
    * partnerOrderId  订单流水号。
    * pushSupport  证书是否支持推送。
    * certIssuedTime  证书签发时间，毫秒级时间戳。
    * resourceId  资源id。
    * unsubscribeSupport  证书是否支持退订。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * originCertId  初始证书id。
    * renewalCertId  续费购买证书id。
    * autoRenewStatus  自动续费状态。
    * remainCertNumber  剩余证书有效个数。
    * autoDeploySupport  证书是否支持自动部署。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certId' => 'string',
            'certName' => 'string',
            'domain' => 'string',
            'certType' => 'string',
            'certBrand' => 'string',
            'domainType' => 'string',
            'purchasePeriod' => 'int',
            'expiredTime' => 'string',
            'orderStatus' => 'string',
            'domainNum' => 'int',
            'wildcardNumber' => 'int',
            'sans' => 'string',
            'certDes' => 'string',
            'signatureAlgorithm' => 'string',
            'failReason' => 'string',
            'partnerOrderId' => 'string',
            'pushSupport' => 'bool',
            'certIssuedTime' => 'string',
            'resourceId' => 'string',
            'unsubscribeSupport' => 'bool',
            'enterpriseProjectId' => 'string',
            'originCertId' => 'string',
            'renewalCertId' => 'string',
            'autoRenewStatus' => 'int',
            'remainCertNumber' => 'int',
            'autoDeploySupport' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certId  证书ID。
    * certName  证书名称。字符长度为3~63位。
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * certType  证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    * certBrand  证书品牌。GLOBALSIGN：GlobalSign品牌。
    * domainType  域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * purchasePeriod  证书有效期（年）。
    * expiredTime  证书到期时间，毫秒级时间戳。
    * orderStatus  订单状态。
    * domainNum  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    * wildcardNumber  泛域名数量。
    * sans  证书绑定的附加域名信息。
    * certDes  证书描述。
    * signatureAlgorithm  签名算法。
    * failReason  失败原因。
    * partnerOrderId  订单流水号。
    * pushSupport  证书是否支持推送。
    * certIssuedTime  证书签发时间，毫秒级时间戳。
    * resourceId  资源id。
    * unsubscribeSupport  证书是否支持退订。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * originCertId  初始证书id。
    * renewalCertId  续费购买证书id。
    * autoRenewStatus  自动续费状态。
    * remainCertNumber  剩余证书有效个数。
    * autoDeploySupport  证书是否支持自动部署。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certId' => null,
        'certName' => null,
        'domain' => null,
        'certType' => null,
        'certBrand' => null,
        'domainType' => null,
        'purchasePeriod' => null,
        'expiredTime' => null,
        'orderStatus' => null,
        'domainNum' => 'int8',
        'wildcardNumber' => 'int8',
        'sans' => null,
        'certDes' => null,
        'signatureAlgorithm' => null,
        'failReason' => null,
        'partnerOrderId' => null,
        'pushSupport' => null,
        'certIssuedTime' => null,
        'resourceId' => null,
        'unsubscribeSupport' => null,
        'enterpriseProjectId' => null,
        'originCertId' => null,
        'renewalCertId' => null,
        'autoRenewStatus' => null,
        'remainCertNumber' => null,
        'autoDeploySupport' => null
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
    * certId  证书ID。
    * certName  证书名称。字符长度为3~63位。
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * certType  证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    * certBrand  证书品牌。GLOBALSIGN：GlobalSign品牌。
    * domainType  域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * purchasePeriod  证书有效期（年）。
    * expiredTime  证书到期时间，毫秒级时间戳。
    * orderStatus  订单状态。
    * domainNum  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    * wildcardNumber  泛域名数量。
    * sans  证书绑定的附加域名信息。
    * certDes  证书描述。
    * signatureAlgorithm  签名算法。
    * failReason  失败原因。
    * partnerOrderId  订单流水号。
    * pushSupport  证书是否支持推送。
    * certIssuedTime  证书签发时间，毫秒级时间戳。
    * resourceId  资源id。
    * unsubscribeSupport  证书是否支持退订。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * originCertId  初始证书id。
    * renewalCertId  续费购买证书id。
    * autoRenewStatus  自动续费状态。
    * remainCertNumber  剩余证书有效个数。
    * autoDeploySupport  证书是否支持自动部署。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certId' => 'cert_id',
            'certName' => 'cert_name',
            'domain' => 'domain',
            'certType' => 'cert_type',
            'certBrand' => 'cert_brand',
            'domainType' => 'domain_type',
            'purchasePeriod' => 'purchase_period',
            'expiredTime' => 'expired_time',
            'orderStatus' => 'order_status',
            'domainNum' => 'domain_num',
            'wildcardNumber' => 'wildcard_number',
            'sans' => 'sans',
            'certDes' => 'cert_des',
            'signatureAlgorithm' => 'signature_algorithm',
            'failReason' => 'fail_reason',
            'partnerOrderId' => 'partner_order_id',
            'pushSupport' => 'push_support',
            'certIssuedTime' => 'cert_issued_time',
            'resourceId' => 'resource_id',
            'unsubscribeSupport' => 'unsubscribe_support',
            'enterpriseProjectId' => 'enterprise_project_id',
            'originCertId' => 'origin_cert_id',
            'renewalCertId' => 'renewal_cert_id',
            'autoRenewStatus' => 'auto_renew_status',
            'remainCertNumber' => 'remain_cert_number',
            'autoDeploySupport' => 'auto_deploy_support'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certId  证书ID。
    * certName  证书名称。字符长度为3~63位。
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * certType  证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    * certBrand  证书品牌。GLOBALSIGN：GlobalSign品牌。
    * domainType  域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * purchasePeriod  证书有效期（年）。
    * expiredTime  证书到期时间，毫秒级时间戳。
    * orderStatus  订单状态。
    * domainNum  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    * wildcardNumber  泛域名数量。
    * sans  证书绑定的附加域名信息。
    * certDes  证书描述。
    * signatureAlgorithm  签名算法。
    * failReason  失败原因。
    * partnerOrderId  订单流水号。
    * pushSupport  证书是否支持推送。
    * certIssuedTime  证书签发时间，毫秒级时间戳。
    * resourceId  资源id。
    * unsubscribeSupport  证书是否支持退订。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * originCertId  初始证书id。
    * renewalCertId  续费购买证书id。
    * autoRenewStatus  自动续费状态。
    * remainCertNumber  剩余证书有效个数。
    * autoDeploySupport  证书是否支持自动部署。
    *
    * @var string[]
    */
    protected static $setters = [
            'certId' => 'setCertId',
            'certName' => 'setCertName',
            'domain' => 'setDomain',
            'certType' => 'setCertType',
            'certBrand' => 'setCertBrand',
            'domainType' => 'setDomainType',
            'purchasePeriod' => 'setPurchasePeriod',
            'expiredTime' => 'setExpiredTime',
            'orderStatus' => 'setOrderStatus',
            'domainNum' => 'setDomainNum',
            'wildcardNumber' => 'setWildcardNumber',
            'sans' => 'setSans',
            'certDes' => 'setCertDes',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'failReason' => 'setFailReason',
            'partnerOrderId' => 'setPartnerOrderId',
            'pushSupport' => 'setPushSupport',
            'certIssuedTime' => 'setCertIssuedTime',
            'resourceId' => 'setResourceId',
            'unsubscribeSupport' => 'setUnsubscribeSupport',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'originCertId' => 'setOriginCertId',
            'renewalCertId' => 'setRenewalCertId',
            'autoRenewStatus' => 'setAutoRenewStatus',
            'remainCertNumber' => 'setRemainCertNumber',
            'autoDeploySupport' => 'setAutoDeploySupport'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certId  证书ID。
    * certName  证书名称。字符长度为3~63位。
    * domain  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    * certType  证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    * certBrand  证书品牌。GLOBALSIGN：GlobalSign品牌。
    * domainType  域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    * purchasePeriod  证书有效期（年）。
    * expiredTime  证书到期时间，毫秒级时间戳。
    * orderStatus  订单状态。
    * domainNum  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    * wildcardNumber  泛域名数量。
    * sans  证书绑定的附加域名信息。
    * certDes  证书描述。
    * signatureAlgorithm  签名算法。
    * failReason  失败原因。
    * partnerOrderId  订单流水号。
    * pushSupport  证书是否支持推送。
    * certIssuedTime  证书签发时间，毫秒级时间戳。
    * resourceId  资源id。
    * unsubscribeSupport  证书是否支持退订。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * originCertId  初始证书id。
    * renewalCertId  续费购买证书id。
    * autoRenewStatus  自动续费状态。
    * remainCertNumber  剩余证书有效个数。
    * autoDeploySupport  证书是否支持自动部署。
    *
    * @var string[]
    */
    protected static $getters = [
            'certId' => 'getCertId',
            'certName' => 'getCertName',
            'domain' => 'getDomain',
            'certType' => 'getCertType',
            'certBrand' => 'getCertBrand',
            'domainType' => 'getDomainType',
            'purchasePeriod' => 'getPurchasePeriod',
            'expiredTime' => 'getExpiredTime',
            'orderStatus' => 'getOrderStatus',
            'domainNum' => 'getDomainNum',
            'wildcardNumber' => 'getWildcardNumber',
            'sans' => 'getSans',
            'certDes' => 'getCertDes',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'failReason' => 'getFailReason',
            'partnerOrderId' => 'getPartnerOrderId',
            'pushSupport' => 'getPushSupport',
            'certIssuedTime' => 'getCertIssuedTime',
            'resourceId' => 'getResourceId',
            'unsubscribeSupport' => 'getUnsubscribeSupport',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'originCertId' => 'getOriginCertId',
            'renewalCertId' => 'getRenewalCertId',
            'autoRenewStatus' => 'getAutoRenewStatus',
            'remainCertNumber' => 'getRemainCertNumber',
            'autoDeploySupport' => 'getAutoDeploySupport'
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
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['certType'] = isset($data['certType']) ? $data['certType'] : null;
        $this->container['certBrand'] = isset($data['certBrand']) ? $data['certBrand'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['purchasePeriod'] = isset($data['purchasePeriod']) ? $data['purchasePeriod'] : null;
        $this->container['expiredTime'] = isset($data['expiredTime']) ? $data['expiredTime'] : null;
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['domainNum'] = isset($data['domainNum']) ? $data['domainNum'] : null;
        $this->container['wildcardNumber'] = isset($data['wildcardNumber']) ? $data['wildcardNumber'] : null;
        $this->container['sans'] = isset($data['sans']) ? $data['sans'] : null;
        $this->container['certDes'] = isset($data['certDes']) ? $data['certDes'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['partnerOrderId'] = isset($data['partnerOrderId']) ? $data['partnerOrderId'] : null;
        $this->container['pushSupport'] = isset($data['pushSupport']) ? $data['pushSupport'] : null;
        $this->container['certIssuedTime'] = isset($data['certIssuedTime']) ? $data['certIssuedTime'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['unsubscribeSupport'] = isset($data['unsubscribeSupport']) ? $data['unsubscribeSupport'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['originCertId'] = isset($data['originCertId']) ? $data['originCertId'] : null;
        $this->container['renewalCertId'] = isset($data['renewalCertId']) ? $data['renewalCertId'] : null;
        $this->container['autoRenewStatus'] = isset($data['autoRenewStatus']) ? $data['autoRenewStatus'] : null;
        $this->container['remainCertNumber'] = isset($data['remainCertNumber']) ? $data['remainCertNumber'] : null;
        $this->container['autoDeploySupport'] = isset($data['autoDeploySupport']) ? $data['autoDeploySupport'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) > 16)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) < 16)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) > 63)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) < 3)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certType']) && (mb_strlen($this->container['certType']) > 32)) {
                $invalidProperties[] = "invalid value for 'certType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['certType']) && (mb_strlen($this->container['certType']) < 0)) {
                $invalidProperties[] = "invalid value for 'certType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certBrand']) && (mb_strlen($this->container['certBrand']) > 32)) {
                $invalidProperties[] = "invalid value for 'certBrand', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['certBrand']) && (mb_strlen($this->container['certBrand']) < 0)) {
                $invalidProperties[] = "invalid value for 'certBrand', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainType']) && (mb_strlen($this->container['domainType']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainType']) && (mb_strlen($this->container['domainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['purchasePeriod']) && ($this->container['purchasePeriod'] > 1000)) {
                $invalidProperties[] = "invalid value for 'purchasePeriod', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['purchasePeriod']) && ($this->container['purchasePeriod'] < 0)) {
                $invalidProperties[] = "invalid value for 'purchasePeriod', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expiredTime']) && (mb_strlen($this->container['expiredTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'expiredTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['expiredTime']) && (mb_strlen($this->container['expiredTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expiredTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderStatus']) && (mb_strlen($this->container['orderStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'orderStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['orderStatus']) && (mb_strlen($this->container['orderStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainNum']) && ($this->container['domainNum'] > 250)) {
                $invalidProperties[] = "invalid value for 'domainNum', must be smaller than or equal to 250.";
            }
            if (!is_null($this->container['domainNum']) && ($this->container['domainNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'domainNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['wildcardNumber']) && ($this->container['wildcardNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'wildcardNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['wildcardNumber']) && ($this->container['wildcardNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'wildcardNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) > 4096)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) < 0)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certDes']) && (mb_strlen($this->container['certDes']) > 32)) {
                $invalidProperties[] = "invalid value for 'certDes', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['certDes']) && (mb_strlen($this->container['certDes']) < 0)) {
                $invalidProperties[] = "invalid value for 'certDes', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signatureAlgorithm']) && (mb_strlen($this->container['signatureAlgorithm']) > 32)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['signatureAlgorithm']) && (mb_strlen($this->container['signatureAlgorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['failReason']) && (mb_strlen($this->container['failReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partnerOrderId']) && (mb_strlen($this->container['partnerOrderId']) > 63)) {
                $invalidProperties[] = "invalid value for 'partnerOrderId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['partnerOrderId']) && (mb_strlen($this->container['partnerOrderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'partnerOrderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certIssuedTime']) && (mb_strlen($this->container['certIssuedTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'certIssuedTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['certIssuedTime']) && (mb_strlen($this->container['certIssuedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'certIssuedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 63)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['originCertId']) && (mb_strlen($this->container['originCertId']) > 63)) {
                $invalidProperties[] = "invalid value for 'originCertId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['originCertId']) && (mb_strlen($this->container['originCertId']) < 0)) {
                $invalidProperties[] = "invalid value for 'originCertId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['renewalCertId']) && (mb_strlen($this->container['renewalCertId']) > 63)) {
                $invalidProperties[] = "invalid value for 'renewalCertId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['renewalCertId']) && (mb_strlen($this->container['renewalCertId']) < 0)) {
                $invalidProperties[] = "invalid value for 'renewalCertId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['autoRenewStatus']) && ($this->container['autoRenewStatus'] > 100)) {
                $invalidProperties[] = "invalid value for 'autoRenewStatus', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['autoRenewStatus']) && ($this->container['autoRenewStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoRenewStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remainCertNumber']) && ($this->container['remainCertNumber'] > 100)) {
                $invalidProperties[] = "invalid value for 'remainCertNumber', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['remainCertNumber']) && ($this->container['remainCertNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainCertNumber', must be bigger than or equal to 0.";
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
    * Gets certId
    *  证书ID。
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId 证书ID。
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
        return $this;
    }

    /**
    * Gets certName
    *  证书名称。字符长度为3~63位。
    *
    * @return string|null
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string|null $certName 证书名称。字符长度为3~63位。
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets domain
    *  该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 该证书绑定的域名。 - 当购买的证书为“单域名”或“泛域名”类型的证书时，请直接填写单域名或泛域名即可。 - 当购买的证书为“多域名”类型的证书时，需要选择1个域名作为主域名。 示例：www.example.com
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets certType
    *  证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    *
    * @return string|null
    */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
    * Sets certType
    *
    * @param string|null $certType 证书类型。 - OV_SSL_CERT：企业型SSL证书。 - EV_SSL_CERT：增强型SSL证书。
    *
    * @return $this
    */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;
        return $this;
    }

    /**
    * Gets certBrand
    *  证书品牌。GLOBALSIGN：GlobalSign品牌。
    *
    * @return string|null
    */
    public function getCertBrand()
    {
        return $this->container['certBrand'];
    }

    /**
    * Sets certBrand
    *
    * @param string|null $certBrand 证书品牌。GLOBALSIGN：GlobalSign品牌。
    *
    * @return $this
    */
    public function setCertBrand($certBrand)
    {
        $this->container['certBrand'] = $certBrand;
        return $this;
    }

    /**
    * Gets domainType
    *  域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    *
    * @return string|null
    */
    public function getDomainType()
    {
        return $this->container['domainType'];
    }

    /**
    * Sets domainType
    *
    * @param string|null $domainType 域名类型。 - SINGLE_DOMAIN：单域名类型。 - MULTI_DOMAIN：多域名类型。 - WILDCARD：泛域名类型。
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets purchasePeriod
    *  证书有效期（年）。
    *
    * @return int|null
    */
    public function getPurchasePeriod()
    {
        return $this->container['purchasePeriod'];
    }

    /**
    * Sets purchasePeriod
    *
    * @param int|null $purchasePeriod 证书有效期（年）。
    *
    * @return $this
    */
    public function setPurchasePeriod($purchasePeriod)
    {
        $this->container['purchasePeriod'] = $purchasePeriod;
        return $this;
    }

    /**
    * Gets expiredTime
    *  证书到期时间，毫秒级时间戳。
    *
    * @return string|null
    */
    public function getExpiredTime()
    {
        return $this->container['expiredTime'];
    }

    /**
    * Sets expiredTime
    *
    * @param string|null $expiredTime 证书到期时间，毫秒级时间戳。
    *
    * @return $this
    */
    public function setExpiredTime($expiredTime)
    {
        $this->container['expiredTime'] = $expiredTime;
        return $this;
    }

    /**
    * Gets orderStatus
    *  订单状态。
    *
    * @return string|null
    */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
    * Sets orderStatus
    *
    * @param string|null $orderStatus 订单状态。
    *
    * @return $this
    */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;
        return $this;
    }

    /**
    * Gets domainNum
    *  域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    *
    * @return int|null
    */
    public function getDomainNum()
    {
        return $this->container['domainNum'];
    }

    /**
    * Sets domainNum
    *
    * @param int|null $domainNum 域名数量。 - 当“domain_type”选择的是“SINGLE_DOMAIN”或“WILDCARD”类型的证书时，域名数量取值为“1”。 - 当“domain_type”选择的是“MULTI_DOMAIN”类型的证书时，域名数量取值范围为“2~250”。
    *
    * @return $this
    */
    public function setDomainNum($domainNum)
    {
        $this->container['domainNum'] = $domainNum;
        return $this;
    }

    /**
    * Gets wildcardNumber
    *  泛域名数量。
    *
    * @return int|null
    */
    public function getWildcardNumber()
    {
        return $this->container['wildcardNumber'];
    }

    /**
    * Sets wildcardNumber
    *
    * @param int|null $wildcardNumber 泛域名数量。
    *
    * @return $this
    */
    public function setWildcardNumber($wildcardNumber)
    {
        $this->container['wildcardNumber'] = $wildcardNumber;
        return $this;
    }

    /**
    * Gets sans
    *  证书绑定的附加域名信息。
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
    * @param string|null $sans 证书绑定的附加域名信息。
    *
    * @return $this
    */
    public function setSans($sans)
    {
        $this->container['sans'] = $sans;
        return $this;
    }

    /**
    * Gets certDes
    *  证书描述。
    *
    * @return string|null
    */
    public function getCertDes()
    {
        return $this->container['certDes'];
    }

    /**
    * Sets certDes
    *
    * @param string|null $certDes 证书描述。
    *
    * @return $this
    */
    public function setCertDes($certDes)
    {
        $this->container['certDes'] = $certDes;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  签名算法。
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
    * @param string|null $signatureAlgorithm 签名算法。
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 失败原因。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets partnerOrderId
    *  订单流水号。
    *
    * @return string|null
    */
    public function getPartnerOrderId()
    {
        return $this->container['partnerOrderId'];
    }

    /**
    * Sets partnerOrderId
    *
    * @param string|null $partnerOrderId 订单流水号。
    *
    * @return $this
    */
    public function setPartnerOrderId($partnerOrderId)
    {
        $this->container['partnerOrderId'] = $partnerOrderId;
        return $this;
    }

    /**
    * Gets pushSupport
    *  证书是否支持推送。
    *
    * @return bool|null
    */
    public function getPushSupport()
    {
        return $this->container['pushSupport'];
    }

    /**
    * Sets pushSupport
    *
    * @param bool|null $pushSupport 证书是否支持推送。
    *
    * @return $this
    */
    public function setPushSupport($pushSupport)
    {
        $this->container['pushSupport'] = $pushSupport;
        return $this;
    }

    /**
    * Gets certIssuedTime
    *  证书签发时间，毫秒级时间戳。
    *
    * @return string|null
    */
    public function getCertIssuedTime()
    {
        return $this->container['certIssuedTime'];
    }

    /**
    * Sets certIssuedTime
    *
    * @param string|null $certIssuedTime 证书签发时间，毫秒级时间戳。
    *
    * @return $this
    */
    public function setCertIssuedTime($certIssuedTime)
    {
        $this->container['certIssuedTime'] = $certIssuedTime;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets unsubscribeSupport
    *  证书是否支持退订。
    *
    * @return bool|null
    */
    public function getUnsubscribeSupport()
    {
        return $this->container['unsubscribeSupport'];
    }

    /**
    * Sets unsubscribeSupport
    *
    * @param bool|null $unsubscribeSupport 证书是否支持退订。
    *
    * @return $this
    */
    public function setUnsubscribeSupport($unsubscribeSupport)
    {
        $this->container['unsubscribeSupport'] = $unsubscribeSupport;
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
    * Gets originCertId
    *  初始证书id。
    *
    * @return string|null
    */
    public function getOriginCertId()
    {
        return $this->container['originCertId'];
    }

    /**
    * Sets originCertId
    *
    * @param string|null $originCertId 初始证书id。
    *
    * @return $this
    */
    public function setOriginCertId($originCertId)
    {
        $this->container['originCertId'] = $originCertId;
        return $this;
    }

    /**
    * Gets renewalCertId
    *  续费购买证书id。
    *
    * @return string|null
    */
    public function getRenewalCertId()
    {
        return $this->container['renewalCertId'];
    }

    /**
    * Sets renewalCertId
    *
    * @param string|null $renewalCertId 续费购买证书id。
    *
    * @return $this
    */
    public function setRenewalCertId($renewalCertId)
    {
        $this->container['renewalCertId'] = $renewalCertId;
        return $this;
    }

    /**
    * Gets autoRenewStatus
    *  自动续费状态。
    *
    * @return int|null
    */
    public function getAutoRenewStatus()
    {
        return $this->container['autoRenewStatus'];
    }

    /**
    * Sets autoRenewStatus
    *
    * @param int|null $autoRenewStatus 自动续费状态。
    *
    * @return $this
    */
    public function setAutoRenewStatus($autoRenewStatus)
    {
        $this->container['autoRenewStatus'] = $autoRenewStatus;
        return $this;
    }

    /**
    * Gets remainCertNumber
    *  剩余证书有效个数。
    *
    * @return int|null
    */
    public function getRemainCertNumber()
    {
        return $this->container['remainCertNumber'];
    }

    /**
    * Sets remainCertNumber
    *
    * @param int|null $remainCertNumber 剩余证书有效个数。
    *
    * @return $this
    */
    public function setRemainCertNumber($remainCertNumber)
    {
        $this->container['remainCertNumber'] = $remainCertNumber;
        return $this;
    }

    /**
    * Gets autoDeploySupport
    *  证书是否支持自动部署。
    *
    * @return bool|null
    */
    public function getAutoDeploySupport()
    {
        return $this->container['autoDeploySupport'];
    }

    /**
    * Sets autoDeploySupport
    *
    * @param bool|null $autoDeploySupport 证书是否支持自动部署。
    *
    * @return $this
    */
    public function setAutoDeploySupport($autoDeploySupport)
    {
        $this->container['autoDeploySupport'] = $autoDeploySupport;
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

