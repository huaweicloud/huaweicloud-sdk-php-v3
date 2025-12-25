<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFileBuildArchivesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFileBuildArchivesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentId  父节点id
    * buildId  构建id
    * buildNo  构建序号
    * pageNo  页数
    * pageSize  每页数据量
    * repoBranch  codehub仓库分支
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentId' => 'string',
            'buildId' => 'string',
            'buildNo' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'repoBranch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentId  父节点id
    * buildId  构建id
    * buildNo  构建序号
    * pageNo  页数
    * pageSize  每页数据量
    * repoBranch  codehub仓库分支
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentId' => null,
        'buildId' => null,
        'buildNo' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'repoBranch' => null
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
    * parentId  父节点id
    * buildId  构建id
    * buildNo  构建序号
    * pageNo  页数
    * pageSize  每页数据量
    * repoBranch  codehub仓库分支
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentId' => 'parent_id',
            'buildId' => 'build_id',
            'buildNo' => 'build_no',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'repoBranch' => 'repo_branch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentId  父节点id
    * buildId  构建id
    * buildNo  构建序号
    * pageNo  页数
    * pageSize  每页数据量
    * repoBranch  codehub仓库分支
    *
    * @var string[]
    */
    protected static $setters = [
            'parentId' => 'setParentId',
            'buildId' => 'setBuildId',
            'buildNo' => 'setBuildNo',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'repoBranch' => 'setRepoBranch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentId  父节点id
    * buildId  构建id
    * buildNo  构建序号
    * pageNo  页数
    * pageSize  每页数据量
    * repoBranch  codehub仓库分支
    *
    * @var string[]
    */
    protected static $getters = [
            'parentId' => 'getParentId',
            'buildId' => 'getBuildId',
            'buildNo' => 'getBuildNo',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'repoBranch' => 'getRepoBranch'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['buildId'] = isset($data['buildId']) ? $data['buildId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['repoBranch'] = isset($data['repoBranch']) ? $data['repoBranch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['parentId']) && !preg_match("/^(0|[a-z0-9]{32})$/", $this->container['parentId'])) {
                $invalidProperties[] = "invalid value for 'parentId', must be conform to the pattern /^(0|[a-z0-9]{32})$/.";
            }
            if (!is_null($this->container['buildId']) && !preg_match("/^[a-z0-9]{32}$/", $this->container['buildId'])) {
                $invalidProperties[] = "invalid value for 'buildId', must be conform to the pattern /^[a-z0-9]{32}$/.";
            }
            if (!is_null($this->container['buildNo']) && (mb_strlen($this->container['buildNo']) > 32)) {
                $invalidProperties[] = "invalid value for 'buildNo', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['buildNo']) && (mb_strlen($this->container['buildNo']) < 1)) {
                $invalidProperties[] = "invalid value for 'buildNo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repoBranch']) && (mb_strlen($this->container['repoBranch']) > 260)) {
                $invalidProperties[] = "invalid value for 'repoBranch', the character length must be smaller than or equal to 260.";
            }
            if (!is_null($this->container['repoBranch']) && (mb_strlen($this->container['repoBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoBranch', the character length must be bigger than or equal to 1.";
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
    * Gets parentId
    *  父节点id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父节点id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets buildId
    *  构建id
    *
    * @return string|null
    */
    public function getBuildId()
    {
        return $this->container['buildId'];
    }

    /**
    * Sets buildId
    *
    * @param string|null $buildId 构建id
    *
    * @return $this
    */
    public function setBuildId($buildId)
    {
        $this->container['buildId'] = $buildId;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建序号
    *
    * @return string|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param string|null $buildNo 构建序号
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets pageNo
    *  页数
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
    * @param int|null $pageNo 页数
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
    *  每页数据量
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
    * @param int|null $pageSize 每页数据量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets repoBranch
    *  codehub仓库分支
    *
    * @return string|null
    */
    public function getRepoBranch()
    {
        return $this->container['repoBranch'];
    }

    /**
    * Sets repoBranch
    *
    * @param string|null $repoBranch codehub仓库分支
    *
    * @return $this
    */
    public function setRepoBranch($repoBranch)
    {
        $this->container['repoBranch'] = $repoBranch;
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

