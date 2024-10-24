<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * innerIp  机器 IP。
    * importIp  机器导入IP。
    * agentId  agent id。
    * hostName  主机名。
    * osType  操作系统。
    * agentState  UniAgent状态。
    * projectId  所属project ID。
    * version  UniAgent版本。
    * isHwCloudHost  是否华为云机器。
    * vpcId  VPC ID。
    * cmdbId  CMDB ID.
    * ecsId  ECS ID。唯一值.
    * domainId  机器所属domain ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'innerIp' => 'string',
            'importIp' => 'string',
            'agentId' => 'string',
            'hostName' => 'string',
            'osType' => 'string',
            'agentState' => 'string',
            'projectId' => 'string',
            'version' => 'string',
            'isHwCloudHost' => 'string',
            'vpcId' => 'string',
            'cmdbId' => 'string',
            'ecsId' => 'string',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * innerIp  机器 IP。
    * importIp  机器导入IP。
    * agentId  agent id。
    * hostName  主机名。
    * osType  操作系统。
    * agentState  UniAgent状态。
    * projectId  所属project ID。
    * version  UniAgent版本。
    * isHwCloudHost  是否华为云机器。
    * vpcId  VPC ID。
    * cmdbId  CMDB ID.
    * ecsId  ECS ID。唯一值.
    * domainId  机器所属domain ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'innerIp' => null,
        'importIp' => null,
        'agentId' => null,
        'hostName' => null,
        'osType' => null,
        'agentState' => null,
        'projectId' => null,
        'version' => null,
        'isHwCloudHost' => null,
        'vpcId' => null,
        'cmdbId' => null,
        'ecsId' => null,
        'domainId' => null
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
    * innerIp  机器 IP。
    * importIp  机器导入IP。
    * agentId  agent id。
    * hostName  主机名。
    * osType  操作系统。
    * agentState  UniAgent状态。
    * projectId  所属project ID。
    * version  UniAgent版本。
    * isHwCloudHost  是否华为云机器。
    * vpcId  VPC ID。
    * cmdbId  CMDB ID.
    * ecsId  ECS ID。唯一值.
    * domainId  机器所属domain ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'innerIp' => 'inner_ip',
            'importIp' => 'import_ip',
            'agentId' => 'agent_id',
            'hostName' => 'host_name',
            'osType' => 'os_type',
            'agentState' => 'agent_state',
            'projectId' => 'project_id',
            'version' => 'version',
            'isHwCloudHost' => 'is_hw_cloud_host',
            'vpcId' => 'vpc_id',
            'cmdbId' => 'cmdb_id',
            'ecsId' => 'ecs_id',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * innerIp  机器 IP。
    * importIp  机器导入IP。
    * agentId  agent id。
    * hostName  主机名。
    * osType  操作系统。
    * agentState  UniAgent状态。
    * projectId  所属project ID。
    * version  UniAgent版本。
    * isHwCloudHost  是否华为云机器。
    * vpcId  VPC ID。
    * cmdbId  CMDB ID.
    * ecsId  ECS ID。唯一值.
    * domainId  机器所属domain ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'innerIp' => 'setInnerIp',
            'importIp' => 'setImportIp',
            'agentId' => 'setAgentId',
            'hostName' => 'setHostName',
            'osType' => 'setOsType',
            'agentState' => 'setAgentState',
            'projectId' => 'setProjectId',
            'version' => 'setVersion',
            'isHwCloudHost' => 'setIsHwCloudHost',
            'vpcId' => 'setVpcId',
            'cmdbId' => 'setCmdbId',
            'ecsId' => 'setEcsId',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * innerIp  机器 IP。
    * importIp  机器导入IP。
    * agentId  agent id。
    * hostName  主机名。
    * osType  操作系统。
    * agentState  UniAgent状态。
    * projectId  所属project ID。
    * version  UniAgent版本。
    * isHwCloudHost  是否华为云机器。
    * vpcId  VPC ID。
    * cmdbId  CMDB ID.
    * ecsId  ECS ID。唯一值.
    * domainId  机器所属domain ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'innerIp' => 'getInnerIp',
            'importIp' => 'getImportIp',
            'agentId' => 'getAgentId',
            'hostName' => 'getHostName',
            'osType' => 'getOsType',
            'agentState' => 'getAgentState',
            'projectId' => 'getProjectId',
            'version' => 'getVersion',
            'isHwCloudHost' => 'getIsHwCloudHost',
            'vpcId' => 'getVpcId',
            'cmdbId' => 'getCmdbId',
            'ecsId' => 'getEcsId',
            'domainId' => 'getDomainId'
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
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['importIp'] = isset($data['importIp']) ? $data['importIp'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['isHwCloudHost'] = isset($data['isHwCloudHost']) ? $data['isHwCloudHost'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['cmdbId'] = isset($data['cmdbId']) ? $data['cmdbId'] : null;
        $this->container['ecsId'] = isset($data['ecsId']) ? $data['ecsId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
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
    * Gets innerIp
    *  机器 IP。
    *
    * @return string|null
    */
    public function getInnerIp()
    {
        return $this->container['innerIp'];
    }

    /**
    * Sets innerIp
    *
    * @param string|null $innerIp 机器 IP。
    *
    * @return $this
    */
    public function setInnerIp($innerIp)
    {
        $this->container['innerIp'] = $innerIp;
        return $this;
    }

    /**
    * Gets importIp
    *  机器导入IP。
    *
    * @return string|null
    */
    public function getImportIp()
    {
        return $this->container['importIp'];
    }

    /**
    * Sets importIp
    *
    * @param string|null $importIp 机器导入IP。
    *
    * @return $this
    */
    public function setImportIp($importIp)
    {
        $this->container['importIp'] = $importIp;
        return $this;
    }

    /**
    * Gets agentId
    *  agent id。
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
    * @param string|null $agentId agent id。
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名。
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
    * @param string|null $hostName 主机名。
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets agentState
    *  UniAgent状态。
    *
    * @return string|null
    */
    public function getAgentState()
    {
        return $this->container['agentState'];
    }

    /**
    * Sets agentState
    *
    * @param string|null $agentState UniAgent状态。
    *
    * @return $this
    */
    public function setAgentState($agentState)
    {
        $this->container['agentState'] = $agentState;
        return $this;
    }

    /**
    * Gets projectId
    *  所属project ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 所属project ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets version
    *  UniAgent版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version UniAgent版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets isHwCloudHost
    *  是否华为云机器。
    *
    * @return string|null
    */
    public function getIsHwCloudHost()
    {
        return $this->container['isHwCloudHost'];
    }

    /**
    * Sets isHwCloudHost
    *
    * @param string|null $isHwCloudHost 是否华为云机器。
    *
    * @return $this
    */
    public function setIsHwCloudHost($isHwCloudHost)
    {
        $this->container['isHwCloudHost'] = $isHwCloudHost;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets cmdbId
    *  CMDB ID.
    *
    * @return string|null
    */
    public function getCmdbId()
    {
        return $this->container['cmdbId'];
    }

    /**
    * Sets cmdbId
    *
    * @param string|null $cmdbId CMDB ID.
    *
    * @return $this
    */
    public function setCmdbId($cmdbId)
    {
        $this->container['cmdbId'] = $cmdbId;
        return $this;
    }

    /**
    * Gets ecsId
    *  ECS ID。唯一值.
    *
    * @return string|null
    */
    public function getEcsId()
    {
        return $this->container['ecsId'];
    }

    /**
    * Sets ecsId
    *
    * @param string|null $ecsId ECS ID。唯一值.
    *
    * @return $this
    */
    public function setEcsId($ecsId)
    {
        $this->container['ecsId'] = $ecsId;
        return $this;
    }

    /**
    * Gets domainId
    *  机器所属domain ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 机器所属domain ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

