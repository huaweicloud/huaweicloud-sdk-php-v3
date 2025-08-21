<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticEventsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticEventsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 统计ID。
    * userId  **参数解释：** 用户ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * status  **参数解释：** 统计状态。
    * statDate  **参数解释：** 统计时间。
    * createdAt  **参数解释：** 统计创建时间。
    * updatedAt  **参数解释：** 统计更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'userId' => 'int',
            'projectId' => 'int',
            'branch' => 'string',
            'status' => 'string',
            'statDate' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 统计ID。
    * userId  **参数解释：** 用户ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * status  **参数解释：** 统计状态。
    * statDate  **参数解释：** 统计时间。
    * createdAt  **参数解释：** 统计创建时间。
    * updatedAt  **参数解释：** 统计更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userId' => null,
        'projectId' => null,
        'branch' => null,
        'status' => null,
        'statDate' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  **参数解释：** 统计ID。
    * userId  **参数解释：** 用户ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * status  **参数解释：** 统计状态。
    * statDate  **参数解释：** 统计时间。
    * createdAt  **参数解释：** 统计创建时间。
    * updatedAt  **参数解释：** 统计更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'projectId' => 'project_id',
            'branch' => 'branch',
            'status' => 'status',
            'statDate' => 'stat_date',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 统计ID。
    * userId  **参数解释：** 用户ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * status  **参数解释：** 统计状态。
    * statDate  **参数解释：** 统计时间。
    * createdAt  **参数解释：** 统计创建时间。
    * updatedAt  **参数解释：** 统计更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'projectId' => 'setProjectId',
            'branch' => 'setBranch',
            'status' => 'setStatus',
            'statDate' => 'setStatDate',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 统计ID。
    * userId  **参数解释：** 用户ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * status  **参数解释：** 统计状态。
    * statDate  **参数解释：** 统计时间。
    * createdAt  **参数解释：** 统计创建时间。
    * updatedAt  **参数解释：** 统计更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'projectId' => 'getProjectId',
            'branch' => 'getBranch',
            'status' => 'getStatus',
            'statDate' => 'getStatDate',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statDate'] = isset($data['statDate']) ? $data['statDate'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] < 1)) {
                $invalidProperties[] = "invalid value for 'userId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && ($this->container['projectId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && ($this->container['projectId'] < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', must be bigger than or equal to 1.";
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
    *  **参数解释：** 统计ID。
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
    * @param int|null $id **参数解释：** 统计ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释：** 用户ID。
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
    * @param int|null $userId **参数解释：** 用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 仓库ID。
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
    * @param int|null $projectId **参数解释：** 仓库ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets branch
    *  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
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
    * @param string|null $branch **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 统计状态。
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
    * @param string|null $status **参数解释：** 统计状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statDate
    *  **参数解释：** 统计时间。
    *
    * @return string|null
    */
    public function getStatDate()
    {
        return $this->container['statDate'];
    }

    /**
    * Sets statDate
    *
    * @param string|null $statDate **参数解释：** 统计时间。
    *
    * @return $this
    */
    public function setStatDate($statDate)
    {
        $this->container['statDate'] = $statDate;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 统计创建时间。
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
    * @param string|null $createdAt **参数解释：** 统计创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 统计更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 统计更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

