<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

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
    * name  name
    * description  description
    * enterpriseProjectId  enterpriseProjectId
    * vpcId  vpcId
    * deployMode  deployMode
    * labels  labels
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'vpcId' => 'string',
            'deployMode' => 'string',
            'labels' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\EnvironmentCreateLabels[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  name
    * description  description
    * enterpriseProjectId  enterpriseProjectId
    * vpcId  vpcId
    * deployMode  deployMode
    * labels  labels
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'vpcId' => null,
        'deployMode' => null,
        'labels' => null
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
    * name  name
    * description  description
    * enterpriseProjectId  enterpriseProjectId
    * vpcId  vpcId
    * deployMode  deployMode
    * labels  labels
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'vpcId' => 'vpc_id',
            'deployMode' => 'deploy_mode',
            'labels' => 'labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  name
    * description  description
    * enterpriseProjectId  enterpriseProjectId
    * vpcId  vpcId
    * deployMode  deployMode
    * labels  labels
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'vpcId' => 'setVpcId',
            'deployMode' => 'setDeployMode',
            'labels' => 'setLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  name
    * description  description
    * enterpriseProjectId  enterpriseProjectId
    * vpcId  vpcId
    * deployMode  deployMode
    * labels  labels
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'vpcId' => 'getVpcId',
            'deployMode' => 'getDeployMode',
            'labels' => 'getLabels'
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
    const DEPLOY_MODE_CONTAINER = 'container';
    const DEPLOY_MODE_VIRTUALMACHINE = 'virtualmachine';
    const DEPLOY_MODE_MIXED = 'mixed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeployModeAllowableValues()
    {
        return [
            self::DEPLOY_MODE_CONTAINER,
            self::DEPLOY_MODE_VIRTUALMACHINE,
            self::DEPLOY_MODE_MIXED,
        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['deployMode'] = isset($data['deployMode']) ? $data['deployMode'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            $allowedValues = $this->getDeployModeAllowableValues();
                if (!is_null($this->container['deployMode']) && !in_array($this->container['deployMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deployMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  name
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
    * @param string $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  description
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
    * @param string|null $description description
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
    *  enterpriseProjectId
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
    * @param string|null $enterpriseProjectId enterpriseProjectId
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpcId
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
    * @param string $vpcId vpcId
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets deployMode
    *  deployMode
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
    * @param string|null $deployMode deployMode
    *
    * @return $this
    */
    public function setDeployMode($deployMode)
    {
        $this->container['deployMode'] = $deployMode;
        return $this;
    }

    /**
    * Gets labels
    *  labels
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\EnvironmentCreateLabels[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\EnvironmentCreateLabels[]|null $labels labels
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
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

