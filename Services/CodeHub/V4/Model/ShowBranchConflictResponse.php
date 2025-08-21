<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBranchConflictResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBranchConflictResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isConflict  是否有冲突
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceRepositoryId' => 'int',
            'targetRepositoryId' => 'int',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'isConflict' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isConflict  是否有冲突
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceRepositoryId' => null,
        'targetRepositoryId' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'isConflict' => null
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
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isConflict  是否有冲突
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceRepositoryId' => 'source_repository_id',
            'targetRepositoryId' => 'target_repository_id',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'isConflict' => 'is_conflict'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isConflict  是否有冲突
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceRepositoryId' => 'setSourceRepositoryId',
            'targetRepositoryId' => 'setTargetRepositoryId',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'isConflict' => 'setIsConflict'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isConflict  是否有冲突
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceRepositoryId' => 'getSourceRepositoryId',
            'targetRepositoryId' => 'getTargetRepositoryId',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'isConflict' => 'getIsConflict'
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
        $this->container['sourceRepositoryId'] = isset($data['sourceRepositoryId']) ? $data['sourceRepositoryId'] : null;
        $this->container['targetRepositoryId'] = isset($data['targetRepositoryId']) ? $data['targetRepositoryId'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['isConflict'] = isset($data['isConflict']) ? $data['isConflict'] : null;
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
    * Gets sourceRepositoryId
    *  源仓库id
    *
    * @return int|null
    */
    public function getSourceRepositoryId()
    {
        return $this->container['sourceRepositoryId'];
    }

    /**
    * Sets sourceRepositoryId
    *
    * @param int|null $sourceRepositoryId 源仓库id
    *
    * @return $this
    */
    public function setSourceRepositoryId($sourceRepositoryId)
    {
        $this->container['sourceRepositoryId'] = $sourceRepositoryId;
        return $this;
    }

    /**
    * Gets targetRepositoryId
    *  目标仓库id
    *
    * @return int|null
    */
    public function getTargetRepositoryId()
    {
        return $this->container['targetRepositoryId'];
    }

    /**
    * Sets targetRepositoryId
    *
    * @param int|null $targetRepositoryId 目标仓库id
    *
    * @return $this
    */
    public function setTargetRepositoryId($targetRepositoryId)
    {
        $this->container['targetRepositoryId'] = $targetRepositoryId;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  源分支
    *
    * @return string|null
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string|null $sourceBranch 源分支
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets targetBranch
    *  目标分支
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch 目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets isConflict
    *  是否有冲突
    *
    * @return bool|null
    */
    public function getIsConflict()
    {
        return $this->container['isConflict'];
    }

    /**
    * Sets isConflict
    *
    * @param bool|null $isConflict 是否有冲突
    *
    * @return $this
    */
    public function setIsConflict($isConflict)
    {
        $this->container['isConflict'] = $isConflict;
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

