<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContentCompareResultDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContentCompareResultDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * contentCompareDetail  该库的表的内容对比详情。
    * contentCompareDetailCount  内容对比结果详情总数。
    * contentUncompareDetail  该库的表的内容对比详情(无法对比的表)。
    * contentUncompareDetailCount  内容对比结果详情总数(无法对比的表)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'contentCompareDetail' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDetail[]',
            'contentCompareDetailCount' => 'int',
            'contentUncompareDetail' => '\HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDetail[]',
            'contentUncompareDetailCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * contentCompareDetail  该库的表的内容对比详情。
    * contentCompareDetailCount  内容对比结果详情总数。
    * contentUncompareDetail  该库的表的内容对比详情(无法对比的表)。
    * contentUncompareDetailCount  内容对比结果详情总数(无法对比的表)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'contentCompareDetail' => null,
        'contentCompareDetailCount' => 'int32',
        'contentUncompareDetail' => null,
        'contentUncompareDetailCount' => 'int32'
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
    * contentCompareDetail  该库的表的内容对比详情。
    * contentCompareDetailCount  内容对比结果详情总数。
    * contentUncompareDetail  该库的表的内容对比详情(无法对比的表)。
    * contentUncompareDetailCount  内容对比结果详情总数(无法对比的表)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'contentCompareDetail' => 'content_compare_detail',
            'contentCompareDetailCount' => 'content_compare_detail_count',
            'contentUncompareDetail' => 'content_uncompare_detail',
            'contentUncompareDetailCount' => 'content_uncompare_detail_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源库名称。
    * contentCompareDetail  该库的表的内容对比详情。
    * contentCompareDetailCount  内容对比结果详情总数。
    * contentUncompareDetail  该库的表的内容对比详情(无法对比的表)。
    * contentUncompareDetailCount  内容对比结果详情总数(无法对比的表)。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'contentCompareDetail' => 'setContentCompareDetail',
            'contentCompareDetailCount' => 'setContentCompareDetailCount',
            'contentUncompareDetail' => 'setContentUncompareDetail',
            'contentUncompareDetailCount' => 'setContentUncompareDetailCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源库名称。
    * contentCompareDetail  该库的表的内容对比详情。
    * contentCompareDetailCount  内容对比结果详情总数。
    * contentUncompareDetail  该库的表的内容对比详情(无法对比的表)。
    * contentUncompareDetailCount  内容对比结果详情总数(无法对比的表)。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'contentCompareDetail' => 'getContentCompareDetail',
            'contentCompareDetailCount' => 'getContentCompareDetailCount',
            'contentUncompareDetail' => 'getContentUncompareDetail',
            'contentUncompareDetailCount' => 'getContentUncompareDetailCount'
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
        $this->container['contentCompareDetail'] = isset($data['contentCompareDetail']) ? $data['contentCompareDetail'] : null;
        $this->container['contentCompareDetailCount'] = isset($data['contentCompareDetailCount']) ? $data['contentCompareDetailCount'] : null;
        $this->container['contentUncompareDetail'] = isset($data['contentUncompareDetail']) ? $data['contentUncompareDetail'] : null;
        $this->container['contentUncompareDetailCount'] = isset($data['contentUncompareDetailCount']) ? $data['contentUncompareDetailCount'] : null;
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
        if ($this->container['contentCompareDetail'] === null) {
            $invalidProperties[] = "'contentCompareDetail' can't be null";
        }
        if ($this->container['contentCompareDetailCount'] === null) {
            $invalidProperties[] = "'contentCompareDetailCount' can't be null";
        }
        if ($this->container['contentUncompareDetailCount'] === null) {
            $invalidProperties[] = "'contentUncompareDetailCount' can't be null";
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
    * Gets contentCompareDetail
    *  该库的表的内容对比详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDetail[]
    */
    public function getContentCompareDetail()
    {
        return $this->container['contentCompareDetail'];
    }

    /**
    * Sets contentCompareDetail
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDetail[] $contentCompareDetail 该库的表的内容对比详情。
    *
    * @return $this
    */
    public function setContentCompareDetail($contentCompareDetail)
    {
        $this->container['contentCompareDetail'] = $contentCompareDetail;
        return $this;
    }

    /**
    * Gets contentCompareDetailCount
    *  内容对比结果详情总数。
    *
    * @return int
    */
    public function getContentCompareDetailCount()
    {
        return $this->container['contentCompareDetailCount'];
    }

    /**
    * Sets contentCompareDetailCount
    *
    * @param int $contentCompareDetailCount 内容对比结果详情总数。
    *
    * @return $this
    */
    public function setContentCompareDetailCount($contentCompareDetailCount)
    {
        $this->container['contentCompareDetailCount'] = $contentCompareDetailCount;
        return $this;
    }

    /**
    * Gets contentUncompareDetail
    *  该库的表的内容对比详情(无法对比的表)。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDetail[]|null
    */
    public function getContentUncompareDetail()
    {
        return $this->container['contentUncompareDetail'];
    }

    /**
    * Sets contentUncompareDetail
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ContentCompareDetail[]|null $contentUncompareDetail 该库的表的内容对比详情(无法对比的表)。
    *
    * @return $this
    */
    public function setContentUncompareDetail($contentUncompareDetail)
    {
        $this->container['contentUncompareDetail'] = $contentUncompareDetail;
        return $this;
    }

    /**
    * Gets contentUncompareDetailCount
    *  内容对比结果详情总数(无法对比的表)。
    *
    * @return int
    */
    public function getContentUncompareDetailCount()
    {
        return $this->container['contentUncompareDetailCount'];
    }

    /**
    * Sets contentUncompareDetailCount
    *
    * @param int $contentUncompareDetailCount 内容对比结果详情总数(无法对比的表)。
    *
    * @return $this
    */
    public function setContentUncompareDetailCount($contentUncompareDetailCount)
    {
        $this->container['contentUncompareDetailCount'] = $contentUncompareDetailCount;
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

