<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificateDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificateDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  证书id。
    * name  证书名称。
    * domain  证书绑定的域名。
    * sans  多域名证书绑定的附加域名。
    * signatureAlgorithm  签名算法。
    * deploySupport  是否支持部署。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
    * brand  证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    * expireTime  证书过期时间。
    * domainType  域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * status  证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定泛域名个数。
    * description  证书描述。
    * domainId  账号ID。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'domain' => 'string',
            'sans' => 'string',
            'signatureAlgorithm' => 'string',
            'deploySupport' => 'bool',
            'type' => 'string',
            'brand' => 'string',
            'expireTime' => 'string',
            'domainType' => 'string',
            'validityPeriod' => 'int',
            'status' => 'string',
            'domainCount' => 'int',
            'wildcardCount' => 'int',
            'description' => 'string',
            'domainId' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  证书id。
    * name  证书名称。
    * domain  证书绑定的域名。
    * sans  多域名证书绑定的附加域名。
    * signatureAlgorithm  签名算法。
    * deploySupport  是否支持部署。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
    * brand  证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    * expireTime  证书过期时间。
    * domainType  域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * status  证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定泛域名个数。
    * description  证书描述。
    * domainId  账号ID。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'domain' => null,
        'sans' => null,
        'signatureAlgorithm' => null,
        'deploySupport' => null,
        'type' => null,
        'brand' => null,
        'expireTime' => null,
        'domainType' => null,
        'validityPeriod' => 'int8',
        'status' => null,
        'domainCount' => null,
        'wildcardCount' => null,
        'description' => null,
        'domainId' => null,
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
    * id  证书id。
    * name  证书名称。
    * domain  证书绑定的域名。
    * sans  多域名证书绑定的附加域名。
    * signatureAlgorithm  签名算法。
    * deploySupport  是否支持部署。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
    * brand  证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    * expireTime  证书过期时间。
    * domainType  域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * status  证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定泛域名个数。
    * description  证书描述。
    * domainId  账号ID。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'domain' => 'domain',
            'sans' => 'sans',
            'signatureAlgorithm' => 'signature_algorithm',
            'deploySupport' => 'deploy_support',
            'type' => 'type',
            'brand' => 'brand',
            'expireTime' => 'expire_time',
            'domainType' => 'domain_type',
            'validityPeriod' => 'validity_period',
            'status' => 'status',
            'domainCount' => 'domain_count',
            'wildcardCount' => 'wildcard_count',
            'description' => 'description',
            'domainId' => 'domain_id',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  证书id。
    * name  证书名称。
    * domain  证书绑定的域名。
    * sans  多域名证书绑定的附加域名。
    * signatureAlgorithm  签名算法。
    * deploySupport  是否支持部署。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
    * brand  证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    * expireTime  证书过期时间。
    * domainType  域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * status  证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定泛域名个数。
    * description  证书描述。
    * domainId  账号ID。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'domain' => 'setDomain',
            'sans' => 'setSans',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'deploySupport' => 'setDeploySupport',
            'type' => 'setType',
            'brand' => 'setBrand',
            'expireTime' => 'setExpireTime',
            'domainType' => 'setDomainType',
            'validityPeriod' => 'setValidityPeriod',
            'status' => 'setStatus',
            'domainCount' => 'setDomainCount',
            'wildcardCount' => 'setWildcardCount',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  证书id。
    * name  证书名称。
    * domain  证书绑定的域名。
    * sans  多域名证书绑定的附加域名。
    * signatureAlgorithm  签名算法。
    * deploySupport  是否支持部署。
    * type  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
    * brand  证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    * expireTime  证书过期时间。
    * domainType  域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    * validityPeriod  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    * status  证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    * domainCount  证书可绑定域名个数。
    * wildcardCount  证书可绑定泛域名个数。
    * description  证书描述。
    * domainId  账号ID。
    * enterpriseProjectId  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'domain' => 'getDomain',
            'sans' => 'getSans',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'deploySupport' => 'getDeploySupport',
            'type' => 'getType',
            'brand' => 'getBrand',
            'expireTime' => 'getExpireTime',
            'domainType' => 'getDomainType',
            'validityPeriod' => 'getValidityPeriod',
            'status' => 'getStatus',
            'domainCount' => 'getDomainCount',
            'wildcardCount' => 'getWildcardCount',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['sans'] = isset($data['sans']) ? $data['sans'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['deploySupport'] = isset($data['deploySupport']) ? $data['deploySupport'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['domainType'] = isset($data['domainType']) ? $data['domainType'] : null;
        $this->container['validityPeriod'] = isset($data['validityPeriod']) ? $data['validityPeriod'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainCount'] = isset($data['domainCount']) ? $data['domainCount'] : null;
        $this->container['wildcardCount'] = isset($data['wildcardCount']) ? $data['wildcardCount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['id']) < 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 16.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-z0-9-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9-]+$/.";
            }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sans'] === null) {
            $invalidProperties[] = "'sans' can't be null";
        }
            if ((mb_strlen($this->container['sans']) > 4096)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['sans']) < 1)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['signatureAlgorithm'] === null) {
            $invalidProperties[] = "'signatureAlgorithm' can't be null";
        }
            if ((mb_strlen($this->container['signatureAlgorithm']) > 64)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['signatureAlgorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'signatureAlgorithm', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['deploySupport'] === null) {
            $invalidProperties[] = "'deploySupport' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
        }
            if ((mb_strlen($this->container['brand']) > 255)) {
                $invalidProperties[] = "invalid value for 'brand', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['brand']) < 1)) {
                $invalidProperties[] = "invalid value for 'brand', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
            if ((mb_strlen($this->container['expireTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['expireTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainType'] === null) {
            $invalidProperties[] = "'domainType' can't be null";
        }
            if ((mb_strlen($this->container['domainType']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['domainType']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['validityPeriod'] === null) {
            $invalidProperties[] = "'validityPeriod' can't be null";
        }
            if (($this->container['validityPeriod'] > 12)) {
                $invalidProperties[] = "invalid value for 'validityPeriod', must be smaller than or equal to 12.";
            }
            if (($this->container['validityPeriod'] < 12)) {
                $invalidProperties[] = "invalid value for 'validityPeriod', must be bigger than or equal to 12.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['domainCount'] === null) {
            $invalidProperties[] = "'domainCount' can't be null";
        }
            if (($this->container['domainCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'domainCount', must be smaller than or equal to 100.";
            }
            if (($this->container['domainCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'domainCount', must be bigger than or equal to 1.";
            }
        if ($this->container['wildcardCount'] === null) {
            $invalidProperties[] = "'wildcardCount' can't be null";
        }
            if (($this->container['wildcardCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'wildcardCount', must be smaller than or equal to 100.";
            }
            if (($this->container['wildcardCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'wildcardCount', must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 100)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 0)) {
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
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 证书id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  证书名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 证书名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domain
    *  证书绑定的域名。
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
    * @param string $domain 证书绑定的域名。
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
    *  多域名证书绑定的附加域名。
    *
    * @return string
    */
    public function getSans()
    {
        return $this->container['sans'];
    }

    /**
    * Sets sans
    *
    * @param string $sans 多域名证书绑定的附加域名。
    *
    * @return $this
    */
    public function setSans($sans)
    {
        $this->container['sans'] = $sans;
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
    * Gets deploySupport
    *  是否支持部署。
    *
    * @return bool
    */
    public function getDeploySupport()
    {
        return $this->container['deploySupport'];
    }

    /**
    * Sets deploySupport
    *
    * @param bool $deploySupport 是否支持部署。
    *
    * @return $this
    */
    public function setDeploySupport($deploySupport)
    {
        $this->container['deploySupport'] = $deploySupport;
        return $this;
    }

    /**
    * Gets type
    *  证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
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
    * @param string $type 证书类型。取值如下： DV_SSL_CERT、DV_SSL_CERT_BASIC、EV_SSL_CERT、 EV_SSL_CERT_PRO、OV_SSL_CERT、OV_SSL_CERT_PRO
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
    *  证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    *
    * @return string
    */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
    * Sets brand
    *
    * @param string $brand 证书品牌。取值如下：GLOBALSIGN、SYMANTEC、GEOTRUST、CFCA
    *
    * @return $this
    */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;
        return $this;
    }

    /**
    * Gets expireTime
    *  证书过期时间。
    *
    * @return string
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string $expireTime 证书过期时间。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets domainType
    *  域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
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
    * @param string $domainType 域名类型。取值如下： - SINGLE_DOMAIN：单域名 - WILDCARD：通配符 - MULTI_DOMAIN：多域名
    *
    * @return $this
    */
    public function setDomainType($domainType)
    {
        $this->container['domainType'] = $domainType;
        return $this;
    }

    /**
    * Gets validityPeriod
    *  证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    *
    * @return int
    */
    public function getValidityPeriod()
    {
        return $this->container['validityPeriod'];
    }

    /**
    * Sets validityPeriod
    *
    * @param int $validityPeriod 证书有效期，按月为单位。[云证书管理服务提供了一种购买多年有效期证书的解决方案，这种多年有效期证书生效方式为多张有效期为1年的SSL证书叠加生效，例如：有效期为“3年”的证书实际包含3张有效期为1年且规格相同的SSL证书，在第一张证书到期前30天，系统自动以第一张证书的信息申请第二张证书，在第二张证书到期前30天，系统自动以第一张证书的信息申请第三张证书。](tag:hws)
    *
    * @return $this
    */
    public function setValidityPeriod($validityPeriod)
    {
        $this->container['validityPeriod'] = $validityPeriod;
        return $this;
    }

    /**
    * Gets status
    *  证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
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
    * @param string $status 证书状态，取值如下： - PAID：证书已支付；待申请证书。 - ISSUED：证书已签发。 - CHECKING：证书申请审核中。 - CANCELCHECKING：取消证书申请审核中。 - UNPASSED：证书申请未通过。 - EXPIRED：证书已过期。 - REVOKING：证书吊销申请审核中。 - CANCLEREVOKING：证书取消吊销申请审核中。 - REVOKED：证书已吊销。 - UPLOAD：证书托管中。 - SUPPLEMENTCHECKING：多域名证书新增附加域名审核中。 - CANCELSUPPLEMENTING：取消新增附加域名审核中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainCount
    *  证书可绑定域名个数。
    *
    * @return int
    */
    public function getDomainCount()
    {
        return $this->container['domainCount'];
    }

    /**
    * Sets domainCount
    *
    * @param int $domainCount 证书可绑定域名个数。
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
    *  证书可绑定泛域名个数。
    *
    * @return int
    */
    public function getWildcardCount()
    {
        return $this->container['wildcardCount'];
    }

    /**
    * Sets wildcardCount
    *
    * @param int $wildcardCount 证书可绑定泛域名个数。
    *
    * @return $this
    */
    public function setWildcardCount($wildcardCount)
    {
        $this->container['wildcardCount'] = $wildcardCount;
        return $this;
    }

    /**
    * Gets description
    *  证书描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 证书描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets enterpriseProjectId
    *  企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID，默认为“0”。 对于开通企业项目的用户，表示资源处于默认企业项目下。 对于未开通企业项目的用户，表示资源未处于企业项目下。
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

