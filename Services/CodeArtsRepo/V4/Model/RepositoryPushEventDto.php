<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryPushEventDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryPushEventDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionName  **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    * author  author
    * authorId  **参数解释：** 触发者ID。
    * authorUsername  **参数解释：** 触发者名称。
    * createdAt  **参数解释：** 创建时间。
    * repositoryId  **参数解释：** 仓库ID。
    * repositoryName  **参数解释：** 仓库名。
    * pushData  pushData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionName' => 'string',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryEventAuthorDto',
            'authorId' => 'int',
            'authorUsername' => 'string',
            'createdAt' => 'string',
            'repositoryId' => 'int',
            'repositoryName' => 'string',
            'pushData' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PushEventPayloadDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionName  **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    * author  author
    * authorId  **参数解释：** 触发者ID。
    * authorUsername  **参数解释：** 触发者名称。
    * createdAt  **参数解释：** 创建时间。
    * repositoryId  **参数解释：** 仓库ID。
    * repositoryName  **参数解释：** 仓库名。
    * pushData  pushData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionName' => null,
        'author' => null,
        'authorId' => 'int32',
        'authorUsername' => null,
        'createdAt' => null,
        'repositoryId' => 'int32',
        'repositoryName' => null,
        'pushData' => null
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
    * actionName  **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    * author  author
    * authorId  **参数解释：** 触发者ID。
    * authorUsername  **参数解释：** 触发者名称。
    * createdAt  **参数解释：** 创建时间。
    * repositoryId  **参数解释：** 仓库ID。
    * repositoryName  **参数解释：** 仓库名。
    * pushData  pushData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionName' => 'action_name',
            'author' => 'author',
            'authorId' => 'author_id',
            'authorUsername' => 'author_username',
            'createdAt' => 'created_at',
            'repositoryId' => 'repository_id',
            'repositoryName' => 'repository_name',
            'pushData' => 'push_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionName  **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    * author  author
    * authorId  **参数解释：** 触发者ID。
    * authorUsername  **参数解释：** 触发者名称。
    * createdAt  **参数解释：** 创建时间。
    * repositoryId  **参数解释：** 仓库ID。
    * repositoryName  **参数解释：** 仓库名。
    * pushData  pushData
    *
    * @var string[]
    */
    protected static $setters = [
            'actionName' => 'setActionName',
            'author' => 'setAuthor',
            'authorId' => 'setAuthorId',
            'authorUsername' => 'setAuthorUsername',
            'createdAt' => 'setCreatedAt',
            'repositoryId' => 'setRepositoryId',
            'repositoryName' => 'setRepositoryName',
            'pushData' => 'setPushData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionName  **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    * author  author
    * authorId  **参数解释：** 触发者ID。
    * authorUsername  **参数解释：** 触发者名称。
    * createdAt  **参数解释：** 创建时间。
    * repositoryId  **参数解释：** 仓库ID。
    * repositoryName  **参数解释：** 仓库名。
    * pushData  pushData
    *
    * @var string[]
    */
    protected static $getters = [
            'actionName' => 'getActionName',
            'author' => 'getAuthor',
            'authorId' => 'getAuthorId',
            'authorUsername' => 'getAuthorUsername',
            'createdAt' => 'getCreatedAt',
            'repositoryId' => 'getRepositoryId',
            'repositoryName' => 'getRepositoryName',
            'pushData' => 'getPushData'
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
    const ACTION_NAME_PUSHED_TO = 'pushed to';
    const ACTION_NAME_PUSHED_NEW = 'pushed new';
    const ACTION_NAME_DELETED = 'deleted';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionNameAllowableValues()
    {
        return [
            self::ACTION_NAME_PUSHED_TO,
            self::ACTION_NAME_PUSHED_NEW,
            self::ACTION_NAME_DELETED,
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
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['authorUsername'] = isset($data['authorUsername']) ? $data['authorUsername'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['pushData'] = isset($data['pushData']) ? $data['pushData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionNameAllowableValues();
                if (!is_null($this->container['actionName']) && !in_array($this->container['actionName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['authorId']) && ($this->container['authorId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'authorId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['authorId']) && ($this->container['authorId'] < 1)) {
                $invalidProperties[] = "invalid value for 'authorId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
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
    * Gets actionName
    *  **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    *
    * @return string|null
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string|null $actionName **参数解释：** 操作名称。 - pushed to，表示推送。 - pushed new，表示推送并新建。 - deleted，表示删除。
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryEventAuthorDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryEventAuthorDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets authorId
    *  **参数解释：** 触发者ID。
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
    * @param int|null $authorId **参数解释：** 触发者ID。
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets authorUsername
    *  **参数解释：** 触发者名称。
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
    * @param string|null $authorUsername **参数解释：** 触发者名称。
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
    * Gets repositoryId
    *  **参数解释：** 仓库ID。
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
    * @param int|null $repositoryId **参数解释：** 仓库ID。
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
    *  **参数解释：** 仓库名。
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
    * @param string|null $repositoryName **参数解释：** 仓库名。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets pushData
    *  pushData
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PushEventPayloadDto|null
    */
    public function getPushData()
    {
        return $this->container['pushData'];
    }

    /**
    * Sets pushData
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PushEventPayloadDto|null $pushData pushData
    *
    * @return $this
    */
    public function setPushData($pushData)
    {
        $this->container['pushData'] = $pushData;
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

