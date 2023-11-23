<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeReports implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'upgradeReports';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  升级报告ID。
    * startTime  升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * srcInstanceId  原实例ID。
    * srcDatabaseVersion  原数据库版本。
    * dstInstanceId  目标实例ID。
    * dstDatabaseVersion  目标数据库版本。
    * result  升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    * isPrivateIpChanged  实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    * privateIpChangeTime  实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * statisticsCollectionMode  统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    * detail  升级报告详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'srcInstanceId' => 'string',
            'srcDatabaseVersion' => 'string',
            'dstInstanceId' => 'string',
            'dstDatabaseVersion' => 'string',
            'result' => 'string',
            'isPrivateIpChanged' => 'bool',
            'privateIpChangeTime' => 'string',
            'statisticsCollectionMode' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  升级报告ID。
    * startTime  升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * srcInstanceId  原实例ID。
    * srcDatabaseVersion  原数据库版本。
    * dstInstanceId  目标实例ID。
    * dstDatabaseVersion  目标数据库版本。
    * result  升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    * isPrivateIpChanged  实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    * privateIpChangeTime  实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * statisticsCollectionMode  统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    * detail  升级报告详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'startTime' => null,
        'endTime' => null,
        'srcInstanceId' => null,
        'srcDatabaseVersion' => null,
        'dstInstanceId' => null,
        'dstDatabaseVersion' => null,
        'result' => null,
        'isPrivateIpChanged' => null,
        'privateIpChangeTime' => null,
        'statisticsCollectionMode' => null,
        'detail' => null
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
    * id  升级报告ID。
    * startTime  升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * srcInstanceId  原实例ID。
    * srcDatabaseVersion  原数据库版本。
    * dstInstanceId  目标实例ID。
    * dstDatabaseVersion  目标数据库版本。
    * result  升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    * isPrivateIpChanged  实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    * privateIpChangeTime  实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * statisticsCollectionMode  统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    * detail  升级报告详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'srcInstanceId' => 'src_instance_id',
            'srcDatabaseVersion' => 'src_database_version',
            'dstInstanceId' => 'dst_instance_id',
            'dstDatabaseVersion' => 'dst_database_version',
            'result' => 'result',
            'isPrivateIpChanged' => 'is_private_ip_changed',
            'privateIpChangeTime' => 'private_ip_change_time',
            'statisticsCollectionMode' => 'statistics_collection_mode',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  升级报告ID。
    * startTime  升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * srcInstanceId  原实例ID。
    * srcDatabaseVersion  原数据库版本。
    * dstInstanceId  目标实例ID。
    * dstDatabaseVersion  目标数据库版本。
    * result  升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    * isPrivateIpChanged  实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    * privateIpChangeTime  实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * statisticsCollectionMode  统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    * detail  升级报告详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'srcInstanceId' => 'setSrcInstanceId',
            'srcDatabaseVersion' => 'setSrcDatabaseVersion',
            'dstInstanceId' => 'setDstInstanceId',
            'dstDatabaseVersion' => 'setDstDatabaseVersion',
            'result' => 'setResult',
            'isPrivateIpChanged' => 'setIsPrivateIpChanged',
            'privateIpChangeTime' => 'setPrivateIpChangeTime',
            'statisticsCollectionMode' => 'setStatisticsCollectionMode',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  升级报告ID。
    * startTime  升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * srcInstanceId  原实例ID。
    * srcDatabaseVersion  原数据库版本。
    * dstInstanceId  目标实例ID。
    * dstDatabaseVersion  目标数据库版本。
    * result  升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    * isPrivateIpChanged  实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    * privateIpChangeTime  实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * statisticsCollectionMode  统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    * detail  升级报告详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'srcInstanceId' => 'getSrcInstanceId',
            'srcDatabaseVersion' => 'getSrcDatabaseVersion',
            'dstInstanceId' => 'getDstInstanceId',
            'dstDatabaseVersion' => 'getDstDatabaseVersion',
            'result' => 'getResult',
            'isPrivateIpChanged' => 'getIsPrivateIpChanged',
            'privateIpChangeTime' => 'getPrivateIpChangeTime',
            'statisticsCollectionMode' => 'getStatisticsCollectionMode',
            'detail' => 'getDetail'
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
        $this->container['srcInstanceId'] = isset($data['srcInstanceId']) ? $data['srcInstanceId'] : null;
        $this->container['srcDatabaseVersion'] = isset($data['srcDatabaseVersion']) ? $data['srcDatabaseVersion'] : null;
        $this->container['dstInstanceId'] = isset($data['dstInstanceId']) ? $data['dstInstanceId'] : null;
        $this->container['dstDatabaseVersion'] = isset($data['dstDatabaseVersion']) ? $data['dstDatabaseVersion'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['isPrivateIpChanged'] = isset($data['isPrivateIpChanged']) ? $data['isPrivateIpChanged'] : null;
        $this->container['privateIpChangeTime'] = isset($data['privateIpChangeTime']) ? $data['privateIpChangeTime'] : null;
        $this->container['statisticsCollectionMode'] = isset($data['statisticsCollectionMode']) ? $data['statisticsCollectionMode'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['srcInstanceId'] === null) {
            $invalidProperties[] = "'srcInstanceId' can't be null";
        }
        if ($this->container['srcDatabaseVersion'] === null) {
            $invalidProperties[] = "'srcDatabaseVersion' can't be null";
        }
        if ($this->container['dstInstanceId'] === null) {
            $invalidProperties[] = "'dstInstanceId' can't be null";
        }
        if ($this->container['dstDatabaseVersion'] === null) {
            $invalidProperties[] = "'dstDatabaseVersion' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['isPrivateIpChanged'] === null) {
            $invalidProperties[] = "'isPrivateIpChanged' can't be null";
        }
        if ($this->container['privateIpChangeTime'] === null) {
            $invalidProperties[] = "'privateIpChangeTime' can't be null";
        }
        if ($this->container['statisticsCollectionMode'] === null) {
            $invalidProperties[] = "'statisticsCollectionMode' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
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
    *  升级报告ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 升级报告ID。
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
    *  升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 升级开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    *  升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 升级结束时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets srcInstanceId
    *  原实例ID。
    *
    * @return string
    */
    public function getSrcInstanceId()
    {
        return $this->container['srcInstanceId'];
    }

    /**
    * Sets srcInstanceId
    *
    * @param string $srcInstanceId 原实例ID。
    *
    * @return $this
    */
    public function setSrcInstanceId($srcInstanceId)
    {
        $this->container['srcInstanceId'] = $srcInstanceId;
        return $this;
    }

    /**
    * Gets srcDatabaseVersion
    *  原数据库版本。
    *
    * @return string
    */
    public function getSrcDatabaseVersion()
    {
        return $this->container['srcDatabaseVersion'];
    }

    /**
    * Sets srcDatabaseVersion
    *
    * @param string $srcDatabaseVersion 原数据库版本。
    *
    * @return $this
    */
    public function setSrcDatabaseVersion($srcDatabaseVersion)
    {
        $this->container['srcDatabaseVersion'] = $srcDatabaseVersion;
        return $this;
    }

    /**
    * Gets dstInstanceId
    *  目标实例ID。
    *
    * @return string
    */
    public function getDstInstanceId()
    {
        return $this->container['dstInstanceId'];
    }

    /**
    * Sets dstInstanceId
    *
    * @param string $dstInstanceId 目标实例ID。
    *
    * @return $this
    */
    public function setDstInstanceId($dstInstanceId)
    {
        $this->container['dstInstanceId'] = $dstInstanceId;
        return $this;
    }

    /**
    * Gets dstDatabaseVersion
    *  目标数据库版本。
    *
    * @return string
    */
    public function getDstDatabaseVersion()
    {
        return $this->container['dstDatabaseVersion'];
    }

    /**
    * Sets dstDatabaseVersion
    *
    * @param string $dstDatabaseVersion 目标数据库版本。
    *
    * @return $this
    */
    public function setDstDatabaseVersion($dstDatabaseVersion)
    {
        $this->container['dstDatabaseVersion'] = $dstDatabaseVersion;
        return $this;
    }

    /**
    * Gets result
    *  升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result 升级结果。 success，表示成功。 failed，表示失败。 running， 表示升级中。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets isPrivateIpChanged
    *  实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    *
    * @return bool
    */
    public function getIsPrivateIpChanged()
    {
        return $this->container['isPrivateIpChanged'];
    }

    /**
    * Sets isPrivateIpChanged
    *
    * @param bool $isPrivateIpChanged 实例内网IP是否改变。 true，表示改变。 false，表示不改变。
    *
    * @return $this
    */
    public function setIsPrivateIpChanged($isPrivateIpChanged)
    {
        $this->container['isPrivateIpChanged'] = $isPrivateIpChanged;
        return $this;
    }

    /**
    * Gets privateIpChangeTime
    *  实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getPrivateIpChangeTime()
    {
        return $this->container['privateIpChangeTime'];
    }

    /**
    * Sets privateIpChangeTime
    *
    * @param string $privateIpChangeTime 实例内网IP修改时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setPrivateIpChangeTime($privateIpChangeTime)
    {
        $this->container['privateIpChangeTime'] = $privateIpChangeTime;
        return $this;
    }

    /**
    * Gets statisticsCollectionMode
    *  统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    *
    * @return string
    */
    public function getStatisticsCollectionMode()
    {
        return $this->container['statisticsCollectionMode'];
    }

    /**
    * Sets statisticsCollectionMode
    *
    * @param string $statisticsCollectionMode 统计信息收集模式。 before_change_private_ip，修改实例内网IP前收集。 after_change_private_ip，修改实例内网IP后收集。
    *
    * @return $this
    */
    public function setStatisticsCollectionMode($statisticsCollectionMode)
    {
        $this->container['statisticsCollectionMode'] = $statisticsCollectionMode;
        return $this;
    }

    /**
    * Gets detail
    *  升级报告详情。
    *
    * @return string
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string $detail 升级报告详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

