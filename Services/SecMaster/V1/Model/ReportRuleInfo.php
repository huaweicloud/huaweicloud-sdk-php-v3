<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  报告发送规则id
    * projectId  租户ID
    * workspaceId  工作空间ID
    * cycle  数据周期
    * rule  cron表达式
    * startTime  报告数据周期开始时间
    * endTime  报告数据周期结束时间
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailContent  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'cycle' => 'string',
            'rule' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'emailTitle' => 'string',
            'emailTo' => 'string',
            'emailContent' => 'string',
            'reportFileType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  报告发送规则id
    * projectId  租户ID
    * workspaceId  工作空间ID
    * cycle  数据周期
    * rule  cron表达式
    * startTime  报告数据周期开始时间
    * endTime  报告数据周期结束时间
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailContent  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'workspaceId' => null,
        'cycle' => null,
        'rule' => null,
        'startTime' => null,
        'endTime' => null,
        'emailTitle' => null,
        'emailTo' => null,
        'emailContent' => null,
        'reportFileType' => null
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
    * id  报告发送规则id
    * projectId  租户ID
    * workspaceId  工作空间ID
    * cycle  数据周期
    * rule  cron表达式
    * startTime  报告数据周期开始时间
    * endTime  报告数据周期结束时间
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailContent  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'cycle' => 'cycle',
            'rule' => 'rule',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'emailTitle' => 'email_title',
            'emailTo' => 'email_to',
            'emailContent' => 'email_content',
            'reportFileType' => 'report_file_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  报告发送规则id
    * projectId  租户ID
    * workspaceId  工作空间ID
    * cycle  数据周期
    * rule  cron表达式
    * startTime  报告数据周期开始时间
    * endTime  报告数据周期结束时间
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailContent  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'cycle' => 'setCycle',
            'rule' => 'setRule',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'emailTitle' => 'setEmailTitle',
            'emailTo' => 'setEmailTo',
            'emailContent' => 'setEmailContent',
            'reportFileType' => 'setReportFileType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  报告发送规则id
    * projectId  租户ID
    * workspaceId  工作空间ID
    * cycle  数据周期
    * rule  cron表达式
    * startTime  报告数据周期开始时间
    * endTime  报告数据周期结束时间
    * emailTitle  邮件标题
    * emailTo  收件人邮箱
    * emailContent  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'cycle' => 'getCycle',
            'rule' => 'getRule',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'emailTitle' => 'getEmailTitle',
            'emailTo' => 'getEmailTo',
            'emailContent' => 'getEmailContent',
            'reportFileType' => 'getReportFileType'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['emailTitle'] = isset($data['emailTitle']) ? $data['emailTitle'] : null;
        $this->container['emailTo'] = isset($data['emailTo']) ? $data['emailTo'] : null;
        $this->container['emailContent'] = isset($data['emailContent']) ? $data['emailContent'] : null;
        $this->container['reportFileType'] = isset($data['reportFileType']) ? $data['reportFileType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/[a-f0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-f0-9]{32}/.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cycle'] === null) {
            $invalidProperties[] = "'cycle' can't be null";
        }
            if ((mb_strlen($this->container['cycle']) > 256)) {
                $invalidProperties[] = "invalid value for 'cycle', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['cycle']) < 1)) {
                $invalidProperties[] = "invalid value for 'cycle', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['rule'] === null) {
            $invalidProperties[] = "'rule' can't be null";
        }
            if ((mb_strlen($this->container['rule']) > 256)) {
                $invalidProperties[] = "invalid value for 'rule', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['rule']) < 1)) {
                $invalidProperties[] = "invalid value for 'rule', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailTitle']) && (mb_strlen($this->container['emailTitle']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailTitle', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailTitle']) && (mb_strlen($this->container['emailTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailTitle', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailTo']) && (mb_strlen($this->container['emailTo']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailTo', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailTo']) && (mb_strlen($this->container['emailTo']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailTo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emailContent']) && (mb_strlen($this->container['emailContent']) > 256)) {
                $invalidProperties[] = "invalid value for 'emailContent', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['emailContent']) && (mb_strlen($this->container['emailContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'emailContent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reportFileType']) && (mb_strlen($this->container['reportFileType']) > 256)) {
                $invalidProperties[] = "invalid value for 'reportFileType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reportFileType']) && (mb_strlen($this->container['reportFileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportFileType', the character length must be bigger than or equal to 1.";
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
    *  报告发送规则id
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
    * @param string|null $id 报告发送规则id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  租户ID
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
    * @param string|null $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
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
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets cycle
    *  数据周期
    *
    * @return string
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string $cycle 数据周期
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets rule
    *  cron表达式
    *
    * @return string
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string $rule cron表达式
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets startTime
    *  报告数据周期开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 报告数据周期开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  报告数据周期结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 报告数据周期结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets emailTitle
    *  邮件标题
    *
    * @return string|null
    */
    public function getEmailTitle()
    {
        return $this->container['emailTitle'];
    }

    /**
    * Sets emailTitle
    *
    * @param string|null $emailTitle 邮件标题
    *
    * @return $this
    */
    public function setEmailTitle($emailTitle)
    {
        $this->container['emailTitle'] = $emailTitle;
        return $this;
    }

    /**
    * Gets emailTo
    *  收件人邮箱
    *
    * @return string|null
    */
    public function getEmailTo()
    {
        return $this->container['emailTo'];
    }

    /**
    * Sets emailTo
    *
    * @param string|null $emailTo 收件人邮箱
    *
    * @return $this
    */
    public function setEmailTo($emailTo)
    {
        $this->container['emailTo'] = $emailTo;
        return $this;
    }

    /**
    * Gets emailContent
    *  邮件内容
    *
    * @return string|null
    */
    public function getEmailContent()
    {
        return $this->container['emailContent'];
    }

    /**
    * Sets emailContent
    *
    * @param string|null $emailContent 邮件内容
    *
    * @return $this
    */
    public function setEmailContent($emailContent)
    {
        $this->container['emailContent'] = $emailContent;
        return $this;
    }

    /**
    * Gets reportFileType
    *  报告类型，支持图片、pdf、html
    *
    * @return string|null
    */
    public function getReportFileType()
    {
        return $this->container['reportFileType'];
    }

    /**
    * Sets reportFileType
    *
    * @param string|null $reportFileType 报告类型，支持图片、pdf、html
    *
    * @return $this
    */
    public function setReportFileType($reportFileType)
    {
        $this->container['reportFileType'] = $reportFileType;
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

