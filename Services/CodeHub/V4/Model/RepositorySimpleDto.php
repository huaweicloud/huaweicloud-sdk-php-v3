<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositorySimpleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositorySimpleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'description' => 'string',
            'name' => 'string',
            'nameWithNamespace' => 'string',
            'path' => 'string',
            'pathWithNamespace' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'archived' => 'bool',
            'sshUrlToRepo' => 'string',
            'httpUrlToRepo' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'developMode' => 'string',
            'moderationResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'description' => null,
        'name' => null,
        'nameWithNamespace' => null,
        'path' => null,
        'pathWithNamespace' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'archived' => null,
        'sshUrlToRepo' => null,
        'httpUrlToRepo' => null,
        'projectId' => null,
        'projectName' => null,
        'developMode' => null,
        'moderationResult' => null
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
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'name' => 'name',
            'nameWithNamespace' => 'name_with_namespace',
            'path' => 'path',
            'pathWithNamespace' => 'path_with_namespace',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'archived' => 'archived',
            'sshUrlToRepo' => 'ssh_url_to_repo',
            'httpUrlToRepo' => 'http_url_to_repo',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'developMode' => 'develop_mode',
            'moderationResult' => 'moderation_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'name' => 'setName',
            'nameWithNamespace' => 'setNameWithNamespace',
            'path' => 'setPath',
            'pathWithNamespace' => 'setPathWithNamespace',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'archived' => 'setArchived',
            'sshUrlToRepo' => 'setSshUrlToRepo',
            'httpUrlToRepo' => 'setHttpUrlToRepo',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'developMode' => 'setDevelopMode',
            'moderationResult' => 'setModerationResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 仓库ID。
    * description  **参数解释：** 仓库描述信息。
    * name  **参数解释：** 仓库名称。
    * nameWithNamespace  **参数解释：** 仓库完整名称。
    * path  **参数解释：** 仓库路径。
    * pathWithNamespace  **参数解释：** 仓库完整路径。
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * archived  **参数解释：** 是否归档。
    * sshUrlToRepo  **参数解释：** 仓库ssh地址。
    * httpUrlToRepo  **参数解释：** 仓库http地址。
    * projectId  **参数解释：** 仓库所属项目ID。
    * projectName  **参数解释：** 仓库所属项目名称。
    * developMode  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    * moderationResult  **参数解释：** 审核状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'name' => 'getName',
            'nameWithNamespace' => 'getNameWithNamespace',
            'path' => 'getPath',
            'pathWithNamespace' => 'getPathWithNamespace',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'archived' => 'getArchived',
            'sshUrlToRepo' => 'getSshUrlToRepo',
            'httpUrlToRepo' => 'getHttpUrlToRepo',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'developMode' => 'getDevelopMode',
            'moderationResult' => 'getModerationResult'
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
    const DEVELOP_MODE_NORMAL = 'normal';
    const DEVELOP_MODE_CR = 'CR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDevelopModeAllowableValues()
    {
        return [
            self::DEVELOP_MODE_NORMAL,
            self::DEVELOP_MODE_CR,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['sshUrlToRepo'] = isset($data['sshUrlToRepo']) ? $data['sshUrlToRepo'] : null;
        $this->container['httpUrlToRepo'] = isset($data['httpUrlToRepo']) ? $data['httpUrlToRepo'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['developMode'] = isset($data['developMode']) ? $data['developMode'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 512)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) > 512)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['nameWithNamespace']) && (mb_strlen($this->container['nameWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 512)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 1)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) > 512)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['pathWithNamespace']) && (mb_strlen($this->container['pathWithNamespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'pathWithNamespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) > 512)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['sshUrlToRepo']) && (mb_strlen($this->container['sshUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'sshUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) > 512)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['httpUrlToRepo']) && (mb_strlen($this->container['httpUrlToRepo']) < 1)) {
                $invalidProperties[] = "invalid value for 'httpUrlToRepo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 512)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDevelopModeAllowableValues();
                if (!is_null($this->container['developMode']) && !in_array($this->container['developMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'developMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  **参数解释：** 仓库ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 仓库ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 仓库描述信息。
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
    * @param string|null $description **参数解释：** 仓库描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 仓库名称。
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
    * @param string|null $name **参数解释：** 仓库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameWithNamespace
    *  **参数解释：** 仓库完整名称。
    *
    * @return string|null
    */
    public function getNameWithNamespace()
    {
        return $this->container['nameWithNamespace'];
    }

    /**
    * Sets nameWithNamespace
    *
    * @param string|null $nameWithNamespace **参数解释：** 仓库完整名称。
    *
    * @return $this
    */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 仓库路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 仓库路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets pathWithNamespace
    *  **参数解释：** 仓库完整路径。
    *
    * @return string|null
    */
    public function getPathWithNamespace()
    {
        return $this->container['pathWithNamespace'];
    }

    /**
    * Sets pathWithNamespace
    *
    * @param string|null $pathWithNamespace **参数解释：** 仓库完整路径。
    *
    * @return $this
    */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否归档。
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived **参数解释：** 是否归档。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets sshUrlToRepo
    *  **参数解释：** 仓库ssh地址。
    *
    * @return string|null
    */
    public function getSshUrlToRepo()
    {
        return $this->container['sshUrlToRepo'];
    }

    /**
    * Sets sshUrlToRepo
    *
    * @param string|null $sshUrlToRepo **参数解释：** 仓库ssh地址。
    *
    * @return $this
    */
    public function setSshUrlToRepo($sshUrlToRepo)
    {
        $this->container['sshUrlToRepo'] = $sshUrlToRepo;
        return $this;
    }

    /**
    * Gets httpUrlToRepo
    *  **参数解释：** 仓库http地址。
    *
    * @return string|null
    */
    public function getHttpUrlToRepo()
    {
        return $this->container['httpUrlToRepo'];
    }

    /**
    * Sets httpUrlToRepo
    *
    * @param string|null $httpUrlToRepo **参数解释：** 仓库http地址。
    *
    * @return $this
    */
    public function setHttpUrlToRepo($httpUrlToRepo)
    {
        $this->container['httpUrlToRepo'] = $httpUrlToRepo;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 仓库所属项目ID。
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
    * @param string|null $projectId **参数解释：** 仓库所属项目ID。
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
    *  **参数解释：** 仓库所属项目名称。
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
    * @param string|null $projectName **参数解释：** 仓库所属项目名称。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets developMode
    *  **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    *
    * @return string|null
    */
    public function getDevelopMode()
    {
        return $this->container['developMode'];
    }

    /**
    * Sets developMode
    *
    * @param string|null $developMode **参数解释：** 仓库开发模式。 **取值范围：** - normal - CR
    *
    * @return $this
    */
    public function setDevelopMode($developMode)
    {
        $this->container['developMode'] = $developMode;
        return $this;
    }

    /**
    * Gets moderationResult
    *  **参数解释：** 审核状态。
    *
    * @return bool|null
    */
    public function getModerationResult()
    {
        return $this->container['moderationResult'];
    }

    /**
    * Sets moderationResult
    *
    * @param bool|null $moderationResult **参数解释：** 审核状态。
    *
    * @return $this
    */
    public function setModerationResult($moderationResult)
    {
        $this->container['moderationResult'] = $moderationResult;
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

