<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseCommentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseCommentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comment  评论
    * notifier  通知人列表
    * versionUri  分支uri/测试计划uri
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comment' => 'string',
            'notifier' => 'string[]',
            'versionUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comment  评论
    * notifier  通知人列表
    * versionUri  分支uri/测试计划uri
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comment' => null,
        'notifier' => null,
        'versionUri' => null
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
    * comment  评论
    * notifier  通知人列表
    * versionUri  分支uri/测试计划uri
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comment' => 'comment',
            'notifier' => 'notifier',
            'versionUri' => 'version_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comment  评论
    * notifier  通知人列表
    * versionUri  分支uri/测试计划uri
    *
    * @var string[]
    */
    protected static $setters = [
            'comment' => 'setComment',
            'notifier' => 'setNotifier',
            'versionUri' => 'setVersionUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comment  评论
    * notifier  通知人列表
    * versionUri  分支uri/测试计划uri
    *
    * @var string[]
    */
    protected static $getters = [
            'comment' => 'getComment',
            'notifier' => 'getNotifier',
            'versionUri' => 'getVersionUri'
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['notifier'] = isset($data['notifier']) ? $data['notifier'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
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
    * Gets comment
    *  评论
    *
    * @return string
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string $comment 评论
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets notifier
    *  通知人列表
    *
    * @return string[]|null
    */
    public function getNotifier()
    {
        return $this->container['notifier'];
    }

    /**
    * Sets notifier
    *
    * @param string[]|null $notifier 通知人列表
    *
    * @return $this
    */
    public function setNotifier($notifier)
    {
        $this->container['notifier'] = $notifier;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支uri/测试计划uri
    *
    * @return string|null
    */
    public function getVersionUri()
    {
        return $this->container['versionUri'];
    }

    /**
    * Sets versionUri
    *
    * @param string|null $versionUri 分支uri/测试计划uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
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

