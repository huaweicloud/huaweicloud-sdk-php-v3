<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoveAlarmWhiteListRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoveAlarmWhiteListRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataList  **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    * restoreAlarm  **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    * deleteAll  **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\AlarmWhiteListRequestInfo[]',
            'restoreAlarm' => 'bool',
            'deleteAll' => 'bool',
            'eventType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataList  **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    * restoreAlarm  **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    * deleteAll  **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataList' => null,
        'restoreAlarm' => null,
        'deleteAll' => null,
        'eventType' => 'int32'
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
    * dataList  **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    * restoreAlarm  **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    * deleteAll  **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataList' => 'data_list',
            'restoreAlarm' => 'restore_alarm',
            'deleteAll' => 'delete_all',
            'eventType' => 'event_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataList  **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    * restoreAlarm  **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    * deleteAll  **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @var string[]
    */
    protected static $setters = [
            'dataList' => 'setDataList',
            'restoreAlarm' => 'setRestoreAlarm',
            'deleteAll' => 'setDeleteAll',
            'eventType' => 'setEventType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataList  **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    * restoreAlarm  **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    * deleteAll  **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @var string[]
    */
    protected static $getters = [
            'dataList' => 'getDataList',
            'restoreAlarm' => 'getRestoreAlarm',
            'deleteAll' => 'getDeleteAll',
            'eventType' => 'getEventType'
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
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['restoreAlarm'] = isset($data['restoreAlarm']) ? $data['restoreAlarm'] : null;
        $this->container['deleteAll'] = isset($data['deleteAll']) ? $data['deleteAll'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
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
    * Gets dataList
    *  **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AlarmWhiteListRequestInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AlarmWhiteListRequestInfo[]|null $dataList **参数解释** : \"删除告警白名单详情\" 删除条件以data_list优先： 1、删除具体某些白名单时，data_list必需，delete_all可以不填。（data_list内hash、description、event_type必需，确定要删除白名单规则时delete_white_rule必须为true） 2、删除所有白名单时（delete_all 必须为true），data_list一定不要传。 **约束限制** : 不涉及 **取值范围** : 最小值0，最大值100 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets restoreAlarm
    *  **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    *
    * @return bool|null
    */
    public function getRestoreAlarm()
    {
        return $this->container['restoreAlarm'];
    }

    /**
    * Sets restoreAlarm
    *
    * @param bool|null $restoreAlarm **参数解释**: 是否需要恢复相关告警 **约束限制**: 不涉及 **取值范围**: - true ：恢复告警 - false ：不恢复告警  **默认取值**: false
    *
    * @return $this
    */
    public function setRestoreAlarm($restoreAlarm)
    {
        $this->container['restoreAlarm'] = $restoreAlarm;
        return $this;
    }

    /**
    * Gets deleteAll
    *  **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    *
    * @return bool|null
    */
    public function getDeleteAll()
    {
        return $this->container['deleteAll'];
    }

    /**
    * Sets deleteAll
    *
    * @param bool|null $deleteAll **参数解释**: 是否删除所有白名单内容 1、删除所有白名单时，必须填。删除所有某种类型白名单时，请同时填写event_type参数 2、删除具体某些白名单时，请填写data_list。 **约束限制**: 不涉及 **取值范围**: - true ：删除所有白名单内容 - false ：不删除所有白名单内容  **默认取值**: false
    *
    * @return $this
    */
    public function setDeleteAll($deleteAll)
    {
        $this->container['deleteAll'] = $deleteAll;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @return int|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int|null $eventType **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
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

