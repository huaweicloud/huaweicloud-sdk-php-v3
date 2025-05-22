<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkTableIssueRequestV4RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkTableIssueRequestV4RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量
    * subject  搜索关键词
    * createdOn  工作项创建时间区间
    * updatedOn  工作项更新时间区间
    * closedOn  工作项结束时间区间
    * startDate  工作项预计开始日期区间
    * dueDate  工作项预计结束日期区间
    * trackerId  工作项类型
    * statusId  工作项状态
    * authorId  工作项创建人id
    * developerId  工作项开发人员id
    * priorityId  工作项优先级id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'subject' => 'string',
            'createdOn' => 'string',
            'updatedOn' => 'string',
            'closedOn' => 'string',
            'startDate' => 'string',
            'dueDate' => 'string',
            'trackerId' => 'string',
            'statusId' => 'string',
            'authorId' => 'string',
            'developerId' => 'string',
            'priorityId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量
    * subject  搜索关键词
    * createdOn  工作项创建时间区间
    * updatedOn  工作项更新时间区间
    * closedOn  工作项结束时间区间
    * startDate  工作项预计开始日期区间
    * dueDate  工作项预计结束日期区间
    * trackerId  工作项类型
    * statusId  工作项状态
    * authorId  工作项创建人id
    * developerId  工作项开发人员id
    * priorityId  工作项优先级id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'subject' => null,
        'createdOn' => null,
        'updatedOn' => null,
        'closedOn' => null,
        'startDate' => null,
        'dueDate' => null,
        'trackerId' => null,
        'statusId' => null,
        'authorId' => null,
        'developerId' => null,
        'priorityId' => null
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
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量
    * subject  搜索关键词
    * createdOn  工作项创建时间区间
    * updatedOn  工作项更新时间区间
    * closedOn  工作项结束时间区间
    * startDate  工作项预计开始日期区间
    * dueDate  工作项预计结束日期区间
    * trackerId  工作项类型
    * statusId  工作项状态
    * authorId  工作项创建人id
    * developerId  工作项开发人员id
    * priorityId  工作项优先级id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'subject' => 'subject',
            'createdOn' => 'created_on',
            'updatedOn' => 'updated_on',
            'closedOn' => 'closed_on',
            'startDate' => 'start_date',
            'dueDate' => 'due_date',
            'trackerId' => 'tracker_id',
            'statusId' => 'status_id',
            'authorId' => 'author_id',
            'developerId' => 'developer_id',
            'priorityId' => 'priority_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量
    * subject  搜索关键词
    * createdOn  工作项创建时间区间
    * updatedOn  工作项更新时间区间
    * closedOn  工作项结束时间区间
    * startDate  工作项预计开始日期区间
    * dueDate  工作项预计结束日期区间
    * trackerId  工作项类型
    * statusId  工作项状态
    * authorId  工作项创建人id
    * developerId  工作项开发人员id
    * priorityId  工作项优先级id
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'subject' => 'setSubject',
            'createdOn' => 'setCreatedOn',
            'updatedOn' => 'setUpdatedOn',
            'closedOn' => 'setClosedOn',
            'startDate' => 'setStartDate',
            'dueDate' => 'setDueDate',
            'trackerId' => 'setTrackerId',
            'statusId' => 'setStatusId',
            'authorId' => 'setAuthorId',
            'developerId' => 'setDeveloperId',
            'priorityId' => 'setPriorityId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量
    * subject  搜索关键词
    * createdOn  工作项创建时间区间
    * updatedOn  工作项更新时间区间
    * closedOn  工作项结束时间区间
    * startDate  工作项预计开始日期区间
    * dueDate  工作项预计结束日期区间
    * trackerId  工作项类型
    * statusId  工作项状态
    * authorId  工作项创建人id
    * developerId  工作项开发人员id
    * priorityId  工作项优先级id
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'subject' => 'getSubject',
            'createdOn' => 'getCreatedOn',
            'updatedOn' => 'getUpdatedOn',
            'closedOn' => 'getClosedOn',
            'startDate' => 'getStartDate',
            'dueDate' => 'getDueDate',
            'trackerId' => 'getTrackerId',
            'statusId' => 'getStatusId',
            'authorId' => 'getAuthorId',
            'developerId' => 'getDeveloperId',
            'priorityId' => 'getPriorityId'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['closedOn'] = isset($data['closedOn']) ? $data['closedOn'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['developerId'] = isset($data['developerId']) ? $data['developerId'] : null;
        $this->container['priorityId'] = isset($data['priorityId']) ? $data['priorityId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets offset
    *  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets subject
    *  搜索关键词
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 搜索关键词
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets createdOn
    *  工作项创建时间区间
    *
    * @return string|null
    */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
    * Sets createdOn
    *
    * @param string|null $createdOn 工作项创建时间区间
    *
    * @return $this
    */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;
        return $this;
    }

    /**
    * Gets updatedOn
    *  工作项更新时间区间
    *
    * @return string|null
    */
    public function getUpdatedOn()
    {
        return $this->container['updatedOn'];
    }

    /**
    * Sets updatedOn
    *
    * @param string|null $updatedOn 工作项更新时间区间
    *
    * @return $this
    */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;
        return $this;
    }

    /**
    * Gets closedOn
    *  工作项结束时间区间
    *
    * @return string|null
    */
    public function getClosedOn()
    {
        return $this->container['closedOn'];
    }

    /**
    * Sets closedOn
    *
    * @param string|null $closedOn 工作项结束时间区间
    *
    * @return $this
    */
    public function setClosedOn($closedOn)
    {
        $this->container['closedOn'] = $closedOn;
        return $this;
    }

    /**
    * Gets startDate
    *  工作项预计开始日期区间
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
    * @param string|null $startDate 工作项预计开始日期区间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets dueDate
    *  工作项预计结束日期区间
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
    * @param string|null $dueDate 工作项预计结束日期区间
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型
    *
    * @return string|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param string|null $trackerId 工作项类型
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets statusId
    *  工作项状态
    *
    * @return string|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param string|null $statusId 工作项状态
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets authorId
    *  工作项创建人id
    *
    * @return string|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param string|null $authorId 工作项创建人id
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets developerId
    *  工作项开发人员id
    *
    * @return string|null
    */
    public function getDeveloperId()
    {
        return $this->container['developerId'];
    }

    /**
    * Sets developerId
    *
    * @param string|null $developerId 工作项开发人员id
    *
    * @return $this
    */
    public function setDeveloperId($developerId)
    {
        $this->container['developerId'] = $developerId;
        return $this;
    }

    /**
    * Gets priorityId
    *  工作项优先级id
    *
    * @return string|null
    */
    public function getPriorityId()
    {
        return $this->container['priorityId'];
    }

    /**
    * Sets priorityId
    *
    * @param string|null $priorityId 工作项优先级id
    *
    * @return $this
    */
    public function setPriorityId($priorityId)
    {
        $this->container['priorityId'] = $priorityId;
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

