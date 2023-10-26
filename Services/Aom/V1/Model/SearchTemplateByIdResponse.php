<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchTemplateByIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchTemplateByIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approveInfo  approveInfo
    * createBy  模板创建人，从接口调用传入的token中获取。
    * createTime  模板创建时间，为utc时间毫秒数。
    * enterpriseProjectId  企业项目id
    * id  模板id，唯一标识，根据project_id和template_name生成。
    * isCollect  模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
    * isPublish  是否发布成服务
    * jobId  作业id
    * jobVersion  作业版本
    * name  模板名称
    * needSynchronize  是否需要同步
    * nodes  任务执行时需要的参数列表。
    * parameters  任务执行时需要的参数列表。
    * projectId  项目id
    * quote  引用参数
    * rateControl  rateControl
    * shareType  默认模板为public，自定义模板为private
    * steps  作业步骤
    * updateBy  模板更新人，从接口调用传入的token中获取。
    * updateTime  模板更新时间，为utc时间毫秒数。
    * version  模板版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approveInfo' => '\HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo',
            'createBy' => 'string',
            'createTime' => 'int',
            'enterpriseProjectId' => 'string',
            'id' => 'string',
            'isCollect' => 'bool',
            'isPublish' => 'bool',
            'jobId' => 'string',
            'jobVersion' => 'int',
            'name' => 'string',
            'needSynchronize' => 'bool',
            'nodes' => '\HuaweiCloud\SDK\Aom\V1\Model\Node[]',
            'parameters' => '\HuaweiCloud\SDK\Aom\V1\Model\Parameter[]',
            'projectId' => 'string',
            'quote' => 'string[]',
            'rateControl' => '\HuaweiCloud\SDK\Aom\V1\Model\RateControl',
            'shareType' => 'string',
            'steps' => '\HuaweiCloud\SDK\Aom\V1\Model\Step[]',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approveInfo  approveInfo
    * createBy  模板创建人，从接口调用传入的token中获取。
    * createTime  模板创建时间，为utc时间毫秒数。
    * enterpriseProjectId  企业项目id
    * id  模板id，唯一标识，根据project_id和template_name生成。
    * isCollect  模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
    * isPublish  是否发布成服务
    * jobId  作业id
    * jobVersion  作业版本
    * name  模板名称
    * needSynchronize  是否需要同步
    * nodes  任务执行时需要的参数列表。
    * parameters  任务执行时需要的参数列表。
    * projectId  项目id
    * quote  引用参数
    * rateControl  rateControl
    * shareType  默认模板为public，自定义模板为private
    * steps  作业步骤
    * updateBy  模板更新人，从接口调用传入的token中获取。
    * updateTime  模板更新时间，为utc时间毫秒数。
    * version  模板版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approveInfo' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'enterpriseProjectId' => null,
        'id' => null,
        'isCollect' => null,
        'isPublish' => null,
        'jobId' => null,
        'jobVersion' => 'int32',
        'name' => null,
        'needSynchronize' => null,
        'nodes' => null,
        'parameters' => null,
        'projectId' => null,
        'quote' => null,
        'rateControl' => null,
        'shareType' => null,
        'steps' => null,
        'updateBy' => null,
        'updateTime' => 'int64',
        'version' => null
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
    * approveInfo  approveInfo
    * createBy  模板创建人，从接口调用传入的token中获取。
    * createTime  模板创建时间，为utc时间毫秒数。
    * enterpriseProjectId  企业项目id
    * id  模板id，唯一标识，根据project_id和template_name生成。
    * isCollect  模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
    * isPublish  是否发布成服务
    * jobId  作业id
    * jobVersion  作业版本
    * name  模板名称
    * needSynchronize  是否需要同步
    * nodes  任务执行时需要的参数列表。
    * parameters  任务执行时需要的参数列表。
    * projectId  项目id
    * quote  引用参数
    * rateControl  rateControl
    * shareType  默认模板为public，自定义模板为private
    * steps  作业步骤
    * updateBy  模板更新人，从接口调用传入的token中获取。
    * updateTime  模板更新时间，为utc时间毫秒数。
    * version  模板版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approveInfo' => 'approve_info',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'id' => 'id',
            'isCollect' => 'is_collect',
            'isPublish' => 'is_publish',
            'jobId' => 'job_id',
            'jobVersion' => 'job_version',
            'name' => 'name',
            'needSynchronize' => 'need_synchronize',
            'nodes' => 'nodes',
            'parameters' => 'parameters',
            'projectId' => 'project_id',
            'quote' => 'quote',
            'rateControl' => 'rate_control',
            'shareType' => 'share_type',
            'steps' => 'steps',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approveInfo  approveInfo
    * createBy  模板创建人，从接口调用传入的token中获取。
    * createTime  模板创建时间，为utc时间毫秒数。
    * enterpriseProjectId  企业项目id
    * id  模板id，唯一标识，根据project_id和template_name生成。
    * isCollect  模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
    * isPublish  是否发布成服务
    * jobId  作业id
    * jobVersion  作业版本
    * name  模板名称
    * needSynchronize  是否需要同步
    * nodes  任务执行时需要的参数列表。
    * parameters  任务执行时需要的参数列表。
    * projectId  项目id
    * quote  引用参数
    * rateControl  rateControl
    * shareType  默认模板为public，自定义模板为private
    * steps  作业步骤
    * updateBy  模板更新人，从接口调用传入的token中获取。
    * updateTime  模板更新时间，为utc时间毫秒数。
    * version  模板版本
    *
    * @var string[]
    */
    protected static $setters = [
            'approveInfo' => 'setApproveInfo',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'id' => 'setId',
            'isCollect' => 'setIsCollect',
            'isPublish' => 'setIsPublish',
            'jobId' => 'setJobId',
            'jobVersion' => 'setJobVersion',
            'name' => 'setName',
            'needSynchronize' => 'setNeedSynchronize',
            'nodes' => 'setNodes',
            'parameters' => 'setParameters',
            'projectId' => 'setProjectId',
            'quote' => 'setQuote',
            'rateControl' => 'setRateControl',
            'shareType' => 'setShareType',
            'steps' => 'setSteps',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approveInfo  approveInfo
    * createBy  模板创建人，从接口调用传入的token中获取。
    * createTime  模板创建时间，为utc时间毫秒数。
    * enterpriseProjectId  企业项目id
    * id  模板id，唯一标识，根据project_id和template_name生成。
    * isCollect  模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
    * isPublish  是否发布成服务
    * jobId  作业id
    * jobVersion  作业版本
    * name  模板名称
    * needSynchronize  是否需要同步
    * nodes  任务执行时需要的参数列表。
    * parameters  任务执行时需要的参数列表。
    * projectId  项目id
    * quote  引用参数
    * rateControl  rateControl
    * shareType  默认模板为public，自定义模板为private
    * steps  作业步骤
    * updateBy  模板更新人，从接口调用传入的token中获取。
    * updateTime  模板更新时间，为utc时间毫秒数。
    * version  模板版本
    *
    * @var string[]
    */
    protected static $getters = [
            'approveInfo' => 'getApproveInfo',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'id' => 'getId',
            'isCollect' => 'getIsCollect',
            'isPublish' => 'getIsPublish',
            'jobId' => 'getJobId',
            'jobVersion' => 'getJobVersion',
            'name' => 'getName',
            'needSynchronize' => 'getNeedSynchronize',
            'nodes' => 'getNodes',
            'parameters' => 'getParameters',
            'projectId' => 'getProjectId',
            'quote' => 'getQuote',
            'rateControl' => 'getRateControl',
            'shareType' => 'getShareType',
            'steps' => 'getSteps',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime',
            'version' => 'getVersion'
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
        $this->container['approveInfo'] = isset($data['approveInfo']) ? $data['approveInfo'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isCollect'] = isset($data['isCollect']) ? $data['isCollect'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobVersion'] = isset($data['jobVersion']) ? $data['jobVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['needSynchronize'] = isset($data['needSynchronize']) ? $data['needSynchronize'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['rateControl'] = isset($data['rateControl']) ? $data['rateControl'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobVersion']) && ($this->container['jobVersion'] > 999)) {
                $invalidProperties[] = "invalid value for 'jobVersion', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['jobVersion']) && ($this->container['jobVersion'] < 1)) {
                $invalidProperties[] = "invalid value for 'jobVersion', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['shareType']) && (mb_strlen($this->container['shareType']) > 16)) {
                $invalidProperties[] = "invalid value for 'shareType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['shareType']) && (mb_strlen($this->container['shareType']) < 1)) {
                $invalidProperties[] = "invalid value for 'shareType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets approveInfo
    *  approveInfo
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo|null
    */
    public function getApproveInfo()
    {
        return $this->container['approveInfo'];
    }

    /**
    * Sets approveInfo
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\ApproveInfo|null $approveInfo approveInfo
    *
    * @return $this
    */
    public function setApproveInfo($approveInfo)
    {
        $this->container['approveInfo'] = $approveInfo;
        return $this;
    }

    /**
    * Gets createBy
    *  模板创建人，从接口调用传入的token中获取。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 模板创建人，从接口调用传入的token中获取。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createTime
    *  模板创建时间，为utc时间毫秒数。
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
    * @param int|null $createTime 模板创建时间，为utc时间毫秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets id
    *  模板id，唯一标识，根据project_id和template_name生成。
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
    * @param string|null $id 模板id，唯一标识，根据project_id和template_name生成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isCollect
    *  模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
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
    * @param bool|null $isCollect 模板是否收藏，不允许更新模板时修改，更改收藏状态调用单独的更新模板收藏状态接口
    *
    * @return $this
    */
    public function setIsCollect($isCollect)
    {
        $this->container['isCollect'] = $isCollect;
        return $this;
    }

    /**
    * Gets isPublish
    *  是否发布成服务
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
    * @param bool|null $isPublish 是否发布成服务
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets jobId
    *  作业id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobVersion
    *  作业版本
    *
    * @return int|null
    */
    public function getJobVersion()
    {
        return $this->container['jobVersion'];
    }

    /**
    * Sets jobVersion
    *
    * @param int|null $jobVersion 作业版本
    *
    * @return $this
    */
    public function setJobVersion($jobVersion)
    {
        $this->container['jobVersion'] = $jobVersion;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets needSynchronize
    *  是否需要同步
    *
    * @return bool|null
    */
    public function getNeedSynchronize()
    {
        return $this->container['needSynchronize'];
    }

    /**
    * Sets needSynchronize
    *
    * @param bool|null $needSynchronize 是否需要同步
    *
    * @return $this
    */
    public function setNeedSynchronize($needSynchronize)
    {
        $this->container['needSynchronize'] = $needSynchronize;
        return $this;
    }

    /**
    * Gets nodes
    *  任务执行时需要的参数列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Node[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Node[]|null $nodes 任务执行时需要的参数列表。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets parameters
    *  任务执行时需要的参数列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Parameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Parameter[]|null $parameters 任务执行时需要的参数列表。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets quote
    *  引用参数
    *
    * @return string[]|null
    */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
    * Sets quote
    *
    * @param string[]|null $quote 引用参数
    *
    * @return $this
    */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;
        return $this;
    }

    /**
    * Gets rateControl
    *  rateControl
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\RateControl|null
    */
    public function getRateControl()
    {
        return $this->container['rateControl'];
    }

    /**
    * Sets rateControl
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\RateControl|null $rateControl rateControl
    *
    * @return $this
    */
    public function setRateControl($rateControl)
    {
        $this->container['rateControl'] = $rateControl;
        return $this;
    }

    /**
    * Gets shareType
    *  默认模板为public，自定义模板为private
    *
    * @return string|null
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string|null $shareType 默认模板为public，自定义模板为private
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets steps
    *  作业步骤
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Step[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Step[]|null $steps 作业步骤
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets updateBy
    *  模板更新人，从接口调用传入的token中获取。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 模板更新人，从接口调用传入的token中获取。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  模板更新时间，为utc时间毫秒数。
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
    * @param int|null $updateTime 模板更新时间，为utc时间毫秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets version
    *  模板版本
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
    * @param string|null $version 模板版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

