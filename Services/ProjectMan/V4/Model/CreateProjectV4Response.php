<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateProjectV4Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateProjectV4Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectNumId  项目数字id
    * projectId  项目id
    * projectName  项目名
    * description  项目描述
    * projectType  项目类型
    * userNumId  创建者的数字id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectNumId' => 'int',
            'projectId' => 'string',
            'projectName' => 'string',
            'description' => 'string',
            'projectType' => 'string',
            'userNumId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectNumId  项目数字id
    * projectId  项目id
    * projectName  项目名
    * description  项目描述
    * projectType  项目类型
    * userNumId  创建者的数字id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectNumId' => 'int32',
        'projectId' => null,
        'projectName' => null,
        'description' => null,
        'projectType' => null,
        'userNumId' => 'int32'
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
    * projectNumId  项目数字id
    * projectId  项目id
    * projectName  项目名
    * description  项目描述
    * projectType  项目类型
    * userNumId  创建者的数字id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectNumId' => 'project_num_id',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'description' => 'description',
            'projectType' => 'project_type',
            'userNumId' => 'user_num_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectNumId  项目数字id
    * projectId  项目id
    * projectName  项目名
    * description  项目描述
    * projectType  项目类型
    * userNumId  创建者的数字id
    *
    * @var string[]
    */
    protected static $setters = [
            'projectNumId' => 'setProjectNumId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'description' => 'setDescription',
            'projectType' => 'setProjectType',
            'userNumId' => 'setUserNumId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectNumId  项目数字id
    * projectId  项目id
    * projectName  项目名
    * description  项目描述
    * projectType  项目类型
    * userNumId  创建者的数字id
    *
    * @var string[]
    */
    protected static $getters = [
            'projectNumId' => 'getProjectNumId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'description' => 'getDescription',
            'projectType' => 'getProjectType',
            'userNumId' => 'getUserNumId'
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
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['userNumId'] = isset($data['userNumId']) ? $data['userNumId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectType']) && !preg_match("/scrum|xboard|basic|normal/", $this->container['projectType'])) {
                $invalidProperties[] = "invalid value for 'projectType', must be conform to the pattern /scrum|xboard|basic|normal/.";
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
    * Gets projectNumId
    *  项目数字id
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
    * @param int|null $projectNumId 项目数字id
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
    *  项目id
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
    * @param string|null $projectId 项目id
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
    *  项目名
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
    * @param string|null $projectName 项目名
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
    * Gets userNumId
    *  创建者的数字id
    *
    * @return int|null
    */
    public function getUserNumId()
    {
        return $this->container['userNumId'];
    }

    /**
    * Sets userNumId
    *
    * @param int|null $userNumId 创建者的数字id
    *
    * @return $this
    */
    public function setUserNumId($userNumId)
    {
        $this->container['userNumId'] = $userNumId;
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

