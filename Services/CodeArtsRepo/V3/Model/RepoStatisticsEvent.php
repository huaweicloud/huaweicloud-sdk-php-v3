<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoStatisticsEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoStatisticsEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branch  分支名
    * createdAt  仓库统计创建的时间
    * date  仓库统计的日期
    * id  仓库统计事件的id
    * projectId  仓库id
    * status  仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
    * updatedAt  仓库统计更新的时间
    * userId  用户id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branch' => 'string',
            'createdAt' => '\DateTime',
            'date' => 'string',
            'id' => 'int',
            'projectId' => 'int',
            'status' => 'string',
            'updatedAt' => '\DateTime',
            'userId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branch  分支名
    * createdAt  仓库统计创建的时间
    * date  仓库统计的日期
    * id  仓库统计事件的id
    * projectId  仓库id
    * status  仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
    * updatedAt  仓库统计更新的时间
    * userId  用户id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branch' => null,
        'createdAt' => 'date-time',
        'date' => null,
        'id' => 'int32',
        'projectId' => 'int32',
        'status' => null,
        'updatedAt' => 'date-time',
        'userId' => 'int32'
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
    * branch  分支名
    * createdAt  仓库统计创建的时间
    * date  仓库统计的日期
    * id  仓库统计事件的id
    * projectId  仓库id
    * status  仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
    * updatedAt  仓库统计更新的时间
    * userId  用户id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branch' => 'branch',
            'createdAt' => 'created_at',
            'date' => 'date',
            'id' => 'id',
            'projectId' => 'project_id',
            'status' => 'status',
            'updatedAt' => 'updated_at',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branch  分支名
    * createdAt  仓库统计创建的时间
    * date  仓库统计的日期
    * id  仓库统计事件的id
    * projectId  仓库id
    * status  仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
    * updatedAt  仓库统计更新的时间
    * userId  用户id
    *
    * @var string[]
    */
    protected static $setters = [
            'branch' => 'setBranch',
            'createdAt' => 'setCreatedAt',
            'date' => 'setDate',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branch  分支名
    * createdAt  仓库统计创建的时间
    * date  仓库统计的日期
    * id  仓库统计事件的id
    * projectId  仓库id
    * status  仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
    * updatedAt  仓库统计更新的时间
    * userId  用户id
    *
    * @var string[]
    */
    protected static $getters = [
            'branch' => 'getBranch',
            'createdAt' => 'getCreatedAt',
            'date' => 'getDate',
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt',
            'userId' => 'getUserId'
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branch']) && (mb_strlen($this->container['branch']) > 260)) {
                $invalidProperties[] = "invalid value for 'branch', the character length must be smaller than or equal to 260.";
            }
            if (!is_null($this->container['branch']) && (mb_strlen($this->container['branch']) < 1)) {
                $invalidProperties[] = "invalid value for 'branch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['date']) && !preg_match("/yyyy-MM-dd HH:mm:ss/", $this->container['date'])) {
                $invalidProperties[] = "invalid value for 'date', must be conform to the pattern /yyyy-MM-dd HH:mm:ss/.";
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
    * Gets branch
    *  分支名
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 分支名
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets createdAt
    *  仓库统计创建的时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 仓库统计创建的时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets date
    *  仓库统计的日期
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 仓库统计的日期
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets id
    *  仓库统计事件的id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 仓库统计事件的id
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
    *  仓库id
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 仓库id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
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
    * @param string|null $status 仓库统计的状态: 等待统计waiting  正在统计active  完成统计finish
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  仓库统计更新的时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 仓库统计更新的时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return int|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param int|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

