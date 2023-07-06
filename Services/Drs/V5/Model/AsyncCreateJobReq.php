<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AsyncCreateJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AsyncCreateJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbObject  dbObject
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'alarmNotify' => '\HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig',
            'speedLimit' => '\HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]',
            'userMigration' => '\HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo',
            'policyConfig' => '\HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig',
            'dbObject' => '\HuaweiCloud\SDK\Drs\V5\Model\DbObject',
            'dbParam' => '\HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo',
            'tuningParams' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo',
            'periodOrder' => '\HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo',
            'nodeInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbObject  dbObject
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseInfo' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'alarmNotify' => null,
        'speedLimit' => null,
        'userMigration' => null,
        'policyConfig' => null,
        'dbObject' => null,
        'dbParam' => null,
        'tuningParams' => null,
        'periodOrder' => null,
        'nodeInfo' => null
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
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbObject  dbObject
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseInfo' => 'base_info',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'alarmNotify' => 'alarm_notify',
            'speedLimit' => 'speed_limit',
            'userMigration' => 'user_migration',
            'policyConfig' => 'policy_config',
            'dbObject' => 'db_object',
            'dbParam' => 'db_param',
            'tuningParams' => 'tuning_params',
            'periodOrder' => 'period_order',
            'nodeInfo' => 'node_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbObject  dbObject
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'baseInfo' => 'setBaseInfo',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'alarmNotify' => 'setAlarmNotify',
            'speedLimit' => 'setSpeedLimit',
            'userMigration' => 'setUserMigration',
            'policyConfig' => 'setPolicyConfig',
            'dbObject' => 'setDbObject',
            'dbParam' => 'setDbParam',
            'tuningParams' => 'setTuningParams',
            'periodOrder' => 'setPeriodOrder',
            'nodeInfo' => 'setNodeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbObject  dbObject
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'baseInfo' => 'getBaseInfo',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'alarmNotify' => 'getAlarmNotify',
            'speedLimit' => 'getSpeedLimit',
            'userMigration' => 'getUserMigration',
            'policyConfig' => 'getPolicyConfig',
            'dbObject' => 'getDbObject',
            'dbParam' => 'getDbParam',
            'tuningParams' => 'getTuningParams',
            'periodOrder' => 'getPeriodOrder',
            'nodeInfo' => 'getNodeInfo'
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
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['userMigration'] = isset($data['userMigration']) ? $data['userMigration'] : null;
        $this->container['policyConfig'] = isset($data['policyConfig']) ? $data['policyConfig'] : null;
        $this->container['dbObject'] = isset($data['dbObject']) ? $data['dbObject'] : null;
        $this->container['dbParam'] = isset($data['dbParam']) ? $data['dbParam'] : null;
        $this->container['tuningParams'] = isset($data['tuningParams']) ? $data['tuningParams'] : null;
        $this->container['periodOrder'] = isset($data['periodOrder']) ? $data['periodOrder'] : null;
        $this->container['nodeInfo'] = isset($data['nodeInfo']) ? $data['nodeInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['baseInfo'] === null) {
            $invalidProperties[] = "'baseInfo' can't be null";
        }
        if ($this->container['sourceEndpoint'] === null) {
            $invalidProperties[] = "'sourceEndpoint' can't be null";
        }
        if ($this->container['targetEndpoint'] === null) {
            $invalidProperties[] = "'targetEndpoint' can't be null";
        }
        if ($this->container['policyConfig'] === null) {
            $invalidProperties[] = "'policyConfig' can't be null";
        }
        if ($this->container['dbObject'] === null) {
            $invalidProperties[] = "'dbObject' can't be null";
        }
        if ($this->container['nodeInfo'] === null) {
            $invalidProperties[] = "'nodeInfo' can't be null";
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
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  创建任务数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[] $sourceEndpoint 创建任务数据库信息体。
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  创建任务数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[] $targetEndpoint 创建任务数据库信息体。
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  alarmNotify
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig|null $alarmNotify alarmNotify
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets speedLimit
    *  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]|null $speedLimit 限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。 - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets userMigration
    *  userMigration
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo|null
    */
    public function getUserMigration()
    {
        return $this->container['userMigration'];
    }

    /**
    * Sets userMigration
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo|null $userMigration userMigration
    *
    * @return $this
    */
    public function setUserMigration($userMigration)
    {
        $this->container['userMigration'] = $userMigration;
        return $this;
    }

    /**
    * Gets policyConfig
    *  policyConfig
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig
    */
    public function getPolicyConfig()
    {
        return $this->container['policyConfig'];
    }

    /**
    * Sets policyConfig
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig $policyConfig policyConfig
    *
    * @return $this
    */
    public function setPolicyConfig($policyConfig)
    {
        $this->container['policyConfig'] = $policyConfig;
        return $this;
    }

    /**
    * Gets dbObject
    *  dbObject
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbObject
    */
    public function getDbObject()
    {
        return $this->container['dbObject'];
    }

    /**
    * Sets dbObject
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbObject $dbObject dbObject
    *
    * @return $this
    */
    public function setDbObject($dbObject)
    {
        $this->container['dbObject'] = $dbObject;
        return $this;
    }

    /**
    * Gets dbParam
    *  dbParam
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo|null
    */
    public function getDbParam()
    {
        return $this->container['dbParam'];
    }

    /**
    * Sets dbParam
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo|null $dbParam dbParam
    *
    * @return $this
    */
    public function setDbParam($dbParam)
    {
        $this->container['dbParam'] = $dbParam;
        return $this;
    }

    /**
    * Gets tuningParams
    *  tuningParams
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo|null
    */
    public function getTuningParams()
    {
        return $this->container['tuningParams'];
    }

    /**
    * Sets tuningParams
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo|null $tuningParams tuningParams
    *
    * @return $this
    */
    public function setTuningParams($tuningParams)
    {
        $this->container['tuningParams'] = $tuningParams;
        return $this;
    }

    /**
    * Gets periodOrder
    *  periodOrder
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null
    */
    public function getPeriodOrder()
    {
        return $this->container['periodOrder'];
    }

    /**
    * Sets periodOrder
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null $periodOrder periodOrder
    *
    * @return $this
    */
    public function setPeriodOrder($periodOrder)
    {
        $this->container['periodOrder'] = $periodOrder;
        return $this;
    }

    /**
    * Gets nodeInfo
    *  nodeInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo
    */
    public function getNodeInfo()
    {
        return $this->container['nodeInfo'];
    }

    /**
    * Sets nodeInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo $nodeInfo nodeInfo
    *
    * @return $this
    */
    public function setNodeInfo($nodeInfo)
    {
        $this->container['nodeInfo'] = $nodeInfo;
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

