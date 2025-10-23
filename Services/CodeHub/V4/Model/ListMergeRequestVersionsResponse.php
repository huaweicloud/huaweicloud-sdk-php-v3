<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMergeRequestVersionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMergeRequestVersionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** diff主键ID。
    * headCommitSha  **参数解释：** head commit节点。
    * baseCommitSha  **参数解释：** base commit节点。
    * startCommitSha  **参数解释：** tart commit节点。
    * createdAt  **参数解释：** 创建时间。
    * mergeRequestId  **参数解释：** MR主键ID。
    * state  **参数解释：** 状态。
    * realSize  **参数解释：** diff大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'headCommitSha' => 'string',
            'baseCommitSha' => 'string',
            'startCommitSha' => 'string',
            'createdAt' => 'string',
            'mergeRequestId' => 'int',
            'state' => 'string',
            'realSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** diff主键ID。
    * headCommitSha  **参数解释：** head commit节点。
    * baseCommitSha  **参数解释：** base commit节点。
    * startCommitSha  **参数解释：** tart commit节点。
    * createdAt  **参数解释：** 创建时间。
    * mergeRequestId  **参数解释：** MR主键ID。
    * state  **参数解释：** 状态。
    * realSize  **参数解释：** diff大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'headCommitSha' => null,
        'baseCommitSha' => null,
        'startCommitSha' => null,
        'createdAt' => null,
        'mergeRequestId' => null,
        'state' => null,
        'realSize' => null
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
    * id  **参数解释：** diff主键ID。
    * headCommitSha  **参数解释：** head commit节点。
    * baseCommitSha  **参数解释：** base commit节点。
    * startCommitSha  **参数解释：** tart commit节点。
    * createdAt  **参数解释：** 创建时间。
    * mergeRequestId  **参数解释：** MR主键ID。
    * state  **参数解释：** 状态。
    * realSize  **参数解释：** diff大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'headCommitSha' => 'head_commit_sha',
            'baseCommitSha' => 'base_commit_sha',
            'startCommitSha' => 'start_commit_sha',
            'createdAt' => 'created_at',
            'mergeRequestId' => 'merge_request_id',
            'state' => 'state',
            'realSize' => 'real_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** diff主键ID。
    * headCommitSha  **参数解释：** head commit节点。
    * baseCommitSha  **参数解释：** base commit节点。
    * startCommitSha  **参数解释：** tart commit节点。
    * createdAt  **参数解释：** 创建时间。
    * mergeRequestId  **参数解释：** MR主键ID。
    * state  **参数解释：** 状态。
    * realSize  **参数解释：** diff大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'headCommitSha' => 'setHeadCommitSha',
            'baseCommitSha' => 'setBaseCommitSha',
            'startCommitSha' => 'setStartCommitSha',
            'createdAt' => 'setCreatedAt',
            'mergeRequestId' => 'setMergeRequestId',
            'state' => 'setState',
            'realSize' => 'setRealSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** diff主键ID。
    * headCommitSha  **参数解释：** head commit节点。
    * baseCommitSha  **参数解释：** base commit节点。
    * startCommitSha  **参数解释：** tart commit节点。
    * createdAt  **参数解释：** 创建时间。
    * mergeRequestId  **参数解释：** MR主键ID。
    * state  **参数解释：** 状态。
    * realSize  **参数解释：** diff大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'headCommitSha' => 'getHeadCommitSha',
            'baseCommitSha' => 'getBaseCommitSha',
            'startCommitSha' => 'getStartCommitSha',
            'createdAt' => 'getCreatedAt',
            'mergeRequestId' => 'getMergeRequestId',
            'state' => 'getState',
            'realSize' => 'getRealSize'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['headCommitSha'] = isset($data['headCommitSha']) ? $data['headCommitSha'] : null;
        $this->container['baseCommitSha'] = isset($data['baseCommitSha']) ? $data['baseCommitSha'] : null;
        $this->container['startCommitSha'] = isset($data['startCommitSha']) ? $data['startCommitSha'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['realSize'] = isset($data['realSize']) ? $data['realSize'] : null;
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
    * Gets id
    *  **参数解释：** diff主键ID。
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
    * @param int|null $id **参数解释：** diff主键ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets headCommitSha
    *  **参数解释：** head commit节点。
    *
    * @return string|null
    */
    public function getHeadCommitSha()
    {
        return $this->container['headCommitSha'];
    }

    /**
    * Sets headCommitSha
    *
    * @param string|null $headCommitSha **参数解释：** head commit节点。
    *
    * @return $this
    */
    public function setHeadCommitSha($headCommitSha)
    {
        $this->container['headCommitSha'] = $headCommitSha;
        return $this;
    }

    /**
    * Gets baseCommitSha
    *  **参数解释：** base commit节点。
    *
    * @return string|null
    */
    public function getBaseCommitSha()
    {
        return $this->container['baseCommitSha'];
    }

    /**
    * Sets baseCommitSha
    *
    * @param string|null $baseCommitSha **参数解释：** base commit节点。
    *
    * @return $this
    */
    public function setBaseCommitSha($baseCommitSha)
    {
        $this->container['baseCommitSha'] = $baseCommitSha;
        return $this;
    }

    /**
    * Gets startCommitSha
    *  **参数解释：** tart commit节点。
    *
    * @return string|null
    */
    public function getStartCommitSha()
    {
        return $this->container['startCommitSha'];
    }

    /**
    * Sets startCommitSha
    *
    * @param string|null $startCommitSha **参数解释：** tart commit节点。
    *
    * @return $this
    */
    public function setStartCommitSha($startCommitSha)
    {
        $this->container['startCommitSha'] = $startCommitSha;
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
    * Gets mergeRequestId
    *  **参数解释：** MR主键ID。
    *
    * @return int|null
    */
    public function getMergeRequestId()
    {
        return $this->container['mergeRequestId'];
    }

    /**
    * Sets mergeRequestId
    *
    * @param int|null $mergeRequestId **参数解释：** MR主键ID。
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 状态。
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
    * @param string|null $state **参数解释：** 状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets realSize
    *  **参数解释：** diff大小。
    *
    * @return string|null
    */
    public function getRealSize()
    {
        return $this->container['realSize'];
    }

    /**
    * Sets realSize
    *
    * @param string|null $realSize **参数解释：** diff大小。
    *
    * @return $this
    */
    public function setRealSize($realSize)
    {
        $this->container['realSize'] = $realSize;
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

