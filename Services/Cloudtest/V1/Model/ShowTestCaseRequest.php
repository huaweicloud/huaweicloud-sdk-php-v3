<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestCaseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestCaseRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testcaseId  用例id
    * versionUri  分支uri
    * projectUuid  项目id
    * taskUri  任务
    * refresh  是否刷新缓存
    * isRecycle  是否回收站资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testcaseId' => 'string',
            'versionUri' => 'string',
            'projectUuid' => 'string',
            'taskUri' => 'string',
            'refresh' => 'bool',
            'isRecycle' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testcaseId  用例id
    * versionUri  分支uri
    * projectUuid  项目id
    * taskUri  任务
    * refresh  是否刷新缓存
    * isRecycle  是否回收站资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testcaseId' => null,
        'versionUri' => null,
        'projectUuid' => null,
        'taskUri' => null,
        'refresh' => null,
        'isRecycle' => null
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
    * testcaseId  用例id
    * versionUri  分支uri
    * projectUuid  项目id
    * taskUri  任务
    * refresh  是否刷新缓存
    * isRecycle  是否回收站资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testcaseId' => 'testcase_id',
            'versionUri' => 'version_uri',
            'projectUuid' => 'project_uuid',
            'taskUri' => 'task_uri',
            'refresh' => 'refresh',
            'isRecycle' => 'is_recycle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testcaseId  用例id
    * versionUri  分支uri
    * projectUuid  项目id
    * taskUri  任务
    * refresh  是否刷新缓存
    * isRecycle  是否回收站资源
    *
    * @var string[]
    */
    protected static $setters = [
            'testcaseId' => 'setTestcaseId',
            'versionUri' => 'setVersionUri',
            'projectUuid' => 'setProjectUuid',
            'taskUri' => 'setTaskUri',
            'refresh' => 'setRefresh',
            'isRecycle' => 'setIsRecycle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testcaseId  用例id
    * versionUri  分支uri
    * projectUuid  项目id
    * taskUri  任务
    * refresh  是否刷新缓存
    * isRecycle  是否回收站资源
    *
    * @var string[]
    */
    protected static $getters = [
            'testcaseId' => 'getTestcaseId',
            'versionUri' => 'getVersionUri',
            'projectUuid' => 'getProjectUuid',
            'taskUri' => 'getTaskUri',
            'refresh' => 'getRefresh',
            'isRecycle' => 'getIsRecycle'
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
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['versionUri'] = isset($data['versionUri']) ? $data['versionUri'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
        $this->container['isRecycle'] = isset($data['isRecycle']) ? $data['isRecycle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['testcaseId'] === null) {
            $invalidProperties[] = "'testcaseId' can't be null";
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
    * Gets testcaseId
    *  用例id
    *
    * @return string
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string $testcaseId 用例id
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
        return $this;
    }

    /**
    * Gets versionUri
    *  分支uri
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
    * @param string|null $versionUri 分支uri
    *
    * @return $this
    */
    public function setVersionUri($versionUri)
    {
        $this->container['versionUri'] = $versionUri;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
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
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 任务
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets refresh
    *  是否刷新缓存
    *
    * @return bool|null
    */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
    * Sets refresh
    *
    * @param bool|null $refresh 是否刷新缓存
    *
    * @return $this
    */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;
        return $this;
    }

    /**
    * Gets isRecycle
    *  是否回收站资源
    *
    * @return bool|null
    */
    public function getIsRecycle()
    {
        return $this->container['isRecycle'];
    }

    /**
    * Sets isRecycle
    *
    * @param bool|null $isRecycle 是否回收站资源
    *
    * @return $this
    */
    public function setIsRecycle($isRecycle)
    {
        $this->container['isRecycle'] = $isRecycle;
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

