<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  chargeMode
    * deployMode  deployMode
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'alias' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'chargeMode' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ChargeMode',
            'deployMode' => 'string',
            'vpcId' => 'string',
            'baseResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]',
            'optionalResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  chargeMode
    * deployMode  deployMode
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'alias' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'chargeMode' => null,
        'deployMode' => null,
        'vpcId' => null,
        'baseResources' => null,
        'optionalResources' => null
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
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  chargeMode
    * deployMode  deployMode
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'alias' => 'alias',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'chargeMode' => 'charge_mode',
            'deployMode' => 'deploy_mode',
            'vpcId' => 'vpc_id',
            'baseResources' => 'base_resources',
            'optionalResources' => 'optional_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  chargeMode
    * deployMode  deployMode
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'alias' => 'setAlias',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'chargeMode' => 'setChargeMode',
            'deployMode' => 'setDeployMode',
            'vpcId' => 'setVpcId',
            'baseResources' => 'setBaseResources',
            'optionalResources' => 'setOptionalResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  环境名称。
    * alias  环境别名。
    * description  环境描述。
    * enterpriseProjectId  企业项目ID。
    * chargeMode  chargeMode
    * deployMode  deployMode
    * vpcId  虚拟私有云ID。
    * baseResources  基础资源。
    * optionalResources  可选资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'alias' => 'getAlias',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'chargeMode' => 'getChargeMode',
            'deployMode' => 'getDeployMode',
            'vpcId' => 'getVpcId',
            'baseResources' => 'getBaseResources',
            'optionalResources' => 'getOptionalResources'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['baseResources'] = isset($data['baseResources']) ? $data['baseResources'] : null;
        $this->container['optionalResources'] = isset($data['optionalResources']) ? $data['optionalResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-z0-9-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9-]+$/.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 64)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['deployMode'] === null) {
            $invalidProperties[] = "'deployMode' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['baseResources'] === null) {
            $invalidProperties[] = "'baseResources' can't be null";
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
    * Gets name
    *  环境名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 环境名称。
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
    *  chargeMode
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ChargeMode|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ChargeMode|null $chargeMode chargeMode
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
    *  deployMode
    *
    * @return string
    */
    public function getDeployMode()
    {
        return $this->container['deployMode'];
    }

    /**
    * Sets deployMode
    *
    * @param string $deployMode deployMode
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
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。
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
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]
    */
    public function getBaseResources()
    {
        return $this->container['baseResources'];
    }

    /**
    * Sets baseResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[] $baseResources 基础资源。
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

