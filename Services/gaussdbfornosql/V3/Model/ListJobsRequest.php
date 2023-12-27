<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * startTime  查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
    * endTime  查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
    * status  任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
    * name  任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。取值 10 20 50 ，默认为50。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'name' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * startTime  查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
    * endTime  查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
    * status  任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
    * name  任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。取值 10 20 50 ，默认为50。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'name' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * id  任务ID。
    * startTime  查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
    * endTime  查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
    * status  任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
    * name  任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。取值 10 20 50 ，默认为50。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'name' => 'name',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * startTime  查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
    * endTime  查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
    * status  任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
    * name  任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。取值 10 20 50 ，默认为50。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'name' => 'setName',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * startTime  查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
    * endTime  查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
    * status  任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
    * name  任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。取值 10 20 50 ，默认为50。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'name' => 'getName',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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
    * Gets id
    *  任务ID。
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
    * @param string|null $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
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
    * @param string|null $startTime 查询开始时间，默认当前时间往前30天，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始，Z指时区偏移量
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
    *  查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
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
    * @param string|null $endTime 查询结束时间，默认当前时间，格式为“yyyy-mm-ddThh:mm:ssZ”，且大于查询开始时间，时间跨度不超过30天。 其中，T指某个时间的开始，Z指时区偏移量。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
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
    * @param string|null $status 任务状态： 取值为“Running”为执行中； 取值为“Completed”为完成； 取值为“Failed” 为失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务名称。对应取值如下： - \"CreateInstance\"：创建实例 - \"RestoreNewInstance\"：恢复到新实例 - \"EnlargeInstance\"：扩容实例 - \"ReduceInstance\"：缩容实例 - \"RestartInstance\"：重启实例 - \"RestartNode\"：重启节点 - \"EnlargeInstanceVolume\"：扩容实例磁盘 - \"ReduceInstanceVolume\"：缩容实例磁盘 - \"ResizeInstance\"：规格变更实例 - \"UpgradeDbVersion\"：升级数据库版本 - \"BindPublicIP\"：绑定公网IP - \"UnbindPublicIP\"：解绑公网IP - \"DeleteInstance\"：删除实例 - \"EnlargeInstanceColdVolume\"：扩容实例冷存储 - \"AddInstanceColdVolume\"：增加实例冷存储 - \"ModifySecurityGroup\"：修改安全组 - \"ModifyCcmCert\"：修改CCM证书 - \"ModifyPort\"：修改端口 - \"ConstructDisasterRecovery\"：构造容灾关系 - \"DeConstructDisasterRecovery\"：解除容灾关系 - \"SwitchOverDisasterRecovery\"：切换容灾关系 - \"BuildBiActiveInstance\"：构建双活实例 - \"ReleaseBiActiveInstance\"：解除双活实例关系 - \"BackupInstance\"：备份实例
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    *  查询记录数。取值 10 20 50 ，默认为50。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数。取值 10 20 50 ，默认为50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

