<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectInfoVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectInfoVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 项目ID。 **取值范围**： 不涉及
    * name  **参数解释**： 项目名称。 **取值范围**： 不涉及
    * projectType  **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    * domainId  **参数解释**： 项目空间ID。 **取值范围**： 不涉及
    * modelId  **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    * acceptRr  **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    * category  **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    * createdByName  **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectType' => 'string',
            'domainId' => 'string',
            'modelId' => 'string',
            'acceptRr' => 'int',
            'category' => 'string',
            'createdByName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 项目ID。 **取值范围**： 不涉及
    * name  **参数解释**： 项目名称。 **取值范围**： 不涉及
    * projectType  **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    * domainId  **参数解释**： 项目空间ID。 **取值范围**： 不涉及
    * modelId  **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    * acceptRr  **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    * category  **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    * createdByName  **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectType' => null,
        'domainId' => null,
        'modelId' => null,
        'acceptRr' => 'int32',
        'category' => null,
        'createdByName' => null
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
    * id  **参数解释**： 项目ID。 **取值范围**： 不涉及
    * name  **参数解释**： 项目名称。 **取值范围**： 不涉及
    * projectType  **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    * domainId  **参数解释**： 项目空间ID。 **取值范围**： 不涉及
    * modelId  **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    * acceptRr  **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    * category  **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    * createdByName  **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectType' => 'project_type',
            'domainId' => 'domain_id',
            'modelId' => 'model_id',
            'acceptRr' => 'accept_rr',
            'category' => 'category',
            'createdByName' => 'created_by_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 项目ID。 **取值范围**： 不涉及
    * name  **参数解释**： 项目名称。 **取值范围**： 不涉及
    * projectType  **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    * domainId  **参数解释**： 项目空间ID。 **取值范围**： 不涉及
    * modelId  **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    * acceptRr  **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    * category  **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    * createdByName  **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectType' => 'setProjectType',
            'domainId' => 'setDomainId',
            'modelId' => 'setModelId',
            'acceptRr' => 'setAcceptRr',
            'category' => 'setCategory',
            'createdByName' => 'setCreatedByName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 项目ID。 **取值范围**： 不涉及
    * name  **参数解释**： 项目名称。 **取值范围**： 不涉及
    * projectType  **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    * domainId  **参数解释**： 项目空间ID。 **取值范围**： 不涉及
    * modelId  **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    * acceptRr  **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    * category  **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    * createdByName  **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectType' => 'getProjectType',
            'domainId' => 'getDomainId',
            'modelId' => 'getModelId',
            'acceptRr' => 'getAcceptRr',
            'category' => 'getCategory',
            'createdByName' => 'getCreatedByName'
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
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['acceptRr'] = isset($data['acceptRr']) ? $data['acceptRr'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['createdByName'] = isset($data['createdByName']) ? $data['createdByName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['projectType']) && (mb_strlen($this->container['projectType']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectType']) && (mb_strlen($this->container['projectType']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 19)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 18)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) > 8)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及
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
    * @param string|null $id **参数解释**： 项目ID。 **取值范围**： 不涉及
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
    *  **参数解释**： 项目名称。 **取值范围**： 不涉及
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
    * @param string|null $name **参数解释**： 项目名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectType
    *  **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    *
    * @return string|null
    */
    public function getProjectType()
    {
        return $this->container['projectType'];
    }

    /**
    * Sets projectType
    *
    * @param string|null $projectType **参数解释**： 项目类型。 **取值范围**： - ipd：IPD项目 - scrum：scrum项目 - xboard：看板项目
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**： 项目空间ID。 **取值范围**： 不涉及
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
    * @param string|null $domainId **参数解释**： 项目空间ID。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets modelId
    *  **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId **参数解释**： IPD项目模型Id。 **取值范围**： 10001（系统设备类） 10002（独立软件类） 10003（云服务类型）
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets acceptRr
    *  **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    *
    * @return int|null
    */
    public function getAcceptRr()
    {
        return $this->container['acceptRr'];
    }

    /**
    * Sets acceptRr
    *
    * @param int|null $acceptRr **参数解释**： 该项目是否接受外部RR（原始需求）。 **取值范围**： - 0：不接受外部RR - 1：接受外部RR
    *
    * @return $this
    */
    public function setAcceptRr($acceptRr)
    {
        $this->container['acceptRr'] = $acceptRr;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 项目类型，用于区分项目和项目群。 **取值范围**： - Project：项目 - Group：项目群
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets createdByName
    *  **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedByName()
    {
        return $this->container['createdByName'];
    }

    /**
    * Sets createdByName
    *
    * @param string|null $createdByName **参数解释**： 项目创建人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedByName($createdByName)
    {
        $this->container['createdByName'] = $createdByName;
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

