<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageFilesStatResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageFilesStatResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalFilesNum  镜像文件总数
    * totalFilesSize  镜像文件大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalFilesNum' => 'int',
            'totalFilesSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalFilesNum  镜像文件总数
    * totalFilesSize  镜像文件大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalFilesNum' => 'int32',
        'totalFilesSize' => 'int32'
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
    * totalFilesNum  镜像文件总数
    * totalFilesSize  镜像文件大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalFilesNum' => 'total_files_num',
            'totalFilesSize' => 'total_files_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalFilesNum  镜像文件总数
    * totalFilesSize  镜像文件大小
    *
    * @var string[]
    */
    protected static $setters = [
            'totalFilesNum' => 'setTotalFilesNum',
            'totalFilesSize' => 'setTotalFilesSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalFilesNum  镜像文件总数
    * totalFilesSize  镜像文件大小
    *
    * @var string[]
    */
    protected static $getters = [
            'totalFilesNum' => 'getTotalFilesNum',
            'totalFilesSize' => 'getTotalFilesSize'
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
        $this->container['totalFilesNum'] = isset($data['totalFilesNum']) ? $data['totalFilesNum'] : null;
        $this->container['totalFilesSize'] = isset($data['totalFilesSize']) ? $data['totalFilesSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalFilesNum']) && ($this->container['totalFilesNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'totalFilesNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['totalFilesNum']) && ($this->container['totalFilesNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalFilesNum', must be bigger than or equal to 0.";
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
    * Gets totalFilesNum
    *  镜像文件总数
    *
    * @return int|null
    */
    public function getTotalFilesNum()
    {
        return $this->container['totalFilesNum'];
    }

    /**
    * Sets totalFilesNum
    *
    * @param int|null $totalFilesNum 镜像文件总数
    *
    * @return $this
    */
    public function setTotalFilesNum($totalFilesNum)
    {
        $this->container['totalFilesNum'] = $totalFilesNum;
        return $this;
    }

    /**
    * Gets totalFilesSize
    *  镜像文件大小
    *
    * @return int|null
    */
    public function getTotalFilesSize()
    {
        return $this->container['totalFilesSize'];
    }

    /**
    * Sets totalFilesSize
    *
    * @param int|null $totalFilesSize 镜像文件大小
    *
    * @return $this
    */
    public function setTotalFilesSize($totalFilesSize)
    {
        $this->container['totalFilesSize'] = $totalFilesSize;
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

