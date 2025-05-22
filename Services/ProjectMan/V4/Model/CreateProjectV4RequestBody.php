<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateProjectV4RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateProjectV4RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectName  项目名称
    * description  项目描述
    * source  项目来源
    * projectType  项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    * enterpriseId  项目要绑定的企业项目ID
    * templateId  用户创建的项目模板id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectName' => 'string',
            'description' => 'string',
            'source' => 'string',
            'projectType' => 'string',
            'enterpriseId' => 'string',
            'templateId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectName  项目名称
    * description  项目描述
    * source  项目来源
    * projectType  项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    * enterpriseId  项目要绑定的企业项目ID
    * templateId  用户创建的项目模板id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectName' => null,
        'description' => null,
        'source' => null,
        'projectType' => null,
        'enterpriseId' => null,
        'templateId' => null
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
    * projectName  项目名称
    * description  项目描述
    * source  项目来源
    * projectType  项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    * enterpriseId  项目要绑定的企业项目ID
    * templateId  用户创建的项目模板id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectName' => 'project_name',
            'description' => 'description',
            'source' => 'source',
            'projectType' => 'project_type',
            'enterpriseId' => 'enterprise_id',
            'templateId' => 'template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectName  项目名称
    * description  项目描述
    * source  项目来源
    * projectType  项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    * enterpriseId  项目要绑定的企业项目ID
    * templateId  用户创建的项目模板id
    *
    * @var string[]
    */
    protected static $setters = [
            'projectName' => 'setProjectName',
            'description' => 'setDescription',
            'source' => 'setSource',
            'projectType' => 'setProjectType',
            'enterpriseId' => 'setEnterpriseId',
            'templateId' => 'setTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectName  项目名称
    * description  项目描述
    * source  项目来源
    * projectType  项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    * enterpriseId  项目要绑定的企业项目ID
    * templateId  用户创建的项目模板id
    *
    * @var string[]
    */
    protected static $getters = [
            'projectName' => 'getProjectName',
            'description' => 'getDescription',
            'source' => 'getSource',
            'projectType' => 'getProjectType',
            'enterpriseId' => 'getEnterpriseId',
            'templateId' => 'getTemplateId'
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
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
            if ((mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectType'] === null) {
            $invalidProperties[] = "'projectType' can't be null";
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
    * Gets projectName
    *  项目名称
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets description
    *  项目描述
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
    * @param string|null $description 项目描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets source
    *  项目来源
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 项目来源
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets projectType
    *  项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    *
    * @return string
    */
    public function getProjectType()
    {
        return $this->container['projectType'];
    }

    /**
    * Sets projectType
    *
    * @param string $projectType 项目类型 scrum, xboard(看板项目), basic, phoenix(凤凰项目)
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
        return $this;
    }

    /**
    * Gets enterpriseId
    *  项目要绑定的企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
    * Sets enterpriseId
    *
    * @param string|null $enterpriseId 项目要绑定的企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;
        return $this;
    }

    /**
    * Gets templateId
    *  用户创建的项目模板id
    *
    * @return int|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int|null $templateId 用户创建的项目模板id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
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

