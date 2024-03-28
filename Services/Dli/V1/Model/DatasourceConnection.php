<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasourceConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasourceConnection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * connectionId  连接ID，用于标识跨源连接的UUID。
    * destination  创建连接时，用户填写的队列的访问地址。
    * state  连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    * process  正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    * name  创建连接时，用户自定义的连接名称。
    * connectionUrl  用于建立跨源关联表时，需要使用到的连接url。
    * clusterName  Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    * service  创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    * createTime  创建连接的时间。为UTC的时间戳。
    * queueList  当前跨源已绑定的队列名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'connectionId' => 'string',
            'destination' => 'string',
            'state' => 'string',
            'process' => 'double',
            'name' => 'string',
            'connectionUrl' => 'string',
            'clusterName' => 'string',
            'service' => 'string',
            'createTime' => 'int',
            'queueList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * connectionId  连接ID，用于标识跨源连接的UUID。
    * destination  创建连接时，用户填写的队列的访问地址。
    * state  连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    * process  正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    * name  创建连接时，用户自定义的连接名称。
    * connectionUrl  用于建立跨源关联表时，需要使用到的连接url。
    * clusterName  Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    * service  创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    * createTime  创建连接的时间。为UTC的时间戳。
    * queueList  当前跨源已绑定的队列名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'connectionId' => null,
        'destination' => null,
        'state' => null,
        'process' => 'double',
        'name' => null,
        'connectionUrl' => null,
        'clusterName' => null,
        'service' => null,
        'createTime' => 'int64',
        'queueList' => null
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
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * connectionId  连接ID，用于标识跨源连接的UUID。
    * destination  创建连接时，用户填写的队列的访问地址。
    * state  连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    * process  正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    * name  创建连接时，用户自定义的连接名称。
    * connectionUrl  用于建立跨源关联表时，需要使用到的连接url。
    * clusterName  Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    * service  创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    * createTime  创建连接的时间。为UTC的时间戳。
    * queueList  当前跨源已绑定的队列名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'connectionId' => 'connection_id',
            'destination' => 'destination',
            'state' => 'state',
            'process' => 'process',
            'name' => 'name',
            'connectionUrl' => 'connection_url',
            'clusterName' => 'cluster_name',
            'service' => 'service',
            'createTime' => 'create_time',
            'queueList' => 'queue_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * connectionId  连接ID，用于标识跨源连接的UUID。
    * destination  创建连接时，用户填写的队列的访问地址。
    * state  连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    * process  正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    * name  创建连接时，用户自定义的连接名称。
    * connectionUrl  用于建立跨源关联表时，需要使用到的连接url。
    * clusterName  Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    * service  创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    * createTime  创建连接的时间。为UTC的时间戳。
    * queueList  当前跨源已绑定的队列名
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'connectionId' => 'setConnectionId',
            'destination' => 'setDestination',
            'state' => 'setState',
            'process' => 'setProcess',
            'name' => 'setName',
            'connectionUrl' => 'setConnectionUrl',
            'clusterName' => 'setClusterName',
            'service' => 'setService',
            'createTime' => 'setCreateTime',
            'queueList' => 'setQueueList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息为空。
    * connectionId  连接ID，用于标识跨源连接的UUID。
    * destination  创建连接时，用户填写的队列的访问地址。
    * state  连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    * process  正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    * name  创建连接时，用户自定义的连接名称。
    * connectionUrl  用于建立跨源关联表时，需要使用到的连接url。
    * clusterName  Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    * service  创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    * createTime  创建连接的时间。为UTC的时间戳。
    * queueList  当前跨源已绑定的队列名
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'connectionId' => 'getConnectionId',
            'destination' => 'getDestination',
            'state' => 'getState',
            'process' => 'getProcess',
            'name' => 'getName',
            'connectionUrl' => 'getConnectionUrl',
            'clusterName' => 'getClusterName',
            'service' => 'getService',
            'createTime' => 'getCreateTime',
            'queueList' => 'getQueueList'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['connectionUrl'] = isset($data['connectionUrl']) ? $data['connectionUrl'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['queueList'] = isset($data['queueList']) ? $data['queueList'] : null;
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
    * Gets isSuccess
    *  执行请求是否成功。“true”表示请求执行成功。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 执行请求是否成功。“true”表示请求执行成功。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息，执行成功时，信息为空。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 系统提示信息，执行成功时，信息为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets connectionId
    *  连接ID，用于标识跨源连接的UUID。
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 连接ID，用于标识跨源连接的UUID。
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets destination
    *  创建连接时，用户填写的队列的访问地址。
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 创建连接时，用户填写的队列的访问地址。
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets state
    *  连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 连接状态。CREATING：跨源连接正在创建中；ACTIVE：跨源连接创建成功，与目的地址连接正常；FAILED：跨源连接创建失败；DELETED：跨源连接已被删除。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets process
    *  正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    *
    * @return double|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param double|null $process 正在创建的跨源连接进度，显示0.0至1.0代表0%至100%。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets name
    *  创建连接时，用户自定义的连接名称。
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
    * @param string|null $name 创建连接时，用户自定义的连接名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets connectionUrl
    *  用于建立跨源关联表时，需要使用到的连接url。
    *
    * @return string|null
    */
    public function getConnectionUrl()
    {
        return $this->container['connectionUrl'];
    }

    /**
    * Sets connectionUrl
    *
    * @param string|null $connectionUrl 用于建立跨源关联表时，需要使用到的连接url。
    *
    * @return $this
    */
    public function setConnectionUrl($connectionUrl)
    {
        $this->container['connectionUrl'] = $connectionUrl;
        return $this;
    }

    /**
    * Gets clusterName
    *  Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName Serverless Spark队列名称。SQL队列模式下建立的跨源连接，该字段为空。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets service
    *  创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 创建连接时，用户指定的对端服务（CloudTable/CloudTable.OpenTSDB/MRS.OpenTSDB/DWS/RDS/CSS）。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets createTime
    *  创建连接的时间。为UTC的时间戳。
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
    * @param int|null $createTime 创建连接的时间。为UTC的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets queueList
    *  当前跨源已绑定的队列名
    *
    * @return string[]|null
    */
    public function getQueueList()
    {
        return $this->container['queueList'];
    }

    /**
    * Sets queueList
    *
    * @param string[]|null $queueList 当前跨源已绑定的队列名
    *
    * @return $this
    */
    public function setQueueList($queueList)
    {
        $this->container['queueList'] = $queueList;
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

