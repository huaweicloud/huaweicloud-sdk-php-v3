<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestVotesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestVotesDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 打分记录的id。
    * score  **参数解释：** 分数。
    * authorName  **参数解释：** 作者名。
    * authorUsername  **参数解释：** 作者用户名。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * lastCommittedId  **参数解释：** 最后一次提交记录的id。
    * authorId  **参数解释：** 作者id。
    * avatarUrl  **参数解释：** 作者头像url。
    * nickName  **参数解释：** 作者昵称。
    * tenantName  **参数解释：** 作者租户名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'score' => 'int',
            'authorName' => 'string',
            'authorUsername' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'lastCommittedId' => 'string',
            'authorId' => 'int',
            'avatarUrl' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 打分记录的id。
    * score  **参数解释：** 分数。
    * authorName  **参数解释：** 作者名。
    * authorUsername  **参数解释：** 作者用户名。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * lastCommittedId  **参数解释：** 最后一次提交记录的id。
    * authorId  **参数解释：** 作者id。
    * avatarUrl  **参数解释：** 作者头像url。
    * nickName  **参数解释：** 作者昵称。
    * tenantName  **参数解释：** 作者租户名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'score' => 'int32',
        'authorName' => null,
        'authorUsername' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'lastCommittedId' => null,
        'authorId' => 'int32',
        'avatarUrl' => null,
        'nickName' => null,
        'tenantName' => null
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
    * id  **参数解释：** 打分记录的id。
    * score  **参数解释：** 分数。
    * authorName  **参数解释：** 作者名。
    * authorUsername  **参数解释：** 作者用户名。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * lastCommittedId  **参数解释：** 最后一次提交记录的id。
    * authorId  **参数解释：** 作者id。
    * avatarUrl  **参数解释：** 作者头像url。
    * nickName  **参数解释：** 作者昵称。
    * tenantName  **参数解释：** 作者租户名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'score' => 'score',
            'authorName' => 'author_name',
            'authorUsername' => 'author_username',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'lastCommittedId' => 'last_committed_id',
            'authorId' => 'author_id',
            'avatarUrl' => 'avatar_url',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 打分记录的id。
    * score  **参数解释：** 分数。
    * authorName  **参数解释：** 作者名。
    * authorUsername  **参数解释：** 作者用户名。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * lastCommittedId  **参数解释：** 最后一次提交记录的id。
    * authorId  **参数解释：** 作者id。
    * avatarUrl  **参数解释：** 作者头像url。
    * nickName  **参数解释：** 作者昵称。
    * tenantName  **参数解释：** 作者租户名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'score' => 'setScore',
            'authorName' => 'setAuthorName',
            'authorUsername' => 'setAuthorUsername',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'lastCommittedId' => 'setLastCommittedId',
            'authorId' => 'setAuthorId',
            'avatarUrl' => 'setAvatarUrl',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 打分记录的id。
    * score  **参数解释：** 分数。
    * authorName  **参数解释：** 作者名。
    * authorUsername  **参数解释：** 作者用户名。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * lastCommittedId  **参数解释：** 最后一次提交记录的id。
    * authorId  **参数解释：** 作者id。
    * avatarUrl  **参数解释：** 作者头像url。
    * nickName  **参数解释：** 作者昵称。
    * tenantName  **参数解释：** 作者租户名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'score' => 'getScore',
            'authorName' => 'getAuthorName',
            'authorUsername' => 'getAuthorUsername',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'lastCommittedId' => 'getLastCommittedId',
            'authorId' => 'getAuthorId',
            'avatarUrl' => 'getAvatarUrl',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['authorUsername'] = isset($data['authorUsername']) ? $data['authorUsername'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['lastCommittedId'] = isset($data['lastCommittedId']) ? $data['lastCommittedId'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
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
            if (!is_null($this->container['score']) && ($this->container['score'] > 2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < -2)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to -2.";
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
    *  **参数解释：** 打分记录的id。
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
    * @param int|null $id **参数解释：** 打分记录的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets score
    *  **参数解释：** 分数。
    *
    * @return int|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param int|null $score **参数解释：** 分数。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets authorName
    *  **参数解释：** 作者名。
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName **参数解释：** 作者名。
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets authorUsername
    *  **参数解释：** 作者用户名。
    *
    * @return string|null
    */
    public function getAuthorUsername()
    {
        return $this->container['authorUsername'];
    }

    /**
    * Sets authorUsername
    *
    * @param string|null $authorUsername **参数解释：** 作者用户名。
    *
    * @return $this
    */
    public function setAuthorUsername($authorUsername)
    {
        $this->container['authorUsername'] = $authorUsername;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
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
    * @param string|null $createdAt **参数解释：** 创建时间。
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
    *  **参数解释：** 更新时间。
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
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets lastCommittedId
    *  **参数解释：** 最后一次提交记录的id。
    *
    * @return string|null
    */
    public function getLastCommittedId()
    {
        return $this->container['lastCommittedId'];
    }

    /**
    * Sets lastCommittedId
    *
    * @param string|null $lastCommittedId **参数解释：** 最后一次提交记录的id。
    *
    * @return $this
    */
    public function setLastCommittedId($lastCommittedId)
    {
        $this->container['lastCommittedId'] = $lastCommittedId;
        return $this;
    }

    /**
    * Gets authorId
    *  **参数解释：** 作者id。
    *
    * @return int|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param int|null $authorId **参数解释：** 作者id。
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  **参数解释：** 作者头像url。
    *
    * @return string|null
    */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
    * Sets avatarUrl
    *
    * @param string|null $avatarUrl **参数解释：** 作者头像url。
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 作者昵称。
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName **参数解释：** 作者昵称。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 作者租户名称。
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 作者租户名称。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
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

