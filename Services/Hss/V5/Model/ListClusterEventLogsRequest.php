<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterEventLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterEventLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * namespace  产生事件的命名空间
    * eventName  事件名称
    * eventType  事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    * resourceType  产生事件的资源类型
    * resourceName  产生事件的资源名称
    * reason  事件的触发原因
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * lineNum  查询cce集群事件时需要传的分页行号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'namespace' => 'string',
            'eventName' => 'string',
            'eventType' => 'string',
            'resourceType' => 'string',
            'resourceName' => 'string',
            'reason' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'lineNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * namespace  产生事件的命名空间
    * eventName  事件名称
    * eventType  事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    * resourceType  产生事件的资源类型
    * resourceName  产生事件的资源名称
    * reason  事件的触发原因
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * lineNum  查询cce集群事件时需要传的分页行号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'clusterId' => null,
        'clusterName' => null,
        'namespace' => null,
        'eventName' => null,
        'eventType' => null,
        'resourceType' => null,
        'resourceName' => null,
        'reason' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32',
        'lineNum' => null
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
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * namespace  产生事件的命名空间
    * eventName  事件名称
    * eventType  事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    * resourceType  产生事件的资源类型
    * resourceName  产生事件的资源名称
    * reason  事件的触发原因
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * lineNum  查询cce集群事件时需要传的分页行号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'namespace' => 'namespace',
            'eventName' => 'event_name',
            'eventType' => 'event_type',
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'reason' => 'reason',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'lineNum' => 'line_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * namespace  产生事件的命名空间
    * eventName  事件名称
    * eventType  事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    * resourceType  产生事件的资源类型
    * resourceName  产生事件的资源名称
    * reason  事件的触发原因
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * lineNum  查询cce集群事件时需要传的分页行号
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'namespace' => 'setNamespace',
            'eventName' => 'setEventName',
            'eventType' => 'setEventType',
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'reason' => 'setReason',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'lineNum' => 'setLineNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * namespace  产生事件的命名空间
    * eventName  事件名称
    * eventType  事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    * resourceType  产生事件的资源类型
    * resourceName  产生事件的资源名称
    * reason  事件的触发原因
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * lineNum  查询cce集群事件时需要传的分页行号
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'namespace' => 'getNamespace',
            'eventName' => 'getEventName',
            'eventType' => 'getEventType',
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'reason' => 'getReason',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'lineNum' => 'getLineNum'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventName']) && !preg_match("/^.*$/", $this->container['eventName'])) {
                $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) > 32)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventType']) && !preg_match("/^.*$/", $this->container['eventType'])) {
                $invalidProperties[] = "invalid value for 'eventType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && !preg_match("/^.*$/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && !preg_match("/^.*$/", $this->container['resourceName'])) {
                $invalidProperties[] = "invalid value for 'resourceName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 256)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reason']) && !preg_match("/^.*$/", $this->container['reason'])) {
                $invalidProperties[] = "invalid value for 'reason', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lineNum']) && (mb_strlen($this->container['lineNum']) > 128)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['lineNum']) && (mb_strlen($this->container['lineNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lineNum']) && !preg_match("/^.*$/", $this->container['lineNum'])) {
                $invalidProperties[] = "invalid value for 'lineNum', must be conform to the pattern /^.*$/.";
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
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
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
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets namespace
    *  产生事件的命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 产生事件的命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型，包含以下几种： - Warning 警告事件 - Normal 普通事件
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets resourceType
    *  产生事件的资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 产生事件的资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceName
    *  产生事件的资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 产生事件的资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets reason
    *  事件的触发原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 事件的触发原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets startTime
    *  查询日志范围的最小时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 查询日志范围的最小时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询日志范围的最大时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 查询日志范围的最大时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数，默认为10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数，默认为10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets lineNum
    *  查询cce集群事件时需要传的分页行号
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum 查询cce集群事件时需要传的分页行号
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
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

