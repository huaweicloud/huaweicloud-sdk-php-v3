<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeMergeRequestBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeMergeRequestBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * squashCommitMessage  压缩合并信息
    * squash  压缩合并
    * forceMerge  强制合并
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'squashCommitMessage' => 'string',
            'squash' => 'bool',
            'forceMerge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * squashCommitMessage  压缩合并信息
    * squash  压缩合并
    * forceMerge  强制合并
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'squashCommitMessage' => null,
        'squash' => null,
        'forceMerge' => null
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
    * squashCommitMessage  压缩合并信息
    * squash  压缩合并
    * forceMerge  强制合并
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'squashCommitMessage' => 'squash_commit_message',
            'squash' => 'squash',
            'forceMerge' => 'force_merge'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * squashCommitMessage  压缩合并信息
    * squash  压缩合并
    * forceMerge  强制合并
    *
    * @var string[]
    */
    protected static $setters = [
            'squashCommitMessage' => 'setSquashCommitMessage',
            'squash' => 'setSquash',
            'forceMerge' => 'setForceMerge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * squashCommitMessage  压缩合并信息
    * squash  压缩合并
    * forceMerge  强制合并
    *
    * @var string[]
    */
    protected static $getters = [
            'squashCommitMessage' => 'getSquashCommitMessage',
            'squash' => 'getSquash',
            'forceMerge' => 'getForceMerge'
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
        $this->container['squashCommitMessage'] = isset($data['squashCommitMessage']) ? $data['squashCommitMessage'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['forceMerge'] = isset($data['forceMerge']) ? $data['forceMerge'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['squashCommitMessage']) && (mb_strlen($this->container['squashCommitMessage']) > 10000)) {
                $invalidProperties[] = "invalid value for 'squashCommitMessage', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['squashCommitMessage']) && (mb_strlen($this->container['squashCommitMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'squashCommitMessage', the character length must be bigger than or equal to 0.";
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
    * Gets squashCommitMessage
    *  压缩合并信息
    *
    * @return string|null
    */
    public function getSquashCommitMessage()
    {
        return $this->container['squashCommitMessage'];
    }

    /**
    * Sets squashCommitMessage
    *
    * @param string|null $squashCommitMessage 压缩合并信息
    *
    * @return $this
    */
    public function setSquashCommitMessage($squashCommitMessage)
    {
        $this->container['squashCommitMessage'] = $squashCommitMessage;
        return $this;
    }

    /**
    * Gets squash
    *  压缩合并
    *
    * @return bool|null
    */
    public function getSquash()
    {
        return $this->container['squash'];
    }

    /**
    * Sets squash
    *
    * @param bool|null $squash 压缩合并
    *
    * @return $this
    */
    public function setSquash($squash)
    {
        $this->container['squash'] = $squash;
        return $this;
    }

    /**
    * Gets forceMerge
    *  强制合并
    *
    * @return bool|null
    */
    public function getForceMerge()
    {
        return $this->container['forceMerge'];
    }

    /**
    * Sets forceMerge
    *
    * @param bool|null $forceMerge 强制合并
    *
    * @return $this
    */
    public function setForceMerge($forceMerge)
    {
        $this->container['forceMerge'] = $forceMerge;
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

