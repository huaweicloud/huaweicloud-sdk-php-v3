<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchemaDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchemaDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    * maximumFileSize  **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    * maximumLineLength  **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    * maximumTruncateLine  **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    * createAt  **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    * updateAt  **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    * rebuildAt  **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    * lastBuildAt  **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    * buildTimes  **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    * queryTimes  **参数解释：** 请求次数。 **约束限制：** 不涉及。
    * outlineTimes  **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'maximumFileSize' => 'int',
            'maximumLineLength' => 'int',
            'maximumTruncateLine' => 'int',
            'createAt' => 'string',
            'updateAt' => 'string',
            'rebuildAt' => 'string',
            'lastBuildAt' => 'string',
            'buildTimes' => 'int',
            'queryTimes' => 'int',
            'outlineTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    * maximumFileSize  **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    * maximumLineLength  **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    * maximumTruncateLine  **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    * createAt  **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    * updateAt  **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    * rebuildAt  **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    * lastBuildAt  **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    * buildTimes  **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    * queryTimes  **参数解释：** 请求次数。 **约束限制：** 不涉及。
    * outlineTimes  **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'maximumFileSize' => 'int32',
        'maximumLineLength' => 'int32',
        'maximumTruncateLine' => 'int32',
        'createAt' => null,
        'updateAt' => null,
        'rebuildAt' => null,
        'lastBuildAt' => null,
        'buildTimes' => 'int32',
        'queryTimes' => 'int32',
        'outlineTimes' => 'int32'
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
    * version  **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    * maximumFileSize  **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    * maximumLineLength  **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    * maximumTruncateLine  **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    * createAt  **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    * updateAt  **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    * rebuildAt  **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    * lastBuildAt  **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    * buildTimes  **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    * queryTimes  **参数解释：** 请求次数。 **约束限制：** 不涉及。
    * outlineTimes  **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'maximumFileSize' => 'maximum_file_size',
            'maximumLineLength' => 'maximum_line_length',
            'maximumTruncateLine' => 'maximum_truncate_line',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'rebuildAt' => 'rebuild_at',
            'lastBuildAt' => 'last_build_at',
            'buildTimes' => 'build_times',
            'queryTimes' => 'query_times',
            'outlineTimes' => 'outline_times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    * maximumFileSize  **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    * maximumLineLength  **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    * maximumTruncateLine  **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    * createAt  **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    * updateAt  **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    * rebuildAt  **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    * lastBuildAt  **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    * buildTimes  **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    * queryTimes  **参数解释：** 请求次数。 **约束限制：** 不涉及。
    * outlineTimes  **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'maximumFileSize' => 'setMaximumFileSize',
            'maximumLineLength' => 'setMaximumLineLength',
            'maximumTruncateLine' => 'setMaximumTruncateLine',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'rebuildAt' => 'setRebuildAt',
            'lastBuildAt' => 'setLastBuildAt',
            'buildTimes' => 'setBuildTimes',
            'queryTimes' => 'setQueryTimes',
            'outlineTimes' => 'setOutlineTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    * maximumFileSize  **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    * maximumLineLength  **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    * maximumTruncateLine  **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    * createAt  **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    * updateAt  **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    * rebuildAt  **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    * lastBuildAt  **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    * buildTimes  **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    * queryTimes  **参数解释：** 请求次数。 **约束限制：** 不涉及。
    * outlineTimes  **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'maximumFileSize' => 'getMaximumFileSize',
            'maximumLineLength' => 'getMaximumLineLength',
            'maximumTruncateLine' => 'getMaximumTruncateLine',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'rebuildAt' => 'getRebuildAt',
            'lastBuildAt' => 'getLastBuildAt',
            'buildTimes' => 'getBuildTimes',
            'queryTimes' => 'getQueryTimes',
            'outlineTimes' => 'getOutlineTimes'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['maximumFileSize'] = isset($data['maximumFileSize']) ? $data['maximumFileSize'] : null;
        $this->container['maximumLineLength'] = isset($data['maximumLineLength']) ? $data['maximumLineLength'] : null;
        $this->container['maximumTruncateLine'] = isset($data['maximumTruncateLine']) ? $data['maximumTruncateLine'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['rebuildAt'] = isset($data['rebuildAt']) ? $data['rebuildAt'] : null;
        $this->container['lastBuildAt'] = isset($data['lastBuildAt']) ? $data['lastBuildAt'] : null;
        $this->container['buildTimes'] = isset($data['buildTimes']) ? $data['buildTimes'] : null;
        $this->container['queryTimes'] = isset($data['queryTimes']) ? $data['queryTimes'] : null;
        $this->container['outlineTimes'] = isset($data['outlineTimes']) ? $data['outlineTimes'] : null;
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
    * Gets version
    *  **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：** 代码导航版本。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets maximumFileSize
    *  **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getMaximumFileSize()
    {
        return $this->container['maximumFileSize'];
    }

    /**
    * Sets maximumFileSize
    *
    * @param int|null $maximumFileSize **参数解释：** 支持的最大文件大小。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMaximumFileSize($maximumFileSize)
    {
        $this->container['maximumFileSize'] = $maximumFileSize;
        return $this;
    }

    /**
    * Gets maximumLineLength
    *  **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getMaximumLineLength()
    {
        return $this->container['maximumLineLength'];
    }

    /**
    * Sets maximumLineLength
    *
    * @param int|null $maximumLineLength **参数解释：** 支持的最大行数。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMaximumLineLength($maximumLineLength)
    {
        $this->container['maximumLineLength'] = $maximumLineLength;
        return $this;
    }

    /**
    * Gets maximumTruncateLine
    *  **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getMaximumTruncateLine()
    {
        return $this->container['maximumTruncateLine'];
    }

    /**
    * Sets maximumTruncateLine
    *
    * @param int|null $maximumTruncateLine **参数解释：** 每行支持的最大字符数，超过将截断。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMaximumTruncateLine($maximumTruncateLine)
    {
        $this->container['maximumTruncateLine'] = $maximumTruncateLine;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释：** 索引创建时间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 索引更新时间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets rebuildAt
    *  **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getRebuildAt()
    {
        return $this->container['rebuildAt'];
    }

    /**
    * Sets rebuildAt
    *
    * @param string|null $rebuildAt **参数解释：** 索引重建时间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRebuildAt($rebuildAt)
    {
        $this->container['rebuildAt'] = $rebuildAt;
        return $this;
    }

    /**
    * Gets lastBuildAt
    *  **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getLastBuildAt()
    {
        return $this->container['lastBuildAt'];
    }

    /**
    * Sets lastBuildAt
    *
    * @param string|null $lastBuildAt **参数解释：** 索引最近构建时间。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLastBuildAt($lastBuildAt)
    {
        $this->container['lastBuildAt'] = $lastBuildAt;
        return $this;
    }

    /**
    * Gets buildTimes
    *  **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getBuildTimes()
    {
        return $this->container['buildTimes'];
    }

    /**
    * Sets buildTimes
    *
    * @param int|null $buildTimes **参数解释：** 索引构建次数。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setBuildTimes($buildTimes)
    {
        $this->container['buildTimes'] = $buildTimes;
        return $this;
    }

    /**
    * Gets queryTimes
    *  **参数解释：** 请求次数。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getQueryTimes()
    {
        return $this->container['queryTimes'];
    }

    /**
    * Sets queryTimes
    *
    * @param int|null $queryTimes **参数解释：** 请求次数。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setQueryTimes($queryTimes)
    {
        $this->container['queryTimes'] = $queryTimes;
        return $this;
    }

    /**
    * Gets outlineTimes
    *  **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getOutlineTimes()
    {
        return $this->container['outlineTimes'];
    }

    /**
    * Sets outlineTimes
    *
    * @param int|null $outlineTimes **参数解释：** 索引大纲请求次数。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setOutlineTimes($outlineTimes)
    {
        $this->container['outlineTimes'] = $outlineTimes;
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

