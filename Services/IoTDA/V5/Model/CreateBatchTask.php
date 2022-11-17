<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBatchTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBatchTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * taskName  **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    * taskType  **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    * targets  **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * targetsFilter  **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    * document  **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    * taskPolicy  taskPolicy
    * documentSource  **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'taskName' => 'string',
            'taskType' => 'string',
            'targets' => 'string[]',
            'targetsFilter' => 'map[string,object]',
            'document' => 'object',
            'taskPolicy' => '\HuaweiCloud\SDK\IoTDA\V5\Model\TaskPolicy',
            'documentSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * taskName  **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    * taskType  **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    * targets  **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * targetsFilter  **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    * document  **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    * taskPolicy  taskPolicy
    * documentSource  **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'taskName' => null,
        'taskType' => null,
        'targets' => null,
        'targetsFilter' => null,
        'document' => null,
        'taskPolicy' => null,
        'documentSource' => null
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
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * taskName  **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    * taskType  **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    * targets  **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * targetsFilter  **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    * document  **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    * taskPolicy  taskPolicy
    * documentSource  **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'taskName' => 'task_name',
            'taskType' => 'task_type',
            'targets' => 'targets',
            'targetsFilter' => 'targets_filter',
            'document' => 'document',
            'taskPolicy' => 'task_policy',
            'documentSource' => 'document_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * taskName  **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    * taskType  **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    * targets  **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * targetsFilter  **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    * document  **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    * taskPolicy  taskPolicy
    * documentSource  **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'taskName' => 'setTaskName',
            'taskType' => 'setTaskType',
            'targets' => 'setTargets',
            'targetsFilter' => 'setTargetsFilter',
            'document' => 'setDocument',
            'taskPolicy' => 'setTaskPolicy',
            'documentSource' => 'setDocumentSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * taskName  **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    * taskType  **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    * targets  **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * targetsFilter  **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    * document  **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    * taskPolicy  taskPolicy
    * documentSource  **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'taskName' => 'getTaskName',
            'taskType' => 'getTaskType',
            'targets' => 'getTargets',
            'targetsFilter' => 'getTargetsFilter',
            'document' => 'getDocument',
            'taskPolicy' => 'getTaskPolicy',
            'documentSource' => 'getDocumentSource'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['targetsFilter'] = isset($data['targetsFilter']) ? $data['targetsFilter'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['taskPolicy'] = isset($data['taskPolicy']) ? $data['taskPolicy'] : null;
        $this->container['documentSource'] = isset($data['documentSource']) ? $data['documentSource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_]{1,128}$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_]{1,128}$/.";
            }
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            if (!preg_match("/softwareUpgrade|firmwareUpgrade|createDevices|deleteDevices|freezeDevices|unfreezeDevices|createCommands|createAsyncCommands|sendEmails|sendSmss|updateDeviceShadows|createMessages|addDevicesToGroup/", $this->container['taskType'])) {
                $invalidProperties[] = "invalid value for 'taskType', must be conform to the pattern /softwareUpgrade|firmwareUpgrade|createDevices|deleteDevices|freezeDevices|unfreezeDevices|createCommands|createAsyncCommands|sendEmails|sendSmss|updateDeviceShadows|createMessages|addDevicesToGroup/.";
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
    * Gets appId
    *  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的批量任务归属到哪个资源空间下，否则创建的批量任务将会归属到[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName **参数说明**：批量任务名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、下划线（_）的组合。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskType
    *  **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType **参数说明**：批量任务类型。 **取值范围**： - softwareUpgrade: 软件升级任务 - firmwareUpgrade: 固件升级任务 - createDevices: 批量创建设备任务 - deleteDevices: 批量删除设备任务 - freezeDevices: 批量冻结设备任务 - unfreezeDevices: 批量解冻设备任务 - createCommands: 批量创建同步命令任务 - createAsyncCommands: 批量创建异步命令任务 - createMessages: 批量创建消息任务 - updateDeviceShadows：批量配置设备影子任务
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets targets
    *  **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string[]|null
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param string[]|null $targets **参数说明**：执行批量任务的目标，此处填写device_id列表，且最多支持3万个device_id。当task_type为firmwareUpgrade，softwareUpgrade，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。 **取值范围**：device_id列表。device_id支持长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
        return $this;
    }

    /**
    * Gets targetsFilter
    *  **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @return map[string,object]|null
    */
    public function getTargetsFilter()
    {
        return $this->container['targetsFilter'];
    }

    /**
    * Sets targetsFilter
    *
    * @param map[string,object]|null $targetsFilter **参数说明**：任务目标筛选参数。Json格式，里面是一个个键值对，（K,V）格式标识筛选targets需要的参数，目前支持的K有group_ids（V填写group_id数组，eg:[\"e495cf17-ff79-4294-8f64-4d367919d665\"]，任务则会筛选出来符合该群组条件的设备作为目标）。当task_type为firmwareUpgrade，softwareUpgrade，createDevices，deleteDevices，freezeDevices，unfreezeDevices，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @return $this
    */
    public function setTargetsFilter($targetsFilter)
    {
        $this->container['targetsFilter'] = $targetsFilter;
        return $this;
    }

    /**
    * Gets document
    *  **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    *
    * @return object|null
    */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
    * Sets document
    *
    * @param object|null $document **参数说明**：执行任务数据文档，Json格式，Json里面是(K,V)键值对。当task_type为firmwareUpgrade，softwareUpgrade，createCommands，createAsyncCommands，createMessages，updateDeviceShadows，支持该参数。 - softwareUpgrade|firmwareUpgrade，需要填写key为package_id，value为在平台上传的软固件附件id，id由portal软件库包管理上传并查询获得。eg：“{\"package_id\": \"32822e5744a45ede319d2c50\"}”。 - createCommands，需要填写同步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"}}”，参考[[设备同步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0038.html)](tag:hws)[[设备同步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0038.html)](tag:hws_hk))。 - createAsyncCommands，需要填写异步命令相关参数，eg：“{\"service_id\":\"water\",\"command_name\":\"ON_OFF\",\"paras\":{\"value\":\"ON\"},\"expire_time\":0,\"send_strategy\":\"immediately\"}”，参考[[设备异步命令](https://support.huaweicloud.com/api-iothub/iot_06_v5_0040.html)](tag:hws)[[设备异步命令](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0040.html)](tag:hws_hk))。 - createMessages，需要填写消息下发相关参数，eg：“{\"message_id\":\"99b32da9-cd17-4cdf-a286-f6e849cbc364\",\"name\":\"messageName\",\"message\":\"HelloWorld\",\"encoding\":\"none\",\"payload_format\":\"standard\",\"topic\":\"messageDown\",\"topic_full_name\":\"/device/message/down\"}”，参考[[下发设备消息](https://support.huaweicloud.com/api-iothub/iot_06_v5_0059.html)](tag:hws)[[下发设备消息](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0059.html)](tag:hws_hk))。 - updateDeviceShadows，需要填写配置设备影子相关参数，eg：“{\"shadow\": [{\"service_id\": \"WaterMeter\",\"desired\": {\"temperature\": \"60\"}}]}”，参考[[配置设备影子预期数据](https://support.huaweicloud.com/api-iothub/iot_06_v5_0072.html)](tag:hws)[[配置设备影子预期数据](https://support.huaweicloud.com/intl/zh-cn/api-iothub/iot_06_v5_0072.html)](tag:hws_hk))。限制说明：1. service_id和desired参数必填。2. 配置的service_id数量不大于5个且service_id不能重复。3. 配置参数内容大小不超过10K。
    *
    * @return $this
    */
    public function setDocument($document)
    {
        $this->container['document'] = $document;
        return $this;
    }

    /**
    * Gets taskPolicy
    *  taskPolicy
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\TaskPolicy|null
    */
    public function getTaskPolicy()
    {
        return $this->container['taskPolicy'];
    }

    /**
    * Sets taskPolicy
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\TaskPolicy|null $taskPolicy taskPolicy
    *
    * @return $this
    */
    public function setTaskPolicy($taskPolicy)
    {
        $this->container['taskPolicy'] = $taskPolicy;
        return $this;
    }

    /**
    * Gets documentSource
    *  **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @return string|null
    */
    public function getDocumentSource()
    {
        return $this->container['documentSource'];
    }

    /**
    * Sets documentSource
    *
    * @param string|null $documentSource **参数说明**：上传的批量任务文件ID。当task_type为createDevices，deleteDevices，freezeDevices，unfreezeDevices时，支持该参数。使用该参数时，需要先调用批量任务的文件管理接口上传文件来获取文件ID，文件样例请参见 [批量注册设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchCreateDevices_Template.xlsx)，[批量删除设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchDeleteDevices_Template.xlsx)，[批量冻结设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchFreezeDevices_Template.xlsx)，[批量解冻设备模板](https://developer.obs.cn-north-4.myhuaweicloud.com/template/BatchUnfreezeDevices_Template.xlsx)。同时使用targets、targets_filter、document_source参数时，只有一个参数会生效，且平台优先使用targets，其次是targets_filter，最后是document_source。
    *
    * @return $this
    */
    public function setDocumentSource($documentSource)
    {
        $this->container['documentSource'] = $documentSource;
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

