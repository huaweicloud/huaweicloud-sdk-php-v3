<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileDiffDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileDiffDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldPath  **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * newPath  **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
    * renamedFile  **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
    * deletedFile  **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
    * diff  **参数解释：** 差异信息。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldPath' => 'string',
            'newPath' => 'object',
            'aMode' => 'string',
            'bMode' => 'string',
            'newFile' => 'bool',
            'renamedFile' => 'bool',
            'deletedFile' => 'bool',
            'diff' => 'string',
            'tooLarge' => 'bool',
            'addedLines' => 'int',
            'removedLines' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldPath  **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * newPath  **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
    * renamedFile  **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
    * deletedFile  **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
    * diff  **参数解释：** 差异信息。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldPath' => null,
        'newPath' => null,
        'aMode' => null,
        'bMode' => null,
        'newFile' => null,
        'renamedFile' => null,
        'deletedFile' => null,
        'diff' => null,
        'tooLarge' => null,
        'addedLines' => 'int32',
        'removedLines' => 'int32'
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
    * oldPath  **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * newPath  **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
    * renamedFile  **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
    * deletedFile  **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
    * diff  **参数解释：** 差异信息。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'newFile' => 'new_file',
            'renamedFile' => 'renamed_file',
            'deletedFile' => 'deleted_file',
            'diff' => 'diff',
            'tooLarge' => 'too_large',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldPath  **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * newPath  **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
    * renamedFile  **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
    * deletedFile  **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
    * diff  **参数解释：** 差异信息。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    *
    * @var string[]
    */
    protected static $setters = [
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'newFile' => 'setNewFile',
            'renamedFile' => 'setRenamedFile',
            'deletedFile' => 'setDeletedFile',
            'diff' => 'setDiff',
            'tooLarge' => 'setTooLarge',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldPath  **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * newPath  **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    * aMode  **参数解释：** 旧文件权限。
    * bMode  **参数解释：** 新文件权限。
    * newFile  **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
    * renamedFile  **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
    * deletedFile  **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
    * diff  **参数解释：** 差异信息。
    * tooLarge  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    * addedLines  **参数解释：** 增加行数。
    * removedLines  **参数解释：** 删除行数。
    *
    * @var string[]
    */
    protected static $getters = [
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'newFile' => 'getNewFile',
            'renamedFile' => 'getRenamedFile',
            'deletedFile' => 'getDeletedFile',
            'diff' => 'getDiff',
            'tooLarge' => 'getTooLarge',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines'
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
        $this->container['aMode'] = isset($data['aMode']) ? $data['aMode'] : null;
        $this->container['bMode'] = isset($data['bMode']) ? $data['bMode'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['renamedFile'] = isset($data['renamedFile']) ? $data['renamedFile'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['tooLarge'] = isset($data['tooLarge']) ? $data['tooLarge'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['oldPath']) && (mb_strlen($this->container['oldPath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'oldPath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['oldPath']) && (mb_strlen($this->container['oldPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'oldPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be bigger than or equal to 0.";
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
    *  **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
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
    * @param string|null $oldPath **参数解释：** 旧文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
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
    *  **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    *
    * @return object|null
    */
    public function getNewPath()
    {
        return $this->container['newPath'];
    }

    /**
    * Sets newPath
    *
    * @param object|null $newPath **参数解释：** 新文件名称。 **取值范围：** 字符串长度不少于1，不超过10000。
    *
    * @return $this
    */
    public function setNewPath($newPath)
    {
        $this->container['newPath'] = $newPath;
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
    *  **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
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
    * @param bool|null $newFile **参数解释：** 是否为新文件。 **取值范围：** - true，新文件。 - false，非新文件
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
    *  **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
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
    * @param bool|null $renamedFile **参数解释：** 是否为重命名文件。 **取值范围：** - true，重命名文件。 - false，非重命名文件
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
    *  **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
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
    * @param bool|null $deletedFile **参数解释：** 是否为被删除文件。 **取值范围：** - true，被删除文件。 - false，非被删除文件
    *
    * @return $this
    */
    public function setDeletedFile($deletedFile)
    {
        $this->container['deletedFile'] = $deletedFile;
        return $this;
    }

    /**
    * Gets diff
    *  **参数解释：** 差异信息。
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
    * @param string|null $diff **参数解释：** 差异信息。
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets tooLarge
    *  **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
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
    * @param bool|null $tooLarge **参数解释：** 是否为大文件。 **取值范围：** - true，大文件。 - false，非大文件
    *
    * @return $this
    */
    public function setTooLarge($tooLarge)
    {
        $this->container['tooLarge'] = $tooLarge;
        return $this;
    }

    /**
    * Gets addedLines
    *  **参数解释：** 增加行数。
    *
    * @return int|null
    */
    public function getAddedLines()
    {
        return $this->container['addedLines'];
    }

    /**
    * Sets addedLines
    *
    * @param int|null $addedLines **参数解释：** 增加行数。
    *
    * @return $this
    */
    public function setAddedLines($addedLines)
    {
        $this->container['addedLines'] = $addedLines;
        return $this;
    }

    /**
    * Gets removedLines
    *  **参数解释：** 删除行数。
    *
    * @return int|null
    */
    public function getRemovedLines()
    {
        return $this->container['removedLines'];
    }

    /**
    * Sets removedLines
    *
    * @param int|null $removedLines **参数解释：** 删除行数。
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
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

