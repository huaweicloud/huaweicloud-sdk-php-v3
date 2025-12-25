<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IDERepoSearchDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IDERepoSearchDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * artifactName  搜索制品名称
    * artifactType  制品类型
    * pageNo  页码
    * pageSize  每页条数
    * projectId  项目id
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'artifactName' => 'string',
            'artifactType' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'projectId' => 'string',
            'inProject' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * artifactName  搜索制品名称
    * artifactType  制品类型
    * pageNo  页码
    * pageSize  每页条数
    * projectId  项目id
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'artifactName' => null,
        'artifactType' => null,
        'pageNo' => null,
        'pageSize' => null,
        'projectId' => null,
        'inProject' => null
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
    * artifactName  搜索制品名称
    * artifactType  制品类型
    * pageNo  页码
    * pageSize  每页条数
    * projectId  项目id
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'artifactName' => 'artifact_name',
            'artifactType' => 'artifact_type',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'projectId' => 'project_id',
            'inProject' => 'in_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * artifactName  搜索制品名称
    * artifactType  制品类型
    * pageNo  页码
    * pageSize  每页条数
    * projectId  项目id
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $setters = [
            'artifactName' => 'setArtifactName',
            'artifactType' => 'setArtifactType',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'projectId' => 'setProjectId',
            'inProject' => 'setInProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * artifactName  搜索制品名称
    * artifactType  制品类型
    * pageNo  页码
    * pageSize  每页条数
    * projectId  项目id
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $getters = [
            'artifactName' => 'getArtifactName',
            'artifactType' => 'getArtifactType',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'projectId' => 'getProjectId',
            'inProject' => 'getInProject'
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
        $this->container['artifactName'] = isset($data['artifactName']) ? $data['artifactName'] : null;
        $this->container['artifactType'] = isset($data['artifactType']) ? $data['artifactType'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['inProject'] = isset($data['inProject']) ? $data['inProject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['artifactName'] === null) {
            $invalidProperties[] = "'artifactName' can't be null";
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
    * Gets artifactName
    *  搜索制品名称
    *
    * @return string
    */
    public function getArtifactName()
    {
        return $this->container['artifactName'];
    }

    /**
    * Sets artifactName
    *
    * @param string $artifactName 搜索制品名称
    *
    * @return $this
    */
    public function setArtifactName($artifactName)
    {
        $this->container['artifactName'] = $artifactName;
        return $this;
    }

    /**
    * Gets artifactType
    *  制品类型
    *
    * @return string|null
    */
    public function getArtifactType()
    {
        return $this->container['artifactType'];
    }

    /**
    * Sets artifactType
    *
    * @param string|null $artifactType 制品类型
    *
    * @return $this
    */
    public function setArtifactType($artifactType)
    {
        $this->container['artifactType'] = $artifactType;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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
    * Gets inProject
    *  是否在项目中
    *
    * @return bool|null
    */
    public function getInProject()
    {
        return $this->container['inProject'];
    }

    /**
    * Sets inProject
    *
    * @param bool|null $inProject 是否在项目中
    *
    * @return $this
    */
    public function setInProject($inProject)
    {
        $this->container['inProject'] = $inProject;
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

