<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ArtifactSearchResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ArtifactSearchResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 文件名。 **取值范围**： 不涉及。
    * relativePath  **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    * repo  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 仓库名。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名称。 **取值范围**： 不涉及。
    * repoType  **参数解释**： 制品类型。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * modified  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * oldRepoId  **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'relativePath' => 'string',
            'repo' => 'string',
            'repoName' => 'string',
            'displayName' => 'string',
            'repoType' => 'string',
            'createdBy' => 'string',
            'createdUserName' => 'string',
            'created' => 'string',
            'modified' => 'string',
            'oldRepoId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 文件名。 **取值范围**： 不涉及。
    * relativePath  **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    * repo  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 仓库名。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名称。 **取值范围**： 不涉及。
    * repoType  **参数解释**： 制品类型。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * modified  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * oldRepoId  **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'relativePath' => null,
        'repo' => null,
        'repoName' => null,
        'displayName' => null,
        'repoType' => null,
        'createdBy' => null,
        'createdUserName' => null,
        'created' => null,
        'modified' => null,
        'oldRepoId' => null
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
    * name  **参数解释**： 文件名。 **取值范围**： 不涉及。
    * relativePath  **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    * repo  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 仓库名。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名称。 **取值范围**： 不涉及。
    * repoType  **参数解释**： 制品类型。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * modified  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * oldRepoId  **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'relativePath' => 'relativePath',
            'repo' => 'repo',
            'repoName' => 'repoName',
            'displayName' => 'displayName',
            'repoType' => 'repoType',
            'createdBy' => 'createdBy',
            'createdUserName' => 'createdUserName',
            'created' => 'created',
            'modified' => 'modified',
            'oldRepoId' => 'oldRepoId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 文件名。 **取值范围**： 不涉及。
    * relativePath  **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    * repo  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 仓库名。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名称。 **取值范围**： 不涉及。
    * repoType  **参数解释**： 制品类型。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * modified  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * oldRepoId  **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'relativePath' => 'setRelativePath',
            'repo' => 'setRepo',
            'repoName' => 'setRepoName',
            'displayName' => 'setDisplayName',
            'repoType' => 'setRepoType',
            'createdBy' => 'setCreatedBy',
            'createdUserName' => 'setCreatedUserName',
            'created' => 'setCreated',
            'modified' => 'setModified',
            'oldRepoId' => 'setOldRepoId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 文件名。 **取值范围**： 不涉及。
    * relativePath  **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    * repo  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    * repoName  **参数解释**： 仓库名。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名称。 **取值范围**： 不涉及。
    * repoType  **参数解释**： 制品类型。 **取值范围**： 不涉及。
    * createdBy  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    * createdUserName  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * modified  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    * oldRepoId  **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'relativePath' => 'getRelativePath',
            'repo' => 'getRepo',
            'repoName' => 'getRepoName',
            'displayName' => 'getDisplayName',
            'repoType' => 'getRepoType',
            'createdBy' => 'getCreatedBy',
            'createdUserName' => 'getCreatedUserName',
            'created' => 'getCreated',
            'modified' => 'getModified',
            'oldRepoId' => 'getOldRepoId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['relativePath'] = isset($data['relativePath']) ? $data['relativePath'] : null;
        $this->container['repo'] = isset($data['repo']) ? $data['repo'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdUserName'] = isset($data['createdUserName']) ? $data['createdUserName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['oldRepoId'] = isset($data['oldRepoId']) ? $data['oldRepoId'] : null;
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
    * Gets name
    *  **参数解释**： 文件名。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 文件名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets relativePath
    *  **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRelativePath()
    {
        return $this->container['relativePath'];
    }

    /**
    * Sets relativePath
    *
    * @param string|null $relativePath **参数解释**： 文件相对路径。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelativePath($relativePath)
    {
        $this->container['relativePath'] = $relativePath;
        return $this;
    }

    /**
    * Gets repo
    *  **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepo()
    {
        return $this->container['repo'];
    }

    /**
    * Sets repo
    *
    * @param string|null $repo **参数解释**： 仓库ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepo($repo)
    {
        $this->container['repo'] = $repo;
        return $this;
    }

    /**
    * Gets repoName
    *  **参数解释**： 仓库名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName **参数解释**： 仓库名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**： 展示名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**： 展示名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets repoType
    *  **参数解释**： 制品类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string|null $repoType **参数解释**： 制品类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy **参数解释**： 创建人ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdUserName
    *  **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedUserName()
    {
        return $this->container['createdUserName'];
    }

    /**
    * Sets createdUserName
    *
    * @param string|null $createdUserName **参数解释**： 创建人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedUserName($createdUserName)
    {
        $this->container['createdUserName'] = $createdUserName;
        return $this;
    }

    /**
    * Gets created
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets modified
    *  **参数解释**： 修改时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
    * Sets modified
    *
    * @param string|null $modified **参数解释**： 修改时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;
        return $this;
    }

    /**
    * Gets oldRepoId
    *  **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOldRepoId()
    {
        return $this->container['oldRepoId'];
    }

    /**
    * Sets oldRepoId
    *
    * @param string|null $oldRepoId **参数解释**： 旧仓库ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOldRepoId($oldRepoId)
    {
        $this->container['oldRepoId'] = $oldRepoId;
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

