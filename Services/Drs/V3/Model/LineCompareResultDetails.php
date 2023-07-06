<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineCompareResultDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineCompareResultDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * lineCompareDetail  该库的表的行对比详情。
    * lineCompareDetailCount  该库的行对比结果详情总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'lineCompareDetail' => '\HuaweiCloud\SDK\Drs\V3\Model\LineCompareDetail[]',
            'lineCompareDetailCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * lineCompareDetail  该库的表的行对比详情。
    * lineCompareDetailCount  该库的行对比结果详情总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'lineCompareDetail' => null,
        'lineCompareDetailCount' => 'int32'
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
    * lineCompareDetail  该库的表的行对比详情。
    * lineCompareDetailCount  该库的行对比结果详情总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'lineCompareDetail' => 'line_compare_detail',
            'lineCompareDetailCount' => 'line_compare_detail_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源库名称。
    * lineCompareDetail  该库的表的行对比详情。
    * lineCompareDetailCount  该库的行对比结果详情总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'lineCompareDetail' => 'setLineCompareDetail',
            'lineCompareDetailCount' => 'setLineCompareDetailCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源库名称。
    * lineCompareDetail  该库的表的行对比详情。
    * lineCompareDetailCount  该库的行对比结果详情总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'lineCompareDetail' => 'getLineCompareDetail',
            'lineCompareDetailCount' => 'getLineCompareDetailCount'
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
        $this->container['lineCompareDetail'] = isset($data['lineCompareDetail']) ? $data['lineCompareDetail'] : null;
        $this->container['lineCompareDetailCount'] = isset($data['lineCompareDetailCount']) ? $data['lineCompareDetailCount'] : null;
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
        if ($this->container['lineCompareDetail'] === null) {
            $invalidProperties[] = "'lineCompareDetail' can't be null";
        }
        if ($this->container['lineCompareDetailCount'] === null) {
            $invalidProperties[] = "'lineCompareDetailCount' can't be null";
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
    * Gets lineCompareDetail
    *  该库的表的行对比详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\LineCompareDetail[]
    */
    public function getLineCompareDetail()
    {
        return $this->container['lineCompareDetail'];
    }

    /**
    * Sets lineCompareDetail
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\LineCompareDetail[] $lineCompareDetail 该库的表的行对比详情。
    *
    * @return $this
    */
    public function setLineCompareDetail($lineCompareDetail)
    {
        $this->container['lineCompareDetail'] = $lineCompareDetail;
        return $this;
    }

    /**
    * Gets lineCompareDetailCount
    *  该库的行对比结果详情总数。
    *
    * @return int
    */
    public function getLineCompareDetailCount()
    {
        return $this->container['lineCompareDetailCount'];
    }

    /**
    * Sets lineCompareDetailCount
    *
    * @param int $lineCompareDetailCount 该库的行对比结果详情总数。
    *
    * @return $this
    */
    public function setLineCompareDetailCount($lineCompareDetailCount)
    {
        $this->container['lineCompareDetailCount'] = $lineCompareDetailCount;
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

