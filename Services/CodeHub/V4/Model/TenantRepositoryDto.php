<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TenantRepositoryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TenantRepositoryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * capacity  **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * moderationResult  **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * memberNumber  **参数解释：** 成员数量。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * repositoryName  **参数解释：** 仓库名。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目Id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'string',
            'capacity' => 'double',
            'status' => 'int',
            'moderationResult' => 'bool',
            'createTime' => 'string',
            'memberNumber' => 'int',
            'repositoryId' => 'int',
            'repositoryName' => 'string',
            'projectName' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * capacity  **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * moderationResult  **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * memberNumber  **参数解释：** 成员数量。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * repositoryName  **参数解释：** 仓库名。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目Id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'capacity' => 'double',
        'status' => null,
        'moderationResult' => null,
        'createTime' => 'MMM dd, yyyy hh:mm:ss a',
        'memberNumber' => null,
        'repositoryId' => null,
        'repositoryName' => null,
        'projectName' => null,
        'projectId' => null
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
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * capacity  **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * moderationResult  **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * memberNumber  **参数解释：** 成员数量。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * repositoryName  **参数解释：** 仓库名。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目Id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'capacity' => 'capacity',
            'status' => 'status',
            'moderationResult' => 'moderation_result',
            'createTime' => 'create_time',
            'memberNumber' => 'member_number',
            'repositoryId' => 'repository_id',
            'repositoryName' => 'repository_name',
            'projectName' => 'project_name',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * capacity  **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * moderationResult  **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * memberNumber  **参数解释：** 成员数量。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * repositoryName  **参数解释：** 仓库名。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目Id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'capacity' => 'setCapacity',
            'status' => 'setStatus',
            'moderationResult' => 'setModerationResult',
            'createTime' => 'setCreateTime',
            'memberNumber' => 'setMemberNumber',
            'repositoryId' => 'setRepositoryId',
            'repositoryName' => 'setRepositoryName',
            'projectName' => 'setProjectName',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * capacity  **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * moderationResult  **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * memberNumber  **参数解释：** 成员数量。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * repositoryName  **参数解释：** 仓库名。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目Id。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'capacity' => 'getCapacity',
            'status' => 'getStatus',
            'moderationResult' => 'getModerationResult',
            'createTime' => 'getCreateTime',
            'memberNumber' => 'getMemberNumber',
            'repositoryId' => 'getRepositoryId',
            'repositoryName' => 'getRepositoryName',
            'projectName' => 'getProjectName',
            'projectId' => 'getProjectId'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['memberNumber'] = isset($data['memberNumber']) ? $data['memberNumber'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 200)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 1)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryName']) && (mb_strlen($this->container['repositoryName']) > 200)) {
                $invalidProperties[] = "invalid value for 'repositoryName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['repositoryName']) && (mb_strlen($this->container['repositoryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 200)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 200)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    * Gets owner
    *  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets capacity
    *  **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    *
    * @return double|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param double|null $capacity **参数解释：** 仓库容量,单位:MB,保留2位小数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets moderationResult
    *  **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    *
    * @return bool|null
    */
    public function getModerationResult()
    {
        return $this->container['moderationResult'];
    }

    /**
    * Sets moderationResult
    *
    * @param bool|null $moderationResult **参数解释：** 内容审核结果。 **取值范围：** true，审核通过。 false，审核未通过。
    *
    * @return $this
    */
    public function setModerationResult($moderationResult)
    {
        $this->container['moderationResult'] = $moderationResult;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
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
    * @param string|null $createTime **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets memberNumber
    *  **参数解释：** 成员数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getMemberNumber()
    {
        return $this->container['memberNumber'];
    }

    /**
    * Sets memberNumber
    *
    * @param int|null $memberNumber **参数解释：** 成员数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMemberNumber($memberNumber)
    {
        $this->container['memberNumber'] = $memberNumber;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets repositoryName
    *  **参数解释：** 仓库名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName **参数解释：** 仓库名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 项目名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释：** 项目名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目Id。 **取值范围：** 不涉及。
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
    * @param string|null $projectId **参数解释：** 项目Id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

