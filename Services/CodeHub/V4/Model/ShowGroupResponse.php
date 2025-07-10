<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creatorId  创建者id
    * projectId  项目id
    * createdAt  创建时间
    * description  描述
    * fullName  代码组全名
    * ancestorIds  代码组层级路径id
    * ancestorNames  代码组层级路径名称
    * id  代码组id
    * membersCount  代码组成员计数
    * name  代码组名
    * repositoryCount  仓库计数
    * starCount  关注计数
    * starred  是否关注
    * subgroupCount  子组计数
    * visibility  可见性, private public
    * sum  sum
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creatorId' => 'int',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'description' => 'string',
            'fullName' => 'string',
            'ancestorIds' => 'int[]',
            'ancestorNames' => 'string[]',
            'id' => 'int',
            'membersCount' => 'int',
            'name' => 'string',
            'repositoryCount' => 'int',
            'starCount' => 'int',
            'starred' => 'bool',
            'subgroupCount' => 'int',
            'visibility' => 'string',
            'sum' => '\HuaweiCloud\SDK\CodeHub\V4\Model\GroupSumDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creatorId  创建者id
    * projectId  项目id
    * createdAt  创建时间
    * description  描述
    * fullName  代码组全名
    * ancestorIds  代码组层级路径id
    * ancestorNames  代码组层级路径名称
    * id  代码组id
    * membersCount  代码组成员计数
    * name  代码组名
    * repositoryCount  仓库计数
    * starCount  关注计数
    * starred  是否关注
    * subgroupCount  子组计数
    * visibility  可见性, private public
    * sum  sum
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creatorId' => 'int32',
        'projectId' => null,
        'createdAt' => 'date-time',
        'description' => null,
        'fullName' => null,
        'ancestorIds' => 'int32',
        'ancestorNames' => null,
        'id' => 'int32',
        'membersCount' => 'int32',
        'name' => null,
        'repositoryCount' => 'int32',
        'starCount' => 'int32',
        'starred' => null,
        'subgroupCount' => null,
        'visibility' => null,
        'sum' => null
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
    * creatorId  创建者id
    * projectId  项目id
    * createdAt  创建时间
    * description  描述
    * fullName  代码组全名
    * ancestorIds  代码组层级路径id
    * ancestorNames  代码组层级路径名称
    * id  代码组id
    * membersCount  代码组成员计数
    * name  代码组名
    * repositoryCount  仓库计数
    * starCount  关注计数
    * starred  是否关注
    * subgroupCount  子组计数
    * visibility  可见性, private public
    * sum  sum
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creatorId' => 'creator_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'description' => 'description',
            'fullName' => 'full_name',
            'ancestorIds' => 'ancestor_ids',
            'ancestorNames' => 'ancestor_names',
            'id' => 'id',
            'membersCount' => 'members_count',
            'name' => 'name',
            'repositoryCount' => 'repository_count',
            'starCount' => 'star_count',
            'starred' => 'starred',
            'subgroupCount' => 'subgroup_count',
            'visibility' => 'visibility',
            'sum' => 'sum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creatorId  创建者id
    * projectId  项目id
    * createdAt  创建时间
    * description  描述
    * fullName  代码组全名
    * ancestorIds  代码组层级路径id
    * ancestorNames  代码组层级路径名称
    * id  代码组id
    * membersCount  代码组成员计数
    * name  代码组名
    * repositoryCount  仓库计数
    * starCount  关注计数
    * starred  是否关注
    * subgroupCount  子组计数
    * visibility  可见性, private public
    * sum  sum
    *
    * @var string[]
    */
    protected static $setters = [
            'creatorId' => 'setCreatorId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'description' => 'setDescription',
            'fullName' => 'setFullName',
            'ancestorIds' => 'setAncestorIds',
            'ancestorNames' => 'setAncestorNames',
            'id' => 'setId',
            'membersCount' => 'setMembersCount',
            'name' => 'setName',
            'repositoryCount' => 'setRepositoryCount',
            'starCount' => 'setStarCount',
            'starred' => 'setStarred',
            'subgroupCount' => 'setSubgroupCount',
            'visibility' => 'setVisibility',
            'sum' => 'setSum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creatorId  创建者id
    * projectId  项目id
    * createdAt  创建时间
    * description  描述
    * fullName  代码组全名
    * ancestorIds  代码组层级路径id
    * ancestorNames  代码组层级路径名称
    * id  代码组id
    * membersCount  代码组成员计数
    * name  代码组名
    * repositoryCount  仓库计数
    * starCount  关注计数
    * starred  是否关注
    * subgroupCount  子组计数
    * visibility  可见性, private public
    * sum  sum
    *
    * @var string[]
    */
    protected static $getters = [
            'creatorId' => 'getCreatorId',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'description' => 'getDescription',
            'fullName' => 'getFullName',
            'ancestorIds' => 'getAncestorIds',
            'ancestorNames' => 'getAncestorNames',
            'id' => 'getId',
            'membersCount' => 'getMembersCount',
            'name' => 'getName',
            'repositoryCount' => 'getRepositoryCount',
            'starCount' => 'getStarCount',
            'starred' => 'getStarred',
            'subgroupCount' => 'getSubgroupCount',
            'visibility' => 'getVisibility',
            'sum' => 'getSum'
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
    const VISIBILITY__PUBLIC = 'public';
    const VISIBILITY__PRIVATE = 'private';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PUBLIC,
            self::VISIBILITY__PRIVATE,
        ];
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
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['ancestorIds'] = isset($data['ancestorIds']) ? $data['ancestorIds'] : null;
        $this->container['ancestorNames'] = isset($data['ancestorNames']) ? $data['ancestorNames'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['membersCount'] = isset($data['membersCount']) ? $data['membersCount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['repositoryCount'] = isset($data['repositoryCount']) ? $data['repositoryCount'] : null;
        $this->container['starCount'] = isset($data['starCount']) ? $data['starCount'] : null;
        $this->container['starred'] = isset($data['starred']) ? $data['starred'] : null;
        $this->container['subgroupCount'] = isset($data['subgroupCount']) ? $data['subgroupCount'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['creatorId']) && ($this->container['creatorId'] < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fullName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fullName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['membersCount']) && ($this->container['membersCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'membersCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['membersCount']) && ($this->container['membersCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'membersCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryCount']) && ($this->container['repositoryCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryCount']) && ($this->container['repositoryCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'starCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['starCount']) && ($this->container['starCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'starCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subgroupCount']) && ($this->container['subgroupCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subgroupCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['subgroupCount']) && ($this->container['subgroupCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'subgroupCount', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets creatorId
    *  创建者id
    *
    * @return int|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param int|null $creatorId 创建者id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
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
    * Gets createdAt
    *  创建时间
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
    * @param \DateTime|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets fullName
    *  代码组全名
    *
    * @return string|null
    */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
    * Sets fullName
    *
    * @param string|null $fullName 代码组全名
    *
    * @return $this
    */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;
        return $this;
    }

    /**
    * Gets ancestorIds
    *  代码组层级路径id
    *
    * @return int[]|null
    */
    public function getAncestorIds()
    {
        return $this->container['ancestorIds'];
    }

    /**
    * Sets ancestorIds
    *
    * @param int[]|null $ancestorIds 代码组层级路径id
    *
    * @return $this
    */
    public function setAncestorIds($ancestorIds)
    {
        $this->container['ancestorIds'] = $ancestorIds;
        return $this;
    }

    /**
    * Gets ancestorNames
    *  代码组层级路径名称
    *
    * @return string[]|null
    */
    public function getAncestorNames()
    {
        return $this->container['ancestorNames'];
    }

    /**
    * Sets ancestorNames
    *
    * @param string[]|null $ancestorNames 代码组层级路径名称
    *
    * @return $this
    */
    public function setAncestorNames($ancestorNames)
    {
        $this->container['ancestorNames'] = $ancestorNames;
        return $this;
    }

    /**
    * Gets id
    *  代码组id
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
    * @param int|null $id 代码组id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets membersCount
    *  代码组成员计数
    *
    * @return int|null
    */
    public function getMembersCount()
    {
        return $this->container['membersCount'];
    }

    /**
    * Sets membersCount
    *
    * @param int|null $membersCount 代码组成员计数
    *
    * @return $this
    */
    public function setMembersCount($membersCount)
    {
        $this->container['membersCount'] = $membersCount;
        return $this;
    }

    /**
    * Gets name
    *  代码组名
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
    * @param string|null $name 代码组名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets repositoryCount
    *  仓库计数
    *
    * @return int|null
    */
    public function getRepositoryCount()
    {
        return $this->container['repositoryCount'];
    }

    /**
    * Sets repositoryCount
    *
    * @param int|null $repositoryCount 仓库计数
    *
    * @return $this
    */
    public function setRepositoryCount($repositoryCount)
    {
        $this->container['repositoryCount'] = $repositoryCount;
        return $this;
    }

    /**
    * Gets starCount
    *  关注计数
    *
    * @return int|null
    */
    public function getStarCount()
    {
        return $this->container['starCount'];
    }

    /**
    * Sets starCount
    *
    * @param int|null $starCount 关注计数
    *
    * @return $this
    */
    public function setStarCount($starCount)
    {
        $this->container['starCount'] = $starCount;
        return $this;
    }

    /**
    * Gets starred
    *  是否关注
    *
    * @return bool|null
    */
    public function getStarred()
    {
        return $this->container['starred'];
    }

    /**
    * Sets starred
    *
    * @param bool|null $starred 是否关注
    *
    * @return $this
    */
    public function setStarred($starred)
    {
        $this->container['starred'] = $starred;
        return $this;
    }

    /**
    * Gets subgroupCount
    *  子组计数
    *
    * @return int|null
    */
    public function getSubgroupCount()
    {
        return $this->container['subgroupCount'];
    }

    /**
    * Sets subgroupCount
    *
    * @param int|null $subgroupCount 子组计数
    *
    * @return $this
    */
    public function setSubgroupCount($subgroupCount)
    {
        $this->container['subgroupCount'] = $subgroupCount;
        return $this;
    }

    /**
    * Gets visibility
    *  可见性, private public
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility 可见性, private public
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets sum
    *  sum
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\GroupSumDto|null
    */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
    * Sets sum
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\GroupSumDto|null $sum sum
    *
    * @return $this
    */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;
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

