<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceListView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceListView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用组件实例ID。
    * applicationId  应用ID。
    * applicationName  应用名称。
    * componentId  组件ID。
    * componentName  组件名称。
    * name  应用组件实例名称。
    * environmentId  应用组件环境ID。
    * environmentName  环境名称。
    * platformType  运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    * version  应用组件版本号。
    * externalAccesses  访问方式。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'applicationId' => 'string',
            'applicationName' => 'string',
            'componentId' => 'string',
            'componentName' => 'string',
            'name' => 'string',
            'environmentId' => 'string',
            'environmentName' => 'string',
            'platformType' => 'string',
            'version' => 'string',
            'externalAccesses' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]',
            'artifacts' => 'map[string,object]',
            'creator' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'statusDetail' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusView'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用组件实例ID。
    * applicationId  应用ID。
    * applicationName  应用名称。
    * componentId  组件ID。
    * componentName  组件名称。
    * name  应用组件实例名称。
    * environmentId  应用组件环境ID。
    * environmentName  环境名称。
    * platformType  运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    * version  应用组件版本号。
    * externalAccesses  访问方式。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'applicationId' => null,
        'applicationName' => null,
        'componentId' => null,
        'componentName' => null,
        'name' => null,
        'environmentId' => null,
        'environmentName' => null,
        'platformType' => null,
        'version' => null,
        'externalAccesses' => null,
        'artifacts' => null,
        'creator' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
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
    * id  应用组件实例ID。
    * applicationId  应用ID。
    * applicationName  应用名称。
    * componentId  组件ID。
    * componentName  组件名称。
    * name  应用组件实例名称。
    * environmentId  应用组件环境ID。
    * environmentName  环境名称。
    * platformType  运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    * version  应用组件版本号。
    * externalAccesses  访问方式。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'applicationId' => 'application_id',
            'applicationName' => 'application_name',
            'componentId' => 'component_id',
            'componentName' => 'component_name',
            'name' => 'name',
            'environmentId' => 'environment_id',
            'environmentName' => 'environment_name',
            'platformType' => 'platform_type',
            'version' => 'version',
            'externalAccesses' => 'external_accesses',
            'artifacts' => 'artifacts',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'statusDetail' => 'status_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用组件实例ID。
    * applicationId  应用ID。
    * applicationName  应用名称。
    * componentId  组件ID。
    * componentName  组件名称。
    * name  应用组件实例名称。
    * environmentId  应用组件环境ID。
    * environmentName  环境名称。
    * platformType  运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    * version  应用组件版本号。
    * externalAccesses  访问方式。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'applicationId' => 'setApplicationId',
            'applicationName' => 'setApplicationName',
            'componentId' => 'setComponentId',
            'componentName' => 'setComponentName',
            'name' => 'setName',
            'environmentId' => 'setEnvironmentId',
            'environmentName' => 'setEnvironmentName',
            'platformType' => 'setPlatformType',
            'version' => 'setVersion',
            'externalAccesses' => 'setExternalAccesses',
            'artifacts' => 'setArtifacts',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'statusDetail' => 'setStatusDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用组件实例ID。
    * applicationId  应用ID。
    * applicationName  应用名称。
    * componentId  组件ID。
    * componentName  组件名称。
    * name  应用组件实例名称。
    * environmentId  应用组件环境ID。
    * environmentName  环境名称。
    * platformType  运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    * version  应用组件版本号。
    * externalAccesses  访问方式。
    * artifacts  组件部署件。key为组件component_name，对于Docker多容器场景，key为容器名称。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    * statusDetail  statusDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'applicationId' => 'getApplicationId',
            'applicationName' => 'getApplicationName',
            'componentId' => 'getComponentId',
            'componentName' => 'getComponentName',
            'name' => 'getName',
            'environmentId' => 'getEnvironmentId',
            'environmentName' => 'getEnvironmentName',
            'platformType' => 'getPlatformType',
            'version' => 'getVersion',
            'externalAccesses' => 'getExternalAccesses',
            'artifacts' => 'getArtifacts',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['environmentName'] = isset($data['environmentName']) ? $data['environmentName'] : null;
        $this->container['platformType'] = isset($data['platformType']) ? $data['platformType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['externalAccesses'] = isset($data['externalAccesses']) ? $data['externalAccesses'] : null;
        $this->container['artifacts'] = isset($data['artifacts']) ? $data['artifacts'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets id
    *  应用组件实例ID。
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
    * @param string|null $id 应用组件实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用ID。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用ID。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets applicationName
    *  应用名称。
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName 应用名称。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets componentId
    *  组件ID。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件ID。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名称。
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 组件名称。
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets name
    *  应用组件实例名称。
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
    * @param string|null $name 应用组件实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets environmentName
    *  环境名称。
    *
    * @return string|null
    */
    public function getEnvironmentName()
    {
        return $this->container['environmentName'];
    }

    /**
    * Sets environmentName
    *
    * @param string|null $environmentName 环境名称。
    *
    * @return $this
    */
    public function setEnvironmentName($environmentName)
    {
        $this->container['environmentName'] = $environmentName;
        return $this;
    }

    /**
    * Gets platformType
    *  运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    *
    * @return string|null
    */
    public function getPlatformType()
    {
        return $this->container['platformType'];
    }

    /**
    * Sets platformType
    *
    * @param string|null $platformType 运行平台类型。 应用可以在不同的平台上运行，可选用的平台的类型有以下几种：cce、vmapp。
    *
    * @return $this
    */
    public function setPlatformType($platformType)
    {
        $this->container['platformType'] = $platformType;
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
    * Gets externalAccesses
    *  访问方式。
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
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ExternalAccesses[]|null $externalAccesses 访问方式。
    *
    * @return $this
    */
    public function setExternalAccesses($externalAccesses)
    {
        $this->container['externalAccesses'] = $externalAccesses;
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

