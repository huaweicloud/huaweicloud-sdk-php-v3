<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResolveConflictDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResolveConflictDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commitMessage  **参数解释：** 提交信息
    * files  **参数解释：** 冲突的文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commitMessage' => 'string',
            'files' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ResolveConflictFileDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commitMessage  **参数解释：** 提交信息
    * files  **参数解释：** 冲突的文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commitMessage' => null,
        'files' => null
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
    * commitMessage  **参数解释：** 提交信息
    * files  **参数解释：** 冲突的文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commitMessage' => 'commit_message',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commitMessage  **参数解释：** 提交信息
    * files  **参数解释：** 冲突的文件
    *
    * @var string[]
    */
    protected static $setters = [
            'commitMessage' => 'setCommitMessage',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commitMessage  **参数解释：** 提交信息
    * files  **参数解释：** 冲突的文件
    *
    * @var string[]
    */
    protected static $getters = [
            'commitMessage' => 'getCommitMessage',
            'files' => 'getFiles'
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
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['commitMessage'] === null) {
            $invalidProperties[] = "'commitMessage' can't be null";
        }
            if ((mb_strlen($this->container['commitMessage']) > 500)) {
                $invalidProperties[] = "invalid value for 'commitMessage', the character length must be smaller than or equal to 500.";
            }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
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
    * Gets commitMessage
    *  **参数解释：** 提交信息
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
    * @param string $commitMessage **参数解释：** 提交信息
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets files
    *  **参数解释：** 冲突的文件
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ResolveConflictFileDto[]
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ResolveConflictFileDto[] $files **参数解释：** 冲突的文件
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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

