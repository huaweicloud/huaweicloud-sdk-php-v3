<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImmediateJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImmediateJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。
    * status  任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    * jobName  任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * jobId  任务ID。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    * limit  查询记录数。默认为10，取值为10、20、50。
    * startTime  起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'status' => 'string',
            'jobName' => 'string',
            'jobId' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。
    * status  任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    * jobName  任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * jobId  任务ID。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    * limit  查询记录数。默认为10，取值为10、20、50。
    * startTime  起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'status' => null,
        'jobName' => null,
        'jobId' => null,
        'offset' => null,
        'limit' => null,
        'startTime' => null,
        'endTime' => null
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
    * xLanguage  语言。
    * status  任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    * jobName  任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * jobId  任务ID。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    * limit  查询记录数。默认为10，取值为10、20、50。
    * startTime  起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'status' => 'status',
            'jobName' => 'job_name',
            'jobId' => 'job_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。
    * status  任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    * jobName  任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * jobId  任务ID。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    * limit  查询记录数。默认为10，取值为10、20、50。
    * startTime  起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'status' => 'setStatus',
            'jobName' => 'setJobName',
            'jobId' => 'setJobId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。
    * status  任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    * jobName  任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * jobId  任务ID。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    * limit  查询记录数。默认为10，取值为10、20、50。
    * startTime  起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'status' => 'getStatus',
            'jobName' => 'getJobName',
            'jobId' => 'getJobId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets xLanguage
    *  语言。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务执行状态。 取值： - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。 - 值为“Pending”，表示任务未执行。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 任务名称。取值有：  - \"CreateGaussDBforMySQLInstance\"表示创建实例。  - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。  - \"AddGaussDBforMySQLNodes\"表示添加节点。  - \"DeleteGaussDBforMySQLNode\"表示删除节点。  - \"RebootGaussDBforMySQLInstance\"表示重启实例。  - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。  - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。  - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。  - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。  - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。  - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。  - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。  - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。  - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。  - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。  - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。  - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。  - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。  - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。  - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。  - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。  - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。  - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。  - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为1，必须为数字，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。默认为10，取值为10、20、50。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询记录数。默认为10，取值为10、20、50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    * @param string|null $startTime 起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    *  结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    * @param string|null $endTime 结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

