<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipelineDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipelineDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'manifestVersion' => 'string',
            'region' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'componentId' => 'string',
            'isPublish' => 'bool',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'updaterId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'isCollect' => 'bool',
            'sources' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSource[]',
            'variables' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineVariable[]',
            'schedules' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]',
            'triggers' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]',
            'groupId' => 'string',
            'definition' => 'string',
            'securityLevel' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'manifestVersion' => null,
        'region' => null,
        'domainId' => null,
        'projectId' => null,
        'componentId' => null,
        'isPublish' => null,
        'creatorId' => null,
        'creatorName' => null,
        'updaterId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'isCollect' => null,
        'sources' => null,
        'variables' => null,
        'schedules' => null,
        'triggers' => null,
        'groupId' => null,
        'definition' => null,
        'securityLevel' => null
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
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'manifestVersion' => 'manifest_version',
            'region' => 'region',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'componentId' => 'component_id',
            'isPublish' => 'is_publish',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'updaterId' => 'updater_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'isCollect' => 'is_collect',
            'sources' => 'sources',
            'variables' => 'variables',
            'schedules' => 'schedules',
            'triggers' => 'triggers',
            'groupId' => 'group_id',
            'definition' => 'definition',
            'securityLevel' => 'security_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'manifestVersion' => 'setManifestVersion',
            'region' => 'setRegion',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'componentId' => 'setComponentId',
            'isPublish' => 'setIsPublish',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'updaterId' => 'setUpdaterId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'isCollect' => 'setIsCollect',
            'sources' => 'setSources',
            'variables' => 'setVariables',
            'schedules' => 'setSchedules',
            'triggers' => 'setTriggers',
            'groupId' => 'setGroupId',
            'definition' => 'setDefinition',
            'securityLevel' => 'setSecurityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * name  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
    * description  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    * manifestVersion  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    * region  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    * domainId  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * projectId  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * componentId  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    * isPublish  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    * creatorId  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * creatorName  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    * updaterId  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    * createTime  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    * isCollect  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    * sources  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    * variables  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    * schedules  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    * triggers  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    * definition  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    * securityLevel  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'manifestVersion' => 'getManifestVersion',
            'region' => 'getRegion',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'componentId' => 'getComponentId',
            'isPublish' => 'getIsPublish',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'updaterId' => 'getUpdaterId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'isCollect' => 'getIsCollect',
            'sources' => 'getSources',
            'variables' => 'getVariables',
            'schedules' => 'getSchedules',
            'triggers' => 'getTriggers',
            'groupId' => 'getGroupId',
            'definition' => 'getDefinition',
            'securityLevel' => 'getSecurityLevel'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updaterId'] = isset($data['updaterId']) ? $data['updaterId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isCollect'] = isset($data['isCollect']) ? $data['isCollect'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['securityLevel'] = isset($data['securityLevel']) ? $data['securityLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    * @param string|null $id **参数解释**： 流水线ID，可以通过[查询流水线列表](ListPipelines.xml)接口，其中pipelines.pipelineId即为流水线ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    *  **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
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
    * @param string|null $name **参数解释**： 流水线名称。 **取值范围**： 仅包含中文、大小写英文字母、数字、'-'和'_'，且长度为[1,128]个字符。
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
    *  **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
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
    * @param string|null $description **参数解释**： 对流水线的补充描述。 **取值范围**： 不超过1024字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion **参数解释**： 流水线版本，默认为3.0。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 当前环境所属局点。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    * @param string|null $domainId **参数解释**： 所属租户ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    * @param string|null $projectId **参数解释**： 项目ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释**： 所属微服务ID。可以通过[查询微服务列表](ListMicroservice.xml)接口获取，其中data.id即为微服务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets isPublish
    *  **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    *
    * @return bool|null
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool|null $isPublish **参数解释**： 是否为变更流水线。 **取值范围**： - true：是变更流水线。 - false：不是变更流水线。
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId **参数解释**： 流水线创建人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName **参数解释**： 流水线创建人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets updaterId
    *  **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return string|null
    */
    public function getUpdaterId()
    {
        return $this->container['updaterId'];
    }

    /**
    * Sets updaterId
    *
    * @param string|null $updaterId **参数解释**： 流水线上次更新人ID。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setUpdaterId($updaterId)
    {
        $this->container['updaterId'] = $updaterId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
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
    * @param int|null $createTime **参数解释**： 流水线创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**： 流水线更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isCollect
    *  **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    *
    * @return bool|null
    */
    public function getIsCollect()
    {
        return $this->container['isCollect'];
    }

    /**
    * Sets isCollect
    *
    * @param bool|null $isCollect **参数解释**： 流水线是否被当前用户收藏。 **取值范围**： - true：流水线已被收藏。 - false：流水线未被收藏。
    *
    * @return $this
    */
    public function setIsCollect($isCollect)
    {
        $this->container['isCollect'] = $isCollect;
        return $this;
    }

    /**
    * Gets sources
    *  **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSource[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSource[]|null $sources **参数解释**： 流水线源列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets variables
    *  **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineVariable[]|null
    */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
    * Sets variables
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineVariable[]|null $variables **参数解释**： 流水线自定义参数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }

    /**
    * Gets schedules
    *  **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null
    */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
    * Sets schedules
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineSchedule[]|null $schedules **参数解释**： 流水线定时任务设置。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;
        return $this;
    }

    /**
    * Gets triggers
    *  **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineTrigger[]|null $triggers **参数解释**： 流水线事件触发设置。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**： 流水线所属分组ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets definition
    *  **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string|null $definition **参数解释**： 流水线定义JSON。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
        return $this;
    }

    /**
    * Gets securityLevel
    *  **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSecurityLevel()
    {
        return $this->container['securityLevel'];
    }

    /**
    * Sets securityLevel
    *
    * @param int|null $securityLevel **参数解释**： 流水线涉密等级。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityLevel($securityLevel)
    {
        $this->container['securityLevel'] = $securityLevel;
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

