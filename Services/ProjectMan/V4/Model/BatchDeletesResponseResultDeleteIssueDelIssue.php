<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeletesResponseResultDeleteIssueDelIssue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeletesResponse_result_delete_issue_del_issue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * trackerId  **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    * subject  **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
    * statusId  **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    * actualWorkHours  **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    * deleted  **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    * isArchived  **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'trackerId' => 'int',
            'subject' => 'string',
            'statusId' => 'int',
            'doneRatio' => 'int',
            'expectedWorkHours' => 'int',
            'actualWorkHours' => 'int',
            'deleted' => 'bool',
            'isArchived' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * trackerId  **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    * subject  **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
    * statusId  **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    * actualWorkHours  **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    * deleted  **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    * isArchived  **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'trackerId' => 'int32',
        'subject' => null,
        'statusId' => 'int32',
        'doneRatio' => 'int32',
        'expectedWorkHours' => 'int32',
        'actualWorkHours' => 'int32',
        'deleted' => null,
        'isArchived' => null
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
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * trackerId  **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    * subject  **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
    * statusId  **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    * actualWorkHours  **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    * deleted  **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    * isArchived  **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'trackerId' => 'tracker_id',
            'subject' => 'subject',
            'statusId' => 'status_id',
            'doneRatio' => 'done_ratio',
            'expectedWorkHours' => 'expected_work_hours',
            'actualWorkHours' => 'actual_work_hours',
            'deleted' => 'deleted',
            'isArchived' => 'is_archived'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * trackerId  **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    * subject  **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
    * statusId  **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    * actualWorkHours  **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    * deleted  **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    * isArchived  **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'trackerId' => 'setTrackerId',
            'subject' => 'setSubject',
            'statusId' => 'setStatusId',
            'doneRatio' => 'setDoneRatio',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'actualWorkHours' => 'setActualWorkHours',
            'deleted' => 'setDeleted',
            'isArchived' => 'setIsArchived'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * trackerId  **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    * subject  **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
    * statusId  **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    * actualWorkHours  **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    * deleted  **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    * isArchived  **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'trackerId' => 'getTrackerId',
            'subject' => 'getSubject',
            'statusId' => 'getStatusId',
            'doneRatio' => 'getDoneRatio',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'actualWorkHours' => 'getActualWorkHours',
            'deleted' => 'getDeleted',
            'isArchived' => 'getIsArchived'
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
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['actualWorkHours'] = isset($data['actualWorkHours']) ? $data['actualWorkHours'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['isArchived'] = isset($data['isArchived']) ? $data['isArchived'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  **参数解释：** 工作项id。 **取值范围：** 不涉及。
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
    * @param int|null $id **参数解释：** 工作项id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets trackerId
    *  **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    *
    * @return int|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int|null $trackerId **参数解释：** 工作项类型。 **取值范围：** 2（任务/Task） 3（缺陷/Bug） 5（Epic） 6（Feature） 7（Story）
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
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
    * @param string|null $subject **参数解释：** 工作项名称 。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets statusId
    *  **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param int|null $statusId **参数解释：** 工作项状态id 。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets doneRatio
    *  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDoneRatio()
    {
        return $this->container['doneRatio'];
    }

    /**
    * Sets doneRatio
    *
    * @param int|null $doneRatio **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDoneRatio($doneRatio)
    {
        $this->container['doneRatio'] = $doneRatio;
        return $this;
    }

    /**
    * Gets expectedWorkHours
    *  **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getExpectedWorkHours()
    {
        return $this->container['expectedWorkHours'];
    }

    /**
    * Sets expectedWorkHours
    *
    * @param int|null $expectedWorkHours **参数解释：** 预计工时(单位：人时)。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExpectedWorkHours($expectedWorkHours)
    {
        $this->container['expectedWorkHours'] = $expectedWorkHours;
        return $this;
    }

    /**
    * Gets actualWorkHours
    *  **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getActualWorkHours()
    {
        return $this->container['actualWorkHours'];
    }

    /**
    * Sets actualWorkHours
    *
    * @param int|null $actualWorkHours **参数解释：** 实际工时(单位：人时)。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setActualWorkHours($actualWorkHours)
    {
        $this->container['actualWorkHours'] = $actualWorkHours;
        return $this;
    }

    /**
    * Gets deleted
    *  **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted **参数解释：** 是否完成删除。 **取值范围：** 0（未删除） 1（已删除）
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets isArchived
    *  **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @return bool|null
    */
    public function getIsArchived()
    {
        return $this->container['isArchived'];
    }

    /**
    * Sets isArchived
    *
    * @param bool|null $isArchived **参数解释：** 是否归档。 **取值范围：** 0（未归档） 1（已归档）
    *
    * @return $this
    */
    public function setIsArchived($isArchived)
    {
        $this->container['isArchived'] = $isArchived;
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

