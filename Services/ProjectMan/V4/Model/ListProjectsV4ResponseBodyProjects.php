<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectsV4ResponseBodyProjects implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectsV4ResponseBody_projects';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectNumId  项目numId
    * projectId  项目uuid
    * projectName  项目名称
    * description  项目描述
    * createdTime  项目创建时间
    * updatedTime  项目更新时间
    * projectType  项目类型
    * creator  creator
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectNumId' => 'int',
            'projectId' => 'string',
            'projectName' => 'string',
            'description' => 'string',
            'createdTime' => 'int',
            'updatedTime' => 'int',
            'projectType' => 'string',
            'creator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ListProjectsV4ResponseBodyCreator'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectNumId  项目numId
    * projectId  项目uuid
    * projectName  项目名称
    * description  项目描述
    * createdTime  项目创建时间
    * updatedTime  项目更新时间
    * projectType  项目类型
    * creator  creator
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectNumId' => 'int32',
        'projectId' => null,
        'projectName' => null,
        'description' => null,
        'createdTime' => 'int64',
        'updatedTime' => 'int64',
        'projectType' => null,
        'creator' => null
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
    * projectNumId  项目numId
    * projectId  项目uuid
    * projectName  项目名称
    * description  项目描述
    * createdTime  项目创建时间
    * updatedTime  项目更新时间
    * projectType  项目类型
    * creator  creator
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectNumId' => 'project_num_id',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'description' => 'description',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'projectType' => 'project_type',
            'creator' => 'creator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectNumId  项目numId
    * projectId  项目uuid
    * projectName  项目名称
    * description  项目描述
    * createdTime  项目创建时间
    * updatedTime  项目更新时间
    * projectType  项目类型
    * creator  creator
    *
    * @var string[]
    */
    protected static $setters = [
            'projectNumId' => 'setProjectNumId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'description' => 'setDescription',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'projectType' => 'setProjectType',
            'creator' => 'setCreator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectNumId  项目numId
    * projectId  项目uuid
    * projectName  项目名称
    * description  项目描述
    * createdTime  项目创建时间
    * updatedTime  项目更新时间
    * projectType  项目类型
    * creator  creator
    *
    * @var string[]
    */
    protected static $getters = [
            'projectNumId' => 'getProjectNumId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'description' => 'getDescription',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'projectType' => 'getProjectType',
            'creator' => 'getCreator'
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
        $this->container['projectNumId'] = isset($data['projectNumId']) ? $data['projectNumId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
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
    * Gets projectNumId
    *  项目numId
    *
    * @return int|null
    */
    public function getProjectNumId()
    {
        return $this->container['projectNumId'];
    }

    /**
    * Sets projectNumId
    *
    * @param int|null $projectNumId 项目numId
    *
    * @return $this
    */
    public function setProjectNumId($projectNumId)
    {
        $this->container['projectNumId'] = $projectNumId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目uuid
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
    * @param string|null $projectId 项目uuid
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
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
    * Gets createdTime
    *  项目创建时间
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 项目创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  项目更新时间
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime 项目更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets projectType
    *  项目类型
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
    * @param string|null $projectType 项目类型
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ListProjectsV4ResponseBodyCreator|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ListProjectsV4ResponseBodyCreator|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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

