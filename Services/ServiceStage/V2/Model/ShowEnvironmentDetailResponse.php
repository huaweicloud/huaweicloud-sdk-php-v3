<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEnvironmentDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEnvironmentDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  环境ID。
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  收费模式。
    * deployMode  环境类型
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'alias' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'chargeMode' => 'string',
            'deployMode' => 'string',
            'vpcId' => 'string',
            'baseResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]',
            'optionalResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]',
            'creator' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  环境ID。
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  收费模式。
    * deployMode  环境类型
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'alias' => null,
        'description' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'chargeMode' => null,
        'deployMode' => null,
        'vpcId' => null,
        'baseResources' => null,
        'optionalResources' => null,
        'creator' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  环境ID。
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  收费模式。
    * deployMode  环境类型
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'alias' => 'alias',
            'description' => 'description',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'chargeMode' => 'charge_mode',
            'deployMode' => 'deploy_mode',
            'vpcId' => 'vpc_id',
            'baseResources' => 'base_resources',
            'optionalResources' => 'optional_resources',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  环境ID。
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  收费模式。
    * deployMode  环境类型
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'alias' => 'setAlias',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'chargeMode' => 'setChargeMode',
            'deployMode' => 'setDeployMode',
            'vpcId' => 'setVpcId',
            'baseResources' => 'setBaseResources',
            'optionalResources' => 'setOptionalResources',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  环境ID。
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  收费模式。
    * deployMode  环境类型
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    * creator  创建人。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'alias' => 'getAlias',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'chargeMode' => 'getChargeMode',
            'deployMode' => 'getDeployMode',
            'vpcId' => 'getVpcId',
            'baseResources' => 'getBaseResources',
            'optionalResources' => 'getOptionalResources',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['baseResources'] = isset($data['baseResources']) ? $data['baseResources'] : null;
        $this->container['optionalResources'] = isset($data['optionalResources']) ? $data['optionalResources'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    *  环境ID。
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
    * @param string|null $id 环境ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  环境名称。
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
    * @param string|null $name 环境名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets alias
    *  环境别名。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 环境别名。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets description
    *  环境描述。
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
    * @param string|null $description 环境描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  收费模式。
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 收费模式。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets deployMode
    *  环境类型
    *
    * @return string|null
    */
    public function getDeployMode()
    {
        return $this->container['deployMode'];
    }

    /**
    * Sets deployMode
    *
    * @param string|null $deployMode 环境类型
    *
    * @return $this
    */
    public function setDeployMode($deployMode)
    {
        $this->container['deployMode'] = $deployMode;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
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
    * @param string|null $vpcId 虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets baseResources
    *  基础资源。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null
    */
    public function getBaseResources()
    {
        return $this->container['baseResources'];
    }

    /**
    * Sets baseResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null $baseResources 基础资源。
    *
    * @return $this
    */
    public function setBaseResources($baseResources)
    {
        $this->container['baseResources'] = $baseResources;
        return $this;
    }

    /**
    * Gets optionalResources
    *  可选资源。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null
    */
    public function getOptionalResources()
    {
        return $this->container['optionalResources'];
    }

    /**
    * Sets optionalResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null $optionalResources 可选资源。
    *
    * @return $this
    */
    public function setOptionalResources($optionalResources)
    {
        $this->container['optionalResources'] = $optionalResources;
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

