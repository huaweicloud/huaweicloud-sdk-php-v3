<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocTicketDetailInfoResponseDataSubTickets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocTicketDetailInfoResponseData_sub_tickets';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * changeTicketId  变更单单号。
    * changeTicketIdSub  变更子单单号。
    * whetherToChange  是否需要变更。
    * isDeleted  是否已删除。
    * id  变更工单ID
    * mainTicketId  变更工单主键ID。
    * parentTicketId  父级工单ID。
    * ticketId  问题单ID。
    * realTicketId  问题单单号。
    * ticketPath  工单路径。
    * targetValue  region信息。
    * targetType  子单类型。
    * createTime  创建时间。
    * updateTime  更新时间。
    * creator  创单人。
    * operator  操作人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'changeTicketId' => 'string',
            'changeTicketIdSub' => 'string',
            'whetherToChange' => 'bool',
            'isDeleted' => 'bool',
            'id' => 'string',
            'mainTicketId' => 'string',
            'parentTicketId' => 'string',
            'ticketId' => 'string',
            'realTicketId' => 'string',
            'ticketPath' => 'string',
            'targetValue' => 'string',
            'targetType' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'creator' => 'string',
            'operator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * changeTicketId  变更单单号。
    * changeTicketIdSub  变更子单单号。
    * whetherToChange  是否需要变更。
    * isDeleted  是否已删除。
    * id  变更工单ID
    * mainTicketId  变更工单主键ID。
    * parentTicketId  父级工单ID。
    * ticketId  问题单ID。
    * realTicketId  问题单单号。
    * ticketPath  工单路径。
    * targetValue  region信息。
    * targetType  子单类型。
    * createTime  创建时间。
    * updateTime  更新时间。
    * creator  创单人。
    * operator  操作人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'changeTicketId' => null,
        'changeTicketIdSub' => null,
        'whetherToChange' => null,
        'isDeleted' => null,
        'id' => null,
        'mainTicketId' => null,
        'parentTicketId' => null,
        'ticketId' => null,
        'realTicketId' => null,
        'ticketPath' => null,
        'targetValue' => null,
        'targetType' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'creator' => null,
        'operator' => null
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
    * changeTicketId  变更单单号。
    * changeTicketIdSub  变更子单单号。
    * whetherToChange  是否需要变更。
    * isDeleted  是否已删除。
    * id  变更工单ID
    * mainTicketId  变更工单主键ID。
    * parentTicketId  父级工单ID。
    * ticketId  问题单ID。
    * realTicketId  问题单单号。
    * ticketPath  工单路径。
    * targetValue  region信息。
    * targetType  子单类型。
    * createTime  创建时间。
    * updateTime  更新时间。
    * creator  创单人。
    * operator  操作人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'changeTicketId' => 'change_ticket_id',
            'changeTicketIdSub' => 'change_ticket_id_sub',
            'whetherToChange' => 'whether_to_change',
            'isDeleted' => 'is_deleted',
            'id' => 'id',
            'mainTicketId' => 'main_ticket_id',
            'parentTicketId' => 'parent_ticket_id',
            'ticketId' => 'ticket_id',
            'realTicketId' => 'real_ticket_id',
            'ticketPath' => 'ticket_path',
            'targetValue' => 'target_value',
            'targetType' => 'target_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'creator' => 'creator',
            'operator' => 'operator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * changeTicketId  变更单单号。
    * changeTicketIdSub  变更子单单号。
    * whetherToChange  是否需要变更。
    * isDeleted  是否已删除。
    * id  变更工单ID
    * mainTicketId  变更工单主键ID。
    * parentTicketId  父级工单ID。
    * ticketId  问题单ID。
    * realTicketId  问题单单号。
    * ticketPath  工单路径。
    * targetValue  region信息。
    * targetType  子单类型。
    * createTime  创建时间。
    * updateTime  更新时间。
    * creator  创单人。
    * operator  操作人。
    *
    * @var string[]
    */
    protected static $setters = [
            'changeTicketId' => 'setChangeTicketId',
            'changeTicketIdSub' => 'setChangeTicketIdSub',
            'whetherToChange' => 'setWhetherToChange',
            'isDeleted' => 'setIsDeleted',
            'id' => 'setId',
            'mainTicketId' => 'setMainTicketId',
            'parentTicketId' => 'setParentTicketId',
            'ticketId' => 'setTicketId',
            'realTicketId' => 'setRealTicketId',
            'ticketPath' => 'setTicketPath',
            'targetValue' => 'setTargetValue',
            'targetType' => 'setTargetType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'creator' => 'setCreator',
            'operator' => 'setOperator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * changeTicketId  变更单单号。
    * changeTicketIdSub  变更子单单号。
    * whetherToChange  是否需要变更。
    * isDeleted  是否已删除。
    * id  变更工单ID
    * mainTicketId  变更工单主键ID。
    * parentTicketId  父级工单ID。
    * ticketId  问题单ID。
    * realTicketId  问题单单号。
    * ticketPath  工单路径。
    * targetValue  region信息。
    * targetType  子单类型。
    * createTime  创建时间。
    * updateTime  更新时间。
    * creator  创单人。
    * operator  操作人。
    *
    * @var string[]
    */
    protected static $getters = [
            'changeTicketId' => 'getChangeTicketId',
            'changeTicketIdSub' => 'getChangeTicketIdSub',
            'whetherToChange' => 'getWhetherToChange',
            'isDeleted' => 'getIsDeleted',
            'id' => 'getId',
            'mainTicketId' => 'getMainTicketId',
            'parentTicketId' => 'getParentTicketId',
            'ticketId' => 'getTicketId',
            'realTicketId' => 'getRealTicketId',
            'ticketPath' => 'getTicketPath',
            'targetValue' => 'getTargetValue',
            'targetType' => 'getTargetType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'creator' => 'getCreator',
            'operator' => 'getOperator'
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
        $this->container['changeTicketId'] = isset($data['changeTicketId']) ? $data['changeTicketId'] : null;
        $this->container['changeTicketIdSub'] = isset($data['changeTicketIdSub']) ? $data['changeTicketIdSub'] : null;
        $this->container['whetherToChange'] = isset($data['whetherToChange']) ? $data['whetherToChange'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mainTicketId'] = isset($data['mainTicketId']) ? $data['mainTicketId'] : null;
        $this->container['parentTicketId'] = isset($data['parentTicketId']) ? $data['parentTicketId'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['realTicketId'] = isset($data['realTicketId']) ? $data['realTicketId'] : null;
        $this->container['ticketPath'] = isset($data['ticketPath']) ? $data['ticketPath'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['changeTicketId']) && (mb_strlen($this->container['changeTicketId']) > 100)) {
                $invalidProperties[] = "invalid value for 'changeTicketId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['changeTicketId']) && (mb_strlen($this->container['changeTicketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeTicketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeTicketIdSub']) && (mb_strlen($this->container['changeTicketIdSub']) > 100)) {
                $invalidProperties[] = "invalid value for 'changeTicketIdSub', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['changeTicketIdSub']) && (mb_strlen($this->container['changeTicketIdSub']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeTicketIdSub', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mainTicketId']) && (mb_strlen($this->container['mainTicketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'mainTicketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mainTicketId']) && (mb_strlen($this->container['mainTicketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'mainTicketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentTicketId']) && (mb_strlen($this->container['parentTicketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'parentTicketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['parentTicketId']) && (mb_strlen($this->container['parentTicketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'parentTicketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['realTicketId']) && (mb_strlen($this->container['realTicketId']) > 255)) {
                $invalidProperties[] = "invalid value for 'realTicketId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['realTicketId']) && (mb_strlen($this->container['realTicketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'realTicketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketPath']) && (mb_strlen($this->container['ticketPath']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketPath', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ticketPath']) && (mb_strlen($this->container['ticketPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetType']) && (mb_strlen($this->container['targetType']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetType']) && (mb_strlen($this->container['targetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 255)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
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
    * Gets changeTicketId
    *  变更单单号。
    *
    * @return string|null
    */
    public function getChangeTicketId()
    {
        return $this->container['changeTicketId'];
    }

    /**
    * Sets changeTicketId
    *
    * @param string|null $changeTicketId 变更单单号。
    *
    * @return $this
    */
    public function setChangeTicketId($changeTicketId)
    {
        $this->container['changeTicketId'] = $changeTicketId;
        return $this;
    }

    /**
    * Gets changeTicketIdSub
    *  变更子单单号。
    *
    * @return string|null
    */
    public function getChangeTicketIdSub()
    {
        return $this->container['changeTicketIdSub'];
    }

    /**
    * Sets changeTicketIdSub
    *
    * @param string|null $changeTicketIdSub 变更子单单号。
    *
    * @return $this
    */
    public function setChangeTicketIdSub($changeTicketIdSub)
    {
        $this->container['changeTicketIdSub'] = $changeTicketIdSub;
        return $this;
    }

    /**
    * Gets whetherToChange
    *  是否需要变更。
    *
    * @return bool|null
    */
    public function getWhetherToChange()
    {
        return $this->container['whetherToChange'];
    }

    /**
    * Sets whetherToChange
    *
    * @param bool|null $whetherToChange 是否需要变更。
    *
    * @return $this
    */
    public function setWhetherToChange($whetherToChange)
    {
        $this->container['whetherToChange'] = $whetherToChange;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否已删除。
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
    * @param bool|null $isDeleted 是否已删除。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets id
    *  变更工单ID
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
    * @param string|null $id 变更工单ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mainTicketId
    *  变更工单主键ID。
    *
    * @return string|null
    */
    public function getMainTicketId()
    {
        return $this->container['mainTicketId'];
    }

    /**
    * Sets mainTicketId
    *
    * @param string|null $mainTicketId 变更工单主键ID。
    *
    * @return $this
    */
    public function setMainTicketId($mainTicketId)
    {
        $this->container['mainTicketId'] = $mainTicketId;
        return $this;
    }

    /**
    * Gets parentTicketId
    *  父级工单ID。
    *
    * @return string|null
    */
    public function getParentTicketId()
    {
        return $this->container['parentTicketId'];
    }

    /**
    * Sets parentTicketId
    *
    * @param string|null $parentTicketId 父级工单ID。
    *
    * @return $this
    */
    public function setParentTicketId($parentTicketId)
    {
        $this->container['parentTicketId'] = $parentTicketId;
        return $this;
    }

    /**
    * Gets ticketId
    *  问题单ID。
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
    * @param string|null $ticketId 问题单ID。
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets realTicketId
    *  问题单单号。
    *
    * @return string|null
    */
    public function getRealTicketId()
    {
        return $this->container['realTicketId'];
    }

    /**
    * Sets realTicketId
    *
    * @param string|null $realTicketId 问题单单号。
    *
    * @return $this
    */
    public function setRealTicketId($realTicketId)
    {
        $this->container['realTicketId'] = $realTicketId;
        return $this;
    }

    /**
    * Gets ticketPath
    *  工单路径。
    *
    * @return string|null
    */
    public function getTicketPath()
    {
        return $this->container['ticketPath'];
    }

    /**
    * Sets ticketPath
    *
    * @param string|null $ticketPath 工单路径。
    *
    * @return $this
    */
    public function setTicketPath($ticketPath)
    {
        $this->container['ticketPath'] = $ticketPath;
        return $this;
    }

    /**
    * Gets targetValue
    *  region信息。
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue region信息。
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
        return $this;
    }

    /**
    * Gets targetType
    *  子单类型。
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 子单类型。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
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
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets creator
    *  创单人。
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
    * @param string|null $creator 创单人。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets operator
    *  操作人。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作人。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
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

