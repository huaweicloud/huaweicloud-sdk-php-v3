<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * instanceStatus  实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    * projectId  租户在某一region下的project ID。
    * jobName  任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * createTime  任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * startTime  任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * endTime  任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * jobStatus  任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    * datastoreType  数据库类型。
    * targetConfig  实例配置相关信息，比如规格等。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceStatus' => 'string',
            'projectId' => 'string',
            'jobName' => 'string',
            'createTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'jobStatus' => 'string',
            'datastoreType' => 'string',
            'targetConfig' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * instanceStatus  实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    * projectId  租户在某一region下的project ID。
    * jobName  任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * createTime  任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * startTime  任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * endTime  任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * jobStatus  任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    * datastoreType  数据库类型。
    * targetConfig  实例配置相关信息，比如规格等。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'instanceStatus' => null,
        'projectId' => null,
        'jobName' => null,
        'createTime' => null,
        'startTime' => null,
        'endTime' => null,
        'jobStatus' => null,
        'datastoreType' => null,
        'targetConfig' => null
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
    * jobId  任务ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * instanceStatus  实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    * projectId  租户在某一region下的project ID。
    * jobName  任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * createTime  任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * startTime  任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * endTime  任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * jobStatus  任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    * datastoreType  数据库类型。
    * targetConfig  实例配置相关信息，比如规格等。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceStatus' => 'instance_status',
            'projectId' => 'project_id',
            'jobName' => 'job_name',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'jobStatus' => 'job_status',
            'datastoreType' => 'datastore_type',
            'targetConfig' => 'target_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * instanceStatus  实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    * projectId  租户在某一region下的project ID。
    * jobName  任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * createTime  任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * startTime  任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * endTime  任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * jobStatus  任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    * datastoreType  数据库类型。
    * targetConfig  实例配置相关信息，比如规格等。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceStatus' => 'setInstanceStatus',
            'projectId' => 'setProjectId',
            'jobName' => 'setJobName',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'jobStatus' => 'setJobStatus',
            'datastoreType' => 'setDatastoreType',
            'targetConfig' => 'setTargetConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * instanceStatus  实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    * projectId  租户在某一region下的project ID。
    * jobName  任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    * createTime  任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * startTime  任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * endTime  任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    * jobStatus  任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    * datastoreType  数据库类型。
    * targetConfig  实例配置相关信息，比如规格等。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceStatus' => 'getInstanceStatus',
            'projectId' => 'getProjectId',
            'jobName' => 'getJobName',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'jobStatus' => 'getJobStatus',
            'datastoreType' => 'getDatastoreType',
            'targetConfig' => 'getTargetConfig'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['targetConfig'] = isset($data['targetConfig']) ? $data['targetConfig'] : null;
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus 实例状态。 取值： - 值为“createfail”，表示实例创建失败。 - 值为“creating”，表示实例创建中。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“deleted”，表示实例已删除。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets projectId
    *  租户在某一region下的project ID。
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
    * @param string|null $projectId 租户在某一region下的project ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets jobName
    *  任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
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
    * @param string|null $jobName 任务名称。取值有：    - \"CreateGaussDBforMySQLInstance\"表示创建实例。    - \"RestoreGaussDBforMySQLNewInstance\"表示恢复新实例。    - \"AddGaussDBforMySQLNodes\"表示添加节点。    - \"DeleteGaussDBforMySQLNode\"表示删除节点。    - \"RebootGaussDBforMySQLInstance\"表示重启实例。    - \"ModifyGaussDBforMySQLPort\"表示修改实例端口。    - \"ModifyGaussDBforMySQLSecurityGroup\"表示修改实例安全组。    - \"ResizeGaussDBforMySQLFlavor\"表示实例规格变更。    - \"SwitchoverGaussDBforMySQLMasterNode\"表示只读升主。    - \"GaussDBforMySQLBindEIP\"表示绑定弹性公网IP。    - \"GaussDBforMySQLUnbindEIP\"表示解绑弹性公网IP。    - \"RenameGaussDBforMySQLInstance\"表示修改实例名称。    - \"DeleteGaussDBforMySQLInstance\"表示删除实例集群。    - \"UpgradeGaussDBforMySQLDatabaseVersion\"表示版本升级。    - \"EnlargeGaussDBforMySQLProxy\"表示实例的数据库代理节点扩容。    - \"ReduceGaussDBforMySQLProxy\"表示实例的数据库代理节点缩容。    - \"OpenGaussDBforMySQLProxy\"表示开启实例的数据库代理。    - \"CloseGaussDBforMySQLProxy\"表示关闭实例的数据库代理。    - \"GaussdbforMySQLModifyProxyIp\"表示修改数据库代理ip。    - \"ScaleGaussDBforMySQLProxy\"表示实例的数据库代理节点规格变更。    - \"GaussDBforMySQLModifyInstanceMetricExtend\"表示实例秒级监控。    - \"GaussDBforMySQLModifyInstanceDataVip\"表示修改实例数据Vip。    - \"GaussDBforMySQLSwitchSSL\"表示切换实例SSL开关。    - \"GaussDBforMySQLModifyProxyConsist\"表示修改代理一致性。    - \"GaussDBforMySQLModifyProxyWeight\"表示修改代理权重。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
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
    * @param string|null $startTime 任务开始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
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
    *  任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
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
    * @param string|null $endTime 任务结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets jobStatus
    *  任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    *
    * @return string|null
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string|null $jobStatus 任务执行状态。 取值： - 值为“Pending”，表示延时任务，未执行。 - 值为“Running”，表示任务正在执行。 - 值为“Completed”，表示任务执行成功。 - 值为“Failed”，表示任务执行失败。
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型。
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数据库类型。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets targetConfig
    *  实例配置相关信息，比如规格等。
    *
    * @return object|null
    */
    public function getTargetConfig()
    {
        return $this->container['targetConfig'];
    }

    /**
    * Sets targetConfig
    *
    * @param object|null $targetConfig 实例配置相关信息，比如规格等。
    *
    * @return $this
    */
    public function setTargetConfig($targetConfig)
    {
        $this->container['targetConfig'] = $targetConfig;
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

