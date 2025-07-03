<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IncidentSimpleTicketInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IncidentSimpleTicketInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  事件单标题
    * ticketId  事件单单号
    * description  事件单描述
    * status  事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
    * level  事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    * enterpriseProject  企业项目ID
    * source  单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    * creator  创建人工号
    * assignee  当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'ticketId' => 'string',
            'description' => 'string',
            'status' => 'string',
            'level' => 'string',
            'enterpriseProject' => 'string',
            'source' => 'string',
            'creator' => 'string',
            'assignee' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  事件单标题
    * ticketId  事件单单号
    * description  事件单描述
    * status  事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
    * level  事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    * enterpriseProject  企业项目ID
    * source  单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    * creator  创建人工号
    * assignee  当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'ticketId' => null,
        'description' => null,
        'status' => null,
        'level' => null,
        'enterpriseProject' => null,
        'source' => null,
        'creator' => null,
        'assignee' => null
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
    * title  事件单标题
    * ticketId  事件单单号
    * description  事件单描述
    * status  事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
    * level  事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    * enterpriseProject  企业项目ID
    * source  单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    * creator  创建人工号
    * assignee  当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'ticketId' => 'ticket_id',
            'description' => 'description',
            'status' => 'status',
            'level' => 'level',
            'enterpriseProject' => 'enterprise_project',
            'source' => 'source',
            'creator' => 'creator',
            'assignee' => 'assignee'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  事件单标题
    * ticketId  事件单单号
    * description  事件单描述
    * status  事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
    * level  事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    * enterpriseProject  企业项目ID
    * source  单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    * creator  创建人工号
    * assignee  当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'ticketId' => 'setTicketId',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'level' => 'setLevel',
            'enterpriseProject' => 'setEnterpriseProject',
            'source' => 'setSource',
            'creator' => 'setCreator',
            'assignee' => 'setAssignee'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  事件单标题
    * ticketId  事件单单号
    * description  事件单描述
    * status  事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
    * level  事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    * enterpriseProject  企业项目ID
    * source  单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    * creator  创建人工号
    * assignee  当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'ticketId' => 'getTicketId',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'level' => 'getLevel',
            'enterpriseProject' => 'getEnterpriseProject',
            'source' => 'getSource',
            'creator' => 'getCreator',
            'assignee' => 'getAssignee'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 50)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 50)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 50)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 1)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
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
    * Gets title
    *  事件单标题
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
    * @param string|null $title 事件单标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets ticketId
    *  事件单单号
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 事件单单号
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets description
    *  事件单描述
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
    * @param string|null $description 事件单描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
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
    * @param string|null $status 事件状态 参考：枚举 [事件状态](coc_api_04_03_001_006.xml) incident_status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets level
    *  事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 事件级别 参考：枚举 [事件级别](coc_api_04_03_001_006.xml) incident_level
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string|null $enterpriseProject 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets source
    *  单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 单据来源 参考：枚举 [事件来源](coc_api_04_03_001_006.xml) incident_source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets creator
    *  创建人工号
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人工号
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets assignee
    *  当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @return string[]|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param string[]|null $assignee 当前责任人，可能存在多个责任人使用列表展示，内容为责任人用户ID信息
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
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

