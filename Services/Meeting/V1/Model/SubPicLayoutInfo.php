<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubPicLayoutInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubPicLayoutInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  多画面信息。
    * left  子画面从左到右的索引。
    * top  子画面从上到下的索引。
    * xSize  子画面横向尺寸。
    * ySize  子画面横向尺寸。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'left' => 'int',
            'top' => 'int',
            'xSize' => 'int',
            'ySize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  多画面信息。
    * left  子画面从左到右的索引。
    * top  子画面从上到下的索引。
    * xSize  子画面横向尺寸。
    * ySize  子画面横向尺寸。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'left' => 'int32',
        'top' => 'int32',
        'xSize' => 'int32',
        'ySize' => 'int32'
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
    * id  多画面信息。
    * left  子画面从左到右的索引。
    * top  子画面从上到下的索引。
    * xSize  子画面横向尺寸。
    * ySize  子画面横向尺寸。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'left' => 'left',
            'top' => 'top',
            'xSize' => 'xSize',
            'ySize' => 'ySize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  多画面信息。
    * left  子画面从左到右的索引。
    * top  子画面从上到下的索引。
    * xSize  子画面横向尺寸。
    * ySize  子画面横向尺寸。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'left' => 'setLeft',
            'top' => 'setTop',
            'xSize' => 'setXSize',
            'ySize' => 'setYSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  多画面信息。
    * left  子画面从左到右的索引。
    * top  子画面从上到下的索引。
    * xSize  子画面横向尺寸。
    * ySize  子画面横向尺寸。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'left' => 'getLeft',
            'top' => 'getTop',
            'xSize' => 'getXSize',
            'ySize' => 'getYSize'
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
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['xSize'] = isset($data['xSize']) ? $data['xSize'] : null;
        $this->container['ySize'] = isset($data['ySize']) ? $data['ySize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['left']) && ($this->container['left'] < 1)) {
                $invalidProperties[] = "invalid value for 'left', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['top']) && ($this->container['top'] < 1)) {
                $invalidProperties[] = "invalid value for 'top', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSize']) && ($this->container['xSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'xSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ySize']) && ($this->container['ySize'] < 1)) {
                $invalidProperties[] = "invalid value for 'ySize', must be bigger than or equal to 1.";
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
    * Gets id
    *  多画面信息。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 多画面信息。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets left
    *  子画面从左到右的索引。
    *
    * @return int|null
    */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
    * Sets left
    *
    * @param int|null $left 子画面从左到右的索引。
    *
    * @return $this
    */
    public function setLeft($left)
    {
        $this->container['left'] = $left;
        return $this;
    }

    /**
    * Gets top
    *  子画面从上到下的索引。
    *
    * @return int|null
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param int|null $top 子画面从上到下的索引。
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets xSize
    *  子画面横向尺寸。
    *
    * @return int|null
    */
    public function getXSize()
    {
        return $this->container['xSize'];
    }

    /**
    * Sets xSize
    *
    * @param int|null $xSize 子画面横向尺寸。
    *
    * @return $this
    */
    public function setXSize($xSize)
    {
        $this->container['xSize'] = $xSize;
        return $this;
    }

    /**
    * Gets ySize
    *  子画面横向尺寸。
    *
    * @return int|null
    */
    public function getYSize()
    {
        return $this->container['ySize'];
    }

    /**
    * Sets ySize
    *
    * @param int|null $ySize 子画面横向尺寸。
    *
    * @return $this
    */
    public function setYSize($ySize)
    {
        $this->container['ySize'] = $ySize;
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

