<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTrainingJobLogsPreviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTrainingJobLogsPreviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    * currentSize  当前返回的日志大小（单位：字节）。最大为5兆。
    * fullSize  完整的日志大小（单位：字节）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'currentSize' => 'int',
            'fullSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    * currentSize  当前返回的日志大小（单位：字节）。最大为5兆。
    * fullSize  完整的日志大小（单位：字节）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'currentSize' => 'int32',
        'fullSize' => 'int32'
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
    * content  日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    * currentSize  当前返回的日志大小（单位：字节）。最大为5兆。
    * fullSize  完整的日志大小（单位：字节）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'currentSize' => 'current_size',
            'fullSize' => 'full_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    * currentSize  当前返回的日志大小（单位：字节）。最大为5兆。
    * fullSize  完整的日志大小（单位：字节）。
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'currentSize' => 'setCurrentSize',
            'fullSize' => 'setFullSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    * currentSize  当前返回的日志大小（单位：字节）。最大为5兆。
    * fullSize  完整的日志大小（单位：字节）。
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'currentSize' => 'getCurrentSize',
            'fullSize' => 'getFullSize'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['currentSize'] = isset($data['currentSize']) ? $data['currentSize'] : null;
        $this->container['fullSize'] = isset($data['fullSize']) ? $data['fullSize'] : null;
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
    * Gets content
    *  日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 日志内容。如果日志大小没有超过上限（n兆）则返回全部内容，如果日志超过了上限（n兆）则返回最新的n兆的日志。2022/03/01 00:00:00 (GMT+08:00)后，此参数名称由“context”改为“content”。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets currentSize
    *  当前返回的日志大小（单位：字节）。最大为5兆。
    *
    * @return int|null
    */
    public function getCurrentSize()
    {
        return $this->container['currentSize'];
    }

    /**
    * Sets currentSize
    *
    * @param int|null $currentSize 当前返回的日志大小（单位：字节）。最大为5兆。
    *
    * @return $this
    */
    public function setCurrentSize($currentSize)
    {
        $this->container['currentSize'] = $currentSize;
        return $this;
    }

    /**
    * Gets fullSize
    *  完整的日志大小（单位：字节）。
    *
    * @return int|null
    */
    public function getFullSize()
    {
        return $this->container['fullSize'];
    }

    /**
    * Sets fullSize
    *
    * @param int|null $fullSize 完整的日志大小（单位：字节）。
    *
    * @return $this
    */
    public function setFullSize($fullSize)
    {
        $this->container['fullSize'] = $fullSize;
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

