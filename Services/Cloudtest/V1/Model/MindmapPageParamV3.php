<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MindmapPageParamV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MindmapPageParamV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * folderIdCollection  目录ID集合
    * creatorNumCollection  创建者ID集合
    * updaterNumCollection  更新人ID集合
    * folderRootId  根目录ID
    * idCollection  主键ID集合
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量，最大支持200条
    * name  脑图名称
    * projectId  项目ID
    * branchUri  分支uri
    * isMaster  是否基线
    * iteratorUri  计划uri
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'folderIdCollection' => 'string[]',
            'creatorNumCollection' => 'string[]',
            'updaterNumCollection' => 'string[]',
            'folderRootId' => 'string',
            'idCollection' => 'string[]',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'projectId' => 'string',
            'branchUri' => 'string',
            'isMaster' => 'int',
            'iteratorUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * folderIdCollection  目录ID集合
    * creatorNumCollection  创建者ID集合
    * updaterNumCollection  更新人ID集合
    * folderRootId  根目录ID
    * idCollection  主键ID集合
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量，最大支持200条
    * name  脑图名称
    * projectId  项目ID
    * branchUri  分支uri
    * isMaster  是否基线
    * iteratorUri  计划uri
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'folderIdCollection' => null,
        'creatorNumCollection' => null,
        'updaterNumCollection' => null,
        'folderRootId' => null,
        'idCollection' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'name' => null,
        'projectId' => null,
        'branchUri' => null,
        'isMaster' => null,
        'iteratorUri' => null
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
    * folderIdCollection  目录ID集合
    * creatorNumCollection  创建者ID集合
    * updaterNumCollection  更新人ID集合
    * folderRootId  根目录ID
    * idCollection  主键ID集合
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量，最大支持200条
    * name  脑图名称
    * projectId  项目ID
    * branchUri  分支uri
    * isMaster  是否基线
    * iteratorUri  计划uri
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'folderIdCollection' => 'folder_id_collection',
            'creatorNumCollection' => 'creator_num_collection',
            'updaterNumCollection' => 'updater_num_collection',
            'folderRootId' => 'folder_root_id',
            'idCollection' => 'id_collection',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'projectId' => 'project_id',
            'branchUri' => 'branch_uri',
            'isMaster' => 'is_master',
            'iteratorUri' => 'iterator_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * folderIdCollection  目录ID集合
    * creatorNumCollection  创建者ID集合
    * updaterNumCollection  更新人ID集合
    * folderRootId  根目录ID
    * idCollection  主键ID集合
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量，最大支持200条
    * name  脑图名称
    * projectId  项目ID
    * branchUri  分支uri
    * isMaster  是否基线
    * iteratorUri  计划uri
    *
    * @var string[]
    */
    protected static $setters = [
            'folderIdCollection' => 'setFolderIdCollection',
            'creatorNumCollection' => 'setCreatorNumCollection',
            'updaterNumCollection' => 'setUpdaterNumCollection',
            'folderRootId' => 'setFolderRootId',
            'idCollection' => 'setIdCollection',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'branchUri' => 'setBranchUri',
            'isMaster' => 'setIsMaster',
            'iteratorUri' => 'setIteratorUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * folderIdCollection  目录ID集合
    * creatorNumCollection  创建者ID集合
    * updaterNumCollection  更新人ID集合
    * folderRootId  根目录ID
    * idCollection  主键ID集合
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量，最大支持200条
    * name  脑图名称
    * projectId  项目ID
    * branchUri  分支uri
    * isMaster  是否基线
    * iteratorUri  计划uri
    *
    * @var string[]
    */
    protected static $getters = [
            'folderIdCollection' => 'getFolderIdCollection',
            'creatorNumCollection' => 'getCreatorNumCollection',
            'updaterNumCollection' => 'getUpdaterNumCollection',
            'folderRootId' => 'getFolderRootId',
            'idCollection' => 'getIdCollection',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'branchUri' => 'getBranchUri',
            'isMaster' => 'getIsMaster',
            'iteratorUri' => 'getIteratorUri'
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
        $this->container['folderIdCollection'] = isset($data['folderIdCollection']) ? $data['folderIdCollection'] : null;
        $this->container['creatorNumCollection'] = isset($data['creatorNumCollection']) ? $data['creatorNumCollection'] : null;
        $this->container['updaterNumCollection'] = isset($data['updaterNumCollection']) ? $data['updaterNumCollection'] : null;
        $this->container['folderRootId'] = isset($data['folderRootId']) ? $data['folderRootId'] : null;
        $this->container['idCollection'] = isset($data['idCollection']) ? $data['idCollection'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['branchUri'] = isset($data['branchUri']) ? $data['branchUri'] : null;
        $this->container['isMaster'] = isset($data['isMaster']) ? $data['isMaster'] : null;
        $this->container['iteratorUri'] = isset($data['iteratorUri']) ? $data['iteratorUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets folderIdCollection
    *  目录ID集合
    *
    * @return string[]|null
    */
    public function getFolderIdCollection()
    {
        return $this->container['folderIdCollection'];
    }

    /**
    * Sets folderIdCollection
    *
    * @param string[]|null $folderIdCollection 目录ID集合
    *
    * @return $this
    */
    public function setFolderIdCollection($folderIdCollection)
    {
        $this->container['folderIdCollection'] = $folderIdCollection;
        return $this;
    }

    /**
    * Gets creatorNumCollection
    *  创建者ID集合
    *
    * @return string[]|null
    */
    public function getCreatorNumCollection()
    {
        return $this->container['creatorNumCollection'];
    }

    /**
    * Sets creatorNumCollection
    *
    * @param string[]|null $creatorNumCollection 创建者ID集合
    *
    * @return $this
    */
    public function setCreatorNumCollection($creatorNumCollection)
    {
        $this->container['creatorNumCollection'] = $creatorNumCollection;
        return $this;
    }

    /**
    * Gets updaterNumCollection
    *  更新人ID集合
    *
    * @return string[]|null
    */
    public function getUpdaterNumCollection()
    {
        return $this->container['updaterNumCollection'];
    }

    /**
    * Sets updaterNumCollection
    *
    * @param string[]|null $updaterNumCollection 更新人ID集合
    *
    * @return $this
    */
    public function setUpdaterNumCollection($updaterNumCollection)
    {
        $this->container['updaterNumCollection'] = $updaterNumCollection;
        return $this;
    }

    /**
    * Gets folderRootId
    *  根目录ID
    *
    * @return string|null
    */
    public function getFolderRootId()
    {
        return $this->container['folderRootId'];
    }

    /**
    * Sets folderRootId
    *
    * @param string|null $folderRootId 根目录ID
    *
    * @return $this
    */
    public function setFolderRootId($folderRootId)
    {
        $this->container['folderRootId'] = $folderRootId;
        return $this;
    }

    /**
    * Gets idCollection
    *  主键ID集合
    *
    * @return string[]|null
    */
    public function getIdCollection()
    {
        return $this->container['idCollection'];
    }

    /**
    * Sets idCollection
    *
    * @param string[]|null $idCollection 主键ID集合
    *
    * @return $this
    */
    public function setIdCollection($idCollection)
    {
        $this->container['idCollection'] = $idCollection;
        return $this;
    }

    /**
    * Gets offset
    *  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，最大支持200条
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量，最大支持200条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  脑图名称
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
    * @param string|null $name 脑图名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets branchUri
    *  分支uri
    *
    * @return string|null
    */
    public function getBranchUri()
    {
        return $this->container['branchUri'];
    }

    /**
    * Sets branchUri
    *
    * @param string|null $branchUri 分支uri
    *
    * @return $this
    */
    public function setBranchUri($branchUri)
    {
        $this->container['branchUri'] = $branchUri;
        return $this;
    }

    /**
    * Gets isMaster
    *  是否基线
    *
    * @return int|null
    */
    public function getIsMaster()
    {
        return $this->container['isMaster'];
    }

    /**
    * Sets isMaster
    *
    * @param int|null $isMaster 是否基线
    *
    * @return $this
    */
    public function setIsMaster($isMaster)
    {
        $this->container['isMaster'] = $isMaster;
        return $this;
    }

    /**
    * Gets iteratorUri
    *  计划uri
    *
    * @return string|null
    */
    public function getIteratorUri()
    {
        return $this->container['iteratorUri'];
    }

    /**
    * Sets iteratorUri
    *
    * @param string|null $iteratorUri 计划uri
    *
    * @return $this
    */
    public function setIteratorUri($iteratorUri)
    {
        $this->container['iteratorUri'] = $iteratorUri;
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

