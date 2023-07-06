<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContentCompareResultDiffs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContentCompareResultDiffs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * sourceTableName  源库的表名称。
    * contentCompareDiff  内容对比结果差异。
    * contentCompareDiffCount  内容对比结果差异总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'sourceTableName' => 'string',
            'contentCompareDiff' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDiff[]',
            'contentCompareDiffCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * sourceTableName  源库的表名称。
    * contentCompareDiff  内容对比结果差异。
    * contentCompareDiffCount  内容对比结果差异总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'sourceTableName' => null,
        'contentCompareDiff' => null,
        'contentCompareDiffCount' => 'int32'
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
    * sourceDbName  源库名称。
    * sourceTableName  源库的表名称。
    * contentCompareDiff  内容对比结果差异。
    * contentCompareDiffCount  内容对比结果差异总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'sourceTableName' => 'source_table_name',
            'contentCompareDiff' => 'content_compare_diff',
            'contentCompareDiffCount' => 'content_compare_diff_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源库名称。
    * sourceTableName  源库的表名称。
    * contentCompareDiff  内容对比结果差异。
    * contentCompareDiffCount  内容对比结果差异总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'sourceTableName' => 'setSourceTableName',
            'contentCompareDiff' => 'setContentCompareDiff',
            'contentCompareDiffCount' => 'setContentCompareDiffCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源库名称。
    * sourceTableName  源库的表名称。
    * contentCompareDiff  内容对比结果差异。
    * contentCompareDiffCount  内容对比结果差异总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'sourceTableName' => 'getSourceTableName',
            'contentCompareDiff' => 'getContentCompareDiff',
            'contentCompareDiffCount' => 'getContentCompareDiffCount'
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
        $this->container['sourceDbName'] = isset($data['sourceDbName']) ? $data['sourceDbName'] : null;
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['contentCompareDiff'] = isset($data['contentCompareDiff']) ? $data['contentCompareDiff'] : null;
        $this->container['contentCompareDiffCount'] = isset($data['contentCompareDiffCount']) ? $data['contentCompareDiffCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceDbName'] === null) {
            $invalidProperties[] = "'sourceDbName' can't be null";
        }
        if ($this->container['sourceTableName'] === null) {
            $invalidProperties[] = "'sourceTableName' can't be null";
        }
        if ($this->container['contentCompareDiff'] === null) {
            $invalidProperties[] = "'contentCompareDiff' can't be null";
        }
        if ($this->container['contentCompareDiffCount'] === null) {
            $invalidProperties[] = "'contentCompareDiffCount' can't be null";
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
    * Gets sourceDbName
    *  源库名称。
    *
    * @return string
    */
    public function getSourceDbName()
    {
        return $this->container['sourceDbName'];
    }

    /**
    * Sets sourceDbName
    *
    * @param string $sourceDbName 源库名称。
    *
    * @return $this
    */
    public function setSourceDbName($sourceDbName)
    {
        $this->container['sourceDbName'] = $sourceDbName;
        return $this;
    }

    /**
    * Gets sourceTableName
    *  源库的表名称。
    *
    * @return string
    */
    public function getSourceTableName()
    {
        return $this->container['sourceTableName'];
    }

    /**
    * Sets sourceTableName
    *
    * @param string $sourceTableName 源库的表名称。
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets contentCompareDiff
    *  内容对比结果差异。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDiff[]
    */
    public function getContentCompareDiff()
    {
        return $this->container['contentCompareDiff'];
    }

    /**
    * Sets contentCompareDiff
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDiff[] $contentCompareDiff 内容对比结果差异。
    *
    * @return $this
    */
    public function setContentCompareDiff($contentCompareDiff)
    {
        $this->container['contentCompareDiff'] = $contentCompareDiff;
        return $this;
    }

    /**
    * Gets contentCompareDiffCount
    *  内容对比结果差异总数。
    *
    * @return int
    */
    public function getContentCompareDiffCount()
    {
        return $this->container['contentCompareDiffCount'];
    }

    /**
    * Sets contentCompareDiffCount
    *
    * @param int $contentCompareDiffCount 内容对比结果差异总数。
    *
    * @return $this
    */
    public function setContentCompareDiffCount($contentCompareDiffCount)
    {
        $this->container['contentCompareDiffCount'] = $contentCompareDiffCount;
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

