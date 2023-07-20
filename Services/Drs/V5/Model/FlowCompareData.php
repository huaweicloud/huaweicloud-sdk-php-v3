<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowCompareData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowCompareData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcDb  源数据库名称。
    * srcTb  源对象名称。
    * dstDb  目标数据库名称。
    * dstTb  目标对象名称。
    * progress  进度，1-100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcDb' => 'string',
            'srcTb' => 'string',
            'dstDb' => 'string',
            'dstTb' => 'string',
            'progress' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcDb  源数据库名称。
    * srcTb  源对象名称。
    * dstDb  目标数据库名称。
    * dstTb  目标对象名称。
    * progress  进度，1-100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcDb' => null,
        'srcTb' => null,
        'dstDb' => null,
        'dstTb' => null,
        'progress' => 'int32'
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
    * srcDb  源数据库名称。
    * srcTb  源对象名称。
    * dstDb  目标数据库名称。
    * dstTb  目标对象名称。
    * progress  进度，1-100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcDb' => 'src_db',
            'srcTb' => 'src_tb',
            'dstDb' => 'dst_db',
            'dstTb' => 'dst_tb',
            'progress' => 'progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcDb  源数据库名称。
    * srcTb  源对象名称。
    * dstDb  目标数据库名称。
    * dstTb  目标对象名称。
    * progress  进度，1-100。
    *
    * @var string[]
    */
    protected static $setters = [
            'srcDb' => 'setSrcDb',
            'srcTb' => 'setSrcTb',
            'dstDb' => 'setDstDb',
            'dstTb' => 'setDstTb',
            'progress' => 'setProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcDb  源数据库名称。
    * srcTb  源对象名称。
    * dstDb  目标数据库名称。
    * dstTb  目标对象名称。
    * progress  进度，1-100。
    *
    * @var string[]
    */
    protected static $getters = [
            'srcDb' => 'getSrcDb',
            'srcTb' => 'getSrcTb',
            'dstDb' => 'getDstDb',
            'dstTb' => 'getDstTb',
            'progress' => 'getProgress'
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
        $this->container['srcDb'] = isset($data['srcDb']) ? $data['srcDb'] : null;
        $this->container['srcTb'] = isset($data['srcTb']) ? $data['srcTb'] : null;
        $this->container['dstDb'] = isset($data['dstDb']) ? $data['dstDb'] : null;
        $this->container['dstTb'] = isset($data['dstTb']) ? $data['dstTb'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
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
    * Gets srcDb
    *  源数据库名称。
    *
    * @return string|null
    */
    public function getSrcDb()
    {
        return $this->container['srcDb'];
    }

    /**
    * Sets srcDb
    *
    * @param string|null $srcDb 源数据库名称。
    *
    * @return $this
    */
    public function setSrcDb($srcDb)
    {
        $this->container['srcDb'] = $srcDb;
        return $this;
    }

    /**
    * Gets srcTb
    *  源对象名称。
    *
    * @return string|null
    */
    public function getSrcTb()
    {
        return $this->container['srcTb'];
    }

    /**
    * Sets srcTb
    *
    * @param string|null $srcTb 源对象名称。
    *
    * @return $this
    */
    public function setSrcTb($srcTb)
    {
        $this->container['srcTb'] = $srcTb;
        return $this;
    }

    /**
    * Gets dstDb
    *  目标数据库名称。
    *
    * @return string|null
    */
    public function getDstDb()
    {
        return $this->container['dstDb'];
    }

    /**
    * Sets dstDb
    *
    * @param string|null $dstDb 目标数据库名称。
    *
    * @return $this
    */
    public function setDstDb($dstDb)
    {
        $this->container['dstDb'] = $dstDb;
        return $this;
    }

    /**
    * Gets dstTb
    *  目标对象名称。
    *
    * @return string|null
    */
    public function getDstTb()
    {
        return $this->container['dstTb'];
    }

    /**
    * Sets dstTb
    *
    * @param string|null $dstTb 目标对象名称。
    *
    * @return $this
    */
    public function setDstTb($dstTb)
    {
        $this->container['dstTb'] = $dstTb;
        return $this;
    }

    /**
    * Gets progress
    *  进度，1-100。
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 进度，1-100。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
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

