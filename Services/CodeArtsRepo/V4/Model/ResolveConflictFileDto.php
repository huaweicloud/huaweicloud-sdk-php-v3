<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResolveConflictFileDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResolveConflictFileDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldPath  **参数解释：** 旧文件路径
    * newPath  **参数解释：** 新文件路径
    * sections  **参数解释：** 只有选择接受不同分支选项的时候才需要
    * content  **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldPath' => 'string',
            'newPath' => 'string',
            'sections' => 'object',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldPath  **参数解释：** 旧文件路径
    * newPath  **参数解释：** 新文件路径
    * sections  **参数解释：** 只有选择接受不同分支选项的时候才需要
    * content  **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldPath' => null,
        'newPath' => null,
        'sections' => null,
        'content' => null
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
    * oldPath  **参数解释：** 旧文件路径
    * newPath  **参数解释：** 新文件路径
    * sections  **参数解释：** 只有选择接受不同分支选项的时候才需要
    * content  **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'sections' => 'sections',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldPath  **参数解释：** 旧文件路径
    * newPath  **参数解释：** 新文件路径
    * sections  **参数解释：** 只有选择接受不同分支选项的时候才需要
    * content  **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
    *
    * @var string[]
    */
    protected static $setters = [
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'sections' => 'setSections',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldPath  **参数解释：** 旧文件路径
    * newPath  **参数解释：** 新文件路径
    * sections  **参数解释：** 只有选择接受不同分支选项的时候才需要
    * content  **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
    *
    * @var string[]
    */
    protected static $getters = [
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'sections' => 'getSections',
            'content' => 'getContent'
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
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
        $this->container['sections'] = isset($data['sections']) ? $data['sections'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['oldPath'] === null) {
            $invalidProperties[] = "'oldPath' can't be null";
        }
        if ($this->container['newPath'] === null) {
            $invalidProperties[] = "'newPath' can't be null";
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
    * Gets oldPath
    *  **参数解释：** 旧文件路径
    *
    * @return string
    */
    public function getOldPath()
    {
        return $this->container['oldPath'];
    }

    /**
    * Sets oldPath
    *
    * @param string $oldPath **参数解释：** 旧文件路径
    *
    * @return $this
    */
    public function setOldPath($oldPath)
    {
        $this->container['oldPath'] = $oldPath;
        return $this;
    }

    /**
    * Gets newPath
    *  **参数解释：** 新文件路径
    *
    * @return string
    */
    public function getNewPath()
    {
        return $this->container['newPath'];
    }

    /**
    * Sets newPath
    *
    * @param string $newPath **参数解释：** 新文件路径
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
        return $this;
    }

    /**
    * Gets sections
    *  **参数解释：** 只有选择接受不同分支选项的时候才需要
    *
    * @return object|null
    */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
    * Sets sections
    *
    * @param object|null $sections **参数解释：** 只有选择接受不同分支选项的时候才需要
    *
    * @return $this
    */
    public function setSections($sections)
    {
        $this->container['sections'] = $sections;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
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
    * @param string|null $content **参数解释：** 只有在线编辑冲突文件的时候才需要，内容即为文件内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

