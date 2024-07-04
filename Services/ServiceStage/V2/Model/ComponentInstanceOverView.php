<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentInstanceOverView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentInstanceOverView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  应用组件实例ID。
    * instanceName  应用组件实例名称。
    * description  实例描述。
    * environmentId  应用组件环境ID。
    * platformType  platformType
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号。
    * configuration  应用组件配置，如环境变量。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'description' => 'string',
            'environmentId' => 'string',
            'platformType' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstancePlatformType',
            'flavorId' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId',
            'artifacts' => 'map[string,object]',
            'version' => 'string',
            'configuration' => 'object',
            'creator' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'externalAccesses' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]',
            'referResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResources[]',
            'statusDetail' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusView'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  应用组件实例ID。
    * instanceName  应用组件实例名称。
    * description  实例描述。
    * environmentId  应用组件环境ID。
    * platformType  platformType
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号。
    * configuration  应用组件配置，如环境变量。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'description' => null,
        'environmentId' => null,
        'platformType' => null,
        'flavorId' => null,
        'artifacts' => null,
        'version' => null,
        'configuration' => null,
        'creator' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'externalAccesses' => null,
        'referResources' => null,
        'statusDetail' => null
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
    * instanceId  应用组件实例ID。
    * instanceName  应用组件实例名称。
    * description  实例描述。
    * environmentId  应用组件环境ID。
    * platformType  platformType
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号。
    * configuration  应用组件配置，如环境变量。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'description' => 'description',
            'environmentId' => 'environment_id',
            'platformType' => 'platform_type',
            'flavorId' => 'flavor_id',
            'artifacts' => 'artifacts',
            'version' => 'version',
            'configuration' => 'configuration',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'externalAccesses' => 'external_accesses',
            'referResources' => 'refer_resources',
            'statusDetail' => 'status_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  应用组件实例ID。
    * instanceName  应用组件实例名称。
    * description  实例描述。
    * environmentId  应用组件环境ID。
    * platformType  platformType
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号。
    * configuration  应用组件配置，如环境变量。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'description' => 'setDescription',
            'environmentId' => 'setEnvironmentId',
            'platformType' => 'setPlatformType',
            'flavorId' => 'setFlavorId',
            'artifacts' => 'setArtifacts',
            'version' => 'setVersion',
            'configuration' => 'setConfiguration',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'externalAccesses' => 'setExternalAccesses',
            'referResources' => 'setReferResources',
            'statusDetail' => 'setStatusDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  应用组件实例ID。
    * instanceName  应用组件实例名称。
    * description  实例描述。
    * environmentId  应用组件环境ID。
    * platformType  platformType
    * flavorId  flavorId
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * version  应用组件版本号。
    * configuration  应用组件配置，如环境变量。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * externalAccesses  访问方式列表。
    * referResources  部署资源列表。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'description' => 'getDescription',
            'environmentId' => 'getEnvironmentId',
            'platformType' => 'getPlatformType',
            'flavorId' => 'getFlavorId',
            'artifacts' => 'getArtifacts',
            'version' => 'getVersion',
            'configuration' => 'getConfiguration',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'externalAccesses' => 'getExternalAccesses',
            'referResources' => 'getReferResources',
            'statusDetail' => 'getStatusDetail'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['platformType'] = isset($data['platformType']) ? $data['platformType'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['externalAccesses'] = isset($data['externalAccesses']) ? $data['externalAccesses'] : null;
        $this->container['referResources'] = isset($data['referResources']) ? $data['referResources'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
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
    * Gets instanceId
    *  应用组件实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 应用组件实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  应用组件实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 应用组件实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。
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
    * @param string|null $description 实例描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets environmentId
    *  应用组件环境ID。
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId 应用组件环境ID。
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets platformType
    *  platformType
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\InstancePlatformType|null
    */
    public function getPlatformType()
    {
        return $this->container['platformType'];
    }

    /**
    * Sets platformType
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\InstancePlatformType|null $platformType platformType
    *
    * @return $this
    */
    public function setPlatformType($platformType)
    {
        $this->container['platformType'] = $platformType;
        return $this;
    }

    /**
    * Gets flavorId
    *  flavorId
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\FlavorId|null $flavorId flavorId
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets artifacts
    *  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    *
    * @return map[string,object]|null
    */
    public function getArtifacts()
    {
        return $this->container['artifacts'];
    }

    /**
    * Sets artifacts
    *
    * @param map[string,object]|null $artifacts 组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    *
    * @return $this
    */
    public function setArtifacts($artifacts)
    {
        $this->container['artifacts'] = $artifacts;
        return $this;
    }

    /**
    * Gets version
    *  应用组件版本号。
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
    * @param string|null $version 应用组件版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets configuration
    *  应用组件配置，如环境变量。
    *
    * @return object|null
    */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
    * Sets configuration
    *
    * @param object|null $configuration 应用组件配置，如环境变量。
    *
    * @return $this
    */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;
        return $this;
    }

    /**
    * Gets creator
    *  创建人。
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间。
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
    * @param int|null $updateTime 修改时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets externalAccesses
    *  访问方式列表。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]|null
    */
    public function getExternalAccesses()
    {
        return $this->container['externalAccesses'];
    }

    /**
    * Sets externalAccesses
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]|null $externalAccesses 访问方式列表。
    *
    * @return $this
    */
    public function setExternalAccesses($externalAccesses)
    {
        $this->container['externalAccesses'] = $externalAccesses;
        return $this;
    }

    /**
    * Gets referResources
    *  部署资源列表。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResources[]|null
    */
    public function getReferResources()
    {
        return $this->container['referResources'];
    }

    /**
    * Sets referResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ReferResources[]|null $referResources 部署资源列表。
    *
    * @return $this
    */
    public function setReferResources($referResources)
    {
        $this->container['referResources'] = $referResources;
        return $this;
    }

    /**
    * Gets statusDetail
    *  statusDetail
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusView|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusView|null $statusDetail statusDetail
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
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

