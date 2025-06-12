<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkspaceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkspaceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域id
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * viewBindId  视图绑定的空间id
    * isView  是否是视图
    * name  工作空间名称
    * description  工作空间描述
    * projectName  项目名称
    * tags  标签数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'viewBindId' => 'string',
            'isView' => 'bool',
            'name' => 'string',
            'description' => 'string',
            'projectName' => 'string',
            'tags' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TagsPojo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域id
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * viewBindId  视图绑定的空间id
    * isView  是否是视图
    * name  工作空间名称
    * description  工作空间描述
    * projectName  项目名称
    * tags  标签数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'viewBindId' => null,
        'isView' => null,
        'name' => null,
        'description' => null,
        'projectName' => null,
        'tags' => null
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
    * regionId  区域id
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * viewBindId  视图绑定的空间id
    * isView  是否是视图
    * name  工作空间名称
    * description  工作空间描述
    * projectName  项目名称
    * tags  标签数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'viewBindId' => 'view_bind_id',
            'isView' => 'is_view',
            'name' => 'name',
            'description' => 'description',
            'projectName' => 'project_name',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域id
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * viewBindId  视图绑定的空间id
    * isView  是否是视图
    * name  工作空间名称
    * description  工作空间描述
    * projectName  项目名称
    * tags  标签数组
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'viewBindId' => 'setViewBindId',
            'isView' => 'setIsView',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectName' => 'setProjectName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域id
    * enterpriseProjectId  企业项目id
    * enterpriseProjectName  企业项目名称
    * viewBindId  视图绑定的空间id
    * isView  是否是视图
    * name  工作空间名称
    * description  工作空间描述
    * projectName  项目名称
    * tags  标签数组
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'viewBindId' => 'getViewBindId',
            'isView' => 'getIsView',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectName' => 'getProjectName',
            'tags' => 'getTags'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['viewBindId'] = isset($data['viewBindId']) ? $data['viewBindId'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\da-zA-Z_-]{1,64}/", $this->container['regionId'])) {
                $invalidProperties[] = "invalid value for 'regionId', must be conform to the pattern /[\\da-zA-Z_-]{1,64}/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[\\da-zA-Z_-]{0,64}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[\\da-zA-Z_-]{0,64}/.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && !preg_match("/[\\da-zA-Z_\\u4e00-\\u9fa5\\-\\.]{0,64}/", $this->container['enterpriseProjectName'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', must be conform to the pattern /[\\da-zA-Z_\\u4e00-\\u9fa5\\-\\.]{0,64}/.";
            }
            if (!is_null($this->container['viewBindId']) && (mb_strlen($this->container['viewBindId']) > 36)) {
                $invalidProperties[] = "invalid value for 'viewBindId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['viewBindId']) && (mb_strlen($this->container['viewBindId']) < 0)) {
                $invalidProperties[] = "invalid value for 'viewBindId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['viewBindId']) && !preg_match("/[\\da-zA-Z_\\-()\\u4e00-\\u9fa5]{32,64}/", $this->container['viewBindId'])) {
                $invalidProperties[] = "invalid value for 'viewBindId', must be conform to the pattern /[\\da-zA-Z_\\-()\\u4e00-\\u9fa5]{32,64}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\da-zA-Z_\\-()\\u4e00-\\u9fa5]{1,64}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\da-zA-Z_\\-()\\u4e00-\\u9fa5]{1,64}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.{0,512}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.{0,512}$/.";
            }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
            if ((mb_strlen($this->container['projectName']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.{0,64}$/", $this->container['projectName'])) {
                $invalidProperties[] = "invalid value for 'projectName', must be conform to the pattern /^.{0,64}$/.";
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
    * Gets regionId
    *  区域id
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets viewBindId
    *  视图绑定的空间id
    *
    * @return string|null
    */
    public function getViewBindId()
    {
        return $this->container['viewBindId'];
    }

    /**
    * Sets viewBindId
    *
    * @param string|null $viewBindId 视图绑定的空间id
    *
    * @return $this
    */
    public function setViewBindId($viewBindId)
    {
        $this->container['viewBindId'] = $viewBindId;
        return $this;
    }

    /**
    * Gets isView
    *  是否是视图
    *
    * @return bool|null
    */
    public function getIsView()
    {
        return $this->container['isView'];
    }

    /**
    * Sets isView
    *
    * @param bool|null $isView 是否是视图
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
        return $this;
    }

    /**
    * Gets name
    *  工作空间名称
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
    * @param string $name 工作空间名称
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
    *  工作空间描述
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
    * @param string|null $description 工作空间描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
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
    * Gets tags
    *  标签数组
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TagsPojo[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TagsPojo[]|null $tags 标签数组
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

