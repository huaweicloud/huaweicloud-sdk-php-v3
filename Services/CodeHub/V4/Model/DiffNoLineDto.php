<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiffNoLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiffNoLineDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldPath  旧文件
    * newPath  新文件
    * aMode  旧文件类型
    * bMode  新文件类型
    * filePath  文件路径
    * newFile  是否新增
    * fileType  文件类型
    * renamedFile  是否重命名
    * deletedFile  是否删除文件
    * diff  比较结果
    * binary  是否二进制
    * tooLarge  是否过大
    * collapsed  是否折叠
    * addedLines  增加行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldPath' => 'string',
            'newPath' => 'string',
            'aMode' => 'string',
            'bMode' => 'string',
            'filePath' => 'string',
            'newFile' => 'bool',
            'fileType' => 'string',
            'renamedFile' => 'bool',
            'deletedFile' => 'bool',
            'diff' => 'string',
            'binary' => 'bool',
            'tooLarge' => 'bool',
            'collapsed' => 'bool',
            'addedLines' => 'int',
            'removedLines' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldPath  旧文件
    * newPath  新文件
    * aMode  旧文件类型
    * bMode  新文件类型
    * filePath  文件路径
    * newFile  是否新增
    * fileType  文件类型
    * renamedFile  是否重命名
    * deletedFile  是否删除文件
    * diff  比较结果
    * binary  是否二进制
    * tooLarge  是否过大
    * collapsed  是否折叠
    * addedLines  增加行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldPath' => null,
        'newPath' => null,
        'aMode' => null,
        'bMode' => null,
        'filePath' => null,
        'newFile' => null,
        'fileType' => null,
        'renamedFile' => null,
        'deletedFile' => null,
        'diff' => null,
        'binary' => null,
        'tooLarge' => null,
        'collapsed' => null,
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
    * oldPath  旧文件
    * newPath  新文件
    * aMode  旧文件类型
    * bMode  新文件类型
    * filePath  文件路径
    * newFile  是否新增
    * fileType  文件类型
    * renamedFile  是否重命名
    * deletedFile  是否删除文件
    * diff  比较结果
    * binary  是否二进制
    * tooLarge  是否过大
    * collapsed  是否折叠
    * addedLines  增加行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldPath' => 'old_path',
            'newPath' => 'new_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'filePath' => 'file_path',
            'newFile' => 'new_file',
            'fileType' => 'file_type',
            'renamedFile' => 'renamed_file',
            'deletedFile' => 'deleted_file',
            'diff' => 'diff',
            'binary' => 'binary',
            'tooLarge' => 'too_large',
            'collapsed' => 'collapsed',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldPath  旧文件
    * newPath  新文件
    * aMode  旧文件类型
    * bMode  新文件类型
    * filePath  文件路径
    * newFile  是否新增
    * fileType  文件类型
    * renamedFile  是否重命名
    * deletedFile  是否删除文件
    * diff  比较结果
    * binary  是否二进制
    * tooLarge  是否过大
    * collapsed  是否折叠
    * addedLines  增加行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $setters = [
            'oldPath' => 'setOldPath',
            'newPath' => 'setNewPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'filePath' => 'setFilePath',
            'newFile' => 'setNewFile',
            'fileType' => 'setFileType',
            'renamedFile' => 'setRenamedFile',
            'deletedFile' => 'setDeletedFile',
            'diff' => 'setDiff',
            'binary' => 'setBinary',
            'tooLarge' => 'setTooLarge',
            'collapsed' => 'setCollapsed',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldPath  旧文件
    * newPath  新文件
    * aMode  旧文件类型
    * bMode  新文件类型
    * filePath  文件路径
    * newFile  是否新增
    * fileType  文件类型
    * renamedFile  是否重命名
    * deletedFile  是否删除文件
    * diff  比较结果
    * binary  是否二进制
    * tooLarge  是否过大
    * collapsed  是否折叠
    * addedLines  增加行数
    * removedLines  删除行数
    *
    * @var string[]
    */
    protected static $getters = [
            'oldPath' => 'getOldPath',
            'newPath' => 'getNewPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'filePath' => 'getFilePath',
            'newFile' => 'getNewFile',
            'fileType' => 'getFileType',
            'renamedFile' => 'getRenamedFile',
            'deletedFile' => 'getDeletedFile',
            'diff' => 'getDiff',
            'binary' => 'getBinary',
            'tooLarge' => 'getTooLarge',
            'collapsed' => 'getCollapsed',
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['renamedFile'] = isset($data['renamedFile']) ? $data['renamedFile'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['binary'] = isset($data['binary']) ? $data['binary'] : null;
        $this->container['tooLarge'] = isset($data['tooLarge']) ? $data['tooLarge'] : null;
        $this->container['collapsed'] = isset($data['collapsed']) ? $data['collapsed'] : null;
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
            if (!is_null($this->container['newPath']) && (mb_strlen($this->container['newPath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'newPath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['newPath']) && (mb_strlen($this->container['newPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'newPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aMode']) && (mb_strlen($this->container['aMode']) > 100000)) {
                $invalidProperties[] = "invalid value for 'aMode', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['aMode']) && (mb_strlen($this->container['aMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'aMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bMode']) && (mb_strlen($this->container['bMode']) > 100000)) {
                $invalidProperties[] = "invalid value for 'bMode', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['bMode']) && (mb_strlen($this->container['bMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'bMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diff']) && (mb_strlen($this->container['diff']) > 1000)) {
                $invalidProperties[] = "invalid value for 'diff', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['diff']) && (mb_strlen($this->container['diff']) < 1)) {
                $invalidProperties[] = "invalid value for 'diff', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] < 1)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] < 1)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be bigger than or equal to 1.";
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
    *  旧文件
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
    * @param string|null $oldPath 旧文件
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
    *  新文件
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
    * @param string|null $newPath 新文件
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
    *  旧文件类型
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
    * @param string|null $aMode 旧文件类型
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
    *  新文件类型
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
    * @param string|null $bMode 新文件类型
    *
    * @return $this
    */
    public function setBMode($bMode)
    {
        $this->container['bMode'] = $bMode;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets newFile
    *  是否新增
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
    * @param bool|null $newFile 是否新增
    *
    * @return $this
    */
    public function setNewFile($newFile)
    {
        $this->container['newFile'] = $newFile;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型
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
    * @param string|null $fileType 文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets renamedFile
    *  是否重命名
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
    * @param bool|null $renamedFile 是否重命名
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
    *  是否删除文件
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
    * @param bool|null $deletedFile 是否删除文件
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
    *  比较结果
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
    * @param string|null $diff 比较结果
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets binary
    *  是否二进制
    *
    * @return bool|null
    */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
    * Sets binary
    *
    * @param bool|null $binary 是否二进制
    *
    * @return $this
    */
    public function setBinary($binary)
    {
        $this->container['binary'] = $binary;
        return $this;
    }

    /**
    * Gets tooLarge
    *  是否过大
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
    * @param bool|null $tooLarge 是否过大
    *
    * @return $this
    */
    public function setTooLarge($tooLarge)
    {
        $this->container['tooLarge'] = $tooLarge;
        return $this;
    }

    /**
    * Gets collapsed
    *  是否折叠
    *
    * @return bool|null
    */
    public function getCollapsed()
    {
        return $this->container['collapsed'];
    }

    /**
    * Sets collapsed
    *
    * @param bool|null $collapsed 是否折叠
    *
    * @return $this
    */
    public function setCollapsed($collapsed)
    {
        $this->container['collapsed'] = $collapsed;
        return $this;
    }

    /**
    * Gets addedLines
    *  增加行数
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
    * @param int|null $addedLines 增加行数
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
    *  删除行数
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
    * @param int|null $removedLines 删除行数
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

