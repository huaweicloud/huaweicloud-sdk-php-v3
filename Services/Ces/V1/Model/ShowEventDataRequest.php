<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim0  指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim1  指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim2  指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim3  指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * type  事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'dim0' => 'string',
            'dim1' => 'string',
            'dim2' => 'string',
            'dim3' => 'string',
            'type' => 'string',
            'from' => 'int',
            'to' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim0  指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim1  指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim2  指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim3  指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * type  事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'dim0' => null,
        'dim1' => null,
        'dim2' => null,
        'dim3' => null,
        'type' => null,
        'from' => 'int64',
        'to' => 'int64'
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
    * namespace  指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim0  指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim1  指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim2  指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim3  指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * type  事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'dim0' => 'dim.0',
            'dim1' => 'dim.1',
            'dim2' => 'dim.2',
            'dim3' => 'dim.3',
            'type' => 'type',
            'from' => 'from',
            'to' => 'to'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim0  指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim1  指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim2  指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim3  指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * type  事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'dim0' => 'setDim0',
            'dim1' => 'setDim1',
            'dim2' => 'setDim2',
            'dim3' => 'setDim3',
            'type' => 'setType',
            'from' => 'setFrom',
            'to' => 'setTo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim0  指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim1  指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim2  指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dim3  指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * type  事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    * from  查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    * to  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'dim0' => 'getDim0',
            'dim1' => 'getDim1',
            'dim2' => 'getDim2',
            'dim3' => 'getDim3',
            'type' => 'getType',
            'from' => 'getFrom',
            'to' => 'getTo'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dim0'] = isset($data['dim0']) ? $data['dim0'] : null;
        $this->container['dim1'] = isset($data['dim1']) ? $data['dim1'] : null;
        $this->container['dim2'] = isset($data['dim2']) ? $data['dim2'] : null;
        $this->container['dim3'] = isset($data['dim3']) ? $data['dim3'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['dim0'] === null) {
            $invalidProperties[] = "'dim0' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
    * Gets namespace
    *  指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 指标命名空间，如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dim0
    *  指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string
    */
    public function getDim0()
    {
        return $this->container['dim0'];
    }

    /**
    * Sets dim0
    *
    * @param string $dim0 指标的第一层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.0=key,value，如mongodb_cluster_id,4270ff17-aba3-4138-89fa-820594c39755；key为指标的维度信息，如：文档数据库服务，则第一层维度为mongodb_cluster_id，value为文档数据库实例ID；各服务资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setDim0($dim0)
    {
        $this->container['dim0'] = $dim0;
        return $this;
    }

    /**
    * Gets dim1
    *  指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string|null
    */
    public function getDim1()
    {
        return $this->container['dim1'];
    }

    /**
    * Sets dim1
    *
    * @param string|null $dim1 指标的第二层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.1=key,value，如mongos_instance_id,c65d39d7-185c-4616-9aca-ad65703b15f9；key为指标的维度信息，如：文档数据库服务，则第二层维度为mongos_instance_id，value为文档数据库集群实例下的mongos节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setDim1($dim1)
    {
        $this->container['dim1'] = $dim1;
        return $this;
    }

    /**
    * Gets dim2
    *  指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string|null
    */
    public function getDim2()
    {
        return $this->container['dim2'];
    }

    /**
    * Sets dim2
    *
    * @param string|null $dim2 指标的第三层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.2=key,value，如mongod_primary_instance_id,5f9498e9-36f8-4317-9ea1-ebe28cba99b4；key为指标的维度信息，如：文档数据库服务，则第三层维度为mongod_primary_instance_id，value为文档数据库实例下的主节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setDim2($dim2)
    {
        $this->container['dim2'] = $dim2;
        return $this;
    }

    /**
    * Gets dim3
    *  指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string|null
    */
    public function getDim3()
    {
        return $this->container['dim3'];
    }

    /**
    * Sets dim3
    *
    * @param string|null $dim3 指标的第四层维度，目前最大支持4个维度，维度编号从0开始；维度格式为dim.3=key,value，如mongod_secondary_instance_id,b46fa2c7-aac6-4ae3-9337-f4ea97f885cb；key为指标的维度信息，如：文档数据库服务，则第四层维度为mongod_secondary_instance_id，value为文档数据库实例下的备节点ID；各资源的指标维度名称可查看：“[服务指标维度](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setDim3($dim3)
    {
        $this->container['dim3'] = $dim3;
        return $this;
    }

    /**
    * Gets type
    *  事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 事件类型，只允许字母、下划线、中划线，字母开头，长度不超过64，如instance_host_info。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets from
    *  查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    *
    * @return int
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int $from 查询数据起始时间，UNIX时间戳，单位毫秒；如：1607146998177。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @return int
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int $to 查询数据截止时间UNIX时间戳，单位毫秒。from必须小于to；如：1607150598177。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
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

