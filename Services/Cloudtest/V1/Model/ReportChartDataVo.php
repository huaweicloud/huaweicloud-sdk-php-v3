<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportChartDataVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportChartDataVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  报表id
    * name  报表名称
    * analyzeDim  analyzeDim
    * compareDim  对比维度数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'analyzeDim' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ReportDimVo',
            'compareDim' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ReportDimVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  报表id
    * name  报表名称
    * analyzeDim  analyzeDim
    * compareDim  对比维度数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'analyzeDim' => null,
        'compareDim' => null
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
    * id  报表id
    * name  报表名称
    * analyzeDim  analyzeDim
    * compareDim  对比维度数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'analyzeDim' => 'analyze_dim',
            'compareDim' => 'compare_dim'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  报表id
    * name  报表名称
    * analyzeDim  analyzeDim
    * compareDim  对比维度数据
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'analyzeDim' => 'setAnalyzeDim',
            'compareDim' => 'setCompareDim'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  报表id
    * name  报表名称
    * analyzeDim  analyzeDim
    * compareDim  对比维度数据
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'analyzeDim' => 'getAnalyzeDim',
            'compareDim' => 'getCompareDim'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['analyzeDim'] = isset($data['analyzeDim']) ? $data['analyzeDim'] : null;
        $this->container['compareDim'] = isset($data['compareDim']) ? $data['compareDim'] : null;
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
    * Gets id
    *  报表id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 报表id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  报表名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 报表名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets analyzeDim
    *  analyzeDim
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportDimVo|null
    */
    public function getAnalyzeDim()
    {
        return $this->container['analyzeDim'];
    }

    /**
    * Sets analyzeDim
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportDimVo|null $analyzeDim analyzeDim
    *
    * @return $this
    */
    public function setAnalyzeDim($analyzeDim)
    {
        $this->container['analyzeDim'] = $analyzeDim;
        return $this;
    }

    /**
    * Gets compareDim
    *  对比维度数据
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportDimVo[]|null
    */
    public function getCompareDim()
    {
        return $this->container['compareDim'];
    }

    /**
    * Sets compareDim
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ReportDimVo[]|null $compareDim 对比维度数据
    *
    * @return $this
    */
    public function setCompareDim($compareDim)
    {
        $this->container['compareDim'] = $compareDim;
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

