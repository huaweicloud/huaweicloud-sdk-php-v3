<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotesDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotesDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * updateTime  更新时间
    * data  data
    * id  评论唯一UUID
    * isDeleted  是否已删除
    * markedNote  标识是否是评论
    * noteType  评论的动作类型
    * projectId  项目ID
    * type  评论的类型
    * user  user
    * warRoomId  评论的对象ID
    * workspaceId  空间
    * content  评论详情信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'updateTime' => 'string',
            'data' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetailData',
            'id' => 'string',
            'isDeleted' => 'bool',
            'markedNote' => 'bool',
            'noteType' => 'string',
            'projectId' => 'string',
            'type' => 'string',
            'user' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetailUser',
            'warRoomId' => 'string',
            'workspaceId' => 'string',
            'content' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * updateTime  更新时间
    * data  data
    * id  评论唯一UUID
    * isDeleted  是否已删除
    * markedNote  标识是否是评论
    * noteType  评论的动作类型
    * projectId  项目ID
    * type  评论的类型
    * user  user
    * warRoomId  评论的对象ID
    * workspaceId  空间
    * content  评论详情信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'updateTime' => null,
        'data' => null,
        'id' => null,
        'isDeleted' => null,
        'markedNote' => null,
        'noteType' => null,
        'projectId' => null,
        'type' => null,
        'user' => null,
        'warRoomId' => null,
        'workspaceId' => null,
        'content' => null
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
    * createTime  创建时间
    * updateTime  更新时间
    * data  data
    * id  评论唯一UUID
    * isDeleted  是否已删除
    * markedNote  标识是否是评论
    * noteType  评论的动作类型
    * projectId  项目ID
    * type  评论的类型
    * user  user
    * warRoomId  评论的对象ID
    * workspaceId  空间
    * content  评论详情信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'data' => 'data',
            'id' => 'id',
            'isDeleted' => 'is_deleted',
            'markedNote' => 'marked_note',
            'noteType' => 'note_type',
            'projectId' => 'project_id',
            'type' => 'type',
            'user' => 'user',
            'warRoomId' => 'war_room_id',
            'workspaceId' => 'workspace_id',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * updateTime  更新时间
    * data  data
    * id  评论唯一UUID
    * isDeleted  是否已删除
    * markedNote  标识是否是评论
    * noteType  评论的动作类型
    * projectId  项目ID
    * type  评论的类型
    * user  user
    * warRoomId  评论的对象ID
    * workspaceId  空间
    * content  评论详情信息
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'data' => 'setData',
            'id' => 'setId',
            'isDeleted' => 'setIsDeleted',
            'markedNote' => 'setMarkedNote',
            'noteType' => 'setNoteType',
            'projectId' => 'setProjectId',
            'type' => 'setType',
            'user' => 'setUser',
            'warRoomId' => 'setWarRoomId',
            'workspaceId' => 'setWorkspaceId',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * updateTime  更新时间
    * data  data
    * id  评论唯一UUID
    * isDeleted  是否已删除
    * markedNote  标识是否是评论
    * noteType  评论的动作类型
    * projectId  项目ID
    * type  评论的类型
    * user  user
    * warRoomId  评论的对象ID
    * workspaceId  空间
    * content  评论详情信息
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'data' => 'getData',
            'id' => 'getId',
            'isDeleted' => 'getIsDeleted',
            'markedNote' => 'getMarkedNote',
            'noteType' => 'getNoteType',
            'projectId' => 'getProjectId',
            'type' => 'getType',
            'user' => 'getUser',
            'warRoomId' => 'getWarRoomId',
            'workspaceId' => 'getWorkspaceId',
            'content' => 'getContent'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['markedNote'] = isset($data['markedNote']) ? $data['markedNote'] : null;
        $this->container['noteType'] = isset($data['noteType']) ? $data['noteType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['warRoomId'] = isset($data['warRoomId']) ? $data['warRoomId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['noteType']) && (mb_strlen($this->container['noteType']) > 64)) {
                $invalidProperties[] = "invalid value for 'noteType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['noteType']) && (mb_strlen($this->container['noteType']) < 0)) {
                $invalidProperties[] = "invalid value for 'noteType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['warRoomId']) && (mb_strlen($this->container['warRoomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'warRoomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['warRoomId']) && (mb_strlen($this->container['warRoomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'warRoomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
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
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetailData|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetailData|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets id
    *  评论唯一UUID
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
    * @param string|null $id 评论唯一UUID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否已删除
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 是否已删除
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets markedNote
    *  标识是否是评论
    *
    * @return bool|null
    */
    public function getMarkedNote()
    {
        return $this->container['markedNote'];
    }

    /**
    * Sets markedNote
    *
    * @param bool|null $markedNote 标识是否是评论
    *
    * @return $this
    */
    public function setMarkedNote($markedNote)
    {
        $this->container['markedNote'] = $markedNote;
        return $this;
    }

    /**
    * Gets noteType
    *  评论的动作类型
    *
    * @return string|null
    */
    public function getNoteType()
    {
        return $this->container['noteType'];
    }

    /**
    * Sets noteType
    *
    * @param string|null $noteType 评论的动作类型
    *
    * @return $this
    */
    public function setNoteType($noteType)
    {
        $this->container['noteType'] = $noteType;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  评论的类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 评论的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetailUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetailUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets warRoomId
    *  评论的对象ID
    *
    * @return string|null
    */
    public function getWarRoomId()
    {
        return $this->container['warRoomId'];
    }

    /**
    * Sets warRoomId
    *
    * @param string|null $warRoomId 评论的对象ID
    *
    * @return $this
    */
    public function setWarRoomId($warRoomId)
    {
        $this->container['warRoomId'] = $warRoomId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  空间
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 空间
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets content
    *  评论详情信息
    *
    * @return object|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param object|null $content 评论详情信息
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

