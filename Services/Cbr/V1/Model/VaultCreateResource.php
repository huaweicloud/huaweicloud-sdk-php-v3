<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultCreateResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultCreateResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billing  billing
    * description  存储库自定义描述信息。
    * id  存储库ID
    * name  存储库名称
    * projectId  项目ID
    * providerId  存储库资源类型id
    * resources  存储库资源
    * tags  存储库标签
    * enterpriseProjectId  企业项目id，默认为‘0’。
    * autoBind  是否自动绑定，默认为false，不支持。
    * bindRules  bindRules
    * userId  用户id
    * createdAt  创建时间,例如:\"2020-02-05T10:38:34.209782\"
    * autoExpand  [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    * backupNamePrefix  备份名称前缀
    * demandBilling  是否允许使用超出存储库容量
    * cbcDeleteCount  存储库删除次数
    * frozen  存储库是否冻结
    * sysLockSourceService  用于标识SMB服务
    * locked  用于标识该存储库是否已锁定
    * availabilityZone  存储库可用区信息，最大支持32字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billing' => '\HuaweiCloud\SDK\Cbr\V1\Model\Billing',
            'description' => 'string',
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'providerId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Cbr\V1\Model\ResourceResp[]',
            'tags' => '\HuaweiCloud\SDK\Cbr\V1\Model\Tag[]',
            'enterpriseProjectId' => 'string',
            'autoBind' => 'bool',
            'bindRules' => '\HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules',
            'userId' => 'string',
            'createdAt' => 'string',
            'autoExpand' => 'bool',
            'smnNotify' => 'bool',
            'threshold' => 'int',
            'backupNamePrefix' => 'string',
            'demandBilling' => 'bool',
            'cbcDeleteCount' => 'int',
            'frozen' => 'bool',
            'sysLockSourceService' => 'string',
            'locked' => 'bool',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billing  billing
    * description  存储库自定义描述信息。
    * id  存储库ID
    * name  存储库名称
    * projectId  项目ID
    * providerId  存储库资源类型id
    * resources  存储库资源
    * tags  存储库标签
    * enterpriseProjectId  企业项目id，默认为‘0’。
    * autoBind  是否自动绑定，默认为false，不支持。
    * bindRules  bindRules
    * userId  用户id
    * createdAt  创建时间,例如:\"2020-02-05T10:38:34.209782\"
    * autoExpand  [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    * backupNamePrefix  备份名称前缀
    * demandBilling  是否允许使用超出存储库容量
    * cbcDeleteCount  存储库删除次数
    * frozen  存储库是否冻结
    * sysLockSourceService  用于标识SMB服务
    * locked  用于标识该存储库是否已锁定
    * availabilityZone  存储库可用区信息，最大支持32字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billing' => null,
        'description' => null,
        'id' => null,
        'name' => null,
        'projectId' => null,
        'providerId' => null,
        'resources' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'autoBind' => null,
        'bindRules' => null,
        'userId' => null,
        'createdAt' => null,
        'autoExpand' => null,
        'smnNotify' => null,
        'threshold' => 'int32',
        'backupNamePrefix' => null,
        'demandBilling' => null,
        'cbcDeleteCount' => 'int32',
        'frozen' => null,
        'sysLockSourceService' => null,
        'locked' => null,
        'availabilityZone' => null
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
    * billing  billing
    * description  存储库自定义描述信息。
    * id  存储库ID
    * name  存储库名称
    * projectId  项目ID
    * providerId  存储库资源类型id
    * resources  存储库资源
    * tags  存储库标签
    * enterpriseProjectId  企业项目id，默认为‘0’。
    * autoBind  是否自动绑定，默认为false，不支持。
    * bindRules  bindRules
    * userId  用户id
    * createdAt  创建时间,例如:\"2020-02-05T10:38:34.209782\"
    * autoExpand  [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    * backupNamePrefix  备份名称前缀
    * demandBilling  是否允许使用超出存储库容量
    * cbcDeleteCount  存储库删除次数
    * frozen  存储库是否冻结
    * sysLockSourceService  用于标识SMB服务
    * locked  用于标识该存储库是否已锁定
    * availabilityZone  存储库可用区信息，最大支持32字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billing' => 'billing',
            'description' => 'description',
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'providerId' => 'provider_id',
            'resources' => 'resources',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'autoBind' => 'auto_bind',
            'bindRules' => 'bind_rules',
            'userId' => 'user_id',
            'createdAt' => 'created_at',
            'autoExpand' => 'auto_expand',
            'smnNotify' => 'smn_notify',
            'threshold' => 'threshold',
            'backupNamePrefix' => 'backup_name_prefix',
            'demandBilling' => 'demand_billing',
            'cbcDeleteCount' => 'cbc_delete_count',
            'frozen' => 'frozen',
            'sysLockSourceService' => 'sys_lock_source_service',
            'locked' => 'locked',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billing  billing
    * description  存储库自定义描述信息。
    * id  存储库ID
    * name  存储库名称
    * projectId  项目ID
    * providerId  存储库资源类型id
    * resources  存储库资源
    * tags  存储库标签
    * enterpriseProjectId  企业项目id，默认为‘0’。
    * autoBind  是否自动绑定，默认为false，不支持。
    * bindRules  bindRules
    * userId  用户id
    * createdAt  创建时间,例如:\"2020-02-05T10:38:34.209782\"
    * autoExpand  [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    * backupNamePrefix  备份名称前缀
    * demandBilling  是否允许使用超出存储库容量
    * cbcDeleteCount  存储库删除次数
    * frozen  存储库是否冻结
    * sysLockSourceService  用于标识SMB服务
    * locked  用于标识该存储库是否已锁定
    * availabilityZone  存储库可用区信息，最大支持32字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'billing' => 'setBilling',
            'description' => 'setDescription',
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'providerId' => 'setProviderId',
            'resources' => 'setResources',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'autoBind' => 'setAutoBind',
            'bindRules' => 'setBindRules',
            'userId' => 'setUserId',
            'createdAt' => 'setCreatedAt',
            'autoExpand' => 'setAutoExpand',
            'smnNotify' => 'setSmnNotify',
            'threshold' => 'setThreshold',
            'backupNamePrefix' => 'setBackupNamePrefix',
            'demandBilling' => 'setDemandBilling',
            'cbcDeleteCount' => 'setCbcDeleteCount',
            'frozen' => 'setFrozen',
            'sysLockSourceService' => 'setSysLockSourceService',
            'locked' => 'setLocked',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billing  billing
    * description  存储库自定义描述信息。
    * id  存储库ID
    * name  存储库名称
    * projectId  项目ID
    * providerId  存储库资源类型id
    * resources  存储库资源
    * tags  存储库标签
    * enterpriseProjectId  企业项目id，默认为‘0’。
    * autoBind  是否自动绑定，默认为false，不支持。
    * bindRules  bindRules
    * userId  用户id
    * createdAt  创建时间,例如:\"2020-02-05T10:38:34.209782\"
    * autoExpand  [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    * backupNamePrefix  备份名称前缀
    * demandBilling  是否允许使用超出存储库容量
    * cbcDeleteCount  存储库删除次数
    * frozen  存储库是否冻结
    * sysLockSourceService  用于标识SMB服务
    * locked  用于标识该存储库是否已锁定
    * availabilityZone  存储库可用区信息，最大支持32字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'billing' => 'getBilling',
            'description' => 'getDescription',
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'providerId' => 'getProviderId',
            'resources' => 'getResources',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'autoBind' => 'getAutoBind',
            'bindRules' => 'getBindRules',
            'userId' => 'getUserId',
            'createdAt' => 'getCreatedAt',
            'autoExpand' => 'getAutoExpand',
            'smnNotify' => 'getSmnNotify',
            'threshold' => 'getThreshold',
            'backupNamePrefix' => 'getBackupNamePrefix',
            'demandBilling' => 'getDemandBilling',
            'cbcDeleteCount' => 'getCbcDeleteCount',
            'frozen' => 'getFrozen',
            'sysLockSourceService' => 'getSysLockSourceService',
            'locked' => 'getLocked',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['autoBind'] = isset($data['autoBind']) ? $data['autoBind'] : null;
        $this->container['bindRules'] = isset($data['bindRules']) ? $data['bindRules'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['autoExpand'] = isset($data['autoExpand']) ? $data['autoExpand'] : null;
        $this->container['smnNotify'] = isset($data['smnNotify']) ? $data['smnNotify'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['backupNamePrefix'] = isset($data['backupNamePrefix']) ? $data['backupNamePrefix'] : null;
        $this->container['demandBilling'] = isset($data['demandBilling']) ? $data['demandBilling'] : null;
        $this->container['cbcDeleteCount'] = isset($data['cbcDeleteCount']) ? $data['cbcDeleteCount'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['sysLockSourceService'] = isset($data['sysLockSourceService']) ? $data['sysLockSourceService'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['providerId'] === null) {
            $invalidProperties[] = "'providerId' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] > 100)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] < 1)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupNamePrefix']) && (mb_strlen($this->container['backupNamePrefix']) > 32)) {
                $invalidProperties[] = "invalid value for 'backupNamePrefix', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['backupNamePrefix']) && (mb_strlen($this->container['backupNamePrefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupNamePrefix', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 32)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 1.";
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
    * Gets billing
    *  billing
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Billing
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Billing $billing billing
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets description
    *  存储库自定义描述信息。
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
    * @param string|null $description 存储库自定义描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  存储库ID
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
    * @param string $id 存储库ID
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
    *  存储库名称
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
    * @param string $name 存储库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets providerId
    *  存储库资源类型id
    *
    * @return string
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string $providerId 存储库资源类型id
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets resources
    *  存储库资源
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ResourceResp[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ResourceResp[] $resources 存储库资源
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets tags
    *  存储库标签
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Tag[]|null $tags 存储库标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，默认为‘0’。
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
    * @param string|null $enterpriseProjectId 企业项目id，默认为‘0’。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets autoBind
    *  是否自动绑定，默认为false，不支持。
    *
    * @return bool|null
    */
    public function getAutoBind()
    {
        return $this->container['autoBind'];
    }

    /**
    * Sets autoBind
    *
    * @param bool|null $autoBind 是否自动绑定，默认为false，不支持。
    *
    * @return $this
    */
    public function setAutoBind($autoBind)
    {
        $this->container['autoBind'] = $autoBind;
        return $this;
    }

    /**
    * Gets bindRules
    *  bindRules
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules|null
    */
    public function getBindRules()
    {
        return $this->container['bindRules'];
    }

    /**
    * Sets bindRules
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\VaultBindRules|null $bindRules bindRules
    *
    * @return $this
    */
    public function setBindRules($bindRules)
    {
        $this->container['bindRules'] = $bindRules;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间,例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间,例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets autoExpand
    *  [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    *
    * @return bool|null
    */
    public function getAutoExpand()
    {
        return $this->container['autoExpand'];
    }

    /**
    * Sets autoExpand
    *
    * @param bool|null $autoExpand [是否开启存储库自动扩容能力（只支持按需存储库）。](tag:hws,hws_hk) [是否开启存储库自动扩容能力。](tag:dt,ocb,tlf,sbc,fcs_vm,ctc,g42,tm,cmcc,tm,hcso_dt)
    *
    * @return $this
    */
    public function setAutoExpand($autoExpand)
    {
        $this->container['autoExpand'] = $autoExpand;
        return $this;
    }

    /**
    * Gets smnNotify
    *  存储库smn消息通知开关
    *
    * @return bool|null
    */
    public function getSmnNotify()
    {
        return $this->container['smnNotify'];
    }

    /**
    * Sets smnNotify
    *
    * @param bool|null $smnNotify 存储库smn消息通知开关
    *
    * @return $this
    */
    public function setSmnNotify($smnNotify)
    {
        $this->container['smnNotify'] = $smnNotify;
        return $this;
    }

    /**
    * Gets threshold
    *  存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 存储库容量阈值，已用容量占总容量达到此百分比即发送相关通知
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets backupNamePrefix
    *  备份名称前缀
    *
    * @return string|null
    */
    public function getBackupNamePrefix()
    {
        return $this->container['backupNamePrefix'];
    }

    /**
    * Sets backupNamePrefix
    *
    * @param string|null $backupNamePrefix 备份名称前缀
    *
    * @return $this
    */
    public function setBackupNamePrefix($backupNamePrefix)
    {
        $this->container['backupNamePrefix'] = $backupNamePrefix;
        return $this;
    }

    /**
    * Gets demandBilling
    *  是否允许使用超出存储库容量
    *
    * @return bool|null
    */
    public function getDemandBilling()
    {
        return $this->container['demandBilling'];
    }

    /**
    * Sets demandBilling
    *
    * @param bool|null $demandBilling 是否允许使用超出存储库容量
    *
    * @return $this
    */
    public function setDemandBilling($demandBilling)
    {
        $this->container['demandBilling'] = $demandBilling;
        return $this;
    }

    /**
    * Gets cbcDeleteCount
    *  存储库删除次数
    *
    * @return int|null
    */
    public function getCbcDeleteCount()
    {
        return $this->container['cbcDeleteCount'];
    }

    /**
    * Sets cbcDeleteCount
    *
    * @param int|null $cbcDeleteCount 存储库删除次数
    *
    * @return $this
    */
    public function setCbcDeleteCount($cbcDeleteCount)
    {
        $this->container['cbcDeleteCount'] = $cbcDeleteCount;
        return $this;
    }

    /**
    * Gets frozen
    *  存储库是否冻结
    *
    * @return bool|null
    */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
    * Sets frozen
    *
    * @param bool|null $frozen 存储库是否冻结
    *
    * @return $this
    */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;
        return $this;
    }

    /**
    * Gets sysLockSourceService
    *  用于标识SMB服务
    *
    * @return string|null
    */
    public function getSysLockSourceService()
    {
        return $this->container['sysLockSourceService'];
    }

    /**
    * Sets sysLockSourceService
    *
    * @param string|null $sysLockSourceService 用于标识SMB服务
    *
    * @return $this
    */
    public function setSysLockSourceService($sysLockSourceService)
    {
        $this->container['sysLockSourceService'] = $sysLockSourceService;
        return $this;
    }

    /**
    * Gets locked
    *  用于标识该存储库是否已锁定
    *
    * @return bool|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param bool|null $locked 用于标识该存储库是否已锁定
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  存储库可用区信息，最大支持32字符。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 存储库可用区信息，最大支持32字符。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

