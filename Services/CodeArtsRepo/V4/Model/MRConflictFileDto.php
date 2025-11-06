<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MRConflictFileDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MRConflictFileDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldPath  **参数解释：** 旧文件名称。
    * newPath  **参数解释：** 新文件名称。
    * blobIcon  blob_icon
    * blobPath  blob 路径
    * conflictType  冲突类型
    * content  内容
    * contentPath  内容路径
    * sections  片段
    * type  类型
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldPath' => 'string',
            'newPath' => 'string',
            'blobIcon' => 'string',
            'blobPath' => 'string',
            'conflictType' => 'string',
            'content' => 'string',
            'contentPath' => 'string',
            'sections' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictSectionDto[]',
            'type' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldPath  **参数解释：** 旧文件名称。
    * newPath  **参数解释：** 新文件名称。
    * blobIcon  blob_icon
    * blobPath  blob 路径
    * conflictType  冲突类型
    * content  内容
    * contentPath  内容路径
    * sections  片段
    * type  类型
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldPath' => null,
        'newPath' => null,
        'blobIcon' => null,
        'blobPath' => null,
        'conflictType' => null,
        'content' => null,
        'contentPath' => null,
        'sections' => null,
        'type' => null,
        'errorMessage' => null
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
    * oldPath  **参数解释：** 旧文件名称。
    * newPath  **参数解释：** 新文件名称。
    * blobIcon  blob_icon
    * blobPath  blob 路径
    * conflictType  冲突类型
    * content  内容
    * contentPath  内容路径
    * sections  片段
    * type  类型
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'blobIcon' => 'blob_icon',
            'blobPath' => 'blob_path',
            'conflictType' => 'conflict_type',
            'content' => 'content',
            'contentPath' => 'content_path',
            'sections' => 'sections',
            'type' => 'type',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldPath  **参数解释：** 旧文件名称。
    * newPath  **参数解释：** 新文件名称。
    * blobIcon  blob_icon
    * blobPath  blob 路径
    * conflictType  冲突类型
    * content  内容
    * contentPath  内容路径
    * sections  片段
    * type  类型
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'blobIcon' => 'setBlobIcon',
            'blobPath' => 'setBlobPath',
            'conflictType' => 'setConflictType',
            'content' => 'setContent',
            'contentPath' => 'setContentPath',
            'sections' => 'setSections',
            'type' => 'setType',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldPath  **参数解释：** 旧文件名称。
    * newPath  **参数解释：** 新文件名称。
    * blobIcon  blob_icon
    * blobPath  blob 路径
    * conflictType  冲突类型
    * content  内容
    * contentPath  内容路径
    * sections  片段
    * type  类型
    * errorMessage  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'blobIcon' => 'getBlobIcon',
            'blobPath' => 'getBlobPath',
            'conflictType' => 'getConflictType',
            'content' => 'getContent',
            'contentPath' => 'getContentPath',
            'sections' => 'getSections',
            'type' => 'getType',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['blobIcon'] = isset($data['blobIcon']) ? $data['blobIcon'] : null;
        $this->container['blobPath'] = isset($data['blobPath']) ? $data['blobPath'] : null;
        $this->container['conflictType'] = isset($data['conflictType']) ? $data['conflictType'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['contentPath'] = isset($data['contentPath']) ? $data['contentPath'] : null;
        $this->container['sections'] = isset($data['sections']) ? $data['sections'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets oldPath
    *  **参数解释：** 旧文件名称。
    *
    * @return string|null
    */
    public function getOldPath()
    {
        return $this->container['oldPath'];
    }

    /**
    * Sets oldPath
    *
    * @param string|null $oldPath **参数解释：** 旧文件名称。
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
    *  **参数解释：** 新文件名称。
    *
    * @return string|null
    */
    public function getNewPath()
    {
        return $this->container['newPath'];
    }

    /**
    * Sets newPath
    *
    * @param string|null $newPath **参数解释：** 新文件名称。
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
        return $this;
    }

    /**
    * Gets blobIcon
    *  blob_icon
    *
    * @return string|null
    */
    public function getBlobIcon()
    {
        return $this->container['blobIcon'];
    }

    /**
    * Sets blobIcon
    *
    * @param string|null $blobIcon blob_icon
    *
    * @return $this
    */
    public function setBlobIcon($blobIcon)
    {
        $this->container['blobIcon'] = $blobIcon;
        return $this;
    }

    /**
    * Gets blobPath
    *  blob 路径
    *
    * @return string|null
    */
    public function getBlobPath()
    {
        return $this->container['blobPath'];
    }

    /**
    * Sets blobPath
    *
    * @param string|null $blobPath blob 路径
    *
    * @return $this
    */
    public function setBlobPath($blobPath)
    {
        $this->container['blobPath'] = $blobPath;
        return $this;
    }

    /**
    * Gets conflictType
    *  冲突类型
    *
    * @return string|null
    */
    public function getConflictType()
    {
        return $this->container['conflictType'];
    }

    /**
    * Sets conflictType
    *
    * @param string|null $conflictType 冲突类型
    *
    * @return $this
    */
    public function setConflictType($conflictType)
    {
        $this->container['conflictType'] = $conflictType;
        return $this;
    }

    /**
    * Gets content
    *  内容
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
    * @param string|null $content 内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets contentPath
    *  内容路径
    *
    * @return string|null
    */
    public function getContentPath()
    {
        return $this->container['contentPath'];
    }

    /**
    * Sets contentPath
    *
    * @param string|null $contentPath 内容路径
    *
    * @return $this
    */
    public function setContentPath($contentPath)
    {
        $this->container['contentPath'] = $contentPath;
        return $this;
    }

    /**
    * Gets sections
    *  片段
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictSectionDto[]|null
    */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
    * Sets sections
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ConflictSectionDto[]|null $sections 片段
    *
    * @return $this
    */
    public function setSections($sections)
    {
        $this->container['sections'] = $sections;
        return $this;
    }

    /**
    * Gets type
    *  类型
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
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

