<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MilestoneBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MilestoneBasicDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  里程碑id
    * iid  里程碑iid
    * repositoryId  仓库id
    * title  里程碑标题
    * description  里程碑描述
    * state  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * dueDate  到期时间
    * startDate  开始时间
    * repositoryPath  仓库路径
    * webUrl  主页url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'repositoryId' => 'int',
            'title' => 'string',
            'description' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'dueDate' => 'string',
            'startDate' => 'string',
            'repositoryPath' => 'string',
            'webUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  里程碑id
    * iid  里程碑iid
    * repositoryId  仓库id
    * title  里程碑标题
    * description  里程碑描述
    * state  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * dueDate  到期时间
    * startDate  开始时间
    * repositoryPath  仓库路径
    * webUrl  主页url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'iid' => 'int32',
        'repositoryId' => 'int32',
        'title' => null,
        'description' => null,
        'state' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'dueDate' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'startDate' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'repositoryPath' => null,
        'webUrl' => null
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
    * id  里程碑id
    * iid  里程碑iid
    * repositoryId  仓库id
    * title  里程碑标题
    * description  里程碑描述
    * state  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * dueDate  到期时间
    * startDate  开始时间
    * repositoryPath  仓库路径
    * webUrl  主页url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'repositoryId' => 'repository_id',
            'title' => 'title',
            'description' => 'description',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'dueDate' => 'due_date',
            'startDate' => 'start_date',
            'repositoryPath' => 'repository_path',
            'webUrl' => 'web_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  里程碑id
    * iid  里程碑iid
    * repositoryId  仓库id
    * title  里程碑标题
    * description  里程碑描述
    * state  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * dueDate  到期时间
    * startDate  开始时间
    * repositoryPath  仓库路径
    * webUrl  主页url
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'repositoryId' => 'setRepositoryId',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'dueDate' => 'setDueDate',
            'startDate' => 'setStartDate',
            'repositoryPath' => 'setRepositoryPath',
            'webUrl' => 'setWebUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  里程碑id
    * iid  里程碑iid
    * repositoryId  仓库id
    * title  里程碑标题
    * description  里程碑描述
    * state  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * dueDate  到期时间
    * startDate  开始时间
    * repositoryPath  仓库路径
    * webUrl  主页url
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'repositoryId' => 'getRepositoryId',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'dueDate' => 'getDueDate',
            'startDate' => 'getStartDate',
            'repositoryPath' => 'getRepositoryPath',
            'webUrl' => 'getWebUrl'
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
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['repositoryPath'] = isset($data['repositoryPath']) ? $data['repositoryPath'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
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
            if (!is_null($this->container['iid']) && ($this->container['iid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'iid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['iid']) && ($this->container['iid'] < 1)) {
                $invalidProperties[] = "invalid value for 'iid', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 100000)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 100000)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryPath']) && (mb_strlen($this->container['repositoryPath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'repositoryPath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['repositoryPath']) && (mb_strlen($this->container['repositoryPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['webUrl']) && (mb_strlen($this->container['webUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'webUrl', the character length must be bigger than or equal to 1.";
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
    *  里程碑id
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
    * @param int|null $id 里程碑id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets iid
    *  里程碑iid
    *
    * @return int|null
    */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
    * Sets iid
    *
    * @param int|null $iid 里程碑iid
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets repositoryId
    *  仓库id
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
    * @param int|null $repositoryId 仓库id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets title
    *  里程碑标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 里程碑标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  里程碑描述
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
    * @param string|null $description 里程碑描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
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
    *  更新时间
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
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets dueDate
    *  到期时间
    *
    * @return string|null
    */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
    * Sets dueDate
    *
    * @param string|null $dueDate 到期时间
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets startDate
    *  开始时间
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 开始时间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets repositoryPath
    *  仓库路径
    *
    * @return string|null
    */
    public function getRepositoryPath()
    {
        return $this->container['repositoryPath'];
    }

    /**
    * Sets repositoryPath
    *
    * @param string|null $repositoryPath 仓库路径
    *
    * @return $this
    */
    public function setRepositoryPath($repositoryPath)
    {
        $this->container['repositoryPath'] = $repositoryPath;
        return $this;
    }

    /**
    * Gets webUrl
    *  主页url
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl 主页url
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
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

