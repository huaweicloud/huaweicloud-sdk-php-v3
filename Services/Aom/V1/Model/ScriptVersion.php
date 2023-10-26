<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  脚本内容，脚本内容不能为空
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * enterpriseProjectId  企业项目id
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * jobReferenceNumber  脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    * scriptId  脚本id，根据UUID.randomUUID生成。
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * statusDesc  状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * versionId  版本id，根据UUID.randomUUID生成。
    * versionNumber  脚本版本号，支持数字，下划线，大小写字母和小数点
    * jobReferenceName  脚本引用的作业详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'createBy' => 'string',
            'createTime' => 'int',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'jobReferenceNumber' => 'int',
            'scriptId' => 'string',
            'scriptLanguage' => 'string',
            'statusDesc' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'versionId' => 'string',
            'versionNumber' => 'string',
            'jobReferenceName' => '\HuaweiCloud\SDK\Aom\V1\Model\ReferenceInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  脚本内容，脚本内容不能为空
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * enterpriseProjectId  企业项目id
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * jobReferenceNumber  脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    * scriptId  脚本id，根据UUID.randomUUID生成。
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * statusDesc  状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * versionId  版本id，根据UUID.randomUUID生成。
    * versionNumber  脚本版本号，支持数字，下划线，大小写字母和小数点
    * jobReferenceName  脚本引用的作业详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'enterpriseProjectId' => null,
        'name' => null,
        'projectId' => null,
        'jobReferenceNumber' => 'int32',
        'scriptId' => null,
        'scriptLanguage' => null,
        'statusDesc' => 'int32',
        'updateBy' => null,
        'updateTime' => 'int64',
        'versionId' => null,
        'versionNumber' => null,
        'jobReferenceName' => null
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
    * content  脚本内容，脚本内容不能为空
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * enterpriseProjectId  企业项目id
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * jobReferenceNumber  脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    * scriptId  脚本id，根据UUID.randomUUID生成。
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * statusDesc  状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * versionId  版本id，根据UUID.randomUUID生成。
    * versionNumber  脚本版本号，支持数字，下划线，大小写字母和小数点
    * jobReferenceName  脚本引用的作业详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'jobReferenceNumber' => 'job_reference_number',
            'scriptId' => 'script_id',
            'scriptLanguage' => 'script_language',
            'statusDesc' => 'status_desc',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'versionId' => 'version_id',
            'versionNumber' => 'version_number',
            'jobReferenceName' => 'job_reference_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  脚本内容，脚本内容不能为空
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * enterpriseProjectId  企业项目id
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * jobReferenceNumber  脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    * scriptId  脚本id，根据UUID.randomUUID生成。
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * statusDesc  状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * versionId  版本id，根据UUID.randomUUID生成。
    * versionNumber  脚本版本号，支持数字，下划线，大小写字母和小数点
    * jobReferenceName  脚本引用的作业详情
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'jobReferenceNumber' => 'setJobReferenceNumber',
            'scriptId' => 'setScriptId',
            'scriptLanguage' => 'setScriptLanguage',
            'statusDesc' => 'setStatusDesc',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'versionId' => 'setVersionId',
            'versionNumber' => 'setVersionNumber',
            'jobReferenceName' => 'setJobReferenceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  脚本内容，脚本内容不能为空
    * createBy  创建人，比如为：张三
    * createTime  创建时间
    * enterpriseProjectId  企业项目id
    * name  脚本名称，支持数字，下划线，大小写字母 ,中文
    * projectId  租户从IAM申请到的projectid，一般为32位字符串
    * jobReferenceNumber  脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    * scriptId  脚本id，根据UUID.randomUUID生成。
    * scriptLanguage  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    * statusDesc  状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    * updateBy  修改人
    * updateTime  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    * versionId  版本id，根据UUID.randomUUID生成。
    * versionNumber  脚本版本号，支持数字，下划线，大小写字母和小数点
    * jobReferenceName  脚本引用的作业详情
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'jobReferenceNumber' => 'getJobReferenceNumber',
            'scriptId' => 'getScriptId',
            'scriptLanguage' => 'getScriptLanguage',
            'statusDesc' => 'getStatusDesc',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime',
            'versionId' => 'getVersionId',
            'versionNumber' => 'getVersionNumber',
            'jobReferenceName' => 'getJobReferenceName'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['jobReferenceNumber'] = isset($data['jobReferenceNumber']) ? $data['jobReferenceNumber'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['scriptLanguage'] = isset($data['scriptLanguage']) ? $data['scriptLanguage'] : null;
        $this->container['statusDesc'] = isset($data['statusDesc']) ? $data['statusDesc'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['versionNumber'] = isset($data['versionNumber']) ? $data['versionNumber'] : null;
        $this->container['jobReferenceName'] = isset($data['jobReferenceName']) ? $data['jobReferenceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 30000)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 30000.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['jobReferenceNumber']) && ($this->container['jobReferenceNumber'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'jobReferenceNumber', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['jobReferenceNumber']) && ($this->container['jobReferenceNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'jobReferenceNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scriptId']) && (mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptLanguage']) && (mb_strlen($this->container['scriptLanguage']) > 32)) {
                $invalidProperties[] = "invalid value for 'scriptLanguage', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scriptLanguage']) && (mb_strlen($this->container['scriptLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['statusDesc']) && ($this->container['statusDesc'] > 4)) {
                $invalidProperties[] = "invalid value for 'statusDesc', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['statusDesc']) && ($this->container['statusDesc'] < 0)) {
                $invalidProperties[] = "invalid value for 'statusDesc', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['versionId']) && (mb_strlen($this->container['versionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['versionNumber']) && (mb_strlen($this->container['versionNumber']) > 64)) {
                $invalidProperties[] = "invalid value for 'versionNumber', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['versionNumber']) && (mb_strlen($this->container['versionNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionNumber', the character length must be bigger than or equal to 1.";
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
    * Gets content
    *  脚本内容，脚本内容不能为空
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 脚本内容，脚本内容不能为空
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人，比如为：张三
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
    * @param string|null $createBy 创建人，比如为：张三
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
    *  创建时间
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
    * @param int|null $createTime 创建时间
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
    * Gets name
    *  脚本名称，支持数字，下划线，大小写字母 ,中文
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
    * @param string|null $name 脚本名称，支持数字，下划线，大小写字母 ,中文
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
    *  租户从IAM申请到的projectid，一般为32位字符串
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
    * @param string|null $projectId 租户从IAM申请到的projectid，一般为32位字符串
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets jobReferenceNumber
    *  脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    *
    * @return int|null
    */
    public function getJobReferenceNumber()
    {
        return $this->container['jobReferenceNumber'];
    }

    /**
    * Sets jobReferenceNumber
    *
    * @param int|null $jobReferenceNumber 脚本版本的引用次数，脚本版本被作业引用的次数。默认是0次,引用次数为非负整数，不能出现负数
    *
    * @return $this
    */
    public function setJobReferenceNumber($jobReferenceNumber)
    {
        $this->container['jobReferenceNumber'] = $jobReferenceNumber;
        return $this;
    }

    /**
    * Gets scriptId
    *  脚本id，根据UUID.randomUUID生成。
    *
    * @return string|null
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string|null $scriptId 脚本id，根据UUID.randomUUID生成。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets scriptLanguage
    *  脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    *
    * @return string|null
    */
    public function getScriptLanguage()
    {
        return $this->container['scriptLanguage'];
    }

    /**
    * Sets scriptLanguage
    *
    * @param string|null $scriptLanguage 脚本语言，目前支持四种，分别是：SHELL BAT PYTHON POWER_SHELL
    *
    * @return $this
    */
    public function setScriptLanguage($scriptLanguage)
    {
        $this->container['scriptLanguage'] = $scriptLanguage;
        return $this;
    }

    /**
    * Gets statusDesc
    *  状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    *
    * @return int|null
    */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
    * Sets statusDesc
    *
    * @param int|null $statusDesc 状态说明  0代表 未上线，1代表已上线  2代表已下线   3代表已禁用
    *
    * @return $this
    */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;
        return $this;
    }

    /**
    * Gets updateBy
    *  修改人
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
    * @param string|null $updateBy 修改人
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
    *  实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
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
    * @param int|null $updateTime 实体的最后更新时间戳。 注意：执行创建/修改/删除操作时，update_time将更新。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets versionId
    *  版本id，根据UUID.randomUUID生成。
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 版本id，根据UUID.randomUUID生成。
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets versionNumber
    *  脚本版本号，支持数字，下划线，大小写字母和小数点
    *
    * @return string|null
    */
    public function getVersionNumber()
    {
        return $this->container['versionNumber'];
    }

    /**
    * Sets versionNumber
    *
    * @param string|null $versionNumber 脚本版本号，支持数字，下划线，大小写字母和小数点
    *
    * @return $this
    */
    public function setVersionNumber($versionNumber)
    {
        $this->container['versionNumber'] = $versionNumber;
        return $this;
    }

    /**
    * Gets jobReferenceName
    *  脚本引用的作业详情
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\ReferenceInfo[]|null
    */
    public function getJobReferenceName()
    {
        return $this->container['jobReferenceName'];
    }

    /**
    * Sets jobReferenceName
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\ReferenceInfo[]|null $jobReferenceName 脚本引用的作业详情
    *
    * @return $this
    */
    public function setJobReferenceName($jobReferenceName)
    {
        $this->container['jobReferenceName'] = $jobReferenceName;
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

