<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccessConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccessConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessConfigId  日志接入ID
    * accessConfigName  日志接入名称
    * accessConfigType  日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    * createTime  创建时间
    * accessConfigDetail  accessConfigDetail
    * logInfo  logInfo
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  二进制采集
    * binaryCollect  日志拆分
    * clusterId  CCE集群ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessConfigId' => 'string',
            'accessConfigName' => 'string',
            'accessConfigType' => 'string',
            'createTime' => 'int',
            'accessConfigDetail' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigDeatilCreate',
            'logInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigQueryLogInfo',
            'hostGroupInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigHostGroupIdList',
            'accessConfigTag' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]',
            'logSplit' => 'bool',
            'binaryCollect' => 'bool',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessConfigId  日志接入ID
    * accessConfigName  日志接入名称
    * accessConfigType  日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    * createTime  创建时间
    * accessConfigDetail  accessConfigDetail
    * logInfo  logInfo
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  二进制采集
    * binaryCollect  日志拆分
    * clusterId  CCE集群ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessConfigId' => null,
        'accessConfigName' => null,
        'accessConfigType' => null,
        'createTime' => 'int64',
        'accessConfigDetail' => null,
        'logInfo' => null,
        'hostGroupInfo' => null,
        'accessConfigTag' => null,
        'logSplit' => null,
        'binaryCollect' => null,
        'clusterId' => null
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
    * accessConfigId  日志接入ID
    * accessConfigName  日志接入名称
    * accessConfigType  日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    * createTime  创建时间
    * accessConfigDetail  accessConfigDetail
    * logInfo  logInfo
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  二进制采集
    * binaryCollect  日志拆分
    * clusterId  CCE集群ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessConfigId' => 'access_config_id',
            'accessConfigName' => 'access_config_name',
            'accessConfigType' => 'access_config_type',
            'createTime' => 'create_time',
            'accessConfigDetail' => 'access_config_detail',
            'logInfo' => 'log_info',
            'hostGroupInfo' => 'host_group_info',
            'accessConfigTag' => 'access_config_tag',
            'logSplit' => 'log_split',
            'binaryCollect' => 'binary_collect',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessConfigId  日志接入ID
    * accessConfigName  日志接入名称
    * accessConfigType  日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    * createTime  创建时间
    * accessConfigDetail  accessConfigDetail
    * logInfo  logInfo
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  二进制采集
    * binaryCollect  日志拆分
    * clusterId  CCE集群ID
    *
    * @var string[]
    */
    protected static $setters = [
            'accessConfigId' => 'setAccessConfigId',
            'accessConfigName' => 'setAccessConfigName',
            'accessConfigType' => 'setAccessConfigType',
            'createTime' => 'setCreateTime',
            'accessConfigDetail' => 'setAccessConfigDetail',
            'logInfo' => 'setLogInfo',
            'hostGroupInfo' => 'setHostGroupInfo',
            'accessConfigTag' => 'setAccessConfigTag',
            'logSplit' => 'setLogSplit',
            'binaryCollect' => 'setBinaryCollect',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessConfigId  日志接入ID
    * accessConfigName  日志接入名称
    * accessConfigType  日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    * createTime  创建时间
    * accessConfigDetail  accessConfigDetail
    * logInfo  logInfo
    * hostGroupInfo  hostGroupInfo
    * accessConfigTag  标签信息。KEY不能重复,最多20个标签
    * logSplit  二进制采集
    * binaryCollect  日志拆分
    * clusterId  CCE集群ID
    *
    * @var string[]
    */
    protected static $getters = [
            'accessConfigId' => 'getAccessConfigId',
            'accessConfigName' => 'getAccessConfigName',
            'accessConfigType' => 'getAccessConfigType',
            'createTime' => 'getCreateTime',
            'accessConfigDetail' => 'getAccessConfigDetail',
            'logInfo' => 'getLogInfo',
            'hostGroupInfo' => 'getHostGroupInfo',
            'accessConfigTag' => 'getAccessConfigTag',
            'logSplit' => 'getLogSplit',
            'binaryCollect' => 'getBinaryCollect',
            'clusterId' => 'getClusterId'
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
    const ACCESS_CONFIG_TYPE_AGENT = 'AGENT';
    const ACCESS_CONFIG_TYPE_K8_S_CCE = 'K8S_CCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessConfigTypeAllowableValues()
    {
        return [
            self::ACCESS_CONFIG_TYPE_AGENT,
            self::ACCESS_CONFIG_TYPE_K8_S_CCE,
        ];
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
        $this->container['accessConfigId'] = isset($data['accessConfigId']) ? $data['accessConfigId'] : null;
        $this->container['accessConfigName'] = isset($data['accessConfigName']) ? $data['accessConfigName'] : null;
        $this->container['accessConfigType'] = isset($data['accessConfigType']) ? $data['accessConfigType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['accessConfigDetail'] = isset($data['accessConfigDetail']) ? $data['accessConfigDetail'] : null;
        $this->container['logInfo'] = isset($data['logInfo']) ? $data['logInfo'] : null;
        $this->container['hostGroupInfo'] = isset($data['hostGroupInfo']) ? $data['hostGroupInfo'] : null;
        $this->container['accessConfigTag'] = isset($data['accessConfigTag']) ? $data['accessConfigTag'] : null;
        $this->container['logSplit'] = isset($data['logSplit']) ? $data['logSplit'] : null;
        $this->container['binaryCollect'] = isset($data['binaryCollect']) ? $data['binaryCollect'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessConfigId']) && (mb_strlen($this->container['accessConfigId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accessConfigId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['accessConfigId']) && (mb_strlen($this->container['accessConfigId']) < 36)) {
                $invalidProperties[] = "invalid value for 'accessConfigId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['accessConfigName']) && (mb_strlen($this->container['accessConfigName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessConfigName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accessConfigName']) && (mb_strlen($this->container['accessConfigName']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessConfigName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessConfigName']) && !preg_match("/^(?!\\.)(?!_)(?!.*?\\.$)[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,64}$/", $this->container['accessConfigName'])) {
                $invalidProperties[] = "invalid value for 'accessConfigName', must be conform to the pattern /^(?!\\.)(?!_)(?!.*?\\.$)[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,64}$/.";
            }
            $allowedValues = $this->getAccessConfigTypeAllowableValues();
                if (!is_null($this->container['accessConfigType']) && !in_array($this->container['accessConfigType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessConfigType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1.";
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
    * Gets accessConfigId
    *  日志接入ID
    *
    * @return string|null
    */
    public function getAccessConfigId()
    {
        return $this->container['accessConfigId'];
    }

    /**
    * Sets accessConfigId
    *
    * @param string|null $accessConfigId 日志接入ID
    *
    * @return $this
    */
    public function setAccessConfigId($accessConfigId)
    {
        $this->container['accessConfigId'] = $accessConfigId;
        return $this;
    }

    /**
    * Gets accessConfigName
    *  日志接入名称
    *
    * @return string|null
    */
    public function getAccessConfigName()
    {
        return $this->container['accessConfigName'];
    }

    /**
    * Sets accessConfigName
    *
    * @param string|null $accessConfigName 日志接入名称
    *
    * @return $this
    */
    public function setAccessConfigName($accessConfigName)
    {
        $this->container['accessConfigName'] = $accessConfigName;
        return $this;
    }

    /**
    * Gets accessConfigType
    *  日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    *
    * @return string|null
    */
    public function getAccessConfigType()
    {
        return $this->container['accessConfigType'];
    }

    /**
    * Sets accessConfigType
    *
    * @param string|null $accessConfigType 日志接入类型。AGENT：ECS接入  K8S_CCE: CCE接入
    *
    * @return $this
    */
    public function setAccessConfigType($accessConfigType)
    {
        $this->container['accessConfigType'] = $accessConfigType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets accessConfigDetail
    *  accessConfigDetail
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigDeatilCreate|null
    */
    public function getAccessConfigDetail()
    {
        return $this->container['accessConfigDetail'];
    }

    /**
    * Sets accessConfigDetail
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigDeatilCreate|null $accessConfigDetail accessConfigDetail
    *
    * @return $this
    */
    public function setAccessConfigDetail($accessConfigDetail)
    {
        $this->container['accessConfigDetail'] = $accessConfigDetail;
        return $this;
    }

    /**
    * Gets logInfo
    *  logInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigQueryLogInfo|null
    */
    public function getLogInfo()
    {
        return $this->container['logInfo'];
    }

    /**
    * Sets logInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigQueryLogInfo|null $logInfo logInfo
    *
    * @return $this
    */
    public function setLogInfo($logInfo)
    {
        $this->container['logInfo'] = $logInfo;
        return $this;
    }

    /**
    * Gets hostGroupInfo
    *  hostGroupInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigHostGroupIdList|null
    */
    public function getHostGroupInfo()
    {
        return $this->container['hostGroupInfo'];
    }

    /**
    * Sets hostGroupInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigHostGroupIdList|null $hostGroupInfo hostGroupInfo
    *
    * @return $this
    */
    public function setHostGroupInfo($hostGroupInfo)
    {
        $this->container['hostGroupInfo'] = $hostGroupInfo;
        return $this;
    }

    /**
    * Gets accessConfigTag
    *  标签信息。KEY不能重复,最多20个标签
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]|null
    */
    public function getAccessConfigTag()
    {
        return $this->container['accessConfigTag'];
    }

    /**
    * Sets accessConfigTag
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]|null $accessConfigTag 标签信息。KEY不能重复,最多20个标签
    *
    * @return $this
    */
    public function setAccessConfigTag($accessConfigTag)
    {
        $this->container['accessConfigTag'] = $accessConfigTag;
        return $this;
    }

    /**
    * Gets logSplit
    *  二进制采集
    *
    * @return bool|null
    */
    public function getLogSplit()
    {
        return $this->container['logSplit'];
    }

    /**
    * Sets logSplit
    *
    * @param bool|null $logSplit 二进制采集
    *
    * @return $this
    */
    public function setLogSplit($logSplit)
    {
        $this->container['logSplit'] = $logSplit;
        return $this;
    }

    /**
    * Gets binaryCollect
    *  日志拆分
    *
    * @return bool|null
    */
    public function getBinaryCollect()
    {
        return $this->container['binaryCollect'];
    }

    /**
    * Sets binaryCollect
    *
    * @param bool|null $binaryCollect 日志拆分
    *
    * @return $this
    */
    public function setBinaryCollect($binaryCollect)
    {
        $this->container['binaryCollect'] = $binaryCollect;
        return $this;
    }

    /**
    * Gets clusterId
    *  CCE集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId CCE集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

