<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestVersionParamsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestVersionParamsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diffId  **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    * startSha  **参数解释：** 起始sha值。
    * commitId  **参数解释：** 提交记录id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diffId' => 'int',
            'startSha' => 'string',
            'commitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diffId  **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    * startSha  **参数解释：** 起始sha值。
    * commitId  **参数解释：** 提交记录id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diffId' => 'int32',
        'startSha' => null,
        'commitId' => null
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
    * diffId  **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    * startSha  **参数解释：** 起始sha值。
    * commitId  **参数解释：** 提交记录id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diffId' => 'diff_id',
            'startSha' => 'start_sha',
            'commitId' => 'commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diffId  **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    * startSha  **参数解释：** 起始sha值。
    * commitId  **参数解释：** 提交记录id。
    *
    * @var string[]
    */
    protected static $setters = [
            'diffId' => 'setDiffId',
            'startSha' => 'setStartSha',
            'commitId' => 'setCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diffId  **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    * startSha  **参数解释：** 起始sha值。
    * commitId  **参数解释：** 提交记录id。
    *
    * @var string[]
    */
    protected static $getters = [
            'diffId' => 'getDiffId',
            'startSha' => 'getStartSha',
            'commitId' => 'getCommitId'
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
        $this->container['diffId'] = isset($data['diffId']) ? $data['diffId'] : null;
        $this->container['startSha'] = isset($data['startSha']) ? $data['startSha'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
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
    * Gets diffId
    *  **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    *
    * @return int|null
    */
    public function getDiffId()
    {
        return $this->container['diffId'];
    }

    /**
    * Sets diffId
    *
    * @param int|null $diffId **参数解释：** 版本id(由合并请求id和sha值共同组成)。
    *
    * @return $this
    */
    public function setDiffId($diffId)
    {
        $this->container['diffId'] = $diffId;
        return $this;
    }

    /**
    * Gets startSha
    *  **参数解释：** 起始sha值。
    *
    * @return string|null
    */
    public function getStartSha()
    {
        return $this->container['startSha'];
    }

    /**
    * Sets startSha
    *
    * @param string|null $startSha **参数解释：** 起始sha值。
    *
    * @return $this
    */
    public function setStartSha($startSha)
    {
        $this->container['startSha'] = $startSha;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释：** 提交记录id。
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId **参数解释：** 提交记录id。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
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

