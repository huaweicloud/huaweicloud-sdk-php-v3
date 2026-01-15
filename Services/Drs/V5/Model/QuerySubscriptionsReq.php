<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuerySubscriptionsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuerySubscriptionsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  任务场景
    * engineType  引擎类型。
    * netType  网络类型。
    * name  任务ID或名称。
    * status  任务状态。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个。
    * instanceIp  数据库实例IP
    * tags  标签
    * serviceName  服务名称
    * description  描述
    * isBilling  计费模式，包括是、否以及全部三种情况，不填默认为全部
    * beginAt  消费时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'engineType' => 'string',
            'netType' => 'string',
            'name' => 'string',
            'status' => 'string',
            'enterpriseProjectId' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'instanceIds' => 'string[]',
            'instanceIp' => 'string',
            'tags' => 'map[string,string]',
            'serviceName' => 'string',
            'description' => 'string',
            'isBilling' => 'bool',
            'beginAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  任务场景
    * engineType  引擎类型。
    * netType  网络类型。
    * name  任务ID或名称。
    * status  任务状态。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个。
    * instanceIp  数据库实例IP
    * tags  标签
    * serviceName  服务名称
    * description  描述
    * isBilling  计费模式，包括是、否以及全部三种情况，不填默认为全部
    * beginAt  消费时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'engineType' => null,
        'netType' => null,
        'name' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'sortKey' => null,
        'sortDir' => null,
        'instanceIds' => null,
        'instanceIp' => null,
        'tags' => null,
        'serviceName' => null,
        'description' => null,
        'isBilling' => null,
        'beginAt' => null
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
    * jobType  任务场景
    * engineType  引擎类型。
    * netType  网络类型。
    * name  任务ID或名称。
    * status  任务状态。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个。
    * instanceIp  数据库实例IP
    * tags  标签
    * serviceName  服务名称
    * description  描述
    * isBilling  计费模式，包括是、否以及全部三种情况，不填默认为全部
    * beginAt  消费时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'name' => 'name',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'instanceIds' => 'instance_ids',
            'instanceIp' => 'instance_ip',
            'tags' => 'tags',
            'serviceName' => 'service_name',
            'description' => 'description',
            'isBilling' => 'is_billing',
            'beginAt' => 'begin_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  任务场景
    * engineType  引擎类型。
    * netType  网络类型。
    * name  任务ID或名称。
    * status  任务状态。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个。
    * instanceIp  数据库实例IP
    * tags  标签
    * serviceName  服务名称
    * description  描述
    * isBilling  计费模式，包括是、否以及全部三种情况，不填默认为全部
    * beginAt  消费时间
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'name' => 'setName',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'instanceIds' => 'setInstanceIds',
            'instanceIp' => 'setInstanceIp',
            'tags' => 'setTags',
            'serviceName' => 'setServiceName',
            'description' => 'setDescription',
            'isBilling' => 'setIsBilling',
            'beginAt' => 'setBeginAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  任务场景
    * engineType  引擎类型。
    * netType  网络类型。
    * name  任务ID或名称。
    * status  任务状态。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个。
    * instanceIp  数据库实例IP
    * tags  标签
    * serviceName  服务名称
    * description  描述
    * isBilling  计费模式，包括是、否以及全部三种情况，不填默认为全部
    * beginAt  消费时间
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'name' => 'getName',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'instanceIds' => 'getInstanceIds',
            'instanceIp' => 'getInstanceIp',
            'tags' => 'getTags',
            'serviceName' => 'getServiceName',
            'description' => 'getDescription',
            'isBilling' => 'getIsBilling',
            'beginAt' => 'getBeginAt'
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['instanceIp'] = isset($data['instanceIp']) ? $data['instanceIp'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isBilling'] = isset($data['isBilling']) ? $data['isBilling'] : null;
        $this->container['beginAt'] = isset($data['beginAt']) ? $data['beginAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
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
    * Gets jobType
    *  任务场景
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 任务场景
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。
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
    * @param string|null $engineType 引擎类型。
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型。
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 网络类型。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets name
    *  任务ID或名称。
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
    * @param string|null $name 任务ID或名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。
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
    * @param string|null $status 任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，默认为“create_time”。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，默认为“create_time”。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets instanceIds
    *  数据库实例ID列表，最多支持10个。
    *
    * @return string[]|null
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[]|null $instanceIds 数据库实例ID列表，最多支持10个。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets instanceIp
    *  数据库实例IP
    *
    * @return string|null
    */
    public function getInstanceIp()
    {
        return $this->container['instanceIp'];
    }

    /**
    * Sets instanceIp
    *
    * @param string|null $instanceIp 数据库实例IP
    *
    * @return $this
    */
    public function setInstanceIp($instanceIp)
    {
        $this->container['instanceIp'] = $instanceIp;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets serviceName
    *  服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
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
    * Gets isBilling
    *  计费模式，包括是、否以及全部三种情况，不填默认为全部
    *
    * @return bool|null
    */
    public function getIsBilling()
    {
        return $this->container['isBilling'];
    }

    /**
    * Sets isBilling
    *
    * @param bool|null $isBilling 计费模式，包括是、否以及全部三种情况，不填默认为全部
    *
    * @return $this
    */
    public function setIsBilling($isBilling)
    {
        $this->container['isBilling'] = $isBilling;
        return $this;
    }

    /**
    * Gets beginAt
    *  消费时间
    *
    * @return string|null
    */
    public function getBeginAt()
    {
        return $this->container['beginAt'];
    }

    /**
    * Sets beginAt
    *
    * @param string|null $beginAt 消费时间
    *
    * @return $this
    */
    public function setBeginAt($beginAt)
    {
        $this->container['beginAt'] = $beginAt;
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

