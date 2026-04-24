<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubscriptionDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubscriptionDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务id
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * ip  内网ip
    * enterpriseProjectId  企业项目id
    * status  任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
    * subscriptionDataType  subscriptionDataType
    * sourceEndpoint  sourceEndpoint
    * createdTime  创建时间，以时间戳表示
    * beginTime  开始时间，以时间戳表示
    * nowTime  当前时间，以时间戳表示
    * engineType  链路类型，当前仅支持“mysql”
    * chargeInfo  chargeInfo
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'ip' => 'string',
            'enterpriseProjectId' => 'string',
            'status' => 'string',
            'subscriptionDataType' => '\HuaweiCloud\SDK\Drs\V5\Model\SubscriptionDataType',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\SubscriptionEndpointInfo',
            'createdTime' => 'string',
            'beginTime' => 'string',
            'nowTime' => 'string',
            'engineType' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\ChargeInfoVo',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务id
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * ip  内网ip
    * enterpriseProjectId  企业项目id
    * status  任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
    * subscriptionDataType  subscriptionDataType
    * sourceEndpoint  sourceEndpoint
    * createdTime  创建时间，以时间戳表示
    * beginTime  开始时间，以时间戳表示
    * nowTime  当前时间，以时间戳表示
    * engineType  链路类型，当前仅支持“mysql”
    * chargeInfo  chargeInfo
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'ip' => null,
        'enterpriseProjectId' => null,
        'status' => null,
        'subscriptionDataType' => null,
        'sourceEndpoint' => null,
        'createdTime' => null,
        'beginTime' => null,
        'nowTime' => null,
        'engineType' => null,
        'chargeInfo' => null,
        'description' => null
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
    * id  任务id
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * ip  内网ip
    * enterpriseProjectId  企业项目id
    * status  任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
    * subscriptionDataType  subscriptionDataType
    * sourceEndpoint  sourceEndpoint
    * createdTime  创建时间，以时间戳表示
    * beginTime  开始时间，以时间戳表示
    * nowTime  当前时间，以时间戳表示
    * engineType  链路类型，当前仅支持“mysql”
    * chargeInfo  chargeInfo
    * description  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'ip' => 'ip',
            'enterpriseProjectId' => 'enterprise_project_id',
            'status' => 'status',
            'subscriptionDataType' => 'subscription_data_type',
            'sourceEndpoint' => 'source_endpoint',
            'createdTime' => 'created_time',
            'beginTime' => 'begin_time',
            'nowTime' => 'now_time',
            'engineType' => 'engine_type',
            'chargeInfo' => 'charge_info',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务id
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * ip  内网ip
    * enterpriseProjectId  企业项目id
    * status  任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
    * subscriptionDataType  subscriptionDataType
    * sourceEndpoint  sourceEndpoint
    * createdTime  创建时间，以时间戳表示
    * beginTime  开始时间，以时间戳表示
    * nowTime  当前时间，以时间戳表示
    * engineType  链路类型，当前仅支持“mysql”
    * chargeInfo  chargeInfo
    * description  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'ip' => 'setIp',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'status' => 'setStatus',
            'subscriptionDataType' => 'setSubscriptionDataType',
            'sourceEndpoint' => 'setSourceEndpoint',
            'createdTime' => 'setCreatedTime',
            'beginTime' => 'setBeginTime',
            'nowTime' => 'setNowTime',
            'engineType' => 'setEngineType',
            'chargeInfo' => 'setChargeInfo',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务id
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * ip  内网ip
    * enterpriseProjectId  企业项目id
    * status  任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
    * subscriptionDataType  subscriptionDataType
    * sourceEndpoint  sourceEndpoint
    * createdTime  创建时间，以时间戳表示
    * beginTime  开始时间，以时间戳表示
    * nowTime  当前时间，以时间戳表示
    * engineType  链路类型，当前仅支持“mysql”
    * chargeInfo  chargeInfo
    * description  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'ip' => 'getIp',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'status' => 'getStatus',
            'subscriptionDataType' => 'getSubscriptionDataType',
            'sourceEndpoint' => 'getSourceEndpoint',
            'createdTime' => 'getCreatedTime',
            'beginTime' => 'getBeginTime',
            'nowTime' => 'getNowTime',
            'engineType' => 'getEngineType',
            'chargeInfo' => 'getChargeInfo',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subscriptionDataType'] = isset($data['subscriptionDataType']) ? $data['subscriptionDataType'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['nowTime'] = isset($data['nowTime']) ? $data['nowTime'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    *  任务id
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
    * @param string|null $id 任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
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
    * @param string|null $name 任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ip
    *  内网ip
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 内网ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
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
    * @param string|null $status 任务状态，取值： CONFIGURATION：配置中 CREATING：创建中 CREATE_FAILED：创建失败 STARTJOBING：启动中 STARTJOB_FAILED：任务启动失败 SUBSCRIPTION_STARTED：正常 SUBSCRIPTION_FAILED：异常 DELETED：已删除 FROZEN：冻结状态 REBUILD_NODE_STARTED：订阅任务恢复中 REBUILD_NODE_FAILED：订阅任务恢复失败 NODE_UPGRADE_START：升级开始 NODE_UPGRADE_COMPLETE：升级完成 NODE_UPGRADE_FAILED：升级失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subscriptionDataType
    *  subscriptionDataType
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SubscriptionDataType|null
    */
    public function getSubscriptionDataType()
    {
        return $this->container['subscriptionDataType'];
    }

    /**
    * Sets subscriptionDataType
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SubscriptionDataType|null $subscriptionDataType subscriptionDataType
    *
    * @return $this
    */
    public function setSubscriptionDataType($subscriptionDataType)
    {
        $this->container['subscriptionDataType'] = $subscriptionDataType;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  sourceEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SubscriptionEndpointInfo|null
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SubscriptionEndpointInfo|null $sourceEndpoint sourceEndpoint
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间，以时间戳表示
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间，以时间戳表示
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间，以时间戳表示
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 开始时间，以时间戳表示
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets nowTime
    *  当前时间，以时间戳表示
    *
    * @return string|null
    */
    public function getNowTime()
    {
        return $this->container['nowTime'];
    }

    /**
    * Sets nowTime
    *
    * @param string|null $nowTime 当前时间，以时间戳表示
    *
    * @return $this
    */
    public function setNowTime($nowTime)
    {
        $this->container['nowTime'] = $nowTime;
        return $this;
    }

    /**
    * Gets engineType
    *  链路类型，当前仅支持“mysql”
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 链路类型，当前仅支持“mysql”
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ChargeInfoVo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ChargeInfoVo|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

