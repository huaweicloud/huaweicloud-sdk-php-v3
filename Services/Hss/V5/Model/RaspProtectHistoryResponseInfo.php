<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RaspProtectHistoryResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RaspProtectHistoryResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  主机名称
    * privateIp  主机私有IP
    * alarmTime  告警时间(ms)
    * eventName  告警名称
    * severity  告警级别
    * reqSrcIp  源IP
    * appStack  应用程序调用堆栈信息
    * attackInputName  攻击附属字段
    * attackInputValue  攻击负载内容
    * queryString  查询字符串
    * reqHeaders  web请求头信息
    * reqMethod  WEB请求方法
    * reqParams  WEB请求参数
    * reqPath  WEB请求路径
    * reqProtocol  WEB请求协议
    * reqUrl  WEB请求URL地址
    * attackTag  攻击标识
    * chkProbe  探针标识
    * chkRule  检测规则标识
    * chkRuleDesc  规则描述
    * existBug  应用是否存在bug
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'privateIp' => 'string',
            'alarmTime' => 'int',
            'eventName' => 'string',
            'severity' => 'string',
            'reqSrcIp' => 'string',
            'appStack' => 'string',
            'attackInputName' => 'string',
            'attackInputValue' => 'string',
            'queryString' => 'string',
            'reqHeaders' => 'string',
            'reqMethod' => 'string',
            'reqParams' => 'string',
            'reqPath' => 'string',
            'reqProtocol' => 'string',
            'reqUrl' => 'string',
            'attackTag' => 'string',
            'chkProbe' => 'string',
            'chkRule' => 'string',
            'chkRuleDesc' => 'string',
            'existBug' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  主机名称
    * privateIp  主机私有IP
    * alarmTime  告警时间(ms)
    * eventName  告警名称
    * severity  告警级别
    * reqSrcIp  源IP
    * appStack  应用程序调用堆栈信息
    * attackInputName  攻击附属字段
    * attackInputValue  攻击负载内容
    * queryString  查询字符串
    * reqHeaders  web请求头信息
    * reqMethod  WEB请求方法
    * reqParams  WEB请求参数
    * reqPath  WEB请求路径
    * reqProtocol  WEB请求协议
    * reqUrl  WEB请求URL地址
    * attackTag  攻击标识
    * chkProbe  探针标识
    * chkRule  检测规则标识
    * chkRuleDesc  规则描述
    * existBug  应用是否存在bug
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'privateIp' => null,
        'alarmTime' => 'int64',
        'eventName' => null,
        'severity' => null,
        'reqSrcIp' => null,
        'appStack' => null,
        'attackInputName' => null,
        'attackInputValue' => null,
        'queryString' => null,
        'reqHeaders' => null,
        'reqMethod' => null,
        'reqParams' => null,
        'reqPath' => null,
        'reqProtocol' => null,
        'reqUrl' => null,
        'attackTag' => null,
        'chkProbe' => null,
        'chkRule' => null,
        'chkRuleDesc' => null,
        'existBug' => null
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
    * hostName  主机名称
    * privateIp  主机私有IP
    * alarmTime  告警时间(ms)
    * eventName  告警名称
    * severity  告警级别
    * reqSrcIp  源IP
    * appStack  应用程序调用堆栈信息
    * attackInputName  攻击附属字段
    * attackInputValue  攻击负载内容
    * queryString  查询字符串
    * reqHeaders  web请求头信息
    * reqMethod  WEB请求方法
    * reqParams  WEB请求参数
    * reqPath  WEB请求路径
    * reqProtocol  WEB请求协议
    * reqUrl  WEB请求URL地址
    * attackTag  攻击标识
    * chkProbe  探针标识
    * chkRule  检测规则标识
    * chkRuleDesc  规则描述
    * existBug  应用是否存在bug
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'alarmTime' => 'alarm_time',
            'eventName' => 'event_name',
            'severity' => 'severity',
            'reqSrcIp' => 'req_src_ip',
            'appStack' => 'app_stack',
            'attackInputName' => 'attack_input_name',
            'attackInputValue' => 'attack_input_value',
            'queryString' => 'query_string',
            'reqHeaders' => 'req_headers',
            'reqMethod' => 'req_method',
            'reqParams' => 'req_params',
            'reqPath' => 'req_path',
            'reqProtocol' => 'req_protocol',
            'reqUrl' => 'req_url',
            'attackTag' => 'attack_tag',
            'chkProbe' => 'chk_probe',
            'chkRule' => 'chk_rule',
            'chkRuleDesc' => 'chk_rule_desc',
            'existBug' => 'exist_bug'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  主机名称
    * privateIp  主机私有IP
    * alarmTime  告警时间(ms)
    * eventName  告警名称
    * severity  告警级别
    * reqSrcIp  源IP
    * appStack  应用程序调用堆栈信息
    * attackInputName  攻击附属字段
    * attackInputValue  攻击负载内容
    * queryString  查询字符串
    * reqHeaders  web请求头信息
    * reqMethod  WEB请求方法
    * reqParams  WEB请求参数
    * reqPath  WEB请求路径
    * reqProtocol  WEB请求协议
    * reqUrl  WEB请求URL地址
    * attackTag  攻击标识
    * chkProbe  探针标识
    * chkRule  检测规则标识
    * chkRuleDesc  规则描述
    * existBug  应用是否存在bug
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'alarmTime' => 'setAlarmTime',
            'eventName' => 'setEventName',
            'severity' => 'setSeverity',
            'reqSrcIp' => 'setReqSrcIp',
            'appStack' => 'setAppStack',
            'attackInputName' => 'setAttackInputName',
            'attackInputValue' => 'setAttackInputValue',
            'queryString' => 'setQueryString',
            'reqHeaders' => 'setReqHeaders',
            'reqMethod' => 'setReqMethod',
            'reqParams' => 'setReqParams',
            'reqPath' => 'setReqPath',
            'reqProtocol' => 'setReqProtocol',
            'reqUrl' => 'setReqUrl',
            'attackTag' => 'setAttackTag',
            'chkProbe' => 'setChkProbe',
            'chkRule' => 'setChkRule',
            'chkRuleDesc' => 'setChkRuleDesc',
            'existBug' => 'setExistBug'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  主机名称
    * privateIp  主机私有IP
    * alarmTime  告警时间(ms)
    * eventName  告警名称
    * severity  告警级别
    * reqSrcIp  源IP
    * appStack  应用程序调用堆栈信息
    * attackInputName  攻击附属字段
    * attackInputValue  攻击负载内容
    * queryString  查询字符串
    * reqHeaders  web请求头信息
    * reqMethod  WEB请求方法
    * reqParams  WEB请求参数
    * reqPath  WEB请求路径
    * reqProtocol  WEB请求协议
    * reqUrl  WEB请求URL地址
    * attackTag  攻击标识
    * chkProbe  探针标识
    * chkRule  检测规则标识
    * chkRuleDesc  规则描述
    * existBug  应用是否存在bug
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'alarmTime' => 'getAlarmTime',
            'eventName' => 'getEventName',
            'severity' => 'getSeverity',
            'reqSrcIp' => 'getReqSrcIp',
            'appStack' => 'getAppStack',
            'attackInputName' => 'getAttackInputName',
            'attackInputValue' => 'getAttackInputValue',
            'queryString' => 'getQueryString',
            'reqHeaders' => 'getReqHeaders',
            'reqMethod' => 'getReqMethod',
            'reqParams' => 'getReqParams',
            'reqPath' => 'getReqPath',
            'reqProtocol' => 'getReqProtocol',
            'reqUrl' => 'getReqUrl',
            'attackTag' => 'getAttackTag',
            'chkProbe' => 'getChkProbe',
            'chkRule' => 'getChkRule',
            'chkRuleDesc' => 'getChkRuleDesc',
            'existBug' => 'getExistBug'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['alarmTime'] = isset($data['alarmTime']) ? $data['alarmTime'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['reqSrcIp'] = isset($data['reqSrcIp']) ? $data['reqSrcIp'] : null;
        $this->container['appStack'] = isset($data['appStack']) ? $data['appStack'] : null;
        $this->container['attackInputName'] = isset($data['attackInputName']) ? $data['attackInputName'] : null;
        $this->container['attackInputValue'] = isset($data['attackInputValue']) ? $data['attackInputValue'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['reqHeaders'] = isset($data['reqHeaders']) ? $data['reqHeaders'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqParams'] = isset($data['reqParams']) ? $data['reqParams'] : null;
        $this->container['reqPath'] = isset($data['reqPath']) ? $data['reqPath'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqUrl'] = isset($data['reqUrl']) ? $data['reqUrl'] : null;
        $this->container['attackTag'] = isset($data['attackTag']) ? $data['attackTag'] : null;
        $this->container['chkProbe'] = isset($data['chkProbe']) ? $data['chkProbe'] : null;
        $this->container['chkRule'] = isset($data['chkRule']) ? $data['chkRule'] : null;
        $this->container['chkRuleDesc'] = isset($data['chkRuleDesc']) ? $data['chkRuleDesc'] : null;
        $this->container['existBug'] = isset($data['existBug']) ? $data['existBug'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmTime']) && ($this->container['alarmTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'alarmTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['alarmTime']) && ($this->container['alarmTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reqSrcIp']) && (mb_strlen($this->container['reqSrcIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'reqSrcIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reqSrcIp']) && (mb_strlen($this->container['reqSrcIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqSrcIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appStack']) && (mb_strlen($this->container['appStack']) > 2048)) {
                $invalidProperties[] = "invalid value for 'appStack', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['appStack']) && (mb_strlen($this->container['appStack']) < 0)) {
                $invalidProperties[] = "invalid value for 'appStack', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackInputName']) && (mb_strlen($this->container['attackInputName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'attackInputName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['attackInputName']) && (mb_strlen($this->container['attackInputName']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackInputName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackInputValue']) && (mb_strlen($this->container['attackInputValue']) > 2048)) {
                $invalidProperties[] = "invalid value for 'attackInputValue', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['attackInputValue']) && (mb_strlen($this->container['attackInputValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackInputValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queryString']) && (mb_strlen($this->container['queryString']) > 1024)) {
                $invalidProperties[] = "invalid value for 'queryString', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['queryString']) && (mb_strlen($this->container['queryString']) < 0)) {
                $invalidProperties[] = "invalid value for 'queryString', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqHeaders']) && (mb_strlen($this->container['reqHeaders']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reqHeaders', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reqHeaders']) && (mb_strlen($this->container['reqHeaders']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqHeaders', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqMethod']) && (mb_strlen($this->container['reqMethod']) > 32)) {
                $invalidProperties[] = "invalid value for 'reqMethod', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reqMethod']) && (mb_strlen($this->container['reqMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqMethod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqParams']) && (mb_strlen($this->container['reqParams']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reqParams', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reqParams']) && (mb_strlen($this->container['reqParams']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqParams', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqPath']) && (mb_strlen($this->container['reqPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'reqPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['reqPath']) && (mb_strlen($this->container['reqPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqProtocol']) && (mb_strlen($this->container['reqProtocol']) > 128)) {
                $invalidProperties[] = "invalid value for 'reqProtocol', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reqProtocol']) && (mb_strlen($this->container['reqProtocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqProtocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqUrl']) && (mb_strlen($this->container['reqUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reqUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reqUrl']) && (mb_strlen($this->container['reqUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) > 128)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chkProbe']) && (mb_strlen($this->container['chkProbe']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkProbe', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkProbe']) && (mb_strlen($this->container['chkProbe']) < 1)) {
                $invalidProperties[] = "invalid value for 'chkProbe', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chkRule']) && (mb_strlen($this->container['chkRule']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkRule', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkRule']) && (mb_strlen($this->container['chkRule']) < 1)) {
                $invalidProperties[] = "invalid value for 'chkRule', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chkRuleDesc']) && (mb_strlen($this->container['chkRuleDesc']) > 256)) {
                $invalidProperties[] = "invalid value for 'chkRuleDesc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['chkRuleDesc']) && (mb_strlen($this->container['chkRuleDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'chkRuleDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['existBug']) && (mb_strlen($this->container['existBug']) > 32)) {
                $invalidProperties[] = "invalid value for 'existBug', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['existBug']) && (mb_strlen($this->container['existBug']) < 1)) {
                $invalidProperties[] = "invalid value for 'existBug', the character length must be bigger than or equal to 1.";
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
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  主机私有IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 主机私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets alarmTime
    *  告警时间(ms)
    *
    * @return int|null
    */
    public function getAlarmTime()
    {
        return $this->container['alarmTime'];
    }

    /**
    * Sets alarmTime
    *
    * @param int|null $alarmTime 告警时间(ms)
    *
    * @return $this
    */
    public function setAlarmTime($alarmTime)
    {
        $this->container['alarmTime'] = $alarmTime;
        return $this;
    }

    /**
    * Gets eventName
    *  告警名称
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 告警名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets severity
    *  告警级别
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 告警级别
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets reqSrcIp
    *  源IP
    *
    * @return string|null
    */
    public function getReqSrcIp()
    {
        return $this->container['reqSrcIp'];
    }

    /**
    * Sets reqSrcIp
    *
    * @param string|null $reqSrcIp 源IP
    *
    * @return $this
    */
    public function setReqSrcIp($reqSrcIp)
    {
        $this->container['reqSrcIp'] = $reqSrcIp;
        return $this;
    }

    /**
    * Gets appStack
    *  应用程序调用堆栈信息
    *
    * @return string|null
    */
    public function getAppStack()
    {
        return $this->container['appStack'];
    }

    /**
    * Sets appStack
    *
    * @param string|null $appStack 应用程序调用堆栈信息
    *
    * @return $this
    */
    public function setAppStack($appStack)
    {
        $this->container['appStack'] = $appStack;
        return $this;
    }

    /**
    * Gets attackInputName
    *  攻击附属字段
    *
    * @return string|null
    */
    public function getAttackInputName()
    {
        return $this->container['attackInputName'];
    }

    /**
    * Sets attackInputName
    *
    * @param string|null $attackInputName 攻击附属字段
    *
    * @return $this
    */
    public function setAttackInputName($attackInputName)
    {
        $this->container['attackInputName'] = $attackInputName;
        return $this;
    }

    /**
    * Gets attackInputValue
    *  攻击负载内容
    *
    * @return string|null
    */
    public function getAttackInputValue()
    {
        return $this->container['attackInputValue'];
    }

    /**
    * Sets attackInputValue
    *
    * @param string|null $attackInputValue 攻击负载内容
    *
    * @return $this
    */
    public function setAttackInputValue($attackInputValue)
    {
        $this->container['attackInputValue'] = $attackInputValue;
        return $this;
    }

    /**
    * Gets queryString
    *  查询字符串
    *
    * @return string|null
    */
    public function getQueryString()
    {
        return $this->container['queryString'];
    }

    /**
    * Sets queryString
    *
    * @param string|null $queryString 查询字符串
    *
    * @return $this
    */
    public function setQueryString($queryString)
    {
        $this->container['queryString'] = $queryString;
        return $this;
    }

    /**
    * Gets reqHeaders
    *  web请求头信息
    *
    * @return string|null
    */
    public function getReqHeaders()
    {
        return $this->container['reqHeaders'];
    }

    /**
    * Sets reqHeaders
    *
    * @param string|null $reqHeaders web请求头信息
    *
    * @return $this
    */
    public function setReqHeaders($reqHeaders)
    {
        $this->container['reqHeaders'] = $reqHeaders;
        return $this;
    }

    /**
    * Gets reqMethod
    *  WEB请求方法
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod WEB请求方法
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqParams
    *  WEB请求参数
    *
    * @return string|null
    */
    public function getReqParams()
    {
        return $this->container['reqParams'];
    }

    /**
    * Sets reqParams
    *
    * @param string|null $reqParams WEB请求参数
    *
    * @return $this
    */
    public function setReqParams($reqParams)
    {
        $this->container['reqParams'] = $reqParams;
        return $this;
    }

    /**
    * Gets reqPath
    *  WEB请求路径
    *
    * @return string|null
    */
    public function getReqPath()
    {
        return $this->container['reqPath'];
    }

    /**
    * Sets reqPath
    *
    * @param string|null $reqPath WEB请求路径
    *
    * @return $this
    */
    public function setReqPath($reqPath)
    {
        $this->container['reqPath'] = $reqPath;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  WEB请求协议
    *
    * @return string|null
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string|null $reqProtocol WEB请求协议
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqUrl
    *  WEB请求URL地址
    *
    * @return string|null
    */
    public function getReqUrl()
    {
        return $this->container['reqUrl'];
    }

    /**
    * Sets reqUrl
    *
    * @param string|null $reqUrl WEB请求URL地址
    *
    * @return $this
    */
    public function setReqUrl($reqUrl)
    {
        $this->container['reqUrl'] = $reqUrl;
        return $this;
    }

    /**
    * Gets attackTag
    *  攻击标识
    *
    * @return string|null
    */
    public function getAttackTag()
    {
        return $this->container['attackTag'];
    }

    /**
    * Sets attackTag
    *
    * @param string|null $attackTag 攻击标识
    *
    * @return $this
    */
    public function setAttackTag($attackTag)
    {
        $this->container['attackTag'] = $attackTag;
        return $this;
    }

    /**
    * Gets chkProbe
    *  探针标识
    *
    * @return string|null
    */
    public function getChkProbe()
    {
        return $this->container['chkProbe'];
    }

    /**
    * Sets chkProbe
    *
    * @param string|null $chkProbe 探针标识
    *
    * @return $this
    */
    public function setChkProbe($chkProbe)
    {
        $this->container['chkProbe'] = $chkProbe;
        return $this;
    }

    /**
    * Gets chkRule
    *  检测规则标识
    *
    * @return string|null
    */
    public function getChkRule()
    {
        return $this->container['chkRule'];
    }

    /**
    * Sets chkRule
    *
    * @param string|null $chkRule 检测规则标识
    *
    * @return $this
    */
    public function setChkRule($chkRule)
    {
        $this->container['chkRule'] = $chkRule;
        return $this;
    }

    /**
    * Gets chkRuleDesc
    *  规则描述
    *
    * @return string|null
    */
    public function getChkRuleDesc()
    {
        return $this->container['chkRuleDesc'];
    }

    /**
    * Sets chkRuleDesc
    *
    * @param string|null $chkRuleDesc 规则描述
    *
    * @return $this
    */
    public function setChkRuleDesc($chkRuleDesc)
    {
        $this->container['chkRuleDesc'] = $chkRuleDesc;
        return $this;
    }

    /**
    * Gets existBug
    *  应用是否存在bug
    *
    * @return string|null
    */
    public function getExistBug()
    {
        return $this->container['existBug'];
    }

    /**
    * Sets existBug
    *
    * @param string|null $existBug 应用是否存在bug
    *
    * @return $this
    */
    public function setExistBug($existBug)
    {
        $this->container['existBug'] = $existBug;
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

