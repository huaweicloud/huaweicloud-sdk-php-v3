<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Job implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Job';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userName  用户名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'jobName' => 'string',
            'jobCreator' => 'string',
            'userName' => 'string',
            'lastBuildTime' => 'float',
            'healthScore' => 'int',
            'sourceCode' => 'string',
            'lastBuildStatus' => 'string',
            'isFinished' => 'bool',
            'disabled' => 'bool',
            'favorite' => 'bool',
            'isModify' => 'bool',
            'isDelete' => 'bool',
            'isExecute' => 'bool',
            'isCopy' => 'bool',
            'isForbidden' => 'bool',
            'isView' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userName  用户名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'jobName' => null,
        'jobCreator' => null,
        'userName' => null,
        'lastBuildTime' => null,
        'healthScore' => null,
        'sourceCode' => null,
        'lastBuildStatus' => null,
        'isFinished' => null,
        'disabled' => null,
        'favorite' => null,
        'isModify' => null,
        'isDelete' => null,
        'isExecute' => null,
        'isCopy' => null,
        'isForbidden' => null,
        'isView' => null
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
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userName  用户名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobName' => 'job_name',
            'jobCreator' => 'job_creator',
            'userName' => 'user_name',
            'lastBuildTime' => 'last_build_time',
            'healthScore' => 'health_score',
            'sourceCode' => 'source_code',
            'lastBuildStatus' => 'last_build_status',
            'isFinished' => 'is_finished',
            'disabled' => 'disabled',
            'favorite' => 'favorite',
            'isModify' => 'is_modify',
            'isDelete' => 'is_delete',
            'isExecute' => 'is_execute',
            'isCopy' => 'is_copy',
            'isForbidden' => 'is_forbidden',
            'isView' => 'is_view'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userName  用户名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobName' => 'setJobName',
            'jobCreator' => 'setJobCreator',
            'userName' => 'setUserName',
            'lastBuildTime' => 'setLastBuildTime',
            'healthScore' => 'setHealthScore',
            'sourceCode' => 'setSourceCode',
            'lastBuildStatus' => 'setLastBuildStatus',
            'isFinished' => 'setIsFinished',
            'disabled' => 'setDisabled',
            'favorite' => 'setFavorite',
            'isModify' => 'setIsModify',
            'isDelete' => 'setIsDelete',
            'isExecute' => 'setIsExecute',
            'isCopy' => 'setIsCopy',
            'isForbidden' => 'setIsForbidden',
            'isView' => 'setIsView'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * jobName  任务名称
    * jobCreator  任务创建者
    * userName  用户名称
    * lastBuildTime  最新执行时间
    * healthScore  健康分值
    * sourceCode  代码来源
    * lastBuildStatus  最新构建状态
    * isFinished  是否已结束
    * disabled  是否已禁用
    * favorite  是否已收藏
    * isModify  是否有修改任务权限
    * isDelete  是否有删除任务权限
    * isExecute  是否有执行任务权限
    * isCopy  是否有复制任务权限
    * isForbidden  是否有禁用任务权限
    * isView  是否有查看任务权限
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobName' => 'getJobName',
            'jobCreator' => 'getJobCreator',
            'userName' => 'getUserName',
            'lastBuildTime' => 'getLastBuildTime',
            'healthScore' => 'getHealthScore',
            'sourceCode' => 'getSourceCode',
            'lastBuildStatus' => 'getLastBuildStatus',
            'isFinished' => 'getIsFinished',
            'disabled' => 'getDisabled',
            'favorite' => 'getFavorite',
            'isModify' => 'getIsModify',
            'isDelete' => 'getIsDelete',
            'isExecute' => 'getIsExecute',
            'isCopy' => 'getIsCopy',
            'isForbidden' => 'getIsForbidden',
            'isView' => 'getIsView'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobCreator'] = isset($data['jobCreator']) ? $data['jobCreator'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['lastBuildTime'] = isset($data['lastBuildTime']) ? $data['lastBuildTime'] : null;
        $this->container['healthScore'] = isset($data['healthScore']) ? $data['healthScore'] : null;
        $this->container['sourceCode'] = isset($data['sourceCode']) ? $data['sourceCode'] : null;
        $this->container['lastBuildStatus'] = isset($data['lastBuildStatus']) ? $data['lastBuildStatus'] : null;
        $this->container['isFinished'] = isset($data['isFinished']) ? $data['isFinished'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['favorite'] = isset($data['favorite']) ? $data['favorite'] : null;
        $this->container['isModify'] = isset($data['isModify']) ? $data['isModify'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['isExecute'] = isset($data['isExecute']) ? $data['isExecute'] : null;
        $this->container['isCopy'] = isset($data['isCopy']) ? $data['isCopy'] : null;
        $this->container['isForbidden'] = isset($data['isForbidden']) ? $data['isForbidden'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
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
    *  任务ID
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
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets jobCreator
    *  任务创建者
    *
    * @return string|null
    */
    public function getJobCreator()
    {
        return $this->container['jobCreator'];
    }

    /**
    * Sets jobCreator
    *
    * @param string|null $jobCreator 任务创建者
    *
    * @return $this
    */
    public function setJobCreator($jobCreator)
    {
        $this->container['jobCreator'] = $jobCreator;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets lastBuildTime
    *  最新执行时间
    *
    * @return float|null
    */
    public function getLastBuildTime()
    {
        return $this->container['lastBuildTime'];
    }

    /**
    * Sets lastBuildTime
    *
    * @param float|null $lastBuildTime 最新执行时间
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
    *  健康分值
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
    * @param int|null $healthScore 健康分值
    *
    * @return $this
    */
    public function setHealthScore($healthScore)
    {
        $this->container['healthScore'] = $healthScore;
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
    * Gets lastBuildStatus
    *  最新构建状态
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
    * @param string|null $lastBuildStatus 最新构建状态
    *
    * @return $this
    */
    public function setLastBuildStatus($lastBuildStatus)
    {
        $this->container['lastBuildStatus'] = $lastBuildStatus;
        return $this;
    }

    /**
    * Gets isFinished
    *  是否已结束
    *
    * @return bool|null
    */
    public function getIsFinished()
    {
        return $this->container['isFinished'];
    }

    /**
    * Sets isFinished
    *
    * @param bool|null $isFinished 是否已结束
    *
    * @return $this
    */
    public function setIsFinished($isFinished)
    {
        $this->container['isFinished'] = $isFinished;
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

