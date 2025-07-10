<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocUpdateChangeRequestBodyV2SubTickets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocUpdateChangeRequestBodyV2_sub_tickets';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketId  子单ID
    * changeResult  变更结果
    * isVerifiedInChangeTime  在时间窗内是否可验证
    * verifiedDocs  文档ID
    * comment  失败原因描述
    * changeFailType  变更失败类型
    * rollbackStartTime  回退开始时间
    * rollbackEndTime  回退结束时间
    * isRollbackSuccess  是否回退成功
    * isMonitorFound  是否监控发现
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketId' => 'string',
            'changeResult' => 'string',
            'isVerifiedInChangeTime' => 'bool',
            'verifiedDocs' => 'string',
            'comment' => 'string',
            'changeFailType' => 'string',
            'rollbackStartTime' => 'int',
            'rollbackEndTime' => 'int',
            'isRollbackSuccess' => 'bool',
            'isMonitorFound' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketId  子单ID
    * changeResult  变更结果
    * isVerifiedInChangeTime  在时间窗内是否可验证
    * verifiedDocs  文档ID
    * comment  失败原因描述
    * changeFailType  变更失败类型
    * rollbackStartTime  回退开始时间
    * rollbackEndTime  回退结束时间
    * isRollbackSuccess  是否回退成功
    * isMonitorFound  是否监控发现
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketId' => null,
        'changeResult' => null,
        'isVerifiedInChangeTime' => null,
        'verifiedDocs' => null,
        'comment' => null,
        'changeFailType' => null,
        'rollbackStartTime' => 'int64',
        'rollbackEndTime' => 'int64',
        'isRollbackSuccess' => null,
        'isMonitorFound' => null
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
    * ticketId  子单ID
    * changeResult  变更结果
    * isVerifiedInChangeTime  在时间窗内是否可验证
    * verifiedDocs  文档ID
    * comment  失败原因描述
    * changeFailType  变更失败类型
    * rollbackStartTime  回退开始时间
    * rollbackEndTime  回退结束时间
    * isRollbackSuccess  是否回退成功
    * isMonitorFound  是否监控发现
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketId' => 'ticket_id',
            'changeResult' => 'change_result',
            'isVerifiedInChangeTime' => 'is_verified_in_change_time',
            'verifiedDocs' => 'verified_docs',
            'comment' => 'comment',
            'changeFailType' => 'change_fail_type',
            'rollbackStartTime' => 'rollback_start_time',
            'rollbackEndTime' => 'rollback_end_time',
            'isRollbackSuccess' => 'is_rollback_success',
            'isMonitorFound' => 'is_monitor_found'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketId  子单ID
    * changeResult  变更结果
    * isVerifiedInChangeTime  在时间窗内是否可验证
    * verifiedDocs  文档ID
    * comment  失败原因描述
    * changeFailType  变更失败类型
    * rollbackStartTime  回退开始时间
    * rollbackEndTime  回退结束时间
    * isRollbackSuccess  是否回退成功
    * isMonitorFound  是否监控发现
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketId' => 'setTicketId',
            'changeResult' => 'setChangeResult',
            'isVerifiedInChangeTime' => 'setIsVerifiedInChangeTime',
            'verifiedDocs' => 'setVerifiedDocs',
            'comment' => 'setComment',
            'changeFailType' => 'setChangeFailType',
            'rollbackStartTime' => 'setRollbackStartTime',
            'rollbackEndTime' => 'setRollbackEndTime',
            'isRollbackSuccess' => 'setIsRollbackSuccess',
            'isMonitorFound' => 'setIsMonitorFound'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketId  子单ID
    * changeResult  变更结果
    * isVerifiedInChangeTime  在时间窗内是否可验证
    * verifiedDocs  文档ID
    * comment  失败原因描述
    * changeFailType  变更失败类型
    * rollbackStartTime  回退开始时间
    * rollbackEndTime  回退结束时间
    * isRollbackSuccess  是否回退成功
    * isMonitorFound  是否监控发现
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketId' => 'getTicketId',
            'changeResult' => 'getChangeResult',
            'isVerifiedInChangeTime' => 'getIsVerifiedInChangeTime',
            'verifiedDocs' => 'getVerifiedDocs',
            'comment' => 'getComment',
            'changeFailType' => 'getChangeFailType',
            'rollbackStartTime' => 'getRollbackStartTime',
            'rollbackEndTime' => 'getRollbackEndTime',
            'isRollbackSuccess' => 'getIsRollbackSuccess',
            'isMonitorFound' => 'getIsMonitorFound'
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
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['changeResult'] = isset($data['changeResult']) ? $data['changeResult'] : null;
        $this->container['isVerifiedInChangeTime'] = isset($data['isVerifiedInChangeTime']) ? $data['isVerifiedInChangeTime'] : null;
        $this->container['verifiedDocs'] = isset($data['verifiedDocs']) ? $data['verifiedDocs'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['changeFailType'] = isset($data['changeFailType']) ? $data['changeFailType'] : null;
        $this->container['rollbackStartTime'] = isset($data['rollbackStartTime']) ? $data['rollbackStartTime'] : null;
        $this->container['rollbackEndTime'] = isset($data['rollbackEndTime']) ? $data['rollbackEndTime'] : null;
        $this->container['isRollbackSuccess'] = isset($data['isRollbackSuccess']) ? $data['isRollbackSuccess'] : null;
        $this->container['isMonitorFound'] = isset($data['isMonitorFound']) ? $data['isMonitorFound'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 100)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeResult']) && (mb_strlen($this->container['changeResult']) > 100)) {
                $invalidProperties[] = "invalid value for 'changeResult', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['changeResult']) && (mb_strlen($this->container['changeResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['verifiedDocs']) && (mb_strlen($this->container['verifiedDocs']) > 1000)) {
                $invalidProperties[] = "invalid value for 'verifiedDocs', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['verifiedDocs']) && (mb_strlen($this->container['verifiedDocs']) < 0)) {
                $invalidProperties[] = "invalid value for 'verifiedDocs', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 10000)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 0)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeFailType']) && (mb_strlen($this->container['changeFailType']) > 100)) {
                $invalidProperties[] = "invalid value for 'changeFailType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['changeFailType']) && (mb_strlen($this->container['changeFailType']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeFailType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rollbackStartTime']) && ($this->container['rollbackStartTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'rollbackStartTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['rollbackStartTime']) && ($this->container['rollbackStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'rollbackStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rollbackEndTime']) && ($this->container['rollbackEndTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'rollbackEndTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['rollbackEndTime']) && ($this->container['rollbackEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'rollbackEndTime', must be bigger than or equal to 0.";
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
    * Gets ticketId
    *  子单ID
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
    * @param string|null $ticketId 子单ID
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets changeResult
    *  变更结果
    *
    * @return string|null
    */
    public function getChangeResult()
    {
        return $this->container['changeResult'];
    }

    /**
    * Sets changeResult
    *
    * @param string|null $changeResult 变更结果
    *
    * @return $this
    */
    public function setChangeResult($changeResult)
    {
        $this->container['changeResult'] = $changeResult;
        return $this;
    }

    /**
    * Gets isVerifiedInChangeTime
    *  在时间窗内是否可验证
    *
    * @return bool|null
    */
    public function getIsVerifiedInChangeTime()
    {
        return $this->container['isVerifiedInChangeTime'];
    }

    /**
    * Sets isVerifiedInChangeTime
    *
    * @param bool|null $isVerifiedInChangeTime 在时间窗内是否可验证
    *
    * @return $this
    */
    public function setIsVerifiedInChangeTime($isVerifiedInChangeTime)
    {
        $this->container['isVerifiedInChangeTime'] = $isVerifiedInChangeTime;
        return $this;
    }

    /**
    * Gets verifiedDocs
    *  文档ID
    *
    * @return string|null
    */
    public function getVerifiedDocs()
    {
        return $this->container['verifiedDocs'];
    }

    /**
    * Sets verifiedDocs
    *
    * @param string|null $verifiedDocs 文档ID
    *
    * @return $this
    */
    public function setVerifiedDocs($verifiedDocs)
    {
        $this->container['verifiedDocs'] = $verifiedDocs;
        return $this;
    }

    /**
    * Gets comment
    *  失败原因描述
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 失败原因描述
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets changeFailType
    *  变更失败类型
    *
    * @return string|null
    */
    public function getChangeFailType()
    {
        return $this->container['changeFailType'];
    }

    /**
    * Sets changeFailType
    *
    * @param string|null $changeFailType 变更失败类型
    *
    * @return $this
    */
    public function setChangeFailType($changeFailType)
    {
        $this->container['changeFailType'] = $changeFailType;
        return $this;
    }

    /**
    * Gets rollbackStartTime
    *  回退开始时间
    *
    * @return int|null
    */
    public function getRollbackStartTime()
    {
        return $this->container['rollbackStartTime'];
    }

    /**
    * Sets rollbackStartTime
    *
    * @param int|null $rollbackStartTime 回退开始时间
    *
    * @return $this
    */
    public function setRollbackStartTime($rollbackStartTime)
    {
        $this->container['rollbackStartTime'] = $rollbackStartTime;
        return $this;
    }

    /**
    * Gets rollbackEndTime
    *  回退结束时间
    *
    * @return int|null
    */
    public function getRollbackEndTime()
    {
        return $this->container['rollbackEndTime'];
    }

    /**
    * Sets rollbackEndTime
    *
    * @param int|null $rollbackEndTime 回退结束时间
    *
    * @return $this
    */
    public function setRollbackEndTime($rollbackEndTime)
    {
        $this->container['rollbackEndTime'] = $rollbackEndTime;
        return $this;
    }

    /**
    * Gets isRollbackSuccess
    *  是否回退成功
    *
    * @return bool|null
    */
    public function getIsRollbackSuccess()
    {
        return $this->container['isRollbackSuccess'];
    }

    /**
    * Sets isRollbackSuccess
    *
    * @param bool|null $isRollbackSuccess 是否回退成功
    *
    * @return $this
    */
    public function setIsRollbackSuccess($isRollbackSuccess)
    {
        $this->container['isRollbackSuccess'] = $isRollbackSuccess;
        return $this;
    }

    /**
    * Gets isMonitorFound
    *  是否监控发现
    *
    * @return bool|null
    */
    public function getIsMonitorFound()
    {
        return $this->container['isMonitorFound'];
    }

    /**
    * Sets isMonitorFound
    *
    * @param bool|null $isMonitorFound 是否监控发现
    *
    * @return $this
    */
    public function setIsMonitorFound($isMonitorFound)
    {
        $this->container['isMonitorFound'] = $isMonitorFound;
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

