<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrateResultsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrateResultsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  实例名称。
    * originalShardNum  原始分片数。
    * afterShardNum  现分片数。
    * originalDnInfoList  分片变更前关联的后端DN信息。
    * afterDnInfoList  分片变更后关联的后端DN信息。
    * switchRouteIsManual  是否手动切换路由。
    * autoSwitchBeginTime  自动切换路由开始时间。
    * autoSwitchEndTime  自动切换路由结束时间。
    * nodeIdForMigrate  分片变更的节点。
    * isExclusive  是否独占式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'originalShardNum' => 'int',
            'afterShardNum' => 'int',
            'originalDnInfoList' => '\HuaweiCloud\SDK\Ddm\V1\Model\MigrateDnInfoOpenResponse[]',
            'afterDnInfoList' => '\HuaweiCloud\SDK\Ddm\V1\Model\MigrateDnInfoOpenResponse[]',
            'switchRouteIsManual' => 'bool',
            'autoSwitchBeginTime' => 'string',
            'autoSwitchEndTime' => 'string',
            'nodeIdForMigrate' => 'string',
            'isExclusive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  实例名称。
    * originalShardNum  原始分片数。
    * afterShardNum  现分片数。
    * originalDnInfoList  分片变更前关联的后端DN信息。
    * afterDnInfoList  分片变更后关联的后端DN信息。
    * switchRouteIsManual  是否手动切换路由。
    * autoSwitchBeginTime  自动切换路由开始时间。
    * autoSwitchEndTime  自动切换路由结束时间。
    * nodeIdForMigrate  分片变更的节点。
    * isExclusive  是否独占式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'originalShardNum' => null,
        'afterShardNum' => null,
        'originalDnInfoList' => null,
        'afterDnInfoList' => null,
        'switchRouteIsManual' => null,
        'autoSwitchBeginTime' => null,
        'autoSwitchEndTime' => null,
        'nodeIdForMigrate' => null,
        'isExclusive' => null
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
    * instanceName  实例名称。
    * originalShardNum  原始分片数。
    * afterShardNum  现分片数。
    * originalDnInfoList  分片变更前关联的后端DN信息。
    * afterDnInfoList  分片变更后关联的后端DN信息。
    * switchRouteIsManual  是否手动切换路由。
    * autoSwitchBeginTime  自动切换路由开始时间。
    * autoSwitchEndTime  自动切换路由结束时间。
    * nodeIdForMigrate  分片变更的节点。
    * isExclusive  是否独占式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'originalShardNum' => 'original_shard_num',
            'afterShardNum' => 'after_shard_num',
            'originalDnInfoList' => 'original_dn_info_list',
            'afterDnInfoList' => 'after_dn_info_list',
            'switchRouteIsManual' => 'switch_route_is_manual',
            'autoSwitchBeginTime' => 'auto_switch_begin_time',
            'autoSwitchEndTime' => 'auto_switch_end_time',
            'nodeIdForMigrate' => 'node_id_for_migrate',
            'isExclusive' => 'is_exclusive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  实例名称。
    * originalShardNum  原始分片数。
    * afterShardNum  现分片数。
    * originalDnInfoList  分片变更前关联的后端DN信息。
    * afterDnInfoList  分片变更后关联的后端DN信息。
    * switchRouteIsManual  是否手动切换路由。
    * autoSwitchBeginTime  自动切换路由开始时间。
    * autoSwitchEndTime  自动切换路由结束时间。
    * nodeIdForMigrate  分片变更的节点。
    * isExclusive  是否独占式。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'originalShardNum' => 'setOriginalShardNum',
            'afterShardNum' => 'setAfterShardNum',
            'originalDnInfoList' => 'setOriginalDnInfoList',
            'afterDnInfoList' => 'setAfterDnInfoList',
            'switchRouteIsManual' => 'setSwitchRouteIsManual',
            'autoSwitchBeginTime' => 'setAutoSwitchBeginTime',
            'autoSwitchEndTime' => 'setAutoSwitchEndTime',
            'nodeIdForMigrate' => 'setNodeIdForMigrate',
            'isExclusive' => 'setIsExclusive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  实例名称。
    * originalShardNum  原始分片数。
    * afterShardNum  现分片数。
    * originalDnInfoList  分片变更前关联的后端DN信息。
    * afterDnInfoList  分片变更后关联的后端DN信息。
    * switchRouteIsManual  是否手动切换路由。
    * autoSwitchBeginTime  自动切换路由开始时间。
    * autoSwitchEndTime  自动切换路由结束时间。
    * nodeIdForMigrate  分片变更的节点。
    * isExclusive  是否独占式。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'originalShardNum' => 'getOriginalShardNum',
            'afterShardNum' => 'getAfterShardNum',
            'originalDnInfoList' => 'getOriginalDnInfoList',
            'afterDnInfoList' => 'getAfterDnInfoList',
            'switchRouteIsManual' => 'getSwitchRouteIsManual',
            'autoSwitchBeginTime' => 'getAutoSwitchBeginTime',
            'autoSwitchEndTime' => 'getAutoSwitchEndTime',
            'nodeIdForMigrate' => 'getNodeIdForMigrate',
            'isExclusive' => 'getIsExclusive'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['originalShardNum'] = isset($data['originalShardNum']) ? $data['originalShardNum'] : null;
        $this->container['afterShardNum'] = isset($data['afterShardNum']) ? $data['afterShardNum'] : null;
        $this->container['originalDnInfoList'] = isset($data['originalDnInfoList']) ? $data['originalDnInfoList'] : null;
        $this->container['afterDnInfoList'] = isset($data['afterDnInfoList']) ? $data['afterDnInfoList'] : null;
        $this->container['switchRouteIsManual'] = isset($data['switchRouteIsManual']) ? $data['switchRouteIsManual'] : null;
        $this->container['autoSwitchBeginTime'] = isset($data['autoSwitchBeginTime']) ? $data['autoSwitchBeginTime'] : null;
        $this->container['autoSwitchEndTime'] = isset($data['autoSwitchEndTime']) ? $data['autoSwitchEndTime'] : null;
        $this->container['nodeIdForMigrate'] = isset($data['nodeIdForMigrate']) ? $data['nodeIdForMigrate'] : null;
        $this->container['isExclusive'] = isset($data['isExclusive']) ? $data['isExclusive'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['originalShardNum']) && ($this->container['originalShardNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'originalShardNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['originalShardNum']) && ($this->container['originalShardNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'originalShardNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['afterShardNum']) && ($this->container['afterShardNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'afterShardNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['afterShardNum']) && ($this->container['afterShardNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'afterShardNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['autoSwitchBeginTime']) && (mb_strlen($this->container['autoSwitchBeginTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'autoSwitchBeginTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['autoSwitchBeginTime']) && (mb_strlen($this->container['autoSwitchBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'autoSwitchBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['autoSwitchEndTime']) && (mb_strlen($this->container['autoSwitchEndTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'autoSwitchEndTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['autoSwitchEndTime']) && (mb_strlen($this->container['autoSwitchEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'autoSwitchEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeIdForMigrate']) && (mb_strlen($this->container['nodeIdForMigrate']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeIdForMigrate', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['nodeIdForMigrate']) && (mb_strlen($this->container['nodeIdForMigrate']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeIdForMigrate', the character length must be bigger than or equal to 1.";
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
    * Gets originalShardNum
    *  原始分片数。
    *
    * @return int|null
    */
    public function getOriginalShardNum()
    {
        return $this->container['originalShardNum'];
    }

    /**
    * Sets originalShardNum
    *
    * @param int|null $originalShardNum 原始分片数。
    *
    * @return $this
    */
    public function setOriginalShardNum($originalShardNum)
    {
        $this->container['originalShardNum'] = $originalShardNum;
        return $this;
    }

    /**
    * Gets afterShardNum
    *  现分片数。
    *
    * @return int|null
    */
    public function getAfterShardNum()
    {
        return $this->container['afterShardNum'];
    }

    /**
    * Sets afterShardNum
    *
    * @param int|null $afterShardNum 现分片数。
    *
    * @return $this
    */
    public function setAfterShardNum($afterShardNum)
    {
        $this->container['afterShardNum'] = $afterShardNum;
        return $this;
    }

    /**
    * Gets originalDnInfoList
    *  分片变更前关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\MigrateDnInfoOpenResponse[]|null
    */
    public function getOriginalDnInfoList()
    {
        return $this->container['originalDnInfoList'];
    }

    /**
    * Sets originalDnInfoList
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\MigrateDnInfoOpenResponse[]|null $originalDnInfoList 分片变更前关联的后端DN信息。
    *
    * @return $this
    */
    public function setOriginalDnInfoList($originalDnInfoList)
    {
        $this->container['originalDnInfoList'] = $originalDnInfoList;
        return $this;
    }

    /**
    * Gets afterDnInfoList
    *  分片变更后关联的后端DN信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\MigrateDnInfoOpenResponse[]|null
    */
    public function getAfterDnInfoList()
    {
        return $this->container['afterDnInfoList'];
    }

    /**
    * Sets afterDnInfoList
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\MigrateDnInfoOpenResponse[]|null $afterDnInfoList 分片变更后关联的后端DN信息。
    *
    * @return $this
    */
    public function setAfterDnInfoList($afterDnInfoList)
    {
        $this->container['afterDnInfoList'] = $afterDnInfoList;
        return $this;
    }

    /**
    * Gets switchRouteIsManual
    *  是否手动切换路由。
    *
    * @return bool|null
    */
    public function getSwitchRouteIsManual()
    {
        return $this->container['switchRouteIsManual'];
    }

    /**
    * Sets switchRouteIsManual
    *
    * @param bool|null $switchRouteIsManual 是否手动切换路由。
    *
    * @return $this
    */
    public function setSwitchRouteIsManual($switchRouteIsManual)
    {
        $this->container['switchRouteIsManual'] = $switchRouteIsManual;
        return $this;
    }

    /**
    * Gets autoSwitchBeginTime
    *  自动切换路由开始时间。
    *
    * @return string|null
    */
    public function getAutoSwitchBeginTime()
    {
        return $this->container['autoSwitchBeginTime'];
    }

    /**
    * Sets autoSwitchBeginTime
    *
    * @param string|null $autoSwitchBeginTime 自动切换路由开始时间。
    *
    * @return $this
    */
    public function setAutoSwitchBeginTime($autoSwitchBeginTime)
    {
        $this->container['autoSwitchBeginTime'] = $autoSwitchBeginTime;
        return $this;
    }

    /**
    * Gets autoSwitchEndTime
    *  自动切换路由结束时间。
    *
    * @return string|null
    */
    public function getAutoSwitchEndTime()
    {
        return $this->container['autoSwitchEndTime'];
    }

    /**
    * Sets autoSwitchEndTime
    *
    * @param string|null $autoSwitchEndTime 自动切换路由结束时间。
    *
    * @return $this
    */
    public function setAutoSwitchEndTime($autoSwitchEndTime)
    {
        $this->container['autoSwitchEndTime'] = $autoSwitchEndTime;
        return $this;
    }

    /**
    * Gets nodeIdForMigrate
    *  分片变更的节点。
    *
    * @return string|null
    */
    public function getNodeIdForMigrate()
    {
        return $this->container['nodeIdForMigrate'];
    }

    /**
    * Sets nodeIdForMigrate
    *
    * @param string|null $nodeIdForMigrate 分片变更的节点。
    *
    * @return $this
    */
    public function setNodeIdForMigrate($nodeIdForMigrate)
    {
        $this->container['nodeIdForMigrate'] = $nodeIdForMigrate;
        return $this;
    }

    /**
    * Gets isExclusive
    *  是否独占式。
    *
    * @return bool|null
    */
    public function getIsExclusive()
    {
        return $this->container['isExclusive'];
    }

    /**
    * Sets isExclusive
    *
    * @param bool|null $isExclusive 是否独占式。
    *
    * @return $this
    */
    public function setIsExclusive($isExclusive)
    {
        $this->container['isExclusive'] = $isExclusive;
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

