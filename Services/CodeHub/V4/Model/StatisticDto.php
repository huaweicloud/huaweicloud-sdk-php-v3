<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 统计ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * userName  用户名
    * addLines  **参数解释：** 增加行数。
    * deleteLines  **参数解释：** 删除行数。
    * commitCount  **参数解释：** 总的提交数量。
    * createdAt  **参数解释：** 最早提交时间。
    * updatedAt  **参数解释：** 最新更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'projectId' => 'int',
            'branch' => 'string',
            'userName' => 'string',
            'addLines' => 'int',
            'deleteLines' => 'int',
            'commitCount' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 统计ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * userName  用户名
    * addLines  **参数解释：** 增加行数。
    * deleteLines  **参数解释：** 删除行数。
    * commitCount  **参数解释：** 总的提交数量。
    * createdAt  **参数解释：** 最早提交时间。
    * updatedAt  **参数解释：** 最新更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'projectId' => null,
        'branch' => null,
        'userName' => null,
        'addLines' => null,
        'deleteLines' => null,
        'commitCount' => null,
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
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * userName  用户名
    * addLines  **参数解释：** 增加行数。
    * deleteLines  **参数解释：** 删除行数。
    * commitCount  **参数解释：** 总的提交数量。
    * createdAt  **参数解释：** 最早提交时间。
    * updatedAt  **参数解释：** 最新更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'branch' => 'branch',
            'userName' => 'user_name',
            'addLines' => 'add_lines',
            'deleteLines' => 'delete_lines',
            'commitCount' => 'commit_count',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 统计ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * userName  用户名
    * addLines  **参数解释：** 增加行数。
    * deleteLines  **参数解释：** 删除行数。
    * commitCount  **参数解释：** 总的提交数量。
    * createdAt  **参数解释：** 最早提交时间。
    * updatedAt  **参数解释：** 最新更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'branch' => 'setBranch',
            'userName' => 'setUserName',
            'addLines' => 'setAddLines',
            'deleteLines' => 'setDeleteLines',
            'commitCount' => 'setCommitCount',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 统计ID。
    * projectId  **参数解释：** 仓库ID。
    * branch  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节
    * userName  用户名
    * addLines  **参数解释：** 增加行数。
    * deleteLines  **参数解释：** 删除行数。
    * commitCount  **参数解释：** 总的提交数量。
    * createdAt  **参数解释：** 最早提交时间。
    * updatedAt  **参数解释：** 最新更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'branch' => 'getBranch',
            'userName' => 'getUserName',
            'addLines' => 'getAddLines',
            'deleteLines' => 'getDeleteLines',
            'commitCount' => 'getCommitCount',
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['addLines'] = isset($data['addLines']) ? $data['addLines'] : null;
        $this->container['deleteLines'] = isset($data['deleteLines']) ? $data['deleteLines'] : null;
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
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
            if (!is_null($this->container['projectId']) && ($this->container['projectId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && ($this->container['projectId'] < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['addLines']) && ($this->container['addLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addLines']) && ($this->container['addLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'addLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteLines']) && ($this->container['deleteLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'deleteLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['deleteLines']) && ($this->container['deleteLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be bigger than or equal to 0.";
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
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets addLines
    *  **参数解释：** 增加行数。
    *
    * @return int|null
    */
    public function getAddLines()
    {
        return $this->container['addLines'];
    }

    /**
    * Sets addLines
    *
    * @param int|null $addLines **参数解释：** 增加行数。
    *
    * @return $this
    */
    public function setAddLines($addLines)
    {
        $this->container['addLines'] = $addLines;
        return $this;
    }

    /**
    * Gets deleteLines
    *  **参数解释：** 删除行数。
    *
    * @return int|null
    */
    public function getDeleteLines()
    {
        return $this->container['deleteLines'];
    }

    /**
    * Sets deleteLines
    *
    * @param int|null $deleteLines **参数解释：** 删除行数。
    *
    * @return $this
    */
    public function setDeleteLines($deleteLines)
    {
        $this->container['deleteLines'] = $deleteLines;
        return $this;
    }

    /**
    * Gets commitCount
    *  **参数解释：** 总的提交数量。
    *
    * @return int|null
    */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
    * Sets commitCount
    *
    * @param int|null $commitCount **参数解释：** 总的提交数量。
    *
    * @return $this
    */
    public function setCommitCount($commitCount)
    {
        $this->container['commitCount'] = $commitCount;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 最早提交时间。
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
    * @param string|null $createdAt **参数解释：** 最早提交时间。
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
    *  **参数解释：** 最新更新时间。
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
    * @param string|null $updatedAt **参数解释：** 最新更新时间。
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

