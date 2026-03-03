<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  证书id。
    * status  证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * orderId  订单id。
    * name  证书名称。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
    * brand  证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    * pushSupport  证书是否支持推送。
    * revokeReason  证书吊销原因。
    * signatureAlgorithm  签名算法。
    * issueTime  证书签发时间，没有获取到有效值时为空。
    * notBefore  证书生效时间，没有获取到有效值时为空。
    * notAfter  证书失效时间，没有获取到有效值时为空。
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * validationMethod  域名认证方式，取值如下：DNS、FILE、EMAIL。
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * multiDomainType  多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    * domain  证书绑定域名。
    * sans  证书绑定的附加域名信息。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定附加域名个数。
    * fingerprint  证书的SHA-1指纹。
    * shared  是否是共享资源。
    * applicationInfo  applicationInfo
    * description  证书的描述。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * authentification  域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'orderId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'brand' => 'string',
            'pushSupport' => 'string',
            'revokeReason' => 'string',
            'signatureAlgorithm' => 'string',
            'issueTime' => 'string',
            'notBefore' => 'string',
            'notAfter' => 'string',
            'validityPeriod' => 'int',
            'validationMethod' => 'string',
            'domainType' => 'string',
            'multiDomainType' => 'string',
            'domain' => 'string',
            'sans' => 'string',
            'domainCount' => 'int',
            'wildcardCount' => 'int',
            'fingerprint' => 'string',
            'shared' => 'bool',
            'applicationInfo' => '\HuaweiCloud\SDK\Scm\V3\Model\ShowCertificateResponseBodyApplicationInfo',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'authentification' => '\HuaweiCloud\SDK\Scm\V3\Model\Authentification[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  证书id。
    * status  证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * orderId  订单id。
    * name  证书名称。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
    * brand  证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    * pushSupport  证书是否支持推送。
    * revokeReason  证书吊销原因。
    * signatureAlgorithm  签名算法。
    * issueTime  证书签发时间，没有获取到有效值时为空。
    * notBefore  证书生效时间，没有获取到有效值时为空。
    * notAfter  证书失效时间，没有获取到有效值时为空。
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * validationMethod  域名认证方式，取值如下：DNS、FILE、EMAIL。
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * multiDomainType  多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    * domain  证书绑定域名。
    * sans  证书绑定的附加域名信息。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定附加域名个数。
    * fingerprint  证书的SHA-1指纹。
    * shared  是否是共享资源。
    * applicationInfo  applicationInfo
    * description  证书的描述。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * authentification  域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'orderId' => null,
        'name' => null,
        'type' => null,
        'brand' => null,
        'pushSupport' => null,
        'revokeReason' => null,
        'signatureAlgorithm' => null,
        'issueTime' => null,
        'notBefore' => null,
        'notAfter' => null,
        'validityPeriod' => 'int8',
        'validationMethod' => null,
        'domainType' => null,
        'multiDomainType' => null,
        'domain' => null,
        'sans' => null,
        'domainCount' => null,
        'wildcardCount' => null,
        'fingerprint' => null,
        'shared' => null,
        'applicationInfo' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'authentification' => null
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
    * id  证书id。
    * status  证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * orderId  订单id。
    * name  证书名称。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
    * brand  证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    * pushSupport  证书是否支持推送。
    * revokeReason  证书吊销原因。
    * signatureAlgorithm  签名算法。
    * issueTime  证书签发时间，没有获取到有效值时为空。
    * notBefore  证书生效时间，没有获取到有效值时为空。
    * notAfter  证书失效时间，没有获取到有效值时为空。
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * validationMethod  域名认证方式，取值如下：DNS、FILE、EMAIL。
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * multiDomainType  多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    * domain  证书绑定域名。
    * sans  证书绑定的附加域名信息。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定附加域名个数。
    * fingerprint  证书的SHA-1指纹。
    * shared  是否是共享资源。
    * applicationInfo  applicationInfo
    * description  证书的描述。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * authentification  域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'orderId' => 'order_id',
            'name' => 'name',
            'type' => 'type',
            'brand' => 'brand',
            'pushSupport' => 'push_support',
            'revokeReason' => 'revoke_reason',
            'signatureAlgorithm' => 'signature_algorithm',
            'issueTime' => 'issue_time',
            'notBefore' => 'not_before',
            'notAfter' => 'not_after',
            'validityPeriod' => 'validity_period',
            'validationMethod' => 'validation_method',
            'domainType' => 'domain_type',
            'multiDomainType' => 'multi_domain_type',
            'domain' => 'domain',
            'sans' => 'sans',
            'domainCount' => 'domain_count',
            'wildcardCount' => 'wildcard_count',
            'fingerprint' => 'fingerprint',
            'shared' => 'shared',
            'applicationInfo' => 'application_info',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'authentification' => 'authentification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  证书id。
    * status  证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * orderId  订单id。
    * name  证书名称。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
    * brand  证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    * pushSupport  证书是否支持推送。
    * revokeReason  证书吊销原因。
    * signatureAlgorithm  签名算法。
    * issueTime  证书签发时间，没有获取到有效值时为空。
    * notBefore  证书生效时间，没有获取到有效值时为空。
    * notAfter  证书失效时间，没有获取到有效值时为空。
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * validationMethod  域名认证方式，取值如下：DNS、FILE、EMAIL。
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * multiDomainType  多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    * domain  证书绑定域名。
    * sans  证书绑定的附加域名信息。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定附加域名个数。
    * fingerprint  证书的SHA-1指纹。
    * shared  是否是共享资源。
    * applicationInfo  applicationInfo
    * description  证书的描述。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * authentification  域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'orderId' => 'setOrderId',
            'name' => 'setName',
            'type' => 'setType',
            'brand' => 'setBrand',
            'pushSupport' => 'setPushSupport',
            'revokeReason' => 'setRevokeReason',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'issueTime' => 'setIssueTime',
            'notBefore' => 'setNotBefore',
            'notAfter' => 'setNotAfter',
            'validityPeriod' => 'setValidityPeriod',
            'validationMethod' => 'setValidationMethod',
            'domainType' => 'setDomainType',
            'multiDomainType' => 'setMultiDomainType',
            'domain' => 'setDomain',
            'sans' => 'setSans',
            'domainCount' => 'setDomainCount',
            'wildcardCount' => 'setWildcardCount',
            'fingerprint' => 'setFingerprint',
            'shared' => 'setShared',
            'applicationInfo' => 'setApplicationInfo',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'authentification' => 'setAuthentification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  证书id。
    * status  证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * orderId  订单id。
    * name  证书名称。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
    * brand  证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    * pushSupport  证书是否支持推送。
    * revokeReason  证书吊销原因。
    * signatureAlgorithm  签名算法。
    * issueTime  证书签发时间，没有获取到有效值时为空。
    * notBefore  证书生效时间，没有获取到有效值时为空。
    * notAfter  证书失效时间，没有获取到有效值时为空。
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * validationMethod  域名认证方式，取值如下：DNS、FILE、EMAIL。
    * domainType  域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * multiDomainType  多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    * domain  证书绑定域名。
    * sans  证书绑定的附加域名信息。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定附加域名个数。
    * fingerprint  证书的SHA-1指纹。
    * shared  是否是共享资源。
    * applicationInfo  applicationInfo
    * description  证书的描述。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    * authentification  域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'orderId' => 'getOrderId',
            'name' => 'getName',
            'type' => 'getType',
            'brand' => 'getBrand',
            'pushSupport' => 'getPushSupport',
            'revokeReason' => 'getRevokeReason',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'issueTime' => 'getIssueTime',
            'notBefore' => 'getNotBefore',
            'notAfter' => 'getNotAfter',
            'validityPeriod' => 'getValidityPeriod',
            'validationMethod' => 'getValidationMethod',
            'domainType' => 'getDomainType',
            'multiDomainType' => 'getMultiDomainType',
            'domain' => 'getDomain',
            'sans' => 'getSans',
            'domainCount' => 'getDomainCount',
            'wildcardCount' => 'getWildcardCount',
            'fingerprint' => 'getFingerprint',
            'shared' => 'getShared',
            'applicationInfo' => 'getApplicationInfo',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'authentification' => 'getAuthentification'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['pushSupport'] = isset($data['pushSupport']) ? $data['pushSupport'] : null;
        $this->container['revokeReason'] = isset($data['revokeReason']) ? $data['revokeReason'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['issueTime'] = isset($data['issueTime']) ? $data['issueTime'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['validityPeriod'] = isset($data['validityPeriod']) ? $data['validityPeriod'] : null;
        $this->container['validationMethod'] = isset($data['validationMethod']) ? $data['validationMethod'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['multiDomainType'] = isset($data['multiDomainType']) ? $data['multiDomainType'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['sans'] = isset($data['sans']) ? $data['sans'] : null;
        $this->container['domainCount'] = isset($data['domainCount']) ? $data['domainCount'] : null;
        $this->container['wildcardCount'] = isset($data['wildcardCount']) ? $data['wildcardCount'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['applicationInfo'] = isset($data['applicationInfo']) ? $data['applicationInfo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['authentification'] = isset($data['authentification']) ? $data['authentification'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 63)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['brand']) && (mb_strlen($this->container['brand']) > 32)) {
                $invalidProperties[] = "invalid value for 'brand', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['brand']) && (mb_strlen($this->container['brand']) < 0)) {
                $invalidProperties[] = "invalid value for 'brand', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pushSupport']) && (mb_strlen($this->container['pushSupport']) > 32)) {
                $invalidProperties[] = "invalid value for 'pushSupport', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['pushSupport']) && (mb_strlen($this->container['pushSupport']) < 0)) {
                $invalidProperties[] = "invalid value for 'pushSupport', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['revokeReason']) && (mb_strlen($this->container['revokeReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'revokeReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['revokeReason']) && (mb_strlen($this->container['revokeReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'revokeReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signatureAlgorithm']) && (mb_strlen($this->container['signatureAlgorithm']) > 64)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['signatureAlgorithm']) && (mb_strlen($this->container['signatureAlgorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueTime']) && (mb_strlen($this->container['issueTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'issueTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['issueTime']) && (mb_strlen($this->container['issueTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notBefore']) && (mb_strlen($this->container['notBefore']) > 32)) {
                $invalidProperties[] = "invalid value for 'notBefore', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['notBefore']) && (mb_strlen($this->container['notBefore']) < 0)) {
                $invalidProperties[] = "invalid value for 'notBefore', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notAfter']) && (mb_strlen($this->container['notAfter']) > 32)) {
                $invalidProperties[] = "invalid value for 'notAfter', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['notAfter']) && (mb_strlen($this->container['notAfter']) < 0)) {
                $invalidProperties[] = "invalid value for 'notAfter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['validityPeriod']) && ($this->container['validityPeriod'] > 12)) {
                $invalidProperties[] = "invalid value for 'validityPeriod', must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['validityPeriod']) && ($this->container['validityPeriod'] < 12)) {
                $invalidProperties[] = "invalid value for 'validityPeriod', must be bigger than or equal to 12.";
            }
            if (!is_null($this->container['validationMethod']) && (mb_strlen($this->container['validationMethod']) > 32)) {
                $invalidProperties[] = "invalid value for 'validationMethod', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['validationMethod']) && (mb_strlen($this->container['validationMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'validationMethod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainType']) && (mb_strlen($this->container['domainType']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainType']) && (mb_strlen($this->container['domainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['multiDomainType']) && (mb_strlen($this->container['multiDomainType']) > 32)) {
                $invalidProperties[] = "invalid value for 'multiDomainType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['multiDomainType']) && (mb_strlen($this->container['multiDomainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'multiDomainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) > 4096)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) < 0)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainCount']) && ($this->container['domainCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'domainCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['domainCount']) && ($this->container['domainCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'domainCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['wildcardCount']) && ($this->container['wildcardCount'] > 99)) {
                $invalidProperties[] = "invalid value for 'wildcardCount', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['wildcardCount']) && ($this->container['wildcardCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'wildcardCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) > 40)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) < 40)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  证书id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 证书id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
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
    * @param string|null $status 证书状态。取值如下： - PAID：证书已支付，待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orderId
    *  订单id。
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
    * @param string|null $orderId 订单id。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets name
    *  证书名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 证书名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
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
    * @param string|null $type 证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets brand
    *  证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    *
    * @return string|null
    */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
    * Sets brand
    *
    * @param string|null $brand 证书品牌。取值如下： GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA。
    *
    * @return $this
    */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;
        return $this;
    }

    /**
    * Gets pushSupport
    *  证书是否支持推送。
    *
    * @return string|null
    */
    public function getPushSupport()
    {
        return $this->container['pushSupport'];
    }

    /**
    * Sets pushSupport
    *
    * @param string|null $pushSupport 证书是否支持推送。
    *
    * @return $this
    */
    public function setPushSupport($pushSupport)
    {
        $this->container['pushSupport'] = $pushSupport;
        return $this;
    }

    /**
    * Gets revokeReason
    *  证书吊销原因。
    *
    * @return string|null
    */
    public function getRevokeReason()
    {
        return $this->container['revokeReason'];
    }

    /**
    * Sets revokeReason
    *
    * @param string|null $revokeReason 证书吊销原因。
    *
    * @return $this
    */
    public function setRevokeReason($revokeReason)
    {
        $this->container['revokeReason'] = $revokeReason;
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
    * Gets issueTime
    *  证书签发时间，没有获取到有效值时为空。
    *
    * @return string|null
    */
    public function getIssueTime()
    {
        return $this->container['issueTime'];
    }

    /**
    * Sets issueTime
    *
    * @param string|null $issueTime 证书签发时间，没有获取到有效值时为空。
    *
    * @return $this
    */
    public function setIssueTime($issueTime)
    {
        $this->container['issueTime'] = $issueTime;
        return $this;
    }

    /**
    * Gets notBefore
    *  证书生效时间，没有获取到有效值时为空。
    *
    * @return string|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param string|null $notBefore 证书生效时间，没有获取到有效值时为空。
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
    *  证书失效时间，没有获取到有效值时为空。
    *
    * @return string|null
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param string|null $notAfter 证书失效时间，没有获取到有效值时为空。
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets validityPeriod
    *  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    *
    * @return int|null
    */
    public function getValidityPeriod()
    {
        return $this->container['validityPeriod'];
    }

    /**
    * Sets validityPeriod
    *
    * @param int|null $validityPeriod 证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    *
    * @return $this
    */
    public function setValidityPeriod($validityPeriod)
    {
        $this->container['validityPeriod'] = $validityPeriod;
        return $this;
    }

    /**
    * Gets validationMethod
    *  域名认证方式，取值如下：DNS、FILE、EMAIL。
    *
    * @return string|null
    */
    public function getValidationMethod()
    {
        return $this->container['validationMethod'];
    }

    /**
    * Sets validationMethod
    *
    * @param string|null $validationMethod 域名认证方式，取值如下：DNS、FILE、EMAIL。
    *
    * @return $this
    */
    public function setValidationMethod($validationMethod)
    {
        $this->container['validationMethod'] = $validationMethod;
        return $this;
    }

    /**
    * Gets domainType
    *  域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
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
    * @param string|null $domainType 域名类型，取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets multiDomainType
    *  多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    *
    * @return string|null
    */
    public function getMultiDomainType()
    {
        return $this->container['multiDomainType'];
    }

    /**
    * Sets multiDomainType
    *
    * @param string|null $multiDomainType 多域名类型，取值如下： - primary_single：主单域名 - primary_wildcard：主泛域名
    *
    * @return $this
    */
    public function setMultiDomainType($multiDomainType)
    {
        $this->container['multiDomainType'] = $multiDomainType;
        return $this;
    }

    /**
    * Gets domain
    *  证书绑定域名。
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
    * @param string|null $domain 证书绑定域名。
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
    * Gets domainCount
    *  证书可绑定域名个数。
    *
    * @return int|null
    */
    public function getDomainCount()
    {
        return $this->container['domainCount'];
    }

    /**
    * Sets domainCount
    *
    * @param int|null $domainCount 证书可绑定域名个数。
    *
    * @return $this
    */
    public function setDomainCount($domainCount)
    {
        $this->container['domainCount'] = $domainCount;
        return $this;
    }

    /**
    * Gets wildcardCount
    *  证书可绑定附加域名个数。
    *
    * @return int|null
    */
    public function getWildcardCount()
    {
        return $this->container['wildcardCount'];
    }

    /**
    * Sets wildcardCount
    *
    * @param int|null $wildcardCount 证书可绑定附加域名个数。
    *
    * @return $this
    */
    public function setWildcardCount($wildcardCount)
    {
        $this->container['wildcardCount'] = $wildcardCount;
        return $this;
    }

    /**
    * Gets fingerprint
    *  证书的SHA-1指纹。
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint 证书的SHA-1指纹。
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets shared
    *  是否是共享资源。
    *
    * @return bool|null
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool|null $shared 是否是共享资源。
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets applicationInfo
    *  applicationInfo
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\ShowCertificateResponseBodyApplicationInfo|null
    */
    public function getApplicationInfo()
    {
        return $this->container['applicationInfo'];
    }

    /**
    * Sets applicationInfo
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\ShowCertificateResponseBodyApplicationInfo|null $applicationInfo applicationInfo
    *
    * @return $this
    */
    public function setApplicationInfo($applicationInfo)
    {
        $this->container['applicationInfo'] = $applicationInfo;
        return $this;
    }

    /**
    * Gets description
    *  证书的描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 证书的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets authentification
    *  域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Scm\V3\Model\Authentification[]|null
    */
    public function getAuthentification()
    {
        return $this->container['authentification'];
    }

    /**
    * Sets authentification
    *
    * @param \HuaweiCloud\SDK\Scm\V3\Model\Authentification[]|null $authentification 域名所有权认证信息，详情请参见Authentification字段数据结构说明。
    *
    * @return $this
    */
    public function setAuthentification($authentification)
    {
        $this->container['authentification'] = $authentification;
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

