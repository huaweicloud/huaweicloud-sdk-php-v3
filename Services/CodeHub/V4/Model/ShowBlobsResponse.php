<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBlobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBlobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * blobId  **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'encoding' => 'string',
            'content' => 'string',
            'blobId' => 'string',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * blobId  **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => 'int64',
        'encoding' => null,
        'content' => null,
        'blobId' => null,
        'xTotal' => null
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
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * blobId  **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'encoding' => 'encoding',
            'content' => 'content',
            'blobId' => 'blob_id',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * blobId  **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'encoding' => 'setEncoding',
            'content' => 'setContent',
            'blobId' => 'setBlobId',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * blobId  **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'encoding' => 'getEncoding',
            'content' => 'getContent',
            'blobId' => 'getBlobId',
            'xTotal' => 'getXTotal'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
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
    * Gets size
    *  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets encoding
    *  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    *
    * @return string|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param string|null $encoding **参数解释：** 文件编码方式。 **约束限制：** - base64。
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
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
    * @param string|null $content **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets blobId
    *  **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getBlobId()
    {
        return $this->container['blobId'];
    }

    /**
    * Sets blobId
    *
    * @param string|null $blobId **参数解释：** bolb文件ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

