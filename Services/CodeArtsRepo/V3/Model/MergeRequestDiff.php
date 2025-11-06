<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestDiff implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestDiff';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseCommitSha  base提交
    * commitsCount  提交数
    * createdAt  创建时间
    * headCommitSha  head提交
    * mergeRequestId  合并请求id
    * startCommitSha  start提交
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseCommitSha' => 'string',
            'commitsCount' => 'double',
            'createdAt' => 'string',
            'headCommitSha' => 'string',
            'mergeRequestId' => 'double',
            'startCommitSha' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseCommitSha  base提交
    * commitsCount  提交数
    * createdAt  创建时间
    * headCommitSha  head提交
    * mergeRequestId  合并请求id
    * startCommitSha  start提交
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseCommitSha' => null,
        'commitsCount' => 'double',
        'createdAt' => null,
        'headCommitSha' => null,
        'mergeRequestId' => 'double',
        'startCommitSha' => null,
        'updatedAt' => null
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
    * baseCommitSha  base提交
    * commitsCount  提交数
    * createdAt  创建时间
    * headCommitSha  head提交
    * mergeRequestId  合并请求id
    * startCommitSha  start提交
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseCommitSha' => 'base_commit_sha',
            'commitsCount' => 'commits_count',
            'createdAt' => 'created_at',
            'headCommitSha' => 'head_commit_sha',
            'mergeRequestId' => 'merge_request_id',
            'startCommitSha' => 'start_commit_sha',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseCommitSha  base提交
    * commitsCount  提交数
    * createdAt  创建时间
    * headCommitSha  head提交
    * mergeRequestId  合并请求id
    * startCommitSha  start提交
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'baseCommitSha' => 'setBaseCommitSha',
            'commitsCount' => 'setCommitsCount',
            'createdAt' => 'setCreatedAt',
            'headCommitSha' => 'setHeadCommitSha',
            'mergeRequestId' => 'setMergeRequestId',
            'startCommitSha' => 'setStartCommitSha',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseCommitSha  base提交
    * commitsCount  提交数
    * createdAt  创建时间
    * headCommitSha  head提交
    * mergeRequestId  合并请求id
    * startCommitSha  start提交
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'baseCommitSha' => 'getBaseCommitSha',
            'commitsCount' => 'getCommitsCount',
            'createdAt' => 'getCreatedAt',
            'headCommitSha' => 'getHeadCommitSha',
            'mergeRequestId' => 'getMergeRequestId',
            'startCommitSha' => 'getStartCommitSha',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['baseCommitSha'] = isset($data['baseCommitSha']) ? $data['baseCommitSha'] : null;
        $this->container['commitsCount'] = isset($data['commitsCount']) ? $data['commitsCount'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['headCommitSha'] = isset($data['headCommitSha']) ? $data['headCommitSha'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['startCommitSha'] = isset($data['startCommitSha']) ? $data['startCommitSha'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets baseCommitSha
    *  base提交
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
    * @param string|null $baseCommitSha base提交
    *
    * @return $this
    */
    public function setBaseCommitSha($baseCommitSha)
    {
        $this->container['baseCommitSha'] = $baseCommitSha;
        return $this;
    }

    /**
    * Gets commitsCount
    *  提交数
    *
    * @return double|null
    */
    public function getCommitsCount()
    {
        return $this->container['commitsCount'];
    }

    /**
    * Sets commitsCount
    *
    * @param double|null $commitsCount 提交数
    *
    * @return $this
    */
    public function setCommitsCount($commitsCount)
    {
        $this->container['commitsCount'] = $commitsCount;
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
    * Gets headCommitSha
    *  head提交
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
    * @param string|null $headCommitSha head提交
    *
    * @return $this
    */
    public function setHeadCommitSha($headCommitSha)
    {
        $this->container['headCommitSha'] = $headCommitSha;
        return $this;
    }

    /**
    * Gets mergeRequestId
    *  合并请求id
    *
    * @return double|null
    */
    public function getMergeRequestId()
    {
        return $this->container['mergeRequestId'];
    }

    /**
    * Sets mergeRequestId
    *
    * @param double|null $mergeRequestId 合并请求id
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets startCommitSha
    *  start提交
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
    * @param string|null $startCommitSha start提交
    *
    * @return $this
    */
    public function setStartCommitSha($startCommitSha)
    {
        $this->container['startCommitSha'] = $startCommitSha;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
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
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

