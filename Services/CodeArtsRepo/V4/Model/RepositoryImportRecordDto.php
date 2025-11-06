<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryImportRecordDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryImportRecordDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 主键ID。
    * state  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    * repository  repository
    * originFullName  **参数解释：** 源仓库路径。
    * sourceUrl  **参数解释：** 源仓库地址。
    * sourceType  **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAt  **参数解释：** 导入时间。
    * finishedAt  **参数解释：** 导入完成时间。
    * repositorySize  **参数解释：** 源仓库容量。
    * errorMessage  **参数解释：** 失败原因。
    * targetFullName  **参数解释：** 仓库路径。
    * targetProjectId  **参数解释：** 项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'state' => 'string',
            'repository' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositorySimpleDto',
            'originFullName' => 'string',
            'sourceUrl' => 'string',
            'sourceType' => 'string',
            'createdAt' => 'string',
            'finishedAt' => 'string',
            'repositorySize' => 'double',
            'errorMessage' => 'string',
            'targetFullName' => 'string',
            'targetProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 主键ID。
    * state  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    * repository  repository
    * originFullName  **参数解释：** 源仓库路径。
    * sourceUrl  **参数解释：** 源仓库地址。
    * sourceType  **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAt  **参数解释：** 导入时间。
    * finishedAt  **参数解释：** 导入完成时间。
    * repositorySize  **参数解释：** 源仓库容量。
    * errorMessage  **参数解释：** 失败原因。
    * targetFullName  **参数解释：** 仓库路径。
    * targetProjectId  **参数解释：** 项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'state' => null,
        'repository' => null,
        'originFullName' => null,
        'sourceUrl' => null,
        'sourceType' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'finishedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'repositorySize' => 'double',
        'errorMessage' => null,
        'targetFullName' => null,
        'targetProjectId' => null
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
    * id  **参数解释：** 主键ID。
    * state  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    * repository  repository
    * originFullName  **参数解释：** 源仓库路径。
    * sourceUrl  **参数解释：** 源仓库地址。
    * sourceType  **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAt  **参数解释：** 导入时间。
    * finishedAt  **参数解释：** 导入完成时间。
    * repositorySize  **参数解释：** 源仓库容量。
    * errorMessage  **参数解释：** 失败原因。
    * targetFullName  **参数解释：** 仓库路径。
    * targetProjectId  **参数解释：** 项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'state' => 'state',
            'repository' => 'repository',
            'originFullName' => 'origin_full_name',
            'sourceUrl' => 'source_url',
            'sourceType' => 'source_type',
            'createdAt' => 'created_at',
            'finishedAt' => 'finished_at',
            'repositorySize' => 'repository_size',
            'errorMessage' => 'error_message',
            'targetFullName' => 'target_full_name',
            'targetProjectId' => 'target_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 主键ID。
    * state  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    * repository  repository
    * originFullName  **参数解释：** 源仓库路径。
    * sourceUrl  **参数解释：** 源仓库地址。
    * sourceType  **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAt  **参数解释：** 导入时间。
    * finishedAt  **参数解释：** 导入完成时间。
    * repositorySize  **参数解释：** 源仓库容量。
    * errorMessage  **参数解释：** 失败原因。
    * targetFullName  **参数解释：** 仓库路径。
    * targetProjectId  **参数解释：** 项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'state' => 'setState',
            'repository' => 'setRepository',
            'originFullName' => 'setOriginFullName',
            'sourceUrl' => 'setSourceUrl',
            'sourceType' => 'setSourceType',
            'createdAt' => 'setCreatedAt',
            'finishedAt' => 'setFinishedAt',
            'repositorySize' => 'setRepositorySize',
            'errorMessage' => 'setErrorMessage',
            'targetFullName' => 'setTargetFullName',
            'targetProjectId' => 'setTargetProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 主键ID。
    * state  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    * repository  repository
    * originFullName  **参数解释：** 源仓库路径。
    * sourceUrl  **参数解释：** 源仓库地址。
    * sourceType  **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    * createdAt  **参数解释：** 导入时间。
    * finishedAt  **参数解释：** 导入完成时间。
    * repositorySize  **参数解释：** 源仓库容量。
    * errorMessage  **参数解释：** 失败原因。
    * targetFullName  **参数解释：** 仓库路径。
    * targetProjectId  **参数解释：** 项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'state' => 'getState',
            'repository' => 'getRepository',
            'originFullName' => 'getOriginFullName',
            'sourceUrl' => 'getSourceUrl',
            'sourceType' => 'getSourceType',
            'createdAt' => 'getCreatedAt',
            'finishedAt' => 'getFinishedAt',
            'repositorySize' => 'getRepositorySize',
            'errorMessage' => 'getErrorMessage',
            'targetFullName' => 'getTargetFullName',
            'targetProjectId' => 'getTargetProjectId'
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
    const STATE_FINISHED = 'finished, 导入成功';
    const STATE_FAIL = 'fail, 导入失败';
    const STATE_IMPORTING = 'importing, 导入中';
    const SOURCE_TYPE_GITEE = 'gitee';
    const SOURCE_TYPE_SELF_MANAGED_GITLAB = 'self_managed_gitlab';
    const SOURCE_TYPE_GITLAB = 'gitlab';
    const SOURCE_TYPE_GITHUB = 'github';
    const SOURCE_TYPE_GIT = 'git';
    const SOURCE_TYPE_SVN = 'svn';
    const SOURCE_TYPE_CODING = 'coding';
    const SOURCE_TYPE_BITBUCKET = 'bitbucket';
    const SOURCE_TYPE_GERRIT = 'gerrit';
    const SOURCE_TYPE_CODEUP = 'codeup';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_FINISHED,
            self::STATE_FAIL,
            self::STATE_IMPORTING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_GITEE,
            self::SOURCE_TYPE_SELF_MANAGED_GITLAB,
            self::SOURCE_TYPE_GITLAB,
            self::SOURCE_TYPE_GITHUB,
            self::SOURCE_TYPE_GIT,
            self::SOURCE_TYPE_SVN,
            self::SOURCE_TYPE_CODING,
            self::SOURCE_TYPE_BITBUCKET,
            self::SOURCE_TYPE_GERRIT,
            self::SOURCE_TYPE_CODEUP,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['originFullName'] = isset($data['originFullName']) ? $data['originFullName'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['repositorySize'] = isset($data['repositorySize']) ? $data['repositorySize'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['targetFullName'] = isset($data['targetFullName']) ? $data['targetFullName'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
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
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['originFullName']) && (mb_strlen($this->container['originFullName']) > 512)) {
                $invalidProperties[] = "invalid value for 'originFullName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['originFullName']) && (mb_strlen($this->container['originFullName']) < 1)) {
                $invalidProperties[] = "invalid value for 'originFullName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['sourceUrl']) && (mb_strlen($this->container['sourceUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceUrl', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['finishedAt']) && (mb_strlen($this->container['finishedAt']) > 255)) {
                $invalidProperties[] = "invalid value for 'finishedAt', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['finishedAt']) && (mb_strlen($this->container['finishedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'finishedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositorySize']) && ($this->container['repositorySize'] > 30720.0)) {
                $invalidProperties[] = "invalid value for 'repositorySize', must be smaller than or equal to 30720.0.";
            }
            if (!is_null($this->container['repositorySize']) && ($this->container['repositorySize'] < 0.0)) {
                $invalidProperties[] = "invalid value for 'repositorySize', must be bigger than or equal to 0.0.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 1000)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetFullName']) && (mb_strlen($this->container['targetFullName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'targetFullName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['targetFullName']) && (mb_strlen($this->container['targetFullName']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetFullName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 主键ID。
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
    * @param int|null $id **参数解释：** 主键ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** - finished, 导入成功 - fail, 导入失败 - importing, 导入中 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets repository
    *  repository
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositorySimpleDto|null
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositorySimpleDto|null $repository repository
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets originFullName
    *  **参数解释：** 源仓库路径。
    *
    * @return string|null
    */
    public function getOriginFullName()
    {
        return $this->container['originFullName'];
    }

    /**
    * Sets originFullName
    *
    * @param string|null $originFullName **参数解释：** 源仓库路径。
    *
    * @return $this
    */
    public function setOriginFullName($originFullName)
    {
        $this->container['originFullName'] = $originFullName;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  **参数解释：** 源仓库地址。
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl **参数解释：** 源仓库地址。
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets sourceType
    *  **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType **参数解释：** 导入来源。 **取值范围：** - gitee - self_managed_gitlab - gitlab - github - git - svn - coding - bitbucket - gerrit - codeup
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 导入时间。
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
    * @param string|null $createdAt **参数解释：** 导入时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets finishedAt
    *  **参数解释：** 导入完成时间。
    *
    * @return string|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param string|null $finishedAt **参数解释：** 导入完成时间。
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets repositorySize
    *  **参数解释：** 源仓库容量。
    *
    * @return double|null
    */
    public function getRepositorySize()
    {
        return $this->container['repositorySize'];
    }

    /**
    * Sets repositorySize
    *
    * @param double|null $repositorySize **参数解释：** 源仓库容量。
    *
    * @return $this
    */
    public function setRepositorySize($repositorySize)
    {
        $this->container['repositorySize'] = $repositorySize;
        return $this;
    }

    /**
    * Gets errorMessage
    *  **参数解释：** 失败原因。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage **参数解释：** 失败原因。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets targetFullName
    *  **参数解释：** 仓库路径。
    *
    * @return string|null
    */
    public function getTargetFullName()
    {
        return $this->container['targetFullName'];
    }

    /**
    * Sets targetFullName
    *
    * @param string|null $targetFullName **参数解释：** 仓库路径。
    *
    * @return $this
    */
    public function setTargetFullName($targetFullName)
    {
        $this->container['targetFullName'] = $targetFullName;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  **参数解释：** 项目ID。
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId **参数解释：** 项目ID。
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
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

