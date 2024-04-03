<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SparkJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SparkJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Batch作业的id。
    * state  Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
    * appId  批处理作业的后台app id。
    * log  显示当前Batch作业的最后10条记录。
    * scType  计算资源类型。用户自定义时返回CUSTOMIZED。
    * clusterName  会话所在队列。
    * createTime  Batch的创建时间。是单位为“毫秒”的时间戳。
    * name  创建时用户指定的批处理名称，不能超过128个字符。
    * owner  批处理作业所属用户
    * proxyUser  批处理作业所属代理用户（资源租户）。
    * kind  批处理作业类型，只支持spark类型参数。
    * queue  用于指定队列，填写已创建DLI的队列名
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。
    * reqBody  请求参数详情
    * updateTime  更新时间
    * duration  作业运行时长，单位毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'state' => 'string',
            'appId' => 'string',
            'log' => 'string[]',
            'scType' => 'string',
            'clusterName' => 'string',
            'createTime' => 'int',
            'name' => 'string',
            'owner' => 'string',
            'proxyUser' => 'string',
            'kind' => 'string',
            'queue' => 'string',
            'image' => 'string',
            'reqBody' => 'string',
            'updateTime' => 'int',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Batch作业的id。
    * state  Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
    * appId  批处理作业的后台app id。
    * log  显示当前Batch作业的最后10条记录。
    * scType  计算资源类型。用户自定义时返回CUSTOMIZED。
    * clusterName  会话所在队列。
    * createTime  Batch的创建时间。是单位为“毫秒”的时间戳。
    * name  创建时用户指定的批处理名称，不能超过128个字符。
    * owner  批处理作业所属用户
    * proxyUser  批处理作业所属代理用户（资源租户）。
    * kind  批处理作业类型，只支持spark类型参数。
    * queue  用于指定队列，填写已创建DLI的队列名
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。
    * reqBody  请求参数详情
    * updateTime  更新时间
    * duration  作业运行时长，单位毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'state' => null,
        'appId' => null,
        'log' => null,
        'scType' => null,
        'clusterName' => null,
        'createTime' => 'int64',
        'name' => null,
        'owner' => null,
        'proxyUser' => null,
        'kind' => null,
        'queue' => null,
        'image' => null,
        'reqBody' => null,
        'updateTime' => 'int64',
        'duration' => 'int64'
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
    * id  Batch作业的id。
    * state  Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
    * appId  批处理作业的后台app id。
    * log  显示当前Batch作业的最后10条记录。
    * scType  计算资源类型。用户自定义时返回CUSTOMIZED。
    * clusterName  会话所在队列。
    * createTime  Batch的创建时间。是单位为“毫秒”的时间戳。
    * name  创建时用户指定的批处理名称，不能超过128个字符。
    * owner  批处理作业所属用户
    * proxyUser  批处理作业所属代理用户（资源租户）。
    * kind  批处理作业类型，只支持spark类型参数。
    * queue  用于指定队列，填写已创建DLI的队列名
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。
    * reqBody  请求参数详情
    * updateTime  更新时间
    * duration  作业运行时长，单位毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'state' => 'state',
            'appId' => 'appId',
            'log' => 'log',
            'scType' => 'sc_type',
            'clusterName' => 'cluster_name',
            'createTime' => 'create_time',
            'name' => 'name',
            'owner' => 'owner',
            'proxyUser' => 'proxyUser',
            'kind' => 'kind',
            'queue' => 'queue',
            'image' => 'image',
            'reqBody' => 'req_body',
            'updateTime' => 'update_time',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Batch作业的id。
    * state  Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
    * appId  批处理作业的后台app id。
    * log  显示当前Batch作业的最后10条记录。
    * scType  计算资源类型。用户自定义时返回CUSTOMIZED。
    * clusterName  会话所在队列。
    * createTime  Batch的创建时间。是单位为“毫秒”的时间戳。
    * name  创建时用户指定的批处理名称，不能超过128个字符。
    * owner  批处理作业所属用户
    * proxyUser  批处理作业所属代理用户（资源租户）。
    * kind  批处理作业类型，只支持spark类型参数。
    * queue  用于指定队列，填写已创建DLI的队列名
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。
    * reqBody  请求参数详情
    * updateTime  更新时间
    * duration  作业运行时长，单位毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'state' => 'setState',
            'appId' => 'setAppId',
            'log' => 'setLog',
            'scType' => 'setScType',
            'clusterName' => 'setClusterName',
            'createTime' => 'setCreateTime',
            'name' => 'setName',
            'owner' => 'setOwner',
            'proxyUser' => 'setProxyUser',
            'kind' => 'setKind',
            'queue' => 'setQueue',
            'image' => 'setImage',
            'reqBody' => 'setReqBody',
            'updateTime' => 'setUpdateTime',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Batch作业的id。
    * state  Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
    * appId  批处理作业的后台app id。
    * log  显示当前Batch作业的最后10条记录。
    * scType  计算资源类型。用户自定义时返回CUSTOMIZED。
    * clusterName  会话所在队列。
    * createTime  Batch的创建时间。是单位为“毫秒”的时间戳。
    * name  创建时用户指定的批处理名称，不能超过128个字符。
    * owner  批处理作业所属用户
    * proxyUser  批处理作业所属代理用户（资源租户）。
    * kind  批处理作业类型，只支持spark类型参数。
    * queue  用于指定队列，填写已创建DLI的队列名
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。
    * reqBody  请求参数详情
    * updateTime  更新时间
    * duration  作业运行时长，单位毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'state' => 'getState',
            'appId' => 'getAppId',
            'log' => 'getLog',
            'scType' => 'getScType',
            'clusterName' => 'getClusterName',
            'createTime' => 'getCreateTime',
            'name' => 'getName',
            'owner' => 'getOwner',
            'proxyUser' => 'getProxyUser',
            'kind' => 'getKind',
            'queue' => 'getQueue',
            'image' => 'getImage',
            'reqBody' => 'getReqBody',
            'updateTime' => 'getUpdateTime',
            'duration' => 'getDuration'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['log'] = isset($data['log']) ? $data['log'] : null;
        $this->container['scType'] = isset($data['scType']) ? $data['scType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['proxyUser'] = isset($data['proxyUser']) ? $data['proxyUser'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['reqBody'] = isset($data['reqBody']) ? $data['reqBody'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
    *  Batch作业的id。
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
    * @param string|null $id Batch作业的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
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
    * @param string|null $state Batch作业的状态。包括： starting：正在启动；running：正在执行任务；dead：session已退出；success：session停止成功；recovering：正在恢复。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets appId
    *  批处理作业的后台app id。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 批处理作业的后台app id。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets log
    *  显示当前Batch作业的最后10条记录。
    *
    * @return string[]|null
    */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
    * Sets log
    *
    * @param string[]|null $log 显示当前Batch作业的最后10条记录。
    *
    * @return $this
    */
    public function setLog($log)
    {
        $this->container['log'] = $log;
        return $this;
    }

    /**
    * Gets scType
    *  计算资源类型。用户自定义时返回CUSTOMIZED。
    *
    * @return string|null
    */
    public function getScType()
    {
        return $this->container['scType'];
    }

    /**
    * Sets scType
    *
    * @param string|null $scType 计算资源类型。用户自定义时返回CUSTOMIZED。
    *
    * @return $this
    */
    public function setScType($scType)
    {
        $this->container['scType'] = $scType;
        return $this;
    }

    /**
    * Gets clusterName
    *  会话所在队列。
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
    * @param string|null $clusterName 会话所在队列。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets createTime
    *  Batch的创建时间。是单位为“毫秒”的时间戳。
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
    * @param int|null $createTime Batch的创建时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets name
    *  创建时用户指定的批处理名称，不能超过128个字符。
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
    * @param string|null $name 创建时用户指定的批处理名称，不能超过128个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  批处理作业所属用户
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 批处理作业所属用户
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets proxyUser
    *  批处理作业所属代理用户（资源租户）。
    *
    * @return string|null
    */
    public function getProxyUser()
    {
        return $this->container['proxyUser'];
    }

    /**
    * Sets proxyUser
    *
    * @param string|null $proxyUser 批处理作业所属代理用户（资源租户）。
    *
    * @return $this
    */
    public function setProxyUser($proxyUser)
    {
        $this->container['proxyUser'] = $proxyUser;
        return $this;
    }

    /**
    * Gets kind
    *  批处理作业类型，只支持spark类型参数。
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind 批处理作业类型，只支持spark类型参数。
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets queue
    *  用于指定队列，填写已创建DLI的队列名
    *
    * @return string|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param string|null $queue 用于指定队列，填写已创建DLI的队列名
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets image
    *  自定义镜像。格式为：组织名/镜像名:镜像版本。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 自定义镜像。格式为：组织名/镜像名:镜像版本。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets reqBody
    *  请求参数详情
    *
    * @return string|null
    */
    public function getReqBody()
    {
        return $this->container['reqBody'];
    }

    /**
    * Sets reqBody
    *
    * @param string|null $reqBody 请求参数详情
    *
    * @return $this
    */
    public function setReqBody($reqBody)
    {
        $this->container['reqBody'] = $reqBody;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets duration
    *  作业运行时长，单位毫秒。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 作业运行时长，单位毫秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

