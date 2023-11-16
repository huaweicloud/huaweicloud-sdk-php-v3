<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Compress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Compress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  智能压缩开关（on：开启，off：关闭）。
    * type  智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    * fileType  压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'type' => 'string',
            'fileType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  智能压缩开关（on：开启，off：关闭）。
    * type  智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    * fileType  压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'type' => null,
        'fileType' => null
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
    * status  智能压缩开关（on：开启，off：关闭）。
    * type  智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    * fileType  压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'type' => 'type',
            'fileType' => 'file_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  智能压缩开关（on：开启，off：关闭）。
    * type  智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    * fileType  压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'type' => 'setType',
            'fileType' => 'setFileType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  智能压缩开关（on：开启，off：关闭）。
    * type  智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    * fileType  压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'type' => 'getType',
            'fileType' => 'getFileType'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets status
    *  智能压缩开关（on：开启，off：关闭）。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 智能压缩开关（on：开启，off：关闭）。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 智能压缩类型（gzip：gzip压缩，brotli：brotli压缩）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets fileType
    *  压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 压缩格式，内容总长度不可超过200个字符，  多种格式用“,”分割，每组内容不可超过50个字符， 开启状态下，首次传空时默认值为.js,.html,.css,.xml,.json,.shtml,.htm，否则为上次设置的结果。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
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

