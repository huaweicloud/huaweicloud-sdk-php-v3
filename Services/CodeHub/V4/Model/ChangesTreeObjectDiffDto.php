<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangesTreeObjectDiffDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangesTreeObjectDiffDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diff  **参数解释：** 变更内容。
    * newPath  **参数解释：** 变更新路径。
    * oldPath  **参数解释：** 变更旧。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否是新文件。
    * renamedFile  **参数解释：** 是否是改名文件。
    * deletedFile  **参数解释：** 是否是删除文件。
    * tooLarge  **参数解释：** 是否内容过长。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diff' => 'string',
            'newPath' => 'string',
            'oldPath' => 'string',
            'aMode' => 'string',
            'bMode' => 'string',
            'newFile' => 'bool',
            'renamedFile' => 'bool',
            'deletedFile' => 'bool',
            'tooLarge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diff  **参数解释：** 变更内容。
    * newPath  **参数解释：** 变更新路径。
    * oldPath  **参数解释：** 变更旧。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否是新文件。
    * renamedFile  **参数解释：** 是否是改名文件。
    * deletedFile  **参数解释：** 是否是删除文件。
    * tooLarge  **参数解释：** 是否内容过长。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diff' => null,
        'newPath' => null,
        'oldPath' => null,
        'aMode' => null,
        'bMode' => null,
        'newFile' => null,
        'renamedFile' => null,
        'deletedFile' => null,
        'tooLarge' => null
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
    * diff  **参数解释：** 变更内容。
    * newPath  **参数解释：** 变更新路径。
    * oldPath  **参数解释：** 变更旧。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否是新文件。
    * renamedFile  **参数解释：** 是否是改名文件。
    * deletedFile  **参数解释：** 是否是删除文件。
    * tooLarge  **参数解释：** 是否内容过长。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diff' => 'diff',
            'newPath' => 'new_path',
            'oldPath' => 'old_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'newFile' => 'new_file',
            'renamedFile' => 'renamed_file',
            'deletedFile' => 'deleted_file',
            'tooLarge' => 'too_large'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diff  **参数解释：** 变更内容。
    * newPath  **参数解释：** 变更新路径。
    * oldPath  **参数解释：** 变更旧。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否是新文件。
    * renamedFile  **参数解释：** 是否是改名文件。
    * deletedFile  **参数解释：** 是否是删除文件。
    * tooLarge  **参数解释：** 是否内容过长。
    *
    * @var string[]
    */
    protected static $setters = [
            'diff' => 'setDiff',
            'newPath' => 'setNewPath',
            'oldPath' => 'setOldPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'newFile' => 'setNewFile',
            'renamedFile' => 'setRenamedFile',
            'deletedFile' => 'setDeletedFile',
            'tooLarge' => 'setTooLarge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diff  **参数解释：** 变更内容。
    * newPath  **参数解释：** 变更新路径。
    * oldPath  **参数解释：** 变更旧。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否是新文件。
    * renamedFile  **参数解释：** 是否是改名文件。
    * deletedFile  **参数解释：** 是否是删除文件。
    * tooLarge  **参数解释：** 是否内容过长。
    *
    * @var string[]
    */
    protected static $getters = [
            'diff' => 'getDiff',
            'newPath' => 'getNewPath',
            'oldPath' => 'getOldPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'newFile' => 'getNewFile',
            'renamedFile' => 'getRenamedFile',
            'deletedFile' => 'getDeletedFile',
            'tooLarge' => 'getTooLarge'
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
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['newPath'] = isset($data['newPath']) ? $data['newPath'] : null;
        $this->container['oldPath'] = isset($data['oldPath']) ? $data['oldPath'] : null;
        $this->container['aMode'] = isset($data['aMode']) ? $data['aMode'] : null;
        $this->container['bMode'] = isset($data['bMode']) ? $data['bMode'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['renamedFile'] = isset($data['renamedFile']) ? $data['renamedFile'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['tooLarge'] = isset($data['tooLarge']) ? $data['tooLarge'] : null;
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
    * Gets diff
    *  **参数解释：** 变更内容。
    *
    * @return string|null
    */
    public function getDiff()
    {
        return $this->container['diff'];
    }

    /**
    * Sets diff
    *
    * @param string|null $diff **参数解释：** 变更内容。
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets newPath
    *  **参数解释：** 变更新路径。
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
    * @param string|null $newPath **参数解释：** 变更新路径。
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
        return $this;
    }

    /**
    * Gets oldPath
    *  **参数解释：** 变更旧。
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
    * @param string|null $oldPath **参数解释：** 变更旧。
    *
    * @return $this
    */
    public function setOldPath($oldPath)
    {
        $this->container['oldPath'] = $oldPath;
        return $this;
    }

    /**
    * Gets aMode
    *  **参数解释：** 旧文件权限。
    *
    * @return string|null
    */
    public function getAMode()
    {
        return $this->container['aMode'];
    }

    /**
    * Sets aMode
    *
    * @param string|null $aMode **参数解释：** 旧文件权限。
    *
    * @return $this
    */
    public function setAMode($aMode)
    {
        $this->container['aMode'] = $aMode;
        return $this;
    }

    /**
    * Gets bMode
    *  **参数解释：** 新文件权限。
    *
    * @return string|null
    */
    public function getBMode()
    {
        return $this->container['bMode'];
    }

    /**
    * Sets bMode
    *
    * @param string|null $bMode **参数解释：** 新文件权限。
    *
    * @return $this
    */
    public function setBMode($bMode)
    {
        $this->container['bMode'] = $bMode;
        return $this;
    }

    /**
    * Gets newFile
    *  **参数解释：** 是否是新文件。
    *
    * @return bool|null
    */
    public function getNewFile()
    {
        return $this->container['newFile'];
    }

    /**
    * Sets newFile
    *
    * @param bool|null $newFile **参数解释：** 是否是新文件。
    *
    * @return $this
    */
    public function setNewFile($newFile)
    {
        $this->container['newFile'] = $newFile;
        return $this;
    }

    /**
    * Gets renamedFile
    *  **参数解释：** 是否是改名文件。
    *
    * @return bool|null
    */
    public function getRenamedFile()
    {
        return $this->container['renamedFile'];
    }

    /**
    * Sets renamedFile
    *
    * @param bool|null $renamedFile **参数解释：** 是否是改名文件。
    *
    * @return $this
    */
    public function setRenamedFile($renamedFile)
    {
        $this->container['renamedFile'] = $renamedFile;
        return $this;
    }

    /**
    * Gets deletedFile
    *  **参数解释：** 是否是删除文件。
    *
    * @return bool|null
    */
    public function getDeletedFile()
    {
        return $this->container['deletedFile'];
    }

    /**
    * Sets deletedFile
    *
    * @param bool|null $deletedFile **参数解释：** 是否是删除文件。
    *
    * @return $this
    */
    public function setDeletedFile($deletedFile)
    {
        $this->container['deletedFile'] = $deletedFile;
        return $this;
    }

    /**
    * Gets tooLarge
    *  **参数解释：** 是否内容过长。
    *
    * @return bool|null
    */
    public function getTooLarge()
    {
        return $this->container['tooLarge'];
    }

    /**
    * Sets tooLarge
    *
    * @param bool|null $tooLarge **参数解释：** 是否内容过长。
    *
    * @return $this
    */
    public function setTooLarge($tooLarge)
    {
        $this->container['tooLarge'] = $tooLarge;
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

