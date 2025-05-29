<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobInfo_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  构建任务ID
    * projectId  构建工程ID,唯一对应codeci_job_id
    * projectPermissionSwitch  使用项目权限
    * buildTime  执行时间
    * chargeTime  收费时间
    * createTime  任务创建时间
    * disabled  是否已禁用
    * favorite  是否已收藏
    * sourceCode  代码来源
    * runningStatus  运行状态
    * newBuild  重新运行
    * jobName  任务名称
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    * lastBuildStatus  最终构建状态
    * lastBuildTime  最后构建时间
    * healthScore  健康度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'projectPermissionSwitch' => 'bool',
            'buildTime' => 'string',
            'chargeTime' => 'string',
            'createTime' => 'int',
            'disabled' => 'bool',
            'favorite' => 'bool',
            'sourceCode' => 'string',
            'runningStatus' => 'string',
            'newBuild' => 'bool',
            'jobName' => 'string',
            'isCopy' => 'bool',
            'isDelete' => 'bool',
            'isExecute' => 'bool',
            'isForbidden' => 'bool',
            'isManager' => 'bool',
            'isModify' => 'bool',
            'isView' => 'bool',
            'lastBuildStatus' => 'string',
            'lastBuildTime' => 'int',
            'healthScore' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  构建任务ID
    * projectId  构建工程ID,唯一对应codeci_job_id
    * projectPermissionSwitch  使用项目权限
    * buildTime  执行时间
    * chargeTime  收费时间
    * createTime  任务创建时间
    * disabled  是否已禁用
    * favorite  是否已收藏
    * sourceCode  代码来源
    * runningStatus  运行状态
    * newBuild  重新运行
    * jobName  任务名称
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    * lastBuildStatus  最终构建状态
    * lastBuildTime  最后构建时间
    * healthScore  健康度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'projectPermissionSwitch' => null,
        'buildTime' => null,
        'chargeTime' => null,
        'createTime' => 'int64',
        'disabled' => null,
        'favorite' => null,
        'sourceCode' => null,
        'runningStatus' => null,
        'newBuild' => null,
        'jobName' => null,
        'isCopy' => null,
        'isDelete' => null,
        'isExecute' => null,
        'isForbidden' => null,
        'isManager' => null,
        'isModify' => null,
        'isView' => null,
        'lastBuildStatus' => null,
        'lastBuildTime' => 'int64',
        'healthScore' => null
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
    * id  构建任务ID
    * projectId  构建工程ID,唯一对应codeci_job_id
    * projectPermissionSwitch  使用项目权限
    * buildTime  执行时间
    * chargeTime  收费时间
    * createTime  任务创建时间
    * disabled  是否已禁用
    * favorite  是否已收藏
    * sourceCode  代码来源
    * runningStatus  运行状态
    * newBuild  重新运行
    * jobName  任务名称
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    * lastBuildStatus  最终构建状态
    * lastBuildTime  最后构建时间
    * healthScore  健康度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'projectPermissionSwitch' => 'project_permission_switch',
            'buildTime' => 'build_time',
            'chargeTime' => 'charge_time',
            'createTime' => 'create_time',
            'disabled' => 'disabled',
            'favorite' => 'favorite',
            'sourceCode' => 'source_code',
            'runningStatus' => 'running_status',
            'newBuild' => 'new_build',
            'jobName' => 'job_name',
            'isCopy' => 'is_copy',
            'isDelete' => 'is_delete',
            'isExecute' => 'is_execute',
            'isForbidden' => 'is_forbidden',
            'isManager' => 'is_manager',
            'isModify' => 'is_modify',
            'isView' => 'is_view',
            'lastBuildStatus' => 'last_build_status',
            'lastBuildTime' => 'last_build_time',
            'healthScore' => 'health_score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  构建任务ID
    * projectId  构建工程ID,唯一对应codeci_job_id
    * projectPermissionSwitch  使用项目权限
    * buildTime  执行时间
    * chargeTime  收费时间
    * createTime  任务创建时间
    * disabled  是否已禁用
    * favorite  是否已收藏
    * sourceCode  代码来源
    * runningStatus  运行状态
    * newBuild  重新运行
    * jobName  任务名称
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    * lastBuildStatus  最终构建状态
    * lastBuildTime  最后构建时间
    * healthScore  健康度
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'projectPermissionSwitch' => 'setProjectPermissionSwitch',
            'buildTime' => 'setBuildTime',
            'chargeTime' => 'setChargeTime',
            'createTime' => 'setCreateTime',
            'disabled' => 'setDisabled',
            'favorite' => 'setFavorite',
            'sourceCode' => 'setSourceCode',
            'runningStatus' => 'setRunningStatus',
            'newBuild' => 'setNewBuild',
            'jobName' => 'setJobName',
            'isCopy' => 'setIsCopy',
            'isDelete' => 'setIsDelete',
            'isExecute' => 'setIsExecute',
            'isForbidden' => 'setIsForbidden',
            'isManager' => 'setIsManager',
            'isModify' => 'setIsModify',
            'isView' => 'setIsView',
            'lastBuildStatus' => 'setLastBuildStatus',
            'lastBuildTime' => 'setLastBuildTime',
            'healthScore' => 'setHealthScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  构建任务ID
    * projectId  构建工程ID,唯一对应codeci_job_id
    * projectPermissionSwitch  使用项目权限
    * buildTime  执行时间
    * chargeTime  收费时间
    * createTime  任务创建时间
    * disabled  是否已禁用
    * favorite  是否已收藏
    * sourceCode  代码来源
    * runningStatus  运行状态
    * newBuild  重新运行
    * jobName  任务名称
    * isCopy  是否有复制任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isForbidden  是否有禁用任务权限
    * isManager  是否有管理任务权限
    * isModify  是否有修改任务权限
    * isView  是否有查看任务权限
    * lastBuildStatus  最终构建状态
    * lastBuildTime  最后构建时间
    * healthScore  健康度
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'projectPermissionSwitch' => 'getProjectPermissionSwitch',
            'buildTime' => 'getBuildTime',
            'chargeTime' => 'getChargeTime',
            'createTime' => 'getCreateTime',
            'disabled' => 'getDisabled',
            'favorite' => 'getFavorite',
            'sourceCode' => 'getSourceCode',
            'runningStatus' => 'getRunningStatus',
            'newBuild' => 'getNewBuild',
            'jobName' => 'getJobName',
            'isCopy' => 'getIsCopy',
            'isDelete' => 'getIsDelete',
            'isExecute' => 'getIsExecute',
            'isForbidden' => 'getIsForbidden',
            'isManager' => 'getIsManager',
            'isModify' => 'getIsModify',
            'isView' => 'getIsView',
            'lastBuildStatus' => 'getLastBuildStatus',
            'lastBuildTime' => 'getLastBuildTime',
            'healthScore' => 'getHealthScore'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectPermissionSwitch'] = isset($data['projectPermissionSwitch']) ? $data['projectPermissionSwitch'] : null;
        $this->container['buildTime'] = isset($data['buildTime']) ? $data['buildTime'] : null;
        $this->container['chargeTime'] = isset($data['chargeTime']) ? $data['chargeTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['favorite'] = isset($data['favorite']) ? $data['favorite'] : null;
        $this->container['sourceCode'] = isset($data['sourceCode']) ? $data['sourceCode'] : null;
        $this->container['runningStatus'] = isset($data['runningStatus']) ? $data['runningStatus'] : null;
        $this->container['newBuild'] = isset($data['newBuild']) ? $data['newBuild'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['isCopy'] = isset($data['isCopy']) ? $data['isCopy'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['isManager'] = isset($data['isManager']) ? $data['isManager'] : null;
        $this->container['isModify'] = isset($data['isModify']) ? $data['isModify'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['lastBuildStatus'] = isset($data['lastBuildStatus']) ? $data['lastBuildStatus'] : null;
        $this->container['lastBuildTime'] = isset($data['lastBuildTime']) ? $data['lastBuildTime'] : null;
        $this->container['healthScore'] = isset($data['healthScore']) ? $data['healthScore'] : null;
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
    *  构建任务ID
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
    * @param string|null $id 构建任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  构建工程ID,唯一对应codeci_job_id
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
    * @param string|null $projectId 构建工程ID,唯一对应codeci_job_id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectPermissionSwitch
    *  使用项目权限
    *
    * @return bool|null
    */
    public function getProjectPermissionSwitch()
    {
        return $this->container['projectPermissionSwitch'];
    }

    /**
    * Sets projectPermissionSwitch
    *
    * @param bool|null $projectPermissionSwitch 使用项目权限
    *
    * @return $this
    */
    public function setProjectPermissionSwitch($projectPermissionSwitch)
    {
        $this->container['projectPermissionSwitch'] = $projectPermissionSwitch;
        return $this;
    }

    /**
    * Gets buildTime
    *  执行时间
    *
    * @return string|null
    */
    public function getBuildTime()
    {
        return $this->container['buildTime'];
    }

    /**
    * Sets buildTime
    *
    * @param string|null $buildTime 执行时间
    *
    * @return $this
    */
    public function setBuildTime($buildTime)
    {
        $this->container['buildTime'] = $buildTime;
        return $this;
    }

    /**
    * Gets chargeTime
    *  收费时间
    *
    * @return string|null
    */
    public function getChargeTime()
    {
        return $this->container['chargeTime'];
    }

    /**
    * Sets chargeTime
    *
    * @param string|null $chargeTime 收费时间
    *
    * @return $this
    */
    public function setChargeTime($chargeTime)
    {
        $this->container['chargeTime'] = $chargeTime;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间
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
    * @param int|null $createTime 任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets disabled
    *  是否已禁用
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否已禁用
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets favorite
    *  是否已收藏
    *
    * @return bool|null
    */
    public function getFavorite()
    {
        return $this->container['favorite'];
    }

    /**
    * Sets favorite
    *
    * @param bool|null $favorite 是否已收藏
    *
    * @return $this
    */
    public function setFavorite($favorite)
    {
        $this->container['favorite'] = $favorite;
        return $this;
    }

    /**
    * Gets sourceCode
    *  代码来源
    *
    * @return string|null
    */
    public function getSourceCode()
    {
        return $this->container['sourceCode'];
    }

    /**
    * Sets sourceCode
    *
    * @param string|null $sourceCode 代码来源
    *
    * @return $this
    */
    public function setSourceCode($sourceCode)
    {
        $this->container['sourceCode'] = $sourceCode;
        return $this;
    }

    /**
    * Gets runningStatus
    *  运行状态
    *
    * @return string|null
    */
    public function getRunningStatus()
    {
        return $this->container['runningStatus'];
    }

    /**
    * Sets runningStatus
    *
    * @param string|null $runningStatus 运行状态
    *
    * @return $this
    */
    public function setRunningStatus($runningStatus)
    {
        $this->container['runningStatus'] = $runningStatus;
        return $this;
    }

    /**
    * Gets newBuild
    *  重新运行
    *
    * @return bool|null
    */
    public function getNewBuild()
    {
        return $this->container['newBuild'];
    }

    /**
    * Sets newBuild
    *
    * @param bool|null $newBuild 重新运行
    *
    * @return $this
    */
    public function setNewBuild($newBuild)
    {
        $this->container['newBuild'] = $newBuild;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets isCopy
    *  是否有复制任务权限
    *
    * @return bool|null
    */
    public function getIsCopy()
    {
        return $this->container['isCopy'];
    }

    /**
    * Sets isCopy
    *
    * @param bool|null $isCopy 是否有复制任务权限
    *
    * @return $this
    */
    public function setIsCopy($isCopy)
    {
        $this->container['isCopy'] = $isCopy;
        return $this;
    }

    /**
    * Gets isDelete
    *  是否有删除任务权限
    *
    * @return bool|null
    */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
    * Sets isDelete
    *
    * @param bool|null $isDelete 是否有删除任务权限
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
        return $this;
    }

    /**
    * Gets isExecute
    *  是否有执行任务权限
    *
    * @return bool|null
    */
    public function getIsExecute()
    {
        return $this->container['isExecute'];
    }

    /**
    * Sets isExecute
    *
    * @param bool|null $isExecute 是否有执行任务权限
    *
    * @return $this
    */
    public function setIsExecute($isExecute)
    {
        $this->container['isExecute'] = $isExecute;
        return $this;
    }

    /**
    * Gets isForbidden
    *  是否有禁用任务权限
    *
    * @return bool|null
    */
    public function getIsForbidden()
    {
        return $this->container['isForbidden'];
    }

    /**
    * Sets isForbidden
    *
    * @param bool|null $isForbidden 是否有禁用任务权限
    *
    * @return $this
    */
    public function setIsForbidden($isForbidden)
    {
        $this->container['isForbidden'] = $isForbidden;
        return $this;
    }

    /**
    * Gets isManager
    *  是否有管理任务权限
    *
    * @return bool|null
    */
    public function getIsManager()
    {
        return $this->container['isManager'];
    }

    /**
    * Sets isManager
    *
    * @param bool|null $isManager 是否有管理任务权限
    *
    * @return $this
    */
    public function setIsManager($isManager)
    {
        $this->container['isManager'] = $isManager;
        return $this;
    }

    /**
    * Gets isModify
    *  是否有修改任务权限
    *
    * @return bool|null
    */
    public function getIsModify()
    {
        return $this->container['isModify'];
    }

    /**
    * Sets isModify
    *
    * @param bool|null $isModify 是否有修改任务权限
    *
    * @return $this
    */
    public function setIsModify($isModify)
    {
        $this->container['isModify'] = $isModify;
        return $this;
    }

    /**
    * Gets isView
    *  是否有查看任务权限
    *
    * @return bool|null
    */
    public function getIsView()
    {
        return $this->container['isView'];
    }

    /**
    * Sets isView
    *
    * @param bool|null $isView 是否有查看任务权限
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
        return $this;
    }

    /**
    * Gets lastBuildStatus
    *  最终构建状态
    *
    * @return string|null
    */
    public function getLastBuildStatus()
    {
        return $this->container['lastBuildStatus'];
    }

    /**
    * Sets lastBuildStatus
    *
    * @param string|null $lastBuildStatus 最终构建状态
    *
    * @return $this
    */
    public function setLastBuildStatus($lastBuildStatus)
    {
        $this->container['lastBuildStatus'] = $lastBuildStatus;
        return $this;
    }

    /**
    * Gets lastBuildTime
    *  最后构建时间
    *
    * @return int|null
    */
    public function getLastBuildTime()
    {
        return $this->container['lastBuildTime'];
    }

    /**
    * Sets lastBuildTime
    *
    * @param int|null $lastBuildTime 最后构建时间
    *
    * @return $this
    */
    public function setLastBuildTime($lastBuildTime)
    {
        $this->container['lastBuildTime'] = $lastBuildTime;
        return $this;
    }

    /**
    * Gets healthScore
    *  健康度
    *
    * @return int|null
    */
    public function getHealthScore()
    {
        return $this->container['healthScore'];
    }

    /**
    * Sets healthScore
    *
    * @param int|null $healthScore 健康度
    *
    * @return $this
    */
    public function setHealthScore($healthScore)
    {
        $this->container['healthScore'] = $healthScore;
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

