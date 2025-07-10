<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateIssuesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateIssuesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branch  分支名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * relatedId  工作项集合
    * repoId  仓库id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branch' => 'string',
            'projectId' => 'string',
            'relatedId' => 'string[]',
            'repoId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branch  分支名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * relatedId  工作项集合
    * repoId  仓库id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branch' => null,
        'projectId' => null,
        'relatedId' => null,
        'repoId' => null
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
    * branch  分支名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * relatedId  工作项集合
    * repoId  仓库id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branch' => 'branch',
            'projectId' => 'project_id',
            'relatedId' => 'related_id',
            'repoId' => 'repo_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branch  分支名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * relatedId  工作项集合
    * repoId  仓库id
    *
    * @var string[]
    */
    protected static $setters = [
            'branch' => 'setBranch',
            'projectId' => 'setProjectId',
            'relatedId' => 'setRelatedId',
            'repoId' => 'setRepoId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branch  分支名
    * projectId  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * relatedId  工作项集合
    * repoId  仓库id
    *
    * @var string[]
    */
    protected static $getters = [
            'branch' => 'getBranch',
            'projectId' => 'getProjectId',
            'relatedId' => 'getRelatedId',
            'repoId' => 'getRepoId'
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['relatedId'] = isset($data['relatedId']) ? $data['relatedId'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['relatedId'] === null) {
            $invalidProperties[] = "'relatedId' can't be null";
        }
        if ($this->container['repoId'] === null) {
            $invalidProperties[] = "'repoId' can't be null";
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
    * Gets branch
    *  分支名
    *
    * @return string
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string $branch 分支名
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
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
    * @param string $projectId 项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets relatedId
    *  工作项集合
    *
    * @return string[]
    */
    public function getRelatedId()
    {
        return $this->container['relatedId'];
    }

    /**
    * Sets relatedId
    *
    * @param string[] $relatedId 工作项集合
    *
    * @return $this
    */
    public function setRelatedId($relatedId)
    {
        $this->container['relatedId'] = $relatedId;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库id
    *
    * @return string
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string $repoId 仓库id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
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

