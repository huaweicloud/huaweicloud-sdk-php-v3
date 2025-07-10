<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityReportSubscriptionSummaryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityReportSubscriptionSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionId  **参数解释：** 订阅ID **取值范围：** 不涉及
    * reportId  **参数解释：** 报告ID **取值范围：** 不涉及
    * reportName  **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    * sendingPeriod  **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    * reportCategory  **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    * enterpriseProjectId  **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    * templateEpsId  **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    * isReportCreated  **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    * latestCreateTime  **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionId' => 'string',
            'reportId' => 'string',
            'reportName' => 'string',
            'sendingPeriod' => 'string',
            'reportCategory' => 'string',
            'reportStatus' => 'string',
            'isAllEnterpriseProject' => 'bool',
            'enterpriseProjectId' => 'string',
            'templateEpsId' => 'string',
            'isReportCreated' => 'bool',
            'latestCreateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionId  **参数解释：** 订阅ID **取值范围：** 不涉及
    * reportId  **参数解释：** 报告ID **取值范围：** 不涉及
    * reportName  **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    * sendingPeriod  **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    * reportCategory  **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    * enterpriseProjectId  **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    * templateEpsId  **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    * isReportCreated  **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    * latestCreateTime  **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionId' => null,
        'reportId' => null,
        'reportName' => null,
        'sendingPeriod' => null,
        'reportCategory' => null,
        'reportStatus' => null,
        'isAllEnterpriseProject' => null,
        'enterpriseProjectId' => null,
        'templateEpsId' => null,
        'isReportCreated' => null,
        'latestCreateTime' => 'int64'
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
    * subscriptionId  **参数解释：** 订阅ID **取值范围：** 不涉及
    * reportId  **参数解释：** 报告ID **取值范围：** 不涉及
    * reportName  **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    * sendingPeriod  **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    * reportCategory  **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    * enterpriseProjectId  **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    * templateEpsId  **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    * isReportCreated  **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    * latestCreateTime  **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionId' => 'subscription_id',
            'reportId' => 'report_id',
            'reportName' => 'report_name',
            'sendingPeriod' => 'sending_period',
            'reportCategory' => 'report_category',
            'reportStatus' => 'report_status',
            'isAllEnterpriseProject' => 'is_all_enterprise_project',
            'enterpriseProjectId' => 'enterprise_project_id',
            'templateEpsId' => 'template_eps_id',
            'isReportCreated' => 'is_report_created',
            'latestCreateTime' => 'latest_create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionId  **参数解释：** 订阅ID **取值范围：** 不涉及
    * reportId  **参数解释：** 报告ID **取值范围：** 不涉及
    * reportName  **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    * sendingPeriod  **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    * reportCategory  **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    * enterpriseProjectId  **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    * templateEpsId  **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    * isReportCreated  **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    * latestCreateTime  **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionId' => 'setSubscriptionId',
            'reportId' => 'setReportId',
            'reportName' => 'setReportName',
            'sendingPeriod' => 'setSendingPeriod',
            'reportCategory' => 'setReportCategory',
            'reportStatus' => 'setReportStatus',
            'isAllEnterpriseProject' => 'setIsAllEnterpriseProject',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'templateEpsId' => 'setTemplateEpsId',
            'isReportCreated' => 'setIsReportCreated',
            'latestCreateTime' => 'setLatestCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionId  **参数解释：** 订阅ID **取值范围：** 不涉及
    * reportId  **参数解释：** 报告ID **取值范围：** 不涉及
    * reportName  **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    * sendingPeriod  **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    * reportCategory  **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * reportStatus  **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    * enterpriseProjectId  **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    * templateEpsId  **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    * isReportCreated  **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    * latestCreateTime  **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionId' => 'getSubscriptionId',
            'reportId' => 'getReportId',
            'reportName' => 'getReportName',
            'sendingPeriod' => 'getSendingPeriod',
            'reportCategory' => 'getReportCategory',
            'reportStatus' => 'getReportStatus',
            'isAllEnterpriseProject' => 'getIsAllEnterpriseProject',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'templateEpsId' => 'getTemplateEpsId',
            'isReportCreated' => 'getIsReportCreated',
            'latestCreateTime' => 'getLatestCreateTime'
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
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['reportStatus'] = isset($data['reportStatus']) ? $data['reportStatus'] : null;
        $this->container['isAllEnterpriseProject'] = isset($data['isAllEnterpriseProject']) ? $data['isAllEnterpriseProject'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['templateEpsId'] = isset($data['templateEpsId']) ? $data['templateEpsId'] : null;
        $this->container['isReportCreated'] = isset($data['isReportCreated']) ? $data['isReportCreated'] : null;
        $this->container['latestCreateTime'] = isset($data['latestCreateTime']) ? $data['latestCreateTime'] : null;
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
    * Gets subscriptionId
    *  **参数解释：** 订阅ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId **参数解释：** 订阅ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets reportId
    *  **参数解释：** 报告ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释：** 报告ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets reportName
    *  **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    *
    * @return string|null
    */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
    * Sets reportName
    *
    * @param string|null $reportName **参数解释：** 报告模板名称 **取值范围：** 只能由中文、字母、数字和括号内所列符号（_-.:：）组成，且不能超过256个字符长度。
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets sendingPeriod
    *  **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    *
    * @return string|null
    */
    public function getSendingPeriod()
    {
        return $this->container['sendingPeriod'];
    }

    /**
    * Sets sendingPeriod
    *
    * @param string|null $sendingPeriod **参数解释：** 发送时间段 **取值范围：** - morning：00:00~06:00 - noon：06:00~12:00 - afternoon：12:00~18:00 - evening：18:00~24:00
    *
    * @return $this
    */
    public function setSendingPeriod($sendingPeriod)
    {
        $this->container['sendingPeriod'] = $sendingPeriod;
        return $this;
    }

    /**
    * Gets reportCategory
    *  **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    *
    * @return string|null
    */
    public function getReportCategory()
    {
        return $this->container['reportCategory'];
    }

    /**
    * Sets reportCategory
    *
    * @param string|null $reportCategory **参数解释：** 报告类型 **取值范围：** - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    *
    * @return $this
    */
    public function setReportCategory($reportCategory)
    {
        $this->container['reportCategory'] = $reportCategory;
        return $this;
    }

    /**
    * Gets reportStatus
    *  **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    *
    * @return string|null
    */
    public function getReportStatus()
    {
        return $this->container['reportStatus'];
    }

    /**
    * Sets reportStatus
    *
    * @param string|null $reportStatus **参数解释：** 开启状态 **取值范围：** - opened：已开启 - closed：已关闭
    *
    * @return $this
    */
    public function setReportStatus($reportStatus)
    {
        $this->container['reportStatus'] = $reportStatus;
        return $this;
    }

    /**
    * Gets isAllEnterpriseProject
    *  **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    *
    * @return bool|null
    */
    public function getIsAllEnterpriseProject()
    {
        return $this->container['isAllEnterpriseProject'];
    }

    /**
    * Sets isAllEnterpriseProject
    *
    * @param bool|null $isAllEnterpriseProject **参数解释：** 是否是所有企业项目 **取值范围：** - true：是所有企业项目 - false：不是所有企业项目
    *
    * @return $this
    */
    public function setIsAllEnterpriseProject($isAllEnterpriseProject)
    {
        $this->container['isAllEnterpriseProject'] = $isAllEnterpriseProject;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目ID，当前报告统计的企业项目范围 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets templateEpsId
    *  **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getTemplateEpsId()
    {
        return $this->container['templateEpsId'];
    }

    /**
    * Sets templateEpsId
    *
    * @param string|null $templateEpsId **参数解释：** 报告所属项目，生成的报告所归属的企业项目 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setTemplateEpsId($templateEpsId)
    {
        $this->container['templateEpsId'] = $templateEpsId;
        return $this;
    }

    /**
    * Gets isReportCreated
    *  **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    *
    * @return bool|null
    */
    public function getIsReportCreated()
    {
        return $this->container['isReportCreated'];
    }

    /**
    * Sets isReportCreated
    *
    * @param bool|null $isReportCreated **参数解释：** 报告生成状态 **取值范围：** - true：已生成 - false：暂未生成
    *
    * @return $this
    */
    public function setIsReportCreated($isReportCreated)
    {
        $this->container['isReportCreated'] = $isReportCreated;
        return $this;
    }

    /**
    * Gets latestCreateTime
    *  **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @return int|null
    */
    public function getLatestCreateTime()
    {
        return $this->container['latestCreateTime'];
    }

    /**
    * Sets latestCreateTime
    *
    * @param int|null $latestCreateTime **参数解释：** 报告生成时间 **取值范围：** 13位毫秒时间戳
    *
    * @return $this
    */
    public function setLatestCreateTime($latestCreateTime)
    {
        $this->container['latestCreateTime'] = $latestCreateTime;
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

