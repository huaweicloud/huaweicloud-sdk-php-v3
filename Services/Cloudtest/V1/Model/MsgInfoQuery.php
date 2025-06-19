<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MsgInfoQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MsgInfoQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertTypes  告警类型
    * caseId  用例id
    * caseName  用例名
    * endTime  结束时间
    * pageNum  页码
    * pageSize  分页大小
    * sendAlertType  发送类型
    * startTime  开始时间
    * taskId  任务id
    * taskName  任务名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertTypes' => 'string[]',
            'caseId' => 'string',
            'caseName' => 'string',
            'endTime' => 'int',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'sendAlertType' => 'string',
            'startTime' => 'int',
            'taskId' => 'string',
            'taskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertTypes  告警类型
    * caseId  用例id
    * caseName  用例名
    * endTime  结束时间
    * pageNum  页码
    * pageSize  分页大小
    * sendAlertType  发送类型
    * startTime  开始时间
    * taskId  任务id
    * taskName  任务名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertTypes' => null,
        'caseId' => null,
        'caseName' => null,
        'endTime' => 'int64',
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'sendAlertType' => null,
        'startTime' => 'int64',
        'taskId' => null,
        'taskName' => null
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
    * alertTypes  告警类型
    * caseId  用例id
    * caseName  用例名
    * endTime  结束时间
    * pageNum  页码
    * pageSize  分页大小
    * sendAlertType  发送类型
    * startTime  开始时间
    * taskId  任务id
    * taskName  任务名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertTypes' => 'alert_types',
            'caseId' => 'case_id',
            'caseName' => 'case_name',
            'endTime' => 'end_time',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'sendAlertType' => 'send_alert_type',
            'startTime' => 'start_time',
            'taskId' => 'task_id',
            'taskName' => 'task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertTypes  告警类型
    * caseId  用例id
    * caseName  用例名
    * endTime  结束时间
    * pageNum  页码
    * pageSize  分页大小
    * sendAlertType  发送类型
    * startTime  开始时间
    * taskId  任务id
    * taskName  任务名
    *
    * @var string[]
    */
    protected static $setters = [
            'alertTypes' => 'setAlertTypes',
            'caseId' => 'setCaseId',
            'caseName' => 'setCaseName',
            'endTime' => 'setEndTime',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'sendAlertType' => 'setSendAlertType',
            'startTime' => 'setStartTime',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertTypes  告警类型
    * caseId  用例id
    * caseName  用例名
    * endTime  结束时间
    * pageNum  页码
    * pageSize  分页大小
    * sendAlertType  发送类型
    * startTime  开始时间
    * taskId  任务id
    * taskName  任务名
    *
    * @var string[]
    */
    protected static $getters = [
            'alertTypes' => 'getAlertTypes',
            'caseId' => 'getCaseId',
            'caseName' => 'getCaseName',
            'endTime' => 'getEndTime',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'sendAlertType' => 'getSendAlertType',
            'startTime' => 'getStartTime',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName'
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
    const ALERT_TYPES__1 = '1';
    const ALERT_TYPES__10 = '10';
    const ALERT_TYPES__11 = '11';
    const ALERT_TYPES__12 = '12';
    const ALERT_TYPES__14 = '14';
    const ALERT_TYPES__16 = '16';
    const ALERT_TYPES__2 = '2';
    const ALERT_TYPES__3 = '3';
    const ALERT_TYPES__4 = '4';
    const ALERT_TYPES__5 = '5';
    const ALERT_TYPES__6 = '6';
    const ALERT_TYPES__7 = '7';
    const ALERT_TYPES__9 = '9';
    const SEND_ALERT_TYPE_LEVEL_ALERT = 'LEVEL_ALERT';
    const SEND_ALERT_TYPE_OPERATION_NOTICE = 'OPERATION_NOTICE';
    const SEND_ALERT_TYPE_RECOVER_ALERT = 'RECOVER_ALERT';
    const SEND_ALERT_TYPE_RESTRAINING = 'RESTRAINING';
    const SEND_ALERT_TYPE_RESTRAIN_ALERT = 'RESTRAIN_ALERT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlertTypesAllowableValues()
    {
        return [
            self::ALERT_TYPES__1,
            self::ALERT_TYPES__10,
            self::ALERT_TYPES__11,
            self::ALERT_TYPES__12,
            self::ALERT_TYPES__14,
            self::ALERT_TYPES__16,
            self::ALERT_TYPES__2,
            self::ALERT_TYPES__3,
            self::ALERT_TYPES__4,
            self::ALERT_TYPES__5,
            self::ALERT_TYPES__6,
            self::ALERT_TYPES__7,
            self::ALERT_TYPES__9,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSendAlertTypeAllowableValues()
    {
        return [
            self::SEND_ALERT_TYPE_LEVEL_ALERT,
            self::SEND_ALERT_TYPE_OPERATION_NOTICE,
            self::SEND_ALERT_TYPE_RECOVER_ALERT,
            self::SEND_ALERT_TYPE_RESTRAINING,
            self::SEND_ALERT_TYPE_RESTRAIN_ALERT,
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
        $this->container['alertTypes'] = isset($data['alertTypes']) ? $data['alertTypes'] : null;
        $this->container['caseId'] = isset($data['caseId']) ? $data['caseId'] : null;
        $this->container['caseName'] = isset($data['caseName']) ? $data['caseName'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sendAlertType'] = isset($data['sendAlertType']) ? $data['sendAlertType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSendAlertTypeAllowableValues();
                if (!is_null($this->container['sendAlertType']) && !in_array($this->container['sendAlertType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sendAlertType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 200)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 0.";
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
    * Gets alertTypes
    *  告警类型
    *
    * @return string[]|null
    */
    public function getAlertTypes()
    {
        return $this->container['alertTypes'];
    }

    /**
    * Sets alertTypes
    *
    * @param string[]|null $alertTypes 告警类型
    *
    * @return $this
    */
    public function setAlertTypes($alertTypes)
    {
        $this->container['alertTypes'] = $alertTypes;
        return $this;
    }

    /**
    * Gets caseId
    *  用例id
    *
    * @return string|null
    */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
    * Sets caseId
    *
    * @param string|null $caseId 用例id
    *
    * @return $this
    */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;
        return $this;
    }

    /**
    * Gets caseName
    *  用例名
    *
    * @return string|null
    */
    public function getCaseName()
    {
        return $this->container['caseName'];
    }

    /**
    * Sets caseName
    *
    * @param string|null $caseName 用例名
    *
    * @return $this
    */
    public function setCaseName($caseName)
    {
        $this->container['caseName'] = $caseName;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pageNum
    *  页码
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 页码
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页大小
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 分页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets sendAlertType
    *  发送类型
    *
    * @return string|null
    */
    public function getSendAlertType()
    {
        return $this->container['sendAlertType'];
    }

    /**
    * Sets sendAlertType
    *
    * @param string|null $sendAlertType 发送类型
    *
    * @return $this
    */
    public function setSendAlertType($sendAlertType)
    {
        $this->container['sendAlertType'] = $sendAlertType;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
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

