<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReportRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReportRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * title  邮件标题
    * to  收件人邮箱
    * cc  抄送人邮箱
    * content  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    * frequency  报告发送频率，daily，monthly，weekly
    * bindingWizard  报告页面内容
    * timezone  信息
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportName' => 'string',
            'reportPeriod' => 'string',
            'reportRange' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CreateReportRequestBodyReportRange',
            'language' => 'string',
            'notificationTask' => 'string',
            'layoutId' => 'string',
            'title' => 'string',
            'to' => 'string',
            'cc' => 'string',
            'content' => 'string',
            'reportFileType' => 'string',
            'frequency' => 'string',
            'bindingWizard' => 'string',
            'timezone' => 'string',
            'reportRuleInfos' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequest[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * title  邮件标题
    * to  收件人邮箱
    * cc  抄送人邮箱
    * content  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    * frequency  报告发送频率，daily，monthly，weekly
    * bindingWizard  报告页面内容
    * timezone  信息
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportName' => null,
        'reportPeriod' => null,
        'reportRange' => null,
        'language' => null,
        'notificationTask' => null,
        'layoutId' => null,
        'title' => null,
        'to' => null,
        'cc' => null,
        'content' => null,
        'reportFileType' => null,
        'frequency' => null,
        'bindingWizard' => null,
        'timezone' => null,
        'reportRuleInfos' => null
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
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * title  邮件标题
    * to  收件人邮箱
    * cc  抄送人邮箱
    * content  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    * frequency  报告发送频率，daily，monthly，weekly
    * bindingWizard  报告页面内容
    * timezone  信息
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportName' => 'report_name',
            'reportPeriod' => 'report_period',
            'reportRange' => 'report_range',
            'language' => 'language',
            'notificationTask' => 'notification_task',
            'layoutId' => 'layout_id',
            'title' => 'title',
            'to' => 'to',
            'cc' => 'cc',
            'content' => 'content',
            'reportFileType' => 'report_file_type',
            'frequency' => 'frequency',
            'bindingWizard' => 'binding_wizard',
            'timezone' => 'timezone',
            'reportRuleInfos' => 'report_rule_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * title  邮件标题
    * to  收件人邮箱
    * cc  抄送人邮箱
    * content  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    * frequency  报告发送频率，daily，monthly，weekly
    * bindingWizard  报告页面内容
    * timezone  信息
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $setters = [
            'reportName' => 'setReportName',
            'reportPeriod' => 'setReportPeriod',
            'reportRange' => 'setReportRange',
            'language' => 'setLanguage',
            'notificationTask' => 'setNotificationTask',
            'layoutId' => 'setLayoutId',
            'title' => 'setTitle',
            'to' => 'setTo',
            'cc' => 'setCc',
            'content' => 'setContent',
            'reportFileType' => 'setReportFileType',
            'frequency' => 'setFrequency',
            'bindingWizard' => 'setBindingWizard',
            'timezone' => 'setTimezone',
            'reportRuleInfos' => 'setReportRuleInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportName  报告名称
    * reportPeriod  报告周期 weekly, daily, annual, monthly
    * reportRange  reportRange
    * language  语言
    * notificationTask  通知任务id
    * layoutId  布局id
    * title  邮件标题
    * to  收件人邮箱
    * cc  抄送人邮箱
    * content  邮件内容
    * reportFileType  报告类型，支持图片、pdf、html
    * frequency  报告发送频率，daily，monthly，weekly
    * bindingWizard  报告页面内容
    * timezone  信息
    * reportRuleInfos  报告发送规则
    *
    * @var string[]
    */
    protected static $getters = [
            'reportName' => 'getReportName',
            'reportPeriod' => 'getReportPeriod',
            'reportRange' => 'getReportRange',
            'language' => 'getLanguage',
            'notificationTask' => 'getNotificationTask',
            'layoutId' => 'getLayoutId',
            'title' => 'getTitle',
            'to' => 'getTo',
            'cc' => 'getCc',
            'content' => 'getContent',
            'reportFileType' => 'getReportFileType',
            'frequency' => 'getFrequency',
            'bindingWizard' => 'getBindingWizard',
            'timezone' => 'getTimezone',
            'reportRuleInfos' => 'getReportRuleInfos'
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
    const REPORT_PERIOD_WEEKLY = 'weekly';
    const REPORT_PERIOD_DAILY = 'daily';
    const REPORT_PERIOD_ANNUAL = 'annual';
    const REPORT_PERIOD_MONTHLY = 'monthly';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReportPeriodAllowableValues()
    {
        return [
            self::REPORT_PERIOD_WEEKLY,
            self::REPORT_PERIOD_DAILY,
            self::REPORT_PERIOD_ANNUAL,
            self::REPORT_PERIOD_MONTHLY,
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
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportPeriod'] = isset($data['reportPeriod']) ? $data['reportPeriod'] : null;
        $this->container['reportRange'] = isset($data['reportRange']) ? $data['reportRange'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['notificationTask'] = isset($data['notificationTask']) ? $data['notificationTask'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['reportFileType'] = isset($data['reportFileType']) ? $data['reportFileType'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['bindingWizard'] = isset($data['bindingWizard']) ? $data['bindingWizard'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['reportRuleInfos'] = isset($data['reportRuleInfos']) ? $data['reportRuleInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reportName'] === null) {
            $invalidProperties[] = "'reportName' can't be null";
        }
            if ((mb_strlen($this->container['reportName']) > 256)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['reportName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['reportPeriod'] === null) {
            $invalidProperties[] = "'reportPeriod' can't be null";
        }
            $allowedValues = $this->getReportPeriodAllowableValues();
                if (!is_null($this->container['reportPeriod']) && !in_array($this->container['reportPeriod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reportPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reportRange'] === null) {
            $invalidProperties[] = "'reportRange' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 16)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationTask']) && !preg_match("/[a-f0-9]{32}/", $this->container['notificationTask'])) {
                $invalidProperties[] = "invalid value for 'notificationTask', must be conform to the pattern /[a-f0-9]{32}/.";
            }
        if ($this->container['layoutId'] === null) {
            $invalidProperties[] = "'layoutId' can't be null";
        }
            if ((mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['layoutId']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) > 256)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) < 1)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cc']) && (mb_strlen($this->container['cc']) > 256)) {
                $invalidProperties[] = "invalid value for 'cc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cc']) && (mb_strlen($this->container['cc']) < 1)) {
                $invalidProperties[] = "invalid value for 'cc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 256)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reportFileType']) && (mb_strlen($this->container['reportFileType']) > 256)) {
                $invalidProperties[] = "invalid value for 'reportFileType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reportFileType']) && (mb_strlen($this->container['reportFileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportFileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['frequency']) && (mb_strlen($this->container['frequency']) > 256)) {
                $invalidProperties[] = "invalid value for 'frequency', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['frequency']) && (mb_strlen($this->container['frequency']) < 1)) {
                $invalidProperties[] = "invalid value for 'frequency', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bindingWizard'] === null) {
            $invalidProperties[] = "'bindingWizard' can't be null";
        }
            if ((mb_strlen($this->container['bindingWizard']) > 65566000)) {
                $invalidProperties[] = "invalid value for 'bindingWizard', the character length must be smaller than or equal to 65566000.";
            }
            if ((mb_strlen($this->container['bindingWizard']) < 1)) {
                $invalidProperties[] = "invalid value for 'bindingWizard', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) > 256)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) < 1)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 1.";
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
    * Gets reportName
    *  报告名称
    *
    * @return string
    */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
    * Sets reportName
    *
    * @param string $reportName 报告名称
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets reportPeriod
    *  报告周期 weekly, daily, annual, monthly
    *
    * @return string
    */
    public function getReportPeriod()
    {
        return $this->container['reportPeriod'];
    }

    /**
    * Sets reportPeriod
    *
    * @param string $reportPeriod 报告周期 weekly, daily, annual, monthly
    *
    * @return $this
    */
    public function setReportPeriod($reportPeriod)
    {
        $this->container['reportPeriod'] = $reportPeriod;
        return $this;
    }

    /**
    * Gets reportRange
    *  reportRange
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CreateReportRequestBodyReportRange
    */
    public function getReportRange()
    {
        return $this->container['reportRange'];
    }

    /**
    * Sets reportRange
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CreateReportRequestBodyReportRange $reportRange reportRange
    *
    * @return $this
    */
    public function setReportRange($reportRange)
    {
        $this->container['reportRange'] = $reportRange;
        return $this;
    }

    /**
    * Gets language
    *  语言
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets notificationTask
    *  通知任务id
    *
    * @return string|null
    */
    public function getNotificationTask()
    {
        return $this->container['notificationTask'];
    }

    /**
    * Sets notificationTask
    *
    * @param string|null $notificationTask 通知任务id
    *
    * @return $this
    */
    public function setNotificationTask($notificationTask)
    {
        $this->container['notificationTask'] = $notificationTask;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局id
    *
    * @return string
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string $layoutId 布局id
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
        return $this;
    }

    /**
    * Gets title
    *  邮件标题
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
    * @param string|null $title 邮件标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets to
    *  收件人邮箱
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to 收件人邮箱
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets cc
    *  抄送人邮箱
    *
    * @return string|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param string|null $cc 抄送人邮箱
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets content
    *  邮件内容
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
    * @param string|null $content 邮件内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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
    * Gets frequency
    *  报告发送频率，daily，monthly，weekly
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency 报告发送频率，daily，monthly，weekly
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets bindingWizard
    *  报告页面内容
    *
    * @return string
    */
    public function getBindingWizard()
    {
        return $this->container['bindingWizard'];
    }

    /**
    * Sets bindingWizard
    *
    * @param string $bindingWizard 报告页面内容
    *
    * @return $this
    */
    public function setBindingWizard($bindingWizard)
    {
        $this->container['bindingWizard'] = $bindingWizard;
        return $this;
    }

    /**
    * Gets timezone
    *  信息
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 信息
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets reportRuleInfos
    *  报告发送规则
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequest[]|null
    */
    public function getReportRuleInfos()
    {
        return $this->container['reportRuleInfos'];
    }

    /**
    * Sets reportRuleInfos
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequest[]|null $reportRuleInfos 报告发送规则
    *
    * @return $this
    */
    public function setReportRuleInfos($reportRuleInfos)
    {
        $this->container['reportRuleInfos'] = $reportRuleInfos;
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

