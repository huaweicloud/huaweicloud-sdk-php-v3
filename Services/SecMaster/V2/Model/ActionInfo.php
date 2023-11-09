<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  剧本流程动作ID
    * name  流程动作名称
    * description  描述
    * actionType  流程动作类型
    * actionId  流程ID
    * playbookId  剧本ID
    * playbookVersionId  剧本版本ID
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'actionType' => 'string',
            'actionId' => 'string',
            'playbookId' => 'string',
            'playbookVersionId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  剧本流程动作ID
    * name  流程动作名称
    * description  描述
    * actionType  流程动作类型
    * actionId  流程ID
    * playbookId  剧本ID
    * playbookVersionId  剧本版本ID
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'actionType' => null,
        'actionId' => null,
        'playbookId' => null,
        'playbookVersionId' => null,
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
    * id  剧本流程动作ID
    * name  流程动作名称
    * description  描述
    * actionType  流程动作类型
    * actionId  流程ID
    * playbookId  剧本ID
    * playbookVersionId  剧本版本ID
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'actionType' => 'action_type',
            'actionId' => 'action_id',
            'playbookId' => 'playbook_id',
            'playbookVersionId' => 'playbook_version_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  剧本流程动作ID
    * name  流程动作名称
    * description  描述
    * actionType  流程动作类型
    * actionId  流程ID
    * playbookId  剧本ID
    * playbookVersionId  剧本版本ID
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'actionType' => 'setActionType',
            'actionId' => 'setActionId',
            'playbookId' => 'setPlaybookId',
            'playbookVersionId' => 'setPlaybookVersionId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  剧本流程动作ID
    * name  流程动作名称
    * description  描述
    * actionType  流程动作类型
    * actionId  流程ID
    * playbookId  剧本ID
    * playbookVersionId  剧本版本ID
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'actionType' => 'getActionType',
            'actionId' => 'getActionId',
            'playbookId' => 'getPlaybookId',
            'playbookVersionId' => 'getPlaybookVersionId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['playbookId'] = isset($data['playbookId']) ? $data['playbookId'] : null;
        $this->container['playbookVersionId'] = isset($data['playbookVersionId']) ? $data['playbookVersionId'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionType']) && (mb_strlen($this->container['actionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionType']) && (mb_strlen($this->container['actionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookVersionId']) && (mb_strlen($this->container['playbookVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookVersionId']) && (mb_strlen($this->container['playbookVersionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookVersionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
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
    *  剧本流程动作ID
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
    * @param string|null $id 剧本流程动作ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  流程动作名称
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
    * @param string|null $name 流程动作名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets actionType
    *  流程动作类型
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType 流程动作类型
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets actionId
    *  流程ID
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId 流程ID
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets playbookId
    *  剧本ID
    *
    * @return string|null
    */
    public function getPlaybookId()
    {
        return $this->container['playbookId'];
    }

    /**
    * Sets playbookId
    *
    * @param string|null $playbookId 剧本ID
    *
    * @return $this
    */
    public function setPlaybookId($playbookId)
    {
        $this->container['playbookId'] = $playbookId;
        return $this;
    }

    /**
    * Gets playbookVersionId
    *  剧本版本ID
    *
    * @return string|null
    */
    public function getPlaybookVersionId()
    {
        return $this->container['playbookVersionId'];
    }

    /**
    * Sets playbookVersionId
    *
    * @param string|null $playbookVersionId 剧本版本ID
    *
    * @return $this
    */
    public function setPlaybookVersionId($playbookVersionId)
    {
        $this->container['playbookVersionId'] = $playbookVersionId;
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

