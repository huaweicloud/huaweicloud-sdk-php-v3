<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCommitsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCommitsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commits  提交列表
    * dateTitle  按天统计信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commits' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto[]',
            'dateTitle' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DateTitleDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commits  提交列表
    * dateTitle  按天统计信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commits' => null,
        'dateTitle' => null
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
    * commits  提交列表
    * dateTitle  按天统计信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commits' => 'commits',
            'dateTitle' => 'date_title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commits  提交列表
    * dateTitle  按天统计信息
    *
    * @var string[]
    */
    protected static $setters = [
            'commits' => 'setCommits',
            'dateTitle' => 'setDateTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commits  提交列表
    * dateTitle  按天统计信息
    *
    * @var string[]
    */
    protected static $getters = [
            'commits' => 'getCommits',
            'dateTitle' => 'getDateTitle'
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
        $this->container['commits'] = isset($data['commits']) ? $data['commits'] : null;
        $this->container['dateTitle'] = isset($data['dateTitle']) ? $data['dateTitle'] : null;
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
    * Gets commits
    *  提交列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto[]|null
    */
    public function getCommits()
    {
        return $this->container['commits'];
    }

    /**
    * Sets commits
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\CommitDto[]|null $commits 提交列表
    *
    * @return $this
    */
    public function setCommits($commits)
    {
        $this->container['commits'] = $commits;
        return $this;
    }

    /**
    * Gets dateTitle
    *  按天统计信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DateTitleDto[]|null
    */
    public function getDateTitle()
    {
        return $this->container['dateTitle'];
    }

    /**
    * Sets dateTitle
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\DateTitleDto[]|null $dateTitle 按天统计信息
    *
    * @return $this
    */
    public function setDateTitle($dateTitle)
    {
        $this->container['dateTitle'] = $dateTitle;
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

