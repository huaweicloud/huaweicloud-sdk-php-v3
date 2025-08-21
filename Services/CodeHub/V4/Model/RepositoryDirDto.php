<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryDirDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryDirDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'branchName' => 'string',
            'commitMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'branchName' => null,
        'commitMessage' => null
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
    * filePath  **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'branchName' => 'branch_name',
            'commitMessage' => 'commit_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'branchName' => 'setBranchName',
            'commitMessage' => 'setCommitMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 最小1个字节，最大200字节 **约束限制：** 该仓库下的已有分支。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'branchName' => 'getBranchName',
            'commitMessage' => 'getCommitMessage'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
            if ((mb_strlen($this->container['filePath']) > 255)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['branchName'] === null) {
            $invalidProperties[] = "'branchName' can't be null";
        }
            if ((mb_strlen($this->container['branchName']) > 200)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be smaller than or equal to 200.";
            }
            if ((mb_strlen($this->container['branchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['commitMessage'] === null) {
            $invalidProperties[] = "'commitMessage' can't be null";
        }
            if ((mb_strlen($this->container['commitMessage']) > 2000)) {
                $invalidProperties[] = "invalid value for 'commitMessage', the character length must be smaller than or equal to 2000.";
            }
            if ((mb_strlen($this->container['commitMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitMessage', the character length must be bigger than or equal to 1.";
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
    * Gets filePath
    *  **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $filePath **参数解释：** 目录路径。 **约束限制：** 目录路径层级最大不能超过29。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
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
    * Gets commitMessage
    *  **参数解释：** 提交信息。 **取值范围：** 不涉及。
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
    * @param string $commitMessage **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
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

