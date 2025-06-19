<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSparkJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSparkJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
    * appId  参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
    * log  参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
    * clusterName  参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * owner  参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * proxyUser  参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * kind  参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
    * queue  参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
    * image  参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
    * updateTime  参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
            'updateTime' => 'int',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
    * appId  参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
    * log  参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
    * clusterName  参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * owner  参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * proxyUser  参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * kind  参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
    * queue  参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
    * image  参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
    * updateTime  参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    * id  参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
    * appId  参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
    * log  参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
    * clusterName  参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * owner  参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * proxyUser  参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * kind  参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
    * queue  参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
    * image  参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
    * updateTime  参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
            'updateTime' => 'update_time',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
    * appId  参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
    * log  参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
    * clusterName  参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * owner  参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * proxyUser  参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * kind  参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
    * queue  参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
    * image  参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
    * updateTime  参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
            'updateTime' => 'setUpdateTime',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
    * state  参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
    * appId  参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
    * log  参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
    * clusterName  参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * owner  参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * proxyUser  参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * kind  参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
    * queue  参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
    * image  参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
    * updateTime  参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
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
    *  参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $id 参数解释:   Batch作业的id 示例: 80ceaaff-3cfc-4162-a56f-70031ea4fa91 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
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
    * @param string|null $state 参数解释:   Batch作业的状态 示例: starting 约束限制:  无 取值范围: starting：正在启动 running：正在执行任务 dead：session已退出 success：session停止成功 recovering：正在恢复 默认取值: 无
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
    *  参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $appId 参数解释:   批处理作业的后台app id 示例: batch-session-ca2a4042-0db9-45ab-bc7f-ae6a56846348:30671 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string[]|null $log 参数解释:   显示当前Batch作业的最后10条记录 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
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
    * @param string|null $scType 参数解释: 计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制: 无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6 B：16核64G内存,2,2,7G,8G,7 C：32核128G内存,4,2,15G,8G,14 默认取值: 无
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
    *  参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $clusterName 参数解释:   会话所在队列 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    * @param int|null $createTime 参数解释:   Batch的创建时间。是单位为“毫秒”的时间戳 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    *  参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
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
    * @param string|null $name 参数解释:   创建时用户指定的批处理名称，不能超过128个字符 示例: test_spark 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
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
    *  参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $owner 参数解释:   批处理作业所属用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $proxyUser 参数解释:  批处理作业所属代理用户（资源租户） 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
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
    * @param string|null $kind 参数解释:  批处理作业类型，只支持spark类型参数 示例: spark 约束限制:  无 取值范围: spark 默认取值: 无
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
    *  参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $queue 参数解释:  用于指定队列，填写已创建DLI的队列名 示例: gen0218 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $image 参数解释:  自定义镜像。格式为：组织名/镜像名:镜像版本 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets updateTime
    *  参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    * @param int|null $updateTime 参数解释:  批处理作业的更新时间。是单位为“毫秒”的时间戳 示例: 1739867779341 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    *  参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    * @param int|null $duration 参数解释:  作业运行时长，单位毫秒 示例: 213038 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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

