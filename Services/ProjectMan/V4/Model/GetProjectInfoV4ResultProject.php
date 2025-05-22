<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetProjectInfoV4ResultProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetProjectInfoV4Result_project';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectNumId  项目numId
    * projectId  项目uuid
    * name  项目名称
    * createdOn  项目创建时间
    * updatedOn  项目更新时间
    * projectType  项目类型
    * archive  是否归档
    * enterpriseId  企业项目id
    * projectCode  项目代号
    * creator  creator
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectNumId' => 'int',
            'projectId' => 'string',
            'name' => 'string',
            'createdOn' => 'int',
            'updatedOn' => 'int',
            'projectType' => 'string',
            'archive' => 'int',
            'enterpriseId' => 'string',
            'projectCode' => 'string',
            'creator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\GetProjectInfoV4ResultProjectCreator'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectNumId  项目numId
    * projectId  项目uuid
    * name  项目名称
    * createdOn  项目创建时间
    * updatedOn  项目更新时间
    * projectType  项目类型
    * archive  是否归档
    * enterpriseId  企业项目id
    * projectCode  项目代号
    * creator  creator
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectNumId' => 'int32',
        'projectId' => null,
        'name' => null,
        'createdOn' => 'int64',
        'updatedOn' => 'int64',
        'projectType' => null,
        'archive' => 'int32',
        'enterpriseId' => null,
        'projectCode' => null,
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
    * name  项目名称
    * createdOn  项目创建时间
    * updatedOn  项目更新时间
    * projectType  项目类型
    * archive  是否归档
    * enterpriseId  企业项目id
    * projectCode  项目代号
    * creator  creator
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectNumId' => 'project_num_id',
            'projectId' => 'project_id',
            'name' => 'name',
            'createdOn' => 'created_on',
            'updatedOn' => 'updated_on',
            'projectType' => 'project_type',
            'archive' => 'archive',
            'enterpriseId' => 'enterprise_id',
            'projectCode' => 'project_code',
            'creator' => 'creator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectNumId  项目numId
    * projectId  项目uuid
    * name  项目名称
    * createdOn  项目创建时间
    * updatedOn  项目更新时间
    * projectType  项目类型
    * archive  是否归档
    * enterpriseId  企业项目id
    * projectCode  项目代号
    * creator  creator
    *
    * @var string[]
    */
    protected static $setters = [
            'projectNumId' => 'setProjectNumId',
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'createdOn' => 'setCreatedOn',
            'updatedOn' => 'setUpdatedOn',
            'projectType' => 'setProjectType',
            'archive' => 'setArchive',
            'enterpriseId' => 'setEnterpriseId',
            'projectCode' => 'setProjectCode',
            'creator' => 'setCreator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectNumId  项目numId
    * projectId  项目uuid
    * name  项目名称
    * createdOn  项目创建时间
    * updatedOn  项目更新时间
    * projectType  项目类型
    * archive  是否归档
    * enterpriseId  企业项目id
    * projectCode  项目代号
    * creator  creator
    *
    * @var string[]
    */
    protected static $getters = [
            'projectNumId' => 'getProjectNumId',
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'createdOn' => 'getCreatedOn',
            'updatedOn' => 'getUpdatedOn',
            'projectType' => 'getProjectType',
            'archive' => 'getArchive',
            'enterpriseId' => 'getEnterpriseId',
            'projectCode' => 'getProjectCode',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['projectCode'] = isset($data['projectCode']) ? $data['projectCode'] : null;
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
    * Gets name
    *  项目名称
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
    * @param string|null $name 项目名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createdOn
    *  项目创建时间
    *
    * @return int|null
    */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
    * Sets createdOn
    *
    * @param int|null $createdOn 项目创建时间
    *
    * @return $this
    */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;
        return $this;
    }

    /**
    * Gets updatedOn
    *  项目更新时间
    *
    * @return int|null
    */
    public function getUpdatedOn()
    {
        return $this->container['updatedOn'];
    }

    /**
    * Sets updatedOn
    *
    * @param int|null $updatedOn 项目更新时间
    *
    * @return $this
    */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;
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
    * Gets archive
    *  是否归档
    *
    * @return int|null
    */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
    * Sets archive
    *
    * @param int|null $archive 是否归档
    *
    * @return $this
    */
    public function setArchive($archive)
    {
        $this->container['archive'] = $archive;
        return $this;
    }

    /**
    * Gets enterpriseId
    *  企业项目id
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
    * @param string|null $enterpriseId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;
        return $this;
    }

    /**
    * Gets projectCode
    *  项目代号
    *
    * @return string|null
    */
    public function getProjectCode()
    {
        return $this->container['projectCode'];
    }

    /**
    * Sets projectCode
    *
    * @param string|null $projectCode 项目代号
    *
    * @return $this
    */
    public function setProjectCode($projectCode)
    {
        $this->container['projectCode'] = $projectCode;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\GetProjectInfoV4ResultProjectCreator|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\GetProjectInfoV4ResultProjectCreator|null $creator creator
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

