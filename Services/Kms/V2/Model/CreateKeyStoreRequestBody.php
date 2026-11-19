<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKeyStoreRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKeyStoreRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    * clusterId  集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
    * keystoreType  专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    * proxyUriEndpoint  **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyUriPath  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyAccessKeyId  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxySecretAccessKey  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceName  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceOwner  **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keystoreAlias' => 'string',
            'hsmClusterId' => 'string',
            'hsmCaCert' => 'string',
            'clusterId' => 'string',
            'keystoreType' => 'string',
            'proxyUriEndpoint' => 'string',
            'proxyUriPath' => 'string',
            'proxyAccessKeyId' => 'string',
            'proxySecretAccessKey' => 'string',
            'proxyVpcEndpointServiceName' => 'string',
            'proxyVpcEndpointServiceOwner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    * clusterId  集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
    * keystoreType  专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    * proxyUriEndpoint  **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyUriPath  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyAccessKeyId  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxySecretAccessKey  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceName  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceOwner  **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keystoreAlias' => null,
        'hsmClusterId' => null,
        'hsmCaCert' => null,
        'clusterId' => null,
        'keystoreType' => null,
        'proxyUriEndpoint' => null,
        'proxyUriPath' => null,
        'proxyAccessKeyId' => null,
        'proxySecretAccessKey' => null,
        'proxyVpcEndpointServiceName' => null,
        'proxyVpcEndpointServiceOwner' => null
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
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    * clusterId  集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
    * keystoreType  专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    * proxyUriEndpoint  **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyUriPath  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyAccessKeyId  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxySecretAccessKey  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceName  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceOwner  **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keystoreAlias' => 'keystore_alias',
            'hsmClusterId' => 'hsm_cluster_id',
            'hsmCaCert' => 'hsm_ca_cert',
            'clusterId' => 'cluster_id',
            'keystoreType' => 'keystore_type',
            'proxyUriEndpoint' => 'proxy_uri_endpoint',
            'proxyUriPath' => 'proxy_uri_path',
            'proxyAccessKeyId' => 'proxy_access_key_id',
            'proxySecretAccessKey' => 'proxy_secret_access_key',
            'proxyVpcEndpointServiceName' => 'proxy_vpc_endpoint_service_name',
            'proxyVpcEndpointServiceOwner' => 'proxy_vpc_endpoint_service_owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    * clusterId  集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
    * keystoreType  专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    * proxyUriEndpoint  **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyUriPath  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyAccessKeyId  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxySecretAccessKey  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceName  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceOwner  **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'keystoreAlias' => 'setKeystoreAlias',
            'hsmClusterId' => 'setHsmClusterId',
            'hsmCaCert' => 'setHsmCaCert',
            'clusterId' => 'setClusterId',
            'keystoreType' => 'setKeystoreType',
            'proxyUriEndpoint' => 'setProxyUriEndpoint',
            'proxyUriPath' => 'setProxyUriPath',
            'proxyAccessKeyId' => 'setProxyAccessKeyId',
            'proxySecretAccessKey' => 'setProxySecretAccessKey',
            'proxyVpcEndpointServiceName' => 'setProxyVpcEndpointServiceName',
            'proxyVpcEndpointServiceOwner' => 'setProxyVpcEndpointServiceOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    * clusterId  集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
    * keystoreType  专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    * proxyUriEndpoint  **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyUriPath  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyAccessKeyId  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxySecretAccessKey  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceName  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * proxyVpcEndpointServiceOwner  **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'keystoreAlias' => 'getKeystoreAlias',
            'hsmClusterId' => 'getHsmClusterId',
            'hsmCaCert' => 'getHsmCaCert',
            'clusterId' => 'getClusterId',
            'keystoreType' => 'getKeystoreType',
            'proxyUriEndpoint' => 'getProxyUriEndpoint',
            'proxyUriPath' => 'getProxyUriPath',
            'proxyAccessKeyId' => 'getProxyAccessKeyId',
            'proxySecretAccessKey' => 'getProxySecretAccessKey',
            'proxyVpcEndpointServiceName' => 'getProxyVpcEndpointServiceName',
            'proxyVpcEndpointServiceOwner' => 'getProxyVpcEndpointServiceOwner'
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
    const KEYSTORE_TYPE__DEFAULT = 'DEFAULT';
    const KEYSTORE_TYPE_DHSM = 'DHSM';
    const KEYSTORE_TYPE_CDMS = 'CDMS';
    const KEYSTORE_TYPE_XKS = 'XKS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeystoreTypeAllowableValues()
    {
        return [
            self::KEYSTORE_TYPE__DEFAULT,
            self::KEYSTORE_TYPE_DHSM,
            self::KEYSTORE_TYPE_CDMS,
            self::KEYSTORE_TYPE_XKS,
        ];
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
        $this->container['keystoreAlias'] = isset($data['keystoreAlias']) ? $data['keystoreAlias'] : null;
        $this->container['hsmClusterId'] = isset($data['hsmClusterId']) ? $data['hsmClusterId'] : null;
        $this->container['hsmCaCert'] = isset($data['hsmCaCert']) ? $data['hsmCaCert'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['keystoreType'] = isset($data['keystoreType']) ? $data['keystoreType'] : null;
        $this->container['proxyUriEndpoint'] = isset($data['proxyUriEndpoint']) ? $data['proxyUriEndpoint'] : null;
        $this->container['proxyUriPath'] = isset($data['proxyUriPath']) ? $data['proxyUriPath'] : null;
        $this->container['proxyAccessKeyId'] = isset($data['proxyAccessKeyId']) ? $data['proxyAccessKeyId'] : null;
        $this->container['proxySecretAccessKey'] = isset($data['proxySecretAccessKey']) ? $data['proxySecretAccessKey'] : null;
        $this->container['proxyVpcEndpointServiceName'] = isset($data['proxyVpcEndpointServiceName']) ? $data['proxyVpcEndpointServiceName'] : null;
        $this->container['proxyVpcEndpointServiceOwner'] = isset($data['proxyVpcEndpointServiceOwner']) ? $data['proxyVpcEndpointServiceOwner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keystoreAlias'] === null) {
            $invalidProperties[] = "'keystoreAlias' can't be null";
        }
            if ((mb_strlen($this->container['keystoreAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'keystoreAlias', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['keystoreAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'keystoreAlias', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9:\/_-]{1,255}$/", $this->container['keystoreAlias'])) {
                $invalidProperties[] = "invalid value for 'keystoreAlias', must be conform to the pattern /^[a-zA-Z0-9:\/_-]{1,255}$/.";
            }
            $allowedValues = $this->getKeystoreTypeAllowableValues();
                if (!is_null($this->container['keystoreType']) && !in_array($this->container['keystoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keystoreType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['proxyUriEndpoint']) && !preg_match("/^https:\/\/[^\\s]+/", $this->container['proxyUriEndpoint'])) {
                $invalidProperties[] = "invalid value for 'proxyUriEndpoint', must be conform to the pattern /^https:\/\/[^\\s]+/.";
            }
            if (!is_null($this->container['proxyUriPath']) && !preg_match("/^\/(?:[a-zA-Z0-9\/_-]{0,127})$/", $this->container['proxyUriPath'])) {
                $invalidProperties[] = "invalid value for 'proxyUriPath', must be conform to the pattern /^\/(?:[a-zA-Z0-9\/_-]{0,127})$/.";
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
    * Gets keystoreAlias
    *  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    *
    * @return string
    */
    public function getKeystoreAlias()
    {
        return $this->container['keystoreAlias'];
    }

    /**
    * Sets keystoreAlias
    *
    * @param string $keystoreAlias 专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    *
    * @return $this
    */
    public function setKeystoreAlias($keystoreAlias)
    {
        $this->container['keystoreAlias'] = $keystoreAlias;
        return $this;
    }

    /**
    * Gets hsmClusterId
    *  DHSM集群Id，要求集群当前未创建专属密钥库。
    *
    * @return string|null
    */
    public function getHsmClusterId()
    {
        return $this->container['hsmClusterId'];
    }

    /**
    * Sets hsmClusterId
    *
    * @param string|null $hsmClusterId DHSM集群Id，要求集群当前未创建专属密钥库。
    *
    * @return $this
    */
    public function setHsmClusterId($hsmClusterId)
    {
        $this->container['hsmClusterId'] = $hsmClusterId;
        return $this;
    }

    /**
    * Gets hsmCaCert
    *  DHSM集群的CA证书
    *
    * @return string|null
    */
    public function getHsmCaCert()
    {
        return $this->container['hsmCaCert'];
    }

    /**
    * Sets hsmCaCert
    *
    * @param string|null $hsmCaCert DHSM集群的CA证书
    *
    * @return $this
    */
    public function setHsmCaCert($hsmCaCert)
    {
        $this->container['hsmCaCert'] = $hsmCaCert;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
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
    * @param string|null $clusterId 集群ID。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，为cdms_cluster_id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets keystoreType
    *  专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    *
    * @return string|null
    */
    public function getKeystoreType()
    {
        return $this->container['keystoreType'];
    }

    /**
    * Sets keystoreType
    *
    * @param string|null $keystoreType 专属密钥库集群类型。DHSM表示专属加密服务集群，CDMS表示密码卡集群,DEFAULT表示KMS原有集群
    *
    * @return $this
    */
    public function setKeystoreType($keystoreType)
    {
        $this->container['keystoreType'] = $keystoreType;
        return $this;
    }

    /**
    * Gets proxyUriEndpoint
    *  **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProxyUriEndpoint()
    {
        return $this->container['proxyUriEndpoint'];
    }

    /**
    * Sets proxyUriEndpoint
    *
    * @param string|null $proxyUriEndpoint **参数解释：** 仅XKS类型的密钥库支持；可选，表示Xks-Proxy的域名信息 **约束限制：** ^https://[^\\s]+ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProxyUriEndpoint($proxyUriEndpoint)
    {
        $this->container['proxyUriEndpoint'] = $proxyUriEndpoint;
        return $this;
    }

    /**
    * Gets proxyUriPath
    *  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProxyUriPath()
    {
        return $this->container['proxyUriPath'];
    }

    /**
    * Sets proxyUriPath
    *
    * @param string|null $proxyUriPath **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的路径前缀 **约束限制：** ^/(?:[a-zA-Z0-9/_-]{0,127})$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProxyUriPath($proxyUriPath)
    {
        $this->container['proxyUriPath'] = $proxyUriPath;
        return $this;
    }

    /**
    * Gets proxyAccessKeyId
    *  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProxyAccessKeyId()
    {
        return $this->container['proxyAccessKeyId'];
    }

    /**
    * Sets proxyAccessKeyId
    *
    * @param string|null $proxyAccessKeyId **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProxyAccessKeyId($proxyAccessKeyId)
    {
        $this->container['proxyAccessKeyId'] = $proxyAccessKeyId;
        return $this;
    }

    /**
    * Gets proxySecretAccessKey
    *  **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProxySecretAccessKey()
    {
        return $this->container['proxySecretAccessKey'];
    }

    /**
    * Sets proxySecretAccessKey
    *
    * @param string|null $proxySecretAccessKey **参数解释：** 仅XKS类型的密钥库支持；必选，访问XKS-Proxy的凭据Key **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProxySecretAccessKey($proxySecretAccessKey)
    {
        $this->container['proxySecretAccessKey'] = $proxySecretAccessKey;
        return $this;
    }

    /**
    * Gets proxyVpcEndpointServiceName
    *  **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProxyVpcEndpointServiceName()
    {
        return $this->container['proxyVpcEndpointServiceName'];
    }

    /**
    * Sets proxyVpcEndpointServiceName
    *
    * @param string|null $proxyVpcEndpointServiceName **参数解释：** 仅XKS类型的密钥库支持；必选，Xks-Proxy的终端节点服务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProxyVpcEndpointServiceName($proxyVpcEndpointServiceName)
    {
        $this->container['proxyVpcEndpointServiceName'] = $proxyVpcEndpointServiceName;
        return $this;
    }

    /**
    * Gets proxyVpcEndpointServiceOwner
    *  **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProxyVpcEndpointServiceOwner()
    {
        return $this->container['proxyVpcEndpointServiceOwner'];
    }

    /**
    * Sets proxyVpcEndpointServiceOwner
    *
    * @param string|null $proxyVpcEndpointServiceOwner **参数解释：** 仅XKS类型的密钥库支持；必选，终端节点服务所属账号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProxyVpcEndpointServiceOwner($proxyVpcEndpointServiceOwner)
    {
        $this->container['proxyVpcEndpointServiceOwner'] = $proxyVpcEndpointServiceOwner;
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

