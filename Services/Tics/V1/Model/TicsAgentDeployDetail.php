<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsAgentDeployDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsAgentDeployDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentAccessAddress  可信节点访问地址
    * agentId  可信节点Id
    * cceClusterId  可信节点所在cce集群的Id
    * cceClusterName  可信节点所在cce集群的名称
    * consoleIp  可信节点所在ip
    * consolePort  可信节点服务端口
    * hostPath  主机挂载路径，本地挂载才会有值
    * namespaceName  命名空间名称
    * obsPvcName  可信节点CCE部署场景，对象文件存储PVC
    * persistenceId  持久化存储唯一标识
    * resourceSpecCode  代理部署规格
    * webPort  可信节点访问端口
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentAccessAddress' => 'string',
            'agentId' => 'string',
            'cceClusterId' => 'string',
            'cceClusterName' => 'string',
            'consoleIp' => 'string',
            'consolePort' => 'int',
            'hostPath' => 'string',
            'namespaceName' => 'string',
            'obsPvcName' => 'string',
            'persistenceId' => 'string',
            'resourceSpecCode' => 'string',
            'webPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentAccessAddress  可信节点访问地址
    * agentId  可信节点Id
    * cceClusterId  可信节点所在cce集群的Id
    * cceClusterName  可信节点所在cce集群的名称
    * consoleIp  可信节点所在ip
    * consolePort  可信节点服务端口
    * hostPath  主机挂载路径，本地挂载才会有值
    * namespaceName  命名空间名称
    * obsPvcName  可信节点CCE部署场景，对象文件存储PVC
    * persistenceId  持久化存储唯一标识
    * resourceSpecCode  代理部署规格
    * webPort  可信节点访问端口
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentAccessAddress' => null,
        'agentId' => null,
        'cceClusterId' => null,
        'cceClusterName' => null,
        'consoleIp' => null,
        'consolePort' => 'int32',
        'hostPath' => null,
        'namespaceName' => null,
        'obsPvcName' => null,
        'persistenceId' => null,
        'resourceSpecCode' => null,
        'webPort' => 'int32'
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
    * agentAccessAddress  可信节点访问地址
    * agentId  可信节点Id
    * cceClusterId  可信节点所在cce集群的Id
    * cceClusterName  可信节点所在cce集群的名称
    * consoleIp  可信节点所在ip
    * consolePort  可信节点服务端口
    * hostPath  主机挂载路径，本地挂载才会有值
    * namespaceName  命名空间名称
    * obsPvcName  可信节点CCE部署场景，对象文件存储PVC
    * persistenceId  持久化存储唯一标识
    * resourceSpecCode  代理部署规格
    * webPort  可信节点访问端口
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentAccessAddress' => 'agent_access_address',
            'agentId' => 'agent_id',
            'cceClusterId' => 'cce_cluster_id',
            'cceClusterName' => 'cce_cluster_name',
            'consoleIp' => 'console_ip',
            'consolePort' => 'console_port',
            'hostPath' => 'host_path',
            'namespaceName' => 'namespace_name',
            'obsPvcName' => 'obs_pvc_name',
            'persistenceId' => 'persistence_id',
            'resourceSpecCode' => 'resource_spec_code',
            'webPort' => 'web_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentAccessAddress  可信节点访问地址
    * agentId  可信节点Id
    * cceClusterId  可信节点所在cce集群的Id
    * cceClusterName  可信节点所在cce集群的名称
    * consoleIp  可信节点所在ip
    * consolePort  可信节点服务端口
    * hostPath  主机挂载路径，本地挂载才会有值
    * namespaceName  命名空间名称
    * obsPvcName  可信节点CCE部署场景，对象文件存储PVC
    * persistenceId  持久化存储唯一标识
    * resourceSpecCode  代理部署规格
    * webPort  可信节点访问端口
    *
    * @var string[]
    */
    protected static $setters = [
            'agentAccessAddress' => 'setAgentAccessAddress',
            'agentId' => 'setAgentId',
            'cceClusterId' => 'setCceClusterId',
            'cceClusterName' => 'setCceClusterName',
            'consoleIp' => 'setConsoleIp',
            'consolePort' => 'setConsolePort',
            'hostPath' => 'setHostPath',
            'namespaceName' => 'setNamespaceName',
            'obsPvcName' => 'setObsPvcName',
            'persistenceId' => 'setPersistenceId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'webPort' => 'setWebPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentAccessAddress  可信节点访问地址
    * agentId  可信节点Id
    * cceClusterId  可信节点所在cce集群的Id
    * cceClusterName  可信节点所在cce集群的名称
    * consoleIp  可信节点所在ip
    * consolePort  可信节点服务端口
    * hostPath  主机挂载路径，本地挂载才会有值
    * namespaceName  命名空间名称
    * obsPvcName  可信节点CCE部署场景，对象文件存储PVC
    * persistenceId  持久化存储唯一标识
    * resourceSpecCode  代理部署规格
    * webPort  可信节点访问端口
    *
    * @var string[]
    */
    protected static $getters = [
            'agentAccessAddress' => 'getAgentAccessAddress',
            'agentId' => 'getAgentId',
            'cceClusterId' => 'getCceClusterId',
            'cceClusterName' => 'getCceClusterName',
            'consoleIp' => 'getConsoleIp',
            'consolePort' => 'getConsolePort',
            'hostPath' => 'getHostPath',
            'namespaceName' => 'getNamespaceName',
            'obsPvcName' => 'getObsPvcName',
            'persistenceId' => 'getPersistenceId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'webPort' => 'getWebPort'
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
        $this->container['agentAccessAddress'] = isset($data['agentAccessAddress']) ? $data['agentAccessAddress'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['cceClusterId'] = isset($data['cceClusterId']) ? $data['cceClusterId'] : null;
        $this->container['cceClusterName'] = isset($data['cceClusterName']) ? $data['cceClusterName'] : null;
        $this->container['consoleIp'] = isset($data['consoleIp']) ? $data['consoleIp'] : null;
        $this->container['consolePort'] = isset($data['consolePort']) ? $data['consolePort'] : null;
        $this->container['hostPath'] = isset($data['hostPath']) ? $data['hostPath'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['obsPvcName'] = isset($data['obsPvcName']) ? $data['obsPvcName'] : null;
        $this->container['persistenceId'] = isset($data['persistenceId']) ? $data['persistenceId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['webPort'] = isset($data['webPort']) ? $data['webPort'] : null;
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
    * Gets agentAccessAddress
    *  可信节点访问地址
    *
    * @return string|null
    */
    public function getAgentAccessAddress()
    {
        return $this->container['agentAccessAddress'];
    }

    /**
    * Sets agentAccessAddress
    *
    * @param string|null $agentAccessAddress 可信节点访问地址
    *
    * @return $this
    */
    public function setAgentAccessAddress($agentAccessAddress)
    {
        $this->container['agentAccessAddress'] = $agentAccessAddress;
        return $this;
    }

    /**
    * Gets agentId
    *  可信节点Id
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId 可信节点Id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets cceClusterId
    *  可信节点所在cce集群的Id
    *
    * @return string|null
    */
    public function getCceClusterId()
    {
        return $this->container['cceClusterId'];
    }

    /**
    * Sets cceClusterId
    *
    * @param string|null $cceClusterId 可信节点所在cce集群的Id
    *
    * @return $this
    */
    public function setCceClusterId($cceClusterId)
    {
        $this->container['cceClusterId'] = $cceClusterId;
        return $this;
    }

    /**
    * Gets cceClusterName
    *  可信节点所在cce集群的名称
    *
    * @return string|null
    */
    public function getCceClusterName()
    {
        return $this->container['cceClusterName'];
    }

    /**
    * Sets cceClusterName
    *
    * @param string|null $cceClusterName 可信节点所在cce集群的名称
    *
    * @return $this
    */
    public function setCceClusterName($cceClusterName)
    {
        $this->container['cceClusterName'] = $cceClusterName;
        return $this;
    }

    /**
    * Gets consoleIp
    *  可信节点所在ip
    *
    * @return string|null
    */
    public function getConsoleIp()
    {
        return $this->container['consoleIp'];
    }

    /**
    * Sets consoleIp
    *
    * @param string|null $consoleIp 可信节点所在ip
    *
    * @return $this
    */
    public function setConsoleIp($consoleIp)
    {
        $this->container['consoleIp'] = $consoleIp;
        return $this;
    }

    /**
    * Gets consolePort
    *  可信节点服务端口
    *
    * @return int|null
    */
    public function getConsolePort()
    {
        return $this->container['consolePort'];
    }

    /**
    * Sets consolePort
    *
    * @param int|null $consolePort 可信节点服务端口
    *
    * @return $this
    */
    public function setConsolePort($consolePort)
    {
        $this->container['consolePort'] = $consolePort;
        return $this;
    }

    /**
    * Gets hostPath
    *  主机挂载路径，本地挂载才会有值
    *
    * @return string|null
    */
    public function getHostPath()
    {
        return $this->container['hostPath'];
    }

    /**
    * Sets hostPath
    *
    * @param string|null $hostPath 主机挂载路径，本地挂载才会有值
    *
    * @return $this
    */
    public function setHostPath($hostPath)
    {
        $this->container['hostPath'] = $hostPath;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名称
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets obsPvcName
    *  可信节点CCE部署场景，对象文件存储PVC
    *
    * @return string|null
    */
    public function getObsPvcName()
    {
        return $this->container['obsPvcName'];
    }

    /**
    * Sets obsPvcName
    *
    * @param string|null $obsPvcName 可信节点CCE部署场景，对象文件存储PVC
    *
    * @return $this
    */
    public function setObsPvcName($obsPvcName)
    {
        $this->container['obsPvcName'] = $obsPvcName;
        return $this;
    }

    /**
    * Gets persistenceId
    *  持久化存储唯一标识
    *
    * @return string|null
    */
    public function getPersistenceId()
    {
        return $this->container['persistenceId'];
    }

    /**
    * Sets persistenceId
    *
    * @param string|null $persistenceId 持久化存储唯一标识
    *
    * @return $this
    */
    public function setPersistenceId($persistenceId)
    {
        $this->container['persistenceId'] = $persistenceId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  代理部署规格
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 代理部署规格
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets webPort
    *  可信节点访问端口
    *
    * @return int|null
    */
    public function getWebPort()
    {
        return $this->container['webPort'];
    }

    /**
    * Sets webPort
    *
    * @param int|null $webPort 可信节点访问端口
    *
    * @return $this
    */
    public function setWebPort($webPort)
    {
        $this->container['webPort'] = $webPort;
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

