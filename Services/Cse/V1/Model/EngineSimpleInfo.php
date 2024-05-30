<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineSimpleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineSimpleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  微服务引擎的ID
    * name  引擎的名称
    * enterpriseProjectId  微服务引擎所属企业项目ID
    * enterpriseProjectName  微服务引擎所属企业项目名称
    * type  微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
    * description  微服务引擎的描述
    * flavor  微服务引擎的规格
    * payment  微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    * authType  微服务引擎的认证方式，RBAC/NONE
    * status  微服务引擎当前的状态
    * externalAddress  微服务引擎暴露的IP地址
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicAddress  微服务引擎的公网IP地址
    * publicServiceEndpoint  微服务引擎的公网接入地址
    * totalInstance  微服务引擎可支持的实例总数
    * usedInstance  已使用的实例总数
    * availableInstance  可用实例总数
    * version  微服务引擎当前版本
    * latestVersion  微服务引擎最新版本
    * createTime  微服务引擎创建时间
    * dueTo  微服务引擎到期时间
    * latestJobId  微服务引擎最近的任务ID
    * engineAdditionalActions  微服务引擎允许的附加操作
    * specType  微服务引擎应用部署类型
    * reference  reference
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'type' => 'string',
            'description' => 'string',
            'flavor' => 'string',
            'payment' => 'string',
            'authType' => 'string',
            'status' => 'string',
            'externalAddress' => 'string',
            'serviceEndpoint' => 'map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]',
            'publicAddress' => 'string',
            'publicServiceEndpoint' => 'map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]',
            'totalInstance' => 'int',
            'usedInstance' => 'int',
            'availableInstance' => 'int',
            'version' => 'string',
            'latestVersion' => 'string',
            'createTime' => 'int',
            'dueTo' => 'int',
            'latestJobId' => 'int',
            'engineAdditionalActions' => 'string[]',
            'specType' => 'string',
            'reference' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineReference'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  微服务引擎的ID
    * name  引擎的名称
    * enterpriseProjectId  微服务引擎所属企业项目ID
    * enterpriseProjectName  微服务引擎所属企业项目名称
    * type  微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
    * description  微服务引擎的描述
    * flavor  微服务引擎的规格
    * payment  微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    * authType  微服务引擎的认证方式，RBAC/NONE
    * status  微服务引擎当前的状态
    * externalAddress  微服务引擎暴露的IP地址
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicAddress  微服务引擎的公网IP地址
    * publicServiceEndpoint  微服务引擎的公网接入地址
    * totalInstance  微服务引擎可支持的实例总数
    * usedInstance  已使用的实例总数
    * availableInstance  可用实例总数
    * version  微服务引擎当前版本
    * latestVersion  微服务引擎最新版本
    * createTime  微服务引擎创建时间
    * dueTo  微服务引擎到期时间
    * latestJobId  微服务引擎最近的任务ID
    * engineAdditionalActions  微服务引擎允许的附加操作
    * specType  微服务引擎应用部署类型
    * reference  reference
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'type' => null,
        'description' => null,
        'flavor' => null,
        'payment' => null,
        'authType' => null,
        'status' => null,
        'externalAddress' => null,
        'serviceEndpoint' => null,
        'publicAddress' => null,
        'publicServiceEndpoint' => null,
        'totalInstance' => 'int32',
        'usedInstance' => 'int32',
        'availableInstance' => 'int32',
        'version' => null,
        'latestVersion' => null,
        'createTime' => 'int64',
        'dueTo' => 'int64',
        'latestJobId' => 'int32',
        'engineAdditionalActions' => null,
        'specType' => null,
        'reference' => null
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
    * id  微服务引擎的ID
    * name  引擎的名称
    * enterpriseProjectId  微服务引擎所属企业项目ID
    * enterpriseProjectName  微服务引擎所属企业项目名称
    * type  微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
    * description  微服务引擎的描述
    * flavor  微服务引擎的规格
    * payment  微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    * authType  微服务引擎的认证方式，RBAC/NONE
    * status  微服务引擎当前的状态
    * externalAddress  微服务引擎暴露的IP地址
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicAddress  微服务引擎的公网IP地址
    * publicServiceEndpoint  微服务引擎的公网接入地址
    * totalInstance  微服务引擎可支持的实例总数
    * usedInstance  已使用的实例总数
    * availableInstance  可用实例总数
    * version  微服务引擎当前版本
    * latestVersion  微服务引擎最新版本
    * createTime  微服务引擎创建时间
    * dueTo  微服务引擎到期时间
    * latestJobId  微服务引擎最近的任务ID
    * engineAdditionalActions  微服务引擎允许的附加操作
    * specType  微服务引擎应用部署类型
    * reference  reference
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'enterpriseProjectId' => 'enterpriseProjectId',
            'enterpriseProjectName' => 'enterpriseProjectName',
            'type' => 'type',
            'description' => 'description',
            'flavor' => 'flavor',
            'payment' => 'payment',
            'authType' => 'authType',
            'status' => 'status',
            'externalAddress' => 'externalAddress',
            'serviceEndpoint' => 'serviceEndpoint',
            'publicAddress' => 'publicAddress',
            'publicServiceEndpoint' => 'publicServiceEndpoint',
            'totalInstance' => 'totalInstance',
            'usedInstance' => 'usedInstance',
            'availableInstance' => 'availableInstance',
            'version' => 'version',
            'latestVersion' => 'latestVersion',
            'createTime' => 'createTime',
            'dueTo' => 'dueTo',
            'latestJobId' => 'latestJobId',
            'engineAdditionalActions' => 'engineAdditionalActions',
            'specType' => 'specType',
            'reference' => 'reference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  微服务引擎的ID
    * name  引擎的名称
    * enterpriseProjectId  微服务引擎所属企业项目ID
    * enterpriseProjectName  微服务引擎所属企业项目名称
    * type  微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
    * description  微服务引擎的描述
    * flavor  微服务引擎的规格
    * payment  微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    * authType  微服务引擎的认证方式，RBAC/NONE
    * status  微服务引擎当前的状态
    * externalAddress  微服务引擎暴露的IP地址
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicAddress  微服务引擎的公网IP地址
    * publicServiceEndpoint  微服务引擎的公网接入地址
    * totalInstance  微服务引擎可支持的实例总数
    * usedInstance  已使用的实例总数
    * availableInstance  可用实例总数
    * version  微服务引擎当前版本
    * latestVersion  微服务引擎最新版本
    * createTime  微服务引擎创建时间
    * dueTo  微服务引擎到期时间
    * latestJobId  微服务引擎最近的任务ID
    * engineAdditionalActions  微服务引擎允许的附加操作
    * specType  微服务引擎应用部署类型
    * reference  reference
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'type' => 'setType',
            'description' => 'setDescription',
            'flavor' => 'setFlavor',
            'payment' => 'setPayment',
            'authType' => 'setAuthType',
            'status' => 'setStatus',
            'externalAddress' => 'setExternalAddress',
            'serviceEndpoint' => 'setServiceEndpoint',
            'publicAddress' => 'setPublicAddress',
            'publicServiceEndpoint' => 'setPublicServiceEndpoint',
            'totalInstance' => 'setTotalInstance',
            'usedInstance' => 'setUsedInstance',
            'availableInstance' => 'setAvailableInstance',
            'version' => 'setVersion',
            'latestVersion' => 'setLatestVersion',
            'createTime' => 'setCreateTime',
            'dueTo' => 'setDueTo',
            'latestJobId' => 'setLatestJobId',
            'engineAdditionalActions' => 'setEngineAdditionalActions',
            'specType' => 'setSpecType',
            'reference' => 'setReference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  微服务引擎的ID
    * name  引擎的名称
    * enterpriseProjectId  微服务引擎所属企业项目ID
    * enterpriseProjectName  微服务引擎所属企业项目名称
    * type  微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
    * description  微服务引擎的描述
    * flavor  微服务引擎的规格
    * payment  微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    * authType  微服务引擎的认证方式，RBAC/NONE
    * status  微服务引擎当前的状态
    * externalAddress  微服务引擎暴露的IP地址
    * serviceEndpoint  微服务引擎组件的访问地址。
    * publicAddress  微服务引擎的公网IP地址
    * publicServiceEndpoint  微服务引擎的公网接入地址
    * totalInstance  微服务引擎可支持的实例总数
    * usedInstance  已使用的实例总数
    * availableInstance  可用实例总数
    * version  微服务引擎当前版本
    * latestVersion  微服务引擎最新版本
    * createTime  微服务引擎创建时间
    * dueTo  微服务引擎到期时间
    * latestJobId  微服务引擎最近的任务ID
    * engineAdditionalActions  微服务引擎允许的附加操作
    * specType  微服务引擎应用部署类型
    * reference  reference
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'type' => 'getType',
            'description' => 'getDescription',
            'flavor' => 'getFlavor',
            'payment' => 'getPayment',
            'authType' => 'getAuthType',
            'status' => 'getStatus',
            'externalAddress' => 'getExternalAddress',
            'serviceEndpoint' => 'getServiceEndpoint',
            'publicAddress' => 'getPublicAddress',
            'publicServiceEndpoint' => 'getPublicServiceEndpoint',
            'totalInstance' => 'getTotalInstance',
            'usedInstance' => 'getUsedInstance',
            'availableInstance' => 'getAvailableInstance',
            'version' => 'getVersion',
            'latestVersion' => 'getLatestVersion',
            'createTime' => 'getCreateTime',
            'dueTo' => 'getDueTo',
            'latestJobId' => 'getLatestJobId',
            'engineAdditionalActions' => 'getEngineAdditionalActions',
            'specType' => 'getSpecType',
            'reference' => 'getReference'
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
    const TYPE_CSE = 'CSE';
    const TYPE_CSE_SHARE = 'CSE_Share';
    const FLAVOR_CSE_S1_SMALL2 = 'cse.s1.small2';
    const FLAVOR_CSE_S1_MEDIUM2 = 'cse.s1.medium2';
    const FLAVOR_CSE_S1_LARGE2 = 'cse.s1.large2';
    const FLAVOR_CSE_S1_XLARGE2 = 'cse.s1.xlarge2';
    const FLAVOR_CSE_NACOS2_C1_LARGE_10 = 'cse.nacos2.c1.large.10';
    const FLAVOR_CSE_NACOS2_C1_XLARGE_20 = 'cse.nacos2.c1.xlarge.20';
    const FLAVOR_CSE_NACOS2_C1_XLARGE_50 = 'cse.nacos2.c1.xlarge.50';
    const FLAVOR_CSE_NACOS2_C1_XLARGE_60 = 'cse.nacos2.c1.xlarge.60';
    const FLAVOR_CSE_NACOS2_C1_2XLARGE_100 = 'cse.nacos2.c1.2xlarge.100';
    const FLAVOR_CSE_MICROGATEWAY_PRO_SMALL_1 = 'cse.microgateway.pro.small.1';
    const FLAVOR_CSE_MICROGATEWAY_PRO_MEDIUM_1 = 'cse.microgateway.pro.medium.1';
    const FLAVOR_CSE_MICROGATEWAY_PRO_LARGE_1 = 'cse.microgateway.pro.large.1';
    const AUTH_TYPE_RBAC = 'RBAC';
    const AUTH_TYPE_NONE = 'NONE';
    const STATUS_CREATING = 'Creating';
    const STATUS_AVAILABLE = 'Available';
    const STATUS_UNAVAILABLE = 'Unavailable';
    const STATUS_DELETING = 'Deleting';
    const STATUS_DELETED = 'Deleted';
    const STATUS_UPGRADING = 'Upgrading';
    const STATUS_MODIFYING = 'Modifying';
    const STATUS_CREATE_FAILED = 'CreateFailed';
    const STATUS_DELETE_FAILED = 'DeleteFailed';
    const STATUS_UPGRADE_FAILED = 'UpgradeFailed';
    const STATUS_MODIFY_FAILED = 'ModifyFailed';
    const STATUS_FREEZED = 'Freezed';
    const ENGINE_ADDITIONAL_ACTIONS_NOTING = 'Noting';
    const ENGINE_ADDITIONAL_ACTIONS_FORCE_DELETE = 'ForceDelete';
    const ENGINE_ADDITIONAL_ACTIONS_ROLLBACK = 'Rollback';
    const ENGINE_ADDITIONAL_ACTIONS_RETRY = 'Retry';
    const SPEC_TYPE_CCE = 'CCE';
    const SPEC_TYPE_CSE = 'CSE';
    const SPEC_TYPE_SPRING_CLOUD = 'SpringCloud';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CSE,
            self::TYPE_CSE_SHARE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFlavorAllowableValues()
    {
        return [
            self::FLAVOR_CSE_S1_SMALL2,
            self::FLAVOR_CSE_S1_MEDIUM2,
            self::FLAVOR_CSE_S1_LARGE2,
            self::FLAVOR_CSE_S1_XLARGE2,
            self::FLAVOR_CSE_NACOS2_C1_LARGE_10,
            self::FLAVOR_CSE_NACOS2_C1_XLARGE_20,
            self::FLAVOR_CSE_NACOS2_C1_XLARGE_50,
            self::FLAVOR_CSE_NACOS2_C1_XLARGE_60,
            self::FLAVOR_CSE_NACOS2_C1_2XLARGE_100,
            self::FLAVOR_CSE_MICROGATEWAY_PRO_SMALL_1,
            self::FLAVOR_CSE_MICROGATEWAY_PRO_MEDIUM_1,
            self::FLAVOR_CSE_MICROGATEWAY_PRO_LARGE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_RBAC,
            self::AUTH_TYPE_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_AVAILABLE,
            self::STATUS_UNAVAILABLE,
            self::STATUS_DELETING,
            self::STATUS_DELETED,
            self::STATUS_UPGRADING,
            self::STATUS_MODIFYING,
            self::STATUS_CREATE_FAILED,
            self::STATUS_DELETE_FAILED,
            self::STATUS_UPGRADE_FAILED,
            self::STATUS_MODIFY_FAILED,
            self::STATUS_FREEZED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAdditionalActionsAllowableValues()
    {
        return [
            self::ENGINE_ADDITIONAL_ACTIONS_NOTING,
            self::ENGINE_ADDITIONAL_ACTIONS_FORCE_DELETE,
            self::ENGINE_ADDITIONAL_ACTIONS_ROLLBACK,
            self::ENGINE_ADDITIONAL_ACTIONS_RETRY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecTypeAllowableValues()
    {
        return [
            self::SPEC_TYPE_CCE,
            self::SPEC_TYPE_CSE,
            self::SPEC_TYPE_SPRING_CLOUD,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['externalAddress'] = isset($data['externalAddress']) ? $data['externalAddress'] : null;
        $this->container['serviceEndpoint'] = isset($data['serviceEndpoint']) ? $data['serviceEndpoint'] : null;
        $this->container['publicAddress'] = isset($data['publicAddress']) ? $data['publicAddress'] : null;
        $this->container['publicServiceEndpoint'] = isset($data['publicServiceEndpoint']) ? $data['publicServiceEndpoint'] : null;
        $this->container['totalInstance'] = isset($data['totalInstance']) ? $data['totalInstance'] : null;
        $this->container['usedInstance'] = isset($data['usedInstance']) ? $data['usedInstance'] : null;
        $this->container['availableInstance'] = isset($data['availableInstance']) ? $data['availableInstance'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dueTo'] = isset($data['dueTo']) ? $data['dueTo'] : null;
        $this->container['latestJobId'] = isset($data['latestJobId']) ? $data['latestJobId'] : null;
        $this->container['engineAdditionalActions'] = isset($data['engineAdditionalActions']) ? $data['engineAdditionalActions'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/[a-zA-Z]{1}[a-z0-9A-Z-]{3,24}[a-z0-9A-Z]$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-zA-Z]{1}[a-z0-9A-Z-]{3,24}[a-z0-9A-Z]$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFlavorAllowableValues();
                if (!is_null($this->container['flavor']) && !in_array($this->container['flavor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flavor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSpecTypeAllowableValues();
                if (!is_null($this->container['specType']) && !in_array($this->container['specType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  微服务引擎的ID
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
    * @param string|null $id 微服务引擎的ID
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
    *  引擎的名称
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
    * @param string|null $name 引擎的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  微服务引擎所属企业项目ID
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
    * @param string|null $enterpriseProjectId 微服务引擎所属企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  微服务引擎所属企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 微服务引擎所属企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets type
    *  微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
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
    * @param string|null $type 微服务引擎的类型，CSE为专享版引擎，CSE_Share表示为专业版引擎
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  微服务引擎的描述
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
    * @param string|null $description 微服务引擎的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets flavor
    *  微服务引擎的规格
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 微服务引擎的规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets payment
    *  微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    *
    * @return string|null
    */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
    * Sets payment
    *
    * @param string|null $payment 微服务引擎的计费方式，0表示包周期，1表示按需，2表示免费
    *
    * @return $this
    */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;
        return $this;
    }

    /**
    * Gets authType
    *  微服务引擎的认证方式，RBAC/NONE
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 微服务引擎的认证方式，RBAC/NONE
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets status
    *  微服务引擎当前的状态
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
    * @param string|null $status 微服务引擎当前的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets externalAddress
    *  微服务引擎暴露的IP地址
    *
    * @return string|null
    */
    public function getExternalAddress()
    {
        return $this->container['externalAddress'];
    }

    /**
    * Sets externalAddress
    *
    * @param string|null $externalAddress 微服务引擎暴露的IP地址
    *
    * @return $this
    */
    public function setExternalAddress($externalAddress)
    {
        $this->container['externalAddress'] = $externalAddress;
        return $this;
    }

    /**
    * Gets serviceEndpoint
    *  微服务引擎组件的访问地址。
    *
    * @return map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null
    */
    public function getServiceEndpoint()
    {
        return $this->container['serviceEndpoint'];
    }

    /**
    * Sets serviceEndpoint
    *
    * @param map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null $serviceEndpoint 微服务引擎组件的访问地址。
    *
    * @return $this
    */
    public function setServiceEndpoint($serviceEndpoint)
    {
        $this->container['serviceEndpoint'] = $serviceEndpoint;
        return $this;
    }

    /**
    * Gets publicAddress
    *  微服务引擎的公网IP地址
    *
    * @return string|null
    */
    public function getPublicAddress()
    {
        return $this->container['publicAddress'];
    }

    /**
    * Sets publicAddress
    *
    * @param string|null $publicAddress 微服务引擎的公网IP地址
    *
    * @return $this
    */
    public function setPublicAddress($publicAddress)
    {
        $this->container['publicAddress'] = $publicAddress;
        return $this;
    }

    /**
    * Gets publicServiceEndpoint
    *  微服务引擎的公网接入地址
    *
    * @return map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null
    */
    public function getPublicServiceEndpoint()
    {
        return $this->container['publicServiceEndpoint'];
    }

    /**
    * Sets publicServiceEndpoint
    *
    * @param map[string,\HuaweiCloud\SDK\Cse\V1\Model\EntrypointItem]|null $publicServiceEndpoint 微服务引擎的公网接入地址
    *
    * @return $this
    */
    public function setPublicServiceEndpoint($publicServiceEndpoint)
    {
        $this->container['publicServiceEndpoint'] = $publicServiceEndpoint;
        return $this;
    }

    /**
    * Gets totalInstance
    *  微服务引擎可支持的实例总数
    *
    * @return int|null
    */
    public function getTotalInstance()
    {
        return $this->container['totalInstance'];
    }

    /**
    * Sets totalInstance
    *
    * @param int|null $totalInstance 微服务引擎可支持的实例总数
    *
    * @return $this
    */
    public function setTotalInstance($totalInstance)
    {
        $this->container['totalInstance'] = $totalInstance;
        return $this;
    }

    /**
    * Gets usedInstance
    *  已使用的实例总数
    *
    * @return int|null
    */
    public function getUsedInstance()
    {
        return $this->container['usedInstance'];
    }

    /**
    * Sets usedInstance
    *
    * @param int|null $usedInstance 已使用的实例总数
    *
    * @return $this
    */
    public function setUsedInstance($usedInstance)
    {
        $this->container['usedInstance'] = $usedInstance;
        return $this;
    }

    /**
    * Gets availableInstance
    *  可用实例总数
    *
    * @return int|null
    */
    public function getAvailableInstance()
    {
        return $this->container['availableInstance'];
    }

    /**
    * Sets availableInstance
    *
    * @param int|null $availableInstance 可用实例总数
    *
    * @return $this
    */
    public function setAvailableInstance($availableInstance)
    {
        $this->container['availableInstance'] = $availableInstance;
        return $this;
    }

    /**
    * Gets version
    *  微服务引擎当前版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 微服务引擎当前版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets latestVersion
    *  微服务引擎最新版本
    *
    * @return string|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param string|null $latestVersion 微服务引擎最新版本
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets createTime
    *  微服务引擎创建时间
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
    * @param int|null $createTime 微服务引擎创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dueTo
    *  微服务引擎到期时间
    *
    * @return int|null
    */
    public function getDueTo()
    {
        return $this->container['dueTo'];
    }

    /**
    * Sets dueTo
    *
    * @param int|null $dueTo 微服务引擎到期时间
    *
    * @return $this
    */
    public function setDueTo($dueTo)
    {
        $this->container['dueTo'] = $dueTo;
        return $this;
    }

    /**
    * Gets latestJobId
    *  微服务引擎最近的任务ID
    *
    * @return int|null
    */
    public function getLatestJobId()
    {
        return $this->container['latestJobId'];
    }

    /**
    * Sets latestJobId
    *
    * @param int|null $latestJobId 微服务引擎最近的任务ID
    *
    * @return $this
    */
    public function setLatestJobId($latestJobId)
    {
        $this->container['latestJobId'] = $latestJobId;
        return $this;
    }

    /**
    * Gets engineAdditionalActions
    *  微服务引擎允许的附加操作
    *
    * @return string[]|null
    */
    public function getEngineAdditionalActions()
    {
        return $this->container['engineAdditionalActions'];
    }

    /**
    * Sets engineAdditionalActions
    *
    * @param string[]|null $engineAdditionalActions 微服务引擎允许的附加操作
    *
    * @return $this
    */
    public function setEngineAdditionalActions($engineAdditionalActions)
    {
        $this->container['engineAdditionalActions'] = $engineAdditionalActions;
        return $this;
    }

    /**
    * Gets specType
    *  微服务引擎应用部署类型
    *
    * @return string|null
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param string|null $specType 微服务引擎应用部署类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets reference
    *  reference
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineReference|null
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineReference|null $reference reference
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
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

