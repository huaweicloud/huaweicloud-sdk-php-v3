<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommentPathDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommentPathDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * new  **参数解释：** 位于文件对比结果右侧的检视意见集合。
    * old  **参数解释：** 位于文件对比结果左侧的检视意见集合。
    * path  **参数解释：** 文件名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'new' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LineDiscussionDto[]',
            'old' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LineDiscussionDto[]',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * new  **参数解释：** 位于文件对比结果右侧的检视意见集合。
    * old  **参数解释：** 位于文件对比结果左侧的检视意见集合。
    * path  **参数解释：** 文件名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'new' => null,
        'old' => null,
        'path' => null
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
    * new  **参数解释：** 位于文件对比结果右侧的检视意见集合。
    * old  **参数解释：** 位于文件对比结果左侧的检视意见集合。
    * path  **参数解释：** 文件名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'new' => 'new',
            'old' => 'old',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * new  **参数解释：** 位于文件对比结果右侧的检视意见集合。
    * old  **参数解释：** 位于文件对比结果左侧的检视意见集合。
    * path  **参数解释：** 文件名。
    *
    * @var string[]
    */
    protected static $setters = [
            'new' => 'setNew',
            'old' => 'setOld',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * new  **参数解释：** 位于文件对比结果右侧的检视意见集合。
    * old  **参数解释：** 位于文件对比结果左侧的检视意见集合。
    * path  **参数解释：** 文件名。
    *
    * @var string[]
    */
    protected static $getters = [
            'new' => 'getNew',
            'old' => 'getOld',
            'path' => 'getPath'
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
        $this->container['new'] = isset($data['new']) ? $data['new'] : null;
        $this->container['old'] = isset($data['old']) ? $data['old'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
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
    * Gets new
    *  **参数解释：** 位于文件对比结果右侧的检视意见集合。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LineDiscussionDto[]|null
    */
    public function getNew()
    {
        return $this->container['new'];
    }

    /**
    * Sets new
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LineDiscussionDto[]|null $new **参数解释：** 位于文件对比结果右侧的检视意见集合。
    *
    * @return $this
    */
    public function setNew($new)
    {
        $this->container['new'] = $new;
        return $this;
    }

    /**
    * Gets old
    *  **参数解释：** 位于文件对比结果左侧的检视意见集合。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LineDiscussionDto[]|null
    */
    public function getOld()
    {
        return $this->container['old'];
    }

    /**
    * Sets old
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\LineDiscussionDto[]|null $old **参数解释：** 位于文件对比结果左侧的检视意见集合。
    *
    * @return $this
    */
    public function setOld($old)
    {
        $this->container['old'] = $old;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 文件名。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 文件名。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

