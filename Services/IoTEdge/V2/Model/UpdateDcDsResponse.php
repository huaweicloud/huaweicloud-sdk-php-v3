<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDcDsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDcDsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * edgeNodeId  边缘节点id
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    * edgeAppName  应用ID
    * connectionInfo  数采连接信息
    * moduleState  数采连接状态,stopped|running
    * count  数采连接下点位数
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * synchronized  数采配置是否已同步，已同步：true,未同步：false
    * synchronizedTime  数采配置同步时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dsId' => 'string',
            'config' => 'object',
            'name' => 'string',
            'edgeNodeId' => 'string',
            'moduleId' => 'string',
            'tplId' => 'string',
            'qualityReport' => 'bool',
            'edgeAppName' => 'string',
            'connectionInfo' => 'object',
            'moduleState' => 'string',
            'count' => 'int',
            'createTime' => 'string',
            'updateTime' => 'string',
            'synchronized' => 'bool',
            'synchronizedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * edgeNodeId  边缘节点id
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    * edgeAppName  应用ID
    * connectionInfo  数采连接信息
    * moduleState  数采连接状态,stopped|running
    * count  数采连接下点位数
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * synchronized  数采配置是否已同步，已同步：true,未同步：false
    * synchronizedTime  数采配置同步时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dsId' => null,
        'config' => null,
        'name' => null,
        'edgeNodeId' => null,
        'moduleId' => null,
        'tplId' => null,
        'qualityReport' => null,
        'edgeAppName' => null,
        'connectionInfo' => null,
        'moduleState' => null,
        'count' => 'int64',
        'createTime' => null,
        'updateTime' => null,
        'synchronized' => null,
        'synchronizedTime' => null
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
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * edgeNodeId  边缘节点id
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    * edgeAppName  应用ID
    * connectionInfo  数采连接信息
    * moduleState  数采连接状态,stopped|running
    * count  数采连接下点位数
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * synchronized  数采配置是否已同步，已同步：true,未同步：false
    * synchronizedTime  数采配置同步时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dsId' => 'ds_id',
            'config' => 'config',
            'name' => 'name',
            'edgeNodeId' => 'edge_node_id',
            'moduleId' => 'module_id',
            'tplId' => 'tpl_id',
            'qualityReport' => 'quality_report',
            'edgeAppName' => 'edge_app_name',
            'connectionInfo' => 'connection_info',
            'moduleState' => 'module_state',
            'count' => 'count',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'synchronized' => 'synchronized',
            'synchronizedTime' => 'synchronized_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * edgeNodeId  边缘节点id
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    * edgeAppName  应用ID
    * connectionInfo  数采连接信息
    * moduleState  数采连接状态,stopped|running
    * count  数采连接下点位数
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * synchronized  数采配置是否已同步，已同步：true,未同步：false
    * synchronizedTime  数采配置同步时间
    *
    * @var string[]
    */
    protected static $setters = [
            'dsId' => 'setDsId',
            'config' => 'setConfig',
            'name' => 'setName',
            'edgeNodeId' => 'setEdgeNodeId',
            'moduleId' => 'setModuleId',
            'tplId' => 'setTplId',
            'qualityReport' => 'setQualityReport',
            'edgeAppName' => 'setEdgeAppName',
            'connectionInfo' => 'setConnectionInfo',
            'moduleState' => 'setModuleState',
            'count' => 'setCount',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'synchronized' => 'setSynchronized',
            'synchronizedTime' => 'setSynchronizedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dsId  采集数据源id，节点下唯一
    * config  数据源的连接及采集信息
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * edgeNodeId  边缘节点id
    * moduleId  模块id
    * tplId  模板id，节点下唯一
    * qualityReport  质量上报开关，不携带或值不为true，默认为false
    * edgeAppName  应用ID
    * connectionInfo  数采连接信息
    * moduleState  数采连接状态,stopped|running
    * count  数采连接下点位数
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * synchronized  数采配置是否已同步，已同步：true,未同步：false
    * synchronizedTime  数采配置同步时间
    *
    * @var string[]
    */
    protected static $getters = [
            'dsId' => 'getDsId',
            'config' => 'getConfig',
            'name' => 'getName',
            'edgeNodeId' => 'getEdgeNodeId',
            'moduleId' => 'getModuleId',
            'tplId' => 'getTplId',
            'qualityReport' => 'getQualityReport',
            'edgeAppName' => 'getEdgeAppName',
            'connectionInfo' => 'getConnectionInfo',
            'moduleState' => 'getModuleState',
            'count' => 'getCount',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'synchronized' => 'getSynchronized',
            'synchronizedTime' => 'getSynchronizedTime'
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
        $this->container['dsId'] = isset($data['dsId']) ? $data['dsId'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['edgeNodeId'] = isset($data['edgeNodeId']) ? $data['edgeNodeId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['tplId'] = isset($data['tplId']) ? $data['tplId'] : null;
        $this->container['qualityReport'] = isset($data['qualityReport']) ? $data['qualityReport'] : null;
        $this->container['edgeAppName'] = isset($data['edgeAppName']) ? $data['edgeAppName'] : null;
        $this->container['connectionInfo'] = isset($data['connectionInfo']) ? $data['connectionInfo'] : null;
        $this->container['moduleState'] = isset($data['moduleState']) ? $data['moduleState'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['synchronized'] = isset($data['synchronized']) ? $data['synchronized'] : null;
        $this->container['synchronizedTime'] = isset($data['synchronizedTime']) ? $data['synchronizedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dsId']) && (mb_strlen($this->container['dsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dsId']) && (mb_strlen($this->container['dsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dsId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['dsId'])) {
                $invalidProperties[] = "invalid value for 'dsId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['edgeNodeId']) && (mb_strlen($this->container['edgeNodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeNodeId']) && (mb_strlen($this->container['edgeNodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['edgeNodeId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['edgeNodeId'])) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['moduleId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['moduleId'])) {
                $invalidProperties[] = "invalid value for 'moduleId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['tplId']) && (mb_strlen($this->container['tplId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tplId']) && (mb_strlen($this->container['tplId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tplId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['tplId'])) {
                $invalidProperties[] = "invalid value for 'tplId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['edgeAppName']) && (mb_strlen($this->container['edgeAppName']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeAppName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeAppName']) && (mb_strlen($this->container['edgeAppName']) < 0)) {
                $invalidProperties[] = "invalid value for 'edgeAppName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleState']) && (mb_strlen($this->container['moduleState']) > 32)) {
                $invalidProperties[] = "invalid value for 'moduleState', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['moduleState']) && (mb_strlen($this->container['moduleState']) < 1)) {
                $invalidProperties[] = "invalid value for 'moduleState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['synchronizedTime']) && (mb_strlen($this->container['synchronizedTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'synchronizedTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['synchronizedTime']) && (mb_strlen($this->container['synchronizedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'synchronizedTime', the character length must be bigger than or equal to 0.";
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
    * Gets dsId
    *  采集数据源id，节点下唯一
    *
    * @return string|null
    */
    public function getDsId()
    {
        return $this->container['dsId'];
    }

    /**
    * Sets dsId
    *
    * @param string|null $dsId 采集数据源id，节点下唯一
    *
    * @return $this
    */
    public function setDsId($dsId)
    {
        $this->container['dsId'] = $dsId;
        return $this;
    }

    /**
    * Gets config
    *  数据源的连接及采集信息
    *
    * @return object|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param object|null $config 数据源的连接及采集信息
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets name
    *  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
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
    * @param string|null $name 采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets edgeNodeId
    *  边缘节点id
    *
    * @return string|null
    */
    public function getEdgeNodeId()
    {
        return $this->container['edgeNodeId'];
    }

    /**
    * Sets edgeNodeId
    *
    * @param string|null $edgeNodeId 边缘节点id
    *
    * @return $this
    */
    public function setEdgeNodeId($edgeNodeId)
    {
        $this->container['edgeNodeId'] = $edgeNodeId;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets tplId
    *  模板id，节点下唯一
    *
    * @return string|null
    */
    public function getTplId()
    {
        return $this->container['tplId'];
    }

    /**
    * Sets tplId
    *
    * @param string|null $tplId 模板id，节点下唯一
    *
    * @return $this
    */
    public function setTplId($tplId)
    {
        $this->container['tplId'] = $tplId;
        return $this;
    }

    /**
    * Gets qualityReport
    *  质量上报开关，不携带或值不为true，默认为false
    *
    * @return bool|null
    */
    public function getQualityReport()
    {
        return $this->container['qualityReport'];
    }

    /**
    * Sets qualityReport
    *
    * @param bool|null $qualityReport 质量上报开关，不携带或值不为true，默认为false
    *
    * @return $this
    */
    public function setQualityReport($qualityReport)
    {
        $this->container['qualityReport'] = $qualityReport;
        return $this;
    }

    /**
    * Gets edgeAppName
    *  应用ID
    *
    * @return string|null
    */
    public function getEdgeAppName()
    {
        return $this->container['edgeAppName'];
    }

    /**
    * Sets edgeAppName
    *
    * @param string|null $edgeAppName 应用ID
    *
    * @return $this
    */
    public function setEdgeAppName($edgeAppName)
    {
        $this->container['edgeAppName'] = $edgeAppName;
        return $this;
    }

    /**
    * Gets connectionInfo
    *  数采连接信息
    *
    * @return object|null
    */
    public function getConnectionInfo()
    {
        return $this->container['connectionInfo'];
    }

    /**
    * Sets connectionInfo
    *
    * @param object|null $connectionInfo 数采连接信息
    *
    * @return $this
    */
    public function setConnectionInfo($connectionInfo)
    {
        $this->container['connectionInfo'] = $connectionInfo;
        return $this;
    }

    /**
    * Gets moduleState
    *  数采连接状态,stopped|running
    *
    * @return string|null
    */
    public function getModuleState()
    {
        return $this->container['moduleState'];
    }

    /**
    * Sets moduleState
    *
    * @param string|null $moduleState 数采连接状态,stopped|running
    *
    * @return $this
    */
    public function setModuleState($moduleState)
    {
        $this->container['moduleState'] = $moduleState;
        return $this;
    }

    /**
    * Gets count
    *  数采连接下点位数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 数采连接下点位数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最后一次修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets synchronized
    *  数采配置是否已同步，已同步：true,未同步：false
    *
    * @return bool|null
    */
    public function getSynchronized()
    {
        return $this->container['synchronized'];
    }

    /**
    * Sets synchronized
    *
    * @param bool|null $synchronized 数采配置是否已同步，已同步：true,未同步：false
    *
    * @return $this
    */
    public function setSynchronized($synchronized)
    {
        $this->container['synchronized'] = $synchronized;
        return $this;
    }

    /**
    * Gets synchronizedTime
    *  数采配置同步时间
    *
    * @return string|null
    */
    public function getSynchronizedTime()
    {
        return $this->container['synchronizedTime'];
    }

    /**
    * Sets synchronizedTime
    *
    * @param string|null $synchronizedTime 数采配置同步时间
    *
    * @return $this
    */
    public function setSynchronizedTime($synchronizedTime)
    {
        $this->container['synchronizedTime'] = $synchronizedTime;
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

