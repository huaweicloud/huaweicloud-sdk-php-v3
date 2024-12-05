<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigDataSourcesVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigDataSourcesVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    * visible  连接是否可见,0：不可见，1：可见
    * dataSourceVos  数据源结构体
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'int',
            'visible' => 'int',
            'dataSourceVos' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigDataSourceVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    * visible  连接是否可见,0：不可见，1：可见
    * dataSourceVos  数据源结构体
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'visible' => null,
        'dataSourceVos' => null
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
    * mode  企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    * visible  连接是否可见,0：不可见，1：可见
    * dataSourceVos  数据源结构体
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'visible' => 'visible',
            'dataSourceVos' => 'data_source_vos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    * visible  连接是否可见,0：不可见，1：可见
    * dataSourceVos  数据源结构体
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'visible' => 'setVisible',
            'dataSourceVos' => 'setDataSourceVos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    * visible  连接是否可见,0：不可见，1：可见
    * dataSourceVos  数据源结构体
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'visible' => 'getVisible',
            'dataSourceVos' => 'getDataSourceVos'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['dataSourceVos'] = isset($data['dataSourceVos']) ? $data['dataSourceVos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['mode']) && ($this->container['mode'] > 1)) {
                $invalidProperties[] = "invalid value for 'mode', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['mode']) && ($this->container['mode'] < 0)) {
                $invalidProperties[] = "invalid value for 'mode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['visible']) && ($this->container['visible'] > 1)) {
                $invalidProperties[] = "invalid value for 'visible', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['visible']) && ($this->container['visible'] < 0)) {
                $invalidProperties[] = "invalid value for 'visible', must be bigger than or equal to 0.";
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
    * Gets mode
    *  企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    *
    * @return int|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param int|null $mode 企业模式空间下的数据连接还是简单模式空间下的连接,0:简单模式，1：企业模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets visible
    *  连接是否可见,0：不可见，1：可见
    *
    * @return int|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param int|null $visible 连接是否可见,0：不可见，1：可见
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets dataSourceVos
    *  数据源结构体
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigDataSourceVo[]|null
    */
    public function getDataSourceVos()
    {
        return $this->container['dataSourceVos'];
    }

    /**
    * Sets dataSourceVos
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigDataSourceVo[]|null $dataSourceVos 数据源结构体
    *
    * @return $this
    */
    public function setDataSourceVos($dataSourceVos)
    {
        $this->container['dataSourceVos'] = $dataSourceVos;
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

