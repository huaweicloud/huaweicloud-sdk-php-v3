<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListContainerCmdLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListContainerCmdLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * hostName  产生日志的容器所在主机的名称
    * hostId  产生日志的容器所在主机的id
    * hostIp  产生日志的容器所在主机的ip
    * containerId  容器id
    * containerName  产生日志的容器名称
    * cmd  运行的命令行
    * path  命令行对应的进程路径
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'hostIp' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'cmd' => 'string',
            'path' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * hostName  产生日志的容器所在主机的名称
    * hostId  产生日志的容器所在主机的id
    * hostIp  产生日志的容器所在主机的ip
    * containerId  容器id
    * containerName  产生日志的容器名称
    * cmd  运行的命令行
    * path  命令行对应的进程路径
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'clusterId' => null,
        'clusterName' => null,
        'hostName' => null,
        'hostId' => null,
        'hostIp' => null,
        'containerId' => null,
        'containerName' => null,
        'cmd' => null,
        'path' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32'
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
    * hostName  产生日志的容器所在主机的名称
    * hostId  产生日志的容器所在主机的id
    * hostIp  产生日志的容器所在主机的ip
    * containerId  容器id
    * containerName  产生日志的容器名称
    * cmd  运行的命令行
    * path  命令行对应的进程路径
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'hostIp' => 'host_ip',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'cmd' => 'cmd',
            'path' => 'path',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * hostName  产生日志的容器所在主机的名称
    * hostId  产生日志的容器所在主机的id
    * hostIp  产生日志的容器所在主机的ip
    * containerId  容器id
    * containerName  产生日志的容器名称
    * cmd  运行的命令行
    * path  命令行对应的进程路径
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'cmd' => 'setCmd',
            'path' => 'setPath',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * clusterId  集群id
    * clusterName  集群名称
    * hostName  产生日志的容器所在主机的名称
    * hostId  产生日志的容器所在主机的id
    * hostIp  产生日志的容器所在主机的ip
    * containerId  容器id
    * containerName  产生日志的容器名称
    * cmd  运行的命令行
    * path  命令行对应的进程路径
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'hostIp' => 'getHostIp',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'cmd' => 'getCmd',
            'path' => 'getPath',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
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
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && !preg_match("/^.*$/", $this->container['hostIp'])) {
                $invalidProperties[] = "invalid value for 'hostIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && !preg_match("/^.*$/", $this->container['containerId'])) {
                $invalidProperties[] = "invalid value for 'containerId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['cmd']) && (mb_strlen($this->container['cmd']) > 128)) {
                $invalidProperties[] = "invalid value for 'cmd', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cmd']) && (mb_strlen($this->container['cmd']) < 0)) {
                $invalidProperties[] = "invalid value for 'cmd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cmd']) && !preg_match("/^.*$/", $this->container['cmd'])) {
                $invalidProperties[] = "invalid value for 'cmd', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 128)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && !preg_match("/^.*$/", $this->container['path'])) {
                $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
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
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
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
    * Gets hostName
    *  产生日志的容器所在主机的名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 产生日志的容器所在主机的名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  产生日志的容器所在主机的id
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 产生日志的容器所在主机的id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  产生日志的容器所在主机的ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 产生日志的容器所在主机的ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets containerId
    *  容器id
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId 容器id
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  产生日志的容器名称
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName 产生日志的容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets cmd
    *  运行的命令行
    *
    * @return string|null
    */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
    * Sets cmd
    *
    * @param string|null $cmd 运行的命令行
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets path
    *  命令行对应的进程路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 命令行对应的进程路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets startTime
    *  查询日志范围的最小时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询日志范围的最小时间
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
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 查询日志范围的最大时间
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

