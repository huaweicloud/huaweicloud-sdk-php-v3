<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertConfigVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertConfigVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertExpression  告警表达式
    * alertPeriodBegin  告警区间，开始时间
    * alertPeriodEnd  告警区间，开始时间
    * blockAlert  blockAlert
    * defaultAlertTemplate  defaultAlertTemplate
    * enable  告警开启 0关闭 1开启
    * errorAlert  errorAlert
    * failedAlert  failedAlert
    * recoverNoticeEnable  告警恢复通知开关 0关闭 1开启
    * restrainAlertEnable  告警收敛开关 0关闭 1开启
    * resumeAlertNum  智能告警 成功多少次后发送恢复告警
    * resumeAlertTime  智能告警 指定时间后发送恢复告警
    * timeoutAlert  timeoutAlert
    * timeoutAlertV4  timeoutAlertV4
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertExpression' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertExpression[]',
            'alertPeriodBegin' => 'string',
            'alertPeriodEnd' => 'string',
            'blockAlert' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BlockAlert',
            'defaultAlertTemplate' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate',
            'enable' => 'string',
            'errorAlert' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ErrorAlert',
            'failedAlert' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\FailedAlert',
            'recoverNoticeEnable' => 'string',
            'restrainAlertEnable' => 'string',
            'resumeAlertNum' => 'int',
            'resumeAlertTime' => 'string',
            'timeoutAlert' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TimeoutAlert',
            'timeoutAlertV4' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TimeoutAlert'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertExpression  告警表达式
    * alertPeriodBegin  告警区间，开始时间
    * alertPeriodEnd  告警区间，开始时间
    * blockAlert  blockAlert
    * defaultAlertTemplate  defaultAlertTemplate
    * enable  告警开启 0关闭 1开启
    * errorAlert  errorAlert
    * failedAlert  failedAlert
    * recoverNoticeEnable  告警恢复通知开关 0关闭 1开启
    * restrainAlertEnable  告警收敛开关 0关闭 1开启
    * resumeAlertNum  智能告警 成功多少次后发送恢复告警
    * resumeAlertTime  智能告警 指定时间后发送恢复告警
    * timeoutAlert  timeoutAlert
    * timeoutAlertV4  timeoutAlertV4
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertExpression' => null,
        'alertPeriodBegin' => null,
        'alertPeriodEnd' => null,
        'blockAlert' => null,
        'defaultAlertTemplate' => null,
        'enable' => null,
        'errorAlert' => null,
        'failedAlert' => null,
        'recoverNoticeEnable' => null,
        'restrainAlertEnable' => null,
        'resumeAlertNum' => 'int32',
        'resumeAlertTime' => null,
        'timeoutAlert' => null,
        'timeoutAlertV4' => null
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
    * alertExpression  告警表达式
    * alertPeriodBegin  告警区间，开始时间
    * alertPeriodEnd  告警区间，开始时间
    * blockAlert  blockAlert
    * defaultAlertTemplate  defaultAlertTemplate
    * enable  告警开启 0关闭 1开启
    * errorAlert  errorAlert
    * failedAlert  failedAlert
    * recoverNoticeEnable  告警恢复通知开关 0关闭 1开启
    * restrainAlertEnable  告警收敛开关 0关闭 1开启
    * resumeAlertNum  智能告警 成功多少次后发送恢复告警
    * resumeAlertTime  智能告警 指定时间后发送恢复告警
    * timeoutAlert  timeoutAlert
    * timeoutAlertV4  timeoutAlertV4
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertExpression' => 'alert_expression',
            'alertPeriodBegin' => 'alertPeriodBegin',
            'alertPeriodEnd' => 'alertPeriodEnd',
            'blockAlert' => 'blockAlert',
            'defaultAlertTemplate' => 'defaultAlertTemplate',
            'enable' => 'enable',
            'errorAlert' => 'errorAlert',
            'failedAlert' => 'failedAlert',
            'recoverNoticeEnable' => 'recoverNoticeEnable',
            'restrainAlertEnable' => 'restrainAlertEnable',
            'resumeAlertNum' => 'resume_alert_num',
            'resumeAlertTime' => 'resumeAlertTime',
            'timeoutAlert' => 'timeoutAlert',
            'timeoutAlertV4' => 'timeoutAlertV4'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertExpression  告警表达式
    * alertPeriodBegin  告警区间，开始时间
    * alertPeriodEnd  告警区间，开始时间
    * blockAlert  blockAlert
    * defaultAlertTemplate  defaultAlertTemplate
    * enable  告警开启 0关闭 1开启
    * errorAlert  errorAlert
    * failedAlert  failedAlert
    * recoverNoticeEnable  告警恢复通知开关 0关闭 1开启
    * restrainAlertEnable  告警收敛开关 0关闭 1开启
    * resumeAlertNum  智能告警 成功多少次后发送恢复告警
    * resumeAlertTime  智能告警 指定时间后发送恢复告警
    * timeoutAlert  timeoutAlert
    * timeoutAlertV4  timeoutAlertV4
    *
    * @var string[]
    */
    protected static $setters = [
            'alertExpression' => 'setAlertExpression',
            'alertPeriodBegin' => 'setAlertPeriodBegin',
            'alertPeriodEnd' => 'setAlertPeriodEnd',
            'blockAlert' => 'setBlockAlert',
            'defaultAlertTemplate' => 'setDefaultAlertTemplate',
            'enable' => 'setEnable',
            'errorAlert' => 'setErrorAlert',
            'failedAlert' => 'setFailedAlert',
            'recoverNoticeEnable' => 'setRecoverNoticeEnable',
            'restrainAlertEnable' => 'setRestrainAlertEnable',
            'resumeAlertNum' => 'setResumeAlertNum',
            'resumeAlertTime' => 'setResumeAlertTime',
            'timeoutAlert' => 'setTimeoutAlert',
            'timeoutAlertV4' => 'setTimeoutAlertV4'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertExpression  告警表达式
    * alertPeriodBegin  告警区间，开始时间
    * alertPeriodEnd  告警区间，开始时间
    * blockAlert  blockAlert
    * defaultAlertTemplate  defaultAlertTemplate
    * enable  告警开启 0关闭 1开启
    * errorAlert  errorAlert
    * failedAlert  failedAlert
    * recoverNoticeEnable  告警恢复通知开关 0关闭 1开启
    * restrainAlertEnable  告警收敛开关 0关闭 1开启
    * resumeAlertNum  智能告警 成功多少次后发送恢复告警
    * resumeAlertTime  智能告警 指定时间后发送恢复告警
    * timeoutAlert  timeoutAlert
    * timeoutAlertV4  timeoutAlertV4
    *
    * @var string[]
    */
    protected static $getters = [
            'alertExpression' => 'getAlertExpression',
            'alertPeriodBegin' => 'getAlertPeriodBegin',
            'alertPeriodEnd' => 'getAlertPeriodEnd',
            'blockAlert' => 'getBlockAlert',
            'defaultAlertTemplate' => 'getDefaultAlertTemplate',
            'enable' => 'getEnable',
            'errorAlert' => 'getErrorAlert',
            'failedAlert' => 'getFailedAlert',
            'recoverNoticeEnable' => 'getRecoverNoticeEnable',
            'restrainAlertEnable' => 'getRestrainAlertEnable',
            'resumeAlertNum' => 'getResumeAlertNum',
            'resumeAlertTime' => 'getResumeAlertTime',
            'timeoutAlert' => 'getTimeoutAlert',
            'timeoutAlertV4' => 'getTimeoutAlertV4'
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
        $this->container['alertExpression'] = isset($data['alertExpression']) ? $data['alertExpression'] : null;
        $this->container['alertPeriodBegin'] = isset($data['alertPeriodBegin']) ? $data['alertPeriodBegin'] : null;
        $this->container['alertPeriodEnd'] = isset($data['alertPeriodEnd']) ? $data['alertPeriodEnd'] : null;
        $this->container['blockAlert'] = isset($data['blockAlert']) ? $data['blockAlert'] : null;
        $this->container['defaultAlertTemplate'] = isset($data['defaultAlertTemplate']) ? $data['defaultAlertTemplate'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['errorAlert'] = isset($data['errorAlert']) ? $data['errorAlert'] : null;
        $this->container['failedAlert'] = isset($data['failedAlert']) ? $data['failedAlert'] : null;
        $this->container['recoverNoticeEnable'] = isset($data['recoverNoticeEnable']) ? $data['recoverNoticeEnable'] : null;
        $this->container['restrainAlertEnable'] = isset($data['restrainAlertEnable']) ? $data['restrainAlertEnable'] : null;
        $this->container['resumeAlertNum'] = isset($data['resumeAlertNum']) ? $data['resumeAlertNum'] : null;
        $this->container['resumeAlertTime'] = isset($data['resumeAlertTime']) ? $data['resumeAlertTime'] : null;
        $this->container['timeoutAlert'] = isset($data['timeoutAlert']) ? $data['timeoutAlert'] : null;
        $this->container['timeoutAlertV4'] = isset($data['timeoutAlertV4']) ? $data['timeoutAlertV4'] : null;
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
    * Gets alertExpression
    *  告警表达式
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertExpression[]|null
    */
    public function getAlertExpression()
    {
        return $this->container['alertExpression'];
    }

    /**
    * Sets alertExpression
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertExpression[]|null $alertExpression 告警表达式
    *
    * @return $this
    */
    public function setAlertExpression($alertExpression)
    {
        $this->container['alertExpression'] = $alertExpression;
        return $this;
    }

    /**
    * Gets alertPeriodBegin
    *  告警区间，开始时间
    *
    * @return string|null
    */
    public function getAlertPeriodBegin()
    {
        return $this->container['alertPeriodBegin'];
    }

    /**
    * Sets alertPeriodBegin
    *
    * @param string|null $alertPeriodBegin 告警区间，开始时间
    *
    * @return $this
    */
    public function setAlertPeriodBegin($alertPeriodBegin)
    {
        $this->container['alertPeriodBegin'] = $alertPeriodBegin;
        return $this;
    }

    /**
    * Gets alertPeriodEnd
    *  告警区间，开始时间
    *
    * @return string|null
    */
    public function getAlertPeriodEnd()
    {
        return $this->container['alertPeriodEnd'];
    }

    /**
    * Sets alertPeriodEnd
    *
    * @param string|null $alertPeriodEnd 告警区间，开始时间
    *
    * @return $this
    */
    public function setAlertPeriodEnd($alertPeriodEnd)
    {
        $this->container['alertPeriodEnd'] = $alertPeriodEnd;
        return $this;
    }

    /**
    * Gets blockAlert
    *  blockAlert
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BlockAlert|null
    */
    public function getBlockAlert()
    {
        return $this->container['blockAlert'];
    }

    /**
    * Sets blockAlert
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BlockAlert|null $blockAlert blockAlert
    *
    * @return $this
    */
    public function setBlockAlert($blockAlert)
    {
        $this->container['blockAlert'] = $blockAlert;
        return $this;
    }

    /**
    * Gets defaultAlertTemplate
    *  defaultAlertTemplate
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate|null
    */
    public function getDefaultAlertTemplate()
    {
        return $this->container['defaultAlertTemplate'];
    }

    /**
    * Sets defaultAlertTemplate
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertTemplate|null $defaultAlertTemplate defaultAlertTemplate
    *
    * @return $this
    */
    public function setDefaultAlertTemplate($defaultAlertTemplate)
    {
        $this->container['defaultAlertTemplate'] = $defaultAlertTemplate;
        return $this;
    }

    /**
    * Gets enable
    *  告警开启 0关闭 1开启
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 告警开启 0关闭 1开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets errorAlert
    *  errorAlert
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ErrorAlert|null
    */
    public function getErrorAlert()
    {
        return $this->container['errorAlert'];
    }

    /**
    * Sets errorAlert
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ErrorAlert|null $errorAlert errorAlert
    *
    * @return $this
    */
    public function setErrorAlert($errorAlert)
    {
        $this->container['errorAlert'] = $errorAlert;
        return $this;
    }

    /**
    * Gets failedAlert
    *  failedAlert
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\FailedAlert|null
    */
    public function getFailedAlert()
    {
        return $this->container['failedAlert'];
    }

    /**
    * Sets failedAlert
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\FailedAlert|null $failedAlert failedAlert
    *
    * @return $this
    */
    public function setFailedAlert($failedAlert)
    {
        $this->container['failedAlert'] = $failedAlert;
        return $this;
    }

    /**
    * Gets recoverNoticeEnable
    *  告警恢复通知开关 0关闭 1开启
    *
    * @return string|null
    */
    public function getRecoverNoticeEnable()
    {
        return $this->container['recoverNoticeEnable'];
    }

    /**
    * Sets recoverNoticeEnable
    *
    * @param string|null $recoverNoticeEnable 告警恢复通知开关 0关闭 1开启
    *
    * @return $this
    */
    public function setRecoverNoticeEnable($recoverNoticeEnable)
    {
        $this->container['recoverNoticeEnable'] = $recoverNoticeEnable;
        return $this;
    }

    /**
    * Gets restrainAlertEnable
    *  告警收敛开关 0关闭 1开启
    *
    * @return string|null
    */
    public function getRestrainAlertEnable()
    {
        return $this->container['restrainAlertEnable'];
    }

    /**
    * Sets restrainAlertEnable
    *
    * @param string|null $restrainAlertEnable 告警收敛开关 0关闭 1开启
    *
    * @return $this
    */
    public function setRestrainAlertEnable($restrainAlertEnable)
    {
        $this->container['restrainAlertEnable'] = $restrainAlertEnable;
        return $this;
    }

    /**
    * Gets resumeAlertNum
    *  智能告警 成功多少次后发送恢复告警
    *
    * @return int|null
    */
    public function getResumeAlertNum()
    {
        return $this->container['resumeAlertNum'];
    }

    /**
    * Sets resumeAlertNum
    *
    * @param int|null $resumeAlertNum 智能告警 成功多少次后发送恢复告警
    *
    * @return $this
    */
    public function setResumeAlertNum($resumeAlertNum)
    {
        $this->container['resumeAlertNum'] = $resumeAlertNum;
        return $this;
    }

    /**
    * Gets resumeAlertTime
    *  智能告警 指定时间后发送恢复告警
    *
    * @return string|null
    */
    public function getResumeAlertTime()
    {
        return $this->container['resumeAlertTime'];
    }

    /**
    * Sets resumeAlertTime
    *
    * @param string|null $resumeAlertTime 智能告警 指定时间后发送恢复告警
    *
    * @return $this
    */
    public function setResumeAlertTime($resumeAlertTime)
    {
        $this->container['resumeAlertTime'] = $resumeAlertTime;
        return $this;
    }

    /**
    * Gets timeoutAlert
    *  timeoutAlert
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TimeoutAlert|null
    */
    public function getTimeoutAlert()
    {
        return $this->container['timeoutAlert'];
    }

    /**
    * Sets timeoutAlert
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TimeoutAlert|null $timeoutAlert timeoutAlert
    *
    * @return $this
    */
    public function setTimeoutAlert($timeoutAlert)
    {
        $this->container['timeoutAlert'] = $timeoutAlert;
        return $this;
    }

    /**
    * Gets timeoutAlertV4
    *  timeoutAlertV4
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TimeoutAlert|null
    */
    public function getTimeoutAlertV4()
    {
        return $this->container['timeoutAlertV4'];
    }

    /**
    * Sets timeoutAlertV4
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TimeoutAlert|null $timeoutAlertV4 timeoutAlertV4
    *
    * @return $this
    */
    public function setTimeoutAlertV4($timeoutAlertV4)
    {
        $this->container['timeoutAlertV4'] = $timeoutAlertV4;
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

