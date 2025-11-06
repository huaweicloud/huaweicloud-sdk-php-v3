<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubmoduleReqDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubmoduleReqDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * filePath  子模块在该仓库下的文件路径
    * subrepoId  子模块所在仓库的仓库ID
    * commitMessage  提交信息
    * subrepoBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branchName' => 'string',
            'filePath' => 'string',
            'subrepoId' => 'string',
            'commitMessage' => 'string',
            'subrepoBranch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * filePath  子模块在该仓库下的文件路径
    * subrepoId  子模块所在仓库的仓库ID
    * commitMessage  提交信息
    * subrepoBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branchName' => null,
        'filePath' => null,
        'subrepoId' => null,
        'commitMessage' => null,
        'subrepoBranch' => null
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
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * filePath  子模块在该仓库下的文件路径
    * subrepoId  子模块所在仓库的仓库ID
    * commitMessage  提交信息
    * subrepoBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branchName' => 'branch_name',
            'filePath' => 'file_path',
            'subrepoId' => 'subrepo_id',
            'commitMessage' => 'commit_message',
            'subrepoBranch' => 'subrepo_branch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * filePath  子模块在该仓库下的文件路径
    * subrepoId  子模块所在仓库的仓库ID
    * commitMessage  提交信息
    * subrepoBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @var string[]
    */
    protected static $setters = [
            'branchName' => 'setBranchName',
            'filePath' => 'setFilePath',
            'subrepoId' => 'setSubrepoId',
            'commitMessage' => 'setCommitMessage',
            'subrepoBranch' => 'setSubrepoBranch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * filePath  子模块在该仓库下的文件路径
    * subrepoId  子模块所在仓库的仓库ID
    * commitMessage  提交信息
    * subrepoBranch  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @var string[]
    */
    protected static $getters = [
            'branchName' => 'getBranchName',
            'filePath' => 'getFilePath',
            'subrepoId' => 'getSubrepoId',
            'commitMessage' => 'getCommitMessage',
            'subrepoBranch' => 'getSubrepoBranch'
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
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['subrepoId'] = isset($data['subrepoId']) ? $data['subrepoId'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['subrepoBranch'] = isset($data['subrepoBranch']) ? $data['subrepoBranch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['branchName'] === null) {
            $invalidProperties[] = "'branchName' can't be null";
        }
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
        if ($this->container['subrepoId'] === null) {
            $invalidProperties[] = "'subrepoId' can't be null";
        }
        if ($this->container['commitMessage'] === null) {
            $invalidProperties[] = "'commitMessage' can't be null";
        }
        if ($this->container['subrepoBranch'] === null) {
            $invalidProperties[] = "'subrepoBranch' can't be null";
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
    * Gets branchName
    *  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    *
    * @return string
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string $branchName **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets filePath
    *  子模块在该仓库下的文件路径
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath 子模块在该仓库下的文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets subrepoId
    *  子模块所在仓库的仓库ID
    *
    * @return string
    */
    public function getSubrepoId()
    {
        return $this->container['subrepoId'];
    }

    /**
    * Sets subrepoId
    *
    * @param string $subrepoId 子模块所在仓库的仓库ID
    *
    * @return $this
    */
    public function setSubrepoId($subrepoId)
    {
        $this->container['subrepoId'] = $subrepoId;
        return $this;
    }

    /**
    * Gets commitMessage
    *  提交信息
    *
    * @return string
    */
    public function getCommitMessage()
    {
        return $this->container['commitMessage'];
    }

    /**
    * Sets commitMessage
    *
    * @param string $commitMessage 提交信息
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets subrepoBranch
    *  **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @return string
    */
    public function getSubrepoBranch()
    {
        return $this->container['subrepoBranch'];
    }

    /**
    * Sets subrepoBranch
    *
    * @param string $subrepoBranch **参数解释：** 子模块分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 目标仓库下的已有分支。
    *
    * @return $this
    */
    public function setSubrepoBranch($subrepoBranch)
    {
        $this->container['subrepoBranch'] = $subrepoBranch;
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

