<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssociateRegistriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssociateRegistriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * registryName  **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * registryType  **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * taskId  **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    * syncStatus  **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'registryName' => 'string',
            'registryType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'taskId' => 'string',
            'syncStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * registryName  **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * registryType  **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * taskId  **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    * syncStatus  **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'registryName' => null,
        'registryType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'taskId' => null,
        'syncStatus' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * registryName  **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * registryType  **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * taskId  **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    * syncStatus  **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'registryName' => 'registry_name',
            'registryType' => 'registry_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'taskId' => 'task_id',
            'syncStatus' => 'sync_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * registryName  **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * registryType  **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * taskId  **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    * syncStatus  **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'registryName' => 'setRegistryName',
            'registryType' => 'setRegistryType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'taskId' => 'setTaskId',
            'syncStatus' => 'setSyncStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * registryName  **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * registryType  **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * taskId  **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    * syncStatus  **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'registryName' => 'getRegistryName',
            'registryType' => 'getRegistryType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'taskId' => 'getTaskId',
            'syncStatus' => 'getSyncStatus'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryName']) && !preg_match("/^.*$/", $this->container['registryName'])) {
                $invalidProperties[] = "invalid value for 'registryName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 32768)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && !preg_match("/^(Harbor|Jfrog|SwrPrivate|SwrShared|SwrEnterprise|Other)(,(Harbor|Jfrog|SwrPrivate|SwrShared|SwrEnterprise|Other))*$/", $this->container['registryType'])) {
                $invalidProperties[] = "invalid value for 'registryType', must be conform to the pattern /^(Harbor|Jfrog|SwrPrivate|SwrShared|SwrEnterprise|Other)(,(Harbor|Jfrog|SwrPrivate|SwrShared|SwrEnterprise|Other))*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['syncStatus']) && (mb_strlen($this->container['syncStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'syncStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['syncStatus']) && (mb_strlen($this->container['syncStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'syncStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncStatus']) && !preg_match("/^finished|running|failed$/", $this->container['syncStatus'])) {
                $invalidProperties[] = "invalid value for 'syncStatus', must be conform to the pattern /^finished|running|failed$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets registryName
    *  **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRegistryName()
    {
        return $this->container['registryName'];
    }

    /**
    * Sets registryName
    *
    * @param string|null $registryName **参数解释**: 仓库名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets registryType
    *  **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    *
    * @return string|null
    */
    public function getRegistryType()
    {
        return $this->container['registryType'];
    }

    /**
    * Sets registryType
    *
    * @param string|null $registryType **参数解释**: 镜像仓类型，不传默认返回所有类型。如果要查询多个类型，可以使用逗号分隔。 **取值范围**: - Harbor harbor - Jfrog jfrog - SwrPrivate swr私有 - SwrShared  swr共享 - SwrEnterprise  swr企业 - Other  其他仓库
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId **参数解释** 任务ID **约束限制** 不涉及 **取值范围** 字符长度1-64位  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets syncStatus
    *  **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getSyncStatus()
    {
        return $this->container['syncStatus'];
    }

    /**
    * Sets syncStatus
    *
    * @param string|null $syncStatus **参数解释** 同步状态 **约束限制** 不涉及 **取值范围** - finished ：同步完成。 - running ：正在同步。 - failed ：同步失败。  **默认取值** 不涉及
    *
    * @return $this
    */
    public function setSyncStatus($syncStatus)
    {
        $this->container['syncStatus'] = $syncStatus;
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

