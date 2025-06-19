<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MsgInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MsgInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertChannels  告警渠道
    * alertGroups  告警分组
    * alertLevel  告警级别
    * alertNum  总告警次数
    * alertTime  告警时间
    * alertType  告警类型
    * content  告警内容
    * id  MsgInfo的id
    * link  链接
    * locationNames  执行机区域
    * sendAlertType  发送告警类型
    * subTaskCaseId  子任务用例id
    * subTaskCaseStartTime  子任务用例开始时间
    * subTaskId  子任务id
    * subTaskStartTime  子任务开始时间
    * taskId  任务id
    * taskName  任务名
    * testCaseId  用例id
    * testCaseName  用例名称
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertChannels' => 'string',
            'alertGroups' => 'string',
            'alertLevel' => 'int',
            'alertNum' => 'int',
            'alertTime' => '\DateTime',
            'alertType' => 'string',
            'content' => 'string',
            'id' => 'string',
            'link' => 'string',
            'locationNames' => 'string',
            'sendAlertType' => 'string',
            'subTaskCaseId' => 'string',
            'subTaskCaseStartTime' => '\DateTime',
            'subTaskId' => 'string',
            'subTaskStartTime' => '\DateTime',
            'taskId' => 'string',
            'taskName' => 'string',
            'testCaseId' => 'string',
            'testCaseName' => 'string',
            'testSuiteType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertChannels  告警渠道
    * alertGroups  告警分组
    * alertLevel  告警级别
    * alertNum  总告警次数
    * alertTime  告警时间
    * alertType  告警类型
    * content  告警内容
    * id  MsgInfo的id
    * link  链接
    * locationNames  执行机区域
    * sendAlertType  发送告警类型
    * subTaskCaseId  子任务用例id
    * subTaskCaseStartTime  子任务用例开始时间
    * subTaskId  子任务id
    * subTaskStartTime  子任务开始时间
    * taskId  任务id
    * taskName  任务名
    * testCaseId  用例id
    * testCaseName  用例名称
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertChannels' => null,
        'alertGroups' => null,
        'alertLevel' => 'int32',
        'alertNum' => 'int32',
        'alertTime' => 'date-time',
        'alertType' => null,
        'content' => null,
        'id' => null,
        'link' => null,
        'locationNames' => null,
        'sendAlertType' => null,
        'subTaskCaseId' => null,
        'subTaskCaseStartTime' => 'date-time',
        'subTaskId' => null,
        'subTaskStartTime' => 'date-time',
        'taskId' => null,
        'taskName' => null,
        'testCaseId' => null,
        'testCaseName' => null,
        'testSuiteType' => 'int32'
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
    * alertChannels  告警渠道
    * alertGroups  告警分组
    * alertLevel  告警级别
    * alertNum  总告警次数
    * alertTime  告警时间
    * alertType  告警类型
    * content  告警内容
    * id  MsgInfo的id
    * link  链接
    * locationNames  执行机区域
    * sendAlertType  发送告警类型
    * subTaskCaseId  子任务用例id
    * subTaskCaseStartTime  子任务用例开始时间
    * subTaskId  子任务id
    * subTaskStartTime  子任务开始时间
    * taskId  任务id
    * taskName  任务名
    * testCaseId  用例id
    * testCaseName  用例名称
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertChannels' => 'alert_channels',
            'alertGroups' => 'alert_groups',
            'alertLevel' => 'alert_level',
            'alertNum' => 'alert_num',
            'alertTime' => 'alert_time',
            'alertType' => 'alert_type',
            'content' => 'content',
            'id' => 'id',
            'link' => 'link',
            'locationNames' => 'location_names',
            'sendAlertType' => 'send_alert_type',
            'subTaskCaseId' => 'sub_task_case_id',
            'subTaskCaseStartTime' => 'sub_task_case_start_time',
            'subTaskId' => 'sub_task_id',
            'subTaskStartTime' => 'sub_task_start_time',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'testCaseId' => 'test_case_id',
            'testCaseName' => 'test_case_name',
            'testSuiteType' => 'test_suite_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertChannels  告警渠道
    * alertGroups  告警分组
    * alertLevel  告警级别
    * alertNum  总告警次数
    * alertTime  告警时间
    * alertType  告警类型
    * content  告警内容
    * id  MsgInfo的id
    * link  链接
    * locationNames  执行机区域
    * sendAlertType  发送告警类型
    * subTaskCaseId  子任务用例id
    * subTaskCaseStartTime  子任务用例开始时间
    * subTaskId  子任务id
    * subTaskStartTime  子任务开始时间
    * taskId  任务id
    * taskName  任务名
    * testCaseId  用例id
    * testCaseName  用例名称
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $setters = [
            'alertChannels' => 'setAlertChannels',
            'alertGroups' => 'setAlertGroups',
            'alertLevel' => 'setAlertLevel',
            'alertNum' => 'setAlertNum',
            'alertTime' => 'setAlertTime',
            'alertType' => 'setAlertType',
            'content' => 'setContent',
            'id' => 'setId',
            'link' => 'setLink',
            'locationNames' => 'setLocationNames',
            'sendAlertType' => 'setSendAlertType',
            'subTaskCaseId' => 'setSubTaskCaseId',
            'subTaskCaseStartTime' => 'setSubTaskCaseStartTime',
            'subTaskId' => 'setSubTaskId',
            'subTaskStartTime' => 'setSubTaskStartTime',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'testCaseId' => 'setTestCaseId',
            'testCaseName' => 'setTestCaseName',
            'testSuiteType' => 'setTestSuiteType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertChannels  告警渠道
    * alertGroups  告警分组
    * alertLevel  告警级别
    * alertNum  总告警次数
    * alertTime  告警时间
    * alertType  告警类型
    * content  告警内容
    * id  MsgInfo的id
    * link  链接
    * locationNames  执行机区域
    * sendAlertType  发送告警类型
    * subTaskCaseId  子任务用例id
    * subTaskCaseStartTime  子任务用例开始时间
    * subTaskId  子任务id
    * subTaskStartTime  子任务开始时间
    * taskId  任务id
    * taskName  任务名
    * testCaseId  用例id
    * testCaseName  用例名称
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $getters = [
            'alertChannels' => 'getAlertChannels',
            'alertGroups' => 'getAlertGroups',
            'alertLevel' => 'getAlertLevel',
            'alertNum' => 'getAlertNum',
            'alertTime' => 'getAlertTime',
            'alertType' => 'getAlertType',
            'content' => 'getContent',
            'id' => 'getId',
            'link' => 'getLink',
            'locationNames' => 'getLocationNames',
            'sendAlertType' => 'getSendAlertType',
            'subTaskCaseId' => 'getSubTaskCaseId',
            'subTaskCaseStartTime' => 'getSubTaskCaseStartTime',
            'subTaskId' => 'getSubTaskId',
            'subTaskStartTime' => 'getSubTaskStartTime',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'testCaseId' => 'getTestCaseId',
            'testCaseName' => 'getTestCaseName',
            'testSuiteType' => 'getTestSuiteType'
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
    const ALERT_TYPE__1 = '1';
    const ALERT_TYPE__10 = '10';
    const ALERT_TYPE__11 = '11';
    const ALERT_TYPE__12 = '12';
    const ALERT_TYPE__14 = '14';
    const ALERT_TYPE__16 = '16';
    const ALERT_TYPE__2 = '2';
    const ALERT_TYPE__3 = '3';
    const ALERT_TYPE__4 = '4';
    const ALERT_TYPE__5 = '5';
    const ALERT_TYPE__6 = '6';
    const ALERT_TYPE__7 = '7';
    const ALERT_TYPE__9 = '9';
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
    public function getAlertTypeAllowableValues()
    {
        return [
            self::ALERT_TYPE__1,
            self::ALERT_TYPE__10,
            self::ALERT_TYPE__11,
            self::ALERT_TYPE__12,
            self::ALERT_TYPE__14,
            self::ALERT_TYPE__16,
            self::ALERT_TYPE__2,
            self::ALERT_TYPE__3,
            self::ALERT_TYPE__4,
            self::ALERT_TYPE__5,
            self::ALERT_TYPE__6,
            self::ALERT_TYPE__7,
            self::ALERT_TYPE__9,
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
        $this->container['alertChannels'] = isset($data['alertChannels']) ? $data['alertChannels'] : null;
        $this->container['alertGroups'] = isset($data['alertGroups']) ? $data['alertGroups'] : null;
        $this->container['alertLevel'] = isset($data['alertLevel']) ? $data['alertLevel'] : null;
        $this->container['alertNum'] = isset($data['alertNum']) ? $data['alertNum'] : null;
        $this->container['alertTime'] = isset($data['alertTime']) ? $data['alertTime'] : null;
        $this->container['alertType'] = isset($data['alertType']) ? $data['alertType'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['locationNames'] = isset($data['locationNames']) ? $data['locationNames'] : null;
        $this->container['sendAlertType'] = isset($data['sendAlertType']) ? $data['sendAlertType'] : null;
        $this->container['subTaskCaseId'] = isset($data['subTaskCaseId']) ? $data['subTaskCaseId'] : null;
        $this->container['subTaskCaseStartTime'] = isset($data['subTaskCaseStartTime']) ? $data['subTaskCaseStartTime'] : null;
        $this->container['subTaskId'] = isset($data['subTaskId']) ? $data['subTaskId'] : null;
        $this->container['subTaskStartTime'] = isset($data['subTaskStartTime']) ? $data['subTaskStartTime'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['testCaseId'] = isset($data['testCaseId']) ? $data['testCaseId'] : null;
        $this->container['testCaseName'] = isset($data['testCaseName']) ? $data['testCaseName'] : null;
        $this->container['testSuiteType'] = isset($data['testSuiteType']) ? $data['testSuiteType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlertTypeAllowableValues();
                if (!is_null($this->container['alertType']) && !in_array($this->container['alertType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alertType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSendAlertTypeAllowableValues();
                if (!is_null($this->container['sendAlertType']) && !in_array($this->container['sendAlertType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sendAlertType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets alertChannels
    *  告警渠道
    *
    * @return string|null
    */
    public function getAlertChannels()
    {
        return $this->container['alertChannels'];
    }

    /**
    * Sets alertChannels
    *
    * @param string|null $alertChannels 告警渠道
    *
    * @return $this
    */
    public function setAlertChannels($alertChannels)
    {
        $this->container['alertChannels'] = $alertChannels;
        return $this;
    }

    /**
    * Gets alertGroups
    *  告警分组
    *
    * @return string|null
    */
    public function getAlertGroups()
    {
        return $this->container['alertGroups'];
    }

    /**
    * Sets alertGroups
    *
    * @param string|null $alertGroups 告警分组
    *
    * @return $this
    */
    public function setAlertGroups($alertGroups)
    {
        $this->container['alertGroups'] = $alertGroups;
        return $this;
    }

    /**
    * Gets alertLevel
    *  告警级别
    *
    * @return int|null
    */
    public function getAlertLevel()
    {
        return $this->container['alertLevel'];
    }

    /**
    * Sets alertLevel
    *
    * @param int|null $alertLevel 告警级别
    *
    * @return $this
    */
    public function setAlertLevel($alertLevel)
    {
        $this->container['alertLevel'] = $alertLevel;
        return $this;
    }

    /**
    * Gets alertNum
    *  总告警次数
    *
    * @return int|null
    */
    public function getAlertNum()
    {
        return $this->container['alertNum'];
    }

    /**
    * Sets alertNum
    *
    * @param int|null $alertNum 总告警次数
    *
    * @return $this
    */
    public function setAlertNum($alertNum)
    {
        $this->container['alertNum'] = $alertNum;
        return $this;
    }

    /**
    * Gets alertTime
    *  告警时间
    *
    * @return \DateTime|null
    */
    public function getAlertTime()
    {
        return $this->container['alertTime'];
    }

    /**
    * Sets alertTime
    *
    * @param \DateTime|null $alertTime 告警时间
    *
    * @return $this
    */
    public function setAlertTime($alertTime)
    {
        $this->container['alertTime'] = $alertTime;
        return $this;
    }

    /**
    * Gets alertType
    *  告警类型
    *
    * @return string|null
    */
    public function getAlertType()
    {
        return $this->container['alertType'];
    }

    /**
    * Sets alertType
    *
    * @param string|null $alertType 告警类型
    *
    * @return $this
    */
    public function setAlertType($alertType)
    {
        $this->container['alertType'] = $alertType;
        return $this;
    }

    /**
    * Gets content
    *  告警内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 告警内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets id
    *  MsgInfo的id
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
    * @param string|null $id MsgInfo的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets link
    *  链接
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link 链接
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets locationNames
    *  执行机区域
    *
    * @return string|null
    */
    public function getLocationNames()
    {
        return $this->container['locationNames'];
    }

    /**
    * Sets locationNames
    *
    * @param string|null $locationNames 执行机区域
    *
    * @return $this
    */
    public function setLocationNames($locationNames)
    {
        $this->container['locationNames'] = $locationNames;
        return $this;
    }

    /**
    * Gets sendAlertType
    *  发送告警类型
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
    * @param string|null $sendAlertType 发送告警类型
    *
    * @return $this
    */
    public function setSendAlertType($sendAlertType)
    {
        $this->container['sendAlertType'] = $sendAlertType;
        return $this;
    }

    /**
    * Gets subTaskCaseId
    *  子任务用例id
    *
    * @return string|null
    */
    public function getSubTaskCaseId()
    {
        return $this->container['subTaskCaseId'];
    }

    /**
    * Sets subTaskCaseId
    *
    * @param string|null $subTaskCaseId 子任务用例id
    *
    * @return $this
    */
    public function setSubTaskCaseId($subTaskCaseId)
    {
        $this->container['subTaskCaseId'] = $subTaskCaseId;
        return $this;
    }

    /**
    * Gets subTaskCaseStartTime
    *  子任务用例开始时间
    *
    * @return \DateTime|null
    */
    public function getSubTaskCaseStartTime()
    {
        return $this->container['subTaskCaseStartTime'];
    }

    /**
    * Sets subTaskCaseStartTime
    *
    * @param \DateTime|null $subTaskCaseStartTime 子任务用例开始时间
    *
    * @return $this
    */
    public function setSubTaskCaseStartTime($subTaskCaseStartTime)
    {
        $this->container['subTaskCaseStartTime'] = $subTaskCaseStartTime;
        return $this;
    }

    /**
    * Gets subTaskId
    *  子任务id
    *
    * @return string|null
    */
    public function getSubTaskId()
    {
        return $this->container['subTaskId'];
    }

    /**
    * Sets subTaskId
    *
    * @param string|null $subTaskId 子任务id
    *
    * @return $this
    */
    public function setSubTaskId($subTaskId)
    {
        $this->container['subTaskId'] = $subTaskId;
        return $this;
    }

    /**
    * Gets subTaskStartTime
    *  子任务开始时间
    *
    * @return \DateTime|null
    */
    public function getSubTaskStartTime()
    {
        return $this->container['subTaskStartTime'];
    }

    /**
    * Sets subTaskStartTime
    *
    * @param \DateTime|null $subTaskStartTime 子任务开始时间
    *
    * @return $this
    */
    public function setSubTaskStartTime($subTaskStartTime)
    {
        $this->container['subTaskStartTime'] = $subTaskStartTime;
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
    * Gets testCaseId
    *  用例id
    *
    * @return string|null
    */
    public function getTestCaseId()
    {
        return $this->container['testCaseId'];
    }

    /**
    * Sets testCaseId
    *
    * @param string|null $testCaseId 用例id
    *
    * @return $this
    */
    public function setTestCaseId($testCaseId)
    {
        $this->container['testCaseId'] = $testCaseId;
        return $this;
    }

    /**
    * Gets testCaseName
    *  用例名称
    *
    * @return string|null
    */
    public function getTestCaseName()
    {
        return $this->container['testCaseName'];
    }

    /**
    * Sets testCaseName
    *
    * @param string|null $testCaseName 用例名称
    *
    * @return $this
    */
    public function setTestCaseName($testCaseName)
    {
        $this->container['testCaseName'] = $testCaseName;
        return $this;
    }

    /**
    * Gets testSuiteType
    *  测试套类型
    *
    * @return int|null
    */
    public function getTestSuiteType()
    {
        return $this->container['testSuiteType'];
    }

    /**
    * Sets testSuiteType
    *
    * @param int|null $testSuiteType 测试套类型
    *
    * @return $this
    */
    public function setTestSuiteType($testSuiteType)
    {
        $this->container['testSuiteType'] = $testSuiteType;
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

