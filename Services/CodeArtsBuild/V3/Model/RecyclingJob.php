<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecyclingJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecyclingJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * jobName  任务名称
    * projectId  CodeArts项目ID
    * creatorName  创建人
    * creatorId  创建人ID
    * createTime  创建时间
    * deleteTime  删除时间
    * createTimeStamp  创建时间戳
    * deleteTimeStamp  删除时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobName' => 'string',
            'projectId' => 'string',
            'creatorName' => 'string',
            'creatorId' => 'string',
            'createTime' => 'string',
            'deleteTime' => 'string',
            'createTimeStamp' => 'string',
            'deleteTimeStamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * jobName  任务名称
    * projectId  CodeArts项目ID
    * creatorName  创建人
    * creatorId  创建人ID
    * createTime  创建时间
    * deleteTime  删除时间
    * createTimeStamp  创建时间戳
    * deleteTimeStamp  删除时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobName' => null,
        'projectId' => null,
        'creatorName' => null,
        'creatorId' => null,
        'createTime' => null,
        'deleteTime' => null,
        'createTimeStamp' => null,
        'deleteTimeStamp' => null
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
    * jobId  任务ID
    * jobName  任务名称
    * projectId  CodeArts项目ID
    * creatorName  创建人
    * creatorId  创建人ID
    * createTime  创建时间
    * deleteTime  删除时间
    * createTimeStamp  创建时间戳
    * deleteTimeStamp  删除时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'projectId' => 'project_id',
            'creatorName' => 'creator_name',
            'creatorId' => 'creator_id',
            'createTime' => 'create_time',
            'deleteTime' => 'delete_time',
            'createTimeStamp' => 'create_time_stamp',
            'deleteTimeStamp' => 'delete_time_stamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * jobName  任务名称
    * projectId  CodeArts项目ID
    * creatorName  创建人
    * creatorId  创建人ID
    * createTime  创建时间
    * deleteTime  删除时间
    * createTimeStamp  创建时间戳
    * deleteTimeStamp  删除时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'projectId' => 'setProjectId',
            'creatorName' => 'setCreatorName',
            'creatorId' => 'setCreatorId',
            'createTime' => 'setCreateTime',
            'deleteTime' => 'setDeleteTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'deleteTimeStamp' => 'setDeleteTimeStamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * jobName  任务名称
    * projectId  CodeArts项目ID
    * creatorName  创建人
    * creatorId  创建人ID
    * createTime  创建时间
    * deleteTime  删除时间
    * createTimeStamp  创建时间戳
    * deleteTimeStamp  删除时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'projectId' => 'getProjectId',
            'creatorName' => 'getCreatorName',
            'creatorId' => 'getCreatorId',
            'createTime' => 'getCreateTime',
            'deleteTime' => 'getDeleteTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'deleteTimeStamp' => 'getDeleteTimeStamp'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['deleteTimeStamp'] = isset($data['deleteTimeStamp']) ? $data['deleteTimeStamp'] : null;
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
    * Gets jobId
    *  任务ID
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
    * @param string|null $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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
    * Gets projectId
    *  CodeArts项目ID
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
    * @param string|null $projectId CodeArts项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人
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
    * @param string|null $creatorName 创建人
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人ID
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
    * @param string|null $creatorId 创建人ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deleteTime
    *  删除时间
    *
    * @return string|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param string|null $deleteTime 删除时间
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  创建时间戳
    *
    * @return string|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param string|null $createTimeStamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets deleteTimeStamp
    *  删除时间戳
    *
    * @return string|null
    */
    public function getDeleteTimeStamp()
    {
        return $this->container['deleteTimeStamp'];
    }

    /**
    * Sets deleteTimeStamp
    *
    * @param string|null $deleteTimeStamp 删除时间戳
    *
    * @return $this
    */
    public function setDeleteTimeStamp($deleteTimeStamp)
    {
        $this->container['deleteTimeStamp'] = $deleteTimeStamp;
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

