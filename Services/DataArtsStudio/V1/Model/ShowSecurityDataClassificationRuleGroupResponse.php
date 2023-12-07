<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityDataClassificationRuleGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityDataClassificationRuleGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  规则组ID
    * name  规则组名称
    * rules  规则实体
    * description  规则组描述
    * createdBy  规则组创建人
    * createdAt  规则组创建时间
    * updatedBy  规则组更新人
    * updatedAt  规则组更新时间
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'name' => 'string',
            'rules' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationRuleQueryDTO[]',
            'description' => 'string',
            'createdBy' => 'string',
            'createdAt' => 'int',
            'updatedBy' => 'string',
            'updatedAt' => 'int',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  规则组ID
    * name  规则组名称
    * rules  规则实体
    * description  规则组描述
    * createdBy  规则组创建人
    * createdAt  规则组创建时间
    * updatedBy  规则组更新人
    * updatedAt  规则组更新时间
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'name' => null,
        'rules' => null,
        'description' => null,
        'createdBy' => null,
        'createdAt' => 'int64',
        'updatedBy' => null,
        'updatedAt' => 'int64',
        'projectId' => null
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
    * uuid  规则组ID
    * name  规则组名称
    * rules  规则实体
    * description  规则组描述
    * createdBy  规则组创建人
    * createdAt  规则组创建时间
    * updatedBy  规则组更新人
    * updatedAt  规则组更新时间
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'name' => 'name',
            'rules' => 'rules',
            'description' => 'description',
            'createdBy' => 'created_by',
            'createdAt' => 'created_at',
            'updatedBy' => 'updated_by',
            'updatedAt' => 'updated_at',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  规则组ID
    * name  规则组名称
    * rules  规则实体
    * description  规则组描述
    * createdBy  规则组创建人
    * createdAt  规则组创建时间
    * updatedBy  规则组更新人
    * updatedAt  规则组更新时间
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'name' => 'setName',
            'rules' => 'setRules',
            'description' => 'setDescription',
            'createdBy' => 'setCreatedBy',
            'createdAt' => 'setCreatedAt',
            'updatedBy' => 'setUpdatedBy',
            'updatedAt' => 'setUpdatedAt',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  规则组ID
    * name  规则组名称
    * rules  规则实体
    * description  规则组描述
    * createdBy  规则组创建人
    * createdAt  规则组创建时间
    * updatedBy  规则组更新人
    * updatedAt  规则组更新时间
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'name' => 'getName',
            'rules' => 'getRules',
            'description' => 'getDescription',
            'createdBy' => 'getCreatedBy',
            'createdAt' => 'getCreatedAt',
            'updatedBy' => 'getUpdatedBy',
            'updatedAt' => 'getUpdatedAt',
            'projectId' => 'getProjectId'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 128)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && ($this->container['createdAt'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createdAt', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createdAt']) && ($this->container['createdAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    * Gets uuid
    *  规则组ID
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 规则组ID
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets name
    *  规则组名称
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
    * @param string|null $name 规则组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets rules
    *  规则实体
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationRuleQueryDTO[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationRuleQueryDTO[]|null $rules 规则实体
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets description
    *  规则组描述
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
    * @param string|null $description 规则组描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdBy
    *  规则组创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 规则组创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdAt
    *  规则组创建时间
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt 规则组创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedBy
    *  规则组更新人
    *
    * @return string|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string|null $updatedBy 规则组更新人
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets updatedAt
    *  规则组更新时间
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt 规则组更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

