<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseCommentVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseCommentVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  uri
    * creator  creator
    * comment  comment
    * notifier  notifier
    * testCaseUri  testCaseUri
    * createTime  createTime
    * createTimeTimestamp  创建时间时间戳
    * updateTime  updateTime
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  projectUuid
    * versionUri  versionUri
    * displayName  displayName
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'creator' => 'string',
            'comment' => 'string',
            'notifier' => 'string[]',
            'testCaseUri' => 'string',
            'createTime' => '\DateTime',
            'createTimeTimestamp' => 'int',
            'updateTime' => '\DateTime',
            'updateTimeTimestamp' => 'int',
            'projectUuid' => 'string',
            'versionUri' => 'string',
            'displayName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  uri
    * creator  creator
    * comment  comment
    * notifier  notifier
    * testCaseUri  testCaseUri
    * createTime  createTime
    * createTimeTimestamp  创建时间时间戳
    * updateTime  updateTime
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  projectUuid
    * versionUri  versionUri
    * displayName  displayName
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'creator' => null,
        'comment' => null,
        'notifier' => null,
        'testCaseUri' => null,
        'createTime' => 'date-time',
        'createTimeTimestamp' => 'int64',
        'updateTime' => 'date-time',
        'updateTimeTimestamp' => 'int64',
        'projectUuid' => null,
        'versionUri' => null,
        'displayName' => null
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
    * uri  uri
    * creator  creator
    * comment  comment
    * notifier  notifier
    * testCaseUri  testCaseUri
    * createTime  createTime
    * createTimeTimestamp  创建时间时间戳
    * updateTime  updateTime
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  projectUuid
    * versionUri  versionUri
    * displayName  displayName
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'creator' => 'creator',
            'comment' => 'comment',
            'notifier' => 'notifier',
            'testCaseUri' => 'test_case_uri',
            'createTime' => 'create_time',
            'createTimeTimestamp' => 'create_time_timestamp',
            'updateTime' => 'update_time',
            'updateTimeTimestamp' => 'update_time_timestamp',
            'projectUuid' => 'project_uuid',
            'versionUri' => 'version_uri',
            'displayName' => 'display_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  uri
    * creator  creator
    * comment  comment
    * notifier  notifier
    * testCaseUri  testCaseUri
    * createTime  createTime
    * createTimeTimestamp  创建时间时间戳
    * updateTime  updateTime
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  projectUuid
    * versionUri  versionUri
    * displayName  displayName
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'creator' => 'setCreator',
            'comment' => 'setComment',
            'notifier' => 'setNotifier',
            'testCaseUri' => 'setTestCaseUri',
            'createTime' => 'setCreateTime',
            'createTimeTimestamp' => 'setCreateTimeTimestamp',
            'updateTime' => 'setUpdateTime',
            'updateTimeTimestamp' => 'setUpdateTimeTimestamp',
            'projectUuid' => 'setProjectUuid',
            'versionUri' => 'setVersionUri',
            'displayName' => 'setDisplayName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  uri
    * creator  creator
    * comment  comment
    * notifier  notifier
    * testCaseUri  testCaseUri
    * createTime  createTime
    * createTimeTimestamp  创建时间时间戳
    * updateTime  updateTime
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  projectUuid
    * versionUri  versionUri
    * displayName  displayName
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'creator' => 'getCreator',
            'comment' => 'getComment',
            'notifier' => 'getNotifier',
            'testCaseUri' => 'getTestCaseUri',
            'createTime' => 'getCreateTime',
            'createTimeTimestamp' => 'getCreateTimeTimestamp',
            'updateTime' => 'getUpdateTime',
            'updateTimeTimestamp' => 'getUpdateTimeTimestamp',
            'projectUuid' => 'getProjectUuid',
            'versionUri' => 'getVersionUri',
            'displayName' => 'getDisplayName'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['notifier'] = isset($data['notifier']) ? $data['notifier'] : null;
        $this->container['testCaseUri'] = isset($data['testCaseUri']) ? $data['testCaseUri'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeTimestamp'] = isset($data['createTimeTimestamp']) ? $data['createTimeTimestamp'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeTimestamp'] = isset($data['updateTimeTimestamp']) ? $data['updateTimeTimestamp'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
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
    * Gets uri
    *  uri
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets comment
    *  comment
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment comment
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
    *  notifier
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
    * @param string[]|null $notifier notifier
    *
    * @return $this
    */
    public function setNotifier($notifier)
    {
        $this->container['notifier'] = $notifier;
        return $this;
    }

    /**
    * Gets testCaseUri
    *  testCaseUri
    *
    * @return string|null
    */
    public function getTestCaseUri()
    {
        return $this->container['testCaseUri'];
    }

    /**
    * Sets testCaseUri
    *
    * @param string|null $testCaseUri testCaseUri
    *
    * @return $this
    */
    public function setTestCaseUri($testCaseUri)
    {
        $this->container['testCaseUri'] = $testCaseUri;
        return $this;
    }

    /**
    * Gets createTime
    *  createTime
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime createTime
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimeTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateTimeTimestamp()
    {
        return $this->container['createTimeTimestamp'];
    }

    /**
    * Sets createTimeTimestamp
    *
    * @param int|null $createTimeTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreateTimeTimestamp($createTimeTimestamp)
    {
        $this->container['createTimeTimestamp'] = $createTimeTimestamp;
        return $this;
    }

    /**
    * Gets updateTime
    *  updateTime
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime updateTime
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeTimestamp
    *  更新时间时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeTimestamp()
    {
        return $this->container['updateTimeTimestamp'];
    }

    /**
    * Sets updateTimeTimestamp
    *
    * @param int|null $updateTimeTimestamp 更新时间时间戳
    *
    * @return $this
    */
    public function setUpdateTimeTimestamp($updateTimeTimestamp)
    {
        $this->container['updateTimeTimestamp'] = $updateTimeTimestamp;
        return $this;
    }

    /**
    * Gets projectUuid
    *  projectUuid
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid projectUuid
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets versionUri
    *  versionUri
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
    * @param string|null $versionUri versionUri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets displayName
    *  displayName
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName displayName
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
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

