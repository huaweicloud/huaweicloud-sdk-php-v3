<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBranchResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBranchResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    * commit  commit
    * merged  所有提交是否合入到默认分支
    * protected  是否为保护分支
    * createdAt  创建时间
    * creator  creator
    * description  分支描述
    * createSource  基于分支
    * createSourceExists  基于分支是否存在
    * latestPipeline  latestPipeline
    * openedMrCount  该分支正在开启的合并请求个数
    * divergingCommitCounts  divergingCommitCounts
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'default' => 'bool',
            'canDelete' => 'bool',
            'canRead' => 'bool',
            'canDownload' => 'bool',
            'canPush' => 'bool',
            'commit' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto',
            'merged' => 'bool',
            'protected' => 'bool',
            'createdAt' => 'string',
            'creator' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'description' => 'string',
            'createSource' => 'string',
            'createSourceExists' => 'bool',
            'latestPipeline' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PipelineBasicDto',
            'openedMrCount' => 'int',
            'divergingCommitCounts' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DivergingCommitCounts'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    * commit  commit
    * merged  所有提交是否合入到默认分支
    * protected  是否为保护分支
    * createdAt  创建时间
    * creator  creator
    * description  分支描述
    * createSource  基于分支
    * createSourceExists  基于分支是否存在
    * latestPipeline  latestPipeline
    * openedMrCount  该分支正在开启的合并请求个数
    * divergingCommitCounts  divergingCommitCounts
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'default' => null,
        'canDelete' => null,
        'canRead' => null,
        'canDownload' => null,
        'canPush' => null,
        'commit' => null,
        'merged' => null,
        'protected' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'creator' => null,
        'description' => null,
        'createSource' => null,
        'createSourceExists' => null,
        'latestPipeline' => null,
        'openedMrCount' => null,
        'divergingCommitCounts' => null
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
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    * commit  commit
    * merged  所有提交是否合入到默认分支
    * protected  是否为保护分支
    * createdAt  创建时间
    * creator  creator
    * description  分支描述
    * createSource  基于分支
    * createSourceExists  基于分支是否存在
    * latestPipeline  latestPipeline
    * openedMrCount  该分支正在开启的合并请求个数
    * divergingCommitCounts  divergingCommitCounts
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'default' => 'default',
            'canDelete' => 'can_delete',
            'canRead' => 'can_read',
            'canDownload' => 'can_download',
            'canPush' => 'can_push',
            'commit' => 'commit',
            'merged' => 'merged',
            'protected' => 'protected',
            'createdAt' => 'created_at',
            'creator' => 'creator',
            'description' => 'description',
            'createSource' => 'create_source',
            'createSourceExists' => 'create_source_exists',
            'latestPipeline' => 'latest_pipeline',
            'openedMrCount' => 'opened_mr_count',
            'divergingCommitCounts' => 'diverging_commit_counts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    * commit  commit
    * merged  所有提交是否合入到默认分支
    * protected  是否为保护分支
    * createdAt  创建时间
    * creator  creator
    * description  分支描述
    * createSource  基于分支
    * createSourceExists  基于分支是否存在
    * latestPipeline  latestPipeline
    * openedMrCount  该分支正在开启的合并请求个数
    * divergingCommitCounts  divergingCommitCounts
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'default' => 'setDefault',
            'canDelete' => 'setCanDelete',
            'canRead' => 'setCanRead',
            'canDownload' => 'setCanDownload',
            'canPush' => 'setCanPush',
            'commit' => 'setCommit',
            'merged' => 'setMerged',
            'protected' => 'setProtected',
            'createdAt' => 'setCreatedAt',
            'creator' => 'setCreator',
            'description' => 'setDescription',
            'createSource' => 'setCreateSource',
            'createSourceExists' => 'setCreateSourceExists',
            'latestPipeline' => 'setLatestPipeline',
            'openedMrCount' => 'setOpenedMrCount',
            'divergingCommitCounts' => 'setDivergingCommitCounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  分支名称
    * default  是否为默认分支
    * canDelete  用户是否为默认分支
    * canRead  是否为默认分支
    * canDownload  是否为默认分支
    * canPush  是否为默认分支
    * commit  commit
    * merged  所有提交是否合入到默认分支
    * protected  是否为保护分支
    * createdAt  创建时间
    * creator  creator
    * description  分支描述
    * createSource  基于分支
    * createSourceExists  基于分支是否存在
    * latestPipeline  latestPipeline
    * openedMrCount  该分支正在开启的合并请求个数
    * divergingCommitCounts  divergingCommitCounts
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'default' => 'getDefault',
            'canDelete' => 'getCanDelete',
            'canRead' => 'getCanRead',
            'canDownload' => 'getCanDownload',
            'canPush' => 'getCanPush',
            'commit' => 'getCommit',
            'merged' => 'getMerged',
            'protected' => 'getProtected',
            'createdAt' => 'getCreatedAt',
            'creator' => 'getCreator',
            'description' => 'getDescription',
            'createSource' => 'getCreateSource',
            'createSourceExists' => 'getCreateSourceExists',
            'latestPipeline' => 'getLatestPipeline',
            'openedMrCount' => 'getOpenedMrCount',
            'divergingCommitCounts' => 'getDivergingCommitCounts'
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
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['canRead'] = isset($data['canRead']) ? $data['canRead'] : null;
        $this->container['canDownload'] = isset($data['canDownload']) ? $data['canDownload'] : null;
        $this->container['canPush'] = isset($data['canPush']) ? $data['canPush'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['merged'] = isset($data['merged']) ? $data['merged'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createSource'] = isset($data['createSource']) ? $data['createSource'] : null;
        $this->container['createSourceExists'] = isset($data['createSourceExists']) ? $data['createSourceExists'] : null;
        $this->container['latestPipeline'] = isset($data['latestPipeline']) ? $data['latestPipeline'] : null;
        $this->container['openedMrCount'] = isset($data['openedMrCount']) ? $data['openedMrCount'] : null;
        $this->container['divergingCommitCounts'] = isset($data['divergingCommitCounts']) ? $data['divergingCommitCounts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createSource']) && (mb_strlen($this->container['createSource']) > 2000)) {
                $invalidProperties[] = "invalid value for 'createSource', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['createSource']) && (mb_strlen($this->container['createSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'createSource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openedMrCount']) && ($this->container['openedMrCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'openedMrCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['openedMrCount']) && ($this->container['openedMrCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'openedMrCount', must be bigger than or equal to 0.";
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
    * Gets name
    *  分支名称
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
    * @param string|null $name 分支名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets default
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否为默认分支
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets canDelete
    *  用户是否为默认分支
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete 用户是否为默认分支
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets canRead
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getCanRead()
    {
        return $this->container['canRead'];
    }

    /**
    * Sets canRead
    *
    * @param bool|null $canRead 是否为默认分支
    *
    * @return $this
    */
    public function setCanRead($canRead)
    {
        $this->container['canRead'] = $canRead;
        return $this;
    }

    /**
    * Gets canDownload
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getCanDownload()
    {
        return $this->container['canDownload'];
    }

    /**
    * Sets canDownload
    *
    * @param bool|null $canDownload 是否为默认分支
    *
    * @return $this
    */
    public function setCanDownload($canDownload)
    {
        $this->container['canDownload'] = $canDownload;
        return $this;
    }

    /**
    * Gets canPush
    *  是否为默认分支
    *
    * @return bool|null
    */
    public function getCanPush()
    {
        return $this->container['canPush'];
    }

    /**
    * Sets canPush
    *
    * @param bool|null $canPush 是否为默认分支
    *
    * @return $this
    */
    public function setCanPush($canPush)
    {
        $this->container['canPush'] = $canPush;
        return $this;
    }

    /**
    * Gets commit
    *  commit
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto|null
    */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
    * Sets commit
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto|null $commit commit
    *
    * @return $this
    */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;
        return $this;
    }

    /**
    * Gets merged
    *  所有提交是否合入到默认分支
    *
    * @return bool|null
    */
    public function getMerged()
    {
        return $this->container['merged'];
    }

    /**
    * Sets merged
    *
    * @param bool|null $merged 所有提交是否合入到默认分支
    *
    * @return $this
    */
    public function setMerged($merged)
    {
        $this->container['merged'] = $merged;
        return $this;
    }

    /**
    * Gets protected
    *  是否为保护分支
    *
    * @return bool|null
    */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
    * Sets protected
    *
    * @param bool|null $protected 是否为保护分支
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets description
    *  分支描述
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
    * @param string|null $description 分支描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createSource
    *  基于分支
    *
    * @return string|null
    */
    public function getCreateSource()
    {
        return $this->container['createSource'];
    }

    /**
    * Sets createSource
    *
    * @param string|null $createSource 基于分支
    *
    * @return $this
    */
    public function setCreateSource($createSource)
    {
        $this->container['createSource'] = $createSource;
        return $this;
    }

    /**
    * Gets createSourceExists
    *  基于分支是否存在
    *
    * @return bool|null
    */
    public function getCreateSourceExists()
    {
        return $this->container['createSourceExists'];
    }

    /**
    * Sets createSourceExists
    *
    * @param bool|null $createSourceExists 基于分支是否存在
    *
    * @return $this
    */
    public function setCreateSourceExists($createSourceExists)
    {
        $this->container['createSourceExists'] = $createSourceExists;
        return $this;
    }

    /**
    * Gets latestPipeline
    *  latestPipeline
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PipelineBasicDto|null
    */
    public function getLatestPipeline()
    {
        return $this->container['latestPipeline'];
    }

    /**
    * Sets latestPipeline
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PipelineBasicDto|null $latestPipeline latestPipeline
    *
    * @return $this
    */
    public function setLatestPipeline($latestPipeline)
    {
        $this->container['latestPipeline'] = $latestPipeline;
        return $this;
    }

    /**
    * Gets openedMrCount
    *  该分支正在开启的合并请求个数
    *
    * @return int|null
    */
    public function getOpenedMrCount()
    {
        return $this->container['openedMrCount'];
    }

    /**
    * Sets openedMrCount
    *
    * @param int|null $openedMrCount 该分支正在开启的合并请求个数
    *
    * @return $this
    */
    public function setOpenedMrCount($openedMrCount)
    {
        $this->container['openedMrCount'] = $openedMrCount;
        return $this;
    }

    /**
    * Gets divergingCommitCounts
    *  divergingCommitCounts
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DivergingCommitCounts|null
    */
    public function getDivergingCommitCounts()
    {
        return $this->container['divergingCommitCounts'];
    }

    /**
    * Sets divergingCommitCounts
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DivergingCommitCounts|null $divergingCommitCounts divergingCommitCounts
    *
    * @return $this
    */
    public function setDivergingCommitCounts($divergingCommitCounts)
    {
        $this->container['divergingCommitCounts'] = $divergingCommitCounts;
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

