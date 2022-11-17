<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEngineResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEngineResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  微服务引擎专享版ID
    * name  微服务引擎专享版名称
    * description  微服务引擎专享版描述
    * authType  微服务引擎专享版认证类型
    * flavor  微服务引擎专享版规格
    * payment  微服务引擎专享版计费方式
    * version  微服务引擎专享版当前版本
    * latestVersion  微服务引擎专享版最新版本
    * status  微服务引擎专享版状态
    * beDefault  engine 是否是默认引擎
    * createUser  微服务引擎专享版创建者
    * createTime  微服务引擎专享版创建时间
    * cceSpec  cceSpec
    * externalEntrypoint  externalEntrypoint
    * reference  reference
    * latestJobId  微服务引擎专享版最近的任务ID
    * enterpriseProjectId  微服务引擎专享版所属企业项目ID
    * enterpriseProjectName  微服务引擎专享版所属企业项目名称
    * engineAdditionalActions  微服务引擎专享版允许的附加操作
    * specType  微服务引擎专享版应用部署类型
    * type  微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
    * projectId  微服务引擎专享版所属项目ID
    * vmIds  当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'authType' => 'string',
            'flavor' => 'string',
            'payment' => 'string',
            'version' => 'string',
            'latestVersion' => 'string',
            'status' => 'string',
            'beDefault' => 'bool',
            'createUser' => 'string',
            'createTime' => 'int',
            'cceSpec' => '\HuaweiCloud\SDK\Cse\V1\Model\Spec',
            'externalEntrypoint' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineExternalEntrypoint',
            'reference' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineReference',
            'latestJobId' => 'int',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'engineAdditionalActions' => 'string[]',
            'specType' => 'string',
            'type' => 'string',
            'projectId' => 'string',
            'vmIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  微服务引擎专享版ID
    * name  微服务引擎专享版名称
    * description  微服务引擎专享版描述
    * authType  微服务引擎专享版认证类型
    * flavor  微服务引擎专享版规格
    * payment  微服务引擎专享版计费方式
    * version  微服务引擎专享版当前版本
    * latestVersion  微服务引擎专享版最新版本
    * status  微服务引擎专享版状态
    * beDefault  engine 是否是默认引擎
    * createUser  微服务引擎专享版创建者
    * createTime  微服务引擎专享版创建时间
    * cceSpec  cceSpec
    * externalEntrypoint  externalEntrypoint
    * reference  reference
    * latestJobId  微服务引擎专享版最近的任务ID
    * enterpriseProjectId  微服务引擎专享版所属企业项目ID
    * enterpriseProjectName  微服务引擎专享版所属企业项目名称
    * engineAdditionalActions  微服务引擎专享版允许的附加操作
    * specType  微服务引擎专享版应用部署类型
    * type  微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
    * projectId  微服务引擎专享版所属项目ID
    * vmIds  当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'authType' => null,
        'flavor' => null,
        'payment' => null,
        'version' => null,
        'latestVersion' => null,
        'status' => null,
        'beDefault' => null,
        'createUser' => null,
        'createTime' => 'int64',
        'cceSpec' => null,
        'externalEntrypoint' => null,
        'reference' => null,
        'latestJobId' => 'int32',
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'engineAdditionalActions' => null,
        'specType' => null,
        'type' => null,
        'projectId' => null,
        'vmIds' => null
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
    * id  微服务引擎专享版ID
    * name  微服务引擎专享版名称
    * description  微服务引擎专享版描述
    * authType  微服务引擎专享版认证类型
    * flavor  微服务引擎专享版规格
    * payment  微服务引擎专享版计费方式
    * version  微服务引擎专享版当前版本
    * latestVersion  微服务引擎专享版最新版本
    * status  微服务引擎专享版状态
    * beDefault  engine 是否是默认引擎
    * createUser  微服务引擎专享版创建者
    * createTime  微服务引擎专享版创建时间
    * cceSpec  cceSpec
    * externalEntrypoint  externalEntrypoint
    * reference  reference
    * latestJobId  微服务引擎专享版最近的任务ID
    * enterpriseProjectId  微服务引擎专享版所属企业项目ID
    * enterpriseProjectName  微服务引擎专享版所属企业项目名称
    * engineAdditionalActions  微服务引擎专享版允许的附加操作
    * specType  微服务引擎专享版应用部署类型
    * type  微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
    * projectId  微服务引擎专享版所属项目ID
    * vmIds  当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'authType' => 'auth_type',
            'flavor' => 'flavor',
            'payment' => 'payment',
            'version' => 'version',
            'latestVersion' => 'latest_version',
            'status' => 'status',
            'beDefault' => 'be_default',
            'createUser' => 'create_user',
            'createTime' => 'create_time',
            'cceSpec' => 'cce_spec',
            'externalEntrypoint' => 'external_entrypoint',
            'reference' => 'reference',
            'latestJobId' => 'latest_job_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'engineAdditionalActions' => 'engine_additional_actions',
            'specType' => 'spec_type',
            'type' => 'type',
            'projectId' => 'project_id',
            'vmIds' => 'vm_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  微服务引擎专享版ID
    * name  微服务引擎专享版名称
    * description  微服务引擎专享版描述
    * authType  微服务引擎专享版认证类型
    * flavor  微服务引擎专享版规格
    * payment  微服务引擎专享版计费方式
    * version  微服务引擎专享版当前版本
    * latestVersion  微服务引擎专享版最新版本
    * status  微服务引擎专享版状态
    * beDefault  engine 是否是默认引擎
    * createUser  微服务引擎专享版创建者
    * createTime  微服务引擎专享版创建时间
    * cceSpec  cceSpec
    * externalEntrypoint  externalEntrypoint
    * reference  reference
    * latestJobId  微服务引擎专享版最近的任务ID
    * enterpriseProjectId  微服务引擎专享版所属企业项目ID
    * enterpriseProjectName  微服务引擎专享版所属企业项目名称
    * engineAdditionalActions  微服务引擎专享版允许的附加操作
    * specType  微服务引擎专享版应用部署类型
    * type  微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
    * projectId  微服务引擎专享版所属项目ID
    * vmIds  当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'authType' => 'setAuthType',
            'flavor' => 'setFlavor',
            'payment' => 'setPayment',
            'version' => 'setVersion',
            'latestVersion' => 'setLatestVersion',
            'status' => 'setStatus',
            'beDefault' => 'setBeDefault',
            'createUser' => 'setCreateUser',
            'createTime' => 'setCreateTime',
            'cceSpec' => 'setCceSpec',
            'externalEntrypoint' => 'setExternalEntrypoint',
            'reference' => 'setReference',
            'latestJobId' => 'setLatestJobId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'engineAdditionalActions' => 'setEngineAdditionalActions',
            'specType' => 'setSpecType',
            'type' => 'setType',
            'projectId' => 'setProjectId',
            'vmIds' => 'setVmIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  微服务引擎专享版ID
    * name  微服务引擎专享版名称
    * description  微服务引擎专享版描述
    * authType  微服务引擎专享版认证类型
    * flavor  微服务引擎专享版规格
    * payment  微服务引擎专享版计费方式
    * version  微服务引擎专享版当前版本
    * latestVersion  微服务引擎专享版最新版本
    * status  微服务引擎专享版状态
    * beDefault  engine 是否是默认引擎
    * createUser  微服务引擎专享版创建者
    * createTime  微服务引擎专享版创建时间
    * cceSpec  cceSpec
    * externalEntrypoint  externalEntrypoint
    * reference  reference
    * latestJobId  微服务引擎专享版最近的任务ID
    * enterpriseProjectId  微服务引擎专享版所属企业项目ID
    * enterpriseProjectName  微服务引擎专享版所属企业项目名称
    * engineAdditionalActions  微服务引擎专享版允许的附加操作
    * specType  微服务引擎专享版应用部署类型
    * type  微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
    * projectId  微服务引擎专享版所属项目ID
    * vmIds  当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'authType' => 'getAuthType',
            'flavor' => 'getFlavor',
            'payment' => 'getPayment',
            'version' => 'getVersion',
            'latestVersion' => 'getLatestVersion',
            'status' => 'getStatus',
            'beDefault' => 'getBeDefault',
            'createUser' => 'getCreateUser',
            'createTime' => 'getCreateTime',
            'cceSpec' => 'getCceSpec',
            'externalEntrypoint' => 'getExternalEntrypoint',
            'reference' => 'getReference',
            'latestJobId' => 'getLatestJobId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'engineAdditionalActions' => 'getEngineAdditionalActions',
            'specType' => 'getSpecType',
            'type' => 'getType',
            'projectId' => 'getProjectId',
            'vmIds' => 'getVmIds'
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
    const TYPE_CSE = 'CSE';
    const TYPE_CSE_SHARE = 'CSE_Share';
    

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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beDefault'] = isset($data['beDefault']) ? $data['beDefault'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['cceSpec'] = isset($data['cceSpec']) ? $data['cceSpec'] : null;
        $this->container['externalEntrypoint'] = isset($data['externalEntrypoint']) ? $data['externalEntrypoint'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['latestJobId'] = isset($data['latestJobId']) ? $data['latestJobId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['engineAdditionalActions'] = isset($data['engineAdditionalActions']) ? $data['engineAdditionalActions'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : 'CSE';
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vmIds'] = isset($data['vmIds']) ? $data['vmIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    *  微服务引擎专享版ID
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
    * @param string|null $id 微服务引擎专享版ID
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
    *  微服务引擎专享版名称
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
    * @param string|null $name 微服务引擎专享版名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  微服务引擎专享版描述
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
    * @param string|null $description 微服务引擎专享版描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets authType
    *  微服务引擎专享版认证类型
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
    * @param string|null $authType 微服务引擎专享版认证类型
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets flavor
    *  微服务引擎专享版规格
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
    * @param string|null $flavor 微服务引擎专享版规格
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
    *  微服务引擎专享版计费方式
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
    * @param string|null $payment 微服务引擎专享版计费方式
    *
    * @return $this
    */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;
        return $this;
    }

    /**
    * Gets version
    *  微服务引擎专享版当前版本
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
    * @param string|null $version 微服务引擎专享版当前版本
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
    *  微服务引擎专享版最新版本
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
    * @param string|null $latestVersion 微服务引擎专享版最新版本
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets status
    *  微服务引擎专享版状态
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
    * @param string|null $status 微服务引擎专享版状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beDefault
    *  engine 是否是默认引擎
    *
    * @return bool|null
    */
    public function getBeDefault()
    {
        return $this->container['beDefault'];
    }

    /**
    * Sets beDefault
    *
    * @param bool|null $beDefault engine 是否是默认引擎
    *
    * @return $this
    */
    public function setBeDefault($beDefault)
    {
        $this->container['beDefault'] = $beDefault;
        return $this;
    }

    /**
    * Gets createUser
    *  微服务引擎专享版创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 微服务引擎专享版创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createTime
    *  微服务引擎专享版创建时间
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
    * @param int|null $createTime 微服务引擎专享版创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets cceSpec
    *  cceSpec
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\Spec|null
    */
    public function getCceSpec()
    {
        return $this->container['cceSpec'];
    }

    /**
    * Sets cceSpec
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\Spec|null $cceSpec cceSpec
    *
    * @return $this
    */
    public function setCceSpec($cceSpec)
    {
        $this->container['cceSpec'] = $cceSpec;
        return $this;
    }

    /**
    * Gets externalEntrypoint
    *  externalEntrypoint
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineExternalEntrypoint|null
    */
    public function getExternalEntrypoint()
    {
        return $this->container['externalEntrypoint'];
    }

    /**
    * Sets externalEntrypoint
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineExternalEntrypoint|null $externalEntrypoint externalEntrypoint
    *
    * @return $this
    */
    public function setExternalEntrypoint($externalEntrypoint)
    {
        $this->container['externalEntrypoint'] = $externalEntrypoint;
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
    * Gets latestJobId
    *  微服务引擎专享版最近的任务ID
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
    * @param int|null $latestJobId 微服务引擎专享版最近的任务ID
    *
    * @return $this
    */
    public function setLatestJobId($latestJobId)
    {
        $this->container['latestJobId'] = $latestJobId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  微服务引擎专享版所属企业项目ID
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
    * @param string|null $enterpriseProjectId 微服务引擎专享版所属企业项目ID
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
    *  微服务引擎专享版所属企业项目名称
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
    * @param string|null $enterpriseProjectName 微服务引擎专享版所属企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets engineAdditionalActions
    *  微服务引擎专享版允许的附加操作
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
    * @param string[]|null $engineAdditionalActions 微服务引擎专享版允许的附加操作
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
    *  微服务引擎专享版应用部署类型
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
    * @param string|null $specType 微服务引擎专享版应用部署类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets type
    *  微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
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
    * @param string|null $type 微服务引擎类型，CSE表示专享版，CSE_Share表示专业版
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets projectId
    *  微服务引擎专享版所属项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 微服务引擎专享版所属项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vmIds
    *  当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @return string[]|null
    */
    public function getVmIds()
    {
        return $this->container['vmIds'];
    }

    /**
    * Sets vmIds
    *
    * @param string[]|null $vmIds 当前引擎在资源租户侧使用的虚拟机 id 列表
    *
    * @return $this
    */
    public function setVmIds($vmIds)
    {
        $this->container['vmIds'] = $vmIds;
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

